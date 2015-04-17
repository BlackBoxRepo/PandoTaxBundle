<?php
namespace BlackBoxCode\Pando\Bundle\TaxBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait RegionTrait
{
    /**
     * @ORM\OneToMany(targetEntity="RegionTaxCategoryRate", mappedBy="region")
     */
    private $taxCategoryRates;
}
