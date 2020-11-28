## Description

Get a deep list of all the traits a class uses.

This includes traits used by parent classes and traits used by the traits.

This is an extension to the native function [class_uses](https://www.php.net/manual/en/function.class-uses.php)

```php
class_uses_recursive(mixed $class, bool $autoload = true): array
```

## Parameters

**class**

An object (class instance) or a string (class name).

**autoload**

Whether to allow this function to load the class automatically through the [__autoload()](https://www.php.net/manual/en/function.autoload.php) magic method.

## Returns

An array on success, or FALSE on error.

## Examples

**Example # 1 Example uses of class_uses_recursive()**

```php
print_r(class_uses_recursive('MyClass'));
```

The above example may output:

```
Array
(
    [TraitOne] => TraitOne
    [TraitTwo] => TraitTwo
)
```