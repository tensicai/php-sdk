<?php

declare(strict_types=1);

namespace TensicAI\SDK\Client;

use TeamBlue\ClientMock\Mock;
use TeamBlue\OpenApi\Codegen\Client\Client;
use TeamBlue\OpenApi\Codegen\ClientBuilder\ClientBuilder;
use TeamBlue\OpenApi\Codegen\ClientBuilder\UnknownClientTag;

use function assert;

/**
 * Generated once per spec: one accessor method per OpenAPI tag, dispatching
 * to a project-specific createXxxClient()/createXxxMock() hook implemented
 * by the hand-written concrete ClientBuilder subclass.
 */
abstract class AbstractClientBuilder extends ClientBuilder
{
    public function admin(): AdminClientInterface
    {
        $client = $this->build(AdminClientInterface::TAG);
        assert($client instanceof AdminClientInterface);

        return $client;
    }

    public function audio(): AudioClientInterface
    {
        $client = $this->build(AudioClientInterface::TAG);
        assert($client instanceof AudioClientInterface);

        return $client;
    }

    public function auth(): AuthClientInterface
    {
        $client = $this->build(AuthClientInterface::TAG);
        assert($client instanceof AuthClientInterface);

        return $client;
    }

    public function chat(): ChatClientInterface
    {
        $client = $this->build(ChatClientInterface::TAG);
        assert($client instanceof ChatClientInterface);

        return $client;
    }

    public function classifiers(): ClassifiersClientInterface
    {
        $client = $this->build(ClassifiersClientInterface::TAG);
        assert($client instanceof ClassifiersClientInterface);

        return $client;
    }

    public function comments(): CommentsClientInterface
    {
        $client = $this->build(CommentsClientInterface::TAG);
        assert($client instanceof CommentsClientInterface);

        return $client;
    }

    public function default(): DefaultClientInterface
    {
        $client = $this->build(DefaultClientInterface::TAG);
        assert($client instanceof DefaultClientInterface);

        return $client;
    }

    public function directAccess(): DirectAccessClientInterface
    {
        $client = $this->build(DirectAccessClientInterface::TAG);
        assert($client instanceof DirectAccessClientInterface);

        return $client;
    }

    public function embeddings(): EmbeddingsClientInterface
    {
        $client = $this->build(EmbeddingsClientInterface::TAG);
        assert($client instanceof EmbeddingsClientInterface);

        return $client;
    }

    public function evaluations(): EvaluationsClientInterface
    {
        $client = $this->build(EvaluationsClientInterface::TAG);
        assert($client instanceof EvaluationsClientInterface);

        return $client;
    }

    public function examples(): ExamplesClientInterface
    {
        $client = $this->build(ExamplesClientInterface::TAG);
        assert($client instanceof ExamplesClientInterface);

        return $client;
    }

    public function guards(): GuardsClientInterface
    {
        $client = $this->build(GuardsClientInterface::TAG);
        assert($client instanceof GuardsClientInterface);

        return $client;
    }

    public function health(): HealthClientInterface
    {
        $client = $this->build(HealthClientInterface::TAG);
        assert($client instanceof HealthClientInterface);

        return $client;
    }

    public function image(): ImageClientInterface
    {
        $client = $this->build(ImageClientInterface::TAG);
        assert($client instanceof ImageClientInterface);

        return $client;
    }

    public function imageGenerators(): ImageGeneratorsClientInterface
    {
        $client = $this->build(ImageGeneratorsClientInterface::TAG);
        assert($client instanceof ImageGeneratorsClientInterface);

        return $client;
    }

    public function knowledge(): KnowledgeClientInterface
    {
        $client = $this->build(KnowledgeClientInterface::TAG);
        assert($client instanceof KnowledgeClientInterface);

        return $client;
    }

    public function lLMs(): LLMsClientInterface
    {
        $client = $this->build(LLMsClientInterface::TAG);
        assert($client instanceof LLMsClientInterface);

        return $client;
    }

    public function memoryBank(): MemoryBankClientInterface
    {
        $client = $this->build(MemoryBankClientInterface::TAG);
        assert($client instanceof MemoryBankClientInterface);

        return $client;
    }

    public function memorySearch(): MemorySearchClientInterface
    {
        $client = $this->build(MemorySearchClientInterface::TAG);
        assert($client instanceof MemorySearchClientInterface);

        return $client;
    }

    public function news(): NewsClientInterface
    {
        $client = $this->build(NewsClientInterface::TAG);
        assert($client instanceof NewsClientInterface);

        return $client;
    }

