<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Portfolio</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/portfolio_css.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/portfolio_js.js"></script>
	<script src="js/wow.js"></script>
	<script>
		new WOW().init();
	</script>
</head>
<body>
	


<div class="container-fluid" style="position:fixed; width:100%; z-index:10000; top:0px; z-index:5; text-align:center;">
	<div class="row">
		<!-- <h1>MENU</h1> -->
		<div class="navbar navbar-inverse"><!-- navbar-fixed-top navbar-static-top">-->
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
						<span class="sr-only">Open</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
					<a href="#" class="navbar-brand">Портфолио</a>
				</div>
				<div class="collapse navbar-collapse" id="responsive-menu">
					<ul class="nav navbar-nav"> 
						<li><a href="#">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
							<ul class="dropdown-menu"><!-- style="display:block">-->
								<li><a href="#">Secundomer</a></li>
								<li><a href="#">Observer</a></li>
								<li><a href="#">Database</a></li>
								<li class="divider"></li>
								<li><a href="#">Txt redactor</a></li>
							</ul>
						</li>
						<li><a href="#">Secundomer</a></li>
						<li><a href="#">Observer</a></li>
						<li><a href="#">Database</a></li>
						<li><a href="#">Txt redactor</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>	





<!-- <section id="header" class="container-fluid">
	<div class="row first_row">
		<div class="col-md-5">
			Портфолио
		</div>
		<div class="col-md-7">
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">About me</a></li>
				<li><a href="">Observer</a></li>
				<li><a href="">Secundomer</a></li>
				<li><a href="">Database</a></li>
				<li><a href="">Text redactor</a></li>
			</ul>
		</div>	
	</div>
	<div align="center">
		<h1 align="center">Добро пожаловать!</h1>
		<button>Подробнее</button>
	</div>
</section> -->


<section id="secundomer">
	<div id="secundomer_header">
		<h2>Секундомер</h2>
		<div align="right" class="header_icon">
			<i class="fa fa-cog fa-spin fa-2x" data-toggle="modal" href="#video_modal"></i>
		</div>
	</div>
	<h1 align="center">Let's go!</h1>
	<div id="secundomer_screen" align="center">
		<div class="row" align="center">
			<div class="time_square minutes">
				<div class="img-overlay">
					<div class="number_fone">
						<p class="secundomer_symbol" id="minutes_1">0</p>
					</div>
					<div class="number_fone">
						<p class="secundomer_symbol" id="minutes_2">0</p>
					</div>
				</div>
			</div>
			<div class="time_square seconds">
				<div class="img-overlay">
					<div class="number_fone">
						<p class="secundomer_symbol" id="seconds_1">0</p>
					</div>
					<div class="number_fone">
						<p class="secundomer_symbol" id="seconds_2">0</p>
					</div>					
				</div>
			</div>
		</div>
		<!-- <p align="right" id="real_time"></p><br> -->
		<!-- <p align="center" id="time"></p> -->
	</div>
	<br>
	<div id="buttons_sec" class="text-center" align="center">
		<button onclick="start_secundomer()" id="button_start_secundomer">Start</button>
		<button>Lap</button>
		<button onclick="cancel_secundomer()">Cancel</button>
	</div>
	
</section>
<!-- <hr><hr><hr> -->


<section id="observ">
	<div id="observ_header">
		<h2>Шаблон observer-observable</h2>
		<div align="right" class="header_icon">
			<i class="fa fa-cog fa-spin fa-2x" data-toggle="modal" href="#video_modal"></i>
		</div>
	</div>
	<div class="row" id="observ_container">
		<div class="col-md-6" id="observed">
			<p align="center">Observed</p>
			<img name="smile" src="img/smile.png" alt="" id="smile_img">
		</div>
		<div class="col-md-6" id="observer">
			<p align="center">Observer</p>
			<textarea id="notes">Новые действия:</textarea>
		</div>
	</div>
	<div id="buttons" align="center">
		<button class="smile_move" onclick="smile_move(1);">Run</button>
		<button class="smile_move" onclick="set_speed(3);">Speed: 3</button>
		<button class="smile_move" onclick="set_speed(10);">Speed: 10</button>
		<button class="smile_move" onclick="set_speed(100);">Speed: 100</button>
		<button class="smile_move" onclick="set_speed(0);">Stop</button>
		<button class="smile_move" onclick="reverse();">Reverse</button>
	</div>
