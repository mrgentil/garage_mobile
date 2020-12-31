<?php


namespace App\Repositories;

use App\Order;
use App\Service;

class ServiceRepository
{

    public function getLatest()
    {
        return Service::query()->get();
    }
    public function getService(string $slug)
    {
        $id = explode('-', $slug)[0];

        return Service::query()
            ->where('id', $id)
            ->firstOrFail();
    }

    public function post_order(int $service_id, string $first_name,
                               string $last_name, string $email, string $phone,
                               string $car_make, string $desired_date, string $localization, string $problem,
                               ?string $model = null, ?string $fuel_type = null, ?string $engine_size = null)
    {

        return Order::query()
            ->create([
                'user_id' => auth()->user()->id,
                'service_id' => $service_id,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'phone' => $phone,
                'model' => $model,
                'fuel_type' => $fuel_type,
                'engine_size' => $engine_size,
                'desired_date_and_time' => $desired_date,
                'car_make' => $car_make,
                'localization' => $localization,
                'problem' => $problem
            ]);
    }
}
