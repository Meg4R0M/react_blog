<?php
declare(strict_types=1);
/**
 * /src/App/Repository/UserGroup.php
 */
namespace App\Repository;

/**
 * Doctrine repository class for UserGroup entities.
 *
 * @package App\Repository
 */
class UserGroup extends Base
{
    /**
     * Names of search columns.
     *
     * @var string[]
     */
    protected static $searchColumns = ['name', 'role'];
    // Implement custom entity query methods here
}
