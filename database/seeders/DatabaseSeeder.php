<?php

namespace Database\Seeders;

use App\Models\Destination;
use App\Models\FooterLink;
use App\Models\MenuItem;
use App\Models\Setting;
use App\Models\Slide;
use App\Models\TermsCondition;
use App\Models\Testimonial;
use App\Models\Trek;
use App\Models\User;
use App\Models\AgencyPage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed Destinations
        $destinations = [
            [
                'name' => 'Tibet',
                'slug' => 'tibet',
                'short_description' => 'Explore the roof of the world with its ancient monasteries and breathtaking landscapes.',
                'description' => 'Tibet, often called the "Roof of the World", offers some of the most spectacular trekking experiences on Earth. Walk in the footsteps of ancient pilgrims, visit sacred monasteries, and experience the unique Tibetan Buddhist culture. Our treks take you through remote valleys, past turquoise lakes, and offer stunning views of the Himalayan peaks.',
                'country' => 'China',
                'continent' => 'Asia',
                'image' => 'destinations/tibet.jpg',
                'banner_image' => 'destinations/tibet-banner.jpg',
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'name' => 'Nepal',
                'slug' => 'nepal',
                'short_description' => 'Home to eight of the world\'s highest peaks, including Everest.',
                'description' => 'Nepal is the ultimate trekking destination. From the legendary Everest Base Camp to the stunning Annapurna Circuit, Nepal offers treks for all levels. Experience the warmth of Nepali hospitality in traditional teahouses, witness ancient Hindu and Buddhist traditions, and be amazed by some of the most spectacular mountain scenery on the planet.',
                'country' => 'Nepal',
                'continent' => 'Asia',
                'image' => 'destinations/nepal.jpg',
                'banner_image' => 'destinations/nepal-banner.jpg',
                'is_featured' => true,
                'order' => 2,
            ],
            [
                'name' => 'Maroc',
                'slug' => 'maroc',
                'short_description' => 'Trek through the Atlas Mountains and experience Berber culture.',
                'description' => 'Morocco offers a unique trekking experience where ancient Berber culture meets stunning mountain landscapes. Trek through the High Atlas Mountains, stay in traditional gites, and experience the legendary Moroccan hospitality. From the snow-capped peaks of Toubkal to the red valleys of the Anti-Atlas, Morocco is a trekker\'s paradise.',
                'country' => 'Morocco',
                'continent' => 'Africa',
                'image' => 'destinations/morocco.jpg',
                'banner_image' => 'destinations/morocco-banner.jpg',
                'is_featured' => true,
                'order' => 3,
            ],
            [
                'name' => 'Roumanie',
                'slug' => 'roumanie',
                'short_description' => 'Discover the wild Carpathian Mountains and Transylvania\'s hidden treasures.',
                'description' => 'Romania\'s Carpathian Mountains offer some of Europe\'s last true wilderness areas. Trek through pristine forests where bears and wolves still roam, discover medieval fortified churches, and explore the legendary region of Transylvania. Our treks combine natural beauty with rich cultural heritage and authentic rural experiences.',
                'country' => 'Romania',
                'continent' => 'Europe',
                'image' => 'destinations/romania.jpg',
                'banner_image' => 'destinations/romania-banner.jpg',
                'is_featured' => true,
                'order' => 4,
            ],
        ];

        foreach ($destinations as $destination) {
            Destination::create($destination);
        }

        // Seed Slides
        $slides = [
            [
                'title' => 'Discover the World on Foot',
                'subtitle' => 'Authentic trekking experiences in the most beautiful regions of the world',
                'image' => 'slides/hero-nepal.jpg',
                'link' => '/trekking',
                'button_text' => 'Explore Our Treks',
                'is_active' => true,
                'order' => 1,
            ],
            [
                'title' => 'Tibet - The Roof of the World',
                'subtitle' => 'Ancient monasteries, sacred peaks, and timeless traditions',
                'image' => 'slides/hero-tibet.jpg',
                'link' => '/trekking/tibet',
                'button_text' => 'Discover Tibet',
                'is_active' => true,
                'order' => 2,
            ],
            [
                'title' => 'Morocco - Atlas Adventures',
                'subtitle' => 'Trek through Berber villages and stunning mountain landscapes',
                'image' => 'slides/hero-morocco.jpg',
                'link' => '/trekking/maroc',
                'button_text' => 'Explore Morocco',
                'is_active' => true,
                'order' => 3,
            ],
        ];

        foreach ($slides as $slide) {
            Slide::create($slide);
        }

        // Seed Settings
        $settings = [
            'site_name' => 'Celtic Trekking',
            'logo' => 'logo/settings-logo.png',
            'address' => 'GPO Box: 11661, 7 Corner Street, Thamel',
            'address_line_2' => 'Kathmandu, Nepal',
            'phone' => '+977-1-4701205',
            'email' => 'contact@celtictrekking.com',
            'uddhav_phone' => '9841 78 67 78',
            'krishna_phone' => '9841 41 31 67',
            'facebook_url' => 'https://www.facebook.com/celtictrekking',
            'instagram_url' => 'https://www.instagram.com/celtictrekking',
            'twitter_url' => 'https://twitter.com/celtictrekking',
            'youtube_url' => 'https://www.youtube.com/c/CelticTrekking',
            'map_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.718788815331!2d85.31027391504348!3d27.712258082808938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190f27b3ea8f%3A0xf4f9794a34bc3b6a!2sThamel%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1718529371081!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'opening_time' => '08:00',
            'closing_time' => '18:00',
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        // Seed Menu Items
        $menuItems = [
            ['label' => 'Home', 'url' => route('home'), 'open_in_new_tab' => false, 'order' => 1],
            ['label' => 'Trekking', 'url' => route('trekking.index'), 'open_in_new_tab' => false, 'order' => 2],
            ['label' => 'Fixed Departures', 'url' => route('fixed-departures'), 'open_in_new_tab' => false, 'order' => 3],
            ['label' => 'Celtic Agency', 'url' => route('agency'), 'open_in_new_tab' => false, 'order' => 4],
            ['label' => 'Testimonials', 'url' => route('testimony'), 'open_in_new_tab' => false, 'order' => 5],
            ['label' => 'Contact', 'url' => route('contact'), 'open_in_new_tab' => false, 'order' => 6],
        ];

        foreach ($menuItems as $menuItem) {
            MenuItem::firstOrCreate(
                ['label' => $menuItem['label']],
                $menuItem
            );
        }

        // Seed Agency Page
        AgencyPage::updateOrCreate(
            ['title' => 'The Celtic Trekking Agency'],
            [
                'title' => 'The Celtic Trekking Agency',
                'intro_content' => <<<'HTML'
<p><strong>Our great adventure began in 1992</strong> when Olivier Kerviel married Sarita and moved to Nepal. This is where the Celtic Trekking agency was born. Was there a better place than Nepal to embark on treks and hiking? Our team has grown over the years and today there are around twenty people who give the best of ourselves to advise you and support you the most beautiful hikes that exist on the roof of the world.</p>
<p>After 20 years in the service of <strong>Celtic Trekking</strong>, Olivier Kerviel handed over to Uddhav Pokharel and Krishna Raj Giri, two French-speaking Nepalese.</p>
HTML,
                'ethics_content' => <<<'HTML'
<h3>Our know-how and our ethics</h3>
<p>On all the destinations and treks we offer, we rely on <strong>competent and professional local teams</strong> which we pay in a healthy and generous way. <strong>All our guides are state qualified and regularly follow advanced training sessions</strong> (mountaineering, first aid, etc.). They all speak one or two foreign languages, sometimes more...</p>
<p>They of course have perfect knowledge of the terrain which allows us to take you on a safe journey and help you discover all the attractions of the regions you pass through, always with respect for everyone. Solidarity, fair and sustainable tourism is in fashion at the moment! Some people write pages about it on their brochures and websites, yet it is quite different in the field.</p>
<p><strong>In Nepal,</strong> our guides, porters and cooks have been receiving much higher than average salaries for a decade. All staff are insured by a local company: NECO Insurance.</p>
<p>We ensure that the porters' equipment is correct, even if of course they do not have the same High Tech clothing on their backs as Western trekkers.</p>
<p><strong>In Morocco,</strong> unlike many agencies, we pay the salaries of guides, camel drivers, mule drivers and cooks from the start of the trek. It is therefore with a free mind and high morale that they give the best of themselves during your hike. There are still too many agencies, and not the least, which pay the accompanying teams weeks or even months after the trek. Sometimes never even!!!!!! None of that with us. Guides and mule drivers will be able to attest to this.</p>
<p>In short, we offer you fair treks, namely treks where everyone meets: You, the trekker who benefits from <strong>a fair price and quality services</strong>, the accompanying teams who are paid decently with ideal working conditions, and the various stakeholders (hosts, merchants, transporters, etc.) who sell their products and services at the right price.</p>
<p>Since 1992, our clientele has continued to increase and we are very proud of it. We know well that a small structure like ours, which <strong>favors human relationships and the values of being over having</strong>, responds to the aspirations of a growing part of the "traveling population" who wish to break with the logic of the consumer society.</p>
<p><strong>Travel certainly, but travel intelligently by trusting those who will help you discover with respect and exchange. Come do it with us.</strong></p>
HTML,
                'is_active' => true,
            ]
        );

        TermsCondition::updateOrCreate(
            [],
            [
                'rates' => <<<'HTML'
<ul>
    <li>The prices for each trek and excursion will be communicated to you by e-mail within 48 hours after your request for information and quotation.</li>
    <li>Depending on your wishes, the length of stay, your budget, the fairest and most competitive price will be set.</li>
    <li>We do not charge any processing fees.</li>
    <li>If for reasons beyond our control, the duration of your excursion is extended, a price surcharge will be made.</li>
    <li>The services included and not included in the prices will be specified to you for each circuit.</li>
    <li>Our services (NEPAL/TIBET) are priced in US Dollars since it is the currency considered for commercial transactions in tourism in Nepal. You are free to pay in Euros if you wish. If so, the exchange rate will be calculated at the rate of the day of payment, less a bank commission (1%). Given the Euro rate since 2005, you are a big winner!</li>
</ul>
HTML,
                'bookings' => <<<'HTML'
<ul>
    <li>They are done by e-mail, fax or telephone. You must tell us the chosen stay, the desired departure/return dates and the number of participants. We will then send you a registration form to return to us by email.</li>
    <li>A reservation deposit worth 100 EUROS per person must be paid. We will give you by email the (very simple) procedure to follow.</li>
    <li>The balance of the trek will be paid in full upon your arrival in the destination country.</li>
    <li>If you cancel your reservation less than fifteen days before the scheduled departure date, your deposit will not be returned to you.</li>
    <li>A cancellation on your part more than 15 days before the scheduled departure date will see you recover 50% of your deposit.</li>
</ul>
HTML,
                'insurance' => <<<'HTML'
<ul>
    <li>The agency does not offer this service for trekkers. Only our teams (guides, sherpas, cooks, porters...) are provided by a local agency.</li>
    <li>So take out assistance insurance from your country (covering possible repatriation by helicopter) for which you will give us the contact details. We give you more information on this subject in the practical information we give after your reservation.</li>
</ul>
HTML,
            ]
        );

        // Seed Footer Links
        $footerLinks = [
            ['title' => 'Contact Us', 'url' => route('contact'), 'order' => 1],
            ['title' => 'Celtic Agency', 'url' => route('agency'), 'order' => 2],
            ['title' => 'Fixed Departures', 'url' => route('fixed-departures'), 'order' => 3],
            ['title' => 'Testimonials', 'url' => route('testimony'), 'order' => 4],
            ['title' => 'Legal', 'url' => route('legal'), 'order' => 5],
        ];

        foreach ($footerLinks as $footerLink) {
            FooterLink::firstOrCreate(
                ['title' => $footerLink['title']],
                $footerLink
            );
        }

        // Seed Testimonials
        $testimonials = [
            [
                'name' => 'Marie Dupont',
                'location' => 'Paris, France',
                'content' => 'Une experience inoubliable au Nepal avec Celtic Trekking. Les guides etaient exceptionnels et l\'organisation parfaite. Je recommande vivement!',
                'rating' => 5,
                'trek_date' => '2024-10-15',
                'is_approved' => true,
            ],
            [
                'name' => 'Jean-Pierre Martin',
                'location' => 'Lyon, France',
                'content' => 'Notre trek au Tibet a ete magique. Les paysages sont a couper le souffle et l\'equipe de Celtic Trekking a su nous faire decouvrir la vraie culture tibetaine.',
                'rating' => 5,
                'trek_date' => '2024-09-20',
                'is_approved' => true,
            ],
            [
                'name' => 'Sophie Bernard',
                'location' => 'Nantes, France',
                'content' => 'Le Maroc avec Celtic Trekking, c\'est bien plus qu\'un simple trek. C\'est une immersion totale dans la culture berbere. Merci pour ces souvenirs inoubliables!',
                'rating' => 5,
                'trek_date' => '2024-08-10',
                'is_approved' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }

        // Seed some Treks
        $treks = [
            [
                'destination_id' => 2, // Nepal
                'name' => 'Everest Base Camp',
                'slug' => 'everest-base-camp',
                'short_description' => 'The classic trek to the base of the world\'s highest mountain.',
                'description' => 'Follow in the footsteps of legendary mountaineers on this iconic trek to Everest Base Camp. Walk through Sherpa villages, visit ancient monasteries, and experience the incredible mountain scenery of the Khumbu region.',
                'duration_days' => 14,
                'difficulty' => 3,
                'max_altitude' => 5364,
                'best_season' => 'March-May, September-November',
                'group_size_min' => 4,
                'group_size_max' => 12,
                'price' => 2490,
                'included' => ['Flights Kathmandu-Lukla', 'Accommodation in teahouses', 'All meals on trek', 'Experienced guide and porters', 'Permits and park fees'],
                'not_included' => ['International flights', 'Travel insurance', 'Personal equipment', 'Tips for guides'],
                'is_active' => true,
            ],
            [
                'destination_id' => 2, // Nepal
                'name' => 'Annapurna Circuit',
                'slug' => 'annapurna-circuit',
                'short_description' => 'One of the world\'s great long-distance treks through diverse landscapes.',
                'description' => 'The Annapurna Circuit is one of the most diverse treks in the world, taking you from subtropical lowlands through temperate forests to the high alpine desert of the Tibetan Plateau.',
                'duration_days' => 18,
                'difficulty' => 3,
                'max_altitude' => 5416,
                'best_season' => 'March-May, October-November',
                'group_size_min' => 4,
                'group_size_max' => 12,
                'price' => 1990,
                'included' => ['Accommodation in teahouses', 'All meals on trek', 'Experienced guide and porters', 'Permits and park fees'],
                'not_included' => ['International flights', 'Travel insurance', 'Personal equipment', 'Tips for guides'],
                'is_active' => true,
            ],
            [
                'destination_id' => 1, // Tibet
                'name' => 'Mount Kailash Pilgrimage',
                'slug' => 'mount-kailash-pilgrimage',
                'short_description' => 'Sacred pilgrimage around the holiest mountain in Asia.',
                'description' => 'Join pilgrims from around the world on the sacred kora (circumambulation) of Mount Kailash. This spiritual journey takes you through some of Tibet\'s most remote and spectacular landscapes.',
                'duration_days' => 15,
                'difficulty' => 4,
                'max_altitude' => 5630,
                'best_season' => 'May-September',
                'group_size_min' => 4,
                'group_size_max' => 10,
                'price' => 3490,
                'included' => ['All permits and fees', 'Accommodation', 'All meals', 'Private transportation', 'Experienced Tibetan guide'],
                'not_included' => ['International flights', 'Chinese visa', 'Travel insurance', 'Personal equipment'],
                'is_active' => true,
            ],
            [
                'destination_id' => 3, // Morocco
                'name' => 'Toubkal Summit',
                'slug' => 'toubkal-summit',
                'short_description' => 'Climb North Africa\'s highest peak in the High Atlas.',
                'description' => 'Summit Jebel Toubkal (4,167m), the highest peak in North Africa. This trek takes you through traditional Berber villages, stunning mountain scenery, and offers incredible views from the summit.',
                'duration_days' => 7,
                'difficulty' => 3,
                'max_altitude' => 4167,
                'best_season' => 'April-June, September-November',
                'group_size_min' => 4,
                'group_size_max' => 12,
                'price' => 890,
                'included' => ['Accommodation in gites and refuges', 'All meals on trek', 'Local guide and mule team', 'Transfers from Marrakech'],
                'not_included' => ['International flights', 'Travel insurance', 'Personal equipment', 'Tips'],
                'is_active' => true,
            ],
        ];

        foreach ($treks as $trek) {
            Trek::create($trek);
        }

        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin',
                'password' => 'password',
                'is_admin' => true,
            ]
        );
    }
}
