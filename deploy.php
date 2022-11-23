<?php

namespace Deployer;

require 'recipe/common.php';

// Config

set('repository', 'https://github.com/Jasonk3nny/wpaaron_tanja_jason');


// Shared files/dirs between deploys
set('shared_files', ['public/wp-config.php']);
set('shared_dirs', ['public/wp-content/uploads']);



// Hosts
host('vm-alabaster.multimediatechnology.at')
    ->set('remote_user', 'admin')
    ->set('port','5412')
    ->set('deploy_path', '/home/admin/aaron');


desc('Deploy your project');
task('deploy', [
    'deploy:prepare',
    'deploy:publish'
]);



// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

?>