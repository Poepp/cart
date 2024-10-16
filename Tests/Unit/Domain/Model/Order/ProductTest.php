<?php

namespace Extcode\Cart\Tests\Unit\Domain\Model\Order;

/*
 * This file is part of the package extcode/cart.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

use Extcode\Cart\Domain\Model\Order\Product;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

#[CoversClass(Product::class)]
class ProductTest extends UnitTestCase
{
    /**
     * @var Product
     */
    protected $product;

    /**
     * @var string
     */
    protected $sku;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var int
     */
    protected $count = 0;

    public function setUp(): void
    {
        $this->sku = 'sku';
        $this->title = 'title';
        $this->count = 1;

        $this->product = new Product();
        $this->product->setSku($this->sku);
        $this->product->setTitle($this->title);
        $this->product->setCount($this->count);

        parent::setUp();
    }

    #[Test]
    public function getSkuInitiallyReturnsEmptyString(): void
    {
        $product = new Product();

        self::assertSame(
            '',
            $product->getSku()
        );
    }

    #[Test]
    public function setSkuSetsSku(): void
    {
        $product = new Product();
        $product->setSku('sku');

        self::assertSame(
            'sku',
            $product->getSku()
        );
    }

    #[Test]
    public function getTitleInitiallyReturnsEmptyString(): void
    {
        $product = new Product();

        self::assertSame(
            '',
            $product->getTitle()
        );
    }

    #[Test]
    public function setTitleSetsTitle(): void
    {
        $product = new Product();
        $product->setTitle('title');

        self::assertSame(
            'title',
            $product->getTitle()
        );
    }

    #[Test]
    public function getCountInitiallyReturnsZero(): void
    {
        $product = new Product();

        self::assertSame(
            0,
            $product->getCount()
        );
    }

    #[Test]
    public function setCountSetsCount(): void
    {
        $product = new Product();
        $product->setCount(10);

        self::assertSame(
            10,
            $product->getCount()
        );
    }

    #[Test]
    public function getProductTypeReturnsInitialValueForProductType(): void
    {
        self::assertSame(
            '',
            $this->product->getProductType()
        );
    }

    #[Test]
    public function setProductTypeSetsProductType(): void
    {
        $this->product->setProductType('configurable');

        self::assertSame(
            'configurable',
            $this->product->getProductType()
        );
    }
}
