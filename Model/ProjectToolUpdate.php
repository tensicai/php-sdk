<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ProjectToolUpdateDefault;

final class ProjectToolUpdate implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ProjectToolUpdateDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string|null $description = null;
    private string|null $parameters = null;
    private string|null $code = null;
    /** @var array<string>|null */
    private array|null $secrets = null;

    public function description(): string|null
    {
        return $this->description;
    }

    public function parameters(): string|null
    {
        return $this->parameters;
    }

    public function code(): string|null
    {
        return $this->code;
    }

    /** @return array<string>|null */
    public function secrets(): array|null
    {
        return $this->secrets;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return ['secrets' => 'string'];
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
            'description' => 'description',
            'parameters' => 'parameters',
            'code' => 'code',
            'secrets' => 'secrets',
        ];
    }

// phpcs:enable
}
