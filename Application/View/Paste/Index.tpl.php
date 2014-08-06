<?php
$this->inherits('hoa://Application/View/Layout/Base.tpl.php');
$this->block('content');
$router = $this->_framework->getRouter();
echo '<table style="width: 800px">
<thead>
	<tr>
		<th>Title</th>
		<th>Length</th>
		<th>Date</th>
		<th></th>
	</tr>
</thead>
<tbody>';

if (isset($lines)) {
    foreach ($lines as $line) {
        $id     = $line['idPaste'];
        $thref  = 'http://' . \Hoa\Http\Runtime::getHeader('Host') . $router->unroute('show_Paste', array('paste_id' => $id));

        echo '<tr>
			<td><a href="'.$thref.'">'.$line['title'].'</a></td>
			<td>'.strlen($line['paste']).'</td>
            <td>'.date('H:i:s d/m/Y', $line['time']).'</td>
        </tr>';
    }
}

echo '</tbody></table><br /><hr />';

echo '<a href="http://' . \Hoa\Http\Runtime::getHeader('Host') . $router->unroute('newPaste', array()).'">New pastie</a>';
$this->endBlock();
