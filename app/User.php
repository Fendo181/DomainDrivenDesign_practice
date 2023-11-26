<?php

require_once __DIR__ . '/UserId.php';
require_once __DIR__ . '/UserName.php';

// ユーザエンティティ (ライフサイクルがある)
class User
{
    private $name;

    private $id;

    public function __construct($name)
    {
        $this->name = new UserName($name);
        $this->id = new UserId(111);
    }

    // プロパティのゲッター
    public function getName()
    {
        return $this->name->getValue().PHP_EOL;
    }

    public function getId()
    {
        return $this->id->getValue().PHP_EOL;
    }
}

$user = new User('yamada');
echo $user->getName();
echo $user->getId();