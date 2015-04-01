<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include 'analytics.php'; ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="Your description goes here" />
        <meta name="keywords" content="your,keywords,goes,here" />
        <meta name="author" content="Pooyan Behnamghader" />
        <link rel="stylesheet" type="text/css" href="variant-light.css" title="Variant Light" media="screen,projection" />
        <script type="text/javascript" src="jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="coin-slider.min.js"></script>
        <link rel="stylesheet" href="coin-slider-styles.css" type="text/css" />

        <title>Photos</title>

    </head>

    <body>
        <?php include 'header.php'; ?>
        <?php include 'topmenu.php'; ?>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#coin-slider').coinslider({ width: 668, height: 330, delay: 1500 });
            });
        </script>
        <div id="wrap">
            <?php include 'sidebar.php'; ?>
            <div id="content">
                <div class="post">
                    <h2>Photos</h2>

                    <div id='coin-slider'>
                        <a href="images/photos/1.jpg" target="_blank">
                            <img src='images/photos/1.jpg' />

                        </a>
                        <a href="images/photos/2.jpg" target="_blank">
                            <img src='images/photos/2.jpg' />

                        </a>
                        <a href="images/photos/3.jpg" target="_blank">
                            <img src='images/photos/3.jpg' />

                        </a>
                        <a href="images/photos/4.jpg" target="_blank">
                            <img src='images/photos/4.jpg' />

                        </a>
                        <a href="images/photos/5.jpg" target="_blank">
                            <img src='images/photos/5.jpg' />

                        </a>
                        <a href="images/photos/6.jpg" target="_blank">
                            <img src='images/photos/6.jpg' />

                        </a>
                        <a href="images/photos/7.jpg" target="_blank">
                            <img src='images/photos/7.jpg' />

                        </a>

                    </div>



                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>
    </body>
</html>
