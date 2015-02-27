<?php
// src/FUT/ARManagerBundle/DataFixtures/ORM/LoadPlayers.php

namespace FUT\ARManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FUT\ARManagerBundle\Entity\Players;
use FUT\ARManagerBundle\Entity\Cards;
use FUT\ARManagerBundle\Entity\Clubs;

class LoadPlayers implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {

    $club = new Clubs();
    $club->setName('Barcelone');
    $club->setLogo('bundles/futarmanager/images/clubs/Barcelone.png');
    
    $club2 = new Clubs();
    $club2->setName('Real');
    $club2->setLogo('bundles/futarmanager/images/clubs/Real.png');

    $manager->persist($club);
    $manager->persist($club2);

    $player = new Players();
    $player->setClub($club);
    $player->setLastName('Pedro');
    $player->setGeneral(83);
    $player->setPhoto('bundles/futarmanager/images/small/pedro.png');
    $player->setForme('regular');
    $player->setCardPhoto('bundles/futarmanager/images/cards/pedro_regular.png');

    $player2 = new Players();
    $player2->setClub($club2);
    $player2->setLastName('Modric');
    $player2->setFirstName('Luka');
    $player2->setGeneral(87);
    $player2->setPhoto('bundles/futarmanager/images/small/modric.png');
    $player2->setForme('regular');
    $player2->setCardPhoto('bundles/futarmanager/images/cards/modric_regular.png');

    $manager->persist($player);
    $manager->persist($player2);

    $card = new Cards();
    $card->setPlayer($player);
    $card->setBuyPrice(3500);
    $card->setSellPrice(4400);
    $benefs = 4400*0.95-3500;
    $card->setBuyDate(new \Datetime());
    $card->setStatus('Listé');
    $card->setBenefices($benefs);

    $card2 = new Cards();
    $card2->setPlayer($player2);
    $card2->setBuyPrice(35000);
    $card2->setSellPrice(44000);
    $benefs = 44000*0.95-35000;
    $card2->setBuyDate(new \Datetime());
    $card2->setStatus('Listé');
    $card2->setBenefices($benefs);

    $manager->persist($card);
    $manager->persist($card2);

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}