
<?php require_once '../header.php'?>
<?php require_once "../../db.php"?>
<?php require_once "../functions/error.php" ?>
<?php require_once "../functions/helper.php"?>
<div>
    <h1>Slider</h1>

    <?php

//    $query=$db->prepare('Select * from section_2 limit 1');
//    $query->execute();
//    $section = $query->fetch();


    //        if (isset($_GET['error']) && $_GET['error']=='data' ){
    //            echo "<h2 style='color: red'> Melumatlari Doldurun</h2>";
    //        }
    //
    //        if (isset($_GET['success']) &&  $_GET['success']==true ){
    //            echo "<h2 style='color: green'> Melumatlar elave edildi</h2>";
    //        }


    ?>

    <form action="./../functions/slider.php" method="POST" enctype="multipart/form-data">

        <?php

        if (isset($section['image'])){
            ?>
            <img src="<?php echo getİmage($section['image']); ?>" alt="">
            <br>
            <br>
            <?php

        }

        ?>

        <select name="type" id="">
            <option value="1">Slider 1</option>
            <option value="2">Slider 2</option>
        </select>

        <input type="file" name="image">
        <br>
        <br>
        <input type="hidden" name="action" value="create">
        <br>
        <br>
        <button>Save</button>
    </form>
</div>
<?php require_once '../footer.php'?>
