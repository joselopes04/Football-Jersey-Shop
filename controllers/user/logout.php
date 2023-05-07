<?php

//Delete session variables
session_unset();
session_destroy();

redirect('loginView');