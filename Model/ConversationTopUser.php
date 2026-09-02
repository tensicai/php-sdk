<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\ConversationTopUserDefault;

final class ConversationTopUser implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use ConversationTopUserDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $userId;
    private string $username;
    private int $messages;

    public function userId(): int
    {
        return $this->userId;
    }

    public function username(): string
    {
        return $this->username;
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
            'user_id' => 'userId',
            'username' => 'username',
            'messages' => 'messages',
        ];
    }

// phpcs:enable
}
