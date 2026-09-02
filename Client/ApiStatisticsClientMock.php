<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockLogic;
use TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsChunkingQuery;
use TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsConversationChatIDContextQuery;
use TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsConversationsQuery;
use TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsHealthQuery;
use TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsSourcesQuery;
use TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsToolsQuery;
use TensicAI\SDK\Model\GetProjectsProjectIDConversationsQuery;
use TensicAI\SDK\Model\GetProjectsProjectIDLogsQuery;
use TensicAI\SDK\Model\GetProjectsProjectIDTokensDailyQuery;
use TensicAI\SDK\Model\GetStatisticsDailyTokensQuery;
use TensicAI\SDK\Model\GetStatisticsTopLlmsQuery;
use TensicAI\SDK\Model\GetStatisticsTopProjectsQuery;
use TensicAI\SDK\Model\GetStatisticsUsersQuery;
use TensicAI\SDK\Model\GetStatisticsUsersUserIDQuery;
use TensicAI\SDK\Model\GetTeamsTeamIdAnalyticsQuery;

use function func_get_args;

final class ApiStatisticsClientMock implements Mock
{
    use MockLogic;

    /** @return class-string<StatisticsClientInterface> */
    public function mockInterface(): string
    {
        return StatisticsClientInterface::class;
    }

    /** @see StatisticsClient::deleteProjectsProjectIDLogs() */
    public function deleteProjectsProjectIDLogs(
        int $projectID,
    ): self {
        ($this->persister)('deleteProjectsProjectIDLogs', ...func_get_args());

        return $this;
    }

    /** @see StatisticsClient::getProjectsProjectIDAnalyticsChunking() */
    public function getProjectsProjectIDAnalyticsChunking(
        int $projectID,
        GetProjectsProjectIDAnalyticsChunkingQuery|null $query = null,
    ): self {
        ($this->persister)('getProjectsProjectIDAnalyticsChunking', ...func_get_args());

        return $this;
    }

    /** @see StatisticsClient::getProjectsProjectIDAnalyticsConversationChatIDContext() */
    public function getProjectsProjectIDAnalyticsConversationChatIDContext(
        int $projectID,
        string $chatID,
        GetProjectsProjectIDAnalyticsConversationChatIDContextQuery|null $query = null,
    ): self {
        ($this->persister)('getProjectsProjectIDAnalyticsConversationChatIDContext', ...func_get_args());

        return $this;
    }

    /** @see StatisticsClient::getProjectsProjectIDAnalyticsConversations() */
    public function getProjectsProjectIDAnalyticsConversations(
        int $projectID,
        GetProjectsProjectIDAnalyticsConversationsQuery|null $query = null,
    ): self {
        ($this->persister)('getProjectsProjectIDAnalyticsConversations', ...func_get_args());

        return $this;
    }

    /** @see StatisticsClient::getProjectsProjectIDAnalyticsHealth() */
    public function getProjectsProjectIDAnalyticsHealth(
        int $projectID,
        GetProjectsProjectIDAnalyticsHealthQuery|null $query = null,
    ): self {
        ($this->persister)('getProjectsProjectIDAnalyticsHealth', ...func_get_args());

        return $this;
    }

    /** @see StatisticsClient::getProjectsProjectIDAnalyticsSources() */
    public function getProjectsProjectIDAnalyticsSources(
        int $projectID,
        GetProjectsProjectIDAnalyticsSourcesQuery|null $query = null,
    ): self {
        ($this->persister)('getProjectsProjectIDAnalyticsSources', ...func_get_args());

        return $this;
    }

    /** @see StatisticsClient::getProjectsProjectIDAnalyticsTools() */
    public function getProjectsProjectIDAnalyticsTools(
        int $projectID,
        GetProjectsProjectIDAnalyticsToolsQuery|null $query = null,
    ): self {
        ($this->persister)('getProjectsProjectIDAnalyticsTools', ...func_get_args());

        return $this;
    }

