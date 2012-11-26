CREATE TABLE `stories` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `description` text NOT NULL,
  `when1` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `stories` ('id', 'title', 'description', 'when1') VALUES
(1, 'First story', 'First story description here', '2010-06-01 00:00:00'),
(2, 'Second story', 'Second story description here', '2010-06-02 00:00:00'),
(3, 'Third story', 'Third story description here', '2010-06-03 00:00:00'),
(4, 'Fourth story', 'Fourth story description here', '2010-06-04 00:00:00'),
(5, 'Fifth story', 'Fifth story description here', '2010-06-05 00:00:00'),
(6, 'Sixth story', 'Sixth story description here', '2010-06-06 00:00:00'),
(7, 'Seventh story', 'Seventh story description here', '2010-06-07 00:00:00'),
(8, 'Eighth story', 'Eighth story description here', '2010-06-08 00:00:00'),
(9, 'Ninth story', 'Ninth story description here', '2010-06-09 00:00:00'),
(10, 'Tenth story', 'Tenth story description here', '2010-06-10 00:00:00');

(11, 'Eleventh story', 'Eleventh story description here', '2010-06-10 00:00:00');