<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteTeamsTeamId;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteTeamsTeamIdAdminsUsername;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteTeamsTeamIdAudioGeneratorsGeneratorName;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteTeamsTeamIdEmbeddingsEmbeddingId;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteTeamsTeamIdImageGeneratorsGeneratorName;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteTeamsTeamIdLlmsLlmId;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteTeamsTeamIdProjectsProjectId;
use TeamBlue\TensicAI\SDK\Endpoint\DeleteTeamsTeamIdUsersUsername;
use TeamBlue\TensicAI\SDK\Endpoint\GetInvitations;
use TeamBlue\TensicAI\SDK\Endpoint\GetInvitationsCount;
use TeamBlue\TensicAI\SDK\Endpoint\GetTeams;
use TeamBlue\TensicAI\SDK\Endpoint\GetTeamsTeamId;
use TeamBlue\TensicAI\SDK\Endpoint\GetTeamsTeamIdAnalytics;
use TeamBlue\TensicAI\SDK\Endpoint\GetTeamsTeamIdBranding;
use TeamBlue\TensicAI\SDK\Endpoint\GetTeamsTeamIdMembersBudgets;
use TeamBlue\TensicAI\SDK\Endpoint\GetTeamsTeamIdTransactions;
use TeamBlue\TensicAI\SDK\Endpoint\PatchTeamsTeamId;
use TeamBlue\TensicAI\SDK\Endpoint\PatchTeamsTeamIdMembersUsernameBudget;
use TeamBlue\TensicAI\SDK\Endpoint\PostInvitationsInvitationIdAccept;
use TeamBlue\TensicAI\SDK\Endpoint\PostInvitationsInvitationIdDecline;
use TeamBlue\TensicAI\SDK\Endpoint\PostInvitationsProjectsInvitationIdAccept;
use TeamBlue\TensicAI\SDK\Endpoint\PostInvitationsProjectsInvitationIdDecline;
use TeamBlue\TensicAI\SDK\Endpoint\PostTeams;
use TeamBlue\TensicAI\SDK\Endpoint\PostTeamsTeamIdInvitations;
use TeamBlue\TensicAI\SDK\Endpoint\PutTeamsTeamIdAdminsUsername;
use TeamBlue\TensicAI\SDK\Endpoint\PutTeamsTeamIdAudioGeneratorsGeneratorName;
use TeamBlue\TensicAI\SDK\Endpoint\PutTeamsTeamIdEmbeddingsEmbeddingId;
use TeamBlue\TensicAI\SDK\Endpoint\PutTeamsTeamIdImageGeneratorsGeneratorName;
use TeamBlue\TensicAI\SDK\Endpoint\PutTeamsTeamIdLlmsLlmId;
use TeamBlue\TensicAI\SDK\Endpoint\PutTeamsTeamIdProjectsProjectId;
use TeamBlue\TensicAI\SDK\Endpoint\PutTeamsTeamIdUsersUsername;
use TeamBlue\TensicAI\SDK\Model\GetTeamsQuery;
use TeamBlue\TensicAI\SDK\Model\GetTeamsTeamIdAnalyticsQuery;
use TeamBlue\TensicAI\SDK\Model\GetTeamsTeamIdTransactionsQuery;
use TeamBlue\TensicAI\SDK\Model\TeamBranding;
use TeamBlue\TensicAI\SDK\Model\TeamMemberBudget;
use TeamBlue\TensicAI\SDK\Model\TeamMemberBudgetUpdate;
use TeamBlue\TensicAI\SDK\Model\TeamModel;
use TeamBlue\TensicAI\SDK\Model\TeamModelCreate;
use TeamBlue\TensicAI\SDK\Model\TeamModelUpdate;
use TeamBlue\TensicAI\SDK\Model\TeamsResponse;
use TeamBlue\TensicAI\SDK\Model\UsernameRequest;

