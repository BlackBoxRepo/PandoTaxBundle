<?php
namespace BlackBoxCode\Pando\Bundle\TaxBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

trait ProductTrait
{
    /**
     * @var ArrayCollection<RegionTaxCategoryRateInterface>
     *
     * @ORM\ManyToMany(targetEntity="RegionTaxCategoryRate", mappedBy="products")
     */
    private $regionTaxCategoryRates;

    /**
     * @var ArrayCollection<RegionZoneTaxCategoryRateInterface>
     *
     * @ORM\ManyToMany(targetEntity="RegionZoneTaxCategoryRate", mappedBy="products")
     */
    private $regionZoneTaxCategoryRates;


    /**
     * {@inheritdoc}
     */
    public function getRegionTaxCategoryRates()
    {
        if (is_null($this->regionTaxCategoryRates)) $this->regionTaxCategoryRates = new ArrayCollection();

        return $this->regionTaxCategoryRates;
    }

    /**
     * {@inheritdoc}
     */
    public function addRegionTaxCategoryRate(RegionTaxCategoryRateInterface $regionTaxCategoryRate)
    {
        if (is_null($this->regionTaxCategoryRates)) $this->regionTaxCategoryRates = new ArrayCollection();
        $this->regionTaxCategoryRates->add($regionTaxCategoryRate);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeRegionTaxCategoryRate(RegionTaxCategoryRateInterface $regionTaxCategoryRate)
    {
        if (is_null($this->regionTaxCategoryRates)) $this->regionTaxCategoryRates = new ArrayCollection();
        $this->regionTaxCategoryRates->removeElement($regionTaxCategoryRate);
    }

    /**
     * {@inheritdoc}
     */
    public function getRegionZoneTaxCategoryRates()
    {
        if (is_null($this->regionZoneTaxCategoryRates)) $this->regionZoneTaxCategoryRates = new ArrayCollection();

        return $this->regionZoneTaxCategoryRates;
    }

    /**
     * {@inheritdoc}
     */
    public function addRegionZoneTaxCategoryRate(RegionZoneTaxCategoryRateInterface $regionZoneTaxCategoryRate)
    {
        if (is_null($this->regionZoneTaxCategoryRates)) $this->regionZoneTaxCategoryRates = new ArrayCollection();
        $this->regionZoneTaxCategoryRates->add($regionZoneTaxCategoryRate);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeRegionZoneTaxCategoryRate(RegionZoneTaxCategoryRateInterface $regionZoneTaxCategoryRate)
    {
        if (is_null($this->regionZoneTaxCategoryRates)) $this->regionZoneTaxCategoryRates = new ArrayCollection();
        $this->regionZoneTaxCategoryRates->removeElement($regionZoneTaxCategoryRate);
    }
}
