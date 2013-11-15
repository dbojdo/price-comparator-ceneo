<?php
namespace Webit\PriceComparator\Ceneo\Writer;

use Webit\PriceComparator\Ceneo\Model\OffersDocument;

interface OfferWriterInterface {
    
    /**
     * 
     * @param OffersDocument $offerDocument
     * @return \SplFileInfo
     */
    public function writeOffers(OffersDocument $offerDocument, \SplFileInfo $file = null);
}
