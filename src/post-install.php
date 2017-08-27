<?php
$migrator = new DBMigrator("module/user_settings", ModuleHelper::buildModuleRessourcePath("user_settings", "sql/up"));
$migrator->migrate();
