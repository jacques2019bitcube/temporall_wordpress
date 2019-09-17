<!DOCTYPE html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(). '/static-components/css/left-text-right-image-card.css' ?>">
    <title>title</title>
    <?php wp_head() ?> 
</head>

<body>
<div class="header-and-menu">
    <div class="inner-wrapper">
        <div class="mobile-menu-burger">
            <div class="burger-bar"></div>
            <div class="burger-bar"></div>
            <div class="burger-bar"></div>
        </div>
        <div class="logoMain">
            <img src="/wp-content/themes/temporall_site/assets/images/Path1.svg">
        </div>
        <div class="menu">
            <div class="dropdown">
                <div class="dropdown-wrapper">
                    <div id="activate-sub-dropdown" class="menu-text-style-bold ">
                        Cases
                        <img src="/wp-content/themes/temporall_site/assets/images/ic_arrow_drop_down_24px_right.svg">
                    </div>
                    <div class="menu-text-style-normal "> Workbench B2B</div>
                    <div class="menu-text-style-normal "> Workbench Insights</div>
                </div>
                <div class="sub-dropdown">
                    <div class="sub-dropdown-wrapper">
                        <div class="menu-text-style-normal "> Digital Transformations</div>
                        <div class="menu-text-style-normal "> Mergers & Acquisitions</div>
                        <div class="menu-text-style-normal "> Technology & Startups</div>
                        <div class="menu-text-style-normal "> Culture analytics</div>
                    </div>
                </div>
            </div>
            <div class="menu-text-style-normal menu-dropdown">
                <span style="padding-right: 5px;">Why Temporall</span>
            </div>
            <div class="menu-text-style-normal">
                <a href="#"> Integrations</a>
            </div>
            <div class="menu-text-style-normal">
                <a href="#">Pricing</a>
            </div>
            <div class="menu-text-style-normal">
                <a href="#"> Partners</a>
            </div>
            <div class="menu-text-style-normal">
                <button class="primary-btns">Sign in</button>
            </div>
        </div>
        <div class="mobile-menu">
            <div class="menu-text-style-normal">
                <a href="#"> Why Temporall</a>
            </div>
            <div class="menu-text-style-normal">
                <a href="#"> Integrations</a>
            </div>
            <div class="menu-text-style-normal">
                <a href="#">Pricing</a>
            </div>
            <div class="menu-text-style-normal">
                <a href="#"> Partners</a>
            </div>
            <button class="primary-btns">Sign in</button>
        </div>
    </div>
</div>
</body>
</html>