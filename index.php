
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
                    </div>
                    <div class="main-menu">
                        <div class="menu-main-nav-menu-container">
                            <ul id="menu-main-nav-menu-2" class="sf-menu">
                                <li class="menu-item current-menu-item current_page_item menu-item-has-children"><a href="index.php">Home</a>
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
                    <section id="home" class="onepager_section_class first-onepage-section first-page-item">
                        <div class="inside-section">
                            <div class="inner-container">
                                <!-- start inner container -->
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_revslider_element wpb_content_element">
                                                    
                                                    <div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullscreen-container" style="background-color:transparent;padding:0px;">
                                                        <!-- START REVOLUTION SLIDER 5.2.5 fullscreen mode -->
                                                        <div id="rev_slider_3_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.2.5">
                                                            <ul>
                                                                <!-- SLIDE 1 -->
                                                                <li data-index="rs-1" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="upload/slider-city-100x50.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                    <!-- MAIN IMAGE -->
                                                                    <img src="upload/circus-slider1.jpg" alt="Full Design for Print Services" title="Circus Creative Agency" width="1280" height="853" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                                                    <!-- LAYERS -->

                                                                    <!-- LAYER NR. 1 -->
                                                                       <div class="tp-caption NotGeneric-Title linefix  tp-resizeme" id="slide-28-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power2.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;font-family:'Din Black', sans-serif;text-align:center;text-transform:left;padding:40px;font-weight:700;font-size:165px;color:#3ac1cf;text-shadow:0px 0px 12px rgba(0, 0, 0, 0.6);line-height:1;">WE LOVE 
                                                                        <br/> WHAT WE DO </div>

                                                                

                                                                    <!-- LAYER NR. 2 -->
                                                                    <div class="tp-caption NotGeneric-Button rev-btn getintouch" id="slide-9-layer-7" data-x="center" data-hoffset="" data-y="center" data-voffset="136" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"scrollbelow","offset":"px"}]' data-responsive_offset="on" data-responsive="off" style="z-index: 7; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;color:#3ac1cf; padding:10px 63px !important">GET IN TOUCH</div>

                                                                    <!-- LAYER NR. 3 -->
                                                                    <div class="tp-caption rev-scroll-btn " id="slide-9-layer-9" data-x="center" data-hoffset="" data-y="bottom" data-voffset="50" data-width="['35']" data-height="['55']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;" data-start="2000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]' data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 8; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: px; line-height: px; font-weight: 100;text-transform:left;border-color:rgba(255, 255, 255, 0.50);border-style:solid;border-width:1px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                                                        <span>							</span>
                                                                    </div>
                                                                </li>
                                                                <!-- SLIDE  2-->
                                                                <li data-index="rs-2" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="upload/slider-nature-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                    <!-- MAIN IMAGE -->
                                                                    <img src="upload/circus-slider2-magic.jpg" alt="Event Planning and Creation" title="slider-nature" width="1600" height="900" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                                                    <!-- LAYERS -->

                                                                    <!-- LAYER NR. 1 -->
                                                                       <div class="tp-caption  shadow tp-resizeme" id="slide-10-layer-15" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;" data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:1000;e:Power2.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="2000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" data-end="8300" style="z-index: 6; white-space: nowrap; font-size: 40px; line-height: 48px; font-weight: 300; color: #3ac1cf;text-transform:left;padding:5px 20px;border-color:rgba(58, 193, 207,1);border-style:solid;border-width:2px;cursor:pointer;font-family: 'Din Light', sans-serif;letter-spacing:-2px">This is where the magic happens.... </div>

                                                                    <!-- LAYER NR. 2 -->
                                                                    <div class="tp-caption NotGeneric-Button rev-btn whatwedo" id="slide-28-layer-7" data-x="center" data-hoffset="" data-y="center" data-voffset="173" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"#our-contact"}]' data-responsive_offset="on" data-responsive="off" style="z-index: 6; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;font-family:'Din Bold', sans-serif;">WHAT WE DO?</div>

                                                                    <!-- LAYER NR. 3 -->
                                                                    <div class="tp-caption rev-scroll-btn " id="slide-28-layer-9" data-x="center" data-hoffset="" data-y="bottom" data-voffset="50" data-width="['35']" data-height="['55']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;" data-start="2000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]' data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 7; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: px; line-height: px; font-weight: 100;text-transform:left;border-color:rgba(255, 255, 255, 0.50);border-style:solid;border-width:1px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                                                        <span>							</span>
                                                                    </div>
                                                                </li>
                                                                <!-- SLIDE  3-->
                                                                <li data-index="rs-3" data-transition="fadetotopfadefrombottom" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500" data-thumb="upload/bg-slider4-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                    <!-- MAIN IMAGE -->
                                                                    <img src="upload/circus-slider3-london.jpg" alt="Website Design" title="Circus Creative Design Boutique" width="2560" height="1440" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                                                    <!-- LAYERS -->

                                                                    <!-- LAYER NR. 1 -->
                                                                    <div class="tp-caption rev-scroll-btn " id="slide-10-layer-9" data-x="center" data-hoffset="" data-y="bottom" data-voffset="50" data-width="['35']" data-height="['55']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;" data-start="2000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]' data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 5; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: px; line-height: px; font-weight: 100;text-transform:left;border-color:rgba(255, 255, 255, 0.50);border-style:solid;border-width:1px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                                                        <span>							</span>
                                                                    </div>

                                                                    <!-- LAYER NR. 2 -->
                                                                      <div class="tp-caption NotGeneric-Title linefix  tp-resizeme littlelondon" id="slide-28-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power2.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;font-family:'Din Black', sans-serif;text-align:center;text-transform:left;padding:40px;font-weight:700;font-size:165px;color:#fff;text-shadow:0px 0px 20px rgba(0, 0, 0, 0.6);line-height:1;"><span class="little-bit">A LITTLE BIT</span>
                                                                        <br/> OF LONDON...</div>
                                                                    
                                                                      <div class="tp-caption NotGeneric-Button rev-btn heartoflondon" id="slide-28-layer-7" data-x="center" data-hoffset="" data-y="center" data-voffset="173" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"#our-contact"}]' data-responsive_offset="on" data-responsive="off" style="z-index: 6; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;font-family:'Din Bold', sans-serif;">...IN THE HEART OF THE DESERT</div>
                                                                    
 <!--Slide 4-->
      <li data-index="rs-4" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="upload/slider-nature-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                    <!-- MAIN IMAGE -->
                                                                    <img src="upload/circus-slider4-creative.jpg" alt="Banner Advertising" title="slider-nature" width="1600" height="900" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                                                    <!-- LAYERS -->

                                                                    <!-- LAYER NR. 1 -->
          <div class="tp-caption NotGeneric-SubTitle tp-resizeme wearea" id="slide-9-layer-4" data-x="center" data-hoffset="" data-y="center" data-voffset="-101" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap; font-weight: 300;font-family:'Din Light', sans-serif;text-transform:left;padding:10px 20px;color:#fff;font-size:32px;font-weight:300;background: rgba(64, 64, 65, 0.8);letter-spacing:-2px;"><span style="margin-right:2px" class="weare">We</span> <span style="margin-right:2px" class="weare">are</span> <span class="weare">a</span></div>
          
                                                                      <div class="tp-caption NotGeneric-Title tp-resizeme creativeagency" id="slide-9-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power2.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;font-family:'Din Light', sans-serif;text-align:center;text-transform:left;padding:30px 110px;font-weight:700;font-size:72px;color:#fff;background: rgba(58, 193, 207, 0.7);">CREATIVE
                                                                        <br/> AGENCY </div>
          


                                                                    <!-- LAYER NR. 2 -->
                                                                    <div class="tp-caption NotGeneric-Button rev-btn whoweare" id="slide-28-layer-7" data-x="center" data-hoffset="" data-y="center" data-voffset="173" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"#our-contact"}]' data-responsive_offset="on" data-responsive="off" style="z-index: 6; white-space: nowrap;text-transform:left;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;font-family:'Din Bold', sans-serif;">FIND OUT WHO WE ARE</div>

                                                                    <!-- LAYER NR. 3 -->
                                                                    <div class="tp-caption rev-scroll-btn " id="slide-28-layer-9" data-x="center" data-hoffset="" data-y="bottom" data-voffset="50" data-width="['35']" data-height="['55']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;" data-start="2000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]' data-basealign="slide" data-responsive_offset="off" data-responsive="off" style="z-index: 7; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: px; line-height: px; font-weight: 100;text-transform:left;border-color:rgba(255, 255, 255, 0.50);border-style:solid;border-width:1px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                                                        <span>							</span>
                                                                    </div>
                                                                </li>                                          
                                                                    
  
                                                                </li>
                                                            </ul>
    
                                                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;" ></div>
                                                        </div>

                                                    </div>
                                                    <!-- END REVOLUTION SLIDER -->
                                               
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end inner container -->
                        </div>
                    </section>
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
                                    <div class="inner-with-vertical-title aboutbottom">
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-7">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_appear">
                                                            <div class="wpb_wrapper">
                                                                
                                                                <div style="margin-bottom: 30px; line-height:1; display:inline-block" class="page-subtitle subtitle-special subtitle-for-h1 circus-title circus-title">Circus is a Boutique Creative Agency based in the Middle East.</div>
                                                                <p>Circus Creative DMCC is a communication agency with expertise in design, <span class="brhide"><br/></span>
strategy and technology. We work with clients from many business sectors <span class="brhide"><br/></span>and from start up small businesses through to multi-national organisations.</p>
                                                                <p>You will find us based in Dubai, with clients across the whole of the Middle East <span class="brhide"><br/></span>region. We are a small and nimble team of successful creative designers,<span class="brhide"><br/></span> strategists, technicians and project managers.</p>
                                                                <p>We have three key competence areas - graphic design, marketing & technology. <span class="brhide"><br/></span>
We are specialists in the branding field, where we work with traditional media  <span class="brhide"><br/></span>and other channels for our communication concepts.</p>
<p>We believe that a personal hands on holistic perspective is needed to be able to<span class="brhide"><br/></span>
work successfully with brand communication today.</p>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="wpb_content_element vc_altos_button wpb_animate_when_almost_visible wpb_appear"><a class="altos-button" target="_self" href="index.php#services" title="&lt;strong&gt;our&lt;/strong&gt; services"><strong>our</strong> services</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_empty_space" style="height: 89px"><span class="vc_empty_space_inner"></span></div>

                                                        <div class="wpb_content_element vc_altos_counter  counter-specific-wrapper-2184 wpb_animate_when_almost_visible wpb_appear">
                                                            <div class="counter-description"><b class="counter_execute" id="counter_2184" data-from="0" data-to="12" data-speed="1500"></b>
                                                                <div class="after-counter-text">Experts that will create <span class="brhide"><br /></span>an amazing job</div>
                                                            </div><span class="borderBefore"></span><span class="borderAfter"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <!-- end inner container -->
                                </div>
                            </div>
                        </div>
                    </section>
<div id="services" class="aboutlink">&nbsp;</div>
                    <section id="services" class="other-page-item onepager_section_class" style="  background-color: #f5f5f6;  ">
                        <div id="post-540" class="post-540 page type-page status-publish hentry">
                            <div class="inside-section">

                                <div class="inner-container small-container">
                                    <!-- start inner container -->
                                    <div class="normal-inner servicestop">
                                        <div class="row">
                                            <div class="wpb_column vc_column_container vc_col-sm-3"></div>
                                            <div class="wpb_column vc_column_container vc_col-sm-9">
                                             
                                                <h1 class="title-sh title-special has-subtitle servicestitle bigtitle servicestitle" style="margin-left:1%">Services</h1>
                                                            <div class="clear"></div>
                                                    <div class="page-subtitle subtitle-special subtitle-for-h1 servicescol" style="margin-left:1%">Branding, Strategy, Design and technology. <span class="brhide"><br /></span>Or what we like to call it, a party.</div></div>
                                        </div>
                                        <div class="vc_row wpb_row vc_row-fluid servicesbottom">
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="services-icns wpb_single_image wpb_content_element vc_align_right  wpb_animate_when_almost_visible wpb_left-to-right">

                                                            <figure class="wpb_wrapper vc_figure">
                                                                <div class="vc_single_image-wrapper vc_box_border_grey"><img width="97" height="448" src="upload/services-icons.png" class="vc_single_image-img attachment-full services-icons" alt="Website Development"/></div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-9">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_titles title_align_left wpb_animate_when_almost_visible wpb_right-to-left">
                                                           
                                                        </div>
                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_right-to-left">
                                                            <div class="wpb_wrapper">
                                                               <p class="services">In short, we at Circus Creative DMCC work with communication with a clearly defined objective.</p>
                                                                <p class="services">At Circus you will find designers, strategists, technicians and project managers. We see ourselves as creative <span class="brhide"><br/></span>people, because creativity is central to all our areas of expertise. We who work here both have the ability to <span class="brhide"><br/></span>understand what you want to achieve and to develop effective solutions for achieving those targets.</p>
