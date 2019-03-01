-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2019 at 12:49 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haldin_natural_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(1, '21569068_1878860825775901_8984297428261797888_n.png', '2019-01-27 05:50:33', '1'),
(2, 'audience-watching-on-cinema-theater_318-46570.jpg', '2019-01-27 05:33:04', '1'),
(3, 'Handling-Finances.jpg', '2019-01-27 05:41:36', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `id` int(11) NOT NULL,
  `name` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `id` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `current_login` datetime NOT NULL,
  `page` text NOT NULL,
  `status` int(5) NOT NULL,
  `hit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id`, `name`, `password`, `current_login`, `page`, `status`, `hit`) VALUES
('admin', 'Admin MIS', '5bcefed96c53191bde0d1d90fa0e06a0', '0000-00-00 00:00:00', '', 1, 0),
('marketing.haldin', 'Marketing Haldin', '5bcefed96c53191bde0d1d90fa0e06a0', '0000-00-00 00:00:00', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_blog_record`
--

CREATE TABLE `t_blog_record` (
  `id` int(100) NOT NULL,
  `judul_blog` text NOT NULL,
  `username` text NOT NULL,
  `date_created` date NOT NULL,
  `headline` text NOT NULL,
  `content` text NOT NULL,
  `category_product` text NOT NULL,
  `tags` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_blog_record`
--

INSERT INTO `t_blog_record` (`id`, `judul_blog`, `username`, `date_created`, `headline`, `content`, `category_product`, `tags`) VALUES
(2, 'It\'s Coffee Liquid Extract!', 'Marketing Haldin', '2019-01-22', 'Haldin\'s Coffee Product', 'Produced from Indonesian origin coffee Robusta and Arabica beans, Haldin’s Coffee Extract is made for one sole purpose; delivering the sensory characteristics of a freshly brewed coffee.\r\n\r\n\r\nCoffee Extract\r\nConcentrated liquid extract, containing full characteristics of coffee, from top note to body note flavor.\r\n\r\n\r\nTechnology\r\nOur technology allows the process to capture the entire aroma profile of roasted coffee beans, whilst extracting the body profile to its optimal yields, making it a distinctive coffee extract when compared to others.\r\n\r\n\r\nCoffee Liquid Extract Application :\r\nBeverages: Syrup, Ready-to-drink beverage, Instant powder drink, Flavored water, Effervescent, Fruits beverage, Carbonated drink\r\n\r\nSweet goods: Biscuits, Cereal, Cracker, Snacks, Bakery, Instant dessert\r\n\r\nDairy: Ice cream, Milk, Yoghurt\r\n\r\nConfectionary: Hard candy, Chewing gum, Chocolate, Soft candy', 'Tea & Coffee', 'Tea');

-- --------------------------------------------------------

--
-- Table structure for table `t_category_poduct`
--

CREATE TABLE `t_category_poduct` (
  `id` varchar(20) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_category_poduct`
--

INSERT INTO `t_category_poduct` (`id`, `name`) VALUES
('PROD001', 'Tea & Coffee'),
('PROD002', 'Functional Ingredients'),
('PROD003', 'Cocoa & Vanilla'),
('PROD004', 'Essential Oil'),
('PROD005', 'Honey & Coconut'),
('PROD006', 'Cosmetic & Care Ingredients'),
('PROD007', 'Fruit & Vegetable'),
('PROD008', 'Seasoning Ingredients');

-- --------------------------------------------------------

--
-- Table structure for table `t_icon`
--

CREATE TABLE `t_icon` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_icon`
--

INSERT INTO `t_icon` (`id`, `name`, `code`) VALUES
(1, 'Coffee', '<img src=\"img/Coffee-icon.png\" alt=\"\">');

-- --------------------------------------------------------

--
-- Table structure for table `t_main_page`
--

CREATE TABLE `t_main_page` (
  `id` int(10) NOT NULL,
  `welcome_headline` text NOT NULL,
  `welcome_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_main_page`
--

INSERT INTO `t_main_page` (`id`, `welcome_headline`, `welcome_content`) VALUES
(1, 'Welcome to Haldin Natural', '<p>Our products are the building blocks that deliver exceptional top note, mouthfeel, taste and health functions inside the consumer products. At Haldin, we produce an extensive line of quality natural ingredients for our customers needed by various industries; Beverage; Dairy; Bakery; Confectionery; Cosmetic and Care</p>');

-- --------------------------------------------------------

--
-- Table structure for table `t_online`
--

CREATE TABLE `t_online` (
  `id` int(10) NOT NULL,
  `ip` varchar(200) NOT NULL,
  `url` varchar(30) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_online`
--

INSERT INTO `t_online` (`id`, `ip`, `url`, `time`, `date`) VALUES
(6, '::1', '/haldinnatural/cpanel/login.ph', '09:51:31', '2019-01-24'),
(7, '', '/haldinnatural/cpanel/login.ph', '09:52:43', '2019-01-24'),
(8, '', '/haldinnatural/cpanel/login.ph', '09:54:45', '2019-01-24'),
(9, '', '/haldinnatural/cpanel/login.ph', '10:59:25', '2019-01-24'),
(10, '', '/haldinnatural/cpanel/login.ph', '11:07:10', '2019-01-24'),
(11, '', '/haldinnatural/cpanel/login.ph', '11:07:17', '2019-01-24'),
(12, '', '/haldinnatural/cpanel/login.ph', '11:07:51', '2019-01-24'),
(13, '', '/haldinnatural/cpanel/login.ph', '11:08:07', '2019-01-24'),
(14, '', '/haldinnatural/cpanel/login.ph', '11:29:24', '2019-01-24'),
(15, '', '/haldinnatural/cpanel/login.ph', '11:33:42', '2019-01-24'),
(16, '', '/haldinnatural/cpanel/login.ph', '11:35:31', '2019-01-24'),
(17, '', '/haldinnatural/cpanel/login.ph', '13:26:34', '2019-01-24'),
(18, '', '/haldinnatural/cpanel/login.ph', '13:33:48', '2019-01-24'),
(19, '', '/haldinnatural/cpanel/login.ph', '13:48:09', '2019-01-24'),
(20, '', '/haldinnatural/cpanel/login.ph', '16:15:39', '2019-01-24'),
(21, '', '/haldinnatural/cpanel/login.ph', '17:44:49', '2019-01-24'),
(22, '', '/haldinnatural/cpanel/login.ph', '20:50:27', '2019-01-24'),
(23, '', '/haldinnatural/cpanel/login.ph', '08:13:49', '2019-01-25'),
(24, '', '/haldinnatural/cpanel/login.ph', '10:12:48', '2019-01-25'),
(25, '', '/haldinnatural/cpanel/login.ph', '11:09:29', '2019-01-25'),
(26, '', '/haldinnatural/cpanel/login.ph', '16:38:25', '2019-01-25'),
(27, '', '/haldinnatural/cpanel/login.ph', '20:24:58', '2019-01-26'),
(28, '', '/haldinnatural/cpanel/login.ph', '20:50:13', '2019-01-26'),
(29, '', '/haldinnatural/cpanel/login.ph', '05:31:27', '2019-01-27'),
(30, '', '/haldinnatural/cpanel/login.ph', '05:36:26', '2019-01-27'),
(31, '', '/haldinnatural/cpanel/login.ph', '10:08:11', '2019-01-27'),
(32, '', '/haldinnatural/cpanel/login.ph', '10:12:45', '2019-01-27'),
(33, '', '/haldinnatural/cpanel/login.ph', '21:46:44', '2019-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `t_our_product`
--

CREATE TABLE `t_our_product` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `file_name` text NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_our_product`
--

INSERT INTO `t_our_product` (`id`, `name`, `file_name`, `uploaded_on`, `status`) VALUES
(1, 'Tea & Coffee', 'Haldin Product-01.png', '2019-01-27 09:00:46', '1'),
(2, 'Functional Ingredients', 'Haldin Product-02.png', '2019-01-27 10:41:05', '1'),
(3, 'Essential Oil', 'Haldin Product-04.png', '2019-01-27 08:46:12', '1'),
(4, 'Cocoa & Vanilla', 'Haldin Product-03.png', '2019-01-27 08:51:00', '1'),
(5, 'Honey & coconut', 'Haldin Product-05.png', '2019-01-27 08:54:53', '1'),
(6, 'Cosmetic & Care', 'Haldin Product-06.png', '2019-01-27 09:00:30', '1'),
(7, 'Fruit & Vegetable', 'Haldin Product-07.png', '2019-01-27 09:03:27', '1'),
(8, 'Seasoning Ingredients', 'Haldin Product-08.png', '2019-01-27 09:05:08', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_product`
--

CREATE TABLE `t_product` (
  `id` int(10) NOT NULL,
  `product` text NOT NULL,
  `story` text NOT NULL,
  `content1` text NOT NULL,
  `content2` text NOT NULL,
  `content3` text NOT NULL,
  `content4` text NOT NULL,
  `content5` text NOT NULL,
  `jenis_product1` text NOT NULL,
  `content_product1` text NOT NULL,
  `jenis_product2` text NOT NULL,
  `content_product2` text NOT NULL,
  `jenis_product3` text NOT NULL,
  `content_product3` text NOT NULL,
  `jenis_product4` text NOT NULL,
  `content_product4` text NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_product`
--

INSERT INTO `t_product` (`id`, `product`, `story`, `content1`, `content2`, `content3`, `content4`, `content5`, `jenis_product1`, `content_product1`, `jenis_product2`, `content_product2`, `jenis_product3`, `content_product3`, `jenis_product4`, `content_product4`, `status`) VALUES
(1, 'Tea', '<p>Haldin combines state of the art processing with the highest quality raw materialsto produce pure tea concetrated liquid and spray dried products. In order to fulfill the needs of our customers, Haldin produces several distinct lines of liquid products, essence, natural concentrates, extracts, and spray dried extract</p>', '<p>Made to perfection using the best raw materials, the right process, and the best technology, Haldin&#39;s Tea Extracts provides the essential top note and most intense tea flavor, resembling that to a freshly brewed tea. From green tea to black tea, from liquid extracts to spray dried extracts, our products are natural, yet consistent in quality, and naturally safe.Available in form of Essence, Concentrate, Extract, and Spray Dried.</p>', '', '', '', '', 'Tea Essenstrateâ„¢', '<p>A proprietary of Haldin involving a non-heated concentration method for aromatic volatile to provide an enchanced natural flavor.</p>', 'Tea Essence', '<p>Enchance your products with intense flavor and aroma. The tea essence, which provides the essential top note and most intense natural flavor of tea, is made to meet market needs for a strong aroma, which enriches, improves, and differentiates customers products.</p>', 'Tea Concentrate & Extract', '<p>Brings the essence of tea and delivers the entire flavor profile of the tea. Haldin&rsquo;s natural tea concentrate and extract contain both the top note essence of the natural product and the body notes of the tea it self; some of which could be bitterness, sweetness, or acidity.</p>', 'Tea Spray Dried', '<p>Naturally stable, easy and cost-effective to transport, without ever have to worry about the loss of quality. Tea Spray dried extract offers a number of advantages to the user. It can also be used in dry mixes. Haldin spray dries its tea extracts to produce tea powder extracts for use mainly in tea beverage related products.</p>', 1),
(2, 'Coffee', 'Haldin combines state of the art processing with the highest quality raw materialsto produce pure tea concetrated liquid and spray dried products. In order to fulfill the needs of our customers, Haldin produces several distinct lines of liquid products, essence, natural concentrates, extracts, and spray dried extracts.', 'Produced from Indonesian origin Coffee Robusta & Arabica beans, Haldinâ€™s Coffee Extract is made for one soul purpose; resembling the sensory characterisÂ­tics of a freshly brewed coffee. Our technology allows the process to capture the entire aroma profile of roasted coffee beans, whilst extracting the body to its optiÂ­mal yield, making it a distinctive coffee extract compared to others. Available in Coffee Essence, Coffee Concentrate, and Coffee Extract', '', '', '', '', 'Coffee Concentrate', 'Natural coffee concentrate contains the body note that provides the entire coffee profile.', 'Coffee Essence', ' Coffee Essence offers a distinctive coffee aroma, used extensively to enhance the coffee related products distinctive aromas and tastes. It is natural, simple, and cost effective for the use in coffee beverage formulations which requires a more â€œrealâ€ coffee characteristics in the end product.', 'Coffee Extract', 'Haldinï¿½s natural coffee extract contain both the top note essence of the natural product and the body notes of the coffee, these natural concentrates provide the entire flavor profile of coffee. These products are mainly used as building blocks ingredients for coffee ready to drinks, candies, and bakery fillings & toppings.', '', '', 1),
(3, 'Functional Ingredients', 'Haldin combines state of the art processing with the highest quality raw materials to produce liquid & spray dried products', 'Other Haldin powder extracts such as roselle, pandan, tamarind, and ginger, represent the exotic and the uniqueness of products characteristic to Indonesia; suitable for those in the flavoring and F&B industries', 'Extracting goodness and key characteristics from natural plant concentrated liquids and transforming them into dried extracts demands a combination of expertise, experience, and technology.', 'Haldin spray dries its natural extracts to produce powder extracts for use in foods, beverages, health foods, and pharmaceuticals applications. With its existing range of product variants, Haldin is capable of fulfilling demand for many types of product. Key spray dried products include sour lime, guarana, and ginger powder extract.', 'For pharmaceutical use, Haldin serves the market with products such as; red ginger, eurycoma longifolia, and guava leaf extracts, which are being standardized for its active constituents, making it reliable and dependable for promoting specific health benefits. Other added value features include; product textures, particle size, and water-soluble based products, which can be easily blended with other ingredients.', 'Other Haldin powder extracts such as roselle, pandan, tamarind, and ginger, represent the exotic and the uniqueness of products characteristic to Indonesia; suitable for those in the flavoring and F&B industries.', '', '', '', '', '', '', '', '', 1),
(4, 'Essential Oil', '<p style=\"text-align: center;\"><em>Essential Oils were initially produced in Egypt, as early as 3,500 BC. They were used extensivelly for aromatherapy in religion, as well as for medicinal purposes. They were followed bu the Chinese and Indians, who used essential oils for armoatherapy massage as a treatment and promoted them for health and the power of their fragrance. Since the late 1970 and early 1980&#39;s the use of essential oil has become a major part of alternative and holistic health systems, and has a huge beneficial usage across the world.&nbsp;</em></p><p style=\"text-align: center;\"><br></p>', '<p style=\"text-align: justify;\">Today the use of essential oils has expanded into wider applications. Not only well known for their health benefits, they also make an important contribution in the flavor and fragrance areas. Essential oils also play significant roles in cosmetics, perfumery, aromatherapy, personal care, and to a lesser extent, in household, cleaning agents and toiletries.</p><p style=\"text-align: justify;\">Indonesia, as one of the world&rsquo;s largest producers of essential oils, has long been producing key essential oils for the world market. Some of the better known include: citronella, nutmeg, ginger, and ylang ylang. More recently as numerous bo&Acirc;&shy;tanical plants native to Indonesia have been studied and their functional properties been better appreciated, more essential oils have been introduced andhave started to be widely used. Amongst them are: patchouli, kaffir lime, sandalwood, cajuput, cananga, clove bud, and galangal.</p>', '<p style=\"text-align: justify;\">Essential oils, as the name refers, are concentrated hydrophobic liquids contain&Acirc;&shy;ing volatile aromatic compounds, which are extracted from natural plants. The botanical parts used to produce essential oils vary, from roots, rhizomes, bark or buds, which are further processed depending on what type of plant is used. However, the basic and the most appropriate extraction methods are by distillation or solvent extraction. Large amounts of botanical material are used to extract the oils, since some plants have very low yields of oil contained in their specialized oil cells.</p><p style=\"text-align: justify;\">Haldin as one of Indonesia&rsquo;s leading extract producers has kept at the forefront in utilizing these rich Indonesian sources, by producing, maintaining, and distributing essential oils globally.</p><p style=\"text-align: justify;\">Haldin essential oils are exhibit the same degree of purity and the same high standard of quality.</p>', '', '', '', '', '', '', '', '', '', '', '', 1),
(5, 'Cocoa', '<p>Cocoa has commonly been used to replicate chocolate flavor in formulations simply because genuine chocolate flavors have not been available.</p>', '<p style=\"text-align: justify;\">For cocoa derivative products, Haldin specializes in producing cocoa extracts. Compared to familiar known cocoa powder, cocoa extract has the advantage in its solubility, making it a preferable ingredients for cocoa application products, which in the in the production process simplifies the formulation and ingredients mixing steps. Additionally, it is more intense in flavor and nearly fat free.</p><p style=\"text-align: justify;\">Haldin&rsquo;s Cocoa Extract is available in two forms; liquid and spray dried powder, which, and standardized to contain minimum active compound of polyphenols and naturally occurring theobromine.</p>', '', '', '', '', 'Cocoa Liquid Extract', '<p>This involves the food grade alcoholic extraction of soluble components from cocoa liquor. The extraction is then concentrated into fine liquid cocoa with a strong cocoa aroma, chocolate color and deep, rich flavour. The extract is water soluble. The product is Halal certified.</p>', 'Chocolate Liquid Extract', '<p style=\"text-align: right;\">Haldin chocolate extract is processes to retain the &ldquo;volatile top notes&rdquo; present in raw cocoa beans. Sugar is combined to this extract. Chocolate extract replaces the flavour and aromas which are lost when the beans are processed with heat and pressure. Water soluble and rich chocolate colored this extract is economical efficient in all manufacturing of chocolate products.</p>', 'Cocoa Spray Dried Powder', '<p>Extracted and concentrated with Haldin unique technology and process. It retains high antioxidant theobromine and strong cocoa aroma, completely water soluble and leaves no sediment. The product is Halal certified.</p>', '', '', 1),
(6, 'Vanilla', '<p>Vanilla is the most widely used flavoring in the world, vanilla is a member of the orchida familty. Vanilla originates from Mexico where it was highly prized by The Ancient Aztec Totonaco Indians. Spanish conquistadors brought it to Europe from where it was introduced to French possessions in the tropics.</p>', '<p style=\"text-align: justify;\">Today, Indonesia is the world&rsquo;s third biggest grower of vanilla. Vanilla grows across the Archipelago but predominantly in Bali, Sulawesi, and Java.</p><p style=\"text-align: justify;\">Like fine wine, vanilla needs careful handling and aging to produce the best result. After harvesting, the green pods are blanched and then fermented, a process which turns the natural glucocytes in the beans to vanillin, which gives vanilla, its distinctive flavor notes. The beans are then dried naturally in the shade and cured for several months until they are ready to be used.</p><p style=\"text-align: justify;\">Demand for this superb product range from manufacturers of premium ice creams and beverages, up to the chefs of fine restaurants and specialist bakeries. To meet all their needs Haldin offers several types of pure vanilla extracts; all characterized by their pleasant flavor and varied functionality.</p>', '<p style=\"text-align: justify;\">Haldin sources vanilla beans from all the key areas of Indonesia. Involved in their cultivation, picking, and processing, Haldin selects the best beans for its range of vanilla products from single and double fold vanilla extracts, vanilla 10, 20, and 30 folds, vanilla oleoresin and vanilla powder.</p><p style=\"text-align: justify;\">An essential ingredient in so many of the world&rsquo;s favorite products, vanilla is widely used by the food and beverage industry, adding its smooth sweetness to ice creams and dairy products, confectionary, baked and frozen foods, and drinks. Vanilla is also used by the pharmaceutical industry in medicines and in tablet coatings, as well as playing a calming role in aromatherapy, in which vanilla oil is used to induce a state of calm</p>', '', '', '', 'Vanilla Extract', '<p>Haldin produces one fold to 30 fold extracts. The product is water soluble, which gives it extensive uses in various manufacturing processes.</p>', 'Vanilla Spray Dried Powder', '<p>Haldin Vanilla Spray Dried powder is water soluble. It is like brown in coloring and comes with a pleasant and lingering aroma.</p>', 'Vanilla Oleoresin', '<p>Lucious brown and is thicker than honey-almost semi solid. It is soluble in oil. Haldin Vanila Oleoresin is almost 100% moisture-free, does not easily oxidize and can have a long shelf-life stored in a cool place.</p>', '', '', 1),
(7, 'Cosmetic & Care', '<p>Haldins cosmetic care ingredients specialize in the supply of an extensive range of natural and conventional ingredients for cosmetic industry, fragrance &amp; perfumery, spa, massage, and aromatherapy applications. Our products include standardized herbal extracts and a large selection of other natural ingredients for development of personal care products.</p>', '<p style=\"text-align: justify;\">Haldin is committed to keeping abreast of the latest research in skin care and nutritional ingredients and pledges to make a difference by bridging the gap between supply and demand of the nutritive ingredients that our valued clients require.</p><p style=\"text-align: justify;\">We are eager to bring exotic natural ingredients to our customers who are at the forefront of the skin care industries. To help us achieve our goals, we have built strong relationships based on trust and mutual benefit with both our suppliers and clients.</p>', '<p style=\"text-align: justify;\">Our dedicated R&amp;D team is delighted to assist you with sourcing new products and ingredients for your formulation needs. We offer our valued clients the benefit of our strong, established relationships with manufacturers around the globe, and our capacity to source products quickly, efficiently, and cost effectively. Between our highly qualified technical staff, we work closely with our clients to ensure that the products we provide to them meet our customers needs, perform to their expectations and are delivered on time, on budget, and to the best quality. From raw material to client, we provide a whole-of service solution.</p><p style=\"text-align: justify;\">We welcome and encourage you to please let us know of any ingredients that you are seeking but are not able to locate via our website.</p>', '', '', '', '', '', '', '', '', '', '', '', 1),
(8, 'Seasoning Ingredients', '<p style=\"text-align: center;\"><em>Spices and seasonings are used for flavor, color, aroma, and preservation of food or beverages. Spices may be derived from many parts of the plant : Bark, Buds, Flowers, Fruits, Leaves, Rhizomes, Roots, Seeds, Stigmas, and Styles or The Entire Plant Tops. Spices are often dried and used in processed but complete state.</em></p>', '<p style=\"text-align: justify;\">Spices and seasoning have been used in foods for centuries. Archeologists estimate that by 50,000 B.C. primitive man had discovered that parts of certain aromatic plants help make food taste better. Using herbs and spices in cooking offers the chance to prepare exotic gourmet dishes or ethnic meals.</p><p style=\"text-align: justify;\">Haldin are dedicated to satisfying the special needs of our customers, be it a new formulation, developing customized products, and providing technical assistance. All spices and seasoning are made based on their natural aroma, color, specific texture, and taste requirements.</p><p style=\"text-align: justify;\">With a capable R&amp;D team led by highly qualified R&amp;D personnel in food industry, we are specialized in manufacturing and developing special and proprietary formula for food companies. We provide private blends for companies ranging from small businesses to large corporations.</p>', '<p style=\"text-align: justify;\">Haldin offer the highest quality seasoning and spices, we are proud to serve customers with good taste around the world. At Haldin, we take pride in providing high-quality dry blends and outstanding service to our customers.</p><p style=\"text-align: justify;\">Whether you need the assistance of our R&amp;D team, want to clean up an existing ingredient statement, or require a more reliable source to provide your current items, Haldin has the experience to help you succeed. We want to be your partner in keeping you efficient and competitive.</p>', '', '', '', '', '', '', '', '', '', '', '', 1),
(9, 'Coconut', '<p style=\"text-align: center;\"><em>To fulfill market requirements for honey and coconut products in their most basic or traditional form, Haldin provides basic materials in products of brown sugar and liquid honey. With these products, Haldin serve the global needs for those inspice &amp; seasonings, herbal beverages, health foods &amp; pharmaceuticals, and for tobacco industries.</em>&nbsp;</p>', '<p style=\"text-align: justify;\">Haldin&rsquo;s Honey and Coconut products are grown and sourced locally, where we work closely with our suppliers all around Indonesia in order to provide the best. By sharing with our suppliers, knowledge provided by our in-house expertise in the agricultural area, and giving assistance in the cultivation and end product selecting process, Haldin aims always to supply our customers with the finest honey and coconut products.</p><p style=\"text-align: justify;\">To conserve exotic, distinctive characteristic of Indonesian honey, and its functional benefits, we guarantee the purity of our honey, as the result of controlled process from upstream to downstream.</p><p style=\"text-align: justify;\">Our Coconut made delicately by the hands of thousands farmers and processed in food safety certified facilities, we ensure our coconut sugar is pure (tested with Carbon Isotope Analyser) and free from allergens.</p>', '', '', '', '', 'Coconut Sugar', '<p style=\"text-align: justify;\">Made delicately by the hands of thousands farmers and processed in food safety certified facilities, we ensure our coconut sugar is pure (tested with Carbon Isotope Analyser) and free from allergens.</p>', 'Coconut Syrup', '<p>Our coconut syrup provides convenience for industrial mixing purposes. Processed and packed aseptically, we guarantee the stability both in shelf life and quality.</p>', 'Coconut Water Powder', '<p>With advance spray drying technology, we ensure our coconut water powder is shelf stable, easily soluble and blends well with other ingredients.</p>', 'Coconut Milk Powder', '<p>Processed hygienically by state of art spray drying technology, we bring you Indonesian most versatile ingredients, coming only from the freshest coconut milk.</p>', 1),
(10, 'Honey', '', '', '', '', '', '', 'Honey', '<p>To conserve exotic, distinctive characteristic of Indonesian honey, and its functional benefits, we guarantee the purity of our honey, as the result of controlled process from upstream to downstream.</p>', 'Honey Powder', '<p>Produced from selected grades of natural honey which is converted to free-flowing powder using advanced spray dryer machines, with capacity over 3.000 tons per year. Our honey powder is suitable for infant formula, growing up milk, beverages, baked goods, and snacks.</p>', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_product_application`
--

CREATE TABLE `t_product_application` (
  `id` int(10) NOT NULL,
  `product1` text NOT NULL,
  `product1_content` text NOT NULL,
  `product2` text NOT NULL,
  `product2_content` text NOT NULL,
  `product3` text NOT NULL,
  `product3_content` text NOT NULL,
  `product4` text NOT NULL,
  `product4_content` text NOT NULL,
  `product5` text NOT NULL,
  `product5_content` text NOT NULL,
  `product6` text NOT NULL,
  `product6_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_product_application`
--

INSERT INTO `t_product_application` (`id`, `product1`, `product1_content`, `product2`, `product2_content`, `product3`, `product3_content`, `product4`, `product4_content`, `product5`, `product5_content`, `product6`, `product6_content`) VALUES
(1, 'Beverage', 'Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero', 'Dairy', 'Maecenas tempus tellus eget condimentum rhoncus sem quam semper liberos', 'Confectionery', 'Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero', 'Bakery', 'Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero', 'Cosmetic', 'Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero', 'Food Services', 'Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero');

-- --------------------------------------------------------

--
-- Table structure for table `t_why_choose_us`
--

CREATE TABLE `t_why_choose_us` (
  `id` int(10) NOT NULL,
  `point1` text NOT NULL,
  `point1_content` text NOT NULL,
  `point2` text NOT NULL,
  `point2_content` text NOT NULL,
  `point3` text NOT NULL,
  `point3_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_why_choose_us`
--

INSERT INTO `t_why_choose_us` (`id`, `point1`, `point1_content`, `point2`, `point2_content`, `point3`, `point3_content`) VALUES
(1, 'Complete Traceability', 'We adding value to local natural raw materials and all our sources are traceable', 'Our Expertise', 'We competences in Liquid extraction/ distillation & Powder Technology. Haldin operates five manufacturing sites in Indonesia uses the largest and newest of the facilities, with an annual capacity more than 20,000 tons.', 'Catering to the world market', 'Today, we ship to more than 53 countries around the world.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_blog_record`
--
ALTER TABLE `t_blog_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_category_poduct`
--
ALTER TABLE `t_category_poduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_icon`
--
ALTER TABLE `t_icon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_main_page`
--
ALTER TABLE `t_main_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_online`
--
ALTER TABLE `t_online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_our_product`
--
ALTER TABLE `t_our_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_product`
--
ALTER TABLE `t_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_product_application`
--
ALTER TABLE `t_product_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_why_choose_us`
--
ALTER TABLE `t_why_choose_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `t_blog_record`
--
ALTER TABLE `t_blog_record`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_icon`
--
ALTER TABLE `t_icon`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_online`
--
ALTER TABLE `t_online`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `t_our_product`
--
ALTER TABLE `t_our_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_product`
--
ALTER TABLE `t_product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_product_application`
--
ALTER TABLE `t_product_application`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_why_choose_us`
--
ALTER TABLE `t_why_choose_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
