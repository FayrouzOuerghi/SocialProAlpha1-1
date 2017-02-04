<?php
/**
 * Created by PhpStorm.
 * User: Espoir
 * Date: 01/02/2017
 * Time: 15:18
 */

namespace SocialPro\MainBundle\Entity;
use Doctrine\ORM\Mapping as espoir;

/**
 * @espoir\Entity
 */
class Stage
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
     * @espoir\Column(type="string")
     *
     */
    private  $nom;


    /**
     * @espoir\Column(type="string")
     *
     */
    private  $prenom;

    /**
     * @espoir\Column(type="string")
     *
     */
    private  $sexe;

    /**
     * @espoir\Column(type="string")
     *
     */
    private  $email;

    /**
     * @espoir\Column(type="string")
     *
     */
    private  $tel;

    /**
     * @espoir\Column(type="string")
     *
     */
    private  $langues;

    /**
     * @espoir\Column(type="string")
     *
     */
    private  $ville;

    /**
     * @espoir\Column(type="string")
     *
     */
    private  $codePostal;

    ////




    /**
     * @espoir\Column(type="text",nullable=true)
     *
     */
    private  $formation_education;





    /**
     * @espoir\Column(type="text",nullable=true)
     *
     */
    private  $competance_communication;


    /**
     * @espoir\Column(type="text",nullable=true)
     *
     */
    private  $competance_numerique;



    /**
     *  @espoir\Column(type="datetime")
     */
    private $date;


    /**
     *  @espoir\Column(type="string",nullable=true)
     */
    private $confirmation="En cours";


    /**
     *  @espoir\Column(type="text",nullable=true)
     */
    private $reponse="En Attente";

    /**
     * Stage constructor.
     * @param $formation_education
     * @param $competance_communication
     * @param $competance_numerique
     * @param $date
     */
    public function __construct()
    {
        $this->formation_education = "";
        $this->competance_communication = "";
        $this->competance_numerique = "";
        $this->date = new \DateTime('now');
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
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getLangues()
    {
        return $this->langues;
    }

    /**
     * @param mixed $langues
     */
    public function setLangues($langues)
    {
        $this->langues = $langues;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * @param mixed $codePostal
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    }

    /**
     * @return mixed
     */
    public function getFormationEducation()
    {
        return $this->formation_education;
    }

    /**
     * @param mixed $formation_education
     */
    public function setFormationEducation($formation_education)
    {
        $this->formation_education = $formation_education;
    }

    /**
     * @return mixed
     */
    public function getCompetanceCommunication()
    {
        return $this->competance_communication;
    }

    /**
     * @param mixed $competance_communication
     */
    public function setCompetanceCommunication($competance_communication)
    {
        $this->competance_communication = $competance_communication;
    }

    /**
     * @return mixed
     */
    public function getCompetanceNumerique()
    {
        return $this->competance_numerique;
    }

    /**
     * @param mixed $competance_numerique
     */
    public function setCompetanceNumerique($competance_numerique)
    {
        $this->competance_numerique = $competance_numerique;
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
    public function getConfirmation()
    {
        return $this->confirmation;
    }

    /**
     * @param mixed $confirmation
     */
    public function setConfirmation($confirmation)
    {
        $this->confirmation = $confirmation;
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





}