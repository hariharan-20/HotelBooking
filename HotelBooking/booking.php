<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/

css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"><script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="style.css" rel="stylesheet">
<?php
include 'config.php';
// echo'<pre>';print_r($_POST);exit;
if (isset($_POST['book'])) 
{
    $hotel_name = $_POST['hotel_name'];
    $city = $_POST['city'];
    $rc = $_POST['room_count'];  //client searched room count
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $roomsbooked = "select SUM(room_count) as rooms_booked from rooms_bookings WHERE hotel_name='$hotel_name' AND from_date<='$from_date' AND to_date>='$from_date'";
    $roomsbooked_res = mysqli_fetch_assoc(mysqli_query($con,$roomsbooked));  
    $roomsbooked_response = $roomsbooked_res['rooms_booked'] + $rc;
//    echo'<pre>';print_r($roomsbooked_res['rooms_booked']);
    
    $roomcount = "select room_count from master_rooms WHERE hotel_name='$hotel_name' AND city='$city'";
    $roomcount_res = mysqli_fetch_assoc(mysqli_query($con,$roomcount));
    $roomcount_response = $roomcount_res['room_count'];
//    echo'<pre>';print_r($roomcount_response);exit;
    if($roomsbooked_response <= $roomcount_response)
    {
?>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="text-center" >Hotel Bookings</h2>
                    <hr>
                    <div class="hotel_name">
                        <?php echo $hotel_name; ?>
                    </div>
                    <div class="hotel_image">
                        <img src="room_image/<?php echo $_POST['room_image']; ?>" width="500" height="300"/>
                    </div>
                   
                    <form class="form-horizontal" id="finishbooking" action="finishbooking.php" method="post">
                        <input class="form-control" name="city" type="hidden" id="city" value="<?php echo $city; ?>"/>
                        <input class="form-control" name="hotel_name" type="hidden" id="hotel_name" value="<?php echo $hotel_name; ?>"/>
                        <div class="form-group">
                            <label>Name on Booking<span class="text-danger">*</span></label>
                            <input class="form-control" name="name" type="text" id="name" required/> 
                        </div>
                        <div class="form-group">
                            <label for="pword">Mobile Number<span class="text-danger">*</span></label>
                            <input class="form-control" name="mobile_no" type="text" id="mobile_no" required/>
                        </div>
                        <div class="form-group">
                            <label for="pword">From Date <span class="text-danger">*</span></label>
                            <input class="form-control" name="from_date" type="text" id="from_date" value="<?php echo $from_date;?>"  readonly/>
                        </div>
                        <div class="form-group">
                            <label for="pword">To Date <span class="text-danger">*</span></label>
                            <input class="form-control" name="to_date" type="text" id="to_date"  value="<?php echo $to_date;?>"  readonly/>
                        </div>
                        <div class="form-group">
                            <label for="pword">Room Count <span class="text-danger">*</span></label>
                            <input class="form-control" name="room_count" type="number" id="room_count"  value="<?php echo $rc;?>"  readonly/>
                        </div>
                        
                        <div class="col-md-offset-5">
                            <input class="btn btn-danger" name='finish_booking' type="submit" value='Book Hotel'>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<?php
    }   
    else
    {
        echo "Sorry! Requested Room's Not Available For These Selected Dates.";
?>
<br>
<br>
<a href="index.php">Go Back</a>
<?php
    }
}
?>
