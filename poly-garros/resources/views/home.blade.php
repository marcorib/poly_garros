@extends('crudbooster::admin_template')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">

			<form  method="post">
				{{ csrf_field() }}


				<div class="">
					<div class="">
						<label for="comment">Commentaire:</label>
						<textarea class="form-control" rows="5" name="comment"></textarea>
					</div>

					<label for="usr">De:</label>
					<input type=" " class=" form-control" name="commentFrom" >

					<label for="pwd">Pour:</label>
					<input type=" " class=" form-control" name="commentTO">

					<input class="btn btn-primary btn-lg btn-block"name="submit" type="submit" >
				</div>

			</form> 
		</div>
		<div class="col-sm-2"></div>
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

					<div class="col-md-2 col-xs-2 avatar">

						<img src="index.png" class=" img-responsive ">

					</div>

					<div class="col-md-10 col-xs-10">
						<div class="messages msg_receive">

							<button type="button" class="btn btn-secondary btn-lg disabled">De : <label id=" " name="">{{$key ->note_interne_emetteur}}</label></button>

							<button type="button" class="btn btn-secondary btn-lg disabled">Pour : <label id=" " name="">{{$key ->note_interne_recepteur}}</label></button>
							<form  method="get" action="admin">
								<button name="delete" type="submit" class="btn btn-danger btn-lg  pull-right" id=" {{$key ->id}}" value="{{$key ->id}}">Archiver</button>
							</form>

							<div class="alert alert-primary" role="alert" id=" " name="">{{$key ->note_interne_commentaire}}</div>
						</div>

					</div>
				</div>                 								
			</div>
			

			@endforeach
		</div>
	</div>
	<div class="col-sm-1"></div>

</div>

<!-- affichage des notes -->

@endsection