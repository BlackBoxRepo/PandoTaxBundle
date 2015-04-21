<?php
namespace BlackBoxCode\Pando\Bundle\TaxBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdInterface;
use Doctrine\Common\Collections\ArrayCollection;

interface RegionTaxCategoryRateInterface extends IdInterface
{
    /**
     * @return float
     */
    public function getValue();

    /**
     * @param float $value
     * @return $this
     */
    public function setValue($value);

    /**
     * @return RegionInterface
     */
    public function getRegion();

    /**
     * @param RegionInterface $region
     * @return $this
     */
    public function setRegion(RegionInterface $region);

    /**
     * @return TaxCategoryTypeInterface
     */
    public function getCategory();

    /**
     * @param TaxCategoryTypeInterface $category
     * @return $this
     */
    public function setCategory(TaxCategoryTypeInterface $category);

    /**
     * @return ArrayCollection<ProductInterface>
     */
    public function getProducts();

    /**
     * @param ProductInterface $product
     * @return $this
     */
    public function addProduct(ProductInterface $product);

    /**
     * @param ProductInterface $product
     */
    public function removeProduct(ProductInterface $product);
}
