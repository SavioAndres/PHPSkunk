<?php
/**
 * Framework PHPSkunk
 * This content is released under the MIT License (MIT)
 * 
 * @package PHPSkunk
 * @author  Sávio Andres
 * @license MIT License
 * @link    https://github.com/SavioAndres/PHPSkunk
 * @since   Version 0.0.1
 */

define('TITLE', 'te');

include_once '../templates/head.php';
include_once '../templates/nav.php';
include_once '../templates/aside.php';
?>
    <?='Deu tudo certo'?>
    <a href="teste">Teste aqui</a>
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
include_once '../templates/footer.php';
