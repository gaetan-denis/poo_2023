<?php

namespace classes;

class weapon extends attackType
{
    public int $id;
    public string $name;
    public int $minDamage = 1;
    public int $maxDamage;

    public bool $isCac;

    public function isCac(): bool
    {
        return $this->isCac;
    }

    public function setIsCac(bool $isCac): void
    {
        $this->isCac = $isCac;
    }

    /**
     * @param int $id
     * @param string $name
     * @param int $minDamage
     * @param int $maxDamage
     */
    public function __construct(int $id, string $name, int $minDamage, int $maxDamage, bool $isCac)
    {
        $this->id = $id;
        $this->name = $name;
        $this->minDamage = $minDamage;
        $this->maxDamage = $maxDamage;
        $this->isCac= $isCac;
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
        $weapon1 = new \classes\weapon(1, 'nez de gobelin', 1, 2,1);
        $weapon2 = new \classes\weapon(2, 'épée courte',1, 6,1);
        $weapon3 = new \classes\weapon(3, 'bâton de Nécroman', 1, 4,1);
        $weapon4 = new \classes\weapon(4, 'épée à deux mains ', 1, 10,1);
        $weapon5 = new \classes\weapon(5,'arc court', 1,6,0);
        return [$weapon1, $weapon2, $weapon3, $weapon4,$weapon5];
    }
    public function getDamageWeapon() : int
    {
        return rand($this->minDamage,$this->maxDamage);

    }
}