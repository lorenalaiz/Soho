
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>High Field Terraces</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/scrolling-nav.css" type="text/css" rel="stylesheet">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- jQuery -->
        <script src="js/jquery.js" type="text/javascript"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

        <!-- Scrolling Nav JavaScript -->
        <script src="js/jquery.easing.min.js" type="text/javascript"></script>
        <script src="js/scrolling-nav.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>

        <!-- Envio de emails -->
        <script src="js/sendmail.js" type="text/javascript"></script>

    </head>

    <!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand page-scroll" href="#page-top"><img src="pictures/Logo.png" width="15%"  align="left" alt="Logo"></a>-->
                <a href="index.html"><img src="pictures/Logo.png" width="15%" align="left"  alt="Logo"></a>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">

                    <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a class="page-scroll" href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#architecture">ARCHITECTURE</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#terraces">TERRACES</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#schedule">FINISH SCHEDULE</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#location">LOCATION</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">CONTACT US</a>
                        </li>
                    </ul>

                </div>
            <!-- /.navbar-collapse -->
            </div>
        <!-- /.container -->
        </div>
    </nav>

    <!-- Architecture Section -->
    <section id="architecture" class="architecture-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <img src="pictures/CGI - Exterior.jpg" width="90%" alt="Exterior">
                    <h4>Luxury Living in Highfield Terraces</h4>
                    <div class="text-architeture">
                        <span>
                            <br>A stylish development representing an opportunity to position yourself within walking distance to the cosmopolitan lifestyle of Cronulla Beach.
                            <br><br>The quality design and modern finishes to the finest detail make these captivating 4 bedroom terrace homes the benchmark for residential living never before seen in Caringbah. 
                            <br><br>Designed by award winning architect Damian Scard and built by the reputable Astute Constructions, these stunning homes are highly private, secure and offer easy-care living. The beautifully presented homes feature open plan living with quality timber flooring, gourmet kitchens, stone benchtops and Miele appliances.
                            <br><br>Perfectly positioned in the heart of Caringbah and minutes away from Caringbah Shopping Village, Miranda Fair and the train station make Highfield Terraces the ideal address.
                            <br><br>
                            <CENTER><a class="page-scroll" href="#contact";>Please contact our Sales Team at SOHO for further detail. </a></CENTER>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Terracest Section -->
    <section id="terraces" class="terraces-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h1>Terraces</h1>
                    <br>
                    <!-- Carousel -->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img class="first-slide" src="pictures/CGI - living.jpg" width="90%" alt="First slide">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <!-- <h2>Photo 1</h2> -->
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img class="second-slide" src="pictures/CGI - Bedroom.jpg" width="90%" alt="Second slide">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <!-- <h2>Photo 2</h2> -->
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img class="third-slide" src="pictures/CGI - kitchen.jpg" width="90%" alt="Third slide">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <!-- <h2>Photo 3</h2> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>                 
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="schedule" class="schedule-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h1>Finish Schedule</h1>
                    <br>
                    <div class="text-center">
                        <span>Building designed to comply with the conditions of all relevant Acts and Australian Standard Codes including Fire, Acoustic & Impact Provisions. </span>
                    </div>
                    <br>
                    <div class="texto-schedule">
                        <dl class="dl-horizontal">                  
                            <div class="titulo-schedule">    
                                <h5>INTERNAL</h5>
                            </div>
                        </dl>
                        <dl class="dl-horizontal">
                            <div class="texto-schedule">
                                <dt>WALLS: </dt><dd></dd>                   
                                <dt>Ground Floor:</dt>              <dd>Full brick with gyprock sheeting</dd>
                                <dt>First  Floor: </dt>             <dd>Timber with gyprock sheeting</dd>
                                <dt>Attic Floor: </dt>              <dd>Timber with gyprock sheeting</dd>
                                <br>
                                <dt>FLOORS:</dt>  <dd></dd>           
                                <dt>Basement Floor:</dt>            <dd>Concrete</dd>
                                <dt>Ground Floor: </dt>             <dd>Concrete</dd>
                                <dt>First Floor: </dt>              <dd>Timber</dd>
                                <dt>Attic Floor:</dt>               <dd>Timber</dd>
                            </div>
                        </dl>
                        <dl class="dl-horizontal">                          
                            <div class="texto-schedule">    
                                <dt>SECURITY: </dt>                 <dd>Burglar alarm system video intercom</dd>
                                <dt>INTERNET/ TV/TEL:</dt>          <dd>Internet 4/tel/ pay & free-to-air tv connections  </dd>
                                <dt>AIR COND. / HEATING:</dt>       <dd>Daikin fully ducted reverse cycle</dd> 
                                <dt>&nbsp;</dt>                     <dd>Gas heater connection bayonet in living area</dd>
                                <dt>DOOR HARDWARE:</dt>             <dd>Stainless steel finish</dd>
                                <dt>LIVING / DINING/HALLWAY:</dt>   <dd>Engineered timber </dd>
                                <dt>LIGHTING:</dt>                 <dd>LED downlights </dd>
                            </div>
                        </dl>  

                        <dl class="dl-horizontal">
                            <div class="titulo-schedule">  
                                <h5>EXTERNAL</h5>
                            </div>           
                            <div class="texto-schedule"> 
                                <dt>WALLS:</dt>                     <dd>Full brick render/ Timber /Cladding </dd>
                                <dt>PORCHES:</dt>                   <dd>Quality porcelain anti-slip tiles </dd>
                                <dt>GARDEN:</dt>                    <dd>Landscaped</dd>
                                <dt>&nbsp;</dt>                     <dd>Clothes line</dd>
                                <dt>&nbsp;</dt>                     <dd>Water tap</dd>
                                <dt>&nbsp;</dt>                     <dd>Gas bayonet connection</dd>
                            </div>
                        </dl>     

                        <dl class="dl-horizontal">
                            <div class="titulo-schedule">  
                                <h5>ENSUITES &amp; BATHROOMS</h5>
                            </div>
                            <div class="texto-schedule">
                                <dt>Floor: </dt>                     <dd>Quality porcelain tiles </dd>
                                <dt>Walls: </dt>                     <dd>Quality porcelain tiles floor to ceiling</dd>
                                <dt>Vanity: </dt>                    <dd>Timberline wall hung </dd>
                                <dt>Mirrors: </dt>                   <dd>Bevelled edge </dd>
                                <dt>Basin Tapware: </dt>             <dd>Grohe flick mixer</dd>
                                <dt>Bath Tub: </dt>                  <dd>Free-standing</dd>
                                <dt>Shower / Bath Mixer: </dt>       <dd>Grohe hand shower on rail</dd>
                                <dt>Shower Screen: </dt>             <dd>Frameless/Semi-frameless </dd>
                                <dt>Toilet: </dt>                    <dd>Villeroy &amp; Boch suite with soft close seat </dd>
                                <dt>Bathroom Accessories: </dt>      <dd>Quality chrome  </dd>
                            </div>
                        </dl>
                        <dl class="dl-horizontal">
                            <div class="titulo-schedule">  
                                <h5>BEDROOMS</h5>
                            </div>
                            <div class="texto-schedule">
                                <dt>Floor coverings: </dt>           <dd>Premium wool blend carpets</dd>
                                <dt>Wardrobes: </dt>                 <dd>Sliding mirror doors</dd>             
                                <dt>Lighting: </dt>                  <dd>LED downlights </dd>
                            </div>
                        </dl> 
                        <dl class="dl-horizontal">
                            <div class="titulo-schedule">  
                                <h5>KITCHEN</h5>
                            </div>
                            <div class="texto-schedule">
                                <dt>Floors: </dt>                    <dd>Engineered timber </dd>
                                <dt>Cupboards / Drawers: </dt>       <dd>Handle-less polyurethane doors </dd>
                                <dt>Hardware: </dt>                  <dd>Soft closing system</dd>
                                <dt>Splashback: </dt>                <dd>Premium Cesar Stone/glass</dd>
                                <dt>Bench Tops: </dt>                <dd>Premium Cesar Stone </dd>
                                <dt>Sinks: </dt>                     <dd>Under-mount double bowl sink </dd>
                                <dt>Tapware: </dt>                   <dd>Grohe sink mixer</dd>
                                <dt>Dishwasher: </dt>                <dd>Miele semi-integrated</dd>
                                <dt>Gas Cooktop: </dt>               <dd>750mm Miele gas with wok burner</dd>
                                <dt>Oven: </dt>                      <dd>600mm Miele electrical</dd>
                                <dt>Range hood: </dt>                <dd>600mm Miele Slimline stainless-steel</dd>
                                <dt>Lighting: </dt>                  <dd>LED downlights</dd>    
                            </div>
                        </dl>

                        <dl class="dl-horizontal">
                            <div class="titulo-schedule">  
                                <h5>LAUNDRY</h5>
                            </div>
                            <div class="texto-schedule">
                                <dt>Floors:</dt>                    <dd>Quality porcelain tiles</dd>
                                <dt>Walls:</dt>                     <dd>Floor to ceiling quality porcelain tiles  </dd>  
                                <dt>Tub:</dt>                       <dd>Stainless-steel with Grohe sink mixer</dd>
                                <dt>Dryer:</dt>                     <dd>Wall hung </dd>
                            </div>
                        </dl>      
                        <dl class="dl-horizontal">  
                            <div class="titulo-schedule">  
                                <h5>HOT WATER</h5>
                            </div>
                            <div class="texto-schedule">
                                <dt>Hot Water:</dt>                 <dd>Instantaneous gas water heater</dd>
                            </div>     
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="location" class="location-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h1>Location</h1>
                    <br>
                    <div id="map">
                    </div>
                    <br>
                    <h6>238-243 Kingsway, Caringbah</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h1>Contact Us</h1>
                    <br>
                    <br>
                    <div class="class-form-left">
                        <br>
                        <img src="pictures/soho.jpg" width="45%" align="center"  alt="Soho">
                        <br>
                        <p>9281 1588</p>
                    </div>
                    <div class="class-form-right">
                        <form id="frmContato" name="frmContato" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                            <label for="name">Name:</label>
                            </div>
                            <p><input type=text id="name" name="name"></p><br>

                            <div class="font-form">
                            <label>Email: </label>
                            </div>
                            <p><input type=text id="email" name="email"></p><br>

                            <div class="font-form">
                            <label>Message: </label>
                            </div>
                            <p><textarea id="message" name="message" rows="10"></textarea></p><br>
                            <p><input type="button" id="sendMail" name="sendMail" value="Send Email"> <input type="reset" value="Clear Form"></p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer" class="footer-section" >
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <p>&copy; JL Corporation</p>
                </div>
            </div>   
        </div>
    </section>

    <!-- Maps API Javascript -->
    <script src="http://maps.googleapis.com/maps/api/js?AIzaSyBzHeoP089M0b6OLl8Z8J5MerAl9vrV0vA&amp;sensor=false" type="text/javascript"></script>
    <!-- Arquivo de inicialização do map -->
    <script src="js/map.js" type="text/javascript"></script>


    <!-- Caixa de informação -->
    <script src="js/infobox.js" type="text/javascript"></script>

    <!-- Agrupamento dos marcadores -->
    <script src="js/markerclusterer.js" type="text/javascript"></script>

    </body>

</html>
