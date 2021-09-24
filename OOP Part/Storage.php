<?php


class Storage
{
    public array $storage = [];

    public function add(object $key, mixed $data = null)
    {
        array_push($this->storage, [$key => $data]);
    }

    public function remove(object $key)
    {
        unset($this->storage->$key);
    }

    public function getHash(object $o): string
    {
        return get_class($this->storage->$o);
    }

    public function current(): object
    {
        $len = count($this->storage);

        return $this->storage[$len - 1];
    }

    public function getObjectList(): array
    {
        return $this->storage;
    }

    public static function removeAll($collection)
    {
        foreach ($collection as $key => $value) {
            unset($collection->$key);
        }
    }

}
