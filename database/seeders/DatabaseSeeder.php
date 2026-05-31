<?php

namespace Database\Seeders;

use App\Models\Destination;
use App\Models\Slide;
use App\Models\Testimonial;
use App\Models\Trek;
use App\Models\User;
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
