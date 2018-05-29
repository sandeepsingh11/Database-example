CREATE TABLE users (
  id int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  fName varchar(20) NOT NULL,
  lName varchar(20) NOT NULL,
  element varchar(20) NOT NULL,
  level int(3) NOT NULL,
  zodiac varchar(15) NOT NULL
);

INSERT INTO users (fName, lName, element, level, zodiac)
  VALUES ('Sanshou', 'Sama', 'Fire', 100, 'Capricorn');

INSERT INTO users (fName, lName, element, level, zodiac)
  VALUES ('Snoop', 'Dawg', 'Shadow', 69, 'Scorpio');
