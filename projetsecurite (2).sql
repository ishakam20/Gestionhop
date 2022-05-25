-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3307
-- Généré le : mer. 25 mai 2022 à 18:03
-- Version du serveur :  5.7.24
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetsecurite`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `email` varchar(50) NOT NULL,
  `nomUser` varchar(40) NOT NULL,
  `mdp` text NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prénom` varchar(30) NOT NULL,
  `Tel` int(20) NOT NULL,
  `data_naiss` date DEFAULT NULL,
  `idHopital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`email`, `nomUser`, `mdp`, `Nom`, `Prénom`, `Tel`, `data_naiss`, `idHopital`) VALUES
('admin2@gmail.com', 'admin2', '$2y$10$uDnFqwgIB7eowiw6pBQnvO5ePhUZP1UPOZJ3icZX7iKj7q/8eb6RW', 'Admin', 'Admin2', 557565458, '2000-11-20', 2),
('admin3@gmail.com', 'admin3', '$2y$10$uDnFqwgIB7eowiw6pBQnvO5ePhUZP1UPOZJ3icZX7iKj7q/8eb6RW', 'admin3', 'adm3', 544556688, '2000-11-20', 3),
('admin4@gmail.com', 'admin4', '$2y$10$uDnFqwgIB7eowiw6pBQnvO5ePhUZP1UPOZJ3icZX7iKj7q/8eb6RW', 'admin4', 'adminn4', 776542683, '2000-11-20', 4),
('admin@gmail.com', 'admin', '$2y$10$uDnFqwgIB7eowiw6pBQnvO5ePhUZP1UPOZJ3icZX7iKj7q/8eb6RW', 'admin', 'adminn', 554566554, '2000-11-20', 1);

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE `consultation` (
  `idConsultation` int(11) NOT NULL,
  `taille` varchar(30) NOT NULL,
  `poids` varchar(30) NOT NULL,
  `tension` varchar(15) NOT NULL,
  `antecedents` text NOT NULL,
  `maladiesChroniques` text NOT NULL,
  `observation` text NOT NULL,
  `diagnostic` text NOT NULL,
  `analyse` text NOT NULL,
  `examenMedical` text NOT NULL,
  `resultat` varchar(90) NOT NULL,
  `commentaire` text NOT NULL,
  `dateConsult` date NOT NULL,
  `idPatient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `consultation`
--

