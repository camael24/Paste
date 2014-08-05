<?php
$this->inherits('hoa://Application/View/Layout/Base.tpl.php');
$this->block('content');
echo '<form action="/paste/" method="post">
<p><b>Title</b> : <input type="text" name="title" /></p>
<p><b>Content</b> : <textarea name="content" row="10" column="10"></textarea></p>
<p><input type="submit" value="Send" /></p>
</form>';
$this->endBlock();
