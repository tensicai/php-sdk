<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsConversationsQuery;

class GetProjectsProjectIDAnalyticsConversations implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'GET';
    private string $uri = '/projects/{projectID}/analytics/conversations';
    private int $projectID;
    private GetProjectsProjectIDAnalyticsConversationsQuery|null $query = null;

    public function projectID(): int
    {
        return $this->projectID;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'projectID' => $this->projectID,
            'query' => $this->query,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return ['projectID' => 'projectID'];
    }
}
