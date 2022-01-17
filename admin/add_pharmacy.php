
<!doctype html>
<html lang="en">
<?php 
    include('layout/header.php');
?>
<body>
    <main>
        <?php
            include('layout/sidebar2.php');
        ?>

        <div class="container">
            <div class="row text-center"> <h2>Pharmacheck</h2> </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Pharmacy</a></li>
                    <!-- <li class="breadcrumb-item active" aria-current="page">Add Pharmacy</li> -->
                </ol>
            </nav>

            <div class="card">
                <div class="card-body">
                    <form method="post" action="process/save_pharmacy.php">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Pharmacy Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="address" name="address">
                                </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Opening Time</label>
                                <div class="col-sm-10">
                                    <input type="time" class="form-control" id="opening_time" name="opening_time">
                                </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Closing Time</label>
                                <div class="col-sm-10">
                                    <input type="time" class="form-control" id="closing_time" name="closing_time">
                                </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Delivery Type</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="delivery_type" id="delivery_type">
                                        <option value="">Select</option>
                                        <option value="Home Delivery">Home Delivery</option>
                                        <option value="PickUp">PickUp</option>
                                        <option value="PickUp">Both</option>
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
