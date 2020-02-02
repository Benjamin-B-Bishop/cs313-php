-- make database
CREATE DATABASE myDb;

-- first table
CREATE TABLE agent 
( agent_id      SERIAL NOT NULL
, name    VARCHAR(100) NOT NULL
, rank    VARCHAR(10)  NOT NULL
, country VARCHAR(50)  NOT NULL
, CONSTRAINT pk_agent_id PRIMARY KEY(agent_id)
);

-- test insert
INSERT INTO agent
( agent_id
, name
, rank
, country
)
VALUES 
( 007
, 'James Bond'
, '00'
, 'England' );

-- see if insert works
SELECT * FROM agent
ORDER BY agent_id;

-- drop it so we can start fresh every time
DROP TABLE agent;

 