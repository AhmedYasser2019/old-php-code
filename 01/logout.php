<?php
session_start();//resume
session_unset();//clearing
session_destroy();//kill
print_r($_SESSION);