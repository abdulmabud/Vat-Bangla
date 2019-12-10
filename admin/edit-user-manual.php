<?php include 'header.php'; ?>
<?php
 if(isset($_POST['updatePage'])){
    var_dump($_POST);
    $id = $_POST['id'];
    $page_title = $_POST['pageTitle'];
    $page_no = $_POST['pageNo'];
    $content = $_POST['content'];
    $id = $_POST['id'];
    

    $sql = "UPDATE page_content
     SET page_title = '$page_title',
         page_index = '$page_index',
         page_no = '$page_no',
         content = '$content'
        WHERE id = '$id'
         ";
    
    if($conn->query($sql) === true){
        echo 'Updated Successfully';
    }
    
}

if(isset($_GET['sl'])){
    $sl = $_GET['sl'];
    $sql = "SELECT * FROM page_content WHERE id = '$sl' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    // $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_assoc($result);
}else{
    die('Nothing to Show');
}
?>
<div class="text-center">
    <h3 class="text text-primary my-3">Edit page</h3>

    <form action="" method="POST" class="form-group">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="pageIndex" value="<?php echo $row['page_index']; ?>" class="form-control mb-3">
        <input type="text" name="pageTitle" value="<?php echo $row['page_title']; ?>" class="form-control">
        <input type="text" name="pageNo" value="<?php echo $row['page_no']; ?>" class="form-control my-3">
        <textarea name="content" id="" cols="30" rows="10" class="form-control mb-3"><?php echo $row['content']; ?></textarea>
        <input type="submit" value="Update Page" name="updatePage"class="btn btn-primary btn-block w-50 m-auto">
    
    </form>
</div>

<?php include 'footer.php'; ?>