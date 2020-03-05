<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>GeoPortal.rlp unchained – FOSSGIS 2020</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/mittwoch.php#session_JCFGAX">&#9668;&#9668; zurück zum Programm</a> </p>
        <h2 class='abstract-title'>GeoPortal.rlp unchained</h2>
        <section>
            <p>
                                <span class='abstract-speakers'>Armin Retterath</span></p>
                            <p><span class='abstract-time-heading'>Zeit: </span>Mittwoch 11. März 18:00 Uhr<br><span class='abstract-room-heading'>Ort: </span>HS Weismannhaus</p>

            
            <p>Das Geoportal des Landes Rheinland-Pfalz wurde im Januar 2007 freigeschaltet und basiert vollständig auf Freier Open Source Software. Die zugrundeliegende Architektur beruht - im Gegensatz zu vielen anderen GDI-Architekturen - auf dem Prinzip der Registrierung und Verwaltung von OGC-Diensten (OWS) in einer PostgreSQL-Datenbank. Aktuell beinhaltet das Informationsmodell in Rheinland-Pfalz mehr als 1.500 OWS und 18.000 Metaden von ca. 220 verschiedenen Organisationen. Die verteilten Dienste sind mittels des im Portal umgesetzten OWS-Proxy über persistente URLs in diverse externe Verwaltungsprozesse und Applikationen eingebunden. Außerdem werden über den Proxy viele der Anforderungen der EU INSPIRE-Richtlinie zentral umgesetzt (INSPIRE ATOM Feeds, INSPIRE Service Metadaten, OGC API - Feature Proxy, ...). 
Die Kernkomponete des Systems ist seit 2006 die OSGEO Software Mapbender(2). Sie wurde in den letzten Jahren konsequent weiterentwickelt und agil an die sich wandelnden Anforderungen angepasst. Das Grundkonzept des Geoportal Frameworks war jedoch nach mehr als 17 Jahren Entwicklung etwas in die Jahre gekommen und die Pflege der Software wurde relativ aufwendig. 
Unter Berücksichtigung dieser Aspekte, haben sich die Bundesländer Hessen, Rheinland-Pfalz und Saarland dazu entschlossen, das Geoportal Framework unter Nutzung von FOSS Komponenten grundlegend neu aufzusetzen. Das Informationsmodell bleibt dabei weitgehend erhalten und auch in Zukunft wird unter der Haube auf PostgreSQL gesetzt. Ein wichtiger Punkt ist hier die Migrationsfähigkeit des alten Systems zur Erhaltung der persistenten URLs und Berechtigungen aus dem Mapbender2 (alleine in Rheinland-Pfalz existieren mehr als 25.000 Nutzeraccounts!).
Zur Entwicklung des Systems wird auf das Web Application Framework Django gesetzt und dabei der Umstieg von php auf python vollzogen.
Um das System modularer zu gestalten, werden Backend (Dienste- und Metadatenverwaltung) und Frontend (Kartenanwendung) getrennt betrachtet. Zum Austausch der Kartenkontexte wird in dabei auf OWSContext gesetzt. Diese Vorgehensweise ermöglicht die Versorgung beliebiger GIS-Clients (Web und Desktop!) mit initialen "Projektkonfigurationen".
Der erste Schritt erfolgte mit dem Relaunch im August 2019. In diesem Zusammenhang wurden das alte CMS (Typo3), sowie die Metadatensuche durch Django Module ersetzt. Im Rahmen einer Live-Präsentation wird das neue System vorgestellt und u.a. anhand konkreter Beispiele gezeigt, wie einfach man deutschland- und seit Oktober 2019 sogar europaweit nach Geodaten suchen und diese direkt nutzen kann.</p>
        <div class='abstract-bio'>
            <h3 class='abstract-bio-name'>Armin Retterath</h3>
            <p>Armin Retterath ist Leiter des Bund/Länder Arbeitskreises Geodienste der GDI-DE sowie Architekt der Geodateninfrastruktur des Landes Rheinland-Pfalz. Er beschäftigt sich seit 2005 mit dem Aufbau und Betrieb von Geodateninfrastrukturen auf den unterschiedlichsten Ebenen der öffentlichen Verwaltung.</p>
        </div>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>