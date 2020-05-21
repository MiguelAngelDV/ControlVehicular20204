CREATE TABLE comprobante(
    idComprobante int NOT NULL AUTO_INCREMENT,
    versionComprobante varchar(6) DEFAULT '7.5' NOT NULL,
    fechaComprobante datetime NOT NULL,
    sello varchar(80) NOT NULL,
    noCertificado varchar(20) NOT NULL,
    subtotal double(11,2) NOT NULL,
    moneda char(10) NOT NULL,
    total double(11,2) NOT NULL,
    tipoComprobante char(10) NOT NULL,
    lugarExpedicion char(10) NOT NULL,
    serie varchar(85),
    folio varchar(40),
    formaPago varchar(20),
    descuento double(11,2) ,
    tipoDeCambio double(15,6),
    confirmacion char(15),
    emisor int,
    receptor int,
    concepto int,
    CFDIrelacionados int,
    complementos int,
    adenda int,
    CHECK(total>0),
    CHECK(subtotal>0),
    CHECK(descuento > 0),
    PRIMARY KEY(idComprobante)
);

CREATE TABLE emisores(
    idEmisor int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    RFC varchar(13) NOT NULL,
    regimenFiscal varchar(10) NOT NULL,
    nombre varchar(254)
);

CREATE TABLE receptores(
    idReceptor int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    RFC varchar(13) NOT NULL,
    usoCFID varchar(30) NOT NULL,
    nombre varchar(254),
    residenciaFiscal char(10),
    numRegistroTributario varchar(40)
);

CREATE TABLE conceptos(
    idConceptos int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    idComprobante int NOT NULL,
    idConcepto int NOT NULL
);

CREATE TABLE CFIDrelacionados(
    idCFIDrelacionados int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    idCFIDrealcionado int NOT NULL,
    idComprobante int NOT NULL,
    tipoRelacion varchar(20) NOT NULL
);

CREATE TABLE impuestos (
    idimpuestos int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    totalImpuestosRetenidos double(11,2),
    totalImpuestosTrasladados double(traslados int NOT NULL,
    idTraslados int NOT NULL
);

CREATE TABLE complementos(
    idComplementos int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    complemento varchar(100)
);

CREATE TABLE adenda(
    idAdenda int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    adenda varchar(100)
);

CREATE TABLE concepto(
    idConcepto int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    claveProductoServicio varchar(10) NOT NULL,
    cantidad double(15,6) NOT NULL,
    claveUnidad varchar(10) NOT NULL,
    descripcion text NOT NULL,
    valorUnitario double(11,2) NOT NULL,
    importe double(11,2) NOT NULL,
    numeroIdentidicacion varchar(100),
    unidad varchar(20),
    descuento double(11,2),
    idimpuestos int,
    idInfoAduana int,
    idCuentaPredial int,
    idComplementoConcepto int,
    idParte int
);

CREATE TABLE CFIDrelacionado(
    idCFIDrelacionado int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    UUID varchar(36) NOT NULL
);

CREATE TABLE retenciones(
    idRetenciones int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    idimpuestos int NOT NULL,
    idRetencion int NOT NULL
);

CREATE TABLE traslados(
    idTraslados int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    idimpuestos int NOT NULL,
    idTraslado int NOT NULL
);

CREATE TABLE informacionAduana(
    idInfoAduana int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    numeroPedimento varchar(21) NOT NULL
);

CREATE TABLE cuentaPredial(
    idCuentaPredial int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    numeroPredial varchar(150) NOT NULL
);

CREATE TABLE complementoConcepto(
    idComplementoConcepto int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    complemento varchar(100)
);

CREATE TABLE parte(
    idParte int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    claveProducto varchar(10) NOT NULL,
    cantidad double(15,6) NOT NULL,
    descripcion text NOT NULL,
    numeroIdentificacion varchar(100),
    unidad varchar(200),
    valorUnitario double(11,2),
    importe double(11,2),
    idInfoAduana int
)

CREATE TABLE retencion(
    idRetencion int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    impuesto varchar(20) NOT NULL,
    tipoFactor varchar(20) NOT NULL,
    tasaOcuota double(15,6) NOT NULL,
    importe double(15,6) NOT NULL,
    base double(11,2) NOT NULL
);

CREATE TABLE traslado(
    idTraslado int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    impuesto varchar(20) NOT NULL,
    tipoFactor varchar(20) NOT NULL,
    tasaOcuota double(15,6) NOT NULL,
    importe double(15,6) NOT NULL
);

-- Relaciones Comprobantes
ALTER TABLE comprobante ADD(
    FOREIGN KEY(emisor)
    REFERENCES emisores(idEmisor)
);

ALTER TABLE comprobante ADD(
    FOREIGN KEY(receptor)
    REFERENCES receptores(idReceptor)
);

ALTER TABLE comprobante ADD(
    FOREIGN KEY(concepto)
    REFERENCES conceptos(idConceptos)
);

ALTER TABLE comprobante ADD(
    FOREIGN KEY(CFDIrelacionados)
    REFERENCES CFIDrelacionados(idCFIDrelacionados)
);

ALTER TABLE comprobante ADD(
    FOREIGN KEY(complementos)
    REFERENCES complementos(idComplementos)
);

ALTER TABLE comprobante ADD(
    FOREIGN KEY(adenda)
    REFERENCES adenda(idAdenda)
);

-- Conceptos
ALTER TABLE conceptos ADD(
    FOREIGN KEY(idConcepto)
    REFERENCES concepto(idConcepto)
);

ALTER TABLE CFIDrelacionados ADD(
    FOREIGN KEY(idCFIDrealcionado)
    REFERENCES CFIDrelacionado(idCFIDrelacionado)
);

ALTER TABLE CFIDrelacionados ADD(
    FOREIGN KEY(idComprobante)
    REFERENCES comprobante(idComprobante)
);

ALTER TABLE impuestos ADD(
    FOREIGN KEY(idRetenciones)
    REFERENCES retenciones(idRetenciones)
);

ALTER TABLE impuestos ADD(
    FOREIGN KEY(idTraslados)
    REFERENCES traslados(idTraslados)
);

ALTER TABLE concepto ADD(
    FOREIGN KEY(idimpuestos)
    REFERENCES impuestos(idimpuestos)
);
ALTER TABLE concepto ADD(
    FOREIGN KEY(idInfoAduana)
    REFERENCES informacionaduana(idInfoAduana)
);
ALTER TABLE concepto ADD(
    FOREIGN KEY(idCuentaPredial)
    REFERENCES cuentapredial(idCuentaPredial)
);
ALTER TABLE concepto ADD(
    FOREIGN KEY(idComplementoConcepto)
    REFERENCES complementoConcepto(idComplementoConcepto)
);
ALTER TABLE concepto ADD(
    FOREIGN KEY(idParte)
    REFERENCES parte(idParte)
);

ALTER TABLE retenciones ADD(
    FOREIGN KEY(idRetencion)
    REFERENCES retencion(idretencion)
);

ALTER TABLE retenciones ADD(
    FOREIGN KEY(idimpuestos)
    REFERENCES impuestos(idimpuestos)
);

ALTER TABLE traslados ADD(
    FOREIGN KEY(idTraslado)
    REFERENCES traslado(idTraslado)
);

ALTER TABLE traslados ADD(
    FOREIGN KEY(idimpuestos)
    REFERENCES impuestos(idimpuestos)
);
