
create database sistemas_ucv;

	use sistemas_ucv; 

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(10) DEFAULT NULL,
  `Apellido` varchar(10) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Clave` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;


INSERT INTO `usuario` (`Id`, `Nombre`, `Apellido`, `Email`, `Clave`) VALUES
(40, 'scdsc', 'sdddds', 'falcon@hotmail.com', 'bc7316929fe1545bf0b98d114ee3ecb8');
COMMIT;

