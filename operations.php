<?php 

include "db.php";

if (isset($_POST["create"])){

    $bookname = $_POST['book_name'];
    $bookprice = $_POST['book_price'];
    $bookpublisher = $_POST['book_publisher'];

    if($bookname && $bookprice && $bookpublisher){

        $sql = "    INSERT INTO books(book_name,book_price,book_publisher) 
                    VALUES ('$bookname','$bookprice','$bookpublisher')";

        $result = mysqli_query($con,$sql);
        if($result){
            // echo "RECORD INSERTED SUCCESSFULLY...";
            messageNode("success","Record inserted successfully...");
            // header("location:index.php");
        }

    } else{

        messageNode("error","Please fill all the fields...");
    }
    header("location:index.php");
}

// Messages
function messageNode($classname,$msg){
    echo "<h5 class='$classname'>$msg</h5>";
}
?>