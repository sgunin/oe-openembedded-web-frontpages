<?php
	// Work out the button name from the file name
	$current_page = basename($_SERVER['PHP_SELF']);
	$button_name = explode(".", $current_page)[0];
?>

<nav class="navbar navbar-default oe-blue" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"><strong>OpenEmbedded</strong></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li name="index-button"><a href="index.php">Home</a></li>
      <li name="community-button"><a href="community.php">Community</a></li>
      <li name="faq-button"><a href="faq.php">FAQ</a></li>
      <li name="download-button"><a href="download.php">Download</a></li>
      <li name="wiki-button"><a href="http://openembedded.org/wiki/Main_Page">Wiki</a></li>
      <li name="documentation-button"><a href="documentation.php">Documentation</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Patchwork</a></li>
          <li><a href="#">CGit</a></li>
          <li><a href="#">Layer Index</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

<script>
	// Add the active class to the current pages button
	var button = document.getElementsByName("<?php echo($button_name."-button"); ?>");
	button[0].className += "active";
</script>
