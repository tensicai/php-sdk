<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class DeleteUsersUsernameApikeysKeyId implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'DELETE';
    private string $uri = '/users/{username}/apikeys/{key_id}';
    private string $username;
    private int $keyId;

    public function username(): string
    {
        return $this->username;
    }

    public function keyId(): int
    {
        return $this->keyId;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'username' => $this->username,
            'key_id' => $this->keyId,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'username' => 'username',
            'key_id' => 'keyId',
        ];
    }
}
