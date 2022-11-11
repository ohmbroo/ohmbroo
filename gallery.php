<?php
////////////////////////////////////////////////////////////////////////////////
//
//  University of New Mexico - School Year 2014 - 2015
//  Senior Design Project - Solar Image Collaboration
//  
//  CARINA - Collaborative Solar Imaging Annotation
//
//  Sponsor - Professor Pattichis
//
//  Team - Patrick Lopez PM, Conner Dolan, Edward Sadzewicz, 
//         Cody Shell, Jaclynn Wakley
//
////////////////////////////////////////////////////////////////////////////////
//
//  Module:  gallery.php
//
//  Purpose: Script for the Gallery TAB
//
////////////////////////////////////////////////////////////////////////////////

?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      #nav {
          line-height:30px;
          height:800px;
          width:100px;
          float:left;
          padding:30px;	      
          font-size: 10px;
          display: inline-block;                
      }                     
    </style>
    <title>Katrina's | Gallery</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
    <script type="text/javascript" src="js/jquery-1.6.min.js"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/Open_Sans_400.font.js" type="text/javascript"></script>
    <script src="js/Open_Sans_Light_300.font.js" type="text/javascript"></script>
    <script src="js/Open_Sans_Semibold_600.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>                        
  </head>


<body id="body" style="overflow: auto;">      
<body id="page3">
  <div class="bg">
    <div class="main">
      <header>
        <div class="row-1">
          <h1> <a class="logo" href="index.php">OHMBROO</a> <strong class="slog"></strong> </h1>
          
        </div>
       
        </div>
      </header>
      <!-- content -->
      <section id="content">
        <div class="padding">
          <div class="wrapper margin-bot">
            <div class="col-3">
              <div class="img-indent3">
                <div id="main_section" style="position: relative; left: 0px; top: 0px; width: 950px; min-height: 600px;">

                  <!-- DEMO GALLERY --> 

                  <head>
                    <link type="text/css" rel="stylesheet" href="foliogallery/foliogallery.css" />
                    <link type="text/css" rel="stylesheet" href="colorbox/colorbox.css" />
                    <script type="text/javascript" src="foliogallery/jquery.1.11.js"></script>
                    <script type="text/javascript" src="colorbox/jquery.colorbox-min.js"></script>
                    <script type="text/javascript">
                      $(document).ready(function () {
                          // initiate colorbox
                          $('.albumpix').colorbox({rel: 'albumpix', maxWidth: '96%', maxHeight: '96%', Slideshow: true});
                          $('.vid').colorbox({rel: 'albumpix', iframe: true, width: '80%', height: '96%'});
                      });
                    </script>
                  </head>

                  <body>
                    <br />
                    <?php
                    $_REQUEST['fullalbum'] = 1;
                    include 'foliogallery.php';
                    ?>
                    <br />
                  </body>

                  <!-- END DEMO GALLERY --> 

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer>
        <div class="row-top">
          <div class="row-padding">
            <div class="wrapper">
              <div class="aligncenter">
 
                <p class="p0">Edward Sadzewicz</p>
                  <!-- {%FOOTER_LINK} -->
              </div>
            </div>
          </div>
        </div>       
      </footer>
    </div>
  </div>
  <script type="text/javascript">
  </script>
</html>
