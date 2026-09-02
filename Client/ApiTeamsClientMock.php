<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TeamBlue\TensicAI\SDK\Model\GetTeamsQuery;
use TeamBlue\TensicAI\SDK\Model\GetTeamsTeamIdAnalyticsQuery;
use TeamBlue\TensicAI\SDK\Model\GetTeamsTeamIdTransactionsQuery;
use TeamBlue\TensicAI\SDK\Model\TeamMemberBudgetUpdate;
use TeamBlue\TensicAI\SDK\Model\TeamModelCreate;
use TeamBlue\TensicAI\SDK\Model\TeamModelUpdate;
use TeamBlue\TensicAI\SDK\Model\UsernameRequest;

use function func_get_args;

final class ApiTeamsClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<TeamsClientInterface> */
    public function mockInterface(): string
    {
        return TeamsClientInterface::class;
    }

    /** @see TeamsClient::deleteTeamsTeamId() */
    public function deleteTeamsTeamId(
        int $teamId,
    ): self {
        ($this->persister)('deleteTeamsTeamId', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::deleteTeamsTeamIdAdminsUsername() */
    public function deleteTeamsTeamIdAdminsUsername(
        int $teamId,
        string $username,
    ): self {
        ($this->persister)('deleteTeamsTeamIdAdminsUsername', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::deleteTeamsTeamIdAudioGeneratorsGeneratorName() */
    public function deleteTeamsTeamIdAudioGeneratorsGeneratorName(
        int $teamId,
        string $generatorName,
    ): self {
        ($this->persister)('deleteTeamsTeamIdAudioGeneratorsGeneratorName', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::deleteTeamsTeamIdEmbeddingsEmbeddingId() */
    public function deleteTeamsTeamIdEmbeddingsEmbeddingId(
        int $teamId,
        int $embeddingId,
    ): self {
        ($this->persister)('deleteTeamsTeamIdEmbeddingsEmbeddingId', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::deleteTeamsTeamIdImageGeneratorsGeneratorName() */
    public function deleteTeamsTeamIdImageGeneratorsGeneratorName(
        int $teamId,
        string $generatorName,
    ): self {
        ($this->persister)('deleteTeamsTeamIdImageGeneratorsGeneratorName', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::deleteTeamsTeamIdLlmsLlmId() */
    public function deleteTeamsTeamIdLlmsLlmId(
        int $teamId,
        int $llmId,
    ): self {
        ($this->persister)('deleteTeamsTeamIdLlmsLlmId', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::deleteTeamsTeamIdProjectsProjectId() */
    public function deleteTeamsTeamIdProjectsProjectId(
        int $teamId,
        int $projectId,
    ): self {
        ($this->persister)('deleteTeamsTeamIdProjectsProjectId', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::deleteTeamsTeamIdUsersUsername() */
    public function deleteTeamsTeamIdUsersUsername(
        int $teamId,
        string $username,
    ): self {
        ($this->persister)('deleteTeamsTeamIdUsersUsername', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::getInvitations() */
    public function getInvitations(): self
    {
        ($this->persister)('getInvitations', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::getInvitations() */
    public function getInvitations(): self
    {
        ($this->persister)('getInvitations', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::getInvitationsCount() */
    public function getInvitationsCount(): self
    {
        ($this->persister)('getInvitationsCount', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::getInvitationsCount() */
    public function getInvitationsCount(): self
    {
        ($this->persister)('getInvitationsCount', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::getTeams() */
    public function getTeams(
        GetTeamsQuery|null $query = null,
    ): self {
        ($this->persister)('getTeams', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::getTeamsTeamId() */
    public function getTeamsTeamId(
        int $teamId,
    ): self {
        ($this->persister)('getTeamsTeamId', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::getTeamsTeamIdAnalytics() */
    public function getTeamsTeamIdAnalytics(
        int $teamId,
        GetTeamsTeamIdAnalyticsQuery|null $query = null,
    ): self {
        ($this->persister)('getTeamsTeamIdAnalytics', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::getTeamsTeamIdBranding() */
    public function getTeamsTeamIdBranding(
        int $teamId,
    ): self {
        ($this->persister)('getTeamsTeamIdBranding', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::getTeamsTeamIdMembersBudgets() */
    public function getTeamsTeamIdMembersBudgets(
        int $teamId,
    ): self {
        ($this->persister)('getTeamsTeamIdMembersBudgets', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::getTeamsTeamIdMembersBudgets() */
    public function getTeamsTeamIdMembersBudgets(
        int $teamId,
    ): self {
        ($this->persister)('getTeamsTeamIdMembersBudgets', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::getTeamsTeamIdTransactions() */
    public function getTeamsTeamIdTransactions(
        int $teamId,
        GetTeamsTeamIdTransactionsQuery|null $query = null,
    ): self {
        ($this->persister)('getTeamsTeamIdTransactions', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::patchTeamsTeamId() */
    public function patchTeamsTeamId(
        int $teamId,
        TeamModelUpdate $body,
    ): self {
        ($this->persister)('patchTeamsTeamId', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::patchTeamsTeamIdMembersUsernameBudget() */
    public function patchTeamsTeamIdMembersUsernameBudget(
        int $teamId,
        string $username,
        TeamMemberBudgetUpdate $body,
    ): self {
        ($this->persister)('patchTeamsTeamIdMembersUsernameBudget', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::patchTeamsTeamIdMembersUsernameBudget() */
    public function patchTeamsTeamIdMembersUsernameBudget(
        int $teamId,
        string $username,
        TeamMemberBudgetUpdate $body,
    ): self {
        ($this->persister)('patchTeamsTeamIdMembersUsernameBudget', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::postInvitationsInvitationIdAccept() */
    public function postInvitationsInvitationIdAccept(
        int $invitationId,
    ): self {
        ($this->persister)('postInvitationsInvitationIdAccept', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::postInvitationsInvitationIdAccept() */
    public function postInvitationsInvitationIdAccept(
        int $invitationId,
    ): self {
        ($this->persister)('postInvitationsInvitationIdAccept', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::postInvitationsInvitationIdDecline() */
    public function postInvitationsInvitationIdDecline(
        int $invitationId,
    ): self {
        ($this->persister)('postInvitationsInvitationIdDecline', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::postInvitationsInvitationIdDecline() */
    public function postInvitationsInvitationIdDecline(
        int $invitationId,
    ): self {
        ($this->persister)('postInvitationsInvitationIdDecline', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::postInvitationsProjectsInvitationIdAccept() */
    public function postInvitationsProjectsInvitationIdAccept(
        int $invitationId,
    ): self {
        ($this->persister)('postInvitationsProjectsInvitationIdAccept', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::postInvitationsProjectsInvitationIdDecline() */
    public function postInvitationsProjectsInvitationIdDecline(
        int $invitationId,
    ): self {
        ($this->persister)('postInvitationsProjectsInvitationIdDecline', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::postTeams() */
    public function postTeams(
        TeamModelCreate $body,
    ): self {
        ($this->persister)('postTeams', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::postTeamsTeamIdInvitations() */
    public function postTeamsTeamIdInvitations(
        int $teamId,
        UsernameRequest $body,
    ): self {
        ($this->persister)('postTeamsTeamIdInvitations', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::postTeamsTeamIdInvitations() */
    public function postTeamsTeamIdInvitations(
        int $teamId,
        UsernameRequest $body,
    ): self {
        ($this->persister)('postTeamsTeamIdInvitations', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::putTeamsTeamIdAdminsUsername() */
    public function putTeamsTeamIdAdminsUsername(
        int $teamId,
        string $username,
    ): self {
        ($this->persister)('putTeamsTeamIdAdminsUsername', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::putTeamsTeamIdAudioGeneratorsGeneratorName() */
    public function putTeamsTeamIdAudioGeneratorsGeneratorName(
        int $teamId,
        string $generatorName,
    ): self {
        ($this->persister)('putTeamsTeamIdAudioGeneratorsGeneratorName', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::putTeamsTeamIdEmbeddingsEmbeddingId() */
    public function putTeamsTeamIdEmbeddingsEmbeddingId(
        int $teamId,
        int $embeddingId,
    ): self {
        ($this->persister)('putTeamsTeamIdEmbeddingsEmbeddingId', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::putTeamsTeamIdImageGeneratorsGeneratorName() */
    public function putTeamsTeamIdImageGeneratorsGeneratorName(
        int $teamId,
        string $generatorName,
    ): self {
        ($this->persister)('putTeamsTeamIdImageGeneratorsGeneratorName', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::putTeamsTeamIdLlmsLlmId() */
    public function putTeamsTeamIdLlmsLlmId(
        int $teamId,
        int $llmId,
    ): self {
        ($this->persister)('putTeamsTeamIdLlmsLlmId', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::putTeamsTeamIdProjectsProjectId() */
    public function putTeamsTeamIdProjectsProjectId(
        int $teamId,
        int $projectId,
    ): self {
        ($this->persister)('putTeamsTeamIdProjectsProjectId', ...func_get_args());

        return $this;
    }

    /** @see TeamsClient::putTeamsTeamIdUsersUsername() */
    public function putTeamsTeamIdUsersUsername(
        int $teamId,
        string $username,
    ): self {
        ($this->persister)('putTeamsTeamIdUsersUsername', ...func_get_args());

        return $this;
    }
}
