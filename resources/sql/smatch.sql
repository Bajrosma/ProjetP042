CREATE TABLE t_user (
    useId INT PRIMARY KEY,
	useIsCoach BOOLEAN NOT NULL,
    useUsername VARCHAR(50) NOT NULL,
    usePassword VARCHAR(50) NOT NULL,
    useEmail VARCHAR(100) NOT NULL,
    useFirstName VARCHAR(50) NOT NULL,
    useLastName VARCHAR(50) NOT NULL,
    useGender CHAR(1),
    useDateOfBirth DATE,
    useCreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE t_place (
    plaId INT PRIMARY KEY,
    placName VARCHAR(50) NOT NULL,
    plaAddress VARCHAR(100) NOT NULL,
    plaCity VARCHAR(50) NOT NULL,
    plaState VARCHAR(50) NOT NULL,
    plaCountry VARCHAR(50) NOT NULL,
    plaCreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE t_sport(
	spoId INT PRIMARY KEY,
	spoName VARCHAR(50) NOT NULL
	);

CREATE TABLE  t_meeting(
	meeId PRIMARY KEY,
	meeDate VARCHAR(50),
	FOREIGN KEY (fkSport) REFERENCES t_sport(spoId),
	FOREIGN KEY (fkUser) REFERENCES t_user(useId),
	FOREIGN KEY (fkPlace) REFERENCES t_place(plaId)
	);