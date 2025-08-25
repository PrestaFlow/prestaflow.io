---
title: Scenario
order: 500
---

A scenario is a set of steps.

Creating scenarios allow you to use them in one line instead of duplicate each steps that it contains.

## Creating scenario

You need to extends the Scenario class and add the steps() method.

```php
use PrestaFlow\Library\Scenarios\Scenario;

class AddProductToCart extends Scenario
{
    public function steps($testSuite)
    {
        return $testSuite;
    }
}
```

You can now write your steps as you will do inside a test suite.

```php
    public function steps($testSuite)
    {
        $testSuite->importPage('FrontOffice\Category');
        $testSuite->importPage('FrontOffice\Product');

        extract($testSuite->pages);

        $testSuite
        ->it('go to category page', function () use ($frontOfficeCategoryPage) {
            $frontOfficeCategoryPage->goToPage('category', (int) $this->getParam('categoryId'));

            Expect::that($frontOfficeCategoryPage->getListingTitle())->contains($this->getParam('categoryTitle'));
        })
        ->it('go to product page', function () use ($frontOfficeCategoryPage, $frontOfficeProductPage) {
            $frontOfficeCategoryPage->goToProduct((int) $this->getParam('productIndex'));

            Expect::that($frontOfficeProductPage->getTitle())->contains($this->getParam('productTitle'));
        })
        ->it('add to cart', function () use ($frontOfficeProductPage) {
            $textResult = $frontOfficeProductPage->addToCart((int) $this->getParam('cartQuantity'));

            Expect::that($textResult)->contains($frontOfficeProductPage->message('addedToCart'));
        });

        return $testSuite;
    }
```

## Use

```php
->scenario(ModuleCustom::class)
```

## Parameters

A scenario is a make to re-use steps.

As each steps could be taking one or more parameters distinctly, you can add a array of parameters.

### Declare parameters

```php
public $params = [
    'categoryId' => 3,
    'categoryTitle' => 'Vêtements',
    'productIndex' => 1,
    'productTitle' => 'T-shirt imprimé colibri',
    'cartQuantity' => 1,
];
```

You will define the key as a parameter and you can attach it a default value.

### Pass parameters in test suite

```php
->scenario(ModuleCustom::class, [
    'locale' => 'en',
    'useIsoCode' => true,
])
```
