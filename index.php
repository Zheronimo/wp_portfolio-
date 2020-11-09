<?php get_header('authorization') ?>
		<section class="section welcome"><a class="btn welcome__btn" href="#">Авторизоваться</a>
			<div class="welcome__container">
				<div class="welcome__user">
					<div class="user">
						<div class="user__photo">
							<div class="user__photo-avatar"><img src="static/img/avatar.jpg" alt=""/></div>
						</div>
						<div class="user__name">Евгений Кириченко</div>
						<div class="user__desc">Личный сайт веб-разработчика</div>
					</div>
					<ul class="socials">
						<li class="socials__item"><a class="socials__link socials__link_fb" href="#">
								<svg class="icon icon-fb welcome-icon">
									<use xlink:href="static/img/svg/symbol/sprite.svg#fb"></use>
								</svg></a></li>
						<li class="socials__item"><a class="socials__link socials__link_gh" href="#">
								<svg class="icon icon-gh welcome-icon">
									<use xlink:href="static/img/svg/symbol/sprite.svg#gh"></use>
								</svg></a></li>
						<li class="socials__item"><a class="socials__link socials__link_in" href="#">
								<svg class="icon icon-in welcome-icon">
									<use xlink:href="static/img/svg/symbol/sprite.svg#in"></use>
								</svg></a></li>
					</ul>
					<ul class="btn-nav welcome__btn-nav">
						<li class="btn-nav__item"><a class="btn-nav__link" href="works.html">Мои работы</a>
						</li>
						<li class="btn-nav__item"><a class="btn-nav__link" href="about.html">Обо мне</a>
						</li>
						<li class="btn-nav__item"><a class="btn-nav__link" href="blog.html">Блог</a>
						</li>
					</ul>
				</div>
				<div class="welcome__autor">
					<div class="autor">
						<h3 class="sub-title autor__title">Авторизуйтесь</h3>
						<form class="autor__form">
							<div class="autor__login">
								<input type="text" name="login" placeholder="Логин"/>
							</div>
							<div class="autor__pass">
								<input type="password" name="pass" placeholder="Пароль"/>
							</div>
							<div class="autor__chack">
								<label class="custom-chackbox">
									<input type="checkbox" checked="checked"/><span>Я человек</span>
								</label>
							</div>
							<div class="autor__radio">
								<p>Вы точно не робот?</p>
								<label class="custom-radio">
									<input type="radio" value="Да" name="question" checked="checked"/><span class="custom-radio__fake"></span><span class="custom-radio__text">Да</span>
								</label>
								<label class="custom-radio">
									<input type="radio" value="Не уверен" name="question"/><span class="custom-radio__fake"></span><span class="custom-radio__text">Не уверен</span>
								</label>
							</div>
							<ul class="btn-nav login__btn-nav">
								<li class="btn-nav__item"><a class="btn-nav__link btn-nav__link_main" href="#">На главную</a>
								</li>
								<li class="btn-nav__item"><a class="btn-nav__link" href="#">Войти</a>
								</li>
							</ul>
						</form>
					</div>
				</div>
			</div>
			<div class="welcome__footer">
				<p>© Кириченко Евгений | Создано с любовью в LoftSchool | 2018 </p>
			</div>
		</section>
		<?php get_footer('authorization') ?>
  </body>
</html>