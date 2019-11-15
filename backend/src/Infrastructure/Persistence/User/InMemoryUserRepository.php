<?php
declare(strict_types=1);

namespace App\Infrastructure\Persistence\User;

use App\Domain\User\User;
use App\Domain\User\UserNotFoundException;
use App\Domain\User\UserRepository;

class InMemoryUserRepository implements UserRepository
{
    /**
     * @var User[]
     */
    private $users;

    /**
     * InMemoryUserRepository constructor.
     *
     * @param array|null $users
     */
    public function __construct(array $users = null)
    {
        $this->users = $users ?? [
            1 => new User(
                'tiago',
                'tiago@exemplo.com',
                '1234',
                ["Javascript", "Vue", "Angular"],
                [],
                true,
                "",
                "",
                "",
                "",
                ""
            ),
            2 => new User(
                'John',
                'John@doe.com',
                '2346r',
                ["MySql", "Php", "Python"],
                [],
                true,
                "",
                "",
                "",
                "",
                ""
            ),
            3 => new User(
                'maico',
                'maico@exemplo.com',
                '123wqe',
                ["Javascript", "Java", "Angular"],
                [],
                true,
                "",
                "",
                "",
                "",
                ""
            ),
            4 => new User(
                'victor',
                'victor@exemplo.com',
                '123re',
                ["Javascript", "Vue", "Vuex"],
                [],
                true,
                "",
                "",
                "",
                "",
                ""
            ),
            5 => new User(
                'ebler',
                'ebler@exemplo.com',
                'd21ae',
                ["Delph", "D", "C#"],
                [],
                true,
                "",
                "",
                "",
                "",
                ""
            ),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function findAll(): array
    {
        return array_values($this->users);
    }

    /**
     * {@inheritdoc}
     */
    public function findUserOfId(int $id): User
    {
        if (!isset($this->users[$id])) {
            throw new UserNotFoundException();
        }

        return $this->users[$id];
    }
}
