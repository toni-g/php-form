# php-form
A form with first name, last name and country
## HTML
In der HTML-Datei wird ein Formular erstellt, in dem man seinen Vor- und Nachnamen und sein Land angeben kann. Über den Abschicken-Button werden die Daten mit der POST-Methode an die php-Datei geschickt.
## PHP
Die Datei wird zuerst mit der Datenbank 'lernen' verbunden. Dann werden die abgeschickten Daten als Variable gespeichert und mit dem `INSERT INTO`-Befehl in die Datenbank 'lernen' eingefügt.

Die Anzahl der Datensätze und eine Tabelle mit allen Datensätzen werden auf der PHP-Seite angezeigt. Dazu wird der SQL-Befehl `SELECT` verwendet.
