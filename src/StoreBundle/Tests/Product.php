<?php

namespace StoreBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * StoreBundle\Document\Product
 *
 * @ODM\Document(
 *     repositoryClass="StoreBundle\Document\ProductRepository"
 * )
 *
 */
class Product
{
    /**
     * @var MongoId $id
     *
     * @ODM\Id(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $name
     *
     * @ODM\Field(name="name", type="string")
     */
    protected $name;

    /**
     * @var float $price
     *
     * @ODM\Field(name="price", type="float")
     */
    protected $price;


    /**
     * @ODM\EmbedMany(targetDocument="Description", strategy="set")
     */
    protected $description;


    public function __construct() {
        $this->description = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Get price
     *
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Add description
     *
     * @param StoreBundle\Document\Description $description
     */
    public function addDescription(\StoreBundle\Document\Description $description)
    {
        $this->description[] = $description;
    }

    /**
     * Remove description
     *
     * @param StoreBundle\Document\Description $description
     */
    public function removeDescription(\StoreBundle\Document\Description $description)
    {
        $this->description->removeElement($description);
    }

    /**
     * Get description
     *
     * @return \Doctrine\Common\Collections\Collection $description
     */
    public function getDescription()
    {
        return $this->description;
    }
}
