<?php
namespace Webit\PriceComparator\Ceneo\Model;

use Doctrine\Common\Collections\ArrayCollection;
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
     * @JMS\Type("ArrayCollection<Webit\PriceComparator\Ceneo\Model\Group>")
     * @JMS\Accessor(setter="setGroups")
     * @JMS\XmlList(inline=true, entry="group")
     */
    protected $groups;
    
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
	public function getGroups() 
	{
	    if($this->groups == null) {
	        $this->groups = new ArrayCollection();
	    }
	    
		return $this->groups;
	}
	
	/**
	 * 
	 * @param ArrayCollection $groups
	 */
	public function setGroups(ArrayCollection $groups) {
	    foreach($groups as $group) {
	        $this->addGroup($group);
	    }
	}
	
	/**
	 * 
	 * @param Group $group
	 */
	public function addGroup(Group $group) {
	    if($this->getGroups()->containsKey($group->getName())) {
	        $cGroup = $this->getGroups()->get($group->getName());
	        foreach($group->getOffers() as $offer) {
	            $cGroup->addOffer($offer);
	        }
	    } else {
	        $this->getGroups()->set($group->getName(), $group);
	    }
	}
}