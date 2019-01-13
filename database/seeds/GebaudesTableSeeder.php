<?php

use Illuminate\Database\Seeder;

class GebaudesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gebaude = factory(App\Gebaude::class, 20)->create();

        $gebaude->each(function($gebaude){
           factory(App\Raum::class, 20)->create([
              'gebaude_id' => $gebaude->id 
           ]);
        });

        // Admin

        if (!\DB::table('admins')->find(1)) {
            \DB::table('admins')->insert([
                0 => [
                    'id'             => 1,
                    'name'           => 'admin',
                    'email'          => 'admin@admin.com',
                    'password'       => '$2y$10$BB/ZVaIC0Saqipica3QfZe6xz2WniXamMUmF40e4o9pjSGygACCnu',
                    'phone' => '015752804191',
                    'status' => '1',
                    'created_at'     => '2016-07-29 15:13:02',
                    'updated_at'     => '2016-08-18 14:33:50',
                ],
         ]);

       }
  }
}
