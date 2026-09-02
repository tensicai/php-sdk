<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class GetV1ModelsModelId implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'GET';
    private string $uri = '/v1/models/{model_id}';
    private string $modelId;

    public function modelId(): string
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
