<?php 
include('connection.php');
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<style>
    .cen{
        text-align:center;
        margin:5%;
    }
    .form-class{
        display:flex;
        flex-direction:column;
        width:fit-content;
        justify-content:center;
    }
    .fc{
        display:flex;
        justify-content:center;
    }
    .bc{
        background-color:#F75757;
        border:none;
        color:white;

    }
    .bc:hover{
        background-color:red;
        border:none;
        color:white;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<?php
$q = "SELECT * FROM post";
$result = mysqli_query($conn,$q);

?>
<h2 class="container cen">Add Blogs</h2>

<div class="fc">
<form method="POST" class="form-class" enctype="multipart/form-data">
    <label>Post Name:</label>
    <input type="text" name="post_name">
    <label>Post Details:</label>
    <textarea name="post_details" rows="5" cols="30"></textarea>
    <label>Author:</label>
    <input type="text" name="post_author"/><br/>
    <label>Select Image: </label>
    <input type="file" name="image" /><br/>
    <input type="submit" name="submit" value="Add blog" class="btn bc"/>
</form>
</div>

<table class="table">
    <tr>
        <th>S.No</th>
        <th>Blog Names</th>
        <th>Blog Details</th>
        <th>Author</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)){ ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['pname']; ?></td>
        <td><?php echo $row['pdetails']; ?> </td>
        <td><?php echo $row['pauthor']; ?></td>
    </tr>
    <?php } ?>
</table>
<?php 
    if(isset($_POST['submit'])){
        $p_name = $_POST['post_name'];
        $p_details = $_POST['post_details'];
        $p_author = $_POST['post_author'];
        
        $target = "images/".basename($_FILES['image']['name']);
        $image = $_FILES['image']['name'];
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){

        }
         

        $s = "INSERT INTO post(pname, pdetails, pauthor,image) VALUES('$p_name','$p_details','$p_author','$image')";
        $r = mysqli_query($conn,$s);

    }
?>