<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\WidgetUpdateDefault;

final class WidgetUpdate implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use WidgetUpdateDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $name = null;
    private WidgetConfig|null $config = null;
    /** @var array<string>|null */
    private array|null $allowedDomains = null;
    private bool|null $enabled = null;

    public function name(): string|null
    {
        return $this->name;
    }

    public function config(): WidgetConfig|null
    {
        return $this->config;
    }

    /** @return array<string>|null */
    public function allowedDomains(): array|null
    {
        return $this->allowedDomains;
    }

    public function enabled(): bool|null
    {
        return $this->enabled;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return ['allowedDomains' => 'string'];
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
            'name' => 'name',
            'config' => 'config',
            'allowed_domains' => 'allowedDomains',
            'enabled' => 'enabled',
        ];
    }

// phpcs:enable
}
