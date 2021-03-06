<?php
/**
 * Phossa Project
 *
 * PHP version 5.4
 *
 * @category  Library
 * @package   Phossa2\Validate
 * @copyright Copyright (c) 2016 phossa.com
 * @license   http://mit-license.org/ MIT License
 * @link      http://www.phossa.com/
 */
/*# declare(strict_types=1); */

namespace Phossa2\Validate\Message;

use Phossa2\Shared\Message\Message as BaseMessage;

/**
 * Message class for Phossa2\Validate
 *
 * @package Phossa2\Validate
 * @author  Hong Zhang <phossa@126.com>
 * @see     \Phossa2\Shared\Message\Message
 * @version 2.0.0
 * @since   2.0.0 added
 */
class Message extends BaseMessage
{
    /*
     * Validator not found for "%s"
     */
    const VALIDATOR_NOT_FOUND = 1609261119;

    /**
     * {@inheritDoc}
     */
    protected static $messages = [
        self::VALIDATOR_NOT_FOUND => 'Validator not found for "%s"',
    ];
}
