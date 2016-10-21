

CREATE TABLE d3_qr (
	id		int(11) NOT NULL AUTO_INCREMENT,
	URL		VARCHAR(60) NOT NULL,

	PRIMARY KEY (id)
);

CREATE TABLE d3_scan (
	id		int(11) NOT NULL AUTO_INCREMENT;
	d3_user_id	int(11) NOT NULL,
	d3_qr_id	int(11) NOT NULL,
	date		DATE NOT NULL

	
	PRIMARY KEY (id);
	FOREIGN KEY (d3_user_id, d3_qr_id)
);
