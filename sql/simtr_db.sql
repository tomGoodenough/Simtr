CREATE TABLE users (
    user_id int(16) not null auto_increment,
    username varchar(16) not null,
    password varchar(32) not null,
    email varchar(32) not null,
    joined datetime not null,
    primary key(user_id)
);

CREATE TABLE characters (
    character_id int(16) not null auto_increment,
    c_name varchar(16) not null default 'Unknown Man',
    spawn_place varchar(16) not null default 'Unknown Place',
    strenght int(1) not null,
    fatigue int(1) not null default 0,
    hunger int(1) not null default 0,
    thirst int(1) not null default 0,
    herder int(1) not null,
    builder int(1) not null,
    carpenter int(1) not null,
    forager int(1) not null,
    cook int(1) not null,
    miner int(1) not null,
    fisherman int(1) not null,
    forester int(1) not null,
    farmer int(1) not null,
    hunter int(1) not null,
    blacksmith int(1) not null,
    engineer int(1) not null,
    tailor int(1) not null,
    warrior int(1) not null,
    user_id int(16) not null,
    primary key(character_id)
);
