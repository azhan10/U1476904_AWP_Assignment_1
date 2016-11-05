-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2016 at 08:08 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dvdshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `description`, `updated_at`, `created_at`) VALUES
(5, 'd', 's', '2016-10-18 19:35:38', '2016-10-18 19:35:38'),
(14, 'ff', 'dd', '2016-10-18 21:15:02', '2016-10-18 21:15:02'),
(17, 'sad', 'sad', '2016-10-26 17:44:51', '2016-10-26 17:44:51');

-- --------------------------------------------------------

--
-- Table structure for table `customer_rents`
--

CREATE TABLE `customer_rents` (
  `id` int(11) NOT NULL,
  `filmtitle` text NOT NULL,
  `duration` text NOT NULL,
  `film_id` int(11) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_Address` text NOT NULL,
  `status` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_rents`
--

INSERT INTO `customer_rents` (`id`, `filmtitle`, `duration`, `film_id`, `customer_name`, `customer_Address`, `status`, `updated_at`, `created_at`) VALUES
(94, 'Bruce Almighty', '1 day', 1, 'Yahya Ali', 'Test road, Huddersfield', 'Rented Out', '2016-10-26 14:44:34', '2016-10-26 14:07:00'),
(96, 'Bruce Almighty', '1 day', 1, 'sdsa', 'asd', 'Rented Out', '2016-10-26 17:44:10', '2016-10-26 17:43:47'),
(97, 'Evan Almighty', '3 day', 2, 'sad', 'asd', 'Ordered', '2016-10-26 17:45:03', '2016-10-26 17:45:03'),
(98, 'Bruce Almighty', '1 day', 1, 'sad', 'asd', 'Ordered', '2016-10-26 18:01:34', '2016-10-26 18:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `filmreviews`
--

CREATE TABLE `filmreviews` (
  `id` int(11) NOT NULL,
  `filmtitle` text NOT NULL,
  `description` text NOT NULL,
  `review` text NOT NULL,
  `film_id` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filmreviews`
--

INSERT INTO `filmreviews` (`id`, `filmtitle`, `description`, `review`, `film_id`, `updated_at`, `created_at`) VALUES
(1, 'Bruce Almighty', 'Wonderful film to watch. Would recommend it...', '5 Stars', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Bruce Almighty', 'ss', '1 Stars', '1', '2016-10-18 17:09:40', '2016-10-18 17:09:40'),
(54, 'Bruce Almighty', 'Good film', '4 Stars', '1', '2016-10-18 17:27:09', '2016-10-18 17:27:09'),
(55, 'Evan Almighty', 'ss', '1 Stars', '2', '2016-10-18 17:27:32', '2016-10-18 17:27:32'),
(56, 'Bruce Almighty', 'd', '1 Stars', '1', '2016-10-18 21:51:49', '2016-10-18 21:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `frs_films`
--

CREATE TABLE `frs_films` (
  `id` int(11) NOT NULL,
  `filmtitle` varchar(50) DEFAULT NULL,
  `filmdescription` varchar(500) DEFAULT NULL,
  `filmdirector` varchar(20) DEFAULT NULL,
  `filmrating` text,
  `filmstarname` varchar(20) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frs_films`
--

INSERT INTO `frs_films` (`id`, `filmtitle`, `filmdescription`, `filmdirector`, `filmrating`, `filmstarname`, `updated_at`, `created_at`) VALUES
(1, 'Bruce Almighty', 'A guy who complains about God too often is given almighty powers to teach him how difficult it is to run the world', 'Tom Shadyac', 'PG', 'Jim Carrey', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Evan Almighty', 'God contacts Congressman Evan Baxter and tells him to build an ark in preparation for a great flood', 'Tom Shadyac', 'PG', 'Steve Carell', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Bedtime Stories', 'A hotel handyman''s life changes when the lavish bedtime stories he tells his niece and nephew start to magically come true', 'Adam Shankman', 'PG', 'Adam Sandler', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Inception', 'A thief uses dream-sharing technology to plant an idea into the mind of a CEO', 'Christopher Nolan', '12A', 'Leonardo DiCaprio', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Divergent', 'When Tris discovers a plot to destroy Divergents, she and the mysterious Four must find out what makes Divergents dangerous', 'Neil Burger', '12A', 'Shailene Woodley', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'The Descendants', 'A land baron tries to reconnect with his two daughters after his wife is seriously injured in a boating accident', 'Alexander Payne', '15', 'George Clooney', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Star Wars: Episode I - The Phantom Menace', 'Two Jedi Knights find a young boy who may bring balance to the Force, but the Sith resurface to reclaim their old glory', 'George Lucas', 'U', 'Liam Neeson', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Star Wars: Episode II - Attack of the Clones', 'Anakin Skywalker shares a forbidden romance with Padm?, while Obi-Wan discovers a secret clone army crafted for the Jedi', 'George Lucas', 'PG', 'Ewan McGregor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Star Wars: Episode III - Revenge of the Sith', 'The Sith Lord Darth Sidious steps out of the shadows. Anakin succumbs to his emotions, becoming Darth Vader', 'George Lucas', '12A', 'Hayden Christensen', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Star Wars: Episode IV - A New Hope', 'Luke Skywalker joins forces with a Jedi Knight, to save the universe from the Empire''s world-destroying battle-station', 'George Lucas', 'U', 'Mark Hamil', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Star Wars: Episode V - The Empire Strikes Back', 'Luke Skywalker takes advanced Jedi training with Master Yoda, while his friends are pursued by Darth Vader', 'Irvin Kershner', 'U', 'Harrison Ford', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Star Wars: Episode VI - Return of the Jedi', 'After rescuing Han Solo from the palace of Jabba the Hutt, the rebels attempt to destroy the second Death Star', 'Richard Marquand', 'U', 'Carrie Fisher', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Star Wars: Episode VII - The Force Awakens', 'A continuation of the saga created by George Lucas set thirty years after Star Wars: Episode VI - Return of the Jedi ', 'JJ Abrahams', '12A', 'Harrison Ford', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Star Trek: The Motion Picture', 'An alien spacecraft is spotted approaching Earth. Admiral Kirk resumes command of the Starship Enterprise in order to intercept the intruder', 'Robert Wise', 'U', 'William Shatner', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Star Trek II: The Wrath of Khan', 'Kirk must stop an old nemesis, Khan Noonien Singh, from using his son''s life-generating Genesis Device, as the ultimate weapon', 'Nicholas Meyer', '12', 'Leonard Nimoy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Star Trek III: The Search for Spock', 'Kirk and his bridge crew risk their careers stealing the Enterprise to return to the restricted Genesis planet to recover Spock''s body', 'Leonard Nimoy', 'PG', 'DeForest Kelley ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Star Trek IV: The Voyage Home', 'To save Earth from an alien probe, Kirk and his crew go back in time to retrieve the only beings who can communicate with it, humpback whales', 'Leonard Nimoy', 'PG', 'George Takei', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Star Trek V: The Final Frontier', 'Kirk and his crew must deal with Spock''s half-brother who hijacks the Enterprise to search for God at the center of the galaxy', 'William Shatner', 'PG', 'James Doohan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Star Trek VI: The Undiscovered Country ', 'Kirk and McCoy are charged with assassinating the Klingon High Chancellor and imprisoned', 'Chaim Reynolds', 'PG', 'Walter Koenig', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Star Trek: Generations', 'Picard, with the help of supposedly dead Captain Kirk, must stop a madman willing to murder on a planetary scale in order to enter an energy ribbon', 'David Carson', 'PG', 'Patrick Stewart', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Star Trek: First Contact', 'Captain Picard and his crew pursue the Borg back in time to stop them from preventing Earth''s first contact with an alien species.', 'Jonathan Frakes', '12', 'Brent Spiner', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Star Trek: Insurrection', 'When the crew of the Enterprise learn of a Federation conspiracy against the inhabitants of a unique planet, Picard begins an open rebellion', 'Jonathan Frakes', 'PG', 'Marina Sirtis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Star Trek: Nemesis', 'The Enterprise is diverted to the Romulan homeworld Romulus, supposedly because they want to negotiate a peace treaty', 'Stuart Baird', '12A', 'Gates McFadden', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Star Trek', 'Kirk tries to live up to his father''s legacy with Mr. Spock keeping him in check as a vengeful, time-traveling Romulan creates black holes to destroy the Federation one planet at a time', 'JJ Abrahams', 'PG', 'Chris Pine', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Star Trek: Into Darkness', 'After the crew of the Enterprise find an unstoppable force of terror from within their own organization, Captain Kirk leads a manhunt to a war-zone world to capture a one-man weapon of mass destruction', 'JJ Abrahams', 'PG', 'Zachary Quinto', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'The Hobbit: An Unexpected Journey', 'Bilbo Baggins, sets out to the Lonely Mountain with a spirited group of dwarves to reclaim their mountain home - and the gold within it - from the dragon Smaug', 'Peter Jackson', 'PG', 'Martin Freeman', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'The Lord of the Rings: The Fellowship of the Ring', 'A meek hobbit of the Shire and eight companions set out on a journey to Mount Doom to destroy the One Ring and the dark lord Sauron', 'Peter Jackson', 'PG', 'Elijah Wood', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'The Lord of the Rings: The Two Towers', 'Frodo and Sam edge closer to Mordor with the help of the shifty Gollum, the divided fellowship makes a stand against Sauron''s new ally, Saruman', 'Peter Jackson', 'PG', 'Ian McKellan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'The Lord of the Rings: The Return of the King', 'Gandalf and Aragorn lead the World of Men against Sauron''s army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring', 'Peter Jackson', 'PG', 'Viggo Mortensen', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Speed', 'A young police officer must prevent a bomb exploding aboard a city bus by keeping its speed above 50 mph', 'Jan de Bont', 'PG', 'Sandra Bullock', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'The Fast and the Furious', 'Los Angeles police officer Brian O''Connor must decide where his loyalties really lie when he becomes enamored with the street racing world he has been sent undercover to destroy', 'Rob Cohen', '15', 'Vin Diesel', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, '2 Fast 2 Furious', 'Brian O''Conner and childhood friend Roman Pearce are re-united by the FBI to bring down a Miami drug exporter in exchange for clear records', 'John Singleton', '15', 'Paul Walker', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Fast & Furious', 'Brian O''Conner, now working for the FBI in LA, teams up with Dominic Toretto to bring down a heroin importer by infiltrating his operation', 'Justin Lin', 'PG', 'Vin Diesel', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'The Fast and the Furious: Tokyo Drift', 'A teenager becomes a major competitor in the world of drift racing after moving in with his father in Tokyo to avoid a jail sentence in America', 'Justin Lin', '12A', 'Lucas Black', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Fast & Furious 5', 'Dominic Toretto and his crew of street racers plan a massive heist to buy their freedom while in the sights of a powerful Brazilian drug lord and a dangerous federal agent', 'Justin Lin', '12A', 'Dwayne Johnson', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Fast & Furious 6', 'Hobbs has Dominic and Brian reassemble their crew to take down a team of mercenaries: Dominic unexpectedly gets convoluted also facing his presumed deceased girlfriend, Letty', 'Justin Lin', '12A', 'Dwayne Johnson', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Fast & Furious 7', 'Deckard Shaw seeks revenge against Dominic Toretto and his family for his comatose brother', 'Justin Lin', '12A', 'Paul Waller', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Insurgent.', 'Beatrice Prior must confront her inner demons and continue her fight against a powerful alliance which threatens to tear her society apart with the help from others on her side', 'Robert Schwentke', '12A', 'Shailene Woodley', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Harry Potter and the Philosopher''s Stone', 'Rescued from the outrageous neglect of his aunt and uncle, a young boy with a great destiny proves his worth while attending Hogwarts School of Witchcraft and Wizardry', 'Chris Columbus', 'PG', 'Daniel Radcliffe', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Harry Potter and the Chamber of Secrets ', 'Harry ignores warnings not to return to Hogwarts, only to find the school plagued by a series of mysterious attacks and a strange voice haunting him', 'Chris Columbus', 'PG', 'Rupert Grint', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Harry Potter and the Prisoner of Azkaban', 'It''s Harry''s third year at Hogwarts and there is trouble brewing. Convicted murderer Sirius Black has escaped the Wizards'' Prison and is coming after Harry', 'Alfonso Cuar?n ', 'PG', 'Emma Watson', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Harry Potter and the Goblet of Fire', 'Harry finds himself mysteriously selected as an under-aged competitor in a dangerous tournament between three schools of magic', 'Mike Newell ', 'PG-13', 'Michael Gambon ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Harry Potter and the Order of the Phoenix', 'With their warning about Lord Voldemort''s return scoffed at, Harry and Dumbledore are targeted by the Wizard authorities as an authoritarian bureaucrat slowly seizes power at Hogwarts', 'David Yates', '12A', 'Ralph Fiennes', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Harry Potter and the Half-Blood Prince', 'As Harry Potter begins his sixth year at Hogwarts, he discovers an old book marked as the property of the Half-Blood Prince and begins to learn more about Lord Voldemort''s dark past', 'David Yates', '12A', 'Alan Rickman', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Harry Potter and the Deathly Hallows: Part 1', 'As Harry races against time and evil to destroy the Horcruxes, he uncovers the existence of three most powerful objects in the wizarding world: the Deathly Hallows', 'David Yates', '12A', 'Robbie Coltrane', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Harry Potter and the Deathly Hallows: Part 2', 'Harry, Ron and Hermione search for Voldemort''s remaining Horcruxes in their effort to destroy the Dark Lord as the final battle rages on at Hogwarts', 'David Yates', '12A', 'Maggie Smith ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Pirates of the Caribbean: The Curse of the Black P', 'Blacksmith Will Turner teams up with eccentric pirate Captain Jack Sparrow to save his love, the governor''s daughter, from Jack''s former pirate allies, who are now undead', 'Gore Verbinski', '12A', 'Johnny Depp', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Pirates of the Caribbean: Dead Man''s Chest', 'Jack Sparrow races to recover the heart of Davy Jones to avoid enslaving his soul to Jones'' service, as other friends and foes seek the heart for their own agenda as well', 'Gore Verbinski', '12A', 'Orlando Bloom', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Pirates of the Caribbean: At World''s End', 'Captain Barbossa, Will Turner and Elizabeth Swann must sail off the edge of the map, navigate treachery and betrayal, and make their final alliances for one last decisive battle', 'Gore Verbinski', '12A', 'Keira Knightley', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Pirates of the Caribbean: On Stranger Tides', 'Jack Sparrow and Barbossa embark on a quest to find the elusive fountain of youth, only to discover that Blackbeard and his daughter are after it too', 'Rob Marshall', '12A', 'Geoffrey Rush', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Les Mis?rables', 'Jean Valjean, who for decades has been hunted by the ruthless policeman Javert, agrees to care for a factory worker''s daughter. The decision changes their lives for ever', 'Tom Hooper', 'PG-13', 'Hugh Jackman', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Mamma Mia!', 'The story of a bride-to-be trying to find her real father told using hit songs by the popular ''70s group ABBA', 'Phyllida Lloyd', 'PG', 'Amanda Seyfried', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Hairspray', 'Pleasantly plump teenager Tracy Turnblad teaches 1962 Baltimore a thing or two about integration after landing a spot on a local TV dance show', 'Adam Shankman', '15', 'Nikki Blonsky', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Grease', 'Good girl Sandy and greaser Danny fell in love over the summer. But when they unexpectedly discover they''re now in the same high school, will they be able to rekindle their romance?', 'Randal Kleiser', 'PG', 'Olivia Newton-John', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Saturday Night Fever', 'A Brooklyn teenager feels his only chance to succeed is as the king of the disco floor. His carefree youth and weekend dancing help him to forget the reality of his bleak life', 'John Badham', 'R', 'John Travolta', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Pitch Perfect', 'Beca, a freshman at Barden University, is cajoled into joining The Bellas, her school''s all-girls singing group. Injecting some much needed energy into their repertoire', 'Jason Moore', 'PG', 'Anna Kendrick', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'The Hunger Games', 'Katniss Everdeen voluntarily takes her younger sister''s place in the Hunger Games, a televised fight to the death in which two teenagers from each of the twelve Districts of Panem are chosen at random to compete', 'Gary Ross', 'PG', 'Jennifer Lawrence', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'The Hunger Games: Catching Fire', 'Katniss Everdeen and Peeta Mellark become targets of the Capitol after their victory in the 74th Hunger Games sparks a rebellion in the Districts of Panem', 'Francis Lawrence', 'PG', 'Josh Hutcherson', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'The Hunger Games: Mockingjay - Part 1 ', 'Katniss Everdeen is in District 13. Under the leadership of President Coin and the advice of her trusted friends, Katniss spreads her wings as she fights to save Peeta and a nation moved by her courage', 'Francis Lawrence', 'PG', 'Donald Sutherland', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'The Dictator', 'The heroic story of a dictator who risks his life to ensure that democracy would never come to the country he so lovingly oppressed', 'Larry Charles', '15', 'Sacha Baron Cohen', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Borat', 'Kazakh TV talking head Borat is dispatched to the United States to report on the greatest country in the world. With a documentary crew in tow, Borat becomes more interested in locating and marrying Pamela Anderson', 'Larry charles', '15', 'Sacha Baron Cohen', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Bruno', 'Flamboyant Austrian fashionista Br?no takes his show to America', 'Larry Charles', '18', 'Sacha Baron Cohen', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'The Simpsons Movie', 'After Homer accidentally pollutes the town''s water supply, Springfield is encased in a gigantic dome by the EPA and the Simpson family are declared fugitives', 'David Silverman', 'PG', 'Dan Castellaneta', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Team America: World Police', 'Popular Broadway actor Gary Johnston is recruited by the elite counter-terrorism organization Team America. As the world begins to crumble around him, he must battle with terrorists, celebrities and falling in love', 'Trey Parker', '15', 'Matt Stone', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'After Earth', 'A crash landing leaves Kitai Raige and his father Cypher stranded on Earth, a millennium after events forced humanity''s escape. With Cypher injured, Kitai must embark on a perilous journey to signal for help', 'M. Night Shyamalan', '12A', 'Jaden Smith', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'The Pursuit of Happyness', 'A struggling salesman takes custody of his son as he''s poised to begin a life-changing professional endeavor', 'Gabriele Muccino ', '12A', 'Will Smith', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'Hitch', 'While helping his latest client woo the fine lady of his dreams, a professional date doctor finds that his game doesn''t quite work on the gossip columnist with whom he''s smitten', 'Andy Tennant ', '12A', 'Will Smith', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Hancock', 'Hancock is a superhero whose ill considered behavior regularly causes damage in the millions. He changes when one person he saves helps him improve his public image', 'Peter Berg', '12A', 'Will Smith', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'I, Robot', 'In 2035 a technophobic cop investigates a crime that may have been perpetrated by a robot, which leads to a larger threat to humanity', 'Alex Proyas ', '12A', 'Will Smith', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'I Am Legend', 'Years after a plague kills most of humanity and transforms the rest into monsters, the sole survivor in New York City struggles valiantly to find a cure', 'Francis Lawrence', '15', 'Will Smith', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Men in Black', 'A streetwise NYPD detective joins a secret organization that polices extraterrestrial affairs on Earth', 'Barry Sonnenfeld', 'PG-13', 'Tommy Lee Jones', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'Men in Black II.', 'Agent J needs help so he is sent to find Agent K and restore his memory', 'Barry Sonnenfeld', 'PG', 'Tommy Lee Jones', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Men in Black III', 'Agent J travels in time to M.I.B.''s early days in 1969 to stop an alien from assassinating his friend Agent K and changing history', 'Barry Sonnenfeld', 'PG', 'Tommy Lee Jones', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'Independence Day', 'The aliens are coming and their goal is to invade and destroy. Fighting superior technology, Man''s best weapon is the will to survive', 'Roland Emmerich', '12', 'Bill Pullman', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'The Day After Tomorrow', 'Jack Hall must make a daring trek across America to reach his son, trapped in a sudden international storm which plunges the planet into a new Ice Age', 'Roland Emmerich', '12A', 'Dennis Quaid', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'My Week with Marilyn', 'Colin Clark, an employee of Sir Laurence Olivier''s, documents the tense interaction between Olivier and Marilyn Monroe during the production of The Prince and the Showgirl (1957)', 'Simon Curtis', '15', 'Michelle Williams', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'The Imitation Game', 'During World War II, mathematician Alan Turing tries to crack the enigma code with help from fellow mathematicians', 'Morten Tyldum', '12A', 'Benedict Cumberbatch', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'The Theory of Everything', 'A look at the relationship between the famous physicist Stephen Hawking and his wife', 'James Marsh', '12', 'Eddie Redmayne', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'The Grand Budapest Hotel', 'The adventures of Gustave H, a legendary concierge at a famous hotel from the fictional Republic of Zubrowka between the first and second World Wars, and Zero Moustafa, the lobby boy who becomes his most trusted friend', 'Wes Anderson', '15', 'Ralph Fiennes', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Battleship', 'A fleet of ships is forced to do battle with an armada of unknown origins in order to discover and thwart their destructive goals', 'Peter Berg', 'PG-13', 'Alexander Skarsg?rd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Total Recall', 'A factory worker, Douglas Quaid, begins to suspect that he is a spy after visiting Rekall - a company that provides its clients with implanted fake memories of a life they would like to have led - goes wrong and he finds himself on the run', 'Len Wiseman', 'PG-13', 'Colin Farrell', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'John Carter', 'Transported to Barsoom, a Civil War vet discovers a barren planet seemingly inhabited by 12-foot tall barbarians. Finding himself prisoner of these creatures, he escapes, only to encounter Woola and a princess in desperate need of a savior', 'Andrew Stanton', 'PG-13', 'Taylor Kitsch', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Clash of the Titans', 'Perseus, mortal son of Zeus, battles the minions of the underworld to stop them from conquering heaven and earth', 'Louis Leterrier', 'PG-13', 'Sam Worthington', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Battle Los Angeles', 'A squadron of U.S. Marines becomes the last line of defense against a global invasion.', 'Jonathan Liebesman', 'PG-13', 'Aaron Eckhart', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Cowboys & Aliens', 'A spaceship arrives in Arizona, 1873, to take over the Earth, starting with the Wild West region. A posse of cowboys and natives are all that stand in their way', 'Jon Favreau', 'PG-13', 'Daniel Craig', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'Dr. No', '			A suave and skilled government agent named James Bond, looks for answers about a missing colleague and the disruption of the American space program', 'Terence Young', 'Appro', 'Sean Connery', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'From Russia with Love', 'James Bond willingly falls into an assassination ploy involving a naive Russian beauty in order to retrieve a Soviet encryption device that was stolen by SPECTRE', 'Terence Young', 'Appro', 'Sean Connery', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'Goldfinger', 'Investigating a gold magnate''s smuggling, James Bond uncovers a plot to contaminate the Fort Knox gold reserve', 'Guy Hamilton', 'Appro', 'Sean Connery', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'Thunderball', 'James Bond heads to The Bahamas to recover two nuclear warheads stolen by SPECTRE agent Emilio Largo in an international extortion scheme', 'Terence Young', 'Appro', 'Sean Connery', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'You Only Live Twice', 'Agent 007 and the Japanese secret service ninja force must find and stop the true culprit of a series of spacejackings before nuclear war is provoked', 'Lewis Gilbert', 'Appro', 'Sean Connery', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'On Her Majesty''s Secret Service', 'James Bond woos a mob boss''s daughter and goes undercover to uncover the true reason for Blofeld''s allergy research in the Swiss Alps that involves beautiful women from around the world', 'Peter R. Hunt', 'M', 'George Lazenby', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'Diamonds Are Forever', 'A diamond smuggling investigation leads James Bond to Las Vegas, where he uncovers an extortion plot headed by his nemesis, Ernst Stavro Blofeld', 'Guy Hamilton', 'GP', 'Sean Connery', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'Live and Let Die', '007 is sent to stop a diabolically brilliant heroin magnate armed with a complex organization and a reliable psychic tarot card reader', 'Guy Hamilton', 'PG', 'Roger Moore', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'The Man with the Golden Gun', 'Bond is led to believe that he is targeted by the world''s most expensive assassin and must hunt him down to stop him', 'Guy Hamilton', 'PG', 'Roger Moore', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'The Spy Who Loved Me', 'James Bond investigates the hijacking of British and Russian submarines carrying nuclear warheads with the help of a KGB agent whose lover he killed', 'Lewis Gilbert', 'PG', 'Roger Moore', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'Moonraker', '			James Bond investigates the mid-air theft of a space shuttle and discovers a plot to commit global genocide', 'Lewis Gilbert', 'PG', 'Roger Moore', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'For Your Eyes Only', 'Agent 007 is assigned to hunt for a lost British encryption device and prevent it from falling into enemy hands', 'John Glen', 'PG', 'Roger Moore', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'Octopussy', 'A fake Faberg? egg and a fellow agent''s death lead James Bond to uncover an international jewel-smuggling operation, headed by the mysterious Octopussy, being used to disguise a nuclear attack on N.A.T.O. forces', 'John Glen', 'PG', 'Roger Moore', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'Never Say Never Again', 'A SPECTRE agent has stolen two American nuclear warheads, and James Bond must find their targets before they are detonated', 'Irvin Kershner', 'PG', 'Sean Connery', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'A View to a Kill', 'An investigation of a horse-racing scam leads 007 to a mad industrialist who plans to create a worldwide microchip monopoly by destroying California''s Silicon Valley', 'John Glen', 'PG', 'Roger Moore', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'The Living Daylights', 'James Bond is living on the edge to stop an evil arms dealer from starting another world war. Bond crosses all seven continents in order to stop the evil Whitaker and General Koskov', 'John Glen', 'PG', 'Timothy Dalton', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'Licence to Kill', 'James Bond goes rogue and sets off to unleash vengeance on a drug lord who tortured his best friend, a C.I.A. agent, and left him for dead and murdered his bride after he helped capture him', 'John Glen', '15', 'Timothy Dalton', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'GoldenEye', 'James Bond teams up with the lone survivor of a destroyed Russian research center to stop the hijacking of a nuclear space weapon by a fellow agent believed to be dead', 'Martin Campbell ', 'PG-13', 'Pierce Brosnan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'Tomorrow Never Dies', 'James Bond heads to stop a media mogul''s plan to induce war between China and the UK in order to obtain exclusive global media coverage', 'Roger Spottiswoode', 'PG-13', 'Pierce Brosnan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'The World Is Not Enough', 'James Bond uncovers a nuclear plot when he protects an oil heiress from her former kidnapper, an international terrorist who can''t feel pain', 'Michael Apted', '12', 'Pierce Brosnan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'Die Another Day', 'James Bond is sent to investigate the connection between a North Korean terrorist and a diamond mogul who is funding the development of an international space weapon', 'Lee Tamahori', '12A', 'Pierce Brosnan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'Casino Royale', 'Armed with a licence to kill, Secret Agent James Bond sets out on his first mission as 007 and must defeat a weapons dealer in a high stakes game of poker at Casino Royale, but things are not what they seem', 'Martin Campbell', 'PG-13', 'Daniel Craig', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'Quantum of Solace', 'James Bond descends into mystery as he tries to stop a mysterious organization from eliminating a country''s most valuable resource. All the while, he still tries to seek revenge over the death of his love', 'Marc Forster', '12A', 'Daniel Craig', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'Skyfall', 'Bond''s loyalty to M is tested when her past comes back to haunt her. Whilst MI6 comes under attack, 007 must track down and destroy the threat, no matter how personal the cost', 'Sam Mendes', '12A', 'Daniel Craig', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'Twilight', 'A teenage girl risks everything when she falls in love with a vampire', 'Catherine Hardwicke ', '12A', 'Kristen Stewart', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'The Twilight Saga: New Moon', 'Edward leaves Bella after an attack that nearly claimed her life, and in her depression she falls into yet another paranormal relationship- this time with werewolf Jacob Black', 'Chris Weitz', '12A', 'Kristen Stewart', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'The Twilight Saga: Eclipse', 'As a string of mysterious killings grips Seattle, Bella, whose high school graduation is fast approaching, is forced to choose between her love for vampire Edward and her friendship with Jacob', 'David Slade', '12A', 'Kristen Stewart', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'The Twilight Saga: Breaking Dawn - Part 1', 'The Quileutes close in on expecting parents Edward and Bella, whose unborn child poses a threat to the Wolf Pack and the towns people of Forks', 'Bill Condon', '12A', 'Robert Pattinson', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'The Twilight Saga: Breaking Dawn - Part 2', 'After the birth of Renesmee, the Cullens gather other vampire clans in order to protect the child from a false allegation that puts the family in front of the Volturi', 'Bill Condon', '12A', 'Robert Pattinson', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'Snow White and the Huntsman', 'In a twist to the fairy tale, the Huntsman ordered to take Snow White into the woods to be killed winds up becoming her protector and mentor in a quest to vanquish the Evil Queen', 'Rupert Sanders', '12A', 'Kristen Stewart', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'The Notebook', 'A poor and passionate young man falls in love with a rich young woman and gives her a sense of freedom. They soon are separated by their social differences', 'Nick Cassavetes', '12A', 'Gena Rowlands', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'The Vow', 'A car accident puts Paige in a coma, and when she wakes up with severe memory loss, her husband Leo works to win her heart again', 'Michael Sucsy', '12', 'Rachel McAdams', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'Dear John', 'A romantic drama about a soldier who falls for a conservative college student while he''s home on leave', 'Lasse Hallstr?m', '12A', 'Channing Tatum', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'P.S. I Love You', 'A young widow discovers that her late husband has left her 10 messages intended to help ease her pain and start a new life', 'Richard LaGravenese', '12A', 'Hilary Swank', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'A Walk to Remember', 'The story of two North Carolina teens, Landon Carter and Jamie Sullivan, who are thrown together after Landon gets into trouble and is made to do community service', 'Adam Shankman', 'PG', 'Mandy Moore', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, '300', 'King Leonidas and a force of 300 men fight the Persians at Thermopylae in 480 B.C', 'Zack Snyder', '15', 'Gerard Butler', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'Troy', 'An adaptation of Homer''s great epic, the film follows the assault on Troy by the united Greek forces and chronicles the fates of the men involved', 'Wolfgang Petersen', '15', 'Brad Pitt', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 'Avatar', 'A Paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home', 'James Cameron', '12A', 'Sam Worthington', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 'Spiderman', 'When bitten by a genetically modified spider, a nerdy, shy, and awkward high school student gains spider-like abilities that he eventually must use to fight evil as a superhero after tragedy befalls his family', 'Sam Raimi', '12A', 'Tobey Maguire', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 'Spiderman 2', 'Peter Parker is beset with troubles in his failing personal life as he battles a brilliant scientist named Doctor Otto Octavius', 'Sam Raimi', '12A', 'Tobey Maguire', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 'Spiderman 3', 'A strange black entity from another world bonds with Peter Parker and causes inner turmoil as he contends with new villains, temptations, and revenge', 'Sam Raimi', '12A', 'Kirsten Dunst', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 'Transformers', 'An ancient struggle between two Cybertronian races, the heroic Autobots and the evil Decepticons, comes to Earth, with a clue to the ultimate power held by a teenager', 'Michael Bay', '12A', 'Shia LaBeouf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 'Transformers: Revenge of the Fallen', 'Sam Witwicky leaves the Autobots behind for a normal life. But when his mind is filled with cryptic symbols, the Decepticons target him and he is dragged back into the Transformers'' war', 'Michael Bay', '12A', 'Megan Fox', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 'Transformers: Dark of the Moon', 'The Autobots learn of a Cybertronian spacecraft hidden on the moon, and race against the Decepticons to reach it and to learn its secrets', 'Michael Bay', '12A', 'Rosie Huntington', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 'Transformers: Age of Extinction', 'Autobots must escape sight from a bounty hunter who has taken control of the human serendipity: Unexpectedly, Optimus Prime and his remaining gang turn to a mechanic and his daughter for help', 'Michael Bay', '12A', 'Nicola Peltz', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 'X-Men', 'Two mutants come to a private academy for their kind whose resident superhero team must oppose a terrorist organization with similar powers', 'Bryan Singer', '12A', 'Patrick Stewart', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 'X-Men 2', 'The X-Men band together to find a mutant assassin who has made an attempt on the President''s life, while the Mutant Academy is attacked by military forces', 'Bryan Singer', '12A', 'Hugh Jackman', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 'X-Men: The Last Stand', 'When a cure is found to treat mutations, lines are drawn amongst the X-Men, led by Professor Charles Xavier, and the Brotherhood, a band of powerful mutants organized under Xavier''s former ally, Magneto', 'Brett Ratner', '12A', 'Halle Berry', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 'X-Men Origins: Wolverine', 'A look at Wolverine''s early life, in particular his time with the government squad Team X and the impact it will have on his later years', 'Gavin Hood', '12A', 'Hugh Jackman', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 'X-Men: First Class', 'In 1962, the United States government enlists the help of Mutants with superhuman abilities to stop a malicious dictator who is determined to start World War III', 'Matthew Vaughn', '12A', 'James McAvoy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 'X-Men: Days of Future Past', 'The X-Men send Wolverine to the past in a desperate effort to change history and prevent an event that results in doom for both humans and mutants', 'Bryan Singer', '12A', 'Patrick Stewart', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 'Iron Man', 'After being held captive in an Afghan cave, an industrialist creates a unique weaponized suit of armor to fight evil', 'Jon Favreau', '12A', 'Robert Downey Jr', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 'Iron Man 2', 'With the world now aware of his identity as Iron Man, Tony Stark must contend with both his declining health and a vengeful mad man with ties to his father''s legacy', 'Jon Favreau', '12A', 'Robert Downey Jr', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 'Iron Man 3', 'When Tony Stark''s world is torn apart by a formidable terrorist called the Mandarin, he starts an odyssey of rebuilding and retribution', 'Shane Black', '12A', 'Robert Downey Jr', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 'Thor', 'The powerful but arrogant god Thor is cast out of Asgard to live amongst humans in Midgard (Earth), where he soon becomes one of their finest defenders', 'Kenneth Branagh', '12A', 'Chris Hemsworth', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 'Thor: The Dark World', 'When Dr Jane Foster gets cursed with a powerful object, Thor must protect it before an army and its ruthless leader try to get their hands on it to take over the remains of Earth', 'Alan Taylor', '12A', 'Chris Hemsworth', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 'The Incredible Hulk', 'Bruce Banner, a scientist on the run from the U.S. Government must find a cure for the monster he emerges whenever he loses his temper', 'Louis Leterrier', '12A', 'Edward Norton', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 'Captain America: The First Avenger', 'Steve Rogers transforms into Captain America after taking a dose of a "Super-Soldier serum". Captain America comes at a price as he attempts to take down a war monger and a terrorist organization', 'Joe Johnston', '12A', 'Chris Evans', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 'Captain America: The Winter Soldier', 'As Steve Rogers struggles to embrace his role in the modern world, he teams up with another super soldier, the black widow, to battle a new threat from old history: an assassin known as the Winter Soldier', 'Anthony Russo and Jo', '12A', 'Chris Evans', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 'Avengers Assemble', 'Earth''s mightiest heroes must come together and learn to fight as a team if they are to stop the mischievous Loki and his alien army from enslaving humanity', 'Joss Whedon', '12A', 'Robert Downey Jr', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 'Bambi', 'The story of a young deer growing up in the forest after his mother is shot by hunters', 'James Algar', 'U', 'Hardie Albright', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 'Dumbo', 'Ridiculed because of his enormous ears, a young circus elephant is assisted by a mouse to achieve his full potential', 'Samuel Armstrong', 'U', 'Sterling Holloway', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 'Pinocchio', 'A living puppet, with the help of a cricket as his conscience, must prove himself worthy to become a real boy', 'Norman Ferguson', 'U', 'Dickie Jones', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 'Lady and the Tramp ', 'The romantic tale of a sheltered uptown Cocker Spaniel dog and a streetwise downtown Mutt', 'Clyde Geronimi', 'U', 'Barbara Luddy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 'Peter Pan', 'Wendy and her brothers are whisked away to the magical world of Neverland with the hero of their stories, Peter Pan', 'Clyde Geronimi', 'U', 'Bobby Driscoll', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, '101 Dalmatians', 'When a litter of dalmatian puppies are abducted by the minions of Cruella De Vil, the parents must find them before she uses them for a diabolical fashion statement', 'Clyde Geronimi', 'U', 'Rod Taylor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 'Snow White and the Seven Dwarfs', 'Snow White, pursued by a jealous queen, hides with the Dwarfs; the queen feeds her a poison apple, but the handsome prince awakens her with a kiss', 'William Cottrell', 'U', 'Adriana Caselotti', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 'Sleeping Beauty', 'After being snubbed by the royal family, a malevolent fairy places a curse on a princess which only a prince can break, along with the help of three good fairies', 'Clyde Geronimi', 'U', 'Mary Costa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 'Alice in Wonderland', 'Alice stumbles into the world of Wonderland. Will she get home? Not if the Queen of Hearts has her way', 'Clyde Geronimi', 'U', 'Kathryn Beaumont', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 'The Jungle Book', 'Bagheera the Panther and Baloo the Bear have a difficult time trying to convince a boy to leave the jungle for human civilization', 'Wolfgang Reitherman', 'U', 'Phil Harris', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 'Cinderella', 'When Cinderella''s cruel stepmother prevents her from attending the Royal Ball, she gets some unexpected help from the lovable mice Gus and Jaq, and from her Fairy Godmother', 'Clyde Geronimi', 'U', 'Ilene Woods', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 'The AristoCats', 'With the help of a smooth talking tomcat, a family of Parisian felines set to inherit a fortune from their owner try to make it back home after a jealous butler kidnaps them and leaves them in the country', 'Wolfgang Reitherman', 'U', 'Phil Harris', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 'Robin Hood', 'The story of the legendary outlaw is portrayed with the characters as humanoid animals', 'Wolfgang Reitherman', 'U', 'Brian Bedford', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 'The Sword in the Stone', 'The wizard Merlin teaches a young boy who is destined to be King Arthur', 'Wolfgang Reitherman', 'U', 'Rickie Sorensen', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 'The Hunchback of Notre Dame', 'A deformed bell-ringer must assert his independence from a vicious government minister in order to help his friend, a gypsy dancer', 'Gary Trousdale', 'U', 'Demi Moore', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 'Kung Fu Panda', 'In the Valley of Peace, Po the Panda finds himself chosen as the Dragon Warrior despite the fact that he is obese and a complete novice at martial arts', 'Mark Osborne', 'PG', 'Jack Black', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 'Kung Fu Panda 2', 'Po and his friends fight to stop a peacock villain from conquering China with a deadly new weapon, but first the Dragon Warrior must come to terms with his past', 'Jennifer Yuh', 'PG', 'Angelina Jolie', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 'Shrek', 'After his swamp is filled with magical creatures, an ogre agrees to rescue a princess for a villainous lord in order to get his land back', 'Andrew Adamson', 'U', 'Mike Myers', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 'Shrek 2', 'Princess Fiona''s parents invite her and Shrek to dinner to celebrate her marriage. If only they knew the newlyweds were both ogres', 'Andrew Adamson', 'U', 'Eddie Murphy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, 'Shrek the Third', 'When his new father-in-law falls ill, Shrek is looked at as the heir to the land of Far, Far Away. Shrek recruits his friends Donkey and Puss in Boots to install the rebellious Artie as the new king.', 'Chris Miller', 'U', 'Cameron Diaz', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, 'Ice Age', 'Set during the Ice Age, a sabertooth tiger, a sloth, and a wooly mammoth find a lost human infant, and they try to return him to his tribe', 'Chris Wedge', 'U', 'Denis Leary', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 'Ice Age 2: The Metldown', 'Manny, Sid, and Diego discover that the Ice Age is coming to an end, and join everybody for a journey to higher ground. On the trip, they discover that Manny, in fact, is not the last of the wooly mammoths', 'Carlos Saldanha ', 'U', 'Ray Romano', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 'Ice Age 3: Dawn of the Dinosaurs ', 'When Sid''s attempt to adopt three dinosaur eggs gets him abducted by their real mother to an underground lost world, his friends attempt to rescue him', 'Carlos Saldanha', 'U', 'John Leguizamo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 'Ice Age 4: Continental Drift', 'Manny, Diego, and Sid embark upon another adventure after their continent is set adrift. Using an iceberg as a ship, they encounter sea creatures and battle pirates as they explore a new world', 'Steve Martino', 'U', 'Queen Latifah', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 'Ratatouille', 'A rat who can cook makes an unusual alliance with a young kitchen worker at a famous restaurant', 'Brad Birt', 'U', 'Brad Garrett', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, 'Rocky', 'Rocky Balboa, a small-time boxer gets a supremely rare chance to fight the heavy-weight champion, Apollo Creed, in a bout in which he strives to go the distance for his self-respect', 'John G. Avildsen', 'A', 'Sylvester Stallone', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, 'Rocky II', 'Rocky struggles in family life after his bout with Apollo Creed, while the embarrassed champ insistently goads him to accept a challenge for a rematch', 'Sylvester Stallone', 'PG', 'Sylvester Stallone', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, 'Rocky III', 'Rocky is defeated by a brutal challenger, and now must regain his fighting spirit through a big rematch, trained by an unlikely ally: his old nemesis Apollo Creed', 'Sylvester Stallone', 'PG', 'Sylvester Stallone', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, 'Rocky IV', 'After iron man Drago, a highly intimidating 6-foot-5, 261-pound Soviet athlete, kills Apollo Creed in an exhibition match, Rocky comes to the heart of Russia for 15 pile-driving boxing rounds of revenge', 'Sylvester Stallone', 'PG', 'Sylvester Stallone', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, 'Rocky V', 'Reluctantly retired from boxing and back from riches to rags, Rocky takes on a new protege who betrays him; As the champ''s son must adjust to his family''s new life after bankruptcy', 'John G. Avildsen', 'PG', 'Sylvester Stallone', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, 'Rocky Balboa', 'Thirty years after the ring of the first bell, Rocky Balboa comes out of retirement and dons his gloves for his final fight; against the reigning heavyweight champ Mason ''The Line'' Dixon', 'Sylvester Stallone', '12A', 'Sylvester Stallone', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, 'First Blood', 'A Vietnam Veteran uses his combat skills against the lawman of a small town when they arrest and abuse him', 'Ted Kotcheff', '12A', 'Sylvester Stallone', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, 'Rambo: First Blood Part II ', 'John Rambo is released from prison by the government for a top-secret covert mission to the last place on Earth he''d want to return - the jungles of Vietnam', 'George P. Cosmatos', '15', 'Sylvester Stallone', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, 'Rambo III', 'Rambo''s Vietnam commanding officer Colonel Trautman is held hostage in Afghanistan, and it''s up to Rambo to rescue him', 'Peter MacDonald', '15', 'Sylvester Stallone', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, 'Rambo', 'In Thailand, John Rambo joins a group of mercenaries to venture into war-torn Burma, and rescue a group of Christian aid workers who were kidnapped by the ruthless local infantry unit', 'Sylvester Stallone', '18', 'Sylvester Stallone', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, 'The Terminator', 'A human-looking cyborg is sent from 2029 to 1984 to assassinate a waitress, whose unborn son will lead humanity in a war against the machines, a soldier from that war is sent to protect her', 'James Cameron', '15', 'Arnold Schwarzenegge', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, 'Terminator 2: Judgment Day', 'A cyborg, identical to the one who failed to kill Sarah Connor, must now protect her young son, John Connor, from a more advanced cyborg, made out of liquid metal', 'James Cameron', '15', 'Arnold Schwarzenegge', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, 'Terminator 3: Rise of the Machines', 'A cybernetic warrior travels back in time to protect a 19-year old drifter and his future wife from a most advanced robotic assassin and to ensure they both survive a nuclear attack', 'Jonathan Mostow', '12A', 'Arnold Schwarzenegge', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, 'Terminator Salvation', 'A mysterious new weapon in the war against the machines, half-human and half-machine, comes to John Connor on the eve of a resistance attack on Skynet. But whose side is he on, and can he be trusted?', 'McG', '12A', 'Christian Bale', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, 'Raiders of the Lost Ark', 'Archaeologist and adventurer Indiana Jones is hired by the US government to find the Ark of the Covenant before the Nazis', 'Steven Spielberg', '12', 'Harrison Ford', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `frs_films` (`id`, `filmtitle`, `filmdescription`, `filmdirector`, `filmrating`, `filmstarname`, `updated_at`, `created_at`) VALUES
(186, 'Indiana Jones and the Temple of Doom', 'After arriving in India, Indiana Jones is asked by a desperate village to find a mystical stone. He agrees, and stumbles upon a secret cult plotting a terrible plan in the catacombs of an ancient palace', 'Steven Spielberg', '12', 'Harrison Ford', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, 'Indiana Jones and the Last Crusade', 'When Dr. Henry Jones Sr. suddenly goes missing while pursuing the Holy Grail, eminent archaeologist Indiana Jones must follow in his father''s footsteps and stop the Nazis', 'Steven Spielberg', 'PG', 'Harrison Ford', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, 'Indiana Jones and the Kingdom of the Crystal Skull', 'Dr. Henry "Indiana" Jones is called back into action when he becomes entangled in a Soviet plot to uncover the secret behind mysterious artifacts known as the Crystal Skulls', 'Steven Spielberg', '12A', 'Harrison Ford', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, 'Die Hard', 'John McClane, officer of the NYPD, tries to save wife Holly and several others, taken hostage by German terrorist Hans Gruber during a Christmas party at the Nakatomi Plaza in Los Angeles', 'John McTiernan', '15', 'Bruce Willis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, 'Die Hard 2', 'John McClane attempts to avert disaster as rogue military officials seize control of Dulles International Airport in Washington, D.C', 'Renny Harlin', '15', 'Bruce Willis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, 'Die Hard: With a Vengeance', 'John McClane and a Harlem store owner are targeted by German terrorist Simon Gruber in New York City, where he plans to rob the Federal Reserve Building', 'John McTiernan', '15', 'Bruce Willis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, 'Die Hard 4.0', 'John McClane and a young hacker join forces to take down master cyber-terrorist Thomas Gabriel in Washington D.C', 'Len Wiseman', '15', 'Bruce Willis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, 'A Good Day to Die Hard', 'John McClane travels to Russia to help out his wayward son, Jack, only to discover that Jack is a CIA operative working undercover, causing the father and son to team up against underworld forces', 'John Moore', '15', 'Bruce Willis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, 'Red', 'When his peaceful life is threatened by a high-tech assassin, former black-ops agent Frank Moses reassembles his old team in a last ditch effort to survive and uncover his assailants', 'Robert Schwentke', '12A', 'Bruce Willis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, 'Red 2', 'Retired C.I.A. agent Frank Moses reunites his unlikely team of elite operatives for a global quest to track down a missing portable nuclear device', 'John McTiernan', 'R', 'Bruce Willis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, 'The Queen', 'After the death of Princess Diana, HM Queen Elizabeth II struggles with her reaction to a sequence of events nobody could have predicted', 'Stephen Frears', '12A', 'Helen Miren', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, 'The Iron Lady', 'An elderly Margaret Thatcher talks to the imagined presence of her recently deceased husband as she struggles to come to terms with his death while scenes from her past life, intervene', 'Phyllida Lloyd', 'U', 'Meryl Streep', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, 'Jurassic World', 'After 10 years of operation and visitor rates declining, in order to fulfill a corporate mandate, a new attraction is created to re-spark visitors'' interest, which backfires horribly', 'Colin Trevorrow', '12A', ' Chris Pratt', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, 'San Andreas', 'In the aftermath of a massive earthquake in California, a rescue-chopper pilot makes a dangerous journey across the state in order to rescue his daughter', 'Brad Peyton', '12A', 'Dwayne Johnson', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, 'Mad Max: Fury Road', 'In a desert landscape where humanity is broken, two rebels might be able to restore order: Max, a man of action and Furiosa, a woman of action who is looking to make it back to her childhood homeland', 'George Miller', '15', 'Tom Hardy', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'azhan', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_rents`
--
ALTER TABLE `customer_rents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filmreviews`
--
ALTER TABLE `filmreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frs_films`
--
ALTER TABLE `frs_films`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `customer_rents`
--
ALTER TABLE `customer_rents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `filmreviews`
--
ALTER TABLE `filmreviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `frs_films`
--
ALTER TABLE `frs_films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
