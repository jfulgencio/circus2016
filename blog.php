
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">

    <!-- for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="description" content="">
 
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/vnd.microsoft.icon"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-ico"/>

    <title>Circus Creative DMCC - Boutique Media & Communications for the Middle East</title>


    <link rel='stylesheet' href='revslider/public/assets/css/settings.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/animsition.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/fontello.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/font-awesome.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/owl.carousel.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/owl.transitions.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/pe-icon-7-stroke.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/prettyPhoto.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/media.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/js_composer.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/isotope.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/popup.css' type='text/css' media='all'/>

<!--REVISED-->
	<script type="text/javascript" src="scripts/checkform.js"> </script> 
	<!--END REVISED-->
<!-- Pop Up -->
<script src="js/prefixfree.min.js"></script>
 

 <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      html, body {
  -webkit-backface-visibility: hidden;
}

/* text-based popup styling */
.white-popup {
  position: relative;
  background: #FFF;
  padding: 25px;
  width: auto;
  max-width: 400px;
  margin: 0 auto;
}

/* 

====== 3d unfold ======

*/
.mfp-3d-unfold {
  /* start state */
  /* animate in */
  /* animate out */
}
.mfp-3d-unfold .mfp-content {
  perspective: 2000px;
}
.mfp-3d-unfold .mfp-with-anim {
  opacity: 0;
  transition: all 0.3s ease-in-out;
  transform-style: preserve-3d;
  transform: rotateY(-60deg);
}
.mfp-3d-unfold.mfp-bg {
  opacity: 0;
  transition: all 0.5s;
}
.mfp-3d-unfold.mfp-ready .mfp-with-anim {
  opacity: 1;
  transform: rotateY(0deg);
}
.mfp-3d-unfold.mfp-ready.mfp-bg {
  opacity: 0.8;
}
.mfp-3d-unfold.mfp-removing .mfp-with-anim {
  transform: rotateY(60deg);
  opacity: 0;
}
.mfp-3d-unfold.mfp-removing.mfp-bg {
  opacity: 0;
}
/* End Pop Up CSS */
     
/* Start Load More */
div.show2, div.show3, div.show4 {
    display:none;
     }   
.totop {
    position: fixed;
    bottom: 10px;
    right: 20px;
}
.totop a {
    display: none;
}


/* End Load More */     
     
</style>

<script>
    $(window).scroll(function () {
        if ($(document).height() <= $(window).scrollTop() + $(window).height()) {
            alert("End Of The Page");
        }
    });
</script>
    
<!-- End Pop Up CSS -->
</head>

