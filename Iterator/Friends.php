<?php
/**
 * 上の友達Beanを配列にして格納するオブジェクト。
 * IteratorAggregateをimplementsしてる。
 */

namespace Iterator;

use Iterator\FriendBean;

class Friends implements \IteratorAggregate
{
    private $friends;

    public function __construct()
    {
        $this->friends = new \ArrayObject();
    }

    public function add(FriendBean $friendBean)
    {
        $this->friends[] = $friendBean;
    }

    public function getIterator()
    {
        return $this->friends->getIterator();
    }
}
