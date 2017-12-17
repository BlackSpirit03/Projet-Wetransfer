
-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `id` int(10) UNSIGNED NOT NULL,
  `exp_mail` varchar(100) NOT NULL,
  `dest_mail` varchar(100) NOT NULL,
  `dest_message` text NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`id`, `exp_mail`, `dest_mail`, `dest_message`, `file_name`, `created_at`, `updated_at`) VALUES
(1, 'daniel.leger@laposte.net', 'd.leger@aformac-vichy.fr', 'ceci est mon message', 'toto.txt', '2017-12-06 08:18:12', '0000-00-00 00:00:00');
