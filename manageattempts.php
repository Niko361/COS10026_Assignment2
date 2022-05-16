<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="COS10026: Attempts page" />
  <meta name="keywords" content="HTML, Forms" />
  <meta name="author" content="Jerrold Wong Youn Zhuet" />
  <link href="styles/style.css" rel="stylesheet"/>
  
  <!--Reference to external responsive CSS File-->
  <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>

  <title>Manage Attempts</title>
</head>
<body>

  <header>
		<a href="index.html"><img src="styles/images/home.jpg" alt="homebutton" height="60"></a>
		<h1>Proxy Quiz</h1>
  </header> 

  <div class="content">

    <nav>
      <p class="menu" ><a href="index.html">Introduction</a></p> 
      <p class="menu"><a href="topic.html">Topic Description</a> </p> 
      <p class="menu"><a class="active" href="quiz.html">Quiz</a></p> 
      <p class="menu"><a href="enhancements.html">Enhancements</a></p> 
    </nav>

  <div id="article1">

  <h4>
    This page is meant for queries on attempts.
  </h4>

  <form action="manage.php" method="get" >
    <fieldset>
      <legend class="liststudentattempt">
        <h4>List Particular Student's Attempt</h4>
      </legend>

      <p><label for="listattempt">Student ID/Name </label> 
        <input type="text" name="listattempt" id="listattempt" pattern="[a-zA-Z0-9 ]+" size="15"/>
      </p>
    </fieldset>

    <fieldset class="deleteattempt">
      <legend>
        <h4>Delete All Attempts of a Student</h4>
      </legend>

      <p><label for="deleteattempt">Student ID </label> 
        <input type="text" name="deleteattempt" id="deleteattempt" pattern="\d{7,10}" size="10"/>
      </p>
	</fieldset>
	
	<fieldset class="changescore">
	  <legend>
		<h4>Changing Score for Quiz Attempt</h4>
	  </legend>
	  
	  <p><label for="changescoreID">Student ID </label> 
        <input type="text" name="changescoreID" id="changescoreID" pattern="\d{7,10}" size="10"/>
      </p>
	  <p><label for="changescorenumber">Attempt Number </label> 
        <input type="text" name="changescorenumber" id="changescorenumber" pattern="\d{1}"size="1" maxlength="1"/>
      </p>
	  <p><label for="changescorevalue">Change Score </label> 
        <input type="text" name="changescorevalue" id="changescorevalue" pattern="\d{3}" size="3" maxlength="3"/>
      </p>
	</fieldset>

	<fieldset class="querymultichoice">
	  <legend>
		<h4>List Attempts</h4>
	  </legend>
      <p><label for="querymultichoice">Which of the following can a proxy server mask to an end website?<br></label> 
        <select name="querymultichoice" id="querymultichoice">
          <option value="" selected>Please Select</option>
          <option value="a">List all attempts</option>			
          <option value="b">List all who got 100% on first attempt</option>
          <option value="c">List all who got less than 50% on second attempt</option>
        </select>
      </p>
	</fieldset><br><br>
    
    <input type= "submit" value="Check"/>
  </form>

</div>
</div>

  <footer>
		<p>COS10026</p>
		<p>&#169; Swinburne University of Technology</p>
    <p>Group Assignment Part 1</p>
    <a href="mailto:103831724@student.swin.edu.au">103831724@student.swin.edu.au</a>
    <a href="mailto:103986022@student.swin.edu.au">103986022@student.swin.edu.au</a>
    <a href="mailto:1103843949@student.swin.edu.au">1103843949@student.swin.edu.au</a>
    <a href="mailto:100595852@student.swin.edu.au">100595852@student.swin.edu.au</a>
    <a href="mailto:1103500118@student.swin.edu.au">1103500118@student.swin.edu.au</a>		
	</footer>

</body>
</html>
