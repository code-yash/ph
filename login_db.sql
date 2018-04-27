create database login_db;
use login_db;

create table credentials(
						 email varchar(15) primary key,
                         pass varchar(10)
                        );
                        
insert into credentials values ('yash@xyz.com', 12345);