<?php

namespace SfWebApp\MainBundle\Entity;

/**
 * Secteur
 */
class Secteur
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $productionVegetale;

    /**
     * @var string
     */
    private $productionAnimale;

    /**
     * @var string
     */
    private $premiereTransfo;

    /**
     * @var string
     */
    private $deuxiemeTransfo;

    /**
     * @var string
     */
    private $distributionGMS;

    /**
     * @var string
     */
    private $distributionCc;

    /**
     * @var string
     */
    private $distributionAutre;

    /**
     * @var string
     */
    private $restauration;


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
     * Set productionVegetale
     *
     * @param string $productionVegetale
     *
     * @return Secteur
     */
    public function setProductionVegetale($productionVegetale)
    {
        $this->productionVegetale = $productionVegetale;

        return $this;
    }

    /**
     * Get productionVegetale
     *
     * @return string
     */
    public function getProductionVegetale()
    {
        return $this->productionVegetale;
    }

    /**
     * Set productionAnimale
     *
     * @param string $productionAnimale
     *
     * @return Secteur
     */
    public function setProductionAnimale($productionAnimale)
    {
        $this->productionAnimale = $productionAnimale;

        return $this;
    }

    /**
     * Get productionAnimale
     *
     * @return string
     */
    public function getProductionAnimale()
    {
        return $this->productionAnimale;
    }

    /**
     * Set premiereTransfo
     *
     * @param string $premiereTransfo
     *
     * @return Secteur
     */
    public function setPremiereTransfo($premiereTransfo)
    {
        $this->premiereTransfo = $premiereTransfo;

        return $this;
    }

    /**
     * Get premiereTransfo
     *
     * @return string
     */
    public function getPremiereTransfo()
    {
        return $this->premiereTransfo;
    }

    /**
     * @return string
     */
    public function getDeuxiemeTransfo()
    {
        return $this->deuxiemeTransfo;
    }

    /**
     * @param string $deuxiemeTransfo
     */
    public function setDeuxiemeTransfo($deuxiemeTransfo)
    {
        $this->deuxiemeTransfo = $deuxiemeTransfo;
    }
    /**
     * Set distributionGMS
     *
     * @param string $distributionGMS
     *
     * @return Secteur
     */
    public function setDistributionGMS($distributionGMS)
    {
        $this->distributionGMS = $distributionGMS;

        return $this;
    }

    /**
     * Get distributionGMS
     *
     * @return string
     */
    public function getDistributionGMS()
    {
        return $this->distributionGMS;
    }

    /**
     * Set distributionCc
     *
     * @param string $distributionCc
     *
     * @return Secteur
     */
    public function setDistributionCc($distributionCc)
    {
        $this->distributionCc = $distributionCc;

        return $this;
    }

    /**
     * Get distributionCc
     *
     * @return string
     */
    public function getDistributionCc()
    {
        return $this->distributionCc;
    }

    /**
     * Set distributionAutre
     *
     * @param string $distributionAutre
     *
     * @return Secteur
     */
    public function setDistributionAutre($distributionAutre)
    {
        $this->distributionAutre = $distributionAutre;

        return $this;
    }

    /**
     * Get distributionAutre
     *
     * @return string
     */
    public function getDistributionAutre()
    {
        return $this->distributionAutre;
    }

    /**
     * Set restauration
     *
     * @param string $restauration
     *
     * @return Secteur
     */
    public function setRestauration($restauration)
    {
        $this->restauration = $restauration;

        return $this;
    }

    /**
     * Get restauration
     *
     * @return string
     */
    public function getRestauration()
    {
        return $this->restauration;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $secteurs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->secteurs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add secteur
     *
     * @param \SfWebApp\MainBundle\Entity\Inscription $secteur
     *
     * @return Secteur
     */
    public function addSecteur(\SfWebApp\MainBundle\Entity\Inscription $secteur)
    {
        $this->secteurs[] = $secteur;

        return $this;
    }

    /**
     * Remove secteur
     *
     * @param \SfWebApp\MainBundle\Entity\Inscription $secteur
     */
    public function removeSecteur(\SfWebApp\MainBundle\Entity\Inscription $secteur)
    {
        $this->secteurs->removeElement($secteur);
    }

    /**
     * Get secteurs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSecteurs()
    {
        return $this->secteurs;
    }
}
