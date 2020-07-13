<?php
include 'config.php';
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="style.css" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Hotel Bookings</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="text-center" >Hotel Bookings</h2>
                    <hr>
                    <form class="form-horizontal" id="searchform" action="dashboard.php" method="post">
                        <div class="form-group">
                            <label>City<span class="text-danger">*</span></label>
                            <select name="city" id="city" class="form-control">
                                <option value=""></option>
                                <option value="Bangalore"> Bangalore </option>
                                <option value="Chennai"> Chennai </option>
                                <option value="Coimbatore"> Coimbatore </option>                                      
                                <option value="Ooty"> Ooty </option>
                            </select> 
                        </div>
                        <div class="form-group">
                            <label for="pword">From Date <span class="text-danger">*</span></label>
                            <input class="form-control" name="from_date" type="text" id="from_date"/>
                        </div>
                        <div class="form-group">
                            <label for="pword">To Date <span class="text-danger">*</span></label>
                            <input class="form-control" name="to_date" type="text" id="to_date" required"/>
                        </div>
                        <div class="form-group">
                            <label for="pword">Room Count <span class="text-danger">*</span></label>
                            <input class="form-control" name="room_count" type="number" id="room_count" required/>
                        </div>
                        <div class="col-md-offset-5">
                            <input class="btn btn-danger" name='search' type="submit" value='search'>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>


<script> 

$(document).ready(function() {

$('#from_date').datepicker(
    {
        minDate: 0
    });

$('#to_date').datepicker(
    {
        minDate: 0
    });

});

</script> 