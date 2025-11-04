---
title: Frequently Asked Questions
order: 900
---

## How to set my PrestaShop in test mode ?

To enable the test mode on your PrestaShop, you will need to use the `_PS_IN_TEST_`  constant.

In order to allow you to enable it only while <span class="bg-clip-text bg-gradient-to-tl from-blue-400 to-teal-600 font-semibold text-transparent">PrestaFlow</span> will perform a test, you can
define it regarding the <strong>User Agent</strong>.

```php
if ($_SERVER['HTTP_USER_AGENT'] == 'PrestaFlow') {
  define('_PS_IN_TEST_', true);
}
```

Also, you will need to copy your <strong>img</strong> folder into the <strong>tests/Resources/img</strong> folder if it doesn't yet exists.

<aside class="relative z-0 mt-5 overflow-hidden rounded-2xl bg-blue-50 px-5 ring-1 ring-black/5 dark:bg-blue-600/10">

#### About the User-Agent

<span class="bg-clip-text bg-gradient-to-tl from-blue-400 to-teal-600 font-semibold text-transparent">PrestaFlow</span> allow you to set a generic **User-Agent** globally, for each suite and even each performed test !

</aside>

## Handle the .htpasswd on my preprod

As now, there is no method to fill the form where the user and password are asked once a .htpasswd file is present on your instance.

To avoid any issue with that, you can still use them inside the URL - as it's in the .env file - like this : https://preprod:passwd@preprod.url
