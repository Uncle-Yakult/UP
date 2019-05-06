--  创建一张 user 数据表
create table user(
    user_id smallint unsigned primary key auto_increment,
    user_name varchar(20),
    user_age tinyint unsigned,
    user_gender enum('0','1','2')comment "'0'是男'1'是女'2'是保密",
    user_hobby set('唱歌','跳舞','LOL','PHP','足球','魔兽'),
    user_pass char(32)
);

