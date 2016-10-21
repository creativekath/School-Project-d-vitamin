
CREATE TABLE d3_comment (
	id		int(11) NOT NULL AUTO_INCREMENT,
	d3_user_id	int(11) NOT NULL,
	d3_article_id	int(11) NOT NULL,
	name		VARCHAR(50) NOT NULL,
	date		DATE NOT NULL,
	comment		VARCHAR(200) NOT NULL,

	PRIMARY KEY (id)
	FOREIGN KEY (d3_user_id, d3_article_id)
);

CREATE TABLE d3_aprovel (
	d3_admin_id	int(11) NOT NULL,
	d3_comment_id	int(11) NOT NULL,
	aprovel		ENUM( 'y', 'n' ) NOT NULL,
	date		DATE NOT NULL,

	PRIMARY KEY (d3_admin_id, d3_comment_id)
	FOREIGN KEY (d3_admin_id, d3_comment_id)
);

ALTER TABLE D3_comment ADD CONSTRAINT fk_comment_D3_user FOREIGN KEY (D3_user_id) REFERENCES D3_user (D3_user_id);
ALTER TABLE D3_comment ADD CONSTRAINT fk_comment_D3_article FOREIGN KEY (D3_article_id) REFERENCES D3_article (D3_article_id);