INSERT INTO `consultation` (`idConsultation`, `taille`, `poids`, `tension`, `antecedents`, `maladiesChroniques`, `observation`, `diagnostic`, `analyse`, `examenMedical`, `resultat`, `commentaire`, `dateConsult`, `idPatient`) VALUES
(9, 'ej9uKw==', 'fSU=', 'eiA=', 'Cn8t3XTJu23v8bITVQ==', '', 'BHMqe6/cv33j8KgTVQ==', 'D3g4ebPFrX3j7rNWRN4=', 'Cn84cqTZuym7', 'a1Qhf7DPsCnHXG9XDYyQQNvq', 'GdLwbajGqmj+v/c=', 'CH40c7jEqmjj7aMTVQ==', '2021-12-25', 7),
(10, 'ej9uLA==', 'fSU=', 'eiE=', 'Cn8t3XTJu23v8bJARN0=', '', 'BHMqe6/cv33j8KgTVg==', 'D3g4ebPFrX3j7rNWRN0=', 'Cn84cqTZuym4v+Y=', 'Dmk4c7jE/kRJNqJaB46dDMn7', 'GdLwbajGqmj+v/Q=', 'CH40c7jEqmjj7aMTVg==', '2021-12-26', 8),
(11, 'ej9uLA==', 'fSQ=', 'cj9h', '', 'BnA1f7nDu3qq3K5BC4GYXY6+utnk', 'BHMqe6/cv33j8KgTVQ==', 'D3g4ebPFrX3j7rNWRN4=', 'Cn84cqTZuym7v+Y=', 'Dmk4c7jE/kRJNqJaB46dDMr7', 'GdLwbajGqmj+v/c=', 'CH40c7jEqmjj7aMTVQ==', '2021-12-27', 10),
(12, 'ej9uKg==', 'fSM=', 'eiA=', '', 'BnA1f7nDu3qq3K5BC4GYXY6+utnn', 'BHMqe6/cv33j8KgTVg==', 'D3g4ebPFrX3j7rNWRN0=', 'Cn84cqTZuym4v+Y=', 'Dmk4c7jE/kRJNqJaB46dDMn7', 'GdLwbajGqmj+v/Q=', 'CH40c7jEqmjj7aMTVg==', '2021-12-28', 12),
(13, 'ej9hJg==', 'cyE=', 'cj9s', '', 'BnA1f7nDu3qq3K5BC4GYXY6+utnm', 'BHMqe6/cv33j8KgTVw==', 'D3g4ebPFrX3j7rNWRNzR', 'Cn84cqTZuym5v+Y=', 'Dmk4c7jE/kRJNqJaB46dDMj7', 'GdLwbajGqmj+v/U=', 'CH40c7jEqmjj7aMTVw==', '2021-12-29', 13),
(14, 'ej9gLg==', 'cyQ=', 'cz9h', 'Cn8t3XTJu23v8bJARNw=', '', 'BHMqe6/cv33j8KgTVw==', 'D3g4ebPFrX3j7rNWRNw=', 'Cn84cqTZuym5v+Y=', 'Dmk4c7jE/kRJNqJaB46dDMj7', 'GdLwbajGqmj+v/U=', 'CH40c7jEqmjj7aMTVw==', '2021-12-30', 11),
(18, 'ej9uJg==', 'fCE=', 'eiE=', 'Cn8t3XTJu23v8bJARN4=', '', 'BHMqe6/cv33j8KgTVQ==', 'D3g4ebPFrX3j7rNWRN4=', 'Cn84cqTZuym7v+Y=', 'Dmk4c7jE/kRJNqJaB46dDMr7', 'GdLwbajGqmj+v/c=', 'CH40c7jEqmjj7aMTVQ==', '2022-01-02', 14),
(19, 'ej9gLg==', 'cyE=', 'cj9s', 'Cn8t3XTJu23v8bJARN0=', '', 'BHMqe6/cv33j8KgTVg==', 'D3g4ebPFrX3j7rNWRN0=', 'azEYcLzGp3rvv/Q=', 'Dmk4c7jE/kRJNqJaB46dDMn7', 'GdLwbajGqmj+v/Q=', 'CH40c7jEqmjj7aMTVg==', '2021-02-01', 15),
(20, 'ej9rLg==', 'eCM=', 'cz9s', 'Cn8t3XTJu23v8bJARNw=', '', 'BHMqe6/cv33j8KgTVw==', 'D3g4ebPFrX3j7rNWRNw=', 'Cn84cqTZuym5v+Y=', 'Dmk4c7jE/mRJNqJaB46dDMj7', 'GdLwbajGqmj+v/U=', 'CH40c7jEqmjj7aMTVw==', '2022-01-02', 16),
(21, 'ej9uKw==', 'fSU=', 'eiF3Jw==', 'Cn8t3XTJHaDu+qhHF8/D', '', 'BHMqe6/cv33j8KgTVg==', 'D3g4ebPFrX3j7rNWRN0=', 'Cn84cqTZuym4v+Y=', 'a1Qhf7DPsCnHXG9XDYyQQNvp', 'GdLwbajGqmj+v/Q=', 'CH40c7jEqmjj7aMTVg==', '2021-12-24', 16),
(22, 'ej9hLA==', 'fCQ=', 'eiF3LA==', '', 'BnA1f7nDu3qq3K5BC4GYXY6+utnk', 'BHMqe6/cv33j8KgTVQ==', 'D3g4ebPFrX3j7rNWRN4=', 'Cn84cqTZuym7v+Y=', 'Dmk4c7jE/mRJNqJaB46dDMr7', 'GdLwbajGqmj+v/c=', 'CH40c7jEqmjj7aMTVQ==', '2021-12-29', 17),
(23, 'ej9vKw==', 'fiY=', 'cz9h', '', 'BnA1f7nDu3qq3K5BC4GYXY6+utnn', 'BHMqe6/cv33j8KgTVg==', 'D3g4ebPFrX3j7rNWRN0=', 'Cn84cqTZuym4v+Y=', 'Dmk4c7jE/kRJNqJaB46dDMn7', 'GdLwbajGqmj+v/Q=', 'CH40c7jEqmjj7aMTVg==', '2021-12-01', 18),
(24, 'ej9rLw==', 'eCc=', 'fD9g', '', 'BnA1f7nDu3qq3K5BC4GYXY6+ug==', 'BHMqe6/cv33j8KgTVw==', 'D3g4ebPFrX3j7rNWRNw=', 'Cn84cqTZuym5v+Y=', 'a1Qhf7DPsCnHXG9XDYyQQNvo', 'GdLwbajGqmj+v/U=', 'CH40c7jEqmjj7aMTVw==', '2021-12-25', 19);

