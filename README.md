[![Total Downloads](https://poser.pugx.org/goszowski/stub/d/total.svg)](https://packagist.org/packages/goszowski/stub)
[![Latest Stable Version](https://poser.pugx.org/goszowski/stub/v/stable.svg)](https://packagist.org/packages/goszowski/stub)
[![License](https://poser.pugx.org/goszowski/stub/license.svg)](https://packagist.org/packages/goszowski/stub)
# stub
Generate file from stub

## Installation

		composer require goszowski\stub
    
## Usage
```php
<?php 

use Goszowski\Stub\Stub;

$stub = new Stub;
$stub->load('/path/to/stub/file');

$stub->replace('some_1', 'other_1');
$stub->replace('some_2', 'other_2');

// OR WITH ARRAY

$stub->replace([
  'some_1' => 'other_1',
  'some_2' => 'other_2',
]);

$stub->store('/path/to/save/file', 'filename');
```

## Usage in Laravel
```php
<?php 
namsepace App\YouNamespace;

use Facades\ {
  Goszowski\Stub\Stub
};

$stub = Stub::load('/path/to/stub/file');

$stub->replace('some_1', 'other_1');
$stub->replace('some_2', 'other_2');

// OR WITH ARRAY

$stub->replace([
  'some_1' => 'other_1',
  'some_2' => 'other_2',
]);

$stub->store('/path/to/save/file', 'filename');
```
