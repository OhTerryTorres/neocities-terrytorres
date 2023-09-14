<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'We must help ' . $name . '!'; 
		$to = 'yattaapp@gmail.com'; 
		$subject = 'We must help ' . $name . '!';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! We will be in touch.</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry, something is weird. Please try again later.</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://terry-torres.com/yatta/main.css">
    <link rel="stylesheet" type="text/css" media="only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="http://terry-torres.com/yatta/mobile.css" />
    <title>Yatta, the Achievement Tracker</title>
    <script type="text/javascript">
  <!--
  if (screen.width <= 800) {
    window.location = "http://terry-torres.com/yatta/mobile.php";
  }
  //-->
</script>
  </head>
  <body>
    <div class="nav">
      <div class="container">
        
      </div>
    </div>

    <div id="top" class="jumbotron">
      <div class="container">
	<center>
        <h1>Yatta, the Achievement Tracker</h1>
        <p>Just what you need to game-ify your next field trip, reception, scavenger hunt, bachelor party - any soiree you can think of!</p>
        <a href="https://itunes.apple.com/us/app/yatta-achievement-tracker/id1008732866?ls=1&mt=8">Find it on the App Store</a>
	</center>
      </div>
    </div> 

<div class="learn-more">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-6">
		    <img class="max" src="images/yatta_1_conceive.png">
                </div>
                <div id="title" class="col-xs-12 col-lg-6">
		    <h3>CONCEIVE</h3>
		    <p>Make a list of tricky and/or whimsical achievements that you want your guests to complete at your scavenger hunt, wedding reception, or company outing, and send it to Team Yatta.</p>
		    <p><a href="example.html">Check out some example achievements.</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="learn-more">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-6">
		   <img class="max" src="images/yatta_2_believe.png">
                </div>
                <div id="title" class="col-xs-12 col-lg-6">
		    <h3>BELIEVE</h3>
		    <p>Team Yatta will get you everything you need - your Yatta event, the hashtag your guests need to access it, and guidance throughout the process. </p>
		    <p><a href="#getintouch">Get in touch with Team Yatta.</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="learn-more">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-6">
		    <img class="max" src="images/yatta_3_achieve.png">
                </div>
                <div id="title" class="col-xs-12 col-lg-6">
                    <h3>ACHIEVE</h3>
		    <p>With the <b>Yatta</b> app, guests can participate in friendly competition, share their feats online, and capture the good times from multiple angles.</p>
		    <p><a href="https://itunes.apple.com/us/app/yatta-achievement-tracker/id1008732866?ls=1&mt=8">Get the free app now.</a></p>
                </div>
            </div>
        </div>
    </div>    


        <div class="container">
            <div class="row">
                <div id="detail" class="col-xs-12 col-lg-6">
                    <h3 id="detail">What makes a Yatta event?</h3>
		    <p id="detail"><b>Your achievements.</b></br>Your guests can accomplish these achievements during your event and take photos of them. <a href="http://www.terry-torres.com/yatta/example.html">Here are some ideas</a>.</p>
		    <p id="detail"><b>A #hashtag</b></br>This will act as the code word that give your guests access, and the tag that your guests can use to share it on social media.</p>
		    <p id="detail"><b>Us!</b></br><a href="#getintouch">Contact us</a> with your achievement list, hashtag, and the place/time of your event. We can give you a quote, and get started on your event! If you need ideas for your list or hashtag, we can help.</br></br>Events with fewer than 10 achievements start at <b>$5.99</b>.</p>
		    <p id="detail"><b><a href="https://itunes.apple.com/us/app/yatta-achievement-tracker/id1008732866?ls=1&mt=8">The app</a></b></br>With the hashtag, you can complete your achievements and upload them to the event gallery. Use it to engender competition amongst your guests or to document the event from multiple angles.</p>
                </div>
            </div>
        </div>


<center>

    <div class="learn-more">
        <div id="getintouch" class="container">
		</br>
		<h3>Talk to Team Yatta</h3>
		</br>
            <div class="row">
                <form class="form-horizontal" role="form" method="post" action="">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
	    <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
	    <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message" placeholder="Tell us about your event, your vision, and your ideas for achievements."></textarea>
	    <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-4">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            <?php echo $result; ?>    
        </div>
    </div>
</form> 
            </div>
        </div>
    </div>  

</center>

	<div class="footnote"><center>(C) 2015 Team Yatta / Terry Torres</center></div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>