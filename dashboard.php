<?php
if (!isset($_SESSION)) {
  session_start();
}
// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["success"]) && $_SESSION["success"] === false) {
  header("location: adminlogin.php");
  exit;
}
?>

<html>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style>
  .row-border {
    border: 1px solid black;
    border-radius: 4px 4px 4px 4px;
    content: "row";
    background-color: #C80070;
    align-items: center;
    justify-content: center;
  }

  .dot {
    height: 40px;
    width: 40px;
    border-radius: 50%;
    display: inline-block;
    text-align: center;
    font-size: 25px;
    margin: 10px;
    align-items: center;
  }

  /* For I */
  .dot-i {
    background-color: lightskyblue;
  }

  /* For E */
  .dot-e {
    background-color: green;
  }

  /* For S */
  .dot-s {
    background-color: lightsalmon;
  }

  /* For N */
  .dot-n {
    background-color: yellow;
  }

  /* For T */
  .dot-t {
    background-color: lightsteelblue;
  }

  /* For F */
  .dot-f {
    background-color: skyblue;
  }

  /* For J */
  .dot-j {
    background-color: pink;
  }

  /* For P */
  .dot-p {
    background-color: lightgreen;
  }

  .dot-parse_url {
    background-color: gray;
  }

  .dot-white {
    border-color: black;
    background-color: white;
  }

  .small-font {
    vertical-align: initial;
    font-size: 17px;
  }

  .top {
    padding-top: 20px;
  }

  .full-name {
    color: white;
    font-size: 20px;
  }

  .dashboard-header {
    padding-top: 10vh;
    color: #C80070;
    text-align: center;
  }

  a:link {
    color: white;
  }

  a:visited {
    color: white;
  }

  a:hover {
    color: yellow;
  }

  a:active {
    color: green;
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
</style>

<?php
// if (!isset($_SESSION['logged'])) {
// 	header('location: /admin-login');
// }

echo "<ul clas='sticky'>";
echo "<li><a class='active' href='index.php'>Home</a></li>";
echo "<li><a href='logout.php'>Log out</a></li>";
echo "<li><a href='info.php'>Info</a></li>";
echo "<li><a href='register.php'>Add a User</a></li>";
echo "</ul>";

echo "<div class=\"container top\">";
echo "<h1 class=\"dashboard-header\">Dashboard</h1>";
?>

<?php

// Returns number of times a specific answer was recorded in each of the four categories

function sort_answers($answers, $char)
{
  $my_list = [0, 0, 0, 0];
  for ($i = 0; $i < 10; $i++) {
    if (strtoupper($answers[$i * 7]) == $char) {
      $my_list[0] += 1;
    }
    for ($j = 0; $j < 3; $j++) {
      for ($k = 1; $k < 3; $k++) {
        if (strtoupper($answers[$i * 7 + $j * 2 + $k]) == $char) {
          $my_list[$j + 1] += 1;
        }
      }
    }
  }
  return $my_list;
}

// Return percentage of B answers in the Keirsey test to determine a personality type

function percentage_of_B($list_A, $list_B)
{
  $result = [];
  for ($i = 0; $i < count($list_B); $i++) {
    $percentage = intval(round(floatval($list_B[$i]) / ($list_A[$i] + $list_B[$i]) * 100));
    array_push($result, $percentage);
  }
  return $result;
}

// Returns a person's personality type based on their responses
// 'X' signifies that a specific personality type for that dimension
// cannot be determined.

function extract_personality($list_B)
{
  $result = "";
  // dimension one: Extrovert versus Introvert (E vs I): what energizes you
  if ($list_B[0] >= 50) {
    $result = $result . "I";
  } elseif ($list_B[0] < 50) {
    $result = $result . "E";
  }
  # dimension two: obServation versus iNtuition (S vs N): what you focus on   
  if ($list_B[1] < 50) {
    $result = $result . "S";
  } elseif ($list_B[1] >= 50) {
    $result = $result . "N";
  }
  # dimension three: Thinking versus Feeling (T vs F): how you interpret what you focus on
  if ($list_B[2] < 50) {
    $result = $result . "T";
  } elseif ($list_B[2] >= 50) {
    $result = $result . "F";
  }
  # dimension four: Judging versus Perceiving (J vs P): how you approach life 
  if ($list_B[3] < 50) {
    $result = $result . "J";
  } elseif ($list_B[3] >= 50) {
    $result = $result . "P";
  }
  return $result;
}
?>

<?php
$questions_array = [];
$number_of_questions = 60;
for ($i = 1; $i <= $number_of_questions; $i++) {
  $question_text = "question_" . strval($i);
  array_push($questions_array, $question_text);
}
?>

<?php
function get_class_name($char)
{
  $class_name = "";
  if ($char == "I") {
    $class_name = "dot  dot-i";
  } elseif ($char == "E") {
    $class_name = "dot dot-e";
  } elseif ($char == "S") {
    $class_name = "dot dot-s";
  } elseif ($char == "N") {
    $class_name = "dot dot-n";
  } elseif ($char == "T") {
    $class_name = "dot dot-t";
  } elseif ($char == "F") {
    $class_name = "dot dot-f";
  } elseif ($char == "J") {
    $class_name = "dot dot-j";
  } elseif ($char == "P") {
    $class_name = "dot dot-p";
  }
  return $class_name;
}

function get_percentage($char)
{
  $percentage = 0;
  if ($char == "I") {
    $percentage += 20;
  } elseif ($char == "E") {
    $percentage += 30;
  } elseif ($char == "S") {
    $percentage += 15;
  } elseif ($char == "N") {
    $percentage += 25;
  } elseif ($char == "T") {
    $percentage += 20;
  } elseif ($char == "F") {
    $percentage += 10;
  } elseif ($char == "J") {
    $percentage += 5;
  } elseif ($char == "P") {
    $percentage += 15;
  }
  return $percentage;
}
?>


<?php
include 'db-conn.php';
$sql = "SELECT * FROM el_form_data";
if ($result = mysqli_query($conn, $sql)) {
  $num_of_rows = mysqli_num_rows($result);
  $names = [];
  $id = [];
  $personality_data = [];
  $verified_data = [];

  if ($num_of_rows > 0) {
    $people_count = 0;
    while ($row_data = mysqli_fetch_array($result)) {

      $overall_B = [];
      $i_score = ((-1 * intval($row_data[$questions_array[0]]) +
        intval($row_data[$questions_array[6]]) +
        -1 * intval($row_data[$questions_array[9]]) +
          intval($row_data[$questions_array[14]]) +
          -1 * intval($row_data[$questions_array[18]]) +
            intval($row_data[$questions_array[23]]) +
            -1 * intval($row_data[$questions_array[26]]) +
              intval($row_data[$questions_array[32]]) +
              intval($row_data[$questions_array[36]]) +
              -1 * intval($row_data[$questions_array[41]]) +
                intval($row_data[$questions_array[50]]) +
                -1 * intval($row_data[$questions_array[55]])) + 36) / 72 * 100;
      array_push($overall_B, $i_score);
      $n_score = ((intval($row_data[$questions_array[1]]) +
        -1 * intval($row_data[$questions_array[3]]) +
          -1 * intval($row_data[$questions_array[13]]) +
            intval($row_data[$questions_array[19]]) +
            intval($row_data[$questions_array[27]]) +
            -1 * intval($row_data[$questions_array[29]]) +
              intval($row_data[$questions_array[35]]) +
              intval($row_data[$questions_array[37]]) +
              intval($row_data[$questions_array[42]]) +
              intval($row_data[$questions_array[46]]) +
              -1 * intval($row_data[$questions_array[51]]) +
                intval($row_data[$questions_array[56]])) + 36) / 72 * 100;
      array_push($overall_B, $n_score);
      $f_score = ((intval($row_data[$questions_array[4]]) +
        -1 * intval($row_data[$questions_array[5]]) +
          -1 * intval($row_data[$questions_array[8]]) +
            intval($row_data[$questions_array[11]]) +
            -1 * intval($row_data[$questions_array[15]]) +
              -1 * intval($row_data[$questions_array[17]]) +
                -1 * intval($row_data[$questions_array[20]]) +
                  intval($row_data[$questions_array[22]]) +
                  intval($row_data[$questions_array[24]]) +
                  -1 * intval($row_data[$questions_array[25]]) +
                    intval($row_data[$questions_array[28]]) +
                    -1 * intval($row_data[$questions_array[30]]) +
                      -1 * intval($row_data[$questions_array[33]]) +
                        -1 * intval($row_data[$questions_array[38]]) +
                          intval($row_data[$questions_array[40]]) +
                          -1 * intval($row_data[$questions_array[43]]) +
                            intval($row_data[$questions_array[45]]) +
                            intval($row_data[$questions_array[47]]) +
                            -1 * intval($row_data[$questions_array[49]]) +
                              intval($row_data[$questions_array[52]]) +
                              intval($row_data[$questions_array[54]]) +
                              intval($row_data[$questions_array[57]]) +
                              -1 * intval($row_data[$questions_array[58]]) +
                                -1 * intval($row_data[$questions_array[59]])) + 75) / 150 * 100;
      array_push($overall_B, $f_score);
      $p_score = ((intval($row_data[$questions_array[2]]) +
        -1 * intval($row_data[$questions_array[7]]) +
          -1 * intval($row_data[$questions_array[10]]) +
            -1 * intval($row_data[$questions_array[12]]) +
              intval($row_data[$questions_array[16]]) +
              -1 * intval($row_data[$questions_array[21]]) +
                intval($row_data[$questions_array[31]]) +
                -1 * intval($row_data[$questions_array[34]]) +
                  intval($row_data[$questions_array[44]]) +
                  -1 * intval($row_data[$questions_array[48]]) +
                    intval($row_data[$questions_array[53]])) + 33) / 66 * 100;
      array_push($overall_B, $p_score);

      // Calculating aptitude test
      $aptitude_questions_marks = 0;
      if (intval($row_data['ap_question_1']) == 4) {
        $aptitude_questions_marks += 1;
      }
      if (intval($row_data['ap_question_2']) == 4) {
        $aptitude_questions_marks += 1;
      }
      if (intval($row_data['ap_question_3']) == 3) {
        $aptitude_questions_marks += 1;
      }
      if (intval($row_data['ap_question_4']) == 2) {
        $aptitude_questions_marks += 1;
      }
      if (intval($row_data['ap_question_5']) == 4) {
        $aptitude_questions_marks += 1;
      }
      if (intval($row_data['ap_question_6']) == 1) {
        $aptitude_questions_marks += 1;
      }
      if (intval($row_data['ap_question_7']) == 2) {
        $aptitude_questions_marks += 1;
      }
      if (intval($row_data['ap_question_8']) == 3) {
        $aptitude_questions_marks += 1;
      }

      $personality = extract_personality($overall_B);
      $array_of_personalities = str_split($personality);

      $percentage = get_percentage($array_of_personalities[0]);
      $percentage += get_percentage($array_of_personalities[1]);
      $percentage += get_percentage($array_of_personalities[2]);
      $percentage += get_percentage($array_of_personalities[3]);

      echo "<div class=\"row row-border\">";
      echo "<div class=\"col-md-4\">";
      $url = "view-recruit.php?id=" . $row_data['id'] . "&introvert=" . $overall_B[0] . "&sensing=" . $overall_B[1] . "&thinking=" . $overall_B[2] . "&judging=" . $overall_B[3] . "&aptitude=" . $aptitude_questions_marks . "&percentage=" . $percentage . "&cv=" . $row_data['uploaded_cv'] . "&personality=" . $personality;
      echo "<p class=\"full-name\"><a href='$url'>" . $row_data['full_name'] . "</a></p>";
      echo "</div>";
      echo "<div class=\"col-md-4\">";


      // For first dot
      $class_name = get_class_name($array_of_personalities[0]);
      echo "<span class='$class_name'>" . $array_of_personalities[0] . "</span>";
      // For second dot
      $class_name = get_class_name($array_of_personalities[1]);
      echo "<span class='$class_name'>" . $array_of_personalities[1] . "</span>";
      // For third dot
      $class_name = get_class_name($array_of_personalities[2]);
      echo "<span class='$class_name'>" . $array_of_personalities[2] . "</span>";
      // For fourth dot
      $class_name = get_class_name($array_of_personalities[3]);
      echo "<span class='$class_name'>" . $array_of_personalities[3] . "</span>";
      echo "</div>";
      echo "<div class=\"col-md-1\">";
      echo "<span class=\"dot dot-white\"><span class=\"small-font\">" . $percentage . "%</span></span>";
      echo "</div>";
      echo "<div class=\"col-md-1\">";
      $hrf = "dashboard.php?action=delete&id=" . $row_data['id'];
      echo "<a data-toggle='tooltip' title='Delete recruit' href='$hrf'><img src='images/delete-24.png'></a>";
      echo "</div>";
      echo "<div class=\"col-md-1\">";

      if (intval($row_data['verified']) == 1) {
        echo "<img data-toggle='tooltip' title='Verified' src='images/approve-24.png'>";
      } else {
        $hrf = "dashboard.php?action=verify&id=" . $row_data['id'];
        echo "<a data-toggle='tooltip' title='Click to verify' href='$hrf'><img src='images/plus-4-24.png'></a>";
      }
      echo "</div>";
      echo "<div class=\"col-md-1\">";

      echo "</div>";
      echo "</div>";
      $people_count += 1;
    } // end of the while loop

  } // end of num_of_rows
  echo "</div>";

  if ((isset($_GET['action']) && ($_GET['action'] == 'delete')) && isset($_GET['id'])) {
    $sql_del = mysqli_query($conn, "DELETE FROM el_form_data WHERE id= '" . $_GET['id'] . "'");
    if ($sql_del) {
      echo "<script>window.location.href='dashboard.php';</script>";
      exit;
    }
  }
  if (isset($_GET['action']) && ($_GET['action'] == 'verify') && isset($_GET['id'])) {
    $sql_del = mysqli_query($conn, "UPDATE el_form_data SET verified=1  WHERE id= '" . $_GET['id'] . "'");
    if ($sql_del) {
      echo "<script>window.location.href='dashboard.php';</script>";
      exit;
    }
  }

  mysqli_close($conn);
} else {  // end of mysqli_query
  echo "No Result";
}

?>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>

</html>