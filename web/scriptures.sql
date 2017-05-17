CREATE DATABASE scriptures;
\c scriptures

CREATE TABLE scripture
(
	id SERIAL PRIMARY KEY,
	book VARCHAR(100) NOT NULL,
	chapter INT NOT NULL,
	verse INT NOT NULL,
	content TEXT NOT NULL
);

INSERT INTO scripture(book, chapter, verse, content)
VALUES 
('John', 1, 5, 'John wrote about jesus a lot.'), 
('Doctrine and Covenants', 88, 49, 'This scripture talks about jesus too.'),
('Doctrine and Covenants', 93, 28, 'This scripture is a good one.'),
('Mosiah', 16, 9, 'Here''s a good scripture from King Benjamin.');
