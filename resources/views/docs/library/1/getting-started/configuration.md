---
title: Configuration
order: 200
---

In order to configure your project and tell PrestaFlow the necessary data, you need to add the following elements to your .env file.

## .env

| Parameters | Mandatory | Example value |Default value |
|------------|-----------|---------------|--------------|
| PRESTAFLOW_PS_VERSION         |       | 9.0.0                 | 8.1.0|
| PRESTAFLOW_LOCALE             |       | fr                    | en|
| PRESTAFLOW_PREFIX_LOCALE      |       | true                  | false|
| PRESTAFLOW_FO_URL             | Yes   | https://9.0.0.test/   | false|
| PRESTAFLOW_FO_EMAIL           |       | front@prestaflow.io   | pub@prestashop.com |
| PRESTAFLOW_FO_PASSWD          |       | front-password        | 123456789|
| PRESTAFLOW_BO_URL             |       | true                  | <Front URL>/admin-dev/|
| PRESTAFLOW_BO_EMAIL           |       | back@prestaflow.io    | demo@prestashop.com|
| PRESTAFLOW_BO_PASSWD          |       | back-password         | Correct Horse Battery Staple|
| PRESTAFLOW_HEADLESS           |       | false                 | true|
| PRESTAFLOW_DEBUG              |       | true                  | false|
| PRESTAFLOW_VERBOSE            |       | false                 | true|

### PRESTAFLOW_PREFIX_LOCALE

Useful when your store is in multiple languages.

Allows PrestaFlow to add the language prefix to the desired URLs.

### PRESTAFLOW_HEADLESS

When this parameter is set to true, you have the option to see the actions performed via automatic browser opening at each step.

### PRESTAFLOW_DEBUG

Allows you to obtain useful information during test execution.

### PRESTAFLOW_VERBOSE

When set to false, this reduces the output display when tests run without errors.
