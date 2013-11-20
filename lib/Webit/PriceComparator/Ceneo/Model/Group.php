<?php
namespace Webit\PriceComparator\Ceneo\Model;

use JMS\Serializer\Annotation as JMS;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @JMS\XmlAttribute
     */
    protected $name;

    /**
     *
     * @var ArrayCollection
     * @JMS\Type("ArrayCollection<Webit\PriceComparator\Ceneo\Model\Offer>")
     * @JMS\Accessor(setter="setOffers")
     * @JMS\XmlList(inline=true, entry="o")
     */
    protected $offers;
    
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
     * @return ArrayCollection
     */
    public function getOffers() {
        if($this->offers == null) {
            $this->offers = new ArrayCollection();
        }
         
        return $this->offers;
    }
    
    /**
     *
     * @param Offer $offer
     */
    public function addOffer(Offer $offer) {
        if($this->getOffers()->containsKey($offer->getId())) {
            return null;
        }
        $this->getOffers()->add($offer);
    }
    
    /**
     * @param ArrayCollection $offers
     */
    public function setOffers(ArrayCollection $offers) {
        foreach($offers as $offer) {
            $this->addOffer($offer);
        }
    }
}
