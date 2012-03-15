<?php
if(!empty($_REQUEST['zone'])){
header ("Content-Type:text/xml");
$zone = $_REQUEST['zone'];

  // The MAX_PATH below should point to the base of your OpenX installation
  define('MAX_PATH', 'C:\wamp\www\openx');
  if (@include_once(MAX_PATH . '/www/delivery/ak_xmloutput.php')) {
    if (!isset($phpAds_context)) {
      $phpAds_context = array();
    }
	
	$i = 0;
	$check= 'value';
	while (!empty($check)){
	// function view_local($what, $zoneid=0, $campaignid=0, $bannerid=0, $target='', $source='', $withtext='', $context='', $charset='')
		$phpAds_raw[$i] = view_local('', $zone, 0, 0, '_blank', '', '0', $phpAds_context, '');
		$phpAds_context[] = array('!=' => 'bannerid:'.$phpAds_raw[$i]['bannerid']);
		$check = $phpAds_raw[$i]['html'];
		$i++;
	} 
	
	}
 
$xml = '<?xml version="1.0" encoding="ISO-8859-1"?><menu>';

foreach($phpAds_raw as $k => $v){
//print_r($v['aRow']);//uncomment this line to view all possible API elements
if(!empty($v['bannerContent'])){

	$xml .= '<advert>';
	$xml .= '<imagefile> '.$v['bannerContent'].'</imagefile>';//this is a link to the image file
	$xml .= '<url> '.$v['clickUrl'].'</url>';//this is ad URL
	$xml .= '<weight> '.$v['aRow']['weight'].'</weight>';//banner weight
	$xml .= '<campaign_id> '.$v['aRow']['campaign_id'].'</campaign_id>';
	$xml .= '<block_ad> '.$v['aRow']['block_ad'].'</block_ad>';
	$xml .= '<session_cap_ad> '.$v['aRow']['session_cap_ad'].'</session_cap_ad>';
	$xml .= '<compiledlimitation> '.$v['aRow']['compiledlimitation'].'</compiledlimitation>';
	$xml .= '<prepend> '.$v['aRow']['prepend'].'</prepend>';
	$xml .= '<bannertype> '.$v['aRow']['bannertype'].'</bannertype>';
	$xml .= '<alt_filename> '.$v['aRow']['alt_filename'].'</alt_filename>';
	$xml .= '<alt_imageurl> '.$v['aRow']['alt_imageurl'].'</alt_imageurl>';
	$xml .= '<block_campaign> '.$v['aRow']['block_campaign'].'</block_campaign>';
	$xml .= '<cap_campaign> '.$v['aRow']['cap_campaign'].'</cap_campaign>';
	$xml .= '<session_cap_campaign> '.$v['aRow']['session_cap_campaign'].'</session_cap_campaign>';
	$xml .= '<client_id> '.$v['aRow']['client_id'].'</client_id>';
	$xml .= '<advertiser_limitation> '.$v['aRow']['advertiser_limitation'].'</advertiser_limitation>';
	$xml .= '<bannerid> '.$v['aRow']['bannerid'].'</bannerid>';
	$xml .= '<campaignid> '.$v['aRow']['campaignid'].'</campaignid>';
	$xml .= '</advert>';
	}
}
$xml .= '</menu>';
echo $xml;
} else  {
echo '
<style>
.alert {
padding:5px;
border:1px dashed #c90505;
background-color:#fdcccc;
color:#1c1b1b;
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;

}
</style>
<p class="alert">Please specify a zone (e.g. test.php?zone=1).</p>';
}
//this is a test
//this is another test
//3 TEST
//4th test
//5th test
?>