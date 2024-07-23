<?php
include("templates/header.php");
?>
<?php
$id=$_GET['id'];
if($id){
    include("../connect.php");
    $sqlEdit="SELECT * FROM posts where id=$id";
    $result=mysqli_query($conn,$sqlEdit);
}else{
    echo "No post found";
}

?>

        <div class="create-form w-100 mx-auto" style="max-width: 700px;">
            <form action="process.php" method="post">
            <?php 
            while($data=mysqli_fetch_array($result)){
                ?>


           

                <div class="form-field mb-4">
                    <input type="text" 
                    name="title" 
                    id="title" 
                    placeholder="Enter title" 
                    class="form-control"
                    value="<?php echo $data["title"]?>"
                    
                    >
                </div>
                <div class="form-field mb-4">
                    <textarea name="summary" 
                    id="summary" 
                    cols="30" 
                    rows="10" 
                    placeholder="Enter summary" 
                    class="form-control"
                    value="<?php echo $data["summary"]?>"
                    ></textarea>
                </div>
                <div class="form-field mb-4">
                    <textarea name="content" 
                    id="content" cols="30" rows="10" 
                    placeholder="Enter the post" class="form-control"
                    value="<?php echo $data["content"];?>"
                    ></textarea>
                </div>
                <input type="hidden" name="date" value="<?php echo date('Y/m/d'); ?>">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <div class="form-field ">
                    <input type="submit" value="Submit" name="update" class="btn btn-primary"
                    
                    >
                </div>
                <?php    

            }
            ?>
            </form>
        </div>
<?php
include("templates/footer.php");
?>
