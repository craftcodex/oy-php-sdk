<?php

namespace CraftCodex\OyPhpSdk\Concerns;

trait HasEndpoint
{
    protected ?string $path;

    protected ?string $host = 'https://partner.oyindonesia.com/api';

    protected ?string $stgHost = 'https://api-stg.oyindonesia.com/api';

    /**
     * Set Path
     *
     * @return $this
     */
    public function path($path): static
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get api path
     */
    public function getPath(): string
    {
        return str($this->path)->start('/');
    }

    /**
     * Set api host
     *
     * @return $this
     */
    public function host($host): static
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get api host
     */
    public function getHost(): ?string
    {
        return $this->isLocal() ? $this->stgHost : $this->host;
    }

    /**
     * Get full url of endpoint api
     */
    public function getUrl(): string
    {
        return $this->getHost().$this->getPath();
    }
}
