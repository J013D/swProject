-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 05:24 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_sw`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `idOfPosts` int(11) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `acceptability` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `idOfPosts`, `text`, `acceptability`, `name`, `email`, `rating`, `time`) VALUES
(1, 7, 'خوب بود', 'allow', 'جواد', 'j001@gmail.com', 'no', '2019/12/28 01:54:03am'),
(2, 7, 'salam\r\nqashangh bod.', 'allow', 'iman', 'i765@gmail.com', 'yes', '2019/12/28 01:59:51am'),
(3, 7, '325232', 'wait', 'ako', '1414', 'yes', '2019/12/28 02:02:35am'),
(4, 7, '142578', 'wait', 'ehasn', 'ehsan@gmail.com', 'no', '2019/12/28 02:06:17am'),
(12, 6, 'pokoijij', 'allow', '5tt3t4', ',nmm,n', 'yes', '2019/12/28 02:34:39am'),
(13, 6, 'qewded', 'allow', 'mamad', '142', 'yes', '2019/12/28 04:13:22pm'),
(14, 6, 'vvvcc', 'allow', 'sadeq', 's', 'no', '2019/12/28 04:14:49pm'),
(17, 8, 'خوب بود', 'wait', 'ali', 'aa@gmail.com', 'yes', '2019/12/28 07:11:09pm');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `head` varchar(500) NOT NULL,
  `number` int(11) NOT NULL,
  `text` varchar(10000) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `userEmail`, `userName`, `head`, `number`, `text`, `time`) VALUES
(5, 'aa@gmail.com', 'ali', 'عنوان یک', 1, '<div>سلام، <br></div><div>متن آزمایشی است.<br>		</div>', '2019/12/24 04:19:36pm'),
(6, 'aa@gmail.com', 'ali', 'عنوان دو', 1, '<div>سلام، <br></div><div>متن آزمایشی است.<br>		</div>', '2019/12/24 04:19:36pm'),
(7, 'aa@gmail.com', 'ali', 'ورزشی', 37, '<div align=\"justify\">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.<br></div>', '2019/12/24 05:33:09pm'),
(8, 'aa@gmail.com', 'ali', 'english', 14, '<div align=\"left\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br></div>		', '2019/12/24 05:34:02pm'),
(9, 'aa@gmail.com', 'ali', 'spanish', 87, '<div align=\"left\">		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc bibendum ante eu ipsum maximus tincidunt. Fusce volutpat semper erat, in lacinia nisi sagittis vel. Nullam in odio ut orci placerat imperdiet. Mauris velit orci, posuere sit amet venenatis sit amet, ornare at magna. Pellentesque ullamcorper sodales ipsum. Praesent dui ante, convallis sed lorem a, eleifend efficitur magna. Quisque sodales in elit quis sagittis. Curabitur in tortor nec leo lacinia tempor. Donec sit amet metus nisi.</div>', '2019/12/24 06:04:00pm'),
(10, 'alireza@gmail.com', 'alireza', 'فارسی', 25879, '<div align=\"right\">		لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.<br><br>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</div>', '2019/12/24 06:05:35pm'),
(11, 'alireza@gmail.com', 'alireza', 'فارسی 2', 123654, '		لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.<img src=\"https://i.imgur.com/yONydWo.png\" width=\"512\"><br>', '2019/12/24 06:07:13pm'),
(15, 'alireza@gmail.com', 'alireza', '14', 12, '12544s64s5		', '2019/12/24 10:01:05pm'),
(17, 'alireza@gmail.com', 'alireza', '188', 988, '<div>984846546549848</div><div>5132<br>		</div>', '2019/12/24 10:01:50pm'),
(18, 'aa@gmail.com', 'ali', 'ممدی', 911, '<div align=\"justify\">ممد شیر کاکائو سنگین زد. فقط مارک دنت		</div>', '2019/12/27 01:12:54am'),
(20, 'aa@gmail.com', 'ali', 'آزمایش', 987, '<div>سسسسسسسسس</div><div>شششششششش</div><div>ررررررررر</div><div>ذذذذذذذذذذ</div><div>د<br></div>', '2019/12/27 01:17:15am'),
(21, 'aa@gmail.com', 'ali', 'errr', 7841, '<div>wwwwwwwwwwwwwwww ffffffffff</div><div>gggggggggggggggg</div><div>uuuuuuuuuuuuuuuuuuuuuuu</div><div>lllll<br>		</div>', '2019/12/27 01:18:31am'),
(22, 'aa@gmail.com', 'ali', '123', 7489, '		561646532', '2019/12/27 03:04:54am'),
(23, 'aa@gmail.com', 'ali', '344', 4512, '<div>		frfe12efg2r ktogh</div><div>tttt<br></div>', '2019/12/27 03:41:52pm'),
(24, 'aa@gmail.com', 'ali', 'alaki', 852, '<div align=\"left\"><font face=\"impact\">alaki</font></div><div align=\"left\"><font face=\"impact\">matn nadarim dige bav</font><br>		</div>', '2019/12/27 03:46:22pm'),
(25, 'aa@gmail.com', 'ali', '51', 21, '		4tg4tg', '2019/12/27 03:52:28pm'),
(26, 'aa@gmail.com', 'ali', '12', 41, '<div>ُسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسس</div><div>ذقلفذ</div><div>غغغغغغغغغغغغغ<br></div>', '2019/12/27 03:53:27pm'),
(27, 'aa@gmail.com', 'ali', '98', 21546, '<div>23151یزنصئیتز</div><div>ثقبحنثقومبثب<br>		</div>', '2019/12/27 03:55:20pm'),
(28, 'aa@gmail.com', 'ali', '11', 25869932, '<div>سلام</div><div>تست<br>		</div>', '2019/12/27 03:58:56pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userName`, `email`, `password`, `level`, `time`) VALUES
(14, 'javad', 'javad@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'student', '2019/12/14 01:54:57pm'),
(15, 'ali', 'aa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'master', '2019/12/24 03:54:57pm'),
(16, 'alireza', 'alireza@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'master', '2019/12/24 05:36:04pm'),
(17, 'mehdi', 'mehdi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'student', '2019/12/24 05:48:13pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
