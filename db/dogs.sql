CREATE TABLE breeds
(
   id SERIAL PRIMARY KEY
   , name VARCHAR(50) UNIQUE NOT NULL
   , description TEXT NOT NULL
   , P_temperment INT NOT NULL
   , hyperAllergenic BOOLEAN NOT NULL
   , minCost  INT NOT NULL
   , maxCost  INT NOT NULL
   , size VARCHAR(50) NOT NULL
   , P_exercise INT NOT NULL
   , P_hair INT NOT NULL
   , professionalRating INT NOT NULL
   , overallUserRating INT
   , sizeRange INT NOT NULL
);

CREATE TABLE users
(
   id SERIAL PRIMARY KEY
   , username VARCHAR(50) UNIQUE NOT NULL
   , password VARCHAR(50) NOT NULL
);

CREATE TABLE comments
(
   id SERIAL PRIMARY KEY
   , content TEXT
   , breeds_id INT NOT NULL REFERENCES breeds(id)
   , user_id INT NOT NULL REFERENCES users(id)

);

CREATE TABLE userRating
(
   id SERIAL PRIMARY KEY
   , breeds_id INT NOT NULL REFERENCES breeds(id)
   , user_id INT NOT NULL REFERENCES users(id)
   , temperment INT NOT NULL
   , exercise INT NOT NULL
   , cost INT NOT NULL
   , hair INT NOT NULL

);

INSERT INTO breeds (name, description, P_temperment,
   hyperAllergenic, minCost, maxCost, size, P_exercise, P_hair,
   professionalRating, sizeRange) VALUES ('Bichon Frise',
   'The small but sturdy and resilient Bichon Frise stands
   among the world’s great “personality dogs.”
   Since antiquity, these irresistible canine
   comedians have relied on charm, beauty, and
   intelligence to weather history’s ups
   and downs.', 9, true, 650, 1500,'9.5-11.5 inches, 12-18 pounds',
    1, 1, 8, 1);

   INSERT INTO breeds (name, description, P_temperment,
   hyperAllergenic, minCost, maxCost, size, P_exercise, P_hair,
   professionalRating, sizeRange) VALUES ('Siberian Husky',
   'The Siberian Husky, a thickly coated, compact sled dog of medium
   size and great endurance, was developed to work in packs, pulling
   light loads at moderate speeds over vast frozen expanses.
   Sibes are friendly, fastidious, and dignified.',
    8, false, 450, 1500,'9.5-11.5 inches, 12-18 pounds',
    5, 5, 8, 3);

   SELECT name, P_temperment, professionalRating FROM breeds;
