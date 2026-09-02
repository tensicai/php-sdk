<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Model\ProjectTemplateInstantiate;

class PostTemplatesTemplateIDInstantiate implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'POST';
    private string $uri = '/templates/{templateID}/instantiate';
    private int $templateID;
    private ProjectTemplateInstantiate $body;

    public function templateID(): int
    {
        return $this->templateID;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'templateID' => $this->templateID,
            'body' => $this->body,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['templateID' => 'templateID'];
    }
}
