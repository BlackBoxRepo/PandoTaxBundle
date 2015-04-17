<?php
namespace BlackBoxCode\Pando\Bundle\TaxBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait RegionZoneTaxCategoryRateTrait
{
    use BaseTrait;

    /**
     * @ORM\Column(type="float")
     */
    private $value;

    /**
     * @ORM\ManyToOne(targetEntity="TaxCategoryType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity="RegionZone", inversedBy="taxCategoryRates")
     * @ORM\JoinColumn(nullable=false)
     */
    private $regionZone;

    /**
     * @ORM\ManyToMany(targetEntity="Product", inversedBy="regionZoneTaxCategoryRates")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(nullable=false)}
     * )
     */
    private $products;
}
