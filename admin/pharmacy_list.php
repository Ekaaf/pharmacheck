
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
                    <li class="breadcrumb-item active" aria-current="page">Add Pharmacy</li>
                </ol>
            </nav>

            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Opening Time</th>
                            <th>Closing TIme</th>
                            <th>Delivery Type</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                                include('process/connection.php');
                                $sql = "SELECT * FROM pharmacies";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                  while($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?=$row['name'];?></td>
                                <td><?=$row['address'];?></td>
                                <td><?=$row['opening_time'];?></td>
                                <td><?=$row['closing_time'];?></td>
                                <td><?=$row['delivery_type'];?></td>
                                <th>
                                    <button type="button" class="btn btn-success">Edit</button>
                                    <button type="button" class="btn btn-danger" onclick="deletePharmacy('<?php echo $row['id']; ?>');">Delete</button>
                                </th>
                            </tr>
                            <?php
                                  }
                                } else {
                                }
                            ?>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>


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
    </script>
</body>
</html>
