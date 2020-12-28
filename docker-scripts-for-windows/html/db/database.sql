PRAGMA foreign_keys= ON;


drop table if exists person;
drop table if exists admin;
drop table if exists client;
drop table if exists exercise;
drop table if exists ranking;
drop table if exists positions;
drop table if exists muscle;
drop table if exists exerciseMuscleGroupClient;
drop table if exists fitnesslevel;



CREATE TABLE person (
	username VARCHAR primary key, 
	password VARCHAR,
	fitnessLevel integer
);

CREATE TABLE admin (

	id integer REFERENCES person(username)
);
CREATE TABLE client(

	id integer REFERENCES person(username),
	phoneNo integer
);

CREATE TABLE exercise(

	name text PRIMARY KEY,
	muscle text REFERENCES muscle,
	points integer
);


CREATE TABLE muscleGroup(
	
	name text PRIMARY KEY,
	description text NOT NULL

);

CREATE TABLE muscle(

	name text PRIMARY KEY,
	name_mg text REFERENCES muscleGroup
);




INSERT INTO muscleGroup VALUES  ('Chest','Pectoral muscles (colloquially referred to as "pecs") are the muscles that connect the front of the human chest with the bones of the upper arm and shoulder.');
INSERT INTO muscleGroup VALUES  ('Back', 'A large, complex group of muscles work together to support the trunk and hold the body upright. They also allows the trunk to move, twist and bend in multiple directions.');
INSERT INTO muscleGroup VALUES ('Arms', 'Your arms contain many muscles that work together to allow you to perform all sorts of motions and tasks. Each of your arms is composed of your upper arm and forearm. Your upper arm extends from your shoulder to your elbow. Your forearm runs from your elbow to your wrist.');
INSERT INTO muscleGroup VALUES ('Shoulders', 'The muscles of the shoulder bridge the transitions from the torso into the head/neck area and into the upper extremities of the arms and hands.');
INSERT INTO muscleGroup VALUES ('Legs', ' The human leg, in the general word sense, is the entire lower, and footlimb of the human body, including the foot, thigh and even the hip or gluteal region.');
INSERT INTO muscleGroup VALUES ('Calves', 'The calf  is the back portion of the lower leg in human anatomy. The muscles within the calf correspond to the posterior compartment of the leg.');





INSERT INTO muscle VALUES('Pectoralis Major','Chest');
INSERT INTO muscle VALUES('Pectoralis Minor','Chest');
INSERT INTO muscle VALUES('Serratus Anterior','Chest');


INSERT INTO muscle VALUES('Trapezius','Back');
INSERT INTO muscle VALUES('Rhomboids','Back');
INSERT INTO muscle VALUES('Latissimus dorsi','Back');
INSERT INTO muscle VALUES('Erector spinae','Back');


INSERT INTO muscle VALUES('Biceps brachii','Arms');
INSERT INTO muscle VALUES('Biceps brachialis','Arms');
INSERT INTO muscle VALUES('Triceps','Arms');
INSERT INTO muscle VALUES('Forearms','Arms');

INSERT INTO muscle VALUES('Anterior head','Shoulders');
INSERT INTO muscle VALUES('Lateral head','Shoulders');
INSERT INTO muscle VALUES('Posterior head','Shoulders');

INSERT INTO muscle VALUES('Quadriceps','Legs');
INSERT INTO muscle VALUES('Hamstrings','Legs');
INSERT INTO muscle VALUES('Glutes','Legs');


INSERT INTO muscle VALUES('Gastrocnemius', 'Calves');
INSERT INTO muscle VALUES('Soleus', 'Calves');




INSERT INTO exercise VALUES('Dumbbell Chest Press','Pectoralis Major',200);
INSERT INTO exercise VALUES('Incline push-up','Pectoralis Minor',100);
INSERT INTO exercise VALUES('Decline push-up','Pectoralis Minor',400);
INSERT INTO exercise VALUES('Parallel Bar Dips','Pectoralis Minor',800);

INSERT INTO exercise VALUES('Bear Crawl','Serratus Anterior',500);
INSERT INTO exercise VALUES('Band Chest Press','Serratus Anterior',700);


INSERT INTO exercise VALUES('Shoulder Blade Squeeze','Trapezius',200);
INSERT INTO exercise VALUES('Dumbbell Shrug','Trapezius',400);
INSERT INTO exercise VALUES('Dumbbell Power Snatch','Trapezius',700);

INSERT INTO exercise VALUES('Prone Lateral Raise','Rhomboids',300);
INSERT INTO exercise VALUES('Floor Superman','Rhomboids',200);

INSERT INTO exercise VALUES('Reverse-grip bent-over row','Latissimus dorsi', 300);
INSERT INTO exercise VALUES('Medicine Ball Slams','Latissimus dorsi',300);

INSERT INTO exercise VALUES('Alternating Bird Dog','Erector spinae',200);
INSERT INTO exercise VALUES('Dumbbell deadlift','Erector spinae',600);

INSERT INTO exercise VALUES('Dumbbell Hammercurl','Biceps brachii',300);
INSERT INTO exercise VALUES('Dumbbell Curl','Biceps brachii',100);

INSERT INTO exercise VALUES('Dumbbell Cross-Body Hammer Curls','Biceps brachialis',400);

INSERT INTO exercise VALUES('Tricep Dips','Triceps',300);
INSERT INTO exercise VALUES('Overhead Tricep Extensions','Triceps',400);
INSERT INTO exercise VALUES('Dumbbell Kickback','Triceps',600);

INSERT INTO exercise VALUES('Palms-up Wrist Curl','Forearms',200);
INSERT INTO exercise VALUES('Pull-ups','Forearms',800);


INSERT INTO exercise VALUES('Overhead Press with Band','Anterior head',400);
INSERT INTO exercise VALUES('Dumbbell Military Press','Anterior head',600);

INSERT INTO exercise VALUES('Dumbbell Side Raise','Lateral head',400);
INSERT INTO exercise VALUES('Side Raise with Elastic Band','Lateral head',700);
INSERT INTO exercise VALUES('Dumbbell Bent-Over Reverse Fly','Lateral head',700);


INSERT INTO exercise VALUES('Front Hammer Raise','Posterior head',400);
INSERT INTO exercise VALUES('Elastic Band Face Pulls','Posterior head',600);


INSERT INTO exercise VALUES('Squat','Quadriceps',300);
INSERT INTO exercise VALUES('Lunge','Quadriceps',300);
INSERT INTO exercise VALUES('Cossack Squat','Quadriceps',600);
INSERT INTO exercise VALUES('Single Leg Squat','Quadriceps',700);

INSERT INTO exercise VALUES('Single-Leg Dumbbell Deadlift','Hamstrings',200);
INSERT INTO exercise VALUES('Barbell Hip Thrust','Hamstrings',500);

INSERT INTO exercise VALUES('Fire Hydrants','Glutes',400);
INSERT INTO exercise VALUES('Side Plank Leg Raises','Glutes',600);
INSERT INTO exercise VALUES('High Lunge Pose','Glutes',800);


INSERT INTO exercise VALUES('Standing Dumbbell Calf Raise','Gastrocnemius',300);
INSERT INTO exercise VALUES('Box Jumps','Gastrocnemius',500);

INSERT INTO exercise VALUES('Garland Pose','Soleus',300);
INSERT INTO exercise VALUES('Jumping Rope','Soleus',500);














