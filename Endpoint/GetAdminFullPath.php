<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class GetAdminFullPath implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'GET';
    private string $uri = '/admin/{full_path}';
    private string $fullPath;

    public function fullPath(): string
    {
        return $this->fullPath;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'full_path' => $this->fullPath,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['full_path' => 'fullPath'];
    }
}
