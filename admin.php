<?php
if(isset($_POST["noticebtn"]))
{
 $connect = mysqli_connect("localhost", "root", "", "project1");
$notice = $_POST["notice"];

$qry = "INSERT INTO `notice`(`id`, `notice`, `uploaded time`) VALUES ('','$notice','timestamp')";
$result = mysqli_query($connect, $qry);

 if($result)
 {
echo "done";
 }
 else
 {
    echo "not done";
 }
} 
?>
 
 
 
 
 
 
 
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row" >
            <div class="col-md-6 mx-auto">
                <form method="post">
                    <div class="form-group">
                        
                        <label for="notice"></label>
                        <textarea name="notice" placeholder="enter notice here" id="" cols="30" rows="10" class="form-control" ></textarea>
                    </div>
                    <div class="form form-group" >
                        <button class="btn btn-success" name="noticebtn"  class="form-control" >
                            add notice here...
                        </button>
                    </div>
                </form>

            </div>

        </div>

    </div>
    










<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>