--
-- ãƒ†ãƒ¼ãƒ–ãƒ«å®šç¾©
--

-- ä¼šå“¡
drop table if exists member cascade;

create table member (
  id BIGINT(20) AUTO_INCREMENT not null comment 'ID'
  , name VARCHAR(64) not null comment 'åå‰'
  , mail VARCHAR(256) not null comment 'ãƒ¡ãƒ¼ãƒ«ã‚¢ãƒ‰ãƒ¬ã‚¹'
  , created_at DATETIME not null comment 'ä½œæˆæ—¥æ™‚'
  , updated_at DATETIME not null comment 'æ›´æ–°æ—¥æ™‚'
  , constraint member_PKC primary key (id)
) comment 'ä¼šå“¡' ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ã‚³ãƒ³ãƒ†ãƒ³ãƒ„
drop table if exists content cascade;

create table content (
  id BIGINT(20) AUTO_INCREMENT not null comment 'ID'
  , code VARCHAR(128) not null comment 'ã‚³ãƒ¼ãƒ‰'
  , name VARCHAR(64) not null comment 'åå‰'
  , price SMALLINT not null comment 'ä¾¡æ ¼'
  , genre_id BIGINT(20) not null comment 'ã‚¸ãƒ£ãƒ³ãƒ«ID'
  , created_at DATETIME not null comment 'ä½œæˆæ—¥æ™‚'
  , updated_at DATETIME not null comment 'æ›´æ–°æ—¥æ™‚'
  , constraint content_PKC primary key (id)
) comment 'ã‚³ãƒ³ãƒ†ãƒ³ãƒ„' ENGINE=InnoDB DEFAULT CHARSET=utf8;

create unique index content_IX1
  on content(code);

create index content_IX2
  on content(genre_id);

-- ã‚¸ãƒ£ãƒ³ãƒ«
drop table if exists genre cascade;

create table genre (
  id BIGINT(20) AUTO_INCREMENT not null comment 'ID'
  , code VARCHAR(128) not null comment 'ã‚³ãƒ¼ãƒ‰'
  , name VARCHAR(64) not null comment 'åå‰'
  , created_at DATETIME not null comment 'ä½œæˆæ—¥æ™‚'
  , updated_at DATETIME not null comment 'æ›´æ–°æ—¥æ™‚'
  , constraint genre_PKC primary key (id)
) comment 'ã‚¸ãƒ£ãƒ³ãƒ«' ENGINE=InnoDB DEFAULT CHARSET=utf8;

create unique index genre_IX1
  on genre(code);

-- ã‚³ãƒ³ãƒ†ãƒ³ãƒ„è³¼å…¥
drop table if exists purchase_content cascade;

create table purchase_content (
  id BIGINT(20) AUTO_INCREMENT not null comment 'ID'
  , member_id BIGINT(20) not null comment 'ä¼šå“¡ID'
  , content_id BIGINT(20) not null comment 'ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ID'
  , price SMALLINT not null comment 'ä¾¡æ ¼'
  , created_at DATETIME not null comment 'ä½œæˆæ—¥æ™‚'
  , updated_at DATETIME not null comment 'æ›´æ–°æ—¥æ™‚'
  , constraint purchase_content_PKC primary key (id)
) comment 'ã‚¸ãƒ£ãƒ³ãƒ«' ENGINE=InnoDB DEFAULT CHARSET=utf8;

create index purchase_content_IX1
  on purchase_content(member_id);

create index purchase_content_IX2
  on purchase_content(content_id);





--
-- åˆæœŸãƒ‡ãƒ¼ã‚¿
--

-- ä¼šå“¡
TRUNCATE TABLE member;
INSERT INTO member (name, mail, created_at, updated_at) VALUES ('ä¼šå“¡ã®åå‰001', 'member001@sample.com', NOW(), NOW());
INSERT INTO member (name, mail, created_at, updated_at) VALUES ('ä¼šå“¡ã®åå‰002', 'member002@sample.com', NOW(), NOW());
INSERT INTO member (name, mail, created_at, updated_at) VALUES ('ä¼šå“¡ã®åå‰003', 'member003@sample.com', NOW(), NOW());
INSERT INTO member (name, mail, created_at, updated_at) VALUES ('ä¼šå“¡ã®åå‰004', 'member004@sample.com', NOW(), NOW());
INSERT INTO member (name, mail, created_at, updated_at) VALUES ('ä¼šå“¡ã®åå‰005', 'member005@sample.com', NOW(), NOW());

-- ã‚³ãƒ³ãƒ†ãƒ³ãƒ„
TRUNCATE TABLE content;
INSERT INTO content (code, name, price, genre_id, created_at, updated_at) VALUES ('cont-1', 'ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ã®åå‰001', 100, 1, NOW(), NOW());
INSERT INTO content (code, name, price, genre_id, created_at, updated_at) VALUES ('cont-2', 'ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ã®åå‰002', 200, 2, NOW(), NOW());
INSERT INTO content (code, name, price, genre_id, created_at, updated_at) VALUES ('cont-3', 'ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ã®åå‰003', 300, 3, NOW(), NOW());
INSERT INTO content (code, name, price, genre_id, created_at, updated_at) VALUES ('cont-4', 'ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ã®åå‰004', 400, 1, NOW(), NOW());
INSERT INTO content (code, name, price, genre_id, created_at, updated_at) VALUES ('cont-5', 'ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ã®åå‰005', 500, 2, NOW(), NOW());

-- ã‚¸ãƒ£ãƒ³ãƒ«
TRUNCATE TABLE genre;
INSERT INTO genre (code, name, created_at, updated_at) VALUES ('cinema', 'æ˜ ç”»',   NOW(), NOW());
INSERT INTO genre (code, name, created_at, updated_at) VALUES ('drama',  'ãƒ‰ãƒ©ãƒž', NOW(), NOW());
INSERT INTO genre (code, name, created_at, updated_at) VALUES ('anime',  'ã‚¢ãƒ‹ãƒ¡', NOW(), NOW());

-- ã‚³ãƒ³ãƒ†ãƒ³ãƒ„è³¼å…¥
TRUNCATE TABLE purchase_content;
INSERT INTO purchase_content (member_id, content_id, price, created_at, updated_at) VALUES (1, 1, 100, NOW(), NOW());
INSERT INTO purchase_content (member_id, content_id, price, created_at, updated_at) VALUES (1, 2, 200, NOW(), NOW());
INSERT INTO purchase_content (member_id, content_id, price, created_at, updated_at) VALUES (1, 3, 300, NOW(), NOW());
INSERT INTO purchase_content (member_id, content_id, price, created_at, updated_at) VALUES (2, 1, 100, NOW(), NOW());
INSERT INTO purchase_content (member_id, content_id, price, created_at, updated_at) VALUES (2, 2, 200, NOW(), NOW());
INSERT INTO purchase_content (member_id, content_id, price, created_at, updated_at) VALUES (3, 1, 100, NOW(), NOW());
