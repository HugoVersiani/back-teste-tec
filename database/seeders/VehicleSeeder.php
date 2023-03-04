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
        // $vehicle = new Vehicle();
        // $vehicle->image_path = 'carro1.png';
        // $vehicle->city = 'Montes Claros';
        // $vehicle->make = 'Volkswagen';
        // $vehicle->model = 'Gol Last Edition';
        // $vehicle->year = 2023;
        // $vehicle->km = 0;
        // $vehicle->description = 'Com a cor exclusiva Vermelho Sunset, detalhes em preto no teto, retrovisores maçanetas e rodas, trazem todo o diferencial e esportividade ao modelo.';
        // $vehicle->transmission = 0;
        // $vehicle->phone = '03830063636';
        // $vehicle->price = '95.990';

        Vehicle::create([
            'image_path' => 'carro1.png',
            'city'=>'Montes Claros',
            'make'=>'Volkswagen',
            'model'=>'Gol Last Edition',
            'year'=>2023,
            'km'=>0,
            'description'=>'Com a cor exclusiva Vermelho Sunset, detalhes em preto no teto, retrovisores maçanetas e rodas, trazem todo o diferencial e esportividade ao modelo.',
            'transmission'=>0,
            'phone'=>'03830063636',
            'price'=>95990.00
        ]);

        Vehicle::create([
            'image_path' => 'carro2.png',
            'city'=>'Montes Claros',
            'make'=>'Chevrolet',
            'model'=>'Onix LT1 MT',
            'year'=>2023,
            'km'=>0,
            'description'=>'Nesta versão, você conta com motor turbo, seis airbags e MyLink com tela de 8” sensível ao toque.',
            'transmission'=>0,
            'phone'=>'03830063636',
            'price'=>91190.00
        ]);

        Vehicle::create([
            'image_path' => 'carro3.png',
            'city'=>'Montes Claros',
            'make'=>'Chevrolet',
            'model'=>'Cruze Sport6 RS',
            'year'=>2023,
            'km'=>0,
            'description'=>'Um motor turbinado pra você que busca potência, mas não abre mão do conforto e nem da economia.',
            'transmission'=>0,
            'phone'=>'03830063636',
            'price'=> 168190.00
        ]);

        Vehicle::create([
            'image_path' => 'carro4.png',
            'city'=>'Montes Claros',
            'make'=>'Audi',
            'model'=>'Audi e-tron',
            'year'=>2023,
            'km'=>0,
            'description'=>'O e-tron é o primeiro modelo totalmente elétrico a ser produzido em série pela Audi. Um SUV de grande porte com silhueta expressiva, capaz de oferecer autonomia de alto nível para uso no dia a dia.',
            'transmission'=>1,
            'phone'=>'03830063636',
            'price'=> 628990.00
        ]);

        Vehicle::create([
            'image_path' => 'carro5.png',
            'city'=>'Montes Claros',
            'make'=>'Hyundai',
            'model'=>'HB20S',
            'year'=>2023,
            'km'=>0,
            'description'=>'Chegou o Novo Hyundai HB20S. Um sedan com tecnologia à frente do seu tempo, personalidade dinâmica e elegância em cada linha.            ',
            'transmission'=>1,
            'phone'=>'03830063636',
            'price'=> 79490.00
        ]);

    }
}
