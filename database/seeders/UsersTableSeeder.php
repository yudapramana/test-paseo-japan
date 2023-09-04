<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Log;
use Illuminate\Support\Facades\Artisan;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        
        $data = [
            ['name' => 'Pramana Yuda Sayeti', 'username' => 'yudapramana', 'email' => 'pramanayuda772@gmail.com', 'password' => Hash::make('1000kali'), 'current_role_id' => 1, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Kepala Kantor', 'username' => 'kakankemenag', 'email' => 'kakankemenagpessel@kemenag.go.id', 'password' => Hash::make('12345678'), 'current_role_id' => 2, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Afnizon', 'username' => 'adminafnizon', 'email' => 'afnizon@kemenag.go.id', 'password' => Hash::make('12345678'), 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Admin PHU', 'username' => 'adminphu', 'email' => 'phupessel@kemenag.go.id', 'password' => Hash::make('12345678'), 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Admin PDPontren', 'username' => 'adminpdpontren', 'email' => 'pdpontrenpessel@kemenag.go.id', 'password' => Hash::make('12345678'), 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Admin PAIS', 'username' => 'adminpais', 'email' => 'paispessel@kemenag.go.id', 'password' => Hash::make('12345678'), 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Admin PenMad', 'username' => 'adminpenmad', 'email' => 'penmadpessel@kemenag.go.id', 'password' => Hash::make('12345678'), 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Admin Bimas', 'username' => 'adminbimas', 'email' => 'bimaspessel@kemenag.go.id', 'password' => Hash::make('12345678'), 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Admin Keuangan', 'username' => 'adminkeuangan', 'email' => 'keuanganpessel@kemenag.go.id', 'password' => Hash::make('12345678'), 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Admin Kepegawaian', 'username' => 'adminkepegawaian', 'email' => 'kepegawaianpessel@kemenag.go.id', 'password' => Hash::make('12345678'), 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Admin Sekjen', 'username' => 'adminsekjen', 'email' => 'sekjenpessel@kemenag.go.id', 'password' => Hash::make('12345678'), 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
        ];


        foreach ($data as $key => $item) {
            \App\Models\User::firstOrCreate(
                ['username' => $item['username']],
                $item
            );
        }

        
    }
}
