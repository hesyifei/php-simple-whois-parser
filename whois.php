<?php
error_reporting(E_ALL & ~E_NOTICE);

class Whois{
	private $whoisServers = [
	"ac" => "whois.nic.ac", // Ascension Island
	// ad - Andorra - no whois server assigned
	"ae" => "whois.nic.ae", // United Arab Emirates
	"aero"=>"whois.aero",
	"af" => "whois.nic.af", // Afghanistan
	"ag" => "whois.nic.ag", // Antigua And Barbuda
	"ai" => "whois.ai", // Anguilla
	"al" => "whois.ripe.net", // Albania
	"am" => "whois.amnic.net",	// Armenia
	// an - Netherlands Antilles - no whois server assigned
	// ao - Angola - no whois server assigned
	// aq - Antarctica (New Zealand) - no whois server assigned
	// ar - Argentina - no whois server assigned
	"arpa" => "whois.iana.org",
	"as" => "whois.nic.as", // American Samoa
	"asia" => "whois.nic.asia",
	"at" => "whois.nic.at", // Austria
	"au" => "whois.aunic.net", // Australia
	// aw - Aruba - no whois server assigned
	"ax" => "whois.ax", // Aland Islands
	"az" => "whois.ripe.net", // Azerbaijan
	// ba - Bosnia And Herzegovina - no whois server assigned
	// bb - Barbados - no whois server assigned
	// bd - Bangladesh - no whois server assigned
	"be" => "whois.dns.be", // Belgium
	"bg" => "whois.register.bg", // Bulgaria
	"bi" => "whois.nic.bi", // Burundi
	"biz" => "whois.biz",
	"bj" => "whois.nic.bj", // Benin
	// bm - Bermuda - no whois server assigned
	"bn" => "whois.bn", // Brunei Darussalam
	"bo" => "whois.nic.bo", // Bolivia
	"br" => "whois.registro.br", // Brazil
	"bt" => "whois.netnames.net", // Bhutan
	// bv - Bouvet Island (Norway) - no whois server assigned
	// bw - Botswana - no whois server assigned
	"by" => "whois.cctld.by", // Belarus
	"bz" => "whois.belizenic.bz", // Belize
	"ca" => "whois.cira.ca", // Canada
	"cat" => "whois.cat", // Spain
	"cc" => "whois.nic.cc", // Cocos (Keeling) Islands
	"cd" => "whois.nic.cd", // Congo, The Democratic Republic Of The
	// cf - Central African Republic - no whois server assigned
	"ch" => "whois.nic.ch", // Switzerland
	"ci" => "whois.nic.ci", // Cote d'Ivoire
	"ck" => "whois.nic.ck", // Cook Islands
	"cl" => "whois.nic.cl", // Chile
	// cm - Cameroon - no whois server assigned
	"cn" => "whois.cnnic.net.cn", // China
	"co" => "whois.nic.co", // Colombia
	"com" => "whois.verisign-grs.com",
	//"com" => "whois.iana.org",
	"coop" => "whois.nic.coop",
	// cr - Costa Rica - no whois server assigned
	// cu - Cuba - no whois server assigned
	// cv - Cape Verde - no whois server assigned
	// cw - Curacao - no whois server assigned
	"cx" => "whois.nic.cx", // Christmas Island
	// cy - Cyprus - no whois server assigned
	"cz" => "whois.nic.cz", // Czech Republic
	"de" => "whois.denic.de", // Germany
	// dj - Djibouti - no whois server assigned
	"dk" => "whois.dk-hostmaster.dk", // Denmark
	"dm" => "whois.nic.dm", // Dominica
	// do - Dominican Republic - no whois server assigned
	"dz" => "whois.nic.dz", // Algeria
	"ec" => "whois.nic.ec", // Ecuador
	"edu" => "whois.educause.edu",
	"ee" => "whois.eenet.ee", // Estonia
	"eg" => "whois.ripe.net", // Egypt
	// er - Eritrea - no whois server assigned
	"es" => "whois.nic.es", // Spain
	// et - Ethiopia - no whois server assigned
	//"eu" => "whois.eu",
	"eu" => "eu.whois-servers.net",
	"fi" => "whois.ficora.fi", // Finland
	// fj - Fiji - no whois server assigned
	// fk - Falkland Islands - no whois server assigned
	// fm - Micronesia, Federated States Of - no whois server assigned
	"fo" => "whois.nic.fo", // Faroe Islands
	"fr" => "whois.nic.fr", // France
	// ga - Gabon - no whois server assigned
	"gd" => "whois.nic.gd", // Grenada
	// ge - Georgia - no whois server assigned
	// gf - French Guiana - no whois server assigned
	"gg" => "whois.gg", // Guernsey
	// gh - Ghana - no whois server assigned
	"gi" => "whois2.afilias-grs.net", // Gibraltar
	"gl" => "whois.nic.gl", // Greenland (Denmark)
	// gm - Gambia - no whois server assigned
	// gn - Guinea - no whois server assigned
	"gov" => "whois.nic.gov",
	// gr - Greece - no whois server assigned
	// gt - Guatemala - no whois server assigned
	"gs" => "whois.nic.gs", // South Georgia And The South Sandwich Islands
	// gu - Guam - no whois server assigned
	// gw - Guinea-bissau - no whois server assigned
	"gy" => "whois.registry.gy", // Guyana
	"hk" => "whois.hkirc.hk", // Hong Kong
	// hm - Heard and McDonald Islands (Australia) - no whois server assigned
	"hn" => "whois.nic.hn", // Honduras
	"hr" => "whois.dns.hr", // Croatia
	"ht" => "whois.nic.ht", // Haiti
	"hu" => "whois.nic.hu", // Hungary
	// id - Indonesia - no whois server assigned
	"ie" => "whois.domainregistry.ie", // Ireland
	"il" => "whois.isoc.org.il", // Israel
	"im" => "whois.nic.im", // Isle of Man
	"in" => "whois.inregistry.net", // India
	"info" => "whois.afilias.net",
	"int" => "whois.iana.org",
	"io" => "whois.nic.io", // British Indian Ocean Territory
	"iq" => "whois.cmc.iq", // Iraq
	"ir" => "whois.nic.ir", // Iran, Islamic Republic Of
	"is" => "whois.isnic.is", // Iceland
	"it" => "whois.nic.it", // Italy
	"je" => "whois.je", // Jersey
	// jm - Jamaica - no whois server assigned
	// jo - Jordan - no whois server assigned
	"jobs" => "jobswhois.verisign-grs.com",
	"jp" => "whois.jprs.jp", // Japan
	"ke" => "whois.kenic.or.ke", // Kenya
	"kg" => "www.domain.kg", // Kyrgyzstan
	// kh - Cambodia - no whois server assigned
	"ki" => "whois.nic.ki", // Kiribati
	// km - Comoros - no whois server assigned
	// kn - Saint Kitts And Nevis - no whois server assigned
	// kp - Korea, Democratic People's Republic Of - no whois server assigned
	"kr" => "whois.kr", // Korea, Republic Of
	// kw - Kuwait - no whois server assigned
	// ky - Cayman Islands - no whois server assigned
	"kz" => "whois.nic.kz", // Kazakhstan
	"la" => "whois.nic.la", // Lao People's Democratic Republic
	// lb - Lebanon - no whois server assigned
	// lc - Saint Lucia - no whois server assigned
	"li" => "whois.nic.li", // Liechtenstein
	// lk - Sri Lanka - no whois server assigned
	"lt" => "whois.domreg.lt", // Lithuania
	"lu" => "whois.dns.lu", // Luxembourg
	"lv" => "whois.nic.lv", // Latvia
	"ly" => "whois.nic.ly", // Libya
	"ma" => "whois.iam.net.ma", // Morocco
	// mc - Monaco - no whois server assigned
	"md" => "whois.nic.md", // Moldova
	"me" => "whois.nic.me", // Montenegro
	"mg" => "whois.nic.mg", // Madagascar
	// mh - Marshall Islands - no whois server assigned
	"mil" => "whois.nic.mil",
	// mk - Macedonia, The Former Yugoslav Republic Of - no whois server assigned
	"ml" => "whois.dot.ml", // Mali
	// mm - Myanmar - no whois server assigned
	"mn" => "whois.nic.mn", // Mongolia
	"mo" => "whois.monic.mo", // Macao
	"mobi" => "whois.dotmobiregistry.net",
	"mp" => "whois.nic.mp", // Northern Mariana Islands
	// mq - Martinique (France) - no whois server assigned
	// mr - Mauritania - no whois server assigned
	"ms" => "whois.nic.ms", // Montserrat
	// mt - Malta - no whois server assigned
	"mu" => "whois.nic.mu", // Mauritius
	"museum" => "whois.museum",
	// mv - Maldives - no whois server assigned
	// mw - Malawi - no whois server assigned
	"mx" => "whois.mx", // Mexico
	"my" => "whois.domainregistry.my", // Malaysia
	// mz - Mozambique - no whois server assigned
	"na" => "whois.na-nic.com.na", // Namibia
	"name" => "whois.nic.name",
	"nc" => "whois.nc", // New Caledonia
	// ne - Niger - no whois server assigned
	"net" => "whois.verisign-grs.net",
	"nf" => "whois.nic.nf", // Norfolk Island
	"ng" => "whois.nic.net.ng", // Nigeria
	// ni - Nicaragua - no whois server assigned
	"nl" => "whois.domain-registry.nl", // Netherlands
	"no" => "whois.norid.no", // Norway
	// np - Nepal - no whois server assigned
	// nr - Nauru - no whois server assigned
	"nu" => "whois.nic.nu", // Niue
	"nz" => "whois.srs.net.nz", // New Zealand
	"om" => "whois.registry.om", // Oman
	//"org" => "whois.pir.org",
	"org" => "org.whois-servers.net",
	// pa - Panama - no whois server assigned
	"pe" => "kero.yachay.pe", // Peru
	"pf" => "whois.registry.pf", // French Polynesia
	// pg - Papua New Guinea - no whois server assigned
	// ph - Philippines - no whois server assigned
	// pk - Pakistan - no whois server assigned
	"pl" => "whois.dns.pl", // Poland
	"pm" => "whois.nic.pm", // Saint Pierre and Miquelon (France)
	// pn - Pitcairn (New Zealand) - no whois server assigned
	"post" => "whois.dotpostregistry.net",
	"pr" => "whois.nic.pr", // Puerto Rico
	"pro" => "whois.dotproregistry.net",
	// ps - Palestine, State of - no whois server assigned
	"pt" => "whois.dns.pt", // Portugal
	"pw" => "whois.nic.pw", // Palau
	// py - Paraguay - no whois server assigned
	"qa" => "whois.registry.qa", // Qatar
	"re" => "whois.nic.re", // Reunion (France)
	"ro" => "whois.rotld.ro", // Romania
	"rs" => "whois.rnids.rs", // Serbia
	"ru" => "whois.tcinet.ru", // Russian Federation
	// rw - Rwanda - no whois server assigned
	"sa" => "whois.nic.net.sa", // Saudi Arabia
	"sb" => "whois.nic.net.sb", // Solomon Islands
	"sc" => "whois2.afilias-grs.net", // Seychelles
	// sd - Sudan - no whois server assigned
	"se" => "whois.iis.se", // Sweden
	"sg" => "whois.sgnic.sg", // Singapore
	"sh" => "whois.nic.sh", // Saint Helena
	"si" => "whois.arnes.si", // Slovenia
	"sk" => "whois.sk-nic.sk", // Slovakia
	// sl - Sierra Leone - no whois server assigned
	"sm" => "whois.nic.sm", // San Marino
	"sn" => "whois.nic.sn", // Senegal
	"so" => "whois.nic.so", // Somalia
	// sr - Suriname - no whois server assigned
	"st" => "whois.nic.st", // Sao Tome And Principe
	"su" => "whois.tcinet.ru", // Russian Federation
	// sv - El Salvador - no whois server assigned
	"sx" => "whois.sx", // Sint Maarten (dutch Part)
	"sy" => "whois.tld.sy", // Syrian Arab Republic
	// sz - Swaziland - no whois server assigned
	"tc" => "whois.meridiantld.net", // Turks And Caicos Islands
	// td - Chad - no whois server assigned
	"tel" => "whois.nic.tel",
	"tf" => "whois.nic.tf", // French Southern Territories
	// tg - Togo - no whois server assigned
	"th" => "whois.thnic.co.th", // Thailand
	"tj" => "whois.nic.tj", // Tajikistan
	"tk" => "whois.dot.tk", // Tokelau
	"tl" => "whois.nic.tl", // Timor-leste
	"tm" => "whois.nic.tm", // Turkmenistan
	"tn" => "whois.ati.tn", // Tunisia
	"to" => "whois.tonic.to", // Tonga
	"tp" => "whois.nic.tl", // Timor-leste
	"tr" => "whois.nic.tr", // Turkey
	"travel" => "whois.nic.travel",
	// tt - Trinidad And Tobago - no whois server assigned
	"tv" => "tvwhois.verisign-grs.com", // Tuvalu
	"tw" => "whois.twnic.net.tw", // Taiwan
	"tz" => "whois.tznic.or.tz", // Tanzania, United Republic Of
	"ua" => "whois.ua", // Ukraine
	"ug" => "whois.co.ug", // Uganda
	"uk" => "whois.nic.uk", // United Kingdom
	"us" => "whois.nic.us", // United States
	"uy" => "whois.nic.org.uy", // Uruguay
	"uz" => "whois.cctld.uz", // Uzbekistan
	// va - Holy See (vatican City State) - no whois server assigned
	"vc" => "whois2.afilias-grs.net", // Saint Vincent And The Grenadines
	"ve" => "whois.nic.ve", // Venezuela
	"vg" => "whois.adamsnames.tc", // Virgin Islands, British
	// vi - Virgin Islands, US - no whois server assigned
	// vn - Viet Nam - no whois server assigned
	// vu - Vanuatu - no whois server assigned
	"wf" => "whois.nic.wf", // Wallis and Futuna
	"ws" => "whois.website.ws", // Samoa
	"xxx" => "whois.nic.xxx",
	// ye - Yemen - no whois server assigned
	"yt" => "whois.nic.yt", // Mayotte
	"yu" => "whois.ripe.net"];
	//"中文" => "whois.afilias-srs.net"];

