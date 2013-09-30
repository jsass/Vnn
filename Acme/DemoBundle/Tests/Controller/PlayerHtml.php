<?
namespace Acme\DemoBundle\Tests\Controller;


class PlayerHtml {


private $html = "
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
	<head>
		<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />		<title>High School Sports Stats : VarVee : Trevon Bluiett</title>
		<meta property=\"fb:app_id\" content=\"154165181300138\" />
		<meta name=\"google-site-verification\" content=\"i71-WwTTu04SUAcs4CKz4jJ2ivrQ6Xo_fpJM3Qh9CoM\" />
		
		<link href=\"/favicon.ico\" type=\"image/x-icon\" rel=\"icon\" /><link href=\"/favicon.ico\" type=\"image/x-icon\" rel=\"shortcut icon\" /><link rel=\"stylesheet\" type=\"text/css\" href=\"/css/reset-min.css\" /><link rel=\"stylesheet\" type=\"text/css\" href=\"/css/stylesheet.css\" /><link rel=\"stylesheet\" type=\"text/css\" href=\"/css/prettyPhoto.css\" /><link rel=\"stylesheet\" type=\"text/css\" href=\"/css/jquery.autocomplete.css\" /><link rel=\"stylesheet\" type=\"text/css\" href=\"/css/jScrollPane.css\" /><script type=\"text/javascript\" src=\"/js/jquery-1.4.2.min.js\"></script><script type=\"text/javascript\" src=\"/js/jquery-ui-1.8rc3.custom.min.js\"></script><script type=\"text/javascript\" src=\"/js/jquery.prettyPhoto.js\"></script><script type=\"text/javascript\" src=\"/js/jquery.autocomplete.js\"></script><script type=\"text/javascript\" src=\"/js/jScrollPane.js\"></script><script type=\"text/javascript\" src=\"/js/urlEncode.js\"></script><script type=\"text/javascript\" src=\"/js/varvee.js\"></script><script type=\"text/javascript\" src=\"/js/powerstats.js\"></script>		<!--[if IE]>
			<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/stylesheet-ie.css\" />
		<![endif]-->
		<link type=\"text/css\" href=\"/js/smoothness/jquery-ui-1.8rc3.custom.css\" rel=\"stylesheet\" />
        <!-- GPT init -->
    <!-- Start: GPT Async -->
    <script type='text/javascript'>
        var gptadslots = [];
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
        (function () {
            var gads = document.createElement('script');
            gads.async = true;
            gads.type = 'text/javascript';
            var useSSL = 'https:' == document.location.protocol;
            gads.src = (useSSL ? 'https:' : 'http:') + '//www.googletagservices.com/tag/js/gpt.js';
            var node = document.getElementsByTagName('script')[0];
            node.parentNode.insertBefore(gads, node);
        })();
    </script>
    <!-- End: GPT -->
	</head>
	
	<body>
    	
		<div class=\"wrapper-top\">
			<div class=\"top-container\">
				<div class=\"left-column\">
					<div class=\"logo\">
						<a href=\"/\">

						<img src=\"/img/varvee/img-varvee-logo.gif\" width=\"143\" height=\"42\" alt=\"VarVee - All Athletes, All Sports, All Stats\" />
						</a>
					</div>
					<div class=\"logo-tagline\">
						<h1>Where Varsity Meets Velocity</h1>
					</div>
				</div>
		
				<div class=\"right-column\">
					<div class=\"user-nav-wrapper\">
						<div class=\"signin-wrapper\" id=\"sign-in-box\" style=\"display:none;\">
							<div class=\"signin-filter-wrapper\">
							<div class=\"close-dropdown\">
								<a href=\"#\" onclick='return false;'><img height=\"8\" border=\"0\" width=\"8\" alt=\"Close Dropdown\" src=\"/img/img-dropdown-close.png\" /></a>
							</div>
							
							<h2>Fan &amp; Athlete Sign-in</h2>
								<form id=\"UserLoginForm\" action=\"/users/login\" method=\"post\">
									<div class=\"field\">
										<input type=\"text\" size=\"22\" value=\"Email\" name=\"data[User][email]\" class=\"clearEmailFocus\" title=\"Email\" />
									</div>
									<div class=\"field\">
										<input type=\"text\" size=\"22\" value=\"Password\" class=\"clearPasswordFocus\" />
										<input type=\"password\" size=\"22\" value=\"\" name=\"data[User][password]\" class=\"clearPasswordBlur\" style=\"display:none;\" />
									</div>
									<div class=\"field\" style=\"float:right;padding-right:20px;\">
										<input type=\"image\" src=\"/img/btn-sign-in.png\" value=\"\" />
									</div>
								</form>
								<div class=\"field\">
									<p>
										<a href='/users/forgotPassword/'>Did you forget your password?</a>
									</p>
									<p>
										<a href='/users/signup/'>Not registered?</a>
									</p>
								</div>
							</div>
						</div>
						
						
						
