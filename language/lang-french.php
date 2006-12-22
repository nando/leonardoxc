<?php
/**************************************************************************/
/* French language translation by                                        */
/* Etienne Prade (http://www.prade.net)                                  */
/**************************************************************************/

/************************************************************************/
/* Leonardo: Gliding XC Server					                        */
/* ============================================                         */
/*                                                                      */
/* Copyright (c) 2004-5 by Andreadakis Manolis                          */
/* http://leonardo.thenet.gr                                            */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/*                                                                      */
/* If you need to use double quotes (") remember to add a backslash (\),*/
/* so your entry will look like: This is \"double quoted\" text.        */
/* And, if you use HTML code, please double check it.                   */
/************************************************************************/

function setMonths() {
	global  $monthList;
	$monthList=array('Janvier', 'F�vrier', 'Mars', 'Avril', 'Mai', 'Juin', 
		'Juillet', 'Ao�t', 'Septembre', 'Octobre', 'Novembre', 'D�cembre'  );
}
setMonths();

//--------------------------------------------
// output.php
//--------------------------------------------
define("_FREE_FLIGHT","Vol Libre");
define("_FREE_TRIANGLE","Triangle Libre");
define("_FAI_TRIANGLE","Triangle FAI");

define("_SUBMIT_FLIGHT_ERROR","Un probl�me a �t� rencontr� pendant le chargement du vol");

// list_pilots()
define("_NUM","#");
define("_PILOT","Pilote");
define("_NUMBER_OF_FLIGHTS","Nombre de Vols");
define("_BEST_DISTANCE","Meilleure Distance");
define("_MEAN_KM","Nombre moyen de kilom�tres par vol");
define("_TOTAL_KM","Kilom�trage total en vol");
define("_TOTAL_DURATION_OF_FLIGHTS","Dur�e totale de vol");
define("_MEAN_DURATION","Dur�e moyenne de vol");
define("_TOTAL_OLC_KM","Distance totale OLC");
define("_TOTAL_OLC_SCORE","Score total OLC");
define("_BEST_OLC_SCORE","Meilleur score OLC");
define("_From","de");

// list_flights()
define("_DURATION_HOURS_MIN","Dur�e (heures:minutes)");
define("_SHOW","Afficher");

// show flight
define("_FLIGHT_WILL_BE_ACTIVATED_SOON","Le vol sera activ� dans 1-2 minutes. ");
define("_TRY_AGAIN","Veuillez r�essayer plus tard");

define("_TAKEOFF_LOCATION","D�collage");
define("_TAKEOFF_TIME","Heure du d�collage");
define("_LANDING_LOCATION","Atterrissage");
define("_LANDING_TIME","Heure d\'atterrissage");
define("_OPEN_DISTANCE","Distance Lin�aire");
define("_MAX_DISTANCE","Distance Maximum");
define("_OLC_SCORE_TYPE","Type de score OLC");
define("_OLC_DISTANCE","Distance OLC");
define("_OLC_SCORING","Score OLC");
define("_MAX_SPEED","Vitesse Maximum");
define("_MAX_VARIO","Vario Maximum");
define("_MEAN_SPEED","Vitesse Moyenne");
define("_MIN_VARIO","Vario Minimum");
define("_MAX_ALTITUDE","Altitude Maximum (ASL)");
define("_TAKEOFF_ALTITUDE","Altitude de D�collage (ASL)");
define("_MIN_ALTITUDE","Altitude Minimum (ASL)");
define("_ALTITUDE_GAIN","Gain d\'Altitude");
define("_FLIGHT_FILE","Fichier de vol");
define("_COMMENTS","Commentaires");
define("_RELEVANT_PAGE","Adresse URL correspondante");
define("_GLIDER","Planeur");
define("_PHOTOS","Photos");
define("_MORE_INFO","Extras");
define("_UPDATE_DATA","Actualiser les informations");
define("_UPDATE_MAP","Actualiser la carte");
define("_UPDATE_3D_MAP","Actualiser la carte 3D");
define("_UPDATE_GRAPHS","Actualiser les graphiques");
define("_UPDATE_SCORE","Actualiser le score");

