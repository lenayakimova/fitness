<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<section class="hero" id="hero">
		<div class="container">
			<div class="hero-block">
				<a href="#hero" class="hero__logo">
					<picture class="hero__logo">
						<source srcset="img/logo.webp 1x" type="image/webp">
						<img src="img/logo.png" srcset="img/logo.png" alt="visionary fitness">
					</picture>
				</a>
				<div class="hero__contacts">
					<picture class="hero__phone">
						<source srcset="img/phone.webp 1x" type="image/webp">
						<img src="img/phone.png" srcset="img/phone.png" alt="телефон">
					</picture>
					<a href="tel:89122704813" class="hero__number number">8-912-270-48-13</a>
				</div>
			</div>
			<div class="hero-buy">
				<h1 class="hero__text">Тренируйся в стильном
					и комфортном образе
					от Visionary Fitness</h1>
				<a href="#offer" class="hero__button">Купить</a>
			</div>
		</div>
	</section>

	<section class="benefit">
		<div class="container">
			<div class="benefit-block">
				<h2 class="benefit__title title">Наши преимущества</h2>
				<div class="benefit__list">
					<div class="benefit__item">
						<picture class="benefit__icon">
							<source srcset="img/item-1.webp 1x" type="image/webp">
							<img src="img/item-1.png" srcset="img/item-1.png" alt="свое производство">
						</picture>
						<span class="benefit__subtitle">Своё производство</span>
						<p class="benefit__text">Вы не переплатите за одежду,
						у нас своё производство
						и нет посреднических наценок</p>
					</div>
					<div class="item">
						<picture class="benefit__icon">
							<source srcset="img/item-2.webp 1x" type="image/webp">
							<img src="img/item-2.png" srcset="img/item-2.png" alt="качество">
						</picture>
						<span class="benefit__subtitle">Качество</span>
						<p class="benefit__text">Используем инновационные
						технологичные ткани, чтобы
						обеспечить максимальную
						производительность во время
						тренировок.</p>
					</div>
					<div class="benefit__item">
						<picture class="benefit__icon">
							<source srcset="img/item-3.webp 1x" type="image/webp">
							<img src="img/item-3.png" srcset="img/item-3.png" alt="Бесплатная доставка">
						</picture>
						<span class="benefit__subtitle">Бесплатная доставка</span>
						<p class="benefit__text">При заказе от 4 000 ₽
						доставка бесплатна</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="offer" id="offer">
		<div class="container">
			<div class="offer-block">
				<picture>
					<source srcset="img/man.webp 1x" type="image/webp">
					<img src="img/man.png" srcset="img/man.png" alt="мужской каталог" class="offer__img offer__first">
				</picture>
				<div class="offer__people">
					<h2 class="offer__title title">Мужской</h2>
					<a href="#" class="offer__button button">Каталог</a>
				</div>
				<div class="offer__people">
					<h2 class="offer__title title">Женский</h2>
					<a href="#" class="offer__button button">Каталог</a>
				</div>
				<picture>
					<source srcset="img/woman.webp 1x" type="image/webp">
					<img src="img/woman.png" srcset="img/woman.png" alt="женский каталог" class="offer__img offer__second">
				</picture>
			</div>
		</div>
	</section>

	<section class="insta">
		<div class="container">
			<div class="insta-block">
				<h2 class="insta__title title">Мы в соц. сетях</h2>
			</div>
		</div>
	</section>

	<section class="form">
		<div class="container">
			<div class="form-block">
				<h2 class="form__title">ОФОРМЛЕНИЕ ЗАЯВКИ</h2>
				<span class="form__subtitle">на заказ одежды</span>
			</div>
			<div class="form-list">
				<div class="form-list__item item-1">
					<picture class="form-list__img">
						<source srcset="img/phone-2.webp 1x" type="image/webp">
						<img src="img/phone-2.png" srcset="img/phone-2.png" alt="заявка на сайте">
					</picture>
					<span class="form-list__title">Заявка на сайте или звонок</span>
					<p class="form-list__text">Вы оставляете заявку на сайте
					или звоните нам</p>
				</div>
				<div class="form-list__item item-2">
					<picture class="form-list__img">
						<source srcset="img/detail.webp 1x" type="image/webp">
						<img src="img/detail.png" srcset="img/detail.png" alt="уточнение деталей">
					</picture>
					<span class="form-list__title">Уточнение деталей</span>
					<p class="form-list__text">Мы свяжемся с вами в течение
					получаса и уточним все детали
					заказа, в том числе размер</p>
				</div>
				<div class="form-list__item item-3">
					<picture class="form-list__img">
						<source srcset="img/sending.webp 1x" type="image/webp">
						<img src="img/sending.png" srcset="img/sending.png" alt="Отправка заказа">
					</picture>
					<span class="form-list__title">Отправка заказа</span>
					<p class="form-list__text">Отправляем заказ в тот же день,
					если он был сделан до 14:00,
					Почтой России или СДЭК</p>
				</div>
				<div class="form-list__item item-4">
					<picture class="form-list__img">
						<source srcset="img/delivery.webp 1x" type="image/webp">
						<img src="img/delivery.png" srcset="img/delivery.png" alt="Получение заказа">
					</picture>
					<span class="form-list__title">Получение заказа</span>
					<p class="form-list__text">Исходя из местоположения, через
					3-9 дней вы получите посылку
					на почте или мы можем доставить
					заказ в удобное для Вас место</p>
				</div>
			</div>
			<form class="form-mail" method="POST" action="mail.php">
				<input type="text" name="name" class="form-mail__input" placeholder="Введите имя*" required>
				<input type="tel" name="phone" class="form-mail__input" placeholder="Введите телефон*" required><br>
				<textarea name="comment" id="" cols="45" rows="5" placeholder="Пожелания к заказу" class="form-mail__text"></textarea><br>
				<input type="submit" value="Отправить" class="form-mail__button button">
			</form>
		</div>
	</section>

	<?php include 'footer.php'; ?>
</body>
</html>