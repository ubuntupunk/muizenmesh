<?php

/*
 * Project name: Flatboard
 * Project URL: http://flatboard.free.fr
 * Author: Frédéric Kaplon and contributors
 * All Flatboard code is released under the MIT license.
*/

$out['self'] = 'view';
require_once __DIR__ . '/' . 'header.php';
/**
 * AFFICHE UNE DISCUSSION
 **/
if(Util::isGETValidEntry('topic', 'topic'))
{
	$cur = 'viewTopic'; # Indicateur de page	
	$topicEntry = flatDB::readEntry('topic', $_GET['topic']);
	$forumEntry = flatDB::readEntry('forum', $topicEntry['forum']);
	# Fix for old forum categories id's
	$forumEntry = isset($forumEntry) ? $forumEntry : null;
	# Boutton de signalement pour le sujet
	#$report =(function_exists('mail') ? ' <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalTopicReport'.$_GET['topic'].'"><i class="fa fa-exclamation-triangle" data-toggle="tooltip" data-placement="top" title="' .$lang['report']. '"></i></button>' : '');	
	$report =(function_exists('mail') ? ' <a href="add.php' . DS . 'report' . DS . $_GET['topic']. '" class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="' .$lang['report']. '"><i class="fa fa-exclamation-triangle"></i></a>' : '');	
	$role = (!$topicEntry['role'] == '' ? $topicEntry['role'] : 'admin');
	$mail = (!empty($topicEntry['mail']) ? '<p><span class="badge badge-dark"><i class="fa fa-envelope-o" aria-hidden="true"></i> ' .$topicEntry['mail']. '</span></p>' : '');	
	$getTopic = (isset($forumEntry['pinnedTopic'][$_GET['topic']]) ? $forumEntry['pinnedTopic'][$_GET['topic']] : null);
	$tag = isset($topicEntry['tag']) ? $topicEntry['tag'] : '';
	$lastedited = isset($topicEntry['lastedit']) ? '<hr/><span class="text-muted"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> ' .$lang['last_modified'].date($config['date_format'], strtotime($topicEntry['lastedit'])). '</span>' : '';
	
	# Topic view++
	$topicEntry['view']++;
	flatDB::saveEntry('topic', $_GET['topic'], $topicEntry);

	$out['subtitle'] = $topicEntry['title'];
	# Template viewTopic.tpl.php
	require THEME_DIR . $config['theme'] . DS . $cur . '.tpl.php';
              
	# AFFICHAGE DES RÉPONSES	
    asort($topicEntry['reply']);
    $nb = $config['ItemByPage'];
	$total = Paginate::countPage($topicEntry['reply'], $nb);
	$p = Paginate::pid($total);
	if($topicEntry['reply'])
	{
		$out['content'] .= 
		'<h5 class="lead text-center text-uppercase">
				' .Util::pluralize(count($topicEntry['reply']), $lang['replies'], $lang['reply']). ' <span class="badge badge-pill badge-secondary">' .(count($topicEntry['reply'])). '</span>
		</h5>';
		foreach(Paginate::viewPage($topicEntry['reply'], $p, $nb) as $reply)
		{
			$replyEntry = flatDB::readEntry('reply', $reply);
			$mailReply = (!empty($replyEntry['mail']) ? '<p><span class="badge badge-dark"><i class="fa fa-envelope-o" aria-hidden="true"></i> ' .$replyEntry['mail']. '</span></p>' : '');				
			$lastReplyEdited = isset($replyEntry['lastedit']) ? '<hr/><span class="text-muted"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> ' .$lang['last_modified'].date($config['date_format'], strtotime($replyEntry['lastedit'])). '</span>' : '';
			
			# Template viewReply.tpl.php
			require THEME_DIR . $config['theme'] . DS . 'viewReply.tpl.php';						
		}
	}
	/**
	 * PAGINATION
	 **/
	$out['content'] .= Paginate::pageLink($p, $total, 'view.php' . DS . 'topic' . DS . $_GET['topic']);
	/**
	 * ON AFFICHE LE FORMULAIRE DE REPONSE SI LA DISCUSSION N'EST PAS FERMÉE
	 **/
	if(!$topicEntry['locked']) 
		require THEME_DIR . $config['theme'] . DS . 'replyFormCollapse.tpl.php';

	/**
	 * SUGGESTIONS DE SUJETS
	 **/	
    $out['content'] .= '
    <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="text-left border-bottom border-gray pb-2 mb-0">
        	' .$lang['thread_sug']. '
        </h6>';
	$topics = flatDB::listEntry('topic');
	shuffle($topics);
	foreach(array_slice($topics, 0, 4) as $topic)
	{
		$topicEntry = flatDB::readEntry('topic', $topic);
		$forumEntry = flatDB::readEntry('forum', $topicEntry['forum']);
		$tagSuggest = isset($topicEntry['tag']) ? $topicEntry['tag'] : '';
		
		# Template viewSuggestedTopic.tpl.php
		require THEME_DIR . $config['theme'] . DS . 'viewSuggestedTopic.tpl.php';			
	}
	$out['content'] .= '
		<h6 class="text-center p-2">' .$lang['want_more']. '</h6>
    </div>';
}
/**
 * AFFICHE LA LISTE DES SUJETS D’UN FORUM
 **/
