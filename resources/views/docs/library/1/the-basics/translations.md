---
title: Translations
order: 600
---

The library supports a PrestaShop store based on the language used.

Since English is used by default in PrestaShop, this language is automatically supported by PrestaFlow.

French is also supported by the library's editorial team.

## Add your own translations

It's sometimes necessary to add your own translations, as the same text may be translated differently depending on the store.

Furthermore, your store itself includes its own translations for your specific developments.

You can add these in a JSON format file present in the Tests/Translations folder and its name must be as follows: <locale>.json

```json
{
    "Guest Order Tracking": "Suivi de commande invité"
}
```

## Add your own messages

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

You can add these in a JSON format file present in the Tests/Messages folder and its name must be as follows: <locale>.json

```json
{
    "loginErrorText": "The employee does not exist, or the password provided is incorrect."
}
```
