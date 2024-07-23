<?php
include("templates/header.php");
?>
        <div class="create-form w-100 mx-auto" style="max-width: 700px;">
            <form action="process.php" method="post">
                <div class="form-field mb-4">
                    <input type="text" name="title" id="title" placeholder="Enter title" class="form-control">
                </div>
                <div class="form-field mb-4">
                    <textarea name="summary" id="summary" cols="30" rows="10" placeholder="Enter summary" class="form-control"></textarea>
                </div>
                <div class="form-field mb-4">
                    <textarea name="content" id="content" cols="30" rows="10" placeholder="Enter the post" class="form-control"></textarea>
                </div>
                <input type="hidden" name="date" value="<?php echo date('Y/m/d'); ?>">
                <div class="form-field ">
                    <input type="submit" value="Submit" name="create" class="btn btn-primary">
                </div>
            </form>
        </div>
<?php
include("templates/footer.php");
?>
