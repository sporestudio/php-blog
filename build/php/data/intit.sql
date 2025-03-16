/**
    Database initialization script
*/

DROP TABLE IF EXISTS post;

CREATE TABLE post (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    body VARCHAR(255) NOT NULL,
    user_id INT NOT NULL,
    created_at VARCHAR NOT NULL,
    updated_at VARCHAR
);

INSERT INTO 
    post (title, body, user_id, created_at, updated_at)
VALUES
    ('Hello World', 'This is a post', 1, '2019-01-01', '2019-01-01'),
    ('Hello World 2', 'This is a post', 1, '2019-01-01', '2019-01-01'),
    ('Hello World 3', 'This is a post', 1, '2019-01-01', '2019-01-01'),
    ('Hello World 4', 'This is a post', 1, '2019-01-01', '2019-01-01'),
    ('Hello World 5', 'This is a post', 1, '2019-01-01', '2019-01-01'),
    ('Hello World 6', 'This is a post', 1, '2019-01-01', '2019-01-01'),
    ('Hello World 7', 'This is a post', 1, '2019-01-01', '2019-01-01'),
    ('Hello World 8', 'This is a post', 1, '2019-01-01', '2019-01-01'),
    ('Hello World 9', 'This is a post', 1, '2019-01-01', '2019-01-01'),
    ('Hello World 10', 'This is a post', 1, '2019-01-01', '2019-01-01');