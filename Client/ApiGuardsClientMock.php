<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TensicAI\SDK\Model\GetProjectsProjectIDGuardsDailyQuery;
use TensicAI\SDK\Model\GetProjectsProjectIDGuardsEventsQuery;

use function func_get_args;

final class ApiGuardsClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<GuardsClientInterface> */
    public function mockInterface(): string
    {
        return GuardsClientInterface::class;
    }

    /** @see GuardsClient::getProjectsProjectIDGuardsDaily() */
    public function getProjectsProjectIDGuardsDaily(
        int $projectID,
        GetProjectsProjectIDGuardsDailyQuery|null $query = null,
    ): self {
        ($this->persister)('getProjectsProjectIDGuardsDaily', ...func_get_args());

        return $this;
    }

    /** @see GuardsClient::getProjectsProjectIDGuardsEvents() */
    public function getProjectsProjectIDGuardsEvents(
        int $projectID,
        GetProjectsProjectIDGuardsEventsQuery|null $query = null,
    ): self {
        ($this->persister)('getProjectsProjectIDGuardsEvents', ...func_get_args());

        return $this;
    }

    /** @see GuardsClient::getProjectsProjectIDGuardsSummary() */
    public function getProjectsProjectIDGuardsSummary(
        int $projectID,
    ): self {
        ($this->persister)('getProjectsProjectIDGuardsSummary', ...func_get_args());

        return $this;
    }
}
