<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\ValueObjects\Implementation\String\DateTimeValue;
use TensicAI\SDK\Default\GuardEventResponseDefault;

final class GuardEventResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use GuardEventResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $id;
    private string $phase;
    private string $action;
    private string $mode;
    private string|null $textChecked = null;
    private string|null $guardResponse = null;
    private string $guardProject;
    private DateTimeValue|null $date = null;
    private int|null $userId = null;

    public function id(): int
    {
        return $this->id;
    }

    public function phase(): string
    {
        return $this->phase;
    }

    public function action(): string
    {
        return $this->action;
    }

    public function mode(): string
    {
        return $this->mode;
    }

    public function textChecked(): string|null
    {
        return $this->textChecked;
    }

    public function guardResponse(): string|null
    {
        return $this->guardResponse;
    }

    public function guardProject(): string
    {
        return $this->guardProject;
    }

    public function date(): DateTimeValue|null
    {
        return $this->date;
    }

    public function userId(): int|null
    {
        return $this->userId;
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
            'id' => 'id',
            'phase' => 'phase',
            'action' => 'action',
            'mode' => 'mode',
            'text_checked' => 'textChecked',
            'guard_response' => 'guardResponse',
            'guard_project' => 'guardProject',
            'date' => 'date',
            'user_id' => 'userId',
        ];
    }

// phpcs:enable
}
