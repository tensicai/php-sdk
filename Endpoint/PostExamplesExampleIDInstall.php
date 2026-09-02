<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Model\ExampleInstallRequest;

class PostExamplesExampleIDInstall implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'POST';
    private string $uri = '/examples/{exampleID}/install';
    private string $exampleID;
    private ExampleInstallRequest $body;

    public function exampleID(): string
    {
        return $this->exampleID;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'exampleID' => $this->exampleID,
            'body' => $this->body,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['exampleID' => 'exampleID'];
    }
}
