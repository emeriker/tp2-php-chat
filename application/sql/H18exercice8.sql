CREATE SCHEMA IF NOT EXISTS `H18exercice8` ;
use `H18exercice8`;
#
# Tables de l'application
#

CREATE TABLE IF NOT EXISTS `H18exercice8`.news (
        id int(11) NOT NULL AUTO_INCREMENT,
        title varchar(128) NOT NULL,
        slug varchar(128) NOT NULL,
        text text NOT NULL,
        PRIMARY KEY (id),
        KEY slug (slug)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


