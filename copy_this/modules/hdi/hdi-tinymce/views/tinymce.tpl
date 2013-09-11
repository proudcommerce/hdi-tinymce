<!-- TinyMCE -->
<style type="text/css">
    .mce-btn button { padding: 2px 5px; }
    .mce-path, .mce-wordcount { padding: 5px; }

</style>
<script type="text/javascript">
    var tinyMCE = null;
    function copyLongDescFromTinyMCE(sIdent)
    {
        var editor = tinyMCE.activeEditor;
        if (editor && editor.isHidden() !== true)
        {
            var content = editor.getContent({format : 'raw'});
            if (content !== null)
            {
                var aSmartyParts = content.split("["+"{");

                if(aSmartyParts.length > 1)
                {
                        for (var i = 0; i < aSmartyParts.length; i++)
                {
                    aSubParts = aSmartyParts[i].split('}]');
                    if (aSubParts.length > 1)
                        aSubParts[0] = aSubParts[0].replace(/&gt;/gi, ">").replace(/&lt;/gi, "<").replace(/&amp;/gi, "&").replace(/&quot;/gi, '"');
                    aSmartyParts[i] = aSubParts.join("}" + "]");
                }
                content = aSmartyParts.join('[' + '{');
                }
                document.getElementsByName('editval[' + sIdent + ']').item(0).value = content;
                return true;
            }
        }
        return false;
    }

    var origCopyLongDesc = copyLongDesc;
    copyLongDesc = function(sIdent) {
        if ( copyLongDescFromTinyMCE( sIdent ) ) return;
        origCopyLongDesc( sIdent );
    }
</script>

<script type="text/javascript" src="[{$oViewConf->getModuleUrl('hdi-tinymce','tinymce/tinymce.min.js') }]"></script>
<script type="text/javascript">
    tinyMCE.init({
        language: '[{$sEditorLang}]',
        selector: "textarea",
        height: [{ $cfg->getConfigParam("sTinyMCE_height")}],
        // url stuff
        document_base_url: '[{$oViewConf->getBaseDir()}]',
        relative_urls: [{if $cfg->getConfigParam("bTinyMCE_relative_urls") == 1}]true[{else}]false[{/if}],

        [{if $oViewConf->getActiveClassName() == "newsletter_main"}]
            // use legacy html tags for newsletteri
            plugins: "legacyoutput",
        [{/if}]

        //some weird stuff
        //entity_encoding : "raw",
        plugin_preview_width: window.innerWidth,
        plugin_preview_height: window.innerHeight-90,
        code_dialog_width: window.innerWidth-50,
        code_dialog_height: window.innerHeight-130,

        [{if $cfg->getConfigParam("bTinyMCE_browser_spellcheck")}]browser_spellcheck : true,[{/if}]

        [{strip}]
        plugins: ["
                [{if $cfg->getConfigParam("bTinyMCE_advlist")}]advlist, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_anchor")}]anchor, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_autolink")}]autolink, [{/if}]
                [{* [{if $cfg->getConfigParam("bTinyMCE_autoresize")}]autoresize, [{/if}] *}]
                [{if $cfg->getConfigParam("bTinyMCE_autosave")}]autosave, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_bbcode")}]bbcode, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_charmap")}]charmap, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_code")}]code, [{/if}]
                [{* [{if $cfg->getConfigParam("bTinyMCE_compat3x")}]compat3x, [{/if}] *}]
                [{if $cfg->getConfigParam("bTinyMCE_contextmenu")}]contextmenu, [{/if}]
                [{* [{if $cfg->getConfigParam("bTinyMCE_directionality")}]directionality, [{/if}] *}]
                [{if $cfg->getConfigParam("bTinyMCE_emoticons")}]emoticons, [{/if}]
                [{* [{if $cfg->getConfigParam("bTinyMCE_example")}]example, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_example_dependency")}]example_dependency, [{/if}] *}]
                [{* [{if $cfg->getConfigParam("bTinyMCE_fullpage")}]fullpage, [{/if}] *}]
                [{if $cfg->getConfigParam("bTinyMCE_fullscreen")}]fullscreen, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_hr")}]hr, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_image")}]image, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_insertdatetime")}]insertdatetime, [{/if}]
                [{* [{if $cfg->getConfigParam("bTinyMCE_layer")}]layer, [{/if}] *}]
                [{if $cfg->getConfigParam("bTinyMCE_legacyoutput")}]legacyoutput, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_link")}]link, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_lists")}]lists, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_media")}]media, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_nonbreaking")}]nonbreaking, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_noneditable")}]noneditable, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_pagebreak")}]pagebreak, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_paste")}]paste, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_preview")}]preview, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_print")}]print, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_save")}]save, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_searchreplace")}]searchreplace, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_spellchecker")}]spellchecker, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_tabfocus")}]tabfocus, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_table")}]table, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_template")}]template, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_textcolor")}]textcolor, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_visualblocks")}]visualblocks, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_visualchars")}]visualchars, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_wordcount")}]wordcount, [{/if}]
                [{if $cfg->getConfigParam("bTinyMCE_responsiveFileManager")}]responsivefilemanager [{/if}]
                "],
            [{/strip}]

            external_filemanager_path:"[{$oViewConf->getBaseDir() }]modules/hdi/hdi-tinymce/filemanager/",
            filemanager_title:"Responsive Filemanager",

        [{strip}]external_plugins: { "filemanager" : "[{$oViewConf->getBaseDir() }]modules/hdi/hdi-tinymce/filemanager/plugin.js", [{if $extPlugins}][{foreach from=$extPlugins key="plugin" item="file" }] "[{$plugin}]": "[{$file}]", [{/foreach}][{/if}][{/strip}]},


        toolbar1: "undo redo searchreplace preview fullscreen code | image media responsivefilemanager | emoticons table bullist numlist outdent indent blockquote subscript superscript hr anchor link unlink [{if $extControls}] | [{$extControls}][{/if}]",
        toolbar2: "bold italic underline strikethrough | forecolor backcolor | alignleft aligncenter alignright alignjustify | fontselect fontsizeselect formatselect | removeformat | spellchecker",
        image_advtab: true,
        menubar: false,
    });
</script>
<textarea id='editor_[{$sField}]' name="content" style='width:[{$iWidth}]; height:[{$iHeight}];'>[{$sContent}]</textarea>
[{assign var=tinyMCE value=1 }]
<!-- /TinyMCE -->
