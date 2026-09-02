<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ValidationErrorDefault;

final class ValidationError implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ValidationErrorDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    /** @var array<LocationInner> */
    private array $loc;
    private string $msg;
    private string $type;
    private mixed $input = null;
    /** @var array<mixed>|null */
    private array|null $ctx = null;

    /** @return array<LocationInner> */
    public function loc(): array
    {
        return $this->loc;
    }

    public function msg(): string
    {
        return $this->msg;
    }

    public function type(): string
    {
        return $this->type;
    }

    public function input(): mixed
    {
        return $this->input;
    }

    /** @return array<mixed>|null */
    public function ctx(): array|null
    {
        return $this->ctx;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'loc' => LocationInner::class,
            'ctx' => '\stdClass',
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
            'loc' => 'loc',
            'msg' => 'msg',
            'type' => 'type',
            'input' => 'input',
            'ctx' => 'ctx',
        ];
    }

// phpcs:enable
}
