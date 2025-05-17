-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2025 at 08:10 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kojima`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_cust` int NOT NULL,
  `nama_cust` varchar(120) NOT NULL,
  `alamat_cust` varchar(300) NOT NULL,
  `logo_cust` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_cust`, `nama_cust`, `alamat_cust`, `logo_cust`) VALUES
(1, 'PT Sugity Creatives', 'Blok J, Jl. Bali I Kawasan Industri MM No.2100 No. 17-20, Gandamekar, Cikarang Barat, Bekasi Regency, West Java 17530', 'sugity-logo.png'),
(2, 'PT. INDOSPRING, Tbk', 'Jl. Selayar Blok H6, Mekarwangi, Kec. Cikarang Bar., Kabupaten Bekasi, Jawa Barat 17530', 'siws-logo.png'),
(3, 'PT Toyota Motor Manufacturing Indonesia', 'Kawasan Industri KIIC Lot DD 1, Jl. Permata Raya, Karawang Barat, Sirnabaya, Telukjambe Timur, Karawang, Jawa Barat 41361\r\nMap of PT Toyota Motor Manufacturing Indonesia\r\n', 'tmmin-logo.png'),
(4, 'PT Autocomp Systems Indonesia (YAZAKI Group)', 'Jalan Jenderal Sudirman Kav. 10-11 (Mid Plaza 2), Jakarta, DKI Jakarta 10220, ID', 'yazaki-logo.png'),
(5, 'PT. Astra Daihatsu Motor', 'Jl. Surya Pratama, Kutanegara, Kec. Ciampel, Karawang, Jawa Barat 41363', 'adm-logo.png'),
(6, 'Mesin Giling Mantef', 'Jl. Jendral Ahmad Yani sutomo', 'customers-1747326268.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `group_comp`
--

CREATE TABLE `group_comp` (
  `id_group` int NOT NULL,
  `nama_gcomp` varchar(50) NOT NULL,
  `logo_gcomp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat_group` varchar(200) NOT NULL,
  `contactgroup_1` varchar(25) NOT NULL,
  `contactgroup_2` varchar(25) NOT NULL,
  `lokasi_gcomp` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `group_comp`
--

INSERT INTO `group_comp` (`id_group`, `nama_gcomp`, `logo_gcomp`, `alamat_group`, `contactgroup_1`, `contactgroup_2`, `lokasi_gcomp`) VALUES
(1, 'PT Echo Advanced Technology Indonesia', '7799b6d7484c46816115694879a0539c.png', 'KIM, Jl. Mitra Raya II Blok E3, Parungmulya, Kec. Ciampel, Karawang, Jawa Barat 41363', '(0267) 8631685', '', '-'),
(2, 'CIPTA GRAFIKA', '525c75288163372492e56fc0103ca0a5.jpg', 'TEMPURAN PRIDE', '085156055405', '085156055405', 'Johar'),
(8, 'Ahmad Nurseha', 'bb0f304041dc80b0ef047957531effab.jpeg', 'Bengle Metal', '085156055405', '085156055404', 'Bengle');

-- --------------------------------------------------------

--
-- Table structure for table `navbar_brand`
--

CREATE TABLE `navbar_brand` (
  `id_brand` int NOT NULL,
  `nama_brand` varchar(120) NOT NULL,
  `warna` varchar(120) NOT NULL,
  `link_brand` varchar(120) NOT NULL,
  `image` varchar(120) NOT NULL,
  `brand_image_status` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `navbar_brand`
--

INSERT INTO `navbar_brand` (`id_brand`, `nama_brand`, `warna`, `link_brand`, `image`, `brand_image_status`) VALUES
(1, 'KOJIMA', 'success', 'landing', 'navbrand-1747394690.png', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `navbar_menu`
--

CREATE TABLE `navbar_menu` (
  `id_menu` int NOT NULL,
  `nama_menu` varchar(120) NOT NULL,
  `link` varchar(120) NOT NULL,
  `dropdown` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `navbar_menu`
--

INSERT INTO `navbar_menu` (`id_menu`, `nama_menu`, `link`, `dropdown`) VALUES
(1, 'Home', 'landing', 'off'),
(2, 'About Us', 'landing/about', 'off'),
(3, 'Product', 'landing/product', 'off'),
(7, 'Information', 'landing/information', 'on'),
(8, 'Contact Us', 'landing/contact', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `navbar_submenu`
--

CREATE TABLE `navbar_submenu` (
  `id_submenu` int NOT NULL,
  `id_menu` int NOT NULL,
  `nama_submenu` varchar(120) NOT NULL,
  `link_submenu` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `navbar_submenu`
--

INSERT INTO `navbar_submenu` (`id_submenu`, `id_menu`, `nama_submenu`, `link_submenu`) VALUES
(1, 7, 'Achiviements', 'landing/achievements'),
(2, 7, 'Milestone', 'landing/milestones');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `devisi` varchar(128) NOT NULL,
  `sandi` varchar(256) NOT NULL,
  `role_id` int NOT NULL,
  `date_created` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `nama`, `username`, `devisi`, `sandi`, `role_id`, `date_created`) VALUES
(11, 'Admin', 'admin', 'hrd', '$2y$10$uo4CYWA/BG1y/LqfgtZ57.bWYmnRh2Fclg3FBTq7/X7e9Ac5DOCGS', 1, 1747376604),
(12, 'staff', 'staff', 'marketing', '$2y$10$5RFejPgxWket5VvH8.LijOkzA9ewMeDQ8maGEHo0LFeDFJ2mPbzOG', 2, 1747376625);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int NOT NULL,
  `nama_product` varchar(120) NOT NULL,
  `deskripsi_product` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image_product` varchar(120) NOT NULL,
  `hotspot` varchar(120) NOT NULL,
  `left_hotspot` int NOT NULL,
  `right_hotspot` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `nama_product`, `deskripsi_product`, `image_product`, `hotspot`, `left_hotspot`, `right_hotspot`) VALUES
