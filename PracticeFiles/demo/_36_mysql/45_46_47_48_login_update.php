<?php include "45_db.php";?>
<?php include "45_46_52_53_functions.php";?>

<?php UpdateTable();?>

<?php include "_includes/header.php" ?>

<div class="container">
    
    <div class="col-sm-6">
        <h1 class="text-center">Update</h1>
     <form action="45_46_47_48_login_update.php" method="post">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" title="username">
            </div>
            
             <div class="form-group">
                <label for="password">Password</label>
            <input type="password" name="password" class="form-control" title="password">
            </div>
            
             <div class="form-group">
             
             <select name="id" id="" title="update">
                <?php 
                showAllData();
                  ?>
             </select>
             
             </div>
            
            <input class="btn btn-primary" type="submit" name="submit" value="UPDATE" title="update">
            
        </form>
    
     
    </div>


<?php include "_includes/footer.php"?>