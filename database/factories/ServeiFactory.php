<?php

namespace Database\Factories;

use App\Models\Servei;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServeiFactory extends Factory
{
    protected $model = Servei::class;

    public function definition()
    {
        $serveis = [
            [
                'nom' => 'Paddock VIP',
                'descripció' => 'Acceso exclusivo al paddock con vistas privilegiadas y servicios premium.',
                'preu' => 250.00,
            ],
            [
                'nom' => 'Box Estándar',
                'descripció' => 'Espacio en un box estándar para el equipo y los vehículos.',
                'preu' => 150.00,
            ],
            [
                'nom' => 'Tribuna Principal',
                'descripció' => 'Asientos en la tribuna principal con excelente vista panorámica del circuito.',
                'preu' => 75.00,
            ],
            [
                'nom' => 'Catering VIP',
                'descripció' => 'Servicio de catering exclusivo en zona VIP con alimentos y bebidas de alta calidad.',
                'preu' => 200.00,
            ],
            [
                'nom' => 'Alquiler de Coches',
                'descripció' => 'Posibilidad de alquilar vehículos de alta gama para realizar pruebas en el circuito.',
                'preu' => 300.00,
            ],
            [
                'nom' => 'Pista de Pruebas',
                'descripció' => 'Acceso a una pista de pruebas para probar y ajustar los vehículos.',
                'preu' => 100.00,
            ],
            [
                'nom' => 'Simulador de Carreras',
                'descripció' => 'Experiencia inmersiva en un simulador de carreras de última generación.',
                'preu' => 50.00,
            ],
            [
                'nom' => 'Servicio de Neumáticos',
                'descripció' => 'Cambio de neumáticos y servicio de mantenimiento para los vehículos del equipo.',
                'preu' => 120.00,
            ],
            [
                'nom' => 'Acceso a Paddock',
                'descripció' => 'Acceso al paddock para presenciar el trabajo de los equipos y acercarse a los vehículos.',
                'preu' => 40.00,
            ],
            [
                'nom' => 'Clases de Conducción',
                'descripció' => 'Clases personalizadas de conducción deportiva con instructores expertos.',
                'preu' => 180.00,
            ],
        ];

        return $serveis[$this->faker->numberBetween(0, 9)];
    }
}
