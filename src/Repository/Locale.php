<?php
declare(strict_types=1);
/**
 * /src/App/Repository/Locale.php
 */
namespace App\Repository;
/**
 * Class Locale
 *
 * @package App\Repository
 */
class Locale extends Base
{
    /**
     * Names of search columns.
     *
     * @var string[]
     */
    protected static $searchColumns = ['name', 'code'];
    // Implement custom entity query methods here
}