<p class="services">In everything we do, we are eager to fully explore the opportunities of through the line communication, <span class="brhide"><br/></span>which is and always has been our core. But at the heart of what we do is always the basic idea of the message. <span class="brhide"><br/></span>The overall plan for the communication. It is a successful combination.</p>
<p class="services">In practice, this means that we develop complete communication strategies and campaign concepts as well <span class="brhide"><br/></span>as web sites, intranet and mobile solutions. We solve technical problems as often as we are dealing purely <span class="brhide"><br/></span>
with communicative challenges. A common feature of what we do is that our work always results<span class="brhide"><br/></span>
in a complete solution.</p>
<p style="color:#3ac1cf" class="services"><strong>Let us know if you want to know more about what we do!</strong></p>
<p class="services">We give you new and valuable ideas that do not stay on the drawing board.</p>                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div class="clear"></div>
                                    </div>
                                    <!-- end inner container -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <div id="portfolio" class="aboutlink">&nbsp;</div>
                    <section id="portfolio" class="other-page-item onepager_section_class" style="  background-color: #fff;">
                        <div id="post-521" class="post-521 page type-page status-publish hentry">
                            <div class="inside-section">

                                <div class="inner-container">
                                    <!-- start inner container -->
                                    <div class="normal-inner">
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper"></div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_titles title_align_center portfoliotop">
                                                            <h1 class="title-sh title-special has-subtitle">Portfolio</h1>
                                                            <div class="clear"></div>
                                                            <div class="page-subtitle subtitle-special subtitle-for-h1 proudsub">We are proud of our work...</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start Portfolio Desktop Version -->
                                        <div class="desktop-ver">
                                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid portfolio-row vc_row-no-padding">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_portfolio_grid wpb_content_element portfolio-margin">
                                                            <div id="slideshow3816" class="slideshow">
                                                                <div class="slide">
                                                                    <h2 class="slide__title slide__title--preview">CLIENT NAME 1 (Desktop)</h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="upload/burgy-main-850x450.jpg" alt="Exhibition Stand Design and Build"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type2">
                                                                                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" data-vc-parallax="1.5" data-vc-parallax-image="upload/burgy-main.jpg" class="vc_row wpb_row vc_row-fluid vc_row-has-fill vc_row-no-padding vc_row-o-full-height vc_row-o-columns-top vc_row-o-content-top vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                                                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                            <div class="vc_column-inner ">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                                                        <div class="wpb_wrapper">
                                                                                                            <div class="single-portfolio-title-wrapper single-portfolio-title-item slide__title--main ">
                                                                                                                <h1 class="padded-title"><span>Burgy </span><span>Fast </span><span>Food </span><span>Html </span><span>Theme </span></h1>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vc_row-full-width vc_clearfix"></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="vc_titles title_align_center">
                                                                                                            <h1 class="title-sh title-special has-subtitle">Html Theme</h1>
                                                                                                            <div class="clear"></div>
                                                                                                            <div class="page-subtitle subtitle-special subtitle-for-h1">Burgy Fast Food</div>
                                                                                                        </div>
                                                                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper">
                                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                                            <div class="wpb_wrapper">
                                                                                                                                <p style="text-align: center;">In hac habitasse platea dictumst. Donec suscipit, nisi at laoreet laoreet, risus lorem rhoncus enim, ut tincidunt ipsum sem at massa. Nulla vel metus dolor. Donec et dolor aliquet, sodales risus quis, efficitur justo. Donec nec pretium ante. Nulla ut finibus eros, non vestibulum nisi. Donec elementum ultricies risus. Aliquam erat volutpat. Nullam sollicitudin justo diam, eget sagittis dui lacinia sit amet. Vivamus semper enim sed nisl ornare rutrum. Aenean tellus elit, vehicula in ultrices at, cursus malesuada lacus.</p>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_content_element vc_altos_portfolio_details">
                                                                                                            <div class="portfolio_details_wrapper">
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Client</div>
                                                                                                                    <div class="portfolio_detail_single_value">Themeforest</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Website</div>
                                                                                                                    <div class="portfolio_detail_single_value"><a href="#" title="Burgy Html theme" target="_blank">View online</a></div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Date</div>
                                                                                                                    <div class="portfolio_detail_single_value">12 February, 2016</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Platform</div>
                                                                                                                    <div class="portfolio_detail_single_value">Html</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="600" src="upload/burgy2.jpg" class="vc_single_image-img attachment-full" alt="Sales Promotion Campaigns"/></div>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                        <div class="vc_empty_space" style="height: 70px"><span class="vc_empty_space_inner"></span></div>

                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="786" src="upload/burgy3.jpg" class="vc_single_image-img attachment-full" alt=""/></div>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="slide">
                                                                    <h2 class="slide__title slide__title--preview">Client Name 2</h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="upload/xavier-main-850x450.jpg" alt="Xavier Agency Html Theme on Themeforest"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type2">
                                                                                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" data-vc-parallax="1.5" data-vc-parallax-image="upload/xavier-main.jpg" class="vc_row wpb_row vc_row-fluid vc_row-has-fill vc_row-no-padding vc_row-o-full-height vc_row-o-columns-top vc_row-o-content-top vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                                                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                            <div class="vc_column-inner ">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                                                        <div class="wpb_wrapper">
                                                                                                            <div class="single-portfolio-title-wrapper single-portfolio-title-item slide__title--main ">
                                                                                                                <h1 class="padded-title"><span>Xavier </span><span>Agency </span><span>Html </span><span>Theme </span><span>on </span><span>Themeforest </span></h1>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vc_row-full-width vc_clearfix"></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="vc_titles title_align_center">
                                                                                                            <h1 class="title-sh title-special has-subtitle">Html Theme</h1>
                                                                                                            <div class="clear"></div>
                                                                                                            <div class="page-subtitle subtitle-special subtitle-for-h1">Agency Xavier</div>
                                                                                                        </div>
                                                                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper">
                                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                                            <div class="wpb_wrapper">
                                                                                                                                <p style="text-align: center;">In hac habitasse platea dictumst. Donec suscipit, nisi at laoreet laoreet, risus lorem rhoncus enim, ut tincidunt ipsum sem at massa. Nulla vel metus dolor. Donec et dolor aliquet, sodales risus quis, efficitur justo. Donec nec pretium ante. Nulla ut finibus eros, non vestibulum nisi. Donec elementum ultricies risus. Aliquam erat volutpat. Nullam sollicitudin justo diam, eget sagittis dui lacinia sit amet. Vivamus semper enim sed nisl ornare rutrum. Aenean tellus elit, vehicula in ultrices at, cursus malesuada lacus.</p>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_content_element vc_altos_portfolio_details">
                                                                                                            <div class="portfolio_details_wrapper">
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Client</div>
                                                                                                                    <div class="portfolio_detail_single_value">Themeforest</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Website</div>
                                                                                                                    <div class="portfolio_detail_single_value"><a href="#" title="Xavier Html theme" target="_blank">View online</a></div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Date</div>
                                                                                                                    <div class="portfolio_detail_single_value">23 February, 2016</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Platform</div>
                                                                                                                    <div class="portfolio_detail_single_value">Html</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="786" src="upload/xavier-ipad.jpg" class="vc_single_image-img attachment-full" alt="xavier-ipad"/></div>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                        <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="540" src="upload/xavier-iphone.jpg" class="vc_single_image-img attachment-full" alt="xavier-iphone"/></div>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="clear2"></div>
                                                                <div class="slide">
                                                                    <h2 class="slide__title slide__title--preview">Client Name 3</h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="upload/cards2-850x450.jpg" alt="Branding Identity, Business Cards &#038; Glasses"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type2">
                                                                                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" data-vc-parallax="1.5" data-vc-parallax-image="upload/cards2.jpg" class="vc_row wpb_row vc_row-fluid vc_row-has-fill vc_row-no-padding vc_row-o-full-height vc_row-o-columns-top vc_row-o-content-top vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                                                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                            <div class="vc_column-inner ">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                                                        <div class="wpb_wrapper">
                                                                                                            <div class="single-portfolio-title-wrapper single-portfolio-title-item slide__title--main ">
                                                                                                                <h1 class="padded-title"><span>Branding </span><span>Identity, </span><span>Business </span><span>Cards </span><span>&#038; </span><span>Glasses </span></h1>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vc_row-full-width vc_clearfix"></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="vc_titles title_align_center">
                                                                                                            <h3 class="title-sh title-normal">We made Branding Identity</h3>
                                                                                                            <div class="clear"></div>
                                                                                                        </div>
                                                                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper">
                                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                                            <div class="wpb_wrapper">
                                                                                                                                <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu sodales mi, vel iaculis dolor. Ut tincidunt lectus pellentesque tellus accumsan elementum. Integer eget congue massa. Nulla venenatis, arcu quis hendrerit lobortis, eros augue varius nisl, nec laoreet augue mauris eu magna.</p>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_gallery wpb_content_element vc_clearfix">
                                                                                                            <div class="wpb_wrapper">
                                                                                                                <div class="wpb_gallery_slides wpb_image_grid" data-interval="3">
                                                                                                                    <ul class="wpb_image_grid_ul">
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards6.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards6-389x500.jpg" width="389" height="500" alt="cards6" title="cards6"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards7.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards7-389x500.jpg" width="389" height="500" alt="cards7" title="cards7"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards8.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards8-389x500.jpg" width="389" height="500" alt="cards8" title="cards8"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards9.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards9-389x500.jpg" width="389" height="500" alt="cards9" title="cards9"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards10.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards10-389x500.jpg" width="389" height="500" alt="cards10" title="cards10"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards11.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards11-389x500.jpg" width="389" height="500" alt="cards11" title="cards11"/></a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                  
                                                                
                                                                <div class="slide">
                                                                    <h2 class="slide__title slide__title--preview">Client Name 4</h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="upload/brand1-850x450.jpg" alt="Bags and T-shirt design"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type1">
                                                                                    <div class="single-portfolio-title">
                                                                                        <div class="single-portfolio-title-page">Portfolio</div>
                                                                                        <div class="single-portfolio-title-item slide__title--main">Client Name 4</div>
                                                                                        <div class="single-portfolio-title-subtitle">We made bag and T-shirt design</div>
                                                                                    </div>
                                                                                    <div class="single-portfolio-image"><img class="single-portfolio-thumbnail" src="upload/brand1.jpg" alt="Bags and T-shirt design"/></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid small-container">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                            <div class="wpb_wrapper">
                                                                                                                <h2 style="text-align: center;">DESCRIPTION</h2>
                                                                                                                <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>

                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <a data-rel="prettyPhoto[rel-521-1163923826]" href="upload/brand1c.jpg" target="_self" class="vc_single_image-wrapper   vc_box_border_grey prettyphoto"><img class="vc_single_image-img " src="upload/brand1c.jpg" width="900" height="500" alt="Brand" title="Brand"/></a>
                                                                                                            </figure>
                                                                                                        </div>

                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <a data-rel="prettyPhoto[rel-521-1055285384]" href="upload/brand1b.jpg" target="_self" class="vc_single_image-wrapper   vc_box_border_grey prettyphoto"><img class="vc_single_image-img " src="upload/brand1b.jpg" width="900" height="500" alt="Brand" title="Brand"/></a>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="wpb_content_element vc_altos_portfolio_details">
                                                                                                            <div class="portfolio_details_wrapper">
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Role</div>
                                                                                                                    <div class="portfolio_detail_single_value">Graphic Design
                                                                                                                        <br/>PSD Mockup</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Client</div>
                                                                                                                    <div class="portfolio_detail_single_value">Themeforest</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Date</div>
                                                                                                                    <div class="portfolio_detail_single_value">February 12, 2016</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Live URL</div>
                                                                                                                    <div class="portfolio_detail_single_value"><a href="#" target="_blank">Xavier Live</a></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="clear4"></div>
                                                                <div class="clear2"></div>
                                                                <button class="action action--close" aria-label="Close"><i class="portfolio-single-close pe-7s-close"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_portfolio_grid wpb_content_element portfolio2nd">
                                                            <div id="slideshow100" class="slideshow">
                                                                <div class="slide">
                                                                    <h2 class="slide__title slide__title--preview">Client Name 5</h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="upload/burgy-main-850x450.jpg" alt="Burgy Fast Food Html Theme"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type2">
                                                                                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" data-vc-parallax="1.5" data-vc-parallax-image="upload/burgy-main.jpg" class="vc_row wpb_row vc_row-fluid vc_row-has-fill vc_row-no-padding vc_row-o-full-height vc_row-o-columns-top vc_row-o-content-top vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                                                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                            <div class="vc_column-inner ">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                                                        <div class="wpb_wrapper">
                                                                                                            <div class="single-portfolio-title-wrapper single-portfolio-title-item slide__title--main ">
                                                                                                                <h1 class="padded-title"><span>Burgy </span><span>Fast </span><span>Food </span><span>Html </span><span>Theme </span></h1>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vc_row-full-width vc_clearfix"></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="vc_titles title_align_center">
                                                                                                            <h1 class="title-sh title-special has-subtitle">Html Theme</h1>
                                                                                                            <div class="clear"></div>
                                                                                                            <div class="page-subtitle subtitle-special subtitle-for-h1">Burgy Fast Food</div>
                                                                                                        </div>
                                                                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper">
                                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                                            <div class="wpb_wrapper">
                                                                                                                                <p style="text-align: center;">In hac habitasse platea dictumst. Donec suscipit, nisi at laoreet laoreet, risus lorem rhoncus enim, ut tincidunt ipsum sem at massa. Nulla vel metus dolor. Donec et dolor aliquet, sodales risus quis, efficitur justo. Donec nec pretium ante. Nulla ut finibus eros, non vestibulum nisi. Donec elementum ultricies risus. Aliquam erat volutpat. Nullam sollicitudin justo diam, eget sagittis dui lacinia sit amet. Vivamus semper enim sed nisl ornare rutrum. Aenean tellus elit, vehicula in ultrices at, cursus malesuada lacus.</p>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_content_element vc_altos_portfolio_details">
                                                                                                            <div class="portfolio_details_wrapper">
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Client</div>
                                                                                                                    <div class="portfolio_detail_single_value">Themeforest</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Website</div>
                                                                                                                    <div class="portfolio_detail_single_value"><a href="#" title="Burgy Html theme" target="_blank">View online</a></div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Date</div>
                                                                                                                    <div class="portfolio_detail_single_value">12 February, 2016</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Platform</div>
                                                                                                                    <div class="portfolio_detail_single_value">Html</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="600" src="upload/burgy2.jpg" class="vc_single_image-img attachment-full" alt="burgy2"/></div>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                        <div class="vc_empty_space" style="height: 70px"><span class="vc_empty_space_inner"></span></div>

                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="786" src="upload/burgy3.jpg" class="vc_single_image-img attachment-full" alt="burgy3"/></div>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="slide">
                                                                    <h2 class="slide__title slide__title--preview">Client Name 6</h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="upload/xavier-main-850x450.jpg" alt="Xavier Agency Html Theme on Themeforest"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type2">
                                                                                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" data-vc-parallax="1.5" data-vc-parallax-image="upload/xavier-main.jpg" class="vc_row wpb_row vc_row-fluid vc_row-has-fill vc_row-no-padding vc_row-o-full-height vc_row-o-columns-top vc_row-o-content-top vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                                                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                            <div class="vc_column-inner ">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                                                        <div class="wpb_wrapper">
                                                                                                            <div class="single-portfolio-title-wrapper single-portfolio-title-item slide__title--main ">
                                                                                                                <h1 class="padded-title"><span>Xavier </span><span>Agency </span><span>Html </span><span>Theme </span><span>on </span><span>Themeforest </span></h1>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vc_row-full-width vc_clearfix"></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="vc_titles title_align_center">
                                                                                                            <h1 class="title-sh title-special has-subtitle">Html Theme</h1>
                                                                                                            <div class="clear"></div>
                                                                                                            <div class="page-subtitle subtitle-special subtitle-for-h1">Agency Xavier</div>
                                                                                                        </div>
                                                                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper">
                                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                                            <div class="wpb_wrapper">
                                                                                                                                <p style="text-align: center;">In hac habitasse platea dictumst. Donec suscipit, nisi at laoreet laoreet, risus lorem rhoncus enim, ut tincidunt ipsum sem at massa. Nulla vel metus dolor. Donec et dolor aliquet, sodales risus quis, efficitur justo. Donec nec pretium ante. Nulla ut finibus eros, non vestibulum nisi. Donec elementum ultricies risus. Aliquam erat volutpat. Nullam sollicitudin justo diam, eget sagittis dui lacinia sit amet. Vivamus semper enim sed nisl ornare rutrum. Aenean tellus elit, vehicula in ultrices at, cursus malesuada lacus.</p>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_content_element vc_altos_portfolio_details">
                                                                                                            <div class="portfolio_details_wrapper">
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Client</div>
                                                                                                                    <div class="portfolio_detail_single_value">Themeforest</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Website</div>
                                                                                                                    <div class="portfolio_detail_single_value"><a href="#" title="Xavier Html theme" target="_blank">View online</a></div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Date</div>
                                                                                                                    <div class="portfolio_detail_single_value">23 February, 2016</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Platform</div>
                                                                                                                    <div class="portfolio_detail_single_value">Html</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="786" src="upload/xavier-ipad.jpg" class="vc_single_image-img attachment-full" alt="xavier-ipad"/></div>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                        <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="540" src="upload/xavier-iphone.jpg" class="vc_single_image-img attachment-full" alt="xavier-iphone"/></div>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="clear2"></div>
                                                                <div class="slide">
                                                                    <h2 class="slide__title slide__title--preview">Client 7</h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="upload/cards2-850x450.jpg" alt="Branding Identity, Business Cards &#038; Glasses"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type2">
                                                                                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" data-vc-parallax="1.5" data-vc-parallax-image="upload/cards2.jpg" class="vc_row wpb_row vc_row-fluid vc_row-has-fill vc_row-no-padding vc_row-o-full-height vc_row-o-columns-top vc_row-o-content-top vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                                                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                            <div class="vc_column-inner ">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                                                        <div class="wpb_wrapper">
                                                                                                            <div class="single-portfolio-title-wrapper single-portfolio-title-item slide__title--main ">
                                                                                                                <h1 class="padded-title"><span>Branding </span><span>Identity, </span><span>Business </span><span>Cards </span><span>&#038; </span><span>Glasses </span></h1>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vc_row-full-width vc_clearfix"></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="vc_titles title_align_center">
                                                                                                            <h3 class="title-sh title-normal">We made Branding Identity</h3>
                                                                                                            <div class="clear"></div>
                                                                                                        </div>
                                                                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper">
                                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                                            <div class="wpb_wrapper">
                                                                                                                                <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu sodales mi, vel iaculis dolor. Ut tincidunt lectus pellentesque tellus accumsan elementum. Integer eget congue massa. Nulla venenatis, arcu quis hendrerit lobortis, eros augue varius nisl, nec laoreet augue mauris eu magna.</p>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_gallery wpb_content_element vc_clearfix">
                                                                                                            <div class="wpb_wrapper">
                                                                                                                <div class="wpb_gallery_slides wpb_image_grid" data-interval="3">
                                                                                                                    <ul class="wpb_image_grid_ul">
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards6.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards6-389x500.jpg" width="389" height="500" alt="cards6" title="cards6"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards7.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards7-389x500.jpg" width="389" height="500" alt="cards7" title="cards7"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards8.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards8-389x500.jpg" width="389" height="500" alt="cards8" title="cards8"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards9.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards9-389x500.jpg" width="389" height="500" alt="cards9" title="cards9"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards10.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards10-389x500.jpg" width="389" height="500" alt="cards10" title="cards10"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards11.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards11-389x500.jpg" width="389" height="500" alt="cards11" title="cards11"/></a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="slide">
                                                                    <h2 class="slide__title slide__title--preview">Client Name 8</h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="upload/brand1-850x450.jpg" alt="Bags and T-shirt design"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type1">
                                                                                    <div class="single-portfolio-title">
                                                                                        <div class="single-portfolio-title-page">Portfolio</div>
                                                                                        <div class="single-portfolio-title-item slide__title--main">Bags and T-shirt design</div>
                                                                                        <div class="single-portfolio-title-subtitle">We made bag and T-shirt design</div>
                                                                                    </div>
                                                                                    <div class="single-portfolio-image"><img class="single-portfolio-thumbnail" src="upload/brand1.jpg" alt="Bags and T-shirt design"/></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid small-container">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                            <div class="wpb_wrapper">
                                                                                                                <h2 style="text-align: center;">DESCRIPTION</h2>
                                                                                                                <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>

                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <a data-rel="prettyPhoto[rel-521-1163923826]" href="upload/brand1c.jpg" target="_self" class="vc_single_image-wrapper   vc_box_border_grey prettyphoto"><img class="vc_single_image-img " src="upload/brand1c.jpg" width="900" height="500" alt="Brand" title="Brand"/></a>
                                                                                                            </figure>
                                                                                                        </div>

                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <a data-rel="prettyPhoto[rel-521-1055285384]" href="upload/brand1b.jpg" target="_self" class="vc_single_image-wrapper   vc_box_border_grey prettyphoto"><img class="vc_single_image-img " src="upload/brand1b.jpg" width="900" height="500" alt="Brand" title="Brand"/></a>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="wpb_content_element vc_altos_portfolio_details">
                                                                                                            <div class="portfolio_details_wrapper">
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Role</div>
                                                                                                                    <div class="portfolio_detail_single_value">Graphic Design
                                                                                                                        <br/>PSD Mockup</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Client</div>
                                                                                                                    <div class="portfolio_detail_single_value">Themeforest</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Date</div>
                                                                                                                    <div class="portfolio_detail_single_value">February 12, 2016</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Live URL</div>
                                                                                                                    <div class="portfolio_detail_single_value"><a href="#" target="_blank">Xavier Live</a></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="clear4"></div>
                                                                <div class="clear2"></div>
                                                                <button class="action action--close" aria-label="Close"><i class="portfolio-single-close pe-7s-close"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>    
                                        <!-- End Portfolio Desktop Version -->
                                        
                                       
                                        
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div class="clear"></div>
                                    </div>
                                    <!-- end inner container -->
                                </div>
                            </div>
                        </div>
                         
                    
                
                <!-- Start Portfolio Mobile Version -->
                                <div class="name3mob">
                                  
                                 
                        <div id="post-521" class="post-521 page type-page status-publish hentry">
                            <div class="inside-section">

                                <div class="inner-container">
                                    <!-- start inner container -->
                                    <div class="normal-inner">
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper"></div>
                                                </div>
                                            </div>
                                            
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start Portfolio Desktop Version -->
                                        
                                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid portfolio-row vc_row-no-padding">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_portfolio_grid wpb_content_element portfolio-margin">
                                                            <div id="slideshow3817" class="slideshow">
                                                                <div class="slide show2">
                                                                    <h2 class="slide__title slide__title--preview">Client Name 1 </h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="upload/burgy-main-850x450.jpg" alt="Burgy Fast Food Html Theme"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type2">
                                                                                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" data-vc-parallax="1.5" data-vc-parallax-image="upload/burgy-main.jpg" class="vc_row wpb_row vc_row-fluid vc_row-has-fill vc_row-no-padding vc_row-o-full-height vc_row-o-columns-top vc_row-o-content-top vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                                                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                            <div class="vc_column-inner ">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                                                        <div class="wpb_wrapper">
                                                                                                            <div class="single-portfolio-title-wrapper single-portfolio-title-item slide__title--main ">
                                                                                                                <h1 class="padded-title"><span>Burgy </span><span>Fast </span><span>Food </span><span>Html </span><span>Theme </span></h1>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vc_row-full-width vc_clearfix"></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="vc_titles title_align_center">
                                                                                                            <h1 class="title-sh title-special has-subtitle">Html Theme</h1>
                                                                                                            <div class="clear"></div>
                                                                                                            <div class="page-subtitle subtitle-special subtitle-for-h1">Burgy Fast Food</div>
                                                                                                        </div>
                                                                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper">
                                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                                            <div class="wpb_wrapper">
                                                                                                                                <p style="text-align: center;">In hac habitasse platea dictumst. Donec suscipit, nisi at laoreet laoreet, risus lorem rhoncus enim, ut tincidunt ipsum sem at massa. Nulla vel metus dolor. Donec et dolor aliquet, sodales risus quis, efficitur justo. Donec nec pretium ante. Nulla ut finibus eros, non vestibulum nisi. Donec elementum ultricies risus. Aliquam erat volutpat. Nullam sollicitudin justo diam, eget sagittis dui lacinia sit amet. Vivamus semper enim sed nisl ornare rutrum. Aenean tellus elit, vehicula in ultrices at, cursus malesuada lacus.</p>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_content_element vc_altos_portfolio_details">
                                                                                                            <div class="portfolio_details_wrapper">
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Client</div>
                                                                                                                    <div class="portfolio_detail_single_value">Themeforest</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Website</div>
                                                                                                                    <div class="portfolio_detail_single_value"><a href="#" title="Burgy Html theme" target="_blank">View online</a></div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Date</div>
                                                                                                                    <div class="portfolio_detail_single_value">12 February, 2016</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Platform</div>
                                                                                                                    <div class="portfolio_detail_single_value">Html</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="600" src="upload/burgy2.jpg" class="vc_single_image-img attachment-full" alt="burgy2"/></div>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                        <div class="vc_empty_space" style="height: 70px"><span class="vc_empty_space_inner"></span></div>

                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="786" src="upload/burgy3.jpg" class="vc_single_image-img attachment-full" alt="burgy3"/></div>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="slide show2">
                                                                    <h2 class="slide__title slide__title--preview">Client Name 2</h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="upload/xavier-main-850x450.jpg" alt="Xavier Agency Html Theme on Themeforest"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type2">
                                                                                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" data-vc-parallax="1.5" data-vc-parallax-image="upload/xavier-main.jpg" class="vc_row wpb_row vc_row-fluid vc_row-has-fill vc_row-no-padding vc_row-o-full-height vc_row-o-columns-top vc_row-o-content-top vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                                                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                            <div class="vc_column-inner ">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                                                        <div class="wpb_wrapper">
                                                                                                            <div class="single-portfolio-title-wrapper single-portfolio-title-item slide__title--main ">
                                                                                                                <h1 class="padded-title"><span>Xavier </span><span>Agency </span><span>Html </span><span>Theme </span><span>on </span><span>Themeforest </span></h1>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vc_row-full-width vc_clearfix"></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="vc_titles title_align_center">
                                                                                                            <h1 class="title-sh title-special has-subtitle">Html Theme</h1>
                                                                                                            <div class="clear"></div>
                                                                                                            <div class="page-subtitle subtitle-special subtitle-for-h1">Agency Xavier</div>
                                                                                                        </div>
                                                                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper">
                                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                                            <div class="wpb_wrapper">
                                                                                                                                <p style="text-align: center;">In hac habitasse platea dictumst. Donec suscipit, nisi at laoreet laoreet, risus lorem rhoncus enim, ut tincidunt ipsum sem at massa. Nulla vel metus dolor. Donec et dolor aliquet, sodales risus quis, efficitur justo. Donec nec pretium ante. Nulla ut finibus eros, non vestibulum nisi. Donec elementum ultricies risus. Aliquam erat volutpat. Nullam sollicitudin justo diam, eget sagittis dui lacinia sit amet. Vivamus semper enim sed nisl ornare rutrum. Aenean tellus elit, vehicula in ultrices at, cursus malesuada lacus.</p>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_content_element vc_altos_portfolio_details">
                                                                                                            <div class="portfolio_details_wrapper">
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Client</div>
                                                                                                                    <div class="portfolio_detail_single_value">Themeforest</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Website</div>
                                                                                                                    <div class="portfolio_detail_single_value"><a href="#" title="Xavier Html theme" target="_blank">View online</a></div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Date</div>
                                                                                                                    <div class="portfolio_detail_single_value">23 February, 2016</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Platform</div>
                                                                                                                    <div class="portfolio_detail_single_value">Html</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="786" src="upload/xavier-ipad.jpg" class="vc_single_image-img attachment-full" alt="xavier-ipad"/></div>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                        <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="540" src="upload/xavier-iphone.jpg" class="vc_single_image-img attachment-full" alt="xavier-iphone"/></div>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                              
                                                                <div class="slide show2">
                                                                    <h2 class="slide__title slide__title--preview">Client Name 3</h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="upload/cards2-850x450.jpg" alt="Branding Identity, Business Cards &#038; Glasses"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type2">
                                                                                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" data-vc-parallax="1.5" data-vc-parallax-image="upload/cards2.jpg" class="vc_row wpb_row vc_row-fluid vc_row-has-fill vc_row-no-padding vc_row-o-full-height vc_row-o-columns-top vc_row-o-content-top vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                                                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                            <div class="vc_column-inner ">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                                                        <div class="wpb_wrapper">
                                                                                                            <div class="single-portfolio-title-wrapper single-portfolio-title-item slide__title--main ">
                                                                                                                <h1 class="padded-title"><span>Branding </span><span>Identity, </span><span>Business </span><span>Cards </span><span>&#038; </span><span>Glasses </span></h1>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vc_row-full-width vc_clearfix"></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="vc_titles title_align_center">
                                                                                                            <h3 class="title-sh title-normal">We made Branding Identity</h3>
                                                                                                            <div class="clear"></div>
                                                                                                        </div>
                                                                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper">
                                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                                            <div class="wpb_wrapper">
                                                                                                                                <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu sodales mi, vel iaculis dolor. Ut tincidunt lectus pellentesque tellus accumsan elementum. Integer eget congue massa. Nulla venenatis, arcu quis hendrerit lobortis, eros augue varius nisl, nec laoreet augue mauris eu magna.</p>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_gallery wpb_content_element vc_clearfix">
                                                                                                            <div class="wpb_wrapper">
                                                                                                                <div class="wpb_gallery_slides wpb_image_grid" data-interval="3">
                                                                                                                    <ul class="wpb_image_grid_ul">
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards6.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards6-389x500.jpg" width="389" height="500" alt="cards6" title="cards6"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards7.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards7-389x500.jpg" width="389" height="500" alt="cards7" title="cards7"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards8.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards8-389x500.jpg" width="389" height="500" alt="cards8" title="cards8"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards9.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards9-389x500.jpg" width="389" height="500" alt="cards9" title="cards9"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards10.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards10-389x500.jpg" width="389" height="500" alt="cards10" title="cards10"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards11.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards11-389x500.jpg" width="389" height="500" alt="cards11" title="cards11"/></a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="slide show2">
                                                                    <h2 class="slide__title slide__title--preview">Client Name 4</h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="upload/brand1-850x450.jpg" alt="Bags and T-shirt design"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type1">
                                                                                    <div class="single-portfolio-title">
                                                                                        <div class="single-portfolio-title-page">Portfolio</div>
                                                                                        <div class="single-portfolio-title-item slide__title--main">Client Name 4</div>
                                                                                        <div class="single-portfolio-title-subtitle">We made bag and T-shirt design</div>
                                                                                    </div>
                                                                                    <div class="single-portfolio-image"><img class="single-portfolio-thumbnail" src="upload/brand1.jpg" alt="Bags and T-shirt design"/></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid small-container">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                            <div class="wpb_wrapper">
                                                                                                                <h2 style="text-align: center;">DESCRIPTION</h2>
                                                                                                                <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>

                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <a data-rel="prettyPhoto[rel-521-1163923826]" href="upload/brand1c.jpg" target="_self" class="vc_single_image-wrapper   vc_box_border_grey prettyphoto"><img class="vc_single_image-img " src="upload/brand1c.jpg" width="900" height="500" alt="Brand" title="Brand"/></a>
                                                                                                            </figure>
                                                                                                        </div>

                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <a data-rel="prettyPhoto[rel-521-1055285384]" href="upload/brand1b.jpg" target="_self" class="vc_single_image-wrapper   vc_box_border_grey prettyphoto"><img class="vc_single_image-img " src="upload/brand1b.jpg" width="900" height="500" alt="Brand" title="Brand"/></a>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="wpb_content_element vc_altos_portfolio_details">
                                                                                                            <div class="portfolio_details_wrapper">
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Role</div>
                                                                                                                    <div class="portfolio_detail_single_value">Graphic Design
                                                                                                                        <br/>PSD Mockup</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Client</div>
                                                                                                                    <div class="portfolio_detail_single_value">Themeforest</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Date</div>
                                                                                                                    <div class="portfolio_detail_single_value">February 12, 2016</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Live URL</div>
                                                                                                                    <div class="portfolio_detail_single_value"><a href="#" target="_blank">Xavier Live</a></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="clear4"></div>
                                                                <div class="clear2"></div>
                                                                <button class="action action--close" aria-label="Close"><i class="portfolio-single-close pe-7s-close"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_portfolio_grid wpb_content_element portfolio2nd">
                                                            <div id="slideshow100" class="slideshow">
                                                                <div class="slide show2">
                                                                    <h2 class="slide__title slide__title--preview">Client Name 5</h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="upload/burgy-main-850x450.jpg" alt="Burgy Fast Food Html Theme"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type2">
                                                                                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" data-vc-parallax="1.5" data-vc-parallax-image="upload/burgy-main.jpg" class="vc_row wpb_row vc_row-fluid vc_row-has-fill vc_row-no-padding vc_row-o-full-height vc_row-o-columns-top vc_row-o-content-top vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                                                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                            <div class="vc_column-inner ">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                                                        <div class="wpb_wrapper">
                                                                                                            <div class="single-portfolio-title-wrapper single-portfolio-title-item slide__title--main ">
                                                                                                                <h1 class="padded-title"><span>Burgy </span><span>Fast </span><span>Food </span><span>Html </span><span>Theme </span></h1>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vc_row-full-width vc_clearfix"></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="vc_titles title_align_center">
                                                                                                            <h1 class="title-sh title-special has-subtitle">Html Theme</h1>
                                                                                                            <div class="clear"></div>
                                                                                                            <div class="page-subtitle subtitle-special subtitle-for-h1">Burgy Fast Food</div>
                                                                                                        </div>
                                                                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper">
                                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                                            <div class="wpb_wrapper">
                                                                                                                                <p style="text-align: center;">In hac habitasse platea dictumst. Donec suscipit, nisi at laoreet laoreet, risus lorem rhoncus enim, ut tincidunt ipsum sem at massa. Nulla vel metus dolor. Donec et dolor aliquet, sodales risus quis, efficitur justo. Donec nec pretium ante. Nulla ut finibus eros, non vestibulum nisi. Donec elementum ultricies risus. Aliquam erat volutpat. Nullam sollicitudin justo diam, eget sagittis dui lacinia sit amet. Vivamus semper enim sed nisl ornare rutrum. Aenean tellus elit, vehicula in ultrices at, cursus malesuada lacus.</p>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_content_element vc_altos_portfolio_details">
                                                                                                            <div class="portfolio_details_wrapper">
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Client</div>
                                                                                                                    <div class="portfolio_detail_single_value">Themeforest</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Website</div>
                                                                                                                    <div class="portfolio_detail_single_value"><a href="#" title="Burgy Html theme" target="_blank">View online</a></div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Date</div>
                                                                                                                    <div class="portfolio_detail_single_value">12 February, 2016</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Platform</div>
                                                                                                                    <div class="portfolio_detail_single_value">Html</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="600" src="upload/burgy2.jpg" class="vc_single_image-img attachment-full" alt="burgy2"/></div>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                        <div class="vc_empty_space" style="height: 70px"><span class="vc_empty_space_inner"></span></div>

                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="786" src="upload/burgy3.jpg" class="vc_single_image-img attachment-full" alt="burgy3"/></div>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="slide show2">
                                                                    <h2 class="slide__title slide__title--preview">Client Name 6</h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="upload/xavier-main-850x450.jpg" alt="Xavier Agency Html Theme on Themeforest"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type2">
                                                                                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" data-vc-parallax="1.5" data-vc-parallax-image="upload/xavier-main.jpg" class="vc_row wpb_row vc_row-fluid vc_row-has-fill vc_row-no-padding vc_row-o-full-height vc_row-o-columns-top vc_row-o-content-top vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                                                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                            <div class="vc_column-inner ">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                                                        <div class="wpb_wrapper">
                                                                                                            <div class="single-portfolio-title-wrapper single-portfolio-title-item slide__title--main ">
                                                                                                                <h1 class="padded-title"><span>Xavier </span><span>Agency </span><span>Html </span><span>Theme </span><span>on </span><span>Themeforest </span></h1>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vc_row-full-width vc_clearfix"></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="vc_titles title_align_center">
                                                                                                            <h1 class="title-sh title-special has-subtitle">Html Theme</h1>
                                                                                                            <div class="clear"></div>
                                                                                                            <div class="page-subtitle subtitle-special subtitle-for-h1">Agency Xavier</div>
                                                                                                        </div>
                                                                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper">
                                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                                            <div class="wpb_wrapper">
                                                                                                                                <p style="text-align: center;">In hac habitasse platea dictumst. Donec suscipit, nisi at laoreet laoreet, risus lorem rhoncus enim, ut tincidunt ipsum sem at massa. Nulla vel metus dolor. Donec et dolor aliquet, sodales risus quis, efficitur justo. Donec nec pretium ante. Nulla ut finibus eros, non vestibulum nisi. Donec elementum ultricies risus. Aliquam erat volutpat. Nullam sollicitudin justo diam, eget sagittis dui lacinia sit amet. Vivamus semper enim sed nisl ornare rutrum. Aenean tellus elit, vehicula in ultrices at, cursus malesuada lacus.</p>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_content_element vc_altos_portfolio_details">
                                                                                                            <div class="portfolio_details_wrapper">
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Client</div>
                                                                                                                    <div class="portfolio_detail_single_value">Themeforest</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Website</div>
                                                                                                                    <div class="portfolio_detail_single_value"><a href="#" title="Xavier Html theme" target="_blank">View online</a></div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Date</div>
                                                                                                                    <div class="portfolio_detail_single_value">23 February, 2016</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Platform</div>
                                                                                                                    <div class="portfolio_detail_single_value">Html</div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="786" src="upload/xavier-ipad.jpg" class="vc_single_image-img attachment-full" alt="xavier-ipad"/></div>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                        <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1170" height="540" src="upload/xavier-iphone.jpg" class="vc_single_image-img attachment-full" alt="xavier-iphone"/></div>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="clear2"></div>
                                                                <div class="slide show2">
                                                                    <h2 class="slide__title slide__title--preview">Client 7</h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="upload/cards2-850x450.jpg" alt="Branding Identity, Business Cards &#038; Glasses"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type2">
                                                                                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" data-vc-parallax="1.5" data-vc-parallax-image="upload/cards2.jpg" class="vc_row wpb_row vc_row-fluid vc_row-has-fill vc_row-no-padding vc_row-o-full-height vc_row-o-columns-top vc_row-o-content-top vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                                                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                            <div class="vc_column-inner ">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                                                        <div class="wpb_wrapper">
                                                                                                            <div class="single-portfolio-title-wrapper single-portfolio-title-item slide__title--main ">
                                                                                                                <h1 class="padded-title"><span>Branding </span><span>Identity, </span><span>Business </span><span>Cards </span><span>&#038; </span><span>Glasses </span></h1>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vc_row-full-width vc_clearfix"></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="vc_titles title_align_center">
                                                                                                            <h3 class="title-sh title-normal">We made Branding Identity</h3>
                                                                                                            <div class="clear"></div>
                                                                                                        </div>
                                                                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper">
                                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                                            <div class="wpb_wrapper">
                                                                                                                                <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu sodales mi, vel iaculis dolor. Ut tincidunt lectus pellentesque tellus accumsan elementum. Integer eget congue massa. Nulla venenatis, arcu quis hendrerit lobortis, eros augue varius nisl, nec laoreet augue mauris eu magna.</p>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="wpb_column vc_column_container vc_col-sm-2">
                                                                                                                <div class="vc_column-inner ">
                                                                                                                    <div class="wpb_wrapper"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="wpb_gallery wpb_content_element vc_clearfix">
                                                                                                            <div class="wpb_wrapper">
                                                                                                                <div class="wpb_gallery_slides wpb_image_grid" data-interval="3">
                                                                                                                    <ul class="wpb_image_grid_ul">
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards6.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards6-389x500.jpg" width="389" height="500" alt="cards6" title="cards6"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards7.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards7-389x500.jpg" width="389" height="500" alt="cards7" title="cards7"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards8.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards8-389x500.jpg" width="389" height="500" alt="cards8" title="cards8"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards9.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards9-389x500.jpg" width="389" height="500" alt="cards9" title="cards9"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards10.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards10-389x500.jpg" width="389" height="500" alt="cards10" title="cards10"/></a>
                                                                                                                        </li>
                                                                                                                        <li class="isotope-item">
                                                                                                                            <a class="prettyphoto" href="upload/cards11.jpg" data-rel="prettyPhoto[rel-521-1595403522]"><img class="" src="upload/cards11-389x500.jpg" width="389" height="500" alt="cards11" title="cards11"/></a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="slide show2">
                                                                    <h2 class="slide__title slide__title--preview">Client Name 8</h2>
                                                                    <div class="slide__item">
                                                                        <div class="slide__inner"><img class="slide__img slide__img--small" src="upload/brand1-850x450.jpg" alt="Bags and T-shirt design"/>
                                                                            <button class="folio-read-more-button action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="slide__content">
                                                                        <div class="slide__content-scroller">
                                                                            <div class="slide__details">
                                                                                <div class="slide__description portfolio-type1">
                                                                                    <div class="single-portfolio-title">
                                                                                        <div class="single-portfolio-title-page">Portfolio</div>
                                                                                        <div class="single-portfolio-title-item slide__title--main">Bags and T-shirt design</div>
                                                                                        <div class="single-portfolio-title-subtitle">We made bag and T-shirt design</div>
                                                                                    </div>
                                                                                    <div class="single-portfolio-image"><img class="single-portfolio-thumbnail" src="upload/brand1.jpg" alt="Bags and T-shirt design"/></div>
                                                                                    <div class="inner-slider-wrap">
                                                                                        <div class="vc_row wpb_row vc_row-fluid small-container">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                            <div class="wpb_wrapper">
                                                                                                                <h2 style="text-align: center;">DESCRIPTION</h2>
                                                                                                                <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>

                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <a data-rel="prettyPhoto[rel-521-1163923826]" href="upload/brand1c.jpg" target="_self" class="vc_single_image-wrapper   vc_box_border_grey prettyphoto"><img class="vc_single_image-img " src="upload/brand1c.jpg" width="900" height="500" alt="Brand" title="Brand"/></a>
                                                                                                            </figure>
                                                                                                        </div>

                                                                                                        <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                                                            <figure class="wpb_wrapper vc_figure">
                                                                                                                <a data-rel="prettyPhoto[rel-521-1055285384]" href="upload/brand1b.jpg" target="_self" class="vc_single_image-wrapper   vc_box_border_grey prettyphoto"><img class="vc_single_image-img " src="upload/brand1b.jpg" width="900" height="500" alt="Brand" title="Brand"/></a>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="vc_row wpb_row vc_row-fluid">
                                                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                                <div class="vc_column-inner ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="wpb_content_element vc_altos_portfolio_details">
                                                                                                            <div class="portfolio_details_wrapper">
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Role</div>
                                                                                                                    <div class="portfolio_detail_single_value">Graphic Design
                                                                                                                        <br/>PSD Mockup</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Client</div>
                                                                                                                    <div class="portfolio_detail_single_value">Themeforest</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Date</div>
                                                                                                                    <div class="portfolio_detail_single_value">February 12, 2016</div>
                                                                                                                </div>
                                                                                                                <div class="portfolio_detail_single">
                                                                                                                    <div class="portfolio_detail_single_title">Live URL</div>
                                                                                                                    <div class="portfolio_detail_single_value"><a href="#" target="_blank">Xavier Live</a></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                                
                                                                <div class="clear4"></div>
                                                                <div class="clear2"></div>
                                                                <button class="action action--close" aria-label="Close"><i class="portfolio-single-close pe-7s-close"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>
                                        <!-- End Portfolio Desktop Version -->
                                        
                                       
                                        
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div class="clear"></div>
                                      
                                    </div>
                                    <!-- end inner container -->
                                    
                                </div>
                            </div>
                        </div>
                         
                 
                </div>
                    <div class="loadmore"> 
                <a href="#" id="loadMore" >Load More</a></div>   
                        </section>
                                        
                                        <!-- End Portfolio Mobile Version -->
                
                    <section id="our-team-2" class="other-page-item onepager_section_class ourteam" style="background-color:#f5f5f6">
                        <div id="post-545" class="post-545 page type-page status-publish hentry">
                            <div class="inside-section">

                                <div class="inner-container">
                                    <!-- start inner container -->
                                    <div class="normal-inner">
                                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding teambottom">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="vc_titles title_align_center wpb_animate_when_almost_visible wpb_appear teamtop">
                                                                            <h1 class="title-sh title-special has-subtitle ourteam-title">Our team</h1>
                                                                            <div class="clear"></div>
                                                                            <div class="page-subtitle subtitle-special subtitle-for-h1 hellocircus">Hello! This is Circus</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Start Our Team Desktop Version -->
                                                        <div class="desktop-ver">
                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="owl-carousel owl-theme testimonials-wrapper" style="width:100%; max-width:1200px; margin:0 auto">
                                                                <div class="item">
                                                                        <div class="wpb_content_element vc_altos_team wpb_animate_when_almost_visible wpb_appear">
                                                               
                                                                            <div class="team-member-single team-item-first-line team-item-1">
                                                                                <div class="team-member-details">
                                                                                    <div class="team-member-name">ROB PERRYMAN</div>
                                                                                    <div class="team-member-position">FOUNDER<br />
