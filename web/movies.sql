CREATE DATABASE movies;
\c movies

CREATE TABLE movies
(
	id SERIAL PRIMARY KEY,
	title VARCHAR(100) NOT NULL,
	runtime SMALLINT,
	year SMALLINT NOT NULL
);

CREATE TABLE actor
(
	id SERIAL PRIMARY KEY,
	name VARCHAR(250) NOT NULL,
	birthday DATE,
	pictureUrl VARCHAR(255)
);

CREATE TABLE movieActor
(
	id SERIAL PRIMARY KEY,
	movieId INT NOT NULL REFERENCES movies(id),
	actorId INT NOT NULL REFERENCES actor(id),
	role VARCHAR(100)
);

INSERT INTO movies(title, runtime, year) VALUES ('Les Miserables', 160, 2012);
INSERT INTO movies(title, runtime, year) VALUES ('Nacho Libre', 92, 2006), 
('Batman', NULL, 1966);

INSERT INTO actor(name, birthday, pictureUrl) VALUES
('Hugh Jackman', 'Oct-12-1968', NULL);

INSERT INTO actor(name, birthday, pictureUrl) VALUES
('Adam West', NULL, NULL), ('Jack Black', NULL, NULL);

INSERT INTO actor(name, birthday, pictureUrl) VALUES
('Russell Crowe', NULL, NULL);

INSERT INTO movieActor(movieId, actorId) VALUES (1, 1);
INSERT INTO movieActor(movieId, actorId, role) VALUES (3, 2, 'Batman');
INSERT INTO movieActor(movieId, actorId, role) VALUES (1, 4, 'Javier');

SELECT m.title, a.name, ma.role FROM movies m JOIN movieActor ma ON m.id = ma.movieId
JOIN actor a ON ma.actorId = a.id WHERE ma.movieId = 1;

CREATE USER admin WITH PASSWORD 'theraininspain';
GRANT SELECT, INSERT, UPDATE ON ALL TABLES IN SCHEMA public TO the_critic;
GRANT USAGE, SELECT ON ALL SEQUENCES IN SCHEMA public TO the_critic;

UPDATE actor SET birthday = '1964-04-07' WHERE name = 'Russell Crowe';
