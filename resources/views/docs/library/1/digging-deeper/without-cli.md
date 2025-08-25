---
title: Without CLI
order: 900
---

# Without CLI

The PHP library is designed for use from the command line.
It provides output specifically for this purpose.

However, you can run automated tests outside of the console.

## In a simple PHP file

```php
require_once './vendor/autoload.php';

use Tests\Products as ProductsTests;

$productsTests = new ProductsTests();
$productsTests->run();

$results = json_decode($productsTests->results(), true);

echo '<pre>';
var_dump($results['stats'], JSON_PRETTY_PRINT);
echo '</pre>';
```
