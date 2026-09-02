<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TensicAI\SDK\Endpoint\GetProjectsProjectIDGuardsDaily;
use TensicAI\SDK\Endpoint\GetProjectsProjectIDGuardsEvents;
use TensicAI\SDK\Endpoint\GetProjectsProjectIDGuardsSummary;
use TensicAI\SDK\Model\GetProjectsProjectIDGuardsDailyQuery;
use TensicAI\SDK\Model\GetProjectsProjectIDGuardsEventsQuery;
use TensicAI\SDK\Model\GuardDailyResponse;
use TensicAI\SDK\Model\GuardEventsResponse;
use TensicAI\SDK\Model\GuardSummaryResponse;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class GuardsClient extends AbstractClient implements GuardsClientInterface
{
    /**
     * Get Guard Daily
     *
     * Get daily guard event counts for charting.
     */
    #[EndpointAttribute(GetProjectsProjectIDGuardsDaily::class)]
    public function getProjectsProjectIDGuardsDaily(
        int $projectID,
        GetProjectsProjectIDGuardsDailyQuery|null $query = null,
    ): GuardDailyResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetProjectsProjectIDGuardsDaily::fromRecordData(
                [
                    'projectID' => $projectID,
                    'query' => $query,
                ],
            ),
        );

        return GuardDailyResponse::fromArray($response);
    }

    /**
     * Get Guard Events
     *
     * Get paginated guard events for a project.
     */
    #[EndpointAttribute(GetProjectsProjectIDGuardsEvents::class)]
    public function getProjectsProjectIDGuardsEvents(
        int $projectID,
        GetProjectsProjectIDGuardsEventsQuery|null $query = null,
    ): GuardEventsResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetProjectsProjectIDGuardsEvents::fromRecordData(
                [
                    'projectID' => $projectID,
                    'query' => $query,
                ],
            ),
        );

        return GuardEventsResponse::fromArray($response);
    }

    /**
     * Get Guard Summary
     *
     * Get guard event summary statistics for a project.
     */
    #[EndpointAttribute(GetProjectsProjectIDGuardsSummary::class)]
    public function getProjectsProjectIDGuardsSummary(
        int $projectID,
    ): GuardSummaryResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetProjectsProjectIDGuardsSummary::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return GuardSummaryResponse::fromArray($response);
    }
}