	public function query($domain, $type = 'array', $raw = false){
		$domain = strip_tags($domain);

		$explodedDomain = explode(".", $domain);
		$explodedCount = count($explodedDomain);
		if(empty($explodedDomain[$explodedCount-1])){
			return "++[ERROR_NOT_A_DOMAIN]++";
		}

		$domainArr = array_slice($explodedDomain, -2);
		$domain = implode(".", $domainArr);
		//$domain = $explodedDomain[$explodedCount-2].".".$explodedDomain[$explodedCount-1];

		if(array_key_exists($explodedDomain[$explodedCount-1], $this->whoisServers)){
			if(array_key_exists($explodedDomain[$explodedCount-2], $this->whoisServers)){
				//$domain = $explodedDomain[$explodedCount-3].".".$explodedDomain[$explodedCount-2].".".$explodedDomain[$explodedCount-1];
				$domainArr = array_slice($explodedDomain, -3);
				$domain = implode(".", $domainArr);
			}
		}

		$tld = substr($domain, strrpos($domain, '.') + 1);

		//$this->returnType = $type

		$data = [];

		$data = $this->getWhoisResult($domain, $tld);

		if(mb_substr($data[0], 0, 3) == "++["){
			return $data[0];
		}else{
			$whoisServerFromWhois = $this->parse($data, $domain, 'Domain Name:', ['Whois Server' => 'whois_server'], true);
			if(!empty($whoisServerFromWhois['whois_server'][0])){
				$data = $this->getWhoisResult($domain, $tld, $whoisServerFromWhois['whois_server'][0]);
			}
			
			$parsedResult = $this->parse_domain($data, $domain, $tld);

			if(!empty($parsedResult[0])){
				if(mb_substr($parsedResult[0], 0, 3) == "++["){
					return $parsedResult[0];
				}
			}else{
				if($type == "text"){
					return trim(implode("\n", $data));
				}else{
					return $parsedResult;
				}
			}
		}
	}

