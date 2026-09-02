<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\ConversationReplayResponseDefault;

final class ConversationReplayResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ConversationReplayResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    /** @var array<ProjectLogEntry>|null */
    private array|null $turns = [];
    private bool|null $truncated = false;
    private string|null $chatId = null;

    /** @return array<ProjectLogEntry>|null */
    public function turns(): array|null
    {
        return $this->turns;
    }

    public function truncated(): bool|null
    {
        return $this->truncated;
    }

    public function chatId(): string|null
    {
        return $this->chatId;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'turns' => ProjectLogEntry::class,
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
            'turns' => 'turns',
            'truncated' => 'truncated',
            'chat_id' => 'chatId',
        ];
    }

// phpcs:enable
}
