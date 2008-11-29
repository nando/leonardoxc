<?
//************************************************************************
// Leonardo XC Server, http://leonardo.thenet.gr
//
// Copyright (c) 2004-8 by Andreadakis Manolis
//
// This program is free software. You can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License.
//
// $Id: GUI_flight_add.php,v 1.33 2008/11/29 22:46:07 manolis Exp $                                                                 
//
//************************************************************************

 if (!$userID) return;
 
?>
<style type="text/css">
<!--
.box {
	 background-color:#F4F0D5;
	 border:1px solid #555555;
	padding:3px; 
	margin-bottom:5px;
}

.dropBox {
	display:block;
	position:absolute;

	top:0px;
	left: -999em;
	width:auto;
	height:auto;
	
	visibility:hidden;

	border-style: solid; 
	border-right-width: 2px; border-bottom-width: 2px; border-top-width: 1px; border-left-width: 1px;
	border-right-color: #999999; border-bottom-color: #999999; border-top-color: #E2E2E2; border-left-color: #E2E2E2;
	border-right-color: #555555; border-bottom-color: #555555; border-top-color: #E2E2E2; border-left-color: #E2E2E2;
	
	background-color:#FFFFFF;
	padding: 1px 1px 1px 1px;
	margin-bottom:0px;

}
.takeoffOptionsDropDown {width:410px; }

-->
</style>
<div id="takeoffAddID" class="dropBox takeoffOptionsDropDown" style="visibility:hidden;">
	<table width="100%" cellpadding="0" cellspacing="0">
	<tr><td class="infoBoxHeader" style="width:725px;" >
	<div align="left" style="display:inline; float:left; clear:left;" id="takeoffBoxTitle">Register Takeoff</div>
	<div align="right" style="display:inline; float:right; clear:right;">
	<a href='#' onclick="toggleVisible('takeoffAddID','takeoffAddPos',14,-20,0,0);return false;"><img src='<? echo $moduleRelPath."/templates/".$PREFS->themeName ?>/img/exit.png' border=0></a></div>
	</td></tr></table>
	<div id='addTakeoffDiv'>
		<iframe name="addTakeoffFrame" id="addTakeoffFrame" width="700" height="320" frameborder=0 style='border-width:0px'></iframe>
	</div>