define("_TAKEOFF_COORDS","Coordonn�es du d�collage:");
define("_NO_KNOWN_LOCATIONS","Aucun lieu r�pertori�!");
define("_FLYING_AREA_INFO","Infos sur la zone de vol");

//--------------------------------------------
// index.php
//--------------------------------------------
define("_PAGE_TITLE","Serveur Leonardo XC");
define("_RETURN_TO_TOP","Haut de page");
// list flight
define("_PILOT_FLIGHTS","Vols du pilote");

define("_DATE_SORT","Date");
define("_PILOT_NAME","Nom du pilote");
define("_TAKEOFF","D�collage");
define("_DURATION","Dur�e");
define("_LINEAR_DISTANCE","Distance lin�aire");
define("_OLC_KM","Km OLC");
define("_OLC_SCORE","Score OLC");
define("_DATE_ADDED","Derniers ajouts");

define("_SORTED_BY","Trier par:");
define("_ALL_YEARS","Toutes les ann�es");
define("_SELECT_YEAR_MONTH","Selectionner l\'ann�e (et le mois)");
define("_ALL","Tout");
define("_ALL_PILOTS","Afficher tous les pilotes");
define("_ALL_TAKEOFFS","Afficher tous les d�collages");
define("_ALL_THE_YEAR","Toute l\'ann�e");

// add flight
define("_YOU_HAVENT_SUPPLIED_A_FLIGHT_FILE","Vous n'avez pas fourni de fichier de vol");
define("_NO_SUCH_FILE","Le fichier que vous avez fourni n'a pas �t� trouv� sur le serveur");
define("_FILE_DOESNT_END_IN_IGC","Le fichier n'a pas de suffixe en .igc");
define("_THIS_ISNT_A_VALID_IGC_FILE","Ce n'est pas un fichier .igc valide");
define("_THERE_IS_SAME_DATE_FLIGHT","Un vol avec la m�me date et la m�me heure existe d�j�");
define("_IF_YOU_WANT_TO_SUBSTITUTE_IT","Si vous voulez le remplacer vous devriez d'abord");
define("_DELETE_THE_OLD_ONE","effacer l'ancien");
define("_THERE_IS_SAME_FILENAME_FLIGHT","Un fichier avec le m�me nom existe d�j�");
define("_CHANGE_THE_FILENAME","S'il s'agit d'un vol diff�rent veuillez changer le nom et essayez � nouveau");
define("_YOUR_FLIGHT_HAS_BEEN_SUBMITTED","Votre vol a �t� charg�");
define("_PRESS_HERE_TO_VIEW_IT","Pressez ici pour le visualiser");
define("_WILL_BE_ACTIVATED_SOON","(il sera activ� dans 1-2 minutes)");

// add_from_zip
define("_SUBMIT_MULTIPLE_FLIGHTS","Charger plusieurs vols");
define("_ONLY_THE_IGC_FILES_WILL_BE_PROCESSED","Seuls les fichiers IGC seront pris en compte");
define("_SUBMIT_THE_ZIP_FILE_CONTAINING_THE_FLIGHTS","Charger le fichier ZIP <br> qui contient les vols");
define("_PRESS_HERE_TO_SUBMIT_THE_FLIGHTS","Pressez ici pour charger les vols");

define("_FILE_DOESNT_END_IN_ZIP","Le vol que vous proposez n'a pas de suffixe en .zip");
define("_ADDING_FILE","Chargement en cours");
define("_ADDED_SUCESSFULLY","Chargement termin�");
define("_PROBLEM","Probl�me");
define("_TOTAL","Total de ");
define("_IGC_FILES_PROCESSED","Les vols ont �t� trait�s");
define("_IGC_FILES_SUBMITED","Les vols ont �t� charg�s");

// info
define("_DEVELOPMENT","D�veloppement");
define("_ANDREADAKIS_MANOLIS","Andreadakis Manolis");
define("_PROJECT_URL","Adresse URL du projet");
define("_VERSION","Version");
define("_MAP_CREATION","Creation de la carte");
define("_PROJECT_INFO","Infos sur le projet");

// menu bar 
define("_MENU_MAIN_MENU","Menu principal");
define("_MENU_DATE","Selectionner Date");
define("_MENU_COUNTRY","Selectionner pays");
define("_MENU_XCLEAGUE","XC League");
define("_MENU_ADMIN","Admin");