						<div class=\"coaches-header-signin-wrapper\" id=\"coaches-header-sign-in-box\" style=\"display:none;\">
							<div class=\"signin-filter-wrapper\">
								<div class=\"close-dropdown\">
									<a href=\"#\"><img height=\"8\" border=\"0\" width=\"8\" alt=\"Close Dropdown\" src=\"/img/img-dropdown-close.png\" /></a>
								</div>
								<form action=\"http://co.varvee.com/login\" method='post' target='_blank'>
									<h2>Coach Sign-in</h2>
									<div class=\"field\">
										<input type=\"text\" size=\"22\" name=\"uname\" value=\"Email\" title=\"Email\" class=\"clearEmailFocus\" />
									</div>
									<div class=\"field\">
										<input type=\"text\" size=\"22\" value=\"Password\" class=\"clearPasswordFocus\" />
										<input type=\"password\" size=\"22\" name=\"pwd\" class=\"clearPasswordBlur\" style=\"display:none;\" />
									</div>
									<div class=\"field\" style=\"float:right;padding-right:20px;\">
										<input type=\"image\" src=\"/img/btn-sign-in.png\" value=\"\" />
									</div>
								</form>
							</div>
						</div>
						
						
						
						
													<ul class=\"user-nav\">
								<li><a href=\"#\" id=\"sign-in\">User Sign In <img src=\"/img/img-small-triangle-down.gif\" width=\"7\" height=\"4\" alt=\"Down Arrow\" class=\"down-arrow\" /></a></li><!--
								--><li><a href=\"#\" id=\"coaches-header-sign-in\">Coach Sign In <img src=\"/img/img-small-triangle-down.gif\" width=\"7\" height=\"4\" alt=\"Down Arrow\" class=\"down-arrow\" /></a></li><!--
								--><li><a href=\"/users/signup/\">Register</a></li>
	
							</ul>
											</div>
					<div class=\"search-wrapper\">
						<form action=\"/organization/find/+/\" method=\"post\" >
														<input type=\"text\" id=\"search-field\" value=\"Enter School Name, City, or Zip\" name=\"data[query]\" title=\"Enter School Name, City, or Zip\" class=\"clearMeFocus\" />
							<input type=\"hidden\" id=\"search-field-id\" value=\"\" name=\"data[query-id]\"  />
							<input type=\"submit\" value=\"Quick Search\" name=\"submit-button\" id=\"submit-button\" />
						</form>
					</div>
				</div>

		
				<div class=\"main-nav-wrapper\">
					<ul class=\"main-nav\">
						<li><a href=\"#\" id=\"find-athlete\">Find Athlete</a></li><!--
						--><li><a href=\"#\" onclick='return false;' id=\"find-team\">Find Team</a></li><!--
						--><li><a href=\"#\" onclick='return false;' id=\"find-school\">Find School</a></li><!--
						--><li><a href=\"#\" onclick='return false;' id=\"results-standings\">Results &amp; Standings</a></li><!--
						--><li><a href=\"#\" onclick='return false;' id=\"individual-leaderboards\">Individual Leaderboards</a></li><!--
						--><li><a href=\"#\" onclick='return false;' id=\"team-leaderboards\">Team Leaderboards</a></li>
					</ul>
				</div>
				
				<div id=\"find-athlete-dropdown\" class=\"dropdown-wrapper\" style=\"display:none;\">
					<div class=\"dropdown-filter-wrapper\">
						<div class=\"close-dropdown\">
							<a href=\"#\" onclick='return false;'><img src=\"/img/img-dropdown-close.png\" width=\"8\" height=\"8\" border=\"0\" alt=\"Close Dropdown\" /></a>
						</div>
						<div class=\"field\">
							<label id='athlete-state-label' for=\"athlete-state\">State <span style=\"color:#D60101;\">*</span><br /></label>
							<select name=\"data[athlete-state]\" onchange=\"loadsportbystate(&quot;athlete-state&quot;,&quot;athlete-sport&quot;,&quot;ALL&quot;,&quot;find_athlete_loaderID&quot;)\" id=\"athlete-state\">
<option value=\"\">[SELECT STATE]</option>
<option value=\"60\">Arkansas</option>
<option value=\"35\">Colorado</option>
<option value=\"56\">Illinois</option>
<option value=\"54\">Indiana</option>
<option value=\"75\">Montana</option>
<option value=\"85\">NEPSAC</option>
<option value=\"43\">South Carolina</option>
<option value=\"49\">Vermont</option>
</select>

						</div>
						<div class=\"hr\"></div>
						<div class=\"field\">
							<label id=\"label-athlete-name\" for=\"athlete-name\">Athlete Last Name<span style=\"color:#D60101;\">*</span><br /></label>
							<input type=\"text\" id=\"athlete-name\" name='athlete-name' value=\"\" />
						</div>
						<div class=\"hr\"></div>
						<div class=\"field\">
							<label id=\"label-athlete-school\" for=\"athlete-school\">School<br /></label>
							<input type=\"text\" id=\"athlete-school\" name='athlete-school' class='school-search' value=\"\"/>
							<input type='hidden' id='athlete-school-id' name='athlete-school-id' value='' />
						</div>
						<div class=\"hr\"></div>
						<div class=\"field\">
							<label id=\"label-athlete-sport\" for=\"athlete-sport\">Sport<br /></label>
									        <select id='athlete-sport'>
		          <option value=\"\">[SELECT SPORT]</option>
									</select>
				


												<span id=\"find_athlete_loaderID\"></span>
						</div>
					</div>
					<div id=\"athlete-search-button\" class=\"dropdown-filter-search\">
						<a href=\"#\" onclick='return false;'></a>
					</div>
				</div>
				
