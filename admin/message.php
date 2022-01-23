
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
                    <li class="breadcrumb-item active" aria-current="page">Add Pharmacy</li>
                </ol>
            </nav>

            <div class="card">
                <div class="card-body">
                    <?php  
                        if(isset($_GET['success'])){
                    ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $_GET['message']; ?>
                    </div>
                    <?php  }
                        if(isset($_GET['error'])){
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_GET['message'];?>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="js/sidebars.js"></script>
</body>
</html>
