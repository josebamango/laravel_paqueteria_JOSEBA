<?php

namespace Database\Seeders;

use App\Models\Empresa;
use App\Models\Paquete;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transportistas')->delete();
        $this->call(TransportistaSeeder::class);
        Empresa::factory(20)->create();
        Paquete::factory(40)->create();
    }
}
