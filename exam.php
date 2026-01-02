<?php
include 'db.php';
session_start();

if($_SESSION['user_type']!='U'){
    header("Location: login.php");
}

$user = $_SESSION['username'];

/* Get student's course */
$res = mysqli_query($conn,"SELECT course FROM std_details WHERE email='$user'");
$row = mysqli_fetch_assoc($res);
$course = $row['course'];

/* Get course_id */
$res2 = mysqli_query($conn,"SELECT course_id FROM courses WHERE course_name='$course'");
$row2 = mysqli_fetch_assoc($res2);
$course_id = $row2['course_id'];

/* Fetch questions */
$questions = mysqli_query($conn,"SELECT * FROM questions WHERE course_id='$course_id'");
?>
<!DOCTYPE html>
<html>
<head>
<title>Exam</title>
</head>
<body>

<h2><?php echo $course; ?> Exam</h2>

<form method="post" action="submit_exam.php">
<?php
$i=1;
while($q=mysqli_fetch_assoc($questions)){
?>
<p>
<b>Q<?php echo $i++; ?>. <?php echo $q['question']; ?></b><br>
<input type="radio" name="ans[<?php echo $q['question_id']; ?>]" value="A"> <?php echo $q['option_a']; ?><br>
<input type="radio" name="ans[<?php echo $q['question_id']; ?>]" value="B"> <?php echo $q['option_b']; ?><br>
<input type="radio" name="ans[<?php echo $q['question_id']; ?>]" value="C"> <?php echo $q['option_c']; ?><br>
<input type="radio" name="ans[<?php echo $q['question_id']; ?>]" value="D"> <?php echo $q['option_d']; ?><br>
</p>
<?php } ?>

<input type="hidden" name="course_id" value="<?php echo $course_id; ?>">
<input type="submit" value="Submit Exam">
</form>

</body>
</html>
