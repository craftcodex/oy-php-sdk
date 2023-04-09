<?php

namespace CraftCodex\OyPhpSdk;

use CraftCodex\OyPhpSdk\Constants\Method;
use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class OyPhpSdk
{
    use Concerns\HasCredential;
    use Concerns\HasHeader;
    use Concerns\HasEnvironment;
    use Concerns\HasEndpoint;
    use Concerns\HasData;
//    use Concerns\HasSignEncryption;
//    use Concerns\HasCallbackUrl;

    protected ?string $username;

    protected ?string $apiKey;

    protected string $method = Method::POST;

    final public function __construct(?string $username = null, ?string $apiKey = null)
    {
        $this->username = $username;
        $this->apiKey = $apiKey;
    }

    public static function make(string $username = null, string $apiKey = null): static
    {
        return new static($username, $apiKey);
    }

    public function send(): PromiseInterface|Response
    {
        $request = Http::withHeaders($this->getHeaders())
            ->connectTimeout(40)
            ->withoutVerifying();

        if ($this->method == Method::POST) {
            return $request->post(
                url: $this->getUrl(),
                data: $this->getData()
            );
        }

        return $request->get(url: $this->getUrl(), query: http_build_query($this->getData()));
    }
}
