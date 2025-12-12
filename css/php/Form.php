<?php 

if ($_SERVER["REQUEST_METHOD"]== "POST") {

    $fname = htmlspecialchars($_Post["fname"]);
    $lname = htmlspecialchars($_Post["lname"]);
if (empty($fname)) {

    exit();

}
  
if (empty($lname)) {

    exit();
    
}
    echo "These are the data, that the user submitted";
    echo"<br>";
    echo $fname;
    echo "<br>";
    echo $lname;

    header("Location: index.html");
}
else {
    header("Location: index.html");
}