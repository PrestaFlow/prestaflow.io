---
title: Selectors
order: 700
---

## Add your own selectors

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

You can add these in a JSON format file present in the Tests/Selectors folder and its name must be as follows: <locale>.json

```json
{
    "FrontOffice": {
        "Product": {
            "pageTitle": "h1.product-page-title"
        }
    }
}
```

The structured datas will follow the namespace as this : FrontOffice\Product\Page.
