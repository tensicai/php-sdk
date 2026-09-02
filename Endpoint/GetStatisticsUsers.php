<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Model\GetStatisticsUsersQuery;

class GetStatisticsUsers implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'GET';
    private string $uri = '/statistics/users';
    private GetStatisticsUsersQuery|null $query = null;

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'query' => $this->query,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [];
    }
}
