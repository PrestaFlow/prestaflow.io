---
title: Expects
order: 300
---

An expectation is an assertion that a test has passed.


## Usage

Expectation starting with Expect::that.

```php
Expect::that(<something)
```

There, you expect that something will be something.

### Generic
#### contains
#### notContains

#### startsWith
#### endsWith

#### isTheSameAs
#### samePriceAs
#### equals

#### isNull
#### isNotNull
#### isEmpty
#### isNotEmpty

#### isBetween
#### isGreaterThan
#### isLessThan
#### isGreaterThanOrEqualTo
#### isLessThanOrEqualTo

### Elements
#### elementIsVisible
#### elementIsNotVisible

### Shop
#### shopIsInMaintenance
#### shopIsInMaintenance
#### shopIsVisible
#### shopIsNotVisible

### Customer
#### customerIsLogged
#### customerIsNotLogged

## Example

```php
use PrestaFlow\Library\Expects\Expect;

class ModuleCustom extends Scenario
{
    public function steps($testSuite)
    {
        $this->importPage('Modules\Custom', domain: 'Shop\Tests');
        $this->importPage('FrontOffice\Category');

        extract($this->pages);

        $testSuite
        ->it('should go to page', function () use ($modulesCustomPage) {
            $modulesCustomPage->goToPage($modulesCustomPage);

            Expect::that($modulesCustomPage->getPageTitle())->contains($modulesCustomPage->pageTitle());
        })

        ;

        return $testSuite;
    }
}
```