CREATIVE DIRECTOR</div>
                                                                                    <ul class="team-member-socials">
                                                                                         <li>
                                                                                            <a class="sh-socials-url" href="#" title="Facebook" target="_blank"><img src="upload/fb-like.png" class="smicons"></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a class="sh-socials-url" href="#" title="Twitter" target="_blank"><img src="upload/twitter-icon.png" class="smicons"></a>
                                                                                        </li>
                                                                                         <li>
                                                                                            <a class="sh-socials-url" href="#" title="Instagram" target="_blank"><img src="upload/instagram-icon.png" class="smicons"></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a class="sh-socials-url" href="https://www.linkedin.com/company/circus-dubai" title="LinkedIn" target="_blank"><img src="upload/linkedin-icon.png" class="smicons"></a>
                                                                                        </li>
                                                                                         <a class="sh-socials-url" href="https://plus.google.com/+Thecircusdubai" title="Google Plus" target="_blank"><img src="upload/google-plus-icon.png" class="smicons"></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="team-member-single-thumb">
                                                                                    <div class="arrow-right"></div><img src="upload/robp.jpg" width="250" height="250" alt="team-member2"/></div>
                                                                            </div>
                                                                            <div class="team-member-single team-item-first-line team-item-2">
                                                                                <div class="team-member-details">
                                                                                   <div class="team-member-name">MIKE BALDOCK</div>
                                                                                    <div class="team-member-position">ASSOCIATE<br />
