<?php

// ユーザ名値オブジェクト (ライフサイクルがない)
class UserName
{
    public function __construct(private $value)
    {
        if (strlen($value) < 3) {
            throw new InvalidArgumentException('ユーザ名は3文字以上です');
        }
    }

    public function getValue()
    {
        return $this->value;
    }
}