<?php

//controlerindex

require_once 'model/model.php';
$posts= get_all_articles();

//template de la vue des articles
require 'templates/list.php';