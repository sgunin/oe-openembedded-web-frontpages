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
     
      <div class="jumbotron jumbo-reduce-padding">
        <div class="row">
          <div class="col-md-2">
            <img class="img-responsive" src="images/logo.png">
          </div>
          <div class="col-md-10">
            <h2 class="text-center unified-margin"><strong>Welcome to OpenEmbedded</strong></h2>
            <p class="text-center spacer">
              OpenEmbedded is a build framework for embedded Linux. It offers a best-in-class 
              cross-compile environment and  allows developers to create a complete custom Linux 
              Distribution.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-success">
            <div class="panel-heading"><h4 class="text-center no-margin"><strong>Support</strong></h4></div>
            <ul class="list-group">
              <li class="list-group-item"><strong>Architectures | </strong>ARM, PPC, X86, MIPS and more</li>
              <li class="list-group-item"><strong>C Libraries | </strong>EGLIBC and uClibc</li>
              <li class="list-group-item"><strong>Optimisations | </strong>Hard Float, SIMD, VFP, etc..</li>
              <li class="list-group-item"><strong>Virtualisation | </strong>ARM, PPC, MIPS[64], X86[_64]</li>
              <li class="list-group-item">and more, see the <a href='#'>Documentation</a> for information!</li>
            </ul>
          </div>
        </div>
       <div class="col-md-4">
          <div class="panel panel-warning">
            <div class="panel-heading"><h4 class="text-center no-margin"><strong>Advantages</strong></h4></div>
            <ul class="list-group">
              <li class="list-group-item"><span class="glyphicon glyphicon-arrow-right"></span> Modular design, easy to add third party repos</li>
              <li class="list-group-item"><span class="glyphicon glyphicon-arrow-right"></span> Supports a multitude of hardware architectures</li>
              <li class="list-group-item"><span class="glyphicon glyphicon-arrow-right"></span> Supports building with advanced optimisations</li>
              <li class="list-group-item"><span class="glyphicon glyphicon-arrow-right"></span> Shared cache system, cuts down re-build time</li>
              <li class="list-group-item">and more, see the <a href='#'>Documentation</a> for information!</li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-info">
            <div class="panel-heading"><h4 class="text-center no-margin"><strong>Available Recipes</strong></h4></div>
            <ul class="list-group">
              <li class="list-group-item"><strong>Display Servers | </strong>X11 and Wayland</li>
              <li class="list-group-item"><strong>Desktops | </strong>Gnome, KDE, Enlightenment and more</li>
              <li class="list-group-item"><strong>Development | </strong>GCC, GDB, Perf, Valgrind, etc..</li>
              <li class="list-group-item"><strong>Init Support | </strong>SysV and systemd</li>
              <li class="list-group-item">search the <a href='#'>Layer Index</a> to see the full selection!</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title text-center"><strong>OpenEmbedded and The Yocto Project</strong></h3>
            </div>
            <div class="panel-body">
              <table>
                <tr>
                  <td>
                    <p>PLACEHOLDER TEXT - The Yocto Project provides resources and information catering to both new and experienced users, and includes core system component recipes provided by the OpenEmbedded project. The Yocto Project also provides pointers to example code built demonstrating its capabilities.</p>
                  </td>
                  <td>
                    <img src="images/umbrella.png" width="200px">
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title text-center"><strong>Recent News</strong></h3>
            </div>
            <div class="panel-body">
              <ul>
                <li><strong>2013-05-21</strong> OpenEmbedded will have a stand at LinuxTag in Berlin. See you there!</li>
                <li class="spacer"><strong>2013-01-22</strong> OpenEmbedded will have a stand at Europe's largest free software conference - FOSDEM 2013 in Brussels. See you there!</li>
                <li class="spacer"><strong>2012-08-31</strong> Meta-webos added</li>
                <li class="spacer"><strong>2012-07-16</strong> Meta-systemd moved from meta-oe</li>
              </ul>
            </div>
          </div>
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
