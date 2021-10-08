<?php

namespace Api\Validators;

use Respect\Validation\Validator as v;

final class UserValidator extends SelfValidation
{
    public function validate($data)
    {
        $rules = [
            'name' => v::notEmpty()->length(0, 100)->setName('Nome'),
            'email' => v::email()->notEmpty()->length(0, 100)->setName('E-mail'),
            'password' => v::email()->notEmpty()->length(0, 100)->setName('Senha'),
        ];

        return $this->validateData($data, $rules);
    }
}
