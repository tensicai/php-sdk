<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\ValueObjects\Implementation\String\DateTimeValue;
use TensicAI\SDK\Default\ProjectLogEntryDefault;

final class ProjectLogEntry implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ProjectLogEntryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private string|null $chatId = null;
    private DateTimeValue|null $date = null;
    private string|null $llm = null;
    private string|null $question = null;
    private string|null $answer = null;
    private int|null $inputTokens = null;
    private int|null $outputTokens = null;
    private float|null $inputCost = null;
    private float|null $outputCost = null;
    private int|null $latencyMs = null;
    private string|null $status = null;
    private string|null $error = null;
    private string|null $image = null;
    private bool|null $hasImage = false;
    private string|null $systemPrompt = null;
    private mixed $context = null;
    private mixed $attachments = null;
    private mixed $toolTrace = null;
    private mixed $artifacts = null;
    private mixed $turnMeta = null;
    private string|null $agentLoop = null;
    private string|null $stopReason = null;
    private string|null $tokenAccuracy = null;

    public function id(): int
    {
        return $this->id;
    }

    public function chatId(): string|null
    {
        return $this->chatId;
    }

    public function date(): DateTimeValue|null
    {
        return $this->date;
    }

    public function llm(): string|null
    {
        return $this->llm;
    }

    public function question(): string|null
    {
        return $this->question;
    }

    public function answer(): string|null
    {
        return $this->answer;
    }

    public function inputTokens(): int|null
    {
        return $this->inputTokens;
    }

    public function outputTokens(): int|null
    {
        return $this->outputTokens;
    }

    public function inputCost(): float|null
    {
        return $this->inputCost;
    }

    public function outputCost(): float|null
    {
        return $this->outputCost;
    }

    public function latencyMs(): int|null
    {
        return $this->latencyMs;
    }

    public function status(): string|null
    {
        return $this->status;
    }

    public function error(): string|null
    {
        return $this->error;
    }

    public function image(): string|null
    {
        return $this->image;
    }

    public function hasImage(): bool|null
    {
        return $this->hasImage;
    }

    public function systemPrompt(): string|null
    {
        return $this->systemPrompt;
    }

    public function context(): mixed
    {
        return $this->context;
    }

    public function attachments(): mixed
    {
        return $this->attachments;
    }

    public function toolTrace(): mixed
    {
        return $this->toolTrace;
    }

    public function artifacts(): mixed
    {
        return $this->artifacts;
    }

    public function turnMeta(): mixed
    {
        return $this->turnMeta;
    }

    public function agentLoop(): string|null
    {
        return $this->agentLoop;
    }

    public function stopReason(): string|null
    {
        return $this->stopReason;
    }

    public function tokenAccuracy(): string|null
    {
        return $this->tokenAccuracy;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [];
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
            'id' => 'id',
            'chat_id' => 'chatId',
            'date' => 'date',
            'llm' => 'llm',
            'question' => 'question',
            'answer' => 'answer',
            'input_tokens' => 'inputTokens',
            'output_tokens' => 'outputTokens',
            'input_cost' => 'inputCost',
            'output_cost' => 'outputCost',
            'latency_ms' => 'latencyMs',
            'status' => 'status',
            'error' => 'error',
            'image' => 'image',
            'has_image' => 'hasImage',
            'system_prompt' => 'systemPrompt',
            'context' => 'context',
            'attachments' => 'attachments',
            'tool_trace' => 'toolTrace',
            'artifacts' => 'artifacts',
            'turn_meta' => 'turnMeta',
            'agent_loop' => 'agentLoop',
            'stop_reason' => 'stopReason',
            'token_accuracy' => 'tokenAccuracy',
        ];
    }

// phpcs:enable
}