    public function projectSecrets(): ProjectSecretsClientInterface
    {
        $client = $this->build(ProjectSecretsClientInterface::TAG);
        assert($client instanceof ProjectSecretsClientInterface);

        return $client;
    }

    public function projects(): ProjectsClientInterface
    {
        $client = $this->build(ProjectsClientInterface::TAG);
        assert($client instanceof ProjectsClientInterface);

        return $client;
    }

    public function routines(): RoutinesClientInterface
    {
        $client = $this->build(RoutinesClientInterface::TAG);
        assert($client instanceof RoutinesClientInterface);

        return $client;
    }

    public function search(): SearchClientInterface
    {
        $client = $this->build(SearchClientInterface::TAG);
        assert($client instanceof SearchClientInterface);

        return $client;
    }

    public function settings(): SettingsClientInterface
    {
        $client = $this->build(SettingsClientInterface::TAG);
        assert($client instanceof SettingsClientInterface);

        return $client;
    }

    public function slack(): SlackClientInterface
    {
        $client = $this->build(SlackClientInterface::TAG);
        assert($client instanceof SlackClientInterface);

        return $client;
    }

    public function speechToText(): SpeechToTextClientInterface
    {
        $client = $this->build(SpeechToTextClientInterface::TAG);
        assert($client instanceof SpeechToTextClientInterface);

        return $client;
    }

    public function statistics(): StatisticsClientInterface
    {
        $client = $this->build(StatisticsClientInterface::TAG);
        assert($client instanceof StatisticsClientInterface);

        return $client;
    }

    public function teams(): TeamsClientInterface
    {
        $client = $this->build(TeamsClientInterface::TAG);
        assert($client instanceof TeamsClientInterface);

        return $client;
    }

    public function templates(): TemplatesClientInterface
    {
        $client = $this->build(TemplatesClientInterface::TAG);
        assert($client instanceof TemplatesClientInterface);

        return $client;
    }

    public function tools(): ToolsClientInterface
    {
        $client = $this->build(ToolsClientInterface::TAG);
        assert($client instanceof ToolsClientInterface);

        return $client;
    }

    public function users(): UsersClientInterface
    {
        $client = $this->build(UsersClientInterface::TAG);
        assert($client instanceof UsersClientInterface);

        return $client;
    }

    public function webhooks(): WebhooksClientInterface
    {
        $client = $this->build(WebhooksClientInterface::TAG);
        assert($client instanceof WebhooksClientInterface);

        return $client;
    }

    public function whatsApp(): WhatsAppClientInterface
    {
        $client = $this->build(WhatsAppClientInterface::TAG);
        assert($client instanceof WhatsAppClientInterface);

        return $client;
    }

    public function widget(): WidgetClientInterface
    {
        $client = $this->build(WidgetClientInterface::TAG);
        assert($client instanceof WidgetClientInterface);

        return $client;
    }

    public function widgets(): WidgetsClientInterface
    {
        $client = $this->build(WidgetsClientInterface::TAG);
        assert($client instanceof WidgetsClientInterface);

        return $client;
    }

