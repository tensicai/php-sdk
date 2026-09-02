<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TensicAI\SDK\Model\BodyPutProjectsProjectIDCustomToolsToolNameEnabled;
use TensicAI\SDK\Model\GetProjectsQuery;
use TensicAI\SDK\Model\ProjectCloneRequest;
use TensicAI\SDK\Model\ProjectModelCreate;
use TensicAI\SDK\Model\ProjectModelUpdate;
use TensicAI\SDK\Model\ProjectToolUpdate;
use TensicAI\SDK\Model\RouterGenerateRequest;
use TensicAI\SDK\Model\RouterNodeGenerateRequest;
use TensicAI\SDK\Model\SystemPromptGenerateRequest;
use TensicAI\SDK\Model\UsernameRequest;

use function func_get_args;

final class ApiProjectsClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<ProjectsClientInterface> */
    public function mockInterface(): string
    {
        return ProjectsClientInterface::class;
    }

    /** @see ProjectsClient::deleteProjectsProjectID() */
    public function deleteProjectsProjectID(
        int $projectID,
    ): self {
        ($this->persister)('deleteProjectsProjectID', ...func_get_args());

        return $this;
    }

    /** @see ProjectsClient::deleteProjectsProjectIDCustomToolsToolName() */
    public function deleteProjectsProjectIDCustomToolsToolName(
        int $projectID,
        string $toolName,
    ): self {
        ($this->persister)('deleteProjectsProjectIDCustomToolsToolName', ...func_get_args());

        return $this;
    }

    /** @see ProjectsClient::getProjects() */
    public function getProjects(
        GetProjectsQuery|null $query = null,
    ): self {
        ($this->persister)('getProjects', ...func_get_args());

        return $this;
    }

    /** @see ProjectsClient::getProjectsHealth() */
    public function getProjectsHealth(): self
    {
        ($this->persister)('getProjectsHealth', ...func_get_args());

        return $this;
    }

    /** @see ProjectsClient::getProjectsProjectID() */
    public function getProjectsProjectID(
        int $projectID,
    ): self {
        ($this->persister)('getProjectsProjectID', ...func_get_args());

        return $this;
    }

    /** @see ProjectsClient::getProjectsProjectIDCustomTools() */
    public function getProjectsProjectIDCustomTools(
        int $projectID,
    ): self {
        ($this->persister)('getProjectsProjectIDCustomTools', ...func_get_args());

        return $this;
    }

    /** @see ProjectsClient::getProjectsProjectIDPrompts() */
    public function getProjectsProjectIDPrompts(
        int $projectID,
    ): self {
        ($this->persister)('getProjectsProjectIDPrompts', ...func_get_args());

        return $this;
    }

    /** @see ProjectsClient::getProjectsProjectIDPromptsVersionID() */
    public function getProjectsProjectIDPromptsVersionID(
        int $projectID,
        int $versionID,
    ): self {
        ($this->persister)('getProjectsProjectIDPromptsVersionID', ...func_get_args());

        return $this;
    }

    /** @see ProjectsClient::getProjectsProjectIDTools() */
    public function getProjectsProjectIDTools(
        int $projectID,
    ): self {
        ($this->persister)('getProjectsProjectIDTools', ...func_get_args());

        return $this;
    }

    /** @see ProjectsClient::patchProjectsProjectID() */
    public function patchProjectsProjectID(
        int $projectID,
        ProjectModelUpdate $body,
    ): self {
        ($this->persister)('patchProjectsProjectID', ...func_get_args());

        return $this;
    }

    /** @see ProjectsClient::patchProjectsProjectIDCustomToolsToolName() */
    public function patchProjectsProjectIDCustomToolsToolName(
        int $projectID,
        string $toolName,
        ProjectToolUpdate $body,
    ): self {
        ($this->persister)('patchProjectsProjectIDCustomToolsToolName', ...func_get_args());

        return $this;
    }

    /** @see ProjectsClient::postInvitationsProjectsInvitationIdAccept() */
    public function postInvitationsProjectsInvitationIdAccept(
        int $invitationId,
    ): self {
        ($this->persister)('postInvitationsProjectsInvitationIdAccept', ...func_get_args());

        return $this;
    }

    /** @see ProjectsClient::postInvitationsProjectsInvitationIdDecline() */
    public function postInvitationsProjectsInvitationIdDecline(
        int $invitationId,
    ): self {
        ($this->persister)('postInvitationsProjectsInvitationIdDecline', ...func_get_args());

        return $this;
    }

    /** @see ProjectsClient::postProjects() */
    public function postProjects(
        ProjectModelCreate $body,
    ): self {
        ($this->persister)('postProjects', ...func_get_args());

        return $this;
    }

    /** @see ProjectsClient::postProjectsProjectIDClone() */
    public function postProjectsProjectIDClone(
        int $projectID,
        ProjectCloneRequest $body,
    ): self {
        ($this->persister)('postProjectsProjectIDClone', ...func_get_args());

        return $this;
    }

    /** @see ProjectsClient::postProjectsProjectIDInvitations() */
    public function postProjectsProjectIDInvitations(
        int $projectID,
        UsernameRequest $body,
    ): self {
        ($this->persister)('postProjectsProjectIDInvitations', ...func_get_args());

        return $this;
    }

    /** @see ProjectsClient::postProjectsProjectIDPromptsVersionIDActivate() */
    public function postProjectsProjectIDPromptsVersionIDActivate(
        int $projectID,
        int $versionID,
    ): self {
        ($this->persister)('postProjectsProjectIDPromptsVersionIDActivate', ...func_get_args());

        return $this;
    }

    /** @see ProjectsClient::postProjectsProjectIDRouterGenerate() */
    public function postProjectsProjectIDRouterGenerate(
        int $projectID,
        RouterGenerateRequest $body,
    ): self {
        ($this->persister)('postProjectsProjectIDRouterGenerate', ...func_get_args());

        return $this;
    }

    /** @see ProjectsClient::postProjectsProjectIDRouterNodeGenerate() */
    public function postProjectsProjectIDRouterNodeGenerate(
        int $projectID,
        RouterNodeGenerateRequest $body,
    ): self {
        ($this->persister)('postProjectsProjectIDRouterNodeGenerate', ...func_get_args());

        return $this;
    }

    /** @see ProjectsClient::postProjectsProjectIDSystemPromptGenerate() */
    public function postProjectsProjectIDSystemPromptGenerate(
        int $projectID,
        SystemPromptGenerateRequest $body,
    ): self {
        ($this->persister)('postProjectsProjectIDSystemPromptGenerate', ...func_get_args());

        return $this;
    }

    /** @see ProjectsClient::putProjectsProjectIDCustomToolsToolNameEnabled() */
    public function putProjectsProjectIDCustomToolsToolNameEnabled(
        int $projectID,
        string $toolName,
        BodyPutProjectsProjectIDCustomToolsToolNameEnabled $body,
    ): self {
        ($this->persister)('putProjectsProjectIDCustomToolsToolNameEnabled', ...func_get_args());

        return $this;
    }
}
