CREATE DATABASE TVS;
USE TVS;
CREATE TABLE `pages` (
  `id` int(10),
  `label` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `body` longtext COLLATE utf8mb4_general_ci,
  `slug` longtext COLLATE utf8mb4_general_ci,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL ,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `pages` (`id`, `label`, `title`, `body`, `slug`,`created`) VALUES
(1, 'Lithuania', 'Biggest baltic country - Lithuania!', 'Lithuania, (Lithuanian: Lietuva) , officially the Republic of Lithuania 
(Lithuanian: Lietuvos Respublika), is a country in the Baltic region of Europe. 
Lithuania is one of the Baltic states. Situated on the eastern shore of the Baltic Sea, to the southeast of Sweden and Denmark, Lithuania is bordered by Latvia to the north, 
Belarus to the east and south, Poland to the south, and Kaliningrad Oblast (a Russian exclave) to the southwest. 
Lithuania has an estimated population of 2.8 million people as of 2019.
 The capital and largest city is Vilnius and other major cities are Kaunas and Klaipėda. 
 Lithuanians are Balts. The official language, Lithuanian, is one of only two living languages in the Baltic branch of the Indo-European language family, the other being Latvian.', 'about-lithuania','2020-05-15 12:44:15');


ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
