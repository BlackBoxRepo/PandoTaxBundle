<?php
namespace BlackBoxCode\Pando\Bundle\TaxBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait RegionZoneTrait
{
    /**
     * @ORM\OneToMany(targetEntity="RegionZoneTaxCategoryRate", mappedBy="regionZone")
     */
    private $taxCategoryRates;
}
