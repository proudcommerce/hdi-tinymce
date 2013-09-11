<?php

	/**
	 * HDI TinyMCE
	 * Copyright (C) 2012-2013  HEINER DIRECT GmbH & Co. KG
	 * info:  oxid@heiner-direct.com
	 *
	 * This program is free software;
	 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
	 * either version 3 of the License, or (at your option) any later version.
	 *
	 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
	 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
	 * You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
	 */

	$sMetadataVersion = '1.1';
	$aModule = array(
		'id'          => 'hdi-tinymce',
		'title'       => 'HDI TinyMCE 4.0.5 + RESPONSIVE filemanager',
		'description' => 'backend implementation of TinyMCE Editor with RESPONSIVE filemanager<br/>visit <a href="http://www.tinymce.com/" target="_blank">http://www.tinymce.com/</a> for demo and more details',
		'thumbnail'   => 'hdi.png',
		'version'     => '1.1.3 (2013-09-04)',
		'author'      => 'Marat Bedoev, HEINER DIRECT GmbH & Co. KG',
		'email'       => 'oxid@heiner-direct.com',
		'url'         => 'http://www.heiner-direct.com',
		'extend'      => array(
			'article_main'    => 'hdi/hdi-tinymce/tinymce',
			'category_text'   => 'hdi/hdi-tinymce/tinymce',
			'content_main'    => 'hdi/hdi-tinymce/tinymce',
			'newsletter_main' => 'hdi/hdi-tinymce/tinymce',
			'news_text'       => 'hdi/hdi-tinymce/tinymce'
			//'oxAdminDetails'  => 'hdi/hdi-tinymce/tinymce'
		),
		'templates'   => array(
			'tinymce.tpl' => 'hdi/hdi-tinymce/views/tinymce.tpl',
		),
		'blocks'      => array(
			array('template' => 'bottomnaviitem.tpl', 'block' => 'admin_bottomnaviitem', 'file' => '/views/blocks/admin_bottomnaviitem.tpl')
		),
		'settings'    => array(
			/* enabling tinyMCE for this classes */
			array('group' => 'tinyMceMain', 'name' => 'aTinyMCE_classes', 'type' => 'arr', 'value' => array("article_main", "category_text","content_main","newsletter_main","news_text"), 'position' => 0),
            array('group' => 'tinyMceMain', 'name' => 'aTinyMCE_plaincms','type' => 'arr', 'value' => array("oxadminordernpplainemail", "oxadminorderplainemail", "oxemailfooterplain", "oxnewsletterplainemail", "oxordersendplainemail", "oxregisterplainemail", "oxuserorderemailendplain", "oxuserordernpplainemail", "oxuserorderplainemail", "oxupdatepassinfoplainemail", "oxregisterplainaltemail"), 'position' => 1),
			array('group' => 'tinyMceMain', 'name' => 'sTinyMCE_height',  'type' => 'str', 'value' => '300', 'position' => 2),
			array('group' => 'tinyMceMain', 'name' => 'sTinyMCE_cssfile', 'type' => 'str', 'value' => '/weiss/ich/noch/nicht.css', 'position' => 3),

			/* TinyMCE Settings */

			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_relative_urls', 'type' => 'bool', 'value' => true, 'position' => 0),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_browser_spellcheck', 'type' => 'bool', 'value' => true, 'position' => 1),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_autolink', 'type' => 'bool', 'value' => true, 'position' => 1),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_advlist', 'type' => 'bool', 'value' => true, 'position' => 2),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_anchor', 'type' => 'bool', 'value' => true, 'position' => 3),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_autolink', 'type' => 'bool', 'value' => true, 'position' => 4),
			//array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_autoresize', 'type' => 'bool', 'value' => true, 'position' => 5),   // autoresizing editor. causes problems with the height
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_autosave', 'type' => 'bool', 'value' => false, 'position' => 6),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_bbcode', 'type' => 'bool', 'value' => false, 'position' => 7),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_charmap', 'type' => 'bool', 'value' => true, 'position' => 8),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_code', 'type' => 'bool', 'value' => true, 'position' => 9),
			//array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_compat3x', 'type' => 'bool', 'value' => true, 'position' => 10), //bug
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_contextmenu', 'type' => 'bool', 'value' => true, 'position' => 11),
			//array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_directionality', 'type' => 'bool', 'value' => true, 'position' => 12), // rtl support
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_emoticons', 'type' => 'bool', 'value' => false, 'position' => 13),
			//array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_example', 'type' => 'bool', 'value' => true, 'position' => 14),  // example plugin
			//array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_example_dependency', 'type' => 'bool', 'value' => true, 'position' => 15), // example plugin
			//array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_fullpage', 'type' => 'bool', 'value' => true, 'position' => 16), // adds doctype, html,head, body  and other page tags
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_fullscreen', 'type' => 'bool', 'value' => true, 'position' => 17),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_hr', 'type' => 'bool', 'value' => true, 'position' => 18),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_image', 'type' => 'bool', 'value' => true, 'position' => 19),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_insertdatetime', 'type' => 'bool', 'value' => true, 'position' => 20),
			//array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_layer', 'type' => 'bool', 'value' => true, 'position' => 21),   // doenst really works, gonna be removed in the future
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_legacyoutput', 'type' => 'bool', 'value' => true, 'position' => 22),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_link', 'type' => 'bool', 'value' => true, 'position' => 23),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_lists', 'type' => 'bool', 'value' => true, 'position' => 24),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_media', 'type' => 'bool', 'value' => true, 'position' => 25),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_nonbreaking', 'type' => 'bool', 'value' => true, 'position' => 26),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_noneditable', 'type' => 'bool', 'value' => true, 'position' => 27),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_pagebreak', 'type' => 'bool', 'value' => true, 'position' => 28),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_paste', 'type' => 'bool', 'value' => true, 'position' => 29),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_preview', 'type' => 'bool', 'value' => true, 'position' => 30),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_print', 'type' => 'bool', 'value' => false, 'position' => 31),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_save', 'type' => 'bool', 'value' => false, 'position' => 32),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_searchreplace', 'type' => 'bool', 'value' => true, 'position' => 33),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_spellchecker', 'type' => 'bool', 'value' => true, 'position' => 34),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_tabfocus', 'type' => 'bool', 'value' => true, 'position' => 35),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_table', 'type' => 'bool', 'value' => true, 'position' => 36),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_template', 'type' => 'bool', 'value' => false, 'position' => 37),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_textcolor', 'type' => 'bool', 'value' => true, 'position' => 38),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_visualblocks', 'type' => 'bool', 'value' => true, 'position' => 39),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_visualchars', 'type' => 'bool', 'value' => true, 'position' => 40),
			array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_wordcount', 'type' => 'bool', 'value' => true, 'position' => 41),
            array('group' => 'tinyMceSettings', 'name' => 'bTinyMCE_responsiveFileManager', 'type' => 'bool', 'value' => true, 'position' => 42),
			/* external plugins */
			array('group' => 'tinyMceExtPlugins', 'name' => 'aTinyMCE_external_plugins', 'type' => 'aarr', 'value' => null, 'position' => 0),
			array('group' => 'tinyMceExtPlugins', 'name' => 'sTinyMCE_external_controls', 'type' => 'str', 'value' => '', 'position' => 1),
		)
	);