<?php include 'header.php'; ?>
<?php 
$sql = "SELECT page_index, page_title, page_no FROM page_content";
$result = $conn->query($sql);


?>
<div class="container">
    <h3 class="my-3">Table of Content</h3>
    <table class="table table-bordered">
        <tr>
            <td>Index No.</td>
            <td>Page Title</td>
            <td>Page No.</td>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['page_index']; ?></td>
            <td> <a href="user-manual-view.php?page=<?php echo $row['page_no']; ?>" class="text-dark text-decoration-none" target="_blank"><?php echo $row['page_title']; ?></a> </td>
            <td><?php echo $row['page_no']; ?></td>
        </tr>
        <?php endwhile; ?>
        
    </table>
</div>




<?php include 'footer.php'; ?>