<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [['倉田和征', '16@gmail.com', '12345678', 1],
                   ['ウォーレン', '12@gmail.com', '12345678', 0],
                   ['グレアム', '123@gmail.com', 'asdfghjkl', 0]];

         foreach ($admins as $admin) {
             DB::table('admins')->insert([
                 'name' => $admin[0],
                 'email' => $admin[1],
                 'password' => $admin[2],
                 'role' => $admin[3],
                 'created_at' => Carbon::now(),
                 'updated_at' => Carbon::now(),
             ]);
         }
    }
}
