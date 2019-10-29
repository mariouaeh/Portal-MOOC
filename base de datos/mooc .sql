-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2019 a las 04:18:57
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mooc`
--
CREATE DATABASE mooc;
USE mooc;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `id_usuario`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(10) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `id_plataforma` int(10) NOT NULL,
  `id_tema` int(10) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen_url` varchar(300) NOT NULL,
  `url` varchar(300) NOT NULL,
  `id_universidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `titulo`, `id_plataforma`, `id_tema`, `descripcion`, `imagen_url`, `url`, `id_universidad`) VALUES
(229, 'Introduction to Computer Science I', 7, 6, 'This course will introduce you to the field of computer science and the fundamentals of computer programming. CS101 is specifically designed for students with no prior programming experience, and touches upon a variety of fundamental topics. This course uses Java to demonstrate those topics. Java is a high-level, portable, and well-constructed computer programming language developed by Sun Microsystems (now Oracle).', 'img/cursos/1.jpg', 'https://learn.saylor.org/course/view.php?id=6', 45),
(230, 'Introduction to Computer Science II', 7, 6, 'This course is a continuation of CS101: Introduction to Computer Science I. It will introduce you to a number of more advanced Computer Science topics, laying a strong foundation for future academic study in the discipline. We will begin with a comparison between Java, the programming language used in the previous course, and C++, another popular, industry-standard programming language. We will then discuss the fundamental building blocks of Object-Oriented Programming, reviewing what we have already learned and familiarizing ourselves with some more advanced programming concepts', 'img/cursos/2.jpg', 'https://learn.saylor.org/course/view.php?id=64', 45),
(231, 'Learn to Program: The Fundamentals', 2, 6, 'Behind every mouse click and touch-screen tap, there is a computer program that makes things happen. This course introduces the fundamental building blocks of programming and teaches you how to write fun and useful programs using the Python language.', 'img/cursos/3.jpg', 'https://www.coursera.org/learn/learn-to-program', 21),
(232, 'Programming Foundations with Python', 4, 6, 'In this introductory programming class, you’ll learn Object-Oriented Programming, a must-have technique for software engineers that will allow you to reuse and share code easily. You’ll learn by doing, and will build byte-sized (ha!) mini projects in each lesson to learn and practice programming concepts. ', 'img/cursos/4.jpg', 'https://www.udacity.com/course/programming-foundations-with-python--ud036', 45),
(233, 'Introduction to Computational Thinking and Data Science', 1, 6, 'This is a past/archived course. At this time, you can only explore this course in a self-paced fashion. Certain features of this course may not be active, but many people enjoy watching the videos and working with the materials. Make sure to check for reruns of this course.', 'img/cursos/5.jpg', 'https://www.edx.org/course/introduction-computational-thinking-data-mitx-6-00-2x', 25),
(234, 'Data Manipulation at Scale: Systems and Algorithms', 2, 6, 'Data analysis has replaced data acquisition as the bottleneck to evidence-based decision making --- we are drowning in it. Extracting knowledge from large, heterogeneous, and noisy datasets requires not only powerful computing resources, but the programming abstractions to use them effectively. The abstractions that emerged in the last decade blend ideas from parallel databases, distributed systems, and programming languages to create a new class of scalable data analytics platforms that form the foundation for data science at realistic scales.', 'img/cursos/6.jpg', 'https://www.coursera.org/learn/data-manipulation', 22),
(235, 'Introduction to Computer Science and Programming Using Python', 1, 6, 'his course is the first of a two-course sequence: Introduction to Computer Science and Programming Using Python, and Introduction to Computational Thinking and Data Science. Together, they are designed to help people with no prior exposure to computer science or programming learn to think computationally and write programs to tackle useful problems. Some of the people taking the two courses will use them as a stepping stone to more advanced computer science courses, but for many it will be their first and last computer science courses. ', 'img/cursos/7.jpg', 'https://www.edx.org/course/introduction-to-computer-science-and-programming-using-python-0', 25),
(236, '¡A Programar! Una introducción a la programación', 2, 6, '¿Alguna vez pensaste en crear tus propios juegos de computadora, pero no tenías idea cómo hacerlo o por dónde comenzar? Este curso te enseñará a programar utilizando Scratch, un lenguaje de programación visual muy fácil de usar, y más importante aún, aprenderás los principios fundamentales de la computación para que comiences a pensar como ingeniero/a de software.', 'img/cursos/8.jpg', 'https://www.coursera.org/learn/a-programar?ranMID=40328&ranEAID=ymSl0jCmTv0&ranSiteID=ymSl0jCmTv0-cZmoziSzkONaMYihjniulw&siteID=ymSl0jCmTv0-cZmoziSzkONaMYihjniulw&utm_content=15&utm_medium=partners&utm_source=linkshare&utm_campaign=ymSl0jCmTv0', 23),
(237, 'Introducción a Data Science', 2, 6, 'ste curso te proporcionará las bases del lenguaje de programación estadística R, la lengua franca de la estadística, el cual te permitirá escribir programas que lean, manipulen y analicen datos cuantitativos. Te explicaremos la instalación del lenguaje; también verás una introducción a los sistemas base de gráficos y al paquete para graficar ggplot2, para visualizar estos datos.', 'img/cursos/9.jpg', 'https://www.coursera.org/learn/intro-data-science-programacion-estadistica-r', 48),
(238, 'Data Manipulation at Scale', 2, 6, 'Data analysis has replaced data acquisition as the bottleneck to evidence-based decision making --- we are drowning in it. Extracting knowledge from large, heterogeneous, and noisy datasets requires not only powerful computing resources, but the programming abstractions to use them effectively. The abstractions that emerged in the last decade blend ideas from parallel databases, distributed systems, and programming languages to create a new class of scalable data analytics platforms that form the foundation for data science at realistic scales.', 'img/cursos/10.jpg', 'https://www.coursera.org/learn/data-manipulation', 22),
(239, 'Fundamentos TIC para profesionales de negocios', 1, 6, 'Este curso enfocado en las ciencias de la comunicación forma parte de una serie de 5 cursos de introducción al uso de sistemas de información en las empresas que te introducirá en el apasionante mundo de las tecnologías de la información y comunicación (TICs).', 'img/cursos/11.jpg', 'https://www.edx.org/es/course/fundamentos-tic-para-profesionales-de-negocios-programacion', 16),
(240, 'Algorithms', 1, 1, 'Algorithms power the biggest web companies and the most promising startups. Interviews at tech companies start with questions that probe for good algorithm thinking.\r\nIn this computer science course, you will learn how to think about algorithms and create them using sorting techniques such as quick sort and merge sort, and searching algorithms, median finding, and order statistics.', 'img/cursos/12.jpg', 'https://www.edx.org/es/course/algorithms-2', 2),
(241, 'Divide and Conquer, Sorting and Searching, and Randomized Algorithms', 2, 1, 'The primary topics in this part of the specialization are: asymptotic (\"Big-oh\") notation, sorting and searching, divide and conquer (master method, integer and matrix multiplication, closest pair), and randomized algorithms (QuickSort, contraction algorithm for min cuts).', 'img/cursos/13.jpg', 'https://www.coursera.org/learn/algorithms-divide-conquer', 24),
(242, 'Algorithms and Data Structures Capstone', 1, 1, 'This big data challenge will cover the entire MicroMasters program. After a brief introduction to the steps required to build a genome assembler, we will let you take steps on your own to start working with real data taken from a sequencing machine and see if you can design genome assembly software that can compete with popular software used in hundreds of sequencing labs around the world every day.', 'img/cursos/14.jpg', 'https://www.edx.org/es/course/algorithms-data-structures-capstone-uc-san-diegox-algs207x', 3),
(243, 'Algorithms and Data Structures in C#', 1, 1, 'When you create real-world applications, the ability to store information in your program code is critically important.  In this course, you will learn how programming languages make use of various data structures to hold this information.  For example, storing a list of values for countries.   You ill learn how C# provides a plethora of data structures from simple arrays to more complex structures that permit the use of “typing”.  Generics is a concept that C# uses to allow the representation of objects in your data structures to apply “typing”, making it easier to work with specific data types.', 'img/cursos/15.jpg', 'https://www.edx.org/es/course/algorithms-and-data-structures-in-c-2', 20),
(244, 'Estructuras de datos', 2, 1, 'A good algorithm usually comes together with a set of good data structures that allow the algorithm to manipulate the data efficiently. In this course, we consider the common data structures that are used in various computational problems. You will learn how these data structures are implemented in different programming languages and will practice implementing them in our programming assignments.', 'img/cursos/16.jpg', 'https://www.coursera.org/specializations/data-structures-algorithms', 3),
(245, 'Data Structures and Performance', 2, 1, 'In this course, you will use and analyze data structures that are used in industry-level applications, such as linked lists, trees, and hashtables. You will explain how these data structures make programs more efficient and flexible. You will apply asymptotic Big-O analysis to describe the performance of algorithms and evaluate which strategy to use for efficient data retrieval, addition of new data, deletion of elements, and/or memory usage.', 'img/cursos/17.jpg', 'https://www.coursera.org/learn/data-structures-optimizing-performance', 3),
(246, 'Advanced Algorithmics and Graph Theory with Python', 1, 1, 'Algorithmics and programming are fundamental skills for engineering students, data scientists and analysts, computer hobbyists or developers.\r\nLearning how to program algorithms can be tedious if you aren’t given an opportunity to immediately practice what you learn. In this course, you won\'t just focus on theory or study a simple catalog of methods, procedures, and concepts. Instead, you’ll be given a challenge wherein you\'ll be asked to beat an algorithm we’ve written for you by coming up with your own clever solution. ', 'img/cursos/18.jpg', 'https://www.edx.org/es/course/advanced-algorithmics-and-graph-theory-with-python', 25),
(247, 'Algorithms, Part II', 2, 1, 'This course covers the essential information that every serious programmer needs to know about algorithms and data structures, with emphasis on applications and scientific performance analysis of Java implementations. Part I covers elementary data structures, sorting, and searching algorithms. Part II focuses on graph- and string-processing algorithms.', 'img/cursos/19.jpg', 'https://www.coursera.org/learn/algorithms-part2', 4),
(248, 'Introducción a la Minería de Datos', 2, 2, 'En este curso, aprenderás de manera gradual y práctica los conceptos básicos de Minería de Datos, junto a los algoritmos más utilizados hoy en día. Al finalizar el curso, serás capaz de entender la importancia de manejar la información y de explorar por ti mismo distintas bases de datos reales. Este curso es el primer paso para convertirte en un/a profesional con habilidades básicas de un científico de datos o Data Scientist, de manera tal que puedas abrirle la puerta al futuro.', 'img/cursos/20.jpg', 'https://www.coursera.org/learn/mineria-de-datos-introduccion', 26),
(249, 'Big Data: el impacto de los datos masivos en la sociedad actual', 2, 2, 'La digitalización, la informática e Internet han producido lo que se puede denominar una revolución en la acumulación y utilización de datos. Podemos almacenar y conservar más datos que nunca antes en la historia. Podemos estudiarlos y analizarlos para tomar decisiones y mejorar procesos. Esta nueva capacidad tiene un enorme impacto en todos los ámbitos de la vida social.', 'img/cursos/21.jpg', 'https://www.coursera.org/learn/impacto-datos-masivos?specialization=big-data-introduccion', 26),
(250, 'Big data para una ciudad inteligente', 3, 2, 'El objetivo principal del curso es la capacitación de los estudiantes para poder realizar un análisis básico sobre las posibilidades tecnológicas el curso se centra en Big Data, como área para gestionar y analizar información, y en tecnologías del Internet de las Cosas para realizar adquisición de datos a través de sensores.', 'img/cursos/22.jpg', 'https://miriadax.net/web/big-data-para-una-ciudad-inteligente/inicio', 27),
(251, 'Diseño de Bases de Datos Relacionales', 4, 2, 'Un viaje desde el Dato hasta la Base de Datos. Modelo Relacional, Normalización de Bases de Datos, RDBMS, SQL y más...', 'img/cursos/23.jpg', 'https://www.udemy.com/diseno-de-bases-de-datos-relacionales/', 45),
(252, 'MongoDB Basics', 1, 2, 'In MongoDB Basics, you will learn the essentials of the MongoDB document model and explore the advantages of writing software using a database that accommodates the ways developers commonly think about and structure data in their applications. MongoDB stores data using a binary form of JSON (JavaScript Object Notation), enabling you to work with data in the same way you would work with JSON in your programming language of choice.', 'img/cursos/24.jpg', 'https://www.edx.org/es/course/mongodb-basics', 45),
(253, 'Databases and SQL for Data Science', 2, 2, 'Much of the world\'s data resides in databases. SQL (or Structured Query Language) is a powerful language which is used for communicating with and extracting data from databases. A working knowledge of databases and SQL is a must if you want to become a data scientist. The purpose of this course is to introduce relational database concepts and help you learn and apply foundational knowledge of the SQL language. It is also intended to get you started with performing SQL access in a data science environment. ', 'img/cursos/25.jpg', 'https://www.coursera.org/learn/sql-data-science', 28),
(254, 'Big Data: el valor añadido de los datos en su negocio', 3, 2, 'Gracias por tu interés. Aunque este MOOC ya se realizó, si te inscribes podrás acceder a los contenidos más importantes y a los vídeos. Sin embargo, no podrás realizar ninguna de las actividades ni te podrás certificar. ', 'img/cursos/26.jpg', 'https://miriadax.net/web/big-data-el-valor-anadido-de-los-datos-en-su-negocio/inicio', 5),
(255, 'Programming for Data Science', 4, 2, 'Prepare for a data science career by learning the fundamental data programming tools: Python or R, SQL, command line, and git. Choose to enroll in either the Python or R track. ', 'img/cursos/27.jpg', 'https://www.udacity.com/course/programming-for-data-science-nanodegree--nd104', 45),
(256, 'Using Databases with Python', 2, 2, 'This course will introduce students to the basics of the Structured Query Language (SQL) as well as basic database design for storing data as part of a multi-step data gathering, analysis, and processing effort. The course will use SQLite3 as its database. We will also build web crawlers and multi-step data gathering and visualization processes. We will use the D3.js library to do basic data visualization. ', 'img/cursos/28.jpg', 'https://www.coursera.org/learn/python-databases?ranMID=40328&ranEAID=ymSl0jCmTv0&ranSiteID=ymSl0jCmTv0-XeXsTels2_82uqCxAHjO9w&siteID=ymSl0jCmTv0-XeXsTels2_82uqCxAHjO9w&utm_content=15&utm_medium=partners&utm_source=linkshare&utm_campaign=ymSl0jCmTv0', 6),
(257, 'Hacking PostgreSQL: Data Access Methods', 1, 2, 'This course is about data storage and data processing technologies with examples from PostgreSQL. It is geared toward database core developers, operation systems developers, system architects, and all those who want to understand databases in more detail.\r\nPostgreSQL is considered the most advanced free open-source database engine. It is developed by a community of hackers around the world - some of them are students just like you!', 'img/cursos/29.jpg', 'https://www.edx.org/es/course/hacking-postgresql-data-access-methods-urfux-pgam31337x', 7),
(258, 'Introduction to Structured Query Language (SQL)', 2, 2, 'In this course, you\'ll walk through installation steps for installing a text editor, installing MAMP or XAMPP (or equivalent) and creating a MySql Database. You\'ll learn about single table queries and the basic syntax of the SQL language, as well as database design with multiple tables, foreign keys, and the JOIN operation. Lastly, you\'ll learn to model many-to-many relationships like those needed to represent users, roles, and courses.', 'img/cursos/30.jpg', 'https://www.coursera.org/learn/intro-sql', 6),
(259, 'Building a Cybersecurity Toolkit', 1, 3, 'If you own an information asset that’s valuable enough to the right adversary, it’s only a matter of time before there’s a breach. Today’s technologies attempt to keep adversaries out, but the sad fact is they will inevitably be defeated. This means a successful cybersecurity professional needs to have an expanded arsenal in their toolkit that extends far beyond technical proficiency.', 'img/cursos/31.jpg', 'https://www.edx.org/es/course/building-a-cybersecurity-toolkit', 22),
(260, 'Introduction to Cybersecurity', 1, 3, 'As our daily lives become more and more dependent on Internet-based tools and services, and as those platforms accumulate more of our most sensitive data, the demand grows for experts in the field of cybersecurity.\r\nIn this course, you will gain an overview of the cybersecurity landscape as well as national (USA) and international perspectives on the field. We will cover the legal environment that impacts cybersecurity as well as predominant threat actors.', 'img/cursos/32.jpg', 'https://www.edx.org/es/course/introduction-to-cybersecurity-2', 22),
(261, 'Cybersecurity and Mobility', 2, 3, 'This course is for you if you are interested in transitioning toward a managerial role in cybersecurity and mobility. Through interviews with industry experts in this area, you will be able to analyze innovations powering the rapid spread of information technology and how they present new challenges for protecting data. For example, mobile devices increase convenience but often bypass traditional security measures.', 'img/cursos/33.jpg', 'https://www.coursera.org/learn/cybersecurity-mobility', 8),
(262, 'Homeland Security & Cybersecurity Connection - It\'s Not About the Terrorists', 2, 3, 'Welcome to Course 1 in CS4950, Homeland Security and Cybersecruity. In this course we examine the origins of homeland security and its connection with cybersecurity. Homeland security is about safeguarding the United States from domestic catastrophic destruction. Catastrophic destruction comes in two forms: natural and man-made. For most of history the man-made variety came in the form of warfare and required the combined resources of a nation state. All that changed March 20th, 1995', 'img/cursos/34.jpg', 'https://www.coursera.org/learn/homeland-security-cybersecurity-connection', 9),
(263, 'Introducción a la accesibilidad web', 5, 3, 'Con el surgimiento de leyes de concienciación y accesibilidad en todo el mundo, entender lo que significa el acceso inclusivo a la Web significa que se está convirtiendo en el conocimiento necesario para cualquier persona que produce contenido digital. Gran parte de la información actual sobre accesibilidad de la Web requiere cierta comprensión técnica, y puede ser difícil de consumir para la persona promedio.', 'img/cursos/35.jpg', 'https://www.canvas.net/browse/ryersonu/courses/intro-web-accessibility', 10),
(264, 'Network Security', 1, 3, 'In this course, you will examine the various areas of network security including intrusion detection, evidence collection and defense against cyber attacks.\r\nThe issues and facilities available to both the intruder and data network administrator will also be examined to illustrate their effect.', 'img/cursos/36.jpg', 'https://www.edx.org/es/course/network-security-0', 11),
(265, 'Design and Analyze Secure Networked Systems', 2, 3, 'In this MOOC, we will learn the basic cyber security concepts, how to identify vulnerabilities/threat in a network system. We will apply CIA basic security services in the triage of recent cyberattack incidents, such as OPM data breach. We will learn the risk management framework for analyzing the risks in a network system, and apply the basic security design principles to protect the data and secure computer systems. We will examine the trustworthiness of programs and data installed in our systems and show the proper way to verify their integrity and authenticity.', 'img/cursos/37.jpg', 'https://www.coursera.org/learn/design-secure-networked-systems', 9),
(266, 'IT Security: Defense against the digital dark arts ', 2, 3, 'This course covers a wide variety of IT security concepts, tools, and best practices. It introduces threats and attacks and the many ways they can show up. We’ll give you some background of encryption algorithms and how they’re used to safeguard data. Then, we’ll dive into the three As of information security: authentication, authorization, and accounting. We’ll also cover network security solutions, ranging from firewalls to Wifi encryption options.', 'img/cursos/38.jpg', 'https://www.coursera.org/learn/it-security', 29),
(267, 'Cyber Security in Manufacturing', 2, 3, 'The nature of digital manufacturing and design (DM&D), and its heavy reliance on creating a digital thread of product and process data and information, makes it a prime target for hackers and counterfeiters. This course will introduce students to why creating a strong and secure infrastructure should be of paramount concern for anyone operating in the DM&D domain, and measures that can be employed to protect operational technologies, systems and resources. ', 'img/cursos/39.jpg', 'https://www.coursera.org/learn/cyber-security-manufacturing', 12),
(268, 'Computer Forensics', 1, 3, 'Digital forensics involves the investigation of computer-related crimes with the goal of obtaining evidence to be presented in a court of law.\r\nIn this course, you will learn the principles and techniques for digital forensics investigation and the spectrum of available computer forensics tools. You will learn about core forensics procedures to ensure court admissibility of evidence, as well as the legal and ethical implications.', 'img/cursos/40.jpg', 'https://www.edx.org/es/course/computer-forensics-2', 11),
(269, 'Desarrollo del lado servidor: NodeJS, Express y MongoDB', 2, 4, 'En este curso trabajarás del lado servidor, en el backend, desarrollando el soporte que toda aplicación necesita para lidiar con la persistencia de la información, el setup de un servidor web, la creación de una API REST, autenticación y autorización, y la integración de librerías de terceros. Utilizarás Express para el servidor web, y una base de datos NoSQL orientada a documentos: MongoDB. Aprenderás de ODM con Mongoose y harás las típicas tareas CRUD sobre Mongo. Finalmente pondrás productivo tu sitio en Heroku.', 'img/cursos/41.jpg', 'https://www.coursera.org/specializations/fullstack-web-development-espanol', 30),
(270, 'Diseñando páginas web con Bootstrap 4', 2, 4, 'Este curso te enseñará conceptos generales de desarrollo web del lado cliente, metodologías de trabajo y herramientas. Aprenderás sobre diseño responsive, grillas, y componentes CSS y Javascript de Bootstrap. Practicarás con preprocesadores de CSS, Less y Sass.', 'img/cursos/42.jpg', 'https://www.coursera.org/learn/disenando-paginas-bootstrap4', 30),
(271, 'Introducción al desarrollo de aplicaciones web', 1, 4, 'As our daily lives become more and more dependent on Internet-based tools and services, and as those platforms accumulate more of our most sensitive data, the demand grows for experts in the field of cybersecurity.\r\nIn this course, you will gain an overview of the cybersecurity landscape as well as national (USA) and international perspectives on the field. We will cover the legal environment that impacts cybersecurity as well as predominant threat actors.', 'img/cursos/43.jpg', 'https://www.edx.org/es/course/introduccion-al-desarrollo-de-aplicaciones-web-3', 27),
(272, 'Diseño Web con HTML5 + CSS (6.ª Edición)', 3, 4, 'En este curso te enseñaremos a diseñar páginas web utilizando la última versión del lenguaje HTML, HTML 5 y las hojas de estilo CSS. Además, aprenderás los principios del posicionamiento SEO y las directrices de accesibilidad que todos los sitios web deben seguir. ¡Aprovecha la oportunidad!', 'img/cursos/44.jpg', 'https://miriadax.net/web/diseno-web-con-html5-css-6-edicion-/inicio', 45),
(273, 'Introduction to HTML5', 2, 4, 'Thanks to a growing number of software programs, it seems as if anyone can make a webpage. But what if you actually want to understand how the page was created? There are great textbooks and online resources for learning web design, but most of those resources require some background knowledge. This course is designed to help the novice who wants to gain confidence and knowledge. ', 'img/cursos/45.jpg', 'https://www.coursera.org/learn/html', 6),
(274, 'Intro to HTML/CSS: Making webpages', 6, 4, 'Learn how to use HTML and CSS to make webpages. HTML is the markup language that you surround content with, to tell browsers about headings, lists, tables, etc. CSS is the stylesheet language that you style the page with, to tell browsers to change the color, font, layout, and more.', 'img/cursos/46.jpg', 'https://www.khanacademy.org/computing/computer-programming/html-css#intro-to-html', 45),
(275, 'Intro to SQL: Querying and managing data', 6, 2, 'Learn how to use SQL to store, query, and manipulate data. SQL is a special-purpose programming language designed for managing data in a relational database, and is used by a huge number of apps and organizations.', 'img/cursos/47.jpg', 'https://www.khanacademy.org/computing/computer-programming/sql#sql-basics', 45),
(276, 'More advanced SQL queries', 6, 2, 'Learn how to perform more advanced SQL queries using AND/OR, IN, LIKE, HAVING, and more.', 'img/cursos/48.jpg', 'https://www.khanacademy.org/computing/computer-programming/sql/more-advanced-sql-queries/pt/more-complex-queries-with-andor', 45),
(277, 'CSS Basics', 1, 4, 'Have you just begun your journey into Web development? This course will introduce you to the basics of Web design and teach you how to style your Web site for a professional look and feel.\r\nThe Microsoft team and experts from the World Wide Web Consortium (W3C) will guide you step-by-step in using the latest Web standards to structure your content and presentation like a professional. In this course, you will explore numerous CSS features to help you control the look and feel of your site such as colors, fonts and layout. By the end of the course, you should understand all the fundamental elements of CSS and how to use them effectively.', 'img/cursos/49.jpg', 'https://www.edx.org/es/course/css-basics', 45),
(278, 'JavaScript Introduction', 1, 4, 'This computer science course is an initiation to JavaScript programming and has been designed to help Web developers have an understanding of the basic concepts of the language. This course was developed in partnership between W3C and University Côte d\'Azur.\r\nJavaScript lets you add interactive features to your Web sites, including dynamically updated content, controlled multimedia, animated images, and much more.', 'img/cursos/50.jpg', 'https://www.edx.org/es/course/javascript-introduction', 45),
(279, 'HTML/JS: Making webpages interactive with jQuery', 6, 4, 'Learn how to use jQuery, the world\'s most popular JS browser library, to add interactivity to your webpages.', 'img/cursos/51.jpg', 'https://www.khanacademy.org/computing/computer-programming/html-js-jquery#jquery-intro', 45),
(280, 'ES6 - JavaScript Mejorado', 4, 4, 'ECMAScript 6, o ES6, ha traído una tonelada de cambios al lenguaje de programación de JavaScript. En este curso, explorará esos cambios para conocer las últimas funciones y mejoras del lenguaje, incluidas las nuevas palabras clave, las funciones de flecha, la sintaxis de clase, las promesas y mucho más. ', 'img/cursos/52.jpg', 'https://www.udacity.com/course/es6-javascript-improved--ud356', 45),
(281, 'Web semántica y datos vinculados (5ª edición)', 3, 4, 'El objetivo de este MOOC es introducir las bases teóricas y prácticas de los conceptos metodológicos y tecnológicos involucrados en la generación y publicación de vocabularios y datos en la Web de Datos Vinculados.', 'img/cursos/53.jpg', 'https://miriadax.net/web/semantic-web-and-linked-data-5-edicion-/inicio', 27),
(282, 'Desarrollo de aplicaciones web basadas en el cliente: ReactJS y Angular', 3, 4, 'El principal objetivo de este MOOC es proporcionar el conocimiento necesario para desarrollar aplicaciones web del lado del cliente. Para lograr este objetivo, es crucial conocer la base del desarrollo de aplicaciones web según el patrón MVC (Model View Controller) y las implicaciones de su implementación en los navegadores web.', 'img/cursos/54.jpg', 'https://miriadax.net/web/client-based-web-applications-development-reactjs-angular0/inicio', 27),
(283, 'Ciberseguridad en dispositivos móviles', 5, 3, 'La incursión de los dispositivos móviles dentro del mundo empresarial y a nivel privado, ha supuesto un cambio en la manera que teníamos de interactuar con Internet hasta el momento, y ha propiciado la aparición de diversos perfiles orientados exclusivamente a las tecnologías móviles como experto en seguridad móvil, auditor de seguridad móvil,', 'img/cursos/55.jpg', 'https://www.canvas.net/browse/incibe-spanish-es/courses/ciberseguridad', 45),
(284, 'Become a Professional Full Stack Developer', 4, 4, 'In this program, you’ll prepare for a job as a Full Stack Web Developer, and learn to create complex server-side web applications that use powerful relational databases to persistently store data.\r\n', 'img/cursos/56.jpg', 'https://www.udacity.com/course/full-stack-web-developer-nanodegree--nd004', 45),
(285, 'Desarrollo del lado servidor: NodeJS, Express y MongoDB', 2, 4, 'En este curso trabajarás del lado servidor, en el backend, desarrollando el soporte que toda aplicación necesita para lidiar con la persistencia de la información, el setup de un servidor web, la creación de una API REST, autenticación y autorización, y la integración de librerías de terceros. Utilizarás Express para el servidor web, y una base de datos NoSQL orientada a documentos: MongoDB.', 'img/cursos/57.jpg', 'https://www.coursera.org/learn/desarrollo-lado-servidor-nodejs-express-mongodb', 30),
(286, 'Server-side Development with NodeJS, Express and MongoDB', 2, 4, 'This course deals with all things server-side. We base the entire course around the NodeJS platform. We start with a brief overview of the Web protocols: HTTP and HTTPS. We examine NodeJS and NodeJS modules: Express for building web servers. On the database side, we review basic CRUD operations, NoSQL databases, in particular MongoDB and Mongoose for accessing MongoDB from NodeJS. We examine the REST concepts and building a RESTful API. We touch upon authentication and security.', 'img/cursos/58.jpg', 'https://www.coursera.org/learn/server-side-nodejs', 13),
(287, 'Building Functional Prototypes using Node.js', 1, 4, 'In this course, you\'ll learn all about back-end web development so that you can turn a basic web app prototype into something that can store live data. We\'ll cover the basics of Node.js so that you can write JavaScript code to build the back-end of your app, as well as the basics of SQL and SQLite to write queries to work with a database. By the end of this course, you\'ll have a functional web app prototype that can be accessed on the Web.', 'img/cursos/59.jpg', 'https://www.edx.org/es/course/building-functional-prototypes-using-nodejs-3', 20),
(288, 'Using Non-Relational Data in SQL Server', 1, 2, 'You’ve probably heard about all the cool things that developers are doing in Azure Cosmos DB. It’s the best place to start if you’re building modern NoSQL applications from scratch.  This course shows you how to build applications that use non-relational data structures in SQL Server.  Whether your app needs to store unstructured data, or you want to store coordinates for your map app in a meaningful way, you’ll learn skills that go beyond storing traditional data types. You’ll also learn how to integrate legacy applications with modern applications that are built in Azure Cosmos DB.', 'img/cursos/60.jpg', 'https://www.edx.org/es/course/using-non-relational-data-in-sql-server', 20),
(289, 'Introduction to Game Development', 2, 5, 'If you love games and want to learn how to make them, then this course will start you down that path. Making games is a creative and technical art form. In this course you will familiarize yourself with the tools and practices of game development. You will get started developing your own videogames using the industry standard game development tools, including the Unity3D game engine and C#. At the end of the course you will have completed three hands-on projects and will be able to leverage an array of game development techniques to create your own basic games. ', 'img/cursos/61.jpg', 'https://www.coursera.org/learn/game-development', 31),
(290, 'Game Development for Modern Platforms', 2, 5, 'The device or \"platform\" that a game is developed for and played on has a massive impact on the game development process. In this hands-on course you will explore how to develop a game for a variety of modern platforms, including Web, Windows, Mac OS X, iOS, and Android. While building a complete game, you will learn intermediate and advanced game development techniques in the Unity game engine. By the end of the course, you will understand how to develop, refine, package, and prepare your game for distribution on a variety of game platforms', 'img/cursos/62.jpg', 'https://www.coursera.org/learn/gamedev-platforms', 31),
(291, 'Programa especializado Unity Certified Programmer Exam Preparation', 2, 5, 'This is Unity’s official series of courses designed to prepare you for the Unity Certified Programmer exam, the certification for entry- to mid-level Unity programmers. You’ll gain practice and experience in each of the topics covered in the exam through hands-on problem solving challenges. You’ll build two complete Unity projects end-to-end, implementing core interactivity, supporting systems, and platform optimizations This series of courses is for Unity programmers with 1-2 years of experience who are ready to bring their existing skills up to a professional standard.', 'img/cursos/63.jpg', 'https://www.coursera.org/specializations/unity-certified-programmer', 45),
(292, 'Introduction to Game Design', 2, 5, 'Welcome! This course is an introduction to the primary concepts of gaming, and an exploration of how these basic concepts affect the way gamers interact with our games. In this course you will understand what defines a “game” and the mechanics and rules behind different types of games. Through four linked assignments you\'ll learn ways to create and describe a game concept, and specifically what makes a compelling game. ', 'img/cursos/64.jpg', 'https://www.coursera.org/learn/game-design', 14),
(293, 'Introduction to Game Design', 1, 5, 'We have all played and enjoyed games, but how do people actually design them? How do you describe a game? What are the basic elements? How do designers create an experience for the player? What about prototyping and iterating?\r\nThis course explores these questions and others through six content units over seven weeks. Participants will be introduced to game design and game design concepts, emphasizing the basic tools of game design: paper and digital prototyping, design iteration, and user testing.', 'img/cursos/65.jpg', 'https://www.edx.org/es/course/introduction-game-design-mitx-11-126x-0', 25),
(294, 'Video Game Design History', 1, 5, 'Video games as a medium go back more than 50 years to mainframe computers. Even the central design of video games can be traced back to the first games themselves.\r\nTo be a good game designer, it’s essential to have an understanding of the video game design industry’s fascinating history.', 'img/cursos/66.jpg', 'https://www.edx.org/es/course/video-game-design-history', 11),
(295, 'CS50\'s Introduction to Game Development', 1, 5, 'Learn about the development of 2D and 3D interactive games in this hands-on course, as you explore the design of games such as Super Mario Bros., Pokémon, Angry Birds, and more.', 'img/cursos/67.jpg', 'https://www.edx.org/es/course/cs50s-introduction-to-game-development', 15),
(296, 'Introducción al desarrollo de videojuegos con Unity', 1, 5, 'Nunca antes el mercado de los videojuegos se ha encontrado en un mejor momento. En la actualidad existen multitud de plataformas disponibles y la irrupción de los dispositivos móviles ha revolucionado el sector.', 'img/cursos/68.jpg', 'https://www.edx.org/es/course/introduccion-al-desarrollo-de-videojuegos-con-unity', 1),
(297, 'Diseño de videojuegos: Una introducción', 2, 5, 'Bienvenidos a Diseño de videojuegos: una introducción! El diseño de videojuegos es el arte de aplicar conceptos de diseño para crear la interacción entre jugadores. Es un ejercicio mental que requiere varios conocimientos en diferentes campos y la habilidad de comunicar qué es lo que se quiere lograr. ', 'img/cursos/69.jpg', 'https://www.coursera.org/learn/diseno-videojuegos-intro?ranMID=40328&ranEAID=ymSl0jCmTv0&ranSiteID=ymSl0jCmTv0-VbSRjHvmhE4zxdEtJT2bNw&siteID=ymSl0jCmTv0-VbSRjHvmhE4zxdEtJT2bNw&utm_content=15&utm_medium=partners&utm_source=linkshare&utm_campaign=ymSl0jCmTv0', 1),
(298, 'Diseño, Organización y Evaluación de videojuegos', 3, 5, 'El curso en Creación y Desarrollo de Videojuegos y Gamificación es un primer puente tendido hacia aquellas personas que desean embarcarse en la aventura del diseño y desarrollo de videojuegos, explicando cada aspecto de la industria, desde el diseño a la financiación pasando por el arte y la evaluación.', 'img/cursos/70.jpg', 'https://miriadax.net/web/diseno-organizacion-y-evaluacion-de-videojuegos-y-gamificacion-3-edicion-_201604220800/inicio', 18),
(299, 'Aprendiendo a programar con Python', 2, 8, 'Decía Steve Jobs que “todo el mundo debería aprender a programar un ordenador porque esto te ayuda a pensar”. Hoy en día la programación es una herramienta fundamental para el desarrollo de la tecnología moderna. Este curso te introduce en el mundo de la programación en el lenguaje Python. De una forma práctica, aprenderás de forma gradual desde el tratamiento básico de variables hasta la programación de algoritmos para construir tus propios juegos. Además, te familiarizarás con los conceptos fundamentales para el desarrollo de algoritmos y su programación. ', 'img/cursos/71.jpg', 'https://www.coursera.org/learn/aprendiendo-programar-python', 32),
(300, 'Introducción a la programación con Python', 2, 8, 'Este curso te dará ágil acceso a los conceptos básicos de programación utilizando el lenguaje de programación Python en su versión 3.0. Python tiene una sintaxis sencilla y compacta.', 'img/cursos/72.jpg', 'https://www.coursera.org/learn/introduccion-python', 30),
(301, 'Writing, Running, and Fixing Code in C\r\n', 2, 8, 'Building on the course Programming Fundamentals, this course will teach you how to write code by first planning what your program should do—an important approach for novice and professional programmers. You will learn how to compile and run your program, and then how to test and debug it. This course builds on the Seven Steps you have already learned and provides a framework for systematically testing for problems and fixing them, so you can find and fix problems efficiently.', 'img/cursos/73.jpg', 'https://www.coursera.org/learn/writing-running-fixing-code', 33),
(302, 'Introducción a Java', 2, 8, 'Este es un curso introductorio a la programación en Java. Como Java es un lenguaje orientado a objetos de propósito general, revisaremos los conceptos básicos del lenguaje como clases e interfaces.', 'img/cursos/74.jpg', 'https://www.coursera.org/learn/introduccion-java', 48),
(303, 'Programando con Java para aplicaciones Android', 2, 8, '¡Aprende lo mejor de Java para el desarrollo en Android! Descubre lo necesario para construir tus aplicaciones móviles de una forma sencilla, objetiva y práctica.', 'img/cursos/75.jpg', 'https://www.coursera.org/learn/programandoconjava', 48),
(304, 'Building Web Applications in PHP', 2, 8, 'In this course, you\'ll explore the basic structure of a web application, and how a web browser interacts with a web server. You\'ll be introduced to the request/response cycle, including GET/POST/Redirect. You\'ll also gain an introductory understanding of Hypertext Markup Language (HTML), as well as the basic syntax and data structures of the PHP language, variables, logic, iteration, arrays, error handling, and superglobal variables, among other elements. An introduction to Cascading Style Sheets (CSS) will allow you to style markup for webpages', 'img/cursos/76.jpg', 'https://www.coursera.org/learn/web-applications-php', 6),
(305, 'JavaScript, jQuery, and JSON', 2, 4, 'In this course, we\'ll look at the JavaScript language, and how it supports the Object-Oriented pattern, with a focus on the unique aspect of how JavaScript approaches OO. We\'ll explore a brief introduction to the jQuery library, which is widely used to do in-browser manipulation of the Document Object Model (DOM) and event handling. You\'ll also learn more about JavaScript Object Notation (JSON), which is commonly used as a syntax to exchange data between code running on the server (i.e. in PHP) and code running in the browser (JavaScript/jQuery).', 'img/cursos/77.jpg', 'https://www.coursera.org/learn/javascript-jquery-json', 6),
(306, 'Intermediate C++', 1, 8, 'This course is the second in a three-part series designed to teach students some of the most important C++ concepts. This part focuses on how C++ interacts with memory, featuring concepts like pointers/memory addresses, heap memory management, and writing/reading files.\r\nKnowing C++, you can create applications that will run on a wide variety of hardware platforms such as personal computers running Windows, Linux, UNIX, and Mac OS X, as well as small form factor hardware such as IoT devices like the Raspberry PI and Arduino –based boards.', 'img/cursos/78.jpg', 'https://www.edx.org/es/course/intermediate-c-2', 20),
(307, 'Object Oriented Programming in C#', 1, 8, 'C# was designed from the ground up to be an object-oriented, type-safe programming language.  In this course, you will build on the fundamentals that were covered in Introduction to C#.  You will extend your knowledge by applying core OOP principles to the code and applications you will create in this course. You will build a  knowledge of encapsulation, inheritance and polymorphism.   You will also learn memory management in the .NET framework.', 'img/cursos/79.jpg', 'https://www.edx.org/es/course/object-oriented-programming-in-c-2', 20),
(308, 'Analytics in Python', 1, 8, 'Data is the lifeblood of an organization. Competency in programming is an essential skill for successfully extracting information and knowledge from data.\r\nThe goal of this course is to introduce learners to the basics of programming in Python and to give a working knowledge of how to use programs to deal with data.', 'img/cursos/80.jpg', 'https://www.edx.org/es/course/analytics-in-python-2', 19),
(309, 'Introduction to the Internet of Things and Embedded Systems', 1, 7, ' explosive growth of the “Internet of Things” is changing our world and the rapid drop in price for typical IoT components is allowing people to innovate new designs and products at home. In this first class in the specialization you will learn the importance of IoT in society, the current components of typical IoT devices and trends for the future. IoT design considerations, constraints and interfacing between the physical world and your device will also be covered. You will also learn how to make design trade-offs between hardware and software. We\'ll also cover key components of networking to ensure that students understand how to connect their device to the Internet. Please note that this course does not include discussion forums.', 'img/cursos/81.jpg', 'https://www.coursera.org/learn/iot?specialization=iot', 6),
(310, 'Internet of Things (IoT)', 1, 7, 'The explosion of embedded and connected smart devices, systems and technologies in our lives has created an opportunity to connect every ‘thing’ to the internet. The resultant data collection and connectivity has created efficiencies and solutions previously dreamt up only in science fiction stories', 'img/cursos/82.jpg', 'https://www.edx.org/es/micromasters/curtinx-internet-of-things-iot', 3),
(311, 'Interfacing with the Arduino', 2, 7, 'Arduino senses the environment by receiving inputs from add-on devices such as sensors, and can control the world around it by adjusting lights, motors, and other actuators. In this class you will learn how and when to use the different types of sensors and how to connect them to the Arduino. Since the external world uses continuous or analog signals and the hardware is digital you will learn how these signals are converted back-and-forth and how this must be considered as you program your device.', 'img/cursos/83.jpg', 'https://www.coursera.org/learn/interface-with-arduino?specialization=iot', 4),
(312, 'The Raspberry Pi Platform and Python Programming for the Raspberry Pi', 2, 7, ' Raspberry Pi is a small, affordable single-board computer that you will use to design and develop fun and practical IoT devices while learning programming and computer hardware. In addition, you will learn how to set up up the Raspberry Pi environment, get a Linux operating system running, and write and execute some basic Python code on the Raspberry Pi. You will also learn how to use Python-based', 'img/cursos/84.jpg', 'https://www.coursera.org/learn/raspberry-pi-platform?specialization=iot', 3),
(313, 'AWS IoT: Developing and Deploying an Internet of Things', 1, 7, 'There are billions of devices in homes, factories, oil wells, hospitals, cars, and thousands of other places. With the proliferation of devices, you increasingly need solutions to connect them, and collect, store, and analyze device data. AWS IoT provides broad and deep functionality, spanning the edge to the cloud, so you can build IoT solutions for virtually any use case across a wide range of devices.', 'img/cursos/85.jpg', 'https://www.edx.org/es/micromasters/curtinx-internet-of-things-iot#courses', 45),
(314, 'Programming for the Internet of Things Project', 2, 7, 'In this Capstone course, you will design a microcontroller-based embedded system. As an option, you can also build and test a system. The focus of your project will be to design the system so that it can be built on a low-cost budget for a real-world application. To complete this project you\'ll need to use all the skills you\'ve learned in the course (programming microcontrollers, system design, interfacing, etc.).', 'img/cursos/86.jpg', 'https://www.coursera.org/learn/internet-of-things-project', 45),
(315, 'Enabling Technologies for Data Science and Analytics: The Internet of Things', 1, 7, 'The Internet of Things is rapidly growing. It is predicted that more than 25 billion devices will be connected by 2020. In this data science course, you will learn about the major components of the Internet of Things and how data is acquired from sensors. You will also examine ways of analyzing event data, sentiment analysis, facial recognition software and how data generated from devices can be used to make decisions.', 'img/cursos/87.jpg', 'https://www.edx.org/es/course/enabling-technologies-data-science-analytics-iot-1', 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos_usuarios`
--

