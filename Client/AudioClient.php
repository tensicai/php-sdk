<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

use TeamBlue\OpenApi\Codegen\Attribute\Endpoint as EndpointAttribute;
use TeamBlue\OpenApi\Codegen\Client\Client as AbstractClient;
use TeamBlue\TensicAI\SDK\Endpoint\GetAudio;
use TeamBlue\TensicAI\SDK\Endpoint\PostAudioGeneratorTranscript;
use TeamBlue\TensicAI\SDK\Endpoint\PostV1AudioTranscriptions;
use TeamBlue\TensicAI\SDK\Endpoint\PostV1AudioTranslations;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 */
class AudioClient extends AbstractClient implements AudioClientInterface
{
    /**
     * Route List Generators
     *
     * List speech-to-text models available to the caller.
     */
    #[EndpointAttribute(GetAudio::class)]
    public function getAudio(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            GetAudio::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Route Generate Transcript
     *
     * Transcribe an audio file using the specified STT model.
     */
    #[EndpointAttribute(PostAudioGeneratorTranscript::class)]
    public function postAudioGeneratorTranscript(
        string $generator,
    ): mixed {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostAudioGeneratorTranscript::fromRecordData(
                ['generator' => $generator],
            ),
        );

        return $response;
    }

    /**
     * Openai Compatible Transcription
     *
     * OpenAI-compatible audio transcription endpoint.
     */
    #[EndpointAttribute(PostV1AudioTranscriptions::class)]
    public function postV1AudioTranscriptions(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostV1AudioTranscriptions::fromRecordData(
                [],
            ),
        );

        return $response;
    }

    /**
     * Openai Compatible Translation
     *
     * OpenAI-compatible audio translation. NOTE: the STT backend has no dedicated translate task, so this returns the transcript (accurate for English audio).
     */
    #[EndpointAttribute(PostV1AudioTranslations::class)]
    public function postV1AudioTranslations(): mixed
    {
        /** @var mixed $response */
        $response = $this->performRequest(
            PostV1AudioTranslations::fromRecordData(
                [],
            ),
        );

        return $response;
    }
}
