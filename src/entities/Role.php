<?php
/**
 * This file is part of the ExpressSoft package.
 *
 * (c) Marcin Stodulski <marcin.stodulski@devsprint.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace expresscore\rbac\entities;

use expresscore\rbac\interfaces\PermissionInterface;
use expresscore\rbac\interfaces\RoleInterface;

class Role implements RoleInterface
{
    protected string $code = '';
    protected ?self $parent = null;
    protected string $name = '';
    /** @var $permissions PermissionInterface[] */
    protected mixed $permissions = [];
    protected bool $hasAllPermissions = false;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getParent(): ?RoleInterface
    {
        return $this->parent;
    }

    public function setParent(?RoleInterface $parent): void
    {
        $this->parent = $parent;
    }

    public function getPermissions(): mixed
    {
        return $this->permissions;
    }

    public function setPermissions(mixed $permissions): void
    {
        $this->permissions = $permissions;
    }

    public function addPermission(PermissionInterface $permission)
    {
        $this->permissions[$permission->getCode()] = $permission;
    }

    public function isHasAllPermissions(): bool
    {
        return $this->hasAllPermissions;
    }

    public function setHasAllPermissions(bool $hasAllPermissions): void
    {
        $this->hasAllPermissions = $hasAllPermissions;
    }
}
