<?php
require_once '../header.php';
require_once '../../db.php';
require_once './../functions/helper.php';


$query=$db->prepare('Select * from slider ');
$query->execute();
$sliders = $query->fetchAll(PDO::FETCH_ASSOC);


?>





<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Type</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php

        foreach ($sliders as $slider){
            ?>

            <tr>
                <td><?= $slider['id'] ?></td>
                <td><img width="50" height="50" src="<?= getImage($slider['image']) ?>" alt=""></td>
                <td>Slider <?=  $slider['type'] ?></td>
                <td>
                    <a href="./update.php?id=<?= $slider['id'] ?>">edit</a>

                    <form action="">
                        <td> <button>Delete</button></td>
                    </form>
                </td>
                </td>

            </tr>
            <?php
        }

        ?>





        <tbody>

    </table>

</div>



<?php require_once '../footer.php' ?>
