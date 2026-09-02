<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\LLMTestRequestDefault;

final class LLMTestRequest implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use LLMTestRequestDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $className = null;
    private string|null $privacy = null;
    private Options5|null $options = null;

    public function className(): string|null
    {
        return $this->className;
    }

    public function privacy(): string|null
    {
        return $this->privacy;
    }

    public function options(): Options5|null
    {
        return $this->options;
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
            'class_name' => 'className',
            'privacy' => 'privacy',
            'options' => 'options',
        ];
    }

// phpcs:enable
}