				<div id=\"find-team-dropdown\" class=\"dropdown-wrapper\" style=\"display:none;\">
					<div class=\"dropdown-filter-wrapper\">
						<div class=\"close-dropdown\">
							<a href=\"#\" onclick='return false;'><img src=\"/img/img-dropdown-close.png\" width=\"8\" height=\"8\" border=\"0\" alt=\"Close Dropdown\" /></a>
						</div>
						<div class=\"field\">
							<label for=\"team-state\" id='team-state-label' >State <span style=\"color:#D60101;\">*</span><br /></label>
							<select name=\"data[team-state]\" onchange=\"loadsportbystate(&quot;team-state&quot;,&quot;team-sport&quot;,&quot;ALL&quot;,&quot;find_team_loaderID&quot;)\" id=\"team-state\">
<option value=\"\">[SELECT STATE]</option>
<option value=\"60\">Arkansas</option>
<option value=\"35\">Colorado</option>
<option value=\"56\">Illinois</option>
<option value=\"54\">Indiana</option>
<option value=\"75\">Montana</option>
<option value=\"85\">NEPSAC</option>
<option value=\"43\">South Carolina</option>
<option value=\"49\">Vermont</option>
</select>

						</div>
						<div class=\"hr\"></div>
						<div class=\"field\">
							<label for=\"team-school\">School<br /></label>
							<input type=\"text\" id=\"team-school\" name='team-school' class='school-search' value=\"\" />
							<input type='hidden' id='team-school-id' name='team-school-id' value='' />
						</div>
						<div class=\"hr\"></div>
						<div class=\"field\">
							<label for=\"team-sport\">Sport<br /></label>
									        <select id='team-sport'>
		          <option value=\"\">[SELECT SPORT]</option>
									</select>
				


												<span id=\"find_team_loaderID\"></span>
						</div>
					</div>
					<div id=\"team-search-button\" class=\"dropdown-filter-search\">
						<a href=\"#\" onclick='return false;'></a>
					</div>
				</div>
				
				<div id=\"find-school-dropdown\" class=\"dropdown-wrapper\" style=\"display:none;\">
					<div class=\"dropdown-filter-wrapper\">
						<div class=\"close-dropdown\">
							<a href=\"#\" onclick='return false;'><img src=\"/img/img-dropdown-close.png\" width=\"8\" height=\"8\" border=\"0\" alt=\"Close Dropdown\" /></a>
						</div>
						<div class=\"field\">
							<label for=\"school-state\" id='school-state-label' >State<span style=\"color:#D60101;\">*</span><br /></label>
							<select name=\"data[school-state]\" onchange=\"\" id=\"school-state\">
<option value=\"\">[SELECT STATE]</option>
<option value=\"60\">Arkansas</option>
<option value=\"35\">Colorado</option>
<option value=\"56\">Illinois</option>
<option value=\"54\">Indiana</option>
<option value=\"75\">Montana</option>
<option value=\"85\">NEPSAC</option>
<option value=\"43\">South Carolina</option>
<option value=\"49\">Vermont</option>
</select>

						</div>
						<div class=\"hr\"></div>
						<div class=\"field\">
							<label for=\"school-city-name\">School or City Name<br /></label>
							<input type=\"text\" id=\"school-city-name\"  name='school-city-name' class='school-search' value=\"\"/>
							<input type='hidden' id='school-city-name-id' name='school-city-name-id' value='' />
						</div>
					</div>
					<div id=\"school-search-button\" class=\"dropdown-filter-search\">
						<a href=\"#\" onclick='return false;'></a>
					</div>
				</div>
				
				<div id=\"results-dropdown\" class=\"dropdown-wrapper\" style=\"display:none;\">
					<div class=\"dropdown-filter-wrapper\">
						<div class=\"close-dropdown\">
							<a href=\"#\" onclick='return false;'><img src=\"/img/img-dropdown-close.png\" width=\"8\" height=\"8\" border=\"0\" alt=\"Close Dropdown\" /></a>
						</div>
						<div class=\"field\">
							<label for=\"results-state\" id='results-state-label'>State <span style=\"color:#D60101;\">*</span><br /></label>
							<select name=\"data[results-state]\" onchange=\"loadsportbystate(&quot;results-state&quot;,&quot;results-sport&quot;,&quot;ALL&quot;,&quot;results_loaderID&quot;)\" id=\"results-state\">
<option value=\"\">[SELECT STATE]</option>
<option value=\"60\">Arkansas</option>
<option value=\"35\">Colorado</option>
<option value=\"56\">Illinois</option>
<option value=\"54\">Indiana</option>
<option value=\"75\">Montana</option>
<option value=\"85\">NEPSAC</option>
<option value=\"43\">South Carolina</option>
<option value=\"49\">Vermont</option>
</select>

						</div>
						<div class=\"hr\"></div>
						<div class=\"field\">
							<label id=\"label-results-school\" for=\"school\">School<br /></label>
							<input type=\"text\" id=\"results-school\"  name='results-school' class='school-search' value=\"\"/>
							<input type='hidden' id='results-school-id' name='results-school-id' value='' />
						</div>
						<div class=\"hr\"></div>
						<div class=\"field\">
							<label id=\"label-results-sport\" for=\"sport\">Sport<br /></label>
									        <select id='results-sport'>
		          <option value=\"\">[SELECT SPORT]</option>
									</select>
				


