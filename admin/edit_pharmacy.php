
<!doctype html>
<html lang="en">
<?php 
    include('layout/header.php');
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
                    <li class="breadcrumb-item"><a href="#">Pharmacy</a></li>
                    <!-- <li class="breadcrumb-item active" aria-current="page">Add Pharmacy</li> -->
                </ol>
            </nav>
            <?php 
            include('process/connection.php');
            $id = $_GET['id'];
            $sql = "SELECT * from pharmacies where id= ".$id;
            $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    $pharmacy = $row;
                  }
                }
            ?>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="process/save_pharmacy.php?id=<?php echo $id; ?>">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Pharmacy Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $pharmacy['name'];?>">
                                </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="address" name="address" value="<?php echo $pharmacy['address'];?>">
                                </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Opening Time</label>
                                <div class="col-sm-10">
                                    <input type="time" class="form-control" id="opening_time" name="opening_time" value="<?php echo $pharmacy['opening_time'];?>">
                                </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Closing Time</label>
                                <div class="col-sm-10">
                                    <input type="time" class="form-control" id="closing_time" name="closing_time" value="<?php echo $pharmacy['closing_time'];?>">
                                </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Delivery Type</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="delivery_type" id="delivery_type">
                                        <option value="">Select</option>
                                        <option value="Home Delivery" <?php if($pharmacy['delivery_type']=='Home Delivery') echo 'selected'; ?>>Home Delivery</option>
                                        <option value="PickUp" <?php if($pharmacy['delivery_type']=='PickUp') echo 'selected'; ?>>PickUp</option>
                                        <option value="Both" <?php if($pharmacy['delivery_type']=='Both') echo 'selected'; ?>>Both</option>
                                    </select>
                                </div>
                        </div>

                        <button class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="js/sidebars.js"></script>
</body>
</html>
