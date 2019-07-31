<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
require_once 'php/functions.php';
require_once 'php/db.php';

if(isset($_SESSION['id'])){ 
    $affichage = $pdo->prepare('SELECT * FROM info_members_pro WHERE id_members = ?');
    $affichage->execute(array($_SESSION['id']));
    $donnee = $affichage->fetch();
    
}
if($demarage['confirmed_at']!=NULL){
?>


<div class="text-center autre"><span class="tai">How did you become who you are?</span></div></br>
<div class="container-fluid">	
		<div class="row">
			<div class="col-md-4"></div>
	  		<div class="col-md-4"><span class="ecrit">Level of study: <?php echo $donnee['level']; ?></span></br>
								  <span class="ecrit">Previous training: <?php echo $donnee['establishment']; ?></span></br>
								  <span class="ecrit">My future job: <?php echo $donnee['future_job']; ?></span></div></br>
	  		<div class="col-md-4"></div>
		</div>

		<div class="row">
			<div class="col-md-1"></div>
  			<div class="col-md-1"></div>
  			<div class="col-md-1"></div>
	  		
		</div>
		</br>
		<div class="row">
			<div class="col-md-1"></div>
  			<div class="col-md-1"></div>
  			<div class="col-md-1"></div>
  			<div class="col-md-1"><span class="tai2">Description</span></div>
	  		<div class="col-md-4"><span class="tai3">How may I help you ?</span></div>
	  		
	  	</div>


	  	<div class="row">
	  		<div class="col-md-4"></div>
	  		<div class="col-md-4"><a href="#" class="list-group-item list-group-item-success"><?php echo $donnee['top1']; ?></a></div>
	  		<div class="col-md-4"></div>
	  	</div>
	  	<div class="row">
	  		<div class="col-md-4"></div>
	  		<div class="col-md-4"><a href="#" class="list-group-item list-group-item-info"><?php echo $donnee['top2']; ?></a></div>
	  		<div class="col-md-4"></div>
	  	</div>
	  	<div class="row">
	  		<div class="col-md-4"></div>
	  		<div class="col-md-4"><a href="#" class="list-group-item list-group-item-warning"><?php echo $donnee['top3']; ?></a></div>
	  		<div class="col-md-4"></div>
	  	</div>
	  	<div class="row">
	  		<div class="col-md-4"></div>
	  		<div class="col-md-4"> <a href="#" class="list-group-item list-group-item-danger"><?php echo $donnee['top4']; ?></a></div>
	  		<div class="col-md-4"></div>
	  	</div>
	  	<div class="row">
	  		<div class="col-md-4"></div>
	  		<div class="col-md-4"><a href="#" class="list-group-item list-group-item-success"><?php echo $donnee['top5']; ?></a></div></br></br>
	  		<div class="col-md-4"></div>
	  	</div>
	  </br>
	  	<div class="row">
	  		<div class="col-md-4"></div>
	  		<div class="col-md-4"><h5>My domain</h5></div>
	  		<div class="col-md-4"></div>
	  	</div>
	  	<div class="row">
	  		<div class="col-md-4"></div>
	  		<div class="col-md-4"><span class="ecrit"><?php echo $donnee['fields']; ?></span></div></br></br>
	  		<div class="col-md-4"></div>
	  	</div>
	  	<div class="row">
			<div class="col-md-1"></div>
  			<div class="col-md-1"></div>
  			<div class="col-md-1"></div>
	  		
		</div>
	</br>
		<div class="row">
			<div class="col-md-1"></div>
  			<div class="col-md-1"></div>
  			<div class="col-md-1"></div>
	  		<div class="col-md-1"><span class="tai2">My carrer</span></div>
	  		<div class="col-md-4"><span class="tai3">My life today</span></div>
	  	</div>
	  	<div class="row">
	  		<div class="col-md-4"></div>
	  		<div class="col-md-4  exit2"><p><?php echo $donnee['story']; ?></p></div>
	  		<div class="col-md-4"></div>
	  	</div>
	  </br>
	  	<div class="row">
	  		<div class="col-md-4"></div>
	  		<div class="col-md-4"><span class="tai3">My life in high school</span></div>
	  		<div class="col-md-4"><h5></h5></div>
	  	</div>
	  	<div class="row">
	  		<div class="col-md-4"></div>
	  		<div class="col-md-4 exit2"><p ><?php echo $donnee['profile']; ?></p></div>
	  		<div class="col-md-4"></div>
	  	</div>
	</div>


</div>
<?php } else {?>
	<br/>
	<div class="alert alert-danger text-center"><span class="tai">confirm your registration received by email to complete your profile</span></div></br>
<?php 
}
?>


<?php
