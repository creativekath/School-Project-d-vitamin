

CREATE TABLE d3_article (
	id		int(11) NOT NULL AUTO_INCREMENT,
	author_name	VARCHAR(50) NOT NULL,
	title		VARCHAR(50) NOT NULL,
	text		LONGTEXT,
	source		VARCHAR(200) NOT NULL UNIQUE,
	date_of_publish	DATE NOT NULL,
	date_of_upload	DATE NOT NULL

	PRIMARY KEY (id)
);

CREATE TABLE d3_read (
	id		int(11) NOT NULL AUTO_INCREMENT,
	d3_user_id	int(11) NOT NULL,
	d3_article_id	int(11) NOT NULL,
	date		DATE NOT NULL,

	PRIMARY KEY (id)
	FOREIGN KEY (d3_user_id, d3_article_id)
);