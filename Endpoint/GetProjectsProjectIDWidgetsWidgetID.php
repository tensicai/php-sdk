<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class GetProjectsProjectIDWidgetsWidgetID implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'GET';
    private string $uri = '/projects/{projectID}/widgets/{widgetID}';
    private int $projectID;
    private int $widgetID;

    public function projectID(): int
    {
        return $this->projectID;
    }

    public function widgetID(): int
    {
        return $this->widgetID;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'projectID' => $this->projectID,
            'widgetID' => $this->widgetID,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'projectID' => 'projectID',
            'widgetID' => 'widgetID',
        ];
    }
}
