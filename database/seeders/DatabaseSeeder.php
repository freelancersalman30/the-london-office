<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $services = [
            ['name' => 'Registered Office Address', 'slug' => 'registered-office-address', 'price' => 49.99, 'billing_cycle' => 'yearly', 'category' => 'registered-office', 'is_active' => true],
            ['name' => 'Director Service Address', 'slug' => 'director-service-address', 'price' => 10.00, 'billing_cycle' => 'yearly', 'category' => 'director-service', 'is_active' => true],
            ['name' => 'Virtual Business Address', 'slug' => 'virtual-business-address', 'price' => 169.99, 'billing_cycle' => 'yearly', 'category' => 'virtual-business', 'is_active' => true],
            ['name' => 'Virtual Business Plus', 'slug' => 'virtual-business-plus', 'price' => 199.99, 'billing_cycle' => 'yearly', 'category' => 'virtual-business', 'is_active' => true],
            ['name' => 'Telephone Answering Service', 'slug' => 'telephone-answering-service', 'price' => 357.00, 'billing_cycle' => 'yearly', 'category' => 'telephone', 'is_active' => true],
            ['name' => 'VBA + Telephone Answering', 'slug' => 'vba-telephone', 'price' => 319.99, 'billing_cycle' => 'yearly', 'category' => 'combined', 'is_active' => true],
            ['name' => 'VBP + Telephone Answering', 'slug' => 'vbp-telephone', 'price' => 349.99, 'billing_cycle' => 'yearly', 'category' => 'combined', 'is_active' => true],
            ['name' => 'VBP + Legal Document Pack', 'slug' => 'vbp-legal', 'price' => 369.99, 'billing_cycle' => 'yearly', 'category' => 'combined', 'is_active' => true],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(['name' => $service['name']], $service);
        }

        $locations = [
            ['name' => 'West End - Great Portland Street', 'slug' => 'west-end', 'address' => '85 Great Portland Street, London', 'city' => 'London', 'postcode' => 'W1W 7LT', 'area' => 'West End', 'is_active' => true],
            ['name' => 'City - Hatton Garden', 'slug' => 'city', 'address' => '63-66 Hatton Garden, London', 'city' => 'London', 'postcode' => 'EC1N 8PN', 'area' => 'City', 'is_active' => true],
            ['name' => 'Canary Wharf', 'slug' => 'canary-wharf', 'address' => 'One Canada Square, London', 'city' => 'London', 'postcode' => 'E14 5AB', 'area' => 'Canary Wharf', 'is_active' => true],
            ['name' => 'Kings Cross', 'slug' => 'kings-cross', 'address' => '200 Euston Road, London', 'city' => 'London', 'postcode' => 'NW1 2DA', 'area' => 'Kings Cross', 'is_active' => true],
        ];

        foreach ($locations as $location) {
            Location::updateOrCreate(['slug' => $location['slug']], $location);
        }
    }
}
