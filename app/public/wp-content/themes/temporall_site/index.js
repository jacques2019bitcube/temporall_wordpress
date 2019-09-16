
    function left_text_right_image_card(icon,coloredHeading,subHeading,bodyText,div_ID){
        var text = "<div class='left-text-right-image'>" +
        "<div class='text-part'>" +
            "<div class='inner-wrapper'>"   +
               " <div class='" + icon +"'></div>" +
               " <div class='heading2-colored'>" + coloredHeading+ "</div>" +
               " <div class='heading3'>" + subHeading + "</div>" +
               " <div class='body-text'>" + bodyText + "</div>" +
            "</div>" +
       " </div>" +
        "<div class='img-part'></div>" +
   " </div>";

        $('#' + div_ID ).html(text);
    }

    function topNav(div_ID){
        var text = "<div class='header-and-menu'>        <div class='inner-wrapper'>            <div class='mobile-menu-burger'>                <div class='burger-bar'></div>                <div class='burger-bar'></div>                <div class='burger-bar'></div>            </div>            <div class='logoMain'>                <img src='../../assets/images/Path1.svg'>            </div>            <div class='menu'>                <div class='dropdown'>                    <div class='dropdown-wrapper'>                        <div id='activate-sub-dropdown' class='menu-text-style-bold '>                            Cases                            <img src='../../assets/images/ic_arrow_drop_down_24px_right.svg'>                        </div>                        <div class='menu-text-style-normal '> Workbench B2B</div>                        <div class='menu-text-style-normal '> Workbench Insights</div>                    </div>                    <div class='sub-dropdown'>                        <div class='sub-dropdown-wrapper'>                            <div class='menu-text-style-normal '> Digital Transformations</div>                            <div class='menu-text-style-normal '> Mergers & Acquisitions</div>                            <div class='menu-text-style-normal '> Technology & Startups</div>                            <div class='menu-text-style-normal '> Culture analytics</div>                        </div>                    </div>                </div>                <div class='menu-text-style-normal menu-dropdown'>                    <span style='padding-right: 5px;'>Why Temporall</span>                    <img src='../../assets/images/ic_arrow_drop_down_24px.svg'>                </div>                <div class='menu-text-style-normal'>                    <a href='#'> Integrations</a>                </div>                <div class='menu-text-style-normal'>                    <a href='#'>Pricing</a>                </div>                <div class='menu-text-style-normal'>                    <a href='#'> Partners</a>                </div>                <div class='menu-text-style-normal'>                    <button class='primary-btns'>Sign in</button>                </div>            </div>            <div class='mobile-menu'>                <div class='menu-text-style-normal'>                    <a href='#'> Why Temporall</a>                </div>                <div class='menu-text-style-normal'>                    <a href='#'> Integrations</a>                </div>                <div class='menu-text-style-normal'>                    <a href='#'>Pricing</a>                </div>                <div class='menu-text-style-normal'>                    <a href='#'> Partners</a>                </div>                <button class='primary-btns'>Sign in</button>            </div>        </div>    </div>";
        $('#' + div_ID ).html(text);
    }

