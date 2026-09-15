<?php

namespace App\DataFixtures;

use App\Entity\Eisdiele;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EisdieleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $daten = [
            [
                'name' => 'Eiscafé Sarcletti',
                'stadt' => 'München',
                'bewertung' => 4.8,
                'lieblingssorte' => 'Pistazie',
            ],
            [
                'name' => 'Eis Venezia',
                'stadt' => 'Hamburg',
                'bewertung' => 4.6,
                'lieblingssorte' => 'Spaghetti-Eis',
            ],
            [
                'name' => 'Tamino Eis',
                'stadt' => 'Berlin',
                'bewertung' => 4.9,
                'lieblingssorte' => 'Mango',
            ],
        ];

        foreach ($daten as $eintrag) {
            $eisdiele = new Eisdiele();
            $eisdiele->setName($eintrag['name']);
            $eisdiele->setStadt($eintrag['stadt']);
            $eisdiele->setBewertung($eintrag['bewertung']);
            $eisdiele->setLieblingssorte($eintrag['lieblingssorte']);

            $manager->persist($eisdiele);
        }

        $manager->flush();
    }
}