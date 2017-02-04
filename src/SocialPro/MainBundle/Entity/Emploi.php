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
class Emploi
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
     *  @espoir\Column(type="datetime")
     */
    private $dateNaissance;


    /**
     * @espoir\Column(type="string")
     *
     */
    private  $lieuNaissance;

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

    //////// End Of Information


    // Experience professionel



    /**
     * @espoir\Column(type="text",length=1500,nullable=true)
     *
     */
    private  $experience_date_fonction;

    /**
     * @espoir\Column(type="string")
     *
     */
    private  $employeur;


    /**
     * @espoir\Column(type="text",nullable=true)
     *
     */
    private  $principale_activite_responsabilite;


    //end of experience//

    // education et formation

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
    private  $organi_manageriel;


    /**
     * @espoir\Column(type="text",nullable=true)
     *
     */
    private  $competance_numerique;

    /**
     * @espoir\Column(type="text",nullable=true)
     *
     */
    private  $competance_emploi;




    /**
     *  @espoir\Column(type="datetime")
     */
    private $date;


    /**
     *  @espoir\Column(type="string",nullable=true)
     */
    private $confirmation="En cours";


    /**
     *  @espoir\Column(type="text",length=1500,nullable=true)
     */
    private $reponse="En Attente";

    /**
     * Emploi constructor.
     * @param $competance_communication
     * @param $organi_manageriel
     * @param $competance_numerique
     * @param $competance_emploi
     * @param $date
     */
    public function __construct()
    {
        $this->competance_communication = "";
        $this->organi_manageriel = "";
        $this->competance_numerique = "";
        $this->competance_emploi = "";
        $this->date = new  \DateTime('now');


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
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * @param mixed $dateNaissance
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * @return mixed
     */
    public function getLieuNaissance()
    {
        return $this->lieuNaissance;
    }

    /**
     * @param mixed $lieuNaissance
     */
    public function setLieuNaissance($lieuNaissance)
    {
        $this->lieuNaissance = $lieuNaissance;
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
    public function getExperienceDateFonction()
    {
        return $this->experience_date_fonction;
    }

    /**
     * @param mixed $experience_date_fonction
     */
    public function setExperienceDateFonction($experience_date_fonction)
    {
        $this->experience_date_fonction = $experience_date_fonction;
    }

    /**
     * @return mixed
     */
    public function getEmployeur()
    {
        return $this->employeur;
    }

    /**
     * @param mixed $employeur
     */
    public function setEmployeur($employeur)
    {
        $this->employeur = $employeur;
    }

    /**
     * @return mixed
     */
    public function getPrincipaleActiviteResponsabilite()
    {
        return $this->principale_activite_responsabilite;
    }

    /**
     * @param mixed $principale_activite_responsabilite
     */
    public function setPrincipaleActiviteResponsabilite($principale_activite_responsabilite)
    {
        $this->principale_activite_responsabilite = $principale_activite_responsabilite;
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
    public function getOrganiManageriel()
    {
        return $this->organi_manageriel;
    }

    /**
     * @param mixed $organi_manageriel
     */
    public function setOrganiManageriel($organi_manageriel)
    {
        $this->organi_manageriel = $organi_manageriel;
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
    public function getCompetanceEmploi()
    {
        return $this->competance_emploi;
    }

    /**
     * @param mixed $competance_emploi
     */
    public function setCompetanceEmploi($competance_emploi)
    {
        $this->competance_emploi = $competance_emploi;
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