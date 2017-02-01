<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
  <title>States of Jersey Dev Toolkit</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000">

  <!-- Style Guide Boilerplate Styles -->
  <link rel="stylesheet" href="css/sg-style.css">

  <!-- https://github.com/sindresorhus/github-markdown-css -->
  <link rel="stylesheet" href="css/github-markdown.css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Replace below stylesheet with your own stylesheet -->
  <link rel="stylesheet" href="css/GovJE.css">

  <!-- prism Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prism/prism.css">

   <script src="//use.typekit.net/npl5qjc.js"></script>
   <script>try { Typekit.load(); } catch (e) { }</script>

</head>
<body>

<header>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-9 sitetitle">
            <a title="gov.je home" href="/Pages/default.aspx"><img alt="" src="https://www.gov.je/_controltemplates/15/C5.GovJEResponsive/images/Leoaprds-white-V1.svg">devtoolkit.gov.je</a>
            <p class="hidden-xs info noindex">
              States of Jersey Web User Interface Toolkit <br/>
              <span class="subheading hidden-sm hidden-xs">A guide to the usage of the frontend UI toolkit to be used on all State of Jersey websites</span>
            </p>

        </div>
        <div class="hidden-md hidden-lg col-sm-3">

            <ul class="right noindex">
                 <button type="button" class="sg-nav-toggle">Menu</button>
            </ul>
           
        </div>
    </div>

    </div>
</header>

  <a href="#main" class="sg-visually-hidden sg-visually-hidden-focusable">Skip to main content</a>


