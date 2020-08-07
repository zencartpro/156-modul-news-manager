<?php
// -----
// Part of the News Box Manager plugin, re-structured for Zen Cart v1.5.6 and later by lat9.
// Copyright (C) 2015-2020, Vinos de Frutas Tropicales
// Translation for Zen Cart German 2020-08-06 webchills
//
// +----------------------------------------------------------------------+
// | Do Not Remove: Coded for Zen-Cart by geeks4u.com                     |
// | Dedicated to Memory of Amelita "Emmy" Abordo Gelarderes              |
// +----------------------------------------------------------------------+
//
define('NEWS_BOX_MANAGER_HEADING_TITLE', 'News Box Manager');
define('NEWS_BOX_SUBHEADING_LISTING', '(Zeige &quot;%s&quot; News)');
define('NEWS_BOX_SUBHEADING_PREVIEW', '(Vorschau)');
define('NEWS_BOX_SUBHEADING_EDIT', '(Bearbeiten)');
define('NEWS_BOX_SUBHEADING_NEW', '(Neuer Newsbeitrag)');

define('TABLE_HEADING_NEWS_ID', 'ID');
define('TABLE_HEADING_NEWS_TITLE', 'News Titel');
define('TABLE_HEADING_NEWS_TYPE', 'News Typ');
define('TABLE_HEADING_NEWS_START', 'Startdatum');
define('TABLE_HEADING_NEWS_END', 'Enddatum');
define('TABLE_HEADING_MODIFIED', 'zuletzt geändert');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Aktion');

define('TEXT_NEWS_TITLE', 'News Titel:');
define('TEXT_NEWS_CONTENT', 'News Inhalt:');

define('TEXT_NEWS_METATAGS_TITLE', 'Metatags Titel:');
define('TEXT_NEWS_METATAGS_DESCRIPTION', 'Metatags Beschreibung:');
define('TEXT_NEWS_METATAGS_KEYWORDS', 'Metatags Keywords:');
define('TEXT_NEWS_CONTENT_HELP', 'Der <b>News Titel</b> und <b>News Inhalt</b> dürfen in allen Sprachen nicht leer sein und dürfen keine <code>&lt;script&gt;&lt;/script&gt;</code> Tags enthalten.  HTML tags werden in den <b>Metatags</b> Feldern NICHT unterstützt.');

define('TEXT_NEWS_SORT_ORDER', 'News Anzeigereihenfolge:');
define('NEWS_SORT_START_DESC', 'Start Datum (absteigend)');    //-Default
define('NEWS_SORT_START_ASC', 'Start Datum (aufsteigen)');
define('NEWS_SORT_ENABLED', 'Aktivierte Artikel zuerst');
define('NEWS_SORT_DISABLED', 'Deaktivierte Artikel zuerst');

define('NEWS_BOX_NAME_ALL', 'Alle');

define('TEXT_NEWS_CHOOSE_TYPE', 'Wählen Sie den Artikel &quot;Typ&quot;:');
define('TEXT_NEWS_TYPE', 'News Typ:');
define('TEXT_NEWS_STATUS', 'Status:');
define('TEXT_ENABLED', 'Aktiviert');
define('TEXT_DISABLED', 'Deaktiviert');
define('TEXT_NEWS_DATE_ADDED', 'Hinzugefügt am:');
define('TEXT_NEWS_DATE_MODIFIED', 'Geändert am:');
define('TEXT_NEWS_START_DATE', 'News startet am:');
define('TEXT_NEWS_START_DATE_HELP', 'Geben Sie ein Datum im Format <span class="errorText">YYYY-MM-DD</span> ein oder lassen Sie das Feld leer für das heutige Datum.  Der Newsbeitrag erscheint um <code>00:00:00</code> Uhr an den angegebenen Datum.');
define('TEXT_NEWS_END_DATE', 'News endet am:');
define('TEXT_NEWS_END_DATE_HELP', 'Geben Sie ein Datum im Format <span class="errorText">YYYY-MM-DD</span> ein oder lassen Sie das Feld leer für einen Newsbeitrag ohne Enddatum. Wird ein Enddatum angegeben, dann deaktiviert sich der Newsbeitrag um <code>23:59:59</code> Uhr am angegebenen Enddatum.');
define('TEXT_NEVER', 'Never');