CREATIVE DIRECTOR</div>
                                                                                    
                                                                                     <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="team-member-single-thumb">
                                                                                    <div class="arrow-right"></div><img src="upload/mikeb.jpg" width="250" height="250" alt="team-member1"/></div>
                                                                            </div>
                                                                            <div class="team-member-single team-item-first-line team-item-3">
                                                                                <div class="team-member-details">
                                                                                     <div class="team-member-name">MATT HEBDITCH</div>
                                                                                    <div class="team-member-position">CREATIVE DESIGNER<br />
</div>
                                                                                     
                                                                                      <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="team-member-single-thumb">
                                                                                    <div class="arrow-right"></div><img src="upload/matth.jpg" width="250" height="250" alt="team-member3"/></div>
                                                                            </div>
                                                                            <div class="team-member-single team-item-second-line team-item-4">
                                                                                <div class="team-member-single-thumb">
                                                                                    <div class="arrow-left"></div><img src="upload/katey.jpg" width="250" height="250" alt="team-member4"/></div>
                                                                                <div class="team-member-details">
                                                                                      <div class="team-member-name">KATE YASAKOVA</div>
                                                                                    <div class="team-member-position">CREATIVE DESIGNER</div>

                                                                                    
                                                                                     <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="team-member-single team-item-second-line team-item-5">
                                                                                <div class="team-member-single-thumb">
                                                                                    <div class="arrow-left"></div><img src="upload/sherifg.jpg" width="250" height="250" alt="team-member7"/></div>
                                                                                <div class="team-member-details">
                                                                                     <div class="team-member-name">SHERIF MOHAMED GAMAL</div>
                                                                                    <div class="team-member-position">CREATIVE DESIGNER</div>
                                                                                   
                                                                                 
                                                                                      <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="team-member-single team-item-second-line team-item-6">
                                                                                <div class="team-member-single-thumb">
                                                                                    <div class="arrow-left"></div><img src="upload/janicef.jpg" width="250" height="250" alt="team-member6"/></div>
                                                                                <div class="team-member-details">
                                                                                      <div class="team-member-name">JANICE FULGENCIO</div>
                                                                                    <div class="team-member-position">DIGITAL PROGRAMMER</div>
                                                                                    
                                                                                       <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="clear"></div>
                                                                    </div></div>
                                                                         <div class="item">
                                                                        <div class="wpb_content_element vc_altos_team wpb_animate_when_almost_visible wpb_appear">
                                                               
                                                                            <div class="team-member-single team-item-first-line team-item-1">
                                                                                <div class="team-member-details">
                                                                                    <div class="team-member-name">SAULE NAGAMET</div>
                                                                                    <div class="team-member-position">BUSINESS DEVELOPMENT EXECUTIVE</div>
                                                                                    
                                                                                    <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="team-member-single-thumb">
                                                                                    <div class="arrow-right"></div><img src="upload/saulen.jpg" width="250" height="250" alt="team-member2"/></div>
                                                                            </div>
                                                                            <div class="team-member-single team-item-first-line team-item-2">
                                                                                <div class="team-member-details">
                                                                                   <div class="team-member-name">NEW POSITION AVAILABLE</div>
                                                                                    <div class="team-member-position">SENIOR PROGRAMMER</div>
                                                                                    
                                                                                     <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="team-member-single-thumb">
                                                                                    <div class="arrow-right"></div><img src="upload/blank.jpg" width="250" height="250" alt="team-member1"/></div>
                                                                            </div>
                                                                            <div class="team-member-single team-item-first-line team-item-3">
                                                                                <div class="team-member-details">
                                                                                     <div class="team-member-name">NEW POSITION AVAILABLE</div>
                                                                                    <div class="team-member-position">JUNIOR PROGRAMMER<br />
