<?php

use Illuminate\Database\Seeder;

class PelangganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggans')->insert(
            [
            
                'name' => 'irwan cahyanto',
                'email' => 'ironelight@gmail.com',
                'alamat' => 'jakarta',
                    
            ]
           
        );
    }
}
