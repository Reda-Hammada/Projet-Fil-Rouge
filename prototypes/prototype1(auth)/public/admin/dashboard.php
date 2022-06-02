<?php

session_start();

echo "welcome " . $_SESSION['fullName'] . " this is your dashboard" . "and your id " . $_SESSION['id'];