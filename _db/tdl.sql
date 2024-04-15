-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 07:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tdl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pswd` varchar(222) NOT NULL,
  `profile` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `email`, `pswd`, `profile`) VALUES
(1, 'mellowjunior', 'mellow@gmail.com', '123', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `log_date` varchar(111) NOT NULL,
  `log` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `u_id`, `log_date`, `log`) VALUES
(1, 505285547, '15:03:42  -  Mar, 16 2024', 'Logging out the account'),
(2, 505285547, '15:03:17  -  Mar, 16 2024', 'Logging out the account'),
(3, 1, '15:03:33  -  Mar, 17 2024', 'Logging out the account'),
(4, 1, '03:03:34 pm  -  Mar, 17 2024', 'Logging out the account'),
(5, 1, '04:03:37 pm  -  Mar, 17 2024', 'Logging out the account');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(111) NOT NULL,
  `msg` text NOT NULL,
  `img` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `u_name`, `email`, `website`, `msg`, `img`) VALUES
(1, 'kirenga', 'kevinkirenga0@gmail.com', 'mellow.com', '', '776513535.png'),
(2, 'mellow junior', 'mellow@gmail.com', 'mollo.com', '', '1111514368.png');

-- --------------------------------------------------------

--
-- Table structure for table `minor_genre`
--

CREATE TABLE `minor_genre` (
  `id` int(11) NOT NULL,
  `gen_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_meaning` text NOT NULL,
  `cover_img` varchar(111) NOT NULL,
  `author` varchar(255) NOT NULL,
  `kiny_title` varchar(255) NOT NULL,
  `eng_title` varchar(255) NOT NULL,
  `fre_title` varchar(255) NOT NULL,
  `swah_title` varchar(255) NOT NULL,
  `english` text NOT NULL,
  `french` text NOT NULL,
  `swah` text NOT NULL,
  `kiny` text NOT NULL,
  `release_date` varchar(255) NOT NULL,
  `status` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `minor_genre`
--

INSERT INTO `minor_genre` (`id`, `gen_id`, `title`, `title_meaning`, `cover_img`, `author`, `kiny_title`, `eng_title`, `fre_title`, `swah_title`, `english`, `french`, `swah`, `kiny`, `release_date`, `status`) VALUES
(2, 2036569378, 'aksdakldkl', 'klmaskldmaklm', '2036569378.png', 'mellowjunior', 'lmkaskldmaklsm', 'aksdakldkl', 'lkmakldmsaklm', 'klmasldkmakl', 'lmaskldmakl', 'klmaklsdmakl', 'kmaklsdmd', 'klmakldmaklm', '17 - 03 - 2024', ''),
(3, 534570804, 'Mellow this is me', 'just nonsense talking', '614056762.png', 'mellowjunior', 'uyu ni nge', 'Mellow this is me', 'ci se mois', 'huyu ni wewe', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '17 - 03 - 2024', ''),
(4, 1847849704, 'fyghnjmkl;,.', 'yihnmomikl;,po', '1847849704.png', 'mellowjunior', 'trbhnjmk;,l', 'fyghnjmkl;,.', 'tryhniomp', 'ytgnmoip;', 'soiljdmosjdmfiojwemfoijfmoijwsdmoijfmwiojsdcmsoinwescionmon oijwdoijwep\r\n\r\nwifjoiwneflnionervsoiljdmosjdmfiojwemfoijfmoijwsdmoijfmwiojsdcmsoinwescionmon oijwdoijwep\r\n\r\nwifjoiwneflnionervsoiljdmosjdmfiojwemfoijfmoijwsdmoijfmwiojsdcmsoinwescionmon oijwdoijwep\r\n\r\nwifjoiwneflnionervsoiljdmosjdmfiojwemfoijfmoijwsdmoijfmwiojsdcmsoinwescionmon oijwdoijwep\r\n\r\nwifjoiwneflnionervsoiljdmosjdmfiojwemfoijfmoijwsdmoijfmwiojsdcmsoinwescionmon oijwdoijwep\r\n\r\nwifjoiwneflnionerv', 'soiljdmosjdmfiojwemfoijfmoijwsdmoijfmwiojsdcmsoinwescionmon oijwdoijwep\r\n\r\nwifjoiwneflnionervsoiljdmosjdmfiojwemfoijfmoijwsdmoijfmwiojsdcmsoinwescionmon oijwdoijwep\r\n\r\nwifjoiwneflnionervsoiljdmosjdmfiojwemfoijfmoijwsdmoijfmwiojsdcmsoinwescionmon oijwdoijwep\r\n\r\nwifjoiwneflnionervsoiljdmosjdmfiojwemfoijfmoijwsdmoijfmwiojsdcmsoinwescionmon oijwdoijwep\r\n\r\nwifjoiwneflnionervsoiljdmosjdmfiojwemfoijfmoijwsdmoijfmwiojsdcmsoinwescionmon oijwdoijwep\r\n\r\nwifjoiwneflnionervsoiljdmosjdmfiojwemfoijfmoijwsdmoijfmwiojsdcmsoinwescionmon oijwdoijwep\r\n\r\nwifjoiwneflnionerv', 'soiljdmosjdmfiojwemfoijfmoijwsdmoijfmwiojsdcmsoinwescionmon oijwdoijwep\r\n\r\nwifjoiwneflnionervsoiljdmosjdmfiojwemfoijfmoijwsdmoijfmwiojsdcmsoinwescionmon oijwdoijwep\r\n\r\nwifjoiwneflnionervsoiljdmosjdmfiojwemfoijfmoijwsdmoijfmwiojsdcmsoinwescionmon oijwdoijwep\r\n\r\nwifjoiwneflnionervsoiljdmosjdmfiojwemfoijfmoijwsdmoijfmwiojsdcmsoinwescionmon oijwdoijwep\r\n\r\nwifjoiwneflnionervsoiljdmosjdmfiojwemfoijfmoijwsdmoijfmwiojsdcmsoinwescionmon oijwdoijwep\r\n\r\nwifjoiwneflnionerv', 's;dkaspd,p[w,s[pwvsoiljdmosjdmfiojwemfoijfmoijwsdmoijfmwiojsdcmsoinwescionmon oijwdoijwep\r\n\r\nwifjoiwneflnionerv\r\n\r\nsoiljdmosjdmfiojwemfoijfmoijwsdmoijfmwiojsdcmsoinwescionmon oijwdoijwep\r\n\r\nwifjoiwneflnionervsoiljdmosjdmfiojwemfoijfmoijwsdmoijfmwiojsdcmsoinwescionmon oijwdoijwep\r\n\r\nwifjoiwneflnionerv\r\n', '17 - 03 - 2024', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `pswd` varchar(111) NOT NULL,
  `country` varchar(111) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `u_id`, `name`, `email`, `pswd`, `country`, `profile`) VALUES
(1, 0, 'Mellow Junior', 'mellow@gmail.com', '123', '', ''),
(2, 505285547, 'Kwizera Tom', 'kwizera@gmail.com', '98', 'rw', ''),
(3, 1607330574, 'Shyaka Mellow', 'shyaka@gmail.com', '987', 'rw', ''),
(4, 2058583463, 'King Top', 'kingtop@gmail.com', 'mellow@123', 'us', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minor_genre`
--
ALTER TABLE `minor_genre`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `minor_genre`
--
ALTER TABLE `minor_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