define('TEXT_NEWS_FOR_LANGUAGE', 'News Information für %s');    //- %s is filled in with the 'name' of the associated language, e.g. 'English'.

define('TEXT_METATAGS_SHOW_HIDE', 'Zeige/Verstecke Metatags');
define('TEXT_METATAGS_TITLE', 'Metatags Titel:');
define('TEXT_METATAGS_KEYWORDS', 'Metatags Keywords:');
define('TEXT_METATAGS_DESCRIPTION', 'Metatags Beschreibung:');
define('TEXT_NO_METATAGS', 'nicht eingegeben');

define('TEXT_NEWS_TYPE_NAME_UNKNOWN', ' (Unbekannt)');

define('TEXT_INFO_HEADING_DELETE_NEWS', 'News Artikel löschen');
define('TEXT_NEWS_DELETE_INFO', 'Wollen Sie diesen News Beitrag wirklich löschen?');
define('SUCCESS_NEWS_ARTICLE_DELETED', 'Der gewählte News Beitrag wurde erfolgreich gelöscht.');

define('TEXT_INFO_HEADING_COPY_NEWS', 'News Artikel kopieren');
define('TEXT_INFO_COPY_ARTICLE', 'Eine Kopie dieses News Artikels erzeugen?');
define('SUCCESS_NEWS_ARTICLE_COPIED', 'Der gewählte News Beitrag wurde erfolgreich kopiert.');

define('TEXT_INFO_HEADING_MOVE_NEWS', 'News Artikel verschieben');
define('TEXT_INFO_MOVE_CHOOSE_TYPE', 'Wählen Sie den <em>News Typ</em> in den dieser Artikel verschoben werden soll');
define('SUCCESS_NEWS_ARTICLE_MOVED', 'Der gewählte News Beitrag wurde erfolgreich verschoben.');
define('ERROR_NEWS_TITLE_CONTENT', 'Der <em>News Titel</em> und <em>News Inhalt</em> darf nich leer sein für <b>alle</b> Sprachen und &lt;script&gt; Tags sind nicht erlaubt.');
define('ERROR_NEWS_NOT_ENABLED', ' Der Newsbeitrag kann nicht aktiviert werden, bis diese Bedingung erfüllt ist.');
define('ERROR_NEWS_START_DATE', 'Das <em>News Startdatum</em> muss im Format <b>YYYY-MM-DD</b> sein und dieses Datum muss gültig sein.');
define('ERROR_NEWS_END_DATE', 'Das <em>News Enddatum</em> muss im format <b>YYYY-MM-DD</b> sein und dieses Datum muss gültig sein.');
define('ERROR_NEWS_DATE_ISSUES', 'Das <em>Start Datum</em> muss vor dem <em>End Datum</em> liegen.');
define('SUCCESS_NEWS_ARTICLE_CHANGED', 'Der News Beitrag wurde erfolgreich %s.');
define('NEWS_ARTICLE_UPDATED', 'aktualisiert');
define('NEWS_ARTICLE_CREATED', 'erzeugt');

define('TEXT_DISPLAY_NUMBER_OF_NEWS', 'Zeige <b>%d</b> bis <b>%d</b> (von <b>%d</b> News)');
define('TEXT_NEWS_BOX_MANAGER_INFO', 'Hier können Sie News Beiträge verfassen, die dann im Shop angezeigt werden. Diverse Einstellungen dazu stehen unter <em>Konfiguration-&gt;News Box Manager</em> zur Verfügung.<br /><br />Ein gültiger News Beitrag muss einen &quot;News Titel&quot; und &quot;News Inhalt&quot; in allen Ihren im Shop aktiven Sprachen haben.');
