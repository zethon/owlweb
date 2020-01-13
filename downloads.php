<?php

define("DOWNLOAD_PATH", "./artifacts/build/");

function getWindowsDownloadFilename()
{
    $dir = glob('./artifacts/build/owl-0*.exe');
    usort($dir, create_function('$a,$b', 'return filemtime($b) - filemtime($a);'));
    if (count($dir) > 0)
    {
        return basename($dir[0]);
    }

    return '';
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Owl</title>
    <link rel="icon" type="img/png" href="images/owl_32.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>
      .ribbon-wrapper {
        width: 190px;
        height: 190px;
        overflow: hidden;
        position: absolute;
        top: -3px;
        left: -3px;
        margin-left: 15px;
      }

      .ribbon {
          color: #333;
          text-align: center;
          -webkit-transform: rotate(-45deg);
          -moz-transform:    rotate(-45deg);
          -ms-transform:     rotate(-45deg);
          -o-transform:      rotate(-45deg);
          position: relative;
          padding: 7px 0;
          top: 45px;
          left: -125px;
          width: 400px;
          background-color: #999;
          color: #fff;
      }
      .ribbon a {
        color: #fff;
      }

      @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 300;
        src: local('Open Sans Light'), local('OpenSans-Light'), url(fonts/DXI1ORHCpsQm3Vp6mXoaTXhCUOGz7vYGh680lGh-uXM.woff) format('woff');
      }

      @font-face {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        src: local('Open Sans'), local('OpenSans'), url(fonts/cJZKeOuBrn4kERxqtaUH3T8E0i7KZn-EPnyo3HZu7kw.woff) format('woff');
      }

      body, h1, h2, h3, h4, p 
      {
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif !important;
        font-weight: 300;
        margin: 0;
        padding: 0;
      }
    </style>
    
	<!-- Begin Google Analytics Code -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-55358451-1', 'auto');
	  ga('send', 'pageview');
	</script>    
	<!-- End Google Analytics Code -->   
  
  </head>
  <body>

<h1>Owl Downloads</h1>

<br/><br/>

<h3>Windows</h3>

<b>Release:</b>&nbsp; <a href="/downloads/owl-0.7.5-setup.exe">owl-0.7.5-setup.exe</a>
<br/>
<b>Beta:</b>&nbsp; <?php echo '<a href="' . DOWNLOAD_PATH . getWindowsDownloadFilename() . '">' . getWindowsDownloadFilename() . '</a>'; ?> 

<br/><br/>

<h3>macOS</h3>
Coming soon...

<br/><br/>
<h3>Ubuntu</h3>
Coming soon...
<br/>

  </body>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>
