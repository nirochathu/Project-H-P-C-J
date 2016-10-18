-- phpMyAdmin SQL Dump
-- version 4.5.1
-- 
http://www.phpmyadmin.net
--
-- 
Host: 127.0.0.1
-- 
Generation Time: Oct 18, 2016 at 10:24 AM
-- 
Server version: 10.1.16-MariaDB
-- 
PHP Version: 5.6.24

SET 
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;


--
-- Database: `lms`
--

-- 
--------------------------------------------------------

--
-- 
Table structure for table `users`
--



CREATE TABLE `users` (
  
`user_id` int(6) NOT NULL,
  
`first_name` varchar(32) NOT NULL,
  
`last_name` varchar(32) NOT NULL,
  
`password` varchar(255) NOT NULL,
  
`user_name` varchar(32) NOT NULL,
  
`email` varchar(30) NOT NULL,
  
`gender` varchar(6) NOT NULL,
  
`active` int(1) NOT NULL DEFAULT '0',
  
`type` int(4) NOT NULL DEFAULT '0'

) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

