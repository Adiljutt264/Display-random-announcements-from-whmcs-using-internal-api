<?php
require_once 'init.php';
$command = 'GetAnnouncements';
$postData = array();

$results = localAPI($command, $postData);
$announcements = $results['announcements']['announcement'];

$randomIndex = array_rand($announcements);
$randomAnnouncement = $announcements[$randomIndex];

$title = $randomAnnouncement['title'];
$announcementId = $randomAnnouncement['id'];
?>
<span class="badge bg-purple me-2">news</span>
<span><?php echo $title; ?></span>
<span>
  <a class="c-yellow" href="index.php?rp=/announcements/<?php echo $announcementId; ?>">Read Article <i class="fas fa-arrow-circle-right"></i></a>
</span>
