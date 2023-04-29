-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 18, 2018 at 04:49 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `medicalappointment`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `booking`
-- 

CREATE TABLE `booking` (
  `bid` int(11) NOT NULL auto_increment,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `doctorname` varchar(50) NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY  (`bid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

-- 
-- Dumping data for table `booking`
-- 

INSERT INTO `booking` VALUES (22, 'Meenu', 'marybenny@gmail.com', '9865759820', 'Ophthalmology', '2018-04-18', 'Ok', 'Sona  Jacob', '00:00:00');
INSERT INTO `booking` VALUES (4, 'Ammu Anu', 'ammu@gmail.com', '9089898977', 'Gynacology', '2018-01-25', 'Approved', 'Sona  Jacob', '19:00:00');
INSERT INTO `booking` VALUES (5, 'Ammu Anu', 'ammu@gmail.com', '9089898977', 'Dermatology', '2018-01-25', 'Approved', 'Susan Mathew', '19:00:00');
INSERT INTO `booking` VALUES (15, 'Mary Benny', 'marybenny@gmail.com', '9865759820', 'Gynacology', '2018-03-25', 'Cancel', 'Anna David', '19:00:00');
INSERT INTO `booking` VALUES (16, 'Mariya Joseph', 'mariyajos@gmail.com', '9847076172', 'Gynacology', '2018-03-25', 'Approved', 'Sona  Jacob', '19:00:00');

-- --------------------------------------------------------

-- 
-- Table structure for table `complaint`
-- 

CREATE TABLE `complaint` (
  `cid` int(11) NOT NULL,
  `complaint` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `reply` varchar(30) NOT NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `complaint`
-- 

INSERT INTO `complaint` VALUES (1, 'vbvbv', '2018-01-25', '16:12:29', 'ammu@gmail.com', 'sorry ');

-- --------------------------------------------------------

-- 
-- Table structure for table `doctorreg`
-- 

CREATE TABLE `doctorreg` (
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `specialization` varchar(40) NOT NULL,
  `experiance` varchar(40) NOT NULL,
  PRIMARY KEY  (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `doctorreg`
-- 

INSERT INTO `doctorreg` VALUES ('Dr.Mahalekshmi', 'maha@gmail.com', 'xxx', '909090090', 'Ophthalmology', '3 year');
INSERT INTO `doctorreg` VALUES ('Meenu', 'meenu@gmail.com', 'xxxx yyy', '8978786767', 'Dermatology', '5');
INSERT INTO `doctorreg` VALUES ('Sona  Jacob', 'sonajac@gmail.com', 'Near Santhigiri Ayervedic Hospital, Munnar Road, K', '9857528420', 'Gynacology', '3');
INSERT INTO `doctorreg` VALUES ('Susan Mathew', 'susanmathews@gmail.com', 'Nakshathra Bhavan,Kembari Road,Perumbavoor', '8589859720', 'Dermatology', '5');
INSERT INTO `doctorreg` VALUES ('Anna David', 'annadavid@gmail.com', 'eeeeeeeeeeeeeeeeeeeeee', '9847258621', 'Gynacology', '5');

-- --------------------------------------------------------

-- 
-- Table structure for table `feedback`
-- 

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL auto_increment,
  `feedback` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY  (`fid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `feedback`
-- 

INSERT INTO `feedback` VALUES (1, 'Good service', '16:09:38', '2018-01-25', 'anu');
INSERT INTO `feedback` VALUES (2, 'Good service', '16:10:22', '2018-01-25', 'veena');
INSERT INTO `feedback` VALUES (3, 'not bad', '16:11:05', '2018-01-25', 'ammu@gmail.com');
INSERT INTO `feedback` VALUES (4, 'hgjhgj', '16:16:27', '2018-01-25', 'ammu@gmail.com');
INSERT INTO `feedback` VALUES (5, 'gooooooooooooood', '12:05:33', '2018-03-25', 'jilu123@gmail.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `hospital`
-- 

CREATE TABLE `hospital` (
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `hospital`
-- 

INSERT INTO `hospital` VALUES ('Gautham Hospital', 'gautham221@gmail.com', 'panayappillly', '2220875');
INSERT INTO `hospital` VALUES ('Medi Vission', 'medivission@gmail.com', 'medivission\r\nRavipuram', '9089787867');

-- --------------------------------------------------------

-- 
-- Table structure for table `login`
-- 

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `login`
-- 

INSERT INTO `login` VALUES ('admin', 'admin', 'admin', '1');
INSERT INTO `login` VALUES ('ammu@gmail.com', 'staff', 'staff', '1');
INSERT INTO `login` VALUES ('maha@gmail.com', '123', 'doctor', '1');
INSERT INTO `login` VALUES ('jilu123@gmail.com', 'edakochi', 'patient', '1');
INSERT INTO `login` VALUES ('marysoniya123@gmail.com', 'soniya', 'patient', '1');
INSERT INTO `login` VALUES ('maha.techwingsys@gmail.com', 'gautham', 'doctor', '1');
INSERT INTO `login` VALUES ('medivission@gmail.com', '1212', 'hospital', '1');
INSERT INTO `login` VALUES ('meenu@gmail.com', '123456', 'doctor', '1');
INSERT INTO `login` VALUES ('remya123@gmail.com', 'remya', 'patient', '0');
INSERT INTO `login` VALUES ('veena@gmail.com', 'staff', 'patient', '0');
INSERT INTO `login` VALUES ('sonajac@gmail.com', 'jacson', 'doctor', '1');
INSERT INTO `login` VALUES ('susanmathews@gmail.com', 'susan', 'doctor', '1');
INSERT INTO `login` VALUES ('mariyajos@gmail.com', 'mariya', 'patient', '1');
INSERT INTO `login` VALUES ('marybenny@gmail.com', 'marybenny', 'patient', '1');
INSERT INTO `login` VALUES ('annadavid@gmail.com', 'annadavid', 'doctor', '1');

-- --------------------------------------------------------

-- 
-- Table structure for table `medication`
-- 

CREATE TABLE `medication` (
  `mid` int(11) NOT NULL auto_increment,
  `name` varchar(40) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY  (`mid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `medication`
-- 

INSERT INTO `medication` VALUES (2, 'Aspirin', 'treat pain, fever, or inflammation');
INSERT INTO `medication` VALUES (11, '', '');
INSERT INTO `medication` VALUES (10, '', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `messages`
-- 

CREATE TABLE `messages` (
  `chat_id` int(11) NOT NULL auto_increment,
  `chat_from` varchar(50) default NULL,
  `chat_to` varchar(50) default NULL,
  `chat_msg` varchar(200) default NULL,
  `received` decimal(1,0) default '0',
  PRIMARY KEY  (`chat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=150 ;

-- 
-- Dumping data for table `messages`
-- 

INSERT INTO `messages` VALUES (149, 'jilu123@gmail.com ', 'meenu@gmail.com', 'hello', 1);
INSERT INTO `messages` VALUES (140, 'maha@gmail.com ', 'jilu123@gmail.com', 'wat abbbbbbbbbbb', 1);
INSERT INTO `messages` VALUES (141, 'maha@gmail.com ', 'jilu123@gmail.com', '????????????????????', 1);
INSERT INTO `messages` VALUES (142, 'jilu123@gmail.com ', 'maha@gmail.com', 'eeeeeeeeeeeeeeeeeee', 0);
INSERT INTO `messages` VALUES (143, 'maha.techwingsys@gmail.com ', 'jilu123@gmail.com', 'hlooo', 0);
INSERT INTO `messages` VALUES (144, 'jilu123@gmail.com ', 'maha@gmail.com', 'hoiiiii', 0);
INSERT INTO `messages` VALUES (145, 'maha.techwingsys@gmail.com ', 'jilu123@gmail.com', 'ysss', 0);
INSERT INTO `messages` VALUES (146, 'jilu123@gmail.com ', 'maha@gmail.com', 'ggggggggggggggggggg', 0);
INSERT INTO `messages` VALUES (147, 'maha.techwingsys@gmail.com ', 'jilu123@gmail.com', 'hhhhhhhhhhhhhhhhhhhhhhh', 0);
INSERT INTO `messages` VALUES (148, 'meenu@gmail.com ', 'jilu123@gmail.com', 'hi', 1);
INSERT INTO `messages` VALUES (138, 'jilu123@gmail.com ', 'maha@gmail.com', 'hw r uuuuuuuuuuu', 0);
INSERT INTO `messages` VALUES (139, 'maha@gmail.com ', 'jilu123@gmail.com', 'fneeeeeeeeeeee', 1);
INSERT INTO `messages` VALUES (136, 'jilu123@gmail.com ', 'maha@gmail.com', 'hiiiiiiiiiiiiiiiii', 0);
INSERT INTO `messages` VALUES (137, 'maha@gmail.com ', 'jilu123@gmail.com', 'hloooooooooooooooo', 1);
INSERT INTO `messages` VALUES (132, 'marisoniya123@gmail.com ', 'manu@gmail.com', 'hlooo', 0);
INSERT INTO `messages` VALUES (133, 'manu@gmail.com ', 'marisoniya123@gmail.com', 'yyyyyyyyyyyyyyy', 1);
INSERT INTO `messages` VALUES (134, 'marisoniya123@gmail.com ', 'manu@gmail.com', 'nooooooooooooo', 0);
INSERT INTO `messages` VALUES (135, 'jilu123@gmail.com ', 'maha.techwingsys@gmail.com', 'hi...', 1);
INSERT INTO `messages` VALUES (131, 'manu@gmail.com ', 'marisoniya123@gmail.com', 'kknkjnnnnnnnnnnnnnnnnnn', 1);
INSERT INTO `messages` VALUES (130, 'manu@gmail.com ', 'marisoniya123@gmail.com', 'hekkkkkkkkkkkkkkkkkkkkkkkkk', 1);
INSERT INTO `messages` VALUES (127, 'manu@gmail.com ', 'marisoniya123@gmail.com', 'gggggggggggggg', 1);
INSERT INTO `messages` VALUES (128, 'marisoniya123@gmail.com ', 'manu@gmail.com', 'yyyyyyyyyyyyyy', 0);
INSERT INTO `messages` VALUES (129, 'marisoniya123@gmail.com ', 'manu@gmail.com', 'uuuuuuuuuuuuuuuu', 0);
INSERT INTO `messages` VALUES (126, 'marisoniya123@gmail.com ', 'manu@gmail.com', 'hello', 0);
INSERT INTO `messages` VALUES (125, 'manu@gmail.com ', 'marisoniya123@gmail.com', 'hello', 1);
INSERT INTO `messages` VALUES (124, 'marisoniya123@gmail.com ', 'manu@gmail.com', 'hi', 0);
INSERT INTO `messages` VALUES (123, 'manu@gmail.com ', 'marisoniya123@gmail.com', 'hi', 1);
INSERT INTO `messages` VALUES (122, 'marysoniya123@gmail.com ', 'maha@gmail.com', 'hghgvhgvv', 0);
INSERT INTO `messages` VALUES (121, 'marysoniya123@gmail.com ', 'maha@gmail.com', 'bbvvvbvvbvbvbvbbv', 0);
INSERT INTO `messages` VALUES (120, 'marysoniya123@gmail.com ', 'maha@gmail.com', 't14', 0);
INSERT INTO `messages` VALUES (119, 'maha@gmail.com ', 'marysoniya123@gmail.com', 't13', 0);
INSERT INTO `messages` VALUES (118, 'maha@gmail.com ', 'marysoniya123@gmail.com', 't12', 0);
INSERT INTO `messages` VALUES (117, 'maha@gmail.com ', 'marysoniya123@gmail.com', 't9', 0);
INSERT INTO `messages` VALUES (116, 'maha@gmail.com ', 'marysoniya123@gmail.com', 't8', 0);
INSERT INTO `messages` VALUES (115, 'marysoniya123@gmail.com ', 'maha@gmail.com', 't7', 1);
INSERT INTO `messages` VALUES (114, 'marysoniya123@gmail.com ', 'maha@gmail.com', 't6', 1);
INSERT INTO `messages` VALUES (113, 'maha@gmail.com ', 'marysoniya123@gmail.com', 't5', 0);
INSERT INTO `messages` VALUES (112, 'maha@gmail.com ', 'marysoniya123@gmail.com', 't4', 0);
INSERT INTO `messages` VALUES (111, 'marysoniya123@gmail.com ', 'maha@gmail.com', 't3', 1);
INSERT INTO `messages` VALUES (110, 'marysoniya123@gmail.com ', 'maha@gmail.com', 't2', 1);
INSERT INTO `messages` VALUES (109, 'maha@gmail.com ', 'marysoniya123@gmail.com', 't1', 0);
INSERT INTO `messages` VALUES (108, 'maha@gmail.com ', 'marysoniya123@gmail.com', 'hello', 0);
INSERT INTO `messages` VALUES (107, 'marysoniya123@gmail.com ', 'maha@gmail.com', 'hi', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `patientreg`
-- 

CREATE TABLE `patientreg` (
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  PRIMARY KEY  (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `patientreg`
-- 

INSERT INTO `patientreg` VALUES ('Ammu Anu', 'ammu@gmail.com', 'xxx ', '9089898977');
INSERT INTO `patientreg` VALUES ('Jilu', 'jilu123@gmail.com', 'Namboorikandathil', '9854755872');
INSERT INTO `patientreg` VALUES ('soniya', 'marysoniya123@gmail.com', 'jhnhbbbbbb', '8899445510');
INSERT INTO `patientreg` VALUES ('Mariya Joseph', 'mariyajos@gmail.com', 'Vaakappadam House,Kedhara Road,Koovapadam,Kochi', '9847076172');
INSERT INTO `patientreg` VALUES ('Mary Benny', 'marybenny@gmail.com', 'Elavamkudy,Angamaly', '9865759820');

-- --------------------------------------------------------

-- 
-- Table structure for table `staffreg`
-- 

CREATE TABLE `staffreg` (
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  PRIMARY KEY  (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `staffreg`
-- 

INSERT INTO `staffreg` VALUES ('Remya', 'remya123@gmail.com', 'errrrrrrrrrrrrrrrrrrrrrrrrr', '9847076172');
INSERT INTO `staffreg` VALUES ('Veena', 'veena@gmail.com', 'dddddddddddddddddddddddddddddccc', '9874592365');
