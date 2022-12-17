<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<body>
    <h1>ENI's PAGE</h1>
    <h2>Careful it may contains bugs!</h2>

    <form method="get" action="buttonController.php">
    <input placeholder="id" type="idd" name="idd" value = "4" hidden>
    <input placeholder="id" type="id" name="id" value = "<?php echo $_SESSION["id"]?>" hidden>
    <button type="submit" name="submit" >Show info</button>
                 
    </form>
    

</body>


</html>