</section>


<section id="word">
 <!-- style="width:500px; height:500px; background-color: green;"> -->
 	<div id="word_header">
		<h2>Txt redactor</h2>
		<div align="right" class="header_icon">
			<i class="fa fa-cog fa-spin fa-2x" data-toggle="modal" href="#video_modal"></i>
		</div>
	</div><br>
	<!-- <h1 align="center">WORD</h1> -->
	<div class="container main">
		<div class="row col-md-12">
			<div class="tabs">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab1" data-toggle="tab">Рабочая область</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active fade in" id="tab1">
						<br>
						
						<div class="row">
							<div class="col-md-9">
								<div class="panel1">
									<button class="btn btn-success dropdown-toggle" data-toggle="dropdown" id="file_menu">
										Файл
									</button>	
									<ul class="dropdown-menu dropdown-menu-left" id="word_open_close">
										<li><a href="">
											<form action="index.php#word" method="POST" enctype="multipart/form-data" style="float:left; margin-right:10px;">
										  		<input type="file" name="file_name" value="open" id="word_open">
										  		<button type="submit" id="word_open_submit" class="btn btn-success">Открыть</button>
											</form>
										</a></li>
									
										<li>
											<button onclick="save_file()">Сохранить как...</button>
										</li>
										<li><a href="">next</a></li>
					
									</ul>

									<select name="font_family" id="font_family_panel" class="my_select">
										<option value="Arial">Arial</option>
										<option value="Times New Roman">Times New Roman</option>
										<option value="Verdana">Verdana</option>
										<option value="Monotype Corsiva">Monotype Corsiva</option>
									</select>
									<button onclick="setFontFamily()" class="font_panel_ok">Ok</button>
									<select name="font_size" id="font_size_panel" class="my_select">
										<option value="8">8</option>
										<option value="10">10</option>
										<option value="12">12</option>
										<option value="14">14</option>
										<option value="16">16</option>
										<option value="18">18</option>
										<option value="20">20</option>
									</select>
									<button onclick="setFontSize()" class="font_panel_ok">Ok</button>
									<select name="font_color" id="font_color_panel" class="my_select">
											<option value="black">черный</option>
											<option value="blue">синий</option>
											<option value="white">белый</option>
											<option value="grey">серый</option>
											<option value="yellow">желтый</option>
											<option value="purple">фиолетовый</option>
											<option value="red">красный</option>
											<option value="green">зеленый</option>
											<option value="orange">оранжевый</option>
									</select>
									<button onclick="setFontColor()" class="font_panel_ok">Ok</button>
								</div>
								<div class="panel2">
									<div class="btn-group btn-group-lg">
										<a class="btn btn-primary" onclick="setfontWeight()">Ж</a>
										<a class="btn btn-success" onclick="setfontStyle()">К</a>
										<a class="btn btn-warning" onclick="setTextUnderline()">Ч</a>
									</div>

									<div class="btn-group btn-group-lg">
										<a class="btn btn-primary" onclick="align('left')" id="word_align1"><i class="fa fa-bars fa-1x"></i></a>
										<a class="btn btn-success" onclick="align('center')"><i class="fa fa-bars fa-1x"></i></a>
										<a class="btn btn-warning" onclick="align('right')" id="word_align3"><i class="fa fa-bars fa-1x"></i></a>
									</div>

									<div class="btn-group dropdown">
										<button class="btn btn-success symbol">
											Символ
										</button>
										<button class="btn btn-success dropdown-toggle" data-toggle="dropdown">
											|<span class="caret"></span>|
										</button>	
										<ul class="dropdown-menu dropdown-menu-left" id="word_symbol">
											<li>
												<ul>
													<li style="display:inline"><button value="a" onclick="add_symbol('a')">a</button></li>
													<li style="display:inline"><button value="b" onclick="add_symbol('b')">b</button></li>
													<li style="display:inline"><button value="c" onclick="add_symbol('c')">c</button></li>
												</ul>
											</li>
											<li>
												<ul>
													<li style="display:inline"><button value="d" onclick="add_symbol('d')">d</button></li>
													<li style="display:inline"><button value="e" onclick="add_symbol('e')">e</button></li>
													<li style="display:inline"><button value="f" onclick="add_symbol('f')">f</button></li>
												</ul>
											</li>
											<li>
												<ul>
													<li style="display:inline"><button value="g" onclick="add_symbol('g')">g</button></li>
													<li style="display:inline"><button value="h" onclick="add_symbol('h')">h</button></li>
													<li style="display:inline"><button value="i" onclick="add_symbol('i')">i</button></li>
												</ul>
											</li>
										
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div id="interval" align="center">
									<h5>Отступ</h5>
									<div class="row">
										<div class="col-md-4">Слева: </div>
										<div class="col-md-8" align="left">
											<input type="text" class="word_input" placeholder="0" id="Interval_left">
											<button class="interval_button" onclick="set_Interval('left')">Ok</button>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">Справа: </div>
										<div class="col-md-8" align="left">
											<input type="text" class="word_input" placeholder="0" id="Interval_right">
											<button class="interval_button" onclick="set_Interval('right')">Ok</button>
										</div>
									</div>
								</div>
							</div>
						</div>



						<!-- <div class="row panel1">
							<div class="col-md-9">

								<button class="btn btn-success dropdown-toggle" data-toggle="dropdown" id="file_menu">
									Файл
								</button>	
								<ul class="dropdown-menu dropdown-menu-left" id="word_open_close">
									<li><a href="">
										<form action="index.php#word" method="POST" enctype="multipart/form-data" style="float:left; margin-right:10px;">
									  		<input type="file" name="file_name" value="open" id="word_open">
									  		<button type="submit" id="word_open_submit" class="btn btn-success">Открыть</button>
										</form>
									</a></li>
								
									<li>
										<button onclick="save_file()">Сохранить как...</button>
									</li>
									<li><a href="">next</a></li>
				
								</ul>

								<select name="font_family" id="font_family_panel" class="my_select">
									<option value="Arial">Arial</option>
									<option value="Times New Roman">Times New Roman</option>
									<option value="Verdana">Verdana</option>
									<option value="Monotype Corsiva">Monotype Corsiva</option>
								</select>
								<button onclick="setFontFamily()" class="font_panel_ok">Ok</button>
								<select name="font_size" id="font_size_panel" class="my_select">
									<option value="8">8</option>
									<option value="10">10</option>
									<option value="12">12</option>
									<option value="14">14</option>
									<option value="16">16</option>
									<option value="18">18</option>
									<option value="20">20</option>
								</select>
								<button onclick="setFontSize()" class="font_panel_ok">Ok</button>
								<select name="font_color" id="font_color_panel" class="my_select">
										<option value="black">черный</option>
										<option value="blue">синий</option>
										<option value="white">белый</option>
										<option value="grey">серый</option>
										<option value="yellow">желтый</option>
										<option value="purple">фиолетовый</option>
										<option value="red">красный</option>
										<option value="green">зеленый</option>
										<option value="orange">оранжевый</option>
								</select>
								<button onclick="setFontColor()" class="font_panel_ok">Ok</button>


							</div>
							<div class="col-md-2">
								<div id="interval" align="center">
									<h5>Отступ</h5>
									<div class="row">
										<div class="col-md-4">Слева: </div>
										<div class="col-md-8" align="left">
											<input type="text" class="word_input" placeholder="0" id="Interval_left">
											<button class="interval_button" onclick="set_Interval('left')">Ok</button>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">Справа: </div>
										<div class="col-md-8" align="left">
											<input type="text" class="word_input" placeholder="0" id="Interval_right">
											<button class="interval_button" onclick="set_Interval('right')">Ok</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row panel2">
							<div class="btn-group btn-group-lg">
								<a class="btn btn-primary" onclick="setfontWeight()">Ж</a>
								<a class="btn btn-success" onclick="setfontStyle()">К</a>
								<a class="btn btn-warning" onclick="setTextUnderline()">Ч</a>
							</div>

							<div class="btn-group btn-group-lg">
								<a class="btn btn-primary" onclick="align('left')" id="word_align1"><i class="fa fa-bars fa-1x"></i></a>
								<a class="btn btn-success" onclick="align('center')"><i class="fa fa-bars fa-1x"></i></a>
								<a class="btn btn-warning" onclick="align('right')" id="word_align3"><i class="fa fa-bars fa-1x"></i></a>
							</div>

							<div class="btn-group dropdown">
								<button class="btn btn-success">
									Символ
								</button>
								<button class="btn btn-success dropdown-toggle" data-toggle="dropdown">
									|<span class="caret"></span>|
								</button>	
								<ul class="dropdown-menu dropdown-menu-left" id="word_symbol">
									<li>
										<ul>
											<li style="display:inline"><button value="a" onclick="add_symbol('a')">a</button></li>
											<li style="display:inline"><button value="b" onclick="add_symbol('b')">b</button></li>
											<li style="display:inline"><button value="c" onclick="add_symbol('c')">c</button></li>
										</ul>
									</li>
									<li>
										<ul>
											<li style="display:inline"><button value="d" onclick="add_symbol('d')">d</button></li>
											<li style="display:inline"><button value="e" onclick="add_symbol('e')">e</button></li>
											<li style="display:inline"><button value="f" onclick="add_symbol('f')">f</button></li>
										</ul>
									</li>
									<li>
										<ul>
											<li style="display:inline"><button value="g" onclick="add_symbol('g')">g</button></li>
											<li style="display:inline"><button value="h" onclick="add_symbol('h')">h</button></li>
											<li style="display:inline"><button value="i" onclick="add_symbol('i')">i</button></li>
										</ul>
									</li>
								
								</ul>
							</div>
						</div> -->
						<br>

						
						<?
							error_reporting(0);
							if(isset($_FILES['file_name']) && $_FILES['file_name']['errors']==0 && $_FILES['file_name']['size']>0){
						  		$path="../www/".basename($_FILES['file_name']['name']);//"C:\Webserves\home\site";
						 	 	move_uploaded_file($_FILES['file_name']['tmp_name'], $path); //загружаем себе куда нужно
							}
							$file = fopen(basename($_FILES['file_name']['name']), "a+");
							$string = fread($file, 10000);
							
						?>
						<div align="center">
							<textarea name="word_textarea" id="word_textarea" cols="150" oncontextmenu="redactor();">
								<? echo $string; ?>
							</textarea>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
