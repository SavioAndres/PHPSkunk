<?php
define('TITLE', 'te');

include_once '../template/header.php';
include_once '../template/nav.php';
include_once '../template/aside.php';
?>
    <?='Deu tudo certo'?>
    <form action="#">
    <p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Red</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" />
        <span>Yellow</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group1" type="radio"  />
        <span>Green</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" disabled="disabled" />
        <span>Brown</span>
      </label>
    </p>
  </form>
<?php
include_once '../template/footer.php';
