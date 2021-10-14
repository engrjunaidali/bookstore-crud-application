<?php 
    include "component.php";
    include "db.php";
    include "operations.php";



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0cf70e162d.js" crossorigin="anonymous"></script>

    <!-- Custom Style -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div class="container text-center">
        <h1 class="my-2 py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook text-light"></i> BookStore</h1>
        <div class="d-flex justify-content-center">
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" class="w-50">
                <?php

                        inputElement("<i class='fas fa-id-badge'></i>","ID","id","");
                        inputElement("<i class='fas fa-book'></i>","Book Name","book_name","");
                    
            ?>
                <div class="row">
                    <div class="col">
                        <?php inputElement("<i class='fas fa-tag'></i>","Price","book_price","");
            ?>
                    </div>
                    <div class="col">
                        <?php inputElement("<i class='fas fa-people-carry'></i>","Publisher","book_publisher","");?>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <div class="row">
                    <button id="btn-create" class="btn btn-success px-5" name="create" data-toggle="tooltip"
                        data-placement="bottom" title="Create">Create</button>
                    </div>
                    
                    <!-- <button id="btn-read" class="btn btn-primary" name="read" data-toggle="tooltip"
                        data-placement="bottom" title="Read">Read</button>
                    <button id="btn-update" class="btn btn-light border" name="read" data-toggle="tooltip"
                        data-placement="bottom" title="Update">Update</button>
                    <button id="btn-delete" class="btn btn-danger" name="delete" data-toggle="tooltip"
                        data-placement="bottom" title="Delete">Delete</button> -->
                </div>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Book Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Publisher</th>
                            <th scope="col">Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $q = "SELECT * FROM books";
                            $result = mysqli_query($con,$q);
                            $num = mysqli_num_rows($result);

                            if($num > 0){
                                while($r = mysqli_fetch_assoc($result)){
                                    ?>
                        <tr>
                            <th scope='row'> <?php echo $r['id']?></th>
                            <td><?php echo $r['book_name']?></td>
                            <td><?php echo $r['book_price']?></td>
                            <td><?php echo $r['book_publisher']?></td>
                            <td>
                                <button class="btn btn-danger">
                                    <a class="text-light" href="delete.php?id=<?php echo $r['id'];?>">Delete</a>
                                </button>
                            </td>
                        </tr>


                        <?php
                                }    
                                
                            }
                            else{
                                
                                echo "Record Found...";

                            }
                        ?>

                    </tbody>
                </table>

            </form>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
</body>

</html>