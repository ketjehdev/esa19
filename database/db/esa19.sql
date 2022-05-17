-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: esa19
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `amity`
--

DROP TABLE IF EXISTS `amity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `amity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lomba` varchar(60) DEFAULT NULL,
  `regu` varchar(15) DEFAULT NULL,
  `asal_pangkalan` varchar(255) DEFAULT NULL,
  `ketua` varchar(180) DEFAULT NULL,
  `no_wa` varchar(50) DEFAULT NULL,
  `penggalang1` varchar(255) DEFAULT NULL,
  `penggalang2` varchar(255) DEFAULT NULL,
  `penggalang3` varchar(255) DEFAULT NULL,
  `penggalang4` varchar(255) DEFAULT NULL,
  `kts1` varchar(255) DEFAULT NULL,
  `kts2` varchar(255) DEFAULT NULL,
  `kts3` varchar(255) DEFAULT NULL,
  `kts4` varchar(255) DEFAULT NULL,
  `kts5` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `amity`
--

LOCK TABLES `amity` WRITE;
/*!40000 ALTER TABLE `amity` DISABLE KEYS */;
/*!40000 ALTER TABLE `amity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eduxart`
--

DROP TABLE IF EXISTS `eduxart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eduxart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lomba` varchar(125) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `no_wa` varchar(255) NOT NULL,
  `kts` varchar(255) NOT NULL,
  `bukti1` varchar(255) NOT NULL,
  `bukti2` varchar(255) NOT NULL,
  `bukti3` varchar(255) NOT NULL,
  `status` varchar(125) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eduxart`
--

