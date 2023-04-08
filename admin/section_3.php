<?php require_once 'header.php'?>
<?php require_once "../db.php"?>
<?php require_once "./functions/error.php" ?>
<?php require_once "./functions/helper.php"?>
<div>
    <h1>Section 3</h1>

    <?php

        $querySection3=$db->prepare('Select * from section_3 limit 1');
        $querySection3->execute();
        $section = $querySection3->fetch();




    ?>

    <form action="./functions/section_3.php" method="POST" enctype="multipart/form-data">
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



        <button>Save</button>
    </form>
</div>
<?php require_once 'footer.php'?>

