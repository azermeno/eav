-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2017 a las 00:13:58
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eav`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `TipoEstado` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` int(11) NOT NULL,
  `Texto` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Estados del sistema';

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`TipoEstado`, `Estado`, `Texto`) VALUES
('Lote', 1, 'En Captura'),
('Lote', 2, 'Enviando'),
('Tubo', 1, 'Capturado'),
('Tubo', 2, 'Enviando');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudios`
--

CREATE TABLE `estudios` (
  `IdUnidad` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `IdEstudio` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `Abreviatura` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Perfil` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Licitado` tinyint(1) NOT NULL,
  `Activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Estudios del sistema';

--
-- Volcado de datos para la tabla `estudios`
--

INSERT INTO `estudios` (`IdUnidad`, `IdEstudio`, `Nombre`, `Abreviatura`, `Perfil`, `Licitado`, `Activo`) VALUES
('FU', '15002-01', 'CD4', 'CD4', '', 1, 1),
('FU', '15003-01', 'CD8', 'CD8', '', 1, 1),
('FU', '20003-01', 'Ácido Vanilmandélico en Orina', 'VAN', '', 1, 1),
('FU', '20007-01', 'Niveles de Ácido Fólico endógeno', 'NAFE', '', 1, 1),
('FU', '20008-01', 'Ácido Láctico', 'LAC', '', 1, 1),
('FU', '20060-01', 'Amonio', 'AMON', '', 1, 1),
('FU', '20110-01', 'Apolipoproteina B', 'APOB', '', 1, 1),
('FU', '20111-01', 'Niveles de B 12 endógeno', 'NB12E', '', 1, 1),
('FU', '20123-01', 'Cadenas Ligeras Kappa y Lambda en Orina de 24 Horas', 'KAP', '', 1, 1),
('FU', '20130-01', 'Catecolaminas Urinarias', 'CATU', '', 1, 1),
('FU', '20174-01', 'Ceruloplasmina', 'CERU', '', 1, 1),
('FU', '20178-01', 'Niveles de Ciclosporina', 'CIC', '', 1, 1),
('FU', '20179-01', 'Cistatina C (Función Renal)', 'CISC', '', 1, 1),
('FU', '20185-01', 'Colinesterasa', 'CET', '', 1, 1),
('FU', '20219-01', 'Examen Citoquímico en líquidos biológicos', 'CITL', '', 1, 1),
('FU', '20224-01', 'Ferritina', 'FER', '', 1, 1),
('FU', '20225-01', 'Folatos', 'FOL', '', 1, 1),
('FU', '20241-01', 'Homocisteína', 'HOMO', '', 1, 1),
('FU', '20256-01', 'Insulina endógena', 'INSE', '', 1, 1),
('FU', '20266-01', 'Niveles de Metrotexate', 'NIVM', '', 1, 1),
('FU', '20267-01', 'Mioglobina en sangre total', 'MIOGL', '', 1, 1),
('FU', '20285-01', 'Peroxidasa', 'PXD', '', 1, 1),
('FU', '20289-01', 'Porfirinas en Heces y Orina', 'PHEOR', '', 1, 1),
('FU', '20317-01', 'Niveles de Sirulimus', 'SIRUL', '', 1, 1),
('FU', '20323-01', 'Niveles de Teofilina', 'THEO', '', 1, 1),
('FU', '20328-01', 'Niveles de Tracolimus', 'TAC', '', 1, 1),
('FU', '20329-01', 'Transferrina', 'TFE', '', 1, 1),
('FU', '20376-01', 'Niveles de Vitamina "D"', 'NVID', '', 1, 1),
('FU', '20380-01', 'D- xilosa', 'DXIL', '', 1, 1),
('FU', '20389-01', 'Niveles de Litio', 'LIT', '', 1, 1),
('FU', '20411-01', 'Niveles de Aminofilina', 'NAMI', '', 1, 1),
('FU', '20429-01', 'Electrolitos en Sudor', 'ELSUD', '', 1, 1),
('FU', '20447-01', 'Apolipoproteina A1', 'APOS', '', 1, 1),
('FU', '20449-01', 'Ácidos Biliares Totales y  Fraccionados', 'ABTF', '', 1, 1),
('FU', '20450-01', 'Ácidos Orgánicos en orina, cuantitativos', 'AOR', '', 1, 1),
('FU', '20451-01', 'Alfa Galactosidasa en suero', 'AGAS', '', 1, 1),
('FU', '20452-01', 'Determinación de Galactosa total en orina', 'DGTO', '', 1, 1),
('FU', '20453-01', 'Determinación de Galactosa uridil transferasa', 'DGUT', '', 1, 1),
('FU', '20454-01', 'Determinación Glucosa 6 fosfato deshidorgenasa', 'DGFD', '', 1, 1),
('FU', '20455-01', 'Determinación de Biotinidasa en suero', 'DBIS', '', 1, 1),
('FU', '20456-01', 'Determinación de Alfa 1 antitripsina cuantitativa', 'A1A', '', 1, 1),
('FU', '20458-01', 'Determinación de aminoacidos en plasma cuatitativos en suero y orina', 'DAPC', '', 1, 1),
('FU', '20460-01', 'Citrato en orina de 24 horas', 'CITO', '', 1, 1),
('FU', '20461-01', 'Oxalato en Orina de 24 horas', 'OXAO', '', 1, 1),
('FU', '20462-01', 'N- Telopeptidos en orina de 24 horas', 'NTELO', '', 1, 1),
('FU', '20463-01', 'Acido Cítrico en Orina', 'ACOR', '', 1, 1),
('FU', '20494-01', 'Adenosin deaminasa sérica (ADA)', 'ADA', '', 1, 1),
('FU', '20495-01', 'Fosfatasa Alcalina Osea (OTASA)', 'OTASA', '', 1, 1),
('FU', '20505-01', 'Peptido C', 'PEPC', '', 1, 1),
('FU', '21055-01', 'Agregación Plaquetaria con ADP, Epinefrina,Ristocetina y Colágeno.', 'APLA', '', 1, 1),
('FU', '21106-01', 'Ac. Anti Mieloperoxidasa', 'MPO', '', 1, 1),
('FU', '21118-01', 'Beta II Glicoproteina IgG', 'B2', '', 1, 1),
('FU', '21119-01', 'Beta-Tromboglobulina', 'BETR', '', 1, 1),
('FU', '21222-01', 'Factor XIII', 'FXIII', '', 1, 1),
('FU', '21223-01', 'Factor Tisular Ag', 'FTAG', '', 1, 1),
('FU', '21226-01', 'Ac Fosfatasa Alcalina de Neutrófilos', 'AFOSA', '', 1, 1),
('FU', '21232-01', 'Haptoglobina', 'HAPTO', '', 1, 1),
('FU', '21235-01', 'Heparina', 'HEP', '', 1, 1),
('FU', '21292-01', 'Proteína C Antigénica', 'PCAN', '', 1, 1),
('FU', '21296-01', 'Proteína S Antigénica', 'PSAN', '', 1, 1),
('FU', '21313-01', 'Resistencia a Proteína C Activada', 'PCA', '', 1, 1),
('FU', '21331-01', 'TVVA confirmatoria de Anticoagulante Lúpico', 'TVVA', '', 1, 1),
('FU', '21465-01', 'Determinación de cuerpos Lamenares en Líquido amniótico', 'DCLE', '', 1, 1),
('FU', '21467-01', 'Beta II Glicoproteina IgA', 'BGL', '', 1, 1),
('FU', '21468-01', 'Beta II Glicoproteina IgM', 'BGM', '', 1, 1),
('FU', '22001-01', '17- Hidroxiprogesterona (17-OHP)', '17HID', '', 1, 1),
('FU', '22006-01', 'Ácido  Vanilmandélico', 'ACVM', '', 1, 1),
('FU', '22047-01', 'ACTH  (Hormona Adrenocorticotropa)', 'ACTH', '', 1, 1),
('FU', '22048-01', 'Anticuerpos IgG Anti - F Actina', 'AAAG', '', 1, 1),
('FU', '22057-01', 'Aldosterona', 'ALD', '', 1, 1),
('FU', '22062-01', 'Androstendiona', 'ANDRO', '', 1, 1),
('FU', '22117-01', 'Beta 2 Microgobulina', 'B2M', '', 1, 1),
('FU', '22124-01', 'Calcitonina', 'CALCI', '', 1, 1),
('FU', '22129-01', 'Catecolaminas Séricas', 'CATSE', '', 1, 1),
('FU', '22190-01', 'Cortisol', 'CORT', '', 1, 1),
('FU', '22191-01', 'Cortisol en Orina', 'CORUR', '', 1, 1),
('FU', '22192-01', 'Dehidroepiandrosterona sulfato (DHEA-S)', 'DHEAS', '', 1, 1),
('FU', '22218-01', 'Estrógenos', 'EST', '', 1, 1),
('FU', '22227-01', 'Gastrina', 'GTRI', '', 1, 1),
('FU', '22243-01', 'Hormona de  Crecimiento  (GH)', 'HCH', '', 1, 1),
('FU', '22254-01', 'Inmunoglobulina "E" (IgE)', 'IGE', '', 1, 1),
('FU', '22255-01', 'Inmunoglobuna "D"  (IgD)', 'IGD', '', 1, 1),
('FU', '22263-01', 'Metanefrina', 'MET', '', 1, 1),
('FU', '22273-01', '5-OH Indolacetico', 'IND', '', 1, 1),
('FU', '22276-01', 'Paratohormona', 'PTH', '', 1, 1),
('FU', '22312-01', 'Renina', 'REN', '', 1, 1),
('FU', '22319-01', 'Somatomedina C (IGF-1)', 'SOMA', '', 1, 1),
('FU', '22324-01', 'Testosterona Libre', 'TESTL', '', 1, 1),
('FU', '22327-01', 'Tiroglobulina (TG)', 'TIR', '', 1, 1),
('FU', '22382-01', 'Dopamina', 'DOP', '', 1, 1),
('FU', '22390-01', 'NT- Pro - BNP', 'NPB', '', 1, 1),
('FU', '22392-01', 'IGF unida a proteína 3 (IGFBP-3)', 'IGFBP', '', 1, 1),
('FU', '22421-01', 'Fracc. Beta libre  HGC (Hormona Ganadotrofina C)', 'FBL', '', 1, 1),
('FU', '22423-01', 'Inhibina-A', 'INH', '', 1, 1),
('FU', '22446-01', 'T Captación (T.UPTAKE)', 'TCA', '', 1, 1),
('FU', '22470-01', 'Cromogranina A', 'CROA', '', 1, 1),
('FU', '22496-01', 'Subclases de IgG (1,2,3,4)', 'SUBG', '', 1, 1),
('FU', '22497-01', 'C1 Esterasa Inhibidor, Proteína', 'C1EST', '', 1, 1),
('FU', '23013-01', 'Ac Anti e  Hepatitis B', 'AAEHB', '', 1, 1),
('FU', '23014-01', 'Ac Anti  Hepatitis A IgM', 'HEPAA', '', 1, 1),
('FU', '23015-01', 'Ac Anti  Hepatitis B core IgM', 'COREM', '', 1, 1),
('FU', '23016-01', 'Ac Anti  Hepatitis B core totales', 'CORET', '', 1, 1),
('FU', '23018-01', 'Ac Anti  Parotiditis IgM', 'PAROM', '', 1, 1),
('FU', '23019-01', 'Ac Anti Peptido Citrulinado', 'ACPC', '', 1, 1),
('FU', '23021-01', 'Ac Anti Sincicial Respiratorio IgM', 'SRM', '', 1, 1),
('FU', '23022-01', 'Acs. Anti Tiroglobulina', 'ATG', '', 1, 1),
('FU', '23025-01', 'Ac Anti Epstein Barr VCA, IgM', 'AAVCA', '', 1, 1),
('FU', '23027-01', 'Ac Anti Epstein Barr EA IgM', 'AAEB', '', 1, 1),
('FU', '23032-01', 'Ac Anti Herpes 1 y 2 Total', 'AHIGG', '', 1, 1),
('FU', '23033-01', 'Ac Anti Herpes 1 y 2 IgM', 'AHIGM', '', 1, 1),
('FU', '23035-01', 'Ac Anti Parotiditis Total', 'PAROT', '', 1, 1),
('FU', '23036-01', 'Ac Parvovirus B 19  Total', 'APT', '', 1, 1),
('FU', '23037-01', 'Ac Anti Rotavirus Total', 'ROT', '', 1, 1),
('FU', '23038-01', 'Ac Anti Rotavirus IgM', 'ROTAM', '', 1, 1),
('FU', '23039-01', 'Ac Anti Sarampión Total', 'AAST', '', 1, 1),
('FU', '23040-01', 'Ac Anti Sarampión IgM', 'SARAM', '', 1, 1),
('FU', '23041-01', 'Ac Anti Sincicial Respiratorio IgG', '23041', '', 1, 1),
('FU', '23043-01', 'Ac Anti Toxocara IgM', 'TOCAM', '', 1, 1),
('FU', '23044-01', 'Ac  Anti Varicela Total', 'VARI', '', 1, 1),
('FU', '23045-01', 'Ac Anti Varicela IgM', 'VARIM', '', 1, 1),
('FU', '23050-01', 'Ac Adenovirus Total', 'ADENO', '', 1, 1),
('FU', '23051-01', 'Ac Adenovirus IgM', 'ADENM', '', 1, 1),
('FU', '23061-01', 'ANCA  (Ac Anti Citoplasma)', 'ANCA', '', 1, 1),
('FU', '23063-01', 'Anticardiolipina IgG', 'CARG', '', 1, 1),
('FU', '23064-01', 'Anticardiolipina IgM', 'CARM', '', 1, 1),
('FU', '23066-01', 'Ac  Anti Proteína Básica de Mielina en LCR', 'PBM', '', 1, 1),
('FU', '23074-01', 'Ac Anti Chlamydia Trachomatis', 'CHLAM', '', 1, 1),
('FU', '23076-01', 'Ac  Anti DNA Doble Cadena', 'DNADC', '', 1, 1),
('FU', '23077-01', 'Ac Anti Fosfolípidos', 'ACFOS', '', 1, 1),
('FU', '23078-01', 'Ac Anti Insulina', 'AINS', '', 1, 1),
('FU', '23079-01', 'Ac Anti Mitocondriales', 'MIT', '', 1, 1),
('FU', '23080-01', 'Ac  Anti Músculo Liso', 'MLIS', '', 1, 1),
('FU', '23082-01', 'Ac Anti Nucleosoma', 'NUCLE', '', 1, 1),
('FU', '23083-01', 'Ac Anti Peroxidasa TPO', 'ANTPO', '', 1, 1),
('FU', '23084-01', 'Ac Anti Rnp', 'RNP', '', 1, 1),
('FU', '23085-01', 'Ac Anti Ro', 'SSA', '', 1, 1),
('FU', '23086-01', 'Ac Anti Scl70  (Poliomiositis - Escleroderma)', 'SCL70', '', 1, 1),
('FU', '23088-01', 'Ac Anti Smith', 'SM', '', 1, 1),
('FU', '23090-01', 'Ac Anti Tripanosoma Cruzi', 'TRIP', '', 1, 1),
('FU', '23091-01', 'Ac IgM  Anti Bordetella Pertussis', 'AABPM', '', 1, 1),
('FU', '23092-01', 'Ac IgG  Anti Bordetella Pertussis', 'AABPG', '', 1, 1),
('FU', '23093-01', 'Ac IgM Anti Dengue', 'AADM', '', 1, 1),
('FU', '23096-01', 'Ac Anti La', 'LA', '', 1, 1),
('FU', '23108-01', 'Ac Antiproteinasa 3', 'PRO3', '', 1, 1),
('FU', '23175-01', '17- Cetoesteroides', 'CETO', '', 1, 1),
('FU', '23176-01', 'Ac Chlamydia Pneumoniae Total', 'ACPT', '', 1, 1),
('FU', '23177-01', 'Ac Chlamydiae Pneumoniae IgM', 'ACPM', '', 1, 1),
('FU', '23181-01', 'Prueba de Aglutinación para detección de antígenos bacterianos en Líquidos Corporales', 'PADA', '', 1, 1),
('FU', '23182-01', 'Ac Coccidioidiomicosis Total', 'ACT', '', 1, 1),
('FU', '23183-01', 'Ac Coccidioidiomicosis IgM', 'COCC', '', 1, 1),
('FU', '23195-01', 'Detección de Toxina de Clostridiium Difficile', 'TCD', '', 1, 1),
('FU', '23246-01', 'Identificación  para Mycobacterias', 'IDEM', '', 1, 1),
('FU', '23247-01', 'Influenza A IgG', 'INFAG', '', 1, 1),
('FU', '23248-01', 'Influenza A IgM', 'INFAM', '', 1, 1),
('FU', '23249-01', 'Influenza B IgG', 'INFBG', '', 1, 1),
('FU', '23250-01', 'Influenza B IgM', 'INFBM', '', 1, 1),
('FU', '23253-01', 'Helicobacter Pylori (Prueba de Aliento) Carbono 13', 'HEPY', '', 1, 1),
('FU', '23257-01', 'Interlucina 1', 'IL1', '', 1, 1),
('FU', '23258-01', 'Interlucina 6', 'IL6', '', 1, 1),
('FU', '23270-01', 'Identificación de  Mycoplasma vaginal', '23270', '', 1, 1),
('FU', '23271-01', 'Identificación Mycoplasma Pneumoniae Total', '23271', '', 1, 1),
('FU', '23272-01', 'Identificación Mycoplasma Pneumoniae IgM', '23272', '', 1, 1),
('FU', '23277-01', 'Wester-blot VIH-1', 'WB', '', 1, 1),
('FU', '23281-01', 'Anticuerpos Antinucleares', 'ANA', '', 1, 1),
('FU', '23311-01', 'Reacciones Febriles', 'RXF', '', 1, 1),
('FU', '23336-01', 'V.D.R.L.', 'VDRL', '', 1, 1),
('FU', '23359-01', 'AC ANTI-JO-1', 'JO1', '', 1, 1),
('FU', '23360-01', 'Ag e Hepatitis B', '23360', '', 1, 1),
('FU', '23361-01', 'Ac. Anti-s Hepatitis B', 'ACSHB', '', 1, 1),
('FU', '23386-01', 'Antígeno NS1 vs  Dengue', 'ANSDE', '', 1, 1),
('FU', '23413-01', 'Ac. Antimicrosomal', 'AANT', '', 1, 1),
('FU', '23425-01', 'Ac Antiendomisio IgA', 'AIGA', '', 1, 1),
('FU', '23426-01', 'Ac Transglutaminasa IgA', 'ACTRA', '', 1, 1),
('FU', '23427-01', 'Ac Transglutaminasa IgG', 'ACTRG', '', 1, 1),
('FU', '23428-01', 'Ac LKM-1  IgG (Microsomales Hígado y Riñón)', 'LKM', '', 1, 1),
('FU', '23471-01', 'Sensibilidad para Mycobacterias', 'MYCO', '', 1, 1),
('FU', '23472-01', 'Ac. Anti gliadina IgA', 'GLIA', '', 1, 1),
('FU', '23473-01', 'Ac. Anti gliadina IgG', 'AGIGG', '', 1, 1),
('FU', '23474-01', 'Ac. Anti Acetil Colina Bloqueadores de Receptores', 'ACEBR', '', 1, 1),
('FU', '23475-01', 'Ac. Anti - Acetil colina fijadores de receptores', 'ACFR', '', 1, 1),
('FU', '23476-01', 'Ac. Anti Acetil Colina moduladores de receptores', 'ACMR', '', 1, 1),
('FU', '23477-01', 'Ac. Anti Histona', 'AAH', '', 1, 1),
('FU', '23478-01', 'Ag de Rotavirus en heces', 'AGRH', '', 1, 1),
('FU', '23479-01', 'Ac Anti Aspergilus', 'ASPER', '', 1, 1),
('FU', '23480-01', 'Ac Anti Borrelia burgorferi, en LCR', 'BBLCR', '', 1, 1),
('FU', '23481-01', 'Ac Anti Sacharomyces cerevisae IgG, IgA', 'AASCG', '', 1, 1),
('FU', '23482-01', 'Prueba de 2-Mercapto-etanol Brucella', '2MER', '', 1, 1),
('FU', '23490-01', 'Ac Parvovirus B 19  IgM', 'PB19M', '', 1, 1),
('FU', '23499-01', 'Ac. Contra receptor de H. Estimulante de Tiroides ( TSH)', 'ACREC', '', 1, 1),
('FU', '23501-01', 'Ac. Anti Neumococo', 'ANEU', '', 1, 1),
('FU', '24127-01', 'Carga viral hepatitis B', 'VHB', '', 1, 1),
('FU', '24131-01', 'Panel de Tamizaje para Dx. De Leucemias', 'TZLEU', '', 1, 1),
('FU', '24133-01', 'Inmunofenotipo para Leucemia Linfoblástica de linaje B', '24133', '', 1, 1),
('FU', '24134-01', 'Inmunofenotipo para Leucemia Linfoblástica de linaje T', '24134', '', 1, 1),
('FU', '24135-01', 'Inmunofenotipo para Leucemias Mieloides y Síndrome Mielodisplásico', '24135', '', 1, 1),
('FU', '24136-01', 'Inmunofenotipo para Hemoglobinuria Paroxistica Nocturna', '24136', '', 1, 1),
('FU', '24137-01', 'Inmunofenotipo para Linfomas', '24137', '', 1, 1),
('FU', '24153-01', 'CD - 34', 'CD34', '', 1, 1),
('FU', '24364-01', 'Carga Viral de Hepatitis C', 'VHCIN', '', 1, 1),
('FU', '24422-01', 'Carga Viral de CMV', 'CVCMV', '', 1, 1),
('FU', '24483-01', 'Carga Viral para VIH', 'CVIR', '', 1, 1),
('FU', '24484-01', 'Carga Viral de Herpes I y II', 'VHERP', '', 1, 1),
('FU', '24485-01', 'Carga Viral de Epstein Barr', 'VEB', '', 1, 1),
('FU', '24486-01', 'Cuantificación de ácidos nucleicos para Mycobacterium Tuberculosis', 'CANMT', '', 1, 1),
('FU', '24487-01', 'Cuantificación ácidos nucleicos de Clamydia.', 'CANC', '', 1, 1),
('FU', '24503-01', 'Panel de Pruebas para Activación de Basófilos', 'ACBAS', '', 1, 1),
('FU', '24504-01', 'Panel para detección de Inmunodeficiencias congénitas', 'PIC', '', 1, 1),
('FU', '26194-01', 'Hibridación para Identificación de especies de mycobacterias', 'HIE', '', 1, 1),
('FU', '26238-01', 'Hibridación por Inmunoluminiscencia(FISH)', 'HIN', '', 1, 1),
('FU', '26280-01', 'Detección de Leucemia Granulocitica Crónica por PCR', 'DLEG', '', 1, 1),
('FU', '26492-01', 'BK Virus DNA cuantitativo  por PCR en sangre', 'BKV', '', 1, 1),
('FU', '26493-01', 'Enterovirus  por PCR en Líquido Cefalorraquideo y Heces', 'EPCR', '', 1, 1),
('FU', '27206-01', 'Electoforesis de Hemoglobina Acida', 'EHAC', '', 1, 1),
('FU', '27207-01', 'Electoforesis de Hemoglobina Alcalina', 'EHAL', '', 1, 1),
('FU', '27208-01', 'Electroforesis en Suero Inmunofijación', 'ESI', '', 1, 1),
('FU', '27209-01', 'Electroforesis de Hemoglobina', 'EHEM', '', 1, 1),
('FU', '27210-01', 'Electroforesis Suero', 'ESUER', '', 1, 1),
('FU', '27212-01', 'Electroforesis Orina', 'EORI', '', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lotes`
--

CREATE TABLE `lotes` (
  `IdUnidad` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `IdLote` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` timestamp NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Lotes Generados';

--
-- Volcado de datos para la tabla `lotes`
--

INSERT INTO `lotes` (`IdUnidad`, `IdLote`, `Fecha`, `Estado`) VALUES
('FU', '000', '2017-10-26 16:02:13', 1),
('FU', '001', '2017-10-26 16:24:01', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lotes_muestras`
--

CREATE TABLE `lotes_muestras` (
  `IdUnidad` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `IdLote` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `IdFolio` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `Folio_LIS` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Datos de muestras';

--
-- Volcado de datos para la tabla `lotes_muestras`
--

INSERT INTO `lotes_muestras` (`IdUnidad`, `IdLote`, `IdFolio`, `Folio_LIS`, `Nombre`, `Estado`) VALUES
('FU', '000', '001', '20171026010', 'Alfreds Futterkiste', 1),
('FU', '000', '002', '20171026058', 'Pedro Paramo', 1),
('FU', '001', '001', '20172610153', 'Enrique Castellanos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lotes_muestras_estudios`
--

CREATE TABLE `lotes_muestras_estudios` (
  `IdUnidad` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `IdLote` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `IdFolio` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `IdEstudio` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Resultado` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Estudios de las muestras';

--
-- Volcado de datos para la tabla `lotes_muestras_estudios`
--

INSERT INTO `lotes_muestras_estudios` (`IdUnidad`, `IdLote`, `IdFolio`, `IdEstudio`, `Resultado`, `Estado`) VALUES
('FU', '000', '001', '15002-01', '', 1),
('FU', '000', '001', '15003-01', '', 1),
('FU', '000', '002', '20130-01', '', 1),
('FU', '001', '001', '20241-01', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE `unidades` (
  `IdUnidad` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Delegacion` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Region` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Operando` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla de Unidades';

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`IdUnidad`, `Nombre`, `Delegacion`, `Region`, `Operando`) VALUES
('FU', 'HGR 046 GUADALAJARA, JALISCO', 'Jalisco', '3', 1),
('GC', 'HGR 089 GUADALAJARA, JALISCO', 'Jalisco', '3', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ApellidoPaterno` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ApellidoMaterno` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Contrasena` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Editable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Usuarios de sesion';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Contrasena`, `Editable`) VALUES
('jaime', 'Jaime', 'Garcia', 'Pendiente', '123', 1),
('wojciech', 'Wojciech', 'Sanjuan', 'Szklarz', '456', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`TipoEstado`,`Estado`);

--
-- Indices de la tabla `estudios`
--
ALTER TABLE `estudios`
  ADD PRIMARY KEY (`IdUnidad`,`IdEstudio`);

--
-- Indices de la tabla `lotes`
--
ALTER TABLE `lotes`
  ADD PRIMARY KEY (`IdUnidad`,`IdLote`);

--
-- Indices de la tabla `lotes_muestras`
--
ALTER TABLE `lotes_muestras`
  ADD PRIMARY KEY (`IdUnidad`,`IdLote`,`IdFolio`);

--
-- Indices de la tabla `lotes_muestras_estudios`
--
ALTER TABLE `lotes_muestras_estudios`
  ADD PRIMARY KEY (`IdUnidad`,`IdLote`,`IdFolio`,`IdEstudio`);

--
-- Indices de la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`IdUnidad`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
