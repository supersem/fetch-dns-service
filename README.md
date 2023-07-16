# FetchDnsService

This is a PHP library for the Laravel framework that allows us to get all DNS records for the specified domain name.


## Requirements

- PHP v.8.2 or later
- Composer
## Installation

 Navigate to your project directory and install the library via composer:

```bash
   cd your-project
   composer require supersem/fetch-dns-service
```
    
## Usage/Examples

```javascript
use Supersem\FetchDnsService\FetchDnsService;

$fetchDnsService = new FetchDnsService();
$result = $fetchDnsService->getDnsRecords("gmail.com");

print_r($result);

[
    ["type" => "A", "host" => "gmail.com", "ttl" => "3360", "ip" => "142.250.1.19"],
    ["type" => "TXT", "host" => "gmail.com", "ttl" => "18640", "txt" => "globalsign-smime-dv=CDYX+XFHUw2wml6/Gb8+59BsH31KzUr6c1l2BPvqKX8="],
    ...
];
```


## Running Tests

To run tests, run the following command

```bash
./vendor/bin/phpunit vendor/supersem/fetch-dns-service/tests
```


## License

This library is open-source and available under the 
[MIT](https://choosealicense.com/licenses/mit/) license.
