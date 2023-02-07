DROP DATABASE IF EXISTS videotheque;
DROP USER IF EXISTS 'John'@'localhost';
FLUSH PRIVILEGES;
CREATE DATABASE videotheque CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
CREATE USER IF NOT EXISTS 'John'@'localhost' IDENTIFIED BY 'Doe';
GRANT ALL PRIVILEGES ON videotheque.* TO 'John'@'localhost';
USE videotheque;

CREATE TABLE Anime (
  id INT PRIMARY KEY AUTO_INCREMENT,
  rating DOUBLE(4,2) NOT NULL,
  name VARCHAR(150) NOT NULL,
  image VARCHAR(200) NOT NULL,
  synopsis VARCHAR(6000),
  type VARCHAR(10),
  releaseDate DATE
) engine = InnoDB;

CREATE TABLE Season (
  id INT PRIMARY KEY AUTO_INCREMENT,
  animeId INT NOT NULL,
  seasonNumber TINYINT NOT NULL,
  name VARCHAR(50),
  releaseSeason VARCHAR(10),
  FOREIGN KEY (animeId) REFERENCES Anime(id)
) engine = InnoDB;


CREATE TABLE Episode (
  id INT PRIMARY KEY AUTO_INCREMENT,
  seasonId INT NOT NULL,
  episodeNumber SMALLINT NOT NULL,
  name VARCHAR(100),
  synopsis VARCHAR(6000),
  FOREIGN KEY (seasonId) REFERENCES Season(id)
) engine = InnoDB;


CREATE TABLE Production (
    id INT PRIMARY KEY AUTO_INCREMENT,
    animeId INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    image VARCHAR(200),
    establishmentDate DATE NOT NULL,
    FOREIGN KEY (animeId) REFERENCES Anime(id)
) engine = InnoDB;


CREATE TABLE Genre (
    id INT PRIMARY KEY AUTO_INCREMENT,
    genre VARCHAR(20) NOT NULL
) engine = InnoDB;


CREATE TABLE AnimeCharacter (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(6000)
) engine = InnoDB;


CREATE TABLE VoiceActor (
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstName VARCHAR(50) NOT NULL,
    lastName VARCHAR(100) NOT NULL,
    language VARCHAR(20) NOT NULL,
    dateOfBirth DATE
) engine = InnoDB;


CREATE TABLE Anime_AnimeCharacter (
    animeId INT NOT NULL,
    animeCharacterId INT NOT NULL,
    PRIMARY KEY (animeId, animeCharacterId),
    FOREIGN KEY (animeId) REFERENCES Anime(id),
    FOREIGN KEY (animeCharacterId) REFERENCES AnimeCharacter(id)
) engine = InnoDB;


CREATE TABLE Anime_Genre (
    animeId INT NOT NULL,
    genreId INT NOT NULL,
    PRIMARY KEY (animeId, genreId),
    FOREIGN KEY (animeId) REFERENCES Anime(id),
    FOREIGN KEY (genreId) REFERENCES Genre(id)
) engine = InnoDB;

CREATE TABLE AnimeCharacter_VoiceActor (
    animeCharacterId INT NOT NULL,
    voiceActorId INT NOT NULL,
    PRIMARY KEY (animeCharacterId, voiceActorId),
    FOREIGN KEY (animeCharacterId) REFERENCES AnimeCharacter(id),
    FOREIGN KEY (voiceActorId) REFERENCES VoiceActor(id)
) engine = InnoDB;


/* Insert into Genre*/

INSERT INTO Genre (genre) VALUES 
('Action'),
('Thriller'),
('Adventure'),
('Sci-Fi'),
('Fantasy'),
('Romance'),
('Other');

/* Insert into Anime*/

