<?php if(!$data->user) return false;?>
<div>
	<?php
	$img = CHtml::image(Yii::app()->baseUrl."/".DxdUtil::xImage($data->user->face, 40, 40),$data->user->name,array('style'=>'width:40px;height:40px;'));
	echo CHtml::link($img."&nbsp;&nbsp;&nbsp;&nbsp;".$data->user->name,$data->user->pageUrl,array('class'=>'dxd-name','data-userId'=>$data->userId),array('style'=>'width:40px;height:50px;'));
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$data->user->bio;
//	echo CHtml::ajaxLink('剔出小组',array('groupManage/remove','id'=>$group->id,'userId'=>$data->userId),array('success'=>'js:function(data){window.location.reload();}'),array('class'=>'btn pull-right'));
	echo CHtml::link(Yii::t('app','编辑'),array('manage/editMember','id'=>$group->id,'userId'=>$data->userId),array('class'=>'btn pull-right dxd-fancy-elem','data-fancyWidth'=>350,'data-fancyHeight'=>180));
	
	?>
	<div class="clearfix"></div>
</div>

