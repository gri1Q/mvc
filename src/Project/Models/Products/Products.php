<?php

namespace Project\Models\Products;

use Project\Exception\InvalidArgumentException;

class Products
{
    private $id;
    private $categoryId;
    private $name;
    private $identificationNumber;
    private $description;
    private $repairRequired;
    private $createdAt;
    private $status;
    private $location = "Поступил на склад";
    private $responsible = 'Admin';

    public function setName()
    {
    }
    public function setIdentificationNumber()
    {
    }
    public function setDescription()
    {
    }
    public function setRepairRequired()
    {
    }
    public function setCreatedAt()
    {
    }
    public function setStatus()
    {
    }
    public function setLocation()
    {
    }
    public function setResponsible()
    {
    }
    public static function createProducts(array $fields): Products
    {
        if (empty($fields['name'])) {
            throw new InvalidArgumentException('Не передано название предмета');
        }

        if (empty($fields['identification_number'])) {
            throw new InvalidArgumentException('Не передан идентификационный номер предмета');
        }

        if (empty($fields['description'])) {
            throw new InvalidArgumentException('Не передано описание предмета');
        }

        if (empty($fields['repairRequired'])) {
            throw new InvalidArgumentException('Не передан статус ремонта предмета');
        }

        //Статус у всех автоматически будет при поступлении на складе
        if (empty($fields['text'])) {
            throw new InvalidArgumentException('Не передан идентификационный номер предмета');
        }

        if (empty($fields['responsible'])) {
            throw new InvalidArgumentException('Не передан ответственный за предмет');
        }

        $article = new Products();

        $article->setAuthor($author);
        $article->setName($fields['name']);
        $article->setText($fields['text']);
    }
}
