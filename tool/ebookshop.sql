-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 10:42 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(200) NOT NULL,
  `publisher` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `book_image` varchar(200) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userId` int(11) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1 = published | 0 = unpublished'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--
/*UPDATE `books` SET `id` = '4' WHERE `books`.`id` = 18;
UPDATE `books` SET `id` = '5' WHERE `books`.`id` = 19;
UPDATE `books` SET `id` = '6' WHERE `books`.`id` = 20;
UPDATE `books` SET `id` = '7' WHERE `books`.`id` = 22;
UPDATE `books` SET `id` = '8' WHERE `books`.`id` = 25;
UPDATE `books` SET `id` = '9' WHERE `books`.`id` = 26;
UPDATE `books` SET `id` = '10' WHERE `books`.`id` = 27;
UPDATE `books` SET `id` = '11' WHERE `books`.`id` = 28;
UPDATE `books` SET `id` = '12' WHERE `books`.`id` = 29;
UPDATE `books` SET `id` = '13' WHERE `books`.`id` = 30;
UPDATE `books` SET `id` = '14' WHERE `books`.`id` = 31;
UPDATE `books` SET `id` = '15' WHERE `books`.`id` = 32;
UPDATE `books` SET `id` = '16' WHERE `books`.`id` = 33;
UPDATE `books` SET `id` = '17' WHERE `books`.`id` = 34;
UPDATE `books` SET `id` = '18' WHERE `books`.`id` = 39;
UPDATE `books` SET `id` = '19' WHERE `books`.`id` = 41;
UPDATE `books` SET `id` = '20' WHERE `books`.`id` = 42;
UPDATE `books` SET `id` = '21' WHERE `books`.`id` = 43;
UPDATE `books` SET `id` = '22' WHERE `books`.`id` = 45;
UPDATE `books` SET `id` = '23' WHERE `books`.`id` = 46;
UPDATE `books` SET `id` = '24' WHERE `books`.`id` = 47;
UPDATE `books` SET `id` = '25' WHERE `books`.`id` = 48;*/


INSERT INTO `books` (`id`, `book_name`, `description`, `author`, `publisher`, `price`, `quantity`, `categoryId`, `book_image`, `create_date`, `userId`, `status`) VALUES
(15, 'PHP and Mysql', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Joel Murach', 'SPD', '450', 6, 1, 'http://localhost/e-bookshop/uploads/image/book1.jpg', '2019-03-14 10:59:03', 7, '1'),
(16, 'Building Java Programs', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, repellendus, et Ipsum ut sequi modi quaerat repellat corporis dolore optio, labore eveniet, accusamus quidem quod possimus beatae voluptatibus sunt ; Recusandae', 'Stuart Reges', 'Marty Stepp', '300', 8, 1, 'http://localhost/e-bookshop/uploads/image/book2.jpg', '2019-03-14 11:05:57', 7, '1'),
(17, 'Operating System', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, repellendus, et Ipsum ut sequi modi quaerat repellat corporis dolore optio, labore eveniet, accusamus quidem quod possimus beatae voluptatibus sunt Recusandae.', 'R Sudha', 'AR publication', '185', 6, 1, 'http://localhost/e-bookshop/uploads/image/book3.jpg', '2019-03-14 11:09:10', 7, '1'),
(18, 'Cloud data management', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisnisi ut aliquip ex ea commodo consequat.', 'Liang Zhao', 'springer', '320', 10, 1, 'http://localhost/e-bookshop/uploads/image/book4.jpg', '2019-03-14 12:19:36', 7, '1'),
(19, 'Learn Python 3 The Hard Way', 'In Learn Python the Hard Way, Third Edition, you ll learn Python by working through 52 brilliantly crafted exercises. Read them. Type their code precisely.', 'Zed A Shaw', 'Unknown', '270', 2, 1, 'http://localhost/e-bookshop/uploads/image/Python.jpg', '2019-03-14 18:46:50', 7, '1'),
(20, 'Programming with codeigniter MVC', 'Bjarne Stroustrup, a Danish computer scientist, began his work on C++’s predecessor “C with Classes” in 1979.[6] The motivation for creating a new language originated from Stroustrup’s experience in programming for his Ph.D. thesis. Stroustrup found that Simula had features that were very helpful for large software development, but the language was too slow for practical use, while BCPL was fast but too low-level to be suitable for large software development. When Stroustrup started working in AT&T Bell Labs, he had the problem of analyzing the UNIX kernel with respect to distributed computing. Remembering his Ph.D. experience, Stroustrup set out to enhance the C language with Simula-like features. C was chosen because it was general-purpose, fast, portable and widely used. As well as C and Simula’s influences, other languages also influenced C++, including ALGOL 68, Ada, CLU and ML.', 'Eli orr', 'Packet', '222', 9, 1, 'http://localhost/e-bookshop/uploads/image/lrg.jpg', '2019-03-14 20:21:26', 7, '1'),
(22, 'PHP codeigniter for absoulate beginners', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Edounix', 'Packt', '198', 2, 1, 'http://localhost/e-bookshop/uploads/image/V10586_low.png', '2019-03-14 20:31:23', 7, '1'),
(25, 'A Curve in the Road', 'From USA Today bestselling author Julianne MacLean comes a suspenseful, emotionally charged novel that explores the secrets and hidden truths within a seemingly perfect marriage.\r\n\r\nAbbie MacIntyre is living the dream in the picturesque Nova Scotia town she calls home. She is a successful surgeon, is married to a handsome cardiologist, and has a model teenage son who is only months away from going off to college.\r\n\r\nBut then one fateful night, everything changes. When a drunk driver hits her car, Abbie is rushed to the hospital. She survives, but the accident forces unimaginable secrets out into the open and plagues Abbie with nightmares so vivid that she starts to question her grip on reality. Her perfect life begins to crack, and those cracks threaten to shatter her world completely.\r\n\r\nThe search for answers will test her strength in every way—as a wife, a career woman, and a mother—but it may also open the door for Abbie to move forward, beyond anger and heartbreak, to find out what she is truly made of. In learning to heal and trust again, she may just find new hope in the spaces left behind.\r\n\r\nBook club discussion questions are included in the book.', 'Julianne MacLean', 'Kindle', '422', 8, 6, 'http://localhost/e-bookshop/uploads/image/Screenshot_1131.jpg', '2019-03-16 05:34:55', 7, '1'),
(26, 'Confidential', 'From the bestselling author of Neighborly comes a twisty novel of psychological suspense about the lies three women tell to survive, and the ones they’d kill to keep hidden.\r\n\r\nEveryone loves therapist Michael Baylor. He’s handsome. He’s respected. And he’s provided a safe place for his female patients. Now he’s dead, and a detective is casting a tight net for the murderer—because the good doctor may have done some very bad things with the women who trusted him. That’s if their stories check out.\r\n\r\nThere’s Lucinda, who struggled to process her childhood trauma even as she was falling in love with Dr. Baylor. Greer, an accomplished career woman who was torn by her sudden desire to have children, so she went to Dr. Baylor for help but may have gotten more than she bargained for. And then there’s Flora, a beautiful former patient who’d been on intimate terms with the man she called Dr. Michael for two years. Some might even say she was obsessed with him.\r\n\r\nThree women caught in a tangled web of lies and secrets. And each with a motive for murder. With so much at stake, can any of them be trusted to tell the truth?', 'Ellie Monago', 'Kindle Edition', '320', 5, 6, 'http://localhost/e-bookshop/uploads/image/Screenshot_114.jpg', '2019-03-16 06:14:14', 7, '1'),
(27, 'Faking Forever', 'From New York Times bestselling author Catherine Bybee comes a new First Wives novel about wanting a family…and finding love.\r\n\r\nShannon Wentworth’s biological clock is ticking, and she isn’t going to let her single status keep her from having a baby. When her wedding-photography business takes her to Mexico, she has every intention of finding a willing baby daddy to help her out. Until the bride goes AWOL, leaving Shannon to coddle the arrogant fiancé who has accused her of sabotaging his wedding.\r\n\r\nVictor Brooks never could have imagined that he’d be on a honeymoon for one. Only here he is, taking a hard look at his life after the younger women he thought he loved walked out. The woman who volunteers to help him reflect is the last person he expects to be attracted to. Between the tequila, the sun, and one earth-shattering kiss, Victor finds Shannon a distraction too sexy to ignore.\r\n\r\nThey strike a deal: wait three months, cool off, and see if their tropical beach attraction is worth taking up when they go back home. Unfortunately, that’s just enough time for the past to come calling. All their best-laid plans are at risk. So is the last thing Shannon expected to matter the most: her heart.', 'Catherine Bybee', 'Kindle Edition', '398', 2, 6, 'http://localhost/e-bookshop/uploads/image/Screenshot_115.jpg', '2019-03-16 06:37:01', 7, '1'),
(28, 'The Orphan Sisters An utterly heartbreaking and gripping World War 2 historical novel', '‘I was gripped from the very first page… It was heartbreaking… I smiled through these happy times with them but also shed tears… I could not put it down… Will undoubtedly pull at your heart-strings. Just make sure you have a box of tissues ready!’ Stardust Book Reviews, 5 stars\r\n\r\nA heartbreaking, unputdownable and utterly unforgettable story of two young sisters cruelly abandoned by their mother at an orphanage. Fans of Wives of War, Lisa Wingate and Diney Costeloe will lose their hearts to this stunning World War Two novel. \r\n\r\n1929: Four-year-old Etty and eight-year-old Dorothy are abandoned at Blakely Hall orphanage by their mother, never to see her again. With no other family to speak of, the sisters worship their beloved mam – and they are confused and heartbroken to be deserted by her when they need her the most.\r\n\r\n1940: Etty and Dorothy are finally released from the confines of Blakely Hall – but their freedom comes when the country is in the grip of World War Two and its terrors. Amidst a devastating backdrop of screaming air-raid sirens and cold nights huddled in shelters, the sisters are desperate to put their broken childhoods behind them.\r\n\r\nBut trouble lies ahead. Dorothy must bid goodbye to her beloved husband when he’s sent to war and Etty must nurse a broken heart as she falls in love with the one man she can never be with.\r\n\r\nEtty and Dorothy survived the orphanage with the help of one another and neither sister can forget the awful betrayal of their mother, which has haunted them their whole lives. But when a shocking secret about their painful childhood comes to light, will the sisters ever be the same again?', 'Shirley Dickson', 'Kindle Edition', '200', 2, 6, 'http://localhost/e-bookshop/uploads/image/Screenshot_116.jpg', '2019-03-16 18:53:44', 7, '1'),
(29, 'Computer Science Distilled Learn the Art of Solving Computational Problems', 'A walkthrough of computer science concepts you must know. Designed for readers who don\'t care for academic formalities, it\'s a fast and easy computer science guide. It teaches the foundations you need to program computers effectively. After a simple introduction to discrete math, it presents common algorithms and data structures. It also outlines the principles that make computers and programming languages work.', 'Wladston Ferreira Filho', 'Raimondo Pictet', '260', 8, 1, 'http://localhost/e-bookshop/uploads/image/Screenshot_117.jpg', '2019-03-17 04:44:39', 7, '1'),
(30, 'The Self-Taught Programmer : The Definitive Guide to Programming Professionally', 'I am a self-taught programmer. After a year of self-study, I learned to program well enough to land a job as a software engineer II at eBay. Once I got there, I realized I was severely under-prepared. I was overwhelmed by the amount of things I needed to know but hadn learned yet. My journey learning to program, and my experience at my first job as a software engineer were the inspiration for this book. \r\n\r\nThis book is not just about learning to program; although you will learn to code. If you want to program professionally, it is not enough to learn to code; that is why, in addition to helping you learn to program, I also cover the rest of the things you need to know to program professionally that classes and books don\'t teach you.The Self-taught Programmer is a roadmap, a guide to take you from writing your first Python program, to passing your first technical interview. I divided the book into five sections: \r\n\r\n1. Learn to program in Python 3 and build your first program. \r\n2. Learn Object-oriented programming and create a powerful Python program to get you hooked. \r\n3. Learn to use tools like Git, Bash, regular expressions and databases. Then use your new coding skills to build a web scraper. \r\n4. Study Computer Science fundamentals like data structures and algorithms.\r\n5. Finish with tips for working with a team and landing a programming job. \r\n\r\nYou CAN learn to program professionally. The path is there. Will you take it?', 'Cory Althoff', 'Kindle Edition', '180', 12, 1, 'http://localhost/e-bookshop/uploads/image/Screenshot_118.jpg', '2019-03-17 05:01:18', 7, '1'),
(31, 'Data Structures and Algorithms Made Easy: Data Structures and Algorithmic Puzzles', '\"Data Structures And Algorithms Made Easy: Data Structures and Algorithmic Puzzles\" is a book that offers solutions to complex data structures and algorithms. There are multiple solutions for each problem and the book is coded in C/C++, it comes handy as an interview and exam guide for computer scientists.\r\n\r\nA handy guide of sorts for any computer science professional, Data Structures And Algorithms Made Easy: Data Structures and Algorithmic Puzzles is a solution bank for various complex problems related to data structures and algorithms. It can be used as a reference manual by those readers in the computer science industry. This book serves as guide to prepare for interviews, exams, and campus work. In short, this book offers solutions to various complex data structures and algorithmic problems', 'Narasimha Karumanchi', 'Kindle Edition', '200', 8, 1, 'http://localhost/e-bookshop/uploads/image/Screenshot_119.jpg', '2019-03-19 09:09:59', 7, '1'),
(32, 'The Power of Habit: Why We Do What We Do in Life and Business', 'In The Power of Habit, award-winning business reporter Charles Duhigg takes us to the thrilling edge of scientific discoveries that explain why habits exist and how they can be changed. Distilling vast amounts of information into engrossing narratives that take us from the boardrooms of Procter &amp;amp;amp;amp; Gamble to the sidelines of the NFL to the front lines of the civil rights movement, Duhigg presents a whole new understanding of human nature and its potential. At its core, The Power of Habit contains an exhilarating argument: The key to exercising regularly, losing weight, being more productive, and achieving success is understanding how habits work. As Duhigg shows, by harnessing this new science, we can transform our businesses, our communities, and our lives.', 'Charles Duhigg', 'Unknown', '349', 15, 5, 'http://localhost/e-bookshop/uploads/image/Screenshot_120.jpg', '2019-03-20 12:38:15', 7, '1'),
(33, 'Nai', 'I am a self-taught programmer. After a year of self-study, I learned to program well enough to land a job as a software engineer II at eBay. Once I got there, I realized I was severely under-prepared. I was overwhelmed by the amount of things I needed to know but hadn&#039;t learned yet. My journey learning to program, and my experience at my first job as a software engineer were the inspiration for this book. This book is not just about learning to program; although you will learn to code. If you want to program professionally, it is not enough to learn to code; that is why, in addition to helping you learn to program, I also cover the rest of the things you need to know to program professionally that classes and books don&#039;t teach you. &quot;The Self-taught Programmer&quot; is a roadmap, a guide to take you from writing your first Python program, to passing your first technical interview. I divided the book into five sections: 1. Learn to program in Python 3 and build your first program. 2. Learn Object-oriented programming and create a powerful Python program to get you hooked. 3. Learn to use tools like Git, Bash, regular expressions and databases. Then use your new coding skills to build a web scraper. 4. Study Computer Science fundamentals like data structures and algorithms. 5. Finish with tips for working with a team and landing a programming job. You CAN learn to program professionally. The path is there. Will you take it?', 'Tahmid Nishat', 'Kindle Edition', '222', 2, 3, 'http://localhost/e-bookshop/uploads/image/product06.jpg', '2019-03-27 04:16:51', 19, '0'),
(34, 'Unknown', 'I am a self-taught programmer. After a year of self-study, I learned to program well enough to land a job as a software engineer II at eBay. Once I got there, I realized I was severely under-prepared. I was overwhelmed by the amount of things I needed to know but hadn&#039;t learned yet. My journey learning to program, and my experience at my first job as a software engineer were the inspiration for this book. This book is not just about learning to program; although you will learn to code. If you want to program professionally, it is not enough to learn to code; that is why, in addition to helping you learn to program, I also cover the rest of the things you need to know to program professionally that classes and books don&#039;t teach you. &quot;The Self-taught Programmer&quot; is a roadmap, a guide to take you from writing your first Python program, to passing your first technical interview. I divided the book into five sections: 1. Learn to program in Python 3 and build your first program. 2. Learn Object-oriented programming and create a powerful Python program to get you hooked. 3. Learn to use tools like Git, Bash, regular expressions and databases. Then use your new coding skills to build a web scraper. 4. Study Computer Science fundamentals like data structures and algorithms. 5. Finish with tips for working with a team and landing a programming job. You CAN learn to program professionally. The path is there. Will you take it?', 'Tahmid Nishat', 'ddddddddd', '200', 2, 4, 'http://localhost/e-bookshop/uploads/image/product011.jpg', '2019-03-27 04:17:43', 19, '0'),
(39, 'The Wall: A Novel', 'Ravaged by the Change, an island nation in a time very like our own has built the Wall?an enormous concrete barrier around its entire coastline. Joseph Kavanagh, a new Defender, has one task: to protect his section of the Wall from the Others, the desperate souls who are trapped amid the rising seas outside and are a constant threat. Failure will result in death or a fate perhaps worse: being put to sea and made an Other himself. Beset by cold, loneliness, and fear, Kavanagh tries to fulfill his duties to his demanding Captain and Sergeant, even as he grows closer to his fellow Defenders. A dark part of him wonders whether it would be interesting if something did happen, if they came, if he had to fight for his life…\r\n\r\nJohn Lanchester?acclaimed as \"an elegant and wonderfully witty writer\" (New York Times) and \"a writer of rare intelligence\" (Los Angeles Times)?has written a taut, hypnotic novel of a broken world and what might be found when all is lost. The Wall blends the most compelling issues of our time?rising waters, rising fear, rising political division?into a suspenseful story of love, trust, and survival.', 'John Lanchester', 'Kindle Edition', '500', 10, 6, 'http://localhost/e-bookshop/uploads/image/Screenshot_124.png', '2019-03-29 11:17:45', 1, '1'),
(41, 'Mechanical Engineering Reference Manual for the PE Exam', 'Michael R. Lindeburg, PE’s Mechanical Engineering Reference Manual, 13th Edition (MERM13) is the definitive reference book for the PE Mechanical Exam. This comprehensive manual covers all three disciplines of the PE Mechanical Exam - HVAC and Refrigeration, Machine Design and Materials, and Thermal and Fluid Systems.\r\n\r\nThis must-have reference will fully prepare you for and aid you during the exam. Build exam confidence with a manual that follows NCEES exam specifications and addresses complex topics by parsing them into condensed, understandable, and readable sections. Over 375 example problems throughout the 76 chapters aid in your understanding of the exam topics. This manual includes over 120 appendices and a comprehensive index which includes thousands of equations, figures, and tables.', 'Michael R. Lindeburg PE', 'PPI, A Kaplan Company; Thirteenth edition', '200', 12, 3, 'http://localhost/e-bookshop/uploads/image/Screenshot_134.jpg', '2019-04-21 15:14:47', 7, '1'),
(42, 'Civil Engineering FE Exam Preparation Sample Questions and Solutions', 'The standard for Civil Engineering FE Review includes:\r\n\r\n110 practice problems, with full solutions\r\nSet up to provide in depth analysis of likely FE exam problems\r\nThis guide will get anyone ready for the Civil FE Exam\r\n\r\nTopics covered:\r\n\r\nStatics & Dynamics\r\nMechanics of Materials\r\nGeotechnical, Transportation & Environmental Engineering\r\nFluid Mechanics, Hydraulics & Hydrologic Systems\r\nStructural Analysis & Design', 'Anthem Publishing', 'CreateSpace Independent Publishing Platform', '230', 16, 2, 'http://localhost/e-bookshop/uploads/image/Screenshot_133.jpg', '2019-04-21 15:27:35', 7, '1'),
(43, 'Civil Engineering PE Practice Exams: 2 Full Breadth Exams', 'Two Full Breadth Practice Exams for the Civil Engineering PE Exam\r\nContains 80 problems that are representative of the actual Civil Engineering PE Exam. Each question has been designed in accordance with the latest NCEES specifications. These questions were created by real, practicing civil engineers that are familiar with the actual exam. Each question comes with a detailed solution to help you study efficiently and effectively.\r\n\r\nRegister your book at CivilPEPractice.com for additional practice questions!\r\nExam Topics Covered:\r\n\r\nProject Planning\r\n\r\nMeans and Methods\r\n\r\nSoil Mechanics\r\n\r\nStructural Mechanics\r\n\r\nHydraulics and Hydrology\r\n\r\nGeometrics\r\n\r\nMaterials\r\n\r\nSite Development', 'Civil PE Practice', 'Unknown', '120', 8, 2, 'http://localhost/e-bookshop/uploads/image/Screenshot_132.jpg', '2019-04-21 15:30:56', 7, '1'),
(45, 'Practical Electronics for Inventors', 'A Fully-Updated, No-Nonsense Guide to Electronics\r\n\r\nAdvance your electronics knowledge and gain the skills necessary to develop and construct your own functioning gadgets. Written by a pair of experienced engineers and dedicated hobbyists, Practical Electronics for Inventors, Fourth Edition, lays out the essentials and provides step-by-step instructions, schematics, and illustrations. Discover how to select the right components, design and build circuits, use microcontrollers and ICs, work with the latest software tools, and test and tweak your creations. This easy-to-follow book features new instruction on programmable logic, semiconductors, operational amplifiers, voltage regulators, power supplies, digital electronics, and more.\r\n \r\nPractical Electronics for Inventors, Fourth Edition, covers:\r\n\r\nResistors, capacitors, inductors, and transformers\r\nDiodes, transistors, and integrated circuits\r\nOptoelectronics, solar cells, and phototransistors\r\nSensors, GPS modules, and touch screens\r\nOp amps, regulators, and power supplies\r\nDigital electronics, LCD displays, and logic gates\r\nMicrocontrollers and prototyping platforms\r\nCombinational and sequential programmable logic\r\nDC motors, RC servos, and stepper motors\r\nMicrophones, audio amps, and speakers\r\nModular electronics and prototypes', 'Paul Scherz', 'McGraw-Hill Education', '300', 20, 4, 'http://localhost/e-bookshop/uploads/image/Screenshot_130.jpg', '2019-04-21 15:38:58', 1, '0'),
(46, 'Practical Electrical Wiring', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore sit dicta similique veniam dignissimos id deserunt vero, ad laudantium necessitatibus inventore cumque asperiores neque! Reprehenderit, facere praesentium, laborum ea voluptate ut deleniti odit quisquam ratione mollitia neque suscipit optio voluptatum quam delectus amet eos vel est autem distinctio quasi in hic similique. Consectetur, officiis, voluptatem explicabo sint at, quasi delectus sed sapiente neque eum nemo voluptatum tempora perspiciatis? A accusantium, similique rerum odit, officiis excepturi asperiores corrupti libero unde quae quas. \r\n\r\nVoluptatibus sit molestiae impedit soluta facilis consequatur, harum recusandae eos ipsam nemo? Qui officiis, enim ipsum saepe necessitatibus, cupiditate consequatur doloremque exercitationem possimus tenetur nesciunt quia odit temporibus in sint deleniti laudantium fuga minus placeat adipisci quae culpa quas porro! Esse, excepturi quia asperiores illo quae officia culpa ullam saepe. Recusandae, placeat sit dolorum. Suscipit placeat minus a dolorem id ipsa voluptate, veritatis quasi sunt quidem distinctio in, saepe possimus ad officia reprehenderit voluptates nihil expedita explicabo. Expedita tempore temporibus sapiente, quia ad quisquam minima totam. Minus nobis, amet neque similique dolorem, quos deserunt molestiae perferendis eius quibusdam expedita. Reiciendis voluptate minima culpa pariatur, quae accusamus modi natus temporibus cupiditate aliquid officiis at sit quo dolorum fuga libero alias.', 'Frederic P. Hartwell', 'Unknown', '200', 12, 4, 'http://localhost/e-bookshop/uploads/image/Screenshot_1311.jpg', '2019-04-21 16:01:29', 7, '1'),
(47, 'The Beginner\'s Guide to Engineering: Mechanical Engineering', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore sit dicta similique veniam dignissimos id deserunt vero, ad laudantium necessitatibus inventore cumque asperiores neque! Reprehenderit, facere praesentium, laborum ea voluptate ut deleniti odit quisquam ratione mollitia neque suscipit optio voluptatum quam delectus amet eos vel est autem distinctio quasi in hic similique. Consectetur, officiis, voluptatem explicabo sint at, quasi delectus sed sapiente neque eum nemo voluptatum tempora perspiciatis? A accusantium, similique rerum odit, officiis excepturi asperiores corrupti libero unde quae quas. \r\n\r\nVoluptatibus sit molestiae impedit soluta facilis consequatur, harum recusandae eos ipsam nemo? Qui officiis, enim ipsum saepe necessitatibus, cupiditate consequatur doloremque exercitationem possimus tenetur nesciunt quia odit temporibus in sint deleniti laudantium fuga minus placeat adipisci quae culpa quas porro! Esse, excepturi quia asperiores illo quae officia culpa ullam saepe. Recusandae, placeat sit dolorum. Suscipit placeat minus a dolorem id ipsa voluptate, veritatis quasi sunt quidem distinctio in, saepe possimus ad officia reprehenderit voluptates nihil expedita explicabo. \r\n\r\nExpedita tempore temporibus sapiente, quia ad quisquam minima totam. Minus nobis, amet neque similique dolorem, quos deserunt molestiae perferendis eius quibusdam expedita. Reiciendis voluptate minima culpa pariatur, quae accusamus modi natus temporibus cupiditate aliquid officiis at sit quo dolorum fuga libero alias.', 'Mark Huber', 'McGraw-Hill Education', '222', 10, 3, 'http://localhost/e-bookshop/uploads/image/Screenshot_135.jpg', '2019-04-21 16:09:18', 7, '1'),
(48, 'UnAuthored Letters: A gripping and inspiring psychological suspense novel', 'Dr. John Sanders has given Rebecca Brownell a new chance at life. After an isolated childhood, an abused adolescence, and an institutionalized existence, Rebecca is finally free to conquer her demons and build a promising life.\r\n\r\nHowever, just as it appears Rebecca has achieved her dreams, eerily personal letters begin arriving in the mail. Letters sent from an unidentified source who knows far more about her past than anyone should. Letters which question and threaten Rebecca\'s sanity.\r\n\r\nUnAuthored Letters is the inspiring tale of a woman’s troubled past, a man’s quest to protect her, and their fight against a mysterious foe. It’s a story of trust strained by illness, love tried by lies, and promises terrorized by illusive danger.', 'Tara C. Allred', 'Patella Publishing', '400', 2, 7, 'http://localhost/e-bookshop/uploads/image/Screenshot_136.jpg', '2019-04-21 18:57:09', 19, '1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `description`, `tag`) VALUES
(1, 'Computer Science and Engineering', 'All the books from computer science and software engineering, and programming related books.', 'CSE'),
(2, 'Civil Engineering', 'All the books from Civil Engineering and environmental science department', 'CE'),
(3, 'Machanical engineering', 'All the books from Machanical engineering.', 'ME'),
(4, 'EEE', 'All the books from Electrical and Electronics Engineering Department.', 'EEE'),
(5, 'BBA', 'All the books from business administration.', 'BBA'),
(6, 'Literature', 'All the novels, drama, poems, story books, and any other books of literature.', 'Literature'),
(7, 'Others', 'Other types of books, except these category.', 'others');

-- --------------------------------------------------------

--
-- Table structure for table `ebooks`
--

CREATE TABLE `ebooks` (
  `id` int(11) NOT NULL,
  `ebook_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(200) NOT NULL,
  `book_file` varchar(500) NOT NULL,
  `book_image` varchar(500) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ebooks`
--

INSERT INTO `ebooks` (`id`, `ebook_name`, `description`, `author`, `book_file`, `book_image`, `categoryId`, `dateTime`) VALUES
(1, 'Concept of programming languages', 'This book describes the fundamental concepts of programming languages by \r\ndiscussing the design issues of the various language constructs, examining the \r\ndesign choices for these constructs in some of the most common languages, \r\nand critically comparing design alternatives.\r\nAny serious study of programming languages requires an examination of \r\nsome related topics, among which are formal methods of describing the syntax \r\nand semantics of programming languages, which are covered in Chapter 3.\r\n\r\nAlso, implementation techniques for various language constructs must be considered: Lexical and syntax analysis are discussed in Chapter 4, and implementation of subprogram linkage is covered in Chapter 10. Implementation of \r\n\r\nsome other language constructs is discussed in various other parts of the book. The following paragraphs outline the contents of the tenth edition', 'Robart W Sebesta', 'http://localhost/e-bookshop/uploads/file/0152_T_Sebesta_programming.pdf', '', 1, '2019-04-12 14:18:58'),
(2, 'Angel vs virgins', 'When the tall, thin teenager arrived outside the club’s \r\nheadquarters, the queue was already a long one. From the Bishop’s \r\nOffices, it snaked along the lawn in front of the Anglo-Saxon castle \r\nthat stood next to the Offices, down to the river, and along its \r\nbanks to the High Street, from which the usual light traffic had \r\nbeen diverted. The pulsating mass of people gave the old town a \r\nhuman heartbeat.\r\nA group of Sikh football supporters wearing turbans added \r\nvariety to the Kentish scene, as did a few Raelists in the kind of \r\noutfit people back in the 20\r\nth\r\nCentury imagined people today \r\nwould be wearing, though they could not have foreseen how \r\nyoungsters would change the colours and patterns at will. Ahead \r\nof Lee, a woman sported a black burqa. Lee appreciated the way \r\nits soft fabric clung to her body, especially when the queue moved \r\nforward. Most folk, however, wore standard Christian garb, \r\nreflecting the identity of a club sponsored by the Church of \r\nEngland. They might have been modelling for a Grant Wood \r\npainting like American Gothic, which Lee’s class had studied. In the \r\nbest tradition of provincial British teenagers, Lee loved that retro \r\nAmerican look as much as fish and chips.', 'Bryan Murphy', 'http://localhost/e-bookshop/uploads/file/Angels-Against-Virgins.pdf', '', 6, '2019-04-12 14:23:14'),
(3, 'Murderd by suicide', 'This book is a work of fiction and any resemblance to persons, living or dead, places or events is \r\npurely coincidental. The characters are products of the author’s imagination.\r\nLicense Notes\r\nThank you for downloading this free e-book. You are welcome to share it with your friends. This \r\nbook may be reproduced, copied and distributed for non-commercial purposes, provided the book \r\nremains in its complete original form.  Thank you for your support.', 'Bryan Murphy', 'http://localhost/e-bookshop/uploads/file/Murder-By-Suicide_(1).pdf', '', 6, '2019-04-12 14:26:06'),
(4, 'Think Java: How to Think Like a Computer Scientist', 'This is the fifth edition of a book I started writing in 1999, when I was\r\nteaching at Colby College. I had taught an introductory computer science\r\nclass using the Java programming language, but I had not found a textbook\r\nI was happy with. For one thing, they were all too big! There was no way my\r\nstudents would read 800 pages of dense, technical material, even if I wanted\r\nthem to. And I didn’t want them to. Most of the material was too specific—\r\ndetails about Java and its libraries that would be obsolete by the end of the\r\nsemester, and that obscured the material I really wanted to get to.\r\nThe other problem I found was that the introduction to object oriented\r\nprogramming was too abrupt. Many students who were otherwise doing well\r\njust hit a wall when we got to objects, whether we did it at the beginning,\r\nmiddle or end.\r\nSo I started writing. I wrote a chapter a day for 13 days, and on the 14th\r\nday I edited. Then I sent it to be photocopied and bound. When I handed it\r\nout on the first day of class, I told the students that they would be expected\r\nto read one chapter a week. In other words, they would read it seven times\r\nslower than I wrote it.', 'Allen B Downey', 'http://localhost/e-bookshop/uploads/file/Think-Java-How-to-Think-Like-a-Computer-Scientist_(1).pdf', '', 1, '2019-04-12 14:27:22'),
(5, 'Management Concepts & Organisational Behaviour', 'Take a close look at the society around you. You would find \r\nthe existence of several organizations. To mention a few, the business \r\norganizations that produce goods or services, hospitals, religious and \r\nsocial institutions like charities, schools, colleges and universities. All these \r\norganizations exist to achieve pre-determined objectives. They affect our \r\nlives in many ways. Though there are vast differences in their functioning \r\nand approaches, they all strive to achieve certain objectives. It must also \r\nbe noted that organizations cannot achieve the objectives effortlessly. \r\nThey are achieved through systematic effort. Several activities have to be \r\nperformed in a cohesive way. In the absence of systematic and cohesive \r\nperformance of the activities to achieve the objectives, it is no wonder that \r\nthe resources of organizations would be underutilized. As such it is the \r\nfunction of the management to facilitate the performance of activities such \r\nthat the accomplishment of the objectives becomes possible.', 'Srinivas R Rao', 'http://localhost/e-bookshop/uploads/file/Management-and-Organization-Behavior.pdf', '', 5, '2019-04-12 14:29:18');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `ship_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `zipcode` varchar(200) NOT NULL,
  `total_price` varchar(200) NOT NULL,
  `paymentcheck` int(11) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bookId` text NOT NULL,
  `quantity` text NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1 = accept | 0 = pending',
  `del_status` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1 = Delivered | 0 = Not delivered'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `userId`, `ship_name`, `email`, `contact`, `address`, `city`, `zipcode`, `total_price`, `paymentcheck`, `dateTime`, `bookId`, `quantity`, `status`, `del_status`) VALUES
(1, 1, 'Tahmid Nishat', 'tahmid.ni7@gmail.com', '01822597379', 'Uttara, sector#10, Road #12', 'Dhaka', '1230', '787', 1, '2019-04-12 13:54:12', '32, 27', '1, 1', '1', ''),
(3, 1, 'Abid Mahmud Abrar', 'tahmid.ni7@gmail.com', '01683302276', 'Maheshkhali, Cox\'s Bazar', 'Cox\'s Bazar', '4710', '462', 1, '2019-04-12 13:56:22', '25', '1', '0', '0'),
(4, 1, 'Tahmid Nishat', 'tahmid.ni7@gmail.com', '01822597379', 'None', 'Dhaka', '222', '225', 1, '2019-04-12 13:59:07', '17', '1', '1', '1'),
(5, 19, 'MR User', 'user@system.com', '01822597379', 'Mirpur, Section #3, Road #15, Block #C, House-23', 'Dhaka', '1216', '240', 1, '2019-04-12 14:02:54', '31', '1', '1', '0'),
(6, 19, 'MR User', 'user@system.com', '01683302276', 'Mirpur, section #10,  Road #2, Block-D', 'Dhaka', '1200', '225', 1, '2019-04-12 14:04:30', '17', '1', '0', '0'),
(8, 19, 'Md User', 'user@system.com', '01822597379', 'Dhaka', 'Dhaka', '1230', '590', 1, '2019-04-21 15:46:10', '43, 42, 41', '1, 1, 1', '1', ''),
(10, 1, 'Tahmid Nishat', 'tahmid.ni7@gmail.com', '01683302276', 'Uttara, sector-10, Kamarpara', 'Dhaka', '1230', '262', 1, '2019-04-26 07:03:26', '47', '1', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `bookId` int(11) NOT NULL,
  `price` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `review` text NOT NULL,
  `bookId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review`, `bookId`, `userId`, `dateTime`) VALUES
(18, 'From New York Times bestselling author Catherine Bybee comes a new First Wives novel about wanting a family…and finding love. Shannon Wentworth’s biological clock is ticking, and she isn’t going to let her single status keep her from having a baby.', 27, 1, '2019-03-28 19:31:34'),
(19, 'This book serves as guide to prepare for interviews, exams, and campus work. In short, this book offers solutions to various complex data structures and algorithmic problems', 31, 1, '2019-03-28 19:32:06'),
(20, 'After a simple introduction to discrete math, it presents common algorithms and data structures. It also outlines the principles that make computers and programming languages work.', 29, 1, '2019-03-28 19:32:26'),
(21, 'The key to exercising regularly, losing weight, being more productive, and achieving success is understanding how habits work. As Duhigg shows, by harnessing this new science, we can transform our businesses, our communities, and our lives.', 32, 1, '2019-03-28 19:32:54'),
(22, 'In The Power of Habit, award-winning business reporter Charles Duhigg takes us to the thrilling edge of scientific discoveries that explain why habits exist and how they can be changed.', 32, 1, '2019-03-28 19:33:17'),
(23, 'Distilling vast amounts of information into engrossing narratives that take us from the boardrooms of Procter &amp;amp;amp; Gamble to the sidelines of the NFL to the front lines of the civil rights movement!', 32, 19, '2019-03-28 19:35:04'),
(24, 'They strike a deal: wait three months, cool off, and see if their tropical beach attraction is worth taking up when they go back home. Unfortunately, that’s just enough time for the past to come calling. All their best-laid plans are at risk. So is the last thing Shannon expected to matter the most: her heart.', 27, 19, '2019-03-28 19:35:34'),
(25, 'Data Structures and Algorithmic Puzzles is a solution bank for various complex problems related to data structures and algorithms.', 31, 19, '2019-03-28 19:36:14'),
(26, 'The key to exercising regularly, losing weight, being more productive, and achieving success is understanding how habits work. As Duhigg shows, by harnessing this new science, we can transform our businesses, our communities, and our lives.', 32, 7, '2019-03-28 19:37:33'),
(28, 'The key to exercising regularly, losing weight, being more productive, and achieving success is understanding how habits work. As Duhigg shows, by harnessing this new science, we can transform our businesses, our communities, and our lives.', 29, 7, '2019-03-28 19:38:11'),
(29, 'A data structure is a specialized format for organizing and storing data. General data structure types include the array, the file, the record, the table, the tree, and so on. Any data structure is designed to organize data to suit a specific purpose so that it can be accessed and worked with in appropriate ways.', 31, 7, '2019-03-28 19:39:41'),
(30, 'Etty and Dorothy survived the orphanage with the help of one another and neither sister can forget the awful betrayal of their mother, which has haunted them their whole lives. But when a shocking secret about their painful childhood comes to light, will the sisters ever be the same again?', 28, 7, '2019-03-28 19:40:49'),
(31, 'The Wall blends the most compelling issues of our time?rising waters, rising fear, rising political division?into a suspenseful story of love, trust, and survival.', 38, 7, '2019-03-29 06:18:24'),
(40, ' The Wall blends the most compelling issues of our time?rising waters, rising fear, rising political division?into a suspenseful story of love, trust, and survival.\r\n', 39, 7, '2019-03-29 11:19:18'),
(41, ' A dark part of him wonders whether it would be interesting if something did happen, if they came, if he had to fight for his life…', 39, 1, '2019-03-29 11:20:06'),
(42, 'This book is very useful for beginners, who want to be a successful programmer.', 30, 1, '2019-03-29 17:03:53'),
(43, 'You CAN learn to program professionally. The path is there. Will you take it?', 30, 21, '2019-03-30 18:23:19'),
(44, 'This book is awesome.', 39, 1, '2019-04-11 04:33:21'),
(45, 'A dark part of him wonders whether it would be interesting if something did happen, if they came, if he had to fight for his life…', 39, 1, '2019-04-15 04:44:11'),
(46, 'Victor Brooks never could have imagined that he’d be on a honeymoon for one. Only here he is, taking a hard look at his life after the younger women he thought he loved walked out. The woman who volunteers to help him reflect is the last person he expects to be attracted to.!', 27, 1, '2019-04-15 05:05:12'),
(47, 'In The Power of Habit, award-winning business reporter Charles Duhigg takes us to the thrilling edge of scientific discoveries that explain why habits exist and how they can be changed. Distilling vast amounts of information into engrossing narratives that take us from the boardrooms of Procter &amp;amp;amp;amp; Gamble to the sidelines of the NFL to the front lines of the civil rights movement, Duhigg presents a whole new understanding of human nature and its potential. At its core, The Power of Habit contains an exhilarating argument: The key to exercising regularly, losing weight, being more productive, and achieving success is understanding how habits work. As Duhigg shows, by harnessing this new science, we can transform our businesses, our communities, and our lives.', 32, 1, '2019-04-16 07:47:33'),
(48, 'PHP stands for Hypertext Preprocessor (no, the acronym doesn\'t follow the name). It\'s an open source, server-side, scripting language used for the development of web applications. By scripting language, we mean a program that is script-based (lines of code) written for the automation of tasks', 15, 1, '2019-04-21 07:05:41'),
(49, ' Reiciendis voluptate minima culpa pariatur, quae accusamus modi natus temporibus cupiditate aliquid officiis at sit quo dolorum fuga libero alias.', 47, 7, '2019-04-21 17:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'U',
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact`, `email`, `password`, `address`, `city`, `type`, `createdate`) VALUES
(1, 'Tahmid Nishat', '01822597379', 'tahmid.ni7@gmail.com', '$2y$12$BlQKV1nWpTE6U3kuKf7Zve/kEKuRuey6iFliZ61xbeLdVRzmmnEOm', 'Kamarpara, Turag, Thana Road', 'Dhaka', 'U', '2019-02-28 13:51:33'),
(7, 'MR. Admin Bhai', '01683302276', 'admin@gmail.com', '$2y$12$zmX.SQijiuC1oZUCF3ekleOlWnZlFFjfaj6d2XYleydtEbbF8yjPO', 'Maheshkhali', 'Coxs Bazar', 'A', '2019-04-21 10:54:26'),
(9, 'Mr Admin', '01822597379', 'admin@system.com', '$2y$12$ib8I47YZPQwapuxUwUZ3turJjKEx0OxmE9FZ7SWSIKLd3vVrUMNsO', 'Uttara', 'Dhaka', 'A', '2019-03-09 18:22:46'),
(17, 'Tahmid Nishat', '01822597379', 'tahmid@gmail.com', '$2y$12$JappExwfHgkgCjUpMFSV/eUEmxYzA0mW6A6GT4Uz3EElkdZATdNKC', 'Uttara Sector 10 Road 12', 'Dhaka', 'A', '2019-03-12 14:53:55'),
(19, 'Mr. User', '01683302276', 'user@system.com', '$2y$12$1kgdGbPXiGux3xO763h5aeYlMpDH1NxAWH.3VZFfGm7TqwIiOZ62S', 'Uttara, Sector#10, Road#12', 'Dhaka', 'U', '2019-03-24 13:49:09'),
(20, 'Nishat', '01683302276', 'nishat@gmail.com', '$2y$12$5sTv5IJMiabIrgfxGtHgDu0HPSPS/WBSC/Hq4kdzqGtPortbnG8K6', 'Uttara', 'Dhaka', 'U', '2019-03-12 17:07:17'),
(21, 'Abid Mahmud Abrar', '01683302276', 'abid@gmail.com', '$2y$12$opQYQXnoF2iQ3ZZqI8MuUeRRsKsXp691ICM4kyMm0UZE0g7EJe6ia', 'Bara Maheshkhali', 'Coxs Bazar', 'U', '2019-03-14 04:35:02'),
(22, 'Tahmid Nishat', '01822597379', 'mssuser@gmail.com', '$2y$12$F.vH052AXHQTcDDGQOiOue1t.jiTaV0ceMZXjHEreXv5HWrUQZSkm', 'Road no 12, Block-C, Section -11.5, Mirpur', 'Dhaka.', 'U', '2019-03-27 15:31:34'),
(23, 'Md Samiul Islam', '01781501769', 'mdsami9898@gmail.com', '$2y$12$DNxmJR1xJEwjWiqq7kN.BOMYBssyT1B5HtoUcTpTX8yiBqWFpqQu6', 'Tongi', 'dhaka', 'U', '2019-04-11 10:20:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebooks`
--
ALTER TABLE `ebooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ebooks`
--
ALTER TABLE `ebooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
