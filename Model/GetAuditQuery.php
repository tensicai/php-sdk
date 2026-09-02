<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\GetAuditQueryDefault;

final class GetAuditQuery implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use GetAuditQueryDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int|null $start = 0;
    private string|null $action = null;
    private int|null $end = 50;
    private string|null $username = null;

    public function start(): int|null
    {
        return $this->start;
    }

    public function action(): string|null
    {
        return $this->action;
    }

    public function end(): int|null
    {
        return $this->end;
    }

    public function username(): string|null
    {
        return $this->username;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [];
    }

    /** @return array<string, int> */
    private static function maxValues(): array
    {
        return [
            'start' => 1000000,
            'end' => 1000000,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'start' => 'start',
            'action' => 'action',
            'end' => 'end',
            'username' => 'username',
        ];
    }

// phpcs:enable
}
