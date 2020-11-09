

      <footer class="footer blog__footer">
        <div class="footer__row footer__row_top">
          <div class="footer__left">
            <p>Этот сайт я сделал в рамках обучения в Школе онлайн образования LoftSchool.</p>
          </div>
          <div class="footer__middle">
					<?php get_template_part('template-parts/menu-footer') ?>
            <ul class="socials">
              <li class="socials__item"><a class="socials__link socials__link_fb" href="#">
                  <svg class="icon icon-fb footer-icon">
                    <use xlink:href="static/img/svg/symbol/sprite.svg#fb"></use>
                  </svg></a></li>
              <li class="socials__item"><a class="socials__link socials__link_gh" href="#">
                  <svg class="icon icon-gh footer-icon">
                    <use xlink:href="static/img/svg/symbol/sprite.svg#gh"></use>
                  </svg></a></li>
              <li class="socials__item"><a class="socials__link socials__link_in" href="#">
                  <svg class="icon icon-in footer-icon">
                    <use xlink:href="static/img/svg/symbol/sprite.svg#in"></use>
                  </svg></a></li>
            </ul>
          </div>
          <div class="footer__right">
            <p><q>Всегда пишите код так, будто сопровождать его будет склонный к насилию психопат, который знает, где вы живете.</q> <br> — Martin Golding</p>
          </div>
        </div>
        <div class="footer__row footer__row_bottom">
          <p class="copypast">© Кириченко Евгений | Создано с любовью в LoftSchool | 2018</p>
        </div>
      </footer>
    </div>
		<?php wp_footer() ?>
  </body>
</html>