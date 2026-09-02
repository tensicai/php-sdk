<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TensicAI\SDK\Endpoint\GetPermissionsMatrix;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class AdminClient extends AbstractClient implements AdminClientInterface
{
    /**
     * Get Permission Matrix
     *
     * Return the users x projects permission matrix.
     */
    #[EndpointAttribute(GetPermissionsMatrix::class)]
    public function getPermissionsMatrix(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetPermissionsMatrix::fromRecordData(
                [],
            ),
        );

        return $response;
    }
}
