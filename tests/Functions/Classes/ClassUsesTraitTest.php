<?php

namespace Kusabi\Native\Tests\Functions\Classes;

use Kusabi\Native\Tests\Mocks\ClassWithoutTrait;
use Kusabi\Native\Tests\Mocks\ClassWithTrait;
use Kusabi\Native\Tests\Mocks\ClassWithTraitByExtension;
use Kusabi\Native\Tests\Mocks\TraitWithoutTrait;
use Kusabi\Native\Tests\Mocks\TraitWithTrait;
use PHPUnit\Framework\TestCase;

/**
 * @covers \class_uses_trait
 * @group functions
 * @group classes
 * @group queries
 * @group class_uses_trait
 */
class ClassUsesTraitTest extends TestCase
{
    public function testStdClass()
    {
        $this->assertSame(false, class_uses_trait(new \stdClass(), TraitWithTrait::class));
        $this->assertSame(false, class_uses_trait(new \stdClass(), TraitWithTrait::class, true));
    }

    public function testClassWithoutTrait()
    {
        $this->assertSame(false, class_uses_trait(ClassWithoutTrait::class, TraitWithTrait::class));
        $this->assertSame(false, class_uses_trait(ClassWithoutTrait::class, TraitWithTrait::class, true));
    }

    public function testClassWithTrait()
    {
        $this->assertSame(true, class_uses_trait(ClassWithTrait::class, TraitWithTrait::class));
        $this->assertSame(false, class_uses_trait(ClassWithTrait::class, TraitWithoutTrait::class));
        $this->assertSame(true, class_uses_trait(ClassWithTrait::class, TraitWithTrait::class, true));
        $this->assertSame(true, class_uses_trait(ClassWithTrait::class, TraitWithoutTrait::class, true));
    }

    public function testClassWithTraitByExtension()
    {
        $this->assertSame(false, class_uses_trait(ClassWithTraitByExtension::class, TraitWithTrait::class));
        $this->assertSame(false, class_uses_trait(ClassWithTraitByExtension::class, TraitWithoutTrait::class));
        $this->assertSame(true, class_uses_trait(ClassWithTraitByExtension::class, TraitWithTrait::class, true));
        $this->assertSame(true, class_uses_trait(ClassWithTraitByExtension::class, TraitWithoutTrait::class, true));
    }
}
