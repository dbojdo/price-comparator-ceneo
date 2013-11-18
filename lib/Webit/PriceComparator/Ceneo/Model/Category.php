<?php
namespace Webit\PriceComparator\Ceneo\Model;

use JMS\Serializer\Annotation as JMS;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * 
 * @author dbojdo
 * @JMS\XmlRoot("Category")
 */
class Category
{

    /**
     *
     * @var int
     * @JMS\Type("integer")
     * @JMS\SerializedName("Id")
     */
    protected $ceneoId;

    /**
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("Name")
     */
    protected $name;

    /**
     *
     * @var ArrayCollection
     * @JMS\Type("ArrayCollection<Webit\PriceComparator\Ceneo\Model\Category>")
     * @JMS\SerializedName("Subcategories")
     * @JMS\Accessor(setter="setSubcategories")
     */
    protected $subcategories;

    /**
     * 
     * @var Category
     * @JMS\Type("Webit\PriceComparator\Ceneo\Model\Category")
     * @JMS\SerializedName("Parent")
     * @JMS\Groups({"categoryParent"})
     */
    protected $parent;
    
    /**
     *
     * @return int
     */
    public function getCeneoId()
    {
        return $this->ceneoId;
    }

    /**
     *
     * @param int $ceneoId
     */
    public function setCeneoId($ceneoId)
    {
        $this->ceneoId = $ceneoId;
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
     * @return ArrayCollection
     */
    public function getSubcategories()
    {
        return $this->subcategories;
    }

    /**
     *
     * @param ArrayCollection $subcategories
     */
    public function setSubcategories(ArrayCollection $subcategories)
    {
        $this->subcategories = $subcategories;
        foreach($this->subcategories as $sub) {
            $sub->setParent($this);
        }
    }
    
    /**
     * 
     * @return Category
     */
    public function getParent() 
    {
        return $this->parent;
    }
    
    /**
     * 
     * @param Category $parent
     */
    public function setParent(Category $parent) 
    {
        $this->parent = $parent;
    }
    
    /**
     * 
     * @return string
     */
    public function getPath() {
        $arAncestors = array();
        
        $parent = $this;
        while($parent) {
            $arAncestors[] = $parent->getName();
            $parent = $parent->getParent();
        }
        
        $arAncestors = array_reverse($arAncestors);
        $path = implode('/',$arAncestors);
        
        return $path;
    }
}
