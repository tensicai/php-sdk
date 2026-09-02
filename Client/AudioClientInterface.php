<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK\Client;

/**
 * @SuppressWarnings("PHPMD.ExcessiveClassLength")
 * @SuppressWarnings("PHPMD.ExcessivePublicCount")
 * @SuppressWarnings("PHPMD.ExcessiveClassComplexity")
 * phpcs:disable SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
 */
interface AudioClientInterface
{
    public const string TAG = 'Audio';

    /**
     * Route List Generators
     *
     * List speech-to-text models available to the caller.
     */
    public function getAudio(): mixed;

    /**
     * Route Generate Transcript
     *
     * Transcribe an audio file using the specified STT model.
     */
    public function postAudioGeneratorTranscript(
        string $generator,
    ): mixed;

    /**
     * Openai Compatible Transcription
     *
     * OpenAI-compatible audio transcription endpoint.
     */
    public function postV1AudioTranscriptions(): mixed;

    /**
     * Openai Compatible Translation
     *
     * OpenAI-compatible audio translation. NOTE: the STT backend has no dedicated translate task, so this returns the transcript (accurate for English audio).
     */
    public function postV1AudioTranslations(): mixed;
}
