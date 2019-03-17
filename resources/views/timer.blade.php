
<!DOCTYPE html>
<html>
<head>
	<title>EXAM APPLICATION</title>

	<style type="text/css">
		#status{
			width: 600px;
			height: 250px;
			background-color: rgb(227,231,237);
		}
		.countDown{
			color: red;
			margin-top: 100px;
		}
	</style>
</head>
<link rel="stylesheet" type="text/css" href="css/stylequiz.css">
<!-- <link href="{{asset('css2/bootstrap.min.css')}}" rel="stylesheet"> -->
    <!-- bootstrap theme -->
    <!-- <link href="{{asset('css2/bootstrap-theme.css')}}" rel="stylesheet"> -->
<body>
	<section class="intro">
		<div class="inner">
			<div class="content">
				<script type="text/javascript">
					function countDown(secs,elem) {
						var element = document.getElementById(elem);
						element.innerHTML = "<br><br><h2>Please wait for</h2>"+secs+"<h4>seconds</h4>";
						if(secs < 1){
							clearTimeout(timer);
							element.innerHTML='<br><br><h1 style="color:red; font-family:arial;"> !! Test Loaded !!</h1>';
							element.innerHTML += '<a class="btn" href="/quizpage">Start Test</a>'
						}
						secs--;
						var timer=setTimeout('countDown'+secs+,"'elem'",1000);
					}
				</script>
				<div id="status"></div>
				<script type="text/javascript">countDown(10,"status");</script>
			</div>
		</div>
	</section>
</body>
</html>

