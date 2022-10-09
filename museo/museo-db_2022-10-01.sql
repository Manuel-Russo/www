-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Creato il: Ott 01, 2022 alle 10:16
-- Versione del server: 8.0.18
-- Versione PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `museo`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `autore`
--

CREATE TABLE `autore` (
  `cod_autore` int(11) NOT NULL,
  `nome` text,
  `paese_provenienza` text,
  `biografia` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `autore`
--

INSERT INTO `autore` (`cod_autore`, `nome`, `paese_provenienza`, `biografia`) VALUES
(2, 'Vincent van Gogh', 'Olanda', 'Vincent Willem van Gogh (pronuncia olandese [?f?n??nt f?????x] ascolta[?·info]) (Zundert, 30 marzo 1853 – Auvers-sur-Oise, 29 luglio 1890) è stato un pittore olandese.\nAutore di quasi 900 dipinti[1] e più di mille disegni, senza contare i numerosi schizzi non portati a termine e tanti appunti destinati probabilmente all\'imitazione di disegni artistici di provenienza giapponese. Tanto geniale quanto incompreso in vita, van Gogh influenzò profondamente l\'arte del XX secolo. Dopo aver trascorso molti anni soffrendo di frequenti disturbi mentali,[2][3] morì all\'età di 37 anni per una ferita da arma da fuoco, molto probabilmente auto-inflitta.[4] In quell\'epoca i suoi lavori non erano molto conosciuti né tantomeno apprezzati.\nVan Gogh iniziò a disegnare da bambino, nonostante le continue pressioni del padre, pastore protestante che continuò ad impartirgli delle norme severe. Continuò comunque a disegnare finché non decise di diventare un pittore vero e proprio. Iniziò a dipingere tardi, all\'età di ventisette anni, realizzando molte delle sue opere più note nel corso degli ultimi due anni di vita. I suoi soggetti consistevano in autoritratti, paesaggi, nature morte di fiori, dipinti con cipressi, rappresentazione di campi di grano e girasoli. La sua formazione si deve all\'esempio del realismo paesaggistico dei pittori di Barbizon e del messaggio etico e sociale di Jean-François Millet.'),
(3, 'Paul Gauguin', 'Francia', 'Paul Gauguin /p?l go\'g??/ (Parigi, 7 giugno 1848 – Hiva Oa, 8 maggio 1903) è stato un pittore francese.\r\nFormatosi, dalla metà degli anni ottanta del XIX secolo, nell\'Impressionismo, si distaccò dall\'espressione naturalistica accentuando progressivamente l\'astrazione della visione pittorica, realizzata in forme piatte di colore puro e semplificate con la rinuncia alla prospettiva e agli effetti di luce e di ombra, secondo uno stile che fu chiamato sintetismo o cloisonnisme, al quale rimase sempre fedele pur sviluppandola durante tutta la sua piena maturità nelle isole dei mari del Sud-Ovest, quando egli si propose il tema di rappresentare artisticamente l\'accordo armonico della vita umana con quella di tutte le forme naturali, secondo una concezione allora ritenuta tipica delle popolazioni primitive.\r\nI pittori nabis e i simbolisti si richiamarono esplicitamente a lui, mentre la libertà decorativa delle sue composizioni aprì la via all\'Art Nouveau, così come il suo trattamento della superficie lo rese un precursore del fauvismo e la semplificazione delle forme fu tenuta presente da tutta la pittura del Novecento.'),
(4, 'James Ensor', 'Belgio', 'Introverso e misantropo, trascorse gran parte della sua vita nella sua città natale, dedicandosi ad una pittura che fu una delle manifestazioni più significative del periodo e che si pose al centro della cultura del tempo. Nel 1877 s\'iscrisse all\'Accademia di Bruxelles, dove rimase fino al 1880, entrando in contatto con gli ambienti anarchici e intellettuali della città, e dove nel 1881 tenne la prima mostra personale.\r\nLe opere di questo periodo, che arrivò fino al 1885 circa, formano il cosiddetto periodo scuro, in cui i colori sono profondi e cupi, con una luce attenuata ma vibrante; in questo si vede l\'influenza del naturalismo tipico della tradizione fiamminga e dei realisti francesi, in particolare di Gustave Courbet. I temi preferiti si rifanno alla tradizione fiamminga: nature morte, ritratti, interni borghesi intimi e malinconici, paesaggi dall\'orizzonte piatto e basso con una luce suggestiva che ricorda William Turner. Queste opere si avvicinano parzialmente all\'impressionismo di Édouard Manet, di Edgar Degas e di Claude Monet, senza tuttavia arrivare all\'ariosa immediatezza, all\'abbandono alla natura, alla luminosità che sfalda la forma.'),
(5, 'Tiziano Vecellio', 'Italia', 'Tiziano Vecellio (Pieve di Cadore, 1480/1485[1] – Venezia, 27 agosto 1576) è stato un pittore italiano, cittadino della Repubblica di Venezia.\r\nArtista innovatore e poliedrico, maestro con Giorgione del colore tonale[2], Tiziano Vecellio fu uno dei pochi pittori italiani titolari di una vera e propria azienda, accorto imprenditore della bottega oltre che della sua personale produzione[3], direttamente a contatto con i potenti dell\'epoca, suoi maggiori committenti[4]. Il rinnovamento della pittura di cui fu autore si basò, in alternativa al michelangiolesco «primato del disegno», sull\'uso personalissimo del colore[5].\r\nTiziano usò la forza espressiva del colore materico e poi, entrando nella piena maturità, abbandonò la spazialità bilanciata, il carattere solare e fastoso del colore del Rinascimento, assumendo il dinamismo proprio del manierismo e giocando con libertà nelle variazioni cromatiche in cui il colore era reso \"più duttile, più sensibile agli effetti della luce\".[6]'),
(6, 'Edvard Munch', 'Norvegia', 'Edvard Munch nacque a Løten, in Norvegia, il 12 dicembre 1863 da Laura Catherine Bjolstad (1837-1868), figlia di Andreas Larsen Bjølstad (1806-1888) e Inger Marie Hansdatter (1799-1844), e Christian Munch (1817-1889), figlio del prete Edvard Storm Munch (1780-1847) e di Johanne Sophie Hofgaard (1791-1860). Edvard era il secondo di cinque figli: Johanne Sophie (1862-1877), la sorella maggiore con la quale instaurerà un rapporto di grandissimo affetto, Peter Andreas (1865-1895), Laura Catherine (1867-1926), e Inger Marie (1868-1952). Suoi parenti erano anche il pittore Jacob Munch e lo storico Peter Andreas Munch, fratello del padre.\r\nLa famiglia si trasferì a Christiania (l\'odierna Oslo) nel 1864, quando Christian Munch venne impiegato come medico presso la fortezza di Akershus. Sin dalla fanciullezza, Edvard fu provato da una serie interminabile di disgrazie familiari: la madre morì di tubercolosi nel 1868, seguita da Johanne Sophie nel 1877, che spirò stroncata dalla stessa malattia.[1] A curarsi del giovane Munch, dopo la morte della madre, vi erano il padre e la zia Karen; fu in questo periodo che il giovinetto iniziò ad interessarsi all\'arte, disegnando per tenersi occupato nei momenti di stasi. Nel frattempo Christian Munch, per sopperire alle varie assenze fatte dal figlio a scuola per motivi di salute, avviò la sua formazione in ambito storico-letterario, introducendolo anche alla dimensione horror-psicologica dello scrittore americano Edgar Allan Poe.[2]\r\nEdvard, però, non fu l\'unico a rimanere afflitto dai due gravi lutti: anche il padre Christian iniziò a diventare più malinconico, cadendo vittima di un pietismo morboso e di una sindrome maniaco-depressiva. Lo spirito di Edvard non giovò di quest\'ambiente; i vari incubi e le numerose malattie, così come il comportamento quasi psiconevrotico del padre, lo segnarono profondamente, inculcandogli quella visione macabra del mondo che lo renderà poi celebre. Quest\'interpretazione della realtà fu stimolata anche dalla pazzia di Laura, che iniziò ad essere affetta da crisi psichiche, e dal trapasso del fratello Andreas, che morì immediatamente dopo il suo matrimonio. Munch avrebbe poi scritto: «ho ereditato due dei più spaventosi nemici dell\'umanità: il patrimonio del consumo e la follia».[3]\r\nLa paga percepita dal padre era molto bassa e, pur essendo sufficiente per i bisogni primari, mantenne la famiglia in uno stato di perenne povertà. Le primissime esperienze artistiche di Munch riprendono i disagi economici che affliggevano la famiglia, raffigurando gli interni di quegli appartamenti degradati dove erano costretti a vivere.'),
(7, 'Rembrandt', 'Olanda', 'Rembrandt Harmenszoon van Rijn, /\'r?mbr?nt \'h?rm?ns?zo:n v?n r???n/, meglio noto semplicemente come Rembrandt (Leida, 15 luglio 1606 – Amsterdam, 4 ottobre 1669), è stato un pittore e incisore olandese.\nViene generalmente considerato uno dei più grandi pittori della storia dell\'arte europea e il più importante di quella olandese. Il suo periodo di attività coincide con quello che gli storici definiscono l\'età dell\'oro olandese.\nDopo aver ottenuto un grande successo fin da giovane come pittore ritrattista, i suoi ultimi anni furono segnati da tragedie personali e difficoltà economiche. I suoi disegni e dipinti furono popolari già durante la sua vita, la sua reputazione rimase alta e per vent\'anni fu maestro di quasi tutti i più importanti pittori olandesi. I più grandi trionfi creativi di Rembrandt sono evidenti specialmente nei ritratti dei suoi contemporanei, nei suoi autoritratti e nelle illustrazioni di scene tratte dalla Bibbia.\nSia nella pittura che nella stampa egli esibì una completa conoscenza dell\'iconografia classica che modellò per adattarla alle proprie esigenze. Così, la rappresentazione di scene bibliche era costituita dalla sua conoscenza dei relativi testi, dall\'influenza delle tematiche classiche e dall\'osservazione della popolazione ebrea di Amsterdam. Per la sua comprensione della condizione umana, inoltre, fu definito \"uno dei grandi profeti della civiltà\".'),
(8, 'Canaletto', 'Italia', 'Giovanni Antonio Canal, meglio conosciuto come il Canaletto (Venezia, 17 o 18 ottobre 1697 – Venezia, 19 aprile 1768), è stato un pittore e incisore italiano, cittadino della Repubblica di Venezia, noto soprattutto come vedutista.\r\nI suoi quadri, oltre a unire nella rappresentazione topografica architettura e natura, risultavano dall\'attenta resa atmosferica, dalla scelta di precise condizioni di luce per ogni particolare momento della giornata e da un\'indagine condotta con criteri di scientifica oggettività, in concomitanza col maggiore momento di diffusione delle idee razionalistiche dell\'Illuminismo. Insistendo sul valore matematico della prospettiva, l\'artista, per dipingere le sue opere si avvaleva talvolta della camera ottica.'),
(9, 'Mario Sironi', 'Italia', 'Mario Sironi (Sassari, 12 maggio 1885 – Milano, 13 agosto 1961) è stato un pittore italiano, fra gli iniziatori del movimento artistico del Novecento nel 1922 a Milano[1]. È stato anche scultore, architetto, illustratore, scenografo e grafico. Negli anni trenta ha teorizzato e praticato il ritorno alla pittura murale.'),
(10, 'Frans Hals', 'Olanda', 'Frans Hals (Anversa, 1580 – Haarlem, 26 agosto 1666) è stato un pittore olandese.\r\nQuasi contemporaneo di Rembrandt operò nei Paesi Bassi durante il suo cosiddetto periodo d\'oro della pittura. Da molti considerato secondo solo a Rembrandt stesso in fatto di innovazioni stilistiche, formali e compositive, Frans Hals fu uno dei pittori più prolifici del periodo olandese ed è autore di alcuni tra i più noti ritratti del barocco, divenendo un punto chiave nella storia della fisiognomica.'),
(11, 'Piet Mondrian', 'Olanda', 'Pieter Cornelis Mondriaan, meglio conosciuto come Piet Mondrian (Amersfoort, 7 marzo 1872 – New York, 1º febbraio 1944), è stato un pittore olandese, fondatore assieme a Theo van Doesburg del gruppo di pittori (detti \"neoplasticisti\") De Stijl, dal nome della rivista De Stijl.\r\nNonostante siano molto famosi, anche se spesso imitati e banalizzati, i quadri di Mondrian dimostrano una complessità che smentisce la loro apparente semplicità. I quadri \"non rappresentativi\", per cui è conosciuto e che consistono in linee perpendicolari e campiture di colore geometriche in colori primari (rosso, giallo, blu) col bianco, il nero o il grigio, sono in effetti il risultato di una continua ricerca di equilibrio e perfezione formale, evoluta stilisticamente nel corso di tutta la sua vita.'),
(12, 'Vladimir Tatlin', 'Russia', 'Tatlin era un artista completo, dedito sia alla pittura che alla musica folkloristica, motivato dai suoi continui viaggi in Turchia, in Grecia e sulle coste dell\'Africa del Nord, per il suo lavoro di marinaio. Grazie alla sua passione per la pittura cubista e futurista riuscì ad annoverare fra il suo giro di amicizie Gon?arova e Larionov, con i quali condivise varie esposizioni. Realizzò rilievi astratti polimaterici (i Controrilievi), inaugurando in tal modo il costruttivismo, con cui esprimeva l\'arte funzionale, costruttiva, attenta ai nuovi materiali (dell\'epoca) e alle tecniche industriali.\r\nIl suo incontro con Pablo Picasso avvenuto a Parigi lo influenzò positivamente, riuscì in quel lasso di tempo ad attingere da lui la tecnica di scomposizione degli oggetti su piani diversi, fino a ottenere pure forme geometriche. Professore di arte e di tecniche pittoriche durante la rivoluzione russa, aderì alla corrente del produttivismo, secondo la quale l\'arte veniva asservita ai principi pratici della costituzione di una società nuova e egualitaria. Nel 1919 era stato coinvolto nel progetto di un monumento (una torre metallica a forma di spirale di 400 metri) che doveva essere dedicato alla Terza Internazionale, ma i lavori di costruzione non furono mai iniziati e il progetto venne abbandonato.\r\nNel 1932, per via del decreto staliniano, che aveva decretato lo scioglimento di qualunque gruppo potesse essere considerato troppo moderno all\'epoca, decise di trasferirsi a Leningrado, dedicandosi al disegno industriale e alla scenografia.'),
(13, 'Kazimir Malevic', 'Russia', 'Kazimir Severinovi? Malevi? nasce il 23 febbraio 1878 presso Kiev, in Ucraina. In seguito alla morte del padre si trasferisce nel 1904 a Mosca, dove studia privatamente nell\'atelier di Fëdor Rerberg. Nei primi anni della sua carriera artistica sperimenta vari stili moderni e partecipa alle principali mostre dell\'avanguardia: è presente, con Vasilij Kandinskij e Michail Larionov, a quella dell\'Associazione degli Artisti di Mosca e, nel 1910, a quella del gruppo Fante di Quadri. Nel 1912 i suoi dipinti neoprimitivisti di soggetto contadino sono esposti alla mostra della Coda d\'Asino. Dopo questo avvenimento, Malevi? lascia il gruppo di Larionov. Nel 1913, con il compositore Michail Matjušin e con lo scrittore Aleksej Kru?ënych redige il manifesto dei Primo Congresso Futurista. Nello stesso anno Malevi? disegna scene e costumi per l\'opera La vittoria sul Sole di Matjušin e Kru?ënych. Nel 1914 è presente al Salon des Indépendants di Parigi.\nAll\'Ultima Mostra Futurista 0.10 che si tiene nel 1915 a Pietrogrado, Malevi? lancia il suprematismo, con la sua pittura astratta e geometrica. Dal 1919 studia applicazioni tridimensionali del suprematismo con modellini architettonici. Negli anni successivi alla rivoluzione bolscevica del 1917, Malevi? e altri artisti dell\'avanguardia sono sostenuti dal governo sovietico e ottengono alti incarichi nel campo amministrativo e nell\'insegnamento dell\'arte. Nel 1919 Malevi? inizia l\'attività di docente all\'Istituto d\'Arte di Vitebsk, del quale diviene poco dopo direttore. Dal 1919 al 1920 una personale di Malevi? è allestita alla Sedicesima Mostra di Stato a Mosca, dedicata al suprematismo e agli altri stili astratti. Con i suoi allievi di Vitebsk, Malevi? dà vita al gruppo suprematista UNOVIS. Dal 1922 al 1927 insegna all\'Istituto di Cultura Artistica di Leningrado e tra il 1914 e il 1926 lavora prevalentemente a modellini architettonici con un gruppo di allievi.\nNel 1927 Malevi? si reca a Varsavia per presentare una mostra dei suoi dipinti; successivamente è a Berlino, dove le sue opere sono esposte alla Grosse Berliner Kunstausstellung. Durante la permanenza in Germania conosce Jean Arp, Kurt Schwitters, Naum Gabo e Le Corbusier, e visita il Bauhaus. Nel 1929 si tiene alla Galleria Tret\'jakov di Mosca una personale di Malevi?. A causa dei suoi rapporti con gli artisti tedeschi, Malevi? è arrestato nel 1930 e gran parte dei suoi appunti vengono distrutti. Negli ultimi anni dipinge in maniera figurativa. Malevi? muore a Leningrado il 15 maggio 1935.'),
(14, 'Giorgio de Chirico', 'Italia', 'Giuseppe Maria Alberto Giorgio de Chirico nacque[1][2] a Volo, capitale della Tessaglia[3], in Grecia, il 10 luglio del 1888 da genitori italiani appartenenti alla nobiltà: il padre Evaristo (figlio del barone palermitano Giorgio Filigone de Chirico)[4] era un ingegnere ferroviario, tra i principali realizzatori della prima rete su rotaie in Bulgaria ed in Grecia; la madre era la baronessa[5] di origine genovese Gemma Cervetto[6][7][8]. Entrambi i genitori erano nati a Costantinopoli[4]. Nel 1891 morì Adelaide la sorella maggiore[2] e ad Atene venne alla luce il fratello Andrea Alberto, che assumerà dal 1914 lo pseudonimo di Alberto Savinio[3] per la sua attività di musicista, letterato e pittore. Per i primi diciassette anni di vita visse In Grecia tra Volo e Atene[6], imparò infatti il greco moderno[6]. Nel 1896 la famiglia tornò da Atene a Volo e de Chirico prese le prime lezioni di disegno dal pittore greco Mavrudis, successivamente dal pittore e soldato Carlo Barbieri e dallo svizzero Jules-Louis Gilliéron[1]. Nel 1899 frequentò brevemente il Liceo Leonino di Atene e poi tornò a studiare in casa con maestri privati: studia l\'italiano, il tedesco, il francese e la musica[1]. Nel 1900 Giorgio si iscrisse al Politecnico di Atene per intraprendere lo studio della pittura (in quegli anni dipingerà la prima natura morta)[3]. Nel 1906, insieme al fratello e alla madre, lasciò la Grecia per l\'Italia, dove visitò Milano e si trasferì a Firenze frequentando l\'Accademia di belle arti di Firenze[3]. Nel 1907 si iscrisse all\'Accademia delle belle arti di Monaco di Baviera[3]; in quel periodo conobbe l\'arte di Arnold Böcklin e di Max Klinger.\r\nNell\'estate del 1909 si trasferì a Milano, dove già risiedevano la madre e il fratello[3]; all\'inizio del 1910 si recò a Firenze insieme alle madre[3] dove dipinse la sua prima piazza metafisica, l\'Enigma di un pomeriggio d\'autunno, nata dopo una rivelazione che ebbe in piazza Santa Croce. Dal 1911 al 1915 de Chirico visse a Parigi, dove abitava il fratello Alberto, partecipò al Salon d\'Automne e al Salon des Indépendants e frequentò i principali artisti dell\'epoca come Guillame Apollinaire, Max Jacob e Pablo Picasso[9]. Fu soprattutto la frequentazione con Apollinaire a influenzarlo[9]. Cominciò quindi a realizzare quadri con uno stile più sicuro. Subì l\'influenza di Paul Gauguin, da cui presero forma le prime rappresentazioni delle piazze d\'Italia.'),
(15, 'Simone Martini', 'Italia', 'Simone Martini, indicato talvolta anche come Simone Senese (Siena, 1284 circa – Avignone, 1344), è stato un pittore e miniatore italiano, considerato indiscutibilmente uno dei maestri della scuola senese e sicuramente uno dei maggiori e più influenti artisti del Trecento italiano, l\'unico in grado di contendere lo scettro a Giotto. La sua formazione avvenne, probabilmente, nella bottega di Duccio di Buoninsegna.');

-- --------------------------------------------------------

--
-- Struttura della tabella `opera`
--

CREATE TABLE `opera` (
  `cod_opera` int(11) NOT NULL,
  `titolo` varchar(100) NOT NULL,
  `anno_realizzazione` int(4) DEFAULT NULL,
  `importanza` enum('scarsa','discreta','grande') NOT NULL DEFAULT 'discreta',
  `file_associato` varchar(200) DEFAULT NULL,
  `cod_autore` int(11) NOT NULL,
  `n_sala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `opera`
--

INSERT INTO `opera` (`cod_opera`, `titolo`, `anno_realizzazione`, `importanza`, `file_associato`, `cod_autore`, `n_sala`) VALUES
(1, 'Campo di grano con volo di corvi', 1890, 'discreta', 'Campo di grano con volo di corvi.jpg', 2, 2),
(2, 'Notte stellata sul Rodano', 1888, 'grande', 'notte stellata sul rodano.jpg', 2, 1),
(3, 'Il Cristo giallo', 1889, 'grande', 'il cristo giallo.jpg', 3, 1),
(4, 'L\'entrata di Cristo a Bruxelles nel 1889', 1888, 'grande', 'entrata di Cristo a Bruxelles nel 1889.jpg', 4, 2),
(5, 'Amor sacro e Amor profano', 1515, 'grande', 'Amor sacro e Amor profano.jpg', 5, 1),
(6, 'Polittico Averoldi', 1520, 'grande', 'Polittico Averoldi.jpg', 5, 1),
(7, 'Danae', 1553, 'grande', 'Danae.jpg', 5, 2),
(8, 'L\'urlo', 1893, 'grande', 'urlo.jpg', 6, 1),
(9, 'Anxiety', 1894, 'discreta', 'Anxiety.jpg', 6, 2),
(10, 'Ronda di notte', 1642, 'grande', 'Ronda di notte.jpg', 7, 1),
(11, 'Lezione di anatomia del dottor Tulp', 1632, 'grande', 'Lezione di anatomia del dottor Tulp.jpg', 7, 2),
(12, 'Il Gasometro', 1943, 'grande', 'Il Gasometro.jpg', 9, 1),
(13, 'Il Bucintoro al Molo il giorno dell\'Ascensione', 1740, 'discreta', 'Il Bucintoro al Molo il giorno dell Ascensione.jpg', 8, 2),
(14, 'Laughing Cavalier', 1624, 'discreta', 'Laughing Cavalier.jpg', 10, 2),
(15, 'Broadway Boogie Woogie', 1942, 'grande', 'Broadway Boogie Woogie.jpg', 11, 1),
(16, 'Composition II in Red, Blue, and Yellow', 1930, 'discreta', 'Composition II in Red, Blue, and Yellow.jpg', 11, 2),
(17, 'Model of the monument III International', 1920, 'discreta', 'Model of the monument III International.jpg', 12, 1),
(18, 'Quadrato nero', 1915, 'discreta', 'Quadrato nero.jpg', 13, 1),
(19, 'Suprematist Composition', 1916, 'grande', 'Suprematist Composition.jpg', 13, 2),
(20, 'Le muse inquietanti', 1918, 'grande', 'Le muse inquietanti.jpg', 14, 2),
(21, 'Mistero e melanconia di una strada', 1914, 'grande', 'Mistero e melanconia di una strada.jpg', 14, 1),
(22, 'Piazza d\'Italia', 1913, 'discreta', 'Piazza d Italia.jpg', 14, 2),
(23, 'Maestà del Palazzo Pubblico di Siena', 1315, 'grande', 'Maesta del Palazzo Pubblico di Siena.jpg', 15, 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `punto_ristoro`
--

CREATE TABLE `punto_ristoro` (
  `nome_ristoro` varchar(30) NOT NULL,
  `orario_apertura` time NOT NULL,
  `orario_chiusura` time NOT NULL,
  `cod_sezione` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `punto_ristoro`
--

INSERT INTO `punto_ristoro` (`nome_ristoro`, `orario_apertura`, `orario_chiusura`, `cod_sezione`) VALUES
('', '07:30:00', '22:00:00', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `sala`
--

CREATE TABLE `sala` (
  `numero_sala` int(11) NOT NULL,
  `estensione` double NOT NULL,
  `id_sezione` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `sala`
--

INSERT INTO `sala` (`numero_sala`, `estensione`, `id_sezione`) VALUES
(1, 12.5, 1),
(2, 20, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `sezione`
--

CREATE TABLE `sezione` (
  `id_sezione` int(11) NOT NULL,
  `nome_sezione` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `sezione`
--

INSERT INTO `sezione` (`id_sezione`, `nome_sezione`) VALUES
(1, 'Capolavori');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`id`, `nome`, `cognome`, `username`, `password`) VALUES
(1, 'Andrea', 'Giugni', 'a', 'a');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `autore`
--
ALTER TABLE `autore`
  ADD PRIMARY KEY (`cod_autore`);

--
-- Indici per le tabelle `opera`
--
ALTER TABLE `opera`
  ADD PRIMARY KEY (`cod_opera`),
  ADD KEY `n_sala` (`n_sala`),
  ADD KEY `cod_autore` (`cod_autore`);

--
-- Indici per le tabelle `punto_ristoro`
--
ALTER TABLE `punto_ristoro`
  ADD PRIMARY KEY (`nome_ristoro`),
  ADD KEY `cod_sezione` (`cod_sezione`);

--
-- Indici per le tabelle `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`numero_sala`),
  ADD KEY `nome_sezione` (`id_sezione`),
  ADD KEY `nome_sezione_2` (`id_sezione`);

--
-- Indici per le tabelle `sezione`
--
ALTER TABLE `sezione`
  ADD PRIMARY KEY (`id_sezione`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `autore`
--
ALTER TABLE `autore`
  MODIFY `cod_autore` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT per la tabella `opera`
--
ALTER TABLE `opera`
  MODIFY `cod_opera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT per la tabella `sala`
--
ALTER TABLE `sala`
  MODIFY `numero_sala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `sezione`
--
ALTER TABLE `sezione`
  MODIFY `id_sezione` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `opera`
--
ALTER TABLE `opera`
  ADD CONSTRAINT `opera_ibfk_1` FOREIGN KEY (`cod_autore`) REFERENCES `autore` (`cod_autore`),
  ADD CONSTRAINT `opera_ibfk_2` FOREIGN KEY (`n_sala`) REFERENCES `sala` (`numero_sala`);

--
-- Limiti per la tabella `punto_ristoro`
--
ALTER TABLE `punto_ristoro`
  ADD CONSTRAINT `punto_ristoro_ibfk_1` FOREIGN KEY (`cod_sezione`) REFERENCES `sezione` (`id_sezione`);

--
-- Limiti per la tabella `sala`
--
ALTER TABLE `sala`
  ADD CONSTRAINT `sala_ibfk_1` FOREIGN KEY (`id_sezione`) REFERENCES `sezione` (`id_sezione`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
