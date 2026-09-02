<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class PutTeamsTeamIdProjectsProjectId implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'PUT';
    private string $uri = '/teams/{team_id}/projects/{project_id}';
    private int $teamId;
    private int $projectId;

    public function teamId(): int
    {
        return $this->teamId;
    }

    public function projectId(): int
    {
        return $this->projectId;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'team_id' => $this->teamId,
            'project_id' => $this->projectId,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'team_id' => 'teamId',
            'project_id' => 'projectId',
        ];
    }
}
