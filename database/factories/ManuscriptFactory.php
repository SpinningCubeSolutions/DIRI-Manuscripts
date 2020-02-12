<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Manuscript;
use Faker\Generator as Faker;

$factory->define(Manuscript::class, function (Faker $faker) {
    $faker->locale = 'en_NZ';
    return [
        'physical_location' => $faker->randomElement(["Bangkok National Museum", "Dhammachai International Research Institute", "Erawan Museum", "Chiang Mai National Museum", "Khon Kaen National Museum", "Nakhon Si Thammarat National Museum", "Chulalongkorn University Library", "Chiang Mai University Library", "Thammasat University Library", "National Museum of Cambodia"]),
        'classmark' => "$faker->phoneNumber()",
        'place_of_origin' => $faker->randomElement([ "Ayutthaya", "Sukhothai", "Bagan", "Suphan Buri", "Thonburi", "Bago", "Lopburi", "Chiang Saen", "Vieng Chan", "Angkor", "Chiang Mai", "Martaban", "Nakhon Si Thammarat", "Nalanda University", "Bodh Gaya", "Varanasi" ]),
        'date_of_creation' => $faker->randomElement(["6th century CE","7th century CE","8th century CE","9th century CE","10th century CE", "11th century CE","12th century CE","13th century CE","14th century CE","15th century CE"]),
        'associated_persons' => $faker->name($gender = 'male'),
        'physical_description' => $faker->text(200),
        'material' => $faker->text(100),
        'format' => $faker->randomElement(['Folio','Quarto','Codex','Scroll']),
        'binding' => $faker->randomElement(['String','Jute','Palm thread']),
        'images' => " ",
        'user_id' => App\User::first(),
        'subject' => $faker->randomElement(['Sutta','Vinaya','Abhidhamma','Sila (morality)','Meditation','Cosmology', 'Jhanas', 'Theravada','Mahayana', 'Dhamma']),
        'author' => $faker->name($gender = 'male'),
    ];
});
