<?php

namespace Supersem\FetchDnsService;

class FetchDnsService
{
    public function getDnsRecords($domain): array
    {
        return dns_get_record($domain);
    }
}
