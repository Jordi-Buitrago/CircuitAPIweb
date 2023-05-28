<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Espai>
 */
class EspaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         $noms = ['Box 1', 'Tribuna A', 'Paddock VIP', 'Sala de Conferencias', 'Zona de Descanso', 'Área de Exposición', 'Pista de Pruebas', 'Simulador de Carreras', 'Cafetería', 'Servicio de Neumáticos'];
    $descripcions = [
        'Espacio para el equipo técnico y los vehículos de competición.',
        'Tribuna con vista panorámica al circuito.',
        'Acceso exclusivo al paddock con servicios premium.',
        'Sala equipada para realizar conferencias y presentaciones.',
        'Zona destinada al descanso de pilotos y personal del circuito.',
        'Espacio para exhibición de vehículos y patrocinadores.',
        'Pista para realizar pruebas y ajustes en los vehículos.',
        'Experiencia inmersiva en simulador de carreras de última generación.',
        'Lugar para tomar un descanso y disfrutar de bebidas y snacks.',
        'Servicio de cambio y mantenimiento de neumáticos para los vehículos.',
    ];
    $capacitats = [100, 500, 50, 200, 150, 300, 80, 20, 50, 100];
    $preus = [200.00, 100.00, 350.00, 500.00, 150.00, 250.00, 80.00, 40.00, 20.00, 120.00];

    return [
        'nom' => $noms[$this->faker->numberBetween(0, 9)],
        'descripció' => $descripcions[$this->faker->numberBetween(0, 9)],
        'capacitat' => $capacitats[$this->faker->numberBetween(0, 9)],
        'preu' => $preus[$this->faker->numberBetween(0, 9)],
        'Serveis_idServeis' => $this->faker->numberBetween(1, 10),
    ];
    }
}
