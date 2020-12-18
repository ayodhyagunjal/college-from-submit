<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'fromdb');

$nameid = $_POST['datapost'];

$q = "select * from classes where mid = '$nameid'";
$result = mysqli_query($con,$q);
while($rows = mysqli_fetch_array($result)){
    ?>
    <option> <?php echo $rows['class']; ?> </option>

<?php
}

?>

