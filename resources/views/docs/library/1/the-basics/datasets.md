---
title: Datasets
order: 201
---

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

A dataset allow you to loop on the sames steps for each element.

## Declaration

To declare a new dataset, you simply use an array.

```php
$dataset = [
    [
        'productId' => 1,
        'productPrice' => '123,00€',
    ],
    [
        'productId' => 2,
        'productPrice' => '42,00€',
    ],
];
```

## Attach to suite

```php
->with($dataset)
```

## Use inside a step

To use a element of the dataset, you will use the `getParam()` method.

```php
->it('should check product price', function () use ($frontOfficeProductPage) {
    $productPrice = $frontOfficeProductPage->getPrice();

    Expect::that($productPrice)->samePriceAs($this->getParam('productPrice'));
})
```
