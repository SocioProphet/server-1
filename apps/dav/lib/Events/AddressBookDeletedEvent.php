<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2020, Georg Ehrke
 *
 * @author Georg Ehrke <oc.list@georgehrke.com>
 *
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program. If not, see <http://www.gnu.org/licenses/>
 *
 */
namespace OCA\DAV\Events;

use OCP\EventDispatcher\Event;

/**
 * Class AddressBookDeletedEvent
 *
 * @package OCA\DAV\Events
 * @since 20.0.0
 */
class AddressBookDeletedEvent extends Event {

	/** @var int */
	private $addressBookId;

	/** @var array */
	private $addressBookData;

	/** @var array */
	private $shares;

	/**
	 * AddressBookDeletedEvent constructor.
	 *
	 * @param int $addressBookId
	 * @param array $addressBookData
	 * @param array $shares
	 * @since 20.0.0
	 */
	public function __construct(int $addressBookId,
								array $addressBookData,
								array $shares) {
		parent::__construct();
		$this->addressBookId = $addressBookId;
		$this->addressBookData = $addressBookData;
		$this->shares = $shares;
	}

	/**
	 * @return int
	 * @since 20.0.0
	 */
	public function getAddressBookId():int {
		return $this->addressBookId;
	}

	/**
	 * @return array
	 * @since 20.0.0
	 */
	public function getAddressBookData(): array {
		return $this->addressBookData;
	}

	/**
	 * @return array
	 * @since 20.0.0
	 */
	public function getShares(): array {
		return $this->shares;
	}
}
