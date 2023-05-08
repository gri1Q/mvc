<?php

namespace Project\Models\Categories;

use Project\Exception\InvalidArgumentException;
use Project\Services\Db;

class Category
{
    private $id;
    private $name;


    public function getName()
    {
        return $this->name;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public static function getTableName(): string
    {
        return 'categories';
    }
    public static function creatCategory(array $fields)
    {
        if (empty($fields['name'])) {
            throw new InvalidArgumentException('Не передано название категории');
        }

        $category = new Category();
        $db = Db::getInstance();
        $sql = "INSERT INTO " . self::getTableName() . " (name) VALUES (:name)";
        $db->query($sql, [':name' => $fields['name']], static::class);
        // return $this;
    }
}
