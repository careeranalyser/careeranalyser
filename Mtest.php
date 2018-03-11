<?php
$options =array();
for ($i=1;$i<=32;$i++)
{
    $options[$i]='
        <td><div class="radio">
            <label style="font-size: 2.5em">
                <input type="radio" name="optradio'.$i.'" value="1">
                <span class="cr"><i class="cr-icon fa fa-check" style="color:#ee7600;"></i></span>
                
            </label>
        </div></td>
        
        <td><div class="radio" style="padding-top:4px">
            <label style="font-size: 2em">
                <input type="radio" name="optradio'.$i.'" value="2">
                <span class="cr"><i class="cr-icon fa fa-check " style="color:#ee7600;"></i></span>
                
            </label>
        </div></td>
        
        <td><div class="radio" style="padding-top:8px">
            <label style="font-size: 1.5em">
                <input type="radio" name="optradio'.$i.'" value="3">
                <span class="cr"><i class="cr-icon fa fa-check" style="color:#ee7600;"></i></span>
                
            </label>
        </div></td>
        
        <td><div class="radio" style="padding-top:4px">
            <label style="font-size: 2em">
                <input type="radio" name="optradio'.$i.'" value="4">
                <span class="cr"><i class="cr-icon fa fa-check" style="color:#ee7600;"></i></span>
            
            </label>
        </div></td>
        
        <td><div class="radio">
            <label style="font-size: 2.5em">
                <input type="radio" name="optradio'.$i.'" value="5">
                <span class="cr"><i class="cr-icon fa fa-check" style="color:#ee7600;"></i></span>
            
            </label>
        </div></td>
        
        
        
        ';
       
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Career Analyser</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
<body id="page-top">
    
    
    
    <style>
    .checkbox label:after, 
.radio label:after {
    content: '';
    display: table;
    clear: both;
}

.checkbox .cr,
.radio .cr {
    position: relative;
    display: inline-block;
    border: 1px solid #a9a9a9;
    border-radius: .25em;
    width: 1.3em;
    height: 1.3em;
    float: left;
    margin-right: .5em;
}



.checkbox .cr .cr-icon,
.radio .cr .cr-icon {
    position: absolute;
    font-size: .8em;
    line-height: 0;
    top: 50%;
    left: 20%;
}

.radio .cr .cr-icon {
    margin-left: 0.04em;
}

.checkbox label input[type="checkbox"],
.radio label input[type="radio"] {
    display: none;
}

.checkbox label input[type="checkbox"] + .cr > .cr-icon,
.radio label input[type="radio"] + .cr > .cr-icon {
    transform: scale(3) rotateZ(-20deg);
    opacity: 0;
    transition: all .3s ease-in;
}

.checkbox label input[type="checkbox"]:checked + .cr > .cr-icon,
.radio label input[type="radio"]:checked + .cr > .cr-icon {
    transform: scale(1) rotateZ(0deg);
    opacity: 1;
}

.checkbox label input[type="checkbox"]:disabled + .cr,
.radio label input[type="radio"]:disabled + .cr {
    opacity: .5;
}
</style>
  
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Career Analyser</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
		   <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="ptest.html">Take test</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="dendrogram.html">Career Options</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact_professional.php">Contact Professionals</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <div class="test">
<center>
  <h1>
    Career Test
  </h1>
<br><br><br>
<p >
For each pair, you must choose where on the scale between them you think you are. 
For example, if the pair is “angry” versus “calm”, you should tick the box near angry if you are always angry and never calm,
 a center box if you are half and half, etc. On the page after that there are scoring instructions.  
</p>
</center>

<form action="result.php" method="post">
 <div class="rb-box">
  <table  class="table  ">
    <tbody>
      
<!-- *************************************************************************** -->
      <tr>
         <th class="rtr">
          Makes lists
        </th>
        <?php echo $options[1];?>
        <th class="ltr">
          relies on memory
        </th>
      </tr>
<!-- *************************************************************************** -->
<!-- ***************************************************************************-->
      <tr>
        <th class="rtr">
          sceptical
        </th>
        <?php echo $options[2];?>
        <th class="ltr">
          wants to believe
        </th>
      </tr>
<!-- *************************************************************************** -->
<!-- *************************************************************************** -->
      <tr>
        <th class="rtr">
          bored by time alone
        </th>
        <?php echo $options[3];?>
        <th class="ltr">
          needs time alone
        </th>
      </tr>
<!-- *************************************************************************** -->
<!-- *************************************************************************** -->
      <tr>
        <th class="rtr">
          accepts things as they are
        </th>
      <?php echo $options[4];?>
        <th class="ltr">
          unsatisfied with the ways things are
        </th>
      </tr>
<!-- ***************************************************************************-->
<!-- *************************************************************************** -->
      <tr>
        <th class="rtr">
          keeps a clean room
        </th>
       <?php echo $options[5];?>
        <th class="ltr">
          just puts stuff where ever
        </th>
      </tr>
<!-- *************************************************************************** -->
<!-- *************************************************************************** -->
      <tr>
        <th class="rtr">
          thinks "robotic" is an insult
        </th>
      <?php echo $options[6];?>
        <th class="ltr">
          strives to have a mechanical mind
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          energetic
        </th>
     <?php echo $options[7];?>
        <th class="ltr">
          mellow
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          prefer to take multiple choice test
        </th>
     <?php echo $options[8];?>
        <th class="ltr">
          prefer essay answers
        </th>
      </tr>

<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          chaotic
        </th>
       <?php echo $options[9];?>
        <th class="ltr">
          organized
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          easily hurt
        </th>
       <?php echo $options[10];?>
        <th class="ltr">
          thick-skinned
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          works best in groups
        </th>
      <?php echo $options[11];?>
        <th class="ltr">
          works best alone
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          focused on the present
        </th>
        <?php echo $options[12];?>
        <th class="ltr">
          focused on the future
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          plans far ahead
        </th>
    <?php echo $options[13];?>
        <th class="ltr">
          plans at the last minute
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          wants people's respect
        </th>
       <?php echo $options[14];?>
        <th class="ltr">
          wants their love
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          gets worn out by parties
        </th>
        <?php echo $options[15];?>
        <th class="ltr">
          gets fired up by parties
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          fits in
        </th>
       <?php echo $options[16];?>
        <th class="ltr">
          stands out
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          keeps options open
        </th>
     <?php echo $options[17];?>
        <th class="ltr">
          commits
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          wants to be good at fixing thgs
        </th>
  <?php echo $options[18];?>
        <th class="ltr">
          wants to be good at fixing people
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          talks more
        </th>
    <?php echo $options[19];?>
        <th class="ltr">
          listens more
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          when describing an event, will tell people what happened

        </th>
   <?php echo $options[20];?>
        <th class="ltr">
          when describing an event, will tell people what it meant
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          gets work done right away
        </th>
      <?php echo $options[21];?>
        <th class="ltr">
          procrastinates
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          follows the heart
        </th>
       <?php echo $options[22];?>
        <th class="ltr">
          follows the head
        </th>
      </tr>
<!-- *************************************************************************** -->
<!-- *************************************************************************** -->
       <tr>
        <th class="rtr">
          stays at home
        </th>
      <?php echo $options[23];?>
        <th class="ltr">
          goes out on the town
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          wants the big picture
        </th>
      <?php echo $options[24];?>
        <th class="ltr">
          wants the details
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          improvises
        </th>
        <?php echo $options[25];?>
        <th class="ltr">
          prepares
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          bases morality on justice
        </th>
       <?php echo $options[26];?>
        <th class="ltr">
          bases morality on compassion
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          finds it difficult to yell very loudly
        </th>
       <?php echo $options[27];?>
        <th class="ltr">
          yelling to others when they are far away comes naturally
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          theoretical 
        </th>
        <?php echo $options[28];?>
        <th class="ltr">
          empirical
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          works hard
        </th>
       <?php echo $options[29];?>
        <th class="ltr">
          plays hard
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          uncomfortable with emotions
        </th>
      <?php echo $options[30];?>
        <th class="ltr">
          values emotions
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          likes to perform in front of other people
        </th>
      <?php echo $options[31];?>
        <th class="ltr">
          avoids public speaking
        </th>
      </tr>
<!--- *************************************************************************** -->
<!--- *************************************************************************** -->
      <tr>
        <th class="rtr">
          likes to know "who?", "what?","when?"
        </th>
       <?php echo $options[32];?>
        <th class="ltr">
          likes to know "why?"
        </th>
      </tr>
<!-- *************************************************************************** -->
<tr><td colspan="9"><center><button type="submit" class="btn btn-success ">Submit</button>
</center></td></tr>


    </tbody>
  </table>
</div>
</form>
</div>

 <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

   

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
