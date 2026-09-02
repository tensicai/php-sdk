<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\WidgetResponseDefault;
use TeamBlue\ValueObjects\Implementation\String\DateTimeValue;

final class WidgetResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use WidgetResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private int $projectId;
    private string $name;
    private WidgetConfig $config;
    /** @var array<string> */
    private array $allowedDomains;
    private bool $enabled;
    private string $keyPrefix;
    private string|null $widgetKey = null;
    private bool|null $hasContextSecret = false;
    private DateTimeValue $createdAt;
    private DateTimeValue $updatedAt;

    public function id(): int
    {
        return $this->id;
    }

    public function projectId(): int
    {
        return $this->projectId;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function config(): WidgetConfig
    {
        return $this->config;
    }

    /** @return array<string> */
    public function allowedDomains(): array
    {
        return $this->allowedDomains;
    }

    public function enabled(): bool
    {
        return $this->enabled;
    }

    public function keyPrefix(): string
    {
        return $this->keyPrefix;
    }

    public function widgetKey(): string|null
    {
        return $this->widgetKey;
    }

    public function hasContextSecret(): bool|null
    {
        return $this->hasContextSecret;
    }

    public function createdAt(): DateTimeValue
    {
        return $this->createdAt;
    }

    public function updatedAt(): DateTimeValue
    {
        return $this->updatedAt;
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
            'id' => 'id',
            'project_id' => 'projectId',
            'name' => 'name',
            'config' => 'config',
            'allowed_domains' => 'allowedDomains',
            'enabled' => 'enabled',
            'key_prefix' => 'keyPrefix',
            'widget_key' => 'widgetKey',
            'has_context_secret' => 'hasContextSecret',
            'created_at' => 'createdAt',
            'updated_at' => 'updatedAt',
        ];
    }

// phpcs:enable
}
