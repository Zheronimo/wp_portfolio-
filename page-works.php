<?php get_header() ?>
<section class="section works">
        <svg class="triangle triangle_fill_cararra works__triangle" viewbox="0 0 1000 100" preserveAspectRatio="none">
          <polygon points="0,0 0,1000 1000,100"></polygon>
        </svg>
        <svg class="triangle triangle_fill_cararra triangle_right works__triangle" viewbox="0 0 1000 100" preserveAspectRatio="none">
          <polygon points="0,0 0,1000 1000,100"></polygon>
        </svg>
        <h2 class="title works__title">Мои роботы</h2>
      </section>
      <section class="slider__section">
        <div class="slider" id="slider">
          <div class="slide">
            <div class="slide__img">
              <div class="slide-img" style="background-image: url('static/img/autoholl.png');"></div>
            </div>
            <div class="slide__desc">
              <div class="work">
                <div class="work__name sub-title">Автосервис</div>
                <div class="work__teach">HTML, CSS, JS/JQuery</div><a class="work__link btn" href="/autoholl">
                  <svg class="icon icon-link work__icon">
                    <use xlink:href="static/img/svg/symbol/sprite.svg#link"></use>
                  </svg>Посмотреть</a>
              </div>
            </div>
          </div>
          <div class="slide">
            <div class="slide__img">
              <div class="slide-img" style="background-image: url('static/img/babytoys.png');"></div>
            </div>
            <div class="slide__desc">
              <div class="work">
                <div class="work__name sub-title">BabyToys - интернет магазин</div>
                <div class="work__teach">HTML/Pug, CSS/Scss, JS/JQuery</div><a class="work__link btn" href="/babyToys">
                  <svg class="icon icon-link work__icon">
                    <use xlink:href="static/img/svg/symbol/sprite.svg#link"></use>
                  </svg>Посмотреть</a>
              </div>
            </div>
          </div>
          <div class="slide">
            <div class="slide__img">
              <div class="slide-img" style="background-image: url('static/img/course.png');"></div>
            </div>
            <div class="slide__desc">
              <div class="work">
                <div class="work__name sub-title">Курсы повышения знаний</div>
                <div class="work__teach">HTML, CSS/Sass, JS/JQuery</div><a class="work__link btn" href="/courses">
                  <svg class="icon icon-link work__icon">
                    <use xlink:href="static/img/svg/symbol/sprite.svg#link"></use>
                  </svg>Посмотреть</a>
              </div>
            </div>
          </div>
          <div class="slide active">
            <div class="slide__img">
              <div class="slide-img" style="background-image: url('static/img/posh.png');"></div>
            </div>
            <div class="slide__desc">
              <div class="work">
                <div class="work__name sub-title">POSH - сайт-галерея</div>
                <div class="work__teach">HTML/Pug, CSS/Scss, JS/JQuery</div><a class="work__link btn" href="/posh">
                  <svg class="icon icon-link work__icon">
                    <use xlink:href="static/img/svg/symbol/sprite.svg#link"></use>
                  </svg>Посмотреть</a>
              </div>
            </div>
          </div>
          <ul class="slider-nav">
            <li class="prev">
              <button class="control" style="background-image: url('static/img/autoholl.png');"></button>
              <button class="control" style="background-image: url('static/img/babytoys.png');"></button>
              <button class="control active" style="background-image: url('static/img/course.png');"></button>
              <button class="control" style="background-image: url('static/img/posh.png');"></button>
            </li>
            <li class="next">
              <button class="control active" style="background-image: url('static/img/autoholl.png');"></button>
              <button class="control" style="background-image: url('static/img/babytoys.png');"></button>
              <button class="control" style="background-image: url('static/img/course.png');"></button>
              <button class="control" style="background-image: url('static/img/posh.png');"></button>
            </li>
          </ul>
        </div>
      </section>
      <section class="section reviews">
        <h2 class="title reviews__title">Что обо мне <br>говорят</h2>
        <ul class="reviews__list">
          <li class="reviews__item">
            <div class="reviews__photo"><img class="reviews__img" src="static/img/ticher1.png"/></div>
            <p class="reviews__text">Этот парень проходил обучение веб-разработке не где-то, а в LoftSchool! 2 месяца только самых тяжелых испытаний и бессонных ночей!</p>
            <div class="reviews__author">
              <p class="reviews__author-name">Ковальчук Дмитрий</p>
              <p class="reviews__author-status">— основатель Loftschool</p>
            </div>
          </li>
          <li class="reviews__item">
            <div class="reviews__photo"><img class="reviews__img" src="static/img/ticher2.png"/></div>
            <p class="reviews__text">Этот код выдержит любые испытания. Только пожалуйста, не загружается сайт на слишком старых браузерах!</p>
            <div class="reviews__author">
              <p class="reviews__author-name">Сабанцев Владимир</p>
              <p class="reviews__author-status">— преподаватель</p>
            </div>
          </li>
        </ul>
        <div class="feedback">
          <h3 class="sub-title feedback__title">Связатся со мной</h3>
          <form class="feedback-form">
            <input class="feedback-form__name _req" type="text" name="name" placeholder="Имя"/>
            <input class="feedback-form__email _req" type="email" name="email" placeholder="Email"/>
            <textarea class="feedback-form__text _req" name="massege" cols="40" rows="6" placeholder="Ваше сообщение"></textarea>
            <ul class="btn-nav feedback-form__btn">
              <li class="btn-nav__item">
                <button class="btn-nav__link" type="submit">Отправить </button>
              </li>
              <li class="btn-nav__item">
                <input class="btn-nav__link" type="reset" value="Очистить"/>
              </li>
            </ul>
          </form>
        </div>
      </section>
      <div class="popup">
        <div class="popup__body">
          <div class="popup__content">
            <div class="popup__title">Сообщение отправлено</div>
            <button class="btn popup__btn">Закрыть</button>
          </div>
        </div>
      </div>
	
<?php get_footer() ?>