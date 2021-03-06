<?php

/**
 * <pre>
 * Invision Power Services
 * IP.Board v3.1.2
 * Forums -> Mark As Read command class
 * Last Updated: $Date: 2010-04-06 07:02:13 -0400 (Tue, 06 Apr 2010) $
 * </pre>
 *
 * @author 		Matt Mecham
 * @copyright	(c) 2001 - 2009 Invision Power Services, Inc.
 * @license		http://www.invisionpower.com/community/board/license.html
 * @package		IP.Board
 * @subpackage	Forums
 * @link		http://www.invisionpower.com
 * @since		Tuesday 1st March 2005 (11:52)
 * @version		$Rev: 6069 $
 *
 */

if ( ! defined( 'IN_IPB' ) )
{
	print "<h1>Incorrect access</h1>You cannot access this file directly. If you have recently upgraded, make sure you upgraded all the relevant files.";
	exit();
}

class public_forums_forums_markasread extends ipsCommand
{
	/**
	 * Main execution point
	 *
	 * @access	public
	 * @param	object	ipsRegistry reference
	 * @return	void
	 */
	public function doExecute( ipsRegistry $registry )
	{
		//-----------------------------------------
		// What are we doing?
		//-----------------------------------------
		
		switch( $this->request['marktype'] )
		{
			default:
			case 'forum':
				return $this->markForumAsRead();
			break;
			case 'all':
				return $this->markBoardAsRead();
		}
	}
	
	/**
	 * Mark all forums and topics as read
	 *
	 * @access	public
	 * @return	void
	 */
 	public function markBoardAsRead()
 	{
        //-----------------------------------------
        // Check
        //-----------------------------------------
        
        if ( $this->request['k'] != $this->member->form_hash )
        {
        	$this->registry->getClass('output')->showError( 'no_permission', 20312, null, null, 403 );
        }

		/* Turn off instant updates and write back tmp markers in destructor */
		$this->registry->classItemMarking->disableInstantSave();
        
		//-----------------------------------------
        // Reset board markers
        //-----------------------------------------
        
		/*foreach( ipsRegistry::$applications as $app_dir => $data )
		{
			if ( isset( $data['app_enabled'] ) AND $data['app_enabled'] )
			{
				$this->registry->classItemMarking->markAppAsRead( $app_dir );
			}
		}*/
		
		# Bug fix 21223 - reset all markers with one cookie save
		$this->registry->classItemMarking->markAppAsRead();

		$this->registry->getClass('output')->silentRedirect( $this->settings['base_url'] . 'act=idx', 'false' );
	}
	
	/**
	 * Marks the specified forum as read
	 *
	 * @access	public
	 * @return	void
	 **/
	public function markForumAsRead()
	{
		//-----------------------------------------
    	// INIT
    	//-----------------------------------------
    	
		$forum_id      = intval( $this->request['forumid'] );
        $return_to_id  = intval( $this->request['returntoforumid'] );
        $forum_data    = $this->registry->getClass('class_forums')->forum_by_id[ $forum_id ];
        $children      = $this->registry->getClass('class_forums')->forumsGetChildren( $forum_data['id'] );
        $save          = array();
        
        //-----------------------------------------
        // Check
        //-----------------------------------------
        
        if ( ! $forum_data['id'] )
        {
        	$this->registry->getClass('output')->showError( 'markread_no_id', 10340, null, null, 404 );
        }

		/* Turn off instant updates and write back tmp markers in destructor */
		$this->registry->classItemMarking->disableInstantSave();
        
        //-----------------------------------------
        // Come from the index? Add kids
        //-----------------------------------------
       
        if ( $this->request['i'] )
        {
			if ( is_array( $children ) and count($children) )
			{
				foreach( $children as $id )
				{
					$this->registry->classItemMarking->markRead( array( 'forumID' => $id ) );
				}
			}
        }
        
        //-----------------------------------------
        // Add in the current forum...
        //-----------------------------------------
        
        $this->registry->classItemMarking->markRead( array( 'forumID' => $forum_id ) );
        
		//-----------------------------------------	
        // Where are we going back to?
        //-----------------------------------------
        
        if ( $return_to_id )
        {
        	$parent_data	= $this->registry->getClass('class_forums')->forum_by_id[ $return_to_id ];
        	
        	//-----------------------------------------
        	// Its a sub forum, lets go redirect to parent forum
        	//-----------------------------------------
        	
        	$this->registry->getClass('output')->silentRedirect( $this->settings['base_url']."showforum=".$return_to_id, $parent_data['name_seo'] );
        }
        else
        {
        	$this->registry->getClass('output')->silentRedirect( $this->settings['base_url'] . 'act=idx', 'false' );
        }
	}
       
}
