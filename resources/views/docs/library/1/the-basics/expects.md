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

| Expect                    |
|---------------------------|
| contains                  |
| notContains               |
| startsWith                |
| endsWith                  |
| isTheSameAs               |
| samePriceAs               |
| equals                    |
| isNull                    |
| isNotNull                 |
| isNotEmpty                |
| isBetween                 |
| isGreaterThan             |
| isLessThan                |
| isGreaterThanOrEqualTo    |
| isLessThanOrEqualTo       |

### Elements

| Expect                    |
|---------------------------|
| elementIsVisible          |
| elementIsNotVisible       |

### Shop
| Expect                    |
|---------------------------|
| shopIsInMaintenance       |
| shopIsNotInMaintenance    |
| shopIsVisible             |
| shopIsNotVisible          |

### Customer

| Expect                    |
|---------------------------|
| customerIsLogged          |
| customerIsNotLogged       |

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

### Using a custom expected message

<!-- Since -->
<div class="flex items-center gap-4">
  <div class="relative inline-flex">
    <button class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
      Since 1.2.0
    </button>
    <span class="absolute top-0.5 left-0.5 grid min-h-[12px] min-w-[12px] -translate-x-2/4 -translate-y-2/4 place-items-center rounded-full bg-purple-600 py-1 px-1 text-xs font-medium leading-none text-white content-['']"></span>
  </div>
</div>
<!-- / Since -->

```php
Expect::that($productPrice)->samePriceAs($productPriceExpected, "{value} need to be like {expected}");
```