</section>



<div align="center" id="closer" >
	<div class="header" id="closer1">
    	<button type="button" class="close" aria-hidden="true" onclick="close_saver()">&times;</button>
    </div>
	<div class="text-center">
		<h1>Save file</h1>
		<form action="Save.php?file=<? echo $_FILES['file_name']['name']; ?>" method="POST" enctype="multipart/form-data">
			Name: <br><input type="text" name="file_name"><br>
			Save as: <br><select name="format" id="format">
				<option value="txt">Txt</option>
				<option value="doc">Doc</option>
			</select><br>
			<input type="text" name="input_buffer" id="input_buffer" style="width: 0px; height: 0px; display: none;">
			<br><br>
			<button name="Save" onclick="close_saver()">Save</button>
		</form>
	</div>
</div>
<div align="center" id="redactor">
    <div class="text-center">
    	<div class="header">
    		<button type="button" class="close" aria-hidden="true" onclick="close_redactor(1)">&times;</button>
    	</div>
		<h3>Редактирование текста</h3>
		<h5>Выберите шрифт:</h5>
		<select name="font_family" id="font_family">
				<option value="Arial">Arial</option>
				<option value="Times New Roman">Times New Roman</option>
				<option value="Verdana">Verdana</option>
				<option value="Monotype Corsiva">Monotype Corsiva</option>
		</select><br><br>
		<h5>Размер шрифта:</h5>
		<select name="font_size" id="font_size">
				<option value="8">8</option>
				<option value="10">10</option>
				<option value="12">12</option>
				<option value="14">14</option>
				<option value="16">16</option>
				<option value="18">18</option>
				<option value="20">20</option>
		</select><br><br>
		<h5>Цвет шрифта:</h5>
		<select name="font_color" id="font_color">
				<option value="black">черный</option>
				<option value="blue">синий</option>
				<option value="white">белый</option>
				<option value="grey">серый</option>
				<option value="yellow">желтый</option>
				<option value="purple">фиолетовый</option>
				<option value="red">красный</option>
				<option value="green">зеленый</option>
				<option value="orange">оранжевый</option>
			</select><br><br><br>
		<button id="button_redactor" onclick="close_redactor()">Отправить</button>
		<br><br>
    </div> 
