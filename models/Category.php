<?php

class Category
{
    protected $name;
    protected $icon = "fa-solid fa-face-frown-open";

    function _construct($_name, $_icon)
    {
        $this->setName($_name);
        $this->setIcon($_icon);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;
        return $this;
    }
}