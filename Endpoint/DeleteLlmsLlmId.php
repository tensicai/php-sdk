<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class DeleteLlmsLlmId implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'DELETE';
    private string $uri = '/llms/{llm_id}';
    private int $llmId;

    public function llmId(): int
    {
        return $this->llmId;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'llm_id' => $this->llmId,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['llm_id' => 'llmId'];
    }
}
