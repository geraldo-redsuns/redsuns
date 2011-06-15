<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Systhex - Implantes Dentários</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
<script language="javascript"> AC_FL_RunContent = 0; </script>
<script language="javascript"> DetectFlashVer = 0; </script>
<script src="js/AC_RunActiveContent.js" language="javascript"></script>
<script language="JavaScript" type="text/javascript">
<!--
// -----------------------------------------------------------------------------
// Globals
// Major version of Flash required
var requiredMajorVersion = 9;
// Minor version of Flash required
var requiredMinorVersion = 0;
// Revision of Flash required
var requiredRevision = 45;
// -----------------------------------------------------------------------------
// -->
</script>
<script type="text/javascript">

function validaContato(){
	if(document.contato.nome.value == "" ){
		alert("Favor preencher o nome.");
		return false;
	}
	if(document.contato.email.value == ""){
		alert("Favor preencher o email.");
		return false;
	}else{
		if (!checkMail(document.contato.email.value)){
			alert(" Email inválido");
			return false;
		}
	}

	document.contato.submit();
	return true;
}
function checkMail(mail){
	var er = new RegExp(/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/);
	if(typeof(mail) == "string"){
		if(er.test(mail)){
			return true;
		}
	}else if(typeof(mail) == "object"){
		if(er.test(mail.value)){
			return true;
		}
	}else{
		return false;
	}
}
function enviaContato()
{
  document.contato.submit();
}

function cadastraNewsletter()
{
  document.newsletter.submit();
}
</script>
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/jquery-translate-1.3.9.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.0.pack.js"></script>
<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.0.css" type="text/css" media="screen"/>
<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/

			$("a#example1").fancybox({
				'titleShow'     : false,
				'autoScale'		: false
			});

			$("a#example2").fancybox({
				'titleShow'     : false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

			$("a#example3").fancybox({
			    'titleShow'     : false,
				'transitionIn'	: 'none',
				'transitionOut'	: 'none'
			});

			$("a#example4").fancybox();

			$("a#example5").fancybox({
				'titlePosition'  : 'inside'
			});

			$("a#example6").fancybox({
				'titlePosition'  : 'over',
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'				
			});

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'       : function(title, currentArray, currentIndex, currentOpts) {
				    return '<span id="fancybox-title-over">Image ' +  (currentIndex + 1) + ' / ' + currentArray.length + '</span>';
				}
			});
			$("a[rel=example_group2]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',

			    'titleShow'     : true,				
			});
			/*
			*   Examples - various
			*/
			
			$("#various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});
			
			$("#various2").fancybox({
				ajax : {
				    type	: "POST",
				    example	: 'myexample=test'
				}
			});
	
			$("#various3").fancybox({
				'width'				: '75%',
				'height'			: '75%',
		        'autoScale'     	: false,
		        'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
			
			$("#various4").fancybox({
			    'padding'           : 0,
		        'autoScale'     	: false,
		        'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});
		});
	</script>
<!--[if IE 6]>
<script src="js/DD_belatedPNG.js"></script>
<script>
  /* EXAMPLE */
  DD_belatedPNG.fix('.png_bg');
  
  /* string argument can be any CSS selector */
  /* .png_bg example is unnecessary */
  /* change it to what suits you! */
</script>
<![endif]-->
</head>