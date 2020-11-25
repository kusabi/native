# PHP native extensions library

![Tests](https://github.com/kusabi/native/workflows/tests/badge.svg)
[![codecov](https://codecov.io/gh/kusabi/native/branch/main/graph/badge.svg)](https://codecov.io/gh/kusabi/native)
[![Licence Badge](https://img.shields.io/github/license/kusabi/native.svg)](https://img.shields.io/github/license/kusabi/native.svg)
[![Release Badge](https://img.shields.io/github/release/kusabi/native.svg)](https://img.shields.io/github/release/kusabi/native.svg)
[![Tag Badge](https://img.shields.io/github/tag/kusabi/native.svg)](https://img.shields.io/github/tag/kusabi/native.svg)
[![Issues Badge](https://img.shields.io/github/issues/kusabi/native.svg)](https://img.shields.io/github/issues/kusabi/native.svg)
[![Code Size](https://img.shields.io/github/languages/code-size/kusabi/native.svg?label=size)](https://img.shields.io/github/languages/code-size/kusabi/native.svg)

<sup>A library that extends PHP's native functionality</sup>

## Compatibility and dependencies

This library is compatible with PHP version `5.6`, `7.0`, `7.1`, `7.2`, `7.3`, `7.4`, `8.0` and `8.1`.

This library has no dependencies.

## Installation

Installation is simple using composer.

```bash
composer require kusabi/native
```

Or simply add it to your `composer.json` file

```json
{
    "require": {
        "kusabi/native": "^1.0"
    }
}
```

## Array functions

This library adds a number of array functions to extend PHP's native functionality

Below you can find links to the documentation for the new features.


| Function | Description |
| --- | ----------- |
| [array_at](documentation/array_at.md) | Get the nth value from an array |
| [array_deflate](documentation/array_deflate.md) | Flattens a nested array into a single level array |
| [array_except](documentation/array_except.md) | Return a subset of the array by passing in an array of keys to discard |
| [array_exists](documentation/array_exists.md) | Checks if the given key or index exists in the array using dot notation for nested arrays |
| [array_get](documentation/array_exists.md) | Returns a value from the array, using dot notation for nested sets |
| [array_inflate](documentation/array_inflate.md) | Expands a flattened array back into a nested array |
| [array_key_at](documentation/array_key_at.md) | Get the nth key from an array |
| [array_only](documentation/array_only.md) | Return a subset of the array by passing in an array of keys to keep |
| [array_pull](documentation/array_pull.md) | Return and remove a key in the array using dot notation for nested arrays |
| [array_set](documentation/array_set.md) | Set a key in the array using dot notation for nested arrays |
| [array_unset](documentation/array_unset.md) | Remove a key in the array using dot notation for nested arrays |

## String functions

This library adds a number of strings functions to extend PHP's native functionality

Below you can find links to the documentation for the new features.


| Function | Description |
| --- | ----------- |
| [str_case_camel](documentation/str_case_camel.md) | Converts a string to `camelCase` |
| [str_case_kebab](documentation/str_case_kebab.md) | Converts a string to `kebab-case` |
| [str_case_pascal](documentation/str_case_pascal.md) | Converts a string to `PascalCase` |
| [str_case_sentence](documentation/str_case_sentence.md) | Converts a string to `Sentence case` |
| [str_case_snake](documentation/str_case_snake.md) | Converts a string to `snake_case` |
| [str_case_title](documentation/str_case_title.md) | Converts a string to `Title Case` |
| [str_cipher_caesar](documentation/str_cipher_caesar.md) | Transform a string by shifting each letter up or down the alphabet |
| [str_cipher_caesar_reverse](documentation/str_cipher_caesar.md) | Reverse the effects of `str_cipher_caesar` |
| [str_cipher_mono_alphabetic](documentation/str_cipher_mono_alphabetic.md) | Transform a string by mapping each letter to another alphabet |
| [str_contains](documentation/str_contains.md) | Determine if a string contains another string |
| [str_ends_with](documentation/str_ends_with.md) | Determine if a string ends with another string |
| [str_slug](documentation/str_slug.md) | Converts a string to a slug |
| [str_starts_with](documentation/str_starts_with.md) | Determine if a string starts with another string |