</div>


<section id="mysql">
	<div id="mysql_header">
		<h2>Mysql</h2>
		<div align="right" class="header_icon">
			<i class="fa fa-cog fa-spin fa-2x" data-toggle="modal" href="#video_modal"></i>
		</div>
	</div>
	<div class="row main">
		<div class="col-md-4">
			<form action="index.php#mysql" method="POST">
				<h4>Выберите нужные параметры:</h4>
				<h5>Выбрать модель:</h5>
				<select name="names">
					<option value="all">Любая</option>
					<option value="bmw">bmw</option>
					<option value="mersedes">mersedes</option>
					<option value="audi">audi</option>
					<option value="lada">lada</option>
					<option value="mazda">mazda</option>
					<option value="honda">honda</option>
				</select><br><br>
				<h5>Выбрать цвет:</h5>
				<select name="colors">
					<option value="all">Любой</option>
					<option value="black">черный</option>
					<option value="white">белый</option>
					<option value="grey">серый</option>
					<option value="yellow">желтый</option>
					<option value="purple">фиолетовый</option>
					<option value="red">красный</option>
					<option value="green">зеленый</option>
					<option value="braun">коричневый</option>
					<option value="gold">золотой</option>
				</select><br><br>
				<h5>Выбрать возраст:</h5>
				<select name="ages" id="">
					<option value="all">Любой</option>
					<option value="0">0 лет</option>
					<option value="1">1 год</option>
					<option value="2">2 года</option>
					<option value="3">3 года</option>
					<option value="4">4 года</option>
					<option value="5">5 лет</option>
					<option value="6">6 лет</option>
					<option value="7">7 лет</option>
					<option value="8">8 лет</option>
					<option value="9">9 лет</option>
					<option value="10">10 лет</option>
					<option value="more">Более 10 лет</option>
				</select><br><br>

				<h5>Выберите цену:</h5>
				Цена менее 10000 <input type="checkbox" name="price"  value="1"><br>
				Цена от 10000 до 25000 <input type="checkbox" name="price"  value="2"><br>
				Цена более 25000 <input type="checkbox" name="price"  value="3"><br><br>
				
				<h5>Выберите дистанцию:</h5>
				Менее 15000 км <input type="checkbox" name="dist"  value="1"><br>
				От 15000 до 40000 <input type="checkbox" name="dist"  value="2"><br>
				Более 40000 <input type="checkbox" name="dist"  value="3"><br><br>

				<button name="go" id="mysql_go">Поиск</button><br>
			</form>
		</div>
		<div class="col-md-8">
			<?
			include 'database.php';
			$base = new Database();
			if(isset($_POST["go"])){
		
				$name=trim($_POST["names"]);
				$color=trim($_POST['colors']);
				$age=trim($_POST['ages']);
				$query="SELECT 'NAME', 'COLOR', 'PRICE', 'AGE', 'DISTANSE' UNION SELECT DISTINCT name, color, price, age, distanse FROM cars";
				
				#Name
				if($name!="all"){ $query.=" WHERE name=\"$name\""; }
				#Color
				if($color!="all"){ 
					if(stripos($query, "WHERE")==""){ $query.=" WHERE color=\"$color\""; }
					else $query.=" AND color=\"$color\"";
				}
				#Price
				switch ($_POST["price"]) {
					case "1":
						if(stripos($query, "WHERE")==""){ $query.=" WHERE price < 10000"; }
						else $query.=" AND price < 10000";
						break;
					
					case "2":
						if(stripos($query, "WHERE")==""){ $query.=" WHERE price BETWEEN 10000 AND 25000"; }
						else $query.=" AND price BETWEEN 10000 AND 25000";
						break;
					
					case "3":
						if(stripos($query, "WHERE")==""){ $query.=" WHERE price > 25000"; }
						else $query.=" AND price > 25000";
						break;
					
					default:
						break;
				}
				#Age
				if($age!="all"){ 
					if(stripos($query, "WHERE")==""){ 
						if($age=="more"){ $query.=" WHERE age > 10"; }
						else $query.=" WHERE age=\"$age\""; 
					}
					else{
						if($age=="more"){ $query.=" AND age > 10"; }
						else $query.=" AND age=\"$age\"";
					}
				}
				#Distanse
				switch ($_POST["dist"]) {
					case "1":
						if(stripos($query, "WHERE")==""){ $query.=" WHERE distanse < 15000"; }
						else $query.=" AND distanse < 15000";
						break;
					
					case "2":
						if(stripos($query, "WHERE")==""){ $query.=" WHERE distanse BETWEEN 15000 AND 40000"; }
						else $query.=" AND distanse BETWEEN 15000 AND 40000";
						break;
					
					case "3":
						if(stripos($query, "WHERE")==""){ $query.=" WHERE distanse > 40000"; }
						else $query.=" AND distanse > 40000";
						break;
					
					default:
						break;
				}


				$information = $base->select($query);
				shower($information);
				echo("<br><br>");
			}
			function shower($par){
				echo "<br>RESULT:<br>";
				echo '<table id="mysql_table" width="450"  border="'."3".'" bordercolor="'."red".'"
				style="font-weight:bold; color:white; border-color:blue; border-width:5px;">';
				$iterator = 0;
				foreach($par as $key1=>$i){
					if($iterator==0){ $iterator++; echo '<tr height="50" bgcolor="blue" align="center">'; }
					else echo '<tr height="50" align="center">';
					foreach($i as $key=>$item){
						if(is_integer($key)){ continue;}
						echo "<td>".$item.'</td>';
					}
					echo "</tr>";
				}
				echo "</table>";
			}
			?>
		</div>
	</div>
