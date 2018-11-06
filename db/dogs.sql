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
CREATE TABLE audienceRating
(
   id SERIAL PRIMARY KEY
   , breeds_id INT NOT NULL REFERENCES breeds(id)
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

   SELECT userRating.breeds_id, userRating.user_id, breeds.id, users.id
   FROM userRating
   INNER JOIN breeds
   ON userRating.breeds_id=breeds.id
   INNER JOIN users
   ON userRating.user_id=users.id;

   SELECT audienceRating.breeds_id, breeds.id
   FROM audienceRating
   INNER JOIN breeds
   ON audienceRating.breeds_id=breeds.id;

   INSERT INTO breeds (name, description, P_temperment,
   hyperAllergenic, minCost, maxCost, size, P_exercise, P_hair,
   professionalRating, sizeRange) VALUES ('Cocker Spaniel',
   'The merry and frolicsome Cocker Spaniel, with his big,
   dreamy eyes and impish personality, is one of the world’s
   best-loved breeds. They were developed as hunting dogs,
   but Cockers gained their wide popularity as all-around
   companions.',
    9, false, 375, 600,'13.5-15.5 inches, 20-30 pounds',
    3, 3, 8, 2);

   INSERT INTO breeds (name, description, P_temperment,
   hyperAllergenic, minCost, maxCost, size, P_exercise, P_hair,
   professionalRating, sizeRange) VALUES ('Cavalier King Charles Spaniel',
   'The Cavalier King Charles Spaniel wears his connection to British history
    in his breed’s name. Cavaliers are the best of two worlds,
    combining the gentle attentiveness of a toy breed with the
    verve and athleticism of a sporting spaniel.',
    9, false, 600, 950,'12-13 inches, 13-18 pounds',
    2, 3, 9, 1);


   INSERT INTO breeds (name, description, P_temperment,
   hyperAllergenic, minCost, maxCost, size, P_exercise, P_hair,
   professionalRating, sizeRange) VALUES ('Labrador',
   'The sweet-faced, lovable Labrador Retriever is America’s most
   popular dog breed. Labs are friendly, outgoing,
   and high-spirited companions who have more than
   enough affection to go around for a family looking
   for a medium-to-large dog.',
    8, false, 500, 4000,'22.5-24.5 inches, 55-80 pounds',
    4, 3, 9, 3);

    INSERT INTO breeds (name, description, P_temperment,
   hyperAllergenic, minCost, maxCost, size, P_exercise, P_hair,
   professionalRating, sizeRange) VALUES ('Pit Bull',
   'The Pit Bull immediately strikes one as being a dog of power,
   passion and undying willingness. The brick-like head,
   which is especially broad between the cheeks
   (to house the powerful jaws), is carried upon a
   thickly muscled, well-defined neck. The neck runs
   into a deep, thick, well-sprung chest.
   The American Pit Bull is a very muscular, stocky,
   yet agile dog that is extremely strong for his size.
   The tail tapers to a point. The ears are generally
   cropped, though this is optional.',
    7, false, 800, 1300,'14-24 inches, 22-78 pounds',
    5, 2, 7, 3);

    INSERT INTO breeds (name, description, P_temperment,
   hyperAllergenic, minCost, maxCost, size, P_exercise, P_hair,
   professionalRating, sizeRange) VALUES ('Chihuahua',
   'The Chihuahua is a tiny dog with a huge personality.
   A national symbol of Mexico, these alert and amusing
   "purse dogs" stand among the oldest breeds of the Americas,
   with a lineage going back to the ancient kingdoms of
   pre-Columbian times.',
    2, false, 400, 1200,'5-8 inches, less than 6 pounds',
    3, 1, 4, 1);

   INSERT INTO breeds (name, description, P_temperment,
   hyperAllergenic, minCost, maxCost, size, P_exercise, P_hair,
   professionalRating, sizeRange) VALUES ('Basset Hound',
   'Among the most appealing of the AKC breeds, the endearing and
   instantly recognizable Basset Hound is a perennial favorite
    of dog lovers all over the world. This low-slung and
    low-key hound can be sometimes stubborn, but is always
    charming.',
    10, false, 800, 1700,'up to 15 inches, 40-65 pounds',
    1, 2, 9, 2);


   INSERT INTO breeds (name, description, P_temperment,
   hyperAllergenic, minCost, maxCost, size, P_exercise, P_hair,
   professionalRating, sizeRange) VALUES ('Barbet',
   'An archetypic water dog of France, the Barbet is a rustic
   breed of medium size and balanced proportions who appears
   in artwork as early as the 16th century. In profile, the
   Barbet is slightly rectangular with a substantial head and
   long, sweeping tail. He has a long, dense covering of
   curly hair and a distinctive beard. An agile athlete,
   the Barbet has been used primarily to locate, flush, and
   retrieve birds. He has a cheerful disposition and is very
   social and loyal.',
    8, true, 1400, 2500,'19-24.5 inches, 35-65 pounds',
    3, 2, 7, 2);

   INSERT INTO breeds (name, description, P_temperment,
   hyperAllergenic, minCost, maxCost, size, P_exercise, P_hair,
   professionalRating, sizeRange) VALUES ('Giant Schnauzer',
   'The Giant Schnauzer is a larger and more powerful version of
   the Standard Schnauzer, and he should, as the breed standard
   says, be a “bold and valiant figure of a dog.”
   Great intelligence and loyalty make him a stellar worker
   and companion.',
    8, true, 400, 1600,'25.5-27.5 inches, 55-75 pounds',
    4, 3, 7, 2);

   INSERT INTO breeds (name, description, P_temperment,
   hyperAllergenic, minCost, maxCost, size, P_exercise, P_hair,
   professionalRating, sizeRange) VALUES ('Portuguese Water Dog',
   'The bright and biddable Portuguese Water Dog was bred to be an
    all-around fisherman’s helper. The robust, medium-sized body
    is covered by a coat of tight, low-shedding curls. PWDs are
    eager and athletic companions built for water work.',
    8, true, 1800, 2500,'20-23 inches, 35-50 pounds',
    4, 3, 7, 2);

   INSERT INTO breeds (name, description, P_temperment,
   hyperAllergenic, minCost, maxCost, size, P_exercise, P_hair,
   professionalRating, sizeRange) VALUES ('Samoyed',
   'The Samoyed is a substantial but graceful dog standing
   anywhere from 19 to a bit over 23 inches at the shoulder.
   Powerful, tireless, with a thick all-white coat impervious
   to cold—Sammies are perfectly beautiful but highly functional.
    Even their most delightful feature, a perpetual smile,
    has a practical function: The upturned corners of the
    mouth keep Sammies from drooling, preventing icicles
    from forming on the face. A Sammy sentenced to solitary
    confinement in the yard is a miserable—and
    destructive—creature. These are smart, social,
    mischievous dogs who demand love and attention.
    Sammies need a very firm but loving hand in training.
     As pack animals, they must learn early who the alpha
     dog is—and the alpha dog must be you.',
    6, false, 600, 1500,'21-23.5 inches, 45-65 pounds',
    4, 5, 7, 2);