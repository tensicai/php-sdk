<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Model\mixed;

class PostSettingsVectordbBackendTest implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'POST';
    private string $uri = '/settings/vectordb/{backend}/test';
    private string $backend;
    /** @var array<mixed>|null $body */
    private array|null $body = null;

    public function backend(): string
    {
        return $this->backend;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'backend' => $this->backend,
            'body' => $this->body,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['backend' => 'backend'];
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'body' => mixed::class,
        ];
    }
}
