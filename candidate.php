<?php

$msg = $success = "";

if (isset($_POST["submit"])) {
    $full_name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone_number = $_POST['contactnumber'];
    // File handling part

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["cv"]["name"]);
    $uploadOk = 1;
    $file_path = $target_dir . htmlspecialchars(basename($_FILES["cv"]["name"]));
    // Check if image file is a actual image or fake image

    // Check if file already exists
    if (file_exists($target_file)) {
        $msg = "Sorry, CV already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["cv"]["size"] > 500000) {
        $msg = "Sorry, your CV is too large.";
        $uploadOk = 0;
    }


    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg = "Sorry, your CV was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file)) {
            $msg = "Success";
        } else {
            $msg = "Sorry, there was an error uploading your CV.";
        }
    }

    $question_1 = $_POST['question1'];
    $question_2 = $_POST['question2'];
    $question_3 = $_POST['question3'];
    $question_4 = $_POST['question4'];
    $question_5 = $_POST['question5'];
    $question_6 = $_POST['question6'];
    $question_7 = $_POST['question7'];
    $question_8 = $_POST['question8'];
    $question_9 = $_POST['question9'];
    $question_10 = $_POST['question10'];
    $question_11 = $_POST['question11'];
    $question_12 = $_POST['question12'];
    $question_13 = $_POST['question13'];
    $question_14 = $_POST['question14'];
    $question_15 = $_POST['question15'];
    $question_16 = $_POST['question16'];
    $question_17 = $_POST['question17'];
    $question_18 = $_POST['question18'];
    $question_19 = $_POST['question19'];
    $question_20 = $_POST['question20'];
    $question_21 = $_POST['question21'];
    $question_22 = $_POST['question22'];
    $question_23 = $_POST['question23'];
    $question_24 = $_POST['question24'];
    $question_25 = $_POST['question25'];
    $question_26 = $_POST['question26'];
    $question_27 = $_POST['question27'];
    $question_28 = $_POST['question28'];
    $question_29 = $_POST['question29'];
    $question_30 = $_POST['question30'];
    $question_31 = $_POST['question31'];
    $question_32 = $_POST['question32'];
    $question_33 = $_POST['question33'];
    $question_34 = $_POST['question34'];
    $question_35 = $_POST['question35'];
    $question_36 = $_POST['question36'];
    $question_37 = $_POST['question37'];
    $question_38 = $_POST['question38'];
    $question_39 = $_POST['question39'];
    $question_40 = $_POST['question40'];
    $question_41 = $_POST['question41'];
    $question_42 = $_POST['question42'];
    $question_43 = $_POST['question43'];
    $question_44 = $_POST['question44'];
    $question_45 = $_POST['question45'];
    $question_46 = $_POST['question46'];
    $question_47 = $_POST['question47'];
    $question_48 = $_POST['question48'];
    $question_49 = $_POST['question49'];
    $question_50 = $_POST['question50'];
    $question_51 = $_POST['question51'];
    $question_52 = $_POST['question52'];
    $question_53 = $_POST['question53'];
    $question_54 = $_POST['question54'];
    $question_55 = $_POST['question55'];
    $question_56 = $_POST['question56'];
    $question_57 = $_POST['question57'];
    $question_58 = $_POST['question58'];
    $question_59 = $_POST['question59'];
    $question_60 = $_POST['question60'];
    $ap_question_1 = $_POST['ap_question1'];
    $ap_question_2 = $_POST['ap_question2'];
    $ap_question_3 = $_POST['ap_question3'];
    $ap_question_4 = $_POST['ap_question4'];
    $ap_question_5 = $_POST['ap_question5'];
    $ap_question_6 = $_POST['ap_question6'];
    $ap_question_7 = 2;
    $ap_question_8 = 3;

    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

    include 'db-conn.php';
    $table_name = "el_form_data";
    $conn = mysqli_connect('localhost', 'root', 'root', 'harshana');

    if ($conn->connect_error) {
        die("connection failed: " . $conn->connect_error);
    }
    $is_table_exist = false;
    $is_table_created = false;
    $sql = "CREATE TABLE $table_name (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            full_name VARCHAR(100),
            email VARCHAR(50),
            phone_number VARCHAR(10),
            question_1 INT(1),
            question_2 INT(1),
            question_3 INT(1),
            question_4 INT(1),
            question_5 INT(1),
            question_6 INT(1),
            question_7 INT(1),
            question_8 INT(1),
            question_9 INT(1),
            question_10 INT(1),
            question_11 INT(1),
            question_12 INT(1),
            question_13 INT(1),
            question_14 INT(1),
            question_15 INT(1),
            question_16 INT(1),
            question_17 INT(1),
            question_18 INT(1),
            question_19 INT(1),
            question_20 INT(1),
            question_21 INT(1),
            question_22 INT(1),
            question_23 INT(1),
            question_24 INT(1),
            question_25 INT(1),
            question_26 INT(1),
            question_27 INT(1),
            question_28 INT(1),
            question_29 INT(1),
            question_30 INT(1),
            question_31 INT(1),
            question_32 INT(1),
            question_33 INT(1),
            question_34 INT(1),
            question_35 INT(1),
            question_36 INT(1),
            question_37 INT(1),
            question_38 INT(1),
            question_39 INT(1),
            question_40 INT(1),
            question_41 INT(1),
            question_42 INT(1),
            question_43 INT(1),
            question_44 INT(1),
            question_45 INT(1),
            question_46 INT(1),
            question_47 INT(1),
            question_48 INT(1),
            question_49 INT(1),
            question_50 INT(1),
            question_51 INT(1),
            question_52 INT(1),
            question_53 INT(1),
            question_54 INT(1),
            question_55 INT(1),
            question_56 INT(1),
            question_57 INT(1),
            question_58 INT(1),
            question_59 INT(1),
            question_60 INT(1),
            ap_question_1 INT(1),
            ap_question_2 INT(1),
            ap_question_3 INT(1),
            ap_question_4 INT(1),
            ap_question_5 INT(1),
            ap_question_6 INT(1),
            ap_question_7 INT(1),
            ap_question_8 INT(1),
            verified BOOLEAN,
            uploaded_cv VARCHAR(500)
        )";

    if (mysqli_query($conn, $sql)) {
        $is_table_created = true;
    } else {
        $is_table_exist = true;
    }
    $default_verified = 0;
    if ($is_table_created || $is_table_exist) {
        $data_1 = "INSERT INTO el_form_data (full_name, email, phone_number, question_1,question_2,question_3,question_4,
                        question_5,question_6,question_7,question_8,question_9,question_10,
                        question_11,question_12,question_13,question_14,question_15,question_16,question_17,question_18,question_19,question_20,
                        question_21,question_22,question_23,question_24,question_25,question_26,question_27,question_28,question_29,question_30,
                        question_31,question_32,question_33,question_34,question_35,question_36,question_37,question_38,question_39,question_40,
                        question_41,question_42,question_43,question_44,question_45,question_46,question_47,question_48,question_49,question_50,
                        question_51,question_52,question_53,question_54,question_55,question_56,question_57,question_58,question_59,question_60, verified, uploaded_cv,
                        ap_question_1,ap_question_2,ap_question_3,ap_question_4,ap_question_5,ap_question_6,ap_question_7,ap_question_8) 
                        VALUES ('$full_name', '$email', '$phone_number','$question_1','$question_2','$question_3','$question_4',
                        '$question_5','$question_6','$question_7','$question_8','$question_9','$question_10',
                        '$question_11','$question_12','$question_13','$question_14','$question_15','$question_16','$question_17','$question_18','$question_19','$question_20',
                        '$question_21','$question_22','$question_23','$question_24','$question_25','$question_26','$question_27','$question_28','$question_29','$question_30',
                        '$question_31','$question_32','$question_33','$question_34','$question_35','$question_36','$question_37','$question_38','$question_39','$question_40',
                        '$question_41','$question_42','$question_43','$question_44','$question_45','$question_46','$question_47','$question_48','$question_49','$question_50',
                        '$question_51','$question_52','$question_53','$question_54','$question_55','$question_56','$question_57','$question_58','$question_59','$question_60', '$default_verified ', '$file_path',
                        '$ap_question_1','$ap_question_2','$ap_question_3','$ap_question_4','$ap_question_5','$ap_question_6','$ap_question_7','$ap_question_8')";

        if ($conn->query($data_1) === true) {
            $success = "Submitted Successfully";
            fwrite($myfile, $success);
        } else {
            $success = "Fill All Fields";
            fwrite($myfile, mysqli_error($conn));
        }
    }
    mysqli_close($conn);

    fclose($myfile);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style type="text/css">
        #regiration_form fieldset:not(:first-of-type) {
            display: none;
        }

        .vs-border {
            border: 1px solid #ccc !important;
        }

        .vs-round-border {
            border-radius: 16px;
        }

        .vs-padding {
            padding: 1.0em 16px;
        }
    </style>
    <title></title>