</div>
                                                                                   <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="team-member-single-thumb">
                                                                                    <div class="arrow-right"></div><img src="upload/blank.jpg" width="250" height="250" alt="team-member3"/></div>
                                                                            </div>
                                                                            <div class="team-member-single team-item-second-line team-item-4">
                                                                                <div class="team-member-single-thumb">
                                                                                    <div class="arrow-left"></div><img src="upload/blank.jpg" width="250" height="250" alt="team-member4"/></div>
                                                                                <div class="team-member-details">
                                                                                      <div class="team-member-name">NEW POSITION AVAILABLE</div>
                                                                                    <div class="team-member-position">JUNIOR DESIGNER</div>

                                                                                     
                                                                                   <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="team-member-single team-item-second-line team-item-5">
                                                                                <div class="team-member-single-thumb">
                                                                                    <div class="arrow-left"></div><img src="upload/blank.jpg" width="250" height="250" alt="team-member7"/></div>
                                                                                <div class="team-member-details">
                                                                                     <div class="team-member-name">NEW POSITION AVAILABLE</div>
                                                                                    <div class="team-member-position">SENIOR DESIGNER</div>
                                                                                   
                                                                                  
                                                                                   <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="team-member-single team-item-second-line team-item-6">
                                                                                <div class="team-member-single-thumb">
                                                                                    <div class="arrow-left"></div><img src="upload/blank.jpg" width="250" height="250" alt="team-member6"/></div>
                                                                                <div class="team-member-details">
                                                                                      <div class="team-member-name">NEW POSITION AVAILABLE</div>
                                                                                    <div class="team-member-position">ACCOUNT MANAGER</div>
                                                                                      
                                                                                   <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="clear"></div>
                                                                        </div>
                                                                            </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>    <!-- End Our Team Desktop Version -->
                                                        <!-- Start Our Team Mobile Version -->
                                                        <div class="name3mob">
                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="testimonials-wrapper" style="width:100%; max-width:1200px; margin:0 auto">
                                                               
                                                                        <div class="wpb_content_element vc_altos_team wpb_animate_when_almost_visible wpb_appear">
                                                                 <div class="team-member-single team-item-second-line team-item-5 show3">
                                                                                <div class="team-member-single-thumb">
                                                                                    <div class="arrow-left"></div><img src="upload/robp.jpg" width="250" height="250" alt="Rob Perryman" class="mob"/></div>
                                                                                <div class="team-member-details">
                                                                                     <div class="team-member-name">ROB PERRYMAN</div>
                                                                                    <div class="team-member-position">FOUNDER</div>
                                                                                   
                                                                                 
                                                                                      <ul class="team-member-socials">
                                                                                         <li>
                                                                                            <a class="sh-socials-url" href="#" title="Facebook" target="_blank"><img src="upload/fb-like.png" class="smicons"></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a class="sh-socials-url" href="#" title="Twitter" target="_blank"><img src="upload/twitter-icon.png" class="smicons"></a>
                                                                                        </li>
                                                                                         <li>
                                                                                            <a class="sh-socials-url" href="#" title="Instagram" target="_blank"><img src="upload/instagram-icon.png" class="smicons"></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a class="sh-socials-url" href="https://www.linkedin.com/company/circus-dubai" title="LinkedIn" target="_blank"><img src="upload/linkedin-icon.png" class="smicons"></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="team-member-single team-item-second-line team-item-5 show3">
                                                                                <div class="team-member-single-thumb mob">
                                                                                    <div class="arrow-left"></div><img src="upload/mikeb.jpg" width="250" height="250" alt="Mike Baldock" class="mob"/></div>
                                                                                <div class="team-member-details">
                                                                                     <div class="team-member-name">MIKE BALDOCK</div>
                                                                                    <div class="team-member-position">ASSOCIATE</div>
                                                                                   
                                                                                 
                                                                                      <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                             <div class="team-member-single team-item-second-line team-item-5 show3">
                                                                                <div class="team-member-single-thumb mob">
                                                                                    <div class="arrow-left"></div><img src="upload/matth.jpg" width="250" height="250" alt="Matt Hebditch" class="mob"/></div>
                                                                                <div class="team-member-details">
                                                                                     <div class="team-member-name">MATT HEBDITCH</div>
                                                                                    <div class="team-member-position">CREATIVE DESIGNER</div>
                                                                                   
                                                                                 
                                                                                      <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            <div class="team-member-single team-item-second-line team-item-4 show3">
                                                                                <div class="team-member-single-thumb mob">
                                                                                    <div class="arrow-left"></div><img src="upload/katey.jpg" width="250" height="250" alt="Kate Yasakova" class="mob"/></div>
                                                                                <div class="team-member-details">
                                                                                      <div class="team-member-name">KATE YASAKOVA</div>
                                                                                    <div class="team-member-position">CREATIVE DESIGNER</div>

                                                                                    
                                                                                     <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="team-member-single team-item-second-line team-item-5 show3">
                                                                                <div class="team-member-single-thumb mob">
                                                                                    <div class="arrow-left"></div><img src="upload/tyras.jpg" width="250" height="250" alt="Tyra Shakil" class="mob"/></div>
                                                                                <div class="team-member-details">
                                                                                     <div class="team-member-name">TYRA SHAKIL</div>
                                                                                    <div class="team-member-position">CREATIVE DESIGNER</div>
                                                                                   
                                                                                 
                                                                                      <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="team-member-single team-item-second-line team-item-6 show3">
                                                                                <div class="team-member-single-thumb mob">
                                                                                    <div class="arrow-left"></div><img src="upload/alexk.jpg" width="250" height="250" alt="Alex Knibbe" class="mob"/></div>
                                                                                <div class="team-member-details">
                                                                                      <div class="team-member-name">ALEX KNIBBE</div>
                                                                                    <div class="team-member-position">CREATIVE DESIGNER</div>
                                                                                    
                                                                                       <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="clear"></div>
                                                                    </div>
                                                                        
                                                                        <div class="wpb_content_element vc_altos_team wpb_animate_when_almost_visible wpb_appear">
                                                               
                                                                            <div class="team-member-single team-item-second-line team-item-5 show3">
                                                                                <div class="team-member-single-thumb mob">
                                                                                    <div class="arrow-left"></div><img src="upload/janicef.jpg" width="250" height="250" alt="Janice Fulgencio" class="mob"/></div>
                                                                                <div class="team-member-details">
                                                                                     <div class="team-member-name">JANICE FULGENCIO</div>
                                                                                    <div class="team-member-position">DIGITAL PROGRAMMER</div>
                                                                                   
                                                                                 
                                                                                      <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            
                                                                            <div class="team-member-single team-item-second-line team-item-5 show3">
                                                                                <div class="team-member-single-thumb mob">
                                                                                    <div class="arrow-left"></div><img src="upload/saulen.jpg" width="250" height="250" alt="Saule Nagamet" class="mob"/></div>
                                                                                <div class="team-member-details">
                                                                                     <div class="team-member-name">SAULE NAGAMET</div>
                                                                                    <div class="team-member-position">BUSINESS DEVELOPMENT</div>
                                                                                   
                                                                                 
                                                                                      <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            
                                                                               <div class="team-member-single team-item-second-line team-item-5 show3">
                                                                                <div class="team-member-single-thumb mob">
                                                                                    <div class="arrow-left"></div><img src="upload/bellaa.jpg" width="250" height="250" alt="Bella Antiquisa" class="mob"/></div>
                                                                                <div class="team-member-details">
                                                                                     <div class="team-member-name">BELLA ANTIQUISA</div>
                                                                                    <div class="team-member-position">DIGITAL PROGRAMMER</div>
                                                                                   
                                                                                 
                                                                                      <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="team-member-single team-item-second-line team-item-4 show3">
                                                                                <div class="team-member-single-thumb mob">
                                                                                    <div class="arrow-left"></div><img src="upload/blank.jpg" width="250" height="250" alt="Junior Designer" class="mob"/></div>
                                                                                <div class="team-member-details">
                                                                                      <div class="team-member-name">NEW POSITION AVAILABLE</div>
                                                                                    <div class="team-member-position">JUNIOR DESIGNER</div>

                                                                                     
                                                                                   <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="team-member-single team-item-second-line team-item-5 show3">
                                                                                <div class="team-member-single-thumb mob">
                                                                                    <div class="arrow-left"></div><img src="upload/blank.jpg" width="250" height="250" alt="Senior Designer" class="mob"/></div>
                                                                                <div class="team-member-details">
                                                                                    
                                                                                     <div class="team-member-name">NEW POSITION AVAILABLE</div>
                                                                                    <div class="team-member-position">SENIOR DESIGNER</div>
                                                                                   
                                                                                  
                                                                                   <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="team-member-single team-item-second-line team-item-6 show3">
                                                                                <div class="team-member-single-thumb mob">
                                                                                    <div class="arrow-left"></div><img src="upload/blank.jpg" width="250" height="250" alt="Account Manager" class="mob"/></div>
                                                                                <div class="team-member-details">
                                                                                      <div class="team-member-name">NEW POSITION AVAILABLE</div>
                                                                                    <div class="team-member-position">ACCOUNT MANAGER</div>
                                                                                      
                                                                                   <ul class="team-member-socials teamsoc">
                                                                                         <li>
                                                                                             <span style="font-size:0">&nbsp;</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="clear"></div>
                                                                        </div>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                            <div class="loadmore"> 
                <a href="#" id="loadMore2" >Load More</a></div>   
                                                        <!-- End Our Team Mobile Version -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div class="clear"></div>
                                    </div>
                                    <!-- end inner container -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <div id="blog" class="aboutlink">&nbsp;</div>
                    <section id="blog" class="other-page-item onepager_section_class">
                        <div id="post-547" class="post-547 page type-page status-publish hentry">
                            <div class="inside-section">

                                <div class="inner-container">
                                    <!-- start inner container -->
                                    <div class="page-title-wrapper vertical-page-title">
                                        <div class="page-title">
                                            <!--<h1>Blog</h1>-->
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="bigtitle">
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_altos_posts_sh post-items-2738 wpb_animate_when_almost_visible wpb_appear blogspace">
                                                            <div class="altos_posts_big_article_wrapper"><img src="upload/blog-post-14092016.jpg" class="pink-box" alt="New Html Agency theme"/>
                                                                <div class="altos_posts_big_article">
                                                                    
                                                                    <div class="clear"></div><a href="http://www.thecircusclients.com/circus-blog.php" target="_blank" class="altos_post_big_article_title">Please visit our blog</a>
                                                                    <div class="altos_post_big_article_date"></div><a href="http://www.thecircusclients.com/circus-blog" target="_blank" class="altos_post_big_article_read_more">Read more</a></div>
                                                            </div>
                                                            <div class="altos_post_articles">
                                                                <div class="altos_post_article">
                                                                    <div class="altos_post_article_categories"><a href="#" title="Technology">Art, Design, Events</a></div>
                                                                    <div class="clear"></div><a href="#" class="altos_post_article_title">Eid Mubarak!</a>
                                                                    <div class="altos_post_article_date">September 9, 2016</div>
                                                                    <div class="altos_post_article_excerpt">Circus عيد سعيد! من لنا جميعا في
                                                                        <br />Happy Eid! from all of us at Circus [...]</div><a href="http://www.thecircusclients.com/circus-blog/2016/09/09/eid-mubarak/" target="_blank" class="altos_post_article_read_more">Read more</a></div>
                                                                <div class="altos_post_article">
                                                                    <div class="altos_post_article_categories"><a href="#" title="Job">Business, Events</a></div>
                                                                    <div class="clear"></div><a href="#" class="altos_post_article_title">Cityscape Dubai 2016</a>
                                                                    <div class="altos_post_article_date">September 8, 2016</div>
                                                                    <div class="altos_post_article_excerpt">Viewing different booths at Cityscape [...]<br /><br /></div><a href="http://www.thecircusclients.com/circus-blog/2016/09/08/cityscape-dubai/" target="_blank" class="altos_post_article_read_more">Read more</a></div>
                                                                <div class="clear"></div>
                                                                <div class="altos_post_article">
                                                                    <div class="altos_post_article_categories"><a href="#" title="Stuff">Business, Emirates Reit, Events</a></div>
                                                                    <div class="clear"></div><a href="#" class="altos_post_article_title">Emirates Reit at Cityscape</a>
                                                                    <div class="altos_post_article_date">September 8, 2016</div>
                                                                    <div class="altos_post_article_excerpt">Visiting our valued client Emirates REIT at cityscape!  [...]<br /><br /></div><a href="http://www.thecircusclients.com/circus-blog/2016/09/08/emirates-reit-at-cityscape/" target="_blank" class="altos_post_article_read_more">Read more</a></div>
                                                                <div class="altos_post_article">
                                                                    <div class="altos_post_article_categories"><a href="#" title="Html">Events, Graphic Design</a></div>
                                                                    <div class="clear"></div><a href="#" class="altos_post_article_title">Dubai Chamber</a>
                                                                    <div class="altos_post_article_date">September 8, 2016</div>
                                                                    <div class="altos_post_article_excerpt">We attended Dubai Chamber event, Very organised and we got to meet a lot of interesting people! [...]</div><a href="http://www.thecircusclients.com/circus-blog/2016/09/08/dubai-chamber/" target="_blank" class="altos_post_article_read_more">Read more</a></div>
                                                                <div class="clear"></div>
                                                                <div class="clear"></div>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <!-- end inner container -->
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="testimonials-2" class="other-page-item onepager_section_class">
                        <div id="post-549" class="post-549 page type-page status-publish hentry">
                            <div class="inside-section">

                                <div class="inner-container">
                                    <!-- start inner container -->
                                    <div class="normal-inner">
                                        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_titles title_align_center wpb_animate_when_almost_visible wpb_top-to-bottom">
                                                            <h1 class="title-sh title-special has-subtitle testititle">Testimonials</h1>
                                                            <div class="clear"></div>
                                                            <div class="page-subtitle subtitle-special subtitle-for-h1 weloveyou">We love our clients</div>
                                                        </div>
                                                        <div class="vc_testimonials wpb_content_element wpb_animate_when_almost_visible wpb_appear">
                                                            <div class="owl-carousel owl-theme testimonials-wrapper">
                                                                <div class="item testi-bull ">
                                                                    <div class="testimonials-content-area">
                                                                        <div class="testimonial-content">"Creative, efficient, cost-effective and most importantly <span class="brhide"><br /></span>always meeting deadlines..."</div>
                                                                        <div class="testimonial-author">Nathan Forde - Brand Manager - African & Eastern
                                                                        
                                                                        <br />
                                                                            <span class="links">

  <span id="inline-popups">
  
    <a href="#test1" data-effect="mfp-3d-unfold">Read More...</a>
      
