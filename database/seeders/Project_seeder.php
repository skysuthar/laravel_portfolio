<?php

namespace Database\Seeders;

use App\Models\createproject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Project_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        createproject::truncate();

        $data = 
        [
            ["project_name" => "Flipkart UI",
            "project_image" => "Screenshot.png",
            "project_link" => "https://skysuthar.github.io/flipkart.github.io/",
            "project_description" => "Developed Flipkart UI using HTML, CSS, Javascript and Bootstrap",
            "project_status" => "Publish",
            ],
            [
            "project_name" => "Visiting Card",
            "project_image" => "visiting_card.png",
            "project_link" => "https://github.com/skysuthar/myownCard.github.io",
            "project_description" => "Developed a Visiting card using HTML, CSS, and javascript In this card dark mode is special functionality.",
            "project_status" => "Publish",        
            ],
            [
            "project_name" => "Movie House",
            "project_image" => "movie_house.png",
            "project_link" => "https://moviehouse2022.000webhostapp.com/",
            "project_description" => "Movie House is an online Movie Booking System Website.Developed Using HTML, CSS, javascript, jquery, Bootstrap, PHP, and Mysql.
                Key Features:-
                - Paytm Payment Integration.
                - Pdf Downloader.
                - Email Sender.
                - Form Validations.",
            "project_status" => "Publish",        
            ],
            [
            "project_name" => "Car Animation",
            "project_image" => "car_animation.png",
            "project_link" => "https://skysuthar.github.io/caranimation.github.io/",
            "project_description" => "Here Developed A Simple Car Animation for Entertainment. Developed Using HTML, CSS, javascript",
            "project_status" => "Publish",        
            ]
        ];

        createproject::insert($data);
    }
}
