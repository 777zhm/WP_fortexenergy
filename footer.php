</main>

<footer class="footer">
	<div class="footer_first_row">
		<div class="footer_logo">
		<?php if ( has_custom_logo() ) : ?>
			<?php the_custom_logo(); ?>
		<?php endif; ?>
		</div>
		<nav class="footer_menu">
			<ul>
				<li><a href="gas.html">Природний газ</a></li>
				<li><a href="energy.html">Електроенергія</a></li>
				<li><a href="spojivacham.html">Споживачам</a></li>
				<li><a href="contact.html">Контакти</a></li>
			</ul>
		</nav>
	</div>
	<div class="footer_second_row">
		<div class="footer_address">
				<h4>Адреса</h4>
				<p>вул. Новокостянтинівська, буд. 18, поверх 1, оф. 1</p>
				<p>04080, м. Київ</p>
		</div>
		<div class="footer_tel">
			<h4>Телефон</h4>
			<a href="tel:+380442289601">+38(044)228-96-01</a>
			<p>info@fortexenergy.com</p>
		</div>
		<div class="footer_schedule">
				<h4>Графік роботи</h4>
				<p>Пн-Чт: 09:00 - 18:00</p>
				<p>Пт: 09.00 - 17.00</p>
				<p>Обід: 13.00 - 14.00</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>