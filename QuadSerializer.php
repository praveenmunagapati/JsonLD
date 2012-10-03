<?php

/*
 * (c) Markus Lanthaler <mail@markus-lanthaler.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ML\JsonLD;

use ML\JsonLD\Exception\ParseException;

/**
 * Quad serializer interface
 *
 * @author Markus Lanthaler <mail@markus-lanthaler.com>
 */
interface QuadSerializer
{
    /**
     * Serializes quads to a string.
     *
     * @param Quad[] $quads Array of quads to be serialized.
     *
     * @return string The serialized quads.
     */
    public function serialize(array $quads);
}
