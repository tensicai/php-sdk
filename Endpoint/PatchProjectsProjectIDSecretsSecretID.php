<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Model\ProjectSecretUpdate;

class PatchProjectsProjectIDSecretsSecretID implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'PATCH';
    private string $uri = '/projects/{projectID}/secrets/{secretID}';
    private int $projectID;
    private int $secretID;
    private ProjectSecretUpdate $body;

    public function projectID(): int
    {
        return $this->projectID;
    }

    public function secretID(): int
    {
        return $this->secretID;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'projectID' => $this->projectID,
            'secretID' => $this->secretID,
            'body' => $this->body,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'projectID' => 'projectID',
            'secretID' => 'secretID',
        ];
    }
}
