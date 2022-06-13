
<?php session_start();


// Set Language variable
if(isset($_GET['lang']) && !empty($_GET['lang'])){
 $_SESSION['lang'] = $_GET['lang']; 

 //if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){echo "<script type='text/javascript'> location.reload(); </script>";}

 }







?>




<!doctype html>
<html>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <body >
 

 <!-- Language -->
 <div class="container text-center">
 
 <form method='get' action='index.php' id='form_lang' >
   Select Language : <select class="my-4 form-control" name='lang' onchange='changeLang();' >
  
   <option value='eng' <?php if(isset($_SESSION['lang']) && $_SESSION['lang']=='eng'){ ?> selected <?php } ?> >English</option>
   <option value='esp' <?php if(isset($_SESSION['lang']) && $_SESSION['lang']=='esp'){ ?> selected <?php } ?> >Espanol</option>
  </select>
 </form>
 
 </div>

<!-- Form -->




<div class="container text-center">
	<div class="row">
	
	<?php // Include Language file
if(isset($_SESSION['lang'])){
 include "lang_".$_SESSION['lang'].".php";
}else{
 include "lang_eng.php";
}?>
	
	</div>
</div>


 
 
 <script>
 
 function changeLang(){
  document.getElementById('form_lang').submit();
 }
 
 </script>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
 
 
 
 
 
 
 
 </body>
</html>