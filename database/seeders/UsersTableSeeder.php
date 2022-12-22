<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create(
            [
                'name' => 'admin',
                'role_id' => '1',
                'branch_id' => '2',
                'phone' => '0727474566',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password'=>Hash::make('meme'),
            ])->assignRole('admin'); 
            
            $user=User::create(
                [
                    'name' => 'Supper Admin',
                    'role_id' => '4',
                    'branch_id' => '2',
                    'phone' => '0727444566',
                    'email' => 'agent@gent.com',
                    'email_verified_at' => now(),
                    'password'=>Hash::make('meme'),
                ])->assignRole('supperAdmin'); 
                $user=User::create(
                    [
                        'name' => 'user',
                        'role_id' => '2',
                        'branch_id' => '2',
                        'phone' => '0728444566',
                        'email' => 'user@user.com',
                        'email_verified_at' => now(),
                        'password'=>Hash::make('meme'),
                    ])->assignRole('user'); 
    }
}
