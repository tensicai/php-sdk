<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\OpenAIChatCompletionRequestDefault;

final class OpenAIChatCompletionRequest implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use OpenAIChatCompletionRequestDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $model;
    /** @var array<OpenAIChatMessage> */
    private array $messages;
    private float|null $temperature = null;
    private int|null $maxTokens = null;
    private int|null $maxCompletionTokens = null;
    private bool|null $stream = false;
    private float|null $topP = null;
    private float|null $frequencyPenalty = null;
    private float|null $presencePenalty = null;
    private Stop|null $stop = null;
    private int|null $seed = null;
    /** @var array<mixed>|null */
    private array|null $responseFormat = null;
    private int|null $n = null;
    private bool|null $logprobs = null;
    private int|null $topLogprobs = null;
    /** @var array<OpenAIToolDef>|null */
    private array|null $tools = null;
    private ToolChoice|null $toolChoice = null;
    private bool|null $parallelToolCalls = null;
    /** @var array<mixed>|null */
    private array|null $streamOptions = null;
    /** @var array<mixed>|null */
    private array|null $logitBias = null;
    private string|null $reasoningEffort = null;
    /** @var array<mixed>|null */
    private array|null $functions = null;
    private FunctionCall|null $functionCall = null;
    private string|null $user = null;

    public function model(): string
    {
        return $this->model;
    }

    /** @return array<OpenAIChatMessage> */
    public function messages(): array
    {
        return $this->messages;
    }

    public function temperature(): float|null
    {
        return $this->temperature;
    }

    public function maxTokens(): int|null
    {
        return $this->maxTokens;
    }

    public function maxCompletionTokens(): int|null
    {
        return $this->maxCompletionTokens;
    }

    public function stream(): bool|null
    {
        return $this->stream;
    }

    public function topP(): float|null
    {
        return $this->topP;
    }

    public function frequencyPenalty(): float|null
    {
        return $this->frequencyPenalty;
    }

    public function presencePenalty(): float|null
    {
        return $this->presencePenalty;
    }

    public function stop(): Stop|null
    {
        return $this->stop;
    }

    public function seed(): int|null
    {
        return $this->seed;
    }

    /** @return array<mixed>|null */
    public function responseFormat(): array|null
    {
        return $this->responseFormat;
    }

    public function n(): int|null
    {
        return $this->n;
    }

    public function logprobs(): bool|null
    {
        return $this->logprobs;
    }

    public function topLogprobs(): int|null
    {
        return $this->topLogprobs;
    }

    /** @return array<OpenAIToolDef>|null */
    public function tools(): array|null
    {
        return $this->tools;
    }

    public function toolChoice(): ToolChoice|null
    {
        return $this->toolChoice;
    }

    public function parallelToolCalls(): bool|null
    {
        return $this->parallelToolCalls;
    }

    /** @return array<mixed>|null */
    public function streamOptions(): array|null
    {
        return $this->streamOptions;
    }

    /** @return array<mixed>|null */
    public function logitBias(): array|null
    {
        return $this->logitBias;
    }

    public function reasoningEffort(): string|null
    {
        return $this->reasoningEffort;
    }

    /** @return array<mixed>|null */
    public function functions(): array|null
    {
        return $this->functions;
    }

    public function functionCall(): FunctionCall|null
    {
        return $this->functionCall;
    }

    public function user(): string|null
    {
        return $this->user;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'messages' => OpenAIChatMessage::class,
            'responseFormat' => 'mixed',
            'tools' => OpenAIToolDef::class,
            'streamOptions' => 'mixed',
            'logitBias' => 'mixed',
        ];
    }

    /** @return array<string, int> */
    private static function maxValues(): array
    {
        return [
            'n' => 5,
            'topLogprobs' => 20,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'model' => 'model',
            'messages' => 'messages',
            'temperature' => 'temperature',
            'max_tokens' => 'maxTokens',
            'max_completion_tokens' => 'maxCompletionTokens',
            'stream' => 'stream',
            'top_p' => 'topP',
            'frequency_penalty' => 'frequencyPenalty',
            'presence_penalty' => 'presencePenalty',
            'stop' => 'stop',
            'seed' => 'seed',
            'response_format' => 'responseFormat',
            'n' => 'n',
            'logprobs' => 'logprobs',
            'top_logprobs' => 'topLogprobs',
            'tools' => 'tools',
            'tool_choice' => 'toolChoice',
            'parallel_tool_calls' => 'parallelToolCalls',
            'stream_options' => 'streamOptions',
            'logit_bias' => 'logitBias',
            'reasoning_effort' => 'reasoningEffort',
            'functions' => 'functions',
            'function_call' => 'functionCall',
            'user' => 'user',
        ];
    }

// phpcs:enable
}
