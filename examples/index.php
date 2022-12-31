<?php

use Faker\Factory;
use Nettwerk\PhpFakerMusic\Classical;
use Nettwerk\PhpFakerMusic\Dance;
use Nettwerk\PhpFakerMusic\HipHop;
use Nettwerk\PhpFakerMusic\Metal;
use Nettwerk\PhpFakerMusic\Reggae;

require_once __DIR__ . '/../vendor/autoload.php';

$faker = Factory::create();
$faker->addProvider(new Classical($faker));
$faker->addProvider(new Reggae($faker));
$faker->addProvider(new HipHop($faker));
$faker->addProvider(new Metal($faker));
$faker->addProvider(new Dance($faker));

echo $faker->musicClassicalArtist() . ' - ' . $faker->musicClassicalAlbum() . PHP_EOL;
echo $faker->musicReggaeArtist() . ' - ' . $faker->musicReggaeAlbum() . PHP_EOL;
echo $faker->musicHipHopArtist() . ' - ' . $faker->musicHipHopAlbum() . PHP_EOL;
echo $faker->musicMetalArtist() . ' - ' . $faker->musicMetalAlbum() . PHP_EOL;
echo $faker->musicDanceArtist() . ' - ' . $faker->musicDanceAlbum() . PHP_EOL;
