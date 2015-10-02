<form action="<?php echo($_SERVER['PHP_SELF']);?>" method="post"
      enctype="multipart/form-data">
<!--   enctype = encoding  -->
    <input type="text" name="profileName" />

    <input type="file" name="avatar" />>

    <input type="submit" value="Upload Picture" />>

</form>

<?php

$type = $_FILES['avatar']['type'];
if($type != 'image/jpeg' || $type != 'image/png') {
echo 'You can only upload jpeg or png';
}

if(move_uploaded_file( //moving the uploaded file to the destination
    $_FILES['avatar']['tmp_name'], // source
    getcwd() . '/' . $_FILES['avatar']['name']) //getcwd = current working directory //destination
){

    echo '<img src="'.$_FILES['avatar']['name'].'"/>';

} else {
    'File has not moved';
}

echo '<pre>';
echo 'Files:';
print_r($_FILES);

echo '<br/>';

echo 'POST:';
print_r($_POST);



?>