<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Model\TeamModelUpdate;

class PatchTeamsTeamId implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'PATCH';
    private string $uri = '/teams/{team_id}';
    private int $teamId;
    private TeamModelUpdate $body;

    public function teamId(): int
    {
        return $this->teamId;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'team_id' => $this->teamId,
            'body' => $this->body,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['team_id' => 'teamId'];
    }
}
