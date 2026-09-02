<?php

declare(strict_types=1);

namespace TensicAI\SDK\Factory;

use TeamBlue\JsonImmutableObjects\FactoryFromArray;
use TensicAI\SDK\Model\GetWebhooksWhatsappQuery;

/**
 * @method static GetWebhooksWhatsappQuery fromArray(mixed[] $array)
 * @method static GetWebhooksWhatsappQuery fromRecordData(mixed[] $array)
 */
class GetWebhooksWhatsappQueryFactory
{
    use FactoryFromArray;

    protected static function modelClass(): string
    {
        return GetWebhooksWhatsappQuery::class;
    }
}
