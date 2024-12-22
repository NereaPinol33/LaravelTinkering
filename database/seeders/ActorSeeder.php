<?php

namespace Database\Seeders;

use App\Models\Actor;
use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create actors
        Actor::create([
            'name' => 'Morgan Freeman',
            'birth_date' => '1937-06-01',
            'biography' => 'Morgan Freeman is an American actor, narrator, and film director.',
            'gender' => 1,
            'image' => 'https://wallpapers.com/images/featured/morgan-freeman-r6se7itkgc3ytsqe.jpg',
        ]);

        Actor::create([
            'name' => 'Tim Robbins',
            'birth_date' => '1958-10-16',
            'biography' => 'Tim Robbins is an American actor, director, and activist.',
            'gender' => 1,
            'image' => 'https://wallpapers.com/images/featured/tim-robbins-s3vydqj8cpa5lk6d.jpg',
        ]);

        Actor::create([
            'name' => 'Marlon Brando',
            'birth_date' => '1924-04-03',
            'biography' => 'Marlon Brando was an American actor and film director, known for his method acting.',
            'gender' => 1,
            'image' => 'https://img.goodfon.com/original/1920x1080/7/4a/krestnyi-otets-marlon-brando-akter-personazh.jpg',
        ]);

        Actor::create([
            'name' => 'Al Pacino',
            'birth_date' => '1940-04-25',
            'biography' => 'Al Pacino is an American actor, director, and producer known for his roles in films like "The Godfather".',
            'gender' => 1,
            'image' => 'https://images5.alphacoders.com/489/thumb-1920-489776.jpg',
        ]);

        Actor::create([
            'name' => 'Christian Bale',
            'birth_date' => '1974-01-30',
            'biography' => 'Christian Bale is an English actor known for his transformative roles in movies.',
            'gender' => 1,
            'image' => 'https://img.goodfon.com/original/1920x1080/d/dd/christian-bale-aktior-fon-ulybaetsia.jpg',
        ]);

        Actor::create([
            'name' => 'Heath Ledger',
            'birth_date' => '1979-04-04',
            'biography' => 'Heath Ledger was an Australian actor and director, known for his role as The Joker in "The Dark Knight".',
            'gender' => 1,
            'image' => 'https://images5.alphacoders.com/341/thumb-1920-341026.jpg',
        ]);

        Actor::create([
            'name' => 'Leonardo DiCaprio',
            'birth_date' => '1974-11-11',
            'biography' => 'Leonardo DiCaprio is an American actor and environmental activist, known for his roles in films like "Titanic" and "Inception".',
            'gender' => 1,
            'image' => 'https://images.alphacoders.com/712/thumb-1920-712214.jpg',
        ]);

        Actor::create([
            'name' => 'Joseph Gordon-Levitt',
            'birth_date' => '1981-02-17',
            'biography' => 'Joseph Gordon-Levitt is an American actor, known for his roles in "Inception" and "Looper".',
            'gender' => 1,
            'image' => 'https://images.alphacoders.com/442/thumb-1920-442190.jpg',
        ]);

        Actor::create([
            'name' => 'Matthew McConaughey',
            'birth_date' => '1969-11-04',
            'biography' => 'Matthew McConaughey is an American actor known for his roles in "Interstellar" and "The Lincoln Lawyer".',
            'gender' => 1,
            'image' => 'https://wallpapers.com/images/hd/casual-look-for-matthew-mcconaughey-yh7tj4mznkxsqaoh.jpg',
        ]);

        Actor::create([
            'name' => 'Anne Hathaway',
            'birth_date' => '1982-11-12',
            'biography' => 'Anne Hathaway is an American actress, known for her roles in "Les Misérables" and "The Devil Wears Prada".',
            'gender' => 2,
            'image' => 'https://images5.alphacoders.com/342/342260.jpg',
        ]);

        Actor::create([
            'name' => 'John Travolta',
            'birth_date' => '1954-02-18',
            'biography' => 'John Travolta is an American actor and singer known for his roles in "Pulp Fiction" and "Grease".',
            'gender' => 1,
            'image' => 'https://images4.alphacoders.com/804/thumb-1920-804201.jpg',
        ]);

        Actor::create([
            'name' => 'Uma Thurman',
            'birth_date' => '1970-04-29',
            'biography' => 'Uma Thurman is an American actress known for her roles in "Pulp Fiction" and "Kill Bill".',
            'gender' => 2,
            'image' => 'https://wallpapers.com/images/hd/uma-thurman-beautiful-profile-photography-6q4ng5adg71so3ir.jpg',
        ]);
    }
}
