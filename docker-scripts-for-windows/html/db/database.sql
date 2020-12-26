PRAGMA foreign_keys= ON;


drop table if exists person;
drop table if exists admin;
drop table if exists client;
drop table if exists exercise;
drop table if exists ranking;
drop table if exists positions;
drop table if exists muscleGroup;
drop table if exists muscle;
drop table if exists exerciseMuscleGroupClient;
drop table if exists fitnesslevel;



CREATE TABLE person (
	username VARCHAR  primary key, 
	password VARCHAR
);

CREATE TABLE admin (

	id integer REFERENCES person(username)
);
CREATE TABLE client(

	id integer REFERENCES person(username),
	phoneNo integer
);
CREATE TABLE fitnesslevel(

level integer NOT NULL CHECK(level >= 0)

);

CREATE TABLE exercise(

	name text PRIMARY KEY,
	description text NOT NULL,
	difficulty  integer NOT NULL CHECK(difficulty >= 0),
	fitnessLevel integer NOT NULL REFERENCES fitnesslevel 
);

CREATE TABLE ranking(

	name text PRIMARY KEY

);

CREATE TABLE positions(

	nameExercise text REFERENCES exercise,
	nameRanking text REFERENCES ranking,
	repetitionsNo integer,
	PRIMARY KEY (nameExercise, nameRanking)
);

CREATE TABLE muscleGroup(
	
	name text PRIMARY KEY,
	description text NOT NULL

);

CREATE TABLE muscle(

	name text,
	nameMuscleGroup text REFERENCES muscleGroup,
	PRIMARY KEY (name, nameMuscleGroup)
);

CREATE TABLE exerciseMuscleGroupClient(

	nameExercise text REFERENCES exercise,
	nameMuscleGroup text REFERENCES muscleGroup,
 	IDClient text REFERENCES client,
	PRIMARY KEY (nameExercise, nameMuscleGroup, IDClient)

);

