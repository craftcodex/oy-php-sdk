<?php

namespace CraftCodex\OyPhpSdk\Concerns;

trait HasCredential
{
    public function username($userName): static
    {
        $this->username = $userName;

        return $this;
    }

    public function apiKey($apiKey): static
    {
        $this->apiKey = $apiKey;

        return $this;
    }
}
