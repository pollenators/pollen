CREATE TABLE story (
	ID SERIAL PRIMARY KEY,
	author VARCHAR(300) NOT NULL,
	title VARCHAR(300) NOT NULL
);

INSERT INTO story (author, title)
VALUES  ('Jenn', 'Harry Potter');
