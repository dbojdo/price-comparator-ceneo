<?php
namespace Webit\PriceComparator\Ceneo\Category;

use JMS\Serializer\SerializerInterface;
use Webit\PriceComparator\Ceneo\Model\Category;
use Doctrine\Common\Collections\ArrayCollection;

class CategoryProvider implements CategoryProviderInterface
{
    
    const DEFAULT_SOURCE_PATH = 'http://api.ceneo.pl/Kategorie/dane.xml';
    
    /**
     *
     * @var SerializerInterface
     */
    private $serializer;
    
    /**
     * 
     * @var string
     */
    private $sourcePath;
    
    /**
     * 
     * @param string $sourcePath
     * @param SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer, $sourcePath = self::DEFAULT_SOURCE_PATH) {
        $this->serializer = $serializer;
        $this->sourcePath = $sourcePath;
    }
    
    /**
     *
     * @return ArrayCollection<Category>
     */
    public function getCategories() {
        $xml = $this->getXmlString();
        if(empty($xml)) {
            throw new \RuntimeException('Cannot load source file or file is empty.');
        }
        
        $coll = $this->serializer->deserialize($xml,'Webit\PriceComparator\Ceneo\Model\CategoryCollection','xml');
        
        return $coll->getCategories();
    }

    /**
     * 
     * @return string
     */
    private function getXmlString() {
        $xml = @file_get_contents($this->sourcePath);
        
        return $xml;
    }
}
