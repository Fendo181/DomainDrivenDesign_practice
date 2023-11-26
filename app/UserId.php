<?php

// ユーザID値オブジェクト (ライフサイクルがない)
class UserId
{
    public function __construct(private $value)
    {
        if (!is_int($value)) {
            throw new InvalidArgumentException('ユーザIDは整数でなければなりません');
        }
    }

    public function getValue()
    {
        return $this->value;
    }
}