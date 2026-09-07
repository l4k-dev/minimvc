<?php

return [

    'up' => "

        CREATE TABLE home (

            titulo VARCHAR(255),
            desenvolvedor VARCHAR(255)

        );

    ",

    'down' => "

        DROP TABLE home;

    "

];