<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="COS10026: Proxy Quiz" />
  <meta name="keywords" content="HTML, Forms" />
  <meta name="author" content="Alex Nikolov" />
  <link href="styles/style.css" rel="stylesheet"/>
  
  <!--Reference to external responsive CSS File-->
  <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>

  <title>Proxy Description</title>
</head>
<body>

<?php include 'header.inc'; ?>

<?php include 'menu.inc'; ?>


  <div id="article1">

  <h4>
    This page is meant to help assess what you have learned about quizes.
  </h4>

  <form method="post" action="markquiz.php" novalidate=”novalidate”>
    <fieldset>
      <legend class="studentdetails">
        <h4>Student Details</h4>
      </legend>

      <p><label for="studentid">Student ID</label> 
        <input type="text" name="studentid" id="studentid" pattern="\d{7,10}" size="10" required="required"/>
      </p>
      <p>
        <label for="firstname">Given Name</label> <input type="text" name="firstname" id="firstname" pattern="[A-Za-z \-]{1,30}" size="20" required="required"/>
      </p>
      <p>
        <label for="lastname">Last Name</label> <input type="text" name="lastname" id="lastname" pattern="[A-Za-z \-]{1,30}" size="20" required="required"/>
      </p>
    </fieldset>

    <fieldset class="questionsection">
      <legend>
        <h4>Question Section</h4>
      </legend>

      <p>
        <label for="textquestion">What is the most common type of proxy?:<br></label>
        <textarea id="textquestion" name="textquestion" rows="6" cols="40" placeholder="Type your answer here..."></textarea>
      </p>
      <p>
        When using a well secured proxy service, who cannot see what websites you are accessing?<br>
        <label for="a">Your ISP</label> <input type="radio" id="a" name="multiplechoice1" value="a" required="required"/><br>
        <label for="b">The website you are trying to access</label> <input type="radio" id="b" name="multiplechoice1" value="b"/><br>
        <label for="c">The proxy service</label> <input type="radio" id="c" name="multiplechoice1" value="c"/><br>
        <label for="d">None of the above</label> <input type="radio" id="d" name="multiplechoice1" value="d"/><br>
			</p>
      <p><label for="dropdownmultichoice">Which of the following can a proxy server mask to an end website?<br></label> 
        <select name="dropdownmultichoice" id="dropdownmultichoice" required="required">
          <option value="">Please Select</option>
          <option value="a">Your Private IP address</option>			
          <option value="b">Your Public IP address</option>
          <option value="c">Which web-pages you are accessing</option>
          <option value="d">What account you are logging in to</option>
        </select>
      </p>
			<p> For which of the following can a proxy be used?<br>
        
				<input type="checkbox" id="OptionA" name="multicheckbox[]" value="OptionA"/>
        <label for="OptionA">Increased Security</label> <br>
				<input type="checkbox" id="OptionB" name="multicheckbox[]" value="OptionB"/>
        <label for="OptionB">Decreased Website Loading Time</label> <br>
				<input type="checkbox" id="OptionC" name="multicheckbox[]" value="OptionC"/>
        <label for="OptionC">Bypassing Instagram Passwords</label><br>
				<input type="checkbox" id="OptionD" name="multicheckbox[]" value="OptionD"/>
        <label for="OptionD">Circumventing Geo-Blocking</label> <br>
				<input type="checkbox" id="OptionE" name="multicheckbox[]" value="OptionE"/>
        <label for="OptionE">Circumventing Censorship</label> <br>
			</p>
      <p>
        <label for="numberQuestion">How many different types of proxy are there?</label> 
        <input type="text" name= "numericalQuestion" id="numberQuestion" placeholder="0...99" pattern="\d{1,2}" required/>
      </p>
    </fieldset>

    <input type= "submit" value="Submit"/>
    <input type= "reset" value="Reset Quiz"/>
  </form>

</div>
</div>

<?php include 'footer.inc';?>

</body>
</html>
