<?php
require __DIR__.'/session.php';

session_destroy();

header('location: login.php');