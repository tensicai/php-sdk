<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Model\ImageModel;

class PostImageGeneratorGenerate implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'POST';
    private string $uri = '/image/{generator}/generate';
    private string $generator;
    private ImageModel $body;

    public function generator(): string
    {
        return $this->generator;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'generator' => $this->generator,
            'body' => $this->body,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['generator' => 'generator'];
    }
}
