<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'fromdb');
?>

<DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container col-lg-6">
        <h1 class="text-center text-danger">Get data from Database</h1>
        <form>
           Username: <input type="text" name="" class="form-control"><br>

           password: <input type="password" name="" class="form-control"><br>

           Degrees:<select class="form-control" onchange="myfun(this.value)">
                    <option>Select Any One</option>
                    
                    <?php
                    $q = "select * from degree";
                    $result = mysqli_query($con,$q);
                    while($rows = mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $rows['mid']; ?>"> <?php echo $rows['degrees']; ?> </option>
                    
                    <?php
                    }
                    
                    ?>
                    
                    </select><br>
                   Class: <select class="form-control" id="dataget">
                            <option>Choose Any One</option>
                            </select>
                            <br></br>

                    <button class="btn btn-danger
                    
                    
                    
                    
                    ">Submit</button>
        </form>
    <div>

<script type="text/javascript">
    function myfun(datavalue){
        $.ajax({
            url:'class.php',
            type:'POST',
            data:{datapost : datavalue},
            success:function(result){
                $('#dataget').html(result);
            }
        });
    }

</script>


</body>
</html>