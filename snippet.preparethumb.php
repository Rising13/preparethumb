<?php
/**
 * preparethumb
 *
 * working with PHPThumb in prepare snippet DocLister
 *
 * @category 	snippet
 * @version 	1.0
 * @license 	http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal	@properties
 * @internal	@modx_category Prepare
 * @internal    @installset base, sample
 * @documentation Usage: [[DocLister? &tvPrefix=`` &tvList=`doc_img` &tpl=`doc_prew_tpl` &prepare=`preparethumb` &phumb_img=`doc_prew_tpl` &phumb_options=`w=140,h=140,f=png,q=95,far=C,bg=ffffff`]]
 * @documentation DocLister template example: &lt;div class=&quot;img&quot;&gt;&lt;a href=&quot;[+image_def+]&quot;&gt;&lt;img src=&quot;[+image_thumb+]&quot; alt=&quot;&quot;/&gt;&lt;/a&gt;&lt;/div&gt;
 * @link        noimage.png here [+site_url+]assets/snippets/phpthumb/noimage.png
 * @author      Rising13
 * @lastupdate  21/11/2017
 */	
	
$phumb_img = $modx->db->escape($_DocLister->getCFGDef('phumb_img'));
$phumb_options = $modx->db->escape($_DocLister->getCFGDef('phumb_options'));
if((isset($phumb_img) && !empty($phumb_img)) && (isset($phumb_options) && !empty($phumb_options))){
	$img_value = $data[$phumb_img];//получаем значение из массива DocLister
	if(!empty($img_value)){
		$snippet_name = 'phpthumb';
		$arrparams = array('input' => $img_value,'options' => $phumb_options);
		$thumb_image_value = $modx->runSnippet($snippet_name,$arrparams);//делаем обращение к сниппету c нужными параметрами
		$data['image_def'] = $img_value; //Ссылка на исходное изображение
		$data['image_thumb'] = $thumb_image_value; //Ссылка на обработанное изображение
	}
}
return $data;