<body class="home page page-id-4 page-parent page-template page-template-template-one-pager page-template-template-one-pager-php wpb-js-composer js-comp-ver-4.11.2.1 vc_responsive">
   <div class="overlay overlay-slidedown">
        <div class="overlay-close pe-7s-close"></div>
        <div class="popup-search-wrapper">
            <form method="get" id="searchform" class="search-form" action="index.php">
                <div>
                    <input type="text" id="s" name="s" value="Type text and hit enter" onfocus="if(this.value=='Type text and hit enter')this.value='';" onblur="if(this.value=='')this.value='Type text and hit enter';" autocomplete="off">
                </div>
            </form>
        </div>
    </div>
    <div class="animsition global-wrapper">

        <div id="header" class="header-wrapper">
            <div class="header-inside">
                <div class="logo">
                    <a href="http://www.thecircusdubai.com/circus2016" title="ALTOS Agency"><img class="logoImage" src="images/circus-logo.png" alt="Circus Creative DMCC"/><img class="logoImageRetina" src="images/circus-logo.png" alt="Circus Creative Design and Digital Develoment"/></a>
                    <div class="clear"></div>
                </div>
                <div class="menu-wrapper">
                    <div class="menu-icons">
                        <div class="menu-icons-inside">
                            <div class="menu-icon menu-icon-standard"><span class="menu-icon-create"></span></div>
                            <div class="menu-icon menu-icon-mobile"><span class="menu-icon-create"></span></div>
                        </div>
                        <!--<div id="trigger-overlay" class="header-search pe-7s-search"></div>-->
                    </div>
                    <div class="main-menu">
                        <div class="menu-main-nav-menu-container">
                            <ul id="menu-main-nav-menu" class="sf-menu">
                                <li class="menu-item current-menu-item current_page_item menu-item-has-children"><a href="index.php#home">Home</a>
                                   <!-- <ul class="submenu_1">
                                        <li class="menu-item"><a href="#">Home #2</a></li>
                                    </ul>-->
                                </li>
                                <li class="menu-item"><a href="index.php#about">About us</a></li>
                                <li class="menu-item"><a href="index.php#services">Services</a></li>
                                <li class="menu-item"><a href="index.php#portfolio">Our Work</a></li>
                                <li class="menu-item"><a href="index.php#blog">Blog</a></li>
                                <li class="menu-item"><a href="index.php#our-contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="mobile-menu-wrapper">
            <div class="menu-main-nav-menu-container">
                <ul id="menu-main-nav-menu-1" class="mobile-menu">
                    <li class="menu-item current-menu-item current_page_item menu-item-has-children"><a href="index.php#home">Home</a>
                        <!--<ul class="submenu_1">
                            <li class="menu-item"><a href="#">Home #2</a></li>
                        </ul>-->
                    </li>
                    <li class="menu-item one-page-subsite"><a href="index.php#about">About us</a></li>
                    <li class="menu-item one-page-subsite"><a href="index.php#services">Services</a></li>
                    <li class="menu-item one-page-subsite"><a href="index.php#portfolio">Our Work</a></li>
                    <li class="menu-item one-page-subsite"><a href="index.php#blog">Blog</a></li>
                    <li class="menu-item one-page-subsite"><a href="index.php#our-contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="header-wrapper header2">
            <div class="header-inside">
                <div class="logo">
                    <a href="index.php" title="Circus Creative"><img class="logoImage" src="images/circus-logo.png" alt="Circus Creative Design and Digital Development"/><img class="logoImageRetina" src="images/circus-logo.png" alt="Circus Creative Design and Digital Development"/></a>
                    <div class="clear"></div>
                </div>
                <div class="menu-wrapper">
                    <div class="menu-icons">
                        <div class="menu-icons-inside">
                            <div class="menu-icon menu-icon-standard"><span class="menu-icon-create"></span></div>
                        </div>
                        <!--<div id="trigger-overlay-sticky" class="header-search pe-7s-search"></div>-->
                    </div>
                    <div class="main-menu">
                        <div class="menu-main-nav-menu-container">
                            <ul id="menu-main-nav-menu-2" class="sf-menu">
                                <li class="menu-item current-menu-item current_page_item menu-item-has-children"><a href="index.php">Home</a>
                                    <!--<ul class="submenu_1">
                                        <li class="menu-item"><a href="#">Home #2</a></li>
                                    </ul>-->
                                </li>
                                <li class="menu-item"><a href="index.php#about">About us</a></li>
                                <li class="menu-item"><a href="index.php#services">Services</a></li>
                                <li class="menu-item"><a href="index.php#portfolio">Our Work</a></li>
                                <li class="menu-item"><a href="index.php#blog">Blog</a></li>
                                <li class="menu-item"><a href="index.php#our-contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="container-wrapper">
            <div id="container">
                <!-- start container -->
                <div class="page-wrapper">
                    
                <div id="about" class="aboutlink">&nbsp;</div>
                    <section id="about" class="other-page-item onepager_section_class" style="background-color: #ffffff;  ">
                        <div id="post-538" class="post-538 page type-page status-publish hentry">
                            <div class="inside-section">

                                <div class="inner-container small-container">
                                    <!-- start inner container -->
                                    <div class="page-title-wrapper vertical-page-title">
                                        <div class="page-title wpb_animate_when_almost_visible wpb_appear">
                                           
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                   
                            </div>
                        </div>
                    </section>
