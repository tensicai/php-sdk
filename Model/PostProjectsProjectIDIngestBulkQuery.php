<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\PostProjectsProjectIDIngestBulkQueryDefault;

final class PostProjectsProjectIDIngestBulkQuery implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use PostProjectsProjectIDIngestBulkQueryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $method = 'auto';
    private int|null $chunks = 256;
    private string|null $splitter = 'sentence';

    public function method(): string|null
    {
        return $this->method;
    }

    public function chunks(): int|null
    {
        return $this->chunks;
    }

    public function splitter(): string|null
    {
        return $this->splitter;
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
            'method' => 'method',
            'chunks' => 'chunks',
            'splitter' => 'splitter',
        ];
    }

// phpcs:enable
}
