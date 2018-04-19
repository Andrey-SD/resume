<style>
	body{
	background-color: #EAE5E5;
}

h1,h3,ul,p,dl{
	margin: 0;
	padding: 0;
}

header,section{
	width: 800px;
	margin: 0 auto;
}

h1, h3{
    color: #4D4D4D;
	font-family: fantasy;
}

section h1{
	font-size: 5vw;
}

header>div{
	display: inline-block;
}

header ul{
	display: inline-block;
	float: right;
	margin-top: 37px;
}

header li{
	list-style-type: none;
}

header li>a{
	font-size: 20px;
	color: #8B8B8B;
	margin-left: 25px;
	font-family: fantasy;
}

a:hover{
	color: #61D0D4;
	text-decoration: none;
}

section{
	margin-top: 30px;
	padding-bottom: 60px !important;
}

section h1 {
	text-align: right;
}

section img{
	display: block;
	margin: 0 auto !important;
}

.links{
	text-align: center;
}

.links a{
	color: white;
	font-size: 15px;
	text-align: center;
	line-height: 100px;
	border-radius: 50px;
	width: 100px;
	height: 100px;
	margin: 30px 10px 30px 10px;
	display: inline-block;
}

.links a:nth-of-type(1){ 
	background-color: #E83556;
}

.links a:nth-of-type(2){ 
	background-color: #61D0D4;
}

.links a:nth-of-type(3){
	background-color: #D1C926;
}

</style>
<body>
	<header>		
			<div style="display: inline-block;">
				<h2 style="color: #4D4D4D; font-family: fantasy;">Деркач Андрей</h2>
				<h2 style="color: #4D4D4D; font-family: fantasy;">junior WEB developer</h2>
			</div>
				<ul style="display: inline-block; float: right;	margin-top: 37px;">
					<li style="list-style-type: none;">
						<a href="#">Главная</a>
						<a href="#">Резюме</a>
						<a href="#">Проекты</a>
						<a href="#">Контакты</a>
					</li>
				</ul>
	</header>
<section>
		<div style="display: inline-block; width: 30%">
			<img src="">
		</div>
		<div style="display: inline-block; width: 60%; float: right;">
			<h2 style="color: #4D4D4D; font-family: fantasy;">Здравствуйте, меня зовут Андрей.</h2>
			<div class="links">
				<a href="">Резюме</a>
				<a href="">Проекты</a>
				<a href="">Навыки</a>
			</div>
			<p>Свой 'Hello World' я написал еще в школе, на языке Pascal. С тех пор программирование стало для меня хобби, а профессия программиста мечтой. Сейчас я готов воплотить свою мечту в жизнь.</p>
		</div>
</section>
</body>
</html>