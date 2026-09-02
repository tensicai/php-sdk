<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class GetTemplatesTemplateID implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'GET';
    private string $uri = '/templates/{templateID}';
    private int $templateID;

    public function templateID(): int
    {
        return $this->templateID;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'templateID' => $this->templateID,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['templateID' => 'templateID'];
    }
}
