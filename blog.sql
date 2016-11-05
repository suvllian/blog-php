create table books(
bId int auto_increment primary key,
bClass varchar(32) CHARACTER SET utf8,
bTime varchar(32),
bName varchar(32) CHARACTER SET utf8,
bTopic varchar(128) CHARACTER SET utf8,
bImage varchar(32),
bLink varchar(64)
);

CREATE TABLE pages(
pId int AUTO_INCREMENT PRIMARY KEY,
pTopic varchar(32) CHARACTER SET utf8 NOT NULL,
pTime varchar(32) NOT NULL,
pTitle varchar(128) CHARACTER SET utf8 NOT NULL,
pImage varchar(128) NOT NULL,
pShort	varchar(256) CHARACTER SET utf8 NOT NULL,
pContent text CHARACTER SET utf8 not null
);
