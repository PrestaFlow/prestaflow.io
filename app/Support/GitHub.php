<?php

namespace App\Support;

use App\Support\GitHub\Release;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class GitHub
{
    public const PACKAGE_APP = 'prestaflow/app';

    public const PACKAGE_LIBRARY = 'prestaflow/php-library';

    public function __construct(
        private string $package
    ) {}

    public static function app(): static
    {
        return new static(static::PACKAGE_APP);
    }

    public static function library(): static
    {
        return new static(static::PACKAGE_LIBRARY);
    }

    public function latestVersion()
    {
        $release = Cache::remember(
            $this->getCacheKey('latest-version'),
            now()->addHour(),
            fn () => $this->fetchLatestVersion()
        );

        return $release?->name ?? 'Unknown';
    }

    public function releases(): Collection
    {
        return Cache::remember(
            $this->getCacheKey('releases'),
            now()->addHour(),
            fn () => $this->fetchReleases()
        ) ?? collect();
    }

    private function fetchLatestVersion(): ?Release
    {
        // Make a request to GitHub
        $response = Http::get('https://api.github.com/repos/'.$this->package.'/releases/latest');

        // Check if the request was successful
        if ($response->failed()) {
            return null;
        }

        return new Release($response->json());
    }

    private function getCacheKey(string $string): string
    {
        return sprintf('%s-%s', $this->package, $string);
    }

    private function fetchReleases(): ?Collection
    {
        // Make a request to GitHub
        $response = Http::get('https://api.github.com/repos/'.$this->package.'/releases');

        // Check if the request was successful
        if ($response->failed()) {
            return collect();
        }

        return collect($response->json())->map(fn (array $release) => new Release($release));
    }
}
