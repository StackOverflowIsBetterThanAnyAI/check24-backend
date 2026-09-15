<?php

namespace App\DataFixtures;

use App\Entity\Eisdiele;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $eisdielen = [
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
            [
                'name' => 'Eisdiele Deggendorf',
                'stadt' => 'Deggendorf',
                'bewertung' => 2.9,
                'lieblingssorte' => 'Schlumpf',
            ],
        ];

        foreach ($eisdielen as $data) {
            $eisdiele = new Eisdiele();

            $eisdiele->setName($data['name']);
            $eisdiele->setStadt($data['stadt']);
            $eisdiele->setBewertung($data['bewertung']);
            $eisdiele->setLieblingssorte($data['lieblingssorte']);

            $manager->persist($eisdiele);
        }

        $manager->flush();
    }
}
