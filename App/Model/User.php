<?php
namespace App\Model;

class User
{
    public int $id;
    public string $name;
    public string $email;
    public string $password;
    public ?string $img = null;
}