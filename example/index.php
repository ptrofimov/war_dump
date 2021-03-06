<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Optimism
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20080311

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Optimism by Free CSS Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="war_dump.js"></script>
</head>
<body>
<div id="header-wrapper">
	<div id="header">
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="#">Home</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Photos</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Links</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<?php var_dump(array('Lorem','ipsum','sed','aliquam','Lorem','ipsum','sed','aliquam'))?>
		</div>
		<!-- end #menu -->
		<div id="search">
			<?php trigger_error('Failed to render menu',E_USER_NOTICE)?>
			<form method="get" action="">
				<fieldset>
				<input type="text" name="s" id="search-text" size="15" />
				<input type="submit" id="search-submit" value="Search" />
				</fieldset>
			</form>
		</div>
		<!-- end #search -->
	</div>
	<!-- end #header -->
</div>
<!-- end #header-wrapper -->
<div id="page">
	<div id="logo">
		<h1><a href="#">Optimism</a></h1>
		<p><em>{ by <a href="http://www.nodethirtythree.com/">NodeThirtyThree</a> &amp; <a href="http://www.freecsstemplates.org/">Free CSS Templates</a> }</em></p>
	</div>
	<hr />
	<!-- end #logo -->
	<div id="content">
		<div class="post">
			<h2 class="title">Welcome to Optimism</h2>
			<p class="meta"><em>{ Posted by <a href="#">enks</a> on March 10, 2008 }</em></p>
			<div class="entry">
				<img src="images/img16.jpg" alt="" width="110" height="110" class="left" />
				<p>This is <strong>Optimism</strong>, a free, fully standards-compliant CSS template designed by <a href="http://www.nodethirtythree.com/">NodeThirtyThree</a> for <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>, released for free under the <a href="http://creativecommons.org/licenses/by/2.5/">Creative Commons Attribution 2.5</a> license. The photos in this design are from <a href="http://www.pdphoto.org/">PDPhoto.org</a>. You're free to use this template for anything as long as you link back to <a href="http://www.freecsstemplates.org/">my site</a>. Enjoy :)</p>
				<?php trigger_error('File not found',E_USER_WARNING)?>
				<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.</p>
				<p class="links"><a href="#" class="comments">Comments (64)</a> &nbsp;&nbsp;&nbsp; <a href="#" class="permalink">Full article</a></p>
			</div>
		</div>
		<div class="post">
			<?php var_dump(array('Lorem','ipsum','sed','aliquam'))?>
			<h2 class="title">Lorem ipsum sed aliquam</h2>
			<p class="meta"><em>{ Posted by <a href="#">enks</a> on March 8, 2008 }</em></p>
			<div class="entry">
				<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est.</p>
				<p>Praesent ac lectus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vivamus augue. Fusce eget tellus ultrices ligula volutpat adipiscing. Aenean ligula lectus, vehicula in, dictum a, fermentum nec, felis. Nunc ac turpis in leo posuere imperdiet.</p>
				<p class="links"><a href="#" class="comments">Comments (64)</a> &nbsp;&nbsp;&nbsp; <a href="#" class="permalink">Full article</a></p>
			</div>
		</div>
	</div>
	<!-- end #content -->
	<div id="sidebar">
		<?php var_dump(array('Mauris','vitae','nisl','metus','placerat'))?>
		<ul>
			<li>
				<h2>Aliquam tempus</h2>
				<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, volutpat.</p>
			</li>
			<li id="calendar">
				<h2>Calendar</h2>
				<div id="calendar_wrap">
					<table summary="Calendar">
						<caption>
						March 2008
						</caption>
						<thead>
							<tr>
								<th abbr="Monday" scope="col" title="Monday">M</th>
								<th abbr="Tuesday" scope="col" title="Tuesday">T</th>
								<th abbr="Wednesday" scope="col" title="Wednesday">W</th>
								<th abbr="Thursday" scope="col" title="Thursday">T</th>
								<th abbr="Friday" scope="col" title="Friday">F</th>
								<th abbr="Saturday" scope="col" title="Saturday">S</th>
								<th abbr="Sunday" scope="col" title="Sunday">S</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<td abbr="February" colspan="3" id="prev"><a href="#" title="">&laquo; Feb</a></td>
								<td class="pad">&nbsp;</td>
								<td abbr="April" colspan="3" id="next"><a href="#" title="">Apr &raquo;</a></td>
							</tr>
						</tfoot>
						<tbody>
							<tr>
								<td colspan="5" class="pad">&nbsp;</td>
								<td>1</td>
								<td>2</td>
							</tr>
							<tr>
								<td>3</td>
								<td>4</td>
								<td>5</td>
								<td>6</td>
								<td>7</td>
								<td>8</td>
								<td>9</td>
							</tr>
							<tr>
								<td>10</td>
								<td id="today">11</td>
								<td>12</td>
								<td>13</td>
								<td>14</td>
								<td>15</td>
								<td>16</td>
							</tr>
							<tr>
								<td>17</td>
								<td>18</td>
								<td>19</td>
								<td>20</td>
								<td>21</td>
								<td>22</td>
								<td>23</td>
							</tr>
							<tr>
								<td>24</td>
								<td>25</td>
								<td>26</td>
								<td>27</td>
								<td>28</td>
								<td>29</td>
								<td>30</td>
							</tr>
							<tr>
								<td>31</td>
								<td class="pad" colspan="6">&nbsp;</td>
							</tr>
						</tbody>
					</table>
				</div>
			</li>
			<li>
				<h2>Turpis nulla</h2>
				<ul class="list1">
					<li><a href="#"><img src="images/img17.jpg" alt="" width="90" height="90" /></a></li>
					<li class="alt"><a href="#"><img src="images/img18.jpg" alt="" width="90" height="90" /></a></li>
					<li><a href="#"><img src="images/img19.jpg" alt="" width="90" height="90" /></a></li>
					<li class="alt"><a href="#"><img src="images/img20.jpg" alt="" width="90" height="90" /></a></li>
				</ul>
				<p style="clear: both; margin: 0; line-height: normal; text-align: right;"><a href="#">More photos &gt;</a></p>
			</li>
		</ul>
		<?php trigger_error('Shit happened',E_USER_NOTICE)?>
		<?php trigger_error('Shit happened again',E_USER_NOTICE)?>
		<?php trigger_error('Oh my god!',E_USER_NOTICE)?>
	</div>
	<!-- end #sidebar -->
	<div style="clear: both;">&nbsp;</div>
	<div id="footer">
		<p>Copyright (c) 2008 Sitename.com. All rights reserved. Design by <a href="http://www.nodethirtythree.com/">NodeThirtyThree</a> &amp; <a href="http://www.freecsstemplates.org/">Free CSS Templates</a> | <a href="http://www.free-templates.ru/">Free-Templates.RU</a></p>
	</div>
	<!-- end #footer -->
</div>
<!-- end #page -->
</body>
</html>
