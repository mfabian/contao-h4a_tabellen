<?php

declare(strict_types=1);

/*
 * This file is part of contao-h4a_tabellen.
 *
 * (c) Jan Lünborg
 *
 * @license MIT
 */

$GLOBALS['TL_LANG']['tl_h4a']['operationImportFromH4a'] = 'Update H4a-Events';
$GLOBALS['TL_LANG']['tl_h4a']['operationUpdateResultsFromH4a'] = 'Update H4a-Results';

$GLOBALS['TL_LANG']['tl_calendar']['h4a_legend'] = 'Handball4all Daten';

$GLOBALS['TL_LANG']['tl_calendar']['h4a_imported']['0'] = 'Handball4all Update';
$GLOBALS['TL_LANG']['tl_calendar']['h4a_imported']['1'] = 'Kalendereinträge für die Spiele einer Mansnchaft werden automatisch über Handball4all erstellt';

$GLOBALS['TL_LANG']['tl_calendar']['h4a_ignore']['0'] = 'Ignorieren';
$GLOBALS['TL_LANG']['tl_calendar']['h4a_ignore']['1'] = 'Kalender wird bei automatischen Updates ignoriert, bspw. für vergangene Saisons';

$GLOBALS['TL_LANG']['tl_calendar']['h4a_liga_ID']['0'] = 'Liga ID';
$GLOBALS['TL_LANG']['tl_calendar']['h4a_liga_ID']['1'] = 'Bitte geben Sie die 5-stellige ID der Liga (www.handball4all.de) ein';

$GLOBALS['TL_LANG']['tl_calendar']['h4a_team_ID']['0'] = 'Team ID';
$GLOBALS['TL_LANG']['tl_calendar']['h4a_team_ID']['1'] = 'Bitte geben Sie die 6-stellige ID des Teams (www.handball4all.de) ein';

$GLOBALS['TL_LANG']['tl_calendar']['my_team_name']['0'] = 'Mein Team';
$GLOBALS['TL_LANG']['tl_calendar']['my_team_name']['1'] = 'Genaue Bezeichnung der Mannschaft, die hervorgehoben werden soll';

$GLOBALS['TL_LANG']['tl_calendar']['h4aEvents_author']['0'] = 'Autor';
$GLOBALS['TL_LANG']['tl_calendar']['h4aEvents_author']['1'] = 'Benutzer, der bei den automatisch generierten Events als Autor hinterlegt werden soll';

$GLOBALS['TL_LANG']['tl_calendar']['h4a_season']['0'] = 'Saison';
$GLOBALS['TL_LANG']['tl_calendar']['h4a_season']['1'] = 'Die Saison in der die Spiele dieses Kalenders stattfinden';

/*
 * tl_calendar_events
 */

$GLOBALS['TL_LANG']['tl_calendar_events']['h4a_legend'] = 'Spiel-Nr. Klasse und Mannschaften';
$GLOBALS['TL_LANG']['tl_calendar_events']['gymnasium_legend'] = 'Halleninformationen';
$GLOBALS['TL_LANG']['tl_calendar_events']['result_legend'] = 'Halbzeit- und Endergebnis';

$GLOBALS['TL_LANG']['tl_calendar_events']['gGameNo']['0'] = 'Spielnummer';
$GLOBALS['TL_LANG']['tl_calendar_events']['gGameNo']['1'] = 'Wird automatisch beim Update über handball4all gesetzt';

$GLOBALS['TL_LANG']['tl_calendar_events']['gClassName']['0'] = 'Spielklasse';
$GLOBALS['TL_LANG']['tl_calendar_events']['gClassName']['1'] = 'Wird automatisch beim Update über handball4all gesetzt';

$GLOBALS['TL_LANG']['tl_calendar_events']['gHomeTeam']['0'] = 'Heimmmannschaft';
$GLOBALS['TL_LANG']['tl_calendar_events']['gHomeTeam']['1'] = 'Wird automatisch beim Update über handball4all gesetzt';

$GLOBALS['TL_LANG']['tl_calendar_events']['gGuestTeam']['0'] = 'Gastmannschaft';
$GLOBALS['TL_LANG']['tl_calendar_events']['gGuestTeam']['1'] = 'Wird automatisch beim Update über handball4all gesetzt';

$GLOBALS['TL_LANG']['tl_calendar_events']['gGymnasiumNo']['0'] = 'Hallennummer';
$GLOBALS['TL_LANG']['tl_calendar_events']['gGymnasiumNo']['1'] = 'Wird automatisch beim Update über handball4all gesetzt';

