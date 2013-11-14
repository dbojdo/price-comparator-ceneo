<?php
namespace Webit\PriceComparator\Ceneo\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * 
 * @author dbojdo
 * @JMS\XmlRoot("imgs")
 */
class ImageCollection
{

    /**
     *
     * @var Image
     * @JMS\Type("Webit\PriceComparator\Ceneo\Model\Image")
     * @JMS\SerializedName("main")
     */
    protected $mainImage;

    /**
     *
     * @var ArrayCollection
     * @JMS\Type("ArrayCollection<Webit\PriceComparator\Ceneo\Model\Image>")
     * @JMS\XmlList(inline="true", entry="i")
     */
    protected $images;

    /**
     *
     * @return Image
     */
    public function getMainImage()
    {
        return $this->mainImage;
    }

    /**
     *
     * @param Image $mainImage            
     */
    public function setMainImage(Image $mainImage)
    {
        $this->mainImage = $mainImage;
    }

    /**
     *
     * @return array
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * 
     * @param Image $image
     */
    public function addImage(Image $image) {
        $this->images[] = $image;
    }
    
    /**
     *
     * @param array $images            
     */
    public function setImages(array $images)
    {
        $this->images = $images;
    }
}
