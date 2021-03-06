<?php

//----- SET UP CUSTOM HEADERS AND FOOTERS HERE --//

$lang['header'] = "";

$lang['footer'] = <<<EOF

Regards,

The <#BOARD_NAME#> team.
<#BOARD_ADDRESS#>

EOF;


//-------------------------------
// Admin created account notification
//-------------------------------

$lang['subject__account_created'] = 'Your account has been created';
$lang['account_created'] = <<<EOF
<#NAME#>,

Your account has been created succesfully at <#BOARD_NAME#>.

If we were waiting on a parental consent form, this means the form has been received and documented.

Your details are as follows:

Username: <#NAME#>
Email Address: <#EMAIL#>
Password: <#PASSWORD#>

Please be aware that we do not store a plain text copy of your password, and you can change your password at any time through your control panel on the site.

Visit this link to join into our discussions!

<#BOARD_ADDRESS#>

EOF;



/*------------------------------------------------------------------------------------*/
// IPB 2.2.0
/*------------------------------------------------------------------------------------*/

//-------------------------------
// MODERATED: Add Friend Done
//-------------------------------

$lang['subject__new_friend_approved'] = 'New Friend Approved';
$lang['new_friend_approved'] = <<<EOF
<#MEMBERS_DISPLAY_NAME#>,

<#FRIEND_NAME#> has approved your friend request!

Log in and then manage your friends: <#LINK#>

EOF;

//-------------------------------
// MODERATED: Add Friend
//-------------------------------

$lang['subject__new_friend_request'] = 'New Friend Request';
$lang['new_friend_request'] = <<<EOF
<#MEMBERS_DISPLAY_NAME#>,

<#FRIEND_NAME#> wants to be your friend!

This message has been sent because <#FRIEND_NAME#> has added you to their friends
list. As you've chosen to approve all friend requests, you will need to visit your
friends list and approve them.

Log in and then manage your friends: <#LINK#>

EOF;

//-------------------------------
// Friend added
//-------------------------------

$lang['subject__new_friend_added'] = 'Friend Added';
$lang['new_friend_added'] = <<<EOF
<#MEMBERS_DISPLAY_NAME#>,

<#FRIEND_NAME#> has successfully added you to their friends list.

Manage your friends: <#LINK#>

EOF;

//-------------------------------
// MODERATED: Add Friend
//-------------------------------

$lang['subject__new_comment_request'] = 'New Comment Pending Approval';
$lang['new_comment_request'] = <<<EOF
<#MEMBERS_DISPLAY_NAME#>,

<#COMMENT_NAME#> has left you a comment that requires your approval.

This message has been sent because <#COMMENT_NAME#> has posted a comment on your profile.
As you've chosen to approve all new comments the new comment will not appear on your
profile until it's been approved.

Log in and then manage your comments: <#LINK#>

EOF;

//-------------------------------
// Friend added
//-------------------------------

$lang['subject__new_comment_added'] = 'New Comment';
$lang['new_comment_added'] = <<<EOF
<#MEMBERS_DISPLAY_NAME#>,

<#COMMENT_NAME#> has left you a comment.

This message has been sent because <#COMMENT_NAME#> has posted a new comment to your profile.

Manage your comments: <#LINK#>

EOF;

/*------------------------------------------------------------------------------------*/
// SUBSCRIPTIONS
/*------------------------------------------------------------------------------------*/

//-------------------------------
// NEW PAID SUBSCRIPTION
//-------------------------------


$lang['subject__new_subscription'] = 'New Subscription Purchase';
$lang['new_subscription'] = <<<EOF
Hello!

This email has been sent from: <#BOARD_NAME#> as confirmation of your
subscription purchase.

----------------------------------
Package Purchased: <#PACKAGE#>
Package Expires: <#EXPIRES#>
Subscriptions: <#LINK#>
----------------------------------

EOF;

//-------------------------------
// SUBSCRIPTION EXPIRES
//-------------------------------

$lang['subject__subscription_expires'] = 'Subscription Expiration';
$lang['subscription_expires'] = <<<EOF
Hello!

This email has been sent from: <#BOARD_NAME#> to remind you that your
subscription is due to expire soon.

----------------------------------
Package Purchased: <#PACKAGE#>
Package Expires: <#EXPIRES#>
Subscriptions: <#LINK#>
----------------------------------

If you wish to continue with your subscription, please re-purchase the subscription
when your current subscription expires.

If you wish to allow your subscription to expire, you do not need to do anything.

EOF;