<div id="services" class="aboutlink">&nbsp;</div>
                         <div style="height:500px"><iframe src="http://www.thecircusclients.com/circus-blog" name="blog" style="width:100%; max-width:1700px; height:500px; padding:0" align="center"></iframe></div>
                    
                        </div>
                   
                        </section>
                    
                    

                </div>
            </div>
            <!-- end container -->
         
        </div>
        <!-- end container-wrapper -->

        <div id="footer" class="footer">
            <div class="footer-inner">
                <div class="footer-left">
                    <a href="index.php"><img id="logoFooterImage" class="footer-logo" src="upload/circus-logo-footer.png" alt="Circus Creative"/>
                    <img class="footer-logo" id="logoFooterImageRetina" src="upload/circus-logo-footer.png" alt="Circus Creative"/></a>
                </div>
                <div class="footer-right">
                    701 FORTUNE EXECUTIVE TOWER, JLT, DUBAI, UNITED ARAB EMIRATES</span> <br />
                <span style="font-size:15px; color:#3ac1cf">+971 4 447 3554  |  HELLO@THECIRCUS.AE</span></div>
                <div class="scroll_to_top pe-7s-up-arrow"></div>
            </div>
            <div class="clear"></div>
            <div class="footer-under-center">
                <div class="footer-inner">
                    <div class="copyright">Copyright 2016 - Circus Creative DMCC</div></div>
            </div>

        </div>
    </div>

    <script type='text/javascript' src='js/jquery/jquery.js'></script>
    <script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='js/jquery.themepunch.revolution.min.js'></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript">
        function revslider_showDoubleJqueryError(sliderID) {
            var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
            errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
            jQuery(sliderID).show().html(errorMessage);
        }
    </script>

    <script type='text/javascript' src='js/contact-form.js'></script>
    <script type='text/javascript' src='js/jquery.ticker.js'></script>
    <script type='text/javascript' src='js/modernizr.custom.js'></script>
    <script type='text/javascript' src='js/jquery.localscroll.js'></script>
    <script type='text/javascript' src='js/toScroll.js'></script>
    <script type='text/javascript' src='js/jquery.animsition.min.js'></script>
    <script type='text/javascript' src='js/superfish.js'></script>
    <script type='text/javascript' src='js/waypoints/waypoints.min.js'></script>
    <script type='text/javascript' src='js/jquery.mobilemenu.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
    <script type='text/javascript' src='js/snap.svg-min.js'></script>
    <script type='text/javascript' src='js/classie.js'></script>
    <script type='text/javascript' src='js/js_composer_front.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.js'></script>
    <script type='text/javascript' src='js/bower/skrollr/dist/skrollr.min.js'></script>
    <script type='text/javascript' src='js/dynamics.min.js'></script>
    <script type='text/javascript' src='js/main.js'></script>
    <script type='text/javascript' src='js/bower/imagesloaded/imagesloaded.pkgd.min.js'></script>
    <script type='text/javascript' src='js/bower/isotope/dist/isotope.pkgd.min.js'></script>
    <script type='text/javascript' src='js/prettyphoto/js/jquery.prettyPhoto.min.js'></script>
    <script type='text/javascript' src='js/owl.carousel.js'></script>


    <script>
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = "";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
    <script>
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = ".tp-caption.NotGeneric-Title,.NotGeneric-Title{color:rgba(255,255,255,1.00);font-size:70px;line-height:70px;font-weight:800;font-style:normal;font-family:Raleway;padding:10px 0px 10px 0;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px}.tp-caption.NotGeneric-SubTitle,.NotGeneric-SubTitle{color:rgba(255,255,255,1.00);font-size:13px;line-height:20px;font-weight:500;font-style:normal;font-family:Raleway;padding:0 0 0 0px;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px;letter-spacing:4px;text-align:left}.tp-caption.NotGeneric-Button,.NotGeneric-Button{color:rgba(255,255,255,1.00);font-size:14px;line-height:14px;font-weight:500;font-style:normal;font-family:Raleway;padding:10px 30px 10px 30px;text-decoration:none;background-color:rgba(0,0,0,0);border-color:rgba(255,255,255,0.50);border-style:solid;border-width:1px;border-radius:0px 0px 0px 0px;letter-spacing:3px;text-align:left}.tp-caption.NotGeneric-Button:hover,.NotGeneric-Button:hover{color:rgba(255,255,255,1.00);text-decoration:none;background-color:transparent;border-color:rgba(255,255,255,1.00);border-style:solid;border-width:1px;border-radius:0px 0px 0px 0px;cursor:pointer}";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script type="text/javascript">
        /******************************************
                        -   PREPARE PLACEHOLDER FOR SLIDER  -
                    ******************************************/

        var setREVStartSize = function() {
            try {
                var e = new Object,
                    i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                e.c = jQuery('#rev_slider_3_1');
                e.gridwidth = [1240];
                e.gridheight = [868];

                e.sliderLayout = "fullscreen";
                e.fullScreenAutoWidth = 'off';
                e.fullScreenAlignForce = 'off';
                e.fullScreenOffsetContainer = '';
                e.fullScreenOffset = '';
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })

            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };

        setREVStartSize();

        var tpj = jQuery;

        var revapi3;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_3_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_3_1");
            } else {
                revapi3 = tpj("#rev_slider_3_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "//pegodesign.com/wp-themes/altos/wp-content/plugins/revslider/public/assets/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            }
                        }
                    },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1240,
                    gridheight: 868,
                    lazyType: "none",
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                        type: "mouse",
                        disable_onmobile: "on"
                    },
                    shadow: 0,
                    spinner: "spinner2",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/
    </script>
    <script>
        var htmlDivCss = ' #rev_slider_3_1_wrapper .tp-loader.spinner2{ background-color: #FFFFFF !important; } ';
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script>
        // start all the timers
        jQuery(document).ready(function($) {
            // custom callback when counting completes
            jQuery("#counter_2184").data("countToOptions", {
                onComplete: function(value) {
                    jQuery(".counter-specific-wrapper-2184 span.after-counter-text").css({
                        "display": "inline-block"
                    });
                }
            });

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data("countToOptions") || {});
                $this.countTo(options);
            }

            if (typeof jQuery.fn.waypoint !== "undefined") {
                jQuery("#counter_2184").waypoint(function($) {
                    jQuery(".counter-specific-wrapper-2184 span.after-counter-text").css({
                        "display": "none"
                    });
                    jQuery("#counter_2184").each(count);
                }, {
                    offset: "95%"
                });
            }
        });
    </script>
    <script>
        // start all the timers
        jQuery(document).ready(function($) {

            // custom callback when counting completes
            jQuery("#counter_3837").data("countToOptions", {
                onComplete: function(value) {
                    jQuery(".counter-specific-wrapper-3837 span.after-counter-text").css({
                        "display": "inline-block"
                    });
                }
            });

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data("countToOptions") || {});
                $this.countTo(options);
            }

            if (typeof jQuery.fn.waypoint !== "undefined") {
                jQuery("#counter_3837").waypoint(function($) {
                    jQuery(".counter-specific-wrapper-3837 span.after-counter-text").css({
                        "display": "none"
                    });
                    jQuery("#counter_3837").each(count);
                }, {
                    offset: "95%"
                });
            }
        });
    </script>
    <script>
        // start all the timers
        jQuery(document).ready(function($) {

            // custom callback when counting completes
            jQuery("#counter_7030").data("countToOptions", {
                onComplete: function(value) {
                    jQuery(".counter-specific-wrapper-7030 span.after-counter-text").css({
                        "display": "inline-block"
                    });
                }
            });

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data("countToOptions") || {});
                $this.countTo(options);
            }

            if (typeof jQuery.fn.waypoint !== "undefined") {
                jQuery("#counter_7030").waypoint(function($) {
                    jQuery(".counter-specific-wrapper-7030 span.after-counter-text").css({
                        "display": "none"
                    });
                    jQuery("#counter_7030").each(count);
                }, {
                    offset: "95%"
                });
            }
        });
    </script>
    <script>
        // start all the timers
        jQuery(document).ready(function($) {

            // custom callback when counting completes
            jQuery("#counter_441").data("countToOptions", {
                onComplete: function(value) {
                    jQuery(".counter-specific-wrapper-441 span.after-counter-text").css({
                        "display": "inline-block"
                    });
                }
            });

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data("countToOptions") || {});
                $this.countTo(options);
            }

            if (typeof jQuery.fn.waypoint !== "undefined") {
                jQuery("#counter_441").waypoint(function($) {
                    jQuery(".counter-specific-wrapper-441 span.after-counter-text").css({
                        "display": "none"
                    });
                    jQuery("#counter_441").each(count);
                }, {
                    offset: "95%"
                });
            }
        });
    </script>
    <script>
        // start all the timers
        jQuery(document).ready(function($) {

            // custom callback when counting completes
            jQuery("#counter_5663").data("countToOptions", {
                onComplete: function(value) {
                    jQuery(".counter-specific-wrapper-5663 span.after-counter-text").css({
                        "display": "inline-block"
                    });
                }
            });

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data("countToOptions") || {});
                $this.countTo(options);
            }

            if (typeof jQuery.fn.waypoint !== "undefined") {
                jQuery("#counter_5663").waypoint(function($) {
                    jQuery(".counter-specific-wrapper-5663 span.after-counter-text").css({
                        "display": "none"
                    });
                    jQuery("#counter_5663").each(count);
                }, {
                    offset: "95%"
                });
            }
        });
    </script>
    <script>
        jQuery(document).ready(function($) {
            (function() {
                document.documentElement.className = "js";
                var slideshow = new CircleSlideshow(document.getElementById("slideshow3816"));
            })();
        });
    </script>
 <script>
        jQuery(document).ready(function($) {
            (function() {
                document.documentElement.className = "js";
                var slideshow = new CircleSlideshow(document.getElementById("slideshow3817"));
            })();
        });
    </script>
 <script>
        jQuery(document).ready(function($) {
            (function() {
                document.documentElement.className = "js";
                var slideshow = new CircleSlideshow(document.getElementById("slideshow100"));
            })();
        });
    </script>

    <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
    <script>
        function initialize() {
            var mapOptions = {
                zoom: 11,
                center: new google.maps.LatLng(40.733942, -74.060645),
                scrollwheel: false,
                styles: [{
                    'featureType': 'landscape',
                    'stylers': [{
                        'saturation': -100
                    }, {
                        'lightness': 65
                    }, {
                        'visibility': 'on'
                    }]
                }, {
                    'featureType': 'poi',
                    'stylers': [{
                        'saturation': -100
                    }, {
                        'lightness': 51
                    }, {
                        'visibility': 'simplified'
                    }]
                }, {
                    'featureType': 'road.highway',
                    'stylers': [{
                        'saturation': -100
                    }, {
                        'visibility': 'simplified'
                    }]
                }, {
                    'featureType': 'road.arterial',
                    'stylers': [{
                        'saturation': -100
                    }, {
                        'lightness': 30
                    }, {
                        'visibility': 'on'
                    }]
                }, {
                    'featureType': 'road.local',
                    'stylers': [{
                        'saturation': -100
                    }, {
                        'lightness': 40
                    }, {
                        'visibility': 'on'
                    }]
                }, {
                    'featureType': 'transit',
                    'stylers': [{
                        'saturation': -100
                    }, {
                        'visibility': 'simplified'
                    }]
                }, {
                    'featureType': 'administrative.province',
                    'stylers': [{
                        'visibility': 'off'
                    }]
                }, {
                    'featureType': 'water',
                    'elementType': 'labels',
                    'stylers': [{
                        'visibility': 'on'
                    }, {
                        'lightness': -25
                    }, {
                        'saturation': -100
                    }]
                }, {
                    'featureType': 'water',
                    'elementType': 'geometry',
                    'stylers': [{
                        'hue': '#ffff00'
                    }, {
                        'lightness': -25
                    }, {
                        'saturation': -97
                    }]
                }]
            }
            var map = new google.maps.Map(document.getElementById('map_canvas'),
                mapOptions);

            setMarkers(map, places);
        }

        /**
         * Data for the markers consisting of a name, a LatLng and a zIndex for
         * the order in which these markers should display on top of each
         * other.
         */
        var places = [
            ["Place1", 40.733942, -74.060645, 1]
        ];

        function setMarkers(map, locations) {
            // Add markers to the map

            // Marker sizes are expressed as a Size of X,Y
            // where the origin of the image (0,0) is located
            // in the top left of the image.

            // Origins, anchor positions and coordinates of the marker
            // increase in the X direction to the right and in
            // the Y direction down.
            var image = {
                url: 'upload/map-pin.png',
                // This marker is 20 pixels wide by 32 pixels tall.
                //size: new google.maps.Size(20, 32),
                // The origin for this image is 0,0.
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at 0,32.
                anchor: new google.maps.Point(0, 32)
            };
            // Shapes define the clickable region of the icon.
            // The type defines an HTML &lt;area&gt; element 'poly' which
            // traces out a polygon as a series of X,Y points. The final
            // coordinate closes the poly by connecting to the first
            // coordinate.
            var shape = {
                coords: [1, 1, 1, 20, 18, 20, 18, 1],
                type: 'poly'
            };
            for (var i = 0; i < locations.length; i++) {
                var beach = locations[i];
                var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    icon: image,
                    shape: shape,
                    title: beach[0],
                    zIndex: beach[3]
                });
            }
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<script src='http://dimsemenov-static.s3.amazonaws.com/dist/jquery.magnific-popup.min.js'></script>
<script src="js/index-popup.js"></script>
<script src="js/index.js"></script>

    
</body>
</html>