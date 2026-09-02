<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\ToolAnalyticsResponseDefault;

final class ToolAnalyticsResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ToolAnalyticsResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $windowDays;
    /** @var array<ToolUsageStat> */
    private array $tools;

    public function windowDays(): int
    {
        return $this->windowDays;
    }

    /** @return array<ToolUsageStat> */
    public function tools(): array
    {
        return $this->tools;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'tools' => ToolUsageStat::class,
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
            'window_days' => 'windowDays',
            'tools' => 'tools',
        ];
    }

// phpcs:enable
}
