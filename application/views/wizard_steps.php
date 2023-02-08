<style type="text/css">  
	ul#wizardStatus{
	list-style:none;
	margin:15px 0;
	padding:0;
	text-align:left;
	}
	
	ul#wizardStatus li{
	background-color:#C2C2C2;
	color:#3d4c4f;
	font-size:14px;
	display:inline-block;
	margin:0;
	line-height:34px;
	padding:0 25px 0 40px;
	position:relative
	}
	
	ul#wizardStatus li:first-child{
	padding-left:40px;
	-webkit-border-top-left-radius:3px;
	border-top-left-radius:3px;
	-webkit-border-bottom-left-radius:3px;
	border-bottom-left-radius:3px
	}
	
	ul#wizardStatus li:last-child{
	-webkit-border-top-right-radius:3px;
	border-top-right-radius:3px;
	-webkit-border-bottom-right-radius:3px;
	border-bottom-right-radius:3px
	}
	
	ul#wizardStatus li:after,
	ul#wizardStatus li:before {
	background-color:#C2C2C2;
	content:"";
	display:block;
	position:absolute
	}
	
	ul#wizardStatus li:after{
	-webkit-border-radius:3px;
	border-radius:3px;
	border-right:3px solid white;
	border-top:3px solid white;
	top:3px;
	-webkit-transform:rotate(45deg);
	-moz-transform:rotate(45deg);
	-ms-transform:rotate(45deg);
	-o-transform:rotate(45deg);
	transform:rotate(45deg);
	height:28px;
	right:-14px;
	width:25px;
	z-index:5
	}
	
	ul#wizardStatus li:before{
	height:34px;
	right:3px;
	width:20px;
	z-index:6
	}
	
	ul#wizardStatus li:last-child:after,
	ul#wizardStatus li:last-child:before{
	display:none
	}
	
	ul#wizardStatus.solicitud .step-1,
	ul#wizardStatus.participante .step-2,
	ul#wizardStatus.enviar .step-3
	{
	background-color:#1AB394;
	color:#fff;
	}
	
	ul#wizardStatus.solicitud .step-1:after,
	ul#wizardStatus.participante .step-2:after,
	ul#wizardStatus.enviar .step-3:after,
	ul#wizardStatus.solicitud .step-1:before,
	ul#wizardStatus.participante .step-2:before,
	ul#wizardStatus.enviar .step-3:before
	{
	background-color:#1AB394
	}
	@media (max-width: 830px) {
	ul#wizardStatus li {
	position: inherit;
	width: 100%;
	}
	ul#wizardStatus li::after, ul#wizardStatus li::before {
	content: unset;
	}
	}
	
</style>
<?php if($modulo=='solicitud' && $accion=='enviar')
	{
		$modulo = 'enviar';
	}
?>
<ul id="wizardStatus" class="<?php echo $modulo; ?>">
	<li class="step-1"> Datos de la solicitud</li>
	<li class="step-2"> Datos del participante</li>
	<li class="step-3"> Envío de solicitud</li>
</ul>