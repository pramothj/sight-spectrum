<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 9px;
  margin-left:500px;
margin-top:200px;

}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}


.container {
  padding: 4px 16px;




</style>
</head>
<body>


<div class="card">

  <div class="container">
      <div class="info_box">
        <div class="info-list">
<h2> Instructions</h2>
            <div class="info">1. You will have only <span>15 seconds</span> per each question.</div>
            <div class="info">2. Once you select your answer, it can't be undone.</div>
            <div class="info">3. You can't select any option once time goes off.</div>
            <div class="info">4. You can't exit from the Quiz while you're playing.</div>
            <div class="info">5. You'll get points on the basis of your correct answers.</div>
        </div>
        <div class="buttons">
	    <form action="welcome.php">
            <button class="quit">Exit Quiz</button><b>
	    </form>
            <form action="logicalreasoningquestions.php"><b>
            <button class="restart">Continue</button>
	    </form>
        </div>
    </div>

  </div>
</div>

</body>
</html>