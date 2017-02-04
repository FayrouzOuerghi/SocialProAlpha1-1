<?php
/**
 * Created by PhpStorm.
 * User: Espoir
 * Date: 01/02/2017
 * Time: 15:27
 */

namespace SocialPro\MainBundle\Entity;
use Doctrine\ORM\Mapping as espoir;

/**
 * @espoir\Entity
 */
class Formation
{
    /**
     * @espoir\Column(type="integer")
     * @espoir\Id
     * @espoir\GeneratedValue
     */
    private $id;

    /**
     * @espoir\Column(type="string")
     *
     */
    private  $code;



    /**
     *  @espoir\Column(type="datetime")
     */
    private $date;


    /**
     *  @espoir\Column(type="string",nullable=true)
     */
    private $confirmation;


    /**
     *  @espoir\Column(type="text",nullable=true)
     */
    private $reponse;

}