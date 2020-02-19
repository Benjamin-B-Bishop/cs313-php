CREATE DATABASE DnD;

CREATE TABLE player
( ID              SERIAL NOT NULL
, c_name      VARCHAR(100) NOT NULL
, stat_str  INT
, stat_dex  INT 
, stat_con  INT
, stat_int  INT
, stat_wis  INT
, stat_cha  INT
);

INSERT INTO player 
( c_name     
, stat_str  
, stat_dex  
, stat_con  
, stat_int  
, stat_wis  
, stat_cha  
)
VALUES 
( 'Kytes, the Cat'
, 8
, 18
, 10
, 22
, 15
, 9 
);

INSERT INTO player 
( c_name     
, stat_str  
, stat_dex  
, stat_con  
, stat_int  
, stat_wis  
, stat_cha  
)
VALUES 
( 'Arno Strut'
, 9
, 12
, 7
, 25
, 18
, 24
);

