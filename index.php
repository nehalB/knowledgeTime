<?php

error_reporting(0);
session_start();
include_once 'db_function.php';

if(isset($_POST['signup']))
{
    $firstName = $_REQUEST['firstName'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pwd'];
    $city = $_REQUEST['city'];
    $pNumber = $_REQUEST['pNumber'];
    $role_id = $_REQUEST['registerAs'];
    /***************************** Step 1 : Case 1 ****************************/
    //Add the new user information in the database
    /*$result=executeQuery("select max(stdid) as std from student");
    $r=mysql_fetch_array($result);
    if(is_null($r['std']))
        $newstd=1;
    else
        $newstd=$r['std']+1;
*/
    $result=executeQuery("SELECT email FROM users WHERE email=='$email'");

    // $_GLOBALS['message']=$newstd;
    if(empty($_REQUEST['firstName'])||empty ($_REQUEST['pwd'])||empty ($_REQUEST['email']))
    {
        $_GLOBALS['message']="Some of the required Fields are Empty";
    }else if(mysql_num_rows($result)>0)
    {
        $_GLOBALS['message']="This Email has already been registered. Try with new Email address.";
    }
    else
    {
        $sql = "INSERT INTO users (name, email, password, role_id, city, phone)
                VALUES ('$firstName', '$email', '$pass', '$role_id', '$city', '$pNumber')";

        $result = executeQuery($sql);

        if($result) {
            $success = true;
            $_GLOBALS['message'] = "Your account has been created successfully!";
        }else {
            $message = mysqli_error();
            echo "<script type='text/javascript'>alert('failure');</script>";
        }
          closedb();
    }
}

?>
<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage" lang="en-US" prefix="og: http://ogp.me/ns#"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <link rel="pingback" href="#/xmlrpc.php">
      <script type="text/javascript">
         /* <![CDATA[ */
         var ajaxurl = "#/wp-admin/admin-ajax.php";
         /* ]]> */
      </script>
       <script type="text/javascript" src="js/form-validations.js" ></script>
      <title>KnowledgeTime</title>

<link rel="apple-touch-icon" sizes="180x180" href="logo/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="logo/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="logo/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="logo/favicons/manifest.json">
<link rel="mask-icon" href="logo/favicons/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
      <!-- This site is optimized with the Yoast SEO plugin v3.3.4 - https://yoast.com/Bootstrap/plugins/seo/ -->
      <meta name="description" content="Best education Bootstrap Theme for educational, training center, education center, university, college, kindergarten, courses hub and academy."/>
      <meta name="robots" content="noodp"/>
      <link rel="canonical" href="#/" />

      <meta property="og:locale" content="en_US" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="#1 Education Bootstrap Theme for 2016" />
      <meta property="og:description" content="Best education Bootstrap Theme for educational, training center, education center, university, college, kindergarten, courses hub and academy." />
      <meta property="og:url" content="#/" />
      <meta property="og:site_name" content="Education WP" />
      
      <meta name="twitter:card" content="summary" />
      <meta name="twitter:description" content="Best education Bootstrap Theme for educational, training center, education center, university, college, kindergarten, courses hub and academy." />
      
      <script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","url":"http:\/\/#\/","name":"Education WP","potentialAction":{"@type":"SearchAction","target":"http:\/\/#\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
      <!-- / Yoast SEO plugin. -->
      <link rel="alternate" type="application/rss+xml" title="Education WP &raquo; Feed" href="#/feed/" />
      <link rel="alternate" type="application/rss+xml" title="Education WP &raquo; Comments Feed" href="#/comments/feed/" />
      <link rel='stylesheet' id='pmpro_frontend-css'  href='css/frontend.css' type='text/css' media='screen' />
      <link rel='stylesheet' id='pmpro_frontend-css'  href='css/menu.css' type='text/css' media='screen' />
      <link rel='stylesheet' id='pmpro_print-css'  href='css/print.css' type='text/css' media='print' />
      <link rel='stylesheet'   href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='learn-press-css'  href='css/learnpress.css' type='text/css' media='all' />
      <link rel='stylesheet' id='rs-plugin-settings-css'  href='css/settings.css' type='text/css' media='all' />
      <link rel='stylesheet' id='rs-plugin-settings-css'  href='css/main.css' type='text/css' media='all' />
      <style id='rs-plugin-settings-inline-css' type='text/css'>
          #rs-demo-id {}
      </style>

      <style type="text/css" media="all" id="siteorigin-panels-grids-wp_head">/* Layout 2901 */ #pg-2901-0 , #pg-2901-1 , #pg-2901-2 , #pg-2901-4 , #pg-2901-5 , #pl-2901 .panel-grid-cell .so-panel { margin-bottom:30px } #pg-2901-0 .panel-grid-cell , #pg-2901-2 .panel-grid-cell , #pg-2901-4 .panel-grid-cell , #pg-2901-5 .panel-grid-cell , #pg-2901-6 .panel-grid-cell { float:none } #pgc-2901-1-0 , #pgc-2901-1-1 , #pgc-2901-1-2 , #pgc-2901-1-3 { width:25% } #pg-2901-1 .panel-grid-cell , #pg-2901-3 .panel-grid-cell { float:left } #pgc-2901-3-0 , #pgc-2901-3-2 { width:48% } #pgc-2901-3-1 { width:4% } #pg-2901-3 { margin-bottom:93px } #pl-2901 .panel-grid-cell .so-panel:last-child { margin-bottom:0px } #pg-2901-0 , #pg-2901-1 , #pg-2901-2 , #pg-2901-3 , #pg-2901-4 , #pg-2901-5 , #pg-2901-6 { margin-left:-15px;margin-right:-15px } #pg-2901-0 .panel-grid-cell , #pg-2901-1 .panel-grid-cell , #pg-2901-2 .panel-grid-cell , #pg-2901-3 .panel-grid-cell , #pg-2901-4 .panel-grid-cell , #pg-2901-5 .panel-grid-cell , #pg-2901-6 .panel-grid-cell { padding-left:15px;padding-right:15px } @media (max-width:767px){ #pg-2901-0 .panel-grid-cell , #pg-2901-1 .panel-grid-cell , #pg-2901-2 .panel-grid-cell , #pg-2901-3 .panel-grid-cell , #pg-2901-4 .panel-grid-cell , #pg-2901-5 .panel-grid-cell , #pg-2901-6 .panel-grid-cell { float:none;width:auto } #pgc-2901-1-0 , #pgc-2901-1-1 , #pgc-2901-1-2 , #pgc-2901-3-0 , #pgc-2901-3-1 { margin-bottom:30px } #pl-2901 .panel-grid , #pl-2901 .panel-grid-cell {  }  } </style>
      <style scoped>#pgc-w575924cfed45d-0-0 { width:33.3% } #pgc-w575924cfed45d-0-1 , #pgc-w575924cfed45d-0-2 , #pgc-w575924cfed45d-0-3 , #pgc-w575924cfed45d-0-4 { width:16.675% } #pg-w575924cfed45d-0 .panel-grid-cell { float:left } #pl-w575924cfed45d .panel-grid-cell .so-panel { margin-bottom:30px } #pl-w575924cfed45d .panel-grid-cell .so-panel:last-child { margin-bottom:0px } #pg-w575924cfed45d-0 { margin-left:-15px;margin-right:-15px } #pg-w575924cfed45d-0 .panel-grid-cell { padding-left:15px;padding-right:15px } @media (max-width:767px){ #pg-w575924cfed45d-0 .panel-grid-cell { float:none;width:auto } #pgc-w575924cfed45d-0-0 , #pgc-w575924cfed45d-0-1 , #pgc-w575924cfed45d-0-2 , #pgc-w575924cfed45d-0-3 { margin-bottom:30px } #pl-w575924cfed45d .panel-grid , #pl-w575924cfed45d .panel-grid-cell {  }  } </style>
      <link rel='stylesheet' id='thim-css-style-css'  href='css/custom-style.css' type='text/css' media='all' />
      <link rel='stylesheet' id='thim-style-css'  href='css/style-1.css' type='text/css' media='all' />
      <link rel='stylesheet' id='tf-google-webfont-roboto-css'  href='//fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C300%2C300italic%2C400%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&#038;subset=greek-ext%2Cgreek%2Ccyrillic-ext%2Clatin-ext%2Clatin%2Cvietnamese%2Ccyrillic&#038;ver=4.5.3' type='text/css' media='all' />
      <link rel='stylesheet' id='tf-google-webfont-roboto-slab-css'  href='//fonts.googleapis.com/css?family=Roboto+Slab%3A100%2C300%2C400%2C700&#038;subset=greek-ext%2Cgreek%2Ccyrillic-ext%2Clatin-ext%2Clatin%2Cvietnamese%2Ccyrillic&#038;ver=4.5.3' type='text/css' media='all' />
      <script type="text/javascript">
         var ajax_url ="#/wp-admin/admin-ajax.php";
      </script><script type="text/javascript">var LearnPress_Settings = {"ajax":"http:\/\/#\/wp-admin\/admin-ajax.php","plugin_url":"http:\/\/#\/wp-content\/plugins\/learnpress\/","siteurl":"http:\/\/#","current_url":"http:\/\/#\/","localize":{"button_ok":"OK","button_cancel":"Cancel","button_yes":"Yes","button_no":"No"}}</script><script type='text/javascript' src='js/jquery.js'></script>
      <script type='text/javascript' src='js/jquery-migrate.min.js'></script>
      <script type='text/javascript' src='js/main.js'></script>
      <script type='text/javascript' src='js/paid-memberships-pro.js'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var userSettings = {"url":"\/","uid":"0","time":"1469450428","secure":""};
         /* ]]> */
      </script>

      <script type='text/javascript' src='js/utils.min.js'></script>
      <script type='text/javascript' src='js/jquery.themepunch.tools.min.js'></script>
      <script type='text/javascript' src='js/jquery.themepunch.revolution.min.js'></script>
      <link rel='https://api.w.org/' href='#/wp-json/' />
      <link rel="EditURI" type="application/rsd+xml" title="RSD" href="#/xmlrpc.php?rsd" />
      <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="#/wp-includes/wlwmanifest.xml" />
      <meta name="generator" content="Bootstrap 4.5.3" />
      <meta name="generator" content="WooCommerce 2.6.2" />
      <link rel='shortlink' href='#/' />
      <link rel="alternate" type="application/json+oembed" href="#/wp-json/oembed/1.0/embed?url=http%3A%2F%2F#%2F" />
      <link rel="alternate" type="text/xml+oembed" href="#/wp-json/oembed/1.0/embed?url=http%3A%2F%2F#%2F&#038;format=xml" />
      <meta name="generator" content="Powered by Slider Revolution 5.2.6 - responsive, Mobile-Friendly Slider Plugin for Bootstrap with comfortable drag and drop interface." />
      <style type="text/css" media="all" id="siteorigin-panels-grids-wp_head">/* Layout 12 */ #pg-12-0 , #pg-12-1 , #pg-12-3 , #pg-12-4 , #pg-12-5 , #pl-12 .panel-grid-cell .so-panel { margin-bottom:30px } #pg-12-0 .panel-grid-cell , #pg-12-2 .panel-grid-cell , #pg-12-4 .panel-grid-cell , #pg-12-5 .panel-grid-cell , #pg-12-6 .panel-grid-cell , #pg-12-7 .panel-grid-cell { float:none } #pgc-12-1-0 , #pgc-12-1-1 , #pgc-12-1-2 { width:33.333% } #pg-12-1 .panel-grid-cell , #pg-12-3 .panel-grid-cell { float:left } #pg-12-2 { margin-bottom:100px } #pgc-12-3-0 , #pgc-12-3-1 { width:50% } #pg-12-6 { margin-bottom:65px } #pl-12 .panel-grid-cell .so-panel:last-child { margin-bottom:0px } #pg-12-0 , #pg-12-2 , #pg-12-3 , #pg-12-4 , #pg-12-5 , #pg-12-6 , #pg-12-7 { margin-left:-15px;margin-right:-15px } #pg-12-0 .panel-grid-cell , #pg-12-2 .panel-grid-cell , #pg-12-3 .panel-grid-cell , #pg-12-4 .panel-grid-cell , #pg-12-5 .panel-grid-cell , #pg-12-6 .panel-grid-cell , #pg-12-7 .panel-grid-cell { padding-left:15px;padding-right:15px } #pg-12-1 { margin-left:-2px;margin-right:-2px } #pg-12-1 .panel-grid-cell { padding-left:2px;padding-right:2px } @media (max-width:767px){ #pg-12-0 .panel-grid-cell , #pg-12-1 .panel-grid-cell , #pg-12-2 .panel-grid-cell , #pg-12-3 .panel-grid-cell , #pg-12-4 .panel-grid-cell , #pg-12-5 .panel-grid-cell , #pg-12-6 .panel-grid-cell , #pg-12-7 .panel-grid-cell { float:none;width:auto } #pgc-12-1-0 , #pgc-12-1-1 , #pgc-12-3-0 { margin-bottom:30px } #pl-12 .panel-grid , #pl-12 .panel-grid-cell {  }  } </style>
     
      <script type="text/javascript">
         if (typeof ajaxurl === 'undefined') {
             // <![CDATA[ 
            var ajaxurl = "#/wp-admin/admin-ajax.php";
             // ]]> 
         }
      </script>
      <style type="text/css" media="all" id="siteorigin-panels-grids-wp_head">
        /* Layout 2901 */
        
        #pg-2901-0,
        #pg-2901-1,
        #pg-2901-2,
        #pg-2901-4,
        #pg-2901-5,
        #pl-2901 .panel-grid-cell .so-panel {
            margin-bottom: 30px
        }
        #pg-2901-0 .panel-grid-cell,
        #pg-2901-2 .panel-grid-cell,
        #pg-2901-4 .panel-grid-cell,
        #pg-2901-5 .panel-grid-cell,
        #pg-2901-6 .panel-grid-cell {
            float: none
        }
        #pgc-2901-1-0,
        #pgc-2901-1-1,
        #pgc-2901-1-2,
        #pgc-2901-1-3 {
            width: 25%
        }
        #pg-2901-1 .panel-grid-cell,
        #pg-2901-3 .panel-grid-cell {
            float: left
        }
        #pgc-2901-3-0,
        #pgc-2901-3-2 {
            width: 48%
        }
        #pgc-2901-3-1 {
            width: 4%
        }
        #pg-2901-3 {
            margin-bottom: 93px
        }
        #pl-2901 .panel-grid-cell .so-panel:last-child {
            margin-bottom: 0px
        }
        #pg-2901-0,
        #pg-2901-1,
        #pg-2901-2,
        #pg-2901-3,
        #pg-2901-4,
        #pg-2901-5,
        #pg-2901-6 {
            margin-left: -15px;
            margin-right: -15px
        }
        #pg-2901-0 .panel-grid-cell,
        #pg-2901-1 .panel-grid-cell,
        #pg-2901-2 .panel-grid-cell,
        #pg-2901-3 .panel-grid-cell,
        #pg-2901-4 .panel-grid-cell,
        #pg-2901-5 .panel-grid-cell,
        #pg-2901-6 .panel-grid-cell {
            padding-left: 15px;
            padding-right: 15px
        }
        @media (max-width: 767px) {
            #pg-2901-0 .panel-grid-cell,
            #pg-2901-1 .panel-grid-cell,
            #pg-2901-2 .panel-grid-cell,
            #pg-2901-3 .panel-grid-cell,
            #pg-2901-4 .panel-grid-cell,
            #pg-2901-5 .panel-grid-cell,
            #pg-2901-6 .panel-grid-cell {
                float: none;
                width: auto
            }
            #pgc-2901-1-0,
            #pgc-2901-1-1,
            #pgc-2901-1-2,
            #pgc-2901-3-0,
            #pgc-2901-3-1 {
                margin-bottom: 30px
            }
            #pl-2901 .panel-grid,
            #pl-2901 .panel-grid-cell {}
        }
    </style>
    <style type="text/css">
      .black{
        color: black !important;
      }  
      .logsize{
            font-size: 15px !important;
      }

    </style>
    <style type="text/css">
      a.blue:hover, a.blue:active {color: blue !important;}
    </style>
    <style type="text/css">
      #left_feedback
{
position:fixed;
top:300px;
left: 0px;
margin-left:0px;
}
#left_feedback:hover
{
margin-left:0px;
}
    </style>
   </head>
   <body class="home page page-id-12 page-template page-template-page-templates page-template-homepage page-template-page-templateshomepage-php  thim-body-preload siteorigin-panels siteorigin-panels-home pmpro-body-has-access group-blog" id="thim-body">
      <div id="preload">
         <div class="cssload-loader">
            <div class="cssload-inner cssload-one"></div>
            <div class="cssload-inner cssload-two"></div>
            <div class="cssload-inner cssload-three"></div>
         </div>
      </div>
      <!-- menu for mobile-->
      <div id="wrapper-container" class="wrapper-container">
         <div class="content-pusher ">
           <header id="masthead" class="site-header affix-top bg-custom-sticky sticky-header header_overlay header_v1 wrapper-box-icon has_custom_image has_read_more text-left overlay" >  
               <!--End/div#toolbar-->
               <!-- <div class="main-menu"> -->
               <div class="container">
                  <div class="row">
                     <div class="navigation col-sm-12">
                        <div class="tm-table">
                           <div class="width-logo table-cell sm-logo">
                              <a href="#" title="Education WP - Education Bootstrap Theme" rel="home" class="no-sticky-logo"><img src="logo/logo-1.png" alt="Education WP" class="logo"></a>
                              <a href="#" title="Education WP - Education Bootstrap Theme" rel="home" class="sticky-logo"><img src="logo/logo-2.png" alt="Education WP" class="logo"></a>           
                             
                            </div>
                           <nav class="width-navigation table-cell table-right ">
                              <ul class="nav navbar-nav menu-main-menu course ">
                                 <li  class="menu-item menu-item-type-post_type menu-item-object-page drop_to_right standard">
                                    <a href="index.php"><span data-hover="Home">Home</span></a>
                                  </li>
                                 <li  class="menu-item menu-item-type-custom menu-item-object-custom drop_to_right widget_area">
                                    <a href="#"><span data-hover="Courses">Courses</span></a>
                                    <ul class="sub-menu submenu_columns_1 submenu-widget">
                                       <li id="siteorigin-panels-builder-10" class="widget widget_siteorigin-panels-builder">
                                          <div id="pl-w56d3feac8c634">
                                             <style scoped>#pgc-w56d3feac8c634-0-0 , #pgc-w56d3feac8c634-0-1 { width:31% } #pgc-w56d3feac8c634-0-2 { width:38% } #pg-w56d3feac8c634-0 .panel-grid-cell { float:left } #pl-w56d3feac8c634 .panel-grid-cell .so-panel { margin-bottom:30px } #pl-w56d3feac8c634 .panel-grid-cell .so-panel:last-child { margin-bottom:0px } #pg-w56d3feac8c634-0 { margin-left:-15px;margin-right:-15px } #pg-w56d3feac8c634-0 .panel-grid-cell { padding-left:15px;padding-right:15px } @media (max-width:767px){ #pg-w56d3feac8c634-0 .panel-grid-cell { float:none;width:auto } #pgc-w56d3feac8c634-0-0 , #pgc-w56d3feac8c634-0-1 { margin-bottom:30px } #pl-w56d3feac8c634 .panel-grid , #pl-w56d3feac8c634 .panel-grid-cell {  }  } </style>
                                             <div class="panel-grid" id="pg-w56d3feac8c634-0" >
                                                <div class="panel-row-style-thim-megamenu-row thim-megamenu-row panel-row-style" >
                                                   <div class="panel-grid-cell" id="pgc-w56d3feac8c634-0-0" >
                                                      <div class="so-panel widget widget_nav_menu panel-first-child panel-last-child" id="panel-w56d3feac8c634-0-0-0" data-index="0">
                                                         <h3 class="widget-title">List of Courses</h3>
                                                         <div class=" megaWrapper">
                                                            <ul id="menu-about-courses" >
                                                               <li><a class="black blue" href="Machine Learning.php">Machine Learning</a> </li>                                                               
                                                               <li><a class="black blue" href="python.php"> Programming with Python</a></li>
                                                               <li><a class="black blue" href="Fundamentals_of_Electronics.php">Fundamentals of Electronics </a> </li>
                                                               <li><a class="black blue" href="#">Softweare engineering</a> </li>
                                                               <li><a class="black blue" href="#">Mechanical engineering </a></li>
                                                               <li><a class="black blue" href="#">Data Analysis </a></li>
                                                               <li><a class="black blue" href="#">Data analysis using register </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="panel-grid-cell" id="pgc-w56d3feac8c634-0-1" >
                                                      <div class="so-panel widget widget_courses panel-first-child panel-last-child" id="panel-w56d3feac8c634-0-1-0" data-index="1">
                                                         <div class="thim-widget-courses thim-widget-courses-base">
                                                            <h3 class="widget-title">New Course</h3>
                                                            <div class="thim-course-megamenu">
                                                               <div class="lpr_course course-grid-1">
                                                                  <div class="course-item">
                                                                     <div class="course-thumbnail"><a href="#" ><img src="images/include/course-4-450x450.jpg" alt="" title="course-4"  width="450" height="450"></a></div>
                                                                     <div class="thim-course-content">
                                                                        <h2 class="course-title">
                                                                           <a href="#"> Introduction to OOPS</a>
                                                                        </h2>
                                                                        <div class="course-meta">
                                                                           <div class="course-price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                                              <div class="value free-course" itemprop="price" content="Free">
                                                                              </div>
                                                                              <meta itemprop="priceCurrency" content="&#36;" />
                                                                           </div>
                                                                        </div>
                                                                        <a class="course-readmore" href="#">Read More</a>             
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
                                       </li>
                                    </ul>
                                 </li>
                                 <li  class="menu-item menu-item-type-post_type menu-item-object-page drop_to_right standard"><a href="aboutus.php"><span data-hover="About Us">About Us</span></a></li>
                                  <!-- <li  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children drop_to_right standard"> -->
                                    <!-- <a href="aboutus.php"><span data-hover="Events">About Us</span></a> -->
                                    <!-- <ul class="sub-menu" > -->
                                       <!-- <li  class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">Gallery</a></li> -->
                                       <!-- <li  class="menu-item menu-item-type-post_type_archive menu-item-object-forum"><a href="#">Forums</a></li> -->
                                       <!-- <li  class="menu-item menu-item-type-post_type menu-item-object-page"><a href="aboutus.php">About Us</a></li> -->
                                    <!-- </ul> -->
                                 <!-- </li> -->
                                 <li  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children drop_to_right standard">
                                    <a href="#"><span data-hover="Events">Events</span></a>
                                    <ul class="sub-menu" >
                                       <li  class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#/event-account/">Event Account</a></li>
                                    </ul>
                                 </li>
                                 
                                 <li  class="menu-item menu-item-type-post_type menu-item-object-page drop_to_right standard"><a href="#/blog/"><span data-hover="Blog">Blog</span></a></li>
                                 <li  class="menu-item menu-item-type-post_type menu-item-object-page drop_to_left standard"><a href="contact_us.php">Contact us</span></a></li>
                                  <li  class="thim-login-popup menu-item menu-item-type-post_type menu-item-object-page drop_to_left standard"><a class="login" href="#">Login</span></a></li>
                                  <div id="thim-popup-login" class="has-shortcode">
                                    <div class="thim-login-container">
                                       <div class="thim-login">
                                          <h2 class="title">Login</h2>
                                          <form name="loginform" id="loginform" action="index.php" method="post">
                                             <p class="login-username">
                                                <label for="thim_login">Username or email</label>
                                                <input type="text" name="log" id="thim_login" class="input" value="" size="20" />
                                             </p>
                                             <p class="login-password">
                                                <label for="thim_pass">Password</label>
                                                <input type="password" name="pwd" id="thim_pass" class="input" value="" size="20" />
                                             </p>
                                             <a class="lost-pass-link" href="#/account/?action=lostpassword" title="Lost Password">Lost your password?</a>
                                             <p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember me</label></p>
                                             <p class="login-submit">
                                                <input type="submit" name="login" id="login" class="button-primary" value="Login" />
                                            </p>    <br><br>
                                               <!--  <a class="" href="#thim-popup-login2" title="Lost Password">have no account?</a>
                                                 -->

                                        <aside id="login-popup-2" class=" widget widget_login-popup">
                              <div class="thim-widget-login-popup thim-widget-login-popup-base">
                                 <div id="" class="thim-link-login thim-login-popup1">
                                    <!-- <a class="register" href="#/account/?action=register">Register</a> -->
                                    <a class="login logsize" href="#">Don't have an account?</a>
                                 </div>
                                          </form>

										  <div id="thim-popup-login1" class="has-shortcode">
                                    <div class="thim-login-container">
                                          <div class="thim-login">
                                              <?php
                                                if($_GLOBALS['message']) {
                                                  echo "<div class=\"alert-success\">".$_GLOBALS['message']."</div>";
                                              }
                                              ?>

											  <h2 class="title" align="center">Register Now</h2>
                                          <form name="signupForm" id="signupForm"  action="index.php" method="post" onsubmit="return validateForm('signupForm')" >
                                             <p class="login-username" align="left">

                                                <input type="text" placeholder="First Name" name="firstName" id="firstName" class="input" onkeyup="isAlpha(this)" />
                                             </p>
                                             <p class="login-email" align="left">
                                                <input type="text" placeholder="E-mail" name="email" id="email" class="input"  />
                                             </p>
                                             <p class="login-radio" align="left"><b>Rigester as :<t></b>
                                              <input type="radio" name="registerAs" value="1" checked> Student
                                              <input type="radio" name="registerAs" value="2"> Expert
                                              <input type="radio" name="registerAs" value="3"> University
                                              </p>
                                              <p class="login-username input" align="left">
                                                <input type="text" placeholder="City" name="city" id="city" class="input" onkeyup="isAlpha(this)" />
                                             </p>
                                             <p class="login-name" align="left">
                                                <input type="text" placeholder="Phone no." name="pNumber" id="pNumber" class="input" onkeyup="isNum(this)" />
                                             </p>
                                             <p class="login-password" align="left">
                                                <input type="password" placeholder="Password" name="pwd" id="pwd" class="input" />
                                             </p>
                                             <p class="login-password" align="left">
                                                <input type="password" placeholder="Confirm-Password"  name="confirmpwd" id="confirmpwd" class="input" />
                                             </p>
                                             <p class="login-submit" align="left">
                                                <input type="submit" name="signup" id="signup" class="button-primary" value="Sign-Up" />
                                             </p>

                                          </form>
                                          </div>
                                    </div>
                                 </div>
                              </div>
                           </aside>
                                          </div>
                                  </div>
								  </div>

                                 <li class="menu-right">
                                    <ul>
                                       <li id="courses-searching-2" class="widget widget_courses-searching">
                                          <div class="thim-widget-courses-searching thim-widget-courses-searching-base">
                                             <div class="thim-course-search-overlay">
                                                <div class="search-toggle"><i class="fa fa-search"></i></div>
                                                <div class="courses-searching layout-overlay">
                                                   <div class="search-popup-bg"></div>
                                                   <form method="get" action="#/">
                                                      <input type="text" value="" name="s" placeholder="Search courses..." class="thim-s form-control courses-search-input" autocomplete="off" />
                                                      <input type="hidden" value="course" name="ref" />
                                                      <button type="submit"><i class="fa fa-search"></i></button>
                                                      <span class="widget-search-close"></span>
                                                   </form>
                                                   <ul class="courses-list-search list-unstyled"></ul>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </li>

             </ul>
                              <!--</div>-->           
                           </nav>

                           <div class="menu-mobile-effect navbar-toggle" data-effect="mobile-effect">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                           </div>
                        </div>
                        <!--end .row-->
                     </div>
                  </div>
               </div>
            </header>
			</div>
			</div>
            <!-- Mobile Menu-->
            <nav class="mobile-menu-container mobile-effect">
               <ul class="nav navbar-nav">
                  
                 <li  class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children drop_to_right multicolumn">
                                    <a href="index.php"><span data-hover="Demos">Home</span></a>
                                    
                                 </li>
                                 <li  class="menu-item menu-item-type-custom menu-item-object-custom drop_to_right widget_area">
                                    <a href="#"><span data-hover="Courses">Courses</span></a>
                                    <ul class="sub-menu submenu_columns_1 submenu-widget">
                                       <li id="siteorigin-panels-builder-10" class="widget widget_siteorigin-panels-builder">
                                          <div id="pl-w56d3feac8c634">
                                             <style scoped>#pgc-w56d3feac8c634-0-0 , #pgc-w56d3feac8c634-0-1 { width:31% } #pgc-w56d3feac8c634-0-2 { width:38% } #pg-w56d3feac8c634-0 .panel-grid-cell { float:left } #pl-w56d3feac8c634 .panel-grid-cell .so-panel { margin-bottom:30px } #pl-w56d3feac8c634 .panel-grid-cell .so-panel:last-child { margin-bottom:0px } #pg-w56d3feac8c634-0 { margin-left:-15px;margin-right:-15px } #pg-w56d3feac8c634-0 .panel-grid-cell { padding-left:15px;padding-right:15px } @media (max-width:767px){ #pg-w56d3feac8c634-0 .panel-grid-cell { float:none;width:auto } #pgc-w56d3feac8c634-0-0 , #pgc-w56d3feac8c634-0-1 { margin-bottom:30px } #pl-w56d3feac8c634 .panel-grid , #pl-w56d3feac8c634 .panel-grid-cell {  }  } </style>
                                             <div class="panel-grid" id="pg-w56d3feac8c634-0" >
                                                <div class="panel-row-style-thim-megamenu-row thim-megamenu-row panel-row-style" >
                                                   <div class="panel-grid-cell" id="pgc-w56d3feac8c634-0-0" >
                                                      <div class="so-panel widget widget_nav_menu panel-first-child panel-last-child" id="panel-w56d3feac8c634-0-0-0" data-index="0">
                                                         <h3 class="widget-title">List of Courses</h3>
                                                         <div class=" megaWrapper">
                                                            <ul id="menu-about-courses" >
                                                               <li><a class="black blue" href="Machine Learning.php">Machine Learning</a> </li>                                                               
                                                               <li><a class="black blue" href="python.php"> Programming with Python</a></li>
                                                               <li><a class="black blue" href="Fundamentals_of_Electronics.php">Fundamentals of Electronics </a> </li>
                                                               <li><a class="black blue" href="#">Softweare engineering</a> </li>
                                                               <li><a class="black blue" href="#">Mechanical engineering </a></li>
                                                               <li><a class="black blue" href="#">Data Analysis </a></li>
                                                               <li><a class="black blue" href="#">Data analysis using register </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="panel-grid-cell" id="pgc-w56d3feac8c634-0-1" >
                                                      <div class="so-panel widget widget_courses panel-first-child panel-last-child" id="panel-w56d3feac8c634-0-1-0" data-index="1">
                                                         <div class="thim-widget-courses thim-widget-courses-base">
                                                            <h3 class="widget-title">New Course</h3>
                                                            <div class="thim-course-megamenu">
                                                               <div class="lpr_course course-grid-1">
                                                                  <div class="course-item">
                                                                     <div class="course-thumbnail"><a href="#" ><img src="images/include/course-4-450x450.jpg" alt="" title="course-4"  width="450" height="450"></a></div>
                                                                     <div class="thim-course-content">
                                                                        <h2 class="course-title">
                                                                           <a href="#"> Introduction to OOPS</a>
                                                                        </h2>
                                                                        <div class="course-meta">
                                                                           <div class="course-price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                                              <div class="value free-course" itemprop="price" content="Free">
                                                                                                          
                                                                              </div>
                                                                              <meta itemprop="priceCurrency" content="&#36;" />
                                                                           </div>
                                                                        </div>
                                                                        <a class="course-readmore" href="#">Read More</a>             
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
                                       </li>
                                    </ul>
                                 </li>
                                 <li  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children drop_to_left standard">
                                    <span class="disable_link"><span data-hover="Features">Features</span></span>
                                    <ul class="sub-menu" >
                                       <li  class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">Membership</a></li>
                                       <li  class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">Gallery</a></li>
                                       <li  class="menu-item menu-item-type-post_type_archive menu-item-object-forum"><a href="#">Forums</a></li>
                                       <li  class="menu-item menu-item-type-post_type menu-item-object-page"><a href="aboutus.php">About Us</a></li>
                                    </ul>
                                 </li>
                                 <li  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children drop_to_right standard">
                                    <a href="#"><span data-hover="Events">Events</span></a>
                                    <ul class="sub-menu" >
                                       <li  class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#/event-account/">Event Account</a></li>
                                    </ul>
                                 </li>
                                 
                                 <li  class="menu-item menu-item-type-post_type menu-item-object-page drop_to_right standard"><a href="#/blog/"><span data-hover="Blog">Blog</span></a></li>
                                 <li  class="menu-item menu-item-type-post_type menu-item-object-page drop_to_left standard"><a href="contact_us.php"><span data-hover="Contact">Contact</span></a></li>
                                 <li  class="menu-item menu-item-type-post_type menu-item-object-page drop_to_left standard"><a href="#/contact/"><span data-hover="login">login</span></a></li>
                                 <li class="menu-right">
                                    <ul>
                                       <li id="courses-searching-2" class="widget widget_courses-searching">
                                          <div class="thim-widget-courses-searching thim-widget-courses-searching-base">
                                             <div class="thim-course-search-overlay">
                                                <div class="search-toggle"><i class="fa fa-search"></i></div>
                                                <div class="courses-searching layout-overlay">
                                                   <div class="search-popup-bg"></div>
                                                   <form method="get" action="#/">
                                                      <input type="text" value="" name="s" placeholder="Search courses..." class="thim-s form-control courses-search-input" autocomplete="off" />
                                                      <input type="hidden" value="course" name="ref" />
                                                      <button type="submit"><i class="fa fa-search"></i></button>
                                                      <span class="widget-search-close"></span>
                                                   </form>
                                                   <ul class="courses-list-search list-unstyled"></ul>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </li>
                  </ul>
            </nav>
            <div id="main-content">
               <div id="main-home-content" class="home-content home-page container" role="main">
                  <div id="pl-12">
                     <div class="panel-grid" id="pg-12-0" >
                        <div class="siteorigin-panels-stretch thim-fix-stretched panel-row-style" style="height: 100vh;" data-stretch-type="full-stretched" >
                           <div class="panel-grid-cell" id="pgc-12-0-0" >
                              <div class="so-panel widget widget_text panel-first-child panel-last-child" id="panel-12-0-0-0" data-index="0">
                                 <div class="textwidget">
