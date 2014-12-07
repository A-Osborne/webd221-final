<!DOCTYPE HTML>
<html>
	<head>
		<title>Assignment #4 - Final - <?php echo $page_title; ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/main.css">
	</head>

	<body>
      <header>

        <div id="mainNav">
          <div class="container">
            <h1 class="logo"><span class="colourChange">UI</span>Brush</h1>
            <nav>
              <ul>
                <li <?php if($page_title == "Home") {echo 'class="active"';} ?>><a href="index.php">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li <?php if($page_title == "Services") {echo 'class="active"';} ?>><a href="services.php">Services</a></li>
                <li <?php if($page_title == "Portfolio") {echo 'class="active"';} ?>><a href="portfolio.php">Portfolio</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </nav>
          </div>  <!--  /CONTAINER   -->
        </div>
      </header>