$lang['subject__subscription_expires_recurring'] = 'Subscription Expiration';
$lang['subscription_expires_recurring'] = <<<EOF
Hello!

This email has been sent from: <#BOARD_NAME#> to remind you that your
subscription is due to expire soon.

----------------------------------
Package Purchased: <#PACKAGE#>
Package Expires: <#EXPIRES#>
Subscriptions: <#LINK#>
----------------------------------

If you wish to continue your subscription you do not need to do anything.  You should be 
automatically billed for the subscription.

If you wish to cancel your subscription you should log in to your account and cancel it before
it expires.  For example, PayPal users would need to log in to their PayPal account and cancel
the subscription from there.

EOF;


//-------------------------------
// NEW MOD __TOPIC__
//-------------------------------


$lang['subject__new_topic_queue_notify'] = 'New Topic Awaiting Approval';
$lang['new_topic_queue_notify'] = <<<EOF
Hello!

This email has been sent from: <#BOARD_NAME#>.

A new topic has been entered into the moderation queue and is awaiting
approval.

----------------------------------
Topic: <#TOPIC#>
Forum: <#FORUM#>
Author: <#POSTER#>
Time: <#DATE#>
Manage Queue: <#LINK#>
----------------------------------

If you no longer require notification, you can stop these emails by simply
removing your email address from the forum settings options.

<#BOARD_ADDRESS#>


EOF;

//-------------------------------
// NEW MOD __POST__
//-------------------------------


$lang['subject__new_post_queue_notify'] = 'New Post Awaiting Approval';
$lang['new_post_queue_notify'] = <<<EOF
Hello!

This email has been sent from: <#BOARD_NAME#>.

A new post has been entered into the moderation queue and is awaiting
approval.

----------------------------------
Topic: <#TOPIC#>
Forum: <#FORUM#>
Author: <#POSTER#>
Time: <#DATE#>
Manage Queue: <#LINK#>
----------------------------------

If you no longer require notification, you can stop these emails by simply
removing your email address from the forum settings options.

<#BOARD_ADDRESS#>


EOF;

//-------------------------------
// FORUM: WEEKLY
//-------------------------------


$lang['subject__digest_forum_weekly'] = 'Your weekly new topics digest';
$lang['digest_forum_weekly'] = <<<EOF
<#NAME#>,

This is the digest of this weeks posts in forum <#NAME#>.

----------------------------------------------------------------------



<#CONTENT#>




----------------------------------------------------------------------

The topic can be found here:
<#BOARD_ADDRESS#>?showtopic=<#TOPIC_ID#>&view=getnewpost

Unsubscribing:
--------------

You can unsubscribe at any time by logging into your control panel and clicking on the "View Topics" link.

EOF;

//-------------------------------
// FORUM: DAILY
//-------------------------------


$lang['subject__digest_forum_daily'] = 'Your daily new topics digest';
$lang['digest_forum_daily'] = <<<EOF
<#NAME#>,

This your daily new topics digest!

----------------------------------------------------------------------



<#CONTENT#>




----------------------------------------------------------------------

The forum can be found here:
<#BOARD_ADDRESS#>?showforum=<#FORUM_ID#>

Unsubscribing:
--------------

You can unsubscribe at any time by logging into your control panel and clicking on the "View Forums" link.

EOF;


//-------------------------------
// TOPIC: WEEKLY
//-------------------------------


$lang['subject__digest_topic_weekly'] = 'Your weekly new posts digest';
$lang['digest_topic_weekly'] = <<<EOF
<#NAME#>,

This your weekly new topics digest!

----------------------------------------------------------------------



<#CONTENT#>




----------------------------------------------------------------------

The forum can be found here:
<#BOARD_ADDRESS#>?showforum=<#FORUM_ID#>

Unsubscribing:
--------------

You can unsubscribe at any time by logging into your control panel and clicking on the "View Forums" link.

EOF;

//-------------------------------
// TOPIC: DAILY
//-------------------------------


$lang['subject__digest_topic_daily'] = 'Your daily new posts digest';
$lang['digest_topic_daily'] = <<<EOF
<#NAME#>,

This is the digest of posts in topic "<#TITLE#>" for today.

----------------------------------------------------------------------



<#CONTENT#>




----------------------------------------------------------------------

The topic can be found here:
<#BOARD_ADDRESS#>?showtopic=<#TOPIC_ID#>&view=getnewpost

Unsubscribing:
--------------

You can unsubscribe at any time by logging into your control panel and clicking on the "View Topics" link.

EOF;



//----------


