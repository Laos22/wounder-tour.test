<?php require($_SERVER['DOCUMENT_ROOT']. '/admin/partials/header.php'); ?>



            <!-- Begin Page Content -->
            <div class="container-fluid">
                <?php
                if (isset($_GET['page'])) {
                    if ($_GET['page'] === 'add') {
                        require($_SERVER['DOCUMENT_ROOT'] . '/admin/modules/posts/add.php');
                    } else if ($_GET['page'] === 'edit') {
                        require($_SERVER['DOCUMENT_ROOT'] . '/admin/modules/posts/edit.php');
                    } else if ($_GET['page'] === 'delete') {
                        require($_SERVER['DOCUMENT_ROOT'] . '/admin/modules/posts/delete.php');
                    }
                } else {
                    require($_SERVER['DOCUMENT_ROOT']. '/admin/modules/posts/all.php'); 
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