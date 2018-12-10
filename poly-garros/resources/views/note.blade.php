 <!DOCTYPE html>
 <html>
 <head>
 	<title>note</title>
 	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 </head>
 <body>
 
             <div class=""> 
				<?php 
				foreach($Note as $key )
				{				   
					echo '
					<div class="panel-body msg_container_base ">
						<div class="row msg_container base_receive btn-primary  ">
						    <div class="col-md-2 col-xs-2 avatar">
						        <img src="index.png" class=" img-responsive ">
						    </div>
						    <div class="col-md-10 col-xs-10">
						        <div class="messages msg_receive">
									<button type="button" class="btn btn-secondary btn-lg disabled">From : <label id=" " name="">'.$key ->note_interne_emetteur.'</label></button>
									<button type="button" class="btn btn-secondary btn-lg disabled">To : <label id=" " name="">'.$key ->note_interne_recepteur.'</label></button>
									 <button type="button" class="btn btn-danger btn-lg  pull-right" id=" '.$key ->note_interne_id.'" value="'.$key ->note_interne_id.'">delet</button>
									<div class="alert alert-primary" role="alert" id=" " name="">'.$key ->note_interne_commentaire.'</div>
						         </div>

						    </div>
						</div>                 								
					</div>
					';
				}
				?>
				<form  method="post" action="note">
						@csrf   {{-- // importan tp validate the request  --}}
						<!-- add -->
						<div class="panel-footer btn-secondary  ">
							<div class="">
								<div class="">
							 		<label for="comment">Commentaire:</label>
									<textarea class="form-control" rows="5" name="comment"></textarea>
								</div>
							    <label for="usr">de:</label>
								<input type=" " class=" form-control" name="commentFrom" >
								<label for="pwd">À:</label>
								<input type=" " class=" form-control" name="commentTO">
								<!-- button send -->
					 
							    <input class="btn btn-primary btn-lg btn-block"name="submit" type="submit" >
							</div>
						</div>
				</form> 
    		</div>


<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>