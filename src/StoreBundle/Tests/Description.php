<?php

namespace StoreBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * StoreBundle\Document\Description
 *
 * @ODM\Document(
 *     repositoryClass="StoreBundle\Document\DescriptionRepository"
 * )
 *
 */
/** @ODM\EmbeddedDocument */
class Description
{
    /**
     * @var MongoId $id
     *
     * @ODM\Id(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $des
     *
     * @ODM\Field(name="des", type="string")
     */
    protected $des;


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
     * Set des
     *
     * @param string $des
     * @return self
     */
    public function setDes($des)
    {
        $this->des = $des;
        return $this;
    }

    /**
     * Get des
     *
     * @return string $des
     */
    public function getDes()
    {
        return $this->des;
    }
}
