<?php

use Illuminate\Database\Seeder;

class TelefoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entities\Telefone::class, 80)->create();
    }
}
