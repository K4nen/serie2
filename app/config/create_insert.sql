SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+01:00";

CREATE DATABASE IF NOT EXISTS crypto;

CREATE TABLE `Crypto` (
                         `id` int(11) NOT NULL,
                         `Nom` varchar(100) NOT NULL,
                         `Symbole` varchar(100) NOT NULL,
                         `DateCreation` varchar(100) NOT NULL,
                         `Createur` char(11) NOT NULL,
                         `Minable` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `Crypto` (`id`, `Nom`, `Symbole`, `DateCreation`, `Createur`, `Minable`) VALUES
    (1, 'Bitcoin', 'BTC', '03/01/2009', 'Satoshi Nakamoto', 'Oui'),
    (2, 'Ethereum', 'ETH', '30/07/2015', 'Vitalik Buterin', 'Oui'),
    (3, 'Ripple', 'XRP', '00/00/2012', 'Arthur Britto', 'Non'),
    (4, 'Litecoin', 'LTC', '07/10/2011', 'Charles Lee', 'Oui'),
    (5, 'Dash', 'DASH', '18/01/2014', 'Evan Duffield', 'Oui');

ALTER TABLE `Crypto`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `Crypto`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;


