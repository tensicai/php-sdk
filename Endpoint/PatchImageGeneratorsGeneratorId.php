<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Model\ImageGeneratorModelUpdate;

class PatchImageGeneratorsGeneratorId implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'PATCH';
    private string $uri = '/image-generators/{generator_id}';
    private int $generatorId;
    private ImageGeneratorModelUpdate $body;

    public function generatorId(): int
    {
        return $this->generatorId;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'generator_id' => $this->generatorId,
            'body' => $this->body,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['generator_id' => 'generatorId'];
    }
}
