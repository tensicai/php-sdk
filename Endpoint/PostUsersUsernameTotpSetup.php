<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Model\TOTPSetupRequest;

class PostUsersUsernameTotpSetup implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'POST';
    private string $uri = '/users/{username}/totp/setup';
    private string $username;
    private TOTPSetupRequest $body;

    public function username(): string
    {
        return $this->username;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'username' => $this->username,
            'body' => $this->body,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['username' => 'username'];
    }
}