-- --------------------------------------------------------

--
-- Structure de la table `hopital`
--

CREATE TABLE `hopital` (
  `idHopital` int(11) NOT NULL,
  `nomHopital` varchar(60) NOT NULL,
  `wilaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `hopital`
--

INSERT INTO `hopital` (`idHopital`, `nomHopital`, `wilaya`) VALUES
(1, 'Mustapha Pacha', 16),
(2, 'CHU Oran', 31),
(3, 'CHU Frantz Fanon', 9),
(4, 'AHMED MEDAGHRI', 46);

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `idMedecin` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomUser` varchar(40) NOT NULL,
  `mdp` text NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prénom` varchar(20) NOT NULL,
  `Tel` int(20) NOT NULL,
  `data_naiss` date DEFAULT NULL,
  `idService` int(11) NOT NULL,
  `idHopital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`idMedecin`, `email`, `nomUser`, `mdp`, `Nom`, `Prénom`, `Tel`, `data_naiss`, `idService`, `idHopital`) VALUES
(13, 'medecin1@gmail.com', '', '$2y$10$uDnFqwgIB7eowiw6pBQnvO5ePhUZP1UPOZJ3icZX7iKj7q/8eb6RW', 'AMINE', 'Ishak', 778823166, '2000-11-20', 1, 1),
(14, 'medecin2@gmail.com', '', '$2y$10$cjM0ErFlLuIXLvQVhCA/deSCb5yMF1fnAzwR38hY9XhTAjNgnCQha', 'BENABED', 'Anfel', 554423668, '1985-12-22', 2, 2),
(15, 'medecin3@gmail.com', '', '$2y$10$M6mye6xGLOy6akEpiIm.4OXgvfiLH7vzcFjcGhqcnZ0siqElPhECe', 'SAID', 'Racha', 775544639, '1985-11-25', 1, 1),
(16, 'medecin4@gmail.com', '', '$2y$10$q3LFM4tdGwOsVbcI.whAxeVcBE1J4rE/d4P8J/1MYl.9lIxWcg/ia', 'ABDELBAKI', 'Feriel', 554477445, '1985-12-23', 6, 1),
(26, 'medecin5@gmail.com', '', '$2y$10$k7w/wJSZcD2SwYXbD909O.JKSd8LKLOkaaFLSL8H2XjK5zPYo2O9a', 'BOUKERSI', 'Yasmine', 775588664, '1985-07-09', 11, 3),
(27, 'medecin6@gmail.com', '', '$2y$10$iEkCXO/0nX8JUjvVvh1e.el6gy5Xqqc9VkmfvHafwQF.AWS4i53py', 'ATTATFA', 'Faiza', 788654456, '1985-12-04', 12, 3),
(28, 'medecin7@gmail.com', '', '$2y$10$RGn8QzV2mkBWf7O0edyGh.C1/9tvYT.n5v8lUJqPoKNTpJkKHq5fS', 'KHERROUBI', 'Kenza', 775545225, '1985-04-29', 13, 3),
(29, 'medecin8@gmail.com', '', '$2y$10$pqcaHxaXJr6DHy/sG/AKneVbKE6A6gmsIAhxovXVndMvhy.VdgAN2', 'YACEF', 'Yasmina', 775544112, '1985-12-06', 18, 4),
(30, 'medecin9@gmail.com', '', '$2y$10$MehzWBHtBilumSBNlrcScOw5x9AGcxZIzyVD.LTfSOxYtK3ENKYSC', 'MEDECIN 9', 'Medecin 9', 785544563, '2000-11-20', 19, 4),
(31, 'medecin10@gmail.com', '', '$2y$10$FKp.b7Rg/v5e/dWPkl7pseDCmL5Otzi6M.5eHR.OhxpMyLnHOYeXi', 'MEDECIN 10', 'Medecin 10', 774455668, '2000-11-20', 20, 4),
(32, 'medecin11@gmail.com', '', '$2y$10$BVQiGgc/ZNHrzfE0JnJn/ev.D5fqfdypnUT2aT.psw3DnJijfIrtC', 'aaaaaa', 'bbbb', 557585654, '2000-12-20', 9, 1);