use function array_map;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class TeamsClient extends AbstractClient implements TeamsClientInterface
{
    /**
     * Delete Team
     *
     * Delete a team.
     */
    #[EndpointAttribute(DeleteTeamsTeamId::class)]
    public function deleteTeamsTeamId(
        int $teamId,
    ): mixed {
        return $this->performRequest(
            DeleteTeamsTeamId::fromRecordData(
                ['team_id' => $teamId],
            ),
        );
    }

    /**
     * Remove Admin From Team
     *
     * Remove an admin from a team.
     */
    #[EndpointAttribute(DeleteTeamsTeamIdAdminsUsername::class)]
    public function deleteTeamsTeamIdAdminsUsername(
        int $teamId,
        string $username,
    ): mixed {
        return $this->performRequest(
            DeleteTeamsTeamIdAdminsUsername::fromRecordData(
                [
                    'team_id' => $teamId,
                    'username' => $username,
                ],
            ),
        );
    }

    /**
     * Remove Audio Generator From Team
     *
     * Remove an audio generator from a team.
     */
    #[EndpointAttribute(DeleteTeamsTeamIdAudioGeneratorsGeneratorName::class)]
    public function deleteTeamsTeamIdAudioGeneratorsGeneratorName(
        int $teamId,
        string $generatorName,
    ): mixed {
        return $this->performRequest(
            DeleteTeamsTeamIdAudioGeneratorsGeneratorName::fromRecordData(
                [
                    'team_id' => $teamId,
                    'generator_name' => $generatorName,
                ],
            ),
        );
    }

    /**
     * Remove Embedding From Team
     *
     * Remove an embedding from a team.
     */
    #[EndpointAttribute(DeleteTeamsTeamIdEmbeddingsEmbeddingId::class)]
    public function deleteTeamsTeamIdEmbeddingsEmbeddingId(
        int $teamId,
        int $embeddingId,
    ): mixed {
        return $this->performRequest(
            DeleteTeamsTeamIdEmbeddingsEmbeddingId::fromRecordData(
                [
                    'team_id' => $teamId,
                    'embedding_id' => $embeddingId,
                ],
            ),
        );
    }

    /**
     * Remove Image Generator From Team
     *
     * Remove an image generator from a team.
     */
    #[EndpointAttribute(DeleteTeamsTeamIdImageGeneratorsGeneratorName::class)]
    public function deleteTeamsTeamIdImageGeneratorsGeneratorName(
        int $teamId,
        string $generatorName,
    ): mixed {
        return $this->performRequest(
            DeleteTeamsTeamIdImageGeneratorsGeneratorName::fromRecordData(
                [
                    'team_id' => $teamId,
                    'generator_name' => $generatorName,
                ],
            ),
        );
    }

    /**
     * Remove Llm From Team
     *
     * Remove an LLM from a team.
     */
    #[EndpointAttribute(DeleteTeamsTeamIdLlmsLlmId::class)]
    public function deleteTeamsTeamIdLlmsLlmId(
        int $teamId,
        int $llmId,
    ): mixed {
        return $this->performRequest(
            DeleteTeamsTeamIdLlmsLlmId::fromRecordData(
                [
                    'team_id' => $teamId,
                    'llm_id' => $llmId,
                ],
            ),
        );
    }

    /**
     * Remove Project From Team
     *
     * Remove a project from a team.
     */
    #[EndpointAttribute(DeleteTeamsTeamIdProjectsProjectId::class)]
    public function deleteTeamsTeamIdProjectsProjectId(
        int $teamId,
        int $projectId,
    ): mixed {
        return $this->performRequest(
            DeleteTeamsTeamIdProjectsProjectId::fromRecordData(
                [
                    'team_id' => $teamId,
                    'project_id' => $projectId,
                ],
            ),
        );
    }

    /**
     * Remove User From Team
     *
     * Remove a user from a team.
     */
    #[EndpointAttribute(DeleteTeamsTeamIdUsersUsername::class)]
    public function deleteTeamsTeamIdUsersUsername(
        int $teamId,
        string $username,
    ): mixed {
        return $this->performRequest(
            DeleteTeamsTeamIdUsersUsername::fromRecordData(
                [
                    'team_id' => $teamId,
                    'username' => $username,
                ],
            ),
        );
    }

    /**
     * Get My Invitations
     *
     * Get pending team and project invitations for the current user.
     */
    #[EndpointAttribute(GetInvitations::class)]
    public function getInvitations(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetInvitations::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Get My Invitations
     *
     * Get pending team and project invitations for the current user.
     */
    #[EndpointAttribute(GetInvitations::class)]
    public function getInvitations(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetInvitations::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Get Invitation Count
     *
     * Get the count of pending invitations (team + project) for the current user.
     */
    #[EndpointAttribute(GetInvitationsCount::class)]
    public function getInvitationsCount(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetInvitationsCount::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Get Invitation Count
     *
     * Get the count of pending invitations (team + project) for the current user.
     */
    #[EndpointAttribute(GetInvitationsCount::class)]
    public function getInvitationsCount(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetInvitationsCount::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Get Teams
     *
     * Get teams the user can access (admins see all, bounded + &#x60;total&#x60;).
     */
    #[EndpointAttribute(GetTeams::class)]
    public function getTeams(
        GetTeamsQuery|null $query = null,
    ): TeamsResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetTeams::fromRecordData(
                ['query' => $query],
            ),
        );

        return TeamsResponse::fromArray($response);
    }

    /**
     * Get Team
     *
     * Get a specific team by ID.
     */
    #[EndpointAttribute(GetTeamsTeamId::class)]
    public function getTeamsTeamId(
        int $teamId,
    ): TeamModel {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetTeamsTeamId::fromRecordData(
                ['team_id' => $teamId],
            ),
        );

        return TeamModel::fromArray($response);
    }

    /**
     * Get Team Analytics
     *
     * Aggregated usage/cost analytics for a whole team (team admins + platform admins).  Scope mirrors get_team_spending/get_team_transactions: project-scoped rows for the team&#39;s projects PLUS direct-access rows (project_id NULL, team_id set), so direct-access API usage is fully represented. Costs are pre-computed on each OutputDatabase row, so everything is plain SUM/GROUP BY over the selected month.
     */
    #[EndpointAttribute(GetTeamsTeamIdAnalytics::class)]
    public function getTeamsTeamIdAnalytics(
        int $teamId,
        GetTeamsTeamIdAnalyticsQuery|null $query = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetTeamsTeamIdAnalytics::fromRecordData(
                [
                    'team_id' => $teamId,
                    'query' => $query,
                ],
            ),
        );

        return $response;
    }

    /**
     * Get Team Branding
     *
     * Get team branding configuration (public, no auth required).
     */
    #[EndpointAttribute(GetTeamsTeamIdBranding::class)]
    public function getTeamsTeamIdBranding(
        int $teamId,
    ): TeamBranding {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetTeamsTeamIdBranding::fromRecordData(
                ['team_id' => $teamId],
            ),
        );

        return TeamBranding::fromArray($response);
    }

    /**
     * Get Team Member Budgets
     *
     * Per-member monthly cost caps + month-to-date spend for the whole team (team admins + platform admins). One fetch drives the budget chips/dialogs.
     *
     * @return array<TeamMemberBudget>
     */
    #[EndpointAttribute(GetTeamsTeamIdMembersBudgets::class)]
    public function getTeamsTeamIdMembersBudgets(
        int $teamId,
    ): array {
        /** @var array<string, array<string, mixed>> $response */
        $response = $this->performRequest(
            GetTeamsTeamIdMembersBudgets::fromRecordData(
                ['team_id' => $teamId],
            ),
        );

        return array_map(
            TeamMemberBudget::fromArray(...),
            $response,
        );
    }

    /**
     * Get Team Member Budgets
     *
     * Per-member monthly cost caps + month-to-date spend for the whole team (team admins + platform admins). One fetch drives the budget chips/dialogs.
     *
     * @return array<TeamMemberBudget>
     */
    #[EndpointAttribute(GetTeamsTeamIdMembersBudgets::class)]
    public function getTeamsTeamIdMembersBudgets(
        int $teamId,
    ): array {
        /** @var array<string, array<string, mixed>> $response */
        $response = $this->performRequest(
            GetTeamsTeamIdMembersBudgets::fromRecordData(
                ['team_id' => $teamId],
            ),
        );

        return array_map(
            TeamMemberBudget::fromArray(...),
            $response,
        );
    }

    /**
     * Get Team Transactions
     *
     * Get budget transactions (inference logs) for all projects in a team.
     */
    #[EndpointAttribute(GetTeamsTeamIdTransactions::class)]
    public function getTeamsTeamIdTransactions(
        int $teamId,
        GetTeamsTeamIdTransactionsQuery|null $query = null,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetTeamsTeamIdTransactions::fromRecordData(
                [
                    'team_id' => $teamId,
                    'query' => $query,
                ],
            ),
        );

        return $response;
    }

    /**
     * Update Team
     *
     * Update team details.
     */
    #[EndpointAttribute(PatchTeamsTeamId::class)]
    public function patchTeamsTeamId(
        int $teamId,
        TeamModelUpdate $body,
    ): TeamModel {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PatchTeamsTeamId::fromRecordData(
                [
                    'team_id' => $teamId,
                    'body' => $body,
                ],
            ),
        );

        return TeamModel::fromArray($response);
    }

    /**
     * Set Team Member Budget
     *
     * Set or clear a member&#39;s monthly cost cap (team admins + platform admins). &#x60;budget&#x60; null or -1 clears the cap. Validates the target is a team member.
     */
    #[EndpointAttribute(PatchTeamsTeamIdMembersUsernameBudget::class)]
    public function patchTeamsTeamIdMembersUsernameBudget(
        int $teamId,
        string $username,
        TeamMemberBudgetUpdate $body,
    ): TeamMemberBudget {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PatchTeamsTeamIdMembersUsernameBudget::fromRecordData(
                [
                    'team_id' => $teamId,
                    'username' => $username,
                    'body' => $body,
                ],
            ),
        );

        return TeamMemberBudget::fromArray($response);
    }

    /**
     * Set Team Member Budget
     *
     * Set or clear a member&#39;s monthly cost cap (team admins + platform admins). &#x60;budget&#x60; null or -1 clears the cap. Validates the target is a team member.
     */
    #[EndpointAttribute(PatchTeamsTeamIdMembersUsernameBudget::class)]
    public function patchTeamsTeamIdMembersUsernameBudget(
        int $teamId,
        string $username,
        TeamMemberBudgetUpdate $body,
    ): TeamMemberBudget {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PatchTeamsTeamIdMembersUsernameBudget::fromRecordData(
                [
                    'team_id' => $teamId,
                    'username' => $username,
                    'body' => $body,
                ],
            ),
        );

        return TeamMemberBudget::fromArray($response);
    }

    /**
     * Accept Invitation
     *
     * Accept a team invitation.
     */
    #[EndpointAttribute(PostInvitationsInvitationIdAccept::class)]
    public function postInvitationsInvitationIdAccept(
        int $invitationId,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostInvitationsInvitationIdAccept::fromRecordData(
                ['invitation_id' => $invitationId],
            ),
        );

        return $response;
    }

    /**
     * Accept Invitation
     *
     * Accept a team invitation.
     */
    #[EndpointAttribute(PostInvitationsInvitationIdAccept::class)]
    public function postInvitationsInvitationIdAccept(
        int $invitationId,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostInvitationsInvitationIdAccept::fromRecordData(
                ['invitation_id' => $invitationId],
            ),
        );

        return $response;
    }

    /**
     * Decline Invitation
     *
     * Decline a team invitation.
     */
    #[EndpointAttribute(PostInvitationsInvitationIdDecline::class)]
    public function postInvitationsInvitationIdDecline(
        int $invitationId,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostInvitationsInvitationIdDecline::fromRecordData(
                ['invitation_id' => $invitationId],
            ),
        );

        return $response;
    }

    /**
     * Decline Invitation
     *
     * Decline a team invitation.
     */
    #[EndpointAttribute(PostInvitationsInvitationIdDecline::class)]
    public function postInvitationsInvitationIdDecline(
        int $invitationId,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostInvitationsInvitationIdDecline::fromRecordData(
                ['invitation_id' => $invitationId],
            ),
        );

        return $response;
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
     * Create Team
     *
     * Create a new team.
     */
    #[EndpointAttribute(PostTeams::class)]
    public function postTeams(
        TeamModelCreate $body,
    ): TeamModel {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostTeams::fromRecordData(
                ['body' => $body],
            ),
        );

        return TeamModel::fromArray($response);
    }

    /**
     * Send Team Invitation
     *
     * Invite a user to join a team. Does not disclose whether the user exists.
     */
    #[EndpointAttribute(PostTeamsTeamIdInvitations::class)]
    public function postTeamsTeamIdInvitations(
        int $teamId,
        UsernameRequest $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostTeamsTeamIdInvitations::fromRecordData(
                [
                    'team_id' => $teamId,
                    'body' => $body,
                ],
            ),
        );

        return $response;
    }

    /**
     * Send Team Invitation
     *
     * Invite a user to join a team. Does not disclose whether the user exists.
     */
    #[EndpointAttribute(PostTeamsTeamIdInvitations::class)]
    public function postTeamsTeamIdInvitations(
        int $teamId,
        UsernameRequest $body,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostTeamsTeamIdInvitations::fromRecordData(
                [
                    'team_id' => $teamId,
                    'body' => $body,
                ],
            ),
        );

        return $response;
    }

    /**
     * Add Admin To Team
     *
     * Add an admin to a team.
     */
    #[EndpointAttribute(PutTeamsTeamIdAdminsUsername::class)]
    public function putTeamsTeamIdAdminsUsername(
        int $teamId,
        string $username,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PutTeamsTeamIdAdminsUsername::fromRecordData(
                [
                    'team_id' => $teamId,
                    'username' => $username,
                ],
            ),
        );

        return $response;
    }

    /**
     * Add Audio Generator To Team
     *
     * Add an audio generator to a team.
     */
    #[EndpointAttribute(PutTeamsTeamIdAudioGeneratorsGeneratorName::class)]
    public function putTeamsTeamIdAudioGeneratorsGeneratorName(
        int $teamId,
        string $generatorName,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PutTeamsTeamIdAudioGeneratorsGeneratorName::fromRecordData(
                [
                    'team_id' => $teamId,
                    'generator_name' => $generatorName,
                ],
            ),
        );

        return $response;
    }

    /**
     * Add Embedding To Team
     *
     * Add an embedding to a team.
     */
    #[EndpointAttribute(PutTeamsTeamIdEmbeddingsEmbeddingId::class)]
    public function putTeamsTeamIdEmbeddingsEmbeddingId(
        int $teamId,
        int $embeddingId,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PutTeamsTeamIdEmbeddingsEmbeddingId::fromRecordData(
                [
                    'team_id' => $teamId,
                    'embedding_id' => $embeddingId,
                ],
            ),
        );

        return $response;
    }

    /**
     * Add Image Generator To Team
     *
     * Add an image generator to a team.
     */
    #[EndpointAttribute(PutTeamsTeamIdImageGeneratorsGeneratorName::class)]
    public function putTeamsTeamIdImageGeneratorsGeneratorName(
        int $teamId,
        string $generatorName,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PutTeamsTeamIdImageGeneratorsGeneratorName::fromRecordData(
                [
                    'team_id' => $teamId,
                    'generator_name' => $generatorName,
                ],
            ),
        );

        return $response;
    }

    /**
     * Add Llm To Team
     *
     * Add an LLM to a team.
     */
    #[EndpointAttribute(PutTeamsTeamIdLlmsLlmId::class)]
    public function putTeamsTeamIdLlmsLlmId(
        int $teamId,
        int $llmId,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PutTeamsTeamIdLlmsLlmId::fromRecordData(
                [
                    'team_id' => $teamId,
                    'llm_id' => $llmId,
                ],
            ),
        );

        return $response;
    }

    /**
     * Add Project To Team
     *
     * Add a project to a team.
     */
    #[EndpointAttribute(PutTeamsTeamIdProjectsProjectId::class)]
    public function putTeamsTeamIdProjectsProjectId(
        int $teamId,
        int $projectId,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PutTeamsTeamIdProjectsProjectId::fromRecordData(
                [
                    'team_id' => $teamId,
                    'project_id' => $projectId,
                ],
            ),
        );

        return $response;
    }

    /**
     * Add User To Team
     *
     * Add a user to a team.
     */
    #[EndpointAttribute(PutTeamsTeamIdUsersUsername::class)]
    public function putTeamsTeamIdUsersUsername(
        int $teamId,
        string $username,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PutTeamsTeamIdUsersUsername::fromRecordData(
                [
                    'team_id' => $teamId,
                    'username' => $username,
                ],
            ),
        );

        return $response;
    }
}
