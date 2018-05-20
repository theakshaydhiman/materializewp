  <?php wp_footer(); ?>
  <script>
    M.Sidenav.init(document.querySelector('.sidenav'));
    M.Dropdown.init(document.querySelector('.dropdown-trigger'), {
      coverTrigger: false
    });
    M.Materialbox.init(document.querySelectorAll('.materialboxed'));
    M.Carousel.init(document.querySelectorAll('.carousel'), {
      fullWidth: true,
      indicators: true,
      noWrap: true
    });
  </script>

</body>
</html>