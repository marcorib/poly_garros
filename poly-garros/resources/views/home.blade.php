@extends('crudbooster::admin_template')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">

			<form  method="post">
				{{ csrf_field() }}


				<div class="cities">
					<label for="usr">De :</label>
					<input type=" " class=" form-control" name="commentFrom" >

					<label for="pwd">Pour :</label>
					<input type=" " class=" form-control" name="commentTO">

					<div class="">
						<label for="comment">Commentaire :</label>
						<textarea class="form-control" rows="5" name="comment"></textarea>
					</div>

					<input class="btn btn-primary btn-md "name="submit" type="submit" >
				</div>

			</form> 
		</div>
		<div class="col-sm-1"></div>
	</div>
</div>

<!-- formulaire d'envoi -->

<div class="container">

	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">

			@foreach($Note as $key)

			<div class="panel-body msg_container_base ">

				<div class="row msg_container base_receive btn-primary">

					<div class="col-md-10 col-xs-12">

						<div class="messages msg_receive">
							

							<button type="button" class="btn btn-outline-secondary btn-rounded waves-effect">De : <label id=" " name="">{{$key ->note_interne_emetteur}}</label></button>

							<button type="button" class="btn btn-outline-secondary btn-rounded waves-effect">Pour : <label id=" " name="">{{$key ->note_interne_recepteur}}</label></button>
							
							<form  method="get" action="admin">
								<button name="delete" type="submit" class="btn btn-default btn-close pull-right" id="{{$key ->id}}" value="{{$key ->id}}">Supprimer</button>
							</form>
							
							<div class="alert form-control-sm" role="alert" id=" " name="">{{$key ->note_interne_commentaire}}</div>
						</div>

					</div>
				</div>                 								
			</div>
			

			@endforeach
		</div>
	</div>
	<div class="col-sm-1"></div>

<!-- button top -->
	<button onclick="topFunction()" id="myBtn" title="Retour haut de page" class="">Top</button>

</div>

<!-- affichage des notes -->

@endsection

<script>

	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		document.getElementById("myBtn").style.display = "block";
	} else {
		document.getElementById("myBtn").style.display = "none";
	}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
	}
</script>



<style>

.cities 
	{
		background-color: #3A4357;
		color: white;
		margin: 20px;
		padding: 20px;
		border-radius: 16px;
	}


#myBtn 
	{
		display: none;
		position: fixed;
		bottom: 20px;
		right: 30px;
		z-index: 99;
		font-size: 18px;
		border: none;
		outline: none;
		background-color: rgb(23, 33, 90);
		color: white;
		cursor: pointer;
		padding: 15px;
		border-radius: 5px;
	}

#myBtn:hover 
	{
		background-color: rgb(236, 0, 0);
	}

.btn 
	{
		padding: 15px 25px;
		font-size: 24px;
		text-align: center;
		cursor: pointer;
		outline: none;
		color: #fff;
		background-color: #4CAF50;
		border: none;
		border-radius: 15px;
		box-shadow: 0 9px #999;
	}

.btn:hover {background-color: #3e8e41}

.btn:active 
	{
		background-color: #3e8e41;
		box-shadow: 0 5px #666;
		transform: translateY(4px);
	}
</style>