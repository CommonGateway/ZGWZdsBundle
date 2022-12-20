<?php

// src/Service/ZgwZdsService.php

namespace CommonGateway\ZgwZdsBundle\Service;

class ZgwZdsService
{

    /*
     * Returns a welcoming string
     * 
     * @return array 
     */
    public function zgwZdsHandler(array $data, array $configuration): array
    {
        return ['response' => 'Hello. Your ZgwZdsBundle works'];
    }
}
