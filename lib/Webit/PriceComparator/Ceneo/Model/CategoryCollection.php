<?php
namespace Webit\PriceComparator\Ceneo\Model;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as JMS;

/**
 * 
 * @author dbojdo
 * @JMS\XmlRoot("ArrayOfCategory")
 */
class CategoryCollection {
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
     * @var string
     * @JMS\SerializedName("xmlns:xsd")
     * @JMS\Type("string")
     * @JMS\XmlAttribute
     * @JMS\Accessor(setter="setCategories")
     */
    protected $xmlnsXsd = 'http://www.w3.org/2001/XMLSchema';
    
    /**
     * 
     * @var ArrayCollection
     * @JMS\Type("ArrayCollection<Webit\PriceComparator\Ceneo\Model\Category>")
     * @JMS\XmlList(inline=true, entry="Category")
     */
    protected $categories;

	/**
	 * @return string
	 */
	public function getXmlnsXsi() {
		return $this->xmlnsXsi;
	}
	
	/**
	 * @param string $xmlnsXsi
	 */
	public function setXmlnsXsi($xmlnsXsi) {
		$this->xmlnsXsi = $xmlnsXsi;
	}
	
	/**
	 * @return string
	 */
	public function getXmlnsXsd() {
		return $this->xmlnsXsd;
	}
	
	/**
	 * @param string $xmlnsXsd
	 */
	public function setXmlnsXsd($xmlnsXsd) {
		$this->xmlnsXsd = $xmlnsXsd;
	}
	
	/**
	 * @return ArrayCollection
	 */
	public function getCategories() {
	    if($this->categories == null) {
	        $this->categories = new ArrayCollection();
	    }
	    
		return $this->categories;
	}
	
	public function addCategory(Category $category) {
	    $this->getCategories()->add($category);
	}
	
	/**
	 * @param ArrayCollection $categories
	 */
	public function setCategories(ArrayCollection $categories) {
		$this->categories = $categories;
		foreach($this->categories as $cat) {
		    $cat->setParent($this);
		}
	}
}