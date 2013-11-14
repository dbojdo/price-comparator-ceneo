<?php
namespace Webit\PriceComparator\Ceneo\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * 
 * @author dbojdo
 * @JMS\XmlRoot("o")
 */
class Offer
{

    /**
     *
     * @var int
     * @JMS\Type("integer")
     * @JMS\SerializedName("id")
     * @JMS\XmlAttribute
     */
    protected $id;

    /**
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("url")
     * @JMS\XmlAttribute
     */
    protected $url;

    /**
     *
     * @var float
     * @JMS\Type("double")
     * @JMS\SerializedName("price")
     * @JMS\XmlAttribute
     */
    protected $price;

    /**
     *
     * @var int
     * @JMS\Type("integer")
     * @JMS\SerializedName("avail")
     * @JMS\XmlAttribute
     */
    protected $available;

    /**
     *
     * @var int
     * @JMS\Type("integer")
     * @JMS\SerializedName("set")
     * @JMS\XmlAttribute
     */
    protected $set;

    /**
     *
     * @var float
     * @JMS\Type("double")
     * @JMS\SerializedName("weight")
     * @JMS\XmlAttribute
     */
    protected $weight;

    /**
     *
     * @var int
     * @JMS\Type("integer")
     * @JMS\SerializedName("basket")
     * @JMS\XmlAttribute
     */
    protected $basket;

    /**
     *
     * @var int
     * @JMS\Type("integer")
     * @JMS\SerializedName("stock")
     * @JMS\XmlAttribute
     */
    protected $stock;

    /**
     *
     * @var Category
     */
    protected $category;

    /**
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("cat")
     */
    protected $categoryPath;

    /**
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    protected $name;

    /**
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("desc")
     */
    protected $description;

    /**
     *
     * @var AttributeCollection
     * @JMS\Type("Webit\PriceComparator\Ceneo\Model\AttributeCollection")
     * @JMS\SerializedName("attrs")
     */
    protected $attributes;

    /**
     *
     * @var ImageCollection
     * @JMS\Type("Webit\PriceComparator\Ceneo\Model\ImageCollection")
     * @JMS\SerializedName("imgs")
     */
    protected $images;

    /**
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @param int $id            
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     *
     * @param string $url            
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     *
     * @param float $price            
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     *
     * @return int
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     *
     * @param int $available            
     */
    public function setAvailable($available)
    {
        $this->available = $available;
    }

    /**
     *
     * @return int
     */
    public function getSet()
    {
        return $this->set;
    }

    /**
     *
     * @param int $set            
     */
    public function setSet($set)
    {
        $this->set = $set;
    }

    /**
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     *
     * @param float $weight            
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     *
     * @return int
     */
    public function getBasket()
    {
        return $this->basket;
    }

    /**
     *
     * @param int $basket            
     */
    public function setBasket($basket)
    {
        $this->basket = $basket;
    }

    /**
     *
     * @return int
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     *
     * @param int $stock            
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    /**
     *
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     *
     * @param Category $category            
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;
    }

    /**
     *
     * @return string
     */
    public function getCategoryPath()
    {
        return $this->category ? $this->category->getPath() : null;
    }

    /**
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *
     * @param string $name            
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     *
     * @param string $description            
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     *
     * @return AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     *
     * @param AttributeCollection $attributes            
     */
    public function setAttributes(AttributeCollection $attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     *
     * @return ImageCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     *
     * @param ImageCollection $images            
     */
    public function setImages(ImageCollection $images)
    {
        $this->images = $images;
    }
}
