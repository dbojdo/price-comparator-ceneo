<?php
namespace Webit\PriceComparator\Ceneo\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * 
 * @author dbojdo
 * @JMS\XmlRoot("attrs")
 */
class AttributeCollection
{

    /**
     *
     * @var array
     * @JMS\Type("array")
     * @JMS\SerializedName("attrs")
     * @JMS\XmlList(inline="true", entry="a")
     */
    protected $attributes;

    /**
     *
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * 
     * @param Attribute $attribute
     */
    public function addAttribute(Attribute $attribute) {
        $this->attributes[] = $attribute;
    }
    
    /**
     *
     * @param array $attributes            
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;
    }
}