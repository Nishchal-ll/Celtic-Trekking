<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the landing page.
     */
    public function index(): View
    {
        // Hero Slider Data
        $heroSlides = [
            [
                'image' => asset('images/trekking-nepal.jpg'),
                'title' => 'Maroc',
                'subtitle' => "Des hautes vallées de l'Atlas aux paysages somptueux du pays Berbère",
                'link' => route('trekking.maroc'),
                'button_text' => 'En savoir plus',
            ],
            [
                'image' => asset('images/trekking-nepal-hero-2.jpg'),
                'title' => 'Manaslu',
                'subtitle' => 'Sportifs, Osez faire le tour du 8e sommet du monde',
                'link' => route('trekking.nepal'),
                'button_text' => 'En savoir plus',
            ],
            [
                'image' => asset('images/trekking-nepal-hero-3.jpg'),
                'title' => 'Mustang',
                'subtitle' => 'Canyons et déserts incroyables sont les remparts du royaume le plus préservé de la planète',
                'link' => route('trekking.nepal'),
                'button_text' => 'En savoir plus',
            ],
            [
                'image' => asset('images/trekking-tibet.jpg'),
                'title' => 'Pokhara',
                'subtitle' => 'Dépaysement total à quelques pas de la capitale Népalaise',
                'link' => route('trekking.nepal'),
                'button_text' => 'En savoir plus',
            ],
            [
                'image' => asset('images/trekking-nepal-hero-5.jpg'),
                'title' => 'Faites face à l\'Everest',
                'subtitle' => 'De Namche Bazar, dernière ville avant l\'Everest, aux camps de base',
                'link' => route('trekking.nepal'),
                'button_text' => 'En savoir plus',
            ],
            [
                'image' => asset('images/trekking-roumanie.jpg'),
                'title' => 'Roumanie',
                'subtitle' => 'Une destination aux paysages variés et somptueux injustement méconnue',
                'link' => route('trekking.roumanie'),
                'button_text' => 'En savoir plus',
            ],
        ];

        // Destinations Carousel Data
        $destinations = [
            [
                'name' => 'Maroc',
                'description' => "Des hautes vallées de l'Atlas aux paysages somptueux du pays Berbère",
                'image' => asset('images/trekking-maroc.jpg'),
                'link' => route('trekking.maroc'),
            ],
            [
                'name' => 'Chitwan',
                'description' => 'Découvrez le plus vieux parc national du Népal',
                'image' => asset('images/trekking-chitwan.jpg'),
                'link' => route('trekking.nepal'),
            ],
            [
                'name' => 'Manaslu',
                'description' => 'Sportifs, Osez faire le tour du 8e sommet du monde',
                'image' => asset('images/trekking-manaslu.jpg'),
                'link' => route('trekking.nepal'),
            ],
            [
                'name' => 'Mustang',
                'description' => 'Canyons et déserts incroyables sont les remparts du royaume le plus préservé de la planète',
                'image' => asset('images/trekking-mustang.jpg'),
                'link' => route('trekking.nepal'),
            ],
            [
                'name' => 'Pokhara',
                'description' => 'Dépaysement total à quelques pas de la capitale Népalaise',
                'image' => asset('images/trekking-pokhara.jpg'),
                'link' => route('trekking.nepal'),
            ],
            [
                'name' => 'Everest',
                'description' => 'De Namche Bazar, dernière ville avant l\'Everest, aux camps de base',
                'image' => asset('images/trekking-everest.jpg'),
                'link' => route('trekking.nepal'),
            ],
        ];

        // Testimonials Data
        $testimonials = [
            [
                'quote' => 'Un séjour fantastique, une organisation bien pensée, en toute discrétion.',
                'author' => 'PHILIPPE LEMARECHAL',
            ],
            [
                'quote' => "Des guides d'un grand professionnalisme et d'une attention de tous les instants.",
                'author' => 'MARIE JADIS',
            ],
            [
                'quote' => 'Le Népal et les Népalais nous ont charmés, nous en gardons de très bons souvenirs.',
                'author' => 'MICHEL BILLON',
            ],
            [
                'quote' => 'Parfaitement organisé, nous avons ainsi profité au maximum de notre voyage!',
                'author' => 'GEORGES & MICHELE',
            ],
        ];

        return view('home', compact('heroSlides', 'destinations', 'testimonials'));
    }
}
