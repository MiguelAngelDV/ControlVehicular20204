<!-- Vehiculos -->
INSERT INTO `vehiculo` (`Idvehiculo`, `NIV`, `Origen`, `Placa`, `Modelo`, `Marca`, `Serie`, `Tipo`, `Capacidad`, `Version`, `Aseguradora`, `Transmision`, `Cilindros`, `Combustible`, `Motor`, `Capacidadpeso`, `Color`, `Puertas`, `Propietario`, `verificaciones`) 
VALUES (NULL, 'NIV2', 'Origen2', 'Placa2', '100', 'Marca2', '123', 'Tipo2', '3', 'Version1', 'Aseguradora2', 'Transmision', '4', 'Combustible', 'Motor', 'PesoCapacidad', 'Color', '2', '4', '5');

INSERT INTO `vehiculo` (`Idvehiculo`, `NIV`, `Origen`, `Placa`, `Modelo`, `Marca`, `Serie`, `Tipo`, `Capacidad`, `Version`, `Aseguradora`, `Transmision`, `Cilindros`, `Combustible`, `Motor`, `Capacidadpeso`, `Color`, `Puertas`, `Propietario`, `verificaciones`) 
VALUES (NULL, 'NIV3', 'Origen3', 'Placa3', '100', 'Marca3', '123', 'Tipo3', '3', 'Version2', 'Aseguradora3', 'Transmision', '4', 'Combustible', 'Motor', 'PesoCapacidad', 'Color', '3', '5', '6');

INSERT INTO `vehiculo` (`Idvehiculo`, `NIV`, `Origen`, `Placa`, `Modelo`, `Marca`, `Serie`, `Tipo`, `Capacidad`, `Version`, `Aseguradora`, `Transmision`, `Cilindros`, `Combustible`, `Motor`, `Capacidadpeso`, `Color`, `Puertas`, `Propietario`, `verificaciones`) 
VALUES (NULL, 'NIV4', 'Origen4', 'Placa4', '100', 'Marca4', '123', 'Tipo4', '3', 'Version3', 'Aseguradora4', 'Transmision', '4', 'Combustible', 'Motor', 'PesoCapacidad', 'Color', '4', '6', '7');

INSERT INTO `vehiculo` (`Idvehiculo`, `NIV`, `Origen`, `Placa`, `Modelo`, `Marca`, `Serie`, `Tipo`, `Capacidad`, `Version`, `Aseguradora`, `Transmision`, `Cilindros`, `Combustible`, `Motor`, `Capacidadpeso`, `Color`, `Puertas`, `Propietario`, `verificaciones`) 
VALUES (NULL, 'NIV5', 'Origen5', 'Placa5', '100', 'Marca5', '123', 'Tipo5', '3', 'Version4', 'Aseguradora5', 'Transmision', '4', 'Combustible', 'Motor', 'PesoCapacidad', 'Color', '4', '7', '8');
<!-- Verificaciones -->
INSERT INTO `verificaciones` (`Idverificaciones`, `Tipo`, `Dictamen`, `Periodo`, `Vigencia`, `Centroverificaciones`) VALUES (NULL, '1', 'Dictamen2', 'Periodo2', '2020-03-05', '3');
INSERT INTO `verificaciones` (`Idverificaciones`, `Tipo`, `Dictamen`, `Periodo`, `Vigencia`, `Centroverificaciones`) VALUES (NULL, '1', 'Dictamen3', 'Periodo3', '2020-03-05', '4');
INSERT INTO `verificaciones` (`Idverificaciones`, `Tipo`, `Dictamen`, `Periodo`, `Vigencia`, `Centroverificaciones`) VALUES (NULL, '1', 'Dictamen4', 'Periodo4', '2020-03-05', '5');
INSERT INTO `verificaciones` (`Idverificaciones`, `Tipo`, `Dictamen`, `Periodo`, `Vigencia`, `Centroverificaciones`) VALUES (NULL, '1', 'Dictamen5', 'Periodo5', '2020-03-05', '6');

<!-- Multas -->
INSERT INTO `multas` (`Idmulta`, `Motivo`, `Fecha`, `Hora`, `Fundamento`, `Lugar`, `Garantia`, `Observacion`, `Agente`, `Vehiculo`, `Licencia`) 
VALUES (NULL, 'Motivo2', '2020-03-05', '08:00:00', 'Fundamento2', 'Lugar2', 'Garantia2', 'Observacion2', '5', '4', '1');

INSERT INTO `multas` (`Idmulta`, `Motivo`, `Fecha`, `Hora`, `Fundamento`, `Lugar`, `Garantia`, `Observacion`, `Agente`, `Vehiculo`, `Licencia`) 
VALUES (NULL, 'Motivo2', '2020-03-05', '08:00:00', 'Fundamento3', 'Lugar3', 'Garantia2', 'Observacion3', '6', '5', '2');
