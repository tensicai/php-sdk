<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TensicAI\SDK\Model\BodyPutProjectsProjectIDCustomToolsToolNameEnabled;
use TensicAI\SDK\Model\GetProjectsQuery;
use TensicAI\SDK\Model\ProjectCloneRequest;
use TensicAI\SDK\Model\ProjectCustomToolEntry;
use TensicAI\SDK\Model\ProjectCustomToolsResponse;
use TensicAI\SDK\Model\ProjectCustomToolToggleResponse;
use TensicAI\SDK\Model\ProjectModelCreate;
use TensicAI\SDK\Model\ProjectModelUpdate;
use TensicAI\SDK\Model\ProjectsResponse;
use TensicAI\SDK\Model\ProjectToolUpdate;
use TensicAI\SDK\Model\PromptActivateResponse;
use TensicAI\SDK\Model\PromptVersionResponse;
use TensicAI\SDK\Model\RouterGenerateRequest;
use TensicAI\SDK\Model\RouterGenerateResponse;
use TensicAI\SDK\Model\RouterNodeGenerateRequest;
use TensicAI\SDK\Model\RouterNodeGenerateResponse;
use TensicAI\SDK\Model\SystemPromptGenerateRequest;
use TensicAI\SDK\Model\SystemPromptGenerateResponse;
use TensicAI\SDK\Model\UsernameRequest;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface ProjectsClientInterface
{
    public const string TAG = 'Projects';

    /**
     * Route Delete Project
     *
     * Delete a project and all associated data.
     */
    public function deleteProjectsProjectID(
        int $projectID,
    ): mixed;

    /**
     * Delete Project Custom Tool
     *
     * Delete an agent-created tool from a project.
     */
    public function deleteProjectsProjectIDCustomToolsToolName(
        int $projectID,
        string $toolName,
    ): mixed;

    /**
     * Route Get Projects
     *
     * List projects accessible to the current user.
     */
    public function getProjects(
        GetProjectsQuery|null $query = null,
    ): ProjectsResponse;

    /**
     * Get Projects Health
     *
     * Get health scores for all accessible projects.
     */
    public function getProjectsHealth(): mixed;

    /**
     * Route Get Project
     *
     * Get detailed information about a specific project.
     */
    public function getProjectsProjectID(
        int $projectID,
    ): mixed;

    /**
     * List Project Custom Tools
     *
     * List agent-created tools for a project.
     */
    public function getProjectsProjectIDCustomTools(
        int $projectID,
    ): ProjectCustomToolsResponse;

    /**
     * List Prompt Versions
     *
     * List all prompt versions for a project.
     *
     * @return array<PromptVersionResponse>
     */
    public function getProjectsProjectIDPrompts(
        int $projectID,
    ): array;

    /**
     * Get Prompt Version
     *
     * Get a specific prompt version.
     */
    public function getProjectsProjectIDPromptsVersionID(
        int $projectID,
        int $versionID,
    ): PromptVersionResponse;

    /**
     * Get Project Tools
     *
     * List available MCP tools for an agent project.
     */
    public function getProjectsProjectIDTools(
        int $projectID,
    ): mixed;

    /**
     * Route Edit Project
     *
     * Update project configuration.
     */
    public function patchProjectsProjectID(
        int $projectID,
        ProjectModelUpdate $body,
    ): mixed;

    /**
     * Update Project Custom Tool
     *
     * Update an agent-created tool&#39;s description, parameters, or code.
     */
    public function patchProjectsProjectIDCustomToolsToolName(
        int $projectID,
        string $toolName,
        ProjectToolUpdate $body,
    ): ProjectCustomToolEntry;

    /**
     * Accept Project Invitation
     *
     * Accept a project invitation.
     */
    public function postInvitationsProjectsInvitationIdAccept(
        int $invitationId,
    ): mixed;

    /**
     * Decline Project Invitation
     *
     * Decline a project invitation.
     */
    public function postInvitationsProjectsInvitationIdDecline(
        int $invitationId,
    ): mixed;

    /**
     * Route Create Project
     *
     * Create a new AI project.
     */
    public function postProjects(
        ProjectModelCreate $body,
    ): mixed;

    /**
     * Clone Project
     *
     * Clone a project with all its settings, eval datasets, and prompt versions.
     */
    public function postProjectsProjectIDClone(
        int $projectID,
        ProjectCloneRequest $body,
    ): mixed;

    /**
     * Send Project Invitation
     *
     * Invite a user to join a project. Only the project creator or an admin can invite.
     */
    public function postProjectsProjectIDInvitations(
        int $projectID,
        UsernameRequest $body,
    ): mixed;

    /**
     * Activate Prompt Version
     *
     * Restore a previous prompt version as the active system prompt.
     */
    public function postProjectsProjectIDPromptsVersionIDActivate(
        int $projectID,
        int $versionID,
    ): PromptActivateResponse;

    /**
     * Router Generate Workspace
     *
     * Use the system LLM to generate a router FLOW GRAPH from a plain-English description.  A router is a graph of nodes that may each carry Blockly, so this returns &#x60;&#x60;{\&quot;flow\&quot;: ...}&#x60;&#x60; — the shape the canvas loads and &#x60;&#x60;options.router_flow&#x60;&#x60; stores. The generator validates before returning, so a 400 here means the model could not produce a runnable graph even after a repair attempt; it never hands the browser a flow that would be refused on save.
     */
    public function postProjectsProjectIDRouterGenerate(
        int $projectID,
        RouterGenerateRequest $body,
    ): RouterGenerateResponse;

    /**
     * Router Generate Node Blocks
     *
     * Generate the blocks inside ONE node of a router flow.  A separate endpoint from &#x60;/router/generate&#x60; because it returns a different artefact — a Blockly workspace, not a graph — and folding it in would make the flow response&#39;s &#x60;flow&#x60; optional, weakening a contract the editor relies on.  Deliberately takes no node id: the node being edited is usually unsaved. Everything the generator needs travels in the body, so this never has to agree with what is stored.
     */
    public function postProjectsProjectIDRouterNodeGenerate(
        int $projectID,
        RouterNodeGenerateRequest $body,
    ): RouterNodeGenerateResponse;

    /**
     * Generate System Prompt Endpoint
     *
     * Use the system LLM to draft a system prompt from a short description.
     */
    public function postProjectsProjectIDSystemPromptGenerate(
        int $projectID,
        SystemPromptGenerateRequest $body,
    ): SystemPromptGenerateResponse;

    /**
     * Set Project Custom Tool Enabled
     *
     * Set an agent-created tool&#39;s enabled state (idempotent — sends the target boolean rather than a server-side flip).
     */
    public function putProjectsProjectIDCustomToolsToolNameEnabled(
        int $projectID,
        string $toolName,
        BodyPutProjectsProjectIDCustomToolsToolNameEnabled $body,
    ): ProjectCustomToolToggleResponse;
}