</section>

<!-- 
<section id="word">
 	<div id="word_header">
		<h2>Txt redactor</h2>
		<div align="right" class="header_icon">
			<i class="fa fa-cog fa-spin fa-2x" data-toggle="modal" href="#video_modal"></i>
		</div>
	</div>
	<h1 align="center">WORD</h1>
	<div class="container main">
		<div class="row col-md-12">
			<div class="tabs">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab1" data-toggle="tab">Рабочая область</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active fade in" id="tab1">
						<br>
						<div class="row">
							<div class="col-md-8">
								
								<form action="index.php#word" method="POST" enctype="multipart/form-data" style="float:left; margin-right:10px;">
							  		<a href="index.php#word"><input type="file" name="file_name" value="open" id="word_open"></a>
							  		<input type="submit">
								</form>

								<button onclick="save_file()">Save</button>
								
							

								<select name="font_family" id="font_family_panel">
									<option value="Arial">Arial</option>
									<option value="Times New Roman">Times New Roman</option>
									<option value="Verdana">Verdana</option>
									<option value="Monotype Corsiva">Monotype Corsiva</option>
								</select>
								<button onclick="setFontFamily()">Ok</button>
								<select name="font_size" id="font_size_panel">
									<option value="8">8</option>
									<option value="10">10</option>
									<option value="12">12</option>
									<option value="14">14</option>
									<option value="16">16</option>
									<option value="18">18</option>
									<option value="20">20</option>
								</select>
								<button onclick="setFontSize()">Ok</button>
								<button onclick="setfontWeight()" id="font_weight_panel" value="bold">Ж</button>
								<button onclick="setfontStyle()" id="font_style_panel" value="italic">К</button>
								
								

							</div>
							<div class="col-md-2">
								<div id="interval" align="center">
									<h5>Отступ</h5>
									<div class="row">
										<div class="col-md-4">Слева: </div>
										<div class="col-md-8" align="left">
											<input type="text" class="word_input" placeholder="0" id="Interval_left">
											<button class="interval_button" onclick="set_Interval('left')">Ok</button>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">Справа: </div>
										<div class="col-md-8" align="left">
											<input type="text" class="word_input" placeholder="0" id="Interval_right">
											<button class="interval_button" onclick="set_Interval('right')">Ok</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<button onclick="align('left')" id="word_align1"><i class="fa fa-bars fa-1x"></i></button>
							<button onclick="align('center')" id="word_align2"><i class="fa fa-bars fa-1x"></i></button>
							<button onclick="align('right')" id="word_align3"><i class="fa fa-bars fa-1x"></i></button>
							<div class="btn-group dropdown">
								<button class="btn btn-success">
									Символ
								</button>
								<button class="btn btn-success dropdown-toggle" data-toggle="dropdown">
									|<span class="caret"></span>|
								</button>	
								<ul class="dropdown-menu dropdown-menu-left" id="word_symbol">
									<li>
										<ul>
											<li style="display:inline"><button value="a" onclick="add_symbol('a')">a</button></li>
											<li style="display:inline"><button value="b" onclick="add_symbol('b')">b</button></li>
											<li style="display:inline"><button value="c" onclick="add_symbol('c')">c</button></li>
										</ul>
									</li>
									<li>
										<ul>
											<li style="display:inline"><button value="d" onclick="add_symbol('d')">d</button></li>
											<li style="display:inline"><button value="e" onclick="add_symbol('e')">e</button></li>
											<li style="display:inline"><button value="f" onclick="add_symbol('f')">f</button></li>
										</ul>
									</li>
									<li>
										<ul>
											<li style="display:inline"><button value="g" onclick="add_symbol('g')">g</button></li>
											<li style="display:inline"><button value="h" onclick="add_symbol('h')">h</button></li>
											<li style="display:inline"><button value="i" onclick="add_symbol('i')">i</button></li>
										</ul>
									</li>
								
								</ul>
							</div>
						</div>


						
						<?
							error_reporting(0);
							if(isset($_FILES['file_name']) && $_FILES['file_name']['errors']==0 && $_FILES['file_name']['size']>0){
						  		$path="../www/".basename($_FILES['file_name']['name']);//"C:\Webserves\home\site";
						 	 	move_uploaded_file($_FILES['file_name']['tmp_name'], $path); //загружаем себе куда нужно
							}
							$file = fopen(basename($_FILES['file_name']['name']), "a+");
							$string = fread($file, 10000);
							
						?>
						<div align="center">
							<textarea name="word_textarea" id="word_textarea" cols="150" oncontextmenu="redactor();">
								<? echo $string; ?>
							</textarea>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