</span>


<!-- Popup itself -->
<div id="test1" class="white-popup mfp-with-anim mfp-hide"><img src="upload/african-eastern-testimonial.png"><br />Having worked with Circus for around 3 years on countless design projects from visual identity, event and bar concepts, sales promotions and POSM – I have found their work to be creative, efficient, cost-effective and most importantly always meeting deadlines.  Their work has helped African + Eastern continue to grow our beer portfolio throughout the region.<br /><br />
<span style="font-family:'Din Bold'">Nathan Forde - Brand Manager - African & Eastern</span>
</div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="item testi-bull">
                                                                    <div class="testimonials-content-area">
                                                                        <div class="testimonial-content">"Circus brings unique perspectives to help strengthen our image & deliver results....& they are only a phone call away!"</div>
                                                                        <div class="testimonial-author">Sally Meech - Director of Brand and Marketing - Media One Hotel</div> 
                                                                            <span class="links">

  <span id="inline-popups2">
  
    <a href="#test2" data-effect="mfp-3d-unfold">READ MORE...</a>

</span>


<!-- Popup itself -->
<div id="test2" class="white-popup mfp-with-anim mfp-hide"><img src="upload/media-one-testimonial.png"><br />Here at Media One we have been working with Rob Perryman for 5 years ...and as his company evolved and developed into The Circus we have continued to be part of that journey.
Circus delivers a range of great creative solutions that work for the Media One brand. The team has grown over the years but we have a great working relationship with all of their people. They offer innovative ideas adding to the Media One story and work with us to find the best channels and tactics to get our message across!
The Circus brings unique perspectives to help strengthen our image and deliver results....and they are only a phone call away!<br /><br />
<span style="font-family:'Din Bold'">Sally Meech - Director of Brand and Marketing <br /> Media One Hotel</span>
</div>
                                                                    </div>
                                                                </div>
                                                                <div class="item testi-bull">
                                                                    <div class="testimonials-content-area">
                                                                        <div class="testimonial-content">"Dummy text Dummy text Dummy text Dummy text"</div>
                                                                        <div class="testimonial-author">CLIENT NAME AND POSITION</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid grey-clients">
                                            <!-- Start Logo Slides Desktop Version -->
                                            <div class="desktop-ver">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    
                                                    
                                                    
                                                    <div class="owl-carousel owl-theme testimonials-wrapper">
                                                                <div class="item" style="margin-bottom:2.85%">
                                                                    <div class="testimonials-content-area">
                                                                      <div class="clients_wrapper">
                                                                <div class="clients_row">
                                                                    <div class="clients_single">
                                                                      <img class="client_single_image" src="upload/emirates-reit-logo.png" alt="Emirates Reit">
                                                                    </div>
                                                                    <div class="clients_single">
                                                                       <img class="client_single_image" src="upload/belgian-beer-cafe-logo.png" alt="Belgian Beer Cafe">
                                                                    </div>
                                                                    <div class="clients_single">
                                                                       <img class="client_single_image" src="upload/british-council-logo.png" alt="British Council">
                                                                    </div>
                                                                    <div class="clients_single">
                                                                      <img class="client_single_image" src="upload/movenpick-logo.png" alt="Movenpick Hotel">
                                                                    </div>
                                                                 
                                                                </div>
                                                                <div class="clients_row">
                                                                    <div class="clients_single">
                                                                       <img class="client_single_image" src="upload/jump-boxx-logo.png" alt="Jump Boxx">
                                                                    </div>
                                                                    <div class="clients_single">
                                                                        <img class="client_single_image" src="upload/media-one-logo.png" alt="Media One Hotel">
                                                                    </div>
                                                                    <div class="clients_single">
                                                                       <img class="client_single_image" src="upload/concordia-logo.png" alt="Concordia"></a>
                                                                    </div>
                                                                    <div class="clients_single">
                                                                        <img class="client_single_image" src="upload/corona-logo.png" alt="Corona">
                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="testimonials-content-area">
                                                                       <div class="clients_wrapper">
                                                                <div class="clients_row">
                                                                    <div class="clients_single">
                                                                        <img class="client_single_image" src="upload/engage-logo.png" alt="Engage">
                                                                    </div>
                                                                    <div class="clients_single">
                                                                        <img class="client_single_image" src="upload/stella-artois-logo.png" alt="Stella Artois">
                                                                    </div>
                                                                    <div class="clients_single">
                                                                        <img class="client_single_image" src="upload/cambridge-logo.png" alt="Cambridge">
                                                                    </div>
                                                                    <div class="clients_single">
                                                                        <img class="client_single_image" src="upload/mcgettigans-logo.png" alt="Mcgettigans">
                                                                    </div>
                                                                 
                                                                </div>
                                                                <div class="clients_row">
                                                                    <div class="clients_single">
                                                                        <img class="client_single_image" src="upload/alrawabit-logo.png" alt="Al Rawabit"></a>
                                                                    </div>
                                                                    <div class="clients_single">
                                                                       <img class="client_single_image" src="upload/barasti-logo.png" alt="Barasti" >
                                                                    </div>
                                                                    <div class="clients_single">
                                                                      <img class="client_single_image" src="upload/african-eastern-logo.png"  alt="African Eastern">
                                                                    </div>
                                                                    <div class="clients_single">
                                                                       <img class="client_single_image" src="upload/glenfiddich-logo.png" alt="Glenfiddich">
                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>
                                                                    </div>
                                                                </div>
                                                        <div class="item">
                                                                    <div class="testimonials-content-area">
                                                                       <div class="clients_wrapper">
                                                                <div class="clients_row">
                                                                    <div class="clients_single">
                                                                      <img class="client_single_image" src="upload/vp-logo.png" alt="Vogue Properties">
                                                                    </div>
                                                                    <div class="clients_single">
                                                                       <img class="client_single_image" src="upload/solutions-leisure-logo.png" alt="Solutions Leisure">
                                                                    </div>
                                                                    <div class="clients_single">
                                                                       <img class="client_single_image" src="upload/hog-logo.png" alt="Horizon Geosciences">
                                                                    </div>
                                                                    <div class="clients_single">
                                                                        <img class="client_single_image" src="upload/aups-logo.png" alt="AUPS">
                                                                    </div>
                                                                 
                                                                </div>
                                                                <div class="clients_row">
                                                                    <div class="clients_single">
                                                                        <img class="client_single_image" src="upload/julphar-logo.png" alt="Julphar">
                                                                    </div>
                                                                    <div class="clients_single">
                                                                        <img class="client_single_image" src="upload/arm-logo.png" alt="Ardan Risk Management">
                                                                    </div>
                                                                    <div class="clients_single">
                                                                        <img class="client_single_image" src="upload/carlsberg.png" alt="Carlsberg">
                                                                    </div>
                                                                    <div class="clients_single">
                                                                        <img class="client_single_image" src="upload/wf5-logo.png" alt="WF5">
                                                                    </div>
                                                                   
                                                                </div>
                                                                           
                                                            </div>
                                                                    </div>
                                                                </div>
                                                              
                                                            </div>
                                                
                                                </div>
                                            </div>
                                            </div>
                                            <!-- End Logo Slides Desktop Version -->
                                            <!-- Start Logo Slides Mobile Version -->
                                            <div class="name3mob">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="item">
                                                        <div class="testimonials-content-area">
                                                            <div class="clients-wrapper">
                                                                <div class="clients_row">
                                                       <div class="clients_single show4">
                                                                      <img class="client_single_image" src="upload/emirates-reit-logo.png" alt="Emirates Reit">
                                                                    </div>
                                                                    <div class="clients_single show4">
                                                                       <img class="client_single_image" src="upload/belgian-beer-cafe-logo.png" alt="Belgian Beer Cafe">
                                                                    </div>
                                                                    <div class="clients_single show4">
                                                                       <img class="client_single_image" src="upload/british-council-logo.png" alt="British Council">
                                                                    </div>
                                                                    <div class="clients_single show4">
                                                                      <img class="client_single_image" src="upload/movenpick-logo.png" alt="Movenpick Hotel">
                                                                    </div>
                                                                 
                                                               
                                                               
                                                                    <div class="clients_single show4">
                                                                       <img class="client_single_image" src="upload/jump-boxx-logo.png" alt="Jump Boxx">
                                                                    </div>
                                                                    <div class="clients_single show4">
                                                                        <img class="client_single_image" src="upload/media-one-logo.png" alt="Media One Hotel">
                                                                    </div>
                                                                    <div class="clients_single show4">
                                                                       <img class="client_single_image" src="upload/concordia-logo.png" alt="Concordia"></a>
                                                                    </div>
                                                                    <div class="clients_single show4">
                                                                        <img class="client_single_image" src="upload/corona-logo.png" alt="Corona">
                                                                    </div>
                                                                    <div class="clients_single show4">
                                                                        <img class="client_single_image" src="upload/engage-logo.png" alt="Engage">
                                                                    </div>
                                                                    <div class="clients_single show4">
                                                                        <img class="client_single_image" src="upload/stella-artois-logo.png" alt="Stella Artois">
                                                                    </div>
                                                                    <div class="clients_single show4">
                                                                        <img class="client_single_image" src="upload/cambridge-logo.png" alt="Cambridge">
                                                                    </div>
                                                                    <div class="clients_single show4">
                                                                        <img class="client_single_image" src="upload/mcgettigans-logo.png" alt="Mcgettigans">
                                                                    </div>
                                                                 
                                                                
                                                                
                                                                    <div class="clients_single show4">
                                                                        <img class="client_single_image" src="upload/alrawabit-logo.png" alt="Al Rawabit"></a>
                                                                    </div>
                                                                    <div class="clients_single show4">
                                                                       <img class="client_single_image" src="upload/barasti-logo.png" alt="Barasti" >
                                                                    </div>
                                                                    <div class="clients_single show4">
                                                                      <img class="client_single_image" src="upload/african-eastern-logo.png"  alt="African Eastern">
                                                                    </div>
                                                                    <div class="clients_single show4">
                                                                       <img class="client_single_image" src="upload/glenfiddich-logo.png" alt="Glenfiddich">
                                                                    </div>
                                                                
                                                                    <div class="clients_single show4">
                                                                      <img class="client_single_image" src="upload/vp-logo.png" alt="Vogue Properties">
                                                                    </div>
                                                                    <div class="clients_single show4">
                                                                       <img class="client_single_image" src="upload/solutions-leisure-logo.png" alt="Solutions Leisure">
                                                                    </div>
                                                                    <div class="clients_single show4">
                                                                       <img class="client_single_image" src="upload/hog-logo.png" alt="Horizon Geosciences">
                                                                    </div>
                                                                    <div class="clients_single show4">
                                                                        <img class="client_single_image" src="upload/aups-logo.png" alt="AUPS">
                                                                    </div>
                                                                   <div class="clients_single show4">
                                                                        <img class="client_single_image" src="upload/julphar-logo.png" alt="Julphar">
                                                                    </div>
                                                                    <div class="clients_single show4">
                                                                        <img class="client_single_image" src="upload/arm-logo.png" alt="Ardan Risk Management">
                                                                    </div>
                                                                    <div class="clients_single show4">
                                                                        <img class="client_single_image" src="upload/carlsberg.png" alt="Carlsberg">
                                                                    </div>
                                                                    <div class="clients_single show4">
                                                                        <img class="client_single_image" src="upload/wf5-logo.png" alt="WF5">
                                                                    </div>
                                                                   
              
                                                
                                                </div>
                                                         
                                                </div>
                                                     
                                            </div> 
                                                <div class="loadmore2">                                             
                    <a href="#" id="loadMore3" >Load More</a></div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    <!-- End Logo Slides Mobile Version -->
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div class="clear"></div>
                                    </div>
                                    <!-- end inner container -->
                                </div>
                            </div>
                        </div>
                    </section>
                <!-- PUT HERE -->
               <div id="our-contact" class="aboutlink">&nbsp;</div>
                    <section id="our-contact" class="other-page-item onepager_section_class">
                        <div id="post-551" class="post-551 page type-page status-publish hentry">
                            <div class="inside-section">

                                <div class="inner-container">
                                    <!-- start inner container -->
                                    <div class="normal-inner">
                                        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid contactspace">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_titles title_align_center wpb_animate_when_almost_visible wpb_top-to-bottom">
                                                             <h1 align="center" class="title-sh title-special has-subtitle servicestitle help"> WE ARE HERE TO HELP</h1> 
                                                            <div class="clear"></div>
                                                            <div class="page-subtitle subtitle-special subtitle-for-h1 perfect-team">If you are looking for the perfect team for your brand, <span class="brhide"><br /></span>we would love to talk to you!</div>
                                                            <h1 align="center" class="title-sh title-special has-subtitle servicestitle telnum" style="color:#a7a9ab">+971 4 447 3554</h1>
                                                            <div class="wpb_wrapper">
                                                                <div style="width:60%; margin:0 auto">
                                                        <div class="vc_titles title_align_left wpb_animate_when_almost_visible wpb_appear">
                                                            <div id="contactform_section"></div>
                                                           
                                                           <?php


