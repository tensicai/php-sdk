<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\WidgetCreateDefault;

final class WidgetCreate implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use WidgetCreateDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $name = 'Chat Widget';
    private WidgetConfig|null $config = null;
    /** @var array<string>|null */
    private array|null $allowedDomains = [];

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
        ];
    }

// phpcs:enable
}
