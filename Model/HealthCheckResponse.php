<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\HealthCheckResponseDefault;

final class HealthCheckResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use HealthCheckResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $status;
    private string $checkedAt;
    /** @var array<ServiceHealth>|null */
    private array|null $services = [];

    public function status(): string
    {
        return $this->status;
    }

    public function checkedAt(): string
    {
        return $this->checkedAt;
    }

    /** @return array<ServiceHealth>|null */
    public function services(): array|null
    {
        return $this->services;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'services' => ServiceHealth::class,
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
            'status' => 'status',
            'checked_at' => 'checkedAt',
            'services' => 'services',
        ];
    }

// phpcs:enable
}
