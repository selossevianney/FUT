<?php

namespace FUT\ARManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FUT\ARManagerBundle\Entity\Cards;
use FUT\ARManagerBundle\Entity\Players;

class DefaultController extends Controller
{
    public function indexAction($orderBy, $order)
    {
    	$repo = $this->getDoctrine()
    				 ->getManager()
    				 ->getRepository('FUTARManagerBundle:Cards');

    	$cards = new Cards();
    	if($orderBy == 'lastName' || $orderBy == 'club')
    		$cards = $repo->findAllByPlayersAttributes($orderBy,$order,'Listé');
    	else
    	{
	    	$cards = $repo->findBy(
	    		array('status' => 'Listé'),
	    		array($orderBy => $order),
	    		80,
	    		0
	    	);
    	}

        return $this->render('FUTARManagerBundle:Platform:index.html.twig',array('cards' => $cards));
    }

    public function soldAction($orderBy, $order)
    {
    	$repo = $this->getDoctrine()
    				 ->getManager()
    				 ->getRepository('FUTARManagerBundle:Cards');

    	$cards = new Cards();
    	if($orderBy == 'lastName' || $orderBy == 'club')
    		$cards = $repo->findAllByPlayersAttributes($orderBy,$order,'Vendu');
    	else
    	{
	    	$cards = $repo->findBy(
	    		array('status' => 'Vendu'),
	    		array($orderBy => $order),
	    		80,
	    		0
	    	);
    	}

        return $this->render('FUTARManagerBundle:Platform:sold.html.twig',array('cards' => $cards));
    }

    public function topAction($orderBy, $order)
    {
    	$repo = $this->getDoctrine()
    			->getManager()
    			->getRepository('FUTARManagerBundle:Players');

    	$players = new Players();

    	$players = $repo->findby(array(),
    		array($orderBy => $order));

    	return $this->render('FUTARManagerBundle:Platform:top.html.twig',array('players' => $players));    
    }

    public function rebuyAction($orderBy, $order)
    {
    	$repo = $this->getDoctrine()
    			->getManager()
    			->getRepository('FUTARManagerBundle:Players');

    	$players = new Players();

    	$players = $repo->findBy(
	    		array('forSale' => '0'),
	    		array($orderBy => $order),
	    		80,
	    		0
	    	);

    	return $this->render('FUTARManagerBundle:Platform:rebuy.html.twig',array('players' => $players));    
    }
}
