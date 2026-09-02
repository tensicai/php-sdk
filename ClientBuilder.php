<?php

declare(strict_types=1);

namespace TeamBlue\TensicAI\SDK;

use TeamBlue\ClientMock\Mock;
use TeamBlue\ClientMock\MockPersister;
use TeamBlue\TensicAI\SDK\Client\AbstractClientBuilder;
use TeamBlue\TensicAI\SDK\Client\AdminClient;
use TeamBlue\TensicAI\SDK\Client\ApiAdminClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiAudioClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiAuthClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiChatClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiClassifiersClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiCommentsClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiDefaultClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiDirectAccessClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiEmbeddingsClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiEvaluationsClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiExamplesClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiGuardsClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiHealthClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiImageClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiImageGeneratorsClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiKnowledgeClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiLLMsClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiMemoryBankClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiMemorySearchClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiNewsClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiProjectsClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiProjectSecretsClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiRoutinesClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiSearchClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiSettingsClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiSlackClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiSpeechToTextClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiStatisticsClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiTeamsClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiTemplatesClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiToolsClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiUsersClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiWebhooksClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiWhatsAppClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiWidgetClientMock;
use TeamBlue\TensicAI\SDK\Client\ApiWidgetsClientMock;
use TeamBlue\TensicAI\SDK\Client\AudioClient;
use TeamBlue\TensicAI\SDK\Client\AuthClient;
use TeamBlue\TensicAI\SDK\Client\ChatClient;
use TeamBlue\TensicAI\SDK\Client\ClassifiersClient;
use TeamBlue\TensicAI\SDK\Client\CommentsClient;
use TeamBlue\TensicAI\SDK\Client\DefaultClient;
use TeamBlue\TensicAI\SDK\Client\DirectAccessClient;
use TeamBlue\TensicAI\SDK\Client\EmbeddingsClient;
use TeamBlue\TensicAI\SDK\Client\EvaluationsClient;
use TeamBlue\TensicAI\SDK\Client\ExamplesClient;
use TeamBlue\TensicAI\SDK\Client\GuardsClient;
use TeamBlue\TensicAI\SDK\Client\HealthClient;
use TeamBlue\TensicAI\SDK\Client\ImageClient;
use TeamBlue\TensicAI\SDK\Client\ImageGeneratorsClient;
use TeamBlue\TensicAI\SDK\Client\KnowledgeClient;
use TeamBlue\TensicAI\SDK\Client\LLMsClient;
use TeamBlue\TensicAI\SDK\Client\MemoryBankClient;
use TeamBlue\TensicAI\SDK\Client\MemorySearchClient;
use TeamBlue\TensicAI\SDK\Client\NewsClient;
use TeamBlue\TensicAI\SDK\Client\ProjectsClient;
use TeamBlue\TensicAI\SDK\Client\ProjectSecretsClient;
use TeamBlue\TensicAI\SDK\Client\RoutinesClient;
use TeamBlue\TensicAI\SDK\Client\SearchClient;
use TeamBlue\TensicAI\SDK\Client\SettingsClient;
use TeamBlue\TensicAI\SDK\Client\SlackClient;
use TeamBlue\TensicAI\SDK\Client\SpeechToTextClient;
use TeamBlue\TensicAI\SDK\Client\StatisticsClient;
use TeamBlue\TensicAI\SDK\Client\TeamsClient;
use TeamBlue\TensicAI\SDK\Client\TemplatesClient;
use TeamBlue\TensicAI\SDK\Client\ToolsClient;
use TeamBlue\TensicAI\SDK\Client\UsersClient;
use TeamBlue\TensicAI\SDK\Client\WebhooksClient;
use TeamBlue\TensicAI\SDK\Client\WhatsAppClient;
use TeamBlue\TensicAI\SDK\Client\WidgetClient;
use TeamBlue\TensicAI\SDK\Client\WidgetsClient;

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
