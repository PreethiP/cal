<?php
/**
 * JF JS LatestMembers
 * @copyright (C) 2012 JoomForest.com - All rights reserved!
 */
defined('_JEXEC') or die('Restricted access');
?>
<div id="jf-js-latestmembers-module" class="<?php echo $params->get('jfmodclass_sfx'); ?>">
	<div class="jf-js-latestmembers-title"><?php echo JText::_("JF_JS_LATESTMEMBERS_TITLE"); ?></div>
	<?php if(!empty($row)){ ?>
		<ul class="jf-js-latestmembers-ul">
		<?php foreach($row as $data){
			$user 		= CFactory::getUser($data->id);				
			$userName 	= CStringHelper::escape( $user->getDisplayName() );
			$userLink 	= CRoute::_('index.php?option=com_community&view=profile&userid='.$data->id);
			
			$html  = '<li>';
			$html .= '<a href="'.$userLink.'" style="background:url('.$user->getAvatar().') no-repeat"></a>';

			if($jfusertooltips){
				$html .= '<div class="jf-js-latestmembers-title-tooltip"><span>'.$userName.'</span><div></div></div>';
			}
			else{
				$html .= ' ';
			}
			
			$html .= '</li>';
			echo $html;
		} ?>
		</ul>
		<a class="jf-js-latestmembers-show-all" href='<?php echo CRoute::_("index.php?option=com_community&view=search&task=browse&sort=latest"); ?>'>
			<?php echo JText::_("SHOW_ALL"); ?>
		</a>
	<?php }
		else{
			echo JText::_('NO_MEMBERS_YET');
		}
	?>
	<div style='clear:both;'></div>
</div>