<div class="container-fluid">
<div class="row">
  <div class="sg-wrapper sg-clearfix">
    <div id="nav" class="sg-sidebar col-md-3 col-lg-2" role="navigation">
      <h2 class="sg-h2 sg-subnav-title">Info</h2>
      <ul class="sg-nav-group">
        <li>
          <a href="#sg-about">Getting Started</a>
        </li>
        <li>
          <a href="#sg-colors">Colours</a>
        </li>
        <li>
          <a href="#sg-fontStacks">Fonts</a>
        </li>
      </ul>

      <?php listFilesInFolder('markup'); ?>
    </div><!--/.sg-sidebar-->

    <div id="main" class="sg-main col-md-9 col-lg-10" role="main">
      <div class="sg-container">
        <div class="sg-info">
          <div class="sg-about sg-section">
            <h2 id="sg-about" class="sg-h2">Getting Started</h2>
            <p>www.gov.je has been designed as accessible as possible for all users, while at the same time the design was focused on a ‘mobile  rst’ in-line with current browsing and internet use trends.</p>
            <p>The design style is very light on images and colours, the idea being to make the content easy to  nd and read for all users.</p>
            <p>This style guide includes information on various aspects of the site design and details many of the elements that are required when new sections of the website and sub-sites are developed.</p>
          </div><!--/.sg-about-->

          <!-- Primary Colours -->
          <div class="sg-colors sg-section">
            <h2 id="sg-colors" class="sg-h2">Primary Colors</h2>
            <div class="row">
              <div class="col-lg-2 col-sm-4 col-xs-6">
                <div class="sg-color-swatch" style="background-color: #b60011;"></div>
                <div class="sg-color-name">Red</div>
                <div class="sg-color-value">
                  <p>Web: #B60011<br/>
                     RGB: 182, 0, 17<br/>
                     CMYK: 17, 100, 100, 8
                  </p>
                </div>
              </div>
              <div class="col-lg-2 col-sm-4 col-xs-6">
                <div class="sg-color-swatch" style="background-color: #1D1D1B;"></div>
                <div class="sg-color-name">Charcoal</div>
                <div class="sg-color-value">
                  <p>
                    Web: #1D1D1B<br/>
                    RGB: 29, 29, 29<br/>
                    CMYK: 0, 0, 0, 100
                  </p>
                </div>
              </div>
              <div class="col-lg-2 col-sm-4 col-xs-6">
                <div class="sg-color-swatch" style="background-color: #585958;"></div>
                <div class="sg-color-name">Dark Grey</div>
                <div class="sg-color-value">
                  <p>
                    Web: #585958<br/>
                    RGB: 88, 89, 88<br/>
                    CMYK: 0, 0, 0, 74
                  </p>
                </div>
              </div>
              <div class="col-lg-2 col-sm-4 col-xs-6">
                <div class="sg-color-swatch" style="background-color: #EEF0F0;"></div>
                <div class="sg-color-name">Light Grey</div>
                <div class="sg-color-value">
                  <p>
                    Web: #EEF0F0<br/>
                    RGB: 238, 240, 240<br/>
                    CMYK: 0, 0, 0, 7
                  </p>
               </div>
              </div>   
              <div class="col-lg-2 col-sm-4 col-xs-6">
                <div class="sg-color-swatch" style="background-color: #FFFFFF; border:1px solid #EEF0F0"></div>
                <div class="sg-color-name">White</div>
                <div class="sg-color-value">
                  <p>
                    Web: #FFFFFF<br/>
                    RGB: 255, 255, 255<br/>
                    CMYK: 0, 0, 0, 0
                  </p>
                </div>
              </div>   
            </div>            
          </div><!--/.sg-colors-->

           <!-- Secondary Colours -->
          <div class="sg-colors sg-section">
            <h2 id="sg-colors" class="sg-h2">Secondary Colors</h2>
            <div class="row">
              <div class="col-lg-2 col-sm-4 col-xs-6">
                <div class="sg-color-swatch" style="background-color: #7D7D7D;"></div>
                <div class="sg-color-name">Mid Grey</div>
                <div class="sg-color-value">
                  <p>Web: #7D7D7D<br/>
                     RGB: 125, 125, 125<br/>
                     CMYK: 0, 0, 0, 60
                  </p>
                </div>
              </div>
              <div class="col-lg-2 col-sm-4 col-xs-6">
                <div class="sg-color-swatch" style="background-color: #67b0EA;"></div>
                <div class="sg-color-name">Focus Blue Light</div>
                <div class="sg-color-value">
                  <p>
                    Web: #67b0EA<br/>
                    RGB: 103, 176, 234<br/>
                    CMYK: 55, 18, 0, 0
                  </p>
                </div>
              </div>
              <div class="col-lg-2 col-sm-4 col-xs-6">
                <div class="sg-color-swatch" style="background-color: #095AA2;"></div>
                <div class="sg-color-name">Focus Blue Dark</div>
                <div class="sg-color-value">
                  <p>
                    Web: #095AA2<br/>
                    RGB: 89, 90, 162<br/>
                    CMYK: 96, 70, 0, 0
                  </p>
                </div>
              </div>
              <div class="col-lg-2 col-sm-4 col-xs-6">
                <div class="sg-color-swatch" style="background-color: #31B255;"></div>
                <div class="sg-color-name">Green button</div>
                <div class="sg-color-value">
                  <p>
                    Web: #31B255<br/>
                    RGB: 49, 178, 85<br/>
                    CMYK: 76, 1, 92, 0
                  </p>
               </div>
              </div>   
              <div class="col-lg-2 col-sm-4 col-xs-6">
                <div class="sg-color-swatch" style="background-color: #1565d6;"></div>
                <div class="sg-color-name">Blue Button</div>
                <div class="sg-color-value">
                  <p>
                    Web: #1565d6<br/>
                    RGB: 21, 101, 214<br/>
                    CMYK: 84, 62, 0, 0
                  </p>
                </div>
              </div>  
               <div class="col-lg-2 col-sm-4 col-xs-6">
                <div class="sg-color-swatch" style="background-color: #E0E0E0;"></div>
                <div class="sg-color-name">Table Borders</div>
                <div class="sg-color-value">
                  <p>
                    Web: #E0E0E0<br/>
                    RGB: 224, 224, 224<br/>
                    CMYK: 0, 0, 0, 15
                  </p>
                </div>
              </div>  
               <div class="col-lg-2 col-sm-4 col-xs-6">
                <div class="sg-color-swatch" style="background-color: #666666;"></div>
                <div class="sg-color-name">Button Bottom border</div>
                <div class="sg-color-value">
                  <p>
                    Web: #666666<br/>
                    RGB: 102, 102, 102<br/>
                    CMYK: 0, 0, 0, 69
                  </p>
                </div>
              </div>  
               <div class="col-lg-2 col-sm-4 col-xs-6">
                <div class="sg-color-swatch" style="background-color: #E1E3E3;"></div>
                <div class="sg-color-name">Paging box border</div>
                <div class="sg-color-value">
                  <p>
                    Web: #E1E3E3<br/>
                    RGB: 225, 227, 227<br/>
                    CMYK: 0, 0, 0, 14
                  </p>
                </div>
              </div>   
            </div>            
          </div><!--/.sg-colors-->

          <!-- Manually add your fonts here. -->
          <div class="sg-font-stacks sg-section">
            <h2 id="sg-fontStacks" class="sg-h2">Font Stacks</h2>
            <dl class="sg-font-list">
              <dt>Primary Font:</dt>
              <dd style="font-family: 'proxima-nova', Arial, sans-serif;">"proxima-nova", Arial, sans-serif;</dd>

              <dt>Primary Font semibold:</dt>
              <dd style="font-family: 'proxima-nova', Arial, sans-serif; font-weight: 500;">"proxima-nova", Arial, sans-serif;</dd>

              <dt>Primary Font bold:</dt>
              <dd style="font-family: 'proxima-nova', Arial, sans-serif; font-weight: 800;">"proxima-nova", Arial, sans-serif;</dd>
<br/>
              <dt>Fall-back Font:</dt>
              <dd style='font-family: Arial, sans-serif;'>Arial, sans-serif;</dd>

              <dt>Fall-back Font bold:</dt>
              <dd style='font-family: Arial, sans-serif; font-weight: bold;'>Arial, sans-serif;</dd>
            </dl>
            <div class="sg-markup-controls"><a class="sg-btn--top" href="#top">Back to Top</a></div>
          </div><!--/.sg-font-stacks-->
        </div><!--/.sg-info-->

        <?php renderFilesInFolder('markup'); ?>
      </div><!--/.sg-container-->
    </div><!--/.sg-main-->
  </div><!--/.sg-wrapper-->
  </div>
  </div>

  <!--[if gt IE 8]><!--><script src="vendor/prism/prism.js"></script><!--<![endif]-->
  <script src="js/sg-scripts.js"></script>
</body>
</html>

