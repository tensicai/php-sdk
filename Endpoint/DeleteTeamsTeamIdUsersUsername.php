<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class DeleteTeamsTeamIdUsersUsername implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'DELETE';
    private string $uri = '/teams/{team_id}/users/{username}';
    private int $teamId;
    private string $username;

    public function teamId(): int
    {
        return $this->teamId;
    }

    public function username(): string
    {
        return $this->username;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'team_id' => $this->teamId,
            'username' => $this->username,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'team_id' => 'teamId',
            'username' => 'username',
        ];
    }
}
