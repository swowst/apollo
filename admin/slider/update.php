
<?php require_once '../header.php'?>
<?php require_once "../../db.php"?>
<?php require_once "../functions/error.php" ?>
<?php require_once "../functions/helper.php"?>


    <?php
        if (!isset($_GET['id']) || empty($_GET['id']) || (int)$_GET['id'] == 0 ){
            redirect('../slider/index.php?error=data');
        }

        $query=$db->prepare('Select * from slider where id=?');
        $query->execute([$_GET['id']]);
        $slider = $query->fetch();

        if (!$slider){
            redirect('../slider/index.php?error=data');
        }
    ?>
<div>
    <h2>Slider</h2>
    <form action="./../functions/slider.php" method="POST" enctype="multipart/form-data">
        <img src="<?= getImage($slider['image']) ?>" alt="">
        <br>
        <br>
        <input type="file" name="image">
        <br>
        <br>

        <select name="type" id="">
            <option  <?php echo $slider['type']==1 ? "selected" : '' ?> value="1">Slider 1</option>
            <option  <?php  echo $slider['type']==2 ? "selected" : '' ?> value="2">Slider 2</option>
        </select>
        <br>
        <br>
        <input type="hidden" name="action" value="update">
        <br>
        <br>
        <input type="hidden" name="id" value="<?php echo $slider['id'] ?>">
        <br>
        <br>



        <button>Save</button>
    </form>
</div>


<?php require_once '../footer.php'?>
