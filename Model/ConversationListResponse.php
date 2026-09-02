<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\ConversationListResponseDefault;

final class ConversationListResponse implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ConversationListResponseDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    /** @var array<ConversationSummary>|null */
    private array|null $conversations = null;
    private bool|null $truncated = false;
    private int|null $scannedRows = 0;

    /** @return array<ConversationSummary>|null */
    public function conversations(): array|null
    {
        return $this->conversations;
    }

    public function truncated(): bool|null
    {
        return $this->truncated;
    }

    public function scannedRows(): int|null
    {
        return $this->scannedRows;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'conversations' => ConversationSummary::class,
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
            'conversations' => 'conversations',
            'truncated' => 'truncated',
            'scanned_rows' => 'scannedRows',
        ];
    }

// phpcs:enable
}
