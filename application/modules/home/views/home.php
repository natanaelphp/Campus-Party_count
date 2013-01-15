<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Contagem regressiva para a Campus Party</title>
        
        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" />
        <link rel="stylesheet" href="assets/css/styles.css" />
        <link rel="stylesheet" href="assets/countdown/jquery.countdown.css" />
        
        <!-- Share this -->	
        <script type="text/javascript">var switchTo5x=true;</script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>
        <!-- end -->
		
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <center>
            <img src="assets/img/logo-CPBR6.png">
            <?php echo br(6); ?>
            
            <div id="countdown"></div>
            <?php echo br(); ?>
            <div id="legenda">
                <?php echo nbs(4); ?>  
                Dias <?php echo nbs(25); ?>
                Horas <?php echo nbs(22); ?>
                Minutos <?php echo nbs(20); ?>
                Segundos <?php echo nbs(20); ?>
            </div>
            <div id="legenda-mobile">
                <?php echo nbs(2); ?>  
                Dias <?php echo nbs(8); ?>
                Horas <?php echo nbs(5); ?>
                Minutos <?php echo nbs(3); ?>
                Segundos <?php echo nbs(2); ?>
            </div>

            <!-- JavaScript includes -->
            <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
            <script src="assets/countdown/jquery.countdown.js"></script>
            <script src="assets/js/script.js"></script>


            <script type="text/javascript">stLight.options({publisher: "ur-646a31f5-eafe-3b6c-e34f-14a13103e5d"});</script>
            <script>
            var options={ "publisher": "ur-646a31f5-eafe-3b6c-e34f-14a13103e5d", "logo": { "visible": false, "url": "vidacubica.com.br/campus-party", "img": "http://natanael.zxq.net/campus-party/assets/img/logo-CPBR6.png", "height": 20}, "ad": { "visible": false, "openDelay": "5", "closeDelay": "0"}, "livestream": { "domain": "", "type": "sharethis", "customColors": { "widgetBackgroundColor": "#555555", "articleLinkColor": "#00acee"}}, "ticker": { "visible": false, "domain": "", "title": "", "type": "sharethis", "customColors": { "widgetBackgroundColor": "#555555", "articleLinkColor": "#00acee"}}, "facebook": { "visible": false, "profile": "sharethis"}, "fblike": { "visible": true, "url": ""}, "twitter": { "visible": false, "user": "sharethis"}, "twfollow": { "visible": false, "url": "http://www.twitter.com/sharethis"}, "custom": [{ "visible": false, "title": "Custom 1", "url": "", "img": "", "popup": false, "popupCustom": { "width": 300, "height": 250}}, { "visible": false, "title": "Custom 2", "url": "", "img": "", "popup": false, "popupCustom": { "width": 300, "height": 250}}, { "visible": false, "title": "Custom 3", "url": "", "img": "", "popup": false, "popupCustom": { "width": 300, "height": 250}}], "chicklets": { "items": ["facebook", "twitter", "googleplus", "email", "sharethis"]}, "background": "#c2c2c2", "color": "#555555"};
            var st_bar_widget = new sharethis.widgets.sharebar(options);
            </script>
        </center>
    </body>
</html>

