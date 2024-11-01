
<div class="wrap">
	
    <?php screen_icon(); ?>
    
	<form action="options.php" method="post" id="<?php echo $plugin_id; ?>_options_form" name="<?php echo $plugin_id; ?>_options_form">
    
	<?php settings_fields($plugin_id.'_options'); ?>
    
    <h2>YourDeveloper Profanity Filter Options &raquo; Settings</h2>
    <table class="widefat">
		<thead>
		   <tr>
			 <th><input type="submit" name="submit" value="Save Settings" class="button-primary" /></th>
		   </tr>
		</thead>
		<tfoot>
		   <tr>
			 <th><input type="submit" name="submit" value="Save Settings" class="button-primary"  /></th>
		   </tr>
		</tfoot>
		<tbody>
		   <tr>
			 <td style="padding:25px;font-family:Verdana, Geneva, sans-serif;color:#666;">
                 <label for="yd-profanity-filter_filteredwords">
                     <p>Words you want to filter?</p>
                     <p><input type="text" size="100" name="yd-profanity-filter_filteredwords" value="<?php echo get_option('yd-profanity-filter_filteredwords'); ?>" /></p>
                 </label>
 
             </td>
		   </tr>
		    <td style="padding:25px;font-family:Verdana, Geneva, sans-serif;color:#666;">
                 <label for="yd-profanity-filter_replacement" >
                     <p>Replace the words with:</p>
              
                     <p><input type="text" size="100" name="yd-profanity-filter_replacement" value="<?php echo get_option('yd-profanity-filter_replacement'); ?>" /></p>
                 </label>
 
             </td>
             
		   </tr>
		   <tr>
		
		<td colspan="2" style="padding:25px;font-family:Verdana, Geneva, sans-serif;color:#666;">
<label for="yd-profanity-filter_checktitle">
<input name="yd-profanity-filter_checktitle" type="checkbox" id="yd-profanity-filter_checktitle" value="1" <?php checked('1', get_option('yd-profanity-filter_checktitle')); ?> />
Check title?</label>
 </td>
 </tr>
		   <tr>
		
 		<td colspan="2" style="padding:25px;font-family:Verdana, Geneva, sans-serif;color:#666;">
<label for="yd-profanity-filter_checkpost">
<input name="yd-profanity-filter_checkpost" type="checkbox" id="yd-profanity-filter_checkpost" value="1" <?php checked('1', get_option('yd-profanity-filter_checkpost')); ?> />
Check post?</label>
</td>
 </tr>
		   <tr>
		
  		<td colspan="2" style="padding:25px;font-family:Verdana, Geneva, sans-serif;color:#666;">
<label for="yd-profanity-filter_checkcomment">
<input name="yd-profanity-filter_checkcomment" type="checkbox" id="yd-profanity-filter_checkcomment" value="1" <?php checked('1', get_option('yd-profanity-filter_checkcomment')); ?> />
Check comment?</label>
 </td>
	</tr>
	<tr>
	 
		</tbody>
	</table>
    <p>The YourDeveloper profanity filter is developed and maintained by <a href="http://www.www.yourdeveloper.net" target="_blank">YourDeveloper.net</a> </p>

	</form>
    
</div>