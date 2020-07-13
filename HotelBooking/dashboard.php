<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="style.css" rel="stylesheet">
<?php
include 'config.php';
//echo'<pre>';print_r($con);exit;
if (isset($_POST['search'])) {
    $city = $_POST['city'];
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $room_count = $_POST['room_count'];
//echo'<pre>';print_r($city);exit;
    $sql = "select * from master_rooms where city='$city'";
    $res = mysqli_query($con,$sql);
   //echo'<pre>';print_r(mysqli_num_rows($res));exit;
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            ?>
            <div class="col-md-6">
                <div class="hotel_name">
            <?php echo $row['hotel_name']; ?>
                </div>
                <div class="hotel_image">
                    <img src="room_image/<?php echo $row['room_image']; ?>" width="500" height="300"/>
                </div>
                <div class="price">
            <?php echo $row['price']; ?>
                </div>
                <div class="contact_no">
            <?php echo $row['contact_no']; ?>
                </div>
                <form action="booking.php" method="post">
                    <input type="hidden" name="city" value="<?php echo $city; ?>">
                    <input type="hidden" name="from_date" value="<?php echo $from_date; ?>">
                    <input type="hidden" name="to_date" value="<?php echo $to_date; ?>">
                    <input type="hidden" name="room_count" value="<?php echo $room_count; ?>">
                    <input type="hidden" name="hotel_name" value="<?php echo $row['hotel_name']; ?>">
                    <input type="hidden" name="room_image" value="<?php echo $row['room_image']; ?>">
                    <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                    <input type="hidden" name="contact_no"  value="<?php echo $row['contact_no']; ?>">
                    <input type="submit" name="book" value="Book">
                </form>
            </div>

            <?php
        }
    } else {
        echo "Sorry! No Rooms Available at this Moment";
    }
}
?>