    /** @SuppressWarnings("PHPMD.ExcessiveMethodLength") */
    final protected function createClient(string $tag): Client
    {
        return match ($tag) {
            AdminClientInterface::TAG => $this->createAdminClient(),

            AudioClientInterface::TAG => $this->createAudioClient(),

            AuthClientInterface::TAG => $this->createAuthClient(),

            ChatClientInterface::TAG => $this->createChatClient(),

            ClassifiersClientInterface::TAG => $this->createClassifiersClient(),

            CommentsClientInterface::TAG => $this->createCommentsClient(),

            DefaultClientInterface::TAG => $this->createDefaultClient(),

            DirectAccessClientInterface::TAG => $this->createDirectAccessClient(),

            EmbeddingsClientInterface::TAG => $this->createEmbeddingsClient(),

            EvaluationsClientInterface::TAG => $this->createEvaluationsClient(),

            ExamplesClientInterface::TAG => $this->createExamplesClient(),

            GuardsClientInterface::TAG => $this->createGuardsClient(),

            HealthClientInterface::TAG => $this->createHealthClient(),

            ImageClientInterface::TAG => $this->createImageClient(),

            ImageGeneratorsClientInterface::TAG => $this->createImageGeneratorsClient(),

            KnowledgeClientInterface::TAG => $this->createKnowledgeClient(),

            LLMsClientInterface::TAG => $this->createLLMsClient(),

            MemoryBankClientInterface::TAG => $this->createMemoryBankClient(),

            MemorySearchClientInterface::TAG => $this->createMemorySearchClient(),

            NewsClientInterface::TAG => $this->createNewsClient(),

            ProjectSecretsClientInterface::TAG => $this->createProjectSecretsClient(),

            ProjectsClientInterface::TAG => $this->createProjectsClient(),

            RoutinesClientInterface::TAG => $this->createRoutinesClient(),

            SearchClientInterface::TAG => $this->createSearchClient(),

            SettingsClientInterface::TAG => $this->createSettingsClient(),

            SlackClientInterface::TAG => $this->createSlackClient(),

            SpeechToTextClientInterface::TAG => $this->createSpeechToTextClient(),

            StatisticsClientInterface::TAG => $this->createStatisticsClient(),

            TeamsClientInterface::TAG => $this->createTeamsClient(),

            TemplatesClientInterface::TAG => $this->createTemplatesClient(),

            ToolsClientInterface::TAG => $this->createToolsClient(),

            UsersClientInterface::TAG => $this->createUsersClient(),

            WebhooksClientInterface::TAG => $this->createWebhooksClient(),

            WhatsAppClientInterface::TAG => $this->createWhatsAppClient(),

            WidgetClientInterface::TAG => $this->createWidgetClient(),

            WidgetsClientInterface::TAG => $this->createWidgetsClient(),

            default => throw UnknownClientTag::forTag($tag),
        };
    }

    abstract protected function createAdminClient(): AdminClient;

    abstract protected function createAudioClient(): AudioClient;

    abstract protected function createAuthClient(): AuthClient;

    abstract protected function createChatClient(): ChatClient;

    abstract protected function createClassifiersClient(): ClassifiersClient;

    abstract protected function createCommentsClient(): CommentsClient;

    abstract protected function createDefaultClient(): DefaultClient;

    abstract protected function createDirectAccessClient(): DirectAccessClient;

    abstract protected function createEmbeddingsClient(): EmbeddingsClient;

    abstract protected function createEvaluationsClient(): EvaluationsClient;

    abstract protected function createExamplesClient(): ExamplesClient;

    abstract protected function createGuardsClient(): GuardsClient;

    abstract protected function createHealthClient(): HealthClient;

    abstract protected function createImageClient(): ImageClient;

    abstract protected function createImageGeneratorsClient(): ImageGeneratorsClient;

    abstract protected function createKnowledgeClient(): KnowledgeClient;

    abstract protected function createLLMsClient(): LLMsClient;

    abstract protected function createMemoryBankClient(): MemoryBankClient;

    abstract protected function createMemorySearchClient(): MemorySearchClient;

    abstract protected function createNewsClient(): NewsClient;

    abstract protected function createProjectSecretsClient(): ProjectSecretsClient;

    abstract protected function createProjectsClient(): ProjectsClient;

    abstract protected function createRoutinesClient(): RoutinesClient;

    abstract protected function createSearchClient(): SearchClient;

    abstract protected function createSettingsClient(): SettingsClient;

    abstract protected function createSlackClient(): SlackClient;

    abstract protected function createSpeechToTextClient(): SpeechToTextClient;

    abstract protected function createStatisticsClient(): StatisticsClient;

    abstract protected function createTeamsClient(): TeamsClient;

    abstract protected function createTemplatesClient(): TemplatesClient;

    abstract protected function createToolsClient(): ToolsClient;

    abstract protected function createUsersClient(): UsersClient;

    abstract protected function createWebhooksClient(): WebhooksClient;

    abstract protected function createWhatsAppClient(): WhatsAppClient;

    abstract protected function createWidgetClient(): WidgetClient;

    abstract protected function createWidgetsClient(): WidgetsClient;

