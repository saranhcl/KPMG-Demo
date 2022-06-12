DROP DATABASE IF EXISTS myDB;
CREATE DATABASE IF NOT EXISTS  myDB ;

GRANT ALL PRIVILEGES ON *.* TO 'test'@'%';

--
-- Table structure for table `example_table`
--

DROP TABLE IF EXISTS `myDB.MyGuests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS myDB.MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
