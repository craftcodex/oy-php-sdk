<?php

namespace CraftCodex\OyPhpSdk\Concerns;

trait HasHeader
{
    protected array $headers = [
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
    ];

    /**
     * Get request header
     */
    public function getHeaders(): array
    {
        return array_merge([
            'X-OY-Username' => $this->getUsername(),
            'X-Api-Key' => $this->getApiKey(),
        ], $this->headers);
    }

    /**
     * Set http headers
     *
     * @return $this
     */
    public function headers($headers): static
    {
        $this->headers = array_merge($this->headers, $headers);

        return $this;
    }
}
