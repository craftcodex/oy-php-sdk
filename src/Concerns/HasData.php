<?php

namespace CraftCodex\OyPhpSdk\Concerns;

trait HasData
{
    protected array $data = [];

    public function defaultData(){
        return [];
    }

    /**
     * Set http body
     *
     * @param $data = self::$data
     * @return $this
     */
    public function data($data): static
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get http body
     *
     * @throws \Throwable
     */
    public function getData(): array
    {
        return array_merge(
            $this->defaultData(),
            $this->data
        );
    }
}
