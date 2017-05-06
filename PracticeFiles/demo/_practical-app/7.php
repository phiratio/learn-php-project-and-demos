<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  
$connect = mysqli_connect("home.dev", "root", "", "phptraining");
if (!$connect){
    echo ("We have error");
}
    $query = "SELECT * FROM users";
    $result = mysqli_query($connect, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }else {
        while($data = mysqli_fetch_array($result)) {
            echo print_r($data);
        }
    }
	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