(1, 'Assist Grips', 'People hold onto these grips when riding in vehicles and getting in and out of them. The current trend is for these to be retractable so that they do not stand out. Our molding technology has been highly evaluated by the Japan Society of Polymer Processing (awarded the Japan Society of Polymer Processing “Aoki Katashi” Technical Award).', 'assist_grip.jpg', 'assistgrip', 53, 15),
(2, 'Inside Handles', 'Products that open the vehicle door from the inside. Door lock is operated by electric control with a switch, and the door opens and closes in one motion. They are also equipped with a function that allows the door to be opened and closed physically in the event that the electricity is down.', 'inside_handle.jpg', 'handle', 43, 41),
(3, 'Heater Control', 'The heater control maintains a comfortable temperature in the cabin. We develop the electronic circuits and produce the design, including the look of the nighttime lighting. We produce two types: a digital heater control and electric push-type heat control.', 'heater.jpg', 'heater', 25, 58),
(4, 'Upper Console', 'By setting the layout of items we would want to keep within reach, such as trays and cup holders, and adding decorative elements to suit the vehicle concept, we are working to enhance the product appeal of vehicle interiors.', 'upper_console.jpg', 'upperconsole', 30, 67),
(5, 'Cup Holders', 'We produce a wide variety of cup holders, including push types. We studied the shapes of plastic bottles around the world and developed a mechanism to keep the bottles from falling over. Cup holders with illumination have appeared recently, and we continue to develop these products to meet user needs.', 'cupholder.jpg', 'cupholder', 10, 68),
(6, 'Registers', 'Registers are important components used as the air duct covers inside vehicles for controlling the cabin environment. We also produce swing registers with fins that move automatically.', 'register.jpg', 'register', 2, 59);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id_category` int NOT NULL,
  `nama_category` varchar(120) NOT NULL,
  `gambar_category` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id_category`, `nama_category`, `gambar_category`) VALUES
(1, 'Clip Clamp', 'clipclamp.jpg'),
(2, 'Electric', 'electric.jpg'),
(3, 'Exterior', 'exterior.jpg'),
(4, 'Interior', 'interior.jpg'),
(14, 'TEST', 'category-1747392165.png');

-- --------------------------------------------------------

--
-- Table structure for table `profile_comp`
--

CREATE TABLE `profile_comp` (
  `id_comp` int NOT NULL,
  `nama_comp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `logo_comp` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `contact_1` varchar(15) NOT NULL,
  `contact_2` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `profile_comp`
--

INSERT INTO `profile_comp` (`id_comp`, `nama_comp`, `logo_comp`, `alamat`, `contact_1`, `contact_2`) VALUES
(1, 'PT EATI', 'logo-1747392656.jpg', 'Kawasan Mintra Industri, Karawang', '(021) 8972295', '(021) 8972294');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int NOT NULL,
  `aktif` varchar(10) NOT NULL,
  `headline` varchar(50) NOT NULL,
  `desk` varchar(100) NOT NULL,
  `tombol_text1` varchar(15) NOT NULL,
  `tombol_link1` varchar(30) NOT NULL,
  `tombol_text2` varchar(15) NOT NULL,
  `tombol_link2` varchar(30) NOT NULL,
  `image_slide` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `aktif`, `headline`, `desk`, `tombol_text1`, `tombol_link1`, `tombol_text2`, `tombol_link2`, `image_slide`) VALUES
(1, 'off', 'KOJIMA - KATI', 'Kawasan DELTA SILICON, Cikarang', 'Join Us', 'landing', 'Contact', 'landing', 'slider-1747412290.png'),
(2, 'on', 'Minecraft is My Life', 'yu join minecraft sekarang jugas', 'Gaskuy!', 'test/asd', 'Oke Lah', 'asd/asd', 'slider-1747411251.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'Administrator'),
(2, 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indexes for table `group_comp`
--
ALTER TABLE `group_comp`
  ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `navbar_brand`
--
ALTER TABLE `navbar_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `navbar_menu`
--
ALTER TABLE `navbar_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `navbar_submenu`
--
ALTER TABLE `navbar_submenu`
  ADD PRIMARY KEY (`id_submenu`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `profile_comp`
--
ALTER TABLE `profile_comp`
  ADD PRIMARY KEY (`id_comp`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cust` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `group_comp`
--
ALTER TABLE `group_comp`
  MODIFY `id_group` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `navbar_brand`
--
ALTER TABLE `navbar_brand`
  MODIFY `id_brand` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `navbar_menu`
--
ALTER TABLE `navbar_menu`
  MODIFY `id_menu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `navbar_submenu`
--
ALTER TABLE `navbar_submenu`
  MODIFY `id_submenu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `profile_comp`
--
ALTER TABLE `profile_comp`
  MODIFY `id_comp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
