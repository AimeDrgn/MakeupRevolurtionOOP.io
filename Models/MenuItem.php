<?php

namespace Models;

class MenuItem {

    protected $id;
    protected $menuId;
    protected $parentId;
    protected $name;
    protected $link;
    protected $newTab;
    protected $weight;
    protected $active;
    protected $childs;
    protected $createdAt;
    protected $updatedAt;

    public function getId() {
        return $this->id;
    }

    public function getMenuId() {
        return $this->menuId;
    }

    public function getParentId() {
        return $this->parentId;
    }

    public function getName() {
        return $this->name;
    }

    public function getLink() {
        return $this->link;
    }

    public function getNewTab() {
        return $this->newTab;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getActive() {
        return $this->active;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setMenuId($menuId) {
        $this->menuId = $menuId;
        return $this;
    }

    public function setParentId($parentId) {
        $this->parentId = $parentId;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setLink($link) {
        $this->link = $link;
        return $this;
    }

    public function setNewTab($newTab) {
        $this->newTab = $newTab;
        return $this;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
        return $this;
    }

    public function setActive($active) {
        $this->active = $active;
        return $this;
    }

    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getChilds() {
        return $this->childs;
    }

    public function setChilds($childs) {
        $this->childs = $childs;
        return $this;
    }

}
