<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        // print_r([
        //     'name' => $input['name'],
        //     'businessname' => $input['businessname'],
        //     'username' => $input['username'],
        //     'email' => $input['email'],
        //     'phone' => $input['phone'],
        //     'location' => $input['location'],
        //     'role' => 'client',
        //     'password' => Hash::make($input['password']),
        // ]);
        // die();

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();



        return User::create([
            'name' => $input['name'],
            'businessname' => $input['businessname'],
            'username' => $input['username'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'location' => $input['location'],
            'role' => 'client',
            'password' => Hash::make($input['password']),
        ]);
    }
}
