<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ConversationSummaryDefault;
use TeamBlue\ValueObjects\Implementation\String\DateTimeValue;

final class ConversationSummary implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ConversationSummaryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $chatId;
    private DateTimeValue|null $startedAt = null;
    private DateTimeValue|null $endedAt = null;
    private int|null $turns = 0;
    private int|null $durationMs = 0;
    private int|null $inputTokens = 0;
    private int|null $outputTokens = 0;
    private float|null $cost = 0.0;
    private int|null $toolCalls = 0;
    private int|null $failures = 0;
    /** @var array<string>|null */
    private array|null $statuses = null;
    private string|null $agentLoop = null;
    private string|null $llm = null;
    private string|null $lastQuestion = null;

    public function chatId(): string
    {
        return $this->chatId;
    }

    public function startedAt(): DateTimeValue|null
    {
        return $this->startedAt;
    }

    public function endedAt(): DateTimeValue|null
    {
        return $this->endedAt;
    }

    public function turns(): int|null
    {
        return $this->turns;
    }

    public function durationMs(): int|null
    {
        return $this->durationMs;
    }

    public function inputTokens(): int|null
    {
        return $this->inputTokens;
    }

    public function outputTokens(): int|null
    {
        return $this->outputTokens;
    }

    public function cost(): float|null
    {
        return $this->cost;
    }

    public function toolCalls(): int|null
    {
        return $this->toolCalls;
    }

    public function failures(): int|null
    {
        return $this->failures;
    }

    /** @return array<string>|null */
    public function statuses(): array|null
    {
        return $this->statuses;
    }

    public function agentLoop(): string|null
    {
        return $this->agentLoop;
    }

    public function llm(): string|null
    {
        return $this->llm;
    }

    public function lastQuestion(): string|null
    {
        return $this->lastQuestion;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return ['statuses' => 'string'];
    }

    /** @return array<string, int> */
    private static function maxValues(): array
    {
        return [];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'chat_id' => 'chatId',
            'started_at' => 'startedAt',
            'ended_at' => 'endedAt',
            'turns' => 'turns',
            'duration_ms' => 'durationMs',
            'input_tokens' => 'inputTokens',
            'output_tokens' => 'outputTokens',
            'cost' => 'cost',
            'tool_calls' => 'toolCalls',
            'failures' => 'failures',
            'statuses' => 'statuses',
            'agent_loop' => 'agentLoop',
            'llm' => 'llm',
            'last_question' => 'lastQuestion',
        ];
    }

// phpcs:enable
}
