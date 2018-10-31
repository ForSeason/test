<?php
  header('Content-Type:text/html;charset=utf-8');
  file_put_contents('abc.js',file_get_contents('http://www.yiban.cn/t/public/exam/js/jquery.js'));
?>