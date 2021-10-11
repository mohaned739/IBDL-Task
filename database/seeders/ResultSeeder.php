<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Result;
use App\Models\User;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $role = Role::where('name', 'Mohaned')->firstOrFail();
        // $user=User::create([
        //     'name'           => 'Mohaned',
        //     'email'          => 'mohaned.mohamed9999@gmail.com',
        //     'password'       => bcrypt('password'),
        //     'remember_token' => Str::random(60),
        //     'role_id'        => $role->id,
        // ]);
        // Result::create([
        //     'user_id'           => $user->id,
        //     'chapter'          => 1,
        //     'chapter_score'       => 44,
        // ]);
        // Result::create([
        //     'user_id'           => $user->id,
        //     'chapter'          => 2,
        //     'chapter_score'       => 60,
        // ]);
        // Result::create([
        //     'user_id'           => $user->id,
        //     'chapter'          => 3,
        //     'chapter_score'       => 50,
        // ]);
        // Result::create([
        //     'user_id'           => $user->id,
        //     'chapter'          => 4,
        //     'chapter_score'       => 93,
        // ]);
    }
}
