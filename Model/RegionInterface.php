<?php
namespace BlackBoxCode\Pando\TaxBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

interface RegionInterface extends \BlackBoxCode\Pando\ProductSaleBundle\Model\RegionInterface
{
    /**
     * @return ArrayCollection<RegionTaxCategoryRateInterface>
     */
    public function getTaxCategoryRates();

    /**
     * @param RegionTaxCategoryRateInterface $taxCategoryRate
     * @return $this
     */
    public function addTaxCategoryRate(RegionTaxCategoryRateInterface $taxCategoryRate);

    /**
     * @param RegionTaxCategoryRateInterface $taxCategoryRate
     */
    public function removeTaxCategoryRate(RegionTaxCategoryRateInterface $taxCategoryRate);
}
