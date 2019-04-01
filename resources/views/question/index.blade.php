<!DOCTYPE html>
<html>
<head>
	<title>Questões</title>

	<link rel="shortcut icon" href="{{url('feliz.png')}}" type="image/x-icon" />		
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>Questões</h1>
			</div>			
		</div>
		<br>
		@include('admin.info')
		<div class="row">
			<div class="col">
				<div class="pull-left">
					<a class="btn btn-success" href="{!! url('/question/create') !!}">
						+ Nova
					</a>					
				</div>
				<div class="pull-right">
					<a class="btn btn-warning" href="{!! url('/') !!}" style="color: white;">
						< Voltar
					</a>					
				</div>				
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col">
				<table class="table">
					<thead>
					    <tr>
						    <th scope="col">Perguntas ({!! sizeof($questions) !!})</th>
						    <th scope="col">Nível</th>
						    <th scope="col">Tema</th>
						    <th scope="col">Ações</th>
					    </tr>
					</thead>
					<tbody>
						@foreach($questions as $question)
						    <tr>
							    <td>{!! $question->question !!}</td>
							    <td>
							    	@if($question->nivel == 0)
							    		{!! 'Infantil' !!}
							    	@elseif($question->nivel == 1)
							    		{!! 'Adulto' !!}
							    	@endif
							    </td>
							    <td>{!! $question->tema !!}</td>
							    <td>
							    	<a href = "{!! url('/question/' . $question->id . '/edit') !!}" title="Editar">
                                        <button class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                    </a>
							    	<form method="POST" action="{{ url('/question/' . $question->id ) }}" accept-charset="UTF-8" style="display:inline">
			                            {{ method_field('DELETE') }}
			                            {{ csrf_field() }}
			                            <button type="submit" class="btn btn-danger btn-sm" title="Excluir" onclick="return confirm(&quot;Confirma exclusão?&quot;)">
			                                <i class="fa fa-trash-o" aria-hidden="true"></i>
			                            </button>
			                        </form>
							    </td>
						    </tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>