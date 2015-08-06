<div class="popup-app_head">Выберите район Москвы<div class="popup-close png"></div></div>
<div class="popup-metro_cont">
	<script type="text/javascript" src="<?php echo Yii::app()->homeUrl; ?>js/areasMoscow.js?<?php echo RELEASE_MEDIA; ?>"></script>
	<div class="change-area">
		<div class="head">Нажмите на карте на округ, чтобы выбрать интересующий Вас район Москвы</div> 
		<div id="district-selector"> 
			<ul id="district"></ul>	
		</div>
		<div class="areas-map">
			<map name="mosmap">
				<area data-id="1" coords="102,192,114,192,116,185,133,184,149,179,156,178,162,174,152,157,158,146,166,146,170,141,170,136,151,138,142,130,140,131,132,130,126,136,118,130,114,131,110,141,104,143,94,143,88,153,86,152,82,157,86,162,92,166,98,162,108,161,110,165,95,182,94,186" shape="POLY" alt="Центр">
				<area data-id="2" coords="51,62,59,59,68,59,93,42,105,50,108,63,112,127,114,132,111,141,104,143,95,143,88,154,82,145,78,133,72,118,71,103,62,86,59,72" shape="POLY" alt="Север">
				<area data-id="3" coords="114,131,111,122,108,62,104,50,92,42,94,35,87,24,87,17,95,12,97,10,95,6,98,4,105,4,108,2,110,6,101,6,100,10,104,15,106,15,106,19,101,24,102,38,107,39,118,39,128,47,146,51,171,54,178,63,169,71,174,82,174,87,169,89,161,87,155,89,143,132,139,130,134,130,126,137,118,131" shape="POLY" alt="Северо-восток">
				<area data-id="4" coords="143,130,155,88,169,88,174,86,174,80,169,70,178,64,222,104,223,136,226,141,224,146,225,164,229,167,234,167,244,163,245,166,235,176,237,183,240,186,254,185,264,177,269,182,262,187,260,194,248,196,235,201,215,188,198,179,185,166,180,166,172,159,166,145,170,141,170,137,151,138" shape="POLY" alt="Восток">
				<area data-id="5" coords="166,146,158,146,152,158,157,166,162,174,156,178,148,179,152,199,159,205,169,206,171,210,165,218,150,228,151,238,159,244,185,245,202,241,202,258,223,236,223,224,219,214,224,213,230,218,234,215,233,202,236,201,200,180,184,166,180,166,172,158" shape="POLY" alt="Юго-восток">
				<area data-id="6" coords="113,192,113,186,121,184,132,184,147,179,152,199,157,204,168,206,169,210,164,218,149,228,149,238,157,244,184,245,201,241,201,258,188,272,166,290,152,296,124,296,119,293,116,295,107,284,111,277,109,274,104,274,112,263,112,254,108,250,109,247,117,247,121,244,122,231,122,232,125,226,121,222,125,217,123,211" shape="POLY" alt="Юг">
				<area data-id="7" coords="103,192,114,192,126,216,122,223,126,226,122,232,122,243,118,247,109,247,109,250,114,255,113,263,106,273,110,274,112,277,111,280,108,284,116,294,115,307,111,316,109,340,112,344,118,346,120,354,116,359,110,358,109,355,110,343,106,340,97,344,94,350,89,350,91,340,80,333,68,331,64,324,72,323,84,314,92,314,97,315,102,310,99,304,94,304,92,296,97,291,96,287,88,283,76,276,57,247,69,236,74,234,81,225,86,222,83,219,79,217,83,212,88,210,90,206,90,203" shape="POLY" alt="Юго-запад">
				<area data-id="8" coords="19,146,19,168,24,176,24,187,38,213,36,222,36,226,30,231,24,231,20,228,7,228,6,234,2,242,2,247,15,250,18,255,31,256,37,248,38,232,44,230,53,237,57,248,74,232,80,225,85,222,79,216,87,210,90,207,90,202,102,192,94,187,95,181,110,165,107,161,98,161,93,166,86,163,82,156,76,156,71,150,66,157,66,163,59,170,49,168,48,160,56,155,60,147,54,140,45,143,36,141,28,147" shape="POLY" alt="Запад">
				<area data-id="9" coords="19,145,20,133,29,114,30,104,24,99,19,100,16,106,10,106,8,92,10,90,10,86,6,84,8,75,20,69,23,80,28,81,36,70,36,64,26,62,22,56,23,50,17,44,20,36,28,38,29,47,36,53,40,64,45,66,51,62,59,73,63,86,71,105,73,120,83,146,87,152,82,157,74,155,70,150,66,158,66,163,59,170,50,168,48,160,56,155,60,146,53,140,44,143,36,140,28,147" shape="POLY" alt="Северо-запад">        
			</map>
			<img id="map_pic" height="361" border="0" width="272" usemap="#mosmap" src="<?php echo Yii::app()->homeUrl; ?>i/map/map.gif">
			<input type="hidden" id="area" value="" />
		</div>	
		<div class="clearfix"></div>
		<div style="text-align:right">
			<div id="area-submit" class="button button-blue">
				<span>Применить</span>	
			</div>
		</div>
	</div>
	<input type="hidden" id="data-area" value='<?php echo $areaArr;?>' />
</div>