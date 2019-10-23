<?php include 'header.php'; ?>
<?php if(isset($_POST['savePage'])){
    var_dump($_POST);
    $page_title = $_POST['pageTitle'];
    $page_no = $_POST['pageNo'];
    $content = $_POST['content'];
    

    $sql = "INSERT INTO page_content(page_title, page_no, content) VALUES('$page_title', '$page_no', '$content')";
    
    if($conn->query($sql) === true){
        echo 'Inserted Successfully';
    }
    
}
?>
<div class="text-center">
    <h3 class="text text-primary my-3">Create New page</h3>

    <form action="" method="POST" class="form-group">
        <input type="text" name="pageTitle" placeholder="Page Title" class="form-control">
        <input type="text" name="pageNo" placeholder="Page No" class="form-control my-3">
        <textarea name="content" id="" cols="30" rows="10" placeholder="Page Content" class="form-control mb-3"></textarea>
        <input type="submit" value="Save Page" name="savePage"class="btn btn-primary btn-block w-50 m-auto">
    
    </form>
</div>

<?php include 'footer.php'; ?>