<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 05.03.19
 * Time: 21:39
 */

echo "25. Приведите пример, чем отличается &lt;?php от &lt;?=. \n";?>
<?php $a = 100; // На экране ничего. ?><br>
    Some output specified: <?= $b = 200; // Тэг заменяет <?php echo ... На экран выводится результат операции присваивания.
PHP_EOL;
?>