if(isset($_POST['submit_email'])) {	

		$to_address = "hello@thecircus.ae";
		$from_address = "hello@thecircus.ae";


		$subject_input = $_POST['subject'];

		$name = $_POST['con_name'];

		$email = $_POST['email'];

		$inquiry = $_POST['message'];	
			

		//SEND TO ADMIN

		$to_se = $to_address;			

		$subject_se = "CIRCUS WEBSITE: ".$subject_input;

		$headers_se = 'MIME-Version: 1.0' . "\n";

		$headers_se .= 'Content-type: text/html; charset=iso-8859-1' . "\n";

		//$headers_se .= "From: Circus Creative <".$from_address.">\r\nReply-To:".$from_address. "\n";

		$headers_se .= "From: ".$name." <".$email.">\r\nReply-To:".$email. "\n";
		
		$message_se = " <font style=\"font-family: Arial, Helvetica, sans-serif; font-size:12px; color:#404040\">

			

		<b>Inquiry Details</b><br /><br />

		

		<b>Name:</b>&nbsp;".$name."<br />	

		<b>Email Address:</b>&nbsp;".$email."<br />	

		<b>Subject:</b>&nbsp;".$subject_input."<br /><br />

		

		<b>Inquiry:</b><br /><br />".$inquiry."<br /><br /><br />

		</font><br />";
		

		//send the email

		$mail_sent_se = @mail( $to_se, $subject_se, $message_se, $headers_se );	

			$success_msg = 'true';	

			$submitted="<div style='color:green'>Your inquiry has been successfully submitted!</div>";

			
		unset($_POST);


	} // end isset
                         
             	if($success_msg == 'true') {

                	
					?>
					<script type="text/javascript">
						window.location = "index.php#contactform_section";
						//alert("Your inquiry has been successfully submitted!");
					</script>
				<?php
					echo $submitted;	
					
				}
				
				
            ?>
            
                                                            <div class="clear"></div>
                                                        </div>
                                                        <div role="form" class="wpcf7" id="wpcf7-f503-o1" lang="en-US" dir="ltr">
                                                            <div class="screen-reader-response"></div>
          
                                                            
                                                            <form method="post" name="myform" action="<?php $_SERVER['PHP_SELF'];?>" onsubmit="YY_checkform('myform','con_name','#q','0','Enter your Name', 'email','#q','2','Please enter your valid Email Address','subject','#q','0','Enter a Subject','message','1','1','Enter your Message');return document.MM_returnValue">
                                                            <div class="pego-contact-form">
                                                                    <p><span class="wpcf7-form-control-wrap your-name">
                                                                        <input name="con_name" id="con_name" type="text" value="<?php echo $_POST['con_name']; ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name"/></span></p>
                                                                    <p><span class="wpcf7-form-control-wrap your-email">
                                                                        <input name="email" id="email" type="text" value="<?php echo $_POST['email']; ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email"/></span></p>
                                                                    <p><span class="wpcf7-form-control-wrap your-subject">
                                                                        <input name="subject" id="subject" type="text" value="<?php echo $_POST['subject']; ?>" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Subject"/></span> </p>
                                                                    <p><span class="wpcf7-form-control-wrap your-message">
                                                                        <textarea name="message" id="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"><?php echo $_POST['message']; ?></textarea></span> </p>
                                                                    <p align="center">
                                                                        <?php /*<input type="submit" id="submit_contact" value="Send message" class="wpcf7-form-control wpcf7-submit"/> */ ?>
                                                                        <input type="submit" name="submit_email" id="submit_email" value="Send Message" class="wpcf7-form-control wpcf7-submit"/>
                                                                        
                                                                        <!--<div id="msg" class="message"></div>-->
                                                                        <br /><p align="center" style="margin-top:3.5%"><span class="socialicons"><a href="https://www.facebook.com/CircusDubai/" target="_blank"><img src="upload/fb-like-grey.png"></a></span>  <span class="socialicons"><a href="https://twitter.com/CircusDubai" target="_blank"><img src="upload/twitter-logo-grey.png"></a></span> <span class="socialicons"><a href="http://instagram.com/circusdubai" target="_blank"><img src="upload/instagram-logo-grey.png"></a></span> <span class="socialicons"><a href="https://plus.google.com/+Thecircusdubai" target="_blank"><img src="upload/googleplus-logo-gray.png"></a></span>  <span class="linkedin"><a href="https://www.linkedin.com/company/circus-dubai" target="_blank"><img src="upload/linkedin-logo-gray.png"></a></span></p>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </form>
                                                            
                                                        </div>
                                                            </div>
                                                    </div>
                                                        </div>
                                                        <div class="vc_testimonials wpb_content_element wpb_animate_when_almost_visible wpb_appear">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div class="clear"></div>
                                    </div>
                                    <!-- end inner container -->
                                </div>
                            </div>
                        </div>
                </section>
                    <div id="our-contact" class="aboutlink">&nbsp;</div>
                    

                </div>
            </div>
            <!-- end container -->
            <div class="clear"></div>
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
                <span style="font-size:15px; color:#3ac1cf">+971 4 447 3554  |  <a href="mailto:hello@thecircus.ae" style="color:#3ac1cf">HELLO@THECIRCUS.AE</a></span></div>
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

    
<script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
<script src="js/index-popup.js"></script>
<script src="js/index.js"></script>

    
</body>
</html>