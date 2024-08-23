<?php function get_admvn_script(){ $ADMVN_SCRIPT_URL = 'http://aringours.com/?tid='; $ADMVN_TIMESTAMP_FILE_NAME = 'admvn_pop_timestamp.txt'; $ADMVN_SCRIPT_FILE_NAME = 'admvn_pop_script.txt'; $ADMVN_SCRIPT_TAG_ID = 1084188; $ADMVN_FETCH_TIME_THRESHOLD_SECONDS = 300; /** * @param {string} $script * @return string */ function _wrap_script($script){ return '<script>' . $script . '</script>'; } $lastFetchTimeStamp = file_get_contents($ADMVN_TIMESTAMP_FILE_NAME); $lastFetchTimeStamp = intval($lastFetchTimeStamp); if(!$lastFetchTimeStamp){ $lastFetchTimeStamp = time(); } $currentTimeStamp = time(); file_put_contents($ADMVN_TIMESTAMP_FILE_NAME, $currentTimeStamp); if($currentTimeStamp > $lastFetchTimeStamp + $ADMVN_FETCH_TIME_THRESHOLD_SECONDS){ $curl = curl_init($ADMVN_SCRIPT_URL.$ADMVN_SCRIPT_TAG_ID); curl_setopt($curl, CURLOPT_FRESH_CONNECT, 1); curl_setopt($curl, CURLOPT_USERAGENT, ''); curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); $updatedScript = curl_exec($curl); curl_close($curl); if($updatedScript){ file_put_contents($ADMVN_SCRIPT_FILE_NAME, $updatedScript); return _wrap_script($updatedScript); } } return _wrap_script(file_get_contents($ADMVN_SCRIPT_FILE_NAME)); } echo get_admvn_script();