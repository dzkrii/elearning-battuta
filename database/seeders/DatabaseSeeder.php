<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Menu;
use App\Models\Role;
use App\Models\User;
use App\Models\UserAccessMenu;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roleData = [
            [
                'role' => 'Super Admin'
            ],
            [
                'role' => 'Admin'
            ]
        ];

        foreach ($roleData as $key => $val) {
            Role::create($val);
        }

        $menuData = [
            [
                'menu' => 'Dashboard',
                'url'  => '/dashboard',
                'icon' => '<i class="bi bi-speedometer"></i>'
            ],
            [
                'menu' => 'Profile',
                'url'  => '/dashboard/profile',
                'icon' => '<i class="bi bi-person-check"></i>'
            ],
            [
                'menu' => 'Manajemen Menu',
                'url'  => '/dashboard/menu',
                'icon' => '<i class="bi bi-menu-app"></i>'
            ],
            [
                'menu' => 'Manajemen Berita',
                'url'  => '/dashboard/news',
                'icon' => '<i class="bi bi-newspaper"></i>'
            ],
            [
                'menu' => 'Manajemen Agenda',
                'url'  => '/dashboard/agenda',
                'icon' => '<i class="bi bi-calendar-week"></i>'
            ],
            [
                'menu' => 'Manajemen Informasi',
                'url'  => '/dashboard/information',
                'icon' => '<i class="bi bi-info-circle"></i>'
            ],
            [
                'menu' => 'Manajemen Pengumuman',
                'url'  => '/dashboard/announcement',
                'icon' => '<i class="bi bi-megaphone"></i>'
            ]
        ];

        foreach ($menuData as $key => $val) {
            Menu::create($val);
        }

        $userData = [
            [
                'name'      => 'Super Admin',
                'email'     => 'sadmin@email.com',
                'role_id'   => '1',
                'password'  => bcrypt('sadmin'),
                'is_active' => '1',
                'divisi'    => 'super admin'

            ],
            [
                'name'      => 'Admin Universitas',
                'email'     => 'universitas@email.com',
                'role_id'   => '2',
                'password'  => bcrypt('universitas'),
                'is_active' => '1',
                'divisi'    => 'univ'
            ],
            [
                'name'      => 'Admin FEB',
                'email'     => 'feb@email.com',
                'role_id'   => '2',
                'password'  => bcrypt('feb'),
                'is_active' => '1',
                'divisi'    => 'feb'
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }

        $userAccessMenu = [
            [
                'role_id' => '1',
                'menu_id' => '1'
            ],
            [
                'role_id' => '1',
                'menu_id' => '2'
            ],
            [
                'role_id' => '1',
                'menu_id' => '3'
            ],
            [
                'role_id' => '1',
                'menu_id' => '4'
            ],
            [
                'role_id' => '1',
                'menu_id' => '5'
            ],
            [
                'role_id' => '1',
                'menu_id' => '6'
            ],
            [
                'role_id' => '1',
                'menu_id' => '7'
            ],
            [
                'role_id' => '2',
                'menu_id' => '1'
            ],
            [
                'role_id' => '2',
                'menu_id' => '2'
            ],
            [
                'role_id' => '2',
                'menu_id' => '4'
            ],
            [
                'role_id' => '2',
                'menu_id' => '5'
            ],
            [
                'role_id' => '2',
                'menu_id' => '6'
            ],
            [
                'role_id' => '2',
                'menu_id' => '7'
            ],
        ];

        foreach ($userAccessMenu as $key => $val) {
            UserAccessMenu::create($val);
        }
    }
}
