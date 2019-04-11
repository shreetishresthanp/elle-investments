<?php
if (isset($_GET['accept-cookies'])) {
    /* cookie notice banner accepted for one year 31556925 or ~6 months 16000000 or until they clear history */
    setcookie('accept-cookies', 'cookies-notice-banner-accepted', time() + 16000000);
    header('Location: index.php'); /* refresh this page */
}
?>


<!DOCTYPE html>
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 15">
<link rel=File-List href="PBYI%20html.fld/filelist.xml">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
x\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->


    <style id="PBYI html_7426_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
@page
	{margin:.75in .7in .75in .7in;
	mso-header-margin:.3in;
	mso-footer-margin:.3in;}
.font5
	{color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Tahoma, sans-serif;
	mso-font-charset:0;}
.font6
	{color:black;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Tahoma, sans-serif;
	mso-font-charset:0;}
.font7
	{color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;}
.font8
	{color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;}
tr
	{mso-height-source:auto;}
col
	{mso-width-source:auto;}
br
	{mso-data-placement:same-cell;}
.style0
	{mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	white-space:nowrap;
	mso-rotate:0;
	mso-background-source:auto;
	mso-pattern:auto;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	border:none;
	mso-protection:locked visible;
	mso-style-name:Normal;
	mso-style-id:0;}
.style20
	{mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	white-space:nowrap;
	mso-rotate:0;
	mso-background-source:auto;
	mso-pattern:auto;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:134;
	border:none;
	mso-protection:locked visible;
	mso-style-name:"Normal 2 2";}
.style19
	{mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	white-space:nowrap;
	mso-rotate:0;
	mso-background-source:auto;
	mso-pattern:auto;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Times, sans-serif;
	mso-font-charset:0;
	border:none;
	mso-protection:locked visible;
	mso-style-name:"Normal 3";}
.style21
	{mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	white-space:nowrap;
	mso-rotate:0;
	mso-background-source:auto;
	mso-pattern:auto;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:134;
	border:none;
	mso-protection:locked visible;
	mso-style-name:"Normal 3 2";}
.style16
	{mso-number-format:0%;
	mso-style-name:Percent;
	mso-style-id:5;}
.style23
	{mso-number-format:0%;
	mso-style-name:"Percent 3";}
.style22
	{mso-number-format:0%;
	mso-style-name:"Pourcentage 3";}
td
	{mso-style-parent:style0;
	padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:locked visible;
	white-space:nowrap;
	mso-rotate:0;}
