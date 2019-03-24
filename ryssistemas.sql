-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2019 a las 13:18:09
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
  `name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `create_at`) VALUES
(1, 1, 'Arte, Cultura y entretenimiento', '2019-03-10 09:39:39'),
(3, 1, 'Ciencia y tecnología', '2019-03-10 21:50:27'),
(4, 1, 'Clima', '2019-03-10 22:31:17'),
(6, 1, 'Deportes', '2019-03-11 19:16:08'),
(8, 1, 'Desastres y accidentes', '2019-03-12 18:12:38'),
(10, 1, 'Ecología', '2019-03-13 14:45:06'),
(11, 1, 'Economía y Negocios', '2019-03-15 01:52:58'),
(12, 1, 'Judicial', '2019-03-15 05:58:16'),
(13, 1, 'Política', '2019-03-15 05:58:51'),
(14, 1, 'Salud', '2019-03-15 05:59:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `body`, `created_at`) VALUES
(1, 14, 'Jhon Doe', 'jdoe@gmail.com', 'Great Post!', '2019-03-11 02:13:36'),
(2, 14, 'Jane Doe', 'jane@yahoo.com', 'Thank you for this awesome post', '2019-03-11 02:55:37'),
(3, 18, 'Paul Werness', 'pol.zn@gmail.com', 'Amazing notice! ', '2019-03-14 14:14:14'),
(4, 18, 'george pell', 'geor34@gmail.com', 'Hello! , very good notice.', '2019-03-14 14:58:04'),
(5, 20, 'Brad', 'brad@gmail.com', 'Very good publication!!', '2019-03-16 07:50:33'),
(6, 34, 'Brad', 'brad@gmail.com', 'Very good publication!!', '2019-03-16 20:46:27'),
(7, 28, 'Mark Stelance', 'mark.stl@gmail.com', 'Excellent publication !!! 👏😃👍', '2019-03-21 11:54:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_image` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `titulo`, `slug`, `body`, `post_image`, `created_at`) VALUES
(20, 1, 1, 'Alcohol, fiestas, vicio y un tesoro escondido', 'Alcohol-fiestas-vicio-y-un-tesoro-escondido', '<p>Madrid tiene un tesoro cerrado a cal y canto. Casi olvidado, no abandonado, pero acumulando polvo, alg&uacute;n escombro y un silencio que se prolonga ya casi 15 a&ntilde;os. Se trata del m&iacute;tico local de Los Gabrieles, situado en el n&uacute;mero de 17 de la calle Echegaray, a escasos 50 metros de la plaza Santa Ana. All&iacute;, entre tinieblas, se encuentra la Capilla Sixtina de los azulejos, un tesoro policromado agarrado con firmeza a sus paredes valorado en casi dos millones de euros, protegido y blindado por una comisi&oacute;n mixta de Patrimonio de la Comunidad de Madrid y del Ayuntamiento. No se puede tocar. Ni mover. Ni trasladar. Eso s&iacute;, se vende. Raz&oacute;n: la burbuja inmobiliaria, que lo desterr&oacute; a la oscuridad.&nbsp;<a href=\"https://elpais.com/elpais/2019/03/14/album/1552587476_498287.html\">Fotogaler&iacute;a: Un tesoro entre tinieblas</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>La historia de este m&iacute;tico bar madrile&ntilde;o no cabe en su anuncio de Idealista. 761 metros cuadrados construidos, 600 &uacute;tiles. Diez estancias, tres plantas, una de ellas en el s&oacute;tano. Hace esquina. Construido en 1908. &Uacute;ltima actividad, en 2008. Precio: tres millones y medio.</p>\r\n', 'arte.jpg', '2019-03-15 06:05:06'),
(21, 3, 1, 'La nueva generación del wifi se adelanta al 5G y empieza a implementarse', 'la-nueva-generacion-de-wifi-se-adelanta-al-5G-y-empieza-a-implantarse', '<p>Mientras se espera a partir del pr&oacute;ximo a&ntilde;o la llegada del prometido 5G m&oacute;vil, que multiplicar&aacute; por 10 la velocidad est&aacute;ndar del actual sistema,&nbsp;<a href=\"https://elpais.com/tecnologia/2018/06/27/actualidad/1530095255_505748.html\">la sexta generaci&oacute;n wifi ha comenzado ya</a>. Los fabricantes han empezado a comercializar los routers preparados para el nuevo est&aacute;ndar de conexi&oacute;n inal&aacute;mbrica (802.11 ax) y las compa&ntilde;&iacute;as de dispositivos tecnol&oacute;gicos preparan sus productos para un sistema que aporta m&aacute;s seguridad, m&aacute;s velocidad y mas densidad en el tr&aacute;fico, entre otras ventajas.&nbsp;<a href=\"https://elpais.com/tecnologia/2018/10/24/actualidad/1540380118_155192.html\">Samsung</a>&nbsp;ha abierto la brecha con el Galaxy S10, ya preparado para la nueva era. A la compa&ntilde;&iacute;a coreana se ha sumado Huawei.</p>\r\n\r\n<p>El 5G, la vanguardia m&oacute;vil, no sustituir&aacute; a la conexi&oacute;n inal&aacute;mbrica. Todo lo contrario<em>.</em>&nbsp;&ldquo;La nueva generaci&oacute;n de telefon&iacute;a y el wifi&nbsp;<a href=\"https://elpais.com/economia/2018/11/14/actualidad/1542219413_668685.html\">son dos v&eacute;rtices complementarios</a>&nbsp;del tri&aacute;ngulo de la tecnolog&iacute;a&rdquo;, asegura Federico Ruiz, responsable del Observatorio Nacional del 5G.</p>\r\n\r\n<p>La nueva tecnolog&iacute;a es fundamental ante la hegemon&iacute;a de la conexi&oacute;n inal&aacute;mbrica en nuestras vidas. De acuerdo al informe de Cisco&nbsp;<a href=\"https://www.cisco.com/c/en/us/solutions/collateral/service-provider/visual-networking-index-vni/mobile-white-paper-c11-520862.html\"><em>Mobile Visual Networking Index</em>,</a>&nbsp;en 2022, el tr&aacute;fico de Internet fijo y m&oacute;vil mundial ser&aacute; un 29% cableado, un 51% por wifi y un 20% por m&oacute;vil. En Espa&ntilde;a, la previsi&oacute;n es superior: 24% cableado, 64% wifi y 12% m&oacute;vil.</p>\r\n\r\n<p>Cisco ha llevado al reciente Mobile World Congres su apuerta por el wifi 6. &ldquo;El nuevo est&aacute;ndar inal&aacute;mbrico puede ofrecer de&nbsp;<a href=\"https://elpais.com/tecnologia/2018/05/21/actualidad/1526912108_636112.html\">tres a cuatro veces el rendimiento de los est&aacute;ndares anteriores</a>, latencia inferior a milisegundos y el soporte de hasta 70 dispositivos por 100 metros cuadrados&rdquo;, afirma la compa&ntilde;&iacute;a..</p>\r\n', 'tecnologia.jpg', '2019-03-15 06:10:35'),
(22, 4, 1, 'Nueve presidentes de bancos contra el cambio climático', 'Nueve-presidentes-contra-el-cambio-climatico', '<p>El combate contra el cambio clim&aacute;tico no trata solo de conseguir controlar las temperaturas del planeta. Tambi&eacute;n puede llegar a ser un motor de desarrollo y reducci&oacute;n de la pobreza en todo el mundo.&nbsp;<a href=\"https://elpais.com/elpais/2017/11/29/planeta_futuro/1511976746_129254.html\" target=\"_blank\">En la conferencia COP 23</a>&nbsp;sobre el clima celebrada en noviembre en Bonn (Alemania), los organismos multilaterales de desarrollo demostraron estar m&aacute;s comprometidos que nunca con la cuesti&oacute;n urgente y central de apoyar y financiar la b&uacute;squeda de estos objetivos cr&iacute;ticos.</p>\r\n\r\n<p>El clima pol&iacute;tico actual es incierto, pero el cambio clim&aacute;tico no lo es. Es preciso mantener el trabajo internacional conjunto en pos de una transici&oacute;n fluida a un desarrollo no contaminante y clim&aacute;ticamente inteligente. Los organismos multilaterales de desarrollo hoy son m&aacute;s importantes que nunca.</p>\r\n\r\n<p>El desarrollo inteligente tambi&eacute;n tiene sentido en lo econ&oacute;mico y en lo empresarial, sobre todo cuando se trata de la creaci&oacute;n de infraestructuras sostenibles. Ya hemos presenciado un enorme crecimiento de las energ&iacute;as renovables, con la consiguiente creaci&oacute;n de nuevas oportunidades empresariales y empleos. Muchas inversiones clim&aacute;ticamente inteligentes tambi&eacute;n tienen el potencial de reducir la contaminaci&oacute;n atmosf&eacute;rica y la congesti&oacute;n. Generar resiliencia ahora permitir&aacute; ahorrar dinero m&aacute;s tarde. Estamos comprometidos con&nbsp;<a href=\"https://elpais.com/elpais/2017/11/07/planeta_futuro/1510069313_081746.html\" target=\"_blank\">apoyar un futuro inteligente en relaci&oacute;n con el clima</a>.</p>\r\n\r\n<p>Los organismos multilaterales de desarrollo reafirmamos nuestro compromiso con el acuerdo de Par&iacute;s sobre el clima desde nuestra funci&oacute;n de facilitar la provisi&oacute;n de fondos p&uacute;blicos y privados, parte esencial de la soluci&oacute;n al problema.</p>\r\n\r\n<p>Por eso, transcurridos dos a&ntilde;os desde la exitosa negociaci&oacute;n del acuerdo de Par&iacute;s, estamos cada vez m&aacute;s alineando acciones y recursos en apoyo de los objetivos de los pa&iacute;ses en desarrollo. En julio, mediante el Plan de Acci&oacute;n del G20 para el Desarrollo Sostenible, se incorpor&oacute; el acuerdo de Par&iacute;s en las pol&iacute;ticas del G20 y se destac&oacute; que un uso m&aacute;s eficaz de la financiaci&oacute;n procedente de organismos multilaterales de desarrollo es fundamental para la innovaci&oacute;n y la inversi&oacute;n privada relacionada con el clima.</p>\r\n\r\n<p>Solo en 2016, los organismos multilaterales de desarrollo comprometieron m&aacute;s de 27.000 millones de d&oacute;lares (casi 22.000 millones de euros) para esta tarea, y seguimos intensificando nuestra labor, decididos a ampliar la financiaci&oacute;n privada y p&uacute;blica movilizada para las acciones relacionadas con el clima en la COP 23.</p>\r\n', 'clima.jpg', '2019-03-15 06:14:20'),
(23, 6, 1, 'Atlético de madrid se prepara para hacer historia', 'El-atletico-de-madrid-se-prepara-para-hacer-historia', '<p>El centro del campo de El Olivo y el del Wanda Metropolitano est&aacute;n separados por exactamente tres kil&oacute;metros en l&iacute;nea recta. En coche se tarda cinco minutos de un estadio a otro si no hay atasco en la carretera de San Blas a Coslada, que los separa. Pero para Lola Romero el camino ha sido mucho m&aacute;s largo. Casi 20 a&ntilde;os de traves&iacute;a separan el instante en el que le comunicaron la desaparici&oacute;n de la secci&oacute;n femenina del CD Coslada, donde jugaba, y lo que vivir&aacute; este domingo cuando el espectacular coliseo rojiblanco reciba con un lleno total al Atl&eacute;tico de Madrid Femenino. Hoy es directora general del l&iacute;der de la Liga Iberdrola: &ldquo;Llamamos a la puerta del club pidiendo ayuda y, aunque no era un momento f&aacute;cil porque el Atleti estaba en Segunda, nos la dieron&rdquo;, rememora sonriente y en&eacute;rgica, sentada en el banquillo del estadio colchonero. Tuvieron que empezar en Regional. Ahora son finalistas de la Copa de la Reina y pelean por lograr su tercer t&iacute;tulo liguero consecutivo. Y pueden batir el r&eacute;cord mundial de asistencia para el f&uacute;tbol femenino en el trascendental encuentro ante el FC Barcelona (13.00, GOL/Vamos). Una cita que servir&aacute; tambi&eacute;n como celebraci&oacute;n de lo conseguido en los &uacute;ltimos tres a&ntilde;os, desde que LaLiga comenz&oacute; a organizar el torneo e Iberdrola entr&oacute; como patrocinador.</p>\r\n\r\n<p>Romero y Mar&iacute;a Vargas, actual directora deportiva del Atl&eacute;tico Femenino y entrenadora del equipo durante las siete primeras temporadas, contactaron con un ojeador del club rojiblanco al que hab&iacute;an conocido de pura casualidad, tomando algo en un bar: &ldquo;&Eacute;l nos present&oacute; a V&iacute;ctor Parra y Santi Bustamante, que eran respectivamente el responsable de f&uacute;tbol base y el exresponsable de las secciones deportivas del Atl&eacute;tico, por entonces desaparecidas. De ah&iacute; fuimos directamente a Miguel &Aacute;ngel [Gil Mar&iacute;n] y Jes&uacute;s [Gil], y ellos dieron el visto bueno a hacer algo&rdquo;, recuerda Lola Romero. La entidad madrile&ntilde;a comenz&oacute; por prestar las equipaciones oficiales, el escudo y buscarles un campo de entrenamiento a las jugadoras, en Vic&aacute;lvaro. &ldquo;Nos llam&aacute;bamos Atl&eacute;tico F&eacute;minas y nos autogestion&aacute;bamos. El presupuesto era de 6.000 euros, los que nos hab&iacute;a dado la marca de ropa &iacute;ntima DIM por llevar su patrocinio en las camisetas. Hicimos unos logotipos excesivamente grandes para que tapasen al esp&oacute;nsor del equipo masculino&rdquo;. Hoy el Club Atl&eacute;tico de Madrid Femenino est&aacute; plenamente integrado en la estructura empresarial atl&eacute;tica.</p>\r\n', 'deporte.jpg', '2019-03-15 06:17:17'),
(24, 8, 1, 'Pilotos: de aviadores a gestores de sistemas', 'Pilotos-de-aviadores-a-gestores-del-sistema', '<p>El Boeing 737 es uno de los aviones m&aacute;s utilizados en el todo el mundo. Uno de los m&aacute;s eficientes y modernos de la historia de la aviaci&oacute;n. Pero su larga trayectoria de &eacute;xito en el aire se ha visto empa&ntilde;ada por dos accidentes sucedidos en apenas cinco meses en el &uacute;ltimo a&ntilde;o con su versi&oacute;n m&aacute;s moderna, el 737 MAX 8. El pasado domingo, un aparato de esta variante&nbsp;<a href=\"https://elpais.com/internacional/2019/03/10/actualidad/1552207204_526168.html\">se estrell&oacute; en Etiop&iacute;a</a>&nbsp;ocasionando la muerte de los 157 ocupantes. En octubre, otro Boeing 737 MAX 8 de la aerol&iacute;nea&nbsp;<a href=\"https://elpais.com/internacional/2018/10/29/actualidad/1540780867_546407.html\">Lion Air con 189 personas a bordo cay&oacute; al Mar de Java</a>(Indonesia). En ambos casos los siniestros tuvieron lugar minutos despu&eacute;s de despegar y en circunstancias similares, seg&uacute;n ha reconocido la aviaci&oacute;n civil estadounidense.</p>\r\n\r\n<p>Todav&iacute;a se desconocen las causas de la cat&aacute;strofe a&eacute;rea de Etiop&iacute;a (las cajas negras a&uacute;n no se han analizado), pero durante la investigaci&oacute;n del accidente de Lion Air se ha comprobado que hubo problemas con el novedoso&nbsp;<em>software</em>&nbsp;del aparato. En el despegue, el sensor indic&oacute; que el morro del avi&oacute;n estaba demasiado elevado. Fue entonces cuando se activ&oacute; el nuevo sistema, denominado MCAS e ideado para aumentar la seguridad de las maniobras del avi&oacute;n. Este mecanismo inclin&oacute; la aeronave hacia debajo de forma autom&aacute;tica para estabilizarlo. Al no tener suficiente altura, el aparato acab&oacute; estrell&aacute;ndose sin que el piloto pudiera hacer nada para enderezarlo.</p>\r\n\r\n<p>En los &uacute;ltimos a&ntilde;os la sofisticaci&oacute;n tecnol&oacute;gica de los aviones ha cambiado la forma de volar. &ldquo;Cada d&iacute;a somos m&aacute;s gestores de sistemas y menos aviadores&rdquo;, dice Javier Mart&iacute;n-Chico, director del departamento t&eacute;cnico del sindicato de pilotos Sepla. Las dos cat&aacute;strofes del Boeing 737 MAX 8 han abierto el debate sobre el elevado grado de automatizaci&oacute;n de los aviones y la importancia de la formaci&oacute;n de los pilotos en los momentos cr&iacute;ticos (como son los despegues y los aterrizajes).</p>\r\n', 'accidentes.jpg', '2019-03-15 06:21:19'),
(25, 10, 1, 'Cambios para vivir de una manera más ecológica', 'Cambios-para-vivir-de-una-manera-mas-ecologica', '<p>No solo las casas construidas de forma pasiva, con su instalaci&oacute;n de placas solares o complejos sistemas de eficiencia energ&eacute;tica, tienen la exclusiva para ser casas sostenibles, ecol&oacute;gicas, sanas. La ubicaci&oacute;n, la estructura y el entorno son un buen punto de partida, pero a veces no se puede elegir.&nbsp;<strong>Tener una casa m&aacute;s ecol&oacute;gica y menos t&oacute;xica depende de la forma de consumir y vivir, hacia un modelo m&aacute;s circular.</strong>&nbsp;&quot;Son tus h&aacute;bitos los que marcan que eres realmente sostenible&quot;, apunta Victoria de Pereda, responsable del departamento de sostenibilidad del&nbsp;<a href=\"https://www.ied.es/\" target=\"_blank\">Instituto Europeo de Dise&ntilde;o</a>&nbsp;(IED). Este es un primer punto de partida y estos 15 consejos para hacer posible el cambio de relaci&oacute;n con nuestro entorno:</p>\r\n\r\n<h3>1. Vive con menos</h3>\r\n\r\n<p>Es una de las claves de la ecolog&iacute;a y del consumo responsable. Pero no como etiqueta o moda. &quot;Es preocupante tomarlo como una tendencia&quot;, explica Alba Sueiro, autora del blog&nbsp;<a href=\"http://unavidasimple.es/\" target=\"_blank\">Una vida simple</a>. &quot;El minimalismo no es tirar lo que tienes. Es no comprar m&aacute;s de lo que necesitas aplicado a todo: a las lentejas, a los muebles y a la ropa. El ritmo del planeta no aguanta nuestro consumo. Hay que consumir menos y reutilizar... No necesitas tantas cosas que luego, adem&aacute;s, has de limpiar. Dale m&aacute;s valor a tu tiempo&quot;.</p>\r\n\r\n<h3>2. Repiensa tu despensa</h3>\r\n\r\n<p>Victoria de Pereda recomienda&nbsp;<strong>comprar en cooperativas, a proveedores conocidos, a granel y producto de proximidad</strong>. &quot;Si viene de lejos no lo compres, ten en cuenta la huella de carbono del transporte de las frutas. Consume fresco, ecol&oacute;gico y de temporada&quot;. Denuncia el abuso del consumo de prote&iacute;na animal y productos procesados. &quot;Si queremos contribuir a la sostenibilidad no podemos comer todos los d&iacute;as prote&iacute;na l&aacute;ctea y adem&aacute;s carne y pescado&quot;. En supermercados y restauraci&oacute;n cada vez hay m&aacute;s opciones ecol&oacute;gicas. Coca Cola ha tra&iacute;do a Espa&ntilde;a una l&iacute;nea de productos eco.&nbsp;<a href=\"https://www.honest-bio.es/es/home/\" target=\"_blank\">Honest</a>, ofrece caf&eacute;s y t&eacute;s ecol&oacute;gicos producidos de forma responsable, con certificaci&oacute;n.</p>\r\n', 'ecologia.jpg', '2019-03-15 06:25:51'),
(26, 11, 1, 'Nuevos delitos que acechan a las empresas', 'Estos-son-los-nuevos-delitos-que-acechan-a-las-empresas', '<p>Hace 10 d&iacute;as, el Bolet&iacute;n Oficial del Estado public&oacute; una modificaci&oacute;n del C&oacute;digo Penal que ampl&iacute;a los delitos por los que pueden ser condenadas las empresas. A partir de hoy, 3 de marzo, fecha en que entra en vigor la reforma, a los ya existentes hay que incorporar tres nuevos tipos de il&iacute;citos: la malversaci&oacute;n; la comunicaci&oacute;n ilegal de informaci&oacute;n privilegiada, y nuevas conductas vinculadas con el terrorismo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>A efectos pr&aacute;cticos, las dos primeras son las que mayor incidencia tienen en el com&uacute;n de las compa&ntilde;&iacute;as. Con el nuevo delito de malversaci&oacute;n se pretende sancionar a aquellas organizaciones que se apropien indebidamente de fondos p&uacute;blicos, o que, estando encargadas de administrarlos, lo hagan de forma desleal y causen un menoscabo al erario p&uacute;blico. La multa a estas sociedades puede ser de hasta el qu&iacute;ntuple del perjuicio causado e ir acompa&ntilde;ada, entre otras sanciones, de la inhabilitaci&oacute;n para recibir subvenciones, ayudas o contratos p&uacute;blicos.</p>\r\n\r\n<p>El reci&eacute;n incorporado art&iacute;culo 285 bis crea el delito de comunicaci&oacute;n il&iacute;cita de informaci&oacute;n privilegiada. Dicho precepto castiga a quien, posey&eacute;ndola, &ldquo;la revelare fuera del normal ejercicio de su trabajo, profesi&oacute;n o funciones, poniendo en peligro la integridad del mercado o la confianza de los inversores&rdquo;. En este caso, el castigo para la empresa que haya sacado partido de dicha conducta puede alcanzar hasta cinco veces el beneficio obtenido y provocar adem&aacute;s otras sanciones como la prohibici&oacute;n de realizar determinadas actividades.</p>\r\n', 'negocio.jpg', '2019-03-15 06:30:18'),
(27, 12, 1, 'Llega la junta más difícil del BBVA: el banco se enfrenta a todos sus fantasmas', 'Llega-la-junta-mas-dificil-del-BBVA-el-banco-se-enfrenta-a-todos-sus-fantasmas', '<p>Quiz&aacute; la decisi&oacute;n de&nbsp;<a href=\"https://elpais.com/economia/2019/03/14/actualidad/1552581255_835792.html\">Francisco Gonz&aacute;lez de hacerse a un lado y renunciar &ldquo;temporalmente&rdquo; a sus cargos</a>&nbsp;de presidente de honor en el banco y la fundaci&oacute;n pueda dar hoy a Carlos Torres, actual presidente del BBVA, algo de ox&iacute;geno para hacer frente a la junta de accionistas que celebra este viernes el banco. Pero si alguien hubiera dise&ntilde;ado un escenario m&aacute;s endiablado para cambiar un presidente y nombrar a su sustituto no habr&iacute;a encontrado mejor guion que lo que est&aacute; ocurriendo en el BBVA. Porque Torres, que solo lleva dos meses y medio al frente de la entidad, se enfrenta en Bilbao a la reuni&oacute;n de accionistas m&aacute;s tensa de esta entidad en 17 a&ntilde;os.</p>\r\n\r\n<p><a href=\"https://elpais.com/economia/2019/01/28/actualidad/1548681533_653639.html\">Sobre el banco planean supuestas escuchas ilegales</a>, pagos al polic&iacute;a m&aacute;s corrupto, el comisario jubilado Villarejo, la presi&oacute;n de Audiencia que ha abierto investigaci&oacute;n, un mal comportamiento en Bolsa, la marcha de Francisco Gonz&aacute;lez (FG) con una pensi&oacute;n de 80 millones y el empuje del BCE para que aclare cuanto antes estas cuestiones porque da&ntilde;an su reputaci&oacute;n.</p>\r\n\r\n<p>Habr&iacute;a que remontarse a la junta de 2002, cuando su antecesor, Francisco Gonz&aacute;lez (hoy presidente de honor del banco y presidente de honor de la Fundaci&oacute;n),&nbsp;<a href=\"https://elpais.com/economia/2019/01/25/actualidad/1548432343_855102.html\">acababa de expulsar al presidente, Emilio Ybarra, y los consejeros procedentes del BBV</a>, para encontrar un ambiente tan enrarecido entre los accionistas del banco.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'judicial.jpg', '2019-03-15 06:34:00'),
(28, 1, 1, 'Un acto de precampana opulento', 'Un-acto-de-precampana-opulento', '<p>El hijo del IV marqu&eacute;s de Valtierra, Iv&aacute;n Espinosa de los Monteros, y su esposa, Roc&iacute;o Monasterio, fueron recibidos este jueves con una ovaci&oacute;n al entrar a un sal&oacute;n con cinco candelabros de ara&ntilde;a y columnas de m&aacute;rmol. Era un acto de precampa&ntilde;a de Vox en el Hotel Intercontinental de Madrid, uno de los m&aacute;s lujosos de la capital. &ldquo;Queremos que Vox sea un instrumento para dar voz a aquellos que la necesitan&rdquo;, dijo Monasterio, la presidenta del partido en la regi&oacute;n de Madrid.</p>\r\n\r\n<p>No se refer&iacute;a esta vez a los obreros madrile&ntilde;os a los que el partido de extrema derecha quiere convencer, sino a los opositores venezolanos y cubanos a quienes estaba dedicado el acto, uno m&aacute;s de una carrera hacia las elecciones de abril y mayo cada vez m&aacute;s intensa.</p>\r\n\r\n<p>Como pas&oacute; con Donald Trump en Estados Unidos, el elitismo del partido no parece espantar a sus simpatizantes y sus dirigentes no renuncian a &eacute;l ni siquiera en un momento en que&nbsp;<a href=\"https://elpais.com/ccaa/2018/10/20/madrid/1540067338_233929.html\" target=\"_blank\">tratan de ampliar sus bases</a>&nbsp;y llegar a lugares m&aacute;s populares, como&nbsp;<a href=\"https://elpais.com/ccaa/2019/02/17/madrid/1550425964_576994.html\" target=\"_blank\">Torrej&oacute;n de Ardoz o M&oacute;stoles,</a>&nbsp;donde Vox fracas&oacute; en anteriores elecciones o ni siquiera se present&oacute;.</p>\r\n\r\n<p>Los alrededor de 200 simpatizantes del partido que llenaron la sala Alb&eacute;niz entraron por la puerta principal de dorado trumpiano en el Paseo de la Castellana, donde un botones con gabardina y gorra de plato da la bienvenida a los visitantes. Es un lugar que deslumbr&oacute; a algunos. &ldquo;Me parece un sitio sublime. No lo conoc&iacute;a&rdquo;, dec&iacute;a antes del evento David L&oacute;pez de las Hazas, un joven de 34 a&ntilde;os que hab&iacute;a llegado desde Aranjuez y que se dedica a invertir en Bolsa de modo profesional.</p>\r\n', 'politica.jpg', '2019-03-15 06:35:46'),
(34, 1, 1, 'Los pediatras de EE UU piden a Google y Facebook que censuren la informacion falsa sobre las vacunas', 'Los-pediatras-de-EE-UU-piden-a-Google-y-Facebook-que-censuren-la-informacion-falsa-sobre-las-vacunas', '<p>Cada vez m&aacute;s expertos y ciudadanos est&aacute;n m&aacute;s preocupados por el movimiento antivacunas. Una ideolog&iacute;a sin base cient&iacute;fica y que se apoya en creencias religiosas o informaci&oacute;n falsa sobre los efectos secundarios de ciertas vacunas como, por ejemplo, la triple v&iacute;rica -de la rubeola, sarampi&oacute;n y varicela- y el bulo sobre su relaci&oacute;n con el autismo. Los expertos achacan la propagaci&oacute;n de estas creencias al uso malicioso de las redes sociales.</p>\r\n\r\n<p>Hace unos d&iacute;as, Celso Arango,&nbsp;<a href=\"https://elpais.com/elpais/2019/03/05/mamas_papas/1551783023_370147.html\">jefe de psiquiatr&iacute;a infantojuvenil del hospital Gregorio Mara&ntilde;&oacute;n</a>, lo explicaba de esta manera: &quot;La gente en las redes sociales sigue a quien quiere seguir o a quien se ajusta a lo que cree o quiere. Es cierto que los antivacunas no van a desaparecer. Gente que cree en el concepto natural a la hora de vivir. Pero hay algo que deben saber, toda decisi&oacute;n es respetable mientras no da&ntilde;e a terceros. En el momento en que estas personas no se vacunan y reaparecen enfermedades, hasta ahora erradicadas, de forma que afecta a la poblaci&oacute;n, su decisi&oacute;n provoca un problema de salud p&uacute;blica&quot;, a&ntilde;ad&iacute;a Arango.</p>\r\n\r\n<p>contenido en sus&nbsp;<em>sites</em>. El presidente de la organizaci&oacute;n, Sundar Pichai, remiti&oacute; una carta a los presidentes de dichas empresas en las que se&ntilde;alaba: &ldquo;Como presidente de la APA mi obligaci&oacute;n y misi&oacute;n es que todos los ni&ntilde;os est&eacute;n sanos. Les escribo para que nos apoyen a combatir un problema de salud p&uacute;blica que est&aacute; afectando al bienestar de los m&aacute;s peque&ntilde;os: la amplia difusi&oacute;n de informaci&oacute;n falsa sobre las vacunas en sus sitios Web&rdquo;.</p>\r\n\r\n<p>La APA lleva a&ntilde;os desacreditando, en varias ocasiones de forma reiterada, a los progenitores que rechazan vacunar a sus hijos por razones alejadas de la medicina y, al igual que otros organismos como la&nbsp;<a href=\"http://www.who.int/topics/vaccines/es/\">Organizaci&oacute;n Mundial de Salud (OMS)</a>, est&aacute; haciendo hincapi&eacute; en su capacidad para erradicar, proteger y prevenir que los m&aacute;s peque&ntilde;os padezcan enfermedades como el sarampi&oacute;n, la varicela o las paperas.</p>\r\n\r\n<p>&ldquo;Ahora los pediatras estamos viendo c&oacute;mo rebrotan enfermedades como el sarampi&oacute;n en nuestro pa&iacute;s&rdquo;, contin&uacute;a el experto en su texto. &ldquo;Incluso, mi Estado, Washington, ha declarado el estado de emergencia por este motivo&rdquo;. Adem&aacute;s, Pichai se&ntilde;ala que aunque ellos est&aacute;n concienciados y transmiten la informaci&oacute;n verdadera a los padres, tambi&eacute;n incide en que sus esfuerzos no son suficientes: &ldquo;Ahora muchos progenitores est&aacute;n dando la espalda a la verdad en detrimento de la salud de sus hijos&rdquo;.</p>\r\n', 'salud.jpg', '2019-03-15 14:24:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `zipcode`, `email`, `username`, `password`, `register_date`) VALUES
(1, 'Administrador', '01913', 'administrador@gmail.com', 'Admin', 'e10adc3949ba59abbe56e057f20f883e', '2019-03-11 07:33:03');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
