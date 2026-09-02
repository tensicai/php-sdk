<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class DeleteClassifiersClassifierId implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'DELETE';
    private string $uri = '/classifiers/{classifier_id}';
    private int $classifierId;

    public function classifierId(): int
    {
        return $this->classifierId;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'classifier_id' => $this->classifierId,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['classifier_id' => 'classifierId'];
    }
}