define("_MENU_COMPETITION_LEAGUE","Ligue - toutes cat�gories");
define("_MENU_OLC","OLC");
define("_MENU_OPEN_DISTANCE","Distance libre");
define("_MENU_DURATION","Dur�e");
define("_MENU_ALL_FLIGHTS","Afficher tous les vols");
define("_MENU_FLIGHTS","Vols");
define("_MENU_TAKEOFFS","D�collages");
define("_MENU_FILTER","Filtrer");
define("_MENU_MY_FLIGHTS","Mes vols");
define("_MENU_MY_PROFILE","Mon profil");
define("_MENU_MY_STATS","Mes statistiques"); 
define("_MENU_MY_SETTINGS","Mes r�glages"); 
define("_MENU_SUBMIT_FLIGHT","Charger des vols");
define("_MENU_SUBMIT_FROM_ZIP","Charger des vols depuis un zip");
define("_MENU_SHOW_PILOTS","Pilotes");
define("_MENU_SHOW_LAST_ADDED","Chargements r�cents");
define("_FLIGHTS_STATS","Statistiques des vols");

define("_SELECT_YEAR","Selectionner une ann�e");
define("_SELECT_MONTH","Selectionner un mois");
define("_ALL_COUNTRIES","Afficher tous les pays");
//--------------------------------------------
// list_pilots.php
//--------------------------------------------

define("_ALL_TIMES","Tous les temps");
define("_NUMBER_OF_FLIGHTS","Nombre de vols");
define("_TOTAL_DISTANCE","Distance totale");
define("_TOTAL_DURATION","Dur�e totale");
define("_BEST_OPEN_DISTANCE","Meilleure distance");
define("_TOTAL_OLC_DISTANCE","Distance OLC totale");
define("_TOTAL_OLC_SCORE","Score OLC total");
define("_BEST_OLC_SCORE","Meilleur score OLC");
define("_MEAN_DURATION","Dur�e moyenne");
define("_MEAN_DISTANCE","Distance moyenne");
define("_PILOT_STATISTICS_SORT_BY","Pilotes - Trier par");
define("_CATEGORY_FLIGHT_NUMBER","Categorie 'FastJoe' - Nombre de vols");
define("_CATEGORY_TOTAL_DURATION","Categoryie 'DURACELL' - Dur�e totale des vols");
define("_CATEGORY_OPEN_DISTANCE","Categorie 'Distance Libre'");
define("_THERE_ARE_NO_PILOTS_TO_DISPLAY","Il n'y a aucun pilote � afficher!");

	
//--------------------------------------------
// delete_flight.php
//--------------------------------------------

define("_THE_FLIGHT_HAS_BEEN_DELETED","Le vol a �t� effac�");
define("_RETURN","Retour");
define("_CAUTION_THE_FLIGHT_WILL_BE_DELETED","ATTENTION - Vous �tes sur le point d'effacer ce vol");
define("_THE_DATE","Date ");
define("_YES","OUI");
define("_NO","NON");

//--------------------------------------------
// competition.php
//--------------------------------------------

define("_LEAGUE_RESULTS","Resultats ligue");
define("_N_BEST_FLIGHTS"," Meilleurs vols");
define("_OLC","OLC");
define("_OLC_TOTAL_SCORE","Score total OLC");
define("_KILOMETERS","Kilom�tres");
define("_TOTAL_ALTITUDE_GAIN","Gain d'altitude total");
define("_TOTAL_KM","Kilom�trage total");

//--------------------------------------------
// filter.php
//--------------------------------------------