CREATE TABLE `cursos_usuarios` (
  `id` int(10) NOT NULL,
  `id_cursos` int(10) NOT NULL,
  `id_usuarios` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plataforma`
--

CREATE TABLE `plataforma` (
  `id` int(10) NOT NULL,
  `plataforma` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plataforma`
--

INSERT INTO `plataforma` (`id`, `plataforma`) VALUES
(1, 'EDX'),
(2, 'COURSERA'),
(3, 'MIRANDAX'),
(4, 'UNDACITY'),
(5, 'CANVAS'),
(6, 'KHAN ACADEMY'),
(7, 'SAYLOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE `tema` (
  `id` int(10) NOT NULL,
  `tema` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`id`, `tema`) VALUES
(1, 'ALGORITMOS Y ESTRUCTURAS DE DATOS'),
(2, 'BASE DE DATOS'),
(3, 'CIBERSEGURIDAD'),
(4, 'DISEÑO WEB'),
(5, 'GAMES'),
(6, 'INTRODUCCIÓN A LA COMPUTACIÓN'),
(7, 'INTERNET DE LAS COSAS'),
(8, 'LENGUAJES DE PROGRAMACIÓN'),
(9, 'Electronica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universidad`
--

CREATE TABLE `universidad` (
  `id` int(11) NOT NULL,
  `universidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `universidad`
--

INSERT INTO `universidad` (`id`, `universidad`) VALUES
(1, 'UNIVERSIDAD POLITÉCNICA DE VALENCIA'),
(2, 'TECNOLÓGICO DE BOMBAY'),
(3, 'UNIVERSIDAD DE SAN DIEGO'),
(4, 'UNIVERSIDAD DE PRINCETON'),
(5, 'UNIVERSIDAD CATÓLICA DE MURCIA'),
(6, 'UNIVERSIDAD DE MICHIGAN'),
(7, 'UNIVERSIDAD FEDERAL DE URAL'),
(8, 'UNIVERSIDAD DE GEORGIA'),
(9, 'UNIVERSIDAD DE COLORADO'),
(10, 'UNIVERSIDAD DE RYERSON'),
(11, 'INSTITUTO DE TECNOLOGÍA DE ROCHESTER'),
(12, 'UNIVERSIDAD DE BUFFALO'),
(13, 'UNIVERSIDAD DE HONG KONG'),
(14, 'INSTITUTO DE ARTES DE CALIFORNIA'),
(15, 'UNIVERSIDAD DE HARVARD'),
(16, 'UNIVERSIDAD POLITÉCNICA DE VALENCIA'),
(17, 'UNIVERSIDAD DE LOS ANDES'),
(18, 'UNIVERSIDAD EUROPEA DE MADRID'),
(19, 'UNIVERSIDAD DE COLUMBIA'),
(20, 'MICROSOFT'),
(21, 'UNIVERSIDAD DE TORONTO'),
(22, 'UNIVERSIDAD DE WASHINGTON'),
(23, 'UNIVERSIDAD ORT DE URUGUAY'),
(24, 'UNIVERSIDAD DE STANFORD	'),
(25, 'IMT'),
(26, 'UNIVERSIDAD AUTÓNOMA DE BARCELONA'),
(27, 'UNIVERSIDAD POLITÉCNICA DE MADRID'),
(28, 'IBM'),
(29, 'GOOGLE'),
(30, 'UNIVERSIDAD DE AUSTRAL'),
(31, 'UNIVERSIDAD ESTATAL DE MICHIGAN'),
(32, 'UNIVERSIDAD CATÓLICA DE CHILE'),
(33, 'UNIVERSIDAD DE DUKE	'),
(45, '----'),
(48, 'UNAM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `cuenta` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `contraseña` varchar(500) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `apellidos` varchar(100) CHARACTER SET armscii8 NOT NULL,
  `ocupacion` varchar(500) CHARACTER SET armscii8 NOT NULL,
  `nivel_estudio` varchar(5000) CHARACTER SET armscii8 NOT NULL,
  `razon` varchar(1000) CHARACTER SET armscii8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `cuenta`, `email`, `contraseña`, `tipo`, `apellidos`, `ocupacion`, `nivel_estudio`, `razon`) VALUES
(1, 'mario', 'admin', 'terx@uaeh.edu.mx', 'admin', 'administrador', 'Contreras', 'estudiante', 'Universidad', 'pasar una materia '),
(10, 'juan', 'mariano', 'to325712@uaeh.edu.mx', 'trolololo', 'registrado', 'morales Gutierrez', 'estudiante', 'universidad', 'preparacion');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`) USING BTREE;

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_plataforma` (`id_plataforma`),
  ADD KEY `id_tema` (`id_tema`),
  ADD KEY `id_universidad` (`id_universidad`) USING BTREE;

--
-- Indices de la tabla `cursos_usuarios`
--
ALTER TABLE `cursos_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cursos` (`id_cursos`),
  ADD KEY `id_usuarios` (`id_usuarios`);

--
-- Indices de la tabla `plataforma`
--
ALTER TABLE `plataforma`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `universidad`
--
ALTER TABLE `universidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT de la tabla `cursos_usuarios`
--
ALTER TABLE `cursos_usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `plataforma`
--
ALTER TABLE `plataforma`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tema`
--
ALTER TABLE `tema`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `universidad`
--
ALTER TABLE `universidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`id_plataforma`) REFERENCES `plataforma` (`id`),
  ADD CONSTRAINT `cursos_ibfk_2` FOREIGN KEY (`id_tema`) REFERENCES `tema` (`id`),
  ADD CONSTRAINT `cursos_ibfk_3` FOREIGN KEY (`id_universidad`) REFERENCES `universidad` (`id`),
  ADD CONSTRAINT `cursos_ibfk_4` FOREIGN KEY (`id_tema`) REFERENCES `tema` (`id`),
  ADD CONSTRAINT `cursos_ibfk_5` FOREIGN KEY (`id_plataforma`) REFERENCES `plataforma` (`id`);

--
-- Filtros para la tabla `cursos_usuarios`
--
ALTER TABLE `cursos_usuarios`
  ADD CONSTRAINT `cursos_usuarios_ibfk_1` FOREIGN KEY (`id_cursos`) REFERENCES `cursos` (`id`),
  ADD CONSTRAINT `cursos_usuarios_ibfk_2` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
