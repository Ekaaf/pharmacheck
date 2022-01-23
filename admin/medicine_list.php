
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
                    <li class="breadcrumb-item"><a href="#">Medicines</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Medicine List</li>
                </ol>
            </nav>

            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>Medicine</th>
                            <th>Brand</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                                include('process/connection.php');
                                $sql = "SELECT * FROM medicines";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                  while($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?=$row['medicine'];?></td>
                                <td><?=$row['brand'];?></td>
                                <td><?=$row['description'];?></td>
                                <td><?=$row['price'];?></td>
                                <td><img class="img-fluid" src="<?=$row['image'];?>" style="max-width: 150px;"></td>
                                <th>
                                    <button type="button" class="btn btn-success"><a href="edit_medicine.php?id=<?php echo $row['id']; ?>" style="color: white;">Edit</a></button>
                                    <button type="button" class="btn btn-danger" onclick="deleteMed('<?php echo $row['id']; ?>');">Delete</button>
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
                window.location.href = "http://localhost/pharmacheck/admin/process/medicine_delete.php?id="+id;
            } else {
              // check = "You canceled!";
            }
        }
    </script>
</body>
</html>
