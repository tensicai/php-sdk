<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TeamBlue\TensicAI\SDK\Model\AdminRoutineToggleRequest;
use TeamBlue\TensicAI\SDK\Model\DockerTestRequest;
use TeamBlue\TensicAI\SDK\Model\DoclingTestRequest;
use TeamBlue\TensicAI\SDK\Model\E2BTestRequest;
use TeamBlue\TensicAI\SDK\Model\GetAuditQuery;
use TeamBlue\TensicAI\SDK\Model\GetCronLogsQuery;
use TeamBlue\TensicAI\SDK\Model\KubernetesTestRequest;
use TeamBlue\TensicAI\SDK\Model\OtelTestRequest;
use TeamBlue\TensicAI\SDK\Model\SettingsUpdate;

use function func_get_args;

final class ApiSettingsClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<SettingsClientInterface> */
    public function mockInterface(): string
    {
        return SettingsClientInterface::class;
    }

    /** @see SettingsClient::deleteCronLogs() */
    public function deleteCronLogs(): self
    {
        ($this->persister)('deleteCronLogs', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::deleteCronLogs() */
    public function deleteCronLogs(): self
    {
        ($this->persister)('deleteCronLogs', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::getAdminRoutines() */
    public function getAdminRoutines(): self
    {
        ($this->persister)('getAdminRoutines', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::getAudit() */
    public function getAudit(
        GetAuditQuery|null $query = null,
    ): self {
        ($this->persister)('getAudit', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::getAudit() */
    public function getAudit(
        GetAuditQuery|null $query = null,
    ): self {
        ($this->persister)('getAudit', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::getCronLogs() */
    public function getCronLogs(
        GetCronLogsQuery|null $query = null,
    ): self {
        ($this->persister)('getCronLogs', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::getCronLogs() */
    public function getCronLogs(
        GetCronLogsQuery|null $query = null,
    ): self {
        ($this->persister)('getCronLogs', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::getSettings() */
    public function getSettings(): self
    {
        ($this->persister)('getSettings', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::getSettingsInfrastructure() */
    public function getSettingsInfrastructure(): self
    {
        ($this->persister)('getSettingsInfrastructure', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::patchAdminRoutinesRoutineID() */
    public function patchAdminRoutinesRoutineID(
        int $routineID,
        AdminRoutineToggleRequest $body,
    ): self {
        ($this->persister)('patchAdminRoutinesRoutineID', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::patchSettings() */
    public function patchSettings(
        SettingsUpdate $body,
    ): self {
        ($this->persister)('patchSettings', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::postCronLogsRun() */
    public function postCronLogsRun(): self
    {
        ($this->persister)('postCronLogsRun', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::postCronLogsRun() */
    public function postCronLogsRun(): self
    {
        ($this->persister)('postCronLogsRun', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::postSettingsDockerTest() */
    public function postSettingsDockerTest(
        DockerTestRequest|null $body = null,
    ): self {
        ($this->persister)('postSettingsDockerTest', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::postSettingsDockerTest() */
    public function postSettingsDockerTest(
        DockerTestRequest|null $body = null,
    ): self {
        ($this->persister)('postSettingsDockerTest', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::postSettingsDoclingTest() */
    public function postSettingsDoclingTest(
        DoclingTestRequest|null $body = null,
    ): self {
        ($this->persister)('postSettingsDoclingTest', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::postSettingsDoclingTest() */
    public function postSettingsDoclingTest(
        DoclingTestRequest|null $body = null,
    ): self {
        ($this->persister)('postSettingsDoclingTest', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::postSettingsE2bTest() */
    public function postSettingsE2bTest(
        E2BTestRequest|null $body = null,
    ): self {
        ($this->persister)('postSettingsE2bTest', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::postSettingsE2bTest() */
    public function postSettingsE2bTest(
        E2BTestRequest|null $body = null,
    ): self {
        ($this->persister)('postSettingsE2bTest', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::postSettingsHealth() */
    public function postSettingsHealth(): self
    {
        ($this->persister)('postSettingsHealth', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::postSettingsHealth() */
    public function postSettingsHealth(): self
    {
        ($this->persister)('postSettingsHealth', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::postSettingsKubernetesTest() */
    public function postSettingsKubernetesTest(
        KubernetesTestRequest|null $body = null,
    ): self {
        ($this->persister)('postSettingsKubernetesTest', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::postSettingsKubernetesTest() */
    public function postSettingsKubernetesTest(
        KubernetesTestRequest|null $body = null,
    ): self {
        ($this->persister)('postSettingsKubernetesTest', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::postSettingsOtelTest() */
    public function postSettingsOtelTest(
        OtelTestRequest|null $body = null,
    ): self {
        ($this->persister)('postSettingsOtelTest', ...func_get_args());

        return $this;
    }

    /** @see SettingsClient::postSettingsOtelTest() */
    public function postSettingsOtelTest(
        OtelTestRequest|null $body = null,
    ): self {
        ($this->persister)('postSettingsOtelTest', ...func_get_args());

        return $this;
    }

    /**
     * @see SettingsClient::postSettingsRedisTest()
     *
     * @param array<mixed>|null $body
     */
    public function postSettingsRedisTest(
        array|null $body = null,
    ): self {
        ($this->persister)('postSettingsRedisTest', ...func_get_args());

        return $this;
    }

    /**
     * @see SettingsClient::postSettingsRedisTest()
     *
     * @param array<mixed>|null $body
     */
    public function postSettingsRedisTest(
        array|null $body = null,
    ): self {
        ($this->persister)('postSettingsRedisTest', ...func_get_args());

        return $this;
    }

    /**
     * @see SettingsClient::postSettingsS3Test()
     *
     * @param array<mixed>|null $body
     */
    public function postSettingsS3Test(
        array|null $body = null,
    ): self {
        ($this->persister)('postSettingsS3Test', ...func_get_args());

        return $this;
    }

    /**
     * @see SettingsClient::postSettingsS3Test()
     *
     * @param array<mixed>|null $body
     */
    public function postSettingsS3Test(
        array|null $body = null,
    ): self {
        ($this->persister)('postSettingsS3Test', ...func_get_args());

        return $this;
    }

    /**
     * @see SettingsClient::postSettingsVectordbBackendTest()
     *
     * @param array<mixed>|null $body
     */
    public function postSettingsVectordbBackendTest(
        string $backend,
        array|null $body = null,
    ): self {
        ($this->persister)('postSettingsVectordbBackendTest', ...func_get_args());

        return $this;
    }

    /**
     * @see SettingsClient::postSettingsVectordbBackendTest()
     *
     * @param array<mixed>|null $body
     */
    public function postSettingsVectordbBackendTest(
        string $backend,
        array|null $body = null,
    ): self {
        ($this->persister)('postSettingsVectordbBackendTest', ...func_get_args());

        return $this;
    }
}
