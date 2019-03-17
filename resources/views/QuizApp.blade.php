
<!DOCTYPE html>
<html>
<head>
  <title>QUIZ QUESTION</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
  <link rel="stylesheet" type="text/css" href="css/quiz.css">

</head>
<body>
  <div id="quizContainer" class="container">
    <h2 style="text-align: center; color: #08038C">GOD'S LIBERTY COMPUTER INSTITUTION EXAMINATION</h2>
      <div class="title">Computer Quiz</div>
      
      <div id="question" class="question"></div>
      <label class="option"><input type="radio" name="option" value="1"/><span id="opt1"></span> </label>
      <label class="option"><input type="radio" name="option" value="2"/><span id="opt2"></span> </label>
      <label class="option"><input type="radio" name="option" value="3"/><span id="opt3"></span> </label>
      <label class="option"><input type="radio" name="option" value="4"/><span id="opt4"></span> </label>
      <button id="nextButton" class="next-btn" onclick="loadNextQuestion();">Next Question</button>
  </div>
  <div id="result" class="container result" style="display: none;"></div>
  <script src="js/question.js"></script>
  <script src="js/quiz-script.js"></script>
</body>
</html>