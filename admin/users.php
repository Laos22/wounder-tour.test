<?php require($_SERVER['DOCUMENT_ROOT']. '/admin/partials/header.php'); ?>



            <!-- Begin Page Content -->
            <div class="container-fluid">
                <?php
                

                if (isset($_GET['page'])) {
                    if ($_GET['page'] === 'add') {
                        require($_SERVER['DOCUMENT_ROOT']. '/admin/modules/users/add.php'); 
                    } else {
                        require($_SERVER['DOCUMENT_ROOT']. '/admin/modules/users/edit.php'); 
                    }
                } elseif (isset($_GET['namepost'])) {
                    if ($_GET['namepost'] === 'edit') {
                        $sql = "UPDATE `users` SET `username` = '" . $_POST['name'] . "', `email` = '" . $_POST['email'] . "' WHERE `users`.`id` = " . $_GET['id'] . ";";
                        if (mysqli_query($conn, $sql)) {
                        } else {
                            echo "Ошибка изминения данных: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    } elseif ($_GET['namepost'] === 'add') {
                        $sql = "INSERT INTO `users` (`username`, `email`, `password`, `role`) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "', '". $_POST['role'] . "');";
                            if (mysqli_query($conn, $sql)) {
                            } else {
                                echo "Ошибка ввода данных: " . $sql . "<br>" . mysqli_error($conn);
                            }
                    }
                    require($_SERVER['DOCUMENT_ROOT']. '/admin/modules/users/all.php'); 
                } else {

                    require($_SERVER['DOCUMENT_ROOT']. '/admin/modules/users/all.php'); 
                }

                
                
                ?> 
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
</div>
        

    
    
</div>
<?php require($_SERVER['DOCUMENT_ROOT']. '/admin/partials/footer.php'); ?>