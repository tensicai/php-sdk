<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDGuardsDailyQuery;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDGuardsEventsQuery;
use TeamBlue\TensicAI\SDK\Model\GuardDailyResponse;
use TeamBlue\TensicAI\SDK\Model\GuardEventsResponse;
use TeamBlue\TensicAI\SDK\Model\GuardSummaryResponse;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface GuardsClientInterface
{
    public const string TAG = 'Guards';

    /**
     * Get Guard Daily
     *
     * Get daily guard event counts for charting.
     */
    public function getProjectsProjectIDGuardsDaily(
        int $projectID,
        GetProjectsProjectIDGuardsDailyQuery|null $query = null,
    ): GuardDailyResponse;

    /**
     * Get Guard Events
     *
     * Get paginated guard events for a project.
     */
    public function getProjectsProjectIDGuardsEvents(
        int $projectID,
        GetProjectsProjectIDGuardsEventsQuery|null $query = null,
    ): GuardEventsResponse;

    /**
     * Get Guard Summary
     *
     * Get guard event summary statistics for a project.
     */
    public function getProjectsProjectIDGuardsSummary(
        int $projectID,
    ): GuardSummaryResponse;
}
