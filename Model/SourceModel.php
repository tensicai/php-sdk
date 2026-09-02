<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\SourceModelDefault;

final class SourceModel implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use SourceModelDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $source;
    private string $keywords;
    private string $text;
    private float $score;
    private string $id;

    public function source(): string
    {
        return $this->source;
    }

    public function keywords(): string
    {
        return $this->keywords;
    }

    public function text(): string
    {
        return $this->text;
    }

    public function score(): float
    {
        return $this->score;
    }

    public function id(): string
    {
        return $this->id;
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
            'source' => 'source',
            'keywords' => 'keywords',
            'text' => 'text',
            'score' => 'score',
            'id' => 'id',
        ];
    }

// phpcs:enable
}
