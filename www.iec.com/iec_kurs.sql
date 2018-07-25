-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 24 Tem 2018, 18:41:40
-- Sunucu sürümü: 10.1.32-MariaDB
-- PHP Sürümü: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `iec_kurs`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about_us`
--

CREATE TABLE `about_us` (
  `aboutus_id` int(11) NOT NULL,
  `basliq` varchar(250) NOT NULL,
  `altyazi` varchar(250) NOT NULL,
  `metn` text NOT NULL,
  `hakkimizda_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `about_us`
--

INSERT INTO `about_us` (`aboutus_id`, `basliq`, `altyazi`, `metn`, `hakkimizda_img`) VALUES
(23, 'Hakkimizda ', 'kicik bir aciqlama yeridir ama yazmiriq hecne :D', '<p>&nbsp;$conn = mysqli_connect(&#39;localhost&#39;,&#39;root&#39;,&#39;&#39;,&#39;iec_kurs&#39;) ;<br />\r\n&nbsp; mysqli_query($conn,&quot;set names utf8&quot;);$conn = mysqli_connect(&#39;localhost&#39;,&#39;root&#39;,&#39;&#39;,&#39;iec_kurs&#39;) ;mysqli_query($conn,&quot;set names utf8&quot;)conn = mysqli_connect(&#39;localhost&#39;,&#39;root&#39;,&#39;&#39;,&#39;iec_kurs&#39;) ;<br />\r\n&nbsp; mysqli_query($conn,&quot;set names utf8&quot;) $conn = mysqli_connect(&#39;localhost&#39;,&#39;root&#39;,&#39;&#39;,&#39;iec_kurs&#39;) ;mysqli_query($conn,&quot;set names utf8&quot;);conn = mysqli_connect(&#39;localhost&#39;,&#39;root&#39;,&#39;&#39;,&#39;iec_kurs&#39;) ;<br />\r\n&nbsp; mysqli_query($conn,&quot;set names utf8&quot;);$conn = mysqli_connect(&#39;localhost&#39;,&#39;root&#39;,&#39;&#39;,&#39;iec_kurs&#39;) ;mysqli_query($conn,&quot;set names utf8&quot;);&nbsp; $conn = mysqli_connect(&#39;localhost&#39;,&#39;root&#39;,&#39;&#39;,&#39;iec_kurs&#39;) ;<br />\r\n&nbsp; mysqli_query($conn,&quot;set names utf8&quot;);</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;$conn = mysqli_connect(&#39;localhost&#39;,&#39;root&#39;,&#39;&#39;,&#39;iec_kurs&#39;) ;<br />\r\n&nbsp; mysqli_query($conn,&quot;set names utf8&quot;);</p>\r\n\r\n<p>&nbsp;</p>\r\n', '35114102_1719461984834219_5772836126322589696_n.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_date` varchar(50) NOT NULL,
  `blog_categories` varchar(100) NOT NULL,
  `blog_basliq` varchar(250) NOT NULL,
  `blog_img` varchar(250) NOT NULL,
  `blog_text` text NOT NULL,
  `blog_hit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_date`, `blog_categories`, `blog_basliq`, `blog_img`, `blog_text`, `blog_hit`) VALUES
(1, '06/15/2018', '21', 'blog basliqiasfasdfasgawefsdaafadsfsdfsdf', 'photo2.jpg', '<p>&#39;$katagoriya&#39;,&#39;$katagoriya&#39;,&#39;$katagoriya&#39;,&#39;$katagoriya&#39;,&#39;$katagoriya&#39;,&#39;$katagoriya&#39;,</p>herhansi bir movzu yaziriq eliyirikLorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus bu yumağındiam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.\r\n', 38),
(12, '12343', '22', 'fhsdfhsdghergfhsd', 'photo2.jpg', 'hghdghaxtarsghsh', 8),
(13, '12-02-2012', '21', 'blog metn basliqi', '1789whiterumpedswift61485728896.jpg', '', 3),
(14, '07/17/2018', '22', 'blog metn basliqi', '35394194_1493086924128458_5358573559822155776_n.jpg', '<p>sdfsadgsfgfbu yumağınsgsvbeyler said @mail,ru</p>\r\n', 15),
(15, '07/10/2018', '21', 'blog digeer bir movzuda basliq', 'photo2.jpg', '<p>saddddddddddddddddddddddddddddd</p>\r\n', 10),
(16, '07/10/2018', '22', 'blog digeer bir movzuda basliq', '1789whiterumpedswift61485728896.jpg', '<p>saddddddddddddddddddddddddddddd</p>\r\n', 2),
(17, '07/01/2018', '21', 'daa besdideee', '1789whiterumpedswift61485728896.jpg', '<p>sdaaaaaaaaaaaaaaabu yumağınaaaaaaaaaaaaafffffffffffff</p>\r\n', 0),
(18, '12-02-2012', '21', 't789o78o87', 'photo2.jpg\r\n\r\n', '<p>ot8ot78ota78o</p>\r\n', 3),
(20, '07/20/2018', '22', 'bati tarihi', 'images.jpeg', '<p>Tarihi incelerken yapılabilecek en b&uuml;y&uuml;k yanlışlık, g&uuml;ncel siyasetin &ouml;nceliklerinden etkilenerek nesnellikten uzaklaşmak ve ge&ccedil;mişi yaşanan &ccedil;ağın değerleriyle yargılamaktır. Tarih, bulunmayı ve &ccedil;&ouml;z&uuml;lmeyi bekleyen bir bilinmezler yumağı ise, bu yumağın &ccedil;&ouml;z&uuml;m&uuml; i&ccedil;in girişilecek zorlu uğraşta yeri olmaması gereken tek şey; siyasi eğilimlere, duyguya ve isteme bağlı kalarak davranmaktır. Ancak, en &ccedil;ok yapılan yanlışlık da, ne yazık ki budur&hellip; D&uuml;nyanın hemen her yerinde g&ouml;r&uuml;len tarihin &ccedil;arpıtılması, Avrupa&rsquo;da neredeyse başlı başına bir uğraş dalı gibidir. Aydınlanma &ccedil;ağında, beysoylular ve varsıllaşan kentsoylular, g&ouml;sterişli saray eğlenceleri ve t&ouml;renlerde, Antik &Ccedil;ağ Grek uygarlığına hayranlık g&ouml;sterilerinde bulunuyor, ona &ouml;vg&uuml;ler d&uuml;z&uuml;yorlardı. Tarih, felsefe ve edebiyat &uuml;zerine s&ouml;yleşiler yapan bu insanlar; kazılara ya da buluntulara değil, &ccedil;arpık bir k&uuml;lt&uuml;r anlayışına dayanarak yorumlar yapıyordu.&nbsp;<strong>Prof. Niyazi Berkes</strong>, Batı&rsquo;da gelişip kurumlaşan ve doğal ki en başta T&uuml;rkler&rsquo;i hedef alan bu anlayış i&ccedil;in şunları s&ouml;ylemiştir:&nbsp;<em>&ldquo;Batı tarih&ccedil;iliği iki t&uuml;r bencilliğin hala etkisi altındadır. Biri Hıristiyan bencilliği (Christocentrism), diğeri ırk bencilliği (ethocentrism). Batı tarih&ccedil;iliğindeki bu iki bencilliğin en iyi g&ouml;stergesi &lsquo;T&uuml;rk&rsquo;t&uuml;r. T&uuml;m nesnellik &ouml;rt&uuml;leri, konu T&uuml;rk&rsquo;e gelince hemen ortadan kalkar ve Hıristiyan k&uuml;lt&uuml;r&uuml;yle Avrupa ırk&ccedil;ılığı her yandan sırıtmaya başlar. T&uuml;rk&rsquo;ten ağzı burnu &ccedil;arpılmadan s&ouml;z eden Batı tarih&ccedil;isine rastlamak g&uuml;&ccedil;t&uuml;r. Hi&ccedil;bir Batılı okuyucu da bunların &ouml;nyargılarında; nesnelliğe, bilime aykırı birşey g&ouml;rmez. Onun i&ccedil;in bunlar, evrensel ger&ccedil;eklerdir. &lsquo;T&uuml;rk&rsquo;, Batı tarih&ccedil;iliğinin bilim efendiliği &ouml;l&ccedil;&uuml;lerinin dışında kalan bir şeydir. Batılı tarih&ccedil;i bu konuda dilediği gibi konuşabilir&rdquo;</em>&hellip;</p>\r\n\r\n<p>Kaynak: METİN AYDOĞAN; &ldquo;Antik &Ccedil;ağdan K&uuml;reselleşmeye Y&ouml;netim Gelenekleri ve T&uuml;rkler&rdquo;</p>\r\n', 73),
(21, '07/27/2018', '21', 'incesenet tarixi', '6.jpg', '<p>ORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESC</p>\r\n', 82),
(25, '07/26/2018', '22', 'bugunun basligi', 'slide2.jpg', '<p>ORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESC</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h5>Baylar Ibrahimovon</h5>\r\n	2018-07-21 14:01:38\r\n\r\n	<p>Kelly Richardson Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.Kelly Richardson Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.Kelly Richardson Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n', 15),
(26, '1913-08-01', '22', 'bati tarihi', 'slide3.jpg', '<p>ORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESCORDER BY blog_id DESC</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h5>Baylar Ibrahimovon</h5>\r\n	2018-07-21 14:01:38\r\n\r\n	<p>Kelly Richardson Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.Kelly Richardson Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.Kelly Richardson Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog_categories`
--

CREATE TABLE `blog_categories` (
  `categoria_id` int(11) NOT NULL,
  `categoria_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `blog_categories`
--

INSERT INTO `blog_categories` (`categoria_id`, `categoria_name`) VALUES
(21, 'Tarix'),
(22, 'Incesenet'),
(23, 'medeniyyet'),
(24, 'Texnologiya'),
(25, 'assalam');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog_comment`
--

CREATE TABLE `blog_comment` (
  `comment_id` int(11) NOT NULL,
  `blog_id` varchar(255) NOT NULL,
  `name` varchar(250) NOT NULL,
  `comment_email` varchar(250) NOT NULL,
  `comment_IP` varchar(250) NOT NULL,
  `vaxt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `blog_comment`
--

INSERT INTO `blog_comment` (`comment_id`, `blog_id`, `name`, `comment_email`, `comment_IP`, `vaxt`, `comment_text`) VALUES
(13, '20', 'pox oldu', 'KellyRichardson@mail.ru', '::1', '2018-07-21 09:58:06', ''),
(14, '15', 'adiadimdir', 'dfgdfg@mail.ru', '::1', '2018-07-21 09:58:31', ''),
(15, '21', 'Baylar Ibrahimov', 'KellyRichardson@mail.ru', '::1', '2018-07-21 10:01:38', 'Kelly Richardson\r\nNeque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.Kelly Richardson\r\nNeque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.Kelly Richardson\r\nNeque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.'),
(16, '21', 'yoxlama', 'KellyRichardson@mail.ru', '::1', '2018-07-21 10:05:36', 'adfawefawef dvsvsd'),
(17, '21', 'baylar', 'dfgdfg@mail.ru', '::1', '2018-07-21 11:04:02', 'fwefwaef'),
(18, '21', 'fdgdfhg', 'dfgdfg@mail.ru', '::1', '2018-07-21 11:47:20', 'wfqfeqfef'),
(19, '14', 'Said-Nur', 'baylar_said@mail.ru', '::1', '2018-07-21 11:57:13', 'serhimiz bura yazildi'),
(20, '20', ' Kelly Richardson', 'KellyRichardson@mail.ru', '::1', '2018-07-21 11:58:47', 'yor, ona övgüler düzüyorlardı. Tarih, felsefe ve edebiyat üzerine söyleşiler yapan bu insanlar; kazılara ya da buluntulara değil, çarpık bir kültür anlayışına dayanarak yorumlar yapıyordu. Prof. Niyazi Berkes, Batı’da gelişip kurumlaşan ve doğal ki en başta Türkler’i hedef alan bu anlayış için şunları söylemiştir: “Batı tarihçiliği iki tür bencilliğin hala etkisi altındadır. Biri Hıristiyan bencilliği (Christocentrism), diğeri ırk bencilliği (ethocentrism). Batı tarihçiliğindeki bu iki bencilliğin en iyi göstergesi ‘Türk’tür. Tüm ne'),
(21, '20', 'Kelly Richardson', 'dfgdfg@mail.ru', '::1', '2018-07-21 12:09:23', 'or, ona övgüler düzüyorlardı. Tarih, felsefe ve edebiyat üzerine söyleşiler yapan bu insanlar; kazılara ya da buluntulara değil, çarpık bir kültür anlayışına dayanarak yorumlar yapıyordu. Prof. Niyazi Berkes, Batı’da gelişip kurumlaşan ve doğal ki e'),
(22, '21', 'Kelly Richardson', 'KellyRichardson@mail.ru', '::1', '2018-07-22 08:03:05', 'kommnetim budu'),
(23, '1', 'Baylar Ibrahimov', 'KellyRichardson@mail.ru', '::1', '2018-07-23 04:43:26', 'ne yazabileremki gul kimi movzudu'),
(24, '25', 'Kelly Richardson', 'KellyRichardson@mail.ru', '::1', '2018-07-23 18:26:59', 'Lorem ipsum dolor sit amet, consectetur adi  in libero. Lorem ipsum dolor sit amet, consectetur adi  in libero. Lorem ipsum dolor sit amet, consectetur adi  in libero. Lorem ipsum dolor sit amet, consectetur adi  in libero. Lorem ipsum dolor sit amet, consectetur adi  in libero. Lorem ipsum dolor sit amet, consectetur adi  in libero. Lorem ipsum dolor sit amet, consectetur adi  in libero.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `adress` varchar(250) NOT NULL,
  `telefon` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `worktime` varchar(250) NOT NULL,
  `gmap_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`contact_id`, `adress`, `telefon`, `email`, `worktime`, `gmap_location`) VALUES
(4, 'Elmlər Metrosunun çıxışı', '+994 70 543 2109', 'iec@mail.ru', 'Bazarertəsi - Şəmbə: 09:00 - 10:00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3121656.012188483!2d45.5133190625!3d40.17585849999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2s!4v1530295306491\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact_form`
--

CREATE TABLE `contact_form` (
  `form_id` int(11) NOT NULL,
  `adsoyad` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `metn` text NOT NULL,
  `IP_adress` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `aktivlik` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `contact_form`
--

INSERT INTO `contact_form` (`form_id`, `adsoyad`, `email`, `metn`, `IP_adress`, `date`, `aktivlik`) VALUES
(1, 'asdasd', 'beyler_said@mail.ru', '', '', '2018-06-28 19:32:06', NULL),
(2, 'cxbgbfgb', 'gfbfgbgfb', 'gfbfgbfgb', '::1', '2018-06-28 19:34:56', NULL),
(3, 'ygyg', 'weoyfgwe@mail.crf', 'nuhyyyyyyyyyyyyyyyy', '::1', '2018-06-28 19:38:45', NULL),
(4, 'bÉ™ylÉ™r', 'baylar95i@gmail.com', 'sadfsdfsdfsdaf', '::1', '2018-06-28 19:43:06', NULL),
(5, 'dfsadf', 'fasdfasdfasdf', 'sdafasdfasd', '::1', '2018-06-28 19:45:27', NULL),
(6, 'ad', 'beyler_said@mail.ru', 'adsdasd', '::1', '2018-06-28 19:46:43', NULL),
(7, 'wqs', 'emailiniz', 'wqsqwsq', '::1', '2018-06-29 09:08:40', NULL),
(8, 'süüüeüeııə', 'lıəəlış', 'ltrtrgreü', '::1', '2018-06-29 09:09:09', NULL),
(9, '', 'fyjtyj', '', '::1', '2018-07-22 07:22:06', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `courses`
--

CREATE TABLE `courses` (
  `courses_id` int(11) NOT NULL,
  `courses_name` varchar(500) NOT NULL,
  `course_text` varchar(500) NOT NULL,
  `course_qiymet` varchar(10) NOT NULL,
  `course_vaxt` varchar(30) NOT NULL,
  `kurs_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `courses`
--

INSERT INTO `courses` (`courses_id`, `courses_name`, `course_text`, `course_qiymet`, `course_vaxt`, `kurs_img`) VALUES
(14, 'başlıq', 'yazi', '123', 'saatı', 'photo7.jpg'),
(15, 'Biznes', 'biznesin idare olunmasi ve medaxil ve mexaric', '500', 'Aylıq', 'photo6.jpg'),
(16, 'marketing', 'margeting nedir ve esaslari', '150', 'Aylıq', 'photo4.jpg'),
(17, 'resm', 'ressam olaq', '345', 'Həftəlik', 'photo1.jpg'),
(18, 'yeni kurs', 'kurs yaxinlarda paylasilacaq', '150', 'Aylıq', 'photo3.jpg'),
(19, 'Riyaziyyat', 'Abituriyet  Hazırlıqları', '159azn', 'Aylıq', 'importance-of-education-3.jpg'),
(20, 'ethsth', 'thdrthrdth', '2354', 'Günlük', '174205267.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_basliq` varchar(250) NOT NULL,
  `event_altyazi` varchar(250) NOT NULL,
  `event_text` text NOT NULL,
  `event_date` varchar(30) NOT NULL,
  `event_time` varchar(30) NOT NULL,
  `event_adress` varchar(300) NOT NULL,
  `event_img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `events`
--

INSERT INTO `events` (`event_id`, `event_basliq`, `event_altyazi`, `event_text`, `event_date`, `event_time`, `event_adress`, `event_img`) VALUES
(6, 'Ümumdünya Elmi Tərəqqi günü', 'altyazisi aktiveye', '<p>herhansi bir movzu yaziriq eliyirikLoYinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında \'lorem ipsum\' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.rem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\r\n', '06/12/2018', '11:30 PM', 'seminar falan olacaq adres', 'photo2.jpg'),
(8, 'Biznesin İdarə edilməsi', 'Aktivitə alt yazısı', '<p>textloremYinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında \'lorem ipsum\' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir. falan filan</p>\r\n', '06/18/2018', '11:30 AM', 'elmler metronun yani', 'news-4.jpg'),
(9, 'Azerqaz hakkinda', '100 ildir bizimlə', '<p style=\"margin-left:0px; margin-right:0px; text-align:justify\"><br />\r\n<span style=\"font-size:12px\"><span style=\"color:#333333\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"background-color:#eff4f9\"><span style=\"font-size:10pt\"><span style=\"font-family:Arial,sans-serif\">SOCAR-ın &ldquo;Azəriqaz&rdquo; İstehsalat Birliyi tərəfindən respublika ərazisində qaz təchizatı sisteminin yenidən qurulması, kənd və qəsəbələrin qazlaşdırılması həm&ccedil;inin uzun m&uuml;ddət təbii qaz almayan yaşayış məntəqələrinin yenidən mavi yanacaqla təmin edilməsi istiqamətində g&ouml;r&uuml;lən məqsədy&ouml;nl&uuml; tədbirlərin davamı olaraq 2018-ci il iyulun 18-də Bərdə rayonunun Hacıbəyli və Kafarlı kəndlərinə təbii qazın verilməsi sakinlərin b&ouml;y&uuml;k sevincinə səbəb olub.</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:justify\"><span style=\"font-size:12px\"><span style=\"color:#333333\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"background-color:#eff4f9\"><span style=\"font-size:10pt\"><span style=\"font-family:Arial,sans-serif\">Təbii qazın verilməsi m&uuml;nasibəti ilə ke&ccedil;irilən tədbirdə rayon İcra Hakimiyyətinin və &ldquo;Azəriqaz&rdquo; İstehsalat Birliyinin təmsil&ccedil;iləri, ictimaiyyət n&uuml;mayəndələri iştirak etmişlər.&nbsp;Bildirilmişdir ki, yaşayış məntəqələrinin qazlaşdırılması &uuml;&ccedil;&uuml;n birpilləli sistem əsasında &uuml;mumi uzunluğu 13 950 metr m&uuml;xtəlif diametrli polietilen və metal borularla daşıyıcı, paylayıcı eləcə də məhəllədaxili qaz xətləri &ccedil;əkilmiş, 200 sayğac və fərdi tənzimləyici quraşdırılmışdır.</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:justify\"><span style=\"font-size:12px\"><span style=\"color:#333333\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"background-color:#eff4f9\"><span style=\"font-size:10pt\"><span style=\"font-family:Arial,sans-serif\">Yeni qazlaşdırılan yaşayış sahələrində qaz şəbəkəsinin qurulmasında &ldquo;bir pilləli&rdquo; tənzimləmə sistemi tətbiq edilmişdir ki, bu da hər bir abonentin fərdi qaz tənzimləyicidən istifadə etməsinə və istehlak&ccedil;ılara &ouml;t&uuml;r&uuml;lən qazın sabit rejimdə saxlanılmasına zəmin yaradır.</span></span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0px; margin-right:0px; text-align:justify\"><span style=\"font-size:12px\"><span style=\"color:#333333\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"background-color:#eff4f9\"><span style=\"font-size:10pt\"><span style=\"font-family:Arial,sans-serif\">Təbii qazla təmin olunan sakinlər Azərbaycan Respublikasının Prezidenti cənab İlham Əliyevə minnətdarlıqlarını bildirmişlər.&nbsp;</span></span></span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2018-08-31', '10:15 PM', 'absheron ray.mehdiabad qes, sirindil hesenquliyev ev 12', 'slide2.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `events_register`
--

CREATE TABLE `events_register` (
  `register_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `adsoyad` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefon` varchar(30) NOT NULL,
  `tehsil` varchar(255) NOT NULL,
  `ish` varchar(250) NOT NULL,
  `unvan` varchar(250) NOT NULL,
  `ip_adres` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `events_register`
--

INSERT INTO `events_register` (`register_id`, `event_id`, `adsoyad`, `email`, `telefon`, `tehsil`, `ish`, `unvan`, `ip_adres`) VALUES
(1, 0, 'beyler', 'beyler_said@mail.ru', '', '', '', '', '::1'),
(2, 0, 'sergtreg', 'beyler_said@mail.ru', '4354622346', '', '', '', '::1'),
(3, 0, '', '', '', '', '', '', '::1'),
(4, 0, '', '', '', '', '', '', '127.0.0.1'),
(5, 0, 'said', 'beyler_said@mail.ru', '0705430008', '', '', '', '::1'),
(6, 0, '', 'efs', '', '', '', '', '::1'),
(7, 0, 'said', 'beyler_said@mail.ru', '0705430008', '', '', '', '::1'),
(8, 6, 'baylar', 'edenfilmaz@gmail.com', '1234567', '', '', '', '::1'),
(9, 6, 'saidnur', 'beyler_said@mail.ru', '0705430008', 'Orta ixtisas', 'Mutexessiz', 'absheron', '::1'),
(10, 6, 'saidnur', 'beyler_said@mail.ru', '0705430008', 'Orta ixtisas', 'Mutexessiz', 'absheron', '::1'),
(11, 8, 'Rasim Imanov', 'edenfilmaz@gmail.com', '1234567', 'Orta ixtisas', 'Mutexessiz', 'absheron', '::1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `komandamiz`
--

CREATE TABLE `komandamiz` (
  `k_id` int(11) NOT NULL,
  `k_adsoyad` varchar(50) NOT NULL,
  `k_vezifesi` varchar(100) NOT NULL,
  `k_instagram` varchar(100) NOT NULL,
  `k_facebook` varchar(300) NOT NULL,
  `k_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `komandamiz`
--

INSERT INTO `komandamiz` (`k_id`, `k_adsoyad`, `k_vezifesi`, `k_instagram`, `k_facebook`, `k_img`) VALUES
(1, 'maga', 'məllim', 'füefüedfsdc_', 'üdaaffefefüe', 'team-2.jpg'),
(2, 'Rahim Mardanov', 'mellim', 'https://www.facebook.com/rehim.memmedov.758?ref=br_rs', 'https://www.facebook.com/rehim.memmedov.758?ref=br_rs', '6.jpg'),
(3, 'Rahim Mardanov', 'mellime', 'https://www.facebook.com/rehim.memmedov.758?ref=br_rs', 'https://www.facebook.com/rehim.memmedov.758?ref=br_rs', 'education.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `photogallery`
--

CREATE TABLE `photogallery` (
  `img_id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `photogallery`
--

INSERT INTO `photogallery` (`img_id`, `img`) VALUES
(26, '56fd2757150000ad000b3add.jpeg'),
(27, 'education.jpg'),
(28, 'Education_StudyingBooks-@Stokkete-lowres.jpg'),
(29, 'unnamed.jpg'),
(30, 'importance-of-education-3.jpg'),
(31, 'education.jpg'),
(32, 'politique-euro-formation-education-a387ed0502.jpg'),
(33, 'studente-fare-una-domanda-per-l-39-insegnante_1098-2922.jpg'),
(34, '10.jpg'),
(35, 'Education-960x400.jpg'),
(36, 'higher_education_2-629x354.jpg'),
(37, '6.jpg'),
(39, 'encroll-img.jpg'),
(40, 'enroll-bg.jpg'),
(41, '1.jpg'),
(42, '2.jpg'),
(43, '2.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seviyyeler`
--

CREATE TABLE `seviyyeler` (
  `seviyye_id` int(11) NOT NULL,
  `seviyye` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `seviyyeler`
--

INSERT INTO `seviyyeler` (`seviyye_id`, `seviyye`) VALUES
(1, 'Admin'),
(2, 'Editor'),
(3, 'isdifadeci');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siteayar_table`
--

CREATE TABLE `siteayar_table` (
  `ayar_id` int(11) NOT NULL,
  `site_logo` varchar(250) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `meta_desc` text NOT NULL,
  `meta_name` text NOT NULL,
  `googleWebMaster_code` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `youtube` varchar(355) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `sitebakim` tinyint(4) NOT NULL,
  `footer_text` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `siteayar_table`
--

INSERT INTO `siteayar_table` (`ayar_id`, `site_logo`, `site_title`, `meta_desc`, `meta_name`, `googleWebMaster_code`, `facebook`, `instagram`, `youtube`, `skype`, `sitebakim`, `footer_text`) VALUES
(5, 'logo.png', 'KURS', '', '', '', 'https://www.facebook.com/ibrahimov95baylar', 'https://www.instagram.com/', 'https://www.youtube.com/watch?v=abUuRqYUUaY', '', 0, 'Lorem ipsum dolor sit amet, consectetur adi  in libero. Lorem ipsum dolor sit amet, consectetur adi  in libero. ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider_table`
--

CREATE TABLE `slider_table` (
  `slider_id` int(11) NOT NULL,
  `slider_basliq` varchar(250) NOT NULL,
  `slider_ustyazi` varchar(250) NOT NULL,
  `Slider_aciqlama` varchar(500) NOT NULL,
  `slider_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `slider_table`
--

INSERT INTO `slider_table` (`slider_id`, `slider_basliq`, `slider_ustyazi`, `Slider_aciqlama`, `slider_img`) VALUES
(50, 'slider basliqi', ' slider üst yazısı', 'slider açiqlaması', 'arma-tugra-hilal.jpg'),
(51, 'Menecmentik seminari', '  IELTS sertifikatli Agayev Mustafa', 'Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. ', 'photo9.jpg'),
(52, 'Saglamliq seminari', 'SS sertifikatli Memmedov Etibar', ' okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, ', 'photo2.jpg'),
(53, '', ' ', '', 'photo2.jpg'),
(54, 'tehsil önəmlidir', ' kurs yaxşı şeydi', 'ne geldi yazuz bura guya nese aciqlamadir', 'studente-fare-una-domanda-per-l-39-insegnante_1098-2922.jpg'),
(55, 'weaaaaaaaaaaaa', ' ewffewfwefw', 'efwefwefwefwe', 'ma-education-hero-1160.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `uye_adi` varchar(50) NOT NULL,
  `uye_sifre` varchar(250) NOT NULL,
  `user_seviyyesi` enum('Admin','Editor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `user_table`
--

INSERT INTO `user_table` (`user_id`, `uye_adi`, `uye_sifre`, `user_seviyyesi`) VALUES
(7, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`aboutus_id`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Tablo için indeksler `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Tablo için indeksler `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Tablo için indeksler `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`form_id`);

--
-- Tablo için indeksler `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courses_id`);

--
-- Tablo için indeksler `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Tablo için indeksler `events_register`
--
ALTER TABLE `events_register`
  ADD PRIMARY KEY (`register_id`);

--
-- Tablo için indeksler `komandamiz`
--
ALTER TABLE `komandamiz`
  ADD PRIMARY KEY (`k_id`);

--
-- Tablo için indeksler `photogallery`
--
ALTER TABLE `photogallery`
  ADD PRIMARY KEY (`img_id`);

--
-- Tablo için indeksler `seviyyeler`
--
ALTER TABLE `seviyyeler`
  ADD PRIMARY KEY (`seviyye_id`);

--
-- Tablo için indeksler `siteayar_table`
--
ALTER TABLE `siteayar_table`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `slider_table`
--
ALTER TABLE `slider_table`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about_us`
--
ALTER TABLE `about_us`
  MODIFY `aboutus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `courses`
--
ALTER TABLE `courses`
  MODIFY `courses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `events_register`
--
ALTER TABLE `events_register`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `komandamiz`
--
ALTER TABLE `komandamiz`
  MODIFY `k_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `photogallery`
--
ALTER TABLE `photogallery`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Tablo için AUTO_INCREMENT değeri `seviyyeler`
--
ALTER TABLE `seviyyeler`
  MODIFY `seviyye_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `siteayar_table`
--
ALTER TABLE `siteayar_table`
  MODIFY `ayar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `slider_table`
--
ALTER TABLE `slider_table`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Tablo için AUTO_INCREMENT değeri `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
