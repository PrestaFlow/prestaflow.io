---
title: Tutorial
order: 100
---

Here we are!

Your project is configured and ready for its first tests.

## Namespaces

We'll add two namespaces to our composer.json file:
- Shop: custom test scenarios and elements
- Tests: test suites

```json
    "autoload": {
        "psr-4": {
            "Shop\\": "src/"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "Tests\\": "Tests/"
        }
    },
```

## Create a suite

Inside the Tests folder, create a file nammed as you want. For exemple : First.php

```php
namespace Tests;

use PrestaFlow\Library\Tests\TestsSuite;

class First extends TestsSuite
{
    public function init()
    {
        $this
        ->describe('PrestaFlow: my first scenario')
        ;
    }
}
```

If you run the prestaflow:tests script, you will see your first suite in action !

## Add steps

```php
namespace Tests;

use PrestaFlow\Library\Tests\TestsSuite;

class First extends TestsSuite
{
    public function init()
    {
        $this
        ->describe('PrestaFlow: my first scenario')
        ->todo('To be done', function () {
        })
        ->skip('will be skipped', function () {
        })
        ;
    }
}
```

## Create a scenario

In the src/Tests/Scenarios folder, add a file named DoNothing.php.

In it, add your first scenario as follows:

```php
namespace Shop\Tests\Scenarios;

use PrestaFlow\Library\Scenarios\Scenario;

class DoNothing extends Scenario
{
    public function steps($testSuite)
    {
        $testSuite
        ->todo('will do nothing (again)', function () {
        })
        ;

        return $testSuite;
    }
}
```

You can now use it into your suite.

```php
namespace Tests;

use PrestaFlow\Library\Tests\TestsSuite;
use Shop\Tests\Scenarios\DoNothing;

class First extends TestsSuite
{
    public function init()
    {
        $this
        ->describe('PrestaFlow: my first scenario')
        ->scenario(DoNothing::class)
        ;
    }
}
```
