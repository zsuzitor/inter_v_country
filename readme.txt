
название бд - bd_inter_v
используется в файлах(mysqli_connect): index.php,add_new_country.php

таблица:

CREATE TABLE `countries` (`id` INT(5) NOT NULL AUTO_INCREMENT, `name` VARCHAR(100) NOT NULL, `number_of_cities` INT(30) NOT NULL, `population` INT(30) NOT NULL, `monarchy` BIT(1) NOT NULL, PRIMARY KEY(`id`));
	