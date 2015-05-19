<?php
namespace BlackBoxCode\Pando\TaxBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

interface RegionZoneInterface extends \BlackBoxCode\Pando\ProductSaleBundle\Model\RegionZoneInterface
{
    /**
     * @return ArrayCollection<RegionZoneTaxCategoryRateInterface>
     */
    public function getTaxCategoryRates();

    /**
     * @param RegionZoneTaxCategoryRateInterface $taxCategoryRate
     * @return $this
     */
    public function addTaxCategoryRate(RegionZoneTaxCategoryRateInterface $taxCategoryRate);

    /**
     * @param RegionZoneTaxCategoryRateInterface $taxCategoryRate
     */
    public function removeTaxCategoryRate(RegionZoneTaxCategoryRateInterface $taxCategoryRate);
}
