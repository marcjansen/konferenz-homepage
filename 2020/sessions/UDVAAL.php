<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>Digitale Bahnhofspläne für die Reisendeninformation der Deutschen Bahn – FOSSGIS 2020</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/freitag.php#session_UDVAAL">&#9668;&#9668; zurück zum Programm</a> </p>
        <h2 class='abstract-title'>Digitale Bahnhofspläne für die Reisendeninformation der Deutschen Bahn</h2>
        <section>
            <p>
                                <span class='abstract-speakers'>Dr. Dirk Schlierkamp-Voosen</span></p>
                            <p><span class='abstract-time-heading'>Zeit: </span>Freitag 13. März 09:00 Uhr<br><span class='abstract-room-heading'>Ort: </span>HS Anatomie</p>

            
            <p>Die Einheit Reisendeninformation der Deutschen Bahn AG hat zur Aufgabe, Lösungen zu entwickeln, die den Reisendenkomfort erhöhen. 
Im Rahmen dieses Auftrags soll Reisenden die Orientierung im Bahnhof vereinfacht werden.
Über digitale Bahnhofspläne soll ein Fußgängerrouting, das Reisenden im Bahnhof die Navigation zu bestimmten POI's (Geschäften, Geldautomaten, u.v.m.) erlaubt, angeboten werden.
Das Routing selber wird über die PostgreSQL-Erweiterung PG-Routing auf einem Routingnetz gerechnet. Als Grundlage dienen dabei eigene Bahnhofspläne, 
die mit Daten aus OpenStreetMap ergänzt wurden. Anschlusspunkte außerhalb des Bahnhofs sollen über das OSM-Strassennetz verbunden werden. 
Weiterhin wurden nicht-begehbare Flächen wie Infotafeln, Schächte (u.a.) sowie Rolltreppen, Treppen und Aufzüge für Übergänge zu den 
unterschiedlichen Ebenen bei der Erstellung des Routingnetzes berücksichtigt. Das Routingnetz wurde in verschiedenen Dichten mit 
GRASS GIS erzeugt und in die Datenbank importiert.
Der Vortrag stellt die gesamte, auf einem Open Source Stack basierende Lösung, sowie auch die Integration der OSM Daten vor.</p>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>