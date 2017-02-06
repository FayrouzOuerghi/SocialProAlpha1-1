<?php


namespace SocialPro\MainBundle\Entity;
use Doctrine\ORM\Mapping as espoir;

/**
 * @espoir\Entity
 * @espoir\Table("Reclamation")
 */
class Reclamation
{
    /**
     * @espoir\Column(type="integer")
     * @espoir\Id
     * @espoir\GeneratedValue
     */
    private $id;


    /**
     *  @espoir\Column(type="string")
     */
    private $type;


    /**
     *  @espoir\Column(type="string")
     */
    private $nom;

    /**
     *  @espoir\Column(type="string")
     */
    private $code;

    /**
     *  @espoir\Column(type="text")
     */
 private $description;

    /**
     *  @espoir\Column(type="datetime")
     */
    private $date;

    /**
     *  @espoir\Column(type="text",nullable=true)
     */
    private $reponse;

    /**
     * Reclamation constructor.
     * @param $date
     * @param $reponse
     */
    public function __construct()
    {
        $this->date = new  \DateTime('now');
        $this->reponse = "En attente";
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * @param mixed $reponse
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }


}