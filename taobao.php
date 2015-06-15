<?php
$url = $_GET['url'];

$url = parse_url($url);
parse_str($url['query'] , $url);

$url = 'http://tbskip.taobao.com/auction/storegallery/item_xml.htm?item_id=' . $url['id'];

$xmlstr = file_get_contents($url);
$xmlstr = trim($xmlstr);
$xmlstr = simplexml_load_string($xmlstr);
$ret = array();
foreach($xmlstr->item->images->image as $row)
{
	$ret[] = ((string)$row->url);
}
exit(json_encode($ret));