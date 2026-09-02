<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\OpenAIChatCompletionResponseDefault;

final class OpenAIChatCompletionResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use OpenAIChatCompletionResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $id;
    private string|null $object = 'chat.completion';
    private int $created;
    private string $model;
    /** @var array<OpenAIChatCompletionChoice> */
    private array $choices;
    private OpenAIChatCompletionUsage $usage;
    private string|null $systemFingerprint = null;

    public function id(): string
    {
        return $this->id;
    }

    public function object(): string|null
    {
        return $this->object;
    }

    public function created(): int
    {
        return $this->created;
    }

    public function model(): string
    {
        return $this->model;
    }

    /** @return array<OpenAIChatCompletionChoice> */
    public function choices(): array
    {
        return $this->choices;
    }

    public function usage(): OpenAIChatCompletionUsage
    {
        return $this->usage;
    }

    public function systemFingerprint(): string|null
    {
        return $this->systemFingerprint;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'choices' => OpenAIChatCompletionChoice::class,
        ];
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
            'object' => 'object',
            'created' => 'created',
            'model' => 'model',
            'choices' => 'choices',
            'usage' => 'usage',
            'system_fingerprint' => 'systemFingerprint',
        ];
    }

// phpcs:enable
}
