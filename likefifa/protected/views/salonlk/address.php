<?php
use likefifa\models\CityModel;
?>

<div class="content-wrap content-pad-bottom">
	<div class="page-profile">
		<div class="prof-wrap">
			<?php $this->widget('application.components.likefifa.widgets.LfSalonLkTabsWidget', array(
				'currentTab' => 'profile',		
			)); ?>
			<div class="prof-cont">
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'salon-address-form-personal',
					'enableAjaxValidation'=>false,
					'htmlOptions' => array('style' => 'display: none'),
				)); ?>
				<?php $this->widget('application.components.likefifa.widgets.LfSalonLkMenuWidget', array(
					'actions' => $this->actions,
					'currentAction' => $this->action->id,
					'model' => $model,
				)); ?>
				<div class="prof-rht">
					<table cellspacing="0">
						<tr>
							<td width="300" style="padding-right:55px;">
								<div class="prof-inp_marg">
									<?php $isMoscow = ($model->city_id == 1) ? 0 : 1;
									echo LfHtml::RadioButtonList('City',$isMoscow, array('Москва', 'Московская область')); ?>
								</div>
								<div class="prof-inp_marg" id="city">
									<div class="prof-head-inp">Город:</div>
									<?php echo LfHtml::activeDropDownList(
										$model,'city_id', CHtml::listData(CityModel::model()->active()->findAll(), 'id', 'name'), ['empty' => '']
									); ?>
								</div>
								<div class="prof-inp_marg">
									<div class="prof-head-inp">Улица: *</div>
									<?php echo LfHtml::activeTextField($model,'add_street'); ?>
									<div class="prof-note-inp" style="padding:2px 0 0 10px;">например, Есенина ул</div>
								</div>
								<div class="prof-inp_marg">
									<table>
										<tr>
											<td>
												<div class="prof-head-inp">Дом: *</div>
												<div style="width:68px"><?php echo LfHtml::activeTextField($model,'add_house'); ?></div>
											</td>
											<td style="padding-left:37px">
												<div class="prof-head-inp">Корпус:</div>
												<div style="width:68px"><?php echo LfHtml::activeTextField($model,'add_korp'); ?></div>
											</td>
										</tr>
									</table>
								</div>
							</td>
							<td style="padding-left:28px;" width="350">
								<div class="prof-address-map">
									<script src="<?php echo Yii::app()->homeUrl; ?>js/map-lk.js?<?php echo RELEASE_MEDIA; ?>"
											type="text/javascript"></script>
									<script type="text/javascript">
										var map = new LkMap();
										map.model = 'LfSalon';
										$(function() {
											if(parseFloat($('#LfSalon_map_lat').val()) && parseFloat($('#LfSalon_map_lng').val())) {
												map.center = [parseFloat($('#LfSalon_map_lat').val()), parseFloat($('#LfSalon_map_lng').val())];
											} else {
												map.center = [55.75150546844201, 37.616654052733395];
											}
											map.zoom = $('#LfSalon_map_lat').val().length == 0 ? 10 : 15;
											map.init();
										});
									</script>
									<div id="ya-map" style="height: 200px;"></div>
									<?php echo CHtml::activeHiddenField($model, 'map_lat'); ?>
									<?php echo CHtml::activeHiddenField($model, 'map_lng'); ?>
								</div>
							</td>
						</tr>
						<tr>
							<td style="border-top: 1px solid #DEDEDE; padding:25px 55px 0 0;">
								<div class="prof-inp_marg" id="metro">
									<div class="prof-head-inp">Метро: *</div>
									<?php echo LfHtml::activeDropDownList(
										$model,
										'underground_station_id',
										UndergroundStation::model()->getColoredListItems()
									); ?>
								
								</div>
							</td>
							<td style="border-top: 1px solid #DEDEDE; padding:25px 30px 0 28px;">
								<div class="prof-inp_marg" id="district">
									<div id="departure_block">
									<div class="prof-head-inp">Округ:</div>
									<div class=" form-inp">
										<div data-select-popup-id="select-popup-departureDistrictIds" class="form-select-over"></div>
										<div id="cur-select-popup-departureDistrictIds" class="form-select">Выберите район из списка</div>
										<div class="form-select-arr png"></div>
										<div id="select-popup-departureDistrictIds" class="form-select-popup">
											<div class="form-select-popup-long">
												<?php echo LfHtml::activeCheckBoxList($model,'departureDistrictIds', DistrictMoscow::model()->getListItems()); ?>
											</div>
										</div>
									</div>
									<div id="prof-departureDistrictIds_list">
									</div>
									</div>
								</div>
							</td>
						</tr>
						<tr>
						<td><p>* - поля, обязательные для заполнения</p><td>
						</tr>
					</table>
				</div>
				<input type='hidden' name='redirect_link' value='' class='redirect_link' />
				<div class="clearfix"></div>
				<div class="prof-btn_next">
					<div class="button button-blue"><span>Сохранить</span></div>
					<?php echo CHtml::submitButton('Сохранить'); ?>
				</div>
				<?php $this->endWidget(); ?>
			</div>
		</div>
	</div>
</div>