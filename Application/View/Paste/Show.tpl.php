<?php
$this->inherits('hoa://Application/View/Layout/Base.tpl.php');
$this->block('content');
$router = $this->_framework->getRouter();
echo '<h1>'.$title.'</h1><h6>Date : <kbd>'.date('d/m/Y H:i:s', $time).'</kbd></h6>';
echo '<pre id="p"><code class="language-php">'.htmlentities($content).'</code></pre>';
$this->endblock();
