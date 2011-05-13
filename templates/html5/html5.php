<?
if ( $template_area == 'top' ) {

    $this->template_js[] = '/lib/history.js-1.5/history.min.js';
    $this->template_js[] = '/lib/history.js-1.5/history.html4.min.js';
    $this->template_js[] = '/lib/history.js-1.5/history.adapter.jquery.min.js';
    $this->template_js[] = '/lib/js/jquery.livequery.min.js';

?>
<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?=$this->title?></title>
    <meta name="description" content="<?=$this->seo['description']?>" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="imagetoolbar" content="no" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
<?
    if ( $dev ) echo $this->stylesheet();
    else echo $this->consolidated_stylesheet();

    global $jquery_version;
?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/<?=$jquery_version?>/jquery.min.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="/lib/js/jquery-<?=$jquery_version?>.min.js"%3E%3C/script%3E'))</script>
<?
    // echo the items in the $head_arr
	if (is_array($this->head)) {
        foreach ($this->head as $head_item) {
            echo $head_item . "\n";
        }
	} else if ( $this->head ) {
        echo $this->head . "\n";
    }

    /** 
    MODERNIZER IS CUSTOMIZED BY ADDING 'uploader' to the list of new tags, when updating it, iff updating the file, add it to the string of tag names.
    **/
?>
    <script src="/lib/js/modernizr-1.7.min.js"></script>
</head>
<body>
<div id="skybox" style="display:none;position:absolute;z-index:9999;"></div>
<div id="overlay" style="display:none;position:absolute;z-index:5000"></div>
<div id="body">

<?

} else if ( $template_area == 'bottom' ) {

?>

</div>

<script>if ( typeof window.JSON === 'undefined' ) { document.write('<script src="/lib/history.js-1.5/json2.min.js"><\/script>'); }</script>
<?
    if ($dev) echo $this->javascript();
    else echo $this->consolidated_javascript();
?>
<!--[if lt IE 7 ]>
<script src="/lib/js/dd_belatedpng.js"></script>
<script> DD_belatedPNG.fix('img, .png_bg');</script>
<![endif]-->
<?
    if ( $google_analytics_account ) {
?>
<script>
    var _gaq=[['_setAccount','<?=$google_analytics_account?>'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?
    }//google analytics
?>

<!-- web: <?=$_SERVER['SERVER_ADDR']?> -->
<!-- db:  <?=$db->ErrorMsg()?$db_host:$db->ErrorMsg()?> -->
<!-- dbw: <?=$dbw->ErrorMsg()?$dbw_host:$dbw->ErrorMsg()?> -->
</body>
</html>
<?
}//bottom