INSERT INTO Anime (rating, name, image, synopsis, type, releaseDate) VALUES (8.5, 'One Punch Man','https://cdn.myanimelist.net/images/anime/7/72533l.jpg', 'Saitama is a superhero who can defeat any opponent with a single punch but seeks to find a worthy opponent after growing bored by a lack of challenge due to his overwhelming strength.', 'Series', NULL);
INSERT INTO Anime (rating, name, image, synopsis, type, releaseDate) VALUES (9.3, 'Death Note','https://cdn.myanimelist.net/images/anime/9/9453l.jpg', 'A high school student named Light Yagami discovers a supernatural notebook that allows him to kill anyone whose name he writes in it, leading him to become a god-like figure determined to reshape the world.', 'Series', NULL);
INSERT INTO Anime (rating, name, image, synopsis, type, releaseDate) VALUES (9.6, 'Fullmetal Alchemist: Brotherhood','https://cdn.myanimelist.net/images/anime/1208/94745l.jpg', 'Two brothers use alchemy in an attempt to bring their deceased mother back to life, but end up losing parts of their bodies. They embark on a journey to find the Philosopher''s Stone to restore what was lost.', 'Series', NULL);
INSERT INTO Anime (rating, name, image, synopsis, type, releaseDate) VALUES (9.5, 'Steins;Gate','https://cdn.myanimelist.net/images/anime/1167/96846l.jpg', 'Rintaro Okabe is a self-proclaimed "mad scientist" who runs the "Future Gadget Laboratory" in an apartment together with his friends. They stumble upon a device that can send emails to the past, which leads to Okabe and his friends getting caught up in a conspiracy surrounding SERN, the organization behind the Large Hadron Collider, and John Titor, who claims to be from a dystopian future.', 'Series', NULL);
INSERT INTO Anime (rating, name, image, synopsis, type, releaseDate) VALUES (8.2, 'Naruto','https://cdn.myanimelist.net/images/anime/13/17405l.jpg', 'Naruto Uzumaki, a hyperactive and knuckle-headed ninja, lives in Konohagakure, the Hidden Leaf village. Moments prior to his birth, a huge demon known as the Kyuubi, the Nine-tailed Fox, attacked Konohagakure and wreaked havoc. In order to put an end to the Kyuubi''s rampage, the leader of the village, the Fourth Hokage, sacrificed his life and sealed the monstrous beast inside the newborn Naruto.', 'Series', NULL);
INSERT INTO Anime (rating, name, image, synopsis, type, releaseDate) VALUES (8.85, 'Your Name','https://cdn.myanimelist.net/images/anime/1823/127994l.jpg', 'A high school boy in Hiroshima and a high school girl in Tokyo swap bodies and lives, while they try to find a way to switch back.', 'Movie', '2016-08-26');
INSERT INTO Anime (rating, name, image, synopsis, type, releaseDate) VALUES (8.16, 'Akira','https://cdn.myanimelist.net/images/anime/1941/111738l.jpg?_gl=1*pf2602*_ga*MTI4ODQ2OTA4OS4xNjc0NDA4NzYz*_ga_26FEP9527K*MTY3NTgwNDUyMS43LjEuMTY3NTgwNzM1MC41OS4wLjA.', 'A secret military project endangers Neo-Tokyo when it turns a biker gang member into a rampaging psychic psychopath.', 'Movie', '1988-07-16');
INSERT INTO Anime (rating, name, image, synopsis, type, releaseDate) VALUES (8.51, 'Grave of the Fireflies','https://cdn.myanimelist.net/images/anime/10/35821l.jpg?_gl=1*g3yvbf*_ga*MTI4ODQ2OTA4OS4xNjc0NDA4NzYz*_ga_26FEP9527K*MTY3NTgwNDUyMS43LjEuMTY3NTgwNzQ0OS40MS4wLjA.', 'A brother and sister struggle to survive in Japan during World War II.', 'Movie', '1988-04-16');
INSERT INTO Anime (rating, name, image, synopsis, type, releaseDate) VALUES (8.67, 'Princess Mononoke','https://cdn.myanimelist.net/images/anime/7/75919l.jpg?_gl=1*b5q4ke*_ga*MTI4ODQ2OTA4OS4xNjc0NDA4NzYz*_ga_26FEP9527K*MTY3NTgwNDUyMS43LjEuMTY3NTgwNzUyMC41MS4wLjA.', 'A young warrior sets out on a journey to find a cure for a curse that threatens his life and the life of his tribe.', 'Movie', '1997-07-12');
INSERT INTO Anime (rating, name, image, synopsis, type, releaseDate) VALUES (8.78, 'Spirited Away','https://cdn.myanimelist.net/images/anime/6/79597l.jpg?_gl=1*105gq7h*_ga*MTI4ODQ2OTA4OS4xNjc0NDA4NzYz*_ga_26FEP9527K*MTY3NTgwNDUyMS43LjEuMTY3NTgwNzU4NS41OC4wLjA.', 'A young girl, Chihiro, becomes trapped in a strange new world of spirits. When her parents undergo a mysterious transformation, she must call upon the courage she never knew she had to free herself and return her family to the outside world.', 'Movie', '2001-07-20');

