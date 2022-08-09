SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `own` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `D_of_birth` varchar(30) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `own` (`id`, `Name`, `Email`, `Phone`, `D_of_birth`, `date_time`) VALUES
(1, 'hritik', 'hritikdey1234@mail.com', '9832960006', '2002-02-26', '2022-04-02 12:10:46');

ALTER TABLE `own`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `own`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;