
CREATE TABLE d3_search (
	id		int(11) NOT NULL AUTO_INCREMENT,
	d3_user_id	int(11) NOT NULL,
	text		VARCHAR(100) NOT NULL,
	date		DATE NOT NULL,

	PRIMARY KEY (id)
	FOREIGN KEY (d3_user_id)
);



ALTER TABLE D3_search ADD CONSTRAINT fk_D3_search_D3_user FOREIGN KEY (D3_user_id) REFERENCES user (D3_user_id);