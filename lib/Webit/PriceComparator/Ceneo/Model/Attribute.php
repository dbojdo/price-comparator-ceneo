<?php
namespace Webit\PriceComparator\Ceneo\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * 
 * @author dbojdo
 * @JMS\XmlRoot("a")
 */
class Attribute
{

    /**
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     * @JMS\XmlAttribute
     */
    protected $name;

    /**
     *
     * @var int
     * @JMS\Type("integer")
     * @JMS\SerializedName("v")
     * @JMS\XmlAttribute
     */
    protected $variant;

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
     * @return int
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     *
     * @param int $variant
     */
    public function setVariant($variant)
    {
        $this->variant = $variant;
    }
}
