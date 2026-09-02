<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Model\ClassifierRegistryUpdate;

class PatchClassifiersClassifierId implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'PATCH';
    private string $uri = '/classifiers/{classifier_id}';
    private int $classifierId;
    private ClassifierRegistryUpdate $body;

    public function classifierId(): int
    {
        return $this->classifierId;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'classifier_id' => $this->classifierId,
            'body' => $this->body,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['classifier_id' => 'classifierId'];
    }
}
