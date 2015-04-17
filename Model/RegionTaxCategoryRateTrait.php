<?php
namespace BlackBoxCode\Pando\Bundle\TaxBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait RegionTaxCategoryRateTrait
{
    use BaseTrait;

    /**
     * @ORM\Column(type="float")
     */
    private $value;

    /**
     * @ORM\ManyToOne(targetEntity="Region", inversedBy="taxCategoryRates")
     * @ORM\JoinColumn(nullable=false)
     */
    private $region;

    /**
     * @ORM\ManyToOne(targetEntity="TaxCategoryType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\ManyToMany(targetEntity="Product", inversedBy="regionTaxCategoryRates")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(nullable=false)}
     * )
     */
    private $products;
}
