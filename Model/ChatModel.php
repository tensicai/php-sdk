<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ChatModelDefault;

final class ChatModel implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ChatModelDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $question;
    private bool|null $stream = null;
    /** @var array<mixed>|null */
    private array|null $context = null;
    private string|null $id = null;
    private string|null $image = null;
    /** @var array<FileAttachment>|null */
    private array|null $files = null;
    private string|null $system = null;
    private bool|null $llmRerank = null;
    /** @var array<string>|null */
    private array|null $tables = null;
    private string|null $negative = null;
    private bool|null $lite = false;
    private bool|null $eval = false;
    private int|null $k = null;
    private float|null $score = null;

    public function question(): string
    {
        return $this->question;
    }

    public function stream(): bool|null
    {
        return $this->stream;
    }

    /** @return array<mixed>|null */
    public function context(): array|null
    {
        return $this->context;
    }

    public function id(): string|null
    {
        return $this->id;
    }

    public function image(): string|null
    {
        return $this->image;
    }

    /** @return array<FileAttachment>|null */
    public function files(): array|null
    {
        return $this->files;
    }

    public function system(): string|null
    {
        return $this->system;
    }

    public function llmRerank(): bool|null
    {
        return $this->llmRerank;
    }

    /** @return array<string>|null */
    public function tables(): array|null
    {
        return $this->tables;
    }

    public function negative(): string|null
    {
        return $this->negative;
    }

    public function lite(): bool|null
    {
        return $this->lite;
    }

    public function eval(): bool|null
    {
        return $this->eval;
    }

    public function k(): int|null
    {
        return $this->k;
    }

    public function score(): float|null
    {
        return $this->score;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'context' => 'mixed',
            'files' => FileAttachment::class,
            'tables' => 'string',
        ];
    }

    /** @return array<string, int> */
    private static function maxValues(): array
    {
        return [
            'k' => 25,
            'score' => 1.0,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'question' => 'question',
            'stream' => 'stream',
            'context' => 'context',
            'id' => 'id',
            'image' => 'image',
            'files' => 'files',
            'system' => 'system',
            'llm_rerank' => 'llmRerank',
            'tables' => 'tables',
            'negative' => 'negative',
            'lite' => 'lite',
            'eval' => 'eval',
            'k' => 'k',
            'score' => 'score',
        ];
    }

// phpcs:enable
}
