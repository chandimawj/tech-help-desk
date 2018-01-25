-- MySQL database specification for Tech HelpDesk

--
-- Database: `techhelpdesk_db`
--

CREATE SCHEMA IF NOT EXISTS `techhelpdesk_db`;

-- --------------------------------------------------------

--
-- Table structure for table `hire_info`
--

CREATE TABLE IF NOT EXISTS `hire_info` (
  `hire_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `user_id` int(4) unsigned zerofill NOT NULL,
  `tech_id` int(4) unsigned zerofill NOT NULL,
  PRIMARY KEY (`hire_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `hire_info`
--

INSERT INTO `hire_info` (`hire_id`, `user_id`, `tech_id`) VALUES
(0001, 0005, 0007),
(0002, 0005, 0007),
(0003, 0005, 0008),
(0004, 0005, 0008),
(0005, 0005, 0010);

-- --------------------------------------------------------

--
-- Table structure for table `tech_info`
--

CREATE TABLE IF NOT EXISTS `tech_info` (
  `tech_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `tech_name` varchar(45) NOT NULL,
  `tech_password` varchar(10) NOT NULL,
  `tech_email` varchar(45) NOT NULL,
  `tech_phone` int(20) NOT NULL,
  `tech_field` varchar(45) NOT NULL,
  PRIMARY KEY (`tech_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tech_info`
--

INSERT INTO `tech_info` (`tech_id`, `tech_name`, `tech_password`, `tech_email`, `tech_phone`, `tech_field`) VALUES
(0007, 'Sandun', '1234', 'san@abc.com', 2147483647, 'Computer'),
(0008, 'Wimal', '1234', 'wim@abc.com', 732981767, 'Electrical'),
(0009, 'Nipun', '1234', 'nip@abc.com', 789658432, 'Automobile'),
(0010, 'Gayan', '1234', 'ga@abc.com', 112938477, 'Electrical'),
(0011, 'Janith', '1234', 'jan@abc.com', 38456688, 'Computer');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_email` varchar(45) NOT NULL,
  `user_phone` int(20) NOT NULL,
  `user_address` varchar(250) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_name`, `user_password`, `user_email`, `user_phone`, `user_address`) VALUES
(0005, 'Samuditha', '1234', 'sam@abc.com', 712348576, '57,Colombo.'),
(0006, 'Nadun', '1234', 'nad@abc.com', 2147483647, '23,Gampaha.'),
(0007, 'Dimuth', '1234', 'dimu@abc.com', 2147483647, '41, Colombo.'),
(0009, 'Ajith', '1234', 'aji@abc.com', 712304957, '34, Kandana.'),
(0010, 'Sarath', '1234', 'sar@abc.com', 738276542, '11, Kaluthara.');

