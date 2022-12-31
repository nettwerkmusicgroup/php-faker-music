# PHP Faker music

A pop music provider for 
[fzaninotto/faker](https://github.com/fzaninotto/Faker)

## Installation

Install with composer.  
Add to your composer.json file:

```json
{
  "require": {
    "rauwebieten/php-faker-music": "^1.0"
  }
}
```

## Usage

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Nettwerk\PhpFakerMusic\Classical($faker));
$faker->addProvider(new \Nettwerk\PhpFakerMusic\Reggae($faker));
$faker->addProvider(new \Nettwerk\PhpFakerMusic\HipHop($faker));
$faker->addProvider(new \Nettwerk\PhpFakerMusic\Metal($faker));
$faker->addProvider(new \Nettwerk\PhpFakerMusic\Dance($faker));

echo $faker->musicClassicalArtist() . ' - ' . $faker->musicClassicalAlbum() . PHP_EOL;
echo $faker->musicReggaeArtist() . ' - ' . $faker->musicReggaeAlbum() . PHP_EOL;
echo $faker->musicHipHopArtist() . ' - ' . $faker->musicHipHopAlbum() . PHP_EOL;
echo $faker->musicMetalArtist() . ' - ' . $faker->musicMetalAlbum() . PHP_EOL;
echo $faker->musicDanceArtist() . ' - ' . $faker->musicDanceAlbum() . PHP_EOL;
```

See the examples folder for more information

## Example result

See [examples/output/example.md](examples/output/example.md) for
- 100 generated metal artists/albums
- 100 generated dance artists/albums
- 100 generated classical artists/albums
- 100 generated reggae artists/albums
- 100 generated hiphop artists/albums

## Why do you needs this?

To fill a e-commerce database with fake data?
See 
[fzaninotto/faker](https://github.com/fzaninotto/Faker)
