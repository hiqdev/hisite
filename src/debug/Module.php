<?php
/**
 * HiSite Yii2 base project.
 *
 * @link      https://github.com/hiqdev/hisite
 * @package   hisite
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2026, HiQDev (http://hiqdev.com/)
 */

namespace hisite\debug;

/**
 * Debug module that records a request only when the requester may see the debugger.
 *
 * The parent module writes a debug record for every request and checks
 * `allowedIPs` only before showing the toolbar and the debug pages. Each record
 * rewrites the shared history index under an exclusive lock, so health probes
 * and visitors pay for records nobody can open.
 */
class Module extends \yii\debug\Module
{
    public function bootstrap($app)
    {
        parent::bootstrap($app);
        $this->logTarget->enabled = $this->checkAccess();
    }
}
