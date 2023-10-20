<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy;

#[AsTwigComponent]
class ProductList
{

    private Package $package;

    public function __construct()
    {
        $this->package = new Package(new StaticVersionStrategy('v1'));
    }

    /**
     * @return array[]
     */
    public function getProducts(): array
    {
        return $products = [
            [
                'product-name' => 'iPhone 15 Pro Max Green',
                'product-img' => $this->package->getUrl('media/product/ip186790_00.jpg'),
                'product-description' => 'iPhone 15 Pro Max Green',
            ],
            [
                'product-name' => 'iPhone 15 Pro Max Blue',
                'product-img' =>  $this->package->getUrl('media/product/ip186792_00.jpg'),
                'product-description' => 'iPhone 15 Pro Max Blue',
            ],
            [
                'product-name' => 'iPhone 15 Pro Max Pink',
                'product-img' =>  $this->package->getUrl('media/product/ip186793_00.jpg'),
                'product-description' => 'iPhone 15 Pro Max Pink',
            ],
            [
                'product-name' => 'iPhone 15 Pro Max Black',
                'product-img' =>  $this->package->getUrl('media/product/ip186789_00.jpg'),
                'product-description' => 'iPhone 15 Pro Max Black',
            ]
        ];
    }

}
