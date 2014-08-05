<?php
$this->inherits('hoa://Application/View/Layout/Base.tpl.php');
$this->block('content');
//echo '<p>Title: '.$title.'</p>';
//echo '<p>User : '.$user.'['.$groupe.'] : '.$email.'</p>';
//echo '<p>ID : '.$id.'</p>';
//echo '<p>Date : '.date('d/m/Y H:i:s', $time).'</p>';
echo '<pre>'.htmlentities($content).'</pre>';
$this->endBlock();
