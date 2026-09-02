<?php

declare(strict_types=1);

namespace TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TensicAI\SDK\Default\StatisticsTopUserDefault;

final class StatisticsTopUser implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use StatisticsTopUserDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private int $userId;
    private string $username;
    private int|null $requests = 0;
    private int|null $totalTokens = 0;
    private float|null $totalCost = 0;

    public function userId(): int
    {
        return $this->userId;
    }

    public function username(): string
    {
        return $this->username;
    }

    public function requests(): int|null
    {
        return $this->requests;
    }

    public function totalTokens(): int|null
    {
        return $this->totalTokens;
    }

    public function totalCost(): float|null
    {
        return $this->totalCost;
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
            'requests' => 'requests',
            'total_tokens' => 'totalTokens',
            'total_cost' => 'totalCost',
        ];
    }

// phpcs:enable
}
