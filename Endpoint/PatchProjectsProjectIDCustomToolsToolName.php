<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Model\ProjectToolUpdate;

class PatchProjectsProjectIDCustomToolsToolName implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'PATCH';
    private string $uri = '/projects/{projectID}/custom-tools/{toolName}';
    private int $projectID;
    private string $toolName;
    private ProjectToolUpdate $body;

    public function projectID(): int
    {
        return $this->projectID;
    }

    public function toolName(): string
    {
        return $this->toolName;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'projectID' => $this->projectID,
            'toolName' => $this->toolName,
            'body' => $this->body,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'projectID' => 'projectID',
            'toolName' => 'toolName',
        ];
    }
}
