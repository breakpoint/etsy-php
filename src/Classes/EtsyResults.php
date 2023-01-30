<?php

namespace breakpoint\etsy\Classes;

use ArrayAccess;
use Countable;
use Iterator;

/**
 * Basic implementation of an iterable collection of EtsyObjects.
 *
 * Class EtsyResults
 * @package breakpoint\etsy
 */
class EtsyResults implements ArrayAccess, Iterator, Countable {

    protected array $collection = [];
    protected int $position = 0;

    /**
     * EtsyResults constructor.
     * @param array $elements
     */
    public function __construct(array $elements = []) {

        // loop over 'results' portion of response
        foreach ($elements['results'] as $key => $value) {

            // is an iterable item with array of attributes
            if (is_numeric($key) && is_array($value)) {
                $this->add(new EtsyObject($value, $elements['type'] ?? null));
            } else {
                $this->add(new EtsyObject([$key => $value]));
            }
        }
    }

    /**
     * Adds an item to the collection.
     *
     * @param $object
     */
    public function add($object) {
        $this->collection[] = $object;
    }

    /**
     * Returns the first item.
     *
     * @return mixed|null
     */
    public function first() {
        return $this->collection[0] ?? null;
    }

    /**
     * Returns number of results found.
     *
     * @return int
     */
    public function count() {
        return count($this->collection);
    }

    /**
     * @inheritDoc
     */
    public function offsetExists($offset) {
        return isset($collection[$offset]);
    }

    /**
     * @inheritDoc
     */
    public function offsetGet($offset) {
        return isset($this->collection[$offset]) ? $this->collection[$offset] : null;
    }

    /**
     * @inheritDoc
     */
    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->collection[] = $value;
        } else {
            $this->collection[$offset] = $value;
        }
    }

    /**
     * @inheritDoc
     */
    public function offsetUnset($offset) {
        unset($this->collection[$offset]);
    }

    /**
     * @inheritDoc
     */
    public function rewind() {
        $this->position = 0;
    }

    /**
     * @inheritDoc
     */
    public function current() {
        return $this->collection[$this->position];
    }

    /**
     * @inheritDoc
     */
    public function key() {
        return $this->position;
    }

    /**
     * @inheritDoc
     */
    public function next() {
        $this->position++;
    }

    /**
     * @inheritDoc
     */
    public function valid() {
        return isset($this->collection[$this->position]);
    }
}