	private function getWhoisResult($domain = '', $tld = '', $serverUrl = '') {
		if (empty($domain)) {
			return ["++[ERROR_NOTHING_ENTERED]++"];
		}
		if(strpos($domain, ".") == false){
			return ["++[ERROR_NOT_A_DOMAIN]++"];
		}

		if (!array_key_exists($tld, $this->whoisServers)){
			return ["++[ERROR_UNSUPPORTED_TLD]++"];
		}

		if(empty($serverUrl)){
			$serverUrl = $this->whoisServers[$tld];
		}
		$f = fsockopen($serverUrl, 43);
		
		$needToBeAddEqual = ["whois.verisign-grs.com", "whois.verisign-grs.net"];

		if (in_array($serverUrl, $needToBeAddEqual)){
			fputs($f, "=" . $domain . "\r\n");
		}else{
			fputs($f, $domain . "\r\n");		
		}

		/*else if($tld == "中文"){
			$domain = str_replace(".中文", ".xn--fiq228c", $domain);
			fputs($f, $domain . "\r\n");
		}*/

		$data = [];

		while (!feof($f)){
			$data[] = rtrim(fgets($f), "\n");
		}
		
		if($_GET['type'] != "text"){
			$stringsExistToMeanAvailable = ["No Match", "No match for", "Status: AVAILABLE", "NOT FOUND", "Not found", "No Found", "No information available about domain name", "No matching record.", "No entries found in the AFNIC Database.", "The domain has not been registered.", "Status: free"];
			$stringsExistToMeanErrorInput = ["Incorrect input, please try again.", "Error for \""];
			$stringsExistToMeanWaitSomeTime = ["Please maintain at least " => "Please maintain at least %d-second time before starting another enquiry."];

			foreach($data as $eachLine){
				foreach($stringsExistToMeanAvailable as $stringExistToMeanAvailable){
					if(strpos($eachLine, $stringExistToMeanAvailable) !== false){
						return ["++[ERROR_NO_MATCH]++"];
					}
				}
				foreach($stringsExistToMeanErrorInput as $stringExistToMeanErrorInput){
					if(strpos($eachLine, $stringExistToMeanErrorInput) !== false){
						return ["++[ERROR_INPUT]++"];
					}
				}
				foreach($stringsExistToMeanWaitSomeTime as $stringExistToMeanWaitSomeTime => $sscanfFullString){
					if(strpos($eachLine, $stringExistToMeanWaitSomeTime) !== false){
						if($sscanfFullString == "N/A"){
							return ["++[PLZ_WAIT_SOME_TIME]++"];
						}else{
							sscanf($eachLine, $sscanfFullString, $second);
							if(!empty($second)){
								return ["++[PLZ_WAIT_".$second."_SEC]++"];
							}else{
								return ["++[PLZ_WAIT_SOME_TIME]++"];
							}
						}
					}
				}
			}
		}

		//print_r($data);
		
		/*if ($raw === true)
		{
			return $data;
		}*/

		return $data;
	}
	
