<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Users = [['倉田 和征','クラタ カズユキ','男','1997-12-06','142-0042','東京都','品川区豊町2-12-1','ベルメゾン203','16mf018@st.nuas.ac.jp','12345678'],
                  ['川島 海荷','カワシマ ウミカ','女','1994-03-03','142-0042','東京都','渋谷区豊町2-12-1','ベルメゾン203','umika@gmail.com','12345678'],
                  ['泉 里香','イズミ リカ','女','1997-12-06','142-0042','東京都','北区豊町2-12-1','ベルメゾン203','rika@gmail.com','12345678'],
                  ['大野 智','オオノ サトシ','男','1980-11-26','142-0042','東京都','港区豊町2-12-1','ベルメゾン203','satoshi@gmail.com','12345678'],
                  ['橋本 奈々未','ハシモト ナナミ','女','1997-12-06','142-0042','東京都','新宿区豊町2-12-1','ベルメゾン203','nanami@gmail.com','12345678'],
                ];
                
        foreach ($Users as $user) {
            DB::table('users')->insert([
                'name' => $user[0],
                'kana' => $user[1],
                'gender' => $user[2],
                'birthday' => $user[3],
                'code' => $user[4],
                'perf' => $user[5],
                'address' => $user[6],
                'building' => $user[7],
                'email' => $user[8],
                'password' => $user[9],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
