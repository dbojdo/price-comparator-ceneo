<?php
namespace Webit\PriceComparator\Ceneo\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * 
 * @author dbojdo
 * @JMS\XmlRoot("offers")
 */
class OffersDocument
{

    /**
     *
     * @var string
     * @JMS\SerializedName("xmlns:xsi")
     * @JMS\Type("string")
     * @JMS\XmlAttribute
     */
    protected $xmlnsXsi = 'http://www.w3.org/2001/XMLSchema-instance';

    /**
     *
     * @var int
     * @JMS\SerializedName("version")
     * @JMS\Type("integer")
     * @JMS\XmlAttribute
     */
    protected $version = 1;

    /**
     * 
     * @var Group
     * @JMS\SerializedName("group")
     * @JMS\Type("Webit\PriceComparator\Ceneo\Model\Group")
     */
    protected $group;
    
    /**
     *
     * @return string
     */
    public function getXmlnsXsi()
    {
        return $this->xmlnsXsi;
    }

    /**
     *
     * @param string $xmlnsXsi
     */
    public function setXmlnsXsi($xmlnsXsi)
    {
        $this->xmlnsXsi = $xmlnsXsi;
    }

    /**
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     *
     * @param int $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

	/**
	 * 
	 * @return Group
	 */
	public function getGroup() 
	{
		return $this->group;
	}
	
	/**
	 * 
	 * @param Group $group
	 */
	public function setGroup(Group $group) {
		$this->group = $group;
	}
}