<?php
namespace Webit\PriceComparator\Ceneo\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * 
 * @author dbojdo
 * @JMS\XmlRoot("group")
 */
class Group
{
    
    /**
     * Group constants
     * @var string
     */
    const GROUP_BOOKS     = 'books';
    const GROUP_TIRES     = 'tires';
    const GROUP_RIMS      = 'rims';
    const GROUP_PERFUMES  = 'perfumes';
    const GROUP_MUSIC     = 'music';
    const GROUP_GAMES     = 'games';
    const GROUP_MOVIES    = 'movies';
    const GROUP_MEDICINES = 'medicines';
    const GROUP_GROCERY   = 'grocery';
    const GROUP_CLOTHES   = 'clothes';
    const GROUP_OTHER     = 'other';
    
    /**
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\XmlAttribute("name")
     */
    protected $name;

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
}
