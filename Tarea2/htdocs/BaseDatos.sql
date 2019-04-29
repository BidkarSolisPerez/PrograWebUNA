
CREATE TABLE "pelicula" (
    "id" INTEGER PRIMARY KEY,
    "movie_title" TEXT,
    "movie_description" TEXT,
    "movie_duration" INTEGER,
    "movie_director" TEXT,
    "movie_year" TEXT,
    "movie_category" TEXT,
    "price" NUMERIC
);

CREATE TABLE "user" (
    "id" INTEGER PRIMARY KEY,
    "name" TEXT,
    "email" TEXT,
    "password" TEXT
);

CREATE TABLE "cart"(
    "id" INTEGER PRIMARY KEY,
    "movie_id" INTEGER,
    "price" NUMERIC
)

CREATE TABLE "order"(
    "id" INTEGER PRIMARY KEY,
    "customer_name" TEXT,
    "customer_email" TEXT,
    "customer_address" TEXT,
    "card_number" TEXT,
    "card_type" TEXT,
    "order_state" TEXT,
    "total_order" NUMERIC
)


--Insert values to table pelicula
INSERT INTO pelicula (
    "movie_title",
    "movie_description",
    "movie_duration",
    "movie_director",
    "movie_year",
    "movie_category",
    "price") VALUES ("Lord Of The Rings I",
    "Movie related to fantastic adventure in the middle age",
    120,
    "Director1",
    1988,
    "Action",
    25);
INSERT INTO pelicula (
    "movie_title",
    "movie_description",
    "movie_duration",
    "movie_director",
    "movie_year",
    "movie_category",
    "price") VALUES ("Lord Of The Rings II",
    "Movie related to fantastic adventure in the middle age",
    130,
    "Director1",
    1992,
    "Action",
    25);
INSERT INTO pelicula (
    "movie_title",
    "movie_description",
    "movie_duration",
    "movie_director",
    "movie_year",
    "movie_category",
    "price") VALUES ("Lord Of The Rings III",
    "Movie related to fantastic adventure in the middle age",
    140,
    "Director1",
    2005,
    "Action",
    25);
INSERT INTO pelicula (
    "movie_title",
    "movie_description",
    "movie_duration",
    "movie_director",
    "movie_year",
    "movie_category",
    "price") VALUES ("The Lion King",
    "Familiar cartoons movie",
    120,
    "Director2",
    1984,
    "Kids",
    15);
INSERT INTO pelicula (
    "movie_title",
    "movie_description",
    "movie_duration",
    "movie_director",
    "movie_year",
    "movie_category",
    "price") VALUES ("Titanic",
    "Movie drama in the ocean and lovely couple surviving",
    120,
    "Director4",
    1998,
    "Drama",
    15);
INSERT INTO pelicula (
    "movie_title",
    "movie_description",
    "movie_duration",
    "movie_director",
    "movie_year",
    "movie_category",
    "price") VALUES ("Live is beautiful",
    "Drama movie relateing family history in the holocaust",
    140,
    "Director3",
    1984,
    "Drama",
    15);
INSERT INTO pelicula (
    "movie_title",
    "movie_description",
    "movie_duration",
    "movie_director",
    "movie_year",
    "movie_category",
    "price") VALUES ("Avengers",
    "Action movie about Marvel Universe super hero stories",
    120,
    "Director5",
    2010,
    "Action",
    15);
INSERT INTO pelicula (
    "movie_title",
    "movie_description",
    "movie_duration",
    "movie_director",
    "movie_year",
    "movie_category",
    "price") VALUES ("Avengers: Infinity wars",
    "Marvel Universe movie after Avengers",
    120,
    "Director5",
    2015,
    "Kids",
    15);
INSERT INTO pelicula (
    "movie_title",
    "movie_description",
    "movie_duration",
    "movie_director",
    "movie_year",
    "movie_category",
    "price") VALUES ("Toy Story",
    "Cartoon movies about Toys alive",
    120,
    "Director2",
    2000,
    "Kids",
    15);
INSERT INTO pelicula (
    "movie_title",
    "movie_description",
    "movie_duration",
    "movie_director",
    "movie_year",
    "movie_category",
    "price") VALUES ("Inside Out",
    "Cartoon movie about teeneger feelings exposure",
    120,
    "Director2",
    2015,
    "Kids",
    15);

--Insert values into admin user
INSERT INTO "user" ("name","email","password") VALUES ("Administrator","admin@admin.com","admin")


    