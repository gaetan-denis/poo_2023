<?php

namespace classes;
/**
 * Que sont les espaces de noms ? Dans leur définition la plus large, ils représentent un moyen d'encapsuler des éléments.
 * Cela peut être conçu comme un concept abstrait, pour plusieurs raisons. Par exemple, dans un système de fichiers,
 * les dossiers représentent un groupe de fichiers associés et servent d'espace de noms pour les fichiers qu'ils contiennent.
 * Un exemple concret est que le fichier foo.txt peut exister dans les deux dossiers /home/greg et /home/other,
 * mais que les deux copies de foo.txt ne peuvent pas co-exister dans le même dossier.
 * De plus, pour accéder au fichier foo.txt depuis l'extérieur du dossier /home/greg,
 * il faut préciser le nom du dossier en utilisant un séparateur de dossier, tel que /home/greg/foo.txt.
 * Le même principe s'applique aux espaces de noms dans le monde de la programmation.
 *
 * Dans le monde PHP,
 * les espaces de noms sont conçus pour résoudre deux problèmes que rencontrent les auteurs de bibliothèques et d'applications lors de la réutilisation d'éléments tels que des classes ou des bibliothèques de fonctions :
 * - Collisions de noms entre le code que vous créez, les classes, fonctions ou constantes internes de PHP, ou celle de bibliothèques tierces.
 * - La capacité de faire des alias ou de raccourcir des Noms_Extremement_Long pour aider à la résolution du premier problème, et améliorer la lisibilité du code.
 *
 * Note: Les noms d'espaces de noms ne sont pas sensible à la casse.
 * Note: Les espaces de noms PHP (PHP\...) sont réservés pour l'utilisation interne du langage.
 */




class character
{
    public string $name = 'character';
    private int $id;
    private int $hp;
    private int $attack;
    private int $defense;
    private object $weapon;

    private object $magic;

    /**
     * @param string $name
     * @param int $id
     */
    public function __construct(string $name, int $id)
    {
        $this->name = $name;
        $this->id = $id;
    }

    /**
     * GETTERS
     */

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    public function getHp(): int
    {
        return $this->hp;
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function getDefense(): int
    {
        return $this->defense;
    }

    public function getWeapon(): object
    {
        return $this->weapon;
    }

    public function getMagic():object
    {
        return $this->magic;
    }
    /**
     * SETTERS
     */

    /**
     * @param int $id
     * @return void
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setHp(int $hp): void
    {
        $this->hp = $hp;
    }

    public function setAttack(int $attack): void
    {
        $this->attack = $attack;
    }

    public function setDefense(int $defense): void
    {
        $this->defense = $defense;
    }

    public function setWeapon(object $weapon): void
    {
        $this->weapon = $weapon;
    }

    public function giveWeapon(array $weapons)
    {
        $this->weapon = $weapons[rand(0, count($weapons) -1)];
    }
    public function giveMagic(array $magic)
    {
        $this->magic= $magic[rand(0,count($magic)-1)];
    }
    /**
     * @param object $target
     * @return string
     */
    public function Attack(object $target) : string
    {
        $randomDamages=$this->getWeapon()->getDamageWeapon();
        $def = $target->getDefense();
        $result = rand(1, $this->attack) - rand(1, $def);
        if ($result > 0) {
            $live = $target->getHp()  - $randomDamages;
            $string = 'touché! ' . $target->name . ' est ';
            if ($live > 0) {
                $string .= 'blessé! Il lui reste ' . $live . ' points de vie';
            } else {
                $live = 0;
                $string .= 'mort!';
            }
            $target->setHp($live);
        } elseif ($result < 0) {
            $string = 'raté';
        } else {
            $string = 'paré';
        }
        return $this->name . ' attaque ' . $target->name . ' avec une attaque de ' . $this->attack.'('.$randomDamages . ' de dégâts dûs à l\'arme '. $this->getWeapon()->name .')' . ' face à une défense de ' . $def . '<br> Résultat : ' . $result . ' : ' . $string . '<br>';
    }

}