<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class PutTeamsTeamIdLlmsLlmId implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'PUT';
    private string $uri = '/teams/{team_id}/llms/{llm_id}';
    private int $teamId;
    private int $llmId;

    public function teamId(): int
    {
        return $this->teamId;
    }

    public function llmId(): int
    {
        return $this->llmId;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'team_id' => $this->teamId,
            'llm_id' => $this->llmId,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'team_id' => 'teamId',
            'llm_id' => 'llmId',
        ];
    }
}
