<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehicle;


class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Vehicle::create([
            'image_path' => 'carro1.png',
            'city'=>'Montes Claros',
            'make'=>'Volkswagen',
            'model'=>'Gol Last Edition',
            'year'=>2023,
            'km'=>154785,
            'description'=>'Com a cor exclusiva Vermelho Sunset, detalhes em preto no teto, retrovisores maçanetas e rodas, trazem todo o diferencial e esportividade ao modelo.',
            'transmission'=>0,
            'phone'=>'03830055636',
            'price'=>95990.00
        ]);

        Vehicle::create([
            'image_path' => 'carro2.png',
            'city'=>'Ibirité',
            'make'=>'Chevrolet',
            'model'=>'Onix LT1 MT',
            'year'=>2023,
            'km'=>0,
            'description'=>'Nesta versão, você conta com motor turbo, seis airbags e MyLink com tela de 8” sensível ao toque.',
            'transmission'=>0,
            'phone'=>'03823063636',
            'price'=>91190.00
        ]);

        Vehicle::create([
            'image_path' => 'carro3.png',
            'city'=>'Salvador',
            'make'=>'Chevrolet',
            'model'=>'Cruze Sport6 RS',
            'year'=>2023,
            'km'=>1455696,
            'description'=>'Um motor turbinado pra você que busca potência, mas não abre mão do conforto e nem da economia.',
            'transmission'=>0,
            'phone'=>'03830062336',
            'price'=> 168190.00
        ]);

        Vehicle::create([
            'image_path' => 'carro4.png',
            'city'=>'São Paulo',
            'make'=>'Audi',
            'model'=>'Audi e-tron',
            'year'=>2023,
            'km'=>1247859,
            'description'=>'O e-tron é o primeiro modelo totalmente elétrico a ser produzido em série pela Audi. Um SUV de grande porte com silhueta expressiva, capaz de oferecer autonomia de alto nível para uso no dia a dia.',
            'transmission'=>1,
            'phone'=>'03834063636',
            'price'=> 628990.00
        ]);

        Vehicle::create([
            'image_path' => 'carro5.png',
            'city'=>'Montes Claros',
            'make'=>'Hyundai',
            'model'=>'HB20S',
            'year'=>2023,
            'km'=>1547858,
            'description'=>'Chegou o Novo Hyundai HB20S. Um sedan com tecnologia à frente do seu tempo, personalidade dinâmica e elegância em cada linha.            ',
            'transmission'=>1,
            'phone'=>'03830063667',
            'price'=> 79490.00
        ]);

        Vehicle::create([
            'image_path' => 'carro6.png',
            'city'=>'Belo Horizonte',
            'make'=>'Uno',
            'model'=>'Mile',
            'year'=>2023,
            'km'=>10555,
            'description'=>'Um carro pop, um carro tech, um carro para todos os momentos.',
            'transmission'=>1,
            'phone'=>'03835563636',
            'price'=> 50490.00
        ]);

        Vehicle::create([
            'image_path' => 'carro7.png',
            'city'=>'Disneyland',
            'make'=>'Relampago Marquinhos',
            'model'=>'Nascar.',
            'year'=>1977,
            'km'=>27000,
            'description'=>'Carro de corrida profissional.',
            'transmission'=>1,
            'phone'=>'03835563636',
            'price'=> 50490.00
        ]);


    }
}
