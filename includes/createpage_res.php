<?php session_start();
include_once('page.php');
include_once('library.php');

	if(empty($_POST['pagename'])){
 			$error.= "you have not entered page name<br>";
 	}
 	if(empty($_POST['pagecontent'])){
 			$error.= "you have not entered pagecontent<br>";
 	}	
	if (!empty($error))	{	
 	}
 	else{	
 	   		echo " ".$error;  
 	}

			$pagename=Mod_addslashes($_POST['pagename']);
 		    $pagecontent=Mod_addslashes($_POST['pagecontent']);
 		    $userid=$_SESSION['userid'];	
 			

 		if($_POST['btncreatepage']) {		
 		    		
         	$addpage=new Page();
 			$res=$addpage->Adduserpage($userid,$pagename,$pagecontent);
 			if($res>0){
 				echo "<script>alert('page info is added successfuly')</script>";
 				echo "<script>window.location='../public/viewpages.php'</script>";
 			}	
 		    else{
 		    	echo "<script>alert('page info not added.');<script>";
 				echo "<script>window.location='../public/viewpages.php'</script>";
 			}
 	   }

 	   if($_POST['btnmodifypage']){	
 	               
 		    	$pageid=$_POST['pageid'];	
         	$modpage=new Page();
 			$modres=$modpage->updateuserpage($pageid,$userid,$pagename,$pagecontent);
 			
 			if($modres>0){
 				echo "<script>alert('page info is updated successfuly')</script>";
 				echo "<script>window.location='../public/viewpages.php'</script>";
 			}	
 		    else{
 		    	echo "<script>alert('page info not updated.');<script>";
 				echo "<script>window.location='../public/viewpages.php'</script>";
 			}
 	   }

 	   


 	   

 		





?>