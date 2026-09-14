<?php

declare(strict_types=1);

namespace TensicAI\SDK;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockPersister;
use TensicAI\SDK\Client\AbstractClientBuilder;
use TensicAI\SDK\Client\AdminClient;
use TensicAI\SDK\Client\ApiAdminClientMock;
use TensicAI\SDK\Client\ApiAudioClientMock;
use TensicAI\SDK\Client\ApiAuthClientMock;
use TensicAI\SDK\Client\ApiChatClientMock;
use TensicAI\SDK\Client\ApiClassifiersClientMock;
use TensicAI\SDK\Client\ApiCommentsClientMock;
use TensicAI\SDK\Client\ApiDefaultClientMock;
use TensicAI\SDK\Client\ApiDirectAccessClientMock;
use TensicAI\SDK\Client\ApiEmbeddingsClientMock;
use TensicAI\SDK\Client\ApiEvaluationsClientMock;
use TensicAI\SDK\Client\ApiExamplesClientMock;
use TensicAI\SDK\Client\ApiGuardsClientMock;
use TensicAI\SDK\Client\ApiHealthClientMock;
use TensicAI\SDK\Client\ApiImageClientMock;
use TensicAI\SDK\Client\ApiImageGeneratorsClientMock;
use TensicAI\SDK\Client\ApiKnowledgeClientMock;
use TensicAI\SDK\Client\ApiLLMsClientMock;
use TensicAI\SDK\Client\ApiMemoryBankClientMock;
use TensicAI\SDK\Client\ApiMemorySearchClientMock;
use TensicAI\SDK\Client\ApiNewsClientMock;
use TensicAI\SDK\Client\ApiProjectsClientMock;
use TensicAI\SDK\Client\ApiProjectSecretsClientMock;
use TensicAI\SDK\Client\ApiRoutinesClientMock;
use TensicAI\SDK\Client\ApiSearchClientMock;
use TensicAI\SDK\Client\ApiSettingsClientMock;
use TensicAI\SDK\Client\ApiSlackClientMock;
use TensicAI\SDK\Client\ApiSpeechToTextClientMock;
use TensicAI\SDK\Client\ApiStatisticsClientMock;
use TensicAI\SDK\Client\ApiTeamsClientMock;
use TensicAI\SDK\Client\ApiTemplatesClientMock;
use TensicAI\SDK\Client\ApiToolsClientMock;
use TensicAI\SDK\Client\ApiUsersClientMock;
use TensicAI\SDK\Client\ApiWebhooksClientMock;
use TensicAI\SDK\Client\ApiWhatsAppClientMock;
use TensicAI\SDK\Client\ApiWidgetClientMock;
use TensicAI\SDK\Client\ApiWidgetsClientMock;
use TensicAI\SDK\Client\AudioClient;
use TensicAI\SDK\Client\AuthClient;
use TensicAI\SDK\Client\ChatClient;
use TensicAI\SDK\Client\ClassifiersClient;
use TensicAI\SDK\Client\CommentsClient;
use TensicAI\SDK\Client\DefaultClient;
use TensicAI\SDK\Client\DirectAccessClient;
use TensicAI\SDK\Client\EmbeddingsClient;
use TensicAI\SDK\Client\EvaluationsClient;
use TensicAI\SDK\Client\ExamplesClient;
use TensicAI\SDK\Client\GuardsClient;
use TensicAI\SDK\Client\HealthClient;
use TensicAI\SDK\Client\ImageClient;
use TensicAI\SDK\Client\ImageGeneratorsClient;
use TensicAI\SDK\Client\KnowledgeClient;
use TensicAI\SDK\Client\LLMsClient;
use TensicAI\SDK\Client\MemoryBankClient;
use TensicAI\SDK\Client\MemorySearchClient;
use TensicAI\SDK\Client\NewsClient;
use TensicAI\SDK\Client\ProjectsClient;
use TensicAI\SDK\Client\ProjectSecretsClient;
use TensicAI\SDK\Client\RoutinesClient;
use TensicAI\SDK\Client\SearchClient;
use TensicAI\SDK\Client\SettingsClient;
use TensicAI\SDK\Client\SlackClient;
use TensicAI\SDK\Client\SpeechToTextClient;
use TensicAI\SDK\Client\StatisticsClient;
use TensicAI\SDK\Client\TeamsClient;
use TensicAI\SDK\Client\TemplatesClient;
use TensicAI\SDK\Client\ToolsClient;
use TensicAI\SDK\Client\UsersClient;
use TensicAI\SDK\Client\WebhooksClient;
use TensicAI\SDK\Client\WhatsAppClient;
use TensicAI\SDK\Client\WidgetClient;
use TensicAI\SDK\Client\WidgetsClient;

