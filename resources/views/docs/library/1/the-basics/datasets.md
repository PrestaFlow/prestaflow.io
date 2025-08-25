---
title: Datasets
order: 201
---

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

To use a element of the dataset, you will use the getParam() method.

```php
->it('should check product price', function () use ($frontOfficeProductPage) {
    $productPrice = $frontOfficeProductPage->getPrice();

    Expect::that($productPrice)->samePriceAs($this->getParam('productPrice'));
})
```
