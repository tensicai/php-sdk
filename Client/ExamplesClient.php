<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TeamBlue\TensicAI\SDK\Endpoint\GetExamples;
use TeamBlue\TensicAI\SDK\Endpoint\PostExamplesExampleIDInstall;
use TeamBlue\TensicAI\SDK\Model\ExampleInstallRequest;
use TeamBlue\TensicAI\SDK\Model\ExampleInstallResponse;
use TeamBlue\TensicAI\SDK\Model\ExampleListResponse;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class ExamplesClient extends AbstractClient implements ExamplesClientInterface
{
    /**
     * List Examples
     *
     * Every shipped example, with what it needs and whether this instance has it.
     */
    #[EndpointAttribute(GetExamples::class)]
    public function getExamples(): ExampleListResponse
    {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            GetExamples::fromRecordData(
                [],
            ),
        );

        return ExampleListResponse::fromArray($response);
    }

    /**
     * Install Example
     *
     * Create the example&#39;s router AND every project it calls, atomically.
     */
    #[EndpointAttribute(PostExamplesExampleIDInstall::class)]
    public function postExamplesExampleIDInstall(
        string $exampleID,
        ExampleInstallRequest $body,
    ): ExampleInstallResponse {
        /** @var array<string, mixed> $response */
        $response = $this->performRequest(
            PostExamplesExampleIDInstall::fromRecordData(
                [
                    'exampleID' => $exampleID,
                    'body' => $body,
                ],
            ),
        );

        return ExampleInstallResponse::fromArray($response);
    }
}