</div>
<?
 $datafile=$_FILES['datafile']['name'];
 open_inner_table( _SUBMIT_FLIGHT,750,"icon_add.png");
 echo "<tr><td>";

 if ($datafile=='') {   
?>
<script language="JavaScript">
function setValue(obj)
{		
	var n = obj.selectedIndex;    // Which menu item is selected
	var val = obj[n].value;        // Return string value of menu item

	var valParts= val.split("_");

	gl=MWJ_findObj("glider");
	gl.value=valParts[1];

	gl=MWJ_findObj("gliderBrandID");
	gl.value=valParts[0];

	// document.inputForm.glider.value = value;
}
</script>

  <form name="inputForm" action="" enctype="multipart/form-data" method="post" >	
  <table class=main_text  width="700" height="400" border="0" align="center" cellpadding="4" cellspacing="2" >
    <tr>
      <td colspan="4"><div align="center" class="style111"><strong><?=_SUBMIT_FLIGHT?> </strong></div>      
        <div align="center" class="style222"><?=_ONLY_THE_IGC_FILE_IS_NEEDED?></div></td>
    </tr>
    <tr>
      <td width="205" valign="top"><div align="right" class="styleItalic"><?=_SUBMIT_THE_IGC_FILE_FOR_THE_FLIGHT?></div></td>
      <td colspan="3" valign="top"><input name="datafile" type="file" size="50"></td>
    </tr>
    <tr>
      <td  valign="top"><div align="right" class="styleItalic"> <?=_GLIDER_TYPE ?></div></td>
      <td width="160"  valign="top"><select name="gliderCat">        
      	<?
			foreach ( $CONF_glider_types as $gl_id=>$gl_type) {

				if ($gl_id==$CONF_default_cat_add) $is_type_sel ="selected";
				else $is_type_sel ="";
				echo "<option $is_type_sel value=$gl_id>".$gliderCatList[$gl_id]."</option>\n";
			}
		?>
	  </select></td>
    </tr>
    <tr>
      <td  valign="top"><div align="right" class="styleItalic"><? echo _Category; ?> </div></td>
      <td colspan="2"><select name="category">
		<?
      		# martin jursa 18.05.2008
      		# in case of javascript validation ignore the default to force the user to select the category
      		if (!empty($CONF_addflight_js_validation)) {
      			echo "<option value=0></option>\n";
				foreach ( $CONF_category_types as $gl_id=>$gl_type) {
						echo "<option value=$gl_id>".$gl_type."</option>\n";
				}
      		}else {
				foreach ( $CONF_category_types as $gl_id=>$gl_type) {
						if ($CONF_default_category==$gl_id) $is_type_sel ="selected";
						else $is_type_sel ="";
						echo "<option $is_type_sel value=$gl_id>".$gl_type."</option>\n";
				}
      		}
		?></select>
	  </td>
      <td width="133"  valign="top"><? if ($enablePrivateFlights) { ?>
		<span class="styleItalic">
        <?=_MAKE_THIS_FLIGHT_PRIVATE ?>
      </span>
        <input type="checkbox" name="is_private" value="1">
		<? } ?></td>
    </tr>
	
	
    <tr>
      <td valign="top"><div align="right" class="styleItalic"><?=_Glider_Brand ?></div></td>
      <td colspan="3" valign="top"> <select name="gliderBrandID" id="gliderBrandID" >			
					<option value=0></option>
					<? 
					$brandsListFilter=brands::getBrandsList();
					foreach($brandsListFilter as $brandNameFilter=>$brandIDfilter) {
						echo "<option  value=$brandIDfilter>$brandNameFilter</option>";
					}					
				?>
				</select>
				<?=_GLIDER ?>
				 <input name="glider" type="text" size="20" >			</td>
			</tr>	 
				 		<? 
			$gliders=  getUsedGliders($userID) ;
			if (count($gliders) ||1) {
				
				 ?>
			 <tr>
      <td valign="top"><div align="right" class="styleItalic"><?=_Or_Select_from_previous ?></div></td>
      <td colspan="3" valign="top"> 
				<select name="gliderSelect" id="gliderSelect" onchange="setValue(this);">			
					<option value="0_"></option>
					<? 
							
						foreach($gliders as $selGlider) {
							if ($selGlider[0]!=0) $flightBrandName= $CONF['brands']['list'][$selGlider[0]];
							else $flightBrandName='';
							
							echo "<option value='".$selGlider[0]."_".$selGlider[1]."'>".$flightBrandName.' '.$selGlider[1]."</option>\n";

//							echo "<option $glSel>".$selGlider."</option>\n";
						}
					?>
				</select>
			<? } ?>				</td>
    </tr>
	<? if ( L_auth::isAdmin($userID)) { ?>
    <tr>
      <td width="205" valign="top"><div align="right" class="styleItalic"><?=_INSERT_FLIGHT_AS_USER_ID?></div></td>
      <td colspan="3" valign="top">
        <input name="insert_as_user_id" type="text" size="10">		</td>
    </tr>
 	<? }?>
    <tr>
      <td colspan="4" valign="middle"><div align="left" class="styleItalic"><?=_COMMENTS_FOR_THE_FLIGHT?>
	 </div>
	    <? 	require_once dirname(__FILE__).'/FN_editor.php';
	  		if ( L_auth::isModerator($userID) ) {
				$toolbar='Leonardo';
				$allowUploads=false;
			} else{
				$toolbar='LeonardoSimple';
 				$allowUploads=false;
			}
			createTextArea($flight->userServerID,$flight->userID,'comments',$flight->comments ,
							'flight_comments', $toolbar , $allowUploads, 700,250);
							?>	  </td>
    </tr>

    <tr>
      <td><div align="right" class="styleItalic"><?=_RELEVANT_PAGE ?> </div></td>
      <td colspan="3">
        http://<input name="linkURL" type="text" id="linkURL" size="50" value="">		</td>
    </tr>
	<? for($i=0;$i<$CONF_photosPerFlight;$i++) { ?>
    <tr>
      <td><div align="right" class="styleItalic"><? echo _PHOTO.' #'.($i+1); ?></div></td>
      <td colspan="3">
        <input name="photo<?=$i?>Filename" type="file" size="50">	  </td>
    </tr>
	<? } ?>
	 <tr>
      <td><div align="right" class="styleItalic"></div></td>
      <td colspan="3">  <div align="center" class="style222">
        <div align="left"><?=_PHOTOS_GUIDELINES.$CONF_max_photo_size.' Kb';?></div>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3"><p><input name="submit" type="submit" value="<?=_PRESS_HERE_TO_SUBMIT_THE_FLIGHT ?>"></p>      </td>
    </tr>
<? if ( defined('_FLIGHTADD_CONFIRMATIONTEXT')) { //_FLIGHTADD_CONFIRMATIONTEXT?>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3" style="font-weight:bold"">
      	<?=_FLIGHTADD_CONFIRMATIONTEXT?>
      </td>
     </tr>
 <? } ?>
     <tr>
      <td colspan=4><div align="center" class="smallLetter"><em><?=_DO_YOU_HAVE_MANY_FLIGHTS_IN_A_ZIPFILE ?>
	<a href="<?=getLeonardoLink(array('op'=>'add_from_zip'))?>"><?=_PRESS_HERE ?> </a></em></div></td>
    </tr>
  </table>
  </form>
<? 
} else {  // form submited - add the flight

	set_time_limit (120);
	ignore_user_abort(true);	

	if ($_POST['insert_as_user_id'] >0 && L_auth::isAdmin($userID) ) $flights_user_id=$_POST['insert_as_user_id']+0;
	else $flights_user_id=$userID;

	if ($_POST['is_private'] ==1 ) $is_private=1;
	else $is_private=0;

	$gliderCat=$_POST['gliderCat']+0;


	$tmpFilename=$_FILES['datafile']['tmp_name'];
	$tmpFormFilename=$_FILES['datafile']['name'];	

	$suffix=strtolower(substr($tmpFormFilename,-4));
	if ($suffix==".olc") $tmpFormFilename=substr($tmpFormFilename,0,-4).".igc"; // make it an igc file (we deal with its content later )
	
	if ($suffix==".kml") { // see if it is a kml file from GPSdump
		// echo "kml file<BR>";
		require_once dirname(__FILE__).'/FN_kml2igc.php';
		if ( kml2igc($tmpFilename) ) {
			$tmpFormFilename=substr($tmpFormFilename,0,-4).".igc"; 
		} 
	}
	
	
	if ( strtolower(substr($tmpFormFilename,-4))!=".igc" ) { // not allowed extension
		$result=ADD_FLIGHT_ERR_FILE_DOESNT_END_IN_IGC;
		@unlink($tmpFilename);
	} else {
		if (!$_FILES['datafile']['name']) addFlightError(_YOU_HAVENT_SUPPLIED_A_FLIGHT_FILE);

		# modification martin jursa 17.05.2008: require glider and brandid
		$glider=$_POST["glider"];
		$gliderBrandID=$_POST["gliderBrandID"]+0;
		if (!empty($CONF_require_glider) && (empty($glider) || empty($gliderBrandID))) {
			addFlightError(_YOU_HAVENT_ENTERED_GLIDER);
		}
		$category=$_POST['category']+0;
		if (empty($category)) {
			$category=$CONF_default_category;
		}


		checkPath($flightsAbsPath."/".$flights_user_id);
		move_uploaded_file($tmpFilename, $flightsAbsPath."/".$flights_user_id."/".$tmpFormFilename );
		$filename=$flightsAbsPath."/".$flights_user_id."/".$tmpFormFilename;
	
		//	echo $filename; 
		$category=$_POST['category']+0;
		$comments=$_POST["comments"];
		//$glider=$_POST["glider"];
		//$gliderBrandID=$_POST["gliderBrandID"]+0;
		$linkURL=$_POST["linkURL"];

		list($result,$flightID)=addFlightFromFile($filename,true,$flights_user_id,
				array('gliderBrandID'=>$gliderBrandID,'private'=>$is_private,
					  '$linkURL'=>$linkURL,'comments'=>$comments,'glider'=>$glider,'category'=>$category,'cat'=>$gliderCat ,
					//	'allowDuplicates'=>($CONF['servers']['list'][$CONF_server_id]['allow_duplicate_flights']+0) ,
						'allowDuplicates'=>1, // we always allow duplicates when locally submitted. (will take over eternal flights) 
					
					  ) 
				) ;
		
	}
	
	if ( $result !=1 ) {	
		// we must log the failure for debuging purposes
		@unlink($filename);
		$errMsg=getAddFlightErrMsg($result,$flightID);
		addFlightError($errMsg);	
	} else {
		$flight=new flight();
		$flight->getFlightFromDB($flightID);

		if ($flight->takeoffVinicity > $takeoffRadious*2 ) {
?>
<script language="javascript">
	 function user_add_takeoff(lat,lon,id) {	 
		MWJ_changeContents('takeoffBoxTitle',"Register Takeoff");
		document.getElementById('addTakeoffFrame').src='<?=$moduleRelPath?>/GUI_EXT_user_waypoint_add.php?refresh=0&lat='+lat+'&lon='+lon+'&takeoffID='+id;		
		MWJ_changeSize('addTakeoffFrame',720,345);
		MWJ_changeSize( 'takeoffAddID', 725,365 );
		toggleVisible('takeoffAddID','takeoffAddPos',-10,-50,725,435);
	 }
</script>




<?
			// $firstPoint=new gpsPoint($flight->FIRST_POINT,$flight->timezone);
			
			$firstPoint=new gpsPoint('',$flight->timezone);
			$firstPoint->setLat($flight->firstLat);
			$firstPoint->setLon($flight->firstLon);
			$firstPoint->gpsTime=$flight->firstPointTM;				

			$takeoffLink="<div align='center' id='attentionLinkPos' class='attentionLink box'><img src='$moduleRelPath/img/icon_att3.gif' border=0 align=absmiddle> 
The takeoff/launch of your flight is not registered in Leonardo. <img src='$moduleRelPath/img/icon_att3.gif' border=0 align=absmiddle><br>
This is nothing to worry about, but you can easily provide this info <br>by clicking on the 'Register Takeoff' link below.
<br> If you are not sure about some of the information is OK to skip this step. <br><BR> <a
				 href=\"javascript:user_add_takeoff(".$firstPoint->lat.",".$firstPoint->lon.",".$flight->takeoffID.")\">Register Takeoff</a><div id='takeoffAddPos'></div></div>";
			echo $takeoffLink;
		}
			
		?>  	 
		  <p align="center"><span class="style111"><font face="Verdana, Arial, Helvetica, sans-serif"><?=_YOUR_FLIGHT_HAS_BEEN_SUBMITTED ?></font></span> <br>
		  <br>
		  <a href="<?=getLeonardoLink(array('op'=>'show_flight','flightID'=>$flightID))?>"><?=_PRESS_HERE_TO_VIEW_IT ?></a><br>
		  <em><?=_WILL_BE_ACTIVATED_SOON ?></em> 
		  <hr>	  
		<?
	}


}
	echo "</td></tr>";
	close_inner_table(); 
?>