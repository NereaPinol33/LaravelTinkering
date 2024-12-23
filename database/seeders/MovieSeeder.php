<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movie1 = Movie::create([
            'title' => 'The Shawshank Redemption',
            'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
            'director' => 'Frank Darabont',
            'year' => 1994,
            'genre' => 'Drama',
            'image' => 'https://es.web.img3.acsta.net/c_310_420/medias/nmedia/18/74/26/88/20133359.jpg',
        ]);

        $movie2 = Movie::create([
            'title' => 'The Godfather',
            'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
            'director' => 'Francis Ford Coppola',
            'year' => 1972,
            'genre' => 'Crime, Drama',
            'image' => 'https://es.web.img3.acsta.net/c_310_420/pictures/18/06/12/12/12/0117051.jpg?coixp=49&coiyp=27',
        ]);

        $movie3 = Movie::create([
            'title' => 'The Dark Knight',
            'description' => 'When the menace known as The Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham.',
            'director' => 'Christopher Nolan',
            'year' => 2008,
            'genre' => 'Action, Crime, Drama',
            'image' => 'https://es.web.img3.acsta.net/c_310_420/medias/nmedia/18/66/74/01/20350623.jpg',
        ]);

        $movie4 = Movie::create([
            'title' => 'Inception',
            'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the task of planting an idea into the mind of a CEO.',
            'director' => 'Christopher Nolan',
            'year' => 2010,
            'genre' => 'Action, Sci-Fi, Thriller',
            'image' => 'https://es.web.img3.acsta.net/c_310_420/medias/nmedia/18/72/41/74/20198901.jpg',
        ]);

        $movie5 = Movie::create([
            'title' => 'Interstellar',
            'description' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
            'director' => 'Christopher Nolan',
            'year' => 2014,
            'genre' => 'Adventure, Drama, Sci-Fi',
            'image' => 'https://es.web.img2.acsta.net/c_310_420/pictures/14/10/02/11/07/341344.jpg',
        ]);

        $movie6 = Movie::create([
            'title' => 'Pulp Fiction',
            'description' => 'The lives of two mob hitmen, a boxer, a gangster\'s wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
            'director' => 'Quentin Tarantino',
            'year' => 1994,
            'genre' => 'Crime, Drama',
            'image' => 'https://es.web.img3.acsta.net/c_310_420/img/05/66/05663f00b8b5df58b003aaf5c46ef8ad.jpg',
        ]);

        $actor1 = Actor::where('name', 'Morgan Freeman')->first();
        $actor2 = Actor::where('name', 'Tim Robbins')->first();
        $actor3 = Actor::where('name', 'Marlon Brando')->first();
        $actor4 = Actor::where('name', 'Al Pacino')->first();
        $actor5 = Actor::where('name', 'Christian Bale')->first();
        $actor6 = Actor::where('name', 'Heath Ledger')->first();
        $actor7 = Actor::where('name', 'Leonardo DiCaprio')->first();
        $actor8 = Actor::where('name', 'Joseph Gordon-Levitt')->first();
        $actor9 = Actor::where('name', 'Matthew McConaughey')->first();
        $actor10 = Actor::where('name', 'Anne Hathaway')->first();
        $actor11 = Actor::where('name', 'John Travolta')->first();
        $actor12 = Actor::where('name', 'Uma Thurman')->first();

        $movie1->actors()->attach([$actor1->id, $actor2->id]);
        $movie2->actors()->attach([$actor3->id, $actor4->id]);
        $movie3->actors()->attach([$actor5->id, $actor6->id]);
        $movie4->actors()->attach([$actor7->id, $actor8->id]);
        $movie5->actors()->attach([$actor9->id, $actor10->id]);
        $movie6->actors()->attach([$actor11->id, $actor12->id]);
    }
}
