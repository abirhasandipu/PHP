-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 02:21 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` text NOT NULL,
  `admin_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `admin_password`) VALUES
('admin1', 'qwerty'),
('admin2', 'qwerty'),
('dipu', 'dipu');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `book_name` varchar(60) NOT NULL,
  `writer` varchar(60) NOT NULL,
  `price` int(20) NOT NULL,
  `description` varchar(150) NOT NULL,
  `genre` varchar(25) NOT NULL,
  `added_by` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `deleted` varchar(3) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `book_name`, `writer`, `price`, `description`, `genre`, `added_by`, `date_added`, `deleted`, `image`) VALUES
(11, 'Bhoot Shomogro', 'Humayun Ahmed', 300, 'Old, second hand, good condition', 'Fiction', 'sajib_ahmed', '0000-00-00 00:00:00', '', 'assets/images/ads/5efeee9a094994.jpg'),
(12, 'Brave New World', 'Aldous Huxley', 80, 'Good Condtion', 'Sci-fi', 'israt_nourin', '0000-00-00 00:00:00', '', 'assets/images/ads/5efeef8ea565a1.jpg'),
(14, 'Harry Potter', 'JK Rowling', 500, '5 years old books', 'Fiction', 'hamayun_kabir', '0000-00-00 00:00:00', '', 'assets/images/ads/5efef02d30f495.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_body` text NOT NULL,
  `posted_by` varchar(60) NOT NULL,
  `posted_to` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `removed` varchar(3) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_body`, `posted_by`, `posted_to`, `date_added`, `removed`, `post_id`) VALUES
(1, 'pls no!', 'abir_hasan', 'bill_gates', '2020-01-20 15:10:19', 'no', 29),
(2, 'slkjdfskldf', 'abir_hasan', 'bill_gates', '2020-02-04 13:31:04', 'no', 29),
(3, 'hi', 'abir_hasan', 'homer_simpson', '2020-02-04 21:38:18', 'no', 26),
(4, 'asdasd', 'abir_hasan', 'bill_gates', '2020-02-04 21:43:12', 'no', 29),
(5, 'hkjkljljkl', 'abir_hasan', 'abir_hasan', '2020-02-04 21:43:50', 'no', 23),
(6, 'asd', 'abir_hasan', 'bill_gates', '2020-02-05 12:22:52', 'no', 29),
(7, 'asdasdasdasd', 'abir_hasan', 'bill_gates', '2020-02-05 12:22:59', 'no', 29),
(8, 'hi man', 'abir_hasan', 'chandler_bing', '2020-02-05 12:24:04', 'no', 24),
(9, '', 'abir_hasan', 'bill_gates', '2020-02-05 13:00:11', 'no', 29),
(10, 'I will work. Dont worry.', 'abir_hasan', 'abir_hasan', '2020-02-05 13:11:57', 'no', 22),
(11, '', 'abir_hasan', 'bill_gates', '2020-02-05 13:51:59', 'no', 29),
(12, 'hey man', 'abir_hasan', 'homer_simpson', '2020-02-05 13:54:45', 'no', 26),
(13, 'okay', 'abir_hasan', 'abir_hasan', '2020-02-05 14:11:13', 'no', 21),
(14, 'Me too. :)', 'abir_hasan', 'abir_hasan', '2020-02-05 14:19:28', 'no', 19),
(15, 'What is the problem ?', 'bill_gates', 'bill_gates', '2020-02-05 14:20:07', 'no', 29),
(16, 'when are you going to upload?', 'bill_gates', 'abir_hasan', '2020-02-05 14:20:34', 'no', 23),
(17, 'it*\r\n', 'abir_hasan', 'abir_hasan', '2020-02-05 20:27:18', 'no', 22),
(18, 'jhjhg', 'abir_hasan', 'hamayun_kabir', '2020-02-17 23:20:25', 'no', 44),
(19, 'ghjkhk', 'abir_hasan', 'abir_hasan', '2020-02-17 23:21:41', 'no', 46),
(20, 'I have 100 taka. :(', 'hamayun_kabir', 'abir_hasan', '2020-02-18 21:09:27', 'no', 62),
(21, 'interested', 'israt_nourin', 'shovon_das', '2020-02-19 14:26:01', 'no', 94),
(22, 'I have an AI book', 'israt_nourin', 'shovon_das', '2020-02-19 18:42:52', 'no', 94),
(23, 'jhghjg', 'abir_hasan', 'shovon_das', '2020-02-19 18:48:08', 'no', 94),
(24, 'i want to buy', 'abir_hasan', 'shovon_das', '2020-02-23 23:39:53', 'no', 94),
(25, 'Hi', 'israt_nourin', 'abc_def', '2020-06-08 11:39:34', 'no', 98),
(26, 'nice', 'abc_def', 'israt_nourin', '2020-06-08 11:52:14', 'no', 100),
(27, 'Hello. How are you?', 'abir_hasan', 'arafat_hossain', '2020-07-05 01:21:18', 'no', 109);

-- --------------------------------------------------------

--
-- Table structure for table `friend_requests`
--

CREATE TABLE `friend_requests` (
  `id` int(11) NOT NULL,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend_requests`
--

INSERT INTO `friend_requests` (`id`, `user_to`, `user_from`) VALUES
(4, 'bill_gates', 'abir_hasan'),
(8, 'bill_gates', 'arctic_fox'),
(11, 'hamayun_kabir', 'abir_hasan'),
(12, 'homer_simpson', 'abir_hasan'),
(15, 'sajib_ahmed', 'shovon_das'),
(17, 'sajib_ahmed', 'arafat_hossain');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `username`, `post_id`) VALUES
(9, 'abir_hasan', 26),
(11, 'abir_hasan', 17),
(12, 'abir_hasan', 32),
(14, 'abir_hasan', 44),
(15, 'abir_hasan', 42),
(16, 'abir_hasan', 40),
(17, 'hamayun_kabir', 42),
(18, 'hamayun_kabir', 29),
(21, 'hamayun_kabir', 40),
(22, 'israt_nourin', 82),
(23, 'hamayun_kabir', 88),
(24, 'israt_nourin', 88),
(26, 'abir_hasan', 92),
(27, 'israt_nourin', 94),
(28, 'abir_hasan', 90),
(29, 'abc_def', 100),
(31, 'abir_hasan', 100),
(32, 'abir_hasan', 109);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `date` datetime NOT NULL,
  `opened` varchar(3) NOT NULL,
  `viewed` varchar(3) NOT NULL,
  `deleted` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_to`, `user_from`, `body`, `date`, `opened`, `viewed`, `deleted`) VALUES
(39, 'hamayun_kabir', 'abir_hasan', 'Hey! \r\nI would like to buy atomic habit. How much would you want me to pay for it?', '2020-07-03 14:49:20', 'yes', 'no', 'no'),
(40, 'abir_hasan', 'hamayun_kabir', 'I want 120 taka for this book. ', '2020-07-03 14:54:10', 'yes', 'no', 'no'),
(41, 'arafat_hossain', 'abir_hasan', 'How are you?', '2020-07-05 01:21:41', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL,
  `added_by` varchar(60) NOT NULL,
  `user_to` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `user_closed` int(3) NOT NULL,
  `deleted` varchar(3) NOT NULL,
  `likes` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `added_by`, `user_to`, `date_added`, `user_closed`, `deleted`, `likes`, `image`) VALUES
(22, 'The infinity scroll is not working in Chrome. But it is working on Mozila Firefox and Internet explorer. I found out that Chrome doesn\'t like Ajax from local files that might be the reason.', 'abir_hasan', 'none', '2020-01-15 20:31:31', 0, 'yes', 0, ''),
(31, 'ok', 'abir_hasan', 'none', '2020-02-08 21:33:20', 0, 'yes', 0, ''),
(33, 'hey', 'abir_hasan', 'arctic_fox', '2020-02-14 23:49:50', 0, 'yes', 0, ''),
(34, 'okayyyy', 'abir_hasan', 'none', '2020-02-14 23:52:03', 0, 'yes', 0, ''),
(36, 'hey man!', 'abir_hasan', 'arctic_fox', '2020-02-15 00:13:35', 0, 'yes', 0, ''),
(40, 'hey man!', 'abir_hasan', 'arctic_fox', '2020-02-15 00:14:24', 0, 'yes', 2, ''),
(46, 'hfghfjhgkjh', 'abir_hasan', 'hamayun_kabir', '2020-02-17 23:21:15', 0, 'yes', 0, ''),
(61, 'aaaa', 'abir_hasan', 'none', '2020-02-18 21:08:00', 0, 'yes', 0, ''),
(63, 'can I post this?', 'abir_hasan', 'none', '2020-02-18 21:10:09', 0, 'yes', 0, 'assets/images/posts/5e4bfe51c69b970873817_3413818135325771_1497431641851691008_n.jpg'),
(71, 'h', 'abir_hasan', 'none', '2020-02-18 21:23:47', 0, 'yes', 0, ''),
(73, '???', 'abir_hasan', 'none', '2020-02-18 21:24:40', 0, 'yes', 0, 'assets/images/posts/5e4c01b85acc4for legal reasons.JPG'),
(76, 'How do i look?', 'abir_hasan', 'none', '2020-02-18 21:25:10', 0, 'yes', 0, 'assets/images/posts/5e4c01d6832b732689044_1726963834036064_9043061505813118976_n.jpg'),
(78, 'How do i look?', 'abir_hasan', 'none', '2020-02-18 21:25:18', 0, 'yes', 0, 'assets/images/posts/5e4c01dee5aae32689044_1726963834036064_9043061505813118976_n.jpg'),
(80, 'How do i look?', 'abir_hasan', 'none', '2020-02-18 21:25:21', 0, 'yes', 0, 'assets/images/posts/5e4c01e19ff8f32689044_1726963834036064_9043061505813118976_n.jpg'),
(82, 'I would like to exchange this for xyzabc', 'abir_hasan', 'none', '2020-02-18 21:32:32', 0, 'yes', 1, 'assets/images/posts/5e4c0390ddeabbbcdune.jpg'),
(84, 'I would like to exchange this for xyzabc', 'abir_hasan', 'none', '2020-02-18 21:32:46', 0, 'yes', 0, 'assets/images/posts/5e4c039e99b68bbcdune.jpg'),
(86, 'I would like to exchange this for xyzabc', 'abir_hasan', 'none', '2020-02-18 21:32:55', 0, 'yes', 0, 'assets/images/posts/5e4c03a7e8a27bbcdune.jpg'),
(94, 'I want to exchange this book with AI', 'shovon_das', 'none', '2020-02-19 13:36:20', 0, 'yes', 1, 'assets/images/posts/5e4ce573d79c651q5Z-1LGaL._SX355_BO1,204,203,200_.jpg'),
(96, 'look at my cat', 'abir_hasan', 'none', '2020-06-05 01:51:30', 0, 'yes', 0, 'assets/images/posts/5ed950c225211pexels-photo-617278.jpeg'),
(102, 'Has anyone read this book?', 'abir_hasan', 'none', '2020-06-13 02:54:18', 0, 'no', 0, 'assets/images/posts/5ee3eb7a00e601.jpg'),
(106, 'I want to read this.', 'abir_hasan', 'none', '2020-06-13 02:56:26', 0, 'no', 0, 'assets/images/posts/5ee3ebfa4f85e2.jpg'),
(107, 'Hello! I dont have any friends!', 'arafat_hossain', 'none', '2020-07-05 01:19:31', 0, 'yes', 0, ''),
(108, 'Hello! I dont have any friends!', 'arafat_hossain', 'none', '2020-07-05 01:19:40', 0, 'yes', 0, ''),
(109, 'Hi', 'arafat_hossain', 'none', '2020-07-05 01:20:26', 0, 'no', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `signup_date` date NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `num_posts` int(11) NOT NULL,
  `num_likes` int(11) NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `friend_array` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `signup_date`, `profile_pic`, `num_posts`, `num_likes`, `user_closed`, `friend_array`) VALUES
(3, 'Abir', 'Hasan', 'abir_hasan', 'Abir@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '2020-01-10', 'assets/images/profile_pics/abir_hasandf42067e3b14282e9eb60f90bb1acb01n.jpeg', 47, 6, 'no', ',arctic_fox,israt_nourin,sajib_ahmed,saroar_sarker,shovon_das,abc_def,arafat_hossain,'),
(11, 'Hamayun', 'Kabir', 'hamayun_kabir', 'Hamayun@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '2020-02-16', 'assets/images/profile_pics/hamayun_kabird11d029a5041c4f79749ab1cf2565f51n.jpeg', 1, 1, 'no', ',bill_gates,israt_nourin,sajib_ahmed,arctic_fox,'),
(12, 'Israt', 'Nourin', 'israt_nourin', 'Israt@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '2020-02-18', 'assets/images/profile_pics/israt_nourin29daab5a8e7c5a6a05a29e458b250b21n.jpeg', 3, 5, 'no', ',abir_hasan,hamayun_kabir,shovon_das,abc_def,'),
(13, 'Sajib', 'Ahmed', 'sajib_ahmed', 'Sajib@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '2020-02-18', 'assets/images/profile_pics/sajib_ahmed099923dba4009d3cf935b4436ca8648bn.jpeg', 1, 0, 'no', ',hamayun_kabir,abir_hasan,'),
(14, 'Arafat', 'Hossain', 'arafat_hossain', 'Arafat@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '2020-07-05', 'assets/images/profile_pics/arafat_hossain4b5eab1630d2fd9146ba994dc896c017n.jpeg', 3, 1, 'no', ',abir_hasan,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend_requests`
--
ALTER TABLE `friend_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `friend_requests`
--
ALTER TABLE `friend_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
