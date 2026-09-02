<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\ChunkSizeDistributionDefault;

final class ChunkSizeDistribution implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ChunkSizeDistributionDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    /** @var array<string> */
    private array $buckets;
    /** @var array<int> */
    private array $counts;

    /** @return array<string> */
    public function buckets(): array
    {
        return $this->buckets;
    }

    /** @return array<int> */
    public function counts(): array
    {
        return $this->counts;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'buckets' => 'string',
            'counts' => 'int',
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
            'buckets' => 'buckets',
            'counts' => 'counts',
        ];
    }

// phpcs:enable
}
