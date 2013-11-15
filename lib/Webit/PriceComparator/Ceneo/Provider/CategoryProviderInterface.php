<?php
namespace Webit\PriceComparator\Ceneo\Category;

use Webit\PriceComparator\Ceneo\Model\Category;
use Doctrine\Common\Collections\ArrayCollection;

interface CategoryProviderInterface
{

    /**
     *
     * @return ArrayCollection<Category>
     */
    public function getCategories();
}
