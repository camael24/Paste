<?php
$this->inherits('hoa://Application/View/Layout/Base.tpl.php');
$this->block('content');
$router = $this->_framework->getRouter();
echo '<p>Title: '.$title.'</p>';
echo '<p>ID : '.$id.'</p>';
echo '<p>Url : http://' . \Hoa\Http\Runtime::getHeader('Host') . $router->unroute('show_Paste', array('paste_id' => $id)).'</p>';
echo '<p>Date : '.date('d/m/Y H:i:s', $time).'</p>';
echo '<pre id="p"><code class="language-php">'.htmlentities($content).'</code></pre>';
$this->endBlock();
