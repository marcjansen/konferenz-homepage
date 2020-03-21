<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>Von ArcGis nach QGIS – FOSSGIS 2020</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/mittwoch.php#session_ZFQNNN">&#9668;&#9668; zurück zum Programm</a> </p>
        <h2 class='abstract-title'>Von ArcGis nach QGIS</h2>
        <section>
            <p>
                                <span class='abstract-speakers'>Peter Heidelbach</span></p>
                            <p><span class='abstract-time-heading'>Zeit: </span>Mittwoch 11. März 15:00 Uhr<br><span class='abstract-room-heading'>Ort: </span>HS Rundbau</p>

                        <div class="video-container">
                <a href="https://media.ccc.de/v/fossgis2020-3020-von-arcgis-nach-qgis">
                    <img class="video-preview" src="video_previews/3020-hd.jpg" alt="Vorschaubild des Videos">
                    <div class="video-preview-overlay"></div>
                </a>
            </div>
                        <p><a href="/2020//attachments/ZFQNNN_von_arcgis_zu_qgis_ZUHsBOE.pdf">Vortragsfolien (PDF) </a></p>
            <p>ArcGis speichert seine Projekte in einer binären MXD-Datei, die nicht ohne weiteres von QGIS gelesen werden kann. Um seine Projekte trotzdem auch unter QGIS bearbeiten zu können, gibt es verschiedene Ansätze aus der OpenSource-Community: Slyr ist ein von der australischen Firma North Road entwickeltes QGIS-Plugin, welches den Import von ArcGis Projekten ermöglicht. Per Drag-and-Drop können ArcGis-Dateien direkt in QGIS eingefügt werden. Die Binärdaten werden per Reverse-Engineering ausgelesen und nutzbar gemacht. Das Tool befindet sich noch in der Entwicklungsphase, einzelne Funktionen stehen jedoch bereits zur Verfügung. </p>
<p>GeoCat bietet mit Bridge die Möglichkeit ArcGis-Projekte als WMS, WFC oder anderen Webdiensten verfügbar zu machen. So kann ein Projekt über Umwege auch in QGIS genutzt werden. Diese Lösung richtet sich also vorrangig an WebServer wie Map- oder GeoServer.</p>
<p>Die WhereGroup entwickelt ein auf Python basierendes Tool weiter, dessen Grundlage ein Projekt von Allan Maungu ist. Die Idee ist hier, die Projektdaten von ArcGis als QGIS-(XML)-Datei zu exportieren. Mithilfe von ArcObjects, die das Grundgerüst von ArcGis bilden, kann so auf alle Klassen und ihre Eigenschaften zugegriffen werden, um sie in ein QGIS lesbares Format in Form von QGIS-Projektdateien oder QGIS-Layerdateien abzuspeichern. </p>
<p>Trotzdem gibt es Hürden, die jeder Ansatz nehmen muss, seien es die geschützten Esri-Fonts, um Icons dazustellen, verschiedene Renderer oder das Labeling. Abschließend wird ein Einblick in den aktuellen Stand der WhereGroup-Toolbox- gegeben und ein exportiertes QGIS-Projekt vorgestellt.</p>
        <div class='abstract-bio'>
            <h3 class='abstract-bio-name'>Peter Heidelbach</h3>
            <p>Seit September 2018 als Auszubildender bei der WhereGroup am Coden. Beschäftigt in der QGIS-Forschungsabteilung und App-Entwicklung. Kotlin-Enthusiast, Hutgröße 54 und hat sein Handy immer lautlos.</p>
        </div>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>