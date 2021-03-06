<?php
/**
 * @package Guzzle PHP <http://www.guzzlephp.org>
 * @license See the LICENSE file that was distributed with this source code.
 */

namespace Guzzle\Aws\Mws\Type;

/**
 * Report processing statuses
 *
 * @author Harold Asbridge <harold@shoebacca.com>
 * @codeCoverageIgnore
 */
class ReportProcessingStatus
{
    const SUBMITTED = '_SUBMITTED_';
    const IN_PROCESS = '_IN_PROGRESS_';
    const CANCELLED = '_CANCELLED_';
    const DONE = '_DONE_';
    const DONE_NO_DATA = '_DONE_NO_DATA_';
}