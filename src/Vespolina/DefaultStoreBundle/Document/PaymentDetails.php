<?php

namespace Vespolina\DefaultStoreBundle\Document;

class PaymentDetails implements \ArrayAccess, \IteratorAggregate
{
    protected $id;

    protected $details = array();

    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     */
    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->details);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetGet($offset)
    {
        return $this->details[$offset];
    }

    /**
     * {@inheritDoc}
     */
    public function offsetSet($offset, $value)
    {
        $this->details[$offset] = $value;
    }

    /**
     * {@inheritDoc}
     */
    public function offsetUnset($offset)
    {
        unset($this->details[$offset]);
    }

    /**
     * {@inheritDoc}
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->details);
    }
}