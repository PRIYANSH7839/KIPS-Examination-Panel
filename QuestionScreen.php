<?php
require 'db_con.php';
if(isset($_SESSION['email'])){
	$query = mysqli_query($con,"SELECT * from user WHERE email='$_SESSION[email]'");
	$row = mysqli_fetch_array($query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="http://127.0.0.1:5500/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>cccQuiz</title>
    

</head>

<body>
    <div class="container-fluid quiz-upper-block">
        <div class="quiz-Brnd-block mt-2 mb-2 float-start">
            logo
        </div>
        <div class="quiz-StdInfo-block float-end">
            <div class="float-start std-img">
                student_img
            </div>
            <div class="float-start std-info ml-1">
                Std_info
            </div>
            <div class="float-end finish-button mt-5 mb-0 mr-2">
               finished
               
            </div>
        </div>
    </div>
    
                
            <hr />
<div style="height:fit-content;">
<button class="btn btn-success btn-sm btn-q" id="btn-1" style="width:33px;margin-top:1px;">1</button>
<button class="btn btn-success btn-sm btn-q" id="btn-2" style="width:33px;margin-top:1px;">2</button>
<button class="btn btn-success btn-sm btn-q" id="btn-3" style="width:33px;margin-top:1px;">3</button>
<button class="btn btn-success btn-sm btn-q" id="btn-4" style="width:33px;margin-top:1px;">4</button>
<button class="btn btn-success btn-sm btn-q" id="btn-5" style="width:33px;margin-top:1px;">5</button>
<button class="btn btn-success btn-sm btn-q" id="btn-6" style="width:33px;margin-top:1px;">6</button>
<button class="btn btn-success btn-sm btn-q" id="btn-7" style="width:33px;margin-top:1px;">7</button>
<button class="btn btn-success btn-sm btn-q" id="btn-8" style="width:33px;margin-top:1px;">8</button>
<button class="btn btn-success btn-sm btn-q" id="btn-9" style="width:33px;margin-top:1px;">9</button>
<button class="btn btn-success btn-sm btn-q" id="btn-10" style="width:33px;margin-top:1px;">10</button>
<button class="btn btn-success btn-sm btn-q" id="btn-11" style="width:33px;margin-top:1px;">11</button>
<button class="btn btn-success btn-sm btn-q" id="btn-12" style="width:33px;margin-top:1px;">12</button>
<button class="btn btn-success btn-sm btn-q" id="btn-13" style="width:33px;margin-top:1px;">13</button>
<button class="btn btn-success btn-sm btn-q" id="btn-14" style="width:33px;margin-top:1px;">14</button>
<button class="btn btn-success btn-sm btn-q" id="btn-15" style="width:33px;margin-top:1px;">15</button>
<button class="btn btn-success btn-sm btn-q" id="btn-16" style="width:33px;margin-top:1px;">16</button>
<button class="btn btn-success btn-sm btn-q" id="btn-17" style="width:33px;margin-top:1px;">17</button>
<button class="btn btn-success btn-sm btn-q" id="btn-18" style="width:33px;margin-top:1px;">18</button>
<button class="btn btn-success btn-sm btn-q" id="btn-19" style="width:33px;margin-top:1px;">19</button>
<button class="btn btn-success btn-sm btn-q" id="btn-20" style="width:33px;margin-top:1px;">20</button>
<button class="btn btn-success btn-sm btn-q" id="btn-21" style="width:33px;margin-top:1px;">21</button>
<button class="btn btn-success btn-sm btn-q" id="btn-22" style="width:33px;margin-top:1px;">22</button>
<button class="btn btn-success btn-sm btn-q" id="btn-23" style="width:33px;margin-top:1px;">23</button>
<button class="btn btn-success btn-sm btn-q" id="btn-24" style="width:33px;margin-top:1px;">24</button>
<button class="btn btn-success btn-sm btn-q" id="btn-25" style="width:33px;margin-top:1px;">25</button>
<button class="btn btn-success btn-sm btn-q" id="btn-26" style="width:33px;margin-top:1px;">26</button>
<button class="btn btn-success btn-sm btn-q" id="btn-27" style="width:33px;margin-top:1px;">27</button>
<button class="btn btn-success btn-sm btn-q" id="btn-28" style="width:33px;margin-top:1px;">28</button>
<button class="btn btn-success btn-sm btn-q" id="btn-29" style="width:33px;margin-top:1px;">29</button>
<button class="btn btn-success btn-sm btn-q" id="btn-30" style="width:33px;margin-top:1px;">30</button>
<button class="btn btn-success btn-sm btn-q" id="btn-31" style="width:33px;margin-top:1px;">31</button>
<button class="btn btn-success btn-sm btn-q" id="btn-32" style="width:33px;margin-top:1px;">32</button>
<button class="btn btn-success btn-sm btn-q" id="btn-33" style="width:33px;margin-top:1px;">33</button>
<button class="btn btn-success btn-sm btn-q" id="btn-34" style="width:33px;margin-top:1px;">34</button>
<button class="btn btn-success btn-sm btn-q" id="btn-35" style="width:33px;margin-top:1px;">35</button>
<button class="btn btn-success btn-sm btn-q" id="btn-36" style="width:33px;margin-top:1px;">36</button>
<button class="btn btn-success btn-sm btn-q" id="btn-37" style="width:33px;margin-top:1px;">37</button>
<button class="btn btn-success btn-sm btn-q" id="btn-38" style="width:33px;margin-top:1px;">38</button>
<button class="btn btn-success btn-sm btn-q" id="btn-39" style="width:33px;margin-top:1px;">39</button>
<button class="btn btn-success btn-sm btn-q" id="btn-40" style="width:33px;margin-top:1px;">40</button>
<button class="btn btn-success btn-sm btn-q" id="btn-41" style="width:33px;margin-top:1px;">41</button>
<button class="btn btn-success btn-sm btn-q" id="btn-42" style="width:33px;margin-top:1px;">42</button>
<button class="btn btn-success btn-sm btn-q" id="btn-43" style="width:33px;margin-top:1px;">43</button>
<button class="btn btn-success btn-sm btn-q" id="btn-44" style="width:33px;margin-top:1px;">44</button>
<button class="btn btn-success btn-sm btn-q" id="btn-45" style="width:33px;margin-top:1px;">45</button>
<button class="btn btn-success btn-sm btn-q" id="btn-46" style="width:33px;margin-top:1px;">46</button>
<button class="btn btn-success btn-sm btn-q" id="btn-47" style="width:33px;margin-top:1px;">47</button>
<button class="btn btn-success btn-sm btn-q" id="btn-48" style="width:33px;margin-top:1px;">48</button>
<button class="btn btn-success btn-sm btn-q" id="btn-49" style="width:33px;margin-top:1px;">49</button>
<button class="btn btn-success btn-sm btn-q" id="btn-50" style="width:33px;margin-top:1px;">50</button>
<button class="btn btn-success btn-sm btn-q" id="btn-51" style="width:33px;margin-top:1px;">51</button>
<button class="btn btn-success btn-sm btn-q" id="btn-52" style="width:33px;margin-top:1px;">52</button>
<button class="btn btn-success btn-sm btn-q" id="btn-53" style="width:33px;margin-top:1px;">53</button>
<button class="btn btn-success btn-sm btn-q" id="btn-54" style="width:33px;margin-top:1px;">54</button>
<button class="btn btn-success btn-sm btn-q" id="btn-55" style="width:33px;margin-top:1px;">55</button>
<button class="btn btn-success btn-sm btn-q" id="btn-56" style="width:33px;margin-top:1px;">56</button>
<button class="btn btn-success btn-sm btn-q" id="btn-57" style="width:33px;margin-top:1px;">57</button>
<button class="btn btn-success btn-sm btn-q" id="btn-58" style="width:33px;margin-top:1px;">58</button>
<button class="btn btn-success btn-sm btn-q" id="btn-59" style="width:33px;margin-top:1px;">59</button>
<button class="btn btn-success btn-sm btn-q" id="btn-60" style="width:33px;margin-top:1px;">60</button>
<button class="btn btn-success btn-sm btn-q" id="btn-61" style="width:33px;margin-top:1px;">61</button>
<button class="btn btn-success btn-sm btn-q" id="btn-62" style="width:33px;margin-top:1px;">62</button>
<button class="btn btn-success btn-sm btn-q" id="btn-63" style="width:33px;margin-top:1px;">63</button>
<button class="btn btn-success btn-sm btn-q" id="btn-64" style="width:33px;margin-top:1px;">64</button>
<button class="btn btn-success btn-sm btn-q" id="btn-65" style="width:33px;margin-top:1px;">65</button>
<button class="btn btn-success btn-sm btn-q" id="btn-66" style="width:33px;margin-top:1px;">66</button>
<button class="btn btn-success btn-sm btn-q" id="btn-67" style="width:33px;margin-top:1px;">67</button>
<button class="btn btn-success btn-sm btn-q" id="btn-68" style="width:33px;margin-top:1px;">68</button>
<button class="btn btn-success btn-sm btn-q" id="btn-69" style="width:33px;margin-top:1px;">69</button>
<button class="btn btn-success btn-sm btn-q" id="btn-70" style="width:33px;margin-top:1px;">70</button>
<button class="btn btn-success btn-sm btn-q" id="btn-71" style="width:33px;margin-top:1px;">71</button>
<button class="btn btn-success btn-sm btn-q" id="btn-72" style="width:33px;margin-top:1px;">72</button>
<button class="btn btn-success btn-sm btn-q" id="btn-73" style="width:33px;margin-top:1px;">73</button>
<button class="btn btn-success btn-sm btn-q" id="btn-74" style="width:33px;margin-top:1px;">74</button>
<button class="btn btn-success btn-sm btn-q" id="btn-75" style="width:33px;margin-top:1px;">75</button>
<button class="btn btn-success btn-sm btn-q" id="btn-76" style="width:33px;margin-top:1px;">76</button>
<button class="btn btn-success btn-sm btn-q" id="btn-77" style="width:33px;margin-top:1px;">77</button>
<button class="btn btn-success btn-sm btn-q" id="btn-78" style="width:33px;margin-top:1px;">78</button>
<button class="btn btn-success btn-sm btn-q" id="btn-79" style="width:33px;margin-top:1px;">79</button>
<button class="btn btn-success btn-sm btn-q" id="btn-80" style="width:33px;margin-top:1px;">80</button>
<button class="btn btn-success btn-sm btn-q" id="btn-81" style="width:33px;margin-top:1px;">81</button>
<button class="btn btn-success btn-sm btn-q" id="btn-82" style="width:33px;margin-top:1px;">82</button>
<button class="btn btn-success btn-sm btn-q" id="btn-83" style="width:33px;margin-top:1px;">83</button>
<button class="btn btn-success btn-sm btn-q" id="btn-84" style="width:33px;margin-top:1px;">84</button>
<button class="btn btn-success btn-sm btn-q" id="btn-85" style="width:33px;margin-top:1px;">85</button>
<button class="btn btn-success btn-sm btn-q" id="btn-86" style="width:33px;margin-top:1px;">86</button>
<button class="btn btn-success btn-sm btn-q" id="btn-87" style="width:33px;margin-top:1px;">87</button>
<button class="btn btn-success btn-sm btn-q" id="btn-88" style="width:33px;margin-top:1px;">88</button>
<button class="btn btn-success btn-sm btn-q" id="btn-89" style="width:33px;margin-top:1px;">89</button>
<button class="btn btn-success btn-sm btn-q" id="btn-90" style="width:33px;margin-top:1px;">90</button>
<button class="btn btn-success btn-sm btn-q" id="btn-91" style="width:33px;margin-top:1px;">91</button>
<button class="btn btn-success btn-sm btn-q" id="btn-92" style="width:33px;margin-top:1px;">92</button>
<button class="btn btn-success btn-sm btn-q" id="btn-93" style="width:33px;margin-top:1px;">93</button>
<button class="btn btn-success btn-sm btn-q" id="btn-94" style="width:33px;margin-top:1px;">94</button>
<button class="btn btn-success btn-sm btn-q" id="btn-95" style="width:33px;margin-top:1px;">95</button>
<button class="btn btn-success btn-sm btn-q" id="btn-96" style="width:33px;margin-top:1px;">96</button>
<button class="btn btn-success btn-sm btn-q" id="btn-97" style="width:33px;margin-top:1px;">97</button>
<button class="btn btn-success btn-sm btn-q" id="btn-98" style="width:33px;margin-top:1px;">98</button>
<button class="btn btn-success btn-sm btn-q" id="btn-99" style="width:33px;margin-top:1px;">99</button>
<button class="btn btn-success btn-sm btn-q" id="btn-100" style="width:33px;margin-top:1px;">100</button>
</div>
<hr.


margin:5px;padding:5px; 

<?php
 $q = mysqli_query($con, "SELECT * FROM history WHERE email='$_SESSION[email]' AND eid='$_GET[eid]' ") or die('Error197');
    
    if (mysqli_num_rows($q) > 0) {
        $q = mysqli_query($con, "SELECT * FROM history WHERE email='$_SESSION[email]' AND eid='$_GET[eid]' ") or die('Error197');
        while ($row = mysqli_fetch_array($q)) {
            $time   = $row['timestamp'];
            $status = $row['status'];
        }
        $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$_GET[eid]' ") or die('Error197');
        while ($row = mysqli_fetch_array($q)) {
            $ttime   = $row['time'];
            $qstatus = $row['status'];
        }
        $remaining = (($ttime * 60) - ((time() - $time)));
        if ($status == "ongoing" && $remaining > 0 && $qstatus == "enabled") {
            $q = mysqli_query($con, "SELECT * FROM history WHERE email='$_SESSION[email]' AND eid='$_GET[eid]' ") or die('Error197');
            while ($row = mysqli_fetch_array($q)) {
                $time = $row['timestamp'];
            }
            $q = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$_GET[eid]' ") or die('Error197');
            while ($row = mysqli_fetch_array($q)) {
                $ttime = $row['time'];
            }
            $remaining = (($ttime * 60) - ((time() - $time)));
           //----------------------------------------------------------------------------------------------------------------
            echo '<font size="3" style="margin-left:100px;font-family:\'typo\' font-size:20px; font-weight:bold;color:darkred">Time Left : </font><span class="timer btn btn-default" style="margin-left:20px;"><font style="font-family:\'typo\';font-size:20px;font-weight:bold;color:darkblue" id="countdown"></font></span><span class="timer btn btn-primary" style="margin-left:50px" onclick="end()"><span class=" glyphicon glyphicon-off"></span>&nbsp;&nbsp;<font style="font-size:12px;font-weight:bold">Finish Quiz</font></span>';
            $eid   = @$_GET['eid'];
            $sn    = @$_GET['n'];
            $total = @$_GET['t'];
            $q     = mysqli_query($con, "SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' ");
            echo '<div class="panel" style="margin-right:5%;margin-left:5%;margin-top:10px;border-radius:10px">';
            while ($row = mysqli_fetch_array($q)) {
                $qns = stripslashes($row['qns']);
                $qid = $row['qid'];
                echo '<b><pre style="background-color:white"><div style="font-size:20px;font-weight:bold;font-family:calibri;margin:10px">' . $sn . ' : ' . $qns . '</div></pre></b>';
            }
            
            echo '<form id="qform" action="update.php?q=quiz&step=2&eid=' . $eid . '&n=' . $sn . '&t=' . $total . '&qid=' . $qid . '" method="POST"  class="form-horizontal">
<br />';
            $q = mysqli_query($con, "SELECT * FROM uanswers WHERE qid='$qid' AND email='$_SESSION[email]' AND eid='$_GET[eid]'") or die("Error222");
            if (mysqli_num_rows($q) > 0) {
                $row = mysqli_fetch_array($q);
                $ans = $row['ans'];
                $q = mysqli_query($con, "SELECT * FROM options WHERE qid='$qid' AND optionid='$ans'") or die("Error222");
                $row = mysqli_fetch_array($q);
                $ans = $row['option'];
            } else {
                $ans = "";
            }
            if (strlen($ans) > 0) {
                echo "<font style=\"color:green;font-size:12px;font-weight:bold\">Selected answer: </font><font style=\"color:#565252;font-size:12px;\">" . $ans . "</font>&nbsp;&nbsp;<a href=update.php?q=quiz&step=2&eid=$eid&n=$sn&t=$total&qid=$qid&delanswer=delanswer><span class=\"glyphicon glyphicon-remove\" style=\"font-size:12px;color:darkred\"></span></a><br /><br />";
            }
            echo '<div class="funkyradio">';
            $q = mysqli_query($con, "SELECT * FROM options WHERE qid='$qid' ");
            while ($row = mysqli_fetch_array($q)) {
                $option   = stripslashes($row['option']);
                $optionid = $row['optionid'];
                echo '<div class="funkyradio-success"><input type="radio" id="' . $optionid . '" name="ans" value="' . $optionid . '" onclick="enable()"> <label for="' . $optionid . '" style="width:50%"><div style="color:black;font-size:12px;word-wrap:break-word">&nbsp;&nbsp;' . $option . '</div></label></div>';
            }
            echo '</div>';
            if ($_GET["t"] > $_GET["n"] && $_GET["n"] != 1) {
                echo '<br /><a href="Userdash.php?q=quiz&step=2&eid=' . $eid . '&n=' . ($sn - 1) . '&t=' . $total . '" class="btn btn-primary" style="height:30px"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"  style="font-size:12px"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-default" disabled="true" id="sbutton" style="height:30px"><span class="glyphicon glyphicon-lock" style="font-size:12px" aria-hidden="true"></span><font style="font-size:12px;font-weight:bold"> Lock</font></button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-default" onclick="frmreset()" style="height:30px"></span><font style="font-size:12px;font-weight:bold">Reset</font></button>&nbsp;&nbsp;&nbsp;&nbsp;<a href="Userdash.php?q=quiz&step=2&eid=' . $eid . '&n=' . ($sn + 1) . '&t=' . $total . '" class="btn btn-primary" style="height:30px"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"  style="font-size:12px"></span></a></form><br><br>';
            } else if ($_GET["t"] == $_GET["n"]) {
                echo '<br /><a href="Userdash.php?q=quiz&step=2&eid=' . $eid . '&n=' . ($sn - 1) . '&t=' . $total . '" class="btn btn-primary" style="height:30px"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"  style="font-size:12px"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-default" disabled="true" id="sbutton" style="height:30px"><span class="glyphicon glyphicon-lock" style="font-size:12px" aria-hidden="true"></span><font style="font-size:12px;font-weight:bold"> Lock</font></button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-default" onclick="frmreset()" style="height:30px"></span><font style="font-size:12px;font-weight:bold">Reset</font></button>&nbsp;&nbsp;&nbsp;&nbsp;</form><br><br>';
            } else if ($_GET["t"] > $_GET["n"] && $_GET["n"] == 1) {
                echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-default" disabled="true" id="sbutton" style="height:30px">
                <span class="glyphicon glyphicon-lock" style="font-size:12px" aria-hidden="true"></span>
                <font style="font-size:12px;font-weight:bold"> Lock</font>
                </button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-default" onclick="frmreset()" style="height:30px">
                </span><font style="font-size:12px;font-weight:bold">Reset</font>
                </button>&nbsp;&nbsp;&nbsp;&nbsp;<a href="Userdash.php?q=quiz&step=2&eid=' . $eid . '&n=' . ($sn + 1) . '&t=' . $total . '" class="btn btn-primary" style="height:30px">
                <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"  style="font-size:12px"></span></a><
                /form><br><br>';
            } else {
            }
            echo '</div>';
            echo '<div class="panel" style="text-align:center">';
            $q = mysqli_query($con, "SELECT * FROM questions WHERE eid='$_GET[eid]'") or die("Error222");
            $i = 1;
            while ($row = mysqli_fetch_array($q)) {
                $ques[$row['qid']] = $i;
                $i++;
            }
            $q = mysqli_query($con, "SELECT * FROM uanswers WHERE eid='$_GET[eid]' AND email='$_SESSION[email]'") or die("Error222a");
            $i = 1;
            while ($row = mysqli_fetch_array($q)) {
                if (isset($ques[$row['qid']])) {
                    $quesans[$ques[$row['qid']]] = true;
                }
            }
            for ($i = 1; $i <= $total; $i++) {
                echo '<a href="Userdash.php?q=quiz&step=2&eid=' . $eid . '&n=' . $i . '&t=' . $total . '"  style="margin:5px;padding:5px;background-color:';
                if ($quesans[$i]) {
                    echo "darkgreen";
                } else {
                    echo "darkred";
                }
                echo ';color:white;font-size:16px;font-family:calibri;border-radius:4px">&nbsp;' . $i . '&nbsp;</a>';
            }
        } else {
            unset($_SESSION['6e447159425d2d']);
            $q = mysqli_query($con, "UPDATE history SET status='finished' WHERE email='$_SESSION[email]' AND eid='$_GET[eid]' ") or die('Error197');
        $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$_GET[eid]' AND email='$_SESSION[email]'") or die('Error156');
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $scorestatus = $row['score_updated'];
                }
                 if($scorestatus=="false"){
                    $q = mysqli_query($con, "UPDATE history SET score_updated='true' WHERE email='$_SESSION[email]' AND eid='$_GET[eid]' ") or die('Error197');
                    $q = mysqli_query($con, "SELECT * FROM rank WHERE email='$_SESSION[email]'") or die('Error161');
                    $rowcount = mysqli_num_rows($q);
                    if ($rowcount == 0) {
                        $q2 = mysqli_query($con, "INSERT INTO rank VALUES(NULL,'$_SESSION[email]','$s',NOW())") or die('Error165');
                    } else {
                        while ($row = mysqli_fetch_array($q)) {
                            $sun = $row['score'];
                        }
                        
                        $sun = $s + $sun;
                        $q = mysqli_query($con, "UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE email= '$_SESSION[email]'") or die('Error174');
                    }
                }
            header('location:Userdash.php?q=result&eid=' . $_GET['eid']);
        }
    } else {
        unset($_SESSION['6e447159425d2d']);
        $q = mysqli_query($con, "UPDATE history SET status='finished' WHERE email='$_SESSION[email]' AND eid='$_GET[eid]' ") or die('Error197');
        $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$_GET[eid]' AND email='$_SESSION[email]'") or die('Error156');
                while ($row = mysqli_fetch_array($q)) {
                    $s = $row['score'];
                    $scorestatus = $row['score_updated'];
                }
                if($scorestatus=="false"){
                    $q = mysqli_query($con, "UPDATE history SET score_updated='true' WHERE email='$_SESSION[email]' AND eid='$_GET[eid]' ") or die('Error197');
                    $q = mysqli_query($con, "SELECT * FROM rank WHERE email='$_SESSION[email]'") or die('Error161');
                    $rowcount = mysqli_num_rows($q);
                    if ($rowcount == 0) {
                        $q2 = mysqli_query($con, "INSERT INTO rank VALUES(NULL,'$_SESSION[email]','$s',NOW())") or die('Error165');
                    } else {
                        while ($row = mysqli_fetch_array($q)) {
                            $sun = $row['score'];
                        }
                        
                        $sun = $s + $sun;
                        $q = mysqli_query($con, "UPDATE rank SET score= $sun , time=NOW() WHERE email= '$_SESSION[email]'") or die('Error174');
                    }
                }
            header('location:Userdash.php?q=result&eid=' . $_GET['eid']);
    }

?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js "></script>
</body>

</html>