												<span id=\"results_loaderID\"></span>
						</div>
						<div class=\"hr\"></div>
						<div class=\"field\">
							<label for=\"start-date\">Start Date<br /></label>
							<input type=\"text\" id=\"start-date\" name='start-date' value='09/29/2013'/>
						</div>
						<div class=\"hr\"></div>
						<div class=\"field\">
							<label id=\"label-end-date\" for=\"end-date\">End Date<br /></label>
							<input type=\"text\" id=\"end-date\" name='end-date' value='09/29/2013'/>
						</div>
					</div>
					<div id=\"results-search-button\" class=\"dropdown-filter-search\">
						<a href=\"#\" onclick='return false;'></a>
					</div>
				</div>
				
				<div id=\"individual-leaderboard-dropdown\" class=\"dropdown-wrapper\" style=\"display:none;\">
					<div class=\"dropdown-filter-wrapper\">
						<div class=\"close-dropdown\">
							<a href=\"#\" onclick='return false;'><img src=\"/img/img-dropdown-close.png\" width=\"8\" height=\"8\" border=\"0\" alt=\"Close Dropdown\" /></a>
						</div>
						<div class=\"field\">
							<label id='individual-leaderboard-state-label' for=\"individual-leaderboard-state\" >State<span style=\"color:#D60101;\">*</span><br /></label>
							<select name=\"data[individual-leaderboard-state]\" onchange=\"loadsportbystate(&quot;individual-leaderboard-state&quot;,&quot;individual-leaderboard-sport&quot;,&quot;[SELECT SPORT]&quot;,&quot;individual-leaderboard_loaderID&quot;)\" id=\"individual-leaderboard-state\">
<option value=\"\">[SELECT STATE]</option>
<option value=\"60\">Arkansas</option>
<option value=\"35\">Colorado</option>
<option value=\"56\">Illinois</option>
<option value=\"54\">Indiana</option>
<option value=\"75\">Montana</option>
<option value=\"85\">NEPSAC</option>
<option value=\"43\">South Carolina</option>
<option value=\"49\">Vermont</option>
</select>

						</div>
						<div class=\"hr\"></div>
						<div class=\"field\">
							<label id=\"label-individual-leaderboard-sport\" for=\"individual-leaderboard-sport\">Sport <span style=\"color:#D60101;\">*</span><br /></label>
									        <select id='individual-leaderboard-sport'>
		          <option value=\"\">[SELECT SPORT]</option>
									</select>
				


												<span id=\"individual-leaderboard_loaderID\"></span>
						</div>
					</div>
					<div id=\"individual-leaderboard-search-button\" class=\"dropdown-filter-search\">
						<a href=\"#\" onclick='return false;'></a>
					</div>
				</div>
				
				<div id=\"team-leaderboard-dropdown\" class=\"dropdown-wrapper\" style=\"display:none;\">
					<div class=\"dropdown-filter-wrapper\">
						<div class=\"close-dropdown\">
							<a href=\"#\" onclick='return false;'><img src=\"/img/img-dropdown-close.png\" width=\"8\" height=\"8\" border=\"0\" alt=\"Close Dropdown\" /></a>
						</div>
						<div class=\"field\">
							<label for=\"team-leaderboard-state\" id='team-leaderboard-state-label'>State <span style=\"color:#D60101;\">*</span><br /></label>
							
							<select name=\"data[team-leaderboard-state]\" onchange=\"loadsportbystate(&quot;team-leaderboard-state&quot;,&quot;team-leaderboard-sport&quot;,&quot;[SELECT SPORT]&quot;,&quot;team_leaderboard_loaderID&quot;)\" id=\"team-leaderboard-state\">
<option value=\"\">[SELECT STATE]</option>
<option value=\"60\">Arkansas</option>
<option value=\"35\">Colorado</option>
<option value=\"56\">Illinois</option>
<option value=\"54\">Indiana</option>
<option value=\"75\">Montana</option>
<option value=\"85\">NEPSAC</option>
<option value=\"43\">South Carolina</option>
<option value=\"49\">Vermont</option>
</select>

						</div>
						<div class=\"hr\"></div>
						<div class=\"field\">
							<label id=\"label-team-leaderboard-sport\" for=\"team-leaderboard-sport\">Sport <span style=\"color:#D60101;\">*</span><br /></label>
									        <select id='team-leaderboard-sport'>
		          <option value=\"\">[SELECT SPORT]</option>
									</select>
				


												<span id=\"team_leaderboard_loaderID\"></span>
						</div>
					</div>
					<div id=\"team-leaderboard-search-button\" class=\"dropdown-filter-search\">
						<a href=\"#\" onclick='return false;'></a>
					</div>
				</div>
				
			</div>
		</div>


		
		<div class='texture-container basketball'><div class='texture-wrapper'><h2>Basketball</h2></div></div>	
		
		<div class=\"wrapper-middle\">

					

			<div class=\"banner-ad-header\">

