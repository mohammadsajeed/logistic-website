-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 12:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `log`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `pic`) VALUES
(7, 'Road Link Logistic Services Profile', '<p>sdfsdafasd</p>', 'logistic.jpeg'),
(9, 'Road Link Logistic Services Profile', '<p>Road Link Logistic Services is a private company and it is working throughout</p>\r\n\r\n<p>Afghanistan with over 10 personnel. It is main office is located in Kabul,</p>\r\n\r\n<p>Afghanistan. Road Link Logistic Services has qualified staff in logistic services</p>\r\n\r\n<p>and is a stop source for all of your logistics needs</p>\r\n\r\n<p>We facilitate and implement sourcing, acquisition planning and procurement for</p>\r\n\r\n<p>materials, supplies, equipment, vehicles for rent, houses for rent, human</p>\r\n\r\n<p>resources and other similar services for our clients. As logistics professionals,</p>\r\n\r\n<p>we also realize the tremendous savings potential of outsourcing, warehousing</p>\r\n\r\n<p>functions and that distribution and logistics needs vary. That is why it is our</p>\r\n\r\n<p>philosophy to custom-design services that include only the needs of our clients.</p>\r\n\r\n<p>Road Link is utilizing its many local and international channels for acquiring</p>\r\n\r\n<p>various goods and products necessary for executing a logistics project, or a</p>\r\n\r\n<p>power installation or rehabilitation project, and investing on its highly efficient</p>\r\n\r\n<p>handling and delivery system, Road Link Logistic Services has established a</p>\r\n\r\n<p>single-source of contact for our clients&rsquo; all logistics needs in their projects, and</p>\r\n\r\n<h3><strong>MISSION:</strong></h3>\r\n\r\n<p>Road Link Logistic Services achieved legitimacy because of having a flexible</p>\r\n\r\n<p>tendency and long term based principle for the advancement of the country. This</p>\r\n\r\n<p>company has been dedicated to the authentication from the government of Islamic</p>\r\n\r\n<p>Republic of Afghanistan. Corresponding to the legalization, this company is</p>\r\n\r\n<p>employing the rules and regulations of the government of the Islamic Republic of</p>\r\n\r\n<p>Afghanistan. As stockholder, Road Link Logistic Services commits the overall</p>\r\n\r\n<p>moments according to the predetermined code of Institution Law. This company</p>\r\n\r\n<p>reinforces the assigned right and minimizes the anti-supplemented authorization.</p>\r\n\r\n<h3><strong>GOALS:</strong></h3>\r\n\r\n<ul>\r\n	<li>Is to be a vital link in the growth and development of the client</li>\r\n	<li>Is to apply the best practices in logistics and supply chain performance</li>\r\n</ul>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; and customize a program to fit your needs</p>\r\n\r\n<ul>\r\n	<li>Is to design, implement, and manage a supply chain solution tailored to a customer&rsquo;s specific needs.</li>\r\n	<li>Is to make the enquiries more meaningful by uniquely combining excellent customer service and large-scale strength</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>and customize a program to fit your needs</p>\r\n\r\n<p>&nbsp;</p>', 'logistic.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posetion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `name`, `pic`, `posetion`) VALUES
(9, 'sajeed', 'khan.jpg', 'software engineer and database designer');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `email`, `address`) VALUES
(5, '+93 (0) 786 759 271', 'president@roadlink-group.net', 'Khojarawash Road, PD9 Kabul, Afghanistan');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2021_04_14_045710_create_sliders_table', 1),
(15, '2021_04_14_045817_create_services_table', 1),
(16, '2021_04_14_045947_create_ads_table', 1),
(17, '2021_04_14_050029_create_abouts_table', 1),
(18, '2021_04_14_050049_create_projects_table', 1),
(19, '2021_04_14_050104_create_contacts_table', 1),
(20, '2021_04_14_050659_create_socials_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `pic`, `date`) VALUES
(11, 'sadfasdf', '<p>asfdasdfasd</p>', 'logistic.jpeg', '05/08/2021');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`) VALUES
(7, 'GENERAL TRADING', '<p>This section is led by a team of high professionals digging 100 % results in</p>\r\n\r\n<p>both national and international markets. We have a very broad base and deal</p>\r\n\r\n<p>in almost all industrial and commercial items. We have a rich database of</p>\r\n\r\n<p>industrial and commercial machinery including heavy construction</p>\r\n\r\n<p>machinery, Armored Vehicles, rehabilitation, Education, Medical equipment,</p>\r\n\r\n<p>Medicines, Electronics and Electrical items, Satellite systems, Crude Oil,</p>\r\n\r\n<p>Sugar, rice, telecommunications, Computers, Food and Consumables are</p>\r\n\r\n<p>our operational specialists and are dealt with the utmost care.</p>\r\n\r\n<p>&nbsp;</p>'),
(8, 'IMPORT & EXPORT', '<p>We are proud to declare our 100% win over clients&rsquo; satisfactions in import and export.</p>\r\n\r\n<p>Our dedicated and enthusiastic team always handles consignments as Fragile Business.</p>\r\n\r\n<p>We have an excellent quality control unit. Our logistic department assures the sourcing and on time shipping of the consignments</p>\r\n\r\n<p>to the destinations thus winning the confidence of our valued customers and clients.</p>'),
(9, 'RAPID CONTINUOUS IMPROVEMENT', '<p>We are constantly striving for rapid continuous improvement;</p>\r\n\r\n<p>we are never satisfied. We are energized by change, and continuously thinking ahead and anticipating how we can better serve our customer.</p>\r\n\r\n<p>We are always examining how we can do it better,</p>\r\n\r\n<p>and engage constructively with those associated with company to gain additional knowledge and learn from past mistakes.</p>'),
(10, 'CAR SERVICES', '<ul>\r\n	<li>&nbsp;Garbage Truck</li>\r\n	<li>&nbsp;&nbsp;Vacuum Tanker Truck o Rental of JCB Forklift and Bobcat</li>\r\n	<li>&nbsp; Vehicle Spare Parts Services</li>\r\n	<li>&nbsp;&nbsp;Tires For Vehicles</li>\r\n	<li>&nbsp;&nbsp;Fuel of vehicles (diesel, petrol, kerosene and different oils of machines)</li>\r\n</ul>'),
(11, 'IT EQUIPMENT & SERVICES', '<p>o Laptop &amp; Desktop o Server&rsquo;s &amp; Share Drive&rsquo;s</p>\r\n\r\n<p>o Printer&rsquo;s &amp; Service o Internet Switch &amp; Router</p>\r\n\r\n<p>o Cisco Switch &amp; Cisco Router o Server Rack &amp; UPS</p>\r\n\r\n<p>o Backup System</p>\r\n\r\n<p>o Fiber Internet Connection</p>\r\n\r\n<p>o VSAT Internet Connection</p>\r\n\r\n<p>o Microwave Connection</p>\r\n\r\n<p>o Point To Point Connection</p>'),
(12, 'CCTV SERVICES:', '<p>o CCTV Camera&rsquo;s IP &amp; Analog</p>\r\n\r\n<p>o CCTV NVR &amp; DVR</p>\r\n\r\n<p>o CCTV Backup System</p>\r\n\r\n<p>o Alarm System</p>'),
(13, 'CABLE TV SERVICES', '<p>o Cable TV Equipment&rsquo;s &amp; Installation</p>\r\n\r\n<p>o TV Receiver Box &amp; Recharge and Installation</p>'),
(14, 'GENERATOR SERVICES:', '<p>o Rental of Generator&rsquo;s As Per Brand needs</p>\r\n\r\n<p>o Purchasing of Generator For Selling</p>\r\n\r\n<p>o Spare Parts Services</p>'),
(15, 'LOGISTIC SERVICES', '<p>o Containers forklift and terminal tractor</p>\r\n\r\n<p>o Portable containers with showers and toilets</p>\r\n\r\n<p>o Carpets o Blankets o Room heaters</p>\r\n\r\n<p>o Air conditioners</p>\r\n\r\n<p>o Water heaters</p>\r\n\r\n<p>o Fridge and freezer</p>\r\n\r\n<p>o Fire extinguisher</p>\r\n\r\n<p>o Home furniture</p>\r\n\r\n<p>o Office furniture</p>\r\n\r\n<p>o Office equipment</p>\r\n\r\n<p>o Office Stationery Supplies</p>\r\n\r\n<p>o Communication Equipment&rsquo;s</p>\r\n\r\n<p>o Plastic water storage tanks</p>\r\n\r\n<p>o Fuel supply o HESCO in Different Sizes And Types</p>\r\n\r\n<p>o Disposal of all material</p>\r\n\r\n<p>o Supply of Disposable Items</p>\r\n\r\n<p>o Fresh fruits o Dried fruits</p>\r\n\r\n<p>o Fresh vegetables</p>\r\n\r\n<p>o Grains and Cereals</p>'),
(16, 'PERSONAL PROTECTIVE EQUIPMENT (PPE):', '<p>o Head, Eye &amp; Face Protection</p>\r\n\r\n<p>o Hearing Protection</p>\r\n\r\n<p>o Respiratory Protection</p>\r\n\r\n<p>o Protective Clothing</p>\r\n\r\n<p>o Fall Protection</p>\r\n\r\n<p>o Hazardous Materials</p>'),
(17, 'MAINTENANCE SERVICES:', '<p>Our commitment to superior quality, workmanship, innovative solutions and selfpractices is the foundation of a successful project.</p>\r\n\r\n<p>We offer integrated power systems, operations and maintenance and industrial energy services for a wide range of power</p>\r\n\r\n<p>. Our operations and maintenance crew try their best to make sure things run smoothly and as it should be done and they are on 24 hours servic</p>\r\n\r\n<p>e. We offer:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>o Generator Maintenance</p>\r\n\r\n<p>o Air conditioner and cooler maintenance</p>\r\n\r\n<p>o PVC doors and windows maintenance</p>\r\n\r\n<p>o Plumbing maintenance</p>');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `pic`) VALUES
(28, 'dsffsdf', 'dsfsdf', '1619417470.png'),
(29, 'dsffsdf', 'dsfsdf', '1619417488.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sajeed', 'sajeed.naeem@gmail.com', NULL, '$2y$10$qiR3gR3TCOjz6j9yug6HMuqPu6rQwWvd9PrrkApuI7AWsX4HAWs/u', NULL, '2021-04-27 23:10:07', '2021-04-27 23:10:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
