<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class GetOauthProviderCallback implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'GET';
    private string $uri = '/oauth/{provider}/callback';
    private string $provider;

    public function provider(): string
    {
        return $this->provider;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'provider' => $this->provider,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['provider' => 'provider'];
    }
}
