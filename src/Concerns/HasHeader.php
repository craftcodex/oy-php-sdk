<?php

namespace CraftCodex\OyPhpSdk\Concerns;

trait HasHeader
{
    protected array $headers = [];

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function headers($headers): static
    {
        $this->headers = $headers;
        return $this;
    }
}
