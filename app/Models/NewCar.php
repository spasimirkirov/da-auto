<?php

namespace App\Models;

class NewCar extends Car
{
    const NEW_CARS_DUMMY_DATA = [
        [
            'id' => 1,
            'name' => 'Lorem ipsum odor amet',
            'model' => 'Lorem ipsum odor amet',
            'transmission_type' => 'Automatic',
            'image_path' => '/vendor/carvilla-v1.0/assets/images/new-cars-model/ncm1.png',
            'price' => 48000,
            'description' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac vulputate adipiscing porttitor cursus et sapien',
        ],
        [
            'id' => 2,
            'name' => 'Lorem ipsum odor amet',
            'model' => 'Lorem ipsum odor amet',
            'transmission_type' => 'Manual',
            'image_path' => '/vendor/carvilla-v1.0/assets/images/new-cars-model/ncm2.png',
            'price' => 45000,
            'description' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac vulputate adipiscing porttitor cursus et sapien',
        ],
        [
            'id' => 3,
            'name' => 'Lorem ipsum odor amet',
            'model' => 'Lorem ipsum odor amet',
            'transmission_type' => 'Automatic',
            'image_path' => '/vendor/carvilla-v1.0/assets/images/new-cars-model/ncm3.png',
            'price' => 43000,
            'description' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Hac vulputate adipiscing porttitor cursus et sapien',
        ],
    ];
}
