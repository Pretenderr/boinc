<?php

include_once("db.inc");
include_once("util.inc");
include_once("login.inc");
include_once("prefs.inc");

$project = db_init();
page_head("Create User Account");
print_create_account_form();
page_tail();

?>
