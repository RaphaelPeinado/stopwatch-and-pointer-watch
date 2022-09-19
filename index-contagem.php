<!DOCTYPE html>
<html style="margin: 0; padding: 0;">
<head>
	<meta charset="UTF8">
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text&display=swap" rel="stylesheet">
	<title></title>
</head>
<body style="margin: 0; padding: 0;">
	<style type="text/css">
		/* RELOGIO ROTATIVO INDOOR */
		#clockContainer {
			position: relative;
			margin: -20px 0 0 10px;
			height: 121px;
			width: 121px;
		}
		#hour,
		#minute,
		#second {
			position: absolute;
			border-radius: 10px;
			transform-origin: bottom;
		}
		#hour {
			width: 1.8%;
			height: 25%;
			top: 25%;
			left: 48.85%;
			opacity: 0.8;
		}
		#minute {
			width: 1.6%;
			height: 30%;
			top: 19%;
			left: 48.9%;
			opacity: 0.8;
		}
		#second {
			width: 1%;
			height: 40%;
			top: 9%;
			left: 49.25%;
			opacity: 0.8;
		}
		.arte img, .p-rel{
			position: relative;
		}
		.p-abs, .p-rel img{
			position: absolute;
		}
		.p-abs{
			display: flex;
			top: 108px;
			left: 0px;
		}
		#hour img{
			width: 734%;
			top: -5px;
			left: -7px;
		}
		#minute img{
			width: 1085%;
			top: -13px;
			left: -9px;
		}
		#second img{
			width: 455%;
			top: -3px;
			left: -2px;
		}
		.timer-baile-vogue-wrap{
			font-family: 'Libre Caslon Text', serif;
			width: 150px;
			padding: 25px 0 0 1px;
		}
		.numeros-timer-baile-vogue-wrap{
			display: flex;
			justify-content: space-around;
		}
		.numeros-timer-baile-vogue-content{
			font-size: 24px;
			font-weight: bold;
			text-align: center;
			color: #ffffff;
		}
		.numeros-timer-baile-vogue-content p{
			font-size: 9px;
			margin: 0;
		}
	</style>
	<header>
		
	</header>
<main>
	<div class="container">
		<a href="https://www.instagram.com/p/CgxYwkxsi9b/" target="blank">
			<div class="arte">
				<img src="https://veci.com.br/swg/indoor-2022/bg-cron-indoor.jpg" style="width: 300px;">
				<div class="p-abs">
					<div class="timer-baile-vogue-wrap">
						<div class="numeros-timer-baile-vogue-wrap">
							<div class="numeros-timer-baile-vogue-content">
								<div></div>
								<p>Dias</p>
							</div><!-- /numeros-timer-baile-vogue-content -->
							<div class="numeros-timer-baile-vogue-content">
								<div></div>
								<p>Horas</p>
							</div><!-- /numeros-timer-baile-vogue-content -->
							<div class="numeros-timer-baile-vogue-content">
								<div></div>
								<p>Minutos</p>
							</div><!-- /numeros-timer-baile-vogue-content -->
							<div class="numeros-timer-baile-vogue-content">
								<div></div>
								<p>Segundos</p>
							</div><!-- /numeros-timer-baile-vogue-content -->
						</div><!-- /numeros-timer-baile-vogue-wrap -->
					</div><!-- /timer-baile-vogue-wrap -->
					<div id="clockContainer">
						<div id="hour">
							<div class="p-rel">
								<img src="https://veci.com.br/swg/indoor-2022/hora.png">
							</div>
						</div><!-- /hour -->
						<div id="minute">
							<div class="p-rel">
								<img src="https://veci.com.br/swg/indoor-2022/minuto.png">
							</div>
						</div><!-- /minute -->
						<div id="second">
							<div class="p-rel">
								<img src="https://veci.com.br/swg/indoor-2022/segundo.png">
							</div>
						</div><!-- /second -->
					</div><!-- /clockContainer -->
				</div><!-- /p-abs -->
			</div><!-- /arte -->
		</a>
	</div><!-- container -->
</main>
<footer>
	
</footer>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<script>
		$(document).ready(function() {
			/* RELOGIO PONTEIRO */
			setInterval(() => {
				d = new Date(); //object of date()
				hr = d.getHours();
				min = d.getMinutes();
				sec = d.getSeconds();
				hr_rotation = 30 * hr + min / 2; //converting current time
				min_rotation = 6 * min;
				sec_rotation = 6 * sec;
			  
				hour.style.transform = `rotate(${hr_rotation}deg)`;
				minute.style.transform = `rotate(${min_rotation}deg)`;
				second.style.transform = `rotate(${sec_rotation}deg)`;
			}, 1000);
			/* CRONOMETRO */
				const target_date_baile_vogue = new Date("July 14, 2030 13:00:00");

				let dias_baile_vogue, horas_baile_vogue, minutos_baile_vogue, segundos_baile_vogue;

				let divs = document.querySelectorAll('.numeros-timer-baile-vogue-content div');

				var parar_baile_vogue = setInterval(calc_time_baile_vogue, 1000);
				
				function calc_time_baile_vogue(){
					var current_date_baile_vogue = new Date().getTime();
					
					let segundos_f = (target_date_baile_vogue - current_date_baile_vogue) / 1000;

					dias_baile_vogue = parseInt(segundos_f / 86400);
					segundos_f = segundos_f % 86400;
					
					horas_baile_vogue = parseInt(segundos_f / 3600);
					segundos_f = segundos_f % 3600;
					
					minutos_baile_vogue = parseInt(segundos_f / 60);

					segundos_baile_vogue = parseInt(segundos_f % 60);

					let contador_baile_vogue = [dias_baile_vogue, horas_baile_vogue, minutos_baile_vogue, segundos_baile_vogue].forEach(function (contagem_baile_vogue, i) {
						divs[i].innerHTML = contagem_baile_vogue;
					});

					if (current_date_baile_vogue >= target_date_baile_vogue) {
						let contador_baile_vogue = [0, 0, 0, 0].forEach(function (contagem_baile_vogue, i) {
							divs[i].innerHTML = contagem_baile_vogue;
						});
						clearInterval(parar);
					}
				}
		});
		
	</script>
</body>
</html>