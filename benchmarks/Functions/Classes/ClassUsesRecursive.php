<?php

namespace Kusabi\Native\Benchmarks\Functions\Classes;

use Kusabi\Native\Benchmarks\Bench;
use Kusabi\Native\Tests\Mocks\ClassWithoutTrait;
use Kusabi\Native\Tests\Mocks\ClassWithTrait;
use Kusabi\Native\Tests\Mocks\ClassWithTraitByExtension;
use Kusabi\Native\Tests\Mocks\TraitWithoutTrait;
use Kusabi\Native\Tests\Mocks\TraitWithTrait;

class ClassUsesRecursive extends Bench
{
    public function benchClassWithTrait()
    {
        class_uses_recursive(ClassWithTrait::class);
    }

    public function benchClassWithTraitByExtension()
    {
        class_uses_recursive(ClassWithTraitByExtension::class);
    }

    public function benchClassWithoutTrait()
    {
        class_uses_recursive(ClassWithoutTrait::class);
    }

    public function benchStdObject()
    {
        class_uses_recursive(new \stdClass());
    }

    public function benchTraitWithTrait()
    {
        class_uses_recursive(TraitWithTrait::class);
    }

    public function benchTraitWithoutTrait()
    {
        class_uses_recursive(TraitWithoutTrait::class);
    }
}
