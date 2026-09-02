<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\BulkIngestEnqueueResponseDefault;

final class BulkIngestEnqueueResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use BulkIngestEnqueueResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    /** @var array<int> */
    private array $queued;
    private int $count;

    /** @return array<int> */
    public function queued(): array
    {
        return $this->queued;
    }

    public function count(): int
    {
        return $this->count;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return ['queued' => 'int'];
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
            'queued' => 'queued',
            'count' => 'count',
        ];
    }

// phpcs:enable
}
