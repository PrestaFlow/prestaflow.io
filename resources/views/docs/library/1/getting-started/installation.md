---
title: Installation
order: 100
---

## Requirements

1. PHP 8.2+
2. PHP Gd extension
3. PrestaShop 1.7, 8 or 9
4. *It's all !* ✨

## PrestaShop version

PrestaShop versions 1.7, 8 and 9 are supported by the library.

## Install the library

```shell
composer require prestaflow/php-library
```

## Composer scripts

Into your composer.json, add theses scripts :

``` json
"scripts": {
    "prestaflow:default": "./vendor/prestaflow/php-library/bin/prestaflow run",
    "prestaflow:json": "@prestaflow:default --output=JSON"
},
```

<!-- Since -->
<div class="flex items-center gap-4">
  <div class="relative inline-flex">
    <button class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
      Since 1.2.2
    </button>
    <span class="absolute top-0.5 left-0.5 grid min-h-[12px] min-w-[12px] -translate-x-2/4 -translate-y-2/4 place-items-center rounded-full bg-purple-600 py-1 px-1 text-xs font-medium leading-none text-white content-['']"></span>
  </div>
</div>
<!-- / Since -->

While using JSON output, you can save the results into a file.

``` json
"scripts": {
    "prestaflow:default": "./vendor/prestaflow/php-library/bin/prestaflow run",
    "prestaflow:json": "@prestaflow:default --output=JSON",
    "prestaflow:json:file": "@prestaflow:json -f prestaflow/results.json"
},
```

## Run

```shell
composer prestaflow:default
composer prestaflow:default -- --output="compact"
```

As now, if you doesn't have a <Tests> folder, you will have an error ouput.

If you have a <Tests> folder but without PrestaFlow's suites, it will show a success message.

You can also specify a different folder if needed.

```shell
composer prestaflow:default ./FolderName
```

### JSON output

Also, you can get the JSON output if wanted.

```shell
composer prestaflow:json
composer prestaflow:default -- -o "json"
composer prestaflow:default -- --output="json"
```

<!-- Since -->
<div class="flex items-center gap-4">
  <div class="relative inline-flex">
    <button class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
      Since 1.2.2
    </button>
    <span class="absolute top-0.5 left-0.5 grid min-h-[12px] min-w-[12px] -translate-x-2/4 -translate-y-2/4 place-items-center rounded-full bg-purple-600 py-1 px-1 text-xs font-medium leading-none text-white content-['']"></span>
  </div>
</div>
<!-- / Since -->

```shell
composer prestaflow:json:file
```

### Working with drafts

<!-- Since -->
<div class="flex items-center gap-4">
  <div class="relative inline-flex">
    <button class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
      Since 1.1.0
    </button>
    <span class="absolute top-0.5 left-0.5 grid min-h-[12px] min-w-[12px] -translate-x-2/4 -translate-y-2/4 place-items-center rounded-full bg-purple-600 py-1 px-1 text-xs font-medium leading-none text-white content-['']"></span>
  </div>
</div>
<!-- / Since -->

Tests can be written at each key stage of a project.

To allow you to implement these without making the output cumbersome, you can define a test as a draft.

This gives you the option to test only drafts or, conversely, ignore them during execution.

```php
public $draft = true | false;
```

```shell
composer prestaflow:default -- --draft
composer prestaflow:default -- --no-draft
```

### Working with groups

<!-- Since -->
<div class="flex items-center gap-4">
  <div class="relative inline-flex">
    <button class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
      Since 1.1.0
    </button>
    <span class="absolute top-0.5 left-0.5 grid min-h-[12px] min-w-[12px] -translate-x-2/4 -translate-y-2/4 place-items-center rounded-full bg-purple-600 py-1 px-1 text-xs font-medium leading-none text-white content-['']"></span>
  </div>
</div>
<!-- / Since -->


Within a set of tests, it is sometimes possible to group some of them to refer to the test typology.

You can define one or more groups (using an array).

By default, a test that does not belong to any group will be included in the "All" group.

```php
public $groups = 'tutorial';
public $groups = ['scenarions', 'en'];
```

```shell
composer prestaflow:default -- --group=tutorial --group=other-group
```
