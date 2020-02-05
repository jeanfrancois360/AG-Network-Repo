-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2020 at 09:57 AM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AG-network-learning-platform-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_title` text NOT NULL,
  `course_desc` text NOT NULL,
  `course_overview` longtext NOT NULL,
  `course_image` varchar(100) NOT NULL,
  `course_intro_video` varchar(100) NOT NULL,
  `course_intro_text` longtext NOT NULL,
  `number_of_lesson` varchar(10) NOT NULL,
  `enrolled_students` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` varchar(10) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_lessons`
--

CREATE TABLE `course_lessons` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `lesson_content` longtext NOT NULL,
  `quiz_questions_num` int(11) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL,
  `deleted` varchar(10) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facilitators`
--

CREATE TABLE `facilitators` (
  `id` int(15) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'facilitator',
  `names` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `phone` varchar(60) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `gender` varchar(60) DEFAULT NULL,
  `dob` varchar(60) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `education` varchar(60) DEFAULT NULL,
  `resume` text,
  `course` varchar(60) DEFAULT NULL,
  `nationality` varchar(60) DEFAULT NULL,
  `essay` longtext,
  `payment_method` varchar(60) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `approved` varchar(10) NOT NULL DEFAULT 'No',
  `deleted` varchar(5) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilitators`
--

INSERT INTO `facilitators` (`id`, `role`, `names`, `email`, `phone`, `address`, `gender`, `dob`, `password`, `education`, `resume`, `course`, `nationality`, `essay`, `payment_method`, `status`, `registration_date`, `approved`, `deleted`) VALUES
(1, 'facilitator', 'facilitator', 'facilitator@gmail.com', '+250788647117', 'centre town, Kigali, Rwanda', 'male', '1997-02-12', '$2y$10$I8aCULylba1lZrrGzSmQA.lJUOa8dfoEcfjTvsoEicIUPqBMM6mt6', 'University(A0)', 'C:\\fakepath\\Screenshot from 2020-02-03 21-02-13.png', 'Agri-Business', 'Rwandan', 'This is my essay!', 'direct deposit', 'Active', '2020-02-04 12:08:55', 'Yes', 'No'),
(2, 'facilitator', 'Kalisa John', 'john@gmail.com', '0788293885', 'centre town, Kigali, Rwanda', 'male', '1996-02-11', '$2y$10$DfpaAaXtU.7IxsqfOxOCO.IM0/uCXYeGsh0SclwUpJteiaYPQB6TC', 'University(A0)', 'C:\\fakepath\\Screenshot from 2020-02-03 21-02-13.png', 'Farming tech', 'Rwandan', 'My essay', 'direct deposit', 'Active', '2020-02-04 12:12:59', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `quizes`
--

CREATE TABLE `quizes` (
  `id` int(11) NOT NULL,
  `couse_id` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `quiz_type` varchar(50) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL,
  `deleted` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_answers`
--

CREATE TABLE `quiz_answers` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `answer_type` varchar(20) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL,
  `deleted` varchar(10) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

CREATE TABLE `quiz_questions` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL,
  `deleted` varchar(10) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(60) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'staff',
  `names` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `dob` varchar(15) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `position` varchar(60) DEFAULT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) DEFAULT NULL,
  `deleted` varchar(5) DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `role`, `names`, `email`, `phone`, `dob`, `address`, `password`, `position`, `registration_date`, `status`, `deleted`) VALUES
(1, 'admin', 'Jean Francois Munyaneza', 'mjeanfrancois360@gmail.com', '0784657740', '1997-11-18', 'Kimironko', '$2y$10$Y7hjpdAwXWRryAe.9YORb.wU5vdCBXYT1CYWoH3NI9bPnvW4e3CSO', 'Software Developer', '2020-02-04 12:18:02', 'Active', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(15) NOT NULL,
  `role` varchar(60) NOT NULL DEFAULT 'student',
  `names` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `phone` varchar(60) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dob` varchar(60) DEFAULT NULL,
  `gender` varchar(60) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `education` varchar(60) DEFAULT NULL,
  `reason` varchar(60) DEFAULT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) DEFAULT NULL,
  `deleted` varchar(5) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `role`, `names`, `email`, `phone`, `password`, `dob`, `gender`, `address`, `education`, `reason`, `registration_date`, `status`, `deleted`) VALUES
(1, 'student', 'Tonny Mugisha', 'tonny@gmail.com', '+250788647117', '$2y$10$tccqxz7/Tjtwi1kiy7XPlOmwMDfTqSZRp2YTH0bLM6M/Hb5REuode', '1997-12-17', 'male', 'Kimironko', 'University(A0)', 'I want a certificate', '2020-02-04 12:19:18', 'Active', 'No'),
(2, 'student', 'student', 'student@gmail.com', '0788293885', '$2y$10$/uwuxTLYxWEgLuLSz8fQkOez5uk/8UC1w7yzTe8n4nRF6hs./1sAm', '1996-02-11', 'male', 'centre town, Kigali, Rwanda', 'University(A0)', 'I want a job', '2020-02-05 06:44:47', 'Active', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_lessons`
--
ALTER TABLE `course_lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilitators`
--
ALTER TABLE `facilitators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizes`
--
ALTER TABLE `quizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_answers`
--
ALTER TABLE `quiz_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course_lessons`
--
ALTER TABLE `course_lessons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `facilitators`
--
ALTER TABLE `facilitators`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `quizes`
--
ALTER TABLE `quizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quiz_answers`
--
ALTER TABLE `quiz_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
