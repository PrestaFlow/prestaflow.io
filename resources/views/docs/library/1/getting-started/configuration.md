---
title: Configuration
order: 200
---

In order to configure your project and tell <span class="bg-clip-text bg-gradient-to-tl from-blue-400 to-teal-600 font-semibold text-transparent">PrestaFlow</span> the necessary data, you need to add the following elements to your .env file.

`PRESTAFLOW_FO_URL` is the only required configuration.

Adding the `PRESTAFLOW_PS_VERSION` and `PRESTAFLOW_LOCALE` configurations is strongly recommended.

## .env

### PrestaShop instance

| Parameters | Mandatory | Example value |Default value |
|------------|-----------|---------------|--------------|
| PRESTAFLOW_PS_VERSION         |       | 9.0.0                 | 8.1.0|
| PRESTAFLOW_LOCALE             |       | fr                    | en|
| PRESTAFLOW_PREFIX_LOCALE      |       | true                  | false|

### Front Office

| Parameters | Mandatory | Example value |Default value |
|------------|-----------|---------------|--------------|
| PRESTAFLOW_FO_URL             | Yes   | https://9.0.0.test/   | false|
| PRESTAFLOW_FO_EMAIL           |       | front@prestaflow.io   | pub@prestashop.com |
| PRESTAFLOW_FO_PASSWD          |       | front-password        | 123456789|

### Back Office

| Parameters | Mandatory | Example value |Default value |
|------------|-----------|---------------|--------------|
| PRESTAFLOW_BO_URL             |       | true                  | <Front URL>/admin-dev/|
| PRESTAFLOW_BO_EMAIL           |       | back@prestaflow.io    | demo@prestashop.com|
| PRESTAFLOW_BO_PASSWD          |       | back-password         | Correct Horse Battery Staple|

### Browser options

| Parameters | Mandatory | Example value |Default value |
|------------|-----------|---------------|--------------|
| PRESTAFLOW_HEADLESS           |       | false                 | true|
| PRESTAFLOW_USER_AGENT           |       |                  | PrestaFlow|
| PRESTAFLOW_WINDOW_SIZE_HEIGHT          |       | 1800                 | 1920|
| PRESTAFLOW_WINDOW_SIZE_WIDTH          |       | 540                 | 1000|

### Misc

| Parameters | Mandatory | Example value |Default value |
|------------|-----------|---------------|--------------|
| PRESTAFLOW_DEBUG              |       | true                  | false|
| PRESTAFLOW_VERBOSE            |       | false                 | true|

### More details

#### PRESTAFLOW_PREFIX_LOCALE

Useful when your store is in multiple languages.

Allows <span class="bg-clip-text bg-gradient-to-tl from-blue-400 to-teal-600 font-semibold text-transparent">PrestaFlow</span> to add the language prefix to the desired URLs.

#### PRESTAFLOW_HEADLESS

When this parameter is set to true, you have the option to see the actions performed via automatic browser opening at each step.

#### PRESTAFLOW_DEBUG

Allows you to obtain useful information during test execution.

#### PRESTAFLOW_VERBOSE

When set to false, this reduces the output display when tests run without errors.
