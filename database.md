# user_login,tour_packages,schedule :Kaluarachchi KCD
```
CREATE TABLE `user_login` (
  `user_id` int NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `tour_packages` (
  `package_id` int NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `duration` int NOT NULL,
  `image_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `schedule` (
  `schedule_id` int NOT NULL,
  `traveler_id` int NOT NULL,
  `package_id` int NOT NULL,
  `accommodation_id` int NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


```
# inquiry,events : Kulakshi Herath
```
CREATE TABLE `Inquiry` (
  `inquiry_id` int NOT NULL,
  `traveler_id` int NOT NULL,
  `staff_id` int NOT NULL,
  `message` varchar(500) NOT NULL,
  `response` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE events (
  event_id int NOT NULL,
  name varchar(50) NOT NULL,
  date date NOT NULL,
  location varchar(20) NOT NULL,
  description varchar(400) NOT NULL
) ;





```
# Traveller,staff : Nuwani Fernando
```
CREATE TABLE staff (
  staff_id int NOT NULL,
  user_id int NOT NULL,
  staff_full_name varchar(100) NOT NULL,
  email varchar(50) NOT NULL,
  phone varchar(15) NOT NULL
) ;

CREATE TABLE Traveller ( 
traveller_id int NOT NULL, 
user_id int NOT NULL, 
full_name varchar(100) NOT NULL, 
email varchar(50) NOT NULL,
number_of_heads int NOT NULL,
check_in date NOT NULL, 
country varchar(50) NOT NULL,
phone varchar(15) NOT NULL, 
gender varchar(15) NOT NULL 
) ;

```












```