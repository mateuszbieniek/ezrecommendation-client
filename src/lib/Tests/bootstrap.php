<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
$autoloadFile = __DIR__ . '/../../../vendor/autoload.php';
if (!file_exists($autoloadFile)) {
    echo $autoloadFile;
    throw new RuntimeException('Install dependencies to run test suite.');
}

require_once $autoloadFile;
