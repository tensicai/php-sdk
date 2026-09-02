<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\TensicAI\SDK\Model\AdminRoutineToggleRequest;
use TeamBlue\TensicAI\SDK\Model\ChatResponse;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDRoutinesRoutineIDHistoryQuery;
use TeamBlue\TensicAI\SDK\Model\RoutineCreate;
use TeamBlue\TensicAI\SDK\Model\RoutineEntry;
use TeamBlue\TensicAI\SDK\Model\RoutineHistoryResponse;
use TeamBlue\TensicAI\SDK\Model\RoutinesResponse;
use TeamBlue\TensicAI\SDK\Model\RoutineUpdate;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface RoutinesClientInterface
{
    public const string TAG = 'Routines';

    /**
     * Delete Routine
     *
     * Delete a routine.
     */
    public function deleteProjectsProjectIDRoutinesRoutineID(
        int $projectID,
        int $routineID,
    ): mixed;

    /**
     * List All Routines
     *
     * Cross-project routine inventory for the admin Routines page.
     */
    public function getAdminRoutines(): mixed;

    /**
     * List Routines
     *
     * List all routines for a project.
     */
    public function getProjectsProjectIDRoutines(
        int $projectID,
    ): RoutinesResponse;

    /**
     * Get Routine History
     *
     * Recent execution history for a routine, newest first.
     */
    public function getProjectsProjectIDRoutinesRoutineIDHistory(
        int $projectID,
        int $routineID,
        GetProjectsProjectIDRoutinesRoutineIDHistoryQuery|null $query = null,
    ): RoutineHistoryResponse;

    /**
     * Admin Toggle Routine
     *
     * Admin-only routine toggle, bypasses project membership.
     */
    public function patchAdminRoutinesRoutineID(
        int $routineID,
        AdminRoutineToggleRequest $body,
    ): mixed;

    /**
     * Update Routine
     *
     * Update a routine.
     */
    public function patchProjectsProjectIDRoutinesRoutineID(
        int $projectID,
        int $routineID,
        RoutineUpdate $body,
    ): RoutineEntry;

    /**
     * Create Routine
     *
     * Create a new routine for a project.
     */
    public function postProjectsProjectIDRoutines(
        int $projectID,
        RoutineCreate $body,
    ): RoutineEntry;

    /**
     * Fire Routine
     *
     * Manually trigger a routine. Runs the message through the project and returns the result.
     */
    public function postProjectsProjectIDRoutinesRoutineIDFire(
        int $projectID,
        int $routineID,
    ): ChatResponse;
}
