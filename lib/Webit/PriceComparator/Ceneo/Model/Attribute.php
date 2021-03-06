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
     * @var string @JMS\XmlValue
     */
    protected $value;

    public function __construct($name = null, $value = null) {
        $this->name = $name;
        $this->value = $value;
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

    /**
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}