/* Link the Anime Table to the Genre Table through an associative table.*/

INSERT INTO Anime_Genre (animeId, genreId) VALUES (1, 1),(2, 2),(3, 3),(4, 4),(5, 3),(6, 3),(7, 5),(8, 1),(9, 7),(10, 6);

/* Insert into Season*/

INSERT INTO Season (animeId, seasonNumber, name, releaseSeason) VALUES 
(1, 1, "Saitama vs. The Deep Sea King", "Summer"),
(1, 2, "Garou's introduction arc", "Fall"),
(2, 1, "The Kira Investigation", "Winter"),
(2, 2, 'Season 2', 'Summer'),
(3, 1, "The Philosopher's Stone", "Fall"),
(3, 2, "The Homunculi", "Winter"),
(3, 3, 'Season 3', 'Summer'),
(4, 1, "The Radio Wave of a Phenomenon", "Spring"),
(4, 2, "Season 2: The Time Traveler of a Beta Worldline", "2018-12-10"),
(5, 1, "The Land of Waves", "Summer"),
(5, 2, "The Chunin Exam", "Fall"),
(5, 3, "The Search for Tsunade", "Winter");

/* Insert into Episode*/

INSERT INTO Episode (seasonId, episodeNumber, name, synopsis) VALUES
(1, 1, "The Strongest Man", "The episode introduces Saitama, the main character, and his daily routine of being the strongest hero in the world."),
(1, 2, "The Lone Cyborg", "The episode introduces the cyborg Genos and his desire to become Saitama's apprentice."),
(3, 1, "Death Note", "The episode introduces Light Yagami, a high school student who discovers a supernatural notebook that grants him the power to kill anyone whose name he writes in it."),
(3, 2, "Confession", "The episode introduces L, a brilliant detective who is investigating the mysterious deaths caused by the Death Note."),
(5, 1, "Fullmetal Alchemist", "The episode introduces the main characters Edward and Alphonse Elric and their quest to find the Philosopher's Stone to restore their bodies."),
(5, 2, "Body of the Sanctioned", "The episode introduces the Homunculi and their connection to the Philosopher's Stone."),
(8, 2, "The First D-Mail", "The episode introduces the concept of D-Mail, a system that allows the characters to send messages to the past."),
(8, 1, "Prologue of the Beginning and the End", "The episode introduces Rintaro Okabe, a self-proclaimed mad scientist, and his friends Mayuri Shiina and Itaru Hashida."),
(10, 1, "Enter: Naruto Uzumaki!", "The episode introduces Naruto Uzumaki, a young ninja who seeks recognition from his peers and dreams of becoming the leader of his village."),
(10, 2, "My Name is Konohamaru!", "The episode introduces Konohamaru Sarutobi, a young ninja from Naruto's village who looks up to him.");
INSERT INTO Episode (seasonId, episodeNumber, name) VALUES 
(2, 1, "The Return of the Hero"),
(4, 1, "The World"),
(6, 1, "Fullmetal Alchemist"),
(7, 1, "The Dwarf in the Flask"),
(9, 1, "Open the Steins Gate"),
(11, 1, "Naruto Uzumaki!"),
(12, 1, "The Two of Them, Always");

/* Insert into Production*/

INSERT INTO Production (animeId, name, image, establishmentDate) VALUES
(1, "Madhouse", "https://cdn.myanimelist.net/images/company/11.png", "2006-01-01"),
(2, "Madhouse",NULL, "2006-01-01"),
(3, "Bones","https://cdn.myanimelist.net/images/company/4.png", "2009-04-05"),
(4, "White Fox","https://cdn.myanimelist.net/images/company/314.png", "2011-04-06"),
(5, "Studio Pierrot","https://cdn.myanimelist.net/images/company/1.png", "2002-10-03"),
(6, "CoMix Wave Films","https://cdn.myanimelist.net/images/company/291.png", "2016-08-26"),
(7, "Toho","https://cdn.myanimelist.net/images/company/245.png", "1988-07-16"),
(8, "Studio Ghibli","https://cdn.myanimelist.net/images/company/21.png", "1985-06-15"),
(9, "Studio Ghibli",NULL, "1985-06-15"),
(10, "Studio Ghibli",NULL, "1985-06-15");

/* Insert into AnimeCharacter*/

