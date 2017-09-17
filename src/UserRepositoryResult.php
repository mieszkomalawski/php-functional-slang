<?php


namespace App;

use Closure;
use PhpSlang\Option\Option;

class UserRepositoryResult
{
    /**
     * @var Option
     */
    private $option;

    /**
     * UserRepositoryResult constructor.
     * @param Option $option
     */
    public function __construct(Option $option)
    {
        $this->option = $option;
    }

    public function map(Closure $expression): UserRepositoryResult
    {
        return new self($this->option->map($expression));
    }

    public function flatMap(Closure $expression): UserRepositoryResult
    {
        return new self($this->option->flatMap($expression));
    }

    /**
     * @return User
     */
    public function get() : User
    {
        return $this->option->get();
    }

    public function getOrElse($default)
    {
        return $this->option->getOrElse($default);
    }

    public function getOrCall(Closure $defaultExpression)
    {
        return $this->option->getOrCall($defaultExpression);
    }

    public function isEmpty(): bool
    {
        return $this->option->isEmpty();
    }

    public function isNotEmpty(): bool
    {
        return $this->option->isNotEmpty();
    }


}