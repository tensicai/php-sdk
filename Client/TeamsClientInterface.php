<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TensicAI\SDK\Model\GetTeamsQuery;
use TensicAI\SDK\Model\GetTeamsTeamIdAnalyticsQuery;
use TensicAI\SDK\Model\GetTeamsTeamIdTransactionsQuery;
use TensicAI\SDK\Model\TeamBranding;
use TensicAI\SDK\Model\TeamMemberBudget;
use TensicAI\SDK\Model\TeamMemberBudgetUpdate;
use TensicAI\SDK\Model\TeamModel;
use TensicAI\SDK\Model\TeamModelCreate;
use TensicAI\SDK\Model\TeamModelUpdate;
use TensicAI\SDK\Model\TeamsResponse;
use TensicAI\SDK\Model\UsernameRequest;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface TeamsClientInterface
{
    public const string TAG = 'Teams';

    /**
     * Delete Team
     *
     * Delete a team.
     */
    public function deleteTeamsTeamId(
        int $teamId,
    ): mixed;

    /**
     * Remove Admin From Team
     *
     * Remove an admin from a team.
     */
    public function deleteTeamsTeamIdAdminsUsername(
        int $teamId,
        string $username,
    ): mixed;

    /**
     * Remove Audio Generator From Team
     *
     * Remove an audio generator from a team.
     */
    public function deleteTeamsTeamIdAudioGeneratorsGeneratorName(
        int $teamId,
        string $generatorName,
    ): mixed;

    /**
     * Remove Embedding From Team
     *
     * Remove an embedding from a team.
     */
    public function deleteTeamsTeamIdEmbeddingsEmbeddingId(
        int $teamId,
        int $embeddingId,
    ): mixed;

    /**
     * Remove Image Generator From Team
     *
     * Remove an image generator from a team.
     */
    public function deleteTeamsTeamIdImageGeneratorsGeneratorName(
        int $teamId,
        string $generatorName,
    ): mixed;

    /**
     * Remove Llm From Team
     *
     * Remove an LLM from a team.
     */
    public function deleteTeamsTeamIdLlmsLlmId(
        int $teamId,
        int $llmId,
    ): mixed;

    /**
     * Remove Project From Team
     *
     * Remove a project from a team.
     */
    public function deleteTeamsTeamIdProjectsProjectId(
        int $teamId,
        int $projectId,
    ): mixed;

    /**
     * Remove User From Team
     *
     * Remove a user from a team.
     */
    public function deleteTeamsTeamIdUsersUsername(
        int $teamId,
        string $username,
    ): mixed;

    /**
     * Get My Invitations
     *
     * Get pending team and project invitations for the current user.
     */
    public function getInvitations(): mixed;

    /**
     * Get My Invitations
     *
     * Get pending team and project invitations for the current user.
     */
    public function getInvitations(): mixed;

    /**
     * Get Invitation Count
     *
     * Get the count of pending invitations (team + project) for the current user.
     */
    public function getInvitationsCount(): mixed;

    /**
     * Get Invitation Count
     *
     * Get the count of pending invitations (team + project) for the current user.
     */
    public function getInvitationsCount(): mixed;

    /**
     * Get Teams
     *
     * Get teams the user can access (admins see all, bounded + &#x60;total&#x60;).
     */
    public function getTeams(
        GetTeamsQuery|null $query = null,
    ): TeamsResponse;

    /**
     * Get Team
     *
     * Get a specific team by ID.
     */
    public function getTeamsTeamId(
        int $teamId,
    ): TeamModel;

    /**
     * Get Team Analytics
     *
     * Aggregated usage/cost analytics for a whole team (team admins + platform admins).  Scope mirrors get_team_spending/get_team_transactions: project-scoped rows for the team&#39;s projects PLUS direct-access rows (project_id NULL, team_id set), so direct-access API usage is fully represented. Costs are pre-computed on each OutputDatabase row, so everything is plain SUM/GROUP BY over the selected month.
     */
    public function getTeamsTeamIdAnalytics(
        int $teamId,
        GetTeamsTeamIdAnalyticsQuery|null $query = null,
    ): mixed;

    /**
     * Get Team Branding
     *
     * Get team branding configuration (public, no auth required).
     */
    public function getTeamsTeamIdBranding(
        int $teamId,
    ): TeamBranding;

    /**
     * Get Team Member Budgets
     *
     * Per-member monthly cost caps + month-to-date spend for the whole team (team admins + platform admins). One fetch drives the budget chips/dialogs.
     *
     * @return array<TeamMemberBudget>
     */
    public function getTeamsTeamIdMembersBudgets(
        int $teamId,
    ): array;

    /**
     * Get Team Member Budgets
     *
     * Per-member monthly cost caps + month-to-date spend for the whole team (team admins + platform admins). One fetch drives the budget chips/dialogs.
     *
     * @return array<TeamMemberBudget>
     */
    public function getTeamsTeamIdMembersBudgets(
        int $teamId,
    ): array;

    /**
     * Get Team Transactions
     *
     * Get budget transactions (inference logs) for all projects in a team.
     */
    public function getTeamsTeamIdTransactions(
        int $teamId,
        GetTeamsTeamIdTransactionsQuery|null $query = null,
    ): mixed;

    /**
     * Update Team
     *
     * Update team details.
     */
    public function patchTeamsTeamId(
        int $teamId,
        TeamModelUpdate $body,
    ): TeamModel;

    /**
     * Set Team Member Budget
     *
     * Set or clear a member&#39;s monthly cost cap (team admins + platform admins). &#x60;budget&#x60; null or -1 clears the cap. Validates the target is a team member.
     */
    public function patchTeamsTeamIdMembersUsernameBudget(
        int $teamId,
        string $username,
        TeamMemberBudgetUpdate $body,
    ): TeamMemberBudget;

    /**
     * Set Team Member Budget
     *
     * Set or clear a member&#39;s monthly cost cap (team admins + platform admins). &#x60;budget&#x60; null or -1 clears the cap. Validates the target is a team member.
     */
    public function patchTeamsTeamIdMembersUsernameBudget(
        int $teamId,
        string $username,
        TeamMemberBudgetUpdate $body,
    ): TeamMemberBudget;

    /**
     * Accept Invitation
     *
     * Accept a team invitation.
     */
    public function postInvitationsInvitationIdAccept(
        int $invitationId,
    ): mixed;

    /**
     * Accept Invitation
     *
     * Accept a team invitation.
     */
    public function postInvitationsInvitationIdAccept(
        int $invitationId,
    ): mixed;

    /**
     * Decline Invitation
     *
     * Decline a team invitation.
     */
    public function postInvitationsInvitationIdDecline(
        int $invitationId,
    ): mixed;

    /**
     * Decline Invitation
     *
     * Decline a team invitation.
     */
    public function postInvitationsInvitationIdDecline(
        int $invitationId,
    ): mixed;

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
     * Create Team
     *
     * Create a new team.
     */
    public function postTeams(
        TeamModelCreate $body,
    ): TeamModel;

    /**
     * Send Team Invitation
     *
     * Invite a user to join a team. Does not disclose whether the user exists.
     */
    public function postTeamsTeamIdInvitations(
        int $teamId,
        UsernameRequest $body,
    ): mixed;

    /**
     * Send Team Invitation
     *
     * Invite a user to join a team. Does not disclose whether the user exists.
     */
    public function postTeamsTeamIdInvitations(
        int $teamId,
        UsernameRequest $body,
    ): mixed;

    /**
     * Add Admin To Team
     *
     * Add an admin to a team.
     */
    public function putTeamsTeamIdAdminsUsername(
        int $teamId,
        string $username,
    ): mixed;

    /**
     * Add Audio Generator To Team
     *
     * Add an audio generator to a team.
     */
    public function putTeamsTeamIdAudioGeneratorsGeneratorName(
        int $teamId,
        string $generatorName,
    ): mixed;

    /**
     * Add Embedding To Team
     *
     * Add an embedding to a team.
     */
    public function putTeamsTeamIdEmbeddingsEmbeddingId(
        int $teamId,
        int $embeddingId,
    ): mixed;

    /**
     * Add Image Generator To Team
     *
     * Add an image generator to a team.
     */
    public function putTeamsTeamIdImageGeneratorsGeneratorName(
        int $teamId,
        string $generatorName,
    ): mixed;

    /**
     * Add Llm To Team
     *
     * Add an LLM to a team.
     */
    public function putTeamsTeamIdLlmsLlmId(
        int $teamId,
        int $llmId,
    ): mixed;

    /**
     * Add Project To Team
     *
     * Add a project to a team.
     */
    public function putTeamsTeamIdProjectsProjectId(
        int $teamId,
        int $projectId,
    ): mixed;

    /**
     * Add User To Team
     *
     * Add a user to a team.
     */
    public function putTeamsTeamIdUsersUsername(
        int $teamId,
        string $username,
    ): mixed;
}
