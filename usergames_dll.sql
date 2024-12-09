CREATE TABLE `usergames` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `create_time` datetime DEFAULT current_timestamp() COMMENT 'Create Time',
  `gameName` varchar(255) NOT NULL COMMENT 'Game Name',
  `price` decimal(10,2) NOT NULL COMMENT 'Price',
  `rate` float NOT NULL COMMENT 'Rate',
  `compatibility` varchar(255) NOT NULL COMMENT 'Compatibility',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci COMMENT='Table for storing game information'