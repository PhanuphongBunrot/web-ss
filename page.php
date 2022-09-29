<style>
    img.a {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 700px;
        height: 450px;
    }
</style>

<?php
include "header.php";

$db = mysqli_connect("localhost", "root", "", "web-ssit");
$key =  $_GET['key'];


$query = " select * from performance WHERE id = $key ";
$result = mysqli_query($db, $query);

while ($data = mysqli_fetch_assoc($result)) {
?>
    <h1 style="text-align:center"><?php echo $data["Heading"] ?></h1>

    <img class="a" src="uploads/<?php echo $data['filename']; ?>">
    <br>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <p>
            <?php echo $data["Detail"] ?>
        </p>
        <br>
        <p style="font-size: 10px ;">
        <?php echo date("d/m/Y ", strtotime($data['Date'])); ?>
    </p>
        </div>

        <div class="col-md-2"></div>
    </div>

    
<?php   }
?>

<?php
include "endder.php";

?>