-- --------------------------------------------------------

--
-- Structure de la table `ministeresante`
--

CREATE TABLE `ministeresante` (
  `idMinistere` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prénom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Tel` int(20) NOT NULL,
  `data_naiss` date NOT NULL,
  `mdp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ministeresante`
--

INSERT INTO `ministeresante` (`idMinistere`, `Nom`, `Prénom`, `email`, `Tel`, `data_naiss`, `mdp`) VALUES
(1, 'minis', 'minist', 'minist@gmail.com', 545653221, '2000-11-20', '$2y$10$uDnFqwgIB7eowiw6pBQnvO5ePhUZP1UPOZJ3icZX7iKj7q/8eb6RW');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `idPatient` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel1` varchar(25) NOT NULL,
  `tel2` varchar(25) NOT NULL,
  `dateN` date NOT NULL,
  `grp-sanguin` enum('O-POS','O-NEG','A-POS','A-NEG','B-POS','B-NEG','AB-POS','AB-NEG') NOT NULL,
  `genre` enum('Homme','Femme') NOT NULL,
  `idHopital` int(11) NOT NULL,
  `idService` int(11) NOT NULL,
  `idMedecin` int(11) NOT NULL,
  `archive` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`idPatient`, `nom`, `prenom`, `email`, `tel1`, `tel2`, `dateN`, `grp-sanguin`, `genre`, `idHopital`, `idService`, `idMedecin`, `archive`) VALUES
(7, 'Patient1', 'Pat1', 'patient1@gmail.com', '0554566554', '0654423221', '1990-10-15', 'O-POS', 'Homme', 1, 1, 13, 'non'),
(8, 'Patient2', 'Pat2', 'patient2@gmail.com', '0566545758', '0654423223', '1967-12-30', 'O-NEG', 'Femme', 1, 1, 13, 'non'),
(9, 'Patient3', 'Pat3', 'patient3@gmail.com', '0775566325', '0554423118', '2000-11-21', 'A-NEG', 'Homme', 1, 6, 16, 'non'),
(10, 'Patient4', 'Pat4', 'patient4@gmail.com', '0554455663', '', '1987-07-25', 'B-NEG', 'Homme', 2, 2, 14, 'oui'),
(11, 'Patient5', 'Pat5', 'patient5@gmail.com', '0778544568', '0554474556', '1997-10-19', 'O-NEG', 'Femme', 1, 1, 15, 'non'),
(12, 'Patient6', 'Pat6', 'patient6@gmail.com', '0775566321', '', '2000-11-20', 'O-NEG', 'Homme', 2, 2, 14, 'non'),
(13, 'Patient7', 'Pat7', 'patient7@gmail.com', '0776855445', '', '1975-06-15', 'O-POS', 'Homme', 2, 2, 14, 'non'),
(14, 'Patient8', 'Pat8', 'patient8@gmail.com', '0554477856', '0774522445', '1999-10-25', 'O-NEG', 'Femme', 3, 11, 26, 'non'),
(15, 'Patient9', 'Pat9', 'patient9@gmail.com', '0554452425', '0778554456', '1967-12-31', 'O-NEG', 'Homme', 3, 6, 27, 'non'),
(16, 'Patient10', 'Pat10', 'patient10@gmail.com', '0775585758', '0755866833', '2016-11-21', 'AB-POS', 'Femme', 3, 13, 28, 'non'),
(17, 'Patient11', 'Pat11', 'patient11@gmail.com', '0778544565', '', '1980-01-18', 'AB-POS', 'Femme', 4, 18, 29, 'non'),
(18, 'Patient12', 'Pat12', 'patient12@gmail.com', '0545566554', '', '1987-07-25', 'O-POS', 'Homme', 4, 19, 30, 'non'),
(19, 'Patient13', 'Pat13', 'patient13@gmail.com', '0772322141', '', '2019-05-25', 'B-POS', 'Femme', 4, 20, 31, 'non');

