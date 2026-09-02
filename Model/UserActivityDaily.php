<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\UserActivityDailyDefault;
use TeamBlue\ValueObjects\Implementation\String\DateTimeValue;

final class UserActivityDaily implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use UserActivityDailyDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private DateTimeValue|null $date = null;
    private int|null $requests = 0;
    private int|null $tokens = 0;

    public function date(): DateTimeValue|null
    {
        return $this->date;
    }

    public function requests(): int|null
    {
        return $this->requests;
    }

    public function tokens(): int|null
    {
        return $this->tokens;
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
            'requests' => 'requests',
            'tokens' => 'tokens',
        ];
    }

// phpcs:enable
}
