---
title: Release Notes
order: 1100
---

## PrestaFlow/php-library
@forelse (\App\Support\GitHub::library()->releases()->take(10) as $release)
### {{ $release->name }}
**Released: {{ \Carbon\Carbon::parse($release->published_at)->format('F j, Y') }}**

{{ $release->getBodyForMarkdown() }}
---
@empty
### We couldn't show you the latest release notes at this time.
Not to worry, you can head over to GitHub to see the [latest release notes](https://github.com/PrestaFlow/php-library/releases).
@endforelse
