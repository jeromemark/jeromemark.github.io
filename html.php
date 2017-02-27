<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
body{
	background-image:url("ddd.jpeg");
	background-repeat: no-repeat;
	background-size:cover;
}

.navbar-brand { position: relative; z-index: 2; }

.navbar-nav.navbar-right .btn { position: relative; z-index: 2; padding: 4px 20px; margin: 10px auto; transition: transform 0.3s; }

.navbar .navbar-collapse { position: relative; overflow: hidden !important; }
.navbar .navbar-collapse .navbar-right > li:last-child { padding-left: 22px; }

.navbar .nav-collapse { position: absolute; z-index: 1; top: 0; left: 0; right: 0; bottom: 0; margin: 0; padding-right: 120px; padding-left: 80px; width: 100%; }
.navbar.navbar-default .nav-collapse { background-color: #f8f8f8; }
.navbar.navbar-inverse .nav-collapse { background-color: #222; }
.navbar .nav-collapse .navbar-form { border-width: 0; box-shadow: none; }
.nav-collapse>li { float: right; }

.btn.btn-circle { border-radius: 50px; }
.btn.btn-outline { background-color: transparent; }

.navbar-nav.navbar-right .btn:not(.collapsed) {
    background-color: rgb(111, 84, 153);
    border-color: rgb(111, 84, 153);
    color: rgb(251, 255, 255);
}

.navbar.navbar-default .nav-collapse,
.navbar.navbar-inverse .nav-collapse {
    height: auto !important;
    transition: transform 0.3s;
    transform: translate(0px,-50px);
}
.navbar.navbar-default .nav-collapse.in,
.navbar.navbar-inverse .nav-collapse.in {
    transform: translate(0px,0px);
}


@media screen and (max-width: 767px) {
    .navbar .navbar-collapse .navbar-right > li:last-child { padding-left: 15px; padding-right: 15px; } 
    
    .navbar .nav-collapse { margin: 7.5px auto; padding: 0; }
    .navbar .nav-collapse .navbar-form { margin: 0; }
    .nav-collapse>li { float: none; }
    
    .navbar.navbar-default .nav-collapse,
    .navbar.navbar-inverse .nav-collapse {
        transform: translate(-100%,0px);
    }
    .navbar.navbar-default .nav-collapse.in,
    .navbar.navbar-inverse .nav-collapse.in {
        transform: translate(0px,0px);
    }
    
    .navbar.navbar-default .nav-collapse.slide-down,
    .navbar.navbar-inverse .nav-collapse.slide-down {
        transform: translate(0px,-100%);
    }
    .navbar.navbar-default .nav-collapse.in.slide-down,
    .navbar.navbar-inverse .nav-collapse.in.slide-down {
        transform: translate(0px,0px);
    }
}

#content1{
	width:100%;
	height:50%;
	
}
#title1{
	font-family:arial;
	font-size:50px;
	color:orange;
}
#subcontent{
	
	width:32%;
	height: 50%;
	padding-top:15px;
	border-right:5px solid white;
	float:left;
	padding-right: 5px;
}
#subcontent2{
	color:white;
	width:32%;
	height: 50%;
	padding-top:15px;
	float:left;
	padding-left: 7px;
	padding-right: 5px;
}
#subcontent3{
	color:white;
	width:36%;
	height: 50%;
	padding-top:15px;
	border-left:5px solid white;
	float:left;
	padding-left: 7px;
	
}
.htmlcon{
	color:White;
	font-size:15px;
}
.htm1{
	color:orange;
	font-size:20px;
}	
.htm{
	color:orange;
	font-size:20px;
}	

</style>
</head>
<body>

<div class="container-fluid">
    
    <!-- Second navbar for search -->
    <nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">MY HOMEPAGE</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-3">
          <ul class="nav navbar-nav navbar-right">
           <li><a href="home.php">HOME</a></li>			
            <li><a href="php.php">PHP</a></li>
            <li><a href="css.php">CSS</a></li>
            <li><a href="html.php">HTML</a></li>
            <li>
              <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse3" aria-expanded="false" aria-controls="nav-collapse3">Search</a>
            </li>
          </ul>
          <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse3">
            <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" />
              </div>
              <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </form>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    

<div class="[ container ]">
    <div class="[ row ]">
	 <div id="content1">
				<center ID="title1">
					HTML
				</center>
				<div id="subcontent">
					<a class="htmlcon"><b class="htm">HTML-</b> <u>Hypertext Markup Language</u>, a standardized system for tagging text files to achieve font, color, graphic, and hyperlink effects on World Wide Web pages.
					</a>
					<p></p>
					
					<p class="htm1"><b>*COMMON HTML TAGS</b></p>
					<p></p>
					<p class="htmlcon"> <b class="htm">TITLE tag</b> is required in all HTML documents and it defines the title of the document.
					</p>
					<p class="htmlcon"> <b class="htm">HEAD tag</b> is a container for all the head elements. The head element can include a title for the document, scripts,  styles, meta information, and more. The following elements can go  inside the head element: title tag (this element is required in an HTML document)
					</p>
					<p class="htmlcon"> <b class="htm">BODY tag</b> contains the entire content of a webpage.  It must be the second element inside of the parent html element,  following only the head element.
					</p>
					<br>
					<br>
					<br>
					
					
				</div>
			
				<div id="subcontent2">
					<p class="htm1"><b>*OTHER HTML TAGS</b></p>
					<p class="htmlcon"> <b class="htm">CENTER tag</b> the entire content of this element is centered horizontally within its containing element (typically, the <body> ). This tag has been deprecated in HTML 4 (and XHTML 1) in favor of the CSS text-align property, which can be applied to the div tag element or to an individual p tag .
					</p>
					<p class="htmlcon"> <b class="htm">BR tag</b> also known as break tag, this it to make a line break.
					</p>
					<p class="htmlcon"> <b class="htm">FONT tag</b> specify the font size, font face and color of text.
					</p>
					<p class="htmlcon"> <b class="htm">H1 to H6 tags</b> Defines HTML headings, H1 is the largest heading and H6 is the smallest.
					<p class="htmlcon"> <b class="htm">P tag</b> defines a paragraph.
					</p>
				</div>
				
				<div id="subcontent3">
					<p class="htm1"><b>*BASIC HTML TUTORIAL</b></p>
					<p class="html">NOTE: Maximize the video for better understanding.</p>
					<video width="380" height="380" controls >
					<source src="html2.mp4" type="video/mp4">
				</div>
				
			</div>
			
        <div class="[ col-xs-12 col-md-offset-1 col-md-10 text-center ]">
           
        </div>
    </div>
</div>
</div>
</body>
</html>                                		