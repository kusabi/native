<?php

namespace Kusabi\Native\Tests\Functions\Classes;

use Kusabi\Native\Tests\Mocks\ClassWithoutTrait;
use Kusabi\Native\Tests\Mocks\ClassWithTrait;
use Kusabi\Native\Tests\Mocks\ClassWithTraitByExtension;
use Kusabi\Native\Tests\Mocks\TraitWithoutTrait;
use Kusabi\Native\Tests\Mocks\TraitWithTrait;
use PHPUnit\Framework\TestCase;

/**
 * @covers \class_uses_recursive
 * @group functions
 * @group classes
 * @group queries
 * @group class_uses_recursive
 */
class ClassUsesRecursiveTest extends TestCase
{
    public function testStdClass()
    {
        $this->assertSame([], class_uses(new \stdClass()));
        $this->assertSame([], class_uses_recursive(new \stdClass()));
    }

    public function testClassWithoutTrait()
    {
        $this->assertSame([], class_uses(ClassWithoutTrait::class));
        $this->assertSame([], class_uses_recursive(ClassWithoutTrait::class));
    }

    public function testClassWithTrait()
    {
        $this->assertSame([
            TraitWithTrait::class => TraitWithTrait::class,
        ], class_uses(ClassWithTrait::class));
        $this->assertSame([
            TraitWithTrait::class => TraitWithTrait::class,
            TraitWithoutTrait::class => TraitWithoutTrait::class,
        ], class_uses_recursive(ClassWithTrait::class));
    }

    public function testClassWithTraitByExtension()
    {
        $this->assertSame([], class_uses(ClassWithTraitByExtension::class));
        $this->assertSame([
            TraitWithTrait::class => TraitWithTrait::class,
            TraitWithoutTrait::class => TraitWithoutTrait::class,
        ], class_uses_recursive(ClassWithTraitByExtension::class));
    }
}
