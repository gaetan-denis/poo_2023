<?php

namespace classes;

class weapon
{
    public int $id;
    public string $name;
    public int $minDamage = 1;
    public int $maxDamage;

    /**
     * @param int $id
     * @param string $name
     * @param int $minDamage
     * @param int $maxDamage
     */
    public function __construct(int $id, string $name, int $minDamage, int $maxDamage)
    {
        $this->id = $id;
        $this->name = $name;
        $this->minDamage = $minDamage;
        $this->maxDamage = $maxDamage;
    }


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

    public function getMinDamage(): int
    {
        return $this->minDamage;
    }

    public function setMinDamage(int $minDamage): void
    {
        $this->minDamage = $minDamage;
    }

    public function getMaxDamage(): int
    {
        return $this->maxDamage;
    }

    public function setMaxDamage(int $maxDamage): void
    {
        $this->maxDamage = $maxDamage;
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
    public function getDamageWeapon() : int
    {
        return rand($this->minDamage,$this->maxDamage);

    }
}