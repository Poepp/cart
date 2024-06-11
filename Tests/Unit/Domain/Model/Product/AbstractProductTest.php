<?php

namespace Extcode\Cart\Tests\Unit\Domain\Model\Product;

/*
 * This file is part of the package extcode/cart.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

use Extcode\Cart\Domain\Model\Product\AbstractProduct;
use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

class AbstractProductTest extends UnitTestCase
{
    protected MockObject $product;

    public function setUp(): void
    {
        parent::setUp();

        $this->product = $this->getMockForAbstractClass(
            AbstractProduct::class
        );
    }

    /**
     * @test
     */
    public function getSkuInitiallyReturnsEmptyString(): void
    {
        self::assertSame(
            '',
            $this->product->getSku()
        );
    }

    /**
     * @test
     */
    public function setSkuSetsSku(): void
    {
        $this->product->setSku('Abstract Product SKU');

        self::assertSame(
            'Abstract Product SKU',
            $this->product->getSku()
        );
    }

    /**
     * @test
     */
    public function getTitleInitiallyReturnsEmptyString(): void
    {
        self::assertSame(
            '',
            $this->product->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleSetsTitle(): void
    {
        $this->product->setTitle('Abstract Product Title');

        self::assertSame(
            'Abstract Product Title',
            $this->product->getTitle()
        );
    }

    /**
     * @test
     */
    public function getTeaserInitiallyReturnsEmptyString(): void
    {
        self::assertSame(
            '',
            $this->product->getTeaser()
        );
    }

    /**
     * @test
     */
    public function setTeaserSetsTeaser(): void
    {
        $this->product->setTeaser('Abstract Product Teaser');

        self::assertSame(
            'Abstract Product Teaser',
            $this->product->getTeaser()
        );
    }

    /**
     * @test
     */
    public function getDescriptionInitiallyReturnsEmptyString(): void
    {
        self::assertSame(
            '',
            $this->product->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionSetsDescription(): void
    {
        $this->product->setDescription('Abstract Product Description');

        self::assertSame(
            'Abstract Product Description',
            $this->product->getDescription()
        );
    }
}