.xl72
	{mso-style-parent:style19;
	font-family:"Times Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:left;}
.xl73
	{mso-style-parent:style20;
	font-family:"Times Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;
	background:#F2F2F2;
	mso-pattern:black none;}
.xl74
	{mso-style-parent:style19;
	font-family:"Times Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	background:#F2F2F2;
	mso-pattern:black none;}
.xl75
	{mso-style-parent:style20;
	font-family:"Times Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;}
.xl76
	{mso-style-parent:style19;
	color:black;
	font-family:"Times Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	background:#F2F2F2;
	mso-pattern:black none;}
.xl77
	{mso-style-parent:style20;
	font-family:"Times Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	vertical-align:middle;
	background:#F2F2F2;
	mso-pattern:black none;}
.xl78
	{mso-style-parent:style21;
	font-family:"Times Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;
	background:#D9D9D9;
	mso-pattern:black none;
	white-space:normal;}
.xl79
	{mso-style-parent:style19;
	font-family:"Times Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	white-space:normal;}
.xl80
	{mso-style-parent:style22;
	font-family:"Times Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:0%;
	text-align:center;
	vertical-align:middle;}
.xl81
	{mso-style-parent:style21;
	font-family:"Times Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\#\,\#\#0";
	text-align:center;
	vertical-align:middle;}
.xl82
	{mso-style-parent:style23;
	font-family:"Times Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:0%;
	text-align:center;
	vertical-align:middle;}
.xl83
	{mso-style-parent:style19;
	font-family:"Times Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;}
.xl84
	{mso-style-parent:style21;
	font-family:"Times Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:left;
	vertical-align:middle;}
.xl85
	{mso-style-parent:style19;
	font-family:"Times Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:left;
	background:#D9D9D9;
	mso-pattern:black none;}
.xl86
	{mso-style-parent:style19;
	font-family:"Times Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:right;
	background:#D9D9D9;
	mso-pattern:black none;}
.xl87
	{mso-style-parent:style19;
	font-family:"Times Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:"\#\,\#\#0";
	text-align:center;
	background:#D9D9D9;
	mso-pattern:black none;}
.xl88
	{mso-style-parent:style23;
	font-family:"Times Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:0%;
	text-align:center;
	vertical-align:middle;
	background:#D9D9D9;
	mso-pattern:black none;}
.xl89
	{mso-style-parent:style16;
	font-family:"Times Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:0%;
	text-align:center;
	vertical-align:middle;}
.xl90
	{mso-style-parent:style21;
	font-family:"Times Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:0%;
	text-align:center;
	vertical-align:middle;}
.xl91
	{mso-style-parent:style21;
	font-family:"Times Roman";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	text-align:center;
	vertical-align:middle;}
-->
</style>
</head>

<body link="#0563C1" vlink="#954F72" class=xl72>
     <div id="header"> 
               <?php include('../header.php'); ?>
         <p>xxx</p>
            </div>
    
    <div id="main-content">

    <h1>Research</h1>
    <p id="D2">From time to time we publish our research on the investment platform <a href="https://seekingalpha.com/">Seeking Alpha</a>. Click <a href="https://seekingalpha.com/author/elle-investments#regular_articles">HERE</a> to be taken to our landing page on Seeking Alpha. The links to some of our articles are also listed below.
    </p>

    <article>
        <p class = "symbol">Symbol: AKBA<br>
            Date Published: March 25, 2019</p>
        <p>
            <a href="https://seekingalpha.com/article/4250879-akebia-therapeutics-recovering-nicely-still-pre-merger-price">=> Akebia Therapeutics: Recovering Nicely, But Still Below The Pre-Merger Price
            </a><br>

            Investment Thesis: AKBA dropped considerably in the months after the KERX merger announcement. The stock has recovered a bit, but still is below the pre-merger price. Since the commercial prospects of the combined company should be at least equal to the sum of the commercial prospects of the individual companies, this still remains undervalued.
        </p>

    </article><!-- AKBA -->
    
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Excel's Publish as Web
Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="PBYI html_7426" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=867 style='border-collapse:
 collapse;table-layout:fixed;width:651pt'>
 <col class=xl72 width=89 style='mso-width-source:userset;mso-width-alt:2858;
 width:67pt'>
 <col class=xl72 width=101 span=2 style='mso-width-source:userset;mso-width-alt:
 3242;width:76pt'>
 <col class=xl72 width=77 style='mso-width-source:userset;mso-width-alt:2474;
 width:58pt'>
 <col class=xl72 width=101 style='mso-width-source:userset;mso-width-alt:3242;
 width:76pt'>
 <col class=xl72 width=60 style='mso-width-source:userset;mso-width-alt:1920;
 width:45pt'>
 <col class=xl72 width=76 style='mso-width-source:userset;mso-width-alt:2432;
 width:57pt'>
 <col class=xl72 width=88 style='mso-width-source:userset;mso-width-alt:2816;
 width:66pt'>
 <col class=xl72 width=87 span=4 style='width:65pt'>
 <col class=xl72 width=77 style='mso-width-source:userset;mso-width-alt:2474;
 width:58pt'>
 <col class=xl72 width=87 style='width:65pt'>
 <col class=xl72 width=64 style='mso-width-source:userset;mso-width-alt:2048;
 width:48pt'>
 <col class=xl72 width=87 span=3 style='width:65pt'>
 <col class=xl72 width=95 style='mso-width-source:userset;mso-width-alt:3029;
 width:71pt'>
 <tr height=21 style='height:16.0pt'>
  <td height=21 class=xl72 width=89 style='height:16.0pt;width:67pt'>PBYI</td>
  <td class=xl72 width=101 style='width:76pt'></td>
  <td class=xl72 width=101 style='width:76pt'></td>
  <td class=xl72 width=77 style='width:58pt'></td>
  <td class=xl72 width=101 style='width:76pt'></td>
  <td class=xl72 width=60 style='width:45pt'></td>
  <td class=xl72 width=76 style='width:57pt'></td>
  <td class=xl72 width=88 style='width:66pt'></td>
  <td class=xl72 width=87 style='width:65pt'></td>
  <td class=xl72 width=87 style='width:65pt'></td>
 </tr>
 <tr height=21 style='height:16.0pt'>
  <td height=21 class=xl72 style='height:16.0pt'>(millions)</td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
 </tr>
 <tr height=21 style='height:16.0pt'>
  <td height=21 class=xl72 style='height:16.0pt'></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
 </tr>
 <tr height=21 style='height:16.0pt'>
  <td height=21 class=xl73 style='height:16.0pt'>Name</td>
  <td class=xl74>Nerlynx (US)</td>
  <td class=xl73>&nbsp;</td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl72></td>
  <td class=xl72></td>
 </tr>
 <tr height=21 style='height:16.0pt'>
  <td height=21 class=xl73 style='height:16.0pt'>Indication</td>
  <td class=xl76 colspan=2 style='mso-ignore:colspan'>HER2+ breast cancer
  (post-Her<span style='display:none'>ceptin)</span></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl72></td>
  <td class=xl72></td>
 </tr>
 <tr height=21 style='height:16.0pt'>
  <td height=21 class=xl73 style='height:16.0pt'>Status</td>
  <td class=xl77 colspan=2 style='mso-ignore:colspan'>Launched July 2017</td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl72></td>
  <td class=xl72></td>
 </tr>
 <tr class=xl79 height=68 style='height:51.0pt'>
  <td height=68 class=xl78 width=89 style='height:51.0pt;width:67pt'>Market
  Share</td>
  <td class=xl78 width=101 style='width:76pt'>Market Size</td>
  <td class=xl78 width=101 style='width:76pt'>Gross Sales</td>
  <td class=xl78 width=77 style='width:58pt'>Gross-to-Net</td>
  <td class=xl78 width=101 style='width:76pt'>Net Sales</td>
  <td class=xl78 width=60 style='width:45pt'>Royalty to Pfizer</td>
  <td class=xl78 width=76 style='width:57pt'>Net Sales to PBYI</td>
  <td class=xl78 width=88 style='width:66pt'>Probability</td>
  <td class=xl79 width=87 style='width:65pt'></td>
  <td class=xl79 width=87 style='width:65pt'></td>
 </tr>
 <tr class=xl83 height=21 style='height:16.0pt'>
  <td height=21 class=xl80 style='height:16.0pt'>10%</td>
  <td rowspan=5 class=xl81>4,968</td>
  <td class=xl81>497</td>
  <td rowspan=5 class=xl80>9%<![if !supportAnnotations]><span
  class=msocomspan1><span class=msocomspan2 id="_anchor_1"
  onmouseover="msoCommentShow('_com_1','_anchor_1')"
  onmouseout="msoCommentHide('_com_1')" language=JavaScript><a
  class=msocomanch href="#_msocom_1" name="_msoanchor_1">[1]</a></span></span><![endif]></td>
  <td class=xl81>452</td>
  <td rowspan=5 class=xl89>14%<![if !supportAnnotations]><span
  class=msocomspan1><span class=msocomspan2 id="_anchor_2"
  onmouseover="msoCommentShow('_com_2','_anchor_2')"
  onmouseout="msoCommentHide('_com_2')" language=JavaScript><a
  class=msocomanch href="#_msocom_2" name="_msoanchor_2">[2]</a></span></span><![endif]></td>
  <td class=xl81>389</td>
  <td class=xl82>30%</td>
  <td class=xl83></td>
  <td class=xl83></td>
 </tr>
 <tr class=xl83 height=21 style='height:16.0pt'>
  <td height=21 class=xl80 style='height:16.0pt'>15%</td>
  <td class=xl81>745</td>
  <td class=xl81>678</td>
  <td class=xl81>583</td>
  <td class=xl82>25%</td>
  <td class=xl83></td>
  <td class=xl83></td>
 </tr>
 <tr class=xl83 height=21 style='height:16.0pt'>
  <td height=21 class=xl80 style='height:16.0pt'>20%</td>
  <td class=xl81>994</td>
  <td class=xl81>904</td>
  <td class=xl81>778</td>
  <td class=xl82>20%</td>
  <td class=xl83></td>
  <td class=xl83></td>
 </tr>
 <tr class=xl83 height=21 style='height:16.0pt'>
  <td height=21 class=xl80 style='height:16.0pt'>25%</td>
  <td class=xl81>1,242</td>
  <td class=xl81>1,130</td>
  <td class=xl81>972</td>
  <td class=xl82>15%</td>
  <td class=xl83></td>
  <td class=xl83></td>
 </tr>
 <tr class=xl83 height=21 style='height:16.0pt'>
  <td height=21 class=xl80 style='height:16.0pt'>30%</td>
  <td class=xl81>1,490</td>
  <td class=xl81>1,356</td>
  <td class=xl81>1,166</td>
  <td class=xl82>10%</td>
  <td class=xl83></td>
  <td class=xl83></td>
 </tr>
 <tr height=21 style='height:16.0pt'>
  <td height=21 class=xl84 style='height:16.0pt'></td>
  <td class=xl84></td>
  <td class=xl84></td>
  <td class=xl84></td>
  <td class=xl86>Expected Value</td>
  <td class=xl86>&nbsp;</td>
  <td class=xl87>680</td>
  <td class=xl88>100%</td>
  <td class=xl72></td>
  <td class=xl72></td>
 </tr>
 <tr class=xl72 height=21 style='height:16.0pt'>
  <td height=21 class=xl72 style='height:16.0pt'></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
 </tr>
 <tr height=21 style='height:16.0pt'>
  <td height=21 class=xl73 style='height:16.0pt'>Name</td>
  <td class=xl74>Nerlynx (EU)</td>
  <td class=xl73>&nbsp;</td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
 </tr>
 <tr height=21 style='height:16.0pt'>
  <td height=21 class=xl73 style='height:16.0pt'>Indication</td>
  <td class=xl76 colspan=2 style='mso-ignore:colspan'>HER2+ breast cancer
  (post-Her<span style='display:none'>ceptin)</span></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
 </tr>
 <tr height=21 style='height:16.0pt'>
  <td height=21 class=xl73 style='height:16.0pt'>Status</td>
  <td class=xl77 colspan=2 style='mso-ignore:colspan'>EU approval 9/4/18.
  Commerci<span style='display:none'>alizatio partnership 4/1/19.</span></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
 </tr>
 <tr height=68 style='height:51.0pt'>
  <td height=68 class=xl78 width=89 style='height:51.0pt;width:67pt'>Market
  Share</td>
  <td class=xl78 width=101 style='width:76pt'>Market Size</td>
  <td class=xl78 width=101 style='width:76pt'>Gross Sales</td>
  <td class=xl78 width=77 style='width:58pt'>Gross-to-Net</td>
  <td class=xl78 width=101 style='width:76pt'>Net Sales</td>
  <td class=xl78 width=60 style='width:45pt'>Royalty to PBYI</td>
  <td class=xl78 width=76 style='width:57pt'>Royalty to PBYI</td>
  <td class=xl78 width=88 style='width:66pt'>Royalty to Pfizer</td>
  <td class=xl78 width=87 style='width:65pt'>Net Royalty to PBYI</td>
  <td class=xl78 width=87 style='width:65pt'>Probability</td>
 </tr>
 <tr height=21 style='height:16.0pt'>
  <td height=21 class=xl80 style='height:16.0pt'>10%</td>
  <td rowspan=5 class=xl81>3,108</td>
  <td class=xl81>311</td>
  <td rowspan=5 class=xl80>9%</td>
  <td class=xl81>283</td>
  <td rowspan=5 class=xl90>16%<![if !supportAnnotations]><span
  class=msocomspan1><span class=msocomspan2 id="_anchor_3"
  onmouseover="msoCommentShow('_com_3','_anchor_3')"
  onmouseout="msoCommentHide('_com_3')" language=JavaScript><a
  class=msocomanch href="#_msocom_3" name="_msoanchor_3">[3]</a></span></span><![endif]></td>
  <td class=xl81>45</td>
  <td rowspan=5 class=xl89>14%</td>
  <td class=xl81>6</td>
  <td class=xl82>30%</td>
 </tr>
 <tr height=21 style='height:16.0pt'>
  <td height=21 class=xl80 style='height:16.0pt'>15%</td>
  <td class=xl81>466</td>
  <td class=xl81>424</td>
  <td class=xl81>68</td>
  <td class=xl81>8</td>
  <td class=xl82>25%</td>
 </tr>
 <tr height=21 style='height:16.0pt'>
  <td height=21 class=xl80 style='height:16.0pt'>20%</td>
  <td class=xl81>622</td>
  <td class=xl81>566</td>
  <td class=xl81>91</td>
  <td class=xl81>11</td>
  <td class=xl82>20%</td>
 </tr>
 <tr height=21 style='height:16.0pt'>
  <td height=21 class=xl80 style='height:16.0pt'>25%</td>
  <td class=xl81>777</td>
  <td class=xl81>707</td>
  <td class=xl81>113</td>
  <td class=xl81>14</td>
  <td class=xl82>15%</td>
 </tr>
 <tr height=21 style='height:16.0pt'>
  <td height=21 class=xl80 style='height:16.0pt'>30%</td>
  <td class=xl81>932</td>
  <td class=xl81>848</td>
  <td class=xl81>136</td>
  <td class=xl81>17</td>
  <td class=xl82>10%</td>
 </tr>
 <tr height=21 style='height:16.0pt'>
  <td height=21 class=xl84 style='height:16.0pt'></td>
  <td class=xl84></td>
  <td class=xl84></td>
  <td class=xl84></td>
  <td class=xl72></td>
  <td class=xl86>&nbsp;</td>
  <td class=xl86>Expected Value</td>
  <td class=xl86>&nbsp;</td>
  <td class=xl87>10</td>
  <td class=xl88>100%</td>
 </tr>
 <tr height=21 style='height:16.0pt'>
  <td height=21 class=xl72 style='height:16.0pt'></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
 </tr>
 <tr height=21 style='height:16.0pt'>
  <td height=21 class=xl72 style='height:16.0pt'></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl85>&nbsp;</td>
  <td class=xl86>Expected Value</td>
  <td class=xl87>690</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=89 style='width:67pt'></td>
  <td width=101 style='width:76pt'></td>
  <td width=101 style='width:76pt'></td>
  <td width=77 style='width:58pt'></td>
  <td width=101 style='width:76pt'></td>
  <td width=60 style='width:45pt'></td>
  <td width=76 style='width:57pt'></td>
  <td width=88 style='width:66pt'></td>
  <td width=87 style='width:65pt'></td>
  <td width=87 style='width:65pt'></td>
 </tr>
 <![endif]>
</table>

<div style='mso-element:comment-list'><![if !supportAnnotations]>

<hr class=msocomhide align=left size=1 width="33%">

<![endif]>

<div style='mso-element:comment'><![if !supportAnnotations]>

<div id="_com_1" class=msocomtxt
onmouseover="msoCommentShow('_com_1','_anchor_1')"
onmouseout="msoCommentHide('_com_1')" language=JavaScript><![endif]>

<div><![if !supportAnnotations]><a class=msocomhide href="#_msoanchor_1"
name="_msocom_1">[1]</a><![endif]><!--[if gte mso 9]><xml>
 <v:shapetype id="_x0000_t202" coordsize="21600,21600" o:spt="202" path="m,l,21600r21600,l21600,xe">
  <v:stroke joinstyle="miter"/>
  <v:path gradientshapeok="t" o:connecttype="rect"/>
 </v:shapetype><v:shape id="_x0000_s1025" type="#_x0000_t202" style='position:absolute;
  margin-left:292pt;margin-top:-350pt;width:104pt;height:70pt;z-index:1;
  visibility:hidden' fillcolor="#ffffe1 [80]" strokecolor="none [81]"
  o:insetmode="auto">
  <v:fill color2="#ffffe1 [80]"/>
  <v:shadow color="none [81]" obscured="t"/>
  <v:path o:connecttype="none"/>
  <v:textbox style='mso-direction-alt:auto'/>
  <x:ClientData ObjectType="Note">
   <x:MoveWithCells/>
   <x:SizeWithCells/>
   <x:AutoFill>False</x:AutoFill>
   <x:Row>7</x:Row>
   <x:Column>3</x:Column>
   <x:Author>Microsoft Office User</x:Author>
  </x:ClientData>
 </v:shape></xml><![endif]--><![if !vml]><span style='mso-ignore:vglayout'><![endif]>

<div v:shape="_x0000_s1025" style='padding:2.0pt 0pt 0pt 2.0pt;text-align:left'
class=shape><font class="font6">2019 guidance from 4Q18 call<br>
</font><font class="font6"><br>
</font><font class="font7">https://seekingalpha.com/article/4245515-puma-biotechnologys-pbyi-ceo-alan-auerbach-q4-2018-results-earnings-call-transcript</font></div>

<![if !vml]></span><![endif]></div>

<![if !supportAnnotations]></div>

<![endif]></div>

<div style='mso-element:comment'><![if !supportAnnotations]>

<div id="_com_2" class=msocomtxt
onmouseover="msoCommentShow('_com_2','_anchor_2')"
onmouseout="msoCommentHide('_com_2')" language=JavaScript><![endif]>

<div><![if !supportAnnotations]><a class=msocomhide href="#_msoanchor_2"
name="_msocom_2">[2]</a><![endif]><!--[if gte mso 9]><xml>
 <v:shape id="_x0000_s1026" type="#_x0000_t202" style='position:absolute;
  margin-left:191pt;margin-top:-204pt;width:300pt;height:113pt;z-index:2;
  visibility:hidden' fillcolor="#ffffe1 [80]" o:insetmode="auto">
  <v:fill color2="#ffffe1 [80]"/>
  <v:shadow color="none [81]" obscured="t"/>
  <v:path o:connecttype="none"/>
  <v:textbox style='mso-direction-alt:auto'/>
  <x:ClientData ObjectType="Note">
   <x:MoveWithCells/>
   <x:SizeWithCells/>
   <x:AutoFill>False</x:AutoFill>
   <x:Row>7</x:Row>
   <x:Column>5</x:Column>
   <x:Author>Microsoft Office User</x:Author>
  </x:ClientData>
 </v:shape></xml><![endif]--><![if !vml]><span style='mso-ignore:vglayout'><![endif]>

<div v:shape="_x0000_s1026" style='padding:2.0pt 0pt 0pt 2.0pt;text-align:left'
class=shape><font class="font6">fixed rate of low-to-mid teens<br>
</font><font class="font6"><br>
</font><font class="font6">2018 10-K, botton of page 19, &quot;In-License
Agreement&quot;<br>
</font><font class="font8">https://www.sec.gov/Archives/edgar/data/1401667/000156459019005830/pbyi-10k_20181231.htm#Balance_Sheets</font></div>

<![if !vml]></span><![endif]></div>

<![if !supportAnnotations]></div>

<![endif]></div>

<div style='mso-element:comment'><![if !supportAnnotations]>

<div id="_com_3" class=msocomtxt
onmouseover="msoCommentShow('_com_3','_anchor_3')"
onmouseout="msoCommentHide('_com_3')" language=JavaScript><![endif]>

<div><![if !supportAnnotations]><a class=msocomhide href="#_msoanchor_3"
name="_msocom_3">[3]</a><![endif]><!--[if gte mso 9]><xml>
 <v:shape id="_x0000_s1027" type="#_x0000_t202" style='position:absolute;
  margin-left:413pt;margin-top:-122pt;width:105pt;height:70pt;z-index:3;
  visibility:hidden' fillcolor="#ffffe1 [80]" strokecolor="none [81]"
  o:insetmode="auto">
  <v:fill color2="#ffffe1 [80]"/>
  <v:shadow color="none [81]" obscured="t"/>
  <v:path o:connecttype="none"/>
  <v:textbox style='mso-direction-alt:auto'/>
  <x:ClientData ObjectType="Note">
   <x:MoveWithCells/>
   <x:SizeWithCells/>
   <x:AutoFill>False</x:AutoFill>
   <x:Row>18</x:Row>
   <x:Column>5</x:Column>
   <x:Author>Microsoft Office User</x:Author>
  </x:ClientData>
 </v:shape></xml><![endif]--><![if !vml]><span style='mso-ignore:vglayout'><![endif]>

<div v:shape="_x0000_s1027" style='padding:2.0pt 0pt 0pt 2.0pt;text-align:left'
class=shape><font class="font6">&quot;significant&quot; double-digit
royalties<br>
</font><font class="font6"><br>
</font><font class="font8">https://seekingalpha.com/news/3447188-puma-licenses-nerlynx-europe</font><font
class="font5"><br>
</font></div>

<![if !vml]></span><![endif]></div>

<![if !supportAnnotations]></div>

<![endif]></div>

</div>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->

</div><!-- main-content -->