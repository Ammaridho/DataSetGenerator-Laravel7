<?php

use Illuminate\Database\Seeder;

class internet_keluarga_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate the table.
        DB::table('internet_keluarga')->truncate();


        // The auto-increment has been reset.
        // Now we can start adding users.
        // internet_keluarga::create(
        //     array(
        //         'email' => 'example@domain.com',
        //         'password' => Hash::make('test')
        //     )
        // );
    }
}
