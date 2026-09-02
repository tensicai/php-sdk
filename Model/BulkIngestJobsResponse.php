<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\BulkIngestJobsResponseDefault;

final class BulkIngestJobsResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use BulkIngestJobsResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    /** @var array<BulkIngestJob> */
    private array $jobs;

    /** @return array<BulkIngestJob> */
    public function jobs(): array
    {
        return $this->jobs;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'jobs' => BulkIngestJob::class,
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
        return ['jobs' => 'jobs'];
    }

// phpcs:enable
}
