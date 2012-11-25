<?php require_once 'includes\connection.php'; ?>
<?php require_once 'includes\functions.php'; ?>
<?php find_selected_page(); ?>
<?php include ('header.php'); ?>

<h2>September 24</h2>
<div class="comment">
<h3>OS Patch 1.4.3 Released</h3>
Today we released a patch for our robots' operating system, Nutz'n'Boltz. This patch fixes a few minor bugs reported by our users. Please be sure to restart your robot so that it may download the update. Please note that the patch will cause your robot to take a few extra minutes to boot up. 
<p>
<u>Patch Notes:</u>
<p>
-Fixed an issue that caused some robots to experience lag issues while operating in areas of high population.
<p>
-Fixed a known bug that would cause some robots to run in circles screaming when it saw a mouse, spider, or other "icky" creature.
<p>
-Fixed a reported bug that caused some bots to inadvertently shut down when shouted "Boo" at.  
</div>

<h2>September 19</h2>
<div class="comment">
<h3>Legion of Doom Joins Build-A-Bot</h3>
We are pleased to announce an addition to our development department! Over the past few months, we have been in talks with a brilliant group of designers led by Lex Luther. Mr. Luther�s group, known as the Legion of Doom, has been on the cutting edge of weapons development for the past few years. We, here at Build-A-Bot, have been impressed by their continued dedication to their goals and resiliency when met with failure. 
<p>
Legion of Doom members were enthusiastic to join the Build-A-Bot family and gain access to our advanced robotic models. Upon arrival at the Build-A-Bot development facility, they quickly locked themselves into their lab and have been hard at work since. While Mr. Luther has been tight lipped about his team�s first project, he did let slip that he planned on �developing a force to take over the world.� While Build-A-Bot does not condone world-take over, we are eager to see what results from the integration of Build-A-Bot robot technology with Legion of Doom weaponry.
<p>
</div>



<script type="text/javascript">
    $(document).ready(function() {
     
        $(".comment").shorten();
     
    });
</script>
<?php include ('footer.php'); ?>