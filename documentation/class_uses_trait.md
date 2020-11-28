## Description

Determine if a class or object uses a trait.

```php
class_uses_trait(mixed $class, string $trait, bool $recursive = false, bool $autoload = true): array
```

## Parameters

**class**

An object (class instance) or a string (class name).

**trait**

The trait name

**recursive**

If TRUE, will use [class_uses_recursive](documentation/class_uses_recursive.md) otherwise it will use [class_uses](https://www.php.net/manual/en/function.class-uses.php)

**autoload**

Whether to allow this function to load the class automatically through the [__autoload()](https://www.php.net/manual/en/function.autoload.php) magic method.


## Returns

A boolean that indicates if the class or object uses the trait

## Examples

**Example # 1 Example uses of class_uses_trait()**

```php
if (class_uses('MyClass', 'MyTrait')) {
    echo 'Yes';
} else {
    echo 'No';
}
```

The above example may output:

```
true
```

**Example # 2 Example uses of class_uses_trait() with recursively**

```php
if (class_uses('MyClass', 'MyTrait', true)) {
    echo 'Yes';
} else {
    echo 'No';
}
```

The above example may output:

```
true
```