<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullscreen-container" style="background-color:transparent;padding:0px;background-image:url(images/include/top-slider.jpg);background-repeat:no-repeat;background-size:cover;background-position:center center;">
<!-- START REVOLUTION SLIDER 5.2.6 fullscreen mode -->
   <div id="rev_slider_4_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.2.6">
<ul>  <!-- SLIDE  -->
   <li data-index="rs-17" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/include/top-slider-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
      <!-- MAIN IMAGE -->
      <img src=""  alt="" title="top-slider"  width="1600" height="900" data-lazyload="images/include/top-slider.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                 <!-- LAYERS -->
                                                <!-- LAYER NR. 1 -->
                                                <div class="tp-caption    thim-slider-sub-heading" 
                                                   id="slide-17-layer-1" 
                                                   data-x="['left','left','left','left']" data-hoffset="['15','15','15','15']" 
                                                   data-y="['middle','middle','middle','middle']" data-voffset="['-146','-150','-45','-20']" 
                                                   data-fontsize="['24','24','','20']"
                                                   data-width="none"
                                                   data-height=""
                                                   data-whitespace="nowrap"
                                                   data-transform_idle="o:1;"
                                                   data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:1800;e:Power4.easeInOut;" 
                                                   data-transform_out="opacity:0;s:100;e:Power2.easeIn;" 
                                                   data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                                   data-start="300" 
                                                   data-splitin="chars" 
                                                   data-splitout="none" 
                                                   data-responsive_offset="off" 
                                                   data-responsive="off"
                                                   data-elementdelay="0.05" 
                                                   style="z-index: 5; max-width: px; max-width: px; white-space: nowrap; font-size: 24px; line-height: 30px; font-weight: 700; color: rgba(252, 252, 252, 1.00);text-transform:left;">BETTER EDUCATION FOR A BETTER </div>
                                                <!-- LAYER NR. 2 -->
                                                <h3 class="tp-caption    thim-slider-heading" 
                                                   id="slide-17-layer-2" 
                                                   data-x="['left','left','left','left']" data-hoffset="['15','15','15','15']" 
                                                   data-y="['middle','middle','middle','middle']" data-voffset="['-75','-85','10','20']" 
                                                   data-fontsize="['100','100','','60']"
                                                   data-width="none"
                                                   data-height="none"
                                                   data-whitespace="nowrap"
                                                   data-transform_idle="o:1;"
                                                   data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                                   data-transform_out="opacity:0;s:100;e:Power2.easeIn;" 
                                                   data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                                   data-start="201.875" 
                                                   data-splitin="chars" 
                                                   data-splitout="none" 
                                                   data-responsive_offset="off" 
                                                   data-responsive="off"
                                                   data-elementdelay="0.05" 
                                                   style="z-index: 6; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 700; color: rgba(255, 255, 255, 1.00);text-transform:left;">WORLD </h3>
                                                <!-- LAYER NR. 3 -->
                                                <div class="tp-caption  " 
                                                   id="slide-17-layer-4" 
                                                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                                   data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','40','30','20']" 
                                                   data-width="none"
                                                   data-height="none"
                                                   data-whitespace="nowrap"
                                                   data-transform_idle="o:1;"
                                                   data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" 
                                                   data-transform_out="opacity:0;s:100;" 
                                                   data-start="500" 
                                                   data-splitin="none" 
                                                   data-splitout="none" 
                                                   data-actions='[{"event":"click","action":"scrollbelow","offset":"0px","delay":""}]'
                                                   data-basealign="slide" 
                                                   data-responsive_offset="off" 
                                                   data-responsive="off"
                                                   style="z-index: 8; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 400; color: rgba(191, 185, 184, 1.00);text-transform:left;background-color:rgba(255, 255, 255, 0);cursor:pointer;">
                                                   <div class="thim-click-to-bottom"><i class="fa  fa-chevron-down"></i></div>
                                                </div>
                                             </li>
                                             <!-- SLIDE  -->
                                             <li data-index="rs-19" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="#/wp-content/uploads/2016/02/slide_5-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                <!-- MAIN IMAGE -->
                                                <img src="#/wp-content/plugins/revslider/admin/assets/images/dummy.png"  alt="" title="slide_5"  width="1600" height="900" data-lazyload="images/include/slide_5.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                <!-- LAYERS -->
                                                <!-- LAYER NR. 1 -->
                                                <div class="tp-caption    thim-slider-sub-heading" 
                                                   id="slide-19-layer-1" 
                                                   data-x="['left','left','left','left']" data-hoffset="['15','15','15','15']" 
                                                   data-y="['middle','middle','middle','middle']" data-voffset="['-146','-150','-45','-20']" 
                                                   data-fontsize="['24','24','','20']"
                                                   data-width="none"
                                                   data-height=""
                                                   data-whitespace="nowrap"
                                                   data-transform_idle="o:1;"
                                                   data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:1800;e:Power4.easeInOut;" 
                                                   data-transform_out="opacity:0;s:100;e:Power2.easeIn;" 
                                                   data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                                   data-start="300" 
                                                   data-splitin="chars" 
                                                   data-splitout="none" 
                                                   data-responsive_offset="off" 
                                                   data-responsive="off"
                                                   data-elementdelay="0.05" 
                                                   style="z-index: 5; max-width: px; max-width: px; white-space: nowrap; font-size: 24px; line-height: 30px; font-weight: 700; color: rgba(252, 252, 252, 1.00);text-transform:left;">BETTER EDUCATION FOR A BETTER </div>
                                                <!-- LAYER NR. 2 -->
                                                <h3 class="tp-caption    thim-slider-heading" 
                                                   id="slide-19-layer-2" 
                                                   data-x="['left','left','left','left']" data-hoffset="['14','15','15','15']" 
                                                   data-y="['middle','middle','middle','middle']" data-voffset="['-75','-85','10','20']" 
                                                   data-fontsize="['100','100','','60']"
                                                   data-width="none"
                                                   data-height="none"
                                                   data-whitespace="nowrap"
                                                   data-transform_idle="o:1;"
                                                   data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                                   data-transform_out="opacity:0;s:100;e:Power2.easeIn;" 
                                                   data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                                   data-start="500" 
                                                   data-splitin="chars" 
                                                   data-splitout="none" 
                                                   data-responsive_offset="off" 
                                                   data-responsive="off"
                                                   data-elementdelay="0.05" 
                                                   style="z-index: 6; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 700; color: rgba(255, 255, 255, 1.00);text-transform:left;">WORLD </h3>
                                                
                                                <!-- LAYER NR. 3 -->
                                                <div class="tp-caption  " 
                                                   id="slide-19-layer-4" 
                                                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                                   data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','40','30','20']" 
                                                   data-width="none"
                                                   data-height="none"
                                                   data-whitespace="nowrap"
                                                   data-transform_idle="o:1;"
                                                   data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" 
                                                   data-transform_out="opacity:0;s:100;" 
                                                   data-start="500" 
                                                   data-splitin="none" 
                                                   data-splitout="none" 
                                                   data-actions='[{"event":"click","action":"scrollbelow","offset":"0px","delay":""}]'
                                                   data-basealign="slide" 
                                                   data-responsive_offset="off" 
                                                   data-responsive="off"
                                                   style="z-index: 8; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 400; color: rgba(191, 185, 184, 1.00);text-transform:left;background-color:rgba(255, 255, 255, 0);cursor:pointer;">
                                                   <div class="thim-click-to-bottom"><i class="fa  fa-chevron-down"></i></div>
                                                </div>
                                             </li>
                                          </ul>
                                          <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
                                             if(htmlDiv) {
                                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                             }else{
                                                var htmlDiv = document.createElement("div");
                                                htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                                document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                             }
                                          </script>
                                          <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                       </div>
                                       <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
                                          if(htmlDiv) {
                                             htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                          }else{
                                             var htmlDiv = document.createElement("div");
                                             htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                             document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                          }
                                       </script>
                                       <script type="text/javascript">
                                          /******************************************
                                          -  PREPARE PLACEHOLDER FOR SLIDER   -
                                          ******************************************/
                                          
                                          var setREVStartSize=function(){
                                          try{var e=new Object,i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
                                          e.c = jQuery('#rev_slider_4_1');
                                          e.responsiveLevels = [1240,1024,778,480];
                                          e.gridwidth = [1200,960,768,481];
                                          e.gridheight = [500,400,400,320];
                                             
                                          e.sliderLayout = "fullscreen";
                                          e.fullScreenAutoWidth='on';
                                          e.fullScreenAlignForce='off';
                                          e.fullScreenOffsetContainer= '';
                                          e.fullScreenOffset='';
                                          if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
                                          
                                          }catch(d){console.log("Failure at Presize of Slider:"+d)}
                                          };
                                          
                                          setREVStartSize();
                                          
                                          var tpj=jQuery;
                                          
                                          var revapi4;
                                          tpj(document).ready(function() {
                                          if(tpj("#rev_slider_4_1").revolution == undefined){
                                          revslider_showDoubleJqueryError("#rev_slider_4_1");
                                          }else{
                                          revapi4 = tpj("#rev_slider_4_1").show().revolution({
                                          sliderType:"standard",
                                          jsFileLocation:"//#/wp-content/plugins/revslider/public/assets/js/",
                                          sliderLayout:"fullscreen",
                                          dottedOverlay:"none",
                                          delay:9000,
                                          navigation: {
                                             keyboardNavigation:"off",
                                             keyboard_direction: "horizontal",
                                             mouseScrollNavigation:"off",
                                                mouseScrollReverse:"default",
                                             onHoverStop:"off",
                                             arrows: {
                                                style:"zeus",
                                                enable:true,
                                                hide_onmobile:true,
                                                hide_under:1024,
                                                hide_onleave:true,
                                                hide_delay:200,
                                                hide_delay_mobile:1200,
                                                tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                                left: {
                                                   h_align:"left",
                                                   v_align:"center",
                                                   h_offset:20,
                                                   v_offset:0
                                                },
                                                right: {
                                                   h_align:"right",
                                                   v_align:"center",
                                                   h_offset:20,
                                                   v_offset:0
                                                }
                                             }
                                          },
                                          responsiveLevels:[1240,1024,778,480],
                                          visibilityLevels:[1240,1024,778,480],
                                          gridwidth:[1200,960,768,481],
                                          gridheight:[500,400,400,320],
                                          lazyType:"single",
                                          shadow:0,
                                          spinner:"spinner2",
                                          stopLoop:"off",
                                          stopAfterLoops:-1,
                                          stopAtSlide:-1,
                                          shuffle:"off",
                                          autoHeight:"off",
                                          fullScreenAutoWidth:"on",
                                          fullScreenAlignForce:"off",
                                          fullScreenOffsetContainer: "",
                                          fullScreenOffset: "",
                                          disableProgressBar:"on",
                                          hideThumbsOnMobile:"off",
                                          hideSliderAtLimit:0,
                                          hideCaptionAtLimit:0,
                                          hideAllCaptionAtLilmit:0,
                                          debugMode:false,
                                          fallbacks: {
                                             simplifyAll:"off",
                                             nextSlideOnWindowFocus:"off",
                                             disableFocusListener:false,
                                          panZoomDisableOnMobile:"on",
                                          }
                                          });
                                          }
                                          });   /*ready*/
                                       </script>
                                       <script>
                                          var htmlDivCss = ' #rev_slider_4_1_wrapper .tp-loader.spinner2{ background-color: #FFFFFF !important; } ';
                                          var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                          if(htmlDiv) {
                                             htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                          }
                                          else{
                                             var htmlDiv = document.createElement('div');
                                             htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                             document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                          }
                                       </script>
                                       <script>
                                          var htmlDivCss = unescape("%23rev_slider_4_1%20.zeus.tparrows%20%7B%0A%20%20cursor%3Apointer%3B%0A%20%20min-width%3A70px%3B%0A%20%20min-height%3A70px%3B%0A%20%20position%3Aabsolute%3B%0A%20%20display%3Ablock%3B%0A%20%20z-index%3A100%3B%0A%20%20border-radius%3A50%25%3B%20%20%20%0A%20%20overflow%3Ahidden%3B%0A%20%20background%3Argba%280%2C0%2C0%2C0.1%29%3B%0A%7D%0A%0A%23rev_slider_4_1%20.zeus.tparrows%3Abefore%20%7B%0A%20%20font-family%3A%20%22revicons%22%3B%0A%20%20font-size%3A20px%3B%0A%20%20color%3Argb%28255%2C%20255%2C%20255%29%3B%0A%20%20display%3Ablock%3B%0A%20%20line-height%3A%2070px%3B%0A%20%20text-align%3A%20center%3B%20%20%20%20%0A%20%20z-index%3A2%3B%0A%20%20position%3Arelative%3B%0A%7D%0A%23rev_slider_4_1%20.zeus.tparrows.tp-leftarrow%3Abefore%20%7B%0A%20%20content%3A%20%22%5Ce824%22%3B%0A%7D%0A%23rev_slider_4_1%20.zeus.tparrows.tp-rightarrow%3Abefore%20%7B%0A%20%20content%3A%20%22%5Ce825%22%3B%0A%7D%0A%0A%23rev_slider_4_1%20.zeus%20.tp-title-wrap%20%7B%0A%20%20background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%20%20width%3A100%25%3B%0A%20%20height%3A100%25%3B%0A%20%20top%3A0px%3B%0A%20%20left%3A0px%3B%0A%20%20position%3Aabsolute%3B%0A%20%20opacity%3A0%3B%0A%20%20transform%3Ascale%280%29%3B%0A%20%20-webkit-transform%3Ascale%280%29%3B%0A%20%20%20transition%3A%20all%200.3s%3B%0A%20%20-webkit-transition%3Aall%200.3s%3B%0A%20%20-moz-transition%3Aall%200.3s%3B%0A%20%20%20border-radius%3A50%25%3B%0A%20%7D%0A%23rev_slider_4_1%20.zeus%20.tp-arr-imgholder%20%7B%0A%20%20width%3A100%25%3B%0A%20%20height%3A100%25%3B%0A%20%20position%3Aabsolute%3B%0A%20%20top%3A0px%3B%0A%20%20left%3A0px%3B%0A%20%20background-position%3Acenter%20center%3B%0A%20%20background-size%3Acover%3B%0A%20%20border-radius%3A50%25%3B%0A%20%20transform%3Atranslatex%28-100%25%29%3B%0A%20%20-webkit-transform%3Atranslatex%28-100%25%29%3B%0A%20%20%20transition%3A%20all%200.3s%3B%0A%20%20-webkit-transition%3Aall%200.3s%3B%0A%20%20-moz-transition%3Aall%200.3s%3B%0A%0A%20%7D%0A%23rev_slider_4_1%20.zeus.tp-rightarrow%20.tp-arr-imgholder%20%7B%0A%20%20%20%20transform%3Atranslatex%28100%25%29%3B%0A%20%20-webkit-transform%3Atranslatex%28100%25%29%3B%0A%20%20%20%20%20%20%7D%0A%23rev_slider_4_1%20.zeus.tparrows%3Ahover%20.tp-arr-imgholder%20%7B%0A%20%20transform%3Atranslatex%280%29%3B%0A%20%20-webkit-transform%3Atranslatex%280%29%3B%0A%20%20opacity%3A1%3B%0A%7D%0A%20%20%20%20%20%20%0A%23rev_slider_4_1%20.zeus.tparrows%3Ahover%20.tp-title-wrap%20%7B%0A%20%20transform%3Ascale%281%29%3B%0A%20%20-webkit-transform%3Ascale%281%29%3B%0A%20%20opacity%3A1%3B%0A%7D%0A%20%0A");
                                          var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                          if(htmlDiv) {
                                             htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                          }
                                          else{
                                             var htmlDiv = document.createElement('div');
                                             htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                             document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                          }
                                           
                                       </script>
                                    </div>
                                    <!-- END REVOLUTION SLIDER -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     <aside id="login-popup-2" class=" widget widget_login-popup">
                              <div class="thim-widget-login-popup thim-widget-login-popup-base">
                                 <div id="left_feedback" class="thim-link-login thim-login-popup1">
                                    <!-- <a class="register" href="#/account/?action=register">Register</a> -->
                                    <a class="login logsize" href="#"><img src="images/btn_contact.png"/> </a>
                                 </div>
                                 <div id="thim-popup-login1" class="has-shortcode">
                                    <div class="thim-login-container">
                                       <div class="thim-login">
                                          <h2 class="title">Feedback Form</h2>
                                          <h5 align="center">Your feedback is important to us...</h5><br><br>
                                          <form name="loginform" id="loginform" action="#/wp-login.php" method="post">
                                             <p class="login-name">
                                                <label for="thim_pass">Username</label>
                                                <input placeholder="Username" type="text" name="name" id="thim_name" class="input" value="" size="20" />
                                             </p>
                                             <p class="login-email">
                                                <label for="thim_pass">E-mail</label>
                                                <input placeholder="E-mail" type="email" name="pwd" id="thim_pass" class="input" value="" size="20" />
                                             </p>
                                             <p class="login-message">
                                                <label for="thim_text">Message</label>
                                                <textarea placeholder="Message" type="message" name="message" id="thim_message" class="textarea" rows="4" cols="50" value="" size="20" />
                                                </textarea>
                                             </p>
                                            <p class="login-submit">
                                                <input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Submit" />
                                                <input type="hidden" name="redirect_to" value="#" />
                                             </p>
                                          </form>
                                          </div>
                                    </div>
                                 </div>
                              </div>
                           </aside>
                      
                     <div class="panel-grid" id="pg-12-1" >
                        <div class="panel-row-style-thim-best-industry thim-best-industry panel-row-style" >
                           <div class="panel-grid-cell" id="pgc-12-1-0" >
                              <div class="so-panel widget widget_icon-box panel-first-child panel-last-child" id="panel-12-1-0-0" data-index="1">
                                 <div class="thim-widget-icon-box thim-widget-icon-box-base">
                                    <div class="wrapper-box-icon has_custom_image has_read_more text-left overlay"  data-text-readmore="#ffb606">
                                       <div class="smicon-box iconbox-left">
                                          <div class="boxes-icon" style="width: 135px;height: 135px;"><span class="inner-icon"><span class="icon icon-images"><img src="images/logo-top-1.png" alt="logo-top-1" title="logo-top-1" ></span></span></div>
                                          <div class="content-inner"  style="width: calc( 100% - 135px - 15px);">
                                             <div class="sc-heading article_heading">
                                                <h3 class = "heading__primary" >Best Industry Leaders</h3>
                                             </div>
                                             <a class="smicon-read sc-btn" href="#"  style="color: white;" >View More<i class="fa fa-chevron-right"></i></a>
                                          </div>
                                       </div>
                                       <!--end smicon-box-->
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                           <div class="panel-grid-cell" id="pgc-12-1-1" >
                              <div class="so-panel widget widget_icon-box panel-first-child panel-last-child" id="panel-12-1-1-0" data-index="2">
                                 <div class="thim-widget-icon-box thim-widget-icon-box-base">
                                    <div class="wrapper-box-icon has_custom_image has_read_more text-left overlay "  data-text-readmore="#ffb606">
                                       <div class="smicon-box iconbox-left">
                                          <div class="boxes-icon" style="width: 135px;height: 135px;"><span class="inner-icon"><span class="icon icon-images"><img src="images/logo-top-2.png" alt="logo-top-2" title="logo-top-2" ></span></span></div>
                                          <div class="content-inner"  style="width: calc( 100% - 135px - 15px);">
                                             <div class="sc-heading article_heading">
                                                <h3 class = "heading__primary" >Online Courses</h3>
                                             </div>
                                             <a class="smicon-read sc-btn" href="#"  style="color: white;" >View More<i class="fa fa-chevron-right"></i></a>
                                          </div>
                                       </div>
                                       <!--end smicon-box-->
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="panel-grid-cell" id="pgc-12-1-2" >
                              <div class="so-panel widget widget_icon-box panel-first-child panel-last-child" id="panel-12-1-2-0" data-index="3">
                                 <div class="thim-widget-icon-box thim-widget-icon-box-base">
                                    <div class="wrapper-box-icon has_custom_image has_read_more text-left overlay "  data-text-readmore="#ffb606">
                                       <div class="smicon-box iconbox-left">
                                          <div class="boxes-icon" style="width: 135px;height: 135px;"><span class="inner-icon"><span class="icon icon-images"><img src="images/logo-top-3.png" alt="logo-top-3" title="logo-top-3" ></span></span></div>
                                          <div class="content-inner"  style="width: calc( 100% - 135px - 15px);">
                                             <div class="sc-heading article_heading">
                                                <h3 class = "heading__primary" >e-Library</h3>
                                             </div>
                                             <a class="smicon-read sc-btn" href="#"  style="color: white;" >View More<i class="fa fa-chevron-right"></i></a>
                                          </div>
                                       </div>
                                       <!--end smicon-box-->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div><br>
                     <div class="panel-grid" id="pg-12-2" >
                        <div class="panel-grid-cell" id="pgc-12-2-0" >
                          <section id="features">
                          </section>
                           <div class="so-panel widget widget_heading panel-first-child" id="panel-12-2-0-0" data-index="4">
                              <div class="thim-widget-heading thim-widget-heading-base">
                                 <div class="text-left">
                                    <h3 class="title">Upcomming Courses</h3>
                                   
                                 </div>
                              </div>
                           </div>
                           <div class="so-panel widget widget_courses panel-last-child" id="panel-12-2-0-1" data-index="5">
                              <div class="thim-widget-courses thim-widget-courses-base">
                                 <div class="thim-carousel-wrapper thim-course-carousel thim-course-grid" data-visible="4"
                                    data-pagination="0" data-navigation="1" data-autoplay="0">
                                    <div class="course-item">
                                      
                                       <div class="hovereffect">
        <img class="img-responsive" src="images/work01.jpg" alt="">
        <div class="overlay">
            <h2>Programming with Python</h2>
            <a class="info" href="#">View</a>
        </div>
    </div>
    <br>
    <h6>Programming with Python</h6>
                                    </div>
                                    <div class="course-item">
                                    <div class="hovereffect">
        <img class="img-responsive" src="images/work02.jpg" alt="">
        <div class="overlay">
            <h2>Data Analysis</h2>
            <a class="info" href="#">View</a>
        </div>
    </div>                             
    <br>
    <h6>Data Analysis</h6>       
                                    </div>
                                    <div class="course-item">
                                    <div class="hovereffect">
        <img class="img-responsive" src="images/work04.jpg" alt="">
        <div class="overlay">
            <h2>Machine Learning</h2>
            <a class="info" href="#">View</a>
        </div>
    </div>
    <br>
    <h6>Machine Learning</h6>
                                    </div>
                                    <div class="course-item">
                                    <div class="hovereffect">
        <img class="img-responsive" src="images/work05.jpg" alt="">
        <div class="overlay">
            <h2>Programmable microfluidics</h2>
            <a class="info" href="#">View</a>
        </div>
    </div>

