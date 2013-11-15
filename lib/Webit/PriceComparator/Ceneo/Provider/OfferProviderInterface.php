<?php
namespace Webit\PriceComparator\Ceneo\Provider;

use Webit\PriceComparator\Ceneo\Model\OffersDocument;

interface OfferProviderInterface 
{
    /**
     * @return OffersDocument
     */
    public function getOffers();
}
