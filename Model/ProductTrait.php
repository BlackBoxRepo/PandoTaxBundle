<?php
namespace BlackBoxCode\Pando\Bundle\TaxBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait ProductTrait
{
    /**
     * @ORM\ManyToMany(targetEntity="RegionTaxCategoryRate", mappedBy="products")
     */
    private $regionTaxCategoryRates;

    /**
     * @ORM\ManyToMany(targetEntity="RegionZoneTaxCategoryRate", mappedBy="products")
     */
    private $regionZoneTaxCategoryRates;
}
