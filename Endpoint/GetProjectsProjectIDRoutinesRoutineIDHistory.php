<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Model\GetProjectsProjectIDRoutinesRoutineIDHistoryQuery;

class GetProjectsProjectIDRoutinesRoutineIDHistory implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'GET';
    private string $uri = '/projects/{projectID}/routines/{routineID}/history';
    private int $projectID;
    private int $routineID;
    private GetProjectsProjectIDRoutinesRoutineIDHistoryQuery|null $query = null;

    public function projectID(): int
    {
        return $this->projectID;
    }

    public function routineID(): int
    {
        return $this->routineID;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'projectID' => $this->projectID,
            'routineID' => $this->routineID,
            'query' => $this->query,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'projectID' => 'projectID',
            'routineID' => 'routineID',
        ];
    }
}
