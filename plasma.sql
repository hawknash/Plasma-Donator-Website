CREATE TABLE IF NOT EXISTS `bloodgroup` (
  `bg_id` int(100) NOT NULL AUTO_INCREMENT,
  `bg_name` varchar(100) NOT NULL,
  PRIMARY KEY (`bg_id`)
) DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;



INSERT INTO `bloodgroup` (`bg_id`, `bg_name`) VALUES
(13, 'o+'),
(14, 'o-'),
(15, 'AB+'),
(16, 'AB-'),
(17, 'A+'),
(18, 'A-'),
(19, 'B+'),
(20, 'B-');



CREATE TABLE IF NOT EXISTS `donarregistration` (
  `donar_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `b_id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` int(100) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  PRIMARY KEY (`donar_id`)
) DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `requests` (
  `req_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bgroup` int(100) NOT NULL,
  `reqdate` datetime NOT NULL,
  `detail` varchar(500) NOT NULL,
  `city` varchar(30) NOT NULL,

  PRIMARY KEY (`req_id`)
) DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

INSERT INTO `requests` (`req_id`, `name`, `gender`, `age`, `mobile`, `email`, `bgroup`, `reqdate`, `detail`,`city`) VALUES
(1, 'abhay', 'male', '22', '9999999999', 'abhay@gmail.com', 13, '2020-10-28 00:00:00', 'save life','kanpur'),
(2, 'john', 'male', '21', '9999999999', 'john@gmail.com', 14, '2020-10-28 00:00:00', 'save life','vellore'),
(3, 'joe', 'male', '21', '9999999999', 'joe@gmail.com', 15, '2020-10-28 00:00:00', 'save life','chennai'),
(4, 'santa', 'female', '23', '9999999999', 'santa@gmail.com', 16, '2020-10-28 00:00:00', 'save life','mumbai'),
(5, 'rahul', 'male', '20', '9999999999', 'rahul@gmail.com', 17, '2020-10-28 00:00:00', 'save life','delhi');


CREATE TABLE IF NOT EXISTS `contacts` (
  `row_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `subj` varchar(700) NOT NULL,
  PRIMARY KEY (`row_id`)
) DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `contacts` (`row_id`, `name`, `email`, `mobile`, `subj`) VALUES
(1, 'rahul', 'rahul@gmail.com', '9999999999', 'save life'),
(2, 'anyone', 'anyone@ymail.com', '9999999999', 'save life');

