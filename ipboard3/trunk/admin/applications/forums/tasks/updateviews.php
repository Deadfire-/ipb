<?php

/**
 * <pre>
 * Invision Power Services
 * IP.Board v3.1.2
 * Task: Update topic views
 * Last Updated: $LastChangedDate: 2010-01-15 10:18:44 -0500 (Fri, 15 Jan 2010) $
 * </pre>
 *
 * @author 		$Author: bfarber $
 * @copyright	(c) 2001 - 2009 Invision Power Services, Inc.
 * @license		http://www.invisionpower.com/community/board/license.html
 * @package		IP.Board
 * @subpackage	Forums
 * @link		http://www.invisionpower.com
 * @since		27th January 2004
 * @version		$Rev: 5713 $
 */

if ( ! defined( 'IN_IPB' ) )
{
	print "<h1>Incorrect access</h1>You cannot access this file directly. If you have recently upgraded, make sure you upgraded all the relevant files.";
	exit();
}

class task_item
{
	/**
	* Parent task manager class
	*
	* @access	protected
	* @var		object
	*/
	protected $class;

	/**
	* This task data
	*
	* @access	protected
	* @var		array
	*/
	protected $task			= array();

	/**
	* Prevent logging
	*
	* @access	protected
	* @var		boolean
	*/
	protected $restrict_log	= false;
	
	/**
	* Registry Object Shortcuts
	*/
	protected $registry;
	protected $DB;
	protected $settings;
	protected $request;
	protected $lang;
	protected $member;
	protected $cache;
	
	/**
	* Constructor
	*
	* @access	public
	* @param 	object		ipsRegistry reference
	* @param 	object		Parent task class
	* @param	array 		This task data
	* @return	void
	*/
	public function __construct( ipsRegistry $registry, $class, $task )
	{
		/* Make registry objects */
		$this->registry	= $registry;
		$this->DB		= $this->registry->DB();
		$this->settings =& $this->registry->fetchSettings();
		$this->request  =& $this->registry->fetchRequest();
		$this->lang		= $this->registry->getClass('class_localization');
		$this->member	= $this->registry->member();
		$this->memberData =& $this->registry->member()->fetchMemberData();
		$this->cache	= $this->registry->cache();
		$this->caches   =& $this->registry->cache()->fetchCaches();

		$this->class	= $class;
		$this->task		= $task;
	}
	
	/**
	* Run this task
	*
	* @access	public
	* @return	void
	*/
	public function runTask()
	{
		$this->registry->getClass('class_localization')->loadLanguageFile( array( 'public_global' ), 'core' );
		
		//-----------------------------------------
		// Enabled?
		//-----------------------------------------
		
		if ( ! $this->settings['update_topic_views_immediately'] )
		{
			//-----------------------------------------
			// Attempt to prevent timeout...
			//-----------------------------------------
			
			$timeStart	= time();
			$ids		= array();
			$complete	= true;
			
			//-----------------------------------------
			// Get SQL query
			//-----------------------------------------
			
			$this->DB->build( array( 'select'	=> 'views_tid, COUNT(*) as topicviews',
											'from'	=> 'topic_views',
											'group'	=> 'views_tid',
								)		);
			$o = $this->DB->execute();
			
			while( $r = $this->DB->fetch( $o ) )
			{
				//-----------------------------------------
				// Update...
				//-----------------------------------------
				
				$this->DB->update( 'topics', 'views=views+' . intval( $r['topicviews'] ), "tid=" . intval($r['views_tid']), false, true );
				
				$ids[]	= $r['views_tid'];
				
				//-----------------------------------------
				// Running longer than 30 seconds?
				//-----------------------------------------
				
				if( time() - $timeStart > 30 )
				{
					$complete	= false;
					break;
				}
			}
			
			//-----------------------------------------
			// Delete from table
			//-----------------------------------------
			
			if( !$complete )
			{
				if( count($ids) )
				{
					$this->DB->delete( 'topic_views', 'views_tid IN(' . implode( ',', $ids ) . ')' );
				}
			}
			else
			{
				$this->DB->delete( 'topic_views' );
			}
			
			//-----------------------------------------
			// Log to log table - modify but dont delete
			//-----------------------------------------
			
			$this->class->appendTaskLog( $this->task, $this->lang->words['task_updateviews'] );
		}
		
		//-----------------------------------------
		// Unlock Task: DO NOT MODIFY!
		//-----------------------------------------
		
		$this->class->unlockTask( $this->task );
	}

}