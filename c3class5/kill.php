<?php
// kills the session
session_start();
unset($_SESSION["name"]);
session_destroy();
