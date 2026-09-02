<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Model\GetStatisticsUsersUserIDQuery;

class GetStatisticsUsersUserID implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'GET';
    private string $uri = '/statistics/users/{userID}';
    private int $userID;
    private GetStatisticsUsersUserIDQuery|null $query = null;

    public function userID(): int
    {
        return $this->userID;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'userID' => $this->userID,
            'query' => $this->query,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['userID' => 'userID'];
    }
}
