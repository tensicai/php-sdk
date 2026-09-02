<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class GetUsersUsernameApikeys implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'GET';
    private string $uri = '/users/{username}/apikeys';
    private string $username;

    public function username(): string
    {
        return $this->username;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'username' => $this->username,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['username' => 'username'];
    }
}