$GLOBALS['TL_LANG']['tl_calendar_events']['gGymnasiumName']['0'] = 'Hallenname';
$GLOBALS['TL_LANG']['tl_calendar_events']['gGymnasiumName']['1'] = 'Wird automatisch beim Update über handball4all gesetzt';

$GLOBALS['TL_LANG']['tl_calendar_events']['gGymnasiumStreet']['0'] = 'Straße';
$GLOBALS['TL_LANG']['tl_calendar_events']['gGymnasiumStreet']['1'] = 'Wird automatisch beim Update über handball4all gesetzt';

$GLOBALS['TL_LANG']['tl_calendar_events']['gGymnasiumTown']['0'] = 'Stadt';
$GLOBALS['TL_LANG']['tl_calendar_events']['gGymnasiumTown']['1'] = 'Wird automatisch beim Update über handball4all gesetzt';

$GLOBALS['TL_LANG']['tl_calendar_events']['gGymnasiumPostal']['0'] = 'Postleitzahl';
$GLOBALS['TL_LANG']['tl_calendar_events']['gGymnasiumPostal']['1'] = 'Wird automatisch beim Update über handball4all gesetzt';

$GLOBALS['TL_LANG']['tl_calendar_events']['gHomeGoals']['0'] = 'Heimtore';
$GLOBALS['TL_LANG']['tl_calendar_events']['gHomeGoals']['1'] = 'Wird automatisch beim Update über handball4all gesetzt';

$GLOBALS['TL_LANG']['tl_calendar_events']['gGuestGoals']['0'] = 'Gasttore';
$GLOBALS['TL_LANG']['tl_calendar_events']['gGuestGoals']['1'] = 'Wird automatisch beim Update über handball4all gesetzt';

$GLOBALS['TL_LANG']['tl_calendar_events']['gHomeGoals_1']['0'] = 'Heimtore Halbzeit';
$GLOBALS['TL_LANG']['tl_calendar_events']['gHomeGoals_1']['1'] = 'Wird automatisch beim Update über handball4all gesetzt';

$GLOBALS['TL_LANG']['tl_calendar_events']['gGuestGoals_1']['0'] = 'Gasttore Halbzeit';
$GLOBALS['TL_LANG']['tl_calendar_events']['gGuestGoals_1']['1'] = 'Wird automatisch beim Update über handball4all gesetzt';

 /*
 * tl_content
 */

$GLOBALS['TL_LANG']['CTE']['handball4all'] = 'Handball4All Elemente';

$GLOBALS['TL_LANG']['CTE']['h4a_tabelle']['0'] = 'Tabelle Liga';
$GLOBALS['TL_LANG']['CTE']['h4a_tabelle']['1'] = 'Erzeugt die aktuelle Tabelle für die angegebene Liga';

$GLOBALS['TL_LANG']['CTE']['h4a_spiele']['0'] = 'Spielplan Team';
$GLOBALS['TL_LANG']['CTE']['h4a_spiele']['1'] = 'Erzeugt den Spielplan für das angegebene Team';

$GLOBALS['TL_LANG']['CTE']['h4a_ligaspiele']['0'] = 'Spielplan Liga';
$GLOBALS['TL_LANG']['CTE']['h4a_ligaspiele']['1'] = 'Erzeugt den Spielplan für die angegebene Liga';

$GLOBALS['TL_LANG']['CTE']['h4a_aktuellespiele']['0'] = 'Aktuelle Spiele Verein';
$GLOBALS['TL_LANG']['CTE']['h4a_aktuellespiele']['1'] = 'Erzeugt die akteulle Spielübericht des Vereins';

$GLOBALS['TL_LANG']['tl_content']['h4a_liga_ID']['0'] = 'Liga ID';
$GLOBALS['TL_LANG']['tl_content']['h4a_liga_ID']['1'] = 'Bitte geben Sie die 5-stellige ID der Liga (www.handball4all.de) ein';

$GLOBALS['TL_LANG']['tl_content']['h4a_team_ID']['0'] = 'Team ID';
$GLOBALS['TL_LANG']['tl_content']['h4a_team_ID']['1'] = 'Bitte geben Sie die 6-stellige ID des Teams (www.handball4all.de) ein';

$GLOBALS['TL_LANG']['tl_content']['my_team_name']['0'] = 'Mein Team';
$GLOBALS['TL_LANG']['tl_content']['my_team_name']['1'] = 'Genaue Bezeichnung der Mannschaft, die hervorgehoben werden soll';

$GLOBALS['TL_LANG']['tl_content']['h4a_legend'] = 'Handball4all-Daten';
