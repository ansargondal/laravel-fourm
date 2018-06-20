<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(CountrySeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ThreadSeeder::class);
        $this->call(ReplySeeder::class);

//        $users = factory(User::class, 20)->create();

//        $users->each(function ($user) {
//
//            //save 20 threads for each user
//            $user->threads()->save(factory(Thread::class, 20)->make());
//
//        });
    }
}
