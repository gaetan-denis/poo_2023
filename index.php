<?php

/**
 * Le script suivant simulera un combat entre 2 personnages (un PC et un NPC)
 *
 * Chaque personnage possède des "points de vie" (attribut hp) symbolisant leur capacité à rester debout.
 * Lorsque hp atteint 0, le personnage est vaincu.
 *
 * Tour à tour, les adversaires lanceront une attaque l'un vers l'autre, affectant le nombre de points de vie restant,
 * jusqu'à ce qu'un des deux soit vaincu.
 */

// Auto chargement des classes
spl_autoload_register(function ($class) {
    require __DIR__ . '/' . strtolower(str_replace('\\', DIRECTORY_SEPARATOR, $class)) . '.php';
});

//todo 1 : créez au moins 4 armes différentes.
// lorsqu'un pc ou un npc est généré, il doit recevoir une arme aléatoire.

//todo 2 : modifiez l'attaque (method) afin de prendre en compte l'utilisation de l'arme.
// lorsqu'un personnage réussit une attaque, les dégâts doivent provenir de l'arme utilisée par le personnage.
// les dégâts doivent être égal à une valeur aléatoire comprise entre les dégâts minimum et maximum de l'arme.

//todo 3 : créez un nouvel élément (class) : les capacités magiques (que vous pouvez appeler simplement "magic")
// lorsqu'un pc ou un npc est généré, il doit recevoir une capacité magique aléatoire.

//todo 4 : créez 2 catégories d'armes : les armes de corps à corps et les armes à distance.

//todo 5 : créez deux nouvelles catégories, autant valable pour les armes que pour la magie : offensive et défensive
// les capacités offensives permettront d'effectuer une attaque, tandis que les capacités défensives permettront d'esquiver OU de parer

//todo 6 : ajoutez la possibilité d'esquiver et de parer pour les personnages.
// les attaques des armes de corps à corps ne permettent pas d'esquive, mais permettent la parade si le personnage possède une arme défensive
// les armes à distance permettent l'esquive, mais pas la parade.

$weapons = \classes\weapon::generateWeapons();

// instanciation des objets nécessaires à l'exécution du programme
$pc = new \classes\pc('PC', 1, 'Marc');
$pc->setHp(20);
$pc->setAttack(10);
$pc->setDefense(10);
$pc->giveWeapon($weapons);

$npc = new \classes\npc('NPC', 2);
$npc->setHp(20);
$npc->setAttack(10);
$npc->setDefense(10);
$npc->giveWeapon($weapons);

// attaque simple
//echo $pc->Attack($npc);

// attaque & riposte jusqu'à la mort d'un des candidats
while($pc->getHp() > 0 && $npc->getHp() > 0) {
    echo $pc->Attack($npc);
    if ($pc->getHp() > 0 && $npc->getHp() > 0) {
        echo $npc->Attack($pc);
    }
}
// combat terminé, le vainqueur
if ($pc->getHp() == 0) {
    $winner = $npc->getName();
} else {
    $winner = $pc->getName();
}
echo '<p>Le combat est terminé! Le vainqueur est : ' . $winner . '</p>';

// le NPC ne sera plus déterminé par le script index, mais proviendra d'une base de données où l'adversaire sera déterminé aléatoirement