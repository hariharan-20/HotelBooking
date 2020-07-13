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
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hotel Bookings</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="text-center" >Room Management</h2>
                    <hr>
                    <?php
if(isset ($_GET['id']))
{
	$id=$_GET['id'];
	if(isset($_POST['update']))
	{
			if($_FILES['room_image']['name'])
	{
		$array=array("jpg","jpeg","png","gif");
		$img=explode(".",$_FILES['room_image']['name']);
		$end=end($img);
		if(in_array($end,$array))
		{
			$picc = rand(10,99)."-". $_FILES['room_image']['name'];
			move_uploaded_file($_FILES['room_image']['tmp_name'],'room_image/'.$picc);
			
		}
	}
//        echo'<pre>';print_r($_POST);exit;
		$sql="update master_rooms set city='".$_POST['city']."',hotel_name='".$_POST['hotel_name']."',contact_no='".$_POST['contact_no']."',price='".$_POST['price']."',room_count='".$_POST['room_count']."',room_image='$picc'
		where room_id='$id'";
		$res=mysql_query($con,$sql);
		if($res)
		{
			echo "successfully updated";
                        header("location:admin_dashboard.php");
		}
	}
$sql="select * from master_rooms where room_id='$id'";
$res=mysql_query($con,$sql);
while($row=mysql_fetch_assoc($res))
{    
?>
                    <form class="form-horizontal" id="editform" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>City<span class="text-danger">*</span></label>
                            <select name="city" id="city" class="form-control">
                                <option value="Bangalore"<?php if ($row['city'] == "Bangalore") { ?> selected="selected"<?php } ?>>Bangalore</option>   
                                <option value="Chennai"<?php if ($row['city'] == "Chennai") { ?> selected="selected"<?php } ?>>Chennai</option>
                                <option value="Coimbatore"<?php if ($row['city'] == "Coimbatore") { ?> selected="selected"<?php } ?>>Coimbatore</option>
                                <option value="Ooty"<?php if ($row['city'] == "Ooty") { ?> selected="selected"<?php } ?>>Ooty</option>
                            </select> 
                        </div>
                        <div class="form-group">
                            <label for="hotel name">Hotel Name <span class="text-danger">*</span></label>
                            <input class="form-control" name="hotel_name" type="text" id="hotel_name" value="<?php echo $row['hotel_name'];?>" required/>
                        </div>
                        <div class="form-group">
                            <label for="contact number">Contact No <span class="text-danger">*</span></label>
                            <input class="form-control" name="contact_no" type="text" id="contact_no" value="<?php echo $row['contact_no'];?>" required/>
                        </div>
                        <div class="form-group">
                            <label for="price">Price <span class="text-danger">*</span></label>
                            <input class="form-control" name="price" type="text" id="price" value="<?php echo $row['price'];?>" required/>
                        </div>
                        <div class="form-group">
                            <label for="room count">Room Count <span class="text-danger">*</span></label>
                            <input class="form-control" name="room_count" type="number" id="room_count" value="<?php echo $row['room_count'];?>" required/>
                        </div>
                        <div class="form-group">
                            <label for="room image">Room Image <span class="text-danger">*</span></label>
                            <img src="room_image/<?php echo $row['room_image'];?>" width="100px" height="100px">
                            <input class="form-control" name="room_image" type="file" id="room_image" value="<?php echo $row['room_image'];?>"required/>
                        </div>
                        <div class="col-md-offset-5">
                            <input class="btn btn-danger" name='update' type="submit" value='update'>
                        </div>
                    </form>
                    <?php 
}
}
?>
                </div>
            </div>
        </div>
    </body>
</html>
