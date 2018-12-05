<?php
declare(strict_types=1);
/**
 * /src/App/Services/Rest/UserGroup.php
 */
namespace App\Services\Rest;

use App\DTO\Rest\Interfaces\RestDto;
use App\Entity\UserGroup as Entity;
use App\Repository\UserGroup as Repository;
use Doctrine\Common\Persistence\Proxy;

// Note that these are just for the class PHPDoc block
/** @noinspection PhpHierarchyChecksInspection */
/** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
/**
 * Class UserGroup
 *
 * @package App\Services\Rest
 *
 * @method  Repository      getRepository(): Repository
 * @method  Proxy|Entity    getReference(string $id): Proxy
 * @method  Entity[]        find(array $criteria = null, array $orderBy = null, int $limit = null, int $offset = null, array $search = null): array
 * @method  null|Entity     findOne(string $id, bool $throwExceptionIfNotFound = null)
 * @method  null|Entity     findOneBy(array $criteria, array $orderBy = null, bool $throwExceptionIfNotFound = null)
 * @method  Entity          create(RestDto $dto): Entity
 * @method  Entity          save(Entity $entity, bool $skipValidation = null): Entity
 * @method  Entity          update(string $id, RestDto $dto): Entity
 * @method  Entity          delete(string $id): Entity
 */
class UserGroup extends Base
{
    // Implement custom service methods here
}
