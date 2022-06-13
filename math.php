<?php 


include "mysql.php";

include "helps.php";

if (isset($_POST['addeqn'])){ 
		
	     $eqn=$_POST['eqn']; // ax^2 + bx + c=0
		 $eqn=explode('=', $eqn);  $temp_c=$eqn[1]; $eqn=$eqn[0]; 
		 
		  $break= explode('+', $eqn); $cnt= count($break);// print_r($break);
		  
		  $a=explode('x', $break[0]); $a=$a[0]; 
		  $b=explode('x', $break[1]); $b=$b[0];
		  if($cnt==3){$c=$break[2];}  else{ $c= -$temp_c; }
		  
		  
		 // echo $a,"=a ",$b,"=b =  "
		 //echo $cnt."...". $c;
		
		$insert="insert  into quardratic ( b,b2,a,c,2a) values('$b','$b','$a','$c','$a')";
		 $run=$db->insert($insert);
		
	// if($run){

		// $_session['brand']="brand added successfullly !";
		  header('location:math.php'); exit;
	// }
}
	
	

 
 ?>


<!doctype html>
<html>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>


 <body >
 
 
		
		    <form action=""  method="post" enctype="multipart/form-data" >
			
		    	<div class="row form-group mt-4">
		    		<div class="col-sm-1"><label for="name"><strong>Enter Equation</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group" type="text" name="eqn" id="eqn" required="" placeholder="Ex: ax^2 + bx +c = 0"  /> 
					
					</div>
					<input type="submit" name="addeqn" value="Add" class="px-3 py-2 btn btn-info  font-italic" />
					
		    	</div>
				
				
		    </form>
			
			
 

 <!-- Language -->
 
 <?php 
 
 $sel="select * from quardratic "; $res=$db->select($sel);
		
		while($row=$res->fetch_assoc()) { ?>
 
 <div class="container text-center">
 
 
	
<p><math display='block'> 
 <semantics>
  <mrow>  <mi>x</mi><mo> = </mo> 
   <mfrac>
    <mrow>  
     <mo>&#x2212;</mo><mi><?php echo $row['b']?></mi><mo>&#x00B1;</mo><msqrt>
      <mrow>
       <msup>
        <mi><?php echo $row['b2']?></mi>
        <mn>2</mn>
       </msup>
       <mo>&#x2212;</mo><mn><?php echo $row['4']."*"?></mn><mi><?php echo $row['a']."*"?></mi><mi><?php echo $row['c']?></mi></mrow>
     </msqrt>
     </mrow>
    <mrow>
     <mn>2</mn><mi><?php echo "*".$row['2a']?></mi></mrow>
   </mfrac>
   </mrow>
  <annotation encoding='MathType-MTEF'>MathType@MTEF@5@5@+=
  feaahqart1ev3aaatCvAUfeBSjuyZL2yd9gzLbvyNv2CaerbuLwBLn
  hiov2DGi1BTfMBaeXatLxBI9gBaerbd9wDYLwzYbItLDharqqtubsr
  4rNCHbGeaGqiVu0Je9sqqrpepC0xbbL8F4rqqrFfpeea0xe9Lq=Jc9
  vqaqpepm0xbba9pwe9Q8fs0=yqaqpepae9pg0FirpepeKkFr0xfr=x
  fr=xb9adbaqaaeGaciGaaiaabeqaamaabaabaaGcbaWaaSaaaeaacq
  GHsislcaWGIbGaeyySae7aaOaaaeaacaWGIbWaaWbaaSqabeaacaaI
  YaaaaOGaeyOeI0IaaGinaiaadggacaWGJbaaleqaaaGcbaGaaGOmai
  aadggaaaaaaa@40DF@
  </annotation>
 </semantics>
</math>
</p>


		<?php } ?>
 
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