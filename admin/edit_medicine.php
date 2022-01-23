
<!doctype html>
<html lang="en">
<?php 
    include('layout/header.php');
    include('process/connection.php');
    $id = $_GET['id'];
    $sql = "SELECT * from medicines where id= ".$id;
    $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $medicines = $row;
          }
        }
    ?>
?>
<body>
    <main style="background: #bddee9;">
        <?php
            include('layout/sidebar.php');
        ?>

        <div class="container">
            <div class="row text-center"> <h2>Pharmacheck</h2> </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Add Medicine</li>
                    <!-- <li class="breadcrumb-item active" aria-current="page">Add Pharmacy</li> -->
                </ol>
            </nav>

            <div class="card">
                <div class="card-body">
                    <form method="post" action="process/save_medicine.php?id=<?php echo $medicines['id'] ?>" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Medicine Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="medicine" name="medicine" value="<?php echo $medicines['medicine']; ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Brand</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="brand" name="brand" value="<?php echo $medicines['brand']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" ><?php echo $medicines['description']; ?></textarea>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="price" name="price" value="<?php echo $medicines['price']; ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="file">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">New Arrival</label>
                            <div class="col-sm-10">
                                <input type="checkbox" name="new_arrival" value="1" <?php if($medicines['new_arrival'] == 1) echo "checked"; ?>>
                            </div>
                        </div>

                        <button class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="js/sidebars.js"></script>
    <script>
        function addpharm(){
          var cloneDiv = $("#childdiv").clone();
          cloneDiv.find("select").val("");
          cloneDiv.find("input").val("");
          $("#maindiv").append(cloneDiv);
        }
    </script>
</body>
</html>
