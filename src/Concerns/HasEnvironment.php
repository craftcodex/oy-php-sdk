<?php

namespace CraftCodex\OyPhpSdk\Concerns;

trait HasEnvironment
{
    protected ?string $environment;

    public function environment($environment): static
    {
        $this->environment = $environment;

        return $this;
    }

    public function getEnvironment(): string
    {
        return $this->environment ?? config('oy-php-sdk.env', 'local');
    }

    public function isProduction(): bool
    {
        return $this->getEnvironment() == 'production';
    }

    public function isLocal(): bool
    {
        return $this->getEnvironment() == 'local';
    }
}
