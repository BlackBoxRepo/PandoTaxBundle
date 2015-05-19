<?php
namespace BlackBoxCode\Pando\TaxBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(columns={"regionZone_id", "category_id"})})
 */
trait RegionZoneTaxCategoryRateTrait
{
    use IdTrait;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    private $value;

    /**
     * @var TaxCategoryTypeInterface
     *
     * @ORM\ManyToOne(targetEntity="TaxCategoryType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @var RegionZoneInterface
     *
     * @ORM\ManyToOne(targetEntity="RegionZone", inversedBy="taxCategoryRates")
     * @ORM\JoinColumn(nullable=false)
     */
    private $regionZone;

    /**
     * @var ArrayCollection<ProductInterface>
     *
     * @ORM\ManyToMany(targetEntity="Product", inversedBy="regionZoneTaxCategoryRates")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(nullable=false)}
     * )
     */
    private $products;


    /**
     * {@inheritdoc}
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * {@inheritdoc}
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRegionZone()
    {
        return $this->regionZone;
    }

    /**
     * {@inheritdoc}
     */
    public function setRegionZone(RegionZoneInterface $regionZone)
    {
        $this->regionZone = $regionZone;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * {@inheritdoc}
     */
    public function setCategory(TaxCategoryTypeInterface $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getProducts()
    {
        if (is_null($this->products)) $this->products = new ArrayCollection();

        return $this->products;
    }

    /**
     * {@inheritdoc}
     */
    public function addProduct(ProductInterface $product)
    {
        if (is_null($this->products)) $this->products = new ArrayCollection();
        $this->products->add($product);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeProduct(ProductInterface $product)
    {
        if (is_null($this->products)) $this->products = new ArrayCollection();
        $this->products->removeElement($product);
    }
}
