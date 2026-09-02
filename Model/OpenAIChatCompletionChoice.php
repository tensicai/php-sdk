<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\OpenAIChatCompletionChoiceDefault;

final class OpenAIChatCompletionChoice implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use OpenAIChatCompletionChoiceDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $index;
    private OpenAIChatMessage $message;
    private string|null $finishReason = null;
    /** @var array<mixed>|null */
    private array|null $logprobs = null;

    public function index(): int
    {
        return $this->index;
    }

    public function message(): OpenAIChatMessage
    {
        return $this->message;
    }

    public function finishReason(): string|null
    {
        return $this->finishReason;
    }

    /** @return array<mixed>|null */
    public function logprobs(): array|null
    {
        return $this->logprobs;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return ['logprobs' => 'mixed'];
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
            'index' => 'index',
            'message' => 'message',
            'finish_reason' => 'finishReason',
            'logprobs' => 'logprobs',
        ];
    }

// phpcs:enable
}
