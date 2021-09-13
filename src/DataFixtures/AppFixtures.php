<?php

namespace App\DataFixtures;

use App\Entity\Event;
use Faker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 30; $i++) {
            $event = new Event();

            $event->setTitle('Event ' . $i);
            $event->setDescription($faker->text(300));
            $event->setDate($faker->dateTimeBetween('+1 week', '+3 week'));
            $event->setAddress($faker->address());
            $event->setLat($faker->latitude());
            $event->setLon($faker->longitude());
            $event->setMaxAttendants(rand(1, 20));
            $event->setnbAttendants(rand(1, 20));
            $event->setAuthor($faker->name());


            $manager->persist($event);
            $manager->flush();
        }
    }
}
