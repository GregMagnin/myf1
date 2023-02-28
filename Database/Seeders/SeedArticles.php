<?php

namespace Database\Seeders;

use Database\Connection;

final class SeedArticles extends Connection {

    public function handle() {
       $queries =  
        ["INSERT INTO articles (title,content,image,author,publish_date)
        VALUES
        ('Alpha Tauri en danger', 'L\'écurie de Formule 1 Alpha Tauri pourrait être rachetée si elle ne parvient pas à améliorer ses performances en 2022. C\'est du moins ce que certains experts de l\'industrie ont suggéré, alors que l\'équipe basée en Italie lutte pour atteindre les positions de tête du classement.

Alpha Tauri est l\'équipe sœur de Red Bull Racing et fait partie du groupe Red Bull depuis 2006. La stratégie de Red Bull Racing était de promouvoir les jeunes pilotes en utilisant l\'équipe Alpha Tauri (ex Toro Rosso) comme tremplin vers une équipe plus importante. Cette stratégie a porté ses fruits dans le passé, avec des pilotes tels que Sebastian Vettel et Daniel Ricciardo qui ont gravi les échelons depuis Alpha Tauri vers Red Bull Racing.

Cependant, depuis que Daniil Kvyat a été remplacé par Yuki Tsunoda en 2021, l\'écurie n\'a pas réussi à briller sur la piste. En 2021, Alpha Tauri a terminé à la 7ème place du championnat des constructeurs, avec un total de 84 points, soit 16 points de moins qu\'en 2020.

Si les performances d\'Alpha Tauri ne s\'améliorent pas en 2022, certains experts estiment que Red Bull pourrait envisager de vendre l\'équipe. Cela pourrait être une décision difficile pour le groupe Red Bull, qui a investi des millions de dollars dans l\'écurie et qui a une histoire riche en Formule 1.

Cependant, il est important de noter que la vente d\'Alpha Tauri ne signifierait pas nécessairement la fin de l\'équipe. De nombreuses écuries ont été rachetées par de nouveaux investisseurs au fil des ans, et Alpha Tauri pourrait attirer des acheteurs intéressés par l\'opportunité d\'entrer dans le monde de la Formule 1.

Le rachat d\'Alpha Tauri pourrait également permettre à Red Bull Racing de se concentrer davantage sur ses propres performances en Formule 1, sans être distrait par les résultats de son équipe sœur.

Pour le moment, il est difficile de dire si Alpha Tauri sera vendue en cas de mauvaises performances en 2022. Cependant, il est clair que l\'écurie devra s\'améliorer si elle veut rester compétitive dans un sport où la concurrence est féroce et où les coûts sont élevés. Les fans de Formule 1 attendent avec impatience de voir ce que l\'avenir réserve pour Alpha Tauri et Red Bull Racing.', 
'/public/images/alphatauri.jpg', 'Greg Magnin', STR_TO_DATE('2023-02-26 18:16:24', '%Y-%m-%d %H:%i:%s')
        )"      
        ];

        $pdo = $this->connection;
        $query = $pdo->prepare($queries[0]);
        $query->execute();

    }
}
