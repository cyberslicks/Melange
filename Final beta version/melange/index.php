<?php

require_once('inc/db.inc.php');
require_once('inc/rss_factory.inc.php');


$sSiteUrl = 'http://localhost/mel_fin/Final_done/';
$sRssIcon = 'http://www.script-tutorials.com/logo-tuts.png';


$aStoriesRSS = array();

$sSQL = "SELECT * FROM `stories` ORDER BY `id` DESC";
$aStories = $GLOBALS['MySQL']->getAll($sSQL);
foreach ($aStories as $iID => $aStoryInfo) {

    $iStoryID = (int)$aStoryInfo['id'];
    $aStoriesRSS[$iID]['Guid'] = $iStoryID;
    $aStoriesRSS[$iID]['Title'] = $aStoryInfo['title'];
    $aStoriesRSS[$iID]['Link'] = $sSiteUrl . 'view.php?id=' . $iStoryID;
    $aStoriesRSS[$iID]['Desc'] = $aStoryInfo['description'];
    $aStoriesRSS[$iID]['DateTime'] = $aStoryInfo['when1'];
}

$oRssFactory = new RssFactory(); 
header('Content-Type: text/xml; charset=utf-8');
echo $oRssFactory->GenRssByData($aStoriesRSS, 'Our stories', $sSiteUrl . 'index.php', $sRssIcon);

?>
