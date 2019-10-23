<?php include 'header.php'; ?>
<?php 
    $sql = "SELECT id, page_title, page_no FROM page_content";
    $result = $conn->query($sql);

    if(isset($_POST['deletePage'])){
        $id = $_POST['deleteID'];
        
        $sql = "DELETE FROM page_content WHERE id= '$id' ";

        if($conn->query($sql) === TRUE){
            echo 'Page Deleted Successfully';
           
        }
    }

?>
<div class="text-center mt-3">

<h2 class="text text-primary">User Manual</h2>
<h3 class="d-inline ml-5 float-left text-primary">List Of page</h3>
<h3 class="d-inline mr-5 float-right"><a href="../admin/create-user-manual.php" class="text-decoration-none btn btn-primary">Create New Page</a></h3>

<table class="table table-bordered">
    <tr>
        <th>Serial no.</th>
        <th>Title of Page</th>
        <th>Page no</th>
        <th class="w-25">Actiion</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['page_title']; ?></td>
        <td><?php echo $row['page_no']; ?></td>
        <td>
            <a href="../admin/edit-user-manual.php?sl=<?php echo $row['id']; ?>" class="btn btn-primary">Edit Page</a>
           <form action="" method="POST">
               <input type="hidden" name="deleteID" value="<?php echo $row['id']; ?>">
               <input type="submit" value="Delete Page" name="deletePage" id="deletePagebtn" class="btn btn-danger">
           </form>
            
        </td>
    </tr>
    <?php endwhile ?>
</table>
</div>



<?php include 'footer.php'; ?>