# acl.auth.php
# <?php exit()?>
# Don't modify the lines above
#
# Access Control Lists
#
# Auto-generated by install script
# Date: Fri, 13 Mar 2020 09:52:53 +0000
*	@ALL	4
*	@user	8
*	@mods	16
user:%USER%:*	%USER%	16
user:*	@ALL	1
forum	@ALL	1