define("_IS","est");
define("_IS_NOT","n'est pas");
define("_OR","ou");
define("_AND","et");
define("_FILTER_PAGE_TITLE","Filtrer les vols");
define("_RETURN_TO_FLIGHTS","Retour aux vols");
define("_THE_FILTER_IS_ACTIVE","Le filtre est actif");
define("_THE_FILTER_IS_INACTIVE","Le filtre est inactif");
define("_SELECT_DATE","S�lectionner une date");
define("_SHOW_FLIGHTS","Afficher les vols");
define("_ALL2","TOUT");
define("_WITH_YEAR","Avec l'ann�e");
define("_MONTH","Mois");
define("_YEAR","Ann�e");
define("_FROM","de");
define("_from","de");
define("_TO","�");
define("_SELECT_PILOT","S�lectionner Pilote");
define("_THE_PILOT","Le pilote");
define("_THE_TAKEOFF","Le d�collage");
define("_SELECT_TAKEOFF","S�lectionner d�collage");
define("_THE_COUNTRY","Le pays");
define("_COUNTRY","Pays");
define("_SELECT_COUNTRY","S�lectionner pays");
define("_OTHER_FILTERS","Autres Filtres");
define("_LINEAR_DISTANCE_SHOULD_BE","La distance lin�aire devrait �tre");
define("_OLC_DISTANCE_SHOULD_BE","La distance OLC devrait �tre");
define("_OLC_SCORE_SHOULD_BE","Le score OLC devrait �tre");
define("_DURATION_SHOULD_BE","La dur�e devrait �tre");
define("_ACTIVATE_CHANGE_FILTER","Activer / changer FILTRE");
define("_DEACTIVATE_FILTER","D�sactiver FILTRE");
define("_HOURS","heures");
define("_MINUTES","min");

//--------------------------------------------
// add_flight.php
//--------------------------------------------

define("_SUBMIT_FLIGHT","Charger vol");
define("_ONLY_THE_IGC_FILE_IS_NEEDED","(Seul le fichier IGC est demand�)");
define("_SUBMIT_THE_IGC_FILE_FOR_THE_FLIGHT","Charger le <br>fichier IGC du vol");
define("_NOTE_TAKEOFF_NAME","Veuillez noter the nom, emplacement et pays du d�collage");
define("_COMMENTS_FOR_THE_FLIGHT","Commentaires sur le vol");
define("_PHOTO","Photo");
define("_PHOTOS_GUIDELINES","Les photos doivent �tre au format jpg et faire moins de 100Kb");
define("_PRESS_HERE_TO_SUBMIT_THE_FLIGHT","Cliquez ici pour charger le vol");
define("_DO_YOU_HAVE_MANY_FLIGHTS_IN_A_ZIPFILE","Voulez-vous charger beaucoup de vols � la fois ?");
define("_PRESS_HERE","Cliquez ici");

define("_IS_PRIVATE","Ne pas montrer publiquement");
define("_MAKE_THIS_FLIGHT_PRIVATE","Ne pas montrer publiquement");
define("_INSERT_FLIGHT_AS_USER_ID","Ajouter vol sous une autre identit�");
define("_FLIGHT_IS_PRIVATE","Ce vol est priv�");

//--------------------------------------------
// edit_flight.php
//--------------------------------------------

define("_CHANGE_FLIGHT_DATA","Modifier les donn�es de vol");
define("_IGC_FILE_OF_THE_FLIGHT","Fichier IGC du vol");
define("_DELETE_PHOTO","Effacer");
define("_NEW_PHOTO","Nouvelle photo");
define("_PRESS_HERE_TO_CHANGE_THE_FLIGHT","Cliquez ici pour modifier les donn�es de vol");
define("_THE_CHANGES_HAVE_BEEN_APPLIED","Les modifications ont �t� effectu�es");
define("_RETURN_TO_FLIGHT","Revenir au vol");

