<?php

namespace classes;

class magic extends attackType
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
    public function __construct(int $id, string $name, int $range, string $element, int $dommages)
    {
        $this->id = $id;
        $this->name = $name;
        $this->range = $range;
        $this->element = $element;
        $this->dommages = $dommages;
    }

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


    public static function generateMagic(): array
    {
        $spell1 = new \classes\magic(1, 'Flamèche', 2, 'Feu', 3);
        $spell2 = new \classes\magic(1, 'Boule de neige', 4, 'Glace', 3);
        $spell3 = new \classes\magic(1, 'Bourasque', 6, 'Vent', 5);
        $spell4 = new \classes\magic(1, 'Tremblote de Richter', 2, 'Terre', 9);
        $spell5 = new \classes\magic(1, 'Souricière du mage Schrödinger', 2, 'Quantique', 9);

        return [$spell1, $spell2, $spell3, $spell4, $spell5];
    }
}