    /** @see StatisticsClient::getProjectsProjectIDConversations() */
    public function getProjectsProjectIDConversations(
        int $projectID,
        GetProjectsProjectIDConversationsQuery|null $query = null,
    ): self {
        ($this->persister)('getProjectsProjectIDConversations', ...func_get_args());

        return $this;
    }

    /** @see StatisticsClient::getProjectsProjectIDLogs() */
    public function getProjectsProjectIDLogs(
        int $projectID,
        GetProjectsProjectIDLogsQuery|null $query = null,
    ): self {
        ($this->persister)('getProjectsProjectIDLogs', ...func_get_args());

        return $this;
    }

    /** @see StatisticsClient::getProjectsProjectIDLogsConversationChatId() */
    public function getProjectsProjectIDLogsConversationChatId(
        int $projectID,
        string $chatId,
    ): self {
        ($this->persister)('getProjectsProjectIDLogsConversationChatId', ...func_get_args());

        return $this;
    }

    /** @see StatisticsClient::getProjectsProjectIDTokensDaily() */
    public function getProjectsProjectIDTokensDaily(
        int $projectID,
        GetProjectsProjectIDTokensDailyQuery|null $query = null,
    ): self {
        ($this->persister)('getProjectsProjectIDTokensDaily', ...func_get_args());

        return $this;
    }

    /** @see StatisticsClient::getStatisticsDailyTokens() */
    public function getStatisticsDailyTokens(
        GetStatisticsDailyTokensQuery|null $query = null,
    ): self {
        ($this->persister)('getStatisticsDailyTokens', ...func_get_args());

        return $this;
    }

    /** @see StatisticsClient::getStatisticsSummary() */
    public function getStatisticsSummary(): self
    {
        ($this->persister)('getStatisticsSummary', ...func_get_args());

        return $this;
    }

    /** @see StatisticsClient::getStatisticsTopLlms() */
    public function getStatisticsTopLlms(
        GetStatisticsTopLlmsQuery|null $query = null,
    ): self {
        ($this->persister)('getStatisticsTopLlms', ...func_get_args());

        return $this;
    }

    /** @see StatisticsClient::getStatisticsTopProjects() */
    public function getStatisticsTopProjects(
        GetStatisticsTopProjectsQuery|null $query = null,
    ): self {
        ($this->persister)('getStatisticsTopProjects', ...func_get_args());

        return $this;
    }

    /** @see StatisticsClient::getStatisticsUsers() */
    public function getStatisticsUsers(
        GetStatisticsUsersQuery|null $query = null,
    ): self {
        ($this->persister)('getStatisticsUsers', ...func_get_args());

        return $this;
    }

    /** @see StatisticsClient::getStatisticsUsers() */
    public function getStatisticsUsers(
        GetStatisticsUsersQuery|null $query = null,
    ): self {
        ($this->persister)('getStatisticsUsers', ...func_get_args());

        return $this;
    }

    /** @see StatisticsClient::getStatisticsUsersUserID() */
    public function getStatisticsUsersUserID(
        int $userID,
        GetStatisticsUsersUserIDQuery|null $query = null,
    ): self {
        ($this->persister)('getStatisticsUsersUserID', ...func_get_args());

        return $this;
    }

    /** @see StatisticsClient::getStatisticsUsersUserID() */
    public function getStatisticsUsersUserID(
        int $userID,
        GetStatisticsUsersUserIDQuery|null $query = null,
    ): self {
        ($this->persister)('getStatisticsUsersUserID', ...func_get_args());

        return $this;
    }

    /** @see StatisticsClient::getTeamsTeamIdAnalytics() */
    public function getTeamsTeamIdAnalytics(
        int $teamId,
        GetTeamsTeamIdAnalyticsQuery|null $query = null,
    ): self {
        ($this->persister)('getTeamsTeamIdAnalytics', ...func_get_args());

        return $this;
    }
}
