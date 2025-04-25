<?php

namespace App\DataFixtures;

use App\Entity\Patient;
use App\Entity\Consultation;
use App\Entity\Prescription;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $patient = new Patient();
            $patient->setFirstName($faker->firstName())
                    ->setLastName($faker->lastName())
                    ->setSpecialty($faker->jobTitle())
                    ->setAddress($faker->address())
                    ->setPhone($faker->phoneNumber());

            $manager->persist($patient);

            // Add consultations
            for ($j = 0; $j < rand(1, 3); $j++) {
                $consultation = new Consultation();
                $consultation->setDate(\DateTimeImmutable::createFromMutable($faker->dateTimeBetween('-1 year', 'now')))
                             ->setReason($faker->sentence())
                             ->setStatus($faker->randomElement(['pending', 'completed', 'cancelled']))
                             ->setPatient($patient);

                $manager->persist($consultation);
            }

            // Add prescriptions
            for ($k = 0; $k < rand(1, 2); $k++) {
                $prescription = new Prescription();
                $prescription->setDate(date: \DateTimeImmutable::createFromMutable($faker->dateTimeBetween('-1 year', 'now')))
                             ->setStatuts($faker->randomElement(['active', 'expired']))
                             ->setPatient($patient);

                $manager->persist($prescription);
            }
        }

        $manager->flush();
    }
}
