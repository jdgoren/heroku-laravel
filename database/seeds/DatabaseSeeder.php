<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // password is `secret`
        factory(App\User::class)->create([
            'name' => 'John Doe',
            'email' => 'test@test.com',
        ]);

        // create 8 movies

        factory(App\Movie::class)->create([
            'title' => 'The LEGO Batman Movie',
            'description' => 'Bruce Wayne must not only deal with the criminals of Gotham City, but also the responsibility of raising a boy he adopted.',
            'duration' => 104,
            'released_at' => Carbon\Carbon::create(2017, 2, 10)
        ]);

        factory(App\Movie::class)->create([
            'title' => 'Fifty Shades Darker',
            'description' => 'While Christian wrestles with his inner demons, Anastasia must confront the anger and envy of the women who came before her.',
            'duration' => 118,
            'released_at' => Carbon\Carbon::create(2017, 2, 10)
        ]);

        factory(App\Movie::class)->create([
            'title' => 'John Wick: Chapter 2',
            'description' => 'After returning to the criminal underworld to repay a debt, John Wick discovers that a large bounty has been put on his life.',
            'duration' => 122,
            'released_at' => Carbon\Carbon::create(2017, 2, 10)
        ]);

        factory(App\Movie::class)->create([
            'title' => 'Fist Fight',
            'description' => 'When one school teacher gets the other fired, he is challenged to an after-school fight.',
            'duration' => 91,
            'released_at' => Carbon\Carbon::create(2017, 2, 17)
        ]);

        factory(App\Movie::class)->create([
            'title' => 'Split',
            'description' => 'Three girls are kidnapped by a man with a diagnosed 23 distinct personalities, they must try to escape before the apparent emergence of a frightful new 24th.',
            'duration' => 117,
            'released_at' => Carbon\Carbon::create(2017, 1, 20)
        ]);

        factory(App\Movie::class)->create([
            'title' => 'The Great Wall',
            'description' => 'European mercenaries searching for black powder become embroiled in the defense of the Great Wall of China against a horde of monstrous creatures.',
            'duration' => 103,
            'released_at' => Carbon\Carbon::create(2017, 2, 17)
        ]);

        factory(App\Movie::class)->create([
            'title' => 'Collide',
            'description' => 'An American backpacker gets involved with a ring of drug smugglers as their driver, though he winds up on the run from his employers across Cologne high-speed Autobahn.',
            'duration' => 99,
            'released_at' => Carbon\Carbon::create(2017, 2, 24)
        ]);

        factory(App\Movie::class)->create([
            'title' => 'As You Are',
            'description' => 'Set in the early 1990\'s, "As You Are" is the telling and retelling of a relationship between three teenagers as it traces the course of their friendship through a construction of disparate memories prompted by a police investigation.',
            'duration' => 110,
            'released_at' => Carbon\Carbon::create(2017, 2, 24)
        ]);

        // $this->call(UsersTableSeeder::class);
    }
}
