<?php

namespace CraftCodex\OyPhpSdk\Concerns;

trait HasCredential
{
    public function username($userName): static
    {
        $this->username = $userName;

        return $this;
    }

    public function getUsername(){
        return $this->username ?: config('oy.credential.username');
    }

    public function apiKey($apiKey): static
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function getApiKey(){
        return $this->apiKey ?: config('oy.credential.key');
    }
}