    <div id=\"div-gpt-ad-841079984844464866-1\">
        <script type='text/javascript'>
        googletag.cmd.push(function() {
            googletag.defineSlot('/5727661/Desktop/varvee', [[728, 90]], 'div-gpt-ad-841079984844464866-1')
            .addService(googletag.pubads())
            .setTargeting('pos', ['1']);
            googletag.pubads().enableSingleRequest();
                        googletag.pubads().enableAsyncRendering();
            googletag.pubads().collapseEmptyDivs();
            googletag.enableServices();
            googletag.display('div-gpt-ad-841079984844464866-1');
        });
        </script>
    </div>
</div>
			

<div class=\"middle-container\">
	<div class=\"breadcrumb-wrapper\">
				<div class=\"breadcrumb-wrapper\">
			<a href=\"/\">Home</a> / <a href=\"/organization/view/4607\">Park Tudor</a> / <a href=\"/team/view/87965\">2013 Park Tudor Basketball (Boys)</a> / Trevon Bluiett			

		</div>
	</div>
	
	<div class=\"left-column\">
		
				
		<div class=\"profile-wrapper\">
			<div class=\"profile-image\">
				<a href=\"/users/signup\"><img src=\"/img/img-athlete-unclaimed-profile.jpg\" alt=\"\" /></a>			</div>
			<div class=\"profile-details\">
				<div class=\"profile-name\">Trevon Bluiett									</div>
								<div class=\"detail school\">
				<a href=\"/organization/view/4607\">Park Tudor</a>				</div>
				<div class=\"detail\">Indianapolis, IN</div>
				<div class=\"detail\">
					Graduation Year 2014				</div>
			</div>
		</div>
		
	</div>
	
	<div class=\"right-column\">
		


<div class=\"tools-container\">
	<ul class=\"tool-wrapper\">
		<li><a href=\"/users/signup\" class=\"\" rel=\"\" onClick=\"\"><img src=\"/img/img-tool-register.png\" alt=\"\" /></a></li><li><a href=\"mailto:?Subject=Your VarVee Stats&amp;Body=Hi, I found your stats on VarVee.com - the most comprehensive prep sports site on the internet.  You should sign up and register your account to claim your stats and build your own unique online VarVee profile. Just follow this link to your page: http%3A%2F%2Fvarvee.com%2Fteam%2Fplayer%2F27%2F56714\" class=\"\" rel=\"\" onClick=\"\"><img src=\"/img/img-tool-notify.png\" alt=\"\" /></a></li><li><a href=\"/alerts/placeAlert/player/56714/27?iframe=true&amp;width=400&amp;height=360\" class=\"\" rel=\"prettyPhoto\" onClick=\"\"><img src=\"/img/img-tool-alert.png\" alt=\"\" /></a></li><li><a href=\"#hidden-page-link\" class=\"\" rel=\"prettyPhoto\" onClick=\"\"><img src=\"/img/img-tool-link.png\" alt=\"\" /></a></li><li><a href=\"/feedbacks/add/popup/stat-jacked/56714/27?iframe=true&amp;width=400&amp;height=360\" class=\"\" rel=\"prettyPhoto\" onClick=\"\"><img src=\"/img/img-tool-report.png\" alt=\"\" /></a></li>	</ul>



	<div class=\"facebook-like-button-wrapper\">

		<script src=\"http://connect.facebook.net/en_US/all.js#xfbml=1\"></script><fb:like show_faces=\"false\" width=\"225\"></fb:like>


	</div>


</div>
<div class=\"clear\"></div>
<div class=\"banner-ad-half\">

