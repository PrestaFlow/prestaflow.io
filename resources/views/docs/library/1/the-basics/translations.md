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
