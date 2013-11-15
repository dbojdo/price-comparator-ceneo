<?php
namespace Webit\PriceComparator\Ceneo\Writer;

use Webit\PriceComparator\Ceneo\Model\OffersDocument;
use JMS\Serializer\SerializerInterface;

class SerializerOfferWriter implements OfferWriterInterface {
    
    /**
     * 
     * @var string
     */
    protected $targetDir;
    
    /**
     * 
     * @var SerializerInterface
     */
    protected $serializer;
    
    public function __construct($targetDir, SerializerInterface $serializer) {
        $this->targetDir = $targetDir;
        $this->serializer = $serializer;
    }
    
    /**
     * 
     * @param OffersDocument $offerDocument
     * @return \SplFileInfo
     */
    public function writeOffers(OffersDocument $offerDocument, \SplFileInfo $file = null) {
        $file = $file ?: new \SplFileInfo($targetDir.'/'.$this->createFileName());
        if(is_dir($file->getPath()) == false) {
            @mkdir($file->getPath(), 0755, true);
        }
        
        $result = @file_put_contents($file->getPathname(), $this->serializer->serialize($offerDocument,'xml'));
        if($result == false) {
            throw new \RuntimeException('Cannot write to file: "'.$file->getPathname().'".');
        }
        
        return $file;
    }
    
    private function createFilename() {
        return md5(microtime().mt_rand(0, 100000)).'.xml';
    }
}