$lang['subject__pm_notify'] = 'You have a new personal message';
$lang['pm_notify'] = <<<EOF
<#NAME#>,

<#POSTER#> has sent you a new personal message titled "<#TITLE#>".

You can read this personal message by following the link below:

<#BOARD_ADDRESS#><#LINK#>


EOF;



$lang['send_text']	= <<<EOF
I thought you might be interested in reading this web page: <#THE LINK#>

From,

<#USER NAME#>

EOF;


$lang['report_post'] = <<<EOF

<#MOD_NAME#>,

You have been sent this communication from <#USERNAME#> via the "Report this post to a moderator" link.

------------------------------------------------
Topic: <#TOPIC#>
------------------------------------------------

Link to post: <#LINK_TO_POST#> 

------------------------------------------------
Report:

<#REPORT#>

------------------------------------------------

EOF;



$lang['pm_archive'] = <<<EOF

<#NAME#>,
This email has been sent from <#BOARD_ADDRESS#>.

Your archived messages have been compiled into a single
file and has been attached to this message.

EOF;

$lang['reg_validate'] = <<<EOF

<#NAME#>,
This email has been sent from <#BOARD_ADDRESS#>.

You have received this email because this email address
was used during registration for our forums.
If you did not register at our forums, please disregard this
email. You do not need to unsubscribe or take any further action.

------------------------------------------------
Activation Instructions
------------------------------------------------

Thank you for registering.
We require that you "validate" your registration to ensure that
the email address you entered was correct. This protects against
unwanted spam and malicious abuse.

To activate your account, simply click on the following link:

<#THE_LINK#>

(AOL Email users may need to copy and paste the link into your web
browser).

------------------------------------------------
Not working?
------------------------------------------------

If you could not validate your registration by clicking on the link, please
visit this page:

<#MAN_LINK#>

It will ask you for a user id number, and your validation key. These are shown
below:

User ID: <#ID#>

Validation Key: <#CODE#>

Please copy and paste, or type those numbers into the corresponding fields in the form.

If you still cannot validate your account, it's possible that the account has been removed.
If this is the case, please contact an administrator to rectify the problem.

Thank you for registering and enjoy your stay!

EOF;

$lang['admin_newuser'] = <<<EOF

Hello,

You have received this email because a new user has registered!

<#MEMBER_NAME#> completed their registration on <#DATE#>

You can turn off user notification in the Admin Control Panel

Have a super day!

EOF;

$lang['lost_pass'] = <<<EOF

<#NAME#>,
This email has been sent from <#BOARD_ADDRESS#>.

You have received this email because a user account password recovery
was instigated by you on <#BOARD_NAME#>.

------------------------------------------------
IMPORTANT!
------------------------------------------------

If you did not request this password change, please IGNORE and DELETE this
email immediately. Only continue if you wish your password to be reset!

------------------------------------------------
Activation Instructions Below
------------------------------------------------

We require that you "validate" your password recovery to ensure that
you instigated this action. This protects against
unwanted spam and malicious abuse.

Simply click on the link below and complete the rest of the form

<#THE_LINK#>

(AOL Email users may need to copy and paste the link into your web
browser).

------------------------------------------------
Not working?
------------------------------------------------

If you could not validate your registration by clicking on the link, please
visit this page:

<#MAN_LINK#>

It will ask you for a user id number, and your validation key. These are shown
below:

User ID: <#ID#>

Validation Key: <#CODE#>

Please copy and paste, or type those numbers into the corresponding fields in the form.

------------------------------------------------
Is this not working?
------------------------------------------------

If you cannot re-activate your account, it's possible that the account has been removed or you
are in the process of another activation, such as registering or changing your registered email address.
If this is the case, then please complete the previous activation.
If the error persists, please contact an administrator to rectify the problem.

IP address of sender: <#IP_ADDRESS#>


EOF;


$lang['lost_pass_email_pass'] = <<<EOF

<#NAME#>,
This email has been sent from <#BOARD_ADDRESS#>.

This email completes your lost password request.

------------------------------------------------
YOUR NEW PASSWORD
------------------------------------------------

Your username is: <#USERNAME#>
Your email address is: <#EMAIL#>
Your new password is: <#PASSWORD#>

Log in here: <#LOGIN#>

Please be careful to use the correct information (username or email address) to login to the site.

------------------------------------------------
CHANGING YOUR PASSWORD
------------------------------------------------

Once you've logged in, you can visit your UserCP to
change your password.

UserCP: <#THE_LINK#>


EOF;






