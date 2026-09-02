<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteProjectsProjectIDRoutinesRoutineID;
use TeamBlue\TensicAI\SDK\Endpoint\GetAdminRoutines;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsProjectIDRoutines;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsProjectIDRoutinesRoutineIDHistory;
use TeamBlue\TensicAI\SDK\Endpoint\PatchAdminRoutinesRoutineID;
use TeamBlue\TensicAI\SDK\Endpoint\PatchProjectsProjectIDRoutinesRoutineID;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDRoutines;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDRoutinesRoutineIDFire;
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
 */
class RoutinesClient extends AbstractClient implements RoutinesClientInterface
{
    /**
     * Delete Routine
     *
     * Delete a routine.
     */
    #[EndpointAttribute(DeleteProjectsProjectIDRoutinesRoutineID::class)]
    public function deleteProjectsProjectIDRoutinesRoutineID(
        int $projectID,
        int $routineID,
    ): mixed {
        return $this->performRequest(
            DeleteProjectsProjectIDRoutinesRoutineID::fromRecordData(
                [
                    'projectID' => $projectID,
                    'routineID' => $routineID,
                ],
            ),
        );
    }

    /**
     * List All Routines
     *
     * Cross-project routine inventory for the admin Routines page.
     */
    #[EndpointAttribute(GetAdminRoutines::class)]
    public function getAdminRoutines(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetAdminRoutines::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * List Routines
     *
     * List all routines for a project.
     */
    #[EndpointAttribute(GetProjectsProjectIDRoutines::class)]
    public function getProjectsProjectIDRoutines(
        int $projectID,
    ): RoutinesResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetProjectsProjectIDRoutines::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return RoutinesResponse::fromArray($response);
    }

    /**
     * Get Routine History
     *
     * Recent execution history for a routine, newest first.
     */
    #[EndpointAttribute(GetProjectsProjectIDRoutinesRoutineIDHistory::class)]
    public function getProjectsProjectIDRoutinesRoutineIDHistory(
        int $projectID,
        int $routineID,
        GetProjectsProjectIDRoutinesRoutineIDHistoryQuery|null $query = null,
    ): RoutineHistoryResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetProjectsProjectIDRoutinesRoutineIDHistory::fromRecordData(
                [
                    'projectID' => $projectID,
                    'routineID' => $routineID,
                    'query' => $query,
                ],
            ),
        );

        return RoutineHistoryResponse::fromArray($response);
    }

    /**
     * Admin Toggle Routine
     *
     * Admin-only routine toggle, bypasses project membership.
     */
    #[EndpointAttribute(PatchAdminRoutinesRoutineID::class)]
    public function patchAdminRoutinesRoutineID(
        int $routineID,
        AdminRoutineToggleRequest $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PatchAdminRoutinesRoutineID::fromRecordData(
                [
                    'routineID' => $routineID,
                    'body' => $body,
                ],
            ),
        );

        return $response;
    }

    /**
     * Update Routine
     *
     * Update a routine.
     */
    #[EndpointAttribute(PatchProjectsProjectIDRoutinesRoutineID::class)]
    public function patchProjectsProjectIDRoutinesRoutineID(
        int $projectID,
        int $routineID,
        RoutineUpdate $body,
    ): RoutineEntry {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PatchProjectsProjectIDRoutinesRoutineID::fromRecordData(
                [
                    'projectID' => $projectID,
                    'routineID' => $routineID,
                    'body' => $body,
                ],
            ),
        );

        return RoutineEntry::fromArray($response);
    }

    /**
     * Create Routine
     *
     * Create a new routine for a project.
     */
    #[EndpointAttribute(PostProjectsProjectIDRoutines::class)]
    public function postProjectsProjectIDRoutines(
        int $projectID,
        RoutineCreate $body,
    ): RoutineEntry {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDRoutines::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return RoutineEntry::fromArray($response);
    }

    /**
     * Fire Routine
     *
     * Manually trigger a routine. Runs the message through the project and returns the result.
     */
    #[EndpointAttribute(PostProjectsProjectIDRoutinesRoutineIDFire::class)]
    public function postProjectsProjectIDRoutinesRoutineIDFire(
        int $projectID,
        int $routineID,
    ): ChatResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDRoutinesRoutineIDFire::fromRecordData(
                [
                    'projectID' => $projectID,
                    'routineID' => $routineID,
                ],
            ),
        );

        return ChatResponse::fromArray($response);
    }
}
