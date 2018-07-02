# MVote

DATABASE:

1) poll – Store the voting question

CREATE TABLE `poll` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

2) poll_options – Store the voting question options

CREATE TABLE `poll_options` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `pollid` int(11) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

3) poll_result – Store the user voting on a poll option

CREATE TABLE `poll_result` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `userid` id(11) NOT NULL,
  `pollid` id(11) NOT NULL,
  `poll_option_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