    /** @SuppressWarnings("PHPMD.ExcessiveMethodLength") */
    final public static function mock(string $tag): Mock
    {
        return match ($tag) {
            AdminClientInterface::TAG => static::createAdminClientMock(),

            AudioClientInterface::TAG => static::createAudioClientMock(),

            AuthClientInterface::TAG => static::createAuthClientMock(),

            ChatClientInterface::TAG => static::createChatClientMock(),

            ClassifiersClientInterface::TAG => static::createClassifiersClientMock(),

            CommentsClientInterface::TAG => static::createCommentsClientMock(),

            DefaultClientInterface::TAG => static::createDefaultClientMock(),

            DirectAccessClientInterface::TAG => static::createDirectAccessClientMock(),

            EmbeddingsClientInterface::TAG => static::createEmbeddingsClientMock(),

            EvaluationsClientInterface::TAG => static::createEvaluationsClientMock(),

            ExamplesClientInterface::TAG => static::createExamplesClientMock(),

            GuardsClientInterface::TAG => static::createGuardsClientMock(),

            HealthClientInterface::TAG => static::createHealthClientMock(),

            ImageClientInterface::TAG => static::createImageClientMock(),

            ImageGeneratorsClientInterface::TAG => static::createImageGeneratorsClientMock(),

            KnowledgeClientInterface::TAG => static::createKnowledgeClientMock(),

            LLMsClientInterface::TAG => static::createLLMsClientMock(),

            MemoryBankClientInterface::TAG => static::createMemoryBankClientMock(),

            MemorySearchClientInterface::TAG => static::createMemorySearchClientMock(),

            NewsClientInterface::TAG => static::createNewsClientMock(),

            ProjectSecretsClientInterface::TAG => static::createProjectSecretsClientMock(),

            ProjectsClientInterface::TAG => static::createProjectsClientMock(),

            RoutinesClientInterface::TAG => static::createRoutinesClientMock(),

            SearchClientInterface::TAG => static::createSearchClientMock(),

            SettingsClientInterface::TAG => static::createSettingsClientMock(),

            SlackClientInterface::TAG => static::createSlackClientMock(),

            SpeechToTextClientInterface::TAG => static::createSpeechToTextClientMock(),

            StatisticsClientInterface::TAG => static::createStatisticsClientMock(),

            TeamsClientInterface::TAG => static::createTeamsClientMock(),

            TemplatesClientInterface::TAG => static::createTemplatesClientMock(),

            ToolsClientInterface::TAG => static::createToolsClientMock(),

            UsersClientInterface::TAG => static::createUsersClientMock(),

            WebhooksClientInterface::TAG => static::createWebhooksClientMock(),

            WhatsAppClientInterface::TAG => static::createWhatsAppClientMock(),

            WidgetClientInterface::TAG => static::createWidgetClientMock(),

            WidgetsClientInterface::TAG => static::createWidgetsClientMock(),

            default => throw UnknownClientTag::forTag($tag),
        };
    }

    abstract protected static function createAdminClientMock(): Mock;

    abstract protected static function createAudioClientMock(): Mock;

    abstract protected static function createAuthClientMock(): Mock;

    abstract protected static function createChatClientMock(): Mock;

    abstract protected static function createClassifiersClientMock(): Mock;

    abstract protected static function createCommentsClientMock(): Mock;

    abstract protected static function createDefaultClientMock(): Mock;

    abstract protected static function createDirectAccessClientMock(): Mock;

    abstract protected static function createEmbeddingsClientMock(): Mock;

    abstract protected static function createEvaluationsClientMock(): Mock;

    abstract protected static function createExamplesClientMock(): Mock;

    abstract protected static function createGuardsClientMock(): Mock;

    abstract protected static function createHealthClientMock(): Mock;

    abstract protected static function createImageClientMock(): Mock;

    abstract protected static function createImageGeneratorsClientMock(): Mock;

    abstract protected static function createKnowledgeClientMock(): Mock;

    abstract protected static function createLLMsClientMock(): Mock;

    abstract protected static function createMemoryBankClientMock(): Mock;

    abstract protected static function createMemorySearchClientMock(): Mock;

    abstract protected static function createNewsClientMock(): Mock;

    abstract protected static function createProjectSecretsClientMock(): Mock;

    abstract protected static function createProjectsClientMock(): Mock;

    abstract protected static function createRoutinesClientMock(): Mock;

    abstract protected static function createSearchClientMock(): Mock;

    abstract protected static function createSettingsClientMock(): Mock;

    abstract protected static function createSlackClientMock(): Mock;

    abstract protected static function createSpeechToTextClientMock(): Mock;

    abstract protected static function createStatisticsClientMock(): Mock;

    abstract protected static function createTeamsClientMock(): Mock;

    abstract protected static function createTemplatesClientMock(): Mock;

    abstract protected static function createToolsClientMock(): Mock;

    abstract protected static function createUsersClientMock(): Mock;

    abstract protected static function createWebhooksClientMock(): Mock;

    abstract protected static function createWhatsAppClientMock(): Mock;

    abstract protected static function createWidgetClientMock(): Mock;

    abstract protected static function createWidgetsClientMock(): Mock;
}
