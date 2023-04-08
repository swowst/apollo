
<?php require_once 'header.php'?>
<?php require_once "../db.php"?>
<?php require_once "./functions/error.php" ?>
<?php require_once "./functions/helper.php"?>
<div>
    <h1>Section 2</h1>

    <?php

        $query=$db->prepare('Select * from section_2 limit 1');
        $query->execute();
        $section = $query->fetch();


//        if (isset($_GET['error']) && $_GET['error']=='data' ){
//            echo "<h2 style='color: red'> Melumatlari Doldurun</h2>";
//        }
//
//        if (isset($_GET['success']) &&  $_GET['success']==true ){
//            echo "<h2 style='color: green'> Melumatlar elave edildi</h2>";
//        }


    ?>

    <form action="./functions/section_2.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Enter title">
        <br>
        <br>
        <textarea name="text" placeholder="Enter text"></textarea>
        <br>
        <br>


        <?php

        if (isset($section['image'])){
            ?>
            <img src="<?php echo getİmage($section['image']); ?>" alt="">
        <?php

        }

        ?>
        <input type="file" name="image">



        <br>
        <br>
        <input type="text" name="facebook" placeholder="facebook">
        <br>
        <br>
        <input type="text" name="instagram" placeholder="Enter instagram">
        <br>
        <br>
        <input type="text" name="twitter" placeholder="Enter twitter">
        <br>
        <br>
        <input type="text" name="pinterest" placeholder="Enter pinterest">
        <br>
        <br>
        <button>Save</button>
    </form>
</div>
<?php require_once 'footer.php'?>
