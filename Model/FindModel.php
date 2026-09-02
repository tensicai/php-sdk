<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\FindModelDefault;

final class FindModel implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use FindModelDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $source = null;
    private string|null $text = null;
    private float|null $score = null;
    private int|null $k = null;

    public function source(): string|null
    {
        return $this->source;
    }

    public function text(): string|null
    {
        return $this->text;
    }

    public function score(): float|null
    {
        return $this->score;
    }

    public function k(): int|null
    {
        return $this->k;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [];
    }

    /** @return array<string, int> */
    private static function maxValues(): array
    {
        return ['k' => 100];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'source' => 'source',
            'text' => 'text',
            'score' => 'score',
            'k' => 'k',
        ];
    }

// phpcs:enable
}
