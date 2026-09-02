<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class DeleteTeamsTeamIdImageGeneratorsGeneratorName implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'DELETE';
    private string $uri = '/teams/{team_id}/image-generators/{generator_name}';
    private int $teamId;
    private string $generatorName;

    public function teamId(): int
    {
        return $this->teamId;
    }

    public function generatorName(): string
    {
        return $this->generatorName;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'team_id' => $this->teamId,
            'generator_name' => $this->generatorName,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'team_id' => 'teamId',
            'generator_name' => 'generatorName',
        ];
    }
}
