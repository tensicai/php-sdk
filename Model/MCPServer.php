<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Model;

use EventEngine\Data\SpecialKeySupport;
use EventEngine\JsonSchema\JsonSchemaAwareRecord;
use TeamBlue\JsonImmutableObjects\JsonSchemaAwareRecordLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;
use TeamBlue\TensicAI\SDK\Default\MCPServerDefault;

final class MCPServer implements SpecialKeySupport, JsonSchemaAwareRecord
{
    use MCPServerDefault;
    use JsonSchemaAwareRecordLogic;
    use SpecialKeySupportLogic;

// phpcs:disable SlevomatCodingStandard.Classes.UnusedPrivateElements.UnusedProperty
// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
    private string $host;
    /** @var array<string>|null */
    private array|null $args = null;
    /** @var array<string>|null */
    private array|null $env = null;
    /** @var array<string>|null */
    private array|null $headers = null;
    private string|null $tools = null;

    public function host(): string
    {
        return $this->host;
    }

    /** @return array<string>|null */
    public function args(): array|null
    {
        return $this->args;
    }

    /** @return array<string>|null */
    public function env(): array|null
    {
        return $this->env;
    }

    /** @return array<string>|null */
    public function headers(): array|null
    {
        return $this->headers;
    }

    public function tools(): string|null
    {
        return $this->tools;
    }

    /** @return array<string, string> */
    private static function arrayPropItemTypeMap(): array
    {
        return [
            'args' => 'string',
            'env' => 'string',
            'headers' => 'string',
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
            'host' => 'host',
            'args' => 'args',
            'env' => 'env',
            'headers' => 'headers',
            'tools' => 'tools',
        ];
    }

// phpcs:enable
}
