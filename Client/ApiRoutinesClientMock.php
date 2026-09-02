<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TeamBlue\TensicAI\SDK\Model\AdminRoutineToggleRequest;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDRoutinesRoutineIDHistoryQuery;
use TeamBlue\TensicAI\SDK\Model\RoutineCreate;
use TeamBlue\TensicAI\SDK\Model\RoutineUpdate;

use function func_get_args;

final class ApiRoutinesClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<RoutinesClientInterface> */
    public function mockInterface(): string
    {
        return RoutinesClientInterface::class;
    }

    /** @see RoutinesClient::deleteProjectsProjectIDRoutinesRoutineID() */
    public function deleteProjectsProjectIDRoutinesRoutineID(
        int $projectID,
        int $routineID,
    ): self {
        ($this->persister)('deleteProjectsProjectIDRoutinesRoutineID', ...func_get_args());

        return $this;
    }

    /** @see RoutinesClient::getAdminRoutines() */
    public function getAdminRoutines(): self
    {
        ($this->persister)('getAdminRoutines', ...func_get_args());

        return $this;
    }

    /** @see RoutinesClient::getProjectsProjectIDRoutines() */
    public function getProjectsProjectIDRoutines(
        int $projectID,
    ): self {
        ($this->persister)('getProjectsProjectIDRoutines', ...func_get_args());

        return $this;
    }

    /** @see RoutinesClient::getProjectsProjectIDRoutinesRoutineIDHistory() */
    public function getProjectsProjectIDRoutinesRoutineIDHistory(
        int $projectID,
        int $routineID,
        GetProjectsProjectIDRoutinesRoutineIDHistoryQuery|null $query = null,
    ): self {
        ($this->persister)('getProjectsProjectIDRoutinesRoutineIDHistory', ...func_get_args());

        return $this;
    }

    /** @see RoutinesClient::patchAdminRoutinesRoutineID() */
    public function patchAdminRoutinesRoutineID(
        int $routineID,
        AdminRoutineToggleRequest $body,
    ): self {
        ($this->persister)('patchAdminRoutinesRoutineID', ...func_get_args());

        return $this;
    }

    /** @see RoutinesClient::patchProjectsProjectIDRoutinesRoutineID() */
    public function patchProjectsProjectIDRoutinesRoutineID(
        int $projectID,
        int $routineID,
        RoutineUpdate $body,
    ): self {
        ($this->persister)('patchProjectsProjectIDRoutinesRoutineID', ...func_get_args());

        return $this;
    }

    /** @see RoutinesClient::postProjectsProjectIDRoutines() */
    public function postProjectsProjectIDRoutines(
        int $projectID,
        RoutineCreate $body,
    ): self {
        ($this->persister)('postProjectsProjectIDRoutines', ...func_get_args());

        return $this;
    }

    /** @see RoutinesClient::postProjectsProjectIDRoutinesRoutineIDFire() */
    public function postProjectsProjectIDRoutinesRoutineIDFire(
        int $projectID,
        int $routineID,
    ): self {
        ($this->persister)('postProjectsProjectIDRoutinesRoutineIDFire', ...func_get_args());

        return $this;
    }
}
