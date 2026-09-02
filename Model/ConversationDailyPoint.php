<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ConversationDailyPointDefault;
use TeamBlue\ValueObjects\Implementation\String\DateTimeValue;

final class ConversationDailyPoint implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ConversationDailyPointDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private DateTimeValue|null $date = null;
    private int $conversations;
    private int $messages;

    public function date(): DateTimeValue|null
    {
        return $this->date;
    }

    public function conversations(): int
    {
        return $this->conversations;
    }

    public function messages(): int
    {
        return $this->messages;
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
            'date' => 'date',
            'conversations' => 'conversations',
            'messages' => 'messages',
        ];
    }

// phpcs:enable
}
