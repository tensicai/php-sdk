<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\SourceAnalyticsResponseDefault;

final class SourceAnalyticsResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use SourceAnalyticsResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    /** @var array<SourceRetrievalStat> */
    private array $sources;
    /** @var array<string> */
    private array $neverRetrieved;

    /** @return array<SourceRetrievalStat> */
    public function sources(): array
    {
        return $this->sources;
    }

    /** @return array<string> */
    public function neverRetrieved(): array
    {
        return $this->neverRetrieved;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'sources' => SourceRetrievalStat::class,
            'neverRetrieved' => 'string',
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
            'sources' => 'sources',
            'never_retrieved' => 'neverRetrieved',
        ];
    }

// phpcs:enable
}
