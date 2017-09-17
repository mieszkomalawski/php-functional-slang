<?php


namespace App;


use PhpSlang\Option\None;
use PhpSlang\Option\Some;

class UserRepository
{
    /**
     * @param string $email
     * @return UserRepositoryResult
     */
    public function findByEmail(string $email): UserRepositoryResult
    {
        if ($email === 'test@wp.pl') {
            return new UserRepositoryResult(new Some(new User('tester')));
        }
        return new UserRepositoryResult(new None());
    }

}