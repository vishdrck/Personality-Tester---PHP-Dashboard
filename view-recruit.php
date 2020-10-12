<html>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style>
    .border {
        border: 1px solid black;
        border-radius: 4px;
        border-color: black;
        background-color: whitesmoke;
    }
    .text-white {
        color: black;
        font-size: 15px;
    }

    .top {
        padding-top: 20px;
    }
    .dashboard-header {
        padding-top: 5vh;
        color: #C80070;
        text-align: center;
    }
    .item-padding {
        padding: 5px;
    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }

  li {
    float: left;
  }

  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }

  li a:hover:not(.active) {
    background-color: #C8f0f0;
  }

  .active {
    background-color: #C80070;
  }
  .sticky {
    position: fixed;
    top: 0;
    width: 100%;
  }
  .center {
    display: block;
     margin-left: auto;
    margin-right: auto;
  }
</style>
<?php
  session_start();
  include 'db-conn.php';
  echo "<ul clas='sticky'>";
  echo "<li><a class='active' href='index.php'>Home</a></li>";
  echo "<li><a href='dashboard.php'>Dashboard</a></li>";
  echo "<li><a href='/admin-login'>Log out</a></li>";
echo "</ul>";
?>
<div class="container">
<?php
$recruit_id = 0;
$introvert = 0;
$sensing = 0;
$thinking = 0;
$judging = 0;
if(isset($_GET['id']) && isset($_GET['id']) && isset($_GET['introvert']) && isset($_GET['sensing']) && isset($_GET['thinking']) && isset($_GET['judging']) && isset($_GET['aptitude'])) {
  $recruit_id = $_GET['id'];
  $introvert = intval($_GET['introvert']);
  $sensing = intval($_GET['sensing']);
  $thinking = intval($_GET['thinking']);
  $judging = intval($_GET['judging']);
  $aptitude = intval($_GET['aptitude']);
  $percentage = intval($_GET['percentage']);
  $cv = $_GET['cv'];
  $cv = implode('/',array_unique(explode('/', $cv)));
  $personality =  $_GET['personality'];

  $sql = "SELECT id ,full_name, email, phone_number FROM el_form_data WHERE id='$recruit_id'";
  if ($result = mysqli_query($conn, $sql)) {
  $num_of_rows = mysqli_num_rows($result);

  if($num_of_rows = 1) {
    $row_data = mysqli_fetch_array($result);

      echo "<h1 class='dashboard-header'>Candidate Details</h1>";
      echo "<div class='row top'>";
        echo "<img src='images/user_avatar.png' width='100px' class='center' style='padding:10px'>";
      echo "</div>";
      echo "<div class='row'>";
        echo "<div class='col-md-4 border'>";
            echo "<div class='row item-padding'>";
                echo "<div class='col-md-4 item-padding'>";
                    echo "<b>Candidate Name</b>";
                echo "</div>";
                echo "<div class='col-md-8 item-padding'>";
                    echo $row_data['full_name'];   
                echo "</div>";
            echo "</div>";
            echo "<div class='row item-padding'>";
                echo "<div class='col-md-4 item-padding'>";
                    echo "<b>Candidate Email</b>";
                echo "</div>";
                echo "<div class='col-md-8 item-padding'>";
                    echo $row_data['email'];
                echo "</div>";
            echo "</div>";
            echo "<div class='row item-padding'>";
                echo "<div class='col-md-4 item-padding'>";
                    echo "<b>Candidate ID</b>";
                echo "</div>";
                echo "<div class='col-md-8 item-padding'>";
                    echo $row_data['id'];
                echo "</div>";
            echo "</div>";
            echo "<div class='row item-padding'>";
                echo "<div class='col-md-4 item-padding'>";
                    echo "<b>Phone Number</b>";
                echo "</div>";
                echo "<div class='col-md-8 item-padding'>";
                    echo $row_data['phone_number'];
                echo "</div>";
            echo "</div>";
            echo "<div class='row item-padding'>";
                echo "<div class='col-md-4 item-padding'>";
                    echo "<b>Aptitude Test</b>";
                echo "</div>";
                echo "<div class='col-md-8 item-padding'>";
                    echo $aptitude . '/8';
                echo "</div>";
            echo "</div>";
            echo "<div class='row item-padding'>";
                echo "<div class='col-md-4 item-padding'>";
                    echo "<b>Candidate CV</b>";
                echo "</div>";
                echo "<div class='col-md-8 item-padding'>";
                    echo "<a href='$cv'>View CV</a>";
                echo "</div>";
            echo "</div>";
            
        echo "</div>";
        echo "<div class='col-md-8 border'>";
        echo "<div style='padding: 10px;margin:10px;'>";
            echo "<div class='row'>";
                echo "<div class='col-md-2'>";
                    echo "<p><b>Introvert</b></p>";
                echo "</div>";
                echo "<div class='col-md-8 item-padding'>";
                    echo "<div class='progress' style='background-color:red !important;border:1px solid;'>";
                        $style_introvert = "width: " . $introvert . "%;"; 
                        echo "<div class='progress-bar bg-success' role='progressbar' style='$style_introvert' aria-valuemin='0' aria-valuemax='100'></div>";
                    echo "</div>";
                echo "</div>";
                echo "<div class='col-md-2'>";
                    echo "<p><b>Extrovert</b></p>";
                echo "</div>";
            echo "</div>";


            echo "<div class='row'>";
                echo "<div class='col-md-2'>";
                    echo "<p><b>Sensing</b></p>";
                echo "</div>";
                echo "<div class='col-md-8 item-padding'>";
                    echo "<div class='progress' style='background-color:purple !important;border:1px solid;'>";
                        $style_sensing = "width: " . $sensing . "%;"; 
                        echo "<div class='progress-bar bg-warning' role='progressbar' style='$style_sensing' aria-valuemin='0' aria-valuemax='100'></div>";
                    echo "</div>";
                echo "</div>";
                echo "<div class='col-md-2 '>";
                    echo "<p><b>Intuition</b></p>";
                echo "</div>";
            echo "</div>";

            echo "<div class='row'>";
                echo "<div class='col-md-2'>";
                    echo "<p><b>Thinking</b></p>";
                echo "</div>";
                echo "<div class='col-md-8 item-padding'>";
                    echo "<div class='progress' style='background-color:black !important;border:1px solid;'>";
                        $style_thinking = "width: " . $thinking . "%;"; 
                        echo "<div class='progress-bar bg-info' role='progressbar' style='$style_thinking' aria-valuemin='0' aria-valuemax='100'></div>";
                    echo "</div>";
                echo "</div>";
                echo "<div class='col-md-2'>";
                    echo "<p><b>Feeling</b></p>";
                echo "</div>";
            echo "</div>";

            echo "<div class='row'>";
                echo "<div class='col-md-2'>";
                    echo "<p><b>Judging</b></p>";
                echo "</div>";
                echo "<div class='col-md-8 item-padding'>";
                    echo "<div class='progress' style='background-color:blue !important;border:1px solid;'>";
                        $style_judging = "width: " . $judging . "%;"; 
                        echo "<div class='progress-bar bg-danger' role='progressbar' style='$style_judging' aria-valuemin='0' aria-valuemax='100'></div>";
                    echo "</div>";
                echo "</div>";
                echo "<div class='col-md-2'>";
                    echo "<p><b>Perceiving</b></p>";
                echo "</div>";
            echo "</div>";

            echo "<div class='row'>";
                echo "<div class='col-md-2'>";
                    echo "<p><b>Personality</b></p>";
                echo "</div>";
                echo "<div class='col-md-8 item-padding'>";
                    echo "<div class='progress' style='border:1px solid;'>";
                        $aptitude = ($aptitude/8.0) * 100;
                        $style_percentage = "width: " . $percentage . "%;"; 
                        echo "<div class='progress-bar' role='progressbar' style='$style_percentage' aria-valuemin='0' aria-valuemax='100'></div>";
                    echo "</div>";
                echo "</div>";
                echo "<div class='col-md-2'>";           
                echo "</div>";
            echo "</div>";

            echo "<div class='row'>";
                echo "<div class='col-md-2'>";
                    echo "<p></p>";
                echo "</div>";
                echo "<div class='col-md-8 item-padding'>";
                    echo "<h3 style='text-align:center;'><a href='info.php'>" . $personality . "</a></h3>";
                echo "</div>";
                echo "<div class='col-md-2'>";           
                echo "</div>";
            echo "</div>";

      echo "</div>";
        echo "</div>";
        echo "</div>";
    

  } else {
      echo "No data found";
  }
}
}

?>

</div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</html>