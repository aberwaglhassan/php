<?php
//poo_show
require_once 'model.php';

$row=get_description($_GET['id']);

require 'templates/show.php';