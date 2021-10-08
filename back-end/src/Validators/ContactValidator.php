<?php

namespace Api\Validators;

use Respect\Validation\Validator as v;

final class ContactValidator extends SelfValidation
{
    public function validate($data)
    {
        $rules = [
            'name' => v::notEmpty()->length(0, 100)->setName('Nome'),
            'email' => v::email()->notEmpty()->length(0, 100)->setName('E-mail'),
            'phone' => v::phone()->notEmpty()->length(0, 15)->setName('Telefone'),
        ];
        // https://respect-validation.readthedocs.io/en/1.1/rules/Phone/

        return $this->validateData($data, $rules);
    }
}
