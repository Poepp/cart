<?php

declare(strict_types=1);

namespace Extcode\Cart\Tests\Unit\Domain\Model\Product;

/*
 * This file is part of the package extcode/cart.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

use Extcode\Cart\Domain\Model\Product\CategoryTrait;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Domain\Model\Category;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

#[CoversClass(CategoryTrait::class)]
class CategoryTraitTest extends UnitTestCase
{
    protected $trait;

    public function setUp(): void
    {
        parent::setUp();

        $this->trait = $this->getObjectForTrait(CategoryTrait::class);
    }

    #[Test]
    public function getCategoryInitialReturnsNull(): void
    {
        self::assertNull(
            $this->trait->getCategory()
        );
    }

    #[Test]
    public function setCategorySetsCategory(): void
    {
        $category = GeneralUtility::makeInstance(Category::class);
        $this->trait->setCategory($category);

        self::assertSame(
            $category,
            $this->trait->getCategory()
        );
    }

    #[Test]
    public function getCategoriesInitialReturnsEmptyObjectStorage(): void
    {
        self::assertSame(
            0,
            $this->trait->getCategories()->count()
        );
    }
}
