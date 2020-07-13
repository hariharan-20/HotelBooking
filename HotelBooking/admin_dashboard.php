<?php
include ('config.php');
//include ('function.php');
session_start();
//echo'<pre>';print_r($_SESSION);exit;
//if(isset($_SESSION['sessionname']))
//{
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
        <h2 class="text-center" >Room Management</h2>
        <a class="btn btn-primary" href="admin_master.php">Add Room</a>
        <table class="tableproduct">
            <tr>
                <th class="thproduct">S.No</th>
                <th class="thproduct">City</th>
                <th class="thproduct">Hotel Name</th>
                <th class="thproduct">Contact</th>
                <th class="thproduct">Price</th>
                <th class="thproduct">Room Count</th>
                <th class="thproduct">Action</th>
            </tr>
             <?php
            $sql = "select * from master_rooms";
            $res = mysql_query($con,$sql);
            $i = 1;
            while ($row = mysql_fetch_assoc($res)) {
                ?>
                <tr>
                    <td class="tdproduct"><?php echo $i++; ?></td>
                    <td class="tdproduct"><?php echo $row['city']; ?></td>
                    <td class="tdproduct"><?php echo $row['hotel_name']; ?></td>
                    <td class="tdproduct"><?php echo $row['contact_no']; ?></td>
                    <td class="tdproduct"><?php echo $row['price']; ?></td>
                    <td class="tdproduct"><?php echo $row['room_count']; ?></td>
                    <td class="tdproduct"><a href="admin_master_edit.php?id=<?php echo $row['room_id']; ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $row['room_id']; ?>">Delete</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>

    <style>
        .tableproduct {
            width: 100%;
            border: 1px solid black;
        }
        .tdproduct {
            border: 1px solid black;
            text-align: center;
        }
        .thproduct {
            height: 50px;
            text-align: center;
            border: 1px solid black;
        }
    </style>
</html>
