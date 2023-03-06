
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary ">Перелік всіх турів</h6>
            <a href="?page=add" class="btn btn-success">Додати тур <i class="fas fa-plus-circle"></i></a>
        </div>    
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Назва туру</th>
                        <th>Кількість зірок</th>
                        <th>Опис туру</th>
                        <th>Ціна</th>
                        <th>Фото</th>
                        <th>Гарячий тур</th>
                        <th>Коригування</th>
                    </tr>
                </thead>
                <?PHP
                $sql = "SELECT * FROM tours";
                $result = mysqli_query($conn, $sql);
                while ($tour = $result->fetch_assoc()) {
                    
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $tour['id'] ?></td>
                        <td><?php echo $tour['title'] ?></td>
                        <td><?php echo $tour['stars'] ?></td>
                        <td><?php echo $tour['descrip'] ?></td>
                        <td><?php echo $tour['price'] ?></td>
                        <td><?php echo '<img src="/upload/' . $tour['image'] . '" alt="" width="250px">' ?></td>
                        <td><?php if ($tour['hot']) {
                            echo 'так';
                        } else {echo 'ні';};
                        ?></td>
                        <td>
                            <a href="?page=edit&id=<?php echo $tour['id']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Edit</a>
                            <a href="/admin/modules/posts/delete.php?id=<?php echo $tour['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                        </td>
                        <?php 
                    } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


