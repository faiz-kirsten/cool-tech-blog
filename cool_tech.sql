CREATE DATABASE cool_tech;
USE cool_tech;

CREATE TABLE `cool_tech`.`categories` (
`id` INT NOT NULL AUTO_INCREMENT ,
`category` VARCHAR(50) NOT NULL ,
`slug` VARCHAR(50) NOT NULL, 
PRIMARY KEY (`id`));

CREATE TABLE `cool_tech`.`tags` (
`id` INT NOT NULL AUTO_INCREMENT , 
`tag` VARCHAR(50) NOT NULL , 
`slug` VARCHAR(50) NOT NULL, 
PRIMARY KEY (`id`));

CREATE TABLE `cool_tech`.`articles` (
`id` INT NOT NULL AUTO_INCREMENT , 
`title` VARCHAR(125) NOT NULL , 
`category_id` INT NOT NULL , 
`created` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , 
`content` LONGTEXT NOT NULL DEFAULT "What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). Where does it come from? Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \'de Finibus Bonorum et Malorum\' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \'Lorem ipsum dolor sit amet..\', comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \'de Finibus Bonorum et Malorum\' by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham. Where can I get some? There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc." , 
PRIMARY KEY (`id`), 
INDEX `main_INDEX` (`category_id`, `created`),
FOREIGN KEY (category_id) REFERENCES categories(id));

CREATE TABLE `cool_tech`.`article_tags_map` (
`id` INT NOT NULL AUTO_INCREMENT , 
`tag_id` INT NOT NULL , 
`article_id` INT NOT NULL , 
PRIMARY KEY (`id`),
FOREIGN KEY (tag_id) REFERENCES tags(id), 
FOREIGN KEY (article_id) REFERENCES articles(id));

-- Insert into tags
INSERT INTO `tags` (`id`, `tag`, `slug`) VALUES (NULL, 'AI', 'ai'), (NULL, 'Google', 'google'), (NULL, 'Singularity', 'singularity'), (NULL, 'Tech', 'tech'), (NULL, 'Laravel', 'laravel'), (NULL, 'Frontend development', 'frontend-development'), (NULL, 'High-Performance Computing', 'high-performance-computing');

-- Insert into categories
INSERT INTO `categories` (`id`, `category`, `slug`) VALUES (NULL, 'Tech news', 'tech-news'), (NULL, 'Software reviews', 'software-reviews'), (NULL, 'Hardware reviews', 'hardware-reviews'), (NULL, 'Opinion pieces', 'opinion-pieces'), (NULL, 'Web development', 'web-development');

INSERT INTO `articles` (`title`, `category_id`)
VALUES 
('The Future of Artificial Intelligence: Challenges and Opportunities', 1),
('Climate Change and Its Impact on Global Biodiversity: A Comprehensive Analysis', 2),
('Unraveling the Mysteries of Quantum Computing: A Step Towards the Future', 2),
('The Evolution of Social Media: Implications for Communication and Society', 4),
('Understanding the Role of Neuroplasticity in Cognitive Rehabilitation: A Neuroscientific Perspective', 3),
('Reimagining Urban Spaces: Innovations in Sustainable City Planning and Design', 1),
('The Impact of Globalization on Cultural Identity: A Cross-Cultural Analysis
', 4),
('The Power of Emotional Intelligence in Leadership: Strategies for Effective Management', 3),
('Revolutionizing Healthcare through Digital Transformation: Opportunities and Challenges Ahead', 4),
('Exploring the Potential of Gene Editing in Agriculture: A Solution for Sustainable Food Production', 1);

INSERT INTO `article_tags_map` (`tag_id`, `article_id`)
VALUES 
(6, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 2),
(1, 2),
(2, 2),
(4, 3),
(5, 3),
(3, 3),
(2, 3),
(1, 3),
(6, 4),
(3, 4),
(4, 5),
(2, 6),
(3, 6),
(1, 6),
(4, 7),
(5, 7),
(1, 7),
(3, 7),
(5, 8),
(6, 8),
(3, 9),
(1, 9),
(2, 9),
(6, 9),
(4, 9),
(1, 10),
(4, 10),
(2, 10),
(6, 10),
(3, 10),
(7, 1),
(7, 4),
(7, 6),
(7, 3),
(7, 9);
