<?php
namespace BlackBoxCode\Pando\Bundle\TaxBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

interface ProductInterface extends \BlackBoxCode\Pando\Bundle\ProductSaleBundle\Model\ProductInterface
{
    /**
     * @return ArrayCollection<RegionTaxCategoryRateInterface>
     */
    public function getRegionTaxCategoryRates();

    /**
     * @param RegionTaxCategoryRateInterface $regionTaxCategoryRate
     * @return $this
     */
    public function addRegionTaxCategoryRate(RegionTaxCategoryRateInterface $regionTaxCategoryRate);

    /**
     * @param RegionTaxCategoryRateInterface $regionTaxCategoryRate
     */
    public function removeRegionTaxCategoryRate(RegionTaxCategoryRateInterface $regionTaxCategoryRate);

    /**
     * @return ArrayCollection<RegionZoneTaxCategoryRateInterface>
     */
    public function getRegionZoneTaxCategoryRates();

    /**
     * @param RegionZoneTaxCategoryRateInterface $regionZoneTaxCategoryRate
     * @return $this
     */
    public function addRegionZoneTaxCategoryRate(RegionZoneTaxCategoryRateInterface $regionZoneTaxCategoryRate);

    /**
     * @param RegionZoneTaxCategoryRateInterface $regionZoneTaxCategoryRate
     * @return $this
     */
    public function removeRegionZoneTaxCategoryRate(RegionZoneTaxCategoryRateInterface $regionZoneTaxCategoryRate);
}
