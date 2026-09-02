<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\OpenAICompletionRequestDefault;

final class OpenAICompletionRequest implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use OpenAICompletionRequestDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $model;
    private Prompt $prompt;
    private int|null $maxTokens = null;
    private float|null $temperature = null;
    private float|null $topP = null;
    private Stop|null $stop = null;
    private bool|null $stream = false;
    private string|null $user = null;

    public function model(): string
    {
        return $this->model;
    }

    public function prompt(): Prompt
    {
        return $this->prompt;
    }

    public function maxTokens(): int|null
    {
        return $this->maxTokens;
    }

    public function temperature(): float|null
    {
        return $this->temperature;
    }

    public function topP(): float|null
    {
        return $this->topP;
    }

    public function stop(): Stop|null
    {
        return $this->stop;
    }

    public function stream(): bool|null
    {
        return $this->stream;
    }

    public function user(): string|null
    {
        return $this->user;
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
            'model' => 'model',
            'prompt' => 'prompt',
            'max_tokens' => 'maxTokens',
            'temperature' => 'temperature',
            'top_p' => 'topP',
            'stop' => 'stop',
            'stream' => 'stream',
            'user' => 'user',
        ];
    }

// phpcs:enable
}
