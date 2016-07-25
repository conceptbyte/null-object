# Null Object for PHP

Allows the user to call the null object which handles all calls silently and returns sensible defaults.
The returned object can be type cast to return the following values:

- String - ""
- Integer - 0
- Float or Real - 0.0
- Array - []
- Boolean  - False

## Installation

Run the following to install:

```composer require conceptbyte/null-object```

## Usage
The null object can be created in one of the following methods:
- Named constructor: ```NullObject::create()```
- Helper function: ```no()```

Both will return an instance of the class.
Calls to any methods or members on this class will return
the defaults as mentioned in the section above.

## Example
```php
(string) NullObject::create()->xyz; // ""
(bool) NullObject::create()->abc(); // false
(int) no()->xyz; // 0
(float) no()->abc(); // 0.0
```

## Quirks
PHP does not allow modifying the behaviour of casting a class to boolean.
A simple hack is to use the SimpleXMLElement class which can return false when passed
an empty XML tag.