$lang['newemail'] = <<<EOF

<#NAME#>,
This email has been sent from <#BOARD_ADDRESS#>.

You have received this email because you requested an
email address change.

------------------------------------------------
Activation Instructions Below
------------------------------------------------

We require that you "validate" your email address change to ensure that
you instigated this action. This protects against
unwanted spam and malicious abuse.

To activate your account, simply click on the following link:

<#THE_LINK#>

(AOL Email users may need to copy and paste the link into your web
browser).

------------------------------------------------
Not working?
------------------------------------------------

If you could not validate your registration by clicking on the link, please
visit this page:

<#MAN_LINK#>

It will ask you for a user id number, and your validation key. These are shown
below:

User ID: <#ID#>

Validation Key: <#CODE#>

Please copy and paste, or type those numbers into the corresponding fields in the form.

Once the activation is complete, you may need to log back in to update your member group
permissions.

------------------------------------------------
Help! I get an error!
------------------------------------------------

If you cannot re-activate your account, it's possible that the account has been removed or you
are in the process of another activation, such as registering or changing your registered email address.
If this is the case, then please complete the previous activation.
If the error persists, please contact an administrator to rectify the problem.


EOF;

$lang['forward_page'] = <<<EOF

<#TO_NAME#>


<#THE_MESSAGE#>

---------------------------------------------------
Please note that <#BOARD_NAME#> has no control over the
contents of this message.
---------------------------------------------------

EOF;

$lang['subject__subs_with_post'] = 'Topic Subscription Reply Notification';

$lang['subs_with_post'] = <<<EOF
<#NAME#>,

<#POSTER#> has just posted a reply to a topic that you have subscribed to titled "<#TITLE#>".

----------------------------------------------------------------------
<#POST#>
----------------------------------------------------------------------

The topic can be found here:
<#BOARD_ADDRESS#>?showtopic=<#TOPIC_ID#>&view=getnewpost



If you have configured in your control panel to receive immediate topic reply notifications, you may receive an
email for each reply made to this topic.  Otherwise, only 1 email is sent per board visit for each subscribed topic. 
This is to limit the amount of mail that is sent to your inbox.

Unsubscribing:
--------------

You can unsubscribe at any time by logging into your control panel and clicking on the "View Topics" link.

EOF;

$lang['subject__subs_new_topic'] = 'Forum Subscription New Topic Notification';
$lang['subs_new_topic'] = <<<EOF
<#NAME#>,

<#POSTER#> has just posted a new topic entitled "<#TITLE#>" in forum "<#FORUM#>".

----------------------------------------------------------------------
<#POST#>
----------------------------------------------------------------------

The topic can be found here:
<#BOARD_ADDRESS#>?showtopic=<#TOPIC_ID#>

Please note that if you wish to get email notification of any replies to this topic, you will have to click on the
"Track this Topic" link shown on the topic page, or by visiting the link below:
<#BOARD_ADDRESS#>?act=Track&f=<#FORUM_ID#>&t=<#TOPIC_ID#>


Unsubscribing:
--------------

You can unsubscribe at any time by logging into your control panel and clicking on the "View Forums" link.
If you are not subscribed to any forums and wish to stop receiving notification, uncheck the setting
"Send me any updates sent by the board administrator" found in 'My Controls' under 'Email Settings'.

EOF;

$lang['subject__subs_no_post'] = 'Topic Subscription Reply Notification';
$lang['subs_no_post'] = <<<EOF
<#NAME#>,

<#POSTER#> has just posted a reply to a topic that you have subscribed to titled "<#TITLE#>".

The topic can be found here:
<#BOARD_ADDRESS#>?showtopic=<#TOPIC_ID#>&view=getnewpost

There may be more replies to this topic, but only 1 email is sent per board visit for each subscribed topic. This is
to limit the amount of mail that is sent to your inbox.

Unsubscribing:
--------------

You can unsubscribe at any time by logging into your control panel and clicking on the "View Topics" link.

EOF;



$lang['email_member'] = <<<EOF
<#MEMBER_NAME#>,

<#FROM_NAME#> has sent you this email from <#BOARD_ADDRESS#>.


<#MESSAGE#>

---------------------------------------------------
Please note that <#BOARD_NAME#> has no control over the
contents of this message.
---------------------------------------------------


EOF;

$lang['complete_reg'] = <<<EOF

Success!

An administrator has accepted your registration request or email address change at <#BOARD_NAME#>. You may now log in with
your chosen details and access your full user account at <#BOARD_ADDRESS#>

EOF;


?>