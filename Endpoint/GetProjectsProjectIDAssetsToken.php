<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Model\GetProjectsProjectIDAssetsTokenQuery;

class GetProjectsProjectIDAssetsToken implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'GET';
    private string $uri = '/projects/{projectID}/assets/{token}';
    private int $projectID;
    private string $token;
    private GetProjectsProjectIDAssetsTokenQuery|null $query = null;

    public function projectID(): int
    {
        return $this->projectID;
    }

    public function token(): string
    {
        return $this->token;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'projectID' => $this->projectID,
            'token' => $this->token,
            'query' => $this->query,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'projectID' => 'projectID',
            'token' => 'token',
        ];
    }
}
