/*

Online Taxi Booking Site

Database : taxi-booking

*/

CREATE TABLE cars (
  id INT PRIMARY KEY,
  name VARCHAR(255),
  passangers INT,
  large_bags INT,
  small_bags INT
);

-- Dummy Data About : Cars 

INSERT INTO `cars` (`id`, `name`, `passangers`, `large_bags`, `small_bags`) VALUES ('1', 'Estate Car', '4', '4', '4');

INSERT INTO `cars` (`id`, `name`, `passangers`, `large_bags`, `small_bags`) VALUES ('2', 'MPV +', '4', '0', '2');

INSERT INTO `cars` (`id`, `name`, `passangers`, `large_bags`, `small_bags`) VALUES ('3', '8 Seater minibus', '8', '6', '4');