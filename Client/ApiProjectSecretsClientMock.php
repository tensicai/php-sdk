<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TeamBlue\TensicAI\SDK\Model\ProjectSecretCreate;
use TeamBlue\TensicAI\SDK\Model\ProjectSecretUpdate;

use function func_get_args;

final class ApiProjectSecretsClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<ProjectSecretsClientInterface> */
    public function mockInterface(): string
    {
        return ProjectSecretsClientInterface::class;
    }

    /** @see ProjectSecretsClient::deleteProjectsProjectIDSecretsSecretID() */
    public function deleteProjectsProjectIDSecretsSecretID(
        int $projectID,
        int $secretID,
    ): self {
        ($this->persister)('deleteProjectsProjectIDSecretsSecretID', ...func_get_args());

        return $this;
    }

    /** @see ProjectSecretsClient::getProjectsProjectIDSecrets() */
    public function getProjectsProjectIDSecrets(
        int $projectID,
    ): self {
        ($this->persister)('getProjectsProjectIDSecrets', ...func_get_args());

        return $this;
    }

    /** @see ProjectSecretsClient::patchProjectsProjectIDSecretsSecretID() */
    public function patchProjectsProjectIDSecretsSecretID(
        int $projectID,
        int $secretID,
        ProjectSecretUpdate $body,
    ): self {
        ($this->persister)('patchProjectsProjectIDSecretsSecretID', ...func_get_args());

        return $this;
    }

    /** @see ProjectSecretsClient::postProjectsProjectIDSecrets() */
    public function postProjectsProjectIDSecrets(
        int $projectID,
        ProjectSecretCreate $body,
    ): self {
        ($this->persister)('postProjectsProjectIDSecrets', ...func_get_args());

        return $this;
    }
}
