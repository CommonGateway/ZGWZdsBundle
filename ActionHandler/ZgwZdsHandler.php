<?php

namespace CommonGateway\ZgwZdsBundle\ActionHandler;

use CommonGateway\ZgwZdsBundle\Service\ZgwZdsService;

class ZgwZdsHandler
{
    private ZgwZdsService $zgwZdsService;

    public function __construct(ZgwZdsService $zgwZdsService)
    {
        $this->zgwZdsService = $zgwZdsService;
    }

    /**
     *  This function returns the requered configuration as a [json-schema](https://json-schema.org/) array.
     *
     * @throws array a [json-schema](https://json-schema.org/) that this  action should comply to
     */
    public function getConfiguration(): array
    {
        return [
            '$id'         => 'https://example.com/person.schema.json',
            '$schema'     => 'https://json-schema.org/draft/2020-12/schema',
            'title'       => 'ZgwZds Action',
            'description' => 'This handler returns a welcoming string',
            'required'    => [],
            'properties'  => [],
        ];
    }

    /**
     * This function runs the service.
     *
     * @param array $data          The data from the call
     * @param array $configuration The configuration of the action
     *
     * @throws GatewayException
     * @throws CacheException
     * @throws InvalidArgumentException
     * @throws ComponentException
     *
     * @return array
     */
    public function run(array $data, array $configuration): array
    {
        return $this->zgwZdsService->zgwZdsHandler($data, $configuration);
    }
}
