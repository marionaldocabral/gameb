<!DOCTYPE html>
<html>
<head>
	<title>GameB</title>

	<link rel="shortcut icon" href="{{url('feliz.png')}}" type="image/x-icon" />	
	<link rel="stylesheet" href="{!! url('bootstrap.min.css') !!}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="http://code.responsivevoice.org/responsivevoice.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style type="text/css">
    	.bt{
    		cursor: pointer;
    	}
    	a:link{
    		text-decoration: none;
    	}
    </style>
</head>
<body>
	<div style="width: 1200px; margin-left: auto; margin-right: auto; padding: 0px;">
		<div style="display: block;">
			<div>
				<div style="display: inline-block; width: 898px;">
					<h1>Pronto?</h1>
				</div>				
				<div style="display: inline-block; width: 120px; height: 80px;">
					<p id="pontos" style="font-size: 4em; margin-top: 0px; padding: 0px; text-align: right; font-style: italic;">0</p>
				</div>
				<div style="display: inline-block; width: 60px; height: 80px; position: absolute;">
					<img src="{!! url('moeda.png') !!}" style="height: 50px; position: relative; margin-bottom: -70px; margin-left: 5px; padding: 0px;">
				</div>
				<div style="display: inline-block; width: 120px; height: 80px;">
					<p id="trofeus" style="font-size: 4em; margin-top: 0px; padding: 0px; text-align: right; font-style: italic;">0</p>
				</div>
				<div style="display: inline-block; width: 60px; height: 80px; position: absolute;">
					<img src="{!! url('vencedor.png') !!}" style="height: 50px; position: relative; margin-bottom: -70px; margin-left: 5px; padding: 0px;">
				</div>
			</div>
		</div>
		<br>
		<div style="display: block;">
			<div style="display: inline-block; width: 600px;">
				<a class="btn btn-primary" href="#" id="prox">
					Outra >
				</a>
				<a class="btn btn-info" href="#" id="ler">
					<i class="fa fa-volume-up"></i>
				</a>

			</div>				
			<div style="display: inline-block; width: 590px; text-align: right;">
				<a class="btn btn-warning" href="{!! url('/') !!}" style="color: white">
					< Voltar
				</a>
			</div>
		</div>
		<br>
		<div>
			<div style="display: inline-block; width: 700px;">
				<table class="table">
					<thead>
					    <tr>
						    <th scope="col" id="question" class="bt" style="font-size: 1.5em">Pergunta</th>
					    </tr>
					</thead>
					<tbody style="font-size: 2em">
						<tr>
							<td id="option_a" class="bt">a)</td>							
						</tr>
						<tr>	
							<td id="option_b" class="bt">b)</td>
						</tr>
						<tr>							
							<td id="option_c" class="bt">c)</td>							
						</tr>
						<tr>							
							<td id="option_d" class="bt">d)</td>
						</tr>
					</tbody>
				</table>				
			</div>
			<div style="display: inline-block; position: absolute; width: 380px; text-align: right;">
				<div>
					<img id="img" src="{!! url('interrogacao.png') !!}" style="height: 300px">
				</div>
			</div>
			<div style="font-size: 3em; text-align: center; width: 1200px;">
				<div class="bt" id="answer_a" style="display: inline-block; width: 100px; height: 100px; border-radius: 50px; background: red; line-height: 90px; padding: 0 20px;">
					<a href="#" style="color: white;">A</a>	
				</div>
				<div class="bt" id="answer_b" style="display: inline-block; width: 100px; height: 100px; border-radius: 50px; background: green; margin-left: 100px; line-height: 90px; padding: 0 20px;">
					<a href="#" style="color: white;">B</a>
				</div>
				<div class="bt" id="answer_c" style="display: inline-block; width: 100px; height: 100px; border-radius: 50px; background: #FFBF00;margin-left: 100px; line-height: 90px; padding: 0 20px;">
					<a href="#" style="color: white;">C</a>
				</div>
				<div class="bt" id="answer_d" style="display: inline-block; width: 100px; height: 100px; border-radius: 50px; background: #0B0B61;margin-left: 100px; line-height: 90px; padding: 0 20px;">
					<a href="#" style="color: white;">D</a>
				</div>
			</div>
			<p id="resposta" style="color: white;"></p>
			<p id="tentou" style="color: white;"></p>
			<audio id="cavalo">
				@if($nivel == 'child')\
					<source src="{!! url('peninha.mp3') !!}" type="audio/mp3">
				@elseif($nivel == 'adult')
					<source src="{!! url('burro.mp3') !!}" type="audio/mp3">
				@endif
				Seu navegador não suporta o elemento audio.				
			</audio>
			<audio id="aplausos">
				<source src="{!! url('aplausos.mp3') !!}" type="audio/mp3">
				Seu navegador não suporta o elemento audio.				
			</audio>
			<audio src="" hidden class=speech></audio>
		</div>		
	</div>
	<script>
		function atualizar(){
            var url = '/question/lottery'
            var id = 0
            $.get(url, function(data, status){
                if(status == 'success'){
                    $('#question').text(data['question'])
                    $('#option_a').text('a) ' + data['option_a'])
                    $('#option_b').text('b) ' + data['option_b'])
                    $('#option_c').text('c) ' + data['option_c'])
                    $('#option_d').text('d) ' + data['option_d'])
                    $('#resposta').text(data['answer'])
                    $('#img').attr('src', '{!! url('interrogacao.png') !!}')
                    id = data['id']
                    return id
                }
            })
        }
		$(document).ready(function(){
			$("td").on("click", function(e){
				e.preventDefault()
			    var text = $(this).text()
			    responsiveVoice.speak(text,"Brazilian Portuguese Female");
			    text=encodeURIComponent(text);
			    var url="http://"
		    })
		    $("th").on("click", function(e){
			    e.preventDefault();
			    var text = $(this).text();
			    responsiveVoice.speak(text,"Brazilian Portuguese Female");
			    text=encodeURIComponent(text);
			    var url="http://"
		    })
			var nivel = '{!! $nivel !!}'
			$('#pontos').text('0')
			$('#tentou').text('0')
			var achei = true
			var qtd_perguntas = '{!! $qtd_perguntas !!}'
			qtd_perguntas = parseInt(qtd_perguntas)
			var anteriores = localStorage.getItem('qtd')
			anteriores = parseInt(anteriores)
			while(achei && qtd_perguntas != anteriores){
				var id = atualizar()
				var anterior = localStorage.getItem(id)
				if(anterior == null){
					achei = false
					localStorage.setItem(id, 'true')
					var qtd = localStorage.getItem('qtd')
					qtd = parseInt(qtd)
					qtd++
					localStorage.setItem('qtd', qtd)
				}
			}
			$('#answer_a').click(function(){
				var x = $('#tentou').text()
				x = parseInt(x) 
				if(x == 0){
					var resposta = $('#resposta').text()
					//acertou
					if(resposta == 'A'){						
						var audio = document.getElementById('aplausos')
						audio.play()
						var pts = $('#pontos').text()
						pts = parseInt(pts) + 10
						$('#pontos').text(pts)
						if(parseInt($('#pontos').text()) % 100 == 0){
							$('#img').attr('src', '{!! url('vencedor.png') !!}')							
							var qtd = parseInt($('#trofeus').text())
							qtd++
							$('#trofeus').text(qtd)
						}
						else
							$('#img').attr('src', '{!! url('feliz.png') !!}')
					}
					//errou
					else{
						if(nivel == 'adult')
							$('#img').attr('src', '{!! url('burro.png') !!}')
						else if(nivel == 'child')
							$('#img').attr('src', '{!! url('triste.gif') !!}')
						var audio = document.getElementById('cavalo')
						audio.play()
						$('#prox').text('Tentar novamente >')
					}
					$('#tentou').text('1')
				}
			})
			$('#answer_b').click(function(){
				var x = $('#tentou').text()
				x = parseInt(x) 
				if(x == 0){
					var resposta = $('#resposta').text()
					//acertou
					if(resposta == 'B'){						
						var audio = document.getElementById('aplausos')
						audio.play()
						var pts = $('#pontos').text()
						pts = parseInt(pts) + 10
						$('#pontos').text(pts)
						if(parseInt($('#pontos').text()) % 100 == 0){
							$('#img').attr('src', '{!! url('vencedor.png') !!}')							
							var qtd = parseInt($('#trofeus').text())
							qtd++
							$('#trofeus').text(qtd)
						}
						else
							$('#img').attr('src', '{!! url('feliz.png') !!}')
					}
					//errou
					else{
						if(nivel == 'adult')
							$('#img').attr('src', '{!! url('burro.png') !!}')
						else if(nivel == 'child')
							$('#img').attr('src', '{!! url('triste.gif') !!}')
						var audio = document.getElementById('cavalo')
						audio.play()
						$('#prox').text('Tentar novamente >')
					}
					$('#tentou').text('1')
				}
			})
			$('#answer_c').click(function(){
				var x = $('#tentou').text()
				x = parseInt(x) 
				if(x == 0){
					var resposta = $('#resposta').text()
					//acertou
					if(resposta == 'C'){
						var audio = document.getElementById('aplausos')
						audio.play()
						var pts = $('#pontos').text()
						pts = parseInt(pts) + 10
						$('#pontos').text(pts)
						if(parseInt($('#pontos').text()) % 100 == 0){
							$('#img').attr('src', '{!! url('vencedor.png') !!}')
							var qtd = parseInt($('#trofeus').text())
							qtd++
							$('#trofeus').text(qtd)
						}
						else
							$('#img').attr('src', '{!! url('feliz.png') !!}')
					}
					//errou
					else{
						if(nivel == 'adult')
							$('#img').attr('src', '{!! url('burro.png') !!}')
						else if(nivel == 'child')
							$('#img').attr('src', '{!! url('triste.gif') !!}')
						var audio = document.getElementById('cavalo')
						audio.play()
						$('#prox').text('Tentar novamente >')
					}
					$('#tentou').text('1')
				}
			})
			$('#answer_d').click(function(){
				var x = $('#tentou').text()
				x = parseInt(x) 
				if(x == 0){
					var resposta = $('#resposta').text()
					//acertou
					if(resposta == 'D'){
						var audio = document.getElementById('aplausos')
						audio.play()
						var pts = $('#pontos').text()
						pts = parseInt(pts) + 10
						$('#pontos').text(pts)
						if(parseInt($('#pontos').text()) % 100 == 0){
							$('#img').attr('src', '{!! url('vencedor.png') !!}')
							var qtd = parseInt($('#trofeus').text())
							qtd++
							$('#trofeus').text(qtd)
						}
						else
							$('#img').attr('src', '{!! url('feliz.png') !!}')
					}
					//errou
					else{
						if(nivel == 'adult')
							$('#img').attr('src', '{!! url('burro.png') !!}')
						else if(nivel == 'child')
							$('#img').attr('src', '{!! url('triste.gif') !!}')
						var audio = document.getElementById('cavalo')
						audio.play()						
						$('#prox').text('Tentar novamente >')
					}
					$('#tentou').text('1')
				}
			})
			$('#prox').on('click', function(e){				
				if($('#tentou').text() == 1){
					atualizar()
					$('#tentou').text('0')
					if($(this).text() == 'Tentar novamente >'){
						$(this).text('Outra >')
						$('#pontos').text('0')
						localStorage.clear()
						localStorage.setItem('qtd', '0')
					}
				}
			})
			$('#ler').on('click', function(e){
				e.preventDefault()
				var text = $('#question').text() + '... ' + $('#option_a').text() + '... ' + $('#option_b').text() + '... ' + $('#option_c').text() + '... ' + $('#option_d').text()
				responsiveVoice.speak(text,"Brazilian Portuguese Female");
				text=encodeURIComponent(text);
				var url="http://"
			})
		})
	</script>
</body>
</html>