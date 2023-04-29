create table messages(
    chat_id int primary key auto_increment,
    chat_from varchar(50),
    chat_to varchar(50),
    chat_msg varchar(200),
    received numeric(1) default 0
);