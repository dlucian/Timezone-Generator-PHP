= PHP Timezone Generator =

This PHP script generates an uniform &lt;select&gt; HTML element with all the cities/countries ordered by UTC offset, so that users looking for their timezone can easily find their city.

It retrieves the Standard UTC offset, without observing DST changes so that users can look for the UTC offset that they're used to.

Usage:

    php ./generate.php

The tool retrieves all available timezones as configured on your operating system, formats it as HTML and saves is locally in timezone_select.html

Generated <select> timezone selector contains all the important cities in the world, grouped together by timezone, to make it as easy as possible for the user to find his timezone.

The content of the generated file is something like this:

    <select name="timezone" id="timezone">
      <optgroup label="UTC -11:00">
        <option value="Pacific/Midway">UTC -11:00 Midway</option>
        <option value="Pacific/Niue">UTC -11:00 Niue</option>
        <option value="Pacific/Pago_Pago">UTC -11:00 Pago_Pago</option>
      </optgroup>
      <optgroup label="UTC -10:00">
        <option value="America/Adak">UTC -10:00 Adak</option>
        <option value="Pacific/Honolulu">UTC -10:00 Honolulu</option>
        <option value="Pacific/Johnston">UTC -10:00 Johnston</option>
        <option value="Pacific/Rarotonga">UTC -10:00 Rarotonga</option>
        <option value="Pacific/Tahiti">UTC -10:00 Tahiti</option>
      </optgroup>
      <optgroup label="UTC -09:30">
        <option value="Pacific/Marquesas">UTC -09:30 Marquesas</option>
      </optgroup>
      <optgroup label="UTC -09:00">
        <option value="America/Anchorage">UTC -09:00 Anchorage</option>
        <option value="Pacific/Gambier">UTC -09:00 Gambier</option>
        <option value="America/Juneau">UTC -09:00 Juneau</option>
        <option value="America/Nome">UTC -09:00 Nome</option>
        <option value="America/Sitka">UTC -09:00 Sitka</option>
        <option value="America/Yakutat">UTC -09:00 Yakutat</option>
      </optgroup>
      <optgroup label="UTC -08:00">
        <option value="America/Dawson">UTC -08:00 Dawson</option>
        <option value="America/Los_Angeles">UTC -08:00 Los_Angeles</option>
        <option value="America/Metlakatla">UTC -08:00 Metlakatla</option>
        <option value="Pacific/Pitcairn">UTC -08:00 Pitcairn</option>
        <option value="America/Santa_Isabel">UTC -08:00 Santa_Isabel</option>
        <option value="America/Tijuana">UTC -08:00 Tijuana</option>
        <option value="America/Vancouver">UTC -08:00 Vancouver</option>
        <option value="America/Whitehorse">UTC -08:00 Whitehorse</option>
      </optgroup>
      <optgroup label="UTC -07:00">
        <option value="America/Boise">UTC -07:00 Boise</option>
        <option value="America/Cambridge_Bay">UTC -07:00 Cambridge_Bay</option>
        <option value="America/Chihuahua">UTC -07:00 Chihuahua</option>
        <option value="America/Creston">UTC -07:00 Creston</option>
        <option value="America/Dawson_Creek">UTC -07:00 Dawson_Creek</option>
        <option value="America/Denver">UTC -07:00 Denver</option>
        <option value="America/Edmonton">UTC -07:00 Edmonton</option>
        <option value="America/Hermosillo">UTC -07:00 Hermosillo</option>
        <option value="America/Inuvik">UTC -07:00 Inuvik</option>
        <option value="America/Mazatlan">UTC -07:00 Mazatlan</option>
        <option value="America/Ojinaga">UTC -07:00 Ojinaga</option>
        <option value="America/Phoenix">UTC -07:00 Phoenix</option>
        <option value="America/Shiprock">UTC -07:00 Shiprock</option>
        <option value="America/Yellowknife">UTC -07:00 Yellowknife</option>
      </optgroup>
      <optgroup label="UTC -06:00">
        <option value="America/Bahia_Banderas">UTC -06:00 Bahia_Banderas</option>
        <option value="America/Belize">UTC -06:00 Belize</option>
        <option value="America/Cancun">UTC -06:00 Cancun</option>
        <option value="America/Chicago">UTC -06:00 Chicago</option>
        <option value="America/Costa_Rica">UTC -06:00 Costa_Rica</option>
        <option value="Pacific/Easter">UTC -06:00 Easter</option>
        <option value="America/El_Salvador">UTC -06:00 El_Salvador</option>
        <option value="Pacific/Galapagos">UTC -06:00 Galapagos</option>
        <option value="America/Guatemala">UTC -06:00 Guatemala</option>
        <option value="America/Indiana/Knox">UTC -06:00 Indiana</option>
        <option value="America/Managua">UTC -06:00 Managua</option>
        <option value="America/Matamoros">UTC -06:00 Matamoros</option>
        <option value="America/Menominee">UTC -06:00 Menominee</option>
        <option value="America/Merida">UTC -06:00 Merida</option>
        <option value="America/Mexico_City">UTC -06:00 Mexico_City</option>
        <option value="America/Monterrey">UTC -06:00 Monterrey</option>
        <option value="America/North_Dakota/Center">UTC -06:00 North_Dakota</option>
        <option value="America/Rainy_River">UTC -06:00 Rainy_River</option>
        <option value="America/Rankin_Inlet">UTC -06:00 Rankin_Inlet</option>
        <option value="America/Regina">UTC -06:00 Regina</option>
        <option value="America/Resolute">UTC -06:00 Resolute</option>
        <option value="America/Swift_Current">UTC -06:00 Swift_Current</option>
        <option value="America/Tegucigalpa">UTC -06:00 Tegucigalpa</option>
        <option value="America/Winnipeg">UTC -06:00 Winnipeg</option>
      </optgroup>
      <optgroup label="UTC -05:00">
        <option value="America/Atikokan">UTC -05:00 Atikokan</option>
        <option value="America/Bogota">UTC -05:00 Bogota</option>
        <option value="America/Cayman">UTC -05:00 Cayman</option>
        <option value="America/Detroit">UTC -05:00 Detroit</option>
        <option value="America/Grand_Turk">UTC -05:00 Grand_Turk</option>
        <option value="America/Guayaquil">UTC -05:00 Guayaquil</option>
        <option value="America/Havana">UTC -05:00 Havana</option>
        <option value="America/Indiana/Winamac">UTC -05:00 Indiana</option>
        <option value="America/Iqaluit">UTC -05:00 Iqaluit</option>
        <option value="America/Jamaica">UTC -05:00 Jamaica</option>
        <option value="America/Kentucky/Louisville">UTC -05:00 Kentucky</option>
        <option value="America/Lima">UTC -05:00 Lima</option>
        <option value="America/Montreal">UTC -05:00 Montreal</option>
        <option value="America/Nassau">UTC -05:00 Nassau</option>
        <option value="America/New_York">UTC -05:00 New_York</option>
        <option value="America/Nipigon">UTC -05:00 Nipigon</option>
        <option value="America/Panama">UTC -05:00 Panama</option>
        <option value="America/Pangnirtung">UTC -05:00 Pangnirtung</option>
        <option value="America/Port-au-Prince">UTC -05:00 Port-au-Prince</option>
        <option value="America/Thunder_Bay">UTC -05:00 Thunder_Bay</option>
        <option value="America/Toronto">UTC -05:00 Toronto</option>
      </optgroup>
      <optgroup label="UTC -04:30">
        <option value="America/Caracas">UTC -04:30 Caracas</option>
      </optgroup>
      <optgroup label="UTC -04:00">
        <option value="America/Anguilla">UTC -04:00 Anguilla</option>
        <option value="America/Antigua">UTC -04:00 Antigua</option>
        <option value="America/Argentina/San_Luis">UTC -04:00 Argentina</option>
        <option value="America/Aruba">UTC -04:00 Aruba</option>
        <option value="America/Asuncion">UTC -04:00 Asuncion</option>
        <option value="America/Barbados">UTC -04:00 Barbados</option>
        <option value="Atlantic/Bermuda">UTC -04:00 Bermuda</option>
        <option value="America/Blanc-Sablon">UTC -04:00 Blanc-Sablon</option>
        <option value="America/Boa_Vista">UTC -04:00 Boa_Vista</option>
        <option value="America/Campo_Grande">UTC -04:00 Campo_Grande</option>
        <option value="America/Cuiaba">UTC -04:00 Cuiaba</option>
        <option value="America/Curacao">UTC -04:00 Curacao</option>
        <option value="America/Dominica">UTC -04:00 Dominica</option>
        <option value="America/Eirunepe">UTC -04:00 Eirunepe</option>
        <option value="America/Glace_Bay">UTC -04:00 Glace_Bay</option>
        <option value="America/Goose_Bay">UTC -04:00 Goose_Bay</option>
        <option value="America/Grenada">UTC -04:00 Grenada</option>
        <option value="America/Guadeloupe">UTC -04:00 Guadeloupe</option>
        <option value="America/Guyana">UTC -04:00 Guyana</option>
        <option value="America/Halifax">UTC -04:00 Halifax</option>
        <option value="America/Kralendijk">UTC -04:00 Kralendijk</option>
        <option value="America/La_Paz">UTC -04:00 La_Paz</option>
        <option value="America/Lower_Princes">UTC -04:00 Lower_Princes</option>
        <option value="America/Manaus">UTC -04:00 Manaus</option>
        <option value="America/Marigot">UTC -04:00 Marigot</option>
        <option value="America/Martinique">UTC -04:00 Martinique</option>
        <option value="America/Moncton">UTC -04:00 Moncton</option>
        <option value="America/Montserrat">UTC -04:00 Montserrat</option>
        <option value="America/Port_of_Spain">UTC -04:00 Port_of_Spain</option>
        <option value="America/Porto_Velho">UTC -04:00 Porto_Velho</option>
        <option value="America/Puerto_Rico">UTC -04:00 Puerto_Rico</option>
        <option value="America/Rio_Branco">UTC -04:00 Rio_Branco</option>
        <option value="America/Santiago">UTC -04:00 Santiago</option>
        <option value="America/Santo_Domingo">UTC -04:00 Santo_Domingo</option>
        <option value="America/St_Barthelemy">UTC -04:00 St_Barthelemy</option>
        <option value="America/St_Kitts">UTC -04:00 St_Kitts</option>
        <option value="America/St_Lucia">UTC -04:00 St_Lucia</option>
        <option value="America/St_Thomas">UTC -04:00 St_Thomas</option>
        <option value="America/St_Vincent">UTC -04:00 St_Vincent</option>
        <option value="America/Thule">UTC -04:00 Thule</option>
        <option value="America/Tortola">UTC -04:00 Tortola</option>
      </optgroup>
      <optgroup label="UTC -03:30">
        <option value="America/St_Johns">UTC -03:30 St_Johns</option>
      </optgroup>
      <optgroup label="UTC -03:00">
        <option value="America/Araguaina">UTC -03:00 Araguaina</option>
        <option value="America/Argentina/Catamarca">UTC -03:00 Argentina</option>
        <option value="America/Bahia">UTC -03:00 Bahia</option>
        <option value="America/Belem">UTC -03:00 Belem</option>
        <option value="America/Cayenne">UTC -03:00 Cayenne</option>
        <option value="America/Fortaleza">UTC -03:00 Fortaleza</option>
        <option value="America/Godthab">UTC -03:00 Godthab</option>
        <option value="America/Maceio">UTC -03:00 Maceio</option>
        <option value="America/Miquelon">UTC -03:00 Miquelon</option>
        <option value="America/Montevideo">UTC -03:00 Montevideo</option>
        <option value="America/Paramaribo">UTC -03:00 Paramaribo</option>
        <option value="America/Recife">UTC -03:00 Recife</option>
        <option value="America/Santarem">UTC -03:00 Santarem</option>
        <option value="America/Sao_Paulo">UTC -03:00 Sao_Paulo</option>
        <option value="Atlantic/Stanley">UTC -03:00 Stanley</option>
      </optgroup>
      <optgroup label="UTC -02:00">
        <option value="America/Noronha">UTC -02:00 Noronha</option>
        <option value="Atlantic/South_Georgia">UTC -02:00 South_Georgia</option>
      </optgroup>
      <optgroup label="UTC -01:00">
        <option value="Atlantic/Azores">UTC -01:00 Azores</option>
        <option value="Atlantic/Cape_Verde">UTC -01:00 Cape_Verde</option>
        <option value="America/Scoresbysund">UTC -01:00 Scoresbysund</option>
      </optgroup>
      <optgroup label="UTC +00:00">
        <option value="Atlantic/Canary">UTC +00:00 Canary</option>
        <option value="America/Danmarkshavn">UTC +00:00 Danmarkshavn</option>
        <option value="Europe/Dublin">UTC +00:00 Dublin</option>
        <option value="Atlantic/Faroe">UTC +00:00 Faroe</option>
        <option value="Europe/Guernsey">UTC +00:00 Guernsey</option>
        <option value="Europe/Isle_of_Man">UTC +00:00 Isle_of_Man</option>
        <option value="Europe/Jersey">UTC +00:00 Jersey</option>
        <option value="Europe/Lisbon">UTC +00:00 Lisbon</option>
        <option value="Europe/London">UTC +00:00 London</option>
        <option value="Atlantic/Madeira">UTC +00:00 Madeira</option>
        <option value="Atlantic/Reykjavik">UTC +00:00 Reykjavik</option>
        <option value="Atlantic/St_Helena">UTC +00:00 St_Helena</option>
      </optgroup>
      <optgroup label="UTC +01:00">
        <option value="Europe/Amsterdam">UTC +01:00 Amsterdam</option>
        <option value="Europe/Andorra">UTC +01:00 Andorra</option>
        <option value="Europe/Belgrade">UTC +01:00 Belgrade</option>
        <option value="Europe/Berlin">UTC +01:00 Berlin</option>
        <option value="Europe/Bratislava">UTC +01:00 Bratislava</option>
        <option value="Europe/Brussels">UTC +01:00 Brussels</option>
        <option value="Europe/Budapest">UTC +01:00 Budapest</option>
        <option value="Europe/Copenhagen">UTC +01:00 Copenhagen</option>
        <option value="Europe/Gibraltar">UTC +01:00 Gibraltar</option>
        <option value="Europe/Ljubljana">UTC +01:00 Ljubljana</option>
        <option value="Arctic/Longyearbyen">UTC +01:00 Longyearbyen</option>
        <option value="Europe/Luxembourg">UTC +01:00 Luxembourg</option>
        <option value="Europe/Madrid">UTC +01:00 Madrid</option>
        <option value="Europe/Malta">UTC +01:00 Malta</option>
        <option value="Europe/Monaco">UTC +01:00 Monaco</option>
        <option value="Europe/Oslo">UTC +01:00 Oslo</option>
        <option value="Europe/Paris">UTC +01:00 Paris</option>
        <option value="Europe/Podgorica">UTC +01:00 Podgorica</option>
        <option value="Europe/Prague">UTC +01:00 Prague</option>
        <option value="Europe/Rome">UTC +01:00 Rome</option>
        <option value="Europe/San_Marino">UTC +01:00 San_Marino</option>
        <option value="Europe/Sarajevo">UTC +01:00 Sarajevo</option>
        <option value="Europe/Skopje">UTC +01:00 Skopje</option>
        <option value="Europe/Stockholm">UTC +01:00 Stockholm</option>
        <option value="Europe/Tirane">UTC +01:00 Tirane</option>
        <option value="Europe/Vaduz">UTC +01:00 Vaduz</option>
        <option value="Europe/Vatican">UTC +01:00 Vatican</option>
        <option value="Europe/Vienna">UTC +01:00 Vienna</option>
        <option value="Europe/Warsaw">UTC +01:00 Warsaw</option>
        <option value="Europe/Zagreb">UTC +01:00 Zagreb</option>
        <option value="Europe/Zurich">UTC +01:00 Zurich</option>
      </optgroup>
      <optgroup label="UTC +02:00">
        <option value="Asia/Amman">UTC +02:00 Amman</option>
        <option value="Europe/Athens">UTC +02:00 Athens</option>
        <option value="Asia/Beirut">UTC +02:00 Beirut</option>
        <option value="Europe/Bucharest">UTC +02:00 Bucharest</option>
        <option value="Europe/Chisinau">UTC +02:00 Chisinau</option>
        <option value="Asia/Damascus">UTC +02:00 Damascus</option>
        <option value="Asia/Gaza">UTC +02:00 Gaza</option>
        <option value="Asia/Hebron">UTC +02:00 Hebron</option>
        <option value="Europe/Helsinki">UTC +02:00 Helsinki</option>
        <option value="Europe/Istanbul">UTC +02:00 Istanbul</option>
        <option value="Asia/Jerusalem">UTC +02:00 Jerusalem</option>
        <option value="Europe/Kiev">UTC +02:00 Kiev</option>
        <option value="Europe/Mariehamn">UTC +02:00 Mariehamn</option>
        <option value="Asia/Nicosia">UTC +02:00 Nicosia</option>
        <option value="Europe/Riga">UTC +02:00 Riga</option>
        <option value="Europe/Simferopol">UTC +02:00 Simferopol</option>
        <option value="Europe/Sofia">UTC +02:00 Sofia</option>
        <option value="Europe/Tallinn">UTC +02:00 Tallinn</option>
        <option value="Europe/Uzhgorod">UTC +02:00 Uzhgorod</option>
        <option value="Europe/Vilnius">UTC +02:00 Vilnius</option>
        <option value="Europe/Zaporozhye">UTC +02:00 Zaporozhye</option>
      </optgroup>
      <optgroup label="UTC +03:00">
        <option value="Asia/Aden">UTC +03:00 Aden</option>
        <option value="Indian/Antananarivo">UTC +03:00 Antananarivo</option>
        <option value="Asia/Baghdad">UTC +03:00 Baghdad</option>
        <option value="Asia/Bahrain">UTC +03:00 Bahrain</option>
        <option value="Indian/Comoro">UTC +03:00 Comoro</option>
        <option value="Europe/Kaliningrad">UTC +03:00 Kaliningrad</option>
        <option value="Asia/Kuwait">UTC +03:00 Kuwait</option>
        <option value="Indian/Mayotte">UTC +03:00 Mayotte</option>
        <option value="Europe/Minsk">UTC +03:00 Minsk</option>
        <option value="Asia/Qatar">UTC +03:00 Qatar</option>
        <option value="Asia/Riyadh">UTC +03:00 Riyadh</option>
      </optgroup>
      <optgroup label="UTC +03:30">
        <option value="Asia/Tehran">UTC +03:30 Tehran</option>
      </optgroup>
      <optgroup label="UTC +04:00">
        <option value="Asia/Baku">UTC +04:00 Baku</option>
        <option value="Asia/Dubai">UTC +04:00 Dubai</option>
        <option value="Indian/Mahe">UTC +04:00 Mahe</option>
        <option value="Indian/Mauritius">UTC +04:00 Mauritius</option>
        <option value="Europe/Moscow">UTC +04:00 Moscow</option>
        <option value="Asia/Muscat">UTC +04:00 Muscat</option>
        <option value="Indian/Reunion">UTC +04:00 Reunion</option>
        <option value="Europe/Samara">UTC +04:00 Samara</option>
        <option value="Asia/Tbilisi">UTC +04:00 Tbilisi</option>
        <option value="Europe/Volgograd">UTC +04:00 Volgograd</option>
        <option value="Asia/Yerevan">UTC +04:00 Yerevan</option>
      </optgroup>
      <optgroup label="UTC +04:30">
        <option value="Asia/Kabul">UTC +04:30 Kabul</option>
      </optgroup>
      <optgroup label="UTC +05:00">
        <option value="Asia/Aqtau">UTC +05:00 Aqtau</option>
        <option value="Asia/Aqtobe">UTC +05:00 Aqtobe</option>
        <option value="Asia/Ashgabat">UTC +05:00 Ashgabat</option>
        <option value="Asia/Dushanbe">UTC +05:00 Dushanbe</option>
        <option value="Asia/Karachi">UTC +05:00 Karachi</option>
        <option value="Indian/Kerguelen">UTC +05:00 Kerguelen</option>
        <option value="Indian/Maldives">UTC +05:00 Maldives</option>
        <option value="Asia/Oral">UTC +05:00 Oral</option>
        <option value="Asia/Samarkand">UTC +05:00 Samarkand</option>
        <option value="Asia/Tashkent">UTC +05:00 Tashkent</option>
      </optgroup>
      <optgroup label="UTC +05:30">
        <option value="Asia/Colombo">UTC +05:30 Colombo</option>
        <option value="Asia/Kolkata">UTC +05:30 Kolkata</option>
      </optgroup>
      <optgroup label="UTC +05:45">
        <option value="Asia/Kathmandu">UTC +05:45 Kathmandu</option>
      </optgroup>
      <optgroup label="UTC +06:00">
        <option value="Asia/Almaty">UTC +06:00 Almaty</option>
        <option value="Asia/Bishkek">UTC +06:00 Bishkek</option>
        <option value="Indian/Chagos">UTC +06:00 Chagos</option>
        <option value="Asia/Dhaka">UTC +06:00 Dhaka</option>
        <option value="Asia/Qyzylorda">UTC +06:00 Qyzylorda</option>
        <option value="Asia/Thimphu">UTC +06:00 Thimphu</option>
        <option value="Asia/Yekaterinburg">UTC +06:00 Yekaterinburg</option>
      </optgroup>
      <optgroup label="UTC +06:30">
        <option value="Indian/Cocos">UTC +06:30 Cocos</option>
        <option value="Asia/Rangoon">UTC +06:30 Rangoon</option>
      </optgroup>
      <optgroup label="UTC +07:00">
        <option value="Asia/Bangkok">UTC +07:00 Bangkok</option>
        <option value="Indian/Christmas">UTC +07:00 Christmas</option>
        <option value="Asia/Ho_Chi_Minh">UTC +07:00 Ho_Chi_Minh</option>
        <option value="Asia/Hovd">UTC +07:00 Hovd</option>
        <option value="Asia/Jakarta">UTC +07:00 Jakarta</option>
        <option value="Asia/Novokuznetsk">UTC +07:00 Novokuznetsk</option>
        <option value="Asia/Novosibirsk">UTC +07:00 Novosibirsk</option>
        <option value="Asia/Omsk">UTC +07:00 Omsk</option>
        <option value="Asia/Phnom_Penh">UTC +07:00 Phnom_Penh</option>
        <option value="Asia/Pontianak">UTC +07:00 Pontianak</option>
        <option value="Asia/Vientiane">UTC +07:00 Vientiane</option>
      </optgroup>
      <optgroup label="UTC +08:00">
        <option value="Asia/Brunei">UTC +08:00 Brunei</option>
        <option value="Asia/Choibalsan">UTC +08:00 Choibalsan</option>
        <option value="Asia/Chongqing">UTC +08:00 Chongqing</option>
        <option value="Asia/Harbin">UTC +08:00 Harbin</option>
        <option value="Asia/Hong_Kong">UTC +08:00 Hong_Kong</option>
        <option value="Asia/Kashgar">UTC +08:00 Kashgar</option>
        <option value="Asia/Krasnoyarsk">UTC +08:00 Krasnoyarsk</option>
        <option value="Asia/Kuala_Lumpur">UTC +08:00 Kuala_Lumpur</option>
        <option value="Asia/Kuching">UTC +08:00 Kuching</option>
        <option value="Asia/Macau">UTC +08:00 Macau</option>
        <option value="Asia/Makassar">UTC +08:00 Makassar</option>
        <option value="Asia/Manila">UTC +08:00 Manila</option>
        <option value="Australia/Perth">UTC +08:00 Perth</option>
        <option value="Asia/Shanghai">UTC +08:00 Shanghai</option>
        <option value="Asia/Singapore">UTC +08:00 Singapore</option>
        <option value="Asia/Taipei">UTC +08:00 Taipei</option>
        <option value="Asia/Ulaanbaatar">UTC +08:00 Ulaanbaatar</option>
        <option value="Asia/Urumqi">UTC +08:00 Urumqi</option>
      </optgroup>
      <optgroup label="UTC +08:45">
        <option value="Australia/Eucla">UTC +08:45 Eucla</option>
      </optgroup>
      <optgroup label="UTC +09:00">
        <option value="Asia/Dili">UTC +09:00 Dili</option>
        <option value="Asia/Irkutsk">UTC +09:00 Irkutsk</option>
        <option value="Asia/Jayapura">UTC +09:00 Jayapura</option>
        <option value="Pacific/Palau">UTC +09:00 Palau</option>
        <option value="Asia/Pyongyang">UTC +09:00 Pyongyang</option>
        <option value="Asia/Seoul">UTC +09:00 Seoul</option>
        <option value="Asia/Tokyo">UTC +09:00 Tokyo</option>
      </optgroup>
      <optgroup label="UTC +09:30">
        <option value="Australia/Adelaide">UTC +09:30 Adelaide</option>
        <option value="Australia/Broken_Hill">UTC +09:30 Broken_Hill</option>
        <option value="Australia/Darwin">UTC +09:30 Darwin</option>
      </optgroup>
      <optgroup label="UTC +10:00">
        <option value="Australia/Brisbane">UTC +10:00 Brisbane</option>
        <option value="Pacific/Chuuk">UTC +10:00 Chuuk</option>
        <option value="Australia/Currie">UTC +10:00 Currie</option>
        <option value="Pacific/Guam">UTC +10:00 Guam</option>
        <option value="Australia/Hobart">UTC +10:00 Hobart</option>
        <option value="Australia/Lindeman">UTC +10:00 Lindeman</option>
        <option value="Australia/Melbourne">UTC +10:00 Melbourne</option>
        <option value="Pacific/Port_Moresby">UTC +10:00 Port_Moresby</option>
        <option value="Pacific/Saipan">UTC +10:00 Saipan</option>
        <option value="Australia/Sydney">UTC +10:00 Sydney</option>
        <option value="Asia/Yakutsk">UTC +10:00 Yakutsk</option>
      </optgroup>
      <optgroup label="UTC +10:30">
        <option value="Australia/Lord_Howe">UTC +10:30 Lord_Howe</option>
      </optgroup>
      <optgroup label="UTC +11:00">
        <option value="Pacific/Efate">UTC +11:00 Efate</option>
        <option value="Pacific/Guadalcanal">UTC +11:00 Guadalcanal</option>
        <option value="Pacific/Kosrae">UTC +11:00 Kosrae</option>
        <option value="Pacific/Noumea">UTC +11:00 Noumea</option>
        <option value="Pacific/Pohnpei">UTC +11:00 Pohnpei</option>
        <option value="Asia/Sakhalin">UTC +11:00 Sakhalin</option>
        <option value="Asia/Vladivostok">UTC +11:00 Vladivostok</option>
      </optgroup>
      <optgroup label="UTC +11:30">
        <option value="Pacific/Norfolk">UTC +11:30 Norfolk</option>
      </optgroup>
      <optgroup label="UTC +12:00">
        <option value="Asia/Anadyr">UTC +12:00 Anadyr</option>
        <option value="Pacific/Auckland">UTC +12:00 Auckland</option>
        <option value="Pacific/Fiji">UTC +12:00 Fiji</option>
        <option value="Pacific/Funafuti">UTC +12:00 Funafuti</option>
        <option value="Asia/Kamchatka">UTC +12:00 Kamchatka</option>
        <option value="Pacific/Kwajalein">UTC +12:00 Kwajalein</option>
        <option value="Asia/Magadan">UTC +12:00 Magadan</option>
        <option value="Pacific/Majuro">UTC +12:00 Majuro</option>
        <option value="Pacific/Nauru">UTC +12:00 Nauru</option>
        <option value="Pacific/Tarawa">UTC +12:00 Tarawa</option>
        <option value="Pacific/Wake">UTC +12:00 Wake</option>
        <option value="Pacific/Wallis">UTC +12:00 Wallis</option>
      </optgroup>
      <optgroup label="UTC +12:45">
        <option value="Pacific/Chatham">UTC +12:45 Chatham</option>
      </optgroup>
      <optgroup label="UTC +13:00">
        <option value="Pacific/Apia">UTC +13:00 Apia</option>
        <option value="Pacific/Enderbury">UTC +13:00 Enderbury</option>
        <option value="Pacific/Fakaofo">UTC +13:00 Fakaofo</option>
        <option value="Pacific/Tongatapu">UTC +13:00 Tongatapu</option>
      </optgroup>
      <optgroup label="UTC +14:00">
        <option value="Pacific/Kiritimati">UTC +14:00 Kiritimati</option>
      </optgroup>
    </select>


== License ==

The Timezone-Generator-PHP License (MIT)

Copyright (c) 2013 Lucian Daniliuc

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.