</section>

<div align="center" id="closer" >
	<div class="header" id="closer1">
    	<button type="button" class="close" aria-hidden="true" onclick="close_saver()">&times;</button>
    </div>
	<div class="text-center">
		<h1>Save file</h1>
		<form action="Save.php?file=<? echo $_FILES['file_name']['name']; ?>" method="POST" enctype="multipart/form-data">
			Name: <br><input type="text" name="file_name"><br>
			Save as: <br><select name="format" id="format">
				<option value="txt">Txt</option>
				<option value="doc">Doc</option>
			</select><br>
			<input type="text" name="input_buffer" id="input_buffer" style="width: 0px; height: 0px; display: none;">
			<br><br>
			<button name="Save" onclick="close_saver()">Save</button>
		</form>
	</div>
</div>
<div align="center" id="redactor">
    <div class="text-center">
    	<div class="header">
    		<button type="button" class="close" aria-hidden="true" onclick="close_redactor()">&times;</button>
    	</div>
		<h3>Редактирование текста</h3>
		<h5>Выберите шрифт:</h5>
		<select name="font_family" id="font_family">
				<option value="Arial">Arial</option>
				<option value="Times New Roman">Times New Roman</option>
				<option value="Verdana">Verdana</option>
				<option value="Monotype Corsiva">Monotype Corsiva</option>
		</select><br><br>
		<h5>Размер шрифта:</h5>
		<select name="font_size" id="font_size">
				<option value="8">8</option>
				<option value="10">10</option>
				<option value="12">12</option>
				<option value="14">14</option>
				<option value="16">16</option>
				<option value="18">18</option>
				<option value="20">20</option>
		</select><br><br>
		<h5>Цвет шрифта:</h5>
		<select name="font_color" id="font_color">
				<option value="black">черный</option>
				<option value="blue">синий</option>
				<option value="white">белый</option>
				<option value="grey">серый</option>
				<option value="yellow">желтый</option>
				<option value="purple">фиолетовый</option>
				<option value="red">красный</option>
				<option value="green">зеленый</option>
				<option value="orange">оранжевый</option>
			</select><br><br><br>
		<button id="button_redactor" onclick="close_redactor()">Отправить</button>
		<br><br>
    </div> 
