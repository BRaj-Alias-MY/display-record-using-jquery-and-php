<?php 
$mysqli = new mysqli("localhost", "root", "", "test");
/* check db connection connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//get post value 
$employeeId = $_POST['employeeId'];
//generating default login ID
$sql = "select * from employees where empid='".$employeeId."'";
$execute = $mysqli->query($sql);
$row = $execute->fetch_array(MYSQLI_BOTH);

echo "<input type='hidden' id='ename' value='".$row['ename']."'/>";
echo "<input type='hidden' id='desg' value='".$row['desg']."'/>";
echo "<input type='hidden' id='salary' value='".$row['salary']."'/>";


?>