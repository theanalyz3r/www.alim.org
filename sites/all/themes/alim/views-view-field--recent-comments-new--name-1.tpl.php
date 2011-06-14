<?php
// Alter the recent comment page user details
global $base_url;
global $theme_path;

$temp_user = user_load(array('name' => strip_tags($output)));
$picture = $temp_user->picture; 
?>
<a href="<?=$base_url?>/userprofile/<?=strip_tags($output)?>" class="gotouser">
<div id="user_image">

<?php if($picture!="") { ?>
<img  src="<?=$base_url?>/<?=$picture?>"  height="24" width="24" align="absmiddle" alt="image" />
<?php 
} 
 else if($temp_user->rpx_data['profile']['photo']!="" && $picture=="") {?>
<img height="24px"  width="24px" src="<?php print $temp_user->rpx_data['profile']['photo']; ?>" align="absmiddle" />
<?php 
} 
 else if($temp_user->rpx_data['profile']['photo']=="" && $picture=="") {?><img src='http://alim.org/sites/all/themes/alim/images/photobg.png' height="24px"  width="24px" align="absmiddle" />
<?php } ?>
</div>
<div  style="float:left;padding-top:7px;padding-bottom:7px;width:80px;" > 
<strong>
<?php
if($temp_user->rpx_data['profile']['name']['givenName']!="")
{
  
  $str1 = strlen($temp_user->rpx_data['profile']['name']['givenName']);
   $str2 = strlen($temp_user->rpx_data['profile']['name']['familyName']);
   if(($str1+$str2)>10)
   {
     $second = $temp_user->rpx_data['profile']['name']['familyName'];
	 $res = substr($temp_user->rpx_data['profile']['name']['givenName']." ".$temp_user->rpx_data['profile']['name']['familyName'],0,10)."...";
   }
   else
   {
    $res = $temp_user->rpx_data['profile']['name']['givenName']." ".$temp_user->rpx_data['profile']['name']['familyName'];
   }
   
   
   
  print $res;
}
else
{
  print substr(strip_tags($output),0,9);
}
?>
</strong>
</div>
<div  style="float:left;padding-top:7px;padding-bottom:7px;" > 
<?php
print "&nbsp;:&nbsp;";
?>
</div>
</a>