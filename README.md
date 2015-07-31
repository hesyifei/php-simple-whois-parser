# PHP Simple Whois Data Parser
An simple whois data parser in PHP.

# Sample Usage

```php
<?php
require_once 'whois.php';
$whoisClass = new Whois;

$domain = "hello.com";

$whoisResult = $whoisClass->query($domain);

if(!is_array($whoisResult)){
	if(mb_substr($whoisResult, 0, 3) == "++["){
		die($whoisResult);
	}
}else{
	print_r($whoisResult);
}
?>
```

Another example can be found in `example.php`.

# Sample Result

```
Array
(
    [domain] => github.com
    [id] => 1264983250_DOMAIN_COM-VRSN
    [whois_server] => Array
        (
            [0] => whois.markmonitor.com
        )

    [registrar_url] => Array
        (
            [0] => http://www.markmonitor.com
        )

    [updated] => Array
        (
            [0] => 2015-01-08T04:00:18-0800
        )

    [created] => Array
        (
            [0] => 2007-10-09T11:20:50-0700
        )

    [expires] => Array
        (
            [0] => 2020-10-09T11:20:50-0700
        )

    [registrar] => Array
        (
            [0] => MarkMonitor, Inc.
        )

    [status] => Array
        (
            [0] => clientUpdateProhibited (https://www.icann.org/epp#clientUpdateProhibited)
            [1] => clientTransferProhibited (https://www.icann.org/epp#clientTransferProhibited)
            [2] => clientDeleteProhibited (https://www.icann.org/epp#clientDeleteProhibited)
        )

    [dns] => Array
        (
            [0] => ns3.p16.dynect.net
            [1] => ns2.p16.dynect.net
            [2] => ns1.p16.dynect.net
            [3] => ns4.p16.dynect.net
        )

    [created_parsed] => Array
        (
            [year] => 2007
            [month] => 10
            [day] => 9
            [hour] => 11
            [minute] => 20
            [second] => 50
            [fraction] => 0
            [warning_count] => 0
            [warnings] => Array
                (
                )

            [error_count] => 0
            [errors] => Array
                (
                )

            [is_localtime] => 1
            [zone_type] => 1
            [zone] => 420
            [is_dst] => 
        )

    [created_parsed_string] => 2007-10-09 11:20:50
    [expires_parsed] => Array
        (
            [year] => 2020
            [month] => 10
            [day] => 9
            [hour] => 11
            [minute] => 20
            [second] => 50
            [fraction] => 0
            [warning_count] => 0
            [warnings] => Array
                (
                )

            [error_count] => 0
            [errors] => Array
                (
                )

            [is_localtime] => 1
            [zone_type] => 1
            [zone] => 420
            [is_dst] => 
        )

    [expires_parsed_string] => 2020-10-09 11:20:50
    [updated_parsed] => Array
        (
            [year] => 2015
            [month] => 1
            [day] => 8
            [hour] => 4
            [minute] => 0
            [second] => 18
            [fraction] => 0
            [warning_count] => 0
            [warnings] => Array
                (
                )

            [error_count] => 0
            [errors] => Array
                (
                )

            [is_localtime] => 1
            [zone_type] => 1
            [zone] => 480
            [is_dst] => 
        )

    [updated_parsed_string] => 2015-01-08 04:00:18
    [registrant] => Array
        (
            [name] => GitHub Hostmaster
            [organization] => GitHub, Inc.
            [address] => Array
                (
                    [0] => 88 Colin P Kelly Jr St,
                )

            [city] => San Francisco
            [state_province] => CA
            [postal_code] => 94107
            [country] => US
            [phone] => +1.4157354488
            [email] => hostmaster@github.com
        )

    [admin] => Array
        (
            [name] => GitHub Hostmaster
            [organization] => GitHub, Inc.
            [address] => Array
                (
                    [0] => 88 Colin P Kelly Jr St,
                )

            [city] => San Francisco
            [state_province] => CA
            [postal_code] => 94107
            [country] => US
            [phone] => +1.4157354488
            [email] => hostmaster@github.com
        )

    [tech] => Array
        (
            [name] => GitHub Hostmaster
            [organization] => GitHub, Inc.
            [address] => Array
                (
                    [0] => 88 Colin P Kelly Jr St,
                )

            [city] => San Francisco
            [state_province] => CA
            [postal_code] => 94107
            [country] => US
            [phone] => +1.4157354488
            [email] => hostmaster@github.com
        )

)
```

## By AREFLY.COM