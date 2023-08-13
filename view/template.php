
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Футбольная школа</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
        <!-- Font Awesome icons (free version)-->
        <!-- <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script> -->
        <!-- Google fonts-->
        <!-- <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" /> -->
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- <link href="css/styles.css" rel="stylesheet" /> -->
        </head>
<body>
	<div id="frame">
		<div id="header">
			<table  width="1850">
				<tr>
					
					<td align="left" ><a href="modul4/down"><img src="/view/foto/zenit.jpg" alt="Лого" width="90"></td>
					<td align="middle" width=95%><b><i>Футбольный клуб «Зенит» во Владимире</i></b></td>
				</tr>

			</table>


					</div>
						<div id="menu">
						<b><i>
						<table width="100%">
								<tr>
									<!-- <td align="left"><a href="http://localhost/blog4-laravel/resources/sayt/foto.html">Фотогаллерея</a></td>
									<td align="left"><a href="http://localhost/blog4-laravel/resources/sayt/contact.html">Контакты</a></td> -->
									<td width=80%></a></td>
									<td width=10% align="center"><a href="/login" class="text-sm text-gray-700 dark:text-gray-500 underline">Войти</a></td>
									<td width=10% align="center"> <a href="/reg" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Регистрация</a></td>
								</tr>

						</table>


						<!-- <a href="Shkolniki.html">Школьники</a>
						<a href="Doshkolniki.html">Дошкольники</a>
						<a href="Cup.html">Турниры</a>
						<a href="contact.html">Контакты</a> -->
						</i></b>

					</div>
					<div id="inMenu">
						<a href="/sayt/Index_fs.html"><h4>Форма <br>для тренировок<br>зал</h4></a>
						<a href="/sayt/Index_fu.html"><h4>Форма <br>для тренировок<br>стадион</h4></a>
							<!--<p>Бутсы/Cороконожки</p>
							<li>Щитки и гетры</li>
							<li>Трусы и футболка <br>(любые)</li>

						<href=""><b>Бейсболка в жаркую<br> погоду!</b>-->

						<!--<a href="Index_fs.html"><h4>Форма <br> для тренировок<br> зал</h4></a>

							<li >Футзалки (кроссовки)</li>
							<li>Щитки и гетры</li>
							<li>Трусы и футболка <br>(любые)</li>-->

					</div>
			<!--<marquee>Звоните мы ждем будующих чемпионов!</marquee>-- бегущая строка-->
		<div id="content">

			<b><i>
			<li>Тренируют обладатели кубка области и города</li><br><br>

                    <div class="container" >
                        <?=$content; ?>
                    </div>

			<li>Уникальная методика, утвержденная РФС</li><br><br>
			<li>Проводим просмотры в проф. футбольные клубы</li><br><br>
			<li>Группы формируются из детей одного возраста</li><br><br>

			</i></b>



		</div>
		<div id="sidebar"><b>
			<br><br>
			<!--<a href="">Новости</a> <br> <br>-->
			<a href="/sayt/Meropr.html">Лучшие моменты</a> <br> <br>
			<a href="/sayt/foto.html">Наш фотоальбом</a><br> <br>
			<a href="/sayt/Nagrad.html">Награды</a><br><br>
			<a href="/sayt/contact.html">Контакты</a></td>

			</b>
		</div>
		<div id="footer">

			<p>
    			<img src="http://localhost/blog4-laravel/resources/foto/foto1.jpg" alt="Фотография 1" height="150">
    			<img src="http://localhost/blog4-laravel/resources/foto/foto2.jpg" alt="Фотография 2" height="150">
    			<img src="http://localhost/blog4-laravel/resources/foto/foto3.jpg" alt="Фотография 3" height="150">
    			<img src="http://localhost/blog4-laravel/resources/foto/foto4.jpg" alt="Фотография 4" height="150">
                <img src="http://localhost/blog4-laravel/resources/foto/f_17.jpg" alt="Фотография 1" height="150">
				<img src="http://localhost/blog4-laravel/resources/foto/f_2.jpg" alt="Фотография 1" height="150">
				<img src="http://localhost/blog4-laravel/resources/foto/f_3.jpg" alt="Фотография 1" height="150">
				<img src="http://localhost/blog4-laravel/resources/foto/forma_ul_l.jpg" alt="Фотография 1" height="150">

  			</p>
			<p>Наш адрес: г. Владимир Дворянская ул., 16А </p>
			<p>Наш телефон +7 (***) ***-**-**</p>


		</div>


	</div>

<style>
#frame
{
    /* width: 1000px; Ширина */
    background: url("http://localhost/blog4-laravel/resources/foto/pole4_2.jpg"); /*вставка фонового рисунка*/
    /*background-color: white; /*Цвет фона*/

    margin:auto; /*Выравнивание по центру*/
    display: table; /*Отображение в табличной форме (представление в форме таблицы)*/
    height: 100%; /*Высота*/
    width: 100%;
}

#header
{
    /*border: 3px solid blue;/* Параметры границы */
    /*box-shadow: 5px 10px 10px rgba(0,0,0,0.5); /* Параметры тени */
    /*background: #fc3;  Цвет фона */
    /*padding: 10px; /* Поля вокруг текста */
    width: 100%;
    height: 50px;
	background-color: transparent;     /*прозрачный цвет*/
	/*background-color: white;*/
	/*margin: auto;*/
	margin-top: 0px;
	/*padding: 20px;*/
	text-align: center;
	font-size: 40px; /*размер шрифта*/
	font-family: "Times New Roman"; /*Вид шрифта*/
	color: MediumBlue;
	text-shadow:3px -3px 1px white;  /*выпуклые буквы*/
}

#content
{
    width: 1200px;
	height: 450px;
	margin: 15px;
	padding: 5px;
	/*background-color: LightCyan;*/
	/*opacity: 0.2; */				/*прозрачность фона*/

	text-align: center;
	float: left;
	font-size: 30px; /*размер шрифта*/
	font-family: "Times New Roman"; /*Вид шрифта*/
	color: MediumBlue;

 }

#footer
{
    display: table-footer-group;
    width: 940px;
	height: 200px;
	/*background-color: LightBlue;*/
	background-color: transparent;     /*прозрачный цвет*/
	margin-bottom: 0px;
	padding: 1000px;
	text-align: center;
	color: MediumBlue;

}

#menu
{
    background: transparent;
    padding: 10px;
	margin: 40px;
	color: black;
	font-size: 25px; /*размер шрифта*/
	font-family: "Times New Roman"; /*Вид шрифта*/
	text-align: center;
	word-spacing: 40px; /* расстояние между словами */
}

#sidebar
{

    width: 200px;
	height: 200px;
	/*background-color: LightCyan;*/

	/*text-shadow:3px 1px 1px black,  /*выпуклые буквы*/

  	color: blue;
  	transition: all .5s;
	margin: 40px;
	float: right;
	text-align: center;
	font-size: 20px; /*размер шрифта*/

}

#inMenu
{
    width: 200px;
	height: 200px;
float: left;

text-align: center;
background: transparent;
margin: 15px;
text-align: center;
	font-size: 20px; /*размер шрифта*/
	font-family: "Times New Roman"; /*Вид шрифта*/
	color: blue;

	text-shadow: 1px /*сдвиг тени вправо/влево +/-*/ 1px /*сдвиг тени вниз/вверх +/-*/1px;
        /*сдвиг пятна за тенью вправо/влево +/-*/
    0 1em blue; /* Параметры тени */
    color: LightBlue; /* Белый цвет текста */
}
.container
{
    color: yellow;
}




}
#inMenu
{
    display: block;
}





</style>

</body>
</html>