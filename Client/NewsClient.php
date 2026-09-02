<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TeamBlue\TensicAI\SDK\Endpoint\GetNews;
use TeamBlue\TensicAI\SDK\Model\NewsResponse;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class NewsClient extends AbstractClient implements NewsClientInterface
{
    /**
     * Get News
     *
     * The cached platform-news feed, newest first (the manager sends it ordered).
     */
    #[EndpointAttribute(GetNews::class)]
    public function getNews(): NewsResponse
    {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetNews::fromRecordData(
                [],
            ),
        );

        return NewsResponse::fromArray($response);
    }
}
