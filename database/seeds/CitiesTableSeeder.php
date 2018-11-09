<?php

use Illuminate\Database\Seeder;
use App\Models\Cities;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = file_get_contents('imports/cities.json');        

        $detalhes = json_decode($content, true);

         foreach($detalhes as $detalhe){

            $this->command->info("Insert cities of " . $detalhe['uf']);

            $params = array();

            foreach($detalhe['cidades'] as $cidade)
                $params[] = ['name' => $cidade['nome'], 'uf' => $detalhe['uf'], 'cod_ibge' => $cidade['codigo']];

            Cities::insert($params);
        }
    }
}
