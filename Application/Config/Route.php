<?php

/* @var $framework \Sohoa\Framework\Framework */

$this->get('/', array('as' => 'root','to' => 'Main#Index'));
$this->post('/', array('as' => 'new_Paste','to' => 'Paste#Create'));

$this->resource('paste');
$this->resource('user');

$err = $this->getFramework()->getErrorHandler();
$err->handleErrorsAsException();
$err->routeError(\Sohoa\Framework\ErrorHandler::ROUTE_ALL_ERROR, 'Error#Default');
$err->routeError(\Sohoa\Framework\ErrorHandler::ROUTE_ERROR_404, 'Error#Err404');
$err->routeError('\ErrorException', 'Error#PHP');
