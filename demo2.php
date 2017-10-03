<?php
if(isset($_REQUEST['done'])){
    $time = date('dmy') . round(microtime(true) * 1000);
    $filename =  $_FILES['pp']['name'];
    echo $filename."<br>";
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    echo $filetype."<br>";
    echo 'new name :- '.$time.'.'.$filetype;
}
    
?>
<html>
    <body>
        <form action="#" method="post"  enctype="multipart/form-data">
            <input type="file" name="pp"></input>
            <input type="number" max="10">
            <input type="submit" name="done" value="done"></input>
        </form>
    </body>
</html>
