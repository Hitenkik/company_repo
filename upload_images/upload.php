<!DOCTYPE html>

<body>

    <?php
    if (isset($_FILES["myfile"])) {
        // echo "<pre>";
        // print_r($_FILES);
        // echo "</pre>";
        move_uploaded_file($_FILES["myfile"]["tmp_name"], "upload_images/" . $_FILES["myfile"]["name"]);
    }
    ?>

    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit">
    </form>
</body>

</html>