-- --------------------------------------------------------

--
-- Structure de la table `secretaire`
--

CREATE TABLE `secretaire` (
  `email` varchar(50) NOT NULL,
  `nomUser` varchar(40) NOT NULL,
  `mdp` text NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prénom` varchar(30) NOT NULL,
  `Tel` int(15) NOT NULL,
  `data_naiss` date NOT NULL,
  `idService` int(11) NOT NULL,
  `idHopital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `secretaire`
--

INSERT INTO `secretaire` (`email`, `nomUser`, `mdp`, `Nom`, `Prénom`, `Tel`, `data_naiss`, `idService`, `idHopital`) VALUES
('sec10@gmail.com', 'sec10', '$2y$10$uDnFqwgIB7eowiw6pBQnvO5ePhUZP1UPOZJ3icZX7iKj7q/8eb6RW', 'sec10', 'secc10', 775542665, '2000-11-20', 18, 4),
('sec11@gmail.com', 'sec11', '$2y$10$uDnFqwgIB7eowiw6pBQnvO5ePhUZP1UPOZJ3icZX7iKj7q/8eb6RW', 'sec11', 'secc11', 755585452, '2000-11-20', 19, 4),
('sec12@gmail.com', 'sec12', '$2y$10$uDnFqwgIB7eowiw6pBQnvO5ePhUZP1UPOZJ3icZX7iKj7q/8eb6RW', 'sec12', 'secc12', 55321448, '2000-11-20', 20, 4),
('sec1@gmail.com', 'secc', '$2y$10$uDnFqwgIB7eowiw6pBQnvO5ePhUZP1UPOZJ3icZX7iKj7q/8eb6RW', 'sec', 'secc', 775566554, '2000-11-20', 1, 1),
('sec2@gmail.com', 'sec2', '$2y$10$uDnFqwgIB7eowiw6pBQnvO5ePhUZP1UPOZJ3icZX7iKj7q/8eb6RW', 'sec2', 'secc2', 544255785, '2000-11-20', 6, 1),
('sec3@gmail.com', 'sec3', '$2y$10$uDnFqwgIB7eowiw6pBQnvO5ePhUZP1UPOZJ3icZX7iKj7q/8eb6RW', 'sec3', 'secc3', 775566566, '2000-11-20', 3, 1),
('sec4@gmail.com', 'test', '$2y$10$uDnFqwgIB7eowiw6pBQnvO5ePhUZP1UPOZJ3icZX7iKj7q/8eb6RW', 'testt', 'test', 775566554, '2000-11-20', 2, 2),
('sec5@gmail.com', 'sec5', '$2y$10$uDnFqwgIB7eowiw6pBQnvO5ePhUZP1UPOZJ3icZX7iKj7q/8eb6RW', 'sec5', 'secc5', 774455667, '2000-11-20', 4, 2),
('sec6@gmail.com', 'sec6', '$2y$10$uDnFqwgIB7eowiw6pBQnvO5ePhUZP1UPOZJ3icZX7iKj7q/8eb6RW', 'sec6', 'secc6', 544556687, '2000-11-20', 5, 2),
('sec7@gmail.com', 'sec7', '$2y$10$./6nxlzQnyw8VZJR6DJ4ce/6qXvocm8WMmgwjqnmqKplFif6FEbJK', 'ss', 'ssss', 774455896, '2000-11-20', 11, 3),
('sec8@gmail.com', 'sec8', '$2y$10$uDnFqwgIB7eowiw6pBQnvO5ePhUZP1UPOZJ3icZX7iKj7q/8eb6RW', 'sec8', 'secc8', 778855442, '2000-11-20', 12, 3),
('sec9@gmail.com', 'sec9', '$2y$10$uDnFqwgIB7eowiw6pBQnvO5ePhUZP1UPOZJ3icZX7iKj7q/8eb6RW', 'sec9', 'secc9', 774189354, '2000-11-20', 13, 3);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `idService` int(11) NOT NULL,
  `nomService` varchar(40) NOT NULL,
  `idHopital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`idService`, `nomService`, `idHopital`) VALUES
(1, 'Neurologie', 1),
(2, 'Cardiologie', 2),
(3, 'Pediatrie', 1),
(4, 'Neurologie', 2),
(5, 'Pediatrie', 2),
(6, 'Cardiologie', 1),
(9, 'Aucun', 1),
(10, 'Aucun', 2),
(11, 'Neurologie', 3),
(12, 'Cardiologie', 3),
(13, 'Pediatrie', 3),
(17, 'Aucun', 3),
(18, 'Neurologie', 4),
(19, 'Cardiologie', 4),
(20, 'Pediatrie', 4),
(21, 'Aucun', 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`email`),
  ADD KEY `fk_admin_hopital` (`idHopital`);

--
-- Index pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`idConsultation`),
  ADD KEY `fk_consult_patient` (`idPatient`);

--
-- Index pour la table `hopital`
--
ALTER TABLE `hopital`
  ADD PRIMARY KEY (`idHopital`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`idMedecin`),
  ADD KEY `fk_medecin_service` (`idService`),
  ADD KEY `fk_medecin_hopital` (`idHopital`);

--
-- Index pour la table `ministeresante`
--
ALTER TABLE `ministeresante`
  ADD PRIMARY KEY (`idMinistere`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`idPatient`),
  ADD KEY `fk_pat_hop` (`idHopital`),
  ADD KEY `fk_pat_service` (`idService`),
  ADD KEY `fk_pat_medecin` (`idMedecin`);

--
-- Index pour la table `secretaire`
--
ALTER TABLE `secretaire`
  ADD PRIMARY KEY (`email`),
  ADD KEY `fk_s_service` (`idService`),
  ADD KEY `fk_s_hopital` (`idHopital`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`idService`),
  ADD KEY `fk_service_hopital` (`idHopital`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `idConsultation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `hopital`
--
ALTER TABLE `hopital`
  MODIFY `idHopital` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `idMedecin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `ministeresante`
--
ALTER TABLE `ministeresante`
  MODIFY `idMinistere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `idPatient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `idService` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD CONSTRAINT `fk_admin_hopital` FOREIGN KEY (`idHopital`) REFERENCES `hopital` (`idHopital`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `fk_consult_patient` FOREIGN KEY (`idPatient`) REFERENCES `patient` (`idPatient`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD CONSTRAINT `fk_medecin_hopital` FOREIGN KEY (`idHopital`) REFERENCES `hopital` (`idHopital`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_medecin_service` FOREIGN KEY (`idService`) REFERENCES `service` (`idService`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `fk_pat_hop` FOREIGN KEY (`idHopital`) REFERENCES `hopital` (`idHopital`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pat_medecin` FOREIGN KEY (`idMedecin`) REFERENCES `medecin` (`idMedecin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pat_service` FOREIGN KEY (`idService`) REFERENCES `service` (`idService`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `secretaire`
--
ALTER TABLE `secretaire`
  ADD CONSTRAINT `fk_s_hopital` FOREIGN KEY (`idHopital`) REFERENCES `hopital` (`idHopital`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_s_service` FOREIGN KEY (`idService`) REFERENCES `service` (`idService`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `fk_service_hopital` FOREIGN KEY (`idHopital`) REFERENCES `hopital` (`idHopital`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
