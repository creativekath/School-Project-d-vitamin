

CREATE TABLE d3_user (
	id		int(11) NOT NULL AUTO_INCREMENT,
	ip_number	VARCHAR(50) NOT NULL,	

	PRIMARY KEY (id)
);


CREATE TABLE d3_admin (
	id		int(11) NOT NULL AUTO_INCREMENT,
	name		CHARACTER(30) NOT NULL,
	password	VARCHAR(20) NOT NULL,
	date		TIMESTAMP NOT NULL,

	PRIMARY KEY (id)
);