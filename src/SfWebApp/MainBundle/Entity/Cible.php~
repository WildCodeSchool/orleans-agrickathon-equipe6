<?php

namespace SfWebApp\MainBundle\Entity;

/**
 * Cible
 */
class Cible
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $btob;

    /**
     * @var string
     */
    private $btoc;

    /**
     * @var string
     */
    private $btobtoc;


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
     * Set btob
     *
     * @param string $btob
     *
     * @return Cible
     */
    public function setBtob($btob)
    {
        $this->btob = $btob;

        return $this;
    }

    /**
     * Get btob
     *
     * @return string
     */
    public function getBtob()
    {
        return $this->btob;
    }

    /**
     * Set btoc
     *
     * @param string $btoc
     *
     * @return Cible
     */
    public function setBtoc($btoc)
    {
        $this->btoc = $btoc;

        return $this;
    }

    /**
     * Get btoc
     *
     * @return string
     */
    public function getBtoc()
    {
        return $this->btoc;
    }

    /**
     * Set btobtoc
     *
     * @param string $btobtoc
     *
     * @return Cible
     */
    public function setBtobtoc($btobtoc)
    {
        $this->btoctob = $btobtoc;

        return $this;
    }

    /**
     * Get btobtoc
     *
     * @return string
     */
    public function getBtobtoc()
    {
        return $this->btobtoc;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $cibles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cibles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cible
     *
     * @param \SfWebApp\MainBundle\Entity\Inscription $cible
     *
     * @return Cible
     */
    public function addCible(\SfWebApp\MainBundle\Entity\Inscription $cible)
    {
        $this->cibles[] = $cible;

        return $this;
    }

    /**
     * Remove cible
     *
     * @param \SfWebApp\MainBundle\Entity\Inscription $cible
     */
    public function removeCible(\SfWebApp\MainBundle\Entity\Inscription $cible)
    {
        $this->cibles->removeElement($cible);
    }

    /**
     * Get cibles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCibles()
    {
        return $this->cibles;
    }
}
