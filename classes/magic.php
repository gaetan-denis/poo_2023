<?php

namespace classes;

class magic
{
    private int $id;
    private string $name;
    private int $range;
    private string $element;
    private int $dommages;

    /**
     * @param int $id
     * @param string $name
     * @param int $range
     * @param string $element
     * @param int $dommages
     */

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getRange(): int
    {
        return $this->range;
    }

    public function setRange(int $range): void
    {
        $this->range = $range;
    }

    public function getElement(): string
    {
        return $this->element;
    }

    public function setElement(string $element): void
    {
        $this->element = $element;
    }

    public function getDommages(): int
    {
        return $this->dommages;
    }
    public function setDommages(int $dommages): void
    {
        $this->dommages = $dommages;
    }

    public static function generateWeapons(): array
    {
        $sword = new \classes\weapon(1, 'nez de gobelin', 1, 2);
        $dagger = new \classes\weapon(2, 'épée courte',
            1, 6);
        $staff = new \classes\weapon(3, 'bâton de Nécroman', 2, 6);
        $axe = new \classes\weapon(4, 'testicule de dragon', 1, 10);
        return [$sword, $dagger, $staff, $axe];
}