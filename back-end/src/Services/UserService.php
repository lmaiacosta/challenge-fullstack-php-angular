<?php

namespace Api\Services;

use Api\Validators\UserValidator;
use Api\Models\User;

class UserService extends BaseService
{
    public function get($id)
    {
        if (empty($id)) {
            $data = User::all()->toArray();
        } else {
            $data = User::find($id)->toArray();
        }

        return $this->ok($data);
    }

    public function post($data)
    {
        $validator = new UserValidator();

        if ($validator->validate($data) === false) {
            return $this->error($validator->errors, 200);
        }

        $user = User::create([
            'name' => trim($data['name']),
            'email' => trim($data['email']),
            'password' => md5($data['password']),
        ]);

        return $this->ok($user->toArray());
    }

    public function put($id, $data)
    {
        $validator = new UserValidator();

        if ($validator->validate($data) === false) {
            return $this->error($validator->errors, 200);
        }

        $user = User::find($id);

        if (!$user) {
            return $this->error('Not found', 404);
        }

        $user->fill([
            'name' => trim($data['name']),
            'email' => trim($data['email']),
            'password' => md5($data['password']),
        ]);

        $user->save();

        return $this->ok($user->toArray());
    }

    public function search($data)
    {
        $params = (object) $data;
        $query = $params->query;
        $users = User::query()
            ->where('name', 'like', "%{$query}%")
            ->orWhere('email', 'like', "%{$query}%")
            ->get();
        return $this->ok($users->toArray());
    }
}
