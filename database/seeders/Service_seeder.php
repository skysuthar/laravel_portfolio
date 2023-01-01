<?php

namespace Database\Seeders;

use App\Models\service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Service_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        service::truncate();

        $data = [
            [
                "service_description" => "I'm Able to provide You Front-End service with Fully Responsible and With Good Speed Optimizing Using HTML, CSS, JavaScript, jQuery and Bootstrap.",
                "service_name" => "Frontend Development",
                "service_about" => "Provide HTML, CSS, js, jQuery and Bootstrap",
                "service_images" => "frontend.png",
                "service_status" => "Active",
            ],
            [
                "service_description" => "I also provide backend services like:-
                                        - Full backend functionalities.
                                        - Different Types of Payment Integrations.
                                        - Working With APIs.",
                "service_name" => "Backend Development",
                "service_about" => "Backend services",
                "service_images" => "developer-responsebilities (2).jpg",
                "service_status" => "Active",
            ]
        ];

        service::insert($data);
    }
}
