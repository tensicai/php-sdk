<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\TensicAI\SDK\Model\ChunkingAnalyticsResponse;
use TeamBlue\TensicAI\SDK\Model\ConversationAnalyticsResponse;
use TeamBlue\TensicAI\SDK\Model\ConversationContextResponse;
use TeamBlue\TensicAI\SDK\Model\ConversationListResponse;
use TeamBlue\TensicAI\SDK\Model\ConversationReplayResponse;
use TeamBlue\TensicAI\SDK\Model\FlushLogsResponse;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsChunkingQuery;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsConversationChatIDContextQuery;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsConversationsQuery;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsHealthQuery;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsSourcesQuery;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDAnalyticsToolsQuery;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDConversationsQuery;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDLogsQuery;
use TeamBlue\TensicAI\SDK\Model\GetProjectsProjectIDTokensDailyQuery;
use TeamBlue\TensicAI\SDK\Model\GetStatisticsDailyTokensQuery;
use TeamBlue\TensicAI\SDK\Model\GetStatisticsTopLlmsQuery;
use TeamBlue\TensicAI\SDK\Model\GetStatisticsTopProjectsQuery;
use TeamBlue\TensicAI\SDK\Model\GetStatisticsUsersQuery;
use TeamBlue\TensicAI\SDK\Model\GetStatisticsUsersUserIDQuery;
use TeamBlue\TensicAI\SDK\Model\GetTeamsTeamIdAnalyticsQuery;
use TeamBlue\TensicAI\SDK\Model\ProjectHealthResponse;
use TeamBlue\TensicAI\SDK\Model\ProjectLogsResponse;
use TeamBlue\TensicAI\SDK\Model\SourceAnalyticsResponse;
use TeamBlue\TensicAI\SDK\Model\StatisticsDailyTokensResponse;
use TeamBlue\TensicAI\SDK\Model\StatisticsSummaryResponse;
use TeamBlue\TensicAI\SDK\Model\StatisticsTopLLMsResponse;
use TeamBlue\TensicAI\SDK\Model\StatisticsTopProjectsResponse;
use TeamBlue\TensicAI\SDK\Model\StatisticsTopUsersResponse;
use TeamBlue\TensicAI\SDK\Model\TokenDailyResponse;
use TeamBlue\TensicAI\SDK\Model\ToolAnalyticsResponse;
use TeamBlue\TensicAI\SDK\Model\UserActivityResponse;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface StatisticsClientInterface
{
    public const string TAG = 'Statistics';

    /**
     * Flush Project Logs
     *
     * Delete ALL inference logs for one project, plus their retrieval telemetry. Irreversible, and every per-project statistic derives from these rows — analytics, token charts, cost history and the rate-limit window all reset. Member-only (the project dep 404s outsiders), blocked for restricted users, and read-only API keys never reach here (DELETE is not a permitted method for them). Billing note: day-buckets already reported to the manager are never lowered there — the same contract as retention deletes.  No table holds a foreign key onto output rows (retrieval events key on the PROJECT), so the two bulk deletes below cannot orphan anything; the memory-bank watermark may end up past the max id, which simply means nothing left to re-index.
     */
    public function deleteProjectsProjectIDLogs(
        int $projectID,
    ): FlushLogsResponse;

    /**
     * Get Chunking Analytics
     *
     * Analyze chunk size distributions and retrieval patterns to recommend optimal chunk sizes.
     */
    public function getProjectsProjectIDAnalyticsChunking(
        int $projectID,
        GetProjectsProjectIDAnalyticsChunkingQuery|null $query = null,
    ): ChunkingAnalyticsResponse;

    /**
     * Get Conversation Context
     *
     * Set one conversation against its recent peers, so a number can be read.  \&quot;4.2 seconds\&quot; says nothing on its own; \&quot;slower than 87% of the last 30 days\&quot; is the same fact made actionable. The percentiles are computed ACROSS CONVERSATIONS — rows are grouped by chat_id and each conversation reduced to one total first — because a per-ROW percentile answers a question about turns while the page is about a conversation, and a 40-turn session would drag the distribution forty times.  &#x60;this_value&#x60; comes from the conversation&#39;s WHOLE history while the distribution comes from the window, so opening a conversation older than &#x60;days&#x60; still shows its own totals and ranks them against recent traffic instead of answering null.  Rows with no chat_id are excluded (see &#x60;_HAS_CHAT_ID&#x60;).
     */
    public function getProjectsProjectIDAnalyticsConversationChatIDContext(
        int $projectID,
        string $chatID,
        GetProjectsProjectIDAnalyticsConversationChatIDContextQuery|null $query = null,
    ): ConversationContextResponse;

    /**
     * Get Conversation Analytics
     *
     * Get conversation analytics for a project.
     */
    public function getProjectsProjectIDAnalyticsConversations(
        int $projectID,
        GetProjectsProjectIDAnalyticsConversationsQuery|null $query = null,
    ): ConversationAnalyticsResponse;

    /**
     * Get Project Health
     *
     * Recent-window totals plus a daily series — the strip above the log table.  The window is DAY-ALIGNED in UTC and closes at the end of today, unlike the rolling &#x60;now - days&#x60; the sibling analytics endpoints use: the series is a chart with one point per calendar day, and a rolling window would make the oldest point a partial day that reads as a traffic collapse. Every day in the range is emitted, oldest first, zero-filled — a gap in a time series is a hole in the chart, not a day with no data.  &#x60;errors&#x60; counts status&#x3D;&#39;error&#39; only. A budget or rate-limit reject is the platform refusing the call and a user-cancelled run is a deliberate act; neither is the project failing, and guard blocks get their own counter.  TWO DENOMINATORS, both stated. Runs, errors, guard blocks, cost and tokens are exact GROUP BY totals over the whole window. The percentiles are not — they come off a bounded scan of the newest timed runs, so on a busy project they describe a shorter, more recent slice than everything beside them. &#x60;latency_sample_size&#x60; and &#x60;latency_truncated&#x60; say which, because a p95 that quietly covers the last four hours of a 90-day window is worse than no p95.
     */
    public function getProjectsProjectIDAnalyticsHealth(
        int $projectID,
        GetProjectsProjectIDAnalyticsHealthQuery|null $query = null,
    ): ProjectHealthResponse;

    /**
     * Get Source Analytics
     *
     * Get per-source retrieval analytics for a RAG project.
     */
    public function getProjectsProjectIDAnalyticsSources(
        int $projectID,
        GetProjectsProjectIDAnalyticsSourcesQuery|null $query = null,
    ): SourceAnalyticsResponse;

    /**
     * Get Tool Analytics
     *
     * Per-tool call volume, failure rate and latency for an agent project.  Aggregated over the &#x60;tool_trace&#x60; written on each inference-log row, which every one of the five agent loops fills with the same &#x60;{tool, args, latency_ms, status, error, output}&#x60; shape — so the numbers are comparable across harnesses, and a project that switches &#x60;agent_loop&#x60; keeps one continuous history.
     */
    public function getProjectsProjectIDAnalyticsTools(
        int $projectID,
        GetProjectsProjectIDAnalyticsToolsQuery|null $query = null,
    ): ToolAnalyticsResponse;

    /**
     * List Project Conversations
     *
     * The conversation-grain front door: one row per chat_id, newest activity first.  Rows with a NULL (or empty) chat_id are EXCLUDED — openai-compat calls and direct access are single shots that never belonged to a session, and listing each of them as a one-turn \&quot;conversation\&quot; would bury the real ones.  &#x60;status&#x60; and &#x60;q&#x60; select CONVERSATIONS, not turns: a conversation qualifies when any of its turns matches, and the totals shown are then the whole conversation&#39;s. Filtering the rows instead would report a 12-turn session as costing what its single failed turn did. Given both, each is resolved independently and the results intersected — the failing turn and the turn that mentions the search term need not be the same turn.  &#x60;duration_ms&#x60; is wall-clock between the first and last logged turn, so a single-turn conversation spans 0 — its time cost is latency, not duration. &#x60;failures&#x60; counts every turn that did not end &#39;success&#39; (a guard block and a budget reject are both things that happened to this conversation), which is a wider net than /analytics/health&#39;s &#x60;errors&#x60; on purpose.  THE SCAN IS BOUNDED AND SAYS SO. The fold runs over the newest &#x60;_CONVERSATION_SCAN_MAX_ROWS&#x60; turns of the window, so on a busy project the list is a view of recent activity rather than of everything: &#x60;truncated&#x60; and &#x60;scanned_rows&#x60; are how the caller finds that out instead of assuming. Note that &#x60;truncated&#x60; is NOT a \&quot;there is a next page\&quot; flag — the missing conversations are not on any page, they were never read.
     */
    public function getProjectsProjectIDConversations(
        int $projectID,
        GetProjectsProjectIDConversationsQuery|null $query = null,
    ): ConversationListResponse;

    /**
     * Get Token Consumption
     *
     * Get inference logs for a project, newest first.  Every filter is applied in SQL, over the whole project&#39;s history, before paging — which is the point of them existing here. &#x60;status&#x60; and &#x60;has_error&#x60; are deliberately independent: a budget or rate-limit reject records its own status AND an explanatory message, so \&quot;rows that explain themselves\&quot; and \&quot;rows that failed\&quot; are different questions.  Rows are projected through &#x60;ProjectLogEntry&#x60; WITHOUT the &#x60;image&#x60; bytes (see &#x60;has_image&#x60;); the conversation replay endpoint is where the picture lives.
     */
    public function getProjectsProjectIDLogs(
        int $projectID,
        GetProjectsProjectIDLogsQuery|null $query = null,
    ): ProjectLogsResponse;

    /**
     * Get Conversation Replay
     *
     * Return every OutputDatabase row for a chat_id (capped at 500 turns).
     */
    public function getProjectsProjectIDLogsConversationChatId(
        int $projectID,
        string $chatId,
    ): ConversationReplayResponse;

    /**
     * Get Monthly Token Consumption
     *
     * Get daily token consumption for a project.
     */
    public function getProjectsProjectIDTokensDaily(
        int $projectID,
        GetProjectsProjectIDTokensDailyQuery|null $query = null,
    ): TokenDailyResponse;

    /**
     * Get Daily Tokens
     *
     * Get daily token consumption over a time period.
     */
    public function getStatisticsDailyTokens(
        GetStatisticsDailyTokensQuery|null $query = null,
    ): StatisticsDailyTokensResponse;

    /**
     * Get Statistics Summary
     *
     * Get platform-wide usage summary (tokens, costs, counts).
     */
    public function getStatisticsSummary(): StatisticsSummaryResponse;

    /**
     * Get Top Llms
     *
     * Get LLMs ranked by total token consumption.
     */
    public function getStatisticsTopLlms(
        GetStatisticsTopLlmsQuery|null $query = null,
    ): StatisticsTopLLMsResponse;

    /**
     * Get Top Projects By Tokens
     *
     * Get projects ranked by total token consumption.
     */
    public function getStatisticsTopProjects(
        GetStatisticsTopProjectsQuery|null $query = null,
    ): StatisticsTopProjectsResponse;

    /**
     * Get Top Users
     *
     * Get users ranked by token consumption (admin only).
     */
    public function getStatisticsUsers(
        GetStatisticsUsersQuery|null $query = null,
    ): StatisticsTopUsersResponse;

    /**
     * Get Top Users
     *
     * Get users ranked by token consumption (admin only).
     */
    public function getStatisticsUsers(
        GetStatisticsUsersQuery|null $query = null,
    ): StatisticsTopUsersResponse;

    /**
     * Get User Activity
     *
     * Get detailed activity for a specific user.
     */
    public function getStatisticsUsersUserID(
        int $userID,
        GetStatisticsUsersUserIDQuery|null $query = null,
    ): UserActivityResponse;

    /**
     * Get User Activity
     *
     * Get detailed activity for a specific user.
     */
    public function getStatisticsUsersUserID(
        int $userID,
        GetStatisticsUsersUserIDQuery|null $query = null,
    ): UserActivityResponse;

    /**
     * Get Team Analytics
     *
     * Aggregated usage/cost analytics for a whole team (team admins + platform admins).  Scope mirrors get_team_spending/get_team_transactions: project-scoped rows for the team&#39;s projects PLUS direct-access rows (project_id NULL, team_id set), so direct-access API usage is fully represented. Costs are pre-computed on each OutputDatabase row, so everything is plain SUM/GROUP BY over the selected month.
     */
    public function getTeamsTeamIdAnalytics(
        int $teamId,
        GetTeamsTeamIdAnalyticsQuery|null $query = null,
    ): mixed;
}
