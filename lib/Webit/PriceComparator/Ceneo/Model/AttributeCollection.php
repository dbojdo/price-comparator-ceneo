<?php
namespace Webit\PriceComparator\Ceneo\Model;

use JMS\Serializer\Annotation as JMS;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * 
 * @author dbojdo
 * @JMS\XmlRoot("attrs")
 */
class AttributeCollection
{

    /**
     *
     * @var ArrayCollection
     * @JMS\Type("ArrayCollection")
     * @JMS\SerializedName("attrs")
     * @JMS\XmlList(inline="true", entry="a")
     */
    protected $attributes;

    /**
     *
     * @return ArrayCollection
     */
    public function getAttributes()
    {
        if($this->attributes == null) {
            $this->attributes = new ArrayCollection();
        }
        
        return $this->attributes;
    }

    /**
     * 
     * @param Attribute $attribute
     */
    public function addAttribute(Attribute $attribute) {
        $this->getAttributes()->add($attribute);
    }
    
    /**
     *
     * @param ArrayCollection $attributes            
     */
    public function setAttributes(ArrayCollection $attributes)
    {
        $this->attributes = $attributes;
    }
}