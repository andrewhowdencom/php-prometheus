<?php
require_once __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', 1);

// Fetch the configuration
$oDotEnv = new Dotenv\Dotenv(__DIR__);
$oDotEnv->load();

$oApp = new \littlemanco\php\metrics\app($_ENV);
$oApp->render();
// Can just use in memory implementation, as it's a lookup not a stateful application.
// Mental notes, they're split by library. Need different classes (?) that are called if library exists.
?>

<?php
// Note: I know this is kind of nasty. I don't know whether I will spend any time on this projec tyet -- if so,
// i'll implement a proper router.

?>

<?php // notes on what to keep ?>
apcu_build_info
apcu_enabled
apcu_shared_memory_segments
apcu_shared_memory_segment_size_bytes
apcu_ttl_seconds

fpm_enabled

core_build_info
- version
- server api
# HELP The numeric value of the PHP error display. See http://php.net/manual/en/errorfunc.constants.php
# TYPE gauge
core_error_reporting
# HELP Whether or not to surface errors to the user
# TYPE gauge
core_display_errors
# HELP How many seconds the PHP application is allowed to execute before terminating script early
# TYPE gauge
core_max_execution_time_seconds
# HELP The number of files that can be simultaneously uploaded
# TYPE gauge
core_max_file_uploads
# HELP The maximum it's possible to nest the input variables $_GET and $_POST
# TYPE gauge
core_max_input_nesting_level
# HELP The maximum amount of time that PHP is allowed to spend parsing input
# TYPE gauge
core_max_input_time
# HELP The maximum number of input variables that PHP is allowed to parse
# TYPE gauge
core_max_input_vars
# HELP The total memory allowed by a PHP process
# TYPE gauge
core_memory_limit_bytes