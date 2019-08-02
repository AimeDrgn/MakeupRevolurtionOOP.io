<?php

namespace Models\Db;

use Models\{
    Menu as MenuModel,
    Factories\MenuItemFactory
};
use Core\AbstractDbConnection;

class Menu extends AbstractDbConnection {

    public function getMenu(string $menuSlug): ?MenuModel {
        $menu = null;
        $stmt = $this->pdo->prepare("SELECT * FROM `menu` WHERE `slug`=?");
        $dbResult = $stmt->execute([$menuSlug]);
        if ($dbResult) {
            $dbRecord = $stmt->fetch(\PDO::FETCH_ASSOC);
            if ($dbRecord) {
                $menu = new MenuModel();
                $menu->setId($dbRecord['id'])
                        ->setSlug($dbRecord['slug'])
                        ->setName($dbRecord['name'])
                        ->setCreatedAt($dbRecord['created_at'])
                        ->setUpdatedAt($dbRecord['updated_at']);

                $stmt = $this->pdo->prepare("SELECT * FROM `menu_items` WHERE `menu_id` = ? AND `active`=1 AND `parent_id` = 0 ORDER BY `weight` ASC");
                $result = $stmt->execute([$menu->getId()]);
                $dbRecords = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                $menuItems = $this->mapArrayToMenuItems($dbRecords);

                foreach ($menuItems as $key => $menuItem) {
                    $menuItems[$key]->setChilds($this->getChilds($menuItem->getId()));
                }

                $menu->setMenuItems($menuItems);
            }
        }

        return $menu;
    }

    private function getChilds(int $parentId): array {
        $results = [];
        $stmt = $this->pdo->prepare("SELECT * FROM `menu_items` WHERE `active`=1 AND `parent_id` = ?");
        $dbResult = $stmt->execute([$parentId]);
        if ($dbResult) {
            $dbRecords = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            $results = $this->mapArrayToMenuItems($dbRecords);
        }
        return $results;
    }

    private function mapArrayToMenuItems(array $dbRecords): array {
        $results = [];
        foreach ($dbRecords as $dbRecord) {
            $results[] = MenuItemFactory::build(
                            $dbRecord['id'],
                            $dbRecord['menu_id'],
                            $dbRecord['parent_id'],
                            $dbRecord['name'],
                            $dbRecord['link'],
                            $dbRecord['new_tab'],
                            $dbRecord['active'],
                            $dbRecord['weight'],
                            $dbRecord['created_at'],
                            $dbRecord['updated_at']
            );
        }
        return $results;
    }

}