</head>

<body>
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <?php
            if (!empty($msg) && $msg != 'Success') {
                echo "<div class='alert alert-danger' role='alert'><b>" . $msg . "</b></div>";
            }
            if (!empty($success)) {
                echo "<div class='alert alert-success' role='alert'><h4 class='alert-heading'>Congratulations!</h4><b>" . $success . "</div>";
            }
            ?>

        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <form class="vs-border vs-round-border vs-padding" id="regiration_form" novalidate action="candidate.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <h2>Step 1: Personal Details</h2>
                    <div class="form-group">
                        <label for="fullname">Email address</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="contactnumber">Contact Number</label>
                        <input type="tel" class="form-control" id="email" name="contactnumber" placeholder="Contact Number" required>
                    </div>
                    <div class="form-group">
                        <label for="cv">Upload you CV</label>
                        <input type="file" class="form-control" name="cv" id="cv">
                    </div>
                    <input type="button" name="next" class="next btn btn-info btn-block" value="Next"/>
                </fieldset>
                <fieldset>
                    <h2> Step 2:</h2>
                    <div class="form-group">
                        <label>1.You enjoy vibrant social events with lots of people.</label>
                        <p><input type="radio" name="question1" value="-3" required> Strongly Disagree</p>
                        <p><input type="radio" name="question1" value="-2" required> Disagree</p>
                        <p><input type="radio" name="question1" value="-1" required> Slightly Disagree</p>
                        <p><input type="radio" name="question1" checked value="0" required> Neutral</p>
                        <p><input type="radio" name="question1" value="1" required> Slightly Agree</p>
                        <p><input type="radio" name="question1" value="2" required> Agree</p>
                        <p><input type="radio" name="question1" value="3" required> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>2. You often spend time exploring unrealistic yet intriguing ideas.</label>
                        <p><input type="radio" name="question2" value="-3" required> Strongly Disagree</p>
                        <p><input type="radio" name="question2" value="-2" required> Disagree</p>
                        <p><input type="radio" name="question2" value="-1" required> Slightly Disagree</p>
                        <p><input type="radio" name="question2" checked value="0" required> Neutral</p>
                        <p><input type="radio" name="question2" value="1" required> Slightly Agree</p>
                        <p><input type="radio" name="question2" value="2" required> Agree</p>
                        <p><input type="radio" name="question2" value="3" required> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>3. Your travel plans are more likely to look like a rough list of ideas than a detailed itinerary.</label>
                        <p><input type="radio" name="question3" value="-3" required> Strongly Disagree</p>
                        <p><input type="radio" name="question3" value="-2" required> Disagree</p>
                        <p><input type="radio" name="question3" value="-1" required> Slightly Disagree</p>
                        <p><input type="radio" name="question3" checked value="0" required> Neutral</p>
                        <p><input type="radio" name="question3" value="1" required> Slightly Agree</p>
                        <p><input type="radio" name="question3" value="2" required> Agree</p>
                        <p><input type="radio" name="question3" value="3" required> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>4. You often think about what you should have said in a conversation long after it has taken place.</label>
                        <p><input type="radio" name="question4" value="-3" required> Strongly Disagree</p>
                        <p><input type="radio" name="question4" value="-2" required> Disagree</p>
                        <p><input type="radio" name="question4" value="-1" required> Slightly Disagree</p>
                        <p><input type="radio" name="question4" checked value="0" required> Neutral</p>
                        <p><input type="radio" name="question4" value="1" required> Slightly Agree</p>
                        <p><input type="radio" name="question4" value="2" required> Agree</p>
                        <p><input type="radio" name="question4" value="3" required> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>5. If your friend is sad about something, your first instinct is to support them emotionally, not try to solve their problem.</label>
                        <p><input type="radio" name="question5" value="-3" required> Strongly Disagree</p>
                        <p><input type="radio" name="question5" value="-2" required> Disagree</p>
                        <p><input type="radio" name="question5" value="-1" required> Slightly Disagree</p>
                        <p><input type="radio" name="question5" checked value="0" required> Neutral</p>
                        <p><input type="radio" name="question5" value="1" required> Slightly Agree</p>
                        <p><input type="radio" name="question5" value="2" required> Agree</p>
                        <p><input type="radio" name="question5" value="3" required> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>6. People can rarely upset you.</label>
                        <p><input type="radio" name="question6" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question6" value="-2"> Disagree</p>
                        <p><input type="radio" name="question6" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question6" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question6" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question6" value="2"> Agree</p>
                        <p><input type="radio" name="question6" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>7. You often rely on other people to be the ones to start a conversation and keep it going.</label>
                        <p><input type="radio" name="question7" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question7" value="-2"> Disagree</p>
                        <p><input type="radio" name="question7" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question7" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question7" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question7" value="2"> Agree</p>
                        <p><input type="radio" name="question7" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>8. If you have to temporarily put your plans on hold, you make sure it is your top priority to get back on track as soon as possible.</label>
                        <p><input type="radio" name="question8" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question8" value="-2"> Disagree</p>
                        <p><input type="radio" name="question8" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question8" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question8" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question8" value="2"> Agree</p>
                        <p><input type="radio" name="question8" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>9. You rarely worry if you made a good impression on someone you met.</label>
                        <p><input type="radio" name="question9" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question9" value="-2"> Disagree</p>
                        <p><input type="radio" name="question9" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question9" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question9" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question9" value="2"> Agree</p>
                        <p><input type="radio" name="question9" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>10. It would be a challenge for you to spend the whole weekend all by yourself without feeling bored.</label>
                        <p><input type="radio" name="question10" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question10" value="-2"> Disagree</p>
                        <p><input type="radio" name="question10" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question10" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question10" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question10" value="2"> Agree</p>
                        <p><input type="radio" name="question10" value="3"> Strongly Agree</p>
                    </div>
                    <input type="button" name="previous" class="previous btn btn-default btn-block" value="Previous" />
                    <input type="button" name="next" class="next btn btn-info btn-block" value="Next" />
                </fieldset>
                <fieldset>
                    <h2>Step 3: Contact Information</h2>
                    <div class="form-group">
                        <label>11. You are more of a detail-oriented than a big picture person.</label>
                        <p><input type="radio" name="question11" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question11" value="-2"> Disagree</p>
                        <p><input type="radio" name="question11" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question11" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question11" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question11" value="2"> Agree</p>
                        <p><input type="radio" name="question11" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>12. You are very affectionate with people you care about.</label>
                        <p><input type="radio" name="question12" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question12" value="-2"> Disagree</p>
                        <p><input type="radio" name="question12" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question12" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question12" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question12" value="2"> Agree</p>
                        <p><input type="radio" name="question12" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>13. You have a careful and methodical approach to life.</label>
                        <p><input type="radio" name="question13" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question13" value="-2"> Disagree</p>
                        <p><input type="radio" name="question13" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question13" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question13" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question13" value="2"> Agree</p>
                        <p><input type="radio" name="question13" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>14. You are still bothered by the mistakes you made a long time ago.</label>
                        <p><input type="radio" name="question14" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question14" value="-2"> Disagree</p>
                        <p><input type="radio" name="question14" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question14" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question14" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question14" value="2"> Agree</p>
                        <p><input type="radio" name="question14" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>15. At parties and similar events you can mostly be found farther away from the action.</label>
                        <p><input type="radio" name="question15" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question15" value="-2"> Disagree</p>
                        <p><input type="radio" name="question15" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question15" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question15" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question15" value="2"> Agree</p>
                        <p><input type="radio" name="question15" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>16. You often find it difficult to relate to people who let their emotions guide them.</label>
                        <p><input type="radio" name="question16" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question16" value="-2"> Disagree</p>
                        <p><input type="radio" name="question16" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question16" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question16" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question16" value="2"> Agree</p>
                        <p><input type="radio" name="question16" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>17. When looking for a movie to watch, you can spend ages browsing the catalog.</label>
                        <p><input type="radio" name="question17" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question17" value="-2"> Disagree</p>
                        <p><input type="radio" name="question17" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question17" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question17" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question17" value="2"> Agree</p>
                        <p><input type="radio" name="question17" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>18. You can stay calm under a lot of pressure.</label>
                        <p><input type="radio" name="question18" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question18" value="-2"> Disagree</p>
                        <p><input type="radio" name="question18" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question18" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question18" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question18" value="2"> Agree</p>
                        <p><input type="radio" name="question18" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>19. When in a group of people you do not know, you have no problem jumping right into their conversation.</label>
                        <p><input type="radio" name="question19" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question19" value="-2"> Disagree</p>
                        <p><input type="radio" name="question19" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question19" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question19" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question19" value="2"> Agree</p>
                        <p><input type="radio" name="question19" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>20. When you sleep, your dreams tend to be bizarre and fantastical.</label>
                        <p><input type="radio" name="question20" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question20" value="-2"> Disagree</p>
                        <p><input type="radio" name="question20" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question20" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question20" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question20" value="2"> Agree</p>
                        <p><input type="radio" name="question20" value="3"> Strongly Agree</p>
                    </div>
                    <input type="button" name="previous" class="previous btn btn-default btn-block" value="Previous" />
                    <input type="button" name="next" class="next btn btn-info btn-block" value="Next" />
                    <!-- <input type="submit" name="submit" class="submit btn btn-success" value="Submit" id="submit_data" /> -->
                </fieldset>
                <fieldset>
                    <h2> Step 4:</h2>
                    <div class="form-group">
                        <label>21. In your opinion, it is sometimes OK to step on others to get ahead in life.</label>
                        <p><input type="radio" name="question21" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question21" value="-2"> Disagree</p>
                        <p><input type="radio" name="question21" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question21" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question21" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question21" value="2"> Agree</p>
                        <p><input type="radio" name="question21" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>22. You are dedicated and focused on your goals, only rarely getting sidetracked.</label>
                        <p><input type="radio" name="question22" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question22" value="-2"> Disagree</p>
                        <p><input type="radio" name="question22" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question22" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question22" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question22" value="2"> Agree</p>
                        <p><input type="radio" name="question22" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>23. If you make a mistake, you tend to start doubting yourself, your abilities, or your knowledge.</label>
                        <p><input type="radio" name="question23" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question23" value="-2"> Disagree</p>
                        <p><input type="radio" name="question23" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question23" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question23" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question23" value="2"> Agree</p>
                        <p><input type="radio" name="question23" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>24. When at a social event, you rarely try to introduce yourself to new people and mostly talk to the ones you already know.</label>
                        <p><input type="radio" name="question24" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question24" value="-2"> Disagree</p>
                        <p><input type="radio" name="question24" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question24" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question24" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question24" value="2"> Agree</p>
                        <p><input type="radio" name="question24" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>25. You usually lose interest in a discussion when it gets philosophical.</label>
                        <p><input type="radio" name="question25" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question25" value="-2"> Disagree</p>
                        <p><input type="radio" name="question25" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question25" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question25" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question25" value="2"> Agree</p>
                        <p><input type="radio" name="question25" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>26. You would never let yourself cry in front of others.</label>
                        <p><input type="radio" name="question26" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question26" value="-2"> Disagree</p>
                        <p><input type="radio" name="question26" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question26" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question26" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question26" value="2"> Agree</p>
                        <p><input type="radio" name="question26" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>27. You feel more drawn to places with a bustling and busy atmosphere than to more quiet and intimate ones.</label>
                        <p><input type="radio" name="question27" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question27" value="-2"> Disagree</p>
                        <p><input type="radio" name="question27" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question27" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question27" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question27" value="2"> Agree</p>
                        <p><input type="radio" name="question27" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>28. You like discussing different views and theories on what the world could look like in the future.</label>
                        <p><input type="radio" name="question28" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question28" value="-2"> Disagree</p>
                        <p><input type="radio" name="question28" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question28" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question28" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question28" value="2"> Agree</p>
                        <p><input type="radio" name="question28" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>29. When it comes to making life-changing choices, you mostly listen to your heart rather than your head.</label>
                        <p><input type="radio" name="question29" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question29" value="-2"> Disagree</p>
                        <p><input type="radio" name="question29" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question29" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question29" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question29" value="2"> Agree</p>
                        <p><input type="radio" name="question29" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>30. You cannot imagine yourself dedicating your life to the study of something that you cannot see, touch, or experience.</label>
                        <p><input type="radio" name="question30" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question30" value="-2"> Disagree</p>
                        <p><input type="radio" name="question30" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question30" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question30" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question30" value="2"> Agree</p>
                        <p><input type="radio" name="question30" value="3"> Strongly Agree</p>
                    </div>
                    <input type="button" name="previous" class="previous btn btn-default btn-block" value="Previous" />
                    <input type="button" name="next" class="next btn btn-info btn-block" value="Next" />
                </fieldset>
                <fieldset>
                    <h2> Step 5:</h2>
                    <div class="form-group">
                        <label>31. You usually prefer to get your revenge rather than forgive.</label>
                        <p><input type="radio" name="question31" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question31" value="-2"> Disagree</p>
                        <p><input type="radio" name="question31" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question31" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question31" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question31" value="2"> Agree</p>
                        <p><input type="radio" name="question31" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>32. You often make decisions on a whim.</label>
                        <p><input type="radio" name="question32" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question32" value="-2"> Disagree</p>
                        <p><input type="radio" name="question32" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question32" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question32" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question32" value="2"> Agree</p>
                        <p><input type="radio" name="question32" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>33. The time you spend by yourself often ends up being more interesting and satisfying than the time you spend with other people.</label>
                        <p><input type="radio" name="question33" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question33" value="-2"> Disagree</p>
                        <p><input type="radio" name="question33" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question33" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question33" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question33" value="2"> Agree</p>
                        <p><input type="radio" name="question33" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>34. The time you spend by yourself often ends up being more interesting and satisfying than the time you spend with other people.</label>
                        <p><input type="radio" name="question34" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question34" value="-2"> Disagree</p>
                        <p><input type="radio" name="question34" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question34" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question34" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question34" value="2"> Agree</p>
                        <p><input type="radio" name="question34" value="3"> Strongly Agree</p>

                    </div>
                    <div class="form-group">
                        <label>35. You always know exactly what you want.</label>
                        <p><input type="radio" name="question35" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question35" value="-2"> Disagree</p>
                        <p><input type="radio" name="question35" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question35" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question35" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question35" value="2"> Agree</p>
                        <p><input type="radio" name="question35" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>36. You rarely think back on the choices you made and wonder what you could have done differently.</label>
                        <p><input type="radio" name="question36" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question36" value="-2"> Disagree</p>
                        <p><input type="radio" name="question36" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question36" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question36" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question36" value="2"> Agree</p>
                        <p><input type="radio" name="question36" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>37. When in a public place, you usually stick to quieter and less crowded areas.</label>
                        <p><input type="radio" name="question37" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question37" value="-2"> Disagree</p>
                        <p><input type="radio" name="question37" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question37" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question37" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question37" value="2"> Agree</p>
                        <p><input type="radio" name="question37" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>38. You tend to focus on present realities rather than future possibilities.</label>
                        <p><input type="radio" name="question38" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question38" value="-2"> Disagree</p>
                        <p><input type="radio" name="question38" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question38" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question38" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question38" value="2"> Agree</p>
                        <p><input type="radio" name="question38" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>39. You often have a hard time understanding other people’s feelings.</label>
                        <p><input type="radio" name="question39" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question39" value="-2"> Disagree</p>
                        <p><input type="radio" name="question39" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question39" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question39" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question39" value="2"> Agree</p>
                        <p><input type="radio" name="question39" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>40. When starting to work on a project, you prefer to make as many decisions upfront as possible.</label>
                        <p><input type="radio" name="question40" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question40" value="-2"> Disagree</p>
                        <p><input type="radio" name="question40" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question40" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question40" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question40" value="2"> Agree</p>
                        <p><input type="radio" name="question40" value="3"> Strongly Agree</p>
                    </div>
                    <input type="button" name="previous" class="previous btn btn-default btn-block" value="Previous" />
                    <input type="button" name="next" class="next btn btn-info btn-block" value="Next" />
                </fieldset>
                <fieldset>
                    <h2> Step 6:</h2>
                    <div class="form-group">
                        <label>41. When you know someone thinks highly of you, you also wonder how long it will be until they become disappointed in you.</label>
                        <p><input type="radio" name="question41" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question41" value="-2"> Disagree</p>
                        <p><input type="radio" name="question41" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question41" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question41" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question41" value="2"> Agree</p>
                        <p><input type="radio" name="question41" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>42. You feel comfortable just walking up to someone you find interesting and striking up a conversation.</label>
                        <p><input type="radio" name="question42" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question42" value="-2"> Disagree</p>
                        <p><input type="radio" name="question42" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question42" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question42" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question42" value="2"> Agree</p>
                        <p><input type="radio" name="question42" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>43. You often drift away into daydreaming about various ideas or scenarios.</label>
                        <p><input type="radio" name="question43" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question43" value="-2"> Disagree</p>
                        <p><input type="radio" name="question43" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question43" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question43" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question43" value="2"> Agree</p>
                        <p><input type="radio" name="question43" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>44.You look after yourself first, and others come in second.</label>
                        <p><input type="radio" name="question44" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question44" value="-2"> Disagree</p>
                        <p><input type="radio" name="question44" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question44" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question44" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question44" value="2"> Agree</p>
                        <p><input type="radio" name="question44" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>45. Even when you have planned a particular daily routine, you usually just end up doing what you feel like at any given moment.</label>
                        <p><input type="radio" name="question45" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question45" value="-2"> Disagree</p>
                        <p><input type="radio" name="question45" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question45" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question45" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question45" value="2"> Agree</p>
                        <p><input type="radio" name="question45" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>46. Your mood can change very quickly.</label>
                        <p><input type="radio" name="question46" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question46" value="-2"> Disagree</p>
                        <p><input type="radio" name="question46" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question46" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question46" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question46" value="2"> Agree</p>
                        <p><input type="radio" name="question46" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>47.You often contemplate the reasons for human existence or the meaning of life</label>
                        <p><input type="radio" name="question47" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question47" value="-2"> Disagree</p>
                        <p><input type="radio" name="question47" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question47" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question47" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question47" value="2"> Agree</p>
                        <p><input type="radio" name="question47" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>48. You often talk about your own feelings and emotions.</label>
                        <p><input type="radio" name="question48" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question48" value="-2"> Disagree</p>
                        <p><input type="radio" name="question48" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question48" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question48" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question48" value="2"> Agree</p>
                        <p><input type="radio" name="question48" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>49.You have got detailed education or career development plans stretching several years into the future.</label>
                        <p><input type="radio" name="question49" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question49" value="-2"> Disagree</p>
                        <p><input type="radio" name="question49" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question49" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question49" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question49" value="2"> Agree</p>
                        <p><input type="radio" name="question49" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>50. You rarely dwell on your regrets.</label>
                        <p><input type="radio" name="question50" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question50" value="-2"> Disagree</p>
                        <p><input type="radio" name="question50" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question50" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question50" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question50" value="2"> Agree</p>
                        <p><input type="radio" name="question50" value="3"> Strongly Agree</p>
                    </div>
                    <input type="button" name="previous" class="previous btn btn-default btn-block" value="Previous" />
                    <input type="button" name="next" class="next btn btn-info btn-block" value="Next" />
                </fieldset>
                <fieldset>
                    <h2> Step 7:</h2>
                    <div class="form-group">
                        <label>51. Spending time in a dynamic atmosphere with lots of people around quickly makes you feel drained and in need of a getaway.</label>
                        <p><input type="radio" name="question51" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question51" value="-2"> Disagree</p>
                        <p><input type="radio" name="question51" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question51" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question51" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question51" value="2"> Agree</p>
                        <p><input type="radio" name="question51" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>52.You see yourself as more of a realist than a visionary.</label>
                        <p><input type="radio" name="question52" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question52" value="-2"> Disagree</p>
                        <p><input type="radio" name="question52" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question52" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question52" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question52" value="2"> Agree</p>
                        <p><input type="radio" name="question52" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>53.You find it easy to empathize with a person who has gone through something you never have.</label>
                        <p><input type="radio" name="question53" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question53" value="-2"> Disagree</p>
                        <p><input type="radio" name="question53" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question53" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question53" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question53" value="2"> Agree</p>
                        <p><input type="radio" name="question53" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>54.Your personal work style is closer to spontaneous bursts of energy than to organized and consistent efforts.</label>
                        <p><input type="radio" name="question54" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question54" value="-2"> Disagree</p>
                        <p><input type="radio" name="question54" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question54" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question54" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question54" value="2"> Agree</p>
                        <p><input type="radio" name="question54" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>55. Your emotions control you more than you control them.</label>
                        <p><input type="radio" name="question55" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question55" value="-2"> Disagree</p>
                        <p><input type="radio" name="question55" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question55" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question55" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question55" value="2"> Agree</p>
                        <p><input type="radio" name="question55" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>56. After a long and exhausting week, a fun party is just what you need.</label>
                        <p><input type="radio" name="question56" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question56" value="-2"> Disagree</p>
                        <p><input type="radio" name="question56" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question56" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question56" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question56" value="2"> Agree</p>
                        <p><input type="radio" name="question56" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>57. You frequently find yourself wondering how technological advancement could change everyday life.</label>
                        <p><input type="radio" name="question57" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question57" value="-2"> Disagree</p>
                        <p><input type="radio" name="question57" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question57" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question57" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question57" value="2"> Agree</p>
                        <p><input type="radio" name="question57" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>58. You always consider how your actions might affect other people before doing something.</label>
                        <p><input type="radio" name="question58" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question58" value="-2"> Disagree</p>
                        <p><input type="radio" name="question58" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question58" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question58" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question58" value="2"> Agree</p>
                        <p><input type="radio" name="question58" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>59. You still honor the commitments you have made even if you have a change of heart.</label>
                        <p><input type="radio" name="question59" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question59" value="-2"> Disagree</p>
                        <p><input type="radio" name="question59" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question59" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question59" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question59" value="2"> Agree</p>
                        <p><input type="radio" name="question59" value="3"> Strongly Agree</p>
                    </div>
                    <div class="form-group">
                        <label>60. You rarely feel insecure.</label>
                        <p><input type="radio" name="question60" value="-3"> Strongly Disagree</p>
                        <p><input type="radio" name="question60" value="-2"> Disagree</p>
                        <p><input type="radio" name="question60" value="-1"> Slightly Disagree</p>
                        <p><input type="radio" name="question60" checked value="0"> Neutral</p>
                        <p><input type="radio" name="question60" value="1"> Slightly Agree</p>
                        <p><input type="radio" name="question60" value="2"> Agree</p>
                        <p><input type="radio" name="question60" value="3"> Strongly Agree</p>
                    </div>
                    <input type="button" name="previous" class="previous btn btn-default btn-block" value="Previous" />
                    <input type="button" name="next" class="next btn btn-info btn-block" value="Next" />
                </fieldset>
                <fieldset>
                    <div class="form-group">
                        <label>61. Eric is opening an online clothing business this year, targeting shoppers between 18 and 34 years old. To determine the best price range for his items, he researches the average income of shoppers in different age brackets. How effective is his decision to set prices based only on this research?</label>
                        <p><input type="radio" name="ap_question1" value="-2"> Highly effective. His decision will yield the most appropriate pricing</p>
                        <p><input type="radio" name="ap_question1" value="-1"> Very effective</p>
                        <p><input type="radio" name="ap_question1" checked value="0"> Moderately effective</p>
                        <p><input type="radio" name="ap_question1" value="1"> Slightly effective</p>
                        <p><input type="radio" name="ap_question1" value="2"> Ineffective. His decision will yield inappropriate pricing</p>
                    </div>
                    <div class="form-group">
                        <label>62. Following is an advertisement issued by a home goods company:<br><br>Our new line of dishware is a perfect addition to your kitchen! Our dishes are…<br><br>- Bright and colorful, made from safe, non-toxic materials.<br>- Durable! won’t break even if dropped on tile.<br>- Always affordable.</label>
                        <p>Which customer is the company most likely targeting with this ad?</p>
                        <p><input type="radio" name="ap_question2" value="-2"> A retired couple furnishing their vacation cabin</p>
                        <p><input type="radio" name="ap_question2" value="-1"> A young couple with several small children</p>
                        <p><input type="radio" name="ap_question2" checked value="0"> An executive woman in her mid-40s who travels a lot</p>
                        <p><input type="radio" name="ap_question2" value="1">A middle-aged couple living in an urban setting</p>
                        <p><input type="radio" name="ap_question2" value="2"> An interior designer furnishing a luxury apartment for a new client</p>
                    </div>
                    <div class="form-group">
                        <label>63. Some employees tell their supervisor that their teammate Victor is making rude remarks that are making them feel uncomfortable. The supervisor reprimands Victor when she notices the comments. Victor brushes off the comments jokingly, and the matter isn’t revisited again. How effective is the supervisor’s response to the situation?</label>
                        <p><input type="radio" name="ap_question3" value="-2"> Highly effective. An ideal response</p>
                        <p><input type="radio" name="ap_question3" value="-1"> Very effective. A good response, but one or more aspects could be better</p>
                        <p><input type="radio" name="ap_question3" checked value="0"> Moderately effective. A reasonable response, but the solution is incomplete or may have unintended consequences</p>
                        <p><input type="radio" name="ap_question3" value="1"> Slightly effective. There is a positive element to the response, but it generally does not address the situation very well</p>
                        <p><input type="radio" name="ap_question3" value="2"> Ineffective. This response does nothing to address the situation or could have negative consequences</p>
                    </div>
                    <div class="form-group">
                        <label>64. Rae is a restaurant manager who recently switched her team to a new point-of-sale system. Most of the team say that they like the new system, but one team member tells Rae that he’s having trouble using it. Rae responds, “Everyone else seems to think the new point-of-sale system is excellent, and the restaurant has invested a lot in this. You’re just going to need to get on board.” How effective is Rae’s response?</label>
                        <p><input type="radio" name="ap_question4" value="-2"> Highly effective. An ideal response</p>
                        <p><input type="radio" name="ap_question4" value="-1"> Very effective. A good response, but one or more aspects could be better</p>
                        <p><input type="radio" name="ap_question4" checked value="0"> Moderately effective. A reasonable response, but the solution is incomplete or may have unintended consequences</p>
                        <p><input type="radio" name="ap_question4" value="1"> Slightly effective. There is a positive element to the response, but it generally does not address the situation very well</p>
                        <p><input type="radio" name="ap_question4" value="2"> Ineffective. This response does nothing to address the situation or could have negative consequences</p>
                    </div>
                    <div class="form-group">
                        <label>65. A salesperson approaches a customer who’s browsing in a car lot.<br><br>SALEPERSON: Hello, what can I help you find?<br>CUSTOMER: I’m just browsing; I’m not sure if I’m ready to buy a new car yet. I’m not looking to spend a lot of money. I really just need something for commuting.<br>SALEPERSON:I would suggest this model. It’s really affordable and practical, and has great fuel economy, too.</label>
                        <p>How effective is the salesperson’s response?</p>
                        <p><input type="radio" name="ap_question5" value="-2"> Highly effective. An ideal response</p>
                        <p><input type="radio" name="ap_question5" value="-1"> Very effective. A good response, but one or more aspects could be better</p>
                        <p><input type="radio" name="ap_question5" checked value="0"> Moderately effective. A reasonable response, but the solution is incomplete or may have unintended consequences</p>
                        <p><input type="radio" name="ap_question5" value="1"> Slightly effective. There is a positive element to the response, but it generally does not address the situation very well</p>
                        <p><input type="radio" name="ap_question5" value="2"> Ineffective. This response does nothing to address the situation or could have negative consequences</p>
                    </div>
                    <div class="form-group">
                        <label>66. A retail sales clerk talks to a customer.<br><br>CLERK:Would you like to save 15% by signing up for the store credit card? You would save about $20 today and get access to special sales.<br>CUSTOMER: Thanks, but I’m not interested. I wouldn’t pass the credit check, and I don’t think a new credit card is a good idea for me right now.<br>CLERK:A lot of customers think they won’t pass the credit check, but they usually do. Do you really think your credit is worse than theirs?</label>
                        <p>How effective is the clerk’s response?</p>
                        <p><input type="radio" name="ap_question6" value="-2"> Highly effective. An ideal response</p>
                        <p><input type="radio" name="ap_question6" value="-1"> Very effective. A good response, but one or more aspects could be better</p>
                        <p><input type="radio" name="ap_question6" checked value="0"> Moderately effective. A reasonable response, but the solution is incomplete or may have unintended consequences</p>
                        <p><input type="radio" name="ap_question6" value="1"> Slightly effective. There is a positive element to the response, but it generally does not address the situation very well</p>
                        <p><input type="radio" name="ap_question6" value="2"> Ineffective. This response does nothing to address the situation or could have negative consequences</p>
                    </div>
                    <div class="form-group">
                        <label>67. After a sales associate spends 20 minutes helping a customer find three products throughout the store, the customer asks for help finding a fourth product. The sales associate says he has another appointment, but tells the customer he thinks it is “around Aisle 10.” How effective is the sales associate’s response to this situation?*</label>
                        <p><input type="radio" name="ap_question7" value="-2"> Highly effective. An ideal response</p>
                        <p><input type="radio" name="ap_question7" value="-1"> Very effective. A good response, but one or more aspects could be better</p>
                        <p><input type="radio" name="ap_question7" checked value="0"> Moderately effective. A reasonable response, but the solution is incomplete or may have unintended consequences</p>
                        <p><input type="radio" name="ap_question7" value="1"> Slightly effective. There is a positive element to the response, but it generally does not address the situation very well</p>
                        <p><input type="radio" name="ap_question7" value="2"> Ineffective. This response does nothing to address the situation or could have negative consequences</p>
                    </div>
                    <div class="form-group">
                        <label>68.A customer calls the sales representative at a house painting company.<br><br>CUSTOMER:Why did your crew also paint my guest bedroom? That wasn’t on the list of rooms to be painted.<br>CUSTOMERS SERVICE REPRESENTATIVE: We must have had a miscommunication earlier. I’m so sorry about this. I’ll deduct the charge for the room from your bill.</label>
                        <p>How effective is the painting company representative’s response to this customer?</p>
                        <p><input type="radio" name="ap_question8" value="-2"> Highly effective. An ideal response</p>
                        <p><input type="radio" name="ap_question8" value="-1"> Very effective. A good response, but one or more aspects could be better</p>
                        <p><input type="radio" name="ap_question8" checked value="0"> Moderately effective. A reasonable response, but the solution is incomplete or may have unintended consequences</p>
                        <p><input type="radio" name="ap_question8" value="1"> Slightly effective. There is a positive element to the response, but it generally does not address the situation very well</p>
                        <p><input type="radio" name="ap_question8" value="2"> Ineffective. This response does nothing to address the situation or could have negative consequences</p>
                    </div>
                    <input type="button" name="previous" class="previous btn btn-default btn-block" value="Previous" />
                    <input type="submit" name="submit" class="submit btn btn-success btn-block" value="Submit" id="submit_data" />
                </fieldset>
            </form>

        </div>
    </div>
</body>

</html>
<script type="text/javascript">
    $(document).ready(function() {
        var current = 1,
            current_step, next_step, steps;
        steps = $("fieldset").length;
        $(".next").click(function() {
            current_step = $(this).parent();
            next_step = $(this).parent().next();
            next_step.show();
            current_step.hide();
            setProgressBar(++current);
        });
        $(".previous").click(function() {
            current_step = $(this).parent();
            next_step = $(this).parent().prev();
            next_step.show();
            current_step.hide();
            setProgressBar(--current);
        });
        setProgressBar(current);
        // Change progress bar action
        function setProgressBar(curStep) {
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
                .css("width", percent + "%")
                .html(percent + "%");
        }
    });
</script>