else if(Util::isGETValidEntry('forum', 'forum'))
{
	$cur = 'viewForum'; # Indicateur de page
	$forumEntry = flatDB::readEntry('forum', $_GET['forum']);
	$out['subtitle'] = $forumEntry['name'];
	$out['sub_prefix'] = entryLink::manageForum($_GET['forum']);	
	$pinned = $forumEntry['pinnedTopic'];
	$pinnedTopic = array_diff($forumEntry['topic'], $pinned);
	rsort($pinned);		
	$topics = array_merge($pinned, array_reverse($pinnedTopic));	
	
    $nb = $config['ItemByPage'];
	$total = Paginate::countPage($topics, $nb);
	$p = Paginate::pid($total);

	if($topics)
	{
		$out['content'] .= '
		<div class="my-3 p-3 bg-white rounded box-shadow">';
			foreach(Paginate::viewPage($topics, $p, $nb) as $topic)
			{
				$topicEntry = flatDB::readEntry('topic', $topic);
				$tag = isset($topicEntry['tag']) ? '&nbsp;<a href="search.php?topic=' .$topicEntry['tag']. '">' .Parser::title($topicEntry['tag']). '</a>' : '';
				$lastedited = isset($topicEntry['lastedit']) ? '<br /><small><i class="fa fa-pencil-square-o" aria-hidden="true"></i> ' .$lang['last_modified'].date($config['date_format'], strtotime($topicEntry['lastedit'])). '</small>' : '';

				# Template viewForum.tpl.php
				require THEME_DIR . $config['theme'] . DS . 'viewForum.tpl.php';								
			}
			$out['content'] .= Paginate::pageLink($p, $total, 'view.php' . DS . 'forum' . DS . $_GET['forum']).'		
		</div><!-- /.columns -->';
	}
	
}
/**
 * AFFICHE LA PAGE DU PLUGIN
 **/
else if(Util::isGETValidHook('view', 'plugin'))
{
	$plugin = (isset($_GET['plugin']) ? $_GET['plugin'] : null);
	$cur = $plugin; # Indicateur de page
	$subtitle = (isset($plugin) ? $lang[$plugin.'name'] : null);
	# Lecture des données
	$data = flatDB::readEntry('plugin', $plugin);
	if ($data[$plugin.'state'])	{
		$out['subtitle'] = $subtitle;
		$out['content'] .= Plugin::myHook('view', $plugin);
	} else {
		$out['subtitle'] = $lang['error'];
		$out['content'] .= $lang['no_plugin'];		
	}
}
/**
 * RETURN LA PAGE 404
 **/
else
{
	Util::redirect('index.php' . DS . '404');
}

require PATH_ROOT . DS . 'footer.php';

?>