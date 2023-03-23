<?php

namespace CraftCodex\OyPhpSdk;

class OyPhpSdk
{
    use Concerns\HasCredential;
    use Concerns\HasHeader;
    use Concerns\HasEnvironment;

    protected ?string $username;

    protected ?string $apiKey;

    final public function __construct($username, $apiKey)
    {
        $this->username = $username;
        $this->apiKey = $apiKey;
    }

    public static function make($username, $apiKey): static
    {
        return new static($username, $apiKey);
    }
}
