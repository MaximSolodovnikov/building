<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png">

    <title>Off Canvas Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- My CSS -->
    <link href="css/mystyle.css" rel="stylesheet">
	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Название сайта &nbsp; &nbsp; </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Главная</a></li>
            <li><a href="#about">Портфолио</a></li>
            <li><a href="#contact">Контакты</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Переключить навигацию</button>
          </p>
          <div class="jumbotron">
            
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
				<div class="item active">
				  <img class="border_rad_for_carousel" src="img/slider/technics-q-c-950-300-7.jpg" alt="...">
				  <div class="carousel-caption">
					<!-- Описание фото № 1 -->
				  </div>
				  Описание под первым фото
				</div>
				<div class="item">
				  <img src="img/slider/technics-q-c-950-300-9.jpg" alt="...">
				  <div class="carousel-caption">
					<!-- Описание фото № 2 -->
				  </div>
				   Описание под вторым фото
				</div>
				<div class="item">
				  <img src="img/slider/technics-q-c-950-300-1.jpg" alt="...">
				  <div class="carousel-caption">
					<!-- Описание фото № 3 -->
				  </div>
				  Описание под третьим фото
				</div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><img class="arrow_slider" src="img/slider/arrow-left.png" alt="..."></a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><img class="arrow_slider" src="img/slider/arrow-right.png" alt="..."></a>
			</div>
			
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				  <a href="#"><img src="http://lorempixel.com/400/200" alt=""></a>
				  <div class="caption">
					<h3><a href="#">Thumbnail label</a></h3>
					<p class="description_text">This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
					<p><a href="#" class="btn btn-primary" role="button">Подробнее &raquo; </a></p>
				  </div>
				</div>
			</div><!--/.col-sm-6 col-md-4-->
            <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				  <a href="#"><img src="http://lorempixel.com/400/200/sports/Dummy-Text" alt=""></a>
				  <div class="caption">
					<h3><a href="#">Thumbnail label</a></h3>
					<p class="description_text">This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
					<p><a href="#" class="btn btn-primary" role="button">Подробнее &raquo; </a></p>
				  </div>
				</div>
			</div><!--/.col-sm-6 col-md-4-->
            <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				  <a href="#"><img src="http://lorempixel.com/400/200/sports" alt=""></a>
				  <div class="caption">
					<h3><a href="#">Thumbnail label</a></h3>
					<p class="description_text">This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
					<p><a href="#" class="btn btn-primary" role="button">Подробнее &raquo; </a></p>
				  </div>
				</div>
			</div><!--/.col-sm-6 col-md-4-->
            <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				  <a href="#"><img src="http://lorempixel.com/400/200/sports/1" alt=""></a>
				  <div class="caption">
					<h3><a href="#">Thumbnail label</a></h3>
					<p class="description_text">This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
					<p><a href="#" class="btn btn-primary" role="button">Подробнее &raquo; </a></p>
				  </div>
				</div>
			</div><!--/.col-sm-6 col-md-4-->
            <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				  <a href="#"><img src="http://lorempixel.com/400/200/sports/2" alt=""></a>
				  <div class="caption">
					<h3><a href="#">Thumbnail label</a></h3>
					<p class="description_text">This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
					<p><a href="#" class="btn btn-primary" role="button">Подробнее &raquo; </a></p>
				  </div>
				</div>
			</div><!--/.col-sm-6 col-md-4-->
            <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				  <a href="#"><img src="http://lorempixel.com/400/200/sports/3" alt=""></a>
				  <div class="caption">
					<h3><a href="#">Thumbnail label</a></h3>
					<p class="description_text">This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
					<p><a href="#" class="btn btn-primary" role="button">Подробнее &raquo; </a></p>
				  </div>
				</div>
			</div><!--/.col-sm-6 col-md-4-->
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">

			<ul class="nav nav-pills nav-stacked">
				<li><a href="#" class="list-group-item active">СТРОИТЕЛЬСТВО ДОМА</a></li>
				<li><a href="#" class="list-group-item">ЛАНДШАФТНЫЙ ДИЗАЙН</a></li>
				<li><a href="#" class="list-group-item">САНТЕХНИКА</a></li>
				<li><a href="#" class="list-group-item">ЭЛЕКТРИКА</a></li>
			</ul>
		  
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; 2015 Company, Inc.</p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/offcanvas.js"></script>
  </body>
</html>
