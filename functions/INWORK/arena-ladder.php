<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<script type="text/javascript">
</script>
<title>Arena Toplist</title>
<style type="text/css">
body {
        background-color: #000000;
}
 
td {
        font-family: Tahoma;
        font-size: 12px;
        color: #FFFFFF;
}
</style>
</head>
<body>
<p><center><div style="display:inline; text-transform:capitalize; letter-spacing: 5px; font-size:22px; color:#fff; text-align:center">Arena Toplist</div></center></p>
  <p>&nbsp;</p>
<table width="878px" align="center" cellpadding="0" cellspacing="0">
<tr><td align="center">2v2</td><td align="center">3v3</td><td align="center">5v5</td></tr>
<tr><td align="center">
 
<!--
This is the 2v2 Arena Toplist
-->
 
<?php
$link = mysql_connect("localhost","user","password")  or die('Could not connect: ' . mysql_error());
mysql_select_db("characters",$link) or die('Could not select database');
$sql  = mysql_query("SELECT *
    FROM arena_team
     WHERE type = '2'
    ORDER BY rating");
 
echo '<table width=200>';
print "<table border=1>\n";
print "<th>Rank</th><th>Name</th><th>Faction</th><th>Class</th><th>Rating</th><th>Wins</th><th>Loses</th>\n";
print "</tr>\n";
while ($pvp_row = mysql_fetch_array($sql))
{
        $class = '';
        $i = 1;
        $type = 2;
        $gleader = "SELECT name,class,race FROM `characters` WHERE guid = '$pvp_row[captainGuid]'";
        $myrow = mysql_fetch_array(mysql_query($gleader));
        $query_num = "SELECT COUNT(*) FROM `arena_team_member` WHERE `arenaTeamId`='$pvp_row[arenaTeamId]'";
        $getdata = mysql_query("SELECT *
    FROM arena_team
    JOIN arena_team_member ON ( arena_team.arenaTeamId = arena_team_member.arenaTeamId )
    WHERE arenaTeamId = '$pvp_row[captainGuid]'");
        $resulto = mysql_query($query_num) or die(mysql_error());
 
        $newfetch = mysql_query("SELECT * FROM  arena_team_member JOIN characters ON ( arena_team_member.guid = characters.guid ) WHERE arenaTeamId = '$pvp_row[arenaTeamId]' AND arena_team_member.guid <> '$pvp_row[captainGuid]' ORDER BY personalRating");
       
                if($myrow['class'] == 1)
                {
                        $class = '<img src="1.gif">';
        }
        else if($myrow['class'] == 2)
        {
            $class = '<img src="2.gif">';
        }
        else if($myrow['class'] == 3)
        {
            $class = '<img src="3.gif">';
        }
        else if($myrow['class'] == 4)
        {
            $class = '<img src="4.gif">';
        }
        else if($myrow['class'] == 5)
        {
            $class = '<img src="5.gif">';
        }
        else if($myrow['class'] == 6)
        {
            $class = '<img src="6.gif">';
        }
        else if($myrow['class'] == 7)
        {
            $class = '<img src="7.gif">';
        }
        else if($myrow['class'] == 8)
        {
            $class = '<img src="8.gif">';
        }
        else if($myrow['class'] == 9)
        {
            $class = '<img src="9.gif">';
        }
        else
        {
            $class = '<img src="11.gif">';
        }
       
        while($member = mysql_fetch_array($newfetch))
        {
                if($i == $type)
                        break;
                               
                if($member['class'] == 1)
                {
                       
                        $class .= '<img src="1.gif">';
                }
                else if($member['class'] == 2)
                {
                        $class .= '<img src="2.gif">';
                }
                else if($member['class'] == 3)
                {
                        $class .= '<img src="3.gif">';
 
                }
                else if($member['class'] == 4)
                {
                        $class .= '<img src="4.gif">';
 
                }
                else if($member['class'] == 5)
                {
                        $class .= '<img src="5.gif">';
                }
                else if($member['class'] == 6)
                {
                        $class .= '<img src="6.gif">';
                }
                else if($member['class'] == 7)
                {
                        $class .= '<img src="7.gif">';
                }
                else if($member['class'] == 8)
                {
                        $class .= '<img src="8.gif">';
                }
                else if($member['class'] == 9)
                {
                        $class .= '<img src="9.gif">';
                }
                else
                {
                        $class .= '<img src="11.gif">';
                }
                $i++;
               
        }
               
        if($myrow['race']=="1" or $myrow['race']=="3" or $myrow['race']=="4" or $myrow['race']=="7" or  $myrow['race']=="11")
        {
       $faction = "A";
    }
    else
        {
       $faction = "H";
        }
       
               
        $loses = $pvp_row[seasonGames] - $pvp_row[seasonWins];
 
  print "<tr>\n";
 
        print "<td>$pvp_row[rank]</td><td>$pvp_row[name]</td><td><center>$faction</center></td><td>$class</td><td>$pvp_row[rating]</td><td>$pvp_row[seasonWins]</td><td>$loses</td>\n";
  print "</tr>\n";
}
 
echo '</table>';
?>
</td><td align="center">
 
<!--
This is the 3v3 Arena Toplist
-->
 
<?php
$link = mysql_connect("localhost","user","password")  or die('Could not connect: ' . mysql_error());
mysql_select_db("characters",$link) or die('Could not select database');
$sql  = mysql_query("SELECT *
    FROM arena_team
     WHERE type = '3'
    ORDER BY rating");
 
echo '<table width=400>';
print "<table border=1>\n";
print "<th>Rank</th><th>Name</th><th>Faction</th><th>Class</th><th>Rating</th><th>Wins</th><th>Loses</th>\n";
print "</tr>\n";
while ($pvp_row = mysql_fetch_array($sql))
{
        $class = '';
        $i = 1;
        $type = 3;
        $gleader = "SELECT name,class,race FROM `characters` WHERE guid = '$pvp_row[captainGuid]'";
        $myrow = mysql_fetch_array(mysql_query($gleader));
        $query_num = "SELECT COUNT(*) FROM `arena_team_member` WHERE `arenaTeamId`='$pvp_row[arenaTeamId]'";
        $getdata = mysql_query("SELECT *
    FROM arena_team
    JOIN arena_team_member ON ( arena_team.arenaTeamId = arena_team_member.arenaTeamId )
    WHERE arenaTeamId = '$pvp_row[captainGuid]'");
        $resulto = mysql_query($query_num) or die(mysql_error());
 
        $newfetch = mysql_query("SELECT * FROM  arena_team_member JOIN characters ON ( arena_team_member.guid = characters.guid ) WHERE arenaTeamId = '$pvp_row[arenaTeamId]' AND arena_team_member.guid <> '$pvp_row[captainGuid]' ORDER BY personalRating");
       
                if($myrow['class'] == 1)
                {
                        $class = '<img src="1.gif">';
        }
        else if($myrow['class'] == 2)
        {
            $class = '<img src="2.gif">';
        }
        else if($myrow['class'] == 3)
        {
            $class = '<img src="3.gif">';
        }
        else if($myrow['class'] == 4)
        {
            $class = '<img src="4.gif">';
        }
        else if($myrow['class'] == 5)
        {
            $class = '<img src="5.gif">';
        }
        else if($myrow['class'] == 6)
        {
            $class = '<img src="6.gif">';
        }
        else if($myrow['class'] == 7)
        {
            $class = '<img src="7.gif">';
        }
        else if($myrow['class'] == 8)
        {
            $class = '<img src="8.gif">';
        }
        else if($myrow['class'] == 9)
        {
            $class = '<img src="9.gif">';
        }
        else
        {
            $class = '<img src="11.gif">';
        }
       
        while($member = mysql_fetch_array($newfetch))
        {
                if($i == $type)
                        break;
                               
                if($member['class'] == 1)
                {
                       
                        $class .= '<img src="1.gif">';
                }
                else if($member['class'] == 2)
                {
                        $class .= '<img src="2.gif">';
                }
                else if($member['class'] == 3)
                {
                        $class .= '<img src="3.gif">';
 
                }
                else if($member['class'] == 4)
                {
                        $class .= '<img src="4.gif">';
 
                }
                else if($member['class'] == 5)
                {
                        $class .= '<img src="5.gif">';
                }
                else if($member['class'] == 6)
                {
                        $class .= '<img src="6.gif">';
                }
                else if($member['class'] == 7)
                {
                        $class .= '<img src="7.gif">';
                }
                else if($member['class'] == 8)
                {
                        $class .= '<img src="8.gif">';
                }
                else if($member['class'] == 9)
                {
                        $class .= '<img src="9.gif">';
                }
                else
                {
                        $class .= '<img src="11.gif">';
                }
                $i++;
               
        }
               
        if($myrow['race']=="1" or $myrow['race']=="3" or $myrow['race']=="4" or $myrow['race']=="7" or  $myrow['race']=="11")
        {
       $faction = "A";
    }
    else
        {
       $faction = "H";
        }
       
               
        $loses = $pvp_row[seasonGames] - $pvp_row[seasonWins];
 
  print "<tr>\n";
 
        print "<td>$pvp_row[rank]</td><td>$pvp_row[name]</td><td><center>$faction</center></td><td>$class</td><td>$pvp_row[rating]</td><td>$pvp_row[seasonWins]</td><td>$loses</td>\n";
  print "</tr>\n";
}
 
echo '</table>';
?>
</td><td align="center">
 
<!--
This is the 5v5 Arena Toplist
-->
 
<?php
$link = mysql_connect("localhost","user","password")  or die('Could not connect: ' . mysql_error());
mysql_select_db("characters",$link) or die('Could not select database');
$sql  = mysql_query("SELECT *
    FROM arena_team
     WHERE type = '0'
    ORDER BY rating");
 
echo '<table width=200>';
print "<table border=0>\n";
print "<th>Rank</th><th>Name</th><th>Faction</th><th>Class</th><th>Rating</th><th>Wins</th><th>Loses</th>\n";
print "</tr>\n";
while ($pvp_row = mysql_fetch_array($sql))
{
        $class = '';
        $i = 1;
        $type = 5;
        $gleader = "SELECT name,class,race FROM `characters` WHERE guid = '$pvp_row[captainGuid]'";
        $myrow = mysql_fetch_array(mysql_query($gleader));
        $query_num = "SELECT COUNT(*) FROM `arena_team_member` WHERE `arenaTeamId`='$pvp_row[arenaTeamId]'";
        $getdata = mysql_query("SELECT *
    FROM arena_team
    JOIN arena_team_member ON ( arena_team.arenaTeamId = arena_team_member.arenaTeamId )
    WHERE arenaTeamId = '$pvp_row[captainGuid]'");
        $resulto = mysql_query($query_num) or die(mysql_error());
 
        $newfetch = mysql_query("SELECT * FROM  arena_team_member JOIN characters ON ( arena_team_member.guid = characters.guid ) WHERE arenaTeamId = '$pvp_row[arenaTeamId]' AND arena_team_member.guid <> '$pvp_row[captainGuid]' ORDER BY personalRating");
       
                if($myrow['class'] == 1)
                {
                        $class = '<img src="1.gif">';
        }
        else if($myrow['class'] == 2)
        {
            $class = '<img src="2.gif">';
        }
        else if($myrow['class'] == 3)
        {
            $class = '<img src="3.gif">';
        }
        else if($myrow['class'] == 4)
        {
            $class = '<img src="4.gif">';
        }
        else if($myrow['class'] == 5)
        {
            $class = '<img src="5.gif">';
        }
        else if($myrow['class'] == 6)
        {
            $class = '<img src="6.gif">';
        }
        else if($myrow['class'] == 7)
        {
            $class = '<img src="7.gif">';
        }
        else if($myrow['class'] == 8)
        {
            $class = '<img src="8.gif">';
        }
        else if($myrow['class'] == 9)
        {
            $class = '<img src="9.gif">';
        }
        else
        {
            $class = '<img src="11.gif">';
        }
       
        while($member = mysql_fetch_array($newfetch))
        {
                if($i == $type)
                        break;
                               
                if($member['class'] == 1)
                {
                       
                        $class .= '<img src="1.gif">';
                }
                else if($member['class'] == 2)
                {
                        $class .= '<img src="2.gif">';
                }
                else if($member['class'] == 3)
                {
                        $class .= '<img src="3.gif">';
 
                }
                else if($member['class'] == 4)
                {
                        $class .= '<img src="4.gif">';
 
                }
                else if($member['class'] == 5)
                {
                        $class .= '<img src="5.gif">';
                }
                else if($member['class'] == 6)
                {
                        $class .= '<img src="6.gif">';
                }
                else if($member['class'] == 7)
                {
                        $class .= '<img src="7.gif">';
                }
                else if($member['class'] == 8)
                {
                        $class .= '<img src="8.gif">';
                }
                else if($member['class'] == 9)
                {
                        $class .= '<img src="9.gif">';
                }
                else
                {
                        $class .= '<img src="11.gif">';
                }
                $i++;
               
        }
               
        if($myrow['race']=="1" or $myrow['race']=="3" or $myrow['race']=="4" or $myrow['race']=="7" or  $myrow['race']=="11")
        {
       $faction = "A";
    }
    else
        {
       $faction = "H";
        }
       
               
        $loses = $pvp_row[seasonGames] - $pvp_row[seasonWins];
 
  print "<tr>\n";
 
        print "<td>$pvp_row[rank]</td><td>$pvp_row[name]</td><td><center>$faction</center></td><td>$class</td><td>$pvp_row[rating]</td><td>$pvp_row[seasonWins]</td><td>$loses</td>\n";
  print "</tr>\n";
}
 
echo '</table>';
?>
 
</td></tr></table>
</body>
</html>