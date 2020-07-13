<?php
include 'config.php';
//session_start();
//session_destroy();
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="style.css" rel="stylesheet">

<?php
if (isset($_POST['finish_booking'])) 
{
// echo'<pre>';print_r($_POST);exit;
    $sql = "insert into rooms_bookings(name,mobile_no,city,hotel_name,from_date,to_date,room_count) values('" . $_POST['name'] . "','" . $_POST['mobile_no'] . "','" . $_POST['city'] . "','" . $_POST['hotel_name'] . "','" . $_POST['from_date'] . "','" . $_POST['to_date'] . "','" . $_POST['room_count'] . "')";
    $res = mysqli_query($con,$sql);
      // echo'<pre>';print_r(mysqli_insert_id($con));exit;

    printf("Thanks for choosing us! Your Booking is confirmed and your booking id is HTBK0",mysqli_insert_id($con));
}
//include('footer.php');
?>
<div class="backtohome">
<a href="index.php">Back to home page</a>
</div>