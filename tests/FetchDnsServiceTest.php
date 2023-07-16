<?php

namespace Supersem\FetchDnsService\Tests;

use Supersem\FetchDnsService\FetchDnsService;
use PHPUnit\Framework\TestCase;

class FetchDnsServiceTest extends TestCase
{
    public function testGetDnsRecords(): void
    {
        $fetchDnsService = new FetchDnsService();

        $result = $fetchDnsService->getDnsRecords("gmail.com");

        $this->assertNotEmpty($result);
        $this->assertIsArray($result);
    }
}
