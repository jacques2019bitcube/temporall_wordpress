<?php 
    define('RECAPTCHA_SITE_KEY','6LeDtroUAAAAAD4eEeEIoCQ5VhBXvgovb6DMdg3P');
    define('RECAPTCHA_SECRET_KEY','6LeDtroUAAAAAGOQskpONcjL2UylHLfmfbjPWMe2');
?>

<!DOCTYPE html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-99028453-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-99028453-3');
</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(). '/left-text-right-image-card.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(). '/general-style-guide.css' ?>">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?render=explicit&onload=onRecaptchaLoadCallback"></script>
    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <title>Temporall</title>
    <?php wp_head() ?> 
</head>

<style>
        html, body {
            font-family: 'Roboto', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: antialiased;
            font-smoothing: antialiased;
        }
    </style>

<body>
<div class="header-and-menu">
    <div class="inner-wrapper" style="margin-top:-32px">
        <div class="mobile-menu-burger">
            <div class="burger-bar"></div>
            <div class="burger-bar"></div>
            <div class="burger-bar"></div>
        </div>
        <a href="/">
            <div class="logoMain">
                <img style="padding-top:5px !important"  src="/wp-content/themes/temporall_site/assets/images/Path1.svg">
            </div>
        </a>
        <div class="menu">
            <div class="dropdown">
                <div class="dropdown-wrapper">
                    <div id="activate-sub-dropdown" class="menu-text-style-normal ">
                        Use cases
                        <img src="/wp-content/themes/temporall_site/assets/images/ic_arrow_drop_down_24px_right.svg">
                    </div>
                    <a href="/workbench-b2b">
                        <div class="menu-text-style-normal ">Workbench B2B</div>
                    </a>
                    <a href="/workbench-insights">
                        <div class="menu-text-style-normal ">Workbench Insights</div>
                    </a>
                </div>
                <div class="sub-dropdown">
                    <div class="sub-dropdown-wrapper">
                        <a href="/digital-transformations">
                            <div class="menu-text-style-normal ">
                                Digital Transformations
                            </div>
                        </a>
                        <a href="/culture-analytics">
                            <div class="menu-text-style-normal ">
                                Culture Analytics
                            </div>
                        </a>
                        <a href="/mergers-acquisitions">
                            <div class="menu-text-style-normal ">
                                Mergers & Acquisitions
                            </div>
                        </a>
                        <a href="/scale-ups">
                            <div class="menu-text-style-normal ">
                                Scale-up
                            </div>
                        </a>                        
                    </div>
                </div>
            </div>
            <div class="menu-text-style-normal menu-dropdown">
                <span style="padding-right: 5px;">Why Temporall</span>
            </div>
            <div class="menu-text-style-normal">
                <a href="/integrations"> Integrations</a>
            </div>
            <div class="menu-text-style-normal">
                <a href="/pricing/">Pricing</a>
            </div>
            <div class="menu-text-style-normal">
                <a href="/partners">Partners</a>
            </div>
            <div class="menu-text-style-normal">
                <button class="primary-btns" style="border: 0px" onclick="location.href='https://cw.temporall.com'">Sign in</button>
            </div>
        </div>
        <div class="mobile-menu">
            <div class="menu-text-style-normal">
                <a href="#"><u>Why Temporall</u></a>
            </div>

            <div class="menu-text-style-normal">
                <a href="#"><u>Use Cases</u></a>
            </div>

            <a href="/digital-transformations">
                <div class="menu-text-style-normal ">
                    Digital Transformations
                </div>
            </a>
            <a href="/culture-analytics">
                <div class="menu-text-style-normal ">
                    Culture analytics
                </div>
            </a>
            <a href="/mergers-acquisitions">
                <div class="menu-text-style-normal ">
                    Mergers & Acquisitions
                </div>
            </a>
            <a href="/technology-startups">
                <div class="menu-text-style-normal ">
                    Scale-up
                </div>
            </a>            


            <div class="menu-text-style-normal">
                <a href="/workbench-b2b"> Workbench B2b</a>
            </div>
            <div class="menu-text-style-normal">
                <a href="/workbench-insights">Workbench Insights</a>
            </div>


            <div class="menu-text-style-normal">
                <a href="/integrations"> Integrations</a>
            </div>
            <div class="menu-text-style-normal">
                <a href="/pricing">Pricing</a>
            </div>
            <div class="menu-text-style-normal">
                <a href="/partners"> Partners</a>
            </div>
            <button class="primary-btns">Sign in</button>

        </div>
    </div>
</div>
<script src="/wp-content/themes/temporall_site/static-components/js/top-nav.js"></script>
</body>
</html>