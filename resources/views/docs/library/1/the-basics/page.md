---
title: Page
order: 400
---

## Native pages

PrestaFlow includes a series of so-called native pages.

These are the pages found in your PrestaShop store, such as product pages, categories, CMS, contact, etc.

## Import page

```php
$this->importPage('FrontOffice\Category');
```

In order to use the imported pages, it is necessary to extract them!

```php
extract($this->pages);
```

Once imported, you will be able to use a page in your steps via a use within the step closure.

The variable name is defined as follows:

- FrontOffice\Category => $frontOfficeCategoryPage
- FrontOffice\Product => $frontOfficeProductPage

## Custom page

### Create

```php
namespace Shop\Tests\Pages\v9\Modules\Custom;

use PrestaFlow\Library\Pages\v9\FrontOffice\Page as BasePage;

class Page extends BasePage
{
    public string $url = 'guest-tracking';
    public string $pageTitle = 'Guest Order Tracking';

    public function defineMessages()
    {
        return [
            'addedToCart' => $this->translate('Product successfully added to your shopping cart'),
        ];
    }

    public function getPrice()
    {
        return $this->getTextContent($this->getSelector('currentProductPrice'));
    }

    public function addToCart(int $quantity = 1)
    {
        $this->setValue($this->getSelector('quantityWantedInput'), $quantity);

        $this->click($this->getSelector('addToCartButton'));

        return ltrim($this->getTextContent($this->getSelector('modalTitle')));
    }
}
```

### Import page

To import a custom page, you use the same call as to import a regular page, adding the domain it applies to.

```php
$this->importPage('Modules\Custom', domain: 'Shop\Tests');
```

After the extraction of the page, you can use it as this :

```php
$testSuite
->it('should go to page', function () use ($modulesCustomPage) {
    $modulesCustomPage->goToPage($modulesCustomPage);

    Expect::that($modulesCustomPage->getPageTitle())->contains($modulesCustomPage->pageTitle());
})

;
```
