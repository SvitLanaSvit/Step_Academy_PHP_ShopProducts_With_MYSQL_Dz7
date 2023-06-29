<?
$pages = ["HOME" => "?page=0","ADD PRODUCT" => "?page=1", "GALLERY" => "?page=2"];

echo "<div><ul class='navbar-nav'>";
foreach($pages as $k=>$page){
    echo "<li class='nav-item'><a href='$page' class='nav-link'>$k</a></li>";
}
echo "</ul></div>";