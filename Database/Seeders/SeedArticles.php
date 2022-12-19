<?php

namespace Database\Seeders;

use Database\Connection;

final class SeedArticles extends Connection {

    public function handle() {
       $queries =  
        ["INSERT INTO articles (title,content,image,author,publish_date)
        VALUES
        ('De la Rosa, 10 ans déjà...', 'Le 10ème anniversaire de l\'accident de Formule 1 le plus grave de l\'histoire est un moment de souvenir et de réflexion pour les fans de sports automobiles. Le 1er octobre 2012, lors du Grand Prix de Formule 1 de Sakhir, au Bahreïn, quatre personnes ont perdu la vie et trois autres ont été gravement blessées lors d\'un accident terrifiant sur la piste.

L\'accident a eu lieu lors de la première séance d\'essais libres, alors que l\'équipe de Sauber était en train de régler la voiture de l\'un de ses pilotes, Pedro de la Rosa. Alors que de la Rosa était en train de s\'échauffer sur la piste, sa voiture a percuté un mur à haute vitesse, causant un incendie et un énorme nuage de fumée.

Malheureusement, l\'équipe de sauvetage n\'a pas réussi à arriver à temps pour secourir de la Rosa et ses trois mécaniciens, qui ont tous péri dans l\'incendie. Trois autres membres de l\'équipe ont été gravement blessés dans l\'accident et ont dû être transportés d\'urgence à l\'hôpital.

L\'accident a choqué le monde entier et a suscité de nombreuses questions sur la sécurité dans les sports automobiles. Depuis lors, de nombreuses mesures de sécurité ont été mises en place dans les équipes de Formule 1 pour éviter de tels accidents à l\'avenir.

Malgré ces efforts, l\'accident de Sakhir reste l\'un des plus tragiques de l\'histoire de la Formule 1 et continue de servir de rappel poignant de la dangerosité de ce sport. Les fans de Formule 1 se souviendront toujours de cet anniversaire funeste et honoreront la mémoire des victimes de cet accident tragique.', 
'/public/images/incendie.jpg', 'Greg Magnin', STR_TO_DATE('2022-12-19 15:02:32', '%Y-%m-%d %H:%i:%s')
        )",

        "INSERT INTO articles (title,content,image,author,publish_date)
        VALUES
        ('Tricherie de Mercedes : la fin de la domination en Formule 1', 'La Formule 1 a été choquée ce matin par la découverte d\'une tricherie de la part de l\'équipe Mercedes. Selon les informations qui ont été rendues publiques, l\'équipe aurait utilisé des dispositifs illégaux pour améliorer les performances de ses voitures lors de la dernière saison.

Suite à cette révélation, la Fédération Internationale de l\'Automobile (FIA) a immédiatement disqualifié Mercedes du championnat et a également suspendu les pilotes de l\'équipe.

Les conséquences de cette tricherie seront certainement dramatiques pour Mercedes, qui a remporté de nombreuses victoires cette saison grâce à ses performances exceptionnelles. Les fans de Formule 1 et les autres équipes de la discipline sont sous le choc et attendent avec impatience de savoir comment l\'équipe et les pilotes vont faire face à cette crise.

Il est important de souligner que la tricherie est absolument intolérable dans la Formule 1, et que toute équipe ou pilote qui en est accusé doit être tenu responsable de ses actions. La FIA a clairement indiqué qu\'elle ne tolérera pas de telles pratiques et qu\'elle prendra des mesures fermes pour empêcher que de telles infractions ne se reproduisent à l\'avenir.

Les fans de Formule 1 et les autres passionnés de sport automobile attendent maintenant de voir comment cette affaire va se dérouler et comment l\'équipe Mercedes et ses pilotes vont réagir à cette disqualification. Une chose est sûre : cette tricherie aura des conséquences durables pour l\'équipe et pour l\'ensemble de la Formule 1.', 
'/public/images/mercedes.jpg', 'Greg Magnin', STR_TO_DATE('2022-12-19 15:11:13', '%Y-%m-%d %H:%i:%s')
        
        )"        
        ];

        $pdo = $this->connection;
        $query = $pdo->prepare($queries[1]);
        $query->execute();

    }
}
