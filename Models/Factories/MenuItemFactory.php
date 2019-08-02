<?php

namespace Models\Factories;

use Models\MenuItem;

class MenuItemFactory {
    public static function build(
            int $id,
            int $menuId,
            int $parentId,
            string $name,
            string $link,
            bool $newTab,
            bool $active,
            int $weight,
            string $createdAt,
            string $updatedAt
    ): MenuItem {
        $menuItem = new MenuItem();
        $menuItem->setId($id)
                ->setMenuId($menuId)
                ->setParentId($parentId)
                ->setName($name)
                ->setLink($link)
                ->setNewTab($newTab)
                ->setActive($active)
                ->setWeight($weight)
                ->setCreatedAt($createdAt)
                ->setUpdatedAt($updatedAt);

        return $menuItem;
    }

}