LOCK TABLES `eduxart` WRITE;
/*!40000 ALTER TABLE `eduxart` DISABLE KEYS */;
/*!40000 ALTER TABLE `eduxart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kompetisi`
--

DROP TABLE IF EXISTS `kompetisi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kompetisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_lomba` varchar(255) NOT NULL,
  `lomba` varchar(255) NOT NULL,
  `ekskul` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `guide_book` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kompetisi`
--

LOCK TABLES `kompetisi` WRITE;
/*!40000 ALTER TABLE `kompetisi` DISABLE KEYS */;
INSERT INTO `kompetisi` VALUES (8,'Education','Spelling Bee','English Club','AVAILABLE','ec1.png','https://drive.google.com/file/d/1vwyildWmexnppwcsxNOHjpsHnhEqqpZb/view?usp=sharing','2022-04-17 01:32:56','2022-04-18 03:15:02'),(9,'Education','Scrabble','English Club','AVAILABLE','ec2.png','https://drive.google.com/file/d/1vy8lRscmxSC5ThcGYaV_hQgY9sHZBpfB/view?usp=sharing','2022-04-17 01:33:38','2022-04-17 01:33:38'),(10,'Sport','Mobile Legends','E-Sport','AVAILABLE','es1.png','https://drive.google.com/file/d/1w550iH87yJoclHp3nLyE6ZW_QiCUJY-j/view?usp=sharing','2022-04-17 01:34:02','2022-04-17 01:34:02'),(11,'Sport','Free Fire','E-Sport','AVAILABLE','es2.png','https://drive.google.com/file/d/1w550iH87yJoclHp3nLyE6ZW_QiCUJY-j/view?usp=sharing','2022-04-17 01:34:48','2022-04-17 01:34:48'),(12,'Amity','Pionering','Telscout','AVAILABLE','ts1.png','https://drive.google.com/file/d/1w2Z2kmdK6Bpjk504FK7JRfPFU3x5Xi5j/view?usp=sharing','2022-04-17 01:35:16','2022-04-17 01:35:16'),(13,'Amity','LCTP Pramuka','Telscout','AVAILABLE','ts2.png','https://drive.google.com/file/d/1w-HEvtodOBBcvpGPYZkGKaEZLjMInPWo/view?usp=sharing','2022-04-17 01:35:40','2022-04-17 01:35:40'),(14,'Art','Desain Poster','Creative Squad','AVAILABLE','cs1.png','https://drive.google.com/file/d/1w5qkjrbt0XU-JGCcF8l683qjGXF0mJTO/view?usp=sharing','2022-04-17 01:36:13','2022-04-17 01:36:13'),(15,'Art','Photography','Creative Squad','AVAILABLE','cs2.png','https://drive.google.com/file/d/1wjXStzEu-hpieJmKqdv1VeYbIk8oUD3m/view?usp=sharing','2022-04-17 01:36:36','2022-04-17 01:36:36'),(16,'Art','Cover Song','Mustel','AVAILABLE','mustel.png','https://drive.google.com/file/d/1w3ioEvO6q1b34SbI348ADeOsxebHECQ0/view?usp=sharing','2022-04-17 01:36:57','2022-04-17 01:36:57');
/*!40000 ALTER TABLE `kompetisi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sertifikat`
--

DROP TABLE IF EXISTS `sertifikat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sertifikat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `lomba` varchar(255) NOT NULL,
  `juara` varchar(255) NOT NULL,
  `sertifikat` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sertifikat`
--

LOCK TABLES `sertifikat` WRITE;
/*!40000 ALTER TABLE `sertifikat` DISABLE KEYS */;
/*!40000 ALTER TABLE `sertifikat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sport`
--

DROP TABLE IF EXISTS `sport`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lomba` varchar(180) NOT NULL,
  `asal_sekolah` varchar(180) NOT NULL,
  `nama_tim` varchar(180) NOT NULL,
  `ketua_tim` varchar(180) NOT NULL,
  `no_wa` varchar(50) NOT NULL,
  `id_ketua` varchar(50) NOT NULL,
  `kts_ketua` varchar(255) NOT NULL,
  `player1` varchar(180) NOT NULL,
  `id_player1` varchar(50) NOT NULL,
  `kts_player1` varchar(255) NOT NULL,
  `player2` varchar(180) NOT NULL,
  `id_player2` varchar(50) NOT NULL,
  `kts_player2` varchar(255) NOT NULL,
  `player3` varchar(180) NOT NULL,
  `id_player3` varchar(50) NOT NULL,
  `kts_player3` varchar(255) NOT NULL,
  `player4` varchar(180) DEFAULT NULL,
  `id_player4` varchar(50) DEFAULT NULL,
  `kts_player4` varchar(255) DEFAULT NULL,
  `player5` varchar(180) DEFAULT NULL,
  `id_player5` varchar(50) DEFAULT NULL,
  `kts_player5` varchar(255) DEFAULT NULL,
  `status` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sport`
--

LOCK TABLES `sport` WRITE;
/*!40000 ALTER TABLE `sport` DISABLE KEYS */;
/*!40000 ALTER TABLE `sport` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Users',
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'User',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'Neville Jeremy Onorato Laia','IT SUPPORT ESA 19','Admin','$2y$10$7DBrk32R7LkjhhC.S1mleetmkosHXFPFZI3sVcrYO.JE.yVC8ZQVC','logo esa 19.png','2022-04-19 01:52:13','2022-04-19 01:52:13'),(4,'Muhammad Ghibran Ramadhan','Ketua Panitia ESA 19','Admin','$2y$10$n5FFilGNDCdAn89VBRCy9eyKP3ykv49xvDe3jjTDD1jh5lJHM1Vua','logo esa 19.png','2022-04-19 02:02:40','2022-04-19 02:02:40'),(5,'Mhd. Fathurrahman','Koordinator Acara ESA 19','Admin','$2y$10$Y10rVYImeFlJ06EqnDCgReTPtC2vRDuvEbZP8qgnl42RKsByIu0q.','logo esa 19.png','2022-04-19 02:03:27','2022-04-19 02:03:27'),(6,'Joan Orlando Purba','Sekbid Web OSIS 2022','Admin','$2y$10$H9aWR7XiSNOGfxOz57nQy.DxGeNA/8R5FlcZboyfS6BX13Pnb.CxO','osis.PNG','2022-04-19 02:04:10','2022-04-19 02:04:10'),(7,'Meisya Amalia','Sekretaris ESA 19','Verifikator','$2y$10$ensK9vVc964VzPzd8mq5G.3tsIIlN82mbh9jrvml7q3N6GiQSVMAS','logo esa 19.png','2022-04-19 02:05:07','2022-04-19 03:53:27'),(8,'Muammar Fuadi','IT SUPPORT Education (English Club)','IT SUPPORT','$2y$10$Of0Ylez4tYEbrSUPgh1S/ekxb6qJ8hr44nd8SzA1K5PgqKDz2UcfS','LOGOEC..png','2022-04-19 02:05:56','2022-04-19 03:53:33'),(9,'Akhiva Jeven Christian','IT SUPPORT Sport (E-Sport)','IT SUPPORT','$2y$10$FDllXA8HMTrwXEKFafMzxeg3o74IDx/Ym3v99Wsgks3FcfCOfCFJ2','WhatsApp Image 2022-04-19 at 16.08.13.jpeg','2022-04-19 02:09:13','2022-04-19 02:09:13'),(10,'Radja Muhammad Hakim','IT SUPPORT Amity (Telscout)','IT SUPPORT','$2y$10$m7GQllfSWubD5YJHReS35.glfNlAE0gZ8egqoYknxV6EaYJztv9Ca','uhuy.png','2022-04-19 02:10:17','2022-04-19 03:53:40'),(11,'Ruben Siregar','IT SUPPOR Art (Creative Squad)','IT SUPPORT','$2y$10$OuG0b1mes0y2FVxM6O1oZ.LDeXVTe55pTR8pcqIE3KydHJMDV.A3K','logo cs.png','2022-04-19 02:12:04','2022-04-19 03:53:46'),(12,'Paul Daniel Jagasa Ginting','IT SUPPORT Art (Mustel)','IT SUPPORT','$2y$10$DMnOR8aq4K.qsTasYDryQutLZ1D07wbdVZ5tNo1Op6JYsT3wkzahq','WhatsApp Image 2022-04-19 at 16.26.48.jpeg','2022-04-19 02:12:35','2022-04-19 03:53:52'),(15,'Muhammad Yusuf Habibi','Users','User','$2y$10$zEJn76wjYIbnM3VFkXJ40uvPJDXTesLGrwF7HFf2n0WtmyrQ8TOXG','default.jpg','2022-04-19 23:09:45','2022-04-19 23:09:45');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-20 13:41:42
