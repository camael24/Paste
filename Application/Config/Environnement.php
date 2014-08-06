<?php
/**
 * @var \Sohoa\Framework\Environnement $this;
 */
var_dump(resolove('hoa://Application/Database/base.db'));
Hoa\Database\Dal::initializeParameters(array(
        'connection.list.default.dal' => Hoa\Database\Dal::PDO,
        'connection.list.default.dsn' => 'sqlite:hoa://Application/Database/base.db',
        'connection.autoload'         => 'default'
));

return array();
