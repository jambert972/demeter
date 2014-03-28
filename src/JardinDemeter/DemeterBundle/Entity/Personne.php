<?php

namespace JardinDemeter\DemeterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
 * @ORM\Table(name="Personne")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="JardinDemeter\DemeterBundle\Entity\PersonneRepository")
 */
class Personne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPersonne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpersonne;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="date_naissance", type="string", length=10, nullable=true)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_naissance", type="string", length=45, nullable=true)
     */
    private $lieuNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=45, nullable=true)
     */
    private $nationalite;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=100, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=45, nullable=true)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel1", type="integer", nullable=true)
     */
    private $tel1;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel2", type="integer", nullable=true)
     */
    private $tel2;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau_etude", type="string", length=45, nullable=true)
     */
    private $niveauEtude;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_diplome", type="string", length=45, nullable=true)
     */
    private $nomDiplome;

    /**
     * @var string
     *
     * @ORM\Column(name="permis", type="string", length=3, nullable=true)
     */
    private $permis;

    /**
     * @var string
     *
     * @ORM\Column(name="caces", type="string", length=6, nullable=true)
     */
    private $caces;

    /**
     * @var string
     *
     * @ORM\Column(name="situation_familiale", type="string", length=20, nullable=true)
     */
    private $situationFamiliale;

    /**
     * @var string
     *
     * @ORM\Column(name="personne_charge", type="string", length=5, nullable=true)
     */
    private $personneCharge;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_personne_charge", type="integer", nullable=true)
     */
    private $numPersonneCharge;

    /**
     * @var string
     *
     * @ORM\Column(name="hebergement", type="string", length=45, nullable=true)
     */
    private $hebergement;

    /**
     * @var string
     *
     * @ORM\Column(name="probleme_logement", type="string", length=45, nullable=true)
     */
    private $problemeLogement;

    /**
     * @var string
     *
     * @ORM\Column(name="moyen_transport", type="string", length=20, nullable=true)
     */
    private $moyenTransport;

    /**
     * @var string
     *
     * @ORM\Column(name="zone", type="string", length=3, nullable=true)
     */
    private $zone;

    /**
     * @var string
     *
     * @ORM\Column(name="secteur", type="string", length=10, nullable=true)
     */
    private $secteur;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_rattachement", type="string", length=45, nullable=true)
     */
    private $lieuRattachement;

    /**
     * @var string
     *
     * @ORM\Column(name="rsa_socle", type="string", length=45, nullable=true)
     */
    private $rsaSocle;

    /**
     * @var string
     *
     * @ORM\Column(name="date_socle", type="string", length=10, nullable=true)
     */
    private $dateSocle;

    /**
     * @var string
     *
     * @ORM\Column(name="rsa_plafond", type="string", length=20, nullable=true)
     */
    private $rsaPlafond;

    /**
     * @var string
     *
     * @ORM\Column(name="date_plafond", type="string", length=10, nullable=true)
     */
    private $datePlafond;

    /**
     * @var string
     *
     * @ORM\Column(name="rsa_jeune", type="string", length=45, nullable=true)
     */
    private $rsaJeune;

    /**
     * @var string
     *
     * @ORM\Column(name="date_jeune", type="string", length=10, nullable=true)
     */
    private $dateJeune;

    /**
     * @var string
     *
     * @ORM\Column(name="rqth", type="string", length=45, nullable=true)
     */
    private $rqth;

    /**
     * @var string
     *
     * @ORM\Column(name="date_rqth", type="string", length=10, nullable=true)
     */
    private $dateRqth;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_rqth", type="integer", nullable=true)
     */
    private $numRqth;

    /**
     * @var string
     *
     * @ORM\Column(name="ass", type="string", length=45, nullable=true)
     */
    private $ass;

    /**
     * @var string
     *
     * @ORM\Column(name="date_ass", type="string", length=10, nullable=true)
     */
    private $dateAss;

    /**
     * @var string
     *
     * @ORM\Column(name="agrement_iae", type="string", length=45, nullable=true)
     */
    private $agrementIae;

    /**
     * @var string
     *
     * @ORM\Column(name="date_iae", type="string", length=10, nullable=true)
     */
    private $dateIae;

    /**
     * @var string
     *
     * @ORM\Column(name="inscrit_pe", type="string", length=45, nullable=true)
     */
    private $inscritPe;

    /**
     * @var string
     *
     * @ORM\Column(name="date_pe", type="string", length=10, nullable=true)
     */
    private $datePe;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_pe", type="integer", nullable=true)
     */
    private $numPe;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_securite_sociale", type="integer", nullable=true)
     */
    private $numSecuriteSociale;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_allocataire", type="integer", nullable=true)
     */
    private $numAllocataire;

    /**
     * @var string
     *
     * @ORM\Column(name="date_allocataire", type="string", length=10, nullable=true)
     */
    private $dateAllocataire;



    /**
     * Get idpersonne
     *
     * @return integer 
     */
    public function getIdpersonne()
    {
        return $this->idpersonne;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Personne
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Personne
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNaissance
     *
     * @param string $dateNaissance
     * @return Personne
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return string 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set lieuNaissance
     *
     * @param string $lieuNaissance
     * @return Personne
     */
    public function setLieuNaissance($lieuNaissance)
    {
        $this->lieuNaissance = $lieuNaissance;

        return $this;
    }

    /**
     * Get lieuNaissance
     *
     * @return string 
     */
    public function getLieuNaissance()
    {
        return $this->lieuNaissance;
    }

    /**
     * Set nationalite
     *
     * @param string $nationalite
     * @return Personne
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string 
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Personne
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Personne
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set tel1
     *
     * @param integer $tel1
     * @return Personne
     */
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;

        return $this;
    }

    /**
     * Get tel1
     *
     * @return integer 
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * Set tel2
     *
     * @param integer $tel2
     * @return Personne
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;

        return $this;
    }

    /**
     * Get tel2
     *
     * @return integer 
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Personne
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set niveauEtude
     *
     * @param string $niveauEtude
     * @return Personne
     */
    public function setNiveauEtude($niveauEtude)
    {
        $this->niveauEtude = $niveauEtude;

        return $this;
    }

    /**
     * Get niveauEtude
     *
     * @return string 
     */
    public function getNiveauEtude()
    {
        return $this->niveauEtude;
    }

    /**
     * Set nomDiplome
     *
     * @param string $nomDiplome
     * @return Personne
     */
    public function setNomDiplome($nomDiplome)
    {
        $this->nomDiplome = $nomDiplome;

        return $this;
    }

    /**
     * Get nomDiplome
     *
     * @return string 
     */
    public function getNomDiplome()
    {
        return $this->nomDiplome;
    }

    /**
     * Set permis
     *
     * @param string $permis
     * @return Personne
     */
    public function setPermis($permis)
    {
        $this->permis = $permis;

        return $this;
    }

    /**
     * Get permis
     *
     * @return string 
     */
    public function getPermis()
    {
        return $this->permis;
    }

    /**
     * Set caces
     *
     * @param string $caces
     * @return Personne
     */
    public function setCaces($caces)
    {
        $this->caces = $caces;

        return $this;
    }

    /**
     * Get caces
     *
     * @return string 
     */
    public function getCaces()
    {
        return $this->caces;
    }

    /**
     * Set situationFamiliale
     *
     * @param string $situationFamiliale
     * @return Personne
     */
    public function setSituationFamiliale($situationFamiliale)
    {
        $this->situationFamiliale = $situationFamiliale;

        return $this;
    }

    /**
     * Get situationFamiliale
     *
     * @return string 
     */
    public function getSituationFamiliale()
    {
        return $this->situationFamiliale;
    }

    /**
     * Set personneCharge
     *
     * @param string $personneCharge
     * @return Personne
     */
    public function setPersonneCharge($personneCharge)
    {
        $this->personneCharge = $personneCharge;

        return $this;
    }

    /**
     * Get personneCharge
     *
     * @return string 
     */
    public function getPersonneCharge()
    {
        return $this->personneCharge;
    }

    /**
     * Set numPersonneCharge
     *
     * @param integer $numPersonneCharge
     * @return Personne
     */
    public function setNumPersonneCharge($numPersonneCharge)
    {
        $this->numPersonneCharge = $numPersonneCharge;

        return $this;
    }

    /**
     * Get numPersonneCharge
     *
     * @return integer 
     */
    public function getNumPersonneCharge()
    {
        return $this->numPersonneCharge;
    }

    /**
     * Set hebergement
     *
     * @param string $hebergement
     * @return Personne
     */
    public function setHebergement($hebergement)
    {
        $this->hebergement = $hebergement;

        return $this;
    }

    /**
     * Get hebergement
     *
     * @return string 
     */
    public function getHebergement()
    {
        return $this->hebergement;
    }

    /**
     * Set problemeLogement
     *
     * @param string $problemeLogement
     * @return Personne
     */
    public function setProblemeLogement($problemeLogement)
    {
        $this->problemeLogement = $problemeLogement;

        return $this;
    }

    /**
     * Get problemeLogement
     *
     * @return string 
     */
    public function getProblemeLogement()
    {
        return $this->problemeLogement;
    }

    /**
     * Set moyenTransport
     *
     * @param string $moyenTransport
     * @return Personne
     */
    public function setMoyenTransport($moyenTransport)
    {
        $this->moyenTransport = $moyenTransport;

        return $this;
    }

    /**
     * Get moyenTransport
     *
     * @return string 
     */
    public function getMoyenTransport()
    {
        return $this->moyenTransport;
    }

    /**
     * Set zone
     *
     * @param string $zone
     * @return Personne
     */
    public function setZone($zone)
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * Get zone
     *
     * @return string 
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Set secteur
     *
     * @param string $secteur
     * @return Personne
     */
    public function setSecteur($secteur)
    {
        $this->secteur = $secteur;

        return $this;
    }

    /**
     * Get secteur
     *
     * @return string 
     */
    public function getSecteur()
    {
        return $this->secteur;
    }

    /**
     * Set lieuRattachement
     *
     * @param string $lieuRattachement
     * @return Personne
     */
    public function setLieuRattachement($lieuRattachement)
    {
        $this->lieuRattachement = $lieuRattachement;

        return $this;
    }

    /**
     * Get lieuRattachement
     *
     * @return string 
     */
    public function getLieuRattachement()
    {
        return $this->lieuRattachement;
    }

    /**
     * Set rsaSocle
     *
     * @param string $rsaSocle
     * @return Personne
     */
    public function setRsaSocle($rsaSocle)
    {
        $this->rsaSocle = $rsaSocle;

        return $this;
    }

    /**
     * Get rsaSocle
     *
     * @return string 
     */
    public function getRsaSocle()
    {
        return $this->rsaSocle;
    }

    /**
     * Set dateSocle
     *
     * @param string $dateSocle
     * @return Personne
     */
    public function setDateSocle($dateSocle)
    {
        $this->dateSocle = $dateSocle;

        return $this;
    }

    /**
     * Get dateSocle
     *
     * @return string 
     */
    public function getDateSocle()
    {
        return $this->dateSocle;
    }

    /**
     * Set rsaPlafond
     *
     * @param string $rsaPlafond
     * @return Personne
     */
    public function setRsaPlafond($rsaPlafond)
    {
        $this->rsaPlafond = $rsaPlafond;

        return $this;
    }

    /**
     * Get rsaPlafond
     *
     * @return string 
     */
    public function getRsaPlafond()
    {
        return $this->rsaPlafond;
    }

    /**
     * Set datePlafond
     *
     * @param string $datePlafond
     * @return Personne
     */
    public function setDatePlafond($datePlafond)
    {
        $this->datePlafond = $datePlafond;

        return $this;
    }

    /**
     * Get datePlafond
     *
     * @return string 
     */
    public function getDatePlafond()
    {
        return $this->datePlafond;
    }

    /**
     * Set rsaJeune
     *
     * @param string $rsaJeune
     * @return Personne
     */
    public function setRsaJeune($rsaJeune)
    {
        $this->rsaJeune = $rsaJeune;

        return $this;
    }

    /**
     * Get rsaJeune
     *
     * @return string 
     */
    public function getRsaJeune()
    {
        return $this->rsaJeune;
    }

    /**
     * Set dateJeune
     *
     * @param string $dateJeune
     * @return Personne
     */
    public function setDateJeune($dateJeune)
    {
        $this->dateJeune = $dateJeune;

        return $this;
    }

    /**
     * Get dateJeune
     *
     * @return string 
     */
    public function getDateJeune()
    {
        return $this->dateJeune;
    }

    /**
     * Set rqth
     *
     * @param string $rqth
     * @return Personne
     */
    public function setRqth($rqth)
    {
        $this->rqth = $rqth;

        return $this;
    }

    /**
     * Get rqth
     *
     * @return string 
     */
    public function getRqth()
    {
        return $this->rqth;
    }

    /**
     * Set dateRqth
     *
     * @param string $dateRqth
     * @return Personne
     */
    public function setDateRqth($dateRqth)
    {
        $this->dateRqth = $dateRqth;

        return $this;
    }

    /**
     * Get dateRqth
     *
     * @return string 
     */
    public function getDateRqth()
    {
        return $this->dateRqth;
    }

    /**
     * Set numRqth
     *
     * @param integer $numRqth
     * @return Personne
     */
    public function setNumRqth($numRqth)
    {
        $this->numRqth = $numRqth;

        return $this;
    }

    /**
     * Get numRqth
     *
     * @return integer 
     */
    public function getNumRqth()
    {
        return $this->numRqth;
    }

    /**
     * Set ass
     *
     * @param string $ass
     * @return Personne
     */
    public function setAss($ass)
    {
        $this->ass = $ass;

        return $this;
    }

    /**
     * Get ass
     *
     * @return string 
     */
    public function getAss()
    {
        return $this->ass;
    }

    /**
     * Set dateAss
     *
     * @param string $dateAss
     * @return Personne
     */
    public function setDateAss($dateAss)
    {
        $this->dateAss = $dateAss;

        return $this;
    }

    /**
     * Get dateAss
     *
     * @return string 
     */
    public function getDateAss()
    {
        return $this->dateAss;
    }

    /**
     * Set agrementIae
     *
     * @param string $agrementIae
     * @return Personne
     */
    public function setAgrementIae($agrementIae)
    {
        $this->agrementIae = $agrementIae;

        return $this;
    }

    /**
     * Get agrementIae
     *
     * @return string 
     */
    public function getAgrementIae()
    {
        return $this->agrementIae;
    }

    /**
     * Set dateIae
     *
     * @param string $dateIae
     * @return Personne
     */
    public function setDateIae($dateIae)
    {
        $this->dateIae = $dateIae;

        return $this;
    }

    /**
     * Get dateIae
     *
     * @return string 
     */
    public function getDateIae()
    {
        return $this->dateIae;
    }

    /**
     * Set inscritPe
     *
     * @param string $inscritPe
     * @return Personne
     */
    public function setInscritPe($inscritPe)
    {
        $this->inscritPe = $inscritPe;

        return $this;
    }

    /**
     * Get inscritPe
     *
     * @return string 
     */
    public function getInscritPe()
    {
        return $this->inscritPe;
    }

    /**
     * Set datePe
     *
     * @param string $datePe
     * @return Personne
     */
    public function setDatePe($datePe)
    {
        $this->datePe = $datePe;

        return $this;
    }

    /**
     * Get datePe
     *
     * @return string 
     */
    public function getDatePe()
    {
        return $this->datePe;
    }

    /**
     * Set numPe
     *
     * @param integer $numPe
     * @return Personne
     */
    public function setNumPe($numPe)
    {
        $this->numPe = $numPe;

        return $this;
    }

    /**
     * Get numPe
     *
     * @return integer 
     */
    public function getNumPe()
    {
        return $this->numPe;
    }

    /**
     * Set numSecuriteSociale
     *
     * @param integer $numSecuriteSociale
     * @return Personne
     */
    public function setNumSecuriteSociale($numSecuriteSociale)
    {
        $this->numSecuriteSociale = $numSecuriteSociale;

        return $this;
    }

    /**
     * Get numSecuriteSociale
     *
     * @return integer 
     */
    public function getNumSecuriteSociale()
    {
        return $this->numSecuriteSociale;
    }

    /**
     * Set numAllocataire
     *
     * @param integer $numAllocataire
     * @return Personne
     */
    public function setNumAllocataire($numAllocataire)
    {
        $this->numAllocataire = $numAllocataire;

        return $this;
    }

    /**
     * Get numAllocataire
     *
     * @return integer 
     */
    public function getNumAllocataire()
    {
        return $this->numAllocataire;
    }

    /**
     * Set dateAllocataire
     *
     * @param string $dateAllocataire
     * @return Personne
     */
    public function setDateAllocataire($dateAllocataire)
    {
        $this->dateAllocataire = $dateAllocataire;

        return $this;
    }

    /**
     * Get dateAllocataire
     *
     * @return string 
     */
    public function getDateAllocataire()
    {
        return $this->dateAllocataire;
    }
}
