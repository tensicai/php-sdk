<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Model\AdminRoutineToggleRequest;

class PatchAdminRoutinesRoutineID implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'PATCH';
    private string $uri = '/admin/routines/{routineID}';
    private int $routineID;
    private AdminRoutineToggleRequest $body;

    public function routineID(): int
    {
        return $this->routineID;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'routineID' => $this->routineID,
            'body' => $this->body,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['routineID' => 'routineID'];
    }
}
