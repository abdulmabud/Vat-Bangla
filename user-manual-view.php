<?php include 'header.php'; ?>
<?php 
$page = $_GET['page'];

$sql = "SELECT * FROM page_content WHERE page_no = '$page'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
?>

<div class="container">
    <div class="image mt-2">
        <img src="image/webnslogo.png" alt="webnslogo" width="25%">
    </div>
    <?php echo str_replace("upload-path","admin/upload-path", $row['content'] ); ?>
</div>
<?php 

}else{ ?>

<div class="container text-center" style="height: 500px;">
    <h3 style="padding-top: 240px;">No Page Found</h3>
</div>

<?php 
  
}



?>




<?php include 'footer.php'; ?>