//--------------------------------------------
// olc
//--------------------------------------------
define("_RETURN_TO_FLIGHT","Revenir au vol");
define("_READY_FOR_SUBMISSION","Pr�t � charger");
define("_SUBMIT_TO_OLC","Charger dans OLC");
define("_YOUR_FLIGHT_HAS_BEEN_SUCCESSFULLY_SUBMITED_TO_THE_OLC","Le vol a �t� charg� avec succ�s dans OLC");
define("_THE_OLC_REFERENCE_NUMBER_IS","Le num�ro de r�f�cenre OLC est");
define("_THERE_WAS_A_PROBLEM_ON_OLC_SUBMISSION","Un probl�me a �t� rencontr� lors du chargement dans OLC");
define("_LOOK_BELOW_FOR_THE_CAUSE_OF_THE_PROBLEM","Regardez ci-dessous pour la cause du probl�me");
define("_FLIGHT_SUCCESFULLY_REMOVED_FROM_OLC","Le vol a �t� effac� de OLC");
define("_FLIGHT_NOT_SCORED","Ce vol ne peut pas �tre charg� car il n'a pas de score OLC");
define("_TOO_LATE","Ce vol ne peut pas �tre charg� car l'�ch�ance fix�e pour ce vol est d�pass�e");
define("_CANNOT_BE_SUBMITTED","L'�ch�ance fix�e pour ce vol est d�pass�e");
define("_NO_PILOT_OLC_DATA","<p><strong>Pas de donn�es OLC pour ce pilote</strong><br>
  <br>
<b>Qu'est-ce que OLC / � quoi servent ces champs ?</b><br><br>
	Pour effectuer un chargement valide dans OLC, le pilote doit �tre d�j� enregistr� dans le syst�me OLC.</p>
<p> Ceci peut �tre fait <a href='http://www2.onlinecontest.org/olcphp/2005/ausw_wertung.php?olc=holc-i&spr=en' target='_blank'>
  � cette page web</a>, o� vous devrez sp�cifier votre pays puis s�lectionner 'Contest Registration'<br>
</p>
<p>Une fois l'enregistrement effectu�, vous devrez rentrer ici vos informations EXACTEMENT comme cela a �t� fait lors de l'enregistrement dans OLC.
</p>
<ul>
	<li><div align=left>Pr�nom/Nom</div>
	<li><div align=left>Surnom</div>
	<li><div align=left>Date de Naissance</div>
	<li> <div align=left>Votre indicatif</div>
	<li><div align=left>Si vous avez d�j� charg� des vols dans OLC, les quatre lettres que vous utilisez pour le nom de fichier IGC</div>
</ul>");
define("_OLC_MAP","Carte");
define("_OLC_BARO","Barographe");

//--------------------------------------------
// pilot_profile.php
//--------------------------------------------
define("_Pilot_Profile","Profil du pilote");
define("_back_to_flights","Retour aux vols");
define("_pilot_stats","Statistiques pilote");
define("_edit_profile","Editer profil");
define("_flights_stats","Statistiques de vol");
define("_View_Profile","Visualiser Profil");

define("_Personal_Stuff","Personnel");
define("_First_Name"," Pr�nom");
define("_Last_Name","Nom");
define("_Birthdate","Date de naissance");
define("_dd_mm_yy","jj.mm.aa");
define("_Sign","Signer");
define("_Marital_Status","Situation Maritale");
define("_Occupation","Situation professionnelle");
define("_Web_Page","Page Web");
define("_N_A","Non disponible");
define("_Other_Interests","Autres Inter�ts");
define("_Photo","Photo");

define("_Flying_Stuff","Pratique de vol");
define("_note_place_and_date","si n�cessaire noter le lieu / pays et la date");
define("_Flying_Since","Vole depuis");
define("_Pilot_Licence","Licence du pilote");
define("_Paragliding_training","Formation au parapente");
define("_Favorite_Location","Site de vol favori");
define("_Usual_Location","Site de vol habituel");
define("_Best_Flying_Memory","Meilleur souvenir de vol");
define("_Worst_Flying_Memory","Pire souvenir de vol");
define("_Personal_Distance_Record","Record personnel de distance");
define("_Personal_Height_Record","Record personnel d'altitude");
define("_Hours_Flown","Heures de vol");
define("_Hours_Per_Year","Heures de vol par an");

define("_Equipment_Stuff","Equipement");
define("_Glider","Voile");
define("_Harness","Sellette");
define("_Reserve_chute","Parachute de secours");
define("_Camera","Appareil photo");
define("_Vario","Vario");
define("_GPS","GPS");
define("_Helmet","Casque");
define("_Camcorder","Cam�ra");

define("_Manouveur_Stuff","Manoeuvres");
define("_note_max_descent_rate","Si possible noter le taux de descente max atteint");
define("_Spiral","Spirale");
define("_Bline","D�crochage aux B");
define("_Full_Stall","D�crochage dynamique");
define("_Other_Manouveurs_Acro","Autres Manoeuvres Acro");
define("_Sat","Sat");
define("_Asymmetric_Spiral","Spirale assym�trique");
define("_Spin","Vrille");

define("_General_Stuff","General");
define("_Favorite_Singer","Chanteur(/euse) pr�f�r�(e)");
define("_Favorite_Movie","Film pr�f�r�");
define("_Favorite_Internet_Site","Site <br>Internet favori");
define("_Favorite_Book","Livre pr�f�r�");
define("_Favorite_Actor","Acteur(/trice) pr�f�r�(e)");

//--------------------------------------------
// pilot_profile_edit.php
//--------------------------------------------
define("_Upload_new_photo_or_change_old","Charger une nouvelle photo ou changer l'ancienne");
define("_Delete_Photo","Effacer Photo");
define("_Your_profile_has_been_updated","Votre profil a �t� actualis�");
define("_Submit_Change_Data","Rentrer - Modifier les donn�es");

//--------------------------------------------
// pilot_�lc_profile_edit.php
//--------------------------------------------
define("_edit_OLC_info","Editer les informations OLC ");
define("_OLC_information","Informations OLC");
define("_callsign","Indicatif");
define("_filename_suffix","Suffixe du nom de dossier");
define("_OLC_Pilot_Info","Infos Pilote OLC");
define("_OLC_EXPLAINED","<b>Qu'est-ce que OLC / � quoi servent ces champs ?</b><br><br>
	Pour effectuer un chargement valide dans OLC, le pilote doit �tre d�j� enregistr� dans le syst�me OLC.</p>
<p> Ceci peut �tre fait <a href='http://www2.onlinecontest.org/olcphp/2005/ausw_wertung.php?olc=holc-i&spr=en' target='_blank'>
  � cette page web</a>, o� vous devrez sp�cifier votre pays puis s�lectionner 'Contest Registration'<br>
</p>
<p>Une fois l'enregistrement effectu�, vous devrez rentrer ici vos informations EXACTEMENT comme cela a �t� fait lors de l'enregistrement dans OLC.
</p>
<ul>
	<li><div align=left>Pr�nom/Nom</div>
	<li><div align=left>Surnom</div>
	<li><div align=left>Date de naissance</div>
	<li> <div align=left>Votre indicatif</div>
	<li><div align=left>Si vous avez d�j� charg� des vols dans OLC, les quatre lettres que vous utilisez pour le nom de fichier IGC</div>
</ul>
");

define("_OLC_SUFFIX_EXPLAINED","<b>Qu'est-ce que le 'Suffixe du nom de fichier?'</b><br>Il s'agit d'un identifiant � quatre lettres qui est sp�cifique � un a pilote ou � une voile. 
Si vous ne savez pas quoi indiquer ici, voici quelques conseils:<p>
<ul>
<li>Utilisez quatre lettres prises dans votre nom/pr�nom.
<li>Essayez de trouver une combinaison assez inhabituelle. Cela r�duira la possibilit� que votre suffixe soit aussi utilis� par un autre pilote.
<li>En cas de probl�me pour charger votre vol dans OLC en utilisant Leonardo, le suffixe pourrait �tre en cause. Essayez � nouveau apr�s avoir modifi� votre suffixe.
</ul>");
//--------------------------------------------
// pilot_profile_stats.php
//--------------------------------------------
define("_hh_mm","hh:mm");

define("_Totals","Totaux");
define("_First_flight_logged","Premier vol charg�");
define("_Last_flight_logged","Dernier vol charg�");
define("_Flying_period_covered","P�riode de vol couverte");
define("_Total_Distance","Distance Totale");
define("_Total_OLC_Score","Score Total OLC");
define("_Total_Hours_Flown","Heures de vol totales");
define("_Total_num_of_flights","Nombre total de vols ");

define("_Personal_Bests","Records Personnels");
define("_Best_Open_Distance","Meilleure distance libre");
define("_Best_FAI_Triangle","Meilleur Triangle FAI");
define("_Best_Free_Triangle","Meilleur Triangle Libre");
define("_Longest_Flight","Vol le plus long");
define("_Best_OLC_score","Meilleur score OLC");

define("_Absolute_Height_Record","Record d'altitude absolu");
define("_Altitute_gain_Record","Record de gain d'altitude");
define("_Mean_values","Valeurs moyennes");
define("_Mean_distance_per_flight","Distance moyenne par vol");
define("_Mean_flights_per_Month","Nombre de vols moyen par mois");
define("_Mean_distance_per_Month","Distance moyenne par mois");
define("_Mean_duration_per_Month","Dur�e moyenne par mois");
define("_Mean_duration_per_flight","Dur�e moyenne par vol");
define("_Mean_flights_per_Year","Nombre de vols moyen par an");
define("_Mean_distance_per_Year","Distance moyenne par an");
define("_Mean_duration_per_Year","Dur�e moyenne par an");

//--------------------------------------------
// show_waypoint.php
//--------------------------------------------
define("_See_flights_near_this_point","Voir les vols pr�s de ce point");
define("_Waypoint_Name","Nom du Waypoint");
define("_Navigate_with_Google_Earth","Naviguer avec Google Earth");
define("_See_it_in_Google_Maps","Afficher dans Google Maps");
define("_See_it_in_MapQuest","Afficher dans MapQuest");
define("_COORDINATES","Coordonn�es");
define("_FLIGHTS","Vols");
define("_SITE_RECORD","Record du site");
define("_SITE_INFO","Informations sur le site");
define("_SITE_REGION","R�gion");
define("_SITE_LINK","Lien pour obtenir plus d'informations");
define("_SITE_DESCR","Description du site/d�collage");

//--------------------------------------------
// KML file
//--------------------------------------------
define("_See_more_details","Voir plus de d�tails");
define("_KML_file_made_by","Fichier KML cr�� par");

//--------------------------------------------
// add_waypoint.php
//--------------------------------------------
define("_ADD_WAYPOINT","Enregistrer un d�collage");
define("_WAYPOINT_ADDED","Le d�collage a �t� enregistr�");

//--------------------------------------------
// list_takeoffs.php
//--------------------------------------------
define("_SITE_RECORD_OPEN_DISTANCE","Record du site<br>(distance libre)");
	
//--------------------------------------------
// glider types
//--------------------------------------------
define("_GLIDER_TYPE","Type de voile");
function setGliderCats() {
	global  $gliderCatList;
	$gliderCatList=array(1=>'Parapente',2=>'Delta (FAI 1)',4=>'Rigide (FAI 5) ',8=>'Planeur');
}
setGliderCats();

//--------------------------------------------
// user prefs  & units
//--------------------------------------------

define("_Your_settings_have_been_updated","Vos param�tres ont �t� actualis�s");

define("_THEME","Th�me");
define("_LANGUAGE","Langue");
define("_VIEW_CATEGORY","Voir cat�gorie");
define("_VIEW_COUNTRY","Voir pays");
define("_UNITS_SYSTEM" ,"Syst�me d'unit�s");
define("_METRIC_SYSTEM","M�trique (km,m)");
define("_IMPERIAL_SYSTEM","Imperial (miles,feet)");
define("_ITEMS_PER_PAGE","Objets par page");

define("_MI","mi");
define("_KM","km");
define("_FT","ft");
define("_M","m");
define("_MPH","mph");
define("_KM_PER_HR","km/h");
define("_FPM","fpm");
define("_M_PER_SEC","m/sec");

//--------------------------------------------
// index page
//--------------------------------------------

define("_WORLD_WIDE","Monde entier");
define("_National_XC_Leagues_for","Ligues nationales pour");
define("_Flights_per_Country","Vols par pays");
define("_Takeoffs_per_Country","D�collages par pays");
define("_INDEX_HEADER","Bienvenue dans Leonardo XC League");
define("_INDEX_MESSAGE","Vous pouvez utiliser le &quot;Menu principal&quot; pour naviguer ou utiliser les choix de cat�gories pr�sent�s ci-dessous.");

//--------------------------------------------
// NEW 
//--------------------------------------------
define("_MENU_SUMMARY_PAGE","First (Summary) Page");
define("_Display_ALL","Display ALL");
define("_Display_NONE","Display NONE");
define("_Reset_to_default_view","Reset to default view");
define("_No_Club","No Club");
define("_This_is_the_URL_of_this_page","This is the URL of this page");
define("_All_glider_types","All glider types");

?>