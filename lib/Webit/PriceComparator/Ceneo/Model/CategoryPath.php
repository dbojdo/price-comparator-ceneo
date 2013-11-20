<?php
namespace Webit\PriceComparator\Ceneo\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * 
 * @author dbojdo
 * @JMS\XmlRoot("cat")
 */
class CategoryPath
{

    /**
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("path")
     * @JMS\XmlValue
     */
    protected $path;

    public function __construct($path) {
        $this->path = $path;
    }
    
	/**
	 * @return the string
	 */
	public function getPath() {
		return $this->path;
	}
}
