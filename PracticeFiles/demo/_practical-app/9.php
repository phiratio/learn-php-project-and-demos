<?php
$name = "SomeName";
$value = 100;
$expiration = time() + (60*60*24*7);
setcookie($name,$value,$expiration);
session_start();
$_SESSION['name'] = 'zdrkpkaksi bepce sex?';
?>
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">


	<?php
    if(isset($_GET['penis'])) {
        print_r($_GET);
    }
	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	
	?>

                <?php echo $_SESSION['name'];
                session_destroy(); ?>
                <a href="9.php?penis=big&maikati=moq">click here</a>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>