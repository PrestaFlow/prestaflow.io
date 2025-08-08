---
title: Installation
order: 100
---

## Requirements

1. PHP 8.2+
2. PHP Gd extension
3. PrestaShop 8+
4. *It's all !*

## PrestaShop version

Currently, only PrestaShop versions 8 and 9 are supported by the library.

## Install the library

```shell
composer require prestaflow/php-library
```

## Composer scripts

Into your composer.json, add theses scripts :

``` json
"scripts": {
    "prestaflow:base": "./vendor/prestaflow/php-library/bin/prestaflow run",
    "prestaflow:tests": "@prestaflow:base ./Tests @additional_args",
    "prestaflow:tests:json": "./vendor/prestaflow/php-library/bin/prestaflow run --output=JSON ./Tests"
},
```

You are free to modify the "tests" script to populate another folder if necessary.

## Run

```shell
composer run prestaflow:tests
```

As now, if you doesn't have a Tests folder, you will have an error ouput.

If you have a Tests folder but withtout PrestaFlow's suites, it will show a success message.

### JSON output

<aside class="relative z-0 mt-5 overflow-hidden rounded-2xl bg-yellow-50 px-5 ring-1 ring-black/5 dark:bg-yellow-600/40">

Not working on __1.0.0__ version.
Working on it for next minor version.

</aside>

Also, you can get the JSON output if wanted.

```shell
composer run prestaflow:tests:json
```
