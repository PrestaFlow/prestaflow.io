---
title: GitHub Actions
order: 100
---

# GitHub Actions

You can use the library inside a GitHub workflow.

An [example](https://github.com/PrestaEdit/prestaflow-prestashop) is done here.

## Workflow

You will need to setup a PHP 8.2 version with GD extension.

Also, the needs to create an .env file will be achieved by a specific action.

```yml
#.github/workflows/php.yml
name: PHP Composer

on:
  push:
    branches: [ "main" ]
  pull_request:
    branches: [ "main" ]
  workflow_dispatch:


permissions:
  contents: read

jobs:
  build:

    runs-on: ubuntu-latest

    steps:
    - uses: actions/checkout@v4
    - run: |
          git config --global --add safe.directory /app

    - name: Validate composer.json and composer.lock
      run: composer validate --strict

    - name: Setup PHP
      uses: shivammathur/setup-php@v2
      with:
        php-version: '8.2'
        extensions: gd

    - name: Install dependencies
      run: composer install --prefer-dist --no-progress

    - name: Make envfile
      uses: SpicyPizza/create-envfile@v2.0
      with:
        envkey_PRESTAFLOW_PS_VERSION: "9.0.0"
        envkey_PRESTAFLOW_LOCALE: "fr"
        file_name: .env

    - name: Run test suite
      run: composer run prestaflow:tests
```

<aside class="relative z-0 mt-5 overflow-hidden rounded-2xl bg-blue-50 px-5 ring-1 ring-black/5 dark:bg-blue-600/10">

🚀 You can see more examples on this [workflow file](https://github.com/PrestaEdit/prestaflow-prestashop/actions/runs/17120347275).

</aside>
