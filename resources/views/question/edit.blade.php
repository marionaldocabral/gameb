<!DOCTYPE html>
<html>
<head>
	<title>Questões</title>

	<link rel="shortcut icon" href="{{url('feliz.png')}}" type="image/x-icon" />		
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
				<h1>Editar Questão</h1>
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col">
				<a class="btn btn-warning" href="{!! url('/question') !!}" style="color: white;">
					< Voltar
				</a>
			</div>			
		</div>
		<br>
		<div class="row">
			<div class="col">
				<form method="POST" action="{!! url('/question/' . $question->id) !!}">
					{{ method_field('PATCH') }}
					{{ csrf_field() }}
					<div class="form-group">
					    <label for="nivel">Nível</label>
					    <select class="form-control" id="nivel" name="nivel" required>
					    	@if($question->nivel == 0)
					    		<option value="0">{!! 'Infantil' !!}</option>
					    	@elseif($question->nivel == 1)
					    		<option value="1">{!! 'Adulto' !!}</option>
					    	@endif
					    	<option value="0">Infantil</option>
					    	<option value="1">Adulto</option>
					    </select>
					</div>
					<div class="form-group">
					    <label for="nivel">Tema</label>
					    <input type="checkbox" id="ck_tema" style="margin-left: 20px;">Novo
					    <select class="form-control" id="tema" name="tema">
					    	<option>{!! $question->tema !!}</option>
					    	@foreach($temas as $tema)
					    		<option>{!! $tema->tema !!}</option>
					    	@endforeach
					    </select>
					    <p id="novo_tema"></p>
					</div>
					<div class="form-group">
					    <label for="question">Pergunta</label>
					    <input type="text" class="form-control" id="question" name="question" value="{!! $question->question !!}" required>
					</div>
					<div class="form-group">
					    <label for="option_a">Alternativa "A"</label>
					    <input type="text" class="form-control" id="option_a" name="option_a" value="{!! $question->option_a !!}" required>
					</div>
					<div class="form-group">
					    <label for="option_b">Alternativa "B"</label>
					    <input type="text" class="form-control" id="option_b" name="option_b" value="{!! $question->option_b !!}" required>			    
					</div>
					<div class="form-group">
					    <label for="option_a">Alternativa "C"</label>
					    <input type="text" class="form-control" id="option_c" name="option_c" value="{!! $question->option_c !!}" required>			    
					</div>
					<div class="form-group">
					    <label for="option_d">Alternativa "D"</label>
					    <input type="text" class="form-control" id="option_d" name="option_d" value="{!! $question->option_d !!}" required>			    
					</div>
					<div class="form-group">
					    <label for="answer">Resposta</label>
					    <select class="form-control" id="answer" name="answer" required>
					    	<option>{!! $question->answer !!}</option>
					    	<option>A</option>
					    	<option>B</option>
					    	<option>C</option>
					    	<option>D</option>
					    </select>					    
					</div>
					<button type="submit" class="btn btn-primary">+ Salvar</button>
				</form>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('#ck_tema').click(function(){
				if($(this).is(':checked') == true){
					$('#tema').hide()
					$('#novo_tema').html('<input type="text" class="form-control" id="novo_tema" name="tema" required>')
				}
				else{
					$('#novo_tema').html('<p id="novo_tema"></p>')
					$('#tema').show()
				}
			})			
		})		
	</script>
</body>
</html>