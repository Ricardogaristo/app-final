<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class Administradores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([
            'name' => 'admin ricardo',
            'email'=> 'admin@gmail.com',
            'password'=> Hash::make('admin'),
            'fullacces'=> 'yes',
            'codigo'=> 'casa1',

        ]);

        $user1=User::create([
            'name' => 'admin graciela',
            'email'=> 'graciela@gmail.com',
            'password'=> Hash::make('user'),
            'fullacces'=> 'no',
            'codigo'=> 'casa',

        ]);

        $user2=User::create([
            'name' => 'admin andrea',
            'email'=> 'andrea@gmail.com',
            'password'=> Hash::make('user'),
            'fullacces'=> 'no',
            'codigo'=> 'casa3',

        ]);
    }
}
