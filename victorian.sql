USE srve222;
				
CREATE TABLE book (
	bid	BIGINT AUTO_INCREMENT PRIMARY KEY, 
	title	VARCHAR(100) NOT NULL,
	publish	VARCHAR(300), 
	setting	VARCHAR(200),
	plot	VARCHAR(1500) NOT NULL,
	oddity	VARCHAR(100),
	themes	VARCHAR(300),
	characters	VARCHAR(500),
	genre	VARCHAR(100), 
	author	VARCHAR(100) NOT NULL,
	url	VARCHAR(200) NOT NULL,
	UNIQUE KEY(title, author)
)		COMMENT= The book table stores all of the information about the book. On the website, when the user uses the search function, the databse will be accessed and it will search through this table as well as a certain column of the table.;	
						
CREATE TABLE comments (
	coid	BIGINT AUTO_INCREMENT PRIMARY KEY,
	bid	BIGINT NOT NULL,
	value	VARCHAR(1500) NOT NULL,
		FOREIGN KEY (bid) REFERENCES book(bid)
)		COMMENT= The comment table will hold the comments anyone has about the book. When looking at a books webpage, somebody can hit add comment and a new entry will be stored into this table.;	
