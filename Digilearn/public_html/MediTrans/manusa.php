<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Contact Form</title>
  <script src="https://www.gstatic.com/firebasejs/3.9.0/firebase.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="manusa.js"></script>
  <script>
  function juil()
  {
    document.getElementById("olopo").innerHTML = "SUBMITTED!!";
  }
  </script>
</head>

<body>
  <center>
    <div class="container">
      <div class="content" id="fooman">
        <!--target="_blank"-->
        <p>
          <h1>Contact form</h1>
		  <hr>
		  <h3>Country is for USA<br>
		  Change in app settings if wrong</h2>
        </p>
        <hr>
        <form data-toggle="validator" id="forma" class="js-form">
          <div id="oool" class="oool">
            <div class="form-group input-group input-group-lg">
              <label for="inpName" class="control-label">Your Name*: </label>
              <input type="text" id="name" placeholder="Name" name="name" class="form-control" required></input>

              <br><br>
              <label for="inpemail" class="control-label">Email*: </label>
              <input type="email" id="email" placeholder="Email" class="form-control"></input><br><br>

              <label for="text">Description*:</label><br>
              <textarea id="textt" name="textt" placeholder="Content" rows="5" style="width:100%"></textarea><br><br>

              <label for="text">Experience*:</label><br>
              <input type="text" id="exp" placeholder="Exp" name="exp" required></input><br><br>
			  
			  <label for="text">Image url(optional):</label><br>
              <input type="text" id="url" placeholder="Exp" name="url"></input><br><br>

              <label for="text">Home or office:</label><br>
              <input type="text" id="hf" placeholder="Work type" name="hf" required></input><br><br>

              <label for="text">Companies worked in(optional):</label><br>
              <input type="text" id="cweb" name="cweb" placeholder="(comma seperated)"></input><br><br>


              <label for="text">Phone no(if any):</label><br>
              <input type="text" id="phone" name="phone" placeholder="Phone"></input><br><br>

              <!--label for="text">Country:</label><br>
              <label class="radio-inline"><input type="radio" name="optradio" value="USA" id="opt" required>USA</label>
              <label class="radio-inline"><input type="radio" name="optradio" value="India" id="opt">India</label-->

            </div>
          </div>
          <button id="genbutton" class="btn btn-primary" onclick="juil()">Generate</button>
        </form>
      </div>
    </div>
  </div>
  <div id="olopo" class="hidden"></div>
</center>
<p><br><br></p></body>

</html>
