<?php

namespace breakpoint\etsy\Classes;

/**
 * Single object/result returned from the Etsy api.
 *
 * Class EtsyObject
 * @package breakpoint\etsy
 */
class EtsyObject {

    protected array $attributes = [];
    protected string $type; // type of object by from Etsy response

    /**
     * EtsyObject constructor.
     * @param array $attributes
     * @param string $type
     */
    public function __construct(array $attributes = [], string $type = '') {
        $this->type = $type;

        foreach ($attributes as $key => $value) {
            $this->attributes[$key] = $value;
        }
    }

    /**
     * Returns the object's type according to Etsy.
     *
     * @return string
     */
    public function getType(): string {
        return $this->type;
    }

    public function __get($name) {
        return $this->attributes[$name] ?? null;
    }

    public function __set($name, $value) {
        $this->attributes[$name] = $value;
    }
}