<form role="search" method="get" action="<?php echo home_url('/') ?>" >
  <input class="form__input" type="search" value="<?php echo get_search_query(); ?>" name="s" placeholder="Поиск" required>
  <input type="hidden" value="post" name="post_type">
  <input class="btn btn-submit form__submit" type="submit" value="Искать">
</form>