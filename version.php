<?php
/* Defaults */
$title = 'Два диплома';
$desc = '';
$unit = 'sbs';
$type = 'dvadiploma';
$land = 'dvadiploma';
$autofocus = '';
$quote_id = '5713';
$graccount = '';
$grcampaign = '';
$grtag = '';
$link = 'thanks/';
$gtm = get_gtm() ?? '';
// $phone = '8 (800) 100 00 11';
// $phone_link = 'tel:' . preg_replace('![^+0-9]+!', '', $phone);

function get_gtm() {
	$gtm = null;

	switch ($_SERVER['HTTP_HOST']) {
		case 'synergy.ru': $gtm = 'GTM-P4H3L8'; break;
		case 'sbs.edu.ru': $gtm = 'GTM-K77TBB'; break;
		case 'synergyglobal.ru': $gtm = 'GTM-M7T7GF'; break;
		case 'synergy.online': $gtm = 'GTM-TTN54WK'; break;
		case 'esgglobal.ru': $gtm = 'GTM-W5959WR'; break;
		case 'synergyglamping.ru': $gtm = 'GTM-MD9LN5C'; break;
	}

	return $gtm;
}



/* Postprocess */
$action = implode(array(
    'https://syn.su/lander.php?r=land/index',
    '&unit=', $unit,
    '&type=', $type,
    '&land=', $land,
    '&version=', $version,
    '&partner=', $partner,
    '&graccount=', $graccount,
    '&grcampaign=', $grcampaign,
    '&grtag=', $grtag,
    '&quote_id=', $quote_id,
    '&redirect=', urlencode($link),
    '&ignore-thanksall=1'
));