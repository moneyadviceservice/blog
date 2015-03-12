<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package simone
 */
?>

	</div><!-- #content -->

  <section class="l-about-us">
    <div class="l-constrained">
      <div class="l-about-us__content">
        <h2>About the MAS Dev Team</h2>
        <p class="l-about-us__content">Welcome to the blog from the digital and development teams at the Money Advice Service. We write about things that we hope will be of interest to anyone who’s involved in making digital products. Whether you care about user research, UX and design, front-end development, backend development, testing, and everything in-between, there should be stories here for you. We write about the lessons we’ve learnt, the things that went well, the problems we’ve overcome, as well as those things we’re still figuring out.</p>
      </div>
    </div>
  </section>

	<footer class="l-footer" role="contentinfo">
    <div class="l-constrained">
      <p class="l-footer__content">Making Money Advice was created by the development team at the <a href="https://www.moneyadviceservice.org.uk">Money Advice Service</a>.</p>
      <p class="l-footer__content">For more information please <a href="mailto:development.team@moneyadviceservice.org.uk">get in touch with us</a></p>
    </div>
	</footer>

<?php wp_footer(); ?>

<script src="/wp-content/themes/mas/js/prism.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4205932-17', 'auto');
  ga('send', 'pageview');
</script>

</body>
</html>
