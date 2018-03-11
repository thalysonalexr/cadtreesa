<?php

define("DS", DIRECTORY_SEPARATOR);

define("ROOT", __DIR__.DS."..".DS."..");

define("CONFIG", "config");

define("FILE_CONFIG", "development");

define("APP_ENVIRONMENT" , parse_ini_file(ROOT.DS.CONFIG.DS.FILE_CONFIG.".ini", true));

define("NAMESPACE_APP", "app");

define("NAMESPACE_CONTROLLERS", "Controllers");

define("NAMESPACE_VIEWS", "Views");

define("NAMESPACE_MODELS", "Models");

define("ASSETS", "");