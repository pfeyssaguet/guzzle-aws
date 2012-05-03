<?php
/**
 * @package Guzzle PHP <http://www.guzzlephp.org>
 * @license See the LICENSE file that was distributed with this source code.
 */

namespace Guzzle\Aws\Tests\S3;

use Guzzle\Common\Event\EventManager;
use Guzzle\Http\Message\RequestFactory;
use Guzzle\Aws\S3\S3Client;
use Guzzle\Aws\S3\S3Signature;
use Guzzle\Aws\S3\SignS3RequestPlugin;

/**
 * @author Michael Dowling <michael@guzzlephp.org>
 */
class SignS3RequestPluginTest extends \Guzzle\Tests\GuzzleTestCase
{
    /**
     * @covers Guzzle\Aws\S3\SignS3RequestPlugin
     */
    public function testSignsS3Requests()
    {
        $signature = new S3Signature('a', 'b');
        $plugin = new SignS3RequestPlugin($signature);
        $this->assertSame($signature, $plugin->getSignature());
    }

    /**
     * @covers Guzzle\Aws\S3\SignS3RequestPlugin
     */
    public function testAddsAuthorizationHeaders()
    {
        $this->getServer()->enqueue("HTTP/1.1 200 OK\r\nContent-Length: 0\r\n\r\n");

        $client = S3Client::factory(array(
            'base_url' => $this->getServer()->getUrl(),
            'access_key' => 'a',
            'secret_key' => 's'
        ));

        $request = $client->createRequest();
        $request->send();

        $this->assertTrue($request->hasHeader('Authorization') !== false);
        $this->assertContains('AWS a:', $request->getHeader('Authorization'));
    }
}