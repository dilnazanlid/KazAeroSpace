<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KazAeroSpace</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" type="image/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRsJPwZj3HoOLhBmB64SU-Wsza7cx8dqAIm5w&usqp=CAU"/>
	<link rel="stylesheet" href="/css/main.css">
</head>
<body>

	<!-- Navbar section -->

	<header>
		<div class="fixed w-full transition-all duration-700 ease-in-out z-20">
      <nav class="flex items-center justify-between flex-wrap py-4 px-2 pl-8">
          <div class="flex items-center flex-no-shrink text-white mr-6 ">
						<h1 class="brandName">KazAeroSpace</h1>
          </div>
          <div class="block lg:hidden">
              <button
                  class="navbar-burger flex items-center px-3 py-2 border rounded text-white border-white hover:text-white hover:border-white">
                  <svg class="fill-current h-6 w-6 text-gray-700" viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <title>Menu</title>
                      <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                  </svg>
              </button>
          </div>
          <div id="main-nav" class="w-full flex-right lg:flex items-center lg:w-auto hidden  ">
              <div class="text-sm lg:flex-grow mt-2 animated jackinthebox xl:mx-8">
                  <a href="#about"
                      class="block lg:inline-block text-base font-bold  hover:text-white sm:hover:border-indigo-400 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                      О нас
                  </a>
									<a href="#services"
                      class="block lg:inline-block text-base font-bold  hover:text-white  sm:hover:border-indigo-400 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                     	Услуги
                  </a>
									<a href="#projects"
                      class="block lg:inline-block text-base font-bold  hover:text-white sm:hover:border-indigo-400  mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                      Проекты
                  </a>
									<a href="#partners"
                      class="block lg:inline-block text-base font-bold hover:text-white sm:hover:border-indigo-400 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                      Партнеры
                  </a>
              </div>
          </div>
      </nav>
		</div>
	</header>

	<!-- Section-1 -->
	<section class="intro">
		<img src="https://space.biz.pl/wp-content/uploads/2019/11/home-banner.jpg" alt="Banner">
		<div class="flex flex-col items-center justify-center">
			<h2 class="heading my-4">МЕЖДУНАРОДНЫЙ УРОВЕНЬ ОКАЗАНИЯ УСЛУГ</h2>
			<p class="text ">Если важно качество, выбирайте нас</p>
		</div>
	</section>


	<section class="about" id="about">
		<div class="flex md:flex-row flex-col position relative my-0 mx-0 text-white">
			<div class="about-content md:w-1/2 w-full bg-blue-900 py-16 px-16">
				<h1 class="heading">Кто Мы</h1>
				<p class="text">Мы являемся динамично развивающейся инновационной компанией, основным видом деятельности которой является внедрение высоких технологий в различные отрасли экономики, коммерциализация отечественных космических технологий, а также внедрение механизма государственно-частного партнерства в высоких технологиях.</p>
				<div class="values">
					<div class="values-box">
            <i class="fa fa-trophy"></i>
	          <div class="ts-service-box-content">
	            <h3 class="service-box-title">Зарекомендованы на рынке</h3>
	          </div>
	        </div>
					<div class="values-box">
            <i class="fa fa-sliders"></i>
	          <div class="ts-service-box-content">
	            <h3 class="service-box-title">Выстраиваем партнерства</h3>
	          </div>
	        </div>
					<div class="values-box">
            <i class="fa fa-thumbs-up"></i>
	          <div class="ts-service-box-content">
	            <h3 class="service-box-title">Руководствуемся обязательствами</h3>
	          </div>
	        </div>
					<div class="values-box">
            <i class="fa fa-users"></i>
	          <div class="ts-service-box-content">
	            <h3 class="service-box-title">Команда профессионалов</h3>
	          </div>
	        </div>
				</div>
			</div>
			<div class="about-content md:w-1/2 flex justify-center py-16" style="background: #ff003c;">
				<div class="flex items-center justify-center">
					<img src="https://www.pngonly.com/wp-content/uploads/2017/06/down-fingerprint-png-10212.png" class="w-2/3" alt="Who are we?">
				</div>
			</div>
		</div>
	</section>

	<section class="services mb-16" id="services">
		<h1 class="heading">Наши услуги</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div class="services-container flex lg:flex-row flex-col">
			<div class="service mb-4 lg:mb-0">
				<div class="front flex flex-col items-center justify-center">
					<img src="/images/buildings.png" alt="Icon" class="w-2/5">
					<h2 class="mt-4 font-bold text-lg">Создание ГИС-систем</h2>
				</div>
				<div class="back flex flex-col items-center justify-center bg-black text-white">
					<h2 class="my-4 font-bold text-xl">Создание ГИС-систем</h2>
					<p>Создаем 2D/3D карты с поддержкой многожества слоев и инструментов</p>
				</div>
			</div>
			<div class="service mb-4 lg:mb-0">
				<div class="front flex flex-col items-center justify-center">
					<img src="/images/cosmo.png" alt="Icon" class="w-2/5">
					<h2 class="mt-4 font-bold text-lg">Космоснимки, АФС и ДЗЗ</h2>
				</div>
				<div class="back flex flex-col items-center justify-center bg-black text-white">
					<h2 class="my-4 font-bold text-xl">Космоснимки, АФС и ДЗЗ</h2>
					<p>Получаем космоснимки, проводим аэрофотосъемку местности на БПЛА и квадрокоптерах</p>
				</div>
			</div>
			<div class="service mb-4 lg:mb-0">
				<div class="front flex flex-col items-center justify-center">
					<img src="/images/augmented-reality.png" alt="Icon" class="w-2/5">
					<h2 class="mt-4 font-bold text-lg">Технологии CAVE, AR/VR</h2>
				</div>
				<div class="back flex flex-col items-center justify-center bg-black text-white">
					<h2 class="my-4 font-bold text-xl">Технологии CAVE, AR/VR</h2>
					<p>Занимаемся инновационными технологиями в сфере голографии и виртуального пространства</p>
				</div>
			</div>
		</div>
		<div class="services-container flex lg:flex-row flex-col">
			<div class="service mb-4 lg:mb-0">
				<div class="front flex flex-col items-center justify-center">
					<img src="/images/monitoring.png" alt="Icon" class="w-2/5">
					<h2 class="mt-4 font-bold text-lg">Мониторинг</h2>
				</div>
				<div class="back flex flex-col items-center justify-center bg-black text-white">
					<h2 class="my-4 font-bold text-xl">Мониторинг</h2>
					<p>Получаем информацию о различных наземных и подъемных объектах или местностях</p>
				</div>
			</div>
			<div class="service mb-4 lg:mb-0">
				<div class="front flex flex-col items-center justify-center">
					<img src="/images/civil.png" alt="Icon" class="w-2/5">
					<h2 class="mt-4 font-bold text-lg">Автоматизация госуслуг</h2>
				</div>
				<div class="back flex flex-col items-center justify-center bg-black text-white">
					<h2 class="my-4 font-bold text-xl">Автоматизация госуслуг</h2>
					<p>Автоматизируем государственные услуги в сфере градостроительства и земельных отношений</p>
				</div>
			</div>
			<div class="service mb-4 lg:mb-0">
				<div class="front flex flex-col items-center justify-center">
					<img src="/images/po.png" alt="Icon" class="w-2/5">
					<h2 class="mt-4 font-bold text-lg">Разработка ПО</h2>
				</div>
				<div class="back flex flex-col items-center justify-center bg-black text-white">
					<h2 class="my-4 font-bold text-xl">Разработка ПО</h2>
					<p>Создаем программные обеспечения любой сложности</p>
				</div>
			</div>
		</div>
	</section>

	<section class="projects" id="projects">
		<div class="w-full flex lg:flex-row flex-col items-center justify-center lg:mx-16 mb-16">
			<div class="title w-3/5 lg:pr-16">
				<h1 class="heading my-4"><a href="#">Проекты</a></h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<button type="button" name="projects" class="my-4 py-3 px-6 bg-blue-800 text-white font-bold rounded-lg">Подробнее</button>
			</div>
			<div class="images w-2/5">
				<div class="flex flex-row">
					<img src="https://kazaerospace.com/images/projects/layout_turkestan.jpg" alt="Img1" class="w-64 h-64 my-2 mx-2 transform hover:scale-110 transition duration-500 ease-in-out">
					<img src="https://kazaerospace.com/images/projects/cave.jpg" alt="Img2" class="w-64 h-64 my-2 mx-2 transform hover:scale-110 transition duration-500 ease-in-out">
				</div>
				<div class="flex flex-row">
					<img src="https://kazaerospace.com/images/projects/2d_revision_ns.jpg" alt="Img3" class="w-64 h-64 my-2 mx-2 transform hover:scale-110 transition duration-500 ease-in-out">
					<img src="https://kazaerospace.com/images/projects/3dturkestan.jpg" alt="Img4" class="w-64 h-64 my-2 mx-2 transform hover:scale-110 transition duration-500 ease-in-out">
				</div>
			</div>
		</div>
	</section>

	<section class="partners" id="partners">
		<div class="w-full">
			<h1 class="heading">Партнеры</h1>
				<div class="flex xl:flex-row flex-col">
					<div class="images w-full xl:w-3/5 flex md:flex-row flex-col w-full justify-between my-8 items-center">
						<img class="h-32" src="https://kazaerospace.com/images/clients/client1.png" alt="Partner">
						<img class="h-32" src="https://lh3.googleusercontent.com/proxy/1ne4IvzkMJSzQGfhna_pI-W9t87oUxX7SYaDcoWn7JxlJp8u9xE5Shi5RldY-Vz1PKPk2iYDZuho8TtYeWWtW3MoLIJHn38zoA4EQaL8ow" alt="Partner">
						<img class="h-16" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Airbus_Defense_and_Space.svg/1280px-Airbus_Defense_and_Space.svg.png" alt="Partner">
					</div>
					<div class="images w-full xl:w-2/5 flex md:flex-row flex-col w-full justify-between my-8 pl-16 items-center">
						<img class="h-32" src="https://static.tildacdn.com/tild6136-3761-4638-a635-346463326565/noroot.png" alt="Partner">
						<img class="h-32" src="https://old.rcpp.kz/images/news/new764img.png" alt="Partner">
						<img class="h-32" src="https://smkz.kz/img/unionPartners/03.png" alt="Partner">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contact">
		<div class="head w-full px-16">
			<h1 class="heading">Свяжитесь с нами</h1>
			<p class="text mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="flex w-full lg:flex-row flex-col mt-16">
			<div class="image lg:w-1/2">
				<img src="/images/window.jpg" alt="" class="w-full">
			</div>
			<div class="info lg:w-1/2 text-left text-white px-16 py-16">
				<div class="flex flex-row items-center my-4">
					<img src="/images/loc.png" class="w-10 h-10 mr-4 bg-white py-1 px-1 rounded">
					<p class="my-4">
						г.Нур-Султан, пр.Кабанбай батыра, д.53, блок 32
					</p>
				</div>
				<div class="flex flex-row items-center my-4">
					<img src="/images/phone.png" class="w-10 h-10 mr-4 bg-white py-1 px-1 rounded">
					<p class="my-4">
						<a href="#">+7 (747) 433 1944</a>
					</p>
				</div>
				<div class="flex flex-row items-center my-4">
					<img src="/images/gmail.png" class="w-10 h-10 mr-4 bg-white py-1 px-1 rounded">
					<p class="my-4">
						<a href="#">info@kazaerospace.com</a>
					</p>
				</div>
				<h2 class="border-l-4 border-white pl-2"><strong> РАБОЧЕЕ ВРЕМЯ:</strong></h2>
				<ul class="mx-8 my-2">
					<li>Будний день: 9:00 - 18:00 </li>
					<li>Суббота-Воскресенье: выходной </li>
				</ul>
			</div>
		</div>
	</section>


<section class="footer">
	<div class="flex md:flex-row flex-col bg-black text-white">
		<div class="w-1/2 flex items-center text-left px-16">
			<em>"KazAeroSpace" LLP, 2020.</em>
		</div>
		<div class="subscribe lg:w-1/2 py-4 px-16 text-right">
			Следи за новостями:
			<a href="#"><i class="fa fa-instagram ml-4 mr-2"></i></a>
			<a href="#"><i class="fa fa-facebook mx-2"></i></a>
		</div>
	</div>
</section>


	<script>
	// Navbar Toggle
	document.addEventListener('DOMContentLoaded', function () {
	    // Get all "navbar-burger" elements
	    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
	    // Check if there are any navbar burgers
	    if ($navbarBurgers.length > 0) {
	      // Add a click event on each of them
	      $navbarBurgers.forEach(function ($el) {
	        $el.addEventListener('click', function () {
	          // Get the "main-nav" element
	          var $target = document.getElementById('main-nav');
	          // Toggle the class on "main-nav"
	          $target.classList.toggle('hidden');
	        });
	      });
	    }
	  });
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/main.js"></script>
</body>
</html>
