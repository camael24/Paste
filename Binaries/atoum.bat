@ECHO OFF
SET BIN_TARGET=%~dp0/../vendor/atoum/atoum/bin/atoum
php "%BIN_TARGET%" %*
