-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 11:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `user_access` tinyint(1) NOT NULL DEFAULT 1,
  `state` varchar(255) NOT NULL,
  `token` varchar(255)  NULL,
  `token_expiry` varchar(255)  NULL,
  `date_add_user` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basic_frontend`
--

CREATE TABLE `basic_frontend` (
  `id` int(15) NOT NULL,
  `contact_title` varchar(255) NOT NULL,
  `contact_desc` varchar(1500) NOT NULL,
  `services_title` varchar(255) NOT NULL,
  `services_desc` varchar(1500) NOT NULL,
  `portfolio_title` varchar(255) NOT NULL,
  `portfolio_desc` varchar(1500) NOT NULL,
  `resume_title` varchar(255) NOT NULL,
  `resume_desc` varchar(1500) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_desc` varchar(1500) NOT NULL,
  `about_img` varchar(255) NOT NULL,
  `profile_desc` varchar(1500) NOT NULL,
  `profile_fullname` varchar(255) NOT NULL,
  `profile_birthdate` varchar(255) NOT NULL,
  `profile_job` varchar(1500) NOT NULL,
  `profile_website` varchar(255) NOT NULL,
  `profile_email` varchar(255) NOT NULL,
  `profile_downloadcv` varchar(255) NOT NULL,
  `skills_desc` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basic_frontend`
--

INSERT INTO `basic_frontend` (`id`, `contact_title`, `contact_desc`, `services_title`, `services_desc`, `portfolio_title`, `portfolio_desc`, `resume_title`, `resume_desc`, `about_title`, `about_desc`, `about_img`, `profile_desc`, `profile_fullname`, `profile_birthdate`, `profile_job`, `profile_website`, `profile_email`, `profile_downloadcv`, `skills_desc`) VALUES
(1, 'I\'d Love To Hear From You.', 'Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.', 'What Can I Do For You?', 'Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.', 'Check Out Some of My Works.', 'Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.', 'More of my credentials.', 'Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.', 'Let me introduce myself.', 'Lorem ipsum Exercitation culpa qui dolor consequat exercitation fugiat laborum ex ea eiusmod ad do aliqua occaecat nisi ad irure sunt id pariatur Duis laboris amet exercitation veniam labore consectetur ea id quis eiusmod.\r\n\r\n', 'profile-2.jpeg', 'Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia consectetur nisi commodo ea magna pariatur nisi cillum.', 'Idriss Boukmouche', '2005-08-16', 'Freelancer,Frontend Developer,UI/UX DESIGNER', 'https://www.codester.com/terminaldz/', 'boukemoucheidriss@gmail.com', '221.pdf', 'Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia consectetur nisi commodo ea magna pariatur nisi cillum.');

-- --------------------------------------------------------

--
-- Table structure for table `basic_setup`
--

CREATE TABLE `basic_setup` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `theme` varchar(250) NOT NULL,
  `keyword` text NOT NULL,
  `icon` varchar(250) NOT NULL,
  `background` varchar(255) NOT NULL,
  `copyright` text NOT NULL,
  `coplink` text NOT NULL,
  `google_an` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basic_setup`
--

INSERT INTO `basic_setup` (`id`, `title`, `description`, `theme`, `keyword`, `icon`, `background`, `copyright`, `coplink`, `google_an`, `address`) VALUES
(1, 'Protoflio', 'test', 'one', 'fdgfdfg,fggfh,jhjh', 'Modern Purple Marketing Logo (2).png', 'bg.jpg', 'idriss boukemouche', '', '', '1600 Amphitheatre Parkway Mountain View');

-- --------------------------------------------------------

--
-- Table structure for table `basic_social_media`
--

CREATE TABLE `basic_social_media` (
  `id` int(15) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `s_contact_email` varchar(255) NOT NULL,
  `ncp` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `ncm` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `ncf` varchar(255) NOT NULL,
  `fax_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basic_social_media`
--

INSERT INTO `basic_social_media` (`id`, `contact_email`, `s_contact_email`, `ncp`, `phone_number`, `ncm`, `mobile_number`, `ncf`, `fax_number`) VALUES
(1, 'boukemoucheidriss@gmail.com', 'idriss@boukmouche.rf.gd', '213', '558601124', '213', '795856202', '213', '778129130');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(1500) NOT NULL,
  `sent_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `sent_time`) VALUES
(36, 'Idriss Boukmouche', 'boukemoucheidriss@gmail.com', 'hi test', 'hi test thes messamge contact', '2023-02-26 22:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(15) NOT NULL,
  `portfolio_img` varchar(255) NOT NULL,
  `portfolio_title` varchar(255) NOT NULL,
  `portfolio_desc` varchar(1500) NOT NULL,
  `portfolio_types` varchar(255) NOT NULL,
  `portfolio_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `portfolio_img`, `portfolio_title`, `portfolio_desc`, `portfolio_types`, `portfolio_url`) VALUES
