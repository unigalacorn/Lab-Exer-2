create database datasheet;
	use datasheet;
	
CREATE TABLE records(
	lastname	 	varchar(50) NOT NULL,
	extname			TEXT NOT NULL,
	firstname	 	TEXT NOT NULL,
	middlename 		TEXT NOT NULL,
	birthday 		varchar(50) NOT NULL,
	placebirth 		TEXT NOT NULL,
	sex				TEXT NOT NULL,
	civils			TEXT NOT NULL,
	height			decimal(6,2) NOT NULL,
	weight			int(3) NOT NULL,
	btype			TEXT NOT NULL,
	gsisno			int(9) NOT NULL,
	pagibigno		int(9) NOT NULL,
	philno			int(9) NOT NULL,
	sssno			int(9) NOT NULL,
	resadd			TEXT NOT NULL,
	reszipcode		TEXT NOT NULL,
	restelno		int(6) NOT NULL,
	citizen			TEXT NOT NULL,
	permadd			TEXT NOT NULL,
	permzipcode		TEXT NOT NULL,
	permtelno		int(6) NOT NULL,
	email			TEXT NOT NULL,
	celno			int(12) NOT NULL,
	agencyno		int(9) NOT NULL,
	tin				int(9) NOT NULL,
	entry			int (3) NOT NULL PRIMARY KEY
);