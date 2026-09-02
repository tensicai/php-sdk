<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\Options7Default;

final class Options7 implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use Options7Default;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private bool|null $logging = true;
    private bool|null $redactInferenceLogs = false;
    private int|null $logRetentionDays = null;
    private bool|null $llmRerank = null;
    private string|null $rerankLlm = null;
    private string|null $tables = null;
    private string|null $tools = null;
    private float|null $score = 0.0;
    private int|null $k = 4;
    private int|null $maxIterations = 10;
    private int|null $toolTimeout = null;
    private int|null $runTimeout = null;
    private bool|null $autoPlan = false;
    private string|null $connection = null;
    /** @var array<MCPServer>|null */
    private array|null $mcpServers = null;
    private string|null $telegramToken = null;
    private int|null $telegramDefaultChatId = null;
    private string|null $telegramAllowedChatIds = null;
    private string|null $slackBotToken = null;
    private string|null $slackAppToken = null;
    private string|null $slackRespondTo = null;
    private string|null $slackDefaultChannel = null;
    private string|null $slackAllowedUserIds = null;
    private string|null $slackAllowedChannelIds = null;
    private string|null $slackTeamId = null;
    private string|null $slackBotUserId = null;
    private string|null $slackHealth = null;
    private string|null $whatsappPhoneNumberId = null;
    private string|null $whatsappAccessToken = null;
    private string|null $whatsappAppSecret = null;
    private string|null $whatsappVerifyToken = null;
    private string|null $whatsappDefaultTo = null;
    private string|null $whatsappAllowedPhoneNumbers = null;
    private string|null $twilioAccountSid = null;
    private string|null $twilioAuthToken = null;
    private string|null $twilioFromNumber = null;
    private string|null $smsDefaultTo = null;
    private string|null $webhookUrl = null;
    private string|null $webhookSecret = null;
    private string|null $webhookEvents = null;
    private string|null $moderationBlocklist = null;
    private bool|null $moderationRedactPii = null;
    /** @var array<mixed>|null */
    private array|null $blocklyWorkspace = null;
    /** @var array<mixed>|null */
    private array|null $routerFlow = null;
    private int|null $rateLimit = null;
    private float|null $budget = null;
    private string|null $guardOutput = null;
    private string|null $guardMode = null;
    private string|null $evalLlm = null;
    private string|null $searchKnowledgeProject = null;
    /** @var array<SyncSource>|null */
    private array|null $syncSources = null;
    private bool|null $syncEnabled = null;
    private string|null $agentMode = null;
    private string|null $agentLoop = null;
    private bool|null $memoryBankEnabled = false;
    private int|null $memoryBankMaxTokens = 2000;
    private bool|null $memorySearchEnabled = false;

    public function logging(): bool|null
    {
        return $this->logging;
    }

    public function redactInferenceLogs(): bool|null
    {
        return $this->redactInferenceLogs;
    }

    public function logRetentionDays(): int|null
    {
        return $this->logRetentionDays;
    }

    public function llmRerank(): bool|null
    {
        return $this->llmRerank;
    }

    public function rerankLlm(): string|null
    {
        return $this->rerankLlm;
    }

    public function tables(): string|null
    {
        return $this->tables;
    }

    public function tools(): string|null
    {
        return $this->tools;
    }

    public function score(): float|null
    {
        return $this->score;
    }

    public function k(): int|null
    {
        return $this->k;
    }

    public function maxIterations(): int|null
    {
        return $this->maxIterations;
    }

    public function toolTimeout(): int|null
    {
        return $this->toolTimeout;
    }

    public function runTimeout(): int|null
    {
        return $this->runTimeout;
    }

    public function autoPlan(): bool|null
    {
        return $this->autoPlan;
    }

    public function connection(): string|null
    {
        return $this->connection;
    }

    /** @return array<MCPServer>|null */
    public function mcpServers(): array|null
    {
        return $this->mcpServers;
    }

    public function telegramToken(): string|null
    {
        return $this->telegramToken;
    }

    public function telegramDefaultChatId(): int|null
    {
        return $this->telegramDefaultChatId;
    }

    public function telegramAllowedChatIds(): string|null
    {
        return $this->telegramAllowedChatIds;
    }

    public function slackBotToken(): string|null
    {
        return $this->slackBotToken;
    }

    public function slackAppToken(): string|null
    {
        return $this->slackAppToken;
    }

    public function slackRespondTo(): string|null
    {
        return $this->slackRespondTo;
    }

    public function slackDefaultChannel(): string|null
    {
        return $this->slackDefaultChannel;
    }

    public function slackAllowedUserIds(): string|null
    {
        return $this->slackAllowedUserIds;
    }

    public function slackAllowedChannelIds(): string|null
    {
        return $this->slackAllowedChannelIds;
    }

    public function slackTeamId(): string|null
    {
        return $this->slackTeamId;
    }

    public function slackBotUserId(): string|null
    {
        return $this->slackBotUserId;
    }

    public function slackHealth(): string|null
    {
        return $this->slackHealth;
    }

    public function whatsappPhoneNumberId(): string|null
    {
        return $this->whatsappPhoneNumberId;
    }

    public function whatsappAccessToken(): string|null
    {
        return $this->whatsappAccessToken;
    }

    public function whatsappAppSecret(): string|null
    {
        return $this->whatsappAppSecret;
    }

    public function whatsappVerifyToken(): string|null
    {
        return $this->whatsappVerifyToken;
    }

    public function whatsappDefaultTo(): string|null
    {
        return $this->whatsappDefaultTo;
    }

    public function whatsappAllowedPhoneNumbers(): string|null
    {
        return $this->whatsappAllowedPhoneNumbers;
    }

    public function twilioAccountSid(): string|null
    {
        return $this->twilioAccountSid;
    }

    public function twilioAuthToken(): string|null
    {
        return $this->twilioAuthToken;
    }

    public function twilioFromNumber(): string|null
    {
        return $this->twilioFromNumber;
    }

    public function smsDefaultTo(): string|null
    {
        return $this->smsDefaultTo;
    }

    public function webhookUrl(): string|null
    {
        return $this->webhookUrl;
    }

    public function webhookSecret(): string|null
    {
        return $this->webhookSecret;
    }

    public function webhookEvents(): string|null
    {
        return $this->webhookEvents;
    }

    public function moderationBlocklist(): string|null
    {
        return $this->moderationBlocklist;
    }

    public function moderationRedactPii(): bool|null
    {
        return $this->moderationRedactPii;
    }

    /** @return array<mixed>|null */
    public function blocklyWorkspace(): array|null
    {
        return $this->blocklyWorkspace;
    }

    /** @return array<mixed>|null */
    public function routerFlow(): array|null
    {
        return $this->routerFlow;
    }

    public function rateLimit(): int|null
    {
        return $this->rateLimit;
    }

    public function budget(): float|null
    {
        return $this->budget;
    }

    public function guardOutput(): string|null
    {
        return $this->guardOutput;
    }

    public function guardMode(): string|null
    {
        return $this->guardMode;
    }

    public function evalLlm(): string|null
    {
        return $this->evalLlm;
    }

    public function searchKnowledgeProject(): string|null
    {
        return $this->searchKnowledgeProject;
    }

    /** @return array<SyncSource>|null */
    public function syncSources(): array|null
    {
        return $this->syncSources;
    }

    public function syncEnabled(): bool|null
    {
        return $this->syncEnabled;
    }

    public function agentMode(): string|null
    {
        return $this->agentMode;
    }

    public function agentLoop(): string|null
    {
        return $this->agentLoop;
    }

    public function memoryBankEnabled(): bool|null
    {
        return $this->memoryBankEnabled;
    }

    public function memoryBankMaxTokens(): int|null
    {
        return $this->memoryBankMaxTokens;
    }

    public function memorySearchEnabled(): bool|null
    {
        return $this->memorySearchEnabled;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'mcpServers' => MCPServer::class,
            'blocklyWorkspace' => 'mixed',
            'routerFlow' => 'mixed',
            'syncSources' => SyncSource::class,
        ];
    }

    /** @return array<string, int> */
    private static function maxValues(): array
    {
        return [
            'logRetentionDays' => 3650,
            'k' => 100,
            'maxIterations' => 100,
            'toolTimeout' => 3600,
            'runTimeout' => 7200,
            'rateLimit' => 10000,
            'memoryBankMaxTokens' => 10000,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'logging' => 'logging',
            'redact_inference_logs' => 'redactInferenceLogs',
            'log_retention_days' => 'logRetentionDays',
            'llm_rerank' => 'llmRerank',
            'rerank_llm' => 'rerankLlm',
            'tables' => 'tables',
            'tools' => 'tools',
            'score' => 'score',
            'k' => 'k',
            'max_iterations' => 'maxIterations',
            'tool_timeout' => 'toolTimeout',
            'run_timeout' => 'runTimeout',
            'auto_plan' => 'autoPlan',
            'connection' => 'connection',
            'mcp_servers' => 'mcpServers',
            'telegram_token' => 'telegramToken',
            'telegram_default_chat_id' => 'telegramDefaultChatId',
            'telegram_allowed_chat_ids' => 'telegramAllowedChatIds',
            'slack_bot_token' => 'slackBotToken',
            'slack_app_token' => 'slackAppToken',
            'slack_respond_to' => 'slackRespondTo',
            'slack_default_channel' => 'slackDefaultChannel',
            'slack_allowed_user_ids' => 'slackAllowedUserIds',
            'slack_allowed_channel_ids' => 'slackAllowedChannelIds',
            'slack_team_id' => 'slackTeamId',
            'slack_bot_user_id' => 'slackBotUserId',
            'slack_health' => 'slackHealth',
            'whatsapp_phone_number_id' => 'whatsappPhoneNumberId',
            'whatsapp_access_token' => 'whatsappAccessToken',
            'whatsapp_app_secret' => 'whatsappAppSecret',
            'whatsapp_verify_token' => 'whatsappVerifyToken',
            'whatsapp_default_to' => 'whatsappDefaultTo',
            'whatsapp_allowed_phone_numbers' => 'whatsappAllowedPhoneNumbers',
            'twilio_account_sid' => 'twilioAccountSid',
            'twilio_auth_token' => 'twilioAuthToken',
            'twilio_from_number' => 'twilioFromNumber',
            'sms_default_to' => 'smsDefaultTo',
            'webhook_url' => 'webhookUrl',
            'webhook_secret' => 'webhookSecret',
            'webhook_events' => 'webhookEvents',
            'moderation_blocklist' => 'moderationBlocklist',
            'moderation_redact_pii' => 'moderationRedactPii',
            'blockly_workspace' => 'blocklyWorkspace',
            'router_flow' => 'routerFlow',
            'rate_limit' => 'rateLimit',
            'budget' => 'budget',
            'guard_output' => 'guardOutput',
            'guard_mode' => 'guardMode',
            'eval_llm' => 'evalLlm',
            'search_knowledge_project' => 'searchKnowledgeProject',
            'sync_sources' => 'syncSources',
            'sync_enabled' => 'syncEnabled',
            'agent_mode' => 'agentMode',
            'agent_loop' => 'agentLoop',
            'memory_bank_enabled' => 'memoryBankEnabled',
            'memory_bank_max_tokens' => 'memoryBankMaxTokens',
            'memory_search_enabled' => 'memorySearchEnabled',
        ];
    }

// phpcs:enable
}
