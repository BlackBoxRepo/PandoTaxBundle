<?php
namespace BlackBoxCode\Pando\TaxBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

trait RegionZoneTrait
{
    /**
     * @var ArrayCollection<RegionZoneTaxCategoryRateInterface>
     *
     * @ORM\OneToMany(targetEntity="RegionZoneTaxCategoryRate", mappedBy="regionZone")
     */
    private $taxCategoryRates;


    /**
     * {@inheritdoc}
     */
    public function getTaxCategoryRates()
    {
        if (is_null($this->taxCategoryRates)) $this->taxCategoryRates = new ArrayCollection();

        return $this->taxCategoryRates;
    }

    /**
     * {@inheritdoc}
     */
    public function addTaxCategoryRate(RegionZoneTaxCategoryRateInterface $taxCategoryRate)
    {
        if (is_null($this->taxCategoryRates)) $this->taxCategoryRates = new ArrayCollection();
        $this->taxCategoryRates->add($taxCategoryRate);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeTaxCategoryRate(RegionZoneTaxCategoryRateInterface $taxCategoryRate)
    {
        if (is_null($this->taxCategoryRates)) $this->taxCategoryRates = new ArrayCollection();
        $this->taxCategoryRates->removeElement($taxCategoryRate);
    }
}
