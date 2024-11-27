<?php

namespace App\Services;

use App\Models\Car;
use App\Models\User;

class DashboardService
{
    /**
     * @return int
     */
    public static function getUsersCount(): int
    {
        return User::count();
    }

    /**
     * @return int
     */
    public static function getCarsCount(): int
    {
        return Car::count();
    }
}
