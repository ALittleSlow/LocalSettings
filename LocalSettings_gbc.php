<?php

$wgCookieDomain = ".greatballcontraption.com";

$wgSitename = "The Great Ball Contraption Wiki";
$wgMetaNamespace = "GBC";
$wgPasswordSender = "gbc";
$wgPasswordSenderName = "Great Ball Contraption Wiki";

$wgLogo = "http://images.brickimedia.org/0/05/GBC_logo.png";
$wgFavicon = "http://images.brickimedia.org/favicons/gbc.ico";

$wgLanguageCode = "en";

# Refreshed
$wgRefreshedHeader = array(
	'url' => 'http://greatballcontraption.com/wiki/Main_Page',
	'img' => $refreshedGBC,
	'dropdown' => array(
		'http://meta.brickimedia.org/wiki/Main_Page' => $refreshedMeta,
		'http://en.brickimedia.org/wiki/Main_Page' => $refreshedEn,
		'http://customs.brickimedia.org/wiki/Main_Page' => $refreshedCustoms,
		'http://ideas.brickimedia.org/wiki/Main_Page' => $refreshedIdeas
	)
);

#SocialProfile
$wgUserStatsPointValues['edit'] = 5; // Points awarded on a mainspace edit
$wgUserStatsPointValues['vote'] = 1; // Points awarded for voting for an article
$wgUserStatsPointValues['comment'] = 1; // Points awarded for leaving a comment
$wgUserStatsPointValues['comment_plus'] = 2; // Points awarded if your comment gets a thumbs up
$wgUserStatsPointValues['comment_ignored'] = 0; // Points awarded if another user ignores your comments
$wgUserStatsPointValues['opinions_created'] = 5; // Points awarded for writing a blog article
$wgUserStatsPointValues['opinions_pub'] = 10; // Points awarded for having that article hit the "Blogs" page
$wgUserStatsPointValues['referral_complete'] = 0; // Points awarded for recruiting a new user
$wgUserStatsPointValues['friend'] = 1; // Points awarded for adding a friend
$wgUserStatsPointValues['foe'] = 0; // Points awarded for adding a foe
$wgUserStatsPointValues['gift_rec'] = 10; // Points awarded for receiving a gift
$wgUserStatsPointValues['gift_sent'] = 0; // Points awarded for giving a gift
$wgUserStatsPointValues['points_winner_weekly'] = 20; // Points awarded for having the most points for a week
$wgUserStatsPointValues['points_winner_monthly'] = 50; // Points awarded for having the most points for a month
$wgUserStatsPointValues['user_image'] = 5; // Points awarded for adding your first avatar
$wgUserStatsPointValues['poll_vote'] = 0; // Points awarded for taking a poll
$wgUserStatsPointValues['quiz_points'] = 0; // Points awarded for answering a quiz question
$wgUserStatsPointValues['quiz_created'] = 0; // Points awarded for creating a quiz question
$wgNamespacesForEditPoints = array( 0 ); // Array of namespaces that can earn you points.
// The actual user level definitions -- key is simple: 'Level name' => points needed
$wgUserLevels = array(
	'Newcomer' => 0,
	'Explorer' => 500,
	'Intrepid Explorer' => 1000,
	'Zealous Explorer' => 1500,
	'Contributor' => 2000,
	'Dedicated Contributor' => 2500,
	'Loquacious Contributor' => 5000,
	'Outstanding Contributor' => 7500,
	'Contraptionist' => 10000,
	'Outstanding Contraptionist' => 12500,
	'Outstanding Ball Contraptionist' => 15000,
	'Legendary Ball Contraptionist' => 20000,
	'Great Ball Contraptionist' => 25000,
);
$wgUserProfileDisplay['stats'] = true;
