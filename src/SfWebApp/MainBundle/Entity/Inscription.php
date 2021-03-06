<?php

namespace SfWebApp\MainBundle\Entity;

/**
 * Inscription
 */
class Inscription
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var string
     */
    private $video;

    /**
     * @var string
     */
    private $catchLine;

    /**
     * @var string
     */
    private $apropos;

    /**
     * @var string
     */
    private $choix;

    /**
     * @var string
     */
    private $postureRSE;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Inscription
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Inscription
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
     * Set password
     *
     * @param string $password
     *
     * @return Inscription
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Inscription
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
     * Set logo
     *
     * @param string $logo
     *
     * @return Inscription
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set video
     *
     * @param string $video
     *
     * @return Inscription
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set catchLine
     *
     * @param string $catchLine
     *
     * @return Inscription
     */
    public function setCatchLine($catchLine)
    {
        $this->catchLine = $catchLine;

        return $this;
    }

    /**
     * Get catchLine
     *
     * @return string
     */
    public function getCatchLine()
    {
        return $this->catchLine;
    }

    /**
     * Set apropos
     *
     * @param string $apropos
     *
     * @return Inscription
     */
    public function setApropos($apropos)
    {
        $this->apropos = $apropos;

        return $this;
    }

    /**
     * Get apropos
     *
     * @return string
     */
    public function getApropos()
    {
        return $this->apropos;
    }

    /**
     * Set choix
     *
     * @param string $choix
     *
     * @return Inscription
     */
    public function setChoix($choix)
    {
        $this->choix = $choix;

        return $this;
    }

    /**
     * Get choix
     *
     * @return string
     */
    public function getChoix()
    {
        return $this->choix;
    }

    /**
     * Set postureRSE
     *
     * @param string $postureRSE
     *
     * @return Inscription
     */
    public function setPostureRSE($postureRSE)
    {
        $this->postureRSE = $postureRSE;

        return $this;
    }

    /**
     * Get postureRSE
     *
     * @return string
     */
    public function getPostureRSE()
    {
        return $this->postureRSE;
    }
    /**
     * @var \SfWebApp\MainBundle\Entity\Equipe
     */
    private $equipe;

    /**
     * @var \SfWebApp\MainBundle\Entity\Secteur
     */
    private $secteur;

    /**
     * @var \SfWebApp\MainBundle\Entity\Sous_secteur
     */
    private $sous_secteur;

    /**
     * @var \SfWebApp\MainBundle\Entity\Cible
     */
    private $cible;


    /**
     * Set equipe
     *
     * @param \SfWebApp\MainBundle\Entity\Equipe $equipe
     *
     * @return Inscription
     */
    public function setEquipe(\SfWebApp\MainBundle\Entity\Equipe $equipe = null)
    {
        $this->equipe = $equipe;

        return $this;
    }

    /**
     * Get equipe
     *
     * @return \SfWebApp\MainBundle\Entity\Equipe
     */
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * Set secteur
     *
     * @param \SfWebApp\MainBundle\Entity\Secteur $secteur
     *
     * @return Inscription
     */
    public function setSecteur(\SfWebApp\MainBundle\Entity\Secteur $secteur = null)
    {
        $this->secteur = $secteur;

        return $this;
    }

    /**
     * Get secteur
     *
     * @return \SfWebApp\MainBundle\Entity\Secteur
     */
    public function getSecteur()
    {
        return $this->secteur;
    }

    /**
     * Set sousSecteur
     *
     * @param \SfWebApp\MainBundle\Entity\Sous_secteur $sousSecteur
     *
     * @return Inscription
     */
    public function setSousSecteur(\SfWebApp\MainBundle\Entity\Sous_secteur $sousSecteur = null)
    {
        $this->sous_secteur = $sousSecteur;

        return $this;
    }

    /**
     * Get sousSecteur
     *
     * @return \SfWebApp\MainBundle\Entity\Sous_secteur
     */
    public function getSousSecteur()
    {
        return $this->sous_secteur;
    }

    /**
     * Set cible
     *
     * @param \SfWebApp\MainBundle\Entity\Cible $cible
     *
     * @return Inscription
     */
    public function setCible(\SfWebApp\MainBundle\Entity\Cible $cible = null)
    {
        $this->cible = $cible;

        return $this;
    }

    /**
     * Get cible
     *
     * @return \SfWebApp\MainBundle\Entity\Cible
     */
    public function getCible()
    {
        return $this->cible;
    }
    /**
     * @var \SfWebApp\MainBundle\Entity\Sous_secteur
     */
    private $soussecteur;


}