<br>
    <h6>Programmable microfluidics</h6>
    </div>
                                    <div class="course-item">
                                    <div class="hovereffect">
        <img class="img-responsive" src="images/work06.jpg" alt="">
        <div class="overlay">
            <h2>HTML CSS and JavaScript for Web developers</h2>
            <a class="info" href="#">View</a>
        </div>
    </div>
    <br>
    <h6>HTML CSS and JavaScript for Web developers</h6>
                                       
                                    </div>
                                    <div class="course-item">
                                    <div class="hovereffect">
        <img class="img-responsive" src="images/work03.jpg" alt="">
        <div class="overlay">
            <h2>Advanced Power Electronics</h2>
            <a class="info" href="#">View</a>
        </div>
    </div>
    <br>
    <h6>Advanced Power Electronics</h6>
                                    
                                       
                                    </div>
                                    <div class="course-item">
                                     <div class="hovereffect">
        <img class="img-responsive" src="images/work07.jpg" alt="">
        <div class="overlay">
            <h2>Big Data Analysis</h2>
            <a class="info" href="#">View</a>
        </div>
    </div>
    <br>
    <h6>Big Data Analysis</h6>
                                    </div>
                                    <div class="course-item">
                                       <div class="hovereffect">
        <img class="img-responsive" src="images/work08.jpg" alt="">
        <div class="overlay">
            <h2>Data Mining</h2>
            <a class="info" href="#">View</a>
        </div>
    </div>
    <br>
         <h6>Data Mining</h6>
                                    </div>

                                 </div>
                              </div>
                           </div>
                       <!--  </div>
                     </div> -->
                     
                     <!-- <div class="" id="pg-12-4" > -->
                        <!-- <div class="panel-grid-cell" id="pgc-12-4-0" > -->
                           <div class="panel-grid so-panel panel-grid-cell widget widget_heading panel-first-child" id="panel-12-4-0-0" data-index="9">
                              <div class="thim-widget-heading thim-widget-heading-base text-left">
                                    <h3 class="title">Events</h3>
                                    
                                   
                                 </div>
                              <!-- </div>
                           </div> -->
                           <div class="so-panel widget widget_list-event panel-last-child" id="panel-12-4-0-1" data-index="10">
                              <div class="thim-widget-list-event thim-widget-list-event-base">
                                 <div class="thim-list-event">
                                    <a class="view-all" href="#">View All</a>    
                                    <div class="item-event post-2953 tp_event type-tp_event status-tp-event-happenning has-post-thumbnail hentry pmpro-has-access">
                                       
                                       <div class="image"><img src="images/include/event-4-450x233.jpg" alt="event-4" title="event-4"  width="450" height="233"></div>
                                       <div class="event-wrapper">
                                          <h7 ><b>
                                             <a href="#"> Build Education Website Using Bootstrap</a><b>
                                          </h7>
                                          <div class="meta">
                                             <div class="time">
                                                <i class="fa fa-clock-o"></i>
                                                8:00 am - 5:00 pm             
                                             </div>
                                             <div class="location">
                                                <i class="fa fa-map-marker"></i>
                                                Chicago, US             
                                             </div>
                                          </div>
                                          <div class="description">
                                             <p>Tech you how to build a complete Learning Management System with Bootstrap and LearnPress.</p>
                                          </div>
                                       </div>
                                       <div class="time-from">
                                          <div class="date">
                                             23          
                                          </div>
                                          <div class="month">
                                             August            
                                          </div>
                                       </div>
                                    </div>
                                    <div class="item-event post-2948 tp_event type-tp_event status-tp-event-upcoming has-post-thumbnail hentry pmpro-has-access">
                                       
                                       <div class="image">
                                            <img src="images/include/event-7-450x233.jpg" alt="event-7" title="event-7"  width="450" height="233">
                                       </div>
                                       <div class="event-wrapper">
                                          <h7 ><b>
                                             <a href="#"> Build Education Website Using Bootstrap</a><b>
                                          </h7>
                                          <div class="meta">
                                             <div class="time">
                                                <i class="fa fa-clock-o"></i>
                                                8:00 am - 5:00 pm             
                                             </div>
                                             <div class="location">
                                                <i class="fa fa-map-marker"></i>
                                                London, UK              
                                             </div>
                                          </div>
                                          <div class="description">
                                             <p>Tech you how to build a complete Learning Management System with Bootstrap and LearnPress.</p>
                                          </div>
                                       </div>
                                       <div class="time-from">
                                          <div class="date">
                                             16          
                                          </div>
                                          <div class="month">
                                             September            
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="panel-grid" id="pg-12-5" >
                        <div class="panel-row-style-thim-bg-overlay siteorigin-panels-stretch thim-bg-overlay panel-row-style" style="padding-bottom: 85px;background-image: url(images/include/bg_lastest_new.jpg); background-position: center center; background-repeat: no-repeat;" data-stretch-type="full" data-siteorigin-parallax="{&quot;backgroundUrl&quot;:&quot;images/include/bg_lastest_new.jpg&quot;,&quot;backgroundSize&quot;:[1600,790],&quot;backgroundSizing&quot;:&quot;scaled&quot;,&quot;limitMotion&quot;:&quot;auto&quot;}" >
                           <div class="panel-grid-cell" id="pgc-12-5-0" >
                              <div class="so-panel widget widget_heading panel-first-child" id="panel-12-5-0-0" data-index="11">
                                 <div  class="panel-widget-style" >
                                 <div class="container">
                                    <div class="thim-widget-heading thim-widget-heading-base">
                                       <div class=" text-left">
                                          <h3 style="color:#ffffff;" class="title">Latest Updates</h3>
                                          <!-- <p class="sub-heading" style="color:#ffffff;">Education news all over the world.</p> -->
                                          <span style="background-color:#ffffff" class="line"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              </div>
                              <div class="so-panel widget widget_carousel-post panel-last-child" id="panel-12-5-0-1" data-index="12">
                                 <div class="thim-widget-carousel-post thim-widget-carousel-post-base">
                                    <div class="thim-owl-carousel-post thim-carousel-wrapper" data-visible="3"
                                       data-pagination="0" data-navigation="1" data-autoplay="0">
                                       <div class="item">
                                       <div class="hovereffects">
                                          <div class="image">
                                             <a href="#">
                                             <img src="images/include/blog-8-450x267.jpg" alt="Online Learning Glossary" title="blog-8"  width="450" height="267">               </a>
                                          </div>
                                          <div class="overlays">
                                             <h2>Anthony January 20, 2016 </h2>
                                             <a class="info" href="#">link here</a>
                                          </div>     
                                       </div>
                                       <h4 class="title">
                                                <a href="#">Online Learning Glossary</a>
                                             </h4>
                                       </div>
                                       <div class="item">
                                       <div class="hovereffects">
                                          <div class="image">
                                             <a href="#">
                                             <img src="images/include/blog-5-450x267.jpg" alt="Online Learning Glossary" title="blog-8"  width="450" height="267">               </a>
                                          </div>
                                          <div class="overlays">
                                             <h2>Anthony January 20, 2016 </h2>
                                             <a class="info" href="#">link here</a>
                                          </div>     
                                       </div>
                                       <h4 class="title">
                                                <a href="#">Tips to Succeed in an Online Course</a>
                                             </h4>
                                       </div>
                                       <div class="item">
                                       <div class="hovereffects">
                                          <div class="image">
                                             <a href="#">
                                             <img src="images/include/blog-3-450x267.jpg" alt="Online Learning Glossary" title="blog-8"  width="450" height="267">               </a>
                                          </div>
                                          <div class="overlays">
                                             <h2>Hinata Hyuga October 20, 2015 </h2>
                                             <a class="info" href="#">link here</a>
                                          </div>     
                                       </div>
                                       <h4 class="title">
                                                <a href="#">Introducing: Dr. Deniz Zeynep</a>
                                             </h4>                                          
                                       </div>
                                        <div class="item">
                                          <div class="hovereffects">
                                            <div class="image">
                                               <a href="#">
                                               <img src="images/include/blog-2-450x267.jpg" alt="Online Learning Glossary" title="blog-8"  width="450" height="267">               </a>
                                            </div>
                                            <div class="overlays">
                                               <h2>Hinata Hyuga October 20, 2015 </h2>
                                               <a class="info" href="#">link here</a>
                                            </div>     
                                          </div>
                                          <h4 class="title">
                                                <a href="#">LMS Bootstrap plugin</a>
                                          </h4>   
                                        </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="panel-grid" id="pg-12-6" >
                        <div class="panel-grid-cell" id="pgc-12-6-0" >
                           <div class="so-panel widget widget_heading panel-first-child" id="panel-12-6-0-0" data-index="13">
                              <div class="thim-widget-heading thim-widget-heading-base">
                                 <div class=" text-center">
                                    <h3 class="title">What People Say</h3>
                                    <!-- <p class="sub-heading" style="">How real people said about Education Bootstrap Theme.</p> -->
                                    <span class="line"></span>
                                 </div>
                              </div>
                           </div>
                           <div class="so-panel widget widget_testimonials panel-last-child" id="panel-12-6-0-1" data-index="14">
                              <div class="thim-widget-testimonials thim-widget-testimonials-base">
                                 <div class="thim-testimonial-slider" data-visible="5" data-auto="0" data-mousewheel="0">
                                    <div class="item">
                                       <div class="image"><img src="images/include/peter-100x100.jpg" alt="peter" title="peter"  width="100" height="100"></div>
                                       <div class="content">
                                          <h3 class="title">Peter Packer</h3>
                                          
                                       </div>
                                    </div>
                                    <div class="item">
                                       <div class="image"><img src="images/include/manuel-100x100.jpg" alt="manuel" title="manuel"  width="100" height="100"></div>
                                       <div class="content">
                                          <h3 class="title">Manuel</h3>
                                        
                                       </div>
                                    </div>
                                    <div class="item">
                                       <div class="image"><img src="images/include/john-doe-100x100.jpg" alt="john-doe" title="john-doe"  width="100" height="100"></div>
                                       <div class="content">
                                          <h3 class="title">John Doe</h3>
                                        
                                       </div>
                                    </div>
                                    <div class="item">
                                       <div class="image"><img src="images/include/elsie-100x100.jpg" alt="elsie" title="elsie"  width="100" height="100"></div>
                                       <div class="content">
                                          <h3 class="title">Elsie</h3>
                                        
                                       </div>
                                    </div>
                                    <div class="item">
                                       <div class="image"><img src="images/include/anthony-100x100.jpg" alt="anthony" title="anthony"  width="100" height="100"></div>
                                       <div class="content">
                                          <h3 class="title">Anthony</h3>
                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="panel-grid" id="pg-12-7" >
                        <div class="panel-grid-cell" id="pgc-12-7-0" >
                           <div class="so-panel widget widget_text panel-first-child panel-last-child" id="panel-12-7-0-0" data-index="15">
                              <div class="textwidget">
                                 <div class="thim-newlleter-homepage">
                                    <p class="description">Subscribe now and receive weekly newsletter with educational materials, new courses, interesting posts, popular books and much more!</p>
                                    <script type="text/javascript">(function() {
                                       if (!window.mc4wp) {
                                          window.mc4wp = {
                                             listeners: [],
                                             forms    : {
                                                on: function (event, callback) {
                                                   window.mc4wp.listeners.push({
                                                      event   : event,
                                                      callback: callback
                                                   });
                                                }
                                             }
                                          }
                                       }
                                       })();
                                    </script><!-- MailChimp for Bootstrap v3.1.11 - https://Bootstrap.org/plugins/mailchimp-for-wp/ -->
                                    <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-3101 mc4wp-form-basic" method="post" data-id="3101" data-name="Default sign-up form" >
                                       <div class="mc4wp-form-fields">
                                          <input type="email" id="mc4wp_email" name="EMAIL" placeholder="Your email here" required /><input type="submit" value="Subscribe" />
                                          <div style="display: none;"><input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></div>
                                          <input type="hidden" name="_mc4wp_timestamp" value="1469450429" /><input type="hidden" name="_mc4wp_form_id" value="3101" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" />
                                       </div>
                                       <div class="mc4wp-response"></div>
                                    </form>
                                    <!-- / MailChimp for Bootstrap Plugin -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div></b></b></h7></div></div>
               <!-- #main-content -->
              <footer id="colophon" class="site-footer ">
                  <div class="footer">
                     <div class="container">
                        <div class="row">
                           <aside id="siteorigin-panels-builder-9" class="widget widget_siteorigin-panels-builder footer_widget">
                              <div id="pl-w575924cfed45d">
                                 <style scoped>#pgc-w575924cfed45d-0-0 { width:33.3% } #pgc-w575924cfed45d-0-1 , #pgc-w575924cfed45d-0-2 , #pgc-w575924cfed45d-0-3 , #pgc-w575924cfed45d-0-4 { width:16.675% } #pg-w575924cfed45d-0 .panel-grid-cell { float:left } #pl-w575924cfed45d .panel-grid-cell .so-panel { margin-bottom:30px } #pl-w575924cfed45d .panel-grid-cell .so-panel:last-child { margin-bottom:0px } #pg-w575924cfed45d-0 { margin-left:-15px;margin-right:-15px } #pg-w575924cfed45d-0 .panel-grid-cell { padding-left:15px;padding-right:15px } @media (max-width:767px){ #pg-w575924cfed45d-0 .panel-grid-cell { float:none;width:auto } #pgc-w575924cfed45d-0-0 , #pgc-w575924cfed45d-0-1 , #pgc-w575924cfed45d-0-2 , #pgc-w575924cfed45d-0-3 { margin-bottom:30px } #pl-w575924cfed45d .panel-grid , #pl-w575924cfed45d .panel-grid-cell {  }  } </style>
                                 <div class="panel-grid" id="pg-w575924cfed45d-0" >
                                    <div class="panel-grid-cell" id="pgc-w575924cfed45d-0-0" >
                                       <div class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child" id="panel-w575924cfed45d-0-0-0" data-index="0">
                                          <div class="textwidget">
                                             <div class="thim-footer-location">
                                                <a href="#" title="Education WP - Education Bootstrap Theme" rel="home" class="sticky-logo"><h4 style="color:white;">KnowledgeTime</h4></a>
                                                <p class="info"><i class="fa fa-phone"></i><a href="#">+1(514)692-9467</a></p>
                                                <p class="info">
                                                   <i class="fa fa-envelope"></i>
                                                   <a href="#">
                                                      <span class="__cf_email__"></span>
                                                      contact@knowledgetime.org</a>
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="so-panel widget widget_social panel-last-child" id="panel-w575924cfed45d-0-0-1" data-index="1">
                                          <div class="thim-widget-social thim-widget-social-base">
                                             <div class="thim-social">
                                                <ul class="social_link">
                                                   <li><a class="facebook hasTooltip" href="#" target="_self"><i class="fa fa-facebook"></i></a></li>
                                                   <li><a class="twitter hasTooltip" href="#" target="_self" ><i class="fa fa-twitter"></i></a></li>
                                                   <li><a class="google-plus hasTooltip" href="#" target="_self" ><i class="fa fa-google-plus"></i></a></li>
                                                   <li><a class="linkedin hasTooltip" href="#" target="_self" ><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="panel-grid-cell" id="pgc-w575924cfed45d-0-1" >
                                       <div class="so-panel widget widget_nav_menu panel-first-child panel-last-child" id="panel-w575924cfed45d-0-1-0" data-index="2">
                                          <h3 class="widget-title" align="left">Company</h3>
                                          <!-- <div class=" megaWrapper"> -->
                                             <ul id="menu-company" class=" megaWrappermenu" >
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page drop_to_right standard" ><a href="#"><span data-hover="About Us">About Us</span></a></li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page drop_to_right standard"><a href="#"><span data-hover="Blog">Blog</span></a></li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page drop_to_right standard"><a href="#"><span data-hover="Contact">Contact</span></a></li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page drop_to_right standard"><a href="#"><span data-hover="Become a Teacher">Become a Teacher</span></a></li>
                                             </ul>
                                          <!-- </div> -->
                                       </div>
                                    </div>
                                    <div class="panel-grid-cell" id="pgc-w575924cfed45d-0-2" >
                                       <div class="so-panel widget widget_nav_menu panel-first-child panel-last-child" id="panel-w575924cfed45d-0-2-0" data-index="3">
                                          <h3 class="widget-title">Links</h3>
                                          <div class=" megaWrapper">
                                             <ul id="menu-links" class="menu">
                                                <li  class="menu-item menu-item-type-post_type_archive menu-item-object-lp_course drop_to_right standard"><a href=""><span data-hover="Courses">Courses</span></a></li>
                                                <li  class="menu-item menu-item-type-custom menu-item-object-custom drop_to_right standard"><a href=""><span data-hover="Events">Events</span></a></li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page drop_to_right standard"><a href=""><span data-hover="Gallery">Gallery</span></a></li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page drop_to_right standard"><a href=""><span data-hover="FAQs">FAQs</span></a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="panel-grid-cell" id="pgc-w575924cfed45d-0-3" >
                                       <div class="so-panel widget widget_nav_menu panel-first-child panel-last-child" id="panel-w575924cfed45d-0-3-0" data-index="4">
                                          <h3 class="widget-title">Support</h3>
                                          <div class=" megaWrapper">
                                             <ul id="menu-support" class="menu">
                                                <li  class="menu-item menu-item-type-custom menu-item-object-custom drop_to_right standard"><a href="#"><span data-hover="Documentation">Documentation</span></a></li>
                                                <li  class="menu-item menu-item-type-custom menu-item-object-custom drop_to_right standard"><a href="#"><span data-hover="Forums">Forums</span></a></li>
                                                </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- <div class="panel-grid-cell" id="pgc-w575924cfed45d-0-4" >
                                       <div class="so-panel widget widget_nav_menu panel-first-child panel-last-child" id="panel-w575924cfed45d-0-4-0" data-index="5">
                                          <h3 class="widget-title">Recommend</h3>
                                          <div class=" megaWrapper">
                                             <ul id="menu-recommend" class="menu">
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page drop_to_right standard"><a href="#"><span data-hover="Bootstrap">Bootstrap</span></a></li>
                                                <li  class="menu-item menu-item-type-post_type_archive menu-item-object-lp_course drop_to_right standard"><a href="#"><span data-hover="LearnPress">LearnPress</span></a></li>
                                                <li  class="menu-item menu-item-type-post_type menu-item-object-page drop_to_right standard"><a href="#"><span data-hover="WooCommerce">WooCommerce</span></a></li>
                                                <li  class="menu-item menu-item-type-custom menu-item-object-custom drop_to_right standard"><a href="#"><span data-hover="bbPress">bbPress</span></a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div> -->
                                 </div>
                              </div>
                           </aside>
                        </div>
                     </div>
                  </div>
                  <!--==============================powered=====================================-->
                  <div class="copyright-area">
                     <div class="container">
                        <div class="copyright-content">
                           <div class="row">
                              <div class="col-sm-6">
                                 <p class="text-copyright">© 2016 KnowledgeTime. All rights reserved.</p>
                              </div>
                              <div class="col-sm-6 text-right">
                                 <aside id="nav_menu-14" class="widget widget_nav_menu">
                                    <div class=" megaWrapper">
                                       <ul id="menu-privacy" class="menu">
                                          <li  class="menu-item menu-item-type-custom menu-item-object-custom drop_to_right standard"><a href="#"><span data-hover="Privacy">Privacy</span></a></li>
                                          <li  class="menu-item menu-item-type-custom menu-item-object-custom drop_to_right standard"><a href="#"><span data-hover="Terms">Terms</span></a></li>
                                          <li  class="menu-item menu-item-type-custom menu-item-object-custom drop_to_right standard"><a href="#"><span data-hover="Sitemap">Sitemap</span></a></li>
                                       </ul>
                                    </div>
                                 </aside>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </footer>
                  <a href="#" id="back-to-top">
         <i class="fa fa-chevron-up"></i>
         </a>
        
      
      <!-- LearnPress JavaScript -->
      <script type="text/javascript">jQuery(function ($) {
         ;
         (function () {
            var $form = $('#learn-press-checkout');
            $form.on('learn_press_checkout_place_order', function () {
               var chosen = $('input[type="radio"]:checked', $form);
               $form.find('input[name="woocommerce_chosen_method"]').remove();
               if (chosen.val() == 'woocommerce') {
                  $form.append('<input type="hidden" name="woocommerce_chosen_method" value="' + chosen.data('method') + '"/>');
               }
            });
         })();
         
         
         });
      </script>
      <!-- Memberships powered by Paid Memberships Pro v1.8.9.3.
         -->
     
       
      
     
      <script data-cfasync="false" type="text/javascript">
         window.onload = function () {
            setTimeout(function () {
               var body = document.getElementById("thim-body"),
                  thim_preload = document.getElementById("preload"),
                  len = body.childNodes.length,
                  class_name = body.className.replace(/(?:^|\s)thim-body-preload(?!\S)/, '').replace(/(?:^|\s)thim-body-load-overlay(?!\S)/, '');
         
               body.className = class_name;
               if (typeof thim_preload !== 'undefined' && thim_preload !== null) {
                  for (var i = 0; i < len; i++) {
                     if (body.childNodes[i].id !== 'undefined' && body.childNodes[i].id == "preload") {
                        body.removeChild(body.childNodes[i]);
                        break;
                     }
                  }
               }
            }, 100);
         };
      </script>
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
      <script type='text/javascript' src='js/jquery.form.min.js'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var _wpcf7 = {"loaderUrl":"http:\/\/#\/wp-content\/themes\/eduma\/images\/ajax-loader.gif","recaptchaEmpty":"Please verify that you are not a robot.","sending":"Sending ...","cached":0};
         /* ]]> */
      </script>
      <script type='text/javascript' src='js/scripts.js'></script>
      <script type='text/javascript' src='js/underscore.min.js'></script>
      <script type='text/javascript' src='js/backbone.min.js'></script>
      <script type='text/javascript' src='js/frontend/course-lesson.js'></script>
      <script type='text/javascript' src='js/jquery.alert.js'></script>
      <script type='text/javascript' src='js/global.js'></script>
      <script type='text/javascript' src='js/main.min.js'></script>
      <script type='text/javascript' src='js/smooth_scroll.min.js'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var thim_placeholder = {"login":"Username","password":"Password"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='js/custom-script-v1.min.js'></script>
      <script type='text/javascript' src='js/wp-embed.min.js'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var panelsStyles = {"fullContainer":"body"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='js/styling-24.min.js'></script>
      <script type='text/javascript' src='js/siteorigin-parallax.min.js'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var mc4wp_forms_config = [];
         /* ]]> */
      </script>
      <script type='text/javascript' src='js/forms-api.min.js'></script>
      <!--[if lte IE 9]>
      <script type='text/javascript' src='#/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=3.1.11'></script>
      <![endif]-->
      <script type="text/javascript">(function() {function addEventListener(element,event,handler) {
         if(element.addEventListener) {
            element.addEventListener(event,handler, false);
         } else if(element.attachEvent){
            element.attachEvent('on'+event,handler);
         }
         }})();
      </script>
      <div class="tp_chameleon_overlay">
         <div class="tp_chameleon_progress">
            <div class="tp_chameleon_heading">Processing!</div>
         </div>
      </div>
      <script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script>
   </body>
</html>
