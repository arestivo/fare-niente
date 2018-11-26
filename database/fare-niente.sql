CREATE TABLE user (
  username VARCHAR PRIMARY KEY,
  password VARCHAR NOT NULL
);

CREATE TABLE list (
  list_id INTEGER PRIMARY KEY,
  list_name VARCHAR NOT NULL,
  username VARCHAR NOT NULL REFERENCES user
);

CREATE TABLE item (
  item_id INTEGER PRIMARY KEY,
  item_text VARCHAR NOT NULL,
  item_done INTEGER NOT NULL CHECK (item_done = 0 OR item_done = 1),
  list_id INTEGER NOT NULL REFERENCES list
);

INSERT INTO user VALUES ('john', '$2y$12$cH5Hmh/4JgKSEM4ZCih1jOOSItL2WW.XZruOxkG0udohjH5xMu6FG');

INSERT INTO list VALUES (NULL, 'Things to do', 'john');
INSERT INTO list VALUES (NULL, 'Things NOT to do', 'john');

INSERT INTO item VALUES (NULL, 'Buy milk', 0, 1);
INSERT INTO item VALUES (NULL, 'Walk the dog', 1, 1);

INSERT INTO item VALUES (NULL, 'Break a leg', 1, 2);
INSERT INTO item VALUES (NULL, 'Crash the car', 0, 2);
INSERT INTO item VALUES (NULL, 'Fail the exam', 1, 2);