	<script type='text/javascript'><!--//<![CDATA[
	   var m3_u = (location.protocol=='https:'?'https://ads.varvee.com/www/delivery/ajs.php':'http://ads.varvee.com/www/delivery/ajs.php');
	   var m3_r = Math.floor(Math.random()*99999999999);
	   if (!document.MAX_used) document.MAX_used = ',';
	   document.write (\"<scr\"+\"ipt type='text/javascript' src='\"+m3_u);
	   document.write (\"?zoneid=5\");
	   document.write ('&amp;action=player&amp;sportId=27&amp;schoolId=4607&amp;stateId=54');
	   document.write ('&amp;cb=' + m3_r);
	   if (document.MAX_used != ',') document.write (\"&amp;exclude=\" + document.MAX_used);
	   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
	   document.write (\"&amp;loc=\" + escape(window.location));
	   if (document.referrer) document.write (\"&amp;referer=\" + escape(document.referrer));
	   if (document.context) document.write (\"&context=\" + escape(document.context));
	   if (document.mmm_fo) document.write (\"&amp;mmm_fo=1\");
	   document.write (\"'><\/scr\"+\"ipt>\");
	//]]>--></script><noscript><a href='http://ads.varvee.com/www/delivery/ck.php?n=abe81e3b&amp;cb=128795197&amp;action=player&amp;sportId=27&amp;schoolId=4607&amp;stateId=54' target='_blank'><img src='http://ads.varvee.com/www/delivery/avw.php?zoneid=5&amp;cb=128795197&amp;action=player&amp;sportId=27&amp;schoolId=4607&amp;stateId=54&amp;n=abe81e3b' border='0' alt='' /></a></noscript>

</div>
	</div>
	
	
		<div class=\"bottom-column\">
		
			<div class=\"table-wrapper\">
				
					<div class=\"table-group-title\">Sports</div>
					
					<a name='7ddcf6228db4ee2edfe138c2b283968d'>&nbsp;</a>
<div class=\"table-container\">
<div class=\"table-section-header\">
    <div class=\"title\">2013 Basketball (Boys) - Park Tudor - Indianapolis, IN</div>
    <div class=\"end-cap\">
        <a class=\"up\" onclick=\"return false\" href=\"#\"></a>
    </div>
    <div class=\"clear\"></div>
</div>
<div class=\"table-body\" >
<table>
<tbody>
<tr>
    <td class=\"categories\" colspan=\"22\">
                <!-- START of code to show input box for search AB, IP AND minimum minutes added by icreon on 24/5/11 -->
        <script>
            function regIsDigit(fData) {

                if (fData.value != '') {
                    var reg = new RegExp(\"^[0-9]+$\");
                    if (!reg.test(fData.value)) {
                        alert('Enter digit only');
                        fData.value = '';
                    }
                }
            }


        </script>
        
        
                                <!-- END of code to show input box for search AB, IP AND minimum minutes added by icreon on 24/5/11 -->
    </td>
</tr>
<tr>
    <th><a href=\"/team/player/27/56714/sort:Start/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">Date</a></th><th><a href=\"/team/player/27/56714/sort:Opponent/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">Opponent</a></th><th><a href=\"/team/player/27/56714/sort:Result/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">Results</a></th><th><a href=\"/team/player/27/56714/sort:TotalPoints/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">PTS</a></th><th><a href=\"/team/player/27/56714/sort:PointsPerGame/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">PPG</a></th><th><a href=\"/team/player/27/56714/sort:TwoPointMade/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">2PT</a></th><th><a href=\"/team/player/27/56714/sort:TwoPointAttempts/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">2PTA</a></th><th><a href=\"/team/player/27/56714/sort:TwoPointPercentage/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">2PT%</a></th><th><a href=\"/team/player/27/56714/sort:ThreePointMade/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">3PT</a></th><th><a href=\"/team/player/27/56714/sort:ThreePointAttempts/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">3PTA</a></th><th><a href=\"/team/player/27/56714/sort:ThreePointPercentage/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">3PT%</a></th><th><a href=\"/team/player/27/56714/sort:FreeThrowMade/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">FT</a></th><th><a href=\"/team/player/27/56714/sort:FreeThrowAttempts/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">FTA</a></th><th><a href=\"/team/player/27/56714/sort:FreeThrowPercentage/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">FT%</a></th><th><a href=\"/team/player/27/56714/sort:OffenseRebound/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">OR</a></th><th><a href=\"/team/player/27/56714/sort:DefenseRebound/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">DR</a></th><th><a href=\"/team/player/27/56714/sort:TotalRebound/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">R</a></th><th><a href=\"/team/player/27/56714/sort:Assist/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">A</a></th><th><a href=\"/team/player/27/56714/sort:Turnover/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">T</a></th><th><a href=\"/team/player/27/56714/sort:Steal/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">S</a></th><th><a href=\"/team/player/27/56714/sort:Block/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">B</a></th><th><a href=\"/team/player/27/56714/sort:PersonalFoul/direction:asc/activeTable:7ddcf6228db4ee2edfe138c2b283968d/page:1#7ddcf6228db4ee2edfe138c2b283968d\">PF</a></th></tr>

<tr class='odd'><td><a href=\"/team/game/54/27/79067\">Nov 21, 2012</a></td><td>@University High School of Indiana (15-12)</td><td><a href=\"/team/game/54/27/79067\">W79-44</a></td><td>25</td><td>25</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='even'><td><a href=\"/team/game/54/27/81764\">Nov 30, 2012</a></td><td>Roncalli (10-9)</td><td><a href=\"/team/game/54/27/81764\">W52-39</a></td><td>26</td><td>26</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='odd'><td><a href=\"/team/game/54/27/77469\">Dec 07, 2012</a></td><td>Beech Grove (10-11)</td><td><a href=\"/team/game/54/27/77469\">W91-33</a></td><td>33</td><td>33</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='even'><td><a href=\"/team/game/54/27/80838\">Dec 08, 2012</a></td><td>@Covenant Christian (Indpls) (5-13)</td><td><a href=\"/team/game/54/27/80838\">W79-37</a></td><td>25</td><td>25</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='odd'><td><a href=\"/team/game/54/27/81766\">Dec 15, 2012</a></td><td>Triton Central (3-18)</td><td><a href=\"/team/game/54/27/81766\">W77-35</a></td><td>33</td><td>33</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='even'><td><a href=\"/team/game/54/27/82251\">Dec 21, 2012</a></td><td>@North Central (Indianapolis) (15-5-1)</td><td><a href=\"/team/game/54/27/82251\">L73-68</a></td><td>40</td><td>40</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='odd'><td><a href=\"/team/game/54/27/82026\">Dec 27, 2012</a></td><td>@Lapel (12-10-1)</td><td><a href=\"/team/game/54/27/82026\">W46-43</a></td><td>27</td><td>27</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='even'><td><a href=\"/team/game/54/27/78797\">Dec 29, 2012</a></td><td>@Tri-West Hendricks (13-9)</td><td><a href=\"/team/game/54/27/78797\">W66-53</a></td><td>34</td><td>34</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='odd'><td><a href=\"/team/game/54/27/80420\">Jan 04, 2013</a></td><td>Heritage Christian (11-11)</td><td><a href=\"/team/game/54/27/80420\">W82-37</a></td><td>19</td><td>19</td><td>4</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td>2</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td>5</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='even'><td><a href=\"/team/game/54/27/82886\">Jan 08, 2013</a></td><td>@Perry Meridian (10-9)</td><td><a href=\"/team/game/54/27/82886\">W51-28</a></td><td>18</td><td>18</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='odd'><td><a href=\"/team/game/54/27/82887\">Jan 09, 2013</a></td><td>Speedway (21-5)</td><td><a href=\"/team/game/54/27/82887\">W81-63</a></td><td>41</td><td>41</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='even'><td><a href=\"/team/game/54/27/83208\">Jan 11, 2013</a></td><td>@Warren Central (7-6)</td><td><a href=\"/team/game/54/27/83208\">W65-57</a></td><td>33</td><td>33</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='odd'><td><a href=\"/team/game/54/27/83046\">Jan 12, 2013</a></td><td>@Pike (23-4)</td><td><a href=\"/team/game/54/27/83046\">W77-76</a></td><td>30</td><td>30</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='even'><td><a href=\"/team/game/54/27/83209\">Jan 15, 2013</a></td><td>Speedway (21-5)</td><td><a href=\"/team/game/54/27/83209\">W81-51</a></td><td>21</td><td>21</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='odd'><td><a href=\"/team/game/54/27/84181\">Jan 22, 2013</a></td><td>Indianapolis Cardinal Ritter (9-10)</td><td><a href=\"/team/game/54/27/84181\">W89-42</a></td><td>22</td><td>22</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='even'><td><a href=\"/team/game/54/27/82610\">Feb 01, 2013</a></td><td>@Brebeuf Jesuit Preparatory (11-10)</td><td><a href=\"/team/game/54/27/82610\">W75-61</a></td><td>36</td><td>36</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='odd'><td><a href=\"/team/game/54/27/84403\">Feb 02, 2013</a></td><td>Martinsville (8-7)</td><td><a href=\"/team/game/54/27/84403\">W75-54</a></td><td>28</td><td>28</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='even'><td><a href=\"/team/game/54/27/84404\">Feb 06, 2013</a></td><td>@Indianapolis Scecina Memorial (9-10)</td><td><a href=\"/team/game/54/27/84404\">W46-32</a></td><td>27</td><td>27</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='odd'><td><a href=\"/team/game/54/27/83538\">Feb 09, 2013</a></td><td>@Indianapolis Broad Ripple (17-8)</td><td><a href=\"/team/game/54/27/83538\">L45-41</a></td><td>24</td><td>24</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='even'><td><a href=\"/team/game/54/27/77802\">Feb 12, 2013</a></td><td>@Indianapolis Lutheran (9-10)</td><td><a href=\"/team/game/54/27/77802\">W56-41</a></td><td>12</td><td>12</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='odd'><td><a href=\"/team/game/54/27/80828\">Feb 15, 2013</a></td><td>@Indianapolis Bishop Chatard (7-15)</td><td><a href=\"/team/game/54/27/80828\">W68-43</a></td><td>26</td><td>26</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='even'><td><a href=\"/team/game/54/27/84712\">Feb 19, 2013</a></td><td>Indianapolis T.C. Howe High School (3-5)</td><td><a href=\"/team/game/54/27/84712\">W65-36</a></td><td>22</td><td>22</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='odd'><td><a href=\"/team/game/54/27/84948\">Feb 26, 2013</a></td><td>@Indianapolis Shortridge (6-7)</td><td><a href=\"/team/game/54/27/84948\">W64-40</a></td><td>34</td><td>34</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td><td class='data-empty'>-</td></tr><tr class='even'><td><a href=\"/team/game/54/27/84819\">Mar 01, 2013</a></td><td>@Indianapolis Broad Ripple (17-8)</td><td><a href=\"/team/game/54/27/84819\">L69-67</a></td><td>30</td><td>30</td><td>3</td><td>8</td><td>37.5</td><td>1</td><td>10</td><td>10</td><td>21</td><td>26</td><td>80.77</td><td>3</td><td>6</td><td>9</td><td>5</td><td>4</td><td>1</td><td>1</td><td>4</td></tr>
</tbody>
</table>

<div class=\"key-wrapper\">
    <div class=\"key-header\">Abbreviations Key</div>
    <div class='key-header'>
        <ul class='key'><li>PTS - Total Points</li><li>PPG - Points Per Game</li><li>2PT - 2-Point Goals</li><li>2PTA - 2-Point Shots</li></ul><ul class='key'><li>2PT% - 2-Point Percentage</li><li>3PT - 3-Point Goals</li><li>3PTA - 3-Point Shots</li><li>3PT% - 3-Point Percentage</li></ul><ul class='key'><li>FT - Free Throws Made</li><li>FTA - Free Throw Attempts</li><li>FT% - Free Throw Percentage</li><li>OR - Offensive Rebounds</li></ul><ul class='key'><li>DR - Defensive Rebounds</li><li>R - Total Rebounds</li><li>A - Assists</li><li>T - Turnovers</li></ul><ul class='key'><li>S - Steals</li><li>B - Blocks</li><li>PF - Personal Fouls</li></ul>    </div>
</div>
    
</div>
</div>
				
					<div class=\"clear\"></div>
								
				</div>
				
		</div>
	
	<div class=\"clear\"></div>
	
</div>			
			<div class=\"banner-ad-footer\">
    
        <div id=\"div-gpt-ad-841079984844464866-4\">
            <script type='text/javascript'>
            googletag.cmd.push(function() {
                googletag.defineSlot('/5727661/Desktop/varvee', [[728, 90]], 'div-gpt-ad-841079984844464866-4')
                .addService(googletag.pubads())
                .setTargeting('pos', ['2']);
                googletag.pubads().enableSingleRequest();
                                googletag.pubads().enableAsyncRendering();
                googletag.pubads().collapseEmptyDivs();
                googletag.enableServices();
                googletag.display('div-gpt-ad-841079984844464866-4');
            });
            </script>
        </div>
    </div>
			
			<div class='clear'></div>
		</div>
			
		<div class=\"wrapper-bottom\">

			<div class=\"bottom-container\">
				<ul class=\"footer-nav\">
					<li><h2>VarVee.com</h2></li>
					<li><a href=\"/faq\">FAQ</a></li><li><a href=\"/how-to-use\">How To Use</a></li><li><a href=\"/alerts\">Create Alerts</a></li>				</ul>
				
				<ul class=\"footer-nav\">
					<li><h2>For Athletes and Fans</h2></li>
					<li><a href=\"/users/signup/\">Benefits and Registration</a></li><li><a href=\"/celebrations\">Celebrate Your Team or Athlete</a></li><li><a href=\"/cheer\">Celebrate Cheer</a></li><li><a href=\"/summaries\">Weekly Rankings & Player Spotlights</a></li>					<li>&nbsp;</li>
					<li><h2>For Coaches</h2></li>
					<li><a href=\"/coaches\">Benefits and Registration</a></li>				</ul>
				
				<ul class=\"footer-nav\">
					<li><h2>For Advertisers</h2></li>
					<li><a href=\"/advertising\">Targeted Advertising Solutions</a></li>					<li>&nbsp;</li>
					<li><h2>For Local Media</h2></li>
					<li><a href=\"/media\">Local Content & Revenue Solutions</a></li>				</ul>
				
				<ul class=\"footer-nav\">
					<li><h2>About Us</h2></li>
					<li><a href=\"/overview\">Overview</a></li><li><a href=\"/our-team\">Our Team</a></li><li><a href=\"/associations\">State Associations</a></li><li><a href=\"/our-partners\">Our Partners</a></li><li><a href=\"/in-the-news\">In The News</a></li><li><a href=\"/careers\">Careers</a></li><li><a href=\"/contact-us\">Contact Us</a></li>				</ul>

				
				<div class=\"clear\"></div>
				
				<div class=\"copyright-wrapper\">
					<img src=\"/img/varvee/varveefooter.gif\" width=\"84\" height=\"49\" alt=\"VarVee Black and White Logo\" />
					<div class=\"text\">&copy; VarVee 2012. All Rights Reserved - <a href=\"/privacy\">Privacy Policy</a> / <a href=\"/terms\">Terms of Use</a></div>
				</div>
			</div>

			<div id=\"hidden-page-link\" style=\"display:none;\"><p>This is an inline test.</p></div>
			
			<div id=\"logout-confirmation\" style=\"display:none;\"><p>Are you sure you wish to log out?</p><a href=\"/users/logout\" class=\"generic-gray-button\">Log Out</a> <a id=\"logout-dialog-close-button\" href=\"#\" class=\"generic-gray-button\">Cancel</a></div>

		</div>
				<script type=\"text/javascript\">
		var gaJsHost = ((\"https:\" == document.location.protocol) ? \"https://ssl.\" : \"http://www.\");
		document.write(unescape(\"%3Cscript src='\" + gaJsHost + \"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E\"));
		</script>
		<!-- www.varvee.com -->            <!-- Quantcast Tag -->
            <script type=\"text/javascript\">
                var _qevents = _qevents || [];

                (function() {
                    var elem = document.createElement('script');
                    elem.src = (document.location.protocol == \"https:\" ? \"https://secure\" : \"http://edge\") + \".quantserve.com/quant.js\";
                    elem.async = true;
                    elem.type = \"text/javascript\";
                    var scpt = document.getElementsByTagName('script')[0];
                    scpt.parentNode.insertBefore(elem, scpt);
                })();

                _qevents.push({
                    qacct:\"p-6GwLjFYLCPGnq\"
                });
            </script>

            <noscript>
                <div style=\"display:none;\">
                    <img src=\"//pixel.quantserve.com/pixel/p-6GwLjFYLCPGnq.gif\" border=\"0\" height=\"1\" width=\"1\" alt=\"Quantcast\"/>
                </div>
            </noscript>
            <!-- End Quantcast tag -->
        		<script type=\"text/javascript\">
		try {
		var pageTracker = _gat._getTracker(\"UA-10037081-2\");
		pageTracker._setDomainName(\".varvee.com\");
		pageTracker._trackPageview();
		} catch(err) {}</script>
		
		
<script type=\"text/javascript\">
		
 //for team leaderboard    
function loadsportbystate(state_id,select_id,defaultvalue,loaderID)
{	
	$('#'+loaderID).html('<img src=\"/img/ajax-loader.gif\">');
	var stateid = $('#'+state_id).val();
	 
	  $.ajax({
			type : \"GET\",
			data:{defaultvalue:defaultvalue,},
			url  : \"/home/selectsport/\"+stateid,
			success : function(opt){
			
			$('#'+select_id).html(opt);
			$('#'+loaderID).html('');  
		}
	});

}
      
</script>	
	</body>

</html>
";

public function getPlayerHtml() {
    return $this->html;
}

?>
