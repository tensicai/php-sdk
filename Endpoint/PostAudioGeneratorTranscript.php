<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class PostAudioGeneratorTranscript implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'POST';
    private string $uri = '/audio/{generator}/transcript';
    private string $generator;

    public function generator(): string
    {
        return $this->generator;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'generator' => $this->generator,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['generator' => 'generator'];
    }
}
