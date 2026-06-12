<?php

namespace App\Filament\Pages;

use App\Models\Destination;
use App\Models\Slide;
use App\Models\Testimonial;
use App\Models\Trek;
use BackedEnum;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Html;
use Filament\Forms\Form;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationLabel = 'Dashboard';
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-home';
    protected static ?int $navigationSort = -2;

    public function schema(Form $form): Form
    {
        $destinationCount = Destination::count();
        $slideCount = Slide::count();
        $testimonialCount = Testimonial::where('is_approved', true)->count();
        $trekTypes = Destination::orderBy('continent')
            ->pluck('continent')
            ->filter()
            ->unique()
            ->values()
            ->all();
        $trekTypeCount = count($trekTypes);
        $trekTypeList = $trekTypes ? implode(', ', $trekTypes) : 'General';

        return $form
            ->schema([
                Grid::make(2)
                    ->schema([
                        Html::make('destinations_card')
                            ->content(sprintf(<<<'HTML'
<div style="padding:1.5rem;border-radius:1rem;background:linear-gradient(135deg,#1d4ed8,#3b82f6);color:white;box-shadow:0 20px 40px rgba(15,23,42,.15);">
  <div style="display:flex;justify-content:space-between;align-items:center;gap:1rem;">
    <div>
      <p style="margin:0;font-size:.9rem;opacity:.85;letter-spacing:.08em;text-transform:uppercase;">Destinations</p>
      <h2 style="margin:.5rem 0 0;font-size:3rem;line-height:1;">%s</h2>
    </div>
    <span style="font-size:2.25rem;">🗺️</span>
  </div>
  <p style="margin-top:1rem;font-size:.95rem;opacity:.9;">Current live destinations available for booking.</p>
</div>
HTML
                            , $destinationCount)),

                        Html::make('slides_card')
                            ->content(sprintf(<<<'HTML'
<div style="padding:1.5rem;border-radius:1rem;background:linear-gradient(135deg,#9333ea,#8b5cf6);color:white;box-shadow:0 20px 40px rgba(15,23,42,.15);">
  <div style="display:flex;justify-content:space-between;align-items:center;gap:1rem;">
    <div>
      <p style="margin:0;font-size:.9rem;opacity:.85;letter-spacing:.08em;text-transform:uppercase;">Hero Slides</p>
      <h2 style="margin:.5rem 0 0;font-size:3rem;line-height:1;">%s</h2>
    </div>
    <span style="font-size:2.25rem;">🎞️</span>
  </div>
  <p style="margin-top:1rem;font-size:.95rem;opacity:.9;">Slides currently used in the homepage hero carousel.</p>
</div>
HTML
                            , $slideCount)),

                        Html::make('testimonials_card')
                            ->content(sprintf(<<<'HTML'
<div style="padding:1.5rem;border-radius:1rem;background:linear-gradient(135deg,#047857,#10b981);color:white;box-shadow:0 20px 40px rgba(15,23,42,.15);">
  <div style="display:flex;justify-content:space-between;align-items:center;gap:1rem;">
    <div>
      <p style="margin:0;font-size:.9rem;opacity:.85;letter-spacing:.08em;text-transform:uppercase;">Approved Testimonials</p>
      <h2 style="margin:.5rem 0 0;font-size:3rem;line-height:1;">%s</h2>
    </div>
    <span style="font-size:2.25rem;">💬</span>
  </div>
  <p style="margin-top:1rem;font-size:.95rem;opacity:.9;">Real traveler feedback currently visible on the frontend.</p>
</div>
HTML
                            , $testimonialCount)),

                        Html::make('trek_types_card')
                            ->content(sprintf(<<<'HTML'
<div style="padding:1.5rem;border-radius:1rem;background:linear-gradient(135deg,#f97316,#facc15);color:#0f172a;box-shadow:0 20px 40px rgba(15,23,42,.12);">
  <div style="display:flex;justify-content:space-between;align-items:center;gap:1rem;">
    <div>
      <p style="margin:0;font-size:.9rem;opacity:.85;letter-spacing:.08em;text-transform:uppercase;">Trekking Types</p>
      <h2 style="margin:.5rem 0 0;font-size:3rem;line-height:1;">%s</h2>
    </div>
    <span style="font-size:2.25rem;">🧭</span>
  </div>
  <p style="margin-top:1rem;font-size:.95rem;opacity:.9;">%s</p>
</div>
HTML
                            , $trekTypeCount, $trekTypeList)),
                    ]),
            ]);
    }
}