INSERT INTO AnimeCharacter (name, description) VALUES
("Saitama", "A bald, superhumanly powerful hero who can defeat any opponent with a single punch"),
("Genos", "Saitama's cyborg disciple who is determined to become stronger"),
("Light Yagami", "A brilliant high school student who discovers a supernatural notebook that allows him to kill anyone whose name he writes in it"),
("L", "A reclusive and eccentric detective who is investigating the mysterious deaths"),
("Edward Elric", "A young alchemist who, along with his brother Alphonse, is searching for the Philosopher's Stone to restore their bodies"),
("Roy Mustang", "A State Alchemist and officer in the Amestrian military who is hunting the Homunculi"),
("Okabe Rintarou", "A college student who discovers that he can send text messages to the past"),
("Kurisu Makise", "A brilliant young scientist who becomes involved in Okabe's time-travel experiments and helps him try to fix the timeline"),
("Naruto Uzumaki", "A young ninja who dreams of becoming the Hokage, the leader of his village"),
("Sasuke Uchiha", "A skilled ninja and member of the Uchiha clan who seeks to avenge his family"),
("Taki Tachibana", "A high school student who discovers that he can switch bodies with a girl from another town"),
("Mitsuha Miyamizu", "A high school girl who discovers that she can switch bodies with a boy from another town"),
("Kaneda", "A young biker who becomes embroiled in a government conspiracy involving psychic powers"),
("Tetsuo Shima", "Kaneda's friend who gains psychic powers and becomes increasingly unstable"),
("Seita", "A young boy who is trying to take care of his younger sister during the bombing of Hiroshima in World War II"),
("Setsuko", "Seita's younger sister"),
("Princess Mononoke", "A young woman raised by wolves who fights against the humans who are destroying the forest"),
("Ashitaka", "A young prince of the Emishi people who is cursed by a demon and sets out to find a cure"),
("No-Face", "A spirit of the forest who can grant wishes but will also consume those who anger him"),
("Chihiro Ogino", "A young girl who becomes trapped in the spirit world and must find a way to return to the human world"),
("Haku", "A young boy who is a spirit of the river and helps Chihiro navigate the spirit world");

INSERT INTO Anime_AnimeCharacter (animeId, animeCharacterId)
VALUES (1, 1),
(1, 2), 
(2, 3), 
(2, 4), 
(3, 5), 
(3, 6), 
(4, 7), 
(4, 8), 
(5, 9), 
(5, 10), 
(6, 11), 
(6, 12), 
(7, 13), 
(7, 14), 
(8, 15), 
(8, 16), 
(9, 17), 
(9, 18), 
(10, 19), 
(10, 20);

/* Insert into VoiceActor*/

INSERT INTO VoiceActor (firstName, lastName, language, dateOfBirth) VALUES
("Makoto", "Furukawa", "Japanese", "1987-07-28"),
("Kaito", "Ishikawa", "Japanese", "1986-11-13"),
("Daisuke", "Namikawa", "Japanese", "1976-04-02"),
("Aya", "Hirano", "Japanese", "1987-10-08"),
("Akira", "Ishida", "Japanese", "1967-11-02"),
("Shinichiro", "Miki", "Japanese", "1967-06-17"),
("Mamoru", "Miyano", "Japanese", "1983-06-08"),
("Asami", "Imai", "Japanese", "1985-03-18"),
("Junko", "Takeuchi", "Japanese", "1972-04-05"),
("Noriaki", "Sugiyama", "Japanese", "1976-03-09"),
("Ryunosuke", "Kamiki", "Japanese", "1993-05-09"),
("Mone", "Kamishiraishi", "Japanese", "1993-03-24"),
("Mitsuo", "Iwata", "Japanese", "1962-03-25"),
("Nozomu", "Sasaki", "Japanese", "1962-09-07"),
("Tsutomu", "Tatsumi", "Japanese", "1954-09-19"),
("Ayano", "Shiraishi", "Japanese", "1958-09-19"),
("Yōji", "Matsuda", "Japanese", "1959-08-19"),
("Yukiko", "Okamoto", "Japanese", "1956-02-02"),
("Miyu", "Irino", "Japanese", "1983-11-02"),
("Rumi", "Hiiragi", "Japanese", "1970-11-27"),
("Mari", "Natsuki", "Japanese", "1958-07-15");

/* Link the AnimeCharacter Table to the Voice Actor Table through an associative table. Not fully represented here due to the choice of anime, 
but a voice actor can voices multiple animeCharacters.*/
INSERT INTO AnimeCharacter_VoiceActor (animeCharacterId, voiceActorId) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20);