<head>
<title>{#tagwrap_dlg.titleColgroup}</title>
<script type="text/javascript" src="../../../tinymce/tiny_mce_popup.js"></script>
<script type="text/javascript" src="js/dialog.js"></script>
<link rel="stylesheet" type="text/css" href="css/tagwrap.css" />
</head>

<body>

<div class="y_logo_contener">
	<img src="img/html5.png" alt="HTML5" />
</div>
<div class="yinstr">
    <p>{#tagwrap_dlg.noteColgroup}</p>
    <p>{#tagwrap_dlg.noteColgroup5}</p>
</div>
<form onSubmit="TagwrapDialog.insert();return false;" action="#" method="post" name="Colgroup_tag">
<div class="mceActionPanel">
<script type="text/javascript" language="javascript">
var jwl_sel_content4 = tinyMCE.activeEditor.selection.getContent();
</script>

{#tagwrap_dlg.noteColgroup1} <input id="title_value" type="text" name="title" width="200px" value="" /> <em>{#tagwrap_dlg.noteColgroup3}</em>
<br /><br />
{#tagwrap_dlg.noteColgroup2} <input id="title_value2" type="text" name="title2" width="200px" value="" /> <em>{#tagwrap_dlg.noteColgroup4}</em>
</div>
<div style="margin-top:80px;"</div>
<div class="bottom">
    <p><!--{#tagwrap_dlg.bottomnote}--></p>
    <p class="pagelink_hover"><!--{#tagwrap_dlg.bottomnote2}--></p>
</div>
<script type="text/javascript" language="javascript">
function jwl_pass_form_data () {
  var name = jwl_title = document.getElementsByName("title")[0].value;
  var name = jwl_title2 = document.getElementsByName("title2")[0].value;
}

</script>
<div class="mceActionPanel">
  <div style="float:left;padding-top:5px">
  <input type="button" id="insert" name="insert" value="{#insert}" onClick="jwl_pass_form_data();tinyMCE.execCommand('mceInsertContent',false,'<colgroup span=\'' + jwl_title + '\' style=\'' + jwl_title2 + '\'>' + jwl_sel_content4 + '</colgroup>');tinyMCEPopup.close();" />&nbsp;<input type="button" id="cancel" name="cancel" value="{#cancel}" onClick="tinyMCEPopup.close();" />
  </div>
</div>
</form>
<span style="float:right;"><a target="_blank" href="http://www.joshlobe.com/2012/07/ultimate-tinymce-advanced-html-tags/"><img src="img/tinymce_help.png" /></a></span>
</body>