</div>
 -->







<script>
function add_move(object_id, object_header_id){
	var is_moving=false;
	object_header_id.ondragstart = function() {
	  return false;
	};
	object_header_id.onmousedown = function(e) { // 1. отследить нажатие
	  is_moving = true;
	  object_id.style.position = 'relative';
	  var const_top = object_id.style.top;

	  var coords = getCoords(object_id);
  	  var shiftX = e.pageX - coords.left;
  	  		var shiftY = e.pageY - coords.top;
  	  moveAt(e);
	  object_id.style.zIndex = 1000;

	  function moveAt(e) {
	    object_id.style.left = e.pageX - shiftX + 'px'; //- object_id.offsetWidth + 'px';
	 		   object_id.style.top = e.pageY - shiftY + 'px';
	    //object_id.style.top = const_top; //e.pageY - button1.offsetHeight / 2 + 'px';
	  }

	  document.onmousemove = function(e) {
	    moveAt(e);
	  };
	  object_header_id.onmouseup = function() {
	  	is_moving = false;
	    document.onmousemove = null;
	    object_header_id.onmouseup = null;
	  }
	  object_header_id.onmouseout = function(){
	  	//if(is_moving){
	  		//moveAt(e);
	  		//alert();
	  		//object_header_id.onmousemove();
	  	//}
	  	//else{
	   	//object_header_id.onmousemove = null;
	    //object_header_id.onmouseout = null;
		//}
	   }
	  
	}
	function getCoords(elem) {   // кроме IE8-
	    var box = elem.getBoundingClientRect();
	    return {
	        //top: box.top + pageYOffset,
	        	top: elem.style.top.slice(0, -2),
	        left: elem.style.left.slice(0, -2) //left: box.left// + pageXOffset
	    };
	}
}

+function add_objets_move(){
	add_move(document.getElementById("secundomer"), document.getElementById("secundomer_header"));
	add_move(document.getElementById("observ"), document.getElementById("observ_header"));
	add_move(document.getElementById("mysql"), document.getElementById("mysql_header"));
	add_move(document.getElementById("word"), document.getElementById("word_header"));
}();


</script>




<div id="user_typing" class="text-center">
	<div class="header" id="typing">
    	<button type="button" class="close" aria-hidden="true" onclick="close_typing()">&times;</button>
    </div>
	<h1>Ввод текста</h1>
	<button onclick="block_typing_panel()">Больше не показывать это окно</button><br>
	<textarea name="" id="user_typing_textarea" cols="30" rows="10"></textarea>
</div>
</body>
</html>