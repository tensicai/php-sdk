<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\IngestResponseDefault;

final class IngestResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use IngestResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $source;
    private int $documents;
    private int $chunks;

    public function source(): string
    {
        return $this->source;
    }

    public function documents(): int
    {
        return $this->documents;
    }

    public function chunks(): int
    {
        return $this->chunks;
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
            'documents' => 'documents',
            'chunks' => 'chunks',
        ];
    }

// phpcs:enable
}
