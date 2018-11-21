<?php
/**
 * ownCloud - Richdocuments App
 *
 * @author Victor Dubiniuk
 * @copyright 2014 Victor Dubiniuk victor.dubiniuk@gmail.com
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 */

namespace OCA\Richdocuments\Controller;

use \OCP\IRequest;
use \OCP\IConfig;
use \OCA\Richdocuments\AppConfig;
use \OCP\IL10N;
use \OCP\ICacheFactory;
use \OCP\ILogger;
use \OCA\Richdocuments\Storage;

class DocumentControllerTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @var IRequest
	 */
	private $request;
	/**
	 * @var IConfig
	 */
	private $settings;
	/**
	 * @var AppConfig
	 */
	private $appConfig;
	/**
	 * @var IL10N
	 */
	private $l10n;
	/**
	 * @var ICacheFactory
	 */
	private $cache;
	/**
	 * @var ILogger
	 */
	private $logger;

	/**
	 * @var Storage
	 */
	private $storage;

	public function setUp(){
		$this->request = $this->getMockBuilder(IRequest::class)
			->disableOriginalConstructor()
			->getMock();
		$this->settings = $this->getMockBuilder(IConfig::class)
			->disableOriginalConstructor()
			->getMock();
		$this->appConfig = $this->getMockBuilder(AppConfig::class)
			->disableOriginalConstructor()
			->getMock();
		$this->l10n = $this->getMockBuilder(IL10N::class)
			->disableOriginalConstructor()
			->getMock();
		$this->cache = $this->getMockBuilder(ICacheFactory::class)
			->disableOriginalConstructor()
			->getMock();
		$this->logger = $this->getMockBuilder(ILogger::class)
			->disableOriginalConstructor()
			->getMock();
		$this->storage = $this->getMockBuilder(Storage::class)
			->disableOriginalConstructor()
			->getMock();
	}

	public function testConstructor() {
		$documentController = new DocumentController(
			'richdocuments',
			$this->request,
			$this->settings,
			$this->appConfig,
			$this->l10n,
			'test',
			$this->cache,
			$this->logger,
			$this->storage
		);
	}
}
