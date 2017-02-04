<?php
/**
 * Created by PhpStorm.
 * User: Espoir
 * Date: 01/02/2017
 * Time: 15:19
 */

namespace SocialPro\MainBundle\Entity;
use Doctrine\ORM\Mapping as espoir;

/**
 * @espoir\Entity
 */
class Conference
{

    /**
     * @espoir\Column(type="integer")
     * @espoir\Id
     * @espoir\GeneratedValue
     */
    private $id;


    /**
     *  @espoir\Column(type="datetime")
     */
    private $date;

}