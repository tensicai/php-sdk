<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TensicAI\SDK\Endpoint\Get;
use TensicAI\SDK\Endpoint\GetHealthLive;
use TensicAI\SDK\Endpoint\GetHealthReady;
use TensicAI\SDK\Endpoint\GetInfo;
use TensicAI\SDK\Endpoint\GetSetup;
use TensicAI\SDK\Endpoint\GetVersion;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class HealthClient extends AbstractClient implements HealthClientInterface
{
    /**
     * Get
     */
    #[EndpointAttribute(Get::class)]
    public function get(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            Get::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Health Ready
     */
    #[EndpointAttribute(GetHealthLive::class)]
    public function getHealthLive(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetHealthLive::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Health Ready
     */
    #[EndpointAttribute(GetHealthReady::class)]
    public function getHealthReady(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetHealthReady::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Get Info
     */
    #[EndpointAttribute(GetInfo::class)]
    public function getInfo(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetInfo::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Get Setup
     */
    #[EndpointAttribute(GetSetup::class)]
    public function getSetup(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetSetup::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Get Version
     */
    #[EndpointAttribute(GetVersion::class)]
    public function getVersion(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetVersion::fromRecordData(
                [],
            ),
        );

        return $response;
    }
}
