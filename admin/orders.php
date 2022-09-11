
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
                    <li class="breadcrumb-item"><a href="#">Orders</a></li>
                </ol>
            </nav>

            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>Medicine</th>
                            <th>Order Date</th>
                            <th>Price</th>
                            <th>Delivery Address</th>
                            <th>Delivery Type</th>
                            <th>Payment Method</th>
                            <th>Delivery Date</th>
                            <th>User</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                            include('process/connection.php');
                            $sql = "SELECT orders.*, GROUP_CONCAT(medicines.medicine) AS medicine, users.email FROM orders INNER JOIN order_medicines ON orders.id = order_medicines.order_id INNER JOIN medicines ON medicines.id = order_medicines.med_id
INNER JOIN users ON orders.user_id = users.id ";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                // var_dump($row);exit;
                        ?>
                        <tr>
                            <td><?php echo $row['medicine'] ?></td>
                            <td><?php echo $row['order_date'] ?></td>
                            <td><?php echo $row['total'] ?></td>
                            <td><?php echo $row['delivery_address'] ?></td>
                            <td><?php echo $row['delivery_type'] ?></td>
                            <td><?php echo $row['payment_method'] ?></td>
                            <td>
                                <?php 
                                    if(is_null($row['delivery_date'])){
                                        echo "Not Delivered";
                                    }
                                    else{
                                        echo $row['delivery_date'];
                                    }
                                ?>
                            </td>
                            <td><?php echo $row['email'];?></td>
                            <td>
                                <?php 
                                    if(is_null($row['delivery_date'])){
                                ?>     
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="setid(<?php echo $row['id'];?>);">
                                    Mark As Delivered
                                </button>
                            <?php }?>
                            </td>
                        </tr>

                        <?php }}?>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" action="process/delivered.php">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delivery</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id" id="id">
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Delivery Time</label>
            <div class="col-sm-8">
                <input type="datetime-local" class="form-control" id="delivery_date" name="delivery_date">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="js/sidebars.js"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            console.log( "ready!" );
        });

        function deletePharmacy(id){
            var check;
            if (confirm("Are your sure you want to delete?") == true) {
                window.location.href = "http://localhost/pharmacheck/admin/process/pharmacy_delete.php?id="+id;
            } else {
              // check = "You canceled!";
            }
        }

        function setid(id){
            $("#id").val(id);
        }
    </script>
</body>
</html>
