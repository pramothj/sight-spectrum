
<!DOCTYPE html>
<html>
<head>
<style>
* {
  margin: 0px;
  padding: 0px;
  font: 16px 'Source Sans Pro', sans-serif;
  border: none;
  box-sizing: border-box;
}

html, body {
  background: #2E706C;
  text-align: center;
  width: 50%;
  height: 50%;
  margin: 5rem;
  bottom: 2rem;
  right: 2rem;
}

html {
  display: table;
}

body {
  display: table-cell;
  vertical-align: middle;
}

#quiz {
  margin: -44px 50px 0px;
  position: relative;
  width: calc(100% - 100px);
}

#quiz h1 {
  color: #FAFAFA;
  font-weight: 600;
  font-size: 36px;
  text-transform: uppercase;
  text-align: left;
  line-height: 44px;
}

#quiz button {
  float: left;
  margin: 8px 0px 0px 8px;
  padding: 4px 8px;
  background: #9ACFCC;
  color: #00403C;
  font-size: 14px;
  cursor: pointer;
  outline: none;
}

#quiz button:hover {
  background: #36a39c;
  color: #FFF;
}

#quiz button:disabled {
  opacity: 0.5;
  background: #9ACFCC;
  color: #00403C;
  cursor: default;
}

#question {
  padding: 20px;
  background: #FAFAFA;
  text-align: center;
}

#question h2 {
  margin-bottom: 16px;
  font-weight: 600;
  font-size: 20px;
}

#question input[type=radio] {
  display: none;
}

#question label {
  display: inline-block;
  margin: 4px;
  padding: 8px;
  background: #FAE3BB;
  color: #4C3000;
  width: calc(50% - 8px);
  min-width: 50px;
  cursor: pointer;
}

#question label:hover {
  background: #EBBB67;
}

#question input[type=radio]:checked + label {
  background: #CB8306;
  color: #FAFAFA;
}

#quiz-results {
  display: flex;
  flex-direction: column;
  justify-content: center;
  position: absolute;
  top: 44px;
  left: 0px;
  background: #FAFAFA;
  width: 100%;
  height: calc(100% - 44px);
}

#quiz-results-message {
  display: block;
  color: #00403C;
  font-size: 20px;
  font-weight: bold;
}

#quiz-results-score {
  display: block;
  color: #31706c;
  font-size: 20px;
}

#quiz-results-score b {
  color: #00403C;
  font-weight: 600;
  font-size: 20px;
}

#quiz-retry-button {

  float: left;
  margin: 8px 0px 0px 8px;
  padding: 4px 8px;
  background: #9ACFCC;
  color: #00403C;
  font-size: 14px;
  cursor: pointer;
  outline: none;
  
}

.img{
  left:10px;
  position:relative;
  top:10px;

}
</style>
<body>
<!--<div class="img">
    <img src="image.jpg">
</div>-->
<h2>QUESTIONS</H2>
<div id="quiz">
  <h1 id="quiz-name"></h1>
  <button id="submit-button">Submit Answers</button>
  <button id="next-question-button">Next Question</button>
  <button id="prev-question-button">Previous</button>
  
  <div id="quiz-results">
    
    <p id="quiz-results-message"></p>
    <p id="quiz-results-score"></p>
    <button id="quiz-retry-button">Retry</button>
    
  </div>
</div>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
</body>
</html>