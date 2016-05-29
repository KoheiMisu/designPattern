<?php
/**
 * 友達を表すオブジェクト。こいつを走査する
 */

namespace Iterator;

class FriendBean {
    private $name;
    private $age;
    private $job;

    public function __construct($name, $age, $job)
    {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getJob(): string
    {
        return $this->job;
    }
}