(19, 'liberty.jpg', 'Liberty', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit', 'WEB DEVELOPMENT', '#'),
(20, 'shutterbug.jpg', 'Shutterbug', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.\r\n\r\n', 'WEB DESIGN', '#'),
(21, 'beetle.jpg', 'Beetle', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.\r\n\r\n', 'BRANDING', '#'),
(22, 'clouds.jpg', 'Clouds', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.\r\n\r\n', 'WEB DESIGN', '#'),
(23, 'salad.jpg', 'Salad', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.\r\n\r\n', 'BRANDING', '#'),
(24, 'lighthouse.jpg', 'Lighthouse', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.\r\n\r\n', 'WEB DEVELOPMENT', '#');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(15) NOT NULL,
  `resume_type` varchar(255) NOT NULL,
  `resume_what` varchar(255) NOT NULL,
  `resume_where` varchar(255) NOT NULL,
  `resume_when_start` varchar(255) NOT NULL,
  `resume_when_end` varchar(1500) NOT NULL,
  `resume_desc` varchar(1500) NOT NULL,
  `resume_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `resume_type`, `resume_what`, `resume_where`, `resume_when_start`, `resume_when_end`, `resume_desc`, `resume_add`) VALUES
(3, '1', 'UI Designer', 'Awesome Studio', '2015-07-15', '2023-02-21', 'Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.', '2023-02-21'),
(7, '1', 'Front-end Developer', 'Super Cool Agency', '2014-07-09', '2015-06-30', 'Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.', '2023-02-21'),
(9, '1', 'Web Designer', 'Great Designs Studio', '2013-05-08', '2014-06-11', 'Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.', '2023-02-21'),
(10, '2', 'Master Degree', 'University of Life', '2015-07-08', '2023-02-21', 'Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.', '2023-02-21'),
(11, '2', 'Bachelor Degree', 'State Design University', '2013-01-30', '2015-06-11', 'Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.', '2023-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `réalisations`
--

CREATE TABLE `réalisations` (
  `id` int(15) NOT NULL,
  `projects_completed` varchar(255) NOT NULL,
  `happy_clients` varchar(255) NOT NULL,
  `awards_received` varchar(255) NOT NULL,
  `crazy_ideas` varchar(255) NOT NULL,
  `coffee_cups` varchar(255) NOT NULL,
  `hours` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `réalisations`
--

INSERT INTO `réalisations` (`id`, `projects_completed`, `happy_clients`, `awards_received`, `crazy_ideas`, `coffee_cups`, `hours`) VALUES
(1, '120', '700', '250', '300', '400', '7500');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(15) NOT NULL,
  `services_icon` varchar(255) NOT NULL,
  `services_title` varchar(255) NOT NULL,
  `services_desc` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `services_icon`, `services_title`, `services_desc`) VALUES
(12, 'icon-microphone', 'Web Development', 'Description Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem \r\n'),
(13, 'icon-umbrella', 'Branding', 'Description Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem '),
(17, 'icon-refresh', 'Andriod Developmentc', 'Description Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem '),
(29, 'icon-camera', 'Camera Men', 'Description Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem ');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(15) NOT NULL,
  `skills_name` varchar(255) NOT NULL,
  `skills_range` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skills_name`, `skills_range`) VALUES
(4, 'HTML5', '95'),
(5, 'CSS3', '85'),
(6, 'JQUERY', '70'),
(7, 'PHP', '95'),
(8, 'WORDPRESS', '75');

-- --------------------------------------------------------

--
-- Table structure for table `smtp`
--

CREATE TABLE `smtp` (
  `id` int(11) NOT NULL,
  `host` varchar(255) NOT NULL,
  `port` varchar(255) NOT NULL,
  `usernamesmtp` varchar(255) NOT NULL,
  `passwordsmtp` varchar(255) NOT NULL,
  `setfrom` varchar(255) NOT NULL,
  `smtpauth` varchar(255) NOT NULL,
  `smtpsecure` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `smtp`
--

INSERT INTO `smtp` (`id`, `host`, `port`, `usernamesmtp`, `passwordsmtp`, `setfrom`, `smtpauth`, `smtpsecure`) VALUES
(1, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `social_networking`
--

CREATE TABLE `social_networking` (
  `id` int(15) NOT NULL,
  `icon_social` varchar(255) NOT NULL,
  `social_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_networking`
--

INSERT INTO `social_networking` (`id`, `icon_social`, `social_link`) VALUES
(22, 'fa fa-facebook', 'https://www.facebook.com/idriss.boukmouche/'),
(23, 'fa fa-instagram', 'https://instagram.com/idriss_boukmouche'),
(24, 'fa fa-linkedin', 'https://www.linkedin.com/in/idriss-boukemouche-18468720a/'),
(25, 'fa fa-twitter', 'https://twitter.com/IBoukemouche');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `browser_name` varchar(255) NOT NULL,
  `browser_version` varchar(255) NOT NULL,
  `TYPE` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `user_ip` varchar(255) NOT NULL,
  `date_visited` date NOT NULL,
  `country` varchar(255) NOT NULL,
  `countryCode` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `isp` varchar(255) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_frontend`
--
ALTER TABLE `basic_frontend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_setup`
--
ALTER TABLE `basic_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_social_media`
--
ALTER TABLE `basic_social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `réalisations`
--
ALTER TABLE `réalisations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtp`
--
ALTER TABLE `smtp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_networking`
--
ALTER TABLE `social_networking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `basic_frontend`
--
ALTER TABLE `basic_frontend`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basic_setup`
--
ALTER TABLE `basic_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basic_social_media`
--
ALTER TABLE `basic_social_media`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `réalisations`
--
ALTER TABLE `réalisations`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `smtp`
--
ALTER TABLE `smtp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_networking`
--
ALTER TABLE `social_networking`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
