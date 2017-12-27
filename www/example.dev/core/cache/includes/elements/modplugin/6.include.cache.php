<?php
//if (strpos($_SERVER['HTTP_HOST'],'.r404.ru')===false) return;
$aUrlInfo = pathinfo(preg_replace('#(.*)\?.*$#','$1',$_SERVER['REQUEST_URI']));
if (strpos($_SERVER['REQUEST_URI'],'/cache/')) return;
//var_dump($_SERVER['REQUEST_URI']);
//die();
//var_dump($aUrlInfo['extension']);

$aTo = array('/wp-content/uploads/' => '/assets/uploads/');
$aDownloadExt = array('jpg','jpeg','gif','png','css','js','ttf','eot','woff','woff2','svg','ico','htc','xls','xlsx','doc','docx','pdf','swf','flv','cur');
if (!in_array(strtolower($aUrlInfo['extension']),$aDownloadExt)) return;


$sMainDomain = 'http://www.dianix.ru';
$sFullUrl = $sMainDomain.$_SERVER['REQUEST_URI'];

$sFile = file_get_contents($sFullUrl);
if (empty($sFile)) {
    var_dump($sFullUrl);
    die('empty');
    return;
    
}
$sNewDir = dirname($_SERVER['REQUEST_URI']);

if (!file_exists($_SERVER['DOCUMENT_ROOT'].$sNewDir.'/'))
$res = mkdir($_SERVER['DOCUMENT_ROOT'].$sNewDir.'/',0755,true);
$sUrl = preg_replace('#(.*)\?.*$#','$1',$_SERVER['REQUEST_URI']);
file_put_contents($_SERVER['DOCUMENT_ROOT'].rawurldecode($sUrl),$sFile);
header('Location: '.$_SERVER['REQUEST_URI']);
exit;



function file_get_contents_curl($file){
    //die($file);
    $kurl = curl_init($file);
    curl_setopt($kurl, CURLOPT_HEADER, 0);
    curl_setopt($kurl, CURLOPT_RETURNTRANSFER, 1);
    //curl_setopt($kurl, CURLOPT_BINARYTRANSFER,1);
    curl_setopt($kurl, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($kurl, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:54.0) Gecko/20100101 Firefox/54.0');
    curl_setopt($kurl, CURLOPT_SSLVERSION, 3);
    curl_setopt($kurl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt ($kurl, CURLOPT_COOKIEFILE, "cookie.txt");
    curl_setopt ($kurl, CURLOPT_COOKIEJAR, "cookie.txt");
    $response = curl_getinfo($kurl,CURLINFO_HTTP_CODE);
    var_dump($response); die();
    if ($response != 200) return false; 
    $rawdata = curl_exec($kurl);
    curl_close($kurl);
    return $rawdata;
}
return;