final class ClientBuilder extends AbstractClientBuilder
{
    protected function createAdminClient(): AdminClient
    {
        return new AdminClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createAudioClient(): AudioClient
    {
        return new AudioClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createAuthClient(): AuthClient
    {
        return new AuthClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createChatClient(): ChatClient
    {
        return new ChatClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createClassifiersClient(): ClassifiersClient
    {
        return new ClassifiersClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createCommentsClient(): CommentsClient
    {
        return new CommentsClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createDefaultClient(): DefaultClient
    {
        return new DefaultClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createDirectAccessClient(): DirectAccessClient
    {
        return new DirectAccessClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createEmbeddingsClient(): EmbeddingsClient
    {
        return new EmbeddingsClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createEvaluationsClient(): EvaluationsClient
    {
        return new EvaluationsClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createExamplesClient(): ExamplesClient
    {
        return new ExamplesClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createGuardsClient(): GuardsClient
    {
        return new GuardsClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createHealthClient(): HealthClient
    {
        return new HealthClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createImageClient(): ImageClient
    {
        return new ImageClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createImageGeneratorsClient(): ImageGeneratorsClient
    {
        return new ImageGeneratorsClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createKnowledgeClient(): KnowledgeClient
    {
        return new KnowledgeClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createLLMsClient(): LLMsClient
    {
        return new LLMsClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createMemoryBankClient(): MemoryBankClient
    {
        return new MemoryBankClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createMemorySearchClient(): MemorySearchClient
    {
        return new MemorySearchClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createNewsClient(): NewsClient
    {
        return new NewsClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createProjectSecretsClient(): ProjectSecretsClient
    {
        return new ProjectSecretsClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createProjectsClient(): ProjectsClient
    {
        return new ProjectsClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createRoutinesClient(): RoutinesClient
    {
        return new RoutinesClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createSearchClient(): SearchClient
    {
        return new SearchClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createSettingsClient(): SettingsClient
    {
        return new SettingsClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createSlackClient(): SlackClient
    {
        return new SlackClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createSpeechToTextClient(): SpeechToTextClient
    {
        return new SpeechToTextClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createStatisticsClient(): StatisticsClient
    {
        return new StatisticsClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createTeamsClient(): TeamsClient
    {
        return new TeamsClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createTemplatesClient(): TemplatesClient
    {
        return new TemplatesClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createToolsClient(): ToolsClient
    {
        return new ToolsClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createUsersClient(): UsersClient
    {
        return new UsersClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createWebhooksClient(): WebhooksClient
    {
        return new WebhooksClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createWhatsAppClient(): WhatsAppClient
    {
        return new WhatsAppClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createWidgetClient(): WidgetClient
    {
        return new WidgetClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected function createWidgetsClient(): WidgetsClient
    {
        return new WidgetsClient($this->client(), $this->configs(__DIR__ . '/resources/api/config.json'));
    }

    protected static function createAdminClientMock(): Mock
    {
        return (new ApiAdminClientMock())->setPersister(new MockPersister());
    }

    protected static function createAudioClientMock(): Mock
    {
        return (new ApiAudioClientMock())->setPersister(new MockPersister());
    }

    protected static function createAuthClientMock(): Mock
    {
        return (new ApiAuthClientMock())->setPersister(new MockPersister());
    }

    protected static function createChatClientMock(): Mock
    {
        return (new ApiChatClientMock())->setPersister(new MockPersister());
    }

    protected static function createClassifiersClientMock(): Mock
    {
        return (new ApiClassifiersClientMock())->setPersister(new MockPersister());
    }

    protected static function createCommentsClientMock(): Mock
    {
        return (new ApiCommentsClientMock())->setPersister(new MockPersister());
    }

    protected static function createDefaultClientMock(): Mock
    {
        return (new ApiDefaultClientMock())->setPersister(new MockPersister());
    }

    protected static function createDirectAccessClientMock(): Mock
    {
        return (new ApiDirectAccessClientMock())->setPersister(new MockPersister());
    }

    protected static function createEmbeddingsClientMock(): Mock
    {
        return (new ApiEmbeddingsClientMock())->setPersister(new MockPersister());
    }

    protected static function createEvaluationsClientMock(): Mock
    {
        return (new ApiEvaluationsClientMock())->setPersister(new MockPersister());
    }

    protected static function createExamplesClientMock(): Mock
    {
        return (new ApiExamplesClientMock())->setPersister(new MockPersister());
    }

    protected static function createGuardsClientMock(): Mock
    {
        return (new ApiGuardsClientMock())->setPersister(new MockPersister());
    }

    protected static function createHealthClientMock(): Mock
    {
        return (new ApiHealthClientMock())->setPersister(new MockPersister());
    }

    protected static function createImageClientMock(): Mock
    {
        return (new ApiImageClientMock())->setPersister(new MockPersister());
    }

    protected static function createImageGeneratorsClientMock(): Mock
    {
        return (new ApiImageGeneratorsClientMock())->setPersister(new MockPersister());
    }

    protected static function createKnowledgeClientMock(): Mock
    {
        return (new ApiKnowledgeClientMock())->setPersister(new MockPersister());
    }

    protected static function createLLMsClientMock(): Mock
    {
        return (new ApiLLMsClientMock())->setPersister(new MockPersister());
    }

    protected static function createMemoryBankClientMock(): Mock
    {
        return (new ApiMemoryBankClientMock())->setPersister(new MockPersister());
    }

    protected static function createMemorySearchClientMock(): Mock
    {
        return (new ApiMemorySearchClientMock())->setPersister(new MockPersister());
    }

    protected static function createNewsClientMock(): Mock
    {
        return (new ApiNewsClientMock())->setPersister(new MockPersister());
    }

    protected static function createProjectSecretsClientMock(): Mock
    {
        return (new ApiProjectSecretsClientMock())->setPersister(new MockPersister());
    }

    protected static function createProjectsClientMock(): Mock
    {
        return (new ApiProjectsClientMock())->setPersister(new MockPersister());
    }

    protected static function createRoutinesClientMock(): Mock
    {
        return (new ApiRoutinesClientMock())->setPersister(new MockPersister());
    }

    protected static function createSearchClientMock(): Mock
    {
        return (new ApiSearchClientMock())->setPersister(new MockPersister());
    }

    protected static function createSettingsClientMock(): Mock
    {
        return (new ApiSettingsClientMock())->setPersister(new MockPersister());
    }

    protected static function createSlackClientMock(): Mock
    {
        return (new ApiSlackClientMock())->setPersister(new MockPersister());
    }

    protected static function createSpeechToTextClientMock(): Mock
    {
        return (new ApiSpeechToTextClientMock())->setPersister(new MockPersister());
    }

    protected static function createStatisticsClientMock(): Mock
    {
        return (new ApiStatisticsClientMock())->setPersister(new MockPersister());
    }

    protected static function createTeamsClientMock(): Mock
    {
        return (new ApiTeamsClientMock())->setPersister(new MockPersister());
    }

    protected static function createTemplatesClientMock(): Mock
    {
        return (new ApiTemplatesClientMock())->setPersister(new MockPersister());
    }

    protected static function createToolsClientMock(): Mock
    {
        return (new ApiToolsClientMock())->setPersister(new MockPersister());
    }

    protected static function createUsersClientMock(): Mock
    {
        return (new ApiUsersClientMock())->setPersister(new MockPersister());
    }

    protected static function createWebhooksClientMock(): Mock
    {
        return (new ApiWebhooksClientMock())->setPersister(new MockPersister());
    }

    protected static function createWhatsAppClientMock(): Mock
    {
        return (new ApiWhatsAppClientMock())->setPersister(new MockPersister());
    }

    protected static function createWidgetClientMock(): Mock
    {
        return (new ApiWidgetClientMock())->setPersister(new MockPersister());
    }

    protected static function createWidgetsClientMock(): Mock
    {
        return (new ApiWidgetsClientMock())->setPersister(new MockPersister());
    }
}
