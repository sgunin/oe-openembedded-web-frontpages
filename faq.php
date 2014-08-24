<!DOCTYPE html>
<html>
  <head>
    <title>OpenEmbedded.org</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">

      <?php include("includes/navbar.php"); ?>
     
			<div class="row">
        <div class="col-md-12">
          <p>FAQ Area</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <hr>
          <p class="text-center text-muted">OpenEmbedded 2013</p>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
      // Hack to get the panels the same height as the row
      boxes = $('.panel');
      maxHeight = Math.max.apply(
        Math, boxes.map(function() {
        return $(this).height();
      }).get());
      boxes.height(maxHeight);
    </script>
  </body>
</html>
