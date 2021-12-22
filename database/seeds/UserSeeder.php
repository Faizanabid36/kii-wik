<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill = [
            [
                'name' => 'Moving & Transport',
                'attachment_path' => '',
                "skill_slug" => 'Moving & Transport',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'House & Garden',
                'attachment_path' => '',
                "skill_slug" => 'House & Garden',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Craftsmen',
                'attachment_path' => '',
                "skill_slug" => 'Craftsmen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Renovation & Maintenace',
                'attachment_path' => '',
                "skill_slug" => 'Renovation & Maintenace',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Car Workshop',
                'attachment_path' => '',
                "skill_slug" => 'Car Workshop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CLEANING SERVICES',
                'attachment_path' => '',
                "skill_slug" => 'CLEANING SERVICES',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Catering & Event',
                'attachment_path' => '',
                "skill_slug" => 'Catering & Event',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Photo & Picture',
                'attachment_path' => '',
                "skill_slug" => 'Photo & Picture',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'WEB & IT',
                'attachment_path' => '',
                "skill_slug" => 'WEB & IT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        foreach ($skill as $s) {
            \App\Skill::create($s);
        }

        $users = [
            [
                'name' => 'Support Center',
                'role' => 'admin',
                'email' => 'admin1@mail.com',
                'email_verified_at' => now(),
                'password' => \Illuminate\Support\Facades\Hash::make('support123'),
                'is_approved' => 1,
                'avatar'=>'https://miro.medium.com/max/1028/1*F6rAPPRNJYB_MDJSQtKbXw.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Admin',
                'role' => 'admin',
                'email' => 'admin@mail.com',
                'email_verified_at' => now(),
                'password' => \Illuminate\Support\Facades\Hash::make('admin123'),
                'is_approved' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Company',
                'role' => 'company',
                'email' => 'company@gmail.com',
                'email_verified_at' => now(),
                'password' => \Illuminate\Support\Facades\Hash::make('123123123'),
                'is_approved' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User',
                'role' => 'user',
                'email' => 'user@gmail.com',
                'email_verified_at' => now(),
                'password' => \Illuminate\Support\Facades\Hash::make('123123123'),
                'is_approved' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        foreach ($users as $user) {
            \App\User::create($user);
        }
    }
}
