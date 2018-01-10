-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2017 at 02:25 AM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appsplor_thekafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `usersapi`
--

CREATE TABLE `usersapi` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_bio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usertype` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `temp_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `temp_password_expiry_time` datetime DEFAULT NULL,
  `is_temp_password_used` tinyint(1) NOT NULL DEFAULT '0',
  `api_token` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usersapi`
--

INSERT INTO `usersapi` (`id`, `name`, `short_bio`, `email`, `username`, `usertype`, `mobile`, `password`, `gender`, `temp_password`, `temp_password_expiry_time`, `is_temp_password_used`, `api_token`, `confirmation_code`, `confirmed`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', NULL, 'raihan@gmail.com', NULL, '', '', '$2y$10$PG0ptOSOOS4/SwoySOqtQ.D3duKy6v78w3ve.WGfb43bl86QXMqgq', NULL, NULL, NULL, 0, 'ee0b490b45529a9415de7333777208c4', '29ed112be426aee6acd0ce8a1b9c14c7', 1, NULL, NULL, '2017-10-24 14:30:04', '2017-10-24 14:30:04'),
(2, '', NULL, 'raihanq@gmail.com', NULL, '', '', '$2y$10$vEdBWg3sRDzRld/ahzK6teVlkX3R2QDoa92GTVeJW84sbO6Bc7DKa', NULL, NULL, NULL, 0, 'b4d11ce15ddcdea0d5e56efaef81cde1', '6db8ca515c2f3148c170051ba7ca95be', 1, NULL, NULL, '2017-10-24 14:34:04', '2017-10-24 14:34:04'),
(3, '', NULL, 'rqaihanq@gmail.com', NULL, '', '', '$2y$10$KS40jWUembTBdR83CMoPgeg3aJc4UjZ3clMWSHq2gvTc/0R62MnG6', NULL, NULL, NULL, 0, '934dc847b13114c56d264fbaec7d8bf2', '6878c62e8edfd0a5da1c8fb6534b97eb', 1, NULL, NULL, '2017-10-24 14:34:10', '2017-10-24 14:34:10'),
(4, '', NULL, 'rqaihanqwq@gmail.com', NULL, '', '', '$2y$10$oI/GJBySSzyuFEENJMT.meU5AYcckcxecppobdzSGQ4RV5wa3V8pK', NULL, NULL, NULL, 0, '53f6e9c2c4bb41a70e073b9543df739e', '8c0ef0fc26781d06846f7038979bbbba', 1, NULL, NULL, '2017-10-24 14:37:36', '2017-10-24 14:37:36'),
(5, '', NULL, 'rqaihanqw2q@gmail.com', NULL, '', '', '$2y$10$v.rcy2A92ooq1UFLsy3ij.k4Dd5OnP1HKH9pKYEgZzzP6StaJ6W2O', NULL, NULL, NULL, 0, 'a1c3f4d06f0d4784dab0c7e3b0de1697', '4b84382644679ebdf30c06cf141f35af', 1, NULL, NULL, '2017-10-24 14:38:14', '2017-10-24 14:38:14'),
(6, '', NULL, 'rqaihanq2423w2q@gmail.com', NULL, '', '', '$2y$10$D0MVdUzLMB9qmam37rib6.eQMxGH8Ybb8UK5Pk02B1oEp3XN9Y.bu', NULL, NULL, NULL, 0, 'uZcRtfpaDbZk6S1NJvqpBxx9Y48L2Q9FTTsXe0rtdOV2T3lL8wY65ZkEtA1k', '7159e99dfc257b1d128e8254c3d7f1f4', 1, NULL, NULL, '2017-10-25 11:40:34', '2017-10-25 11:40:34'),
(7, '', NULL, 'sajan@gmail.com', NULL, '', '', '$2y$10$B3Q2yx4aK5y0GirMj3OUqehpdO8cW4zK1/Qhu/sdot8yEwFGEUQFi', NULL, NULL, NULL, 0, 'Pjrm5jSalFzwM6xKocnVIsaFPfvUFQ8KkPXHq8tuu2Gevz0EXkpKXzTOnL7G', 'f696eb177aa4ecd109c31f7274c12894', 1, NULL, NULL, '2017-10-25 11:53:48', '2017-10-25 11:53:48'),
(8, '', NULL, 'sajan1@gmail.com', NULL, '', '', '$2y$10$aE0754vBxBINvJdAuOCu2.MozRmKBzFuiJi94ylqrEm8pc26WDOlC', NULL, NULL, NULL, 0, 'ckfl9q8sJN99Xcn2sOpE1VEJTDrARiAxuSl3OXAF7M4YC9vntCeigx4IAcWy', '329245078da6800a6c41d13024c0f61c', 1, NULL, NULL, '2017-10-25 11:54:06', '2017-10-25 11:54:06'),
(9, '', NULL, 'sajan11@gmail.com', NULL, 'freelancer', '', '$2y$10$CfM1j9g.Oe.XQa24mICPs.jmCoGf73izIaGSrmN2IocvfvocYJDWi', NULL, NULL, NULL, 0, 'ot1nBOxfD8OoUTJIqnjnlZD1OF3tWySKJSBeFgHSvcStNa3RFgMdGuxYi3ee', 'ffbf6d8ab91cd6c245c6e8fe4dedf35b', 1, NULL, NULL, '2017-10-25 13:07:33', '2017-10-25 13:07:33'),
(10, '', NULL, 'sajan111@gmail.com', NULL, 'client', '', '$2y$10$pgJXUArl59aBfehwTKU.UOOd9vQsWaEnfQl3Mkm/Vpq4oNRljWpV2', NULL, NULL, NULL, 0, 'ZgrZX0k8mtDIk3tu4NxETBZCWswQPnj1E1dCBpUHBTPmMp3JjKOHvrdAYGKf', 'a5d51bec821ba1f69222a2efe2b87d60', 1, NULL, NULL, '2017-10-25 13:07:45', '2017-10-25 13:07:45'),
(11, '', NULL, 'sajan1112@gmail.com', NULL, 'client', '', '$2y$10$ryatVa.J3x2IrT/3ofMEmOR3mq4taAsktDoIwU6S5c2XHKFmTmXF2', NULL, NULL, NULL, 0, 'uggXAjIXr4zMZZhE0YManxaOYYQGexLC1d6LOerZUC7294a6UM3t8qxIlRL1', '2f878c360f6d1b2b31fc05695601b9e2', 1, NULL, NULL, '2017-10-25 13:33:55', '2017-10-25 13:33:55'),
(12, '', NULL, 'sajan1112w@gmail.com', NULL, 'client', '', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, 0, 'JuMsRsyWyOCCltK96QHUn0LGjnLx1S7WgN9YxCI0FAke7FQGHJfOPK5s08h9', 'fcf14489c6676965d66a3e721caa3e24', 1, NULL, NULL, '2017-10-25 14:06:12', '2017-10-25 14:06:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usersapi`
--
ALTER TABLE `usersapi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usersapi_api_token_unique` (`api_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usersapi`
--
ALTER TABLE `usersapi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
