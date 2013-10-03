<?php
/**
 * Paulus - A PHP micro-framework for creating RESTful services
 *
 * @author      Trevor Suarez (Rican7)
 * @copyright   2013 Trevor Suarez
 * @link        https://github.com/Rican7/Paulus
 * @license     https://github.com/Rican7/Paulus/blob/master/LICENSE
 * @version     2.0.0
 */

namespace Paulus\Exception\Http;

use Paulus\Exception\Http\Standard\BadRequest;

/**
 * InvalidRequestSyntax
 *
 * Exception representing a request that
 * contains syntax that was unable to be
 * parsed or understood
 *
 * @uses    BadRequest
 * @package Paulus\Exception\Http
 */
class InvalidRequestSyntax extends BadRequest
{

    /**
     * The exception slug
     *
     * @var string
     * @access protected
     */
    protected $slug = 'INVALID_REQUEST_SYNTAX';

    /**
     * The exception message
     *
     * @var string
     * @access protected
     */
    protected $message = 'The posted request\'s syntax is invalid';
}