	private function parse($data, $domain, $domainWord, $keywords, $breakOnEnter)
	{
		$found = false;					
		$domainWordLen = strlen($domainWord);
		
		$res = [];

		foreach ($data AS $d)
		{
			$d = trim($d);
			
			if ($d == '')
			{
				if ($breakOnEnter)
				{
					$found = false;
				}
				continue;				
			}	
			
			$pos = strpos($d, $domainWord);
			if ($pos !== false)
			{
				$dom = strtolower(trim(substr($d, $pos + $domainWordLen)));
				if ($dom == $domain)
				{
					$found = true;
				}
			}
			
			if ($found)
			{
				$pos = strpos($d, ':');
				if ($pos !== false)
				{
					$keyword = substr($d, 0, $pos);
					
					if (isset($keywords[$keyword]))
					{
						$t = trim(substr($d, $pos+1));
						if ($t != '')
						{
							$res[$keywords[$keyword]][] = $t;
						}
					}
					else
					{
						$keyword = '';
					} 
				}
				else if ($keyword)
				{
					$res[$keywords[$keyword]][] = $d;
				}
			}
		}
		return $res;
	}

	private function parse_domain($data, $domain, $tld)
	{
		$domainWords = [
		'def' => 'Domain Name:',
		'com' => 'Domain Name:',
		'org' => 'Domain Name:',
		'net' => 'Domain Name:',
		'biz' => 'Domain Name:',
		'info' => 'Domain Name:',
		'name' => 'Domain Name:',
		'asia' => 'Domain Name:',
		'pl' => 'DOMAIN NAME:',
		'de' => 'Domain:',
		'fr' => 'domain:',
		'eu' => 'Domain:',
		'us' => 'Domain Name:',
		'cn' => 'Domain Name:',
		'hk' => 'Domain Name:',
		'tw' => 'Domain Name:'
		];

		$domainsKeywords = [
			[ 'id'			=> ['Domain ID', 'Domain Name ID', 'Registry Domain ID'] ],
			[ 'domain'		=> ['Domain name', 'Domain Name', 'DOMAIN NAME', 'Domain', 'domain'] ],
			[ 'bundled_domain'		=> ['Bundled Domain Name'] ],
			[ 'dns'			=> ['Name Server', 'Nameservers', 'Name servers', 'Name Servers Information', 'Domain servers in listed order', 'nserver', 'nameservers'] ],
			[ 'registrar'	=> ['Registrar', 'registrar', 'Registrant', 'Registrar Name', 'Created by Registrar'] ],
			[ 'registrar_url'	=> ['Registrar URL', 'Registrar URL (registration services)'] ],
			[ 'sponsoring_registrar'	=> [ 'Sponsoring Registrar'] ],
			[ 'whois_server'	=> ['Whois Server', 'WHOIS SERVER', 'Registrar WHOIS Server'] ],
			[ 'created'		=> ['Creation Date', 'Created On', 'Registration Time', 'Domain Create Date', 'Domain Registration Date', 'Domain Name Commencement Date', 'created'] ],
			[ 'updated'		=> ['last-update', 'Updated Date', 'Domain Last Updated Date', 'last modified'] ],
			[ 'expires'		=> ['Expiry Date', 'Expiration Date', 'Expiration Time', 'Domain Expiration Date', 'Registrar Registration Expiration Date', 'Record expires on', 'Registry Expiry Date', 'renewal date'] ],
			[ 'status'		=> ['Status', 'status', 'Domain Status'] ],
		];

		$toBeParseKeywords = [];

		foreach ($domainsKeywords as $domainKeywords){
			foreach ($domainKeywords as $var => $keywords){
				foreach($keywords as $keyword){
					$toBeParseKeywords[$keyword] = $var;
				}
			}
		}

		$contactInfoCategories = [
			[ 'id'			=> ['ID'] ],
			[ 'name'		=> ['Name'] ],
			[ 'organization'	=> ['Organization'] ],
			[ 'city'		=> ['City'] ],
			[ 'country'		=> ['Country', 'Country/Economy'] ],
			[ 'address'		=> ['Street', 'Address', 'Address1', 'Address2', 'Address3', 'Address4'] ],
			[ 'state_province'	=> ['State/Province'] ],
			[ 'postal_code'		=> ['Postal Code'] ],
			[ 'email'		=> ['Email'] ],
			[ 'phone'		=> ['Phone', 'Phone Number'] ],
			[ 'phone_ext'		=> ['Phone Ext', 'Phone Ext.'] ],
			[ 'fax'			=> ['Fax', 'FAX', 'Facsimile Number'] ],
			[ 'fax_ext'		=> ['Fax Ext', 'FAX Ext.'] ]
		];

		$contactInfoKeywords = [
			[ 'admin'		=> ['Admin', 'Administrative', 'Administrative Contact'] ],
			[ 'registrant'	=> ['Registrant'] ],
			[ 'tech'		=> ['Tech', 'Technical', 'Technical Contact'] ],
			[ 'billing'		=> ['Bill', 'Billing', 'Billing Contact'] ]
		];

		foreach ($contactInfoKeywords as $contactInfoKeyword){
			foreach($contactInfoKeyword as $contactKey => $contactKeywords){
				foreach($contactKeywords as $contactKeyword){
					foreach ($contactInfoCategories as $contactInfoCategory){
						foreach ($contactInfoCategory as $var => $keywords){
							foreach($keywords as $keyword){
								$toBeParseKeywords[$contactKeyword." ".$keyword] = $contactKey."_".$var;
							}
						}
					}
				}
			}
		}

		if(array_key_exists($tld, $domainWords)){
			$domainWord = $domainWords[$tld];
		}else{
			$domainWord = $domainWords['def'];
		}
		
		$data = array_filter(array_map("Whois::ifWhiteSpace", $data));
		//print_r($data);
		$parseResult = $this->parse($data, $domain, $domainWord, $toBeParseKeywords, true);

		$needToBeSingles = ["domain", "id"];
		foreach($needToBeSingles as $needToBeSingle){
			if(!empty($parseResult[$needToBeSingle])){
				$parseResult[$needToBeSingle] = $parseResult[$needToBeSingle][0];
			}
		}
		if(!empty($parseResult['domain'])){
			$parseResult['domain'] = strtolower($parseResult['domain']);
		}

		$needToBeParsedTimeKeys = ['created', 'expires', 'updated'];
		foreach($needToBeParsedTimeKeys as $needToBeParsedTimeKey){
			if(!empty($parseResult[$needToBeParsedTimeKey])){
				$domainTime = $parseResult[$needToBeParsedTimeKey][0];
				//if ( (date_parse($domainTime)['warning_count'] == 0) && (date_parse($domainTime)['error_count'] == 0) ) {
				if (date_parse($domainTime)['error_count'] == 0) {
					$parsed_date = date_parse($domainTime);
					$parseResult[$needToBeParsedTimeKey."_parsed"] = $parsed_date;
					$date_string = date('Y-m-d H:i:s', mktime($parsed_date['hour'], $parsed_date['minute'], $parsed_date['second'], $parsed_date['month'], $parsed_date['day'], $parsed_date['year']));
					$parseResult[$needToBeParsedTimeKey."_parsed_string"] = $date_string;
				}else{
					$formatedTime = $domainTime;
					$formatedTime = str_replace("T", " ", $formatedTime);
					$formatedTime = str_replace("Z", " ", $formatedTime);
					$formatedTime = trim($formatedTime);
					$parsed_date = date_parse_from_format("Y-m-d H:i:s.u", $formatedTime);
					$parseResult[$needToBeParsedTimeKey."_parsed"] = $parsed_date;
					$date_string = date('Y-m-d H:i:s', mktime($parsed_date['hour'], $parsed_date['minute'], $parsed_date['second'], $parsed_date['month'], $parsed_date['day'], $parsed_date['year']));
					$parseResult[$needToBeParsedTimeKey."_parsed_string"] = $date_string;
				}
			}
		}

		foreach($parseResult as $eachParseResultKey => $eachParseResult){
			if (substr($eachParseResultKey, 0, 6) == "admin_") {
				unset($parseResult[$eachParseResultKey]);
				$key = substr($eachParseResultKey, 6);
				if($key != "address"){
					$eachParseResult = $eachParseResult[0];
				}
				$parseResult['admin'][$key] = $eachParseResult;
			}
			if (substr($eachParseResultKey, 0, 11) == "registrant_") {
				unset($parseResult[$eachParseResultKey]);
				$key = substr($eachParseResultKey, 11);
				if($key != "address"){
					$eachParseResult = $eachParseResult[0];
				}
				$parseResult['registrant'][$key] = $eachParseResult;
			}
			if (substr($eachParseResultKey, 0, 5) == "tech_") {
				unset($parseResult[$eachParseResultKey]);
				$key = substr($eachParseResultKey, 5);
				if($key != "address"){
					$eachParseResult = $eachParseResult[0];
				}
				$parseResult['tech'][$key] = $eachParseResult;
			}
			if (substr($eachParseResultKey, 0, 8) == "billing_") {
				unset($parseResult[$eachParseResultKey]);
				$key = substr($eachParseResultKey, 8);
				if($key != "address"){
					$eachParseResult = $eachParseResult[0];
				}
				$parseResult['bill'][$key] = $eachParseResult;
			}
		}

		$needToBeLowerCasedValueFathers = ['registrant', 'admin', 'tech', 'billing'];
		foreach($needToBeLowerCasedValueFathers as $needToBeLowerCasedValueFather){
			if(!empty($parseResult[$needToBeLowerCasedValueFather])){
				$needToBeLowerCasedValue = $parseResult[$needToBeLowerCasedValueFather]['email'];
				if(!empty($needToBeLowerCasedValue)){
					$parseResult[$needToBeLowerCasedValueFather]['email'] = strtolower($parseResult[$needToBeLowerCasedValueFather]['email']);
				}
			}
		}

		$needToAddCompletelyAddressArrays = ['registrant', 'admin', 'tech', 'billing'];
		foreach($needToAddCompletelyAddressArrays as $needToAddCompletelyAddressArray){
			if(!empty($parseResult[$needToAddCompletelyAddressArray])){
				if(!empty($parseResult[$needToAddCompletelyAddressArray]["address"])){
					$parseResult[$needToAddCompletelyAddressArray]["completely_address"] = implode(", ", $parseResult[$needToAddCompletelyAddressArray]["address"]);
					/* WILL CITY & COUNTRY WILL BE INCLUDE IN FULL ADDRESS? */
					/*$allExtraInfomations = ["city", "country"];
					foreach($allExtraInfomations as $extraInfomation){
						if(!empty($parseResult[$needToAddCompletelyAddressArray][$extraInfomation])){
							$parseResult[$needToAddCompletelyAddressArray]["completely_address"] .= ", ".$parseResult[$needToAddCompletelyAddressArray][$extraInfomation];
						}
					}*/
					$parseResult[$needToAddCompletelyAddressArray]["completely_address"] = ucwords(strtolower($parseResult[$needToAddCompletelyAddressArray]["completely_address"]));
				}
			}
		}

		if($_GET['type'] != "text"){
			if(empty($parseResult)){
				return ["++[ERROR_NOTHING_IN_ARRAY]++"];
			}
		}

		return $parseResult;
	}

	private function ifWhiteSpace($el){
		return trim($el, " ");
	}
}