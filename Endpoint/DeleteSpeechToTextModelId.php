<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class DeleteSpeechToTextModelId implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'DELETE';
    private string $uri = '/speech-to-text/{model_id}';
    private int $modelId;

    public function modelId(): int
    {
        return $this->modelId;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'model_id' => $this->modelId,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['model_id' => 'modelId'];
    }
}
