---
title: Steps
order: 200
---

## It

An it step is a step that will be processed

```php
->it('should go to page', function () use ($modulesCustomPage) {
    $modulesCustomPage->goToPage($modulesCustomPage);

    Expect::that($modulesCustomPage->getPageTitle())->contains($modulesCustomPage->pageTitle());
})
```

## Todo

A todo step is a step to complete.

```php
->todo('To be done', function () {
})
```

## Skip

A skip step is a step to skip.



```php
->skip('will be skipped', function () {
})
```
