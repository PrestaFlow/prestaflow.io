---
title: Actions
order: 700
---

### Page

#### `getPageTitle`

Get the page title based on the selector `pageTitle` on the Front Office view.

#### `getTextContent`

Get the text content of a specific element.

#### `goToUrl`

Navigate to a fully qualified URL.

#### `navigateTo`

This method will go to the specified element and click on it.

```php
$this->navigateTo(
    $this->selector('productArticle',['index' => $index]) . ' .product-title a'
);
```


#### `getMetaTitle`
<!-- Since -->
<div class="flex items-center gap-4">
  <div class="relative inline-flex">
    <button class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
      Since 1.2.3
    </button>
    <span class="absolute top-0.5 left-0.5 grid min-h-[12px] min-w-[12px] -translate-x-2/4 -translate-y-2/4 place-items-center rounded-full bg-purple-600 py-1 px-1 text-xs font-medium leading-none text-white content-['']"></span>
  </div>
</div>
<!-- / Since -->

Get the meta title of the page.

### Inputs

#### `getInputValue`

Get the content of the attribute `value` from specified input.

#### `setValue`

Set the content of the attribue `value` to a specific input.

#### `selectValue`

<!-- Since -->
<div class="flex items-center gap-4">
  <div class="relative inline-flex">
    <button class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
      Since 1.2.3
    </button>
    <span class="absolute top-0.5 left-0.5 grid min-h-[12px] min-w-[12px] -translate-x-2/4 -translate-y-2/4 place-items-center rounded-full bg-purple-600 py-1 px-1 text-xs font-medium leading-none text-white content-['']"></span>
  </div>
</div>
<!-- / Since -->

Select the first option from a select containing value as content.

### Mouse

#### `click`

Click on an element.
