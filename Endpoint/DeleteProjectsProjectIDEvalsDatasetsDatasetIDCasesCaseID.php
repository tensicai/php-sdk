<?php

declare(strict_types=1);

namespace TensicAI\SDK\Endpoint;

use EventEngine\Data\SpecialKeySupport;
use TeamBlue\OpenApi\Codegen\Endpoint\Endpoint;
use TeamBlue\OpenApi\Codegen\Endpoint\EndpointLogic;
use TeamBlue\OpenApi\Codegen\Endpoint\SpecialKeySupportLogic;

class DeleteProjectsProjectIDEvalsDatasetsDatasetIDCasesCaseID implements Endpoint, SpecialKeySupport
{
    use EndpointLogic;
    use SpecialKeySupportLogic;

    private string $method = 'DELETE';
    private string $uri = '/projects/{projectID}/evals/datasets/{datasetID}/cases/{caseID}';
    private int $projectID;
    private int $datasetID;
    private int $caseID;

    public function projectID(): int
    {
        return $this->projectID;
    }

    public function datasetID(): int
    {
        return $this->datasetID;
    }

    public function caseID(): int
    {
        return $this->caseID;
    }

    /** @return array<string,mixed> */
    public function toRequestParameters(): array
    {
        return [
            'projectID' => $this->projectID,
            'datasetID' => $this->datasetID,
            'caseID' => $this->caseID,
        ];
    }

    /** @return array<string,string> */
    public function keyMapping(): array
    {
        return [
            'projectID' => 'projectID',
            'datasetID' => 'datasetID',
            'caseID' => 'caseID',
        ];
    }
}
