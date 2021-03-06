<?php

$wgSitename = "Brickimedia Customs";
$wgMetaNamespace = "Customs";
$wgNamespaceAliases['BC'] = NS_PROJECT;
$wgNamespacesWithSubpages[NS_PROJECT] = true;
$wgPasswordSender = "customs";
$wgPasswordSenderName = "Brickimedia Customs";

$wgLogo = "http://images.brickimedia.org/4/4e/Customs-Logo.png";
$wgFavicon = "http://images.brickimedia.org/favicons/favicon.ico";

$wgLanguageCode = "en";
$wgDefaultSkin = 'refreshed';

//ArticleRatings
require_once( "$IP/extensions/ARE/ArticleRatings.php" );

$wgAddGroups['bureaucrat'] = array( 'sysop', 'bot', 'rollback', 'patroller', 'bureaucrat', 'reviewer' );
$wgRemoveGroups['bureaucrat'] = array( 'sysop', 'bot', 'rollback', 'patroller', 'reviewer' );
$wgAddGroups['reviewer'][] = 'reviewer'; //Allow CQM users to add other members to that group
$wgRemoveGroups['reviewer'][] = 'reviewer'; //Allow CQM users to remove other members to that group
$wgAddGroups['sysop'][] = 'reviewer';
$wgRemoveGroups['sysop'][] ='reviewer';
$wgGroupPermissions['sysop']['change-rating'] = true;

//Semantic MediaWiki -- Do not touch unless you know what you are doing
require_once( "$IP/extensions/Validator/Validator.php" );
include_once( "$IP/extensions/SemanticMediaWiki/SemanticMediaWiki.php" );
enableSemantics('customs.brickimedia.org');

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
$wgNamespacesForEditPoints = array( 0, ); // Array of namespaces that can earn you points. Use numerical keys. 0 is mainspace, 4 is project
// The actual user level definitions -- key is simple: 'Level name' => points needed
$wgUserLevels = array(
	'Newcomer' => 0,
	'Beginner' => 500,
	'Novice' => 1000,
	'Amateur' => 1500,
	'Thinking With Bricks' => 2000,
	'Bricktastic' => 2500,
	'Building Bigger' => 5000,
	'Brick Master' => 7500,
	'Master Builder' => 10000,
	'LEGO Wizard' => 12500,
	'Outstanding Brickimedian' => 15000,
	'Honorable Brickimedian' => 20000,
	'Legendary Brickimedian' => 25000,
);
$wgUserProfileDisplay['stats'] = true;

#global file descriptors
require_once("$IP/extensions/GlobalUsage/GlobalUsage.php");

# Refreshed
$wgRefreshedHeader = array(
	'url' => 'http://customs.brickimedia.org/wiki/Main_Page',
	'img' => $refreshedCustoms,
	'dropdown' => array(
		'http://meta.brickimedia.org/wiki/Main_Page' => $refreshedMeta,
		'http://en.brickimedia.org/wiki/Main_Page' => $refreshedEn,
		'http://stories.brickimedia.org/wiki/Main_Page' => $refreshedStories,
		'http://ideas.brickimedia.org/wiki/Main_Page' => $refreshedIdeas,
		//'http://books.brickimedia.org/wiki/Main_Page' => $refreshedBooks,
		//'http://minifigures.brickimedia.org/wiki/Main_Page' => $refreshedMinifigures,
	)
);

# #brickimedia-rc-customs IRC
$wgRC2UDPAddress = '127.0.0.1';
$wgRC2UDPPort = '51660';
$wgRC2UDPPrefix = "";
