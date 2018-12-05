<?php
declare(strict_types = 1);
/**
 * /src/App/DataFixtures/ORM/User.php
 */
namespace App\DataFixtures;

use App\Entity\UserGroup as UserGroupEntity;
use App\Services\Helper\Interfaces\Roles;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;

/**
 * Class UserGroupFixtures
 *
 * This fixture will create following data to test environment database, also note that some values change on each
 * fixture load:
 * -
 *  id: UUID_V4
 *  username: "john-logged"
 *  firstname: "John"
 *  surname: "Doe"
 *  email: "john.doe-logged@test.com"
 *  password: ENCRYPTED_PASSWORD
 * -
 *  id: UUID_V4
 *  username: "john-user"
 *  firstname: "John"
 *  surname: "Doe"
 *  email: "john.doe-user@test.com"
 *  password: ENCRYPTED_PASSWORD
 * -
 *  id: UUID_V4
 *  username: "john-admin"
 *  firstname: "John"
 *  surname: "Doe"
 *  email: "john.doe-admin@test.com"
 *  password: ENCRYPTED_PASSWORD
 * -
 *  id: UUID_V4
 *  username: "john-root"
 *  firstname: "John"
 *  surname: "Doe"
 *  email: "john.doe-root@test.com"
 *  password: ENCRYPTED_PASSWORD
 * -
 *  id: UUID_V4
 *  username: "john"
 *  firstname: "John"
 *  surname: "Doe"
 *  email: "john.doe@test.com"
 *  password: ENCRYPTED_PASSWORD
 *
 * Also note that users with username 'john-{user_group_role}' has also added to that specified user group.
 *
 * Passwords for these users are just 'doe' OR 'doe-{user_group_role}' depending on which user group he belongs.
 *
 * @package App\DataFixtures\ORM
 */
class UserGroupFixtures extends Fixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
{
    // Traits
    use ContainerAwareTrait;

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @throws ServiceCircularReferenceException
     * @throws ServiceNotFoundException
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $roleService = $this->container->get('app.services.helper.roles');

        $roles = $roleService->getRoles();

        // Create groups
        \array_map(
            [$this, 'createGroup'],
            \array_fill(0, \count($roles), $manager),
            \array_fill(0, \count($roles), $roleService),
            $roles
        );

        // Flush all changes to database
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }

    /**
     * Helper method to create actual group entities.
     *
     * @param   ObjectManager $manager
     * @param   Roles $roleService
     * @param   string $role
     * @throws \Exception
     */
    private function createGroup(ObjectManager $manager, Roles $roleService, string $role)
    {
        // Create new user group
        $group = new UserGroupEntity([]);
        $group->setName($roleService->getRoleLabel($role));
        $group->setRole($role);

        $manager->persist($group);

        // Create reference to current user group
        $this->addReference('user-group-' . $roleService->getShort($role), $group);
    }
}
