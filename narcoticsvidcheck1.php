<?php
set_time_limit(500);
	echo '<section><table class="content-table">
      <thead><tr>
         <th>Video</th>
         <th>File Name</th>
         <th>Discription</th>
         <th>District</th>
         <th>Check</th>
		 <th>Compare</th>
		 <th>Delete</th>
		 <th>Send Email</th>
      </tr></thead><tbody>';
	// open this directory 
	$myDirectory = opendir("viduploads/narcotics/$u");

	// get each entry
	while($entryName = readdir($myDirectory)) {
		$dirArray[] = $entryName;
	}

	// close directory
	closedir($myDirectory);

	//	count elements in array
	$indexCount	= count($dirArray);
		// loop through the array of files and print them all in a list
		for($index=0; $index < $indexCount; $index++) {
			$extension = substr($dirArray[$index], -3);
			$allowed=array('mp4');
			$conn = mysqli_connect("localhost","root","","crimedetect");
			$sql="select * from vidnarcotics where filename='$dirArray[$index]' and district='$u'";
			$r=mysqli_query($conn,$sql);
			$row= mysqli_fetch_array($r);
			if(in_array($extension,$allowed)){
			 if($row){
				echo '<tr class="active-row">';
				echo '<td><a href="viduploads/narcotics/'.$u.'/' . $dirArray[$index] . '"><video id="myVideo" height="100px" width="100px" src="viduploads/narcotics/'.$u.'/' . $dirArray[$index] . '" autoplay muted loop/>
  					Sorry, your browser doesnot support the video element.
					</video></a></td>';
				echo '<td>'.$row["filename"].'</td>
						<td>'.$row["discription"].'</td>
						<td>'.$row["district"].'</td>
						<td> <form action="" method="post"><input type="submit" value="check" name='.$index.'></form> </td>';
				echo '<td> <form action="vidcompare.php" method="POST">
							<input type="hidden" name="first" value="viduploads/narcotics/'.$u.'/' . $dirArray[$index] . '">
							<input type="hidden" name="second" value="viduploads/narcotics/'.$u.'/generated/'.$dirArray[$index].'">
							<input type="hidden" name="third" value="viduploads/copymove/">
							<input type="hidden" name="filename" value=' . $dirArray[$index] . '>
							<input type="submit" value="Compare" name="Compare"></form> </td>
						<td> <form action="viddeletenarcotics.php" method="post">
							<input type="hidden" name="varname" value='.$dirArray[$index].'>
							<input type="hidden" name="second" value="viduploads/narcotics/'.$u.'/generated/'.$dirArray[$index].'">
							<input type="hidden" name="third" value="viduploads/copymove/">
							<input type="submit" value="delete" name="delete"></form> </td>
						<td><form enctype="multipart/form-data" method="POST" action="vidmailtonarcotics.php"> 
					<input type="hidden" name="subject" value="Evidence for crime"/> 
					<input type="hidden" name="message" value='.$row["discription"].'>
					<input type="hidden" name="categery" value="narcotics">
					<input type="hidden" name="filename" value="viduploads/narcotics/'.$u.'/'.$dirArray[$index].'"/>
					<input type="hidden" name="second" value="viduploads/narcotics/'.$u.'/generated/'.$dirArray[$index].'">
							<input type="hidden" name="third" value="viduploads/copymove/">
							<input type="hidden" name="fname" value=' . $dirArray[$index] . '>
							<input type="submit" name="button" value="Email" /> 
					</form></td>';
				echo '</tr>';
			}else{
				echo '<script type="text/javascript">alert("No video found in the categery narcotics")</script>';
			}
			}
		}
   echo '</tbody></table></section>';
?>