<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteProjectsProjectID;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteProjectsProjectIDCustomToolsToolName;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjects;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsHealth;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsProjectID;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsProjectIDCustomTools;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsProjectIDPrompts;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsProjectIDPromptsVersionID;
use TeamBlue\TensicAI\SDK\Endpoint\GetProjectsProjectIDTools;
use TeamBlue\TensicAI\SDK\Endpoint\PatchProjectsProjectID;
use TeamBlue\TensicAI\SDK\Endpoint\PatchProjectsProjectIDCustomToolsToolName;
use TeamBlue\TensicAI\SDK\Endpoint\PostInvitationsProjectsInvitationIdAccept;
use TeamBlue\TensicAI\SDK\Endpoint\PostInvitationsProjectsInvitationIdDecline;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjects;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDClone;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDInvitations;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDPromptsVersionIDActivate;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDRouterGenerate;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDRouterNodeGenerate;
use TeamBlue\TensicAI\SDK\Endpoint\PostProjectsProjectIDSystemPromptGenerate;
use TeamBlue\TensicAI\SDK\Endpoint\PutProjectsProjectIDCustomToolsToolNameEnabled;
use TeamBlue\TensicAI\SDK\Model\BodyPutProjectsProjectIDCustomToolsToolNameEnabled;
use TeamBlue\TensicAI\SDK\Model\GetProjectsQuery;
use TeamBlue\TensicAI\SDK\Model\ProjectCloneRequest;
use TeamBlue\TensicAI\SDK\Model\ProjectCustomToolEntry;
use TeamBlue\TensicAI\SDK\Model\ProjectCustomToolsResponse;
use TeamBlue\TensicAI\SDK\Model\ProjectCustomToolToggleResponse;
use TeamBlue\TensicAI\SDK\Model\ProjectModelCreate;
use TeamBlue\TensicAI\SDK\Model\ProjectModelUpdate;
use TeamBlue\TensicAI\SDK\Model\ProjectsResponse;
use TeamBlue\TensicAI\SDK\Model\ProjectToolUpdate;
use TeamBlue\TensicAI\SDK\Model\PromptActivateResponse;
use TeamBlue\TensicAI\SDK\Model\PromptVersionResponse;
use TeamBlue\TensicAI\SDK\Model\RouterGenerateRequest;
use TeamBlue\TensicAI\SDK\Model\RouterGenerateResponse;
use TeamBlue\TensicAI\SDK\Model\RouterNodeGenerateRequest;
use TeamBlue\TensicAI\SDK\Model\RouterNodeGenerateResponse;
use TeamBlue\TensicAI\SDK\Model\SystemPromptGenerateRequest;
use TeamBlue\TensicAI\SDK\Model\SystemPromptGenerateResponse;
use TeamBlue\TensicAI\SDK\Model\UsernameRequest;

use function array_map;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class ProjectsClient extends AbstractClient implements ProjectsClientInterface
{
    /**
     * Route Delete Project
     *
     * Delete a project and all associated data.
     */
    #[EndpointAttribute(DeleteProjectsProjectID::class)]
    public function deleteProjectsProjectID(
        int $projectID,
    ): mixed {
        return $this->performRequest(
            DeleteProjectsProjectID::fromRecordData(
                ['projectID' => $projectID],
            ),
        );
    }

    /**
     * Delete Project Custom Tool
     *
     * Delete an agent-created tool from a project.
     */
    #[EndpointAttribute(DeleteProjectsProjectIDCustomToolsToolName::class)]
    public function deleteProjectsProjectIDCustomToolsToolName(
        int $projectID,
        string $toolName,
    ): mixed {
        return $this->performRequest(
            DeleteProjectsProjectIDCustomToolsToolName::fromRecordData(
                [
                    'projectID' => $projectID,
                    'toolName' => $toolName,
                ],
            ),
        );
    }

    /**
     * Route Get Projects
     *
     * List projects accessible to the current user.
     */
    #[EndpointAttribute(GetProjects::class)]
    public function getProjects(
        GetProjectsQuery|null $query = null,
    ): ProjectsResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetProjects::fromRecordData(
                ['query' => $query],
            ),
        );

        return ProjectsResponse::fromArray($response);
    }

    /**
     * Get Projects Health
     *
     * Get health scores for all accessible projects.
     */
    #[EndpointAttribute(GetProjectsHealth::class)]
    public function getProjectsHealth(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetProjectsHealth::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Route Get Project
     *
     * Get detailed information about a specific project.
     */
    #[EndpointAttribute(GetProjectsProjectID::class)]
    public function getProjectsProjectID(
        int $projectID,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetProjectsProjectID::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return $response;
    }

    /**
     * List Project Custom Tools
     *
     * List agent-created tools for a project.
     */
    #[EndpointAttribute(GetProjectsProjectIDCustomTools::class)]
    public function getProjectsProjectIDCustomTools(
        int $projectID,
    ): ProjectCustomToolsResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetProjectsProjectIDCustomTools::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return ProjectCustomToolsResponse::fromArray($response);
    }

    /**
     * List Prompt Versions
     *
     * List all prompt versions for a project.
     *
     * @return array<PromptVersionResponse>
     */
    #[EndpointAttribute(GetProjectsProjectIDPrompts::class)]
    public function getProjectsProjectIDPrompts(
        int $projectID,
    ): array {
        /** @var array<string, array<string, mixed>> $response */
        $response = $this->performRequest(
            GetProjectsProjectIDPrompts::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return array_map(
            PromptVersionResponse::fromArray(...),
            $response,
        );
    }

    /**
     * Get Prompt Version
     *
     * Get a specific prompt version.
     */
    #[EndpointAttribute(GetProjectsProjectIDPromptsVersionID::class)]
    public function getProjectsProjectIDPromptsVersionID(
        int $projectID,
        int $versionID,
    ): PromptVersionResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetProjectsProjectIDPromptsVersionID::fromRecordData(
                [
                    'projectID' => $projectID,
                    'versionID' => $versionID,
                ],
            ),
        );

        return PromptVersionResponse::fromArray($response);
    }

    /**
     * Get Project Tools
     *
     * List available MCP tools for an agent project.
     */
    #[EndpointAttribute(GetProjectsProjectIDTools::class)]
    public function getProjectsProjectIDTools(
        int $projectID,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetProjectsProjectIDTools::fromRecordData(
                ['projectID' => $projectID],
            ),
        );

        return $response;
    }

    /**
     * Route Edit Project
     *
     * Update project configuration.
     */
    #[EndpointAttribute(PatchProjectsProjectID::class)]
    public function patchProjectsProjectID(
        int $projectID,
        ProjectModelUpdate $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PatchProjectsProjectID::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return $response;
    }

    /**
     * Update Project Custom Tool
     *
     * Update an agent-created tool&#39;s description, parameters, or code.
     */
    #[EndpointAttribute(PatchProjectsProjectIDCustomToolsToolName::class)]
    public function patchProjectsProjectIDCustomToolsToolName(
        int $projectID,
        string $toolName,
        ProjectToolUpdate $body,
    ): ProjectCustomToolEntry {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PatchProjectsProjectIDCustomToolsToolName::fromRecordData(
                [
                    'projectID' => $projectID,
                    'toolName' => $toolName,
                    'body' => $body,
                ],
            ),
        );

        return ProjectCustomToolEntry::fromArray($response);
    }

    /**
     * Accept Project Invitation
     *
     * Accept a project invitation.
     */
    #[EndpointAttribute(PostInvitationsProjectsInvitationIdAccept::class)]
    public function postInvitationsProjectsInvitationIdAccept(
        int $invitationId,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostInvitationsProjectsInvitationIdAccept::fromRecordData(
                ['invitation_id' => $invitationId],
            ),
        );

        return $response;
    }

    /**
     * Decline Project Invitation
     *
     * Decline a project invitation.
     */
    #[EndpointAttribute(PostInvitationsProjectsInvitationIdDecline::class)]
    public function postInvitationsProjectsInvitationIdDecline(
        int $invitationId,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostInvitationsProjectsInvitationIdDecline::fromRecordData(
                ['invitation_id' => $invitationId],
            ),
        );

        return $response;
    }

    /**
     * Route Create Project
     *
     * Create a new AI project.
     */
    #[EndpointAttribute(PostProjects::class)]
    public function postProjects(
        ProjectModelCreate $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostProjects::fromRecordData(
                ['body' => $body],
            ),
        );

        return $response;
    }

    /**
     * Clone Project
     *
     * Clone a project with all its settings, eval datasets, and prompt versions.
     */
    #[EndpointAttribute(PostProjectsProjectIDClone::class)]
    public function postProjectsProjectIDClone(
        int $projectID,
        ProjectCloneRequest $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostProjectsProjectIDClone::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return $response;
    }

    /**
     * Send Project Invitation
     *
     * Invite a user to join a project. Only the project creator or an admin can invite.
     */
    #[EndpointAttribute(PostProjectsProjectIDInvitations::class)]
    public function postProjectsProjectIDInvitations(
        int $projectID,
        UsernameRequest $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostProjectsProjectIDInvitations::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return $response;
    }

    /**
     * Activate Prompt Version
     *
     * Restore a previous prompt version as the active system prompt.
     */
    #[EndpointAttribute(PostProjectsProjectIDPromptsVersionIDActivate::class)]
    public function postProjectsProjectIDPromptsVersionIDActivate(
        int $projectID,
        int $versionID,
    ): PromptActivateResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDPromptsVersionIDActivate::fromRecordData(
                [
                    'projectID' => $projectID,
                    'versionID' => $versionID,
                ],
            ),
        );

        return PromptActivateResponse::fromArray($response);
    }

    /**
     * Router Generate Workspace
     *
     * Use the system LLM to generate a router FLOW GRAPH from a plain-English description.  A router is a graph of nodes that may each carry Blockly, so this returns &#x60;&#x60;{\&quot;flow\&quot;: ...}&#x60;&#x60; — the shape the canvas loads and &#x60;&#x60;options.router_flow&#x60;&#x60; stores. The generator validates before returning, so a 400 here means the model could not produce a runnable graph even after a repair attempt; it never hands the browser a flow that would be refused on save.
     */
    #[EndpointAttribute(PostProjectsProjectIDRouterGenerate::class)]
    public function postProjectsProjectIDRouterGenerate(
        int $projectID,
        RouterGenerateRequest $body,
    ): RouterGenerateResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDRouterGenerate::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return RouterGenerateResponse::fromArray($response);
    }

    /**
     * Router Generate Node Blocks
     *
     * Generate the blocks inside ONE node of a router flow.  A separate endpoint from &#x60;/router/generate&#x60; because it returns a different artefact — a Blockly workspace, not a graph — and folding it in would make the flow response&#39;s &#x60;flow&#x60; optional, weakening a contract the editor relies on.  Deliberately takes no node id: the node being edited is usually unsaved. Everything the generator needs travels in the body, so this never has to agree with what is stored.
     */
    #[EndpointAttribute(PostProjectsProjectIDRouterNodeGenerate::class)]
    public function postProjectsProjectIDRouterNodeGenerate(
        int $projectID,
        RouterNodeGenerateRequest $body,
    ): RouterNodeGenerateResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDRouterNodeGenerate::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return RouterNodeGenerateResponse::fromArray($response);
    }

    /**
     * Generate System Prompt Endpoint
     *
     * Use the system LLM to draft a system prompt from a short description.
     */
    #[EndpointAttribute(PostProjectsProjectIDSystemPromptGenerate::class)]
    public function postProjectsProjectIDSystemPromptGenerate(
        int $projectID,
        SystemPromptGenerateRequest $body,
    ): SystemPromptGenerateResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostProjectsProjectIDSystemPromptGenerate::fromRecordData(
                [
                    'projectID' => $projectID,
                    'body' => $body,
                ],
            ),
        );

        return SystemPromptGenerateResponse::fromArray($response);
    }

    /**
     * Set Project Custom Tool Enabled
     *
     * Set an agent-created tool&#39;s enabled state (idempotent — sends the target boolean rather than a server-side flip).
     */
    #[EndpointAttribute(PutProjectsProjectIDCustomToolsToolNameEnabled::class)]
    public function putProjectsProjectIDCustomToolsToolNameEnabled(
        int $projectID,
        string $toolName,
        BodyPutProjectsProjectIDCustomToolsToolNameEnabled $body,
    ): ProjectCustomToolToggleResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PutProjectsProjectIDCustomToolsToolNameEnabled::fromRecordData(
                [
                    'projectID' => $projectID,
                    'toolName' => $toolName,
                    'body' => $body,
                ],
            ),
        );

        return ProjectCustomToolToggleResponse::fromArray($response);
    }
}
