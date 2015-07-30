# PHP Simple Whois Data Parser
This is an simple whois data parser in PHP.

# Example Usage

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

## By AREFLY.COM