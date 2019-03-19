-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2019 a las 17:20:31
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ryssistemas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `create_at`) VALUES
(1, 1, 'Business', '2019-03-10 06:39:39'),
(3, 1, 'Economy', '2019-03-10 18:50:27'),
(4, 1, 'Geography', '2019-03-10 19:31:17'),
(6, 1, 'technology', '2019-03-11 16:16:08'),
(8, 1, 'Science', '2019-03-12 15:12:38'),
(9, 1, 'Space', '2019-03-12 16:13:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `body`, `created_at`) VALUES
(1, 14, 'Jhon Doe', 'jdoe@gmail.com', 'Great Post!', '2019-03-10 23:13:36'),
(2, 14, 'Jane Doe', 'jane@yahoo.com', 'Thank you for this awesome post', '2019-03-10 23:55:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `titulo`, `slug`, `body`, `post_image`, `created_at`) VALUES
(9, 1, 1, 'Test Post', 'Test-Post', '<p>This is a test post</p>\r\n', 'codeigniter.jpg', '2019-03-10 08:30:31'),
(10, 2, 1, 'Post No Image', 'Post-No-Image', '<p>This is&nbsp; a post with no image</p>\r\n', 'noimage.jpg', '2019-03-10 08:45:17'),
(11, 1, 1, 'First Post', 'First-Post', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque risus vel mi porttitor, ac viverra libero placerat. Curabitur laoreet nunc nisi, nec tincidunt mauris porttitor quis. Praesent neque velit, faucibus quis dignissim non, tincidunt at velit. Etiam tempus eros et urna tincidunt dictum. Suspendisse potenti. Duis pulvinar arcu lacinia purus ullamcorper tempor eu sed nibh. Etiam sit amet convallis nisl. Aliquam id bibendum diam. In ut nisl dictum, tempus arcu in, elementum libero. Integer turpis nisi, posuere eu tincidunt ac, feugiat non eros. In ut lobortis tortor, at facilisis leo. Aliquam suscipit est metus, eget gravida tellus pretium vitae. Nam suscipit nisl a diam finibus pellentesque.</p>\r\n\r\n<p>Fusce faucibus malesuada mi at scelerisque. Pellentesque sed condimentum quam. Sed erat mi, porta nec nunc ac, rhoncus dictum lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. In sed euismod turpis, ac posuere massa. Integer vel justo in neque venenatis condimentum. Quisque pellentesque diam et diam malesuada fermentum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In finibus, velit ut dictum cursus, nibh augue tristique nisl, eu lacinia sapien erat eget nunc. Aenean et neque tempus, blandit lorem sit amet, egestas tortor. Maecenas purus lorem, eleifend sed odio sit amet, pharetra vestibulum metus. Fusce lacinia, neque ac porta efficitur, risus neque accumsan est, vitae molestie elit eros quis sem.</p>\r\n', 'bootstrap.jpg', '2019-03-10 20:01:46'),
(13, 3, 1, 'Post Three', 'Post-Three', '<p>Praesent non felis ut lacus vulputate lobortis. Nunc commodo dignissim libero, non fringilla nisl vulputate ac. Morbi libero velit, consectetur sed velit quis, fermentum faucibus est. Sed id ullamcorper risus. Ut accumsan, tellus eu tincidunt rhoncus, augue tellus vulputate odio, sit amet dapibus orci urna non ipsum. Aenean ac elit et enim venenatis congue. Aliquam ut diam dui. Sed sollicitudin varius eros vel posuere. Suspendisse eu pharetra turpis, vitae eleifend urna. Sed facilisis efficitur lobortis. Sed fringilla metus felis, in volutpat ligula scelerisque eget. Nulla vitae suscipit orci. Sed nibh sem, fermentum sit amet suscipit nec, malesuada a enim. Maecenas neque nibh, ullamcorper at varius eu, tincidunt dictum tortor. Donec ultrices risus eu rutrum semper.</p>\r\n\r\n<p>Quisque nibh lorem, convallis ac sodales et, tristique ac velit. Nulla dui augue, congue non tempus ut, cursus ac tellus. Nulla massa velit, iaculis eu augue eget, fermentum feugiat purus. Quisque a massa turpis. Donec fermentum dolor lacus, nec venenatis quam sodales malesuada. Phasellus posuere molestie sagittis. Nullam sagittis, lectus et vulputate dapibus, nulla sem placerat velit, vitae sagittis massa sem vel metus. Integer ac euismod elit. Nunc tempor velit ut nulla ultrices fringilla. Sed maximus iaculis ante in congue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc a velit sit amet eros ornare tincidunt nec at nisl.</p>\r\n', 'LetraZ.jpg', '2019-03-10 20:54:22'),
(14, 4, 1, 'Post Four', 'Post-Four', '<p>Maecenas a augue nulla. Donec non tellus porta, tincidunt nulla sit amet, malesuada enim. Cras non congue justo. Nulla ut lobortis risus, et tempus urna. Proin dapibus massa id lacus commodo, et egestas ligula suscipit. Quisque hendrerit tortor non ante mattis, at porta tellus dignissim. Nullam venenatis lectus a enim ullamcorper tristique. Donec laoreet porttitor eros. Curabitur porta nisi sed aliquet tristique. Pellentesque sit amet metus sit amet justo luctus finibus eu vel nibh. Sed aliquet urna quis elit faucibus laoreet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla at viverra tortor, at dictum orci.</p>\r\n\r\n<p>Duis est est, facilisis ut eleifend semper, vulputate non mi. Phasellus sed imperdiet orci, sed fermentum elit. Cras dictum lacus eget est finibus, at gravida orci congue. Sed vel lobortis neque. Suspendisse non aliquam odio. Sed finibus bibendum massa vel volutpat. Vestibulum venenatis dui a finibus condimentum. Vivamus ac nisi ipsum. Nulla et ultricies eros.</p>\r\n', 'apple.png', '2019-03-10 21:53:28'),
(15, 4, 1, 'Post Five', 'Post-Five', '<p>Post Five</p>\r\n', 'eclipse.png', '2019-03-11 13:40:32'),
(16, 6, 1, 'Post Six', 'Post-Six', '<p>Vestibulum sem nibh, efficitur sed purus vel, venenatis congue ex. Nulla ligula lectus, pulvinar et mauris sit amet, convallis porta mauris. Sed sit amet egestas sapien, non aliquet tortor. Vivamus tincidunt elementum nulla eget congue. Etiam quis quam nec lectus ullamcorper finibus. Ut auctor eros in enim interdum, in egestas ante condimentum. Nam nec massa nec urna pretium viverra. Pellentesque lacinia augue eu nulla maximus suscipit. Aliquam vitae massa at orci ultricies pellentesque in quis urna. Proin pretium rhoncus neque at volutpat. Sed rhoncus erat at pharetra rutrum. Cras non venenatis tellus.</p>\r\n\r\n<p>Nulla vehicula augue lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec efficitur malesuada leo facilisis ullamcorper. Nunc egestas eros ac neque pharetra, id placerat turpis ultricies. Mauris tellus lacus, dignissim in cursus id, ultrices vitae quam. Nunc libero lacus, tincidunt a dolor tempus, fermentum dictum sem. Donec faucibus aliquam volutpat. Morbi justo risus, pellentesque sit amet felis at, congue varius felis. Curabitur feugiat est eget molestie laoreet. Nam in libero id eros faucibus gravida sit amet in dolor.</p>\r\n', 'sublimetext.jpg', '2019-03-11 16:25:07'),
(17, 6, 1, 'Post Seven', 'Post-Seven', '<p><strong>Curabitur</strong> non tortor urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut sed orci consequat, volutpat dui et, lacinia nisl. Etiam id hendrerit eros. Integer convallis ex quam, sed efficitur neque efficitur et. Nam efficitur fermentum diam, quis rutrum leo luctus nec. Morbi risus felis, fermentum ut tincidunt vitae, aliquet quis leo.</p>\r\n\r\n<p>Donec accumsan, eros gravida sodales convallis, purus dolor cursus ligula, vitae finibus dui nisi a ex. Nam at augue molestie ante sagittis sodales nec id urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus a nisi eros. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc fermentum maximus bibendum. Fusce vitae efficitur libero. Quisque sagittis ultricies interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean varius erat tortor, ac imperdiet sem ullamcorper et. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce porttitor dui magna, eu tincidunt nisl condimentum at.</p>\r\n', 'youtube.jpg', '2019-03-12 14:17:14'),
(18, 1, 1, 'Post Eight', 'Post-Eight', '<p>Aliquam scelerisque mi et tortor <strong>tempus</strong>, et iaculis eros tristique. Cras sit amet est ex. Proin malesuada mi gravida nunc efficitur, feugiat porttitor sem pulvinar. Fusce feugiat, eros ac rhoncus sodales, nulla ipsum auctor sapien, et dictum libero augue vitae turpis. Mauris euismod enim vel risus tempus, eu malesuada urna tempus. Aenean egestas odio pellentesque urna porttitor, eget tempus odio posuere. Nullam id finibus enim. Ut sollicitudin sodales neque eu consectetur.</p>\r\n\r\n<p>Nullam non auctor magna, in accumsan nisl. Praesent eu velit vel ex imperdiet vehicula. Donec rutrum euismod ex in lacinia. Vivamus scelerisque, ante eu commodo tincidunt, ipsum turpis sodales dolor, eget auctor nunc nisl non nisi. Integer volutpat tincidunt mollis. Proin dui ex, mollis sit amet tincidunt sed, commodo a massa. Pellentesque vel libero nec mauris laoreet iaculis quis sed metus. Ut maximus scelerisque ornare. Sed nisl felis, efficitur vitae luctus feugiat, rhoncus sit amet libero. Donec eleifend mollis ornare.</p>\r\n', 'instagram.jpg', '2019-03-12 15:10:46'),
(19, 8, 1, 'Post Nine', 'Post-Nine', '<p>Nulla aliquet malesuada maximus. Nam consectetur non eros non efficitur. Aliquam ultricies viverra neque tincidunt volutpat. Curabitur et lacus fermentum, varius erat eu, dapibus lacus. Nulla nec turpis ex. Nulla accumsan laoreet risus rutrum blandit. Integer et placerat enim. Fusce laoreet sapien eget ultrices laoreet. Quisque feugiat eros nisl, sit amet commodo arcu aliquam eget. Ut et pulvinar massa. Quisque cursus lacus tellus, et hendrerit nulla aliquet vitae. Fusce sapien sapien, bibendum sed nunc at, cursus gravida felis. Morbi sed ante sed metus ultricies porta. Mauris sed placerat dui. Phasellus et eros lacus. Sed sed molestie metus.</p>\r\n\r\n<p>Pellentesque sed massa nisl. Duis malesuada quam molestie nibh porttitor, vel semper nulla aliquam. Nam varius orci eget vulputate tincidunt. Donec ac rhoncus mauris. Morbi in vestibulum leo. Praesent facilisis ipsum sit amet enim feugiat, venenatis ornare nulla gravida. Sed in turpis eget libero placerat finibus. Donec ornare diam vitae leo tristique, ut aliquet ipsum fermentum. Sed vulputate vulputate ultrices. Suspendisse viverra nibh ac metus rutrum, a rhoncus metus ultrices. Integer gravida tellus dolor, eget eleifend magna efficitur eget. Quisque interdum nulla ac tellus feugiat, vel luctus tortor tristique. Nunc condimentum efficitur purus, vel vehicula dui facilisis ac. Praesent sed augue purus.</p>\r\n', 'youtube.png', '2019-03-12 16:12:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `zipcode`, `email`, `username`, `password`, `register_date`) VALUES
(1, 'Administrador', '01913', 'administrador@gmail.com', 'Admin', 'e10adc3949ba59abbe56e057f20f883e', '2019-03-11 04:33:03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
