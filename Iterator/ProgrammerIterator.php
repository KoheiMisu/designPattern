<?php

namespace Iterator;

use Iterator\FrienBean;

class ProgrammerIterator extends \FilterIterator
{
    public function __construct($iterator)
    {
        parent::__construct($iterator);
    }

    /**
     * FilterIteratorのacceptをoverride。
     * イテレータお現在の要素がフィルタを満たすかどうかを調べる
     */
    public function accept()
    {
        //currentは現在の要素を返す
        $friend = $this->current();
        return ($friend->getJob() === 'PROGRAMMER');
    }
}
