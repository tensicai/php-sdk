<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\SpeechToTextModelCreateDefault;

final class SpeechToTextModelCreate implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use SpeechToTextModelCreateDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $name;
    private string $className;
    private Options8|null $options = null;
    private string|null $privacy = 'public';
    private string|null $description = null;
    private bool|null $enabled = true;

    public function name(): string
    {
        return $this->name;
    }

    public function className(): string
    {
        return $this->className;
    }

    public function options(): Options8|null
    {
        return $this->options;
    }

    public function privacy(): string|null
    {
        return $this->privacy;
    }

    public function description(): string|null
    {
        return $this->description;
    }

    public function enabled(): bool|null
    {
        return $this->enabled;
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
            'name' => 'name',
            'class_name' => 'className',
            'options' => 'options',
            'privacy' => 'privacy',
            'description' => 'description',
            'enabled' => 'enabled',
        ];
    }

// phpcs:enable
}
