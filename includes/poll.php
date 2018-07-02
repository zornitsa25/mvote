<?php
include "config.php";

$pollid = 1;
$userid = 11;
$request = $_POST['request'];

// Check vote
if($request == 1) {

	// Check user already votted
	$userpoll_sql = "SELECT * FROM poll_result WHERE pollid=".$pollid." and userid=".$userid;
	$userpollData = mysqli_query($con,$userpoll_sql);
	if(mysqli_num_rows($userpollData) == 0) { // Display poll options

		// Fetch poll question
		$pollData = mysqli_query($con,"SELECT * FROM poll WHERE id=".$pollid);
		while($pollrow = mysqli_fetch_assoc($pollData)) {
			$question = $pollrow['question'];

			// Poll question and options
			$polloptionData = mysqli_query($con,"SELECT * FROM poll_options WHERE pollid=".$pollid);
			$html = "<div>
				<p>".$question."</p>
			<ul>";
			while($polloptionrow = mysqli_fetch_assoc($polloptionData)) {
				$poll_option_id = $polloptionrow['id'];
				$pollname = $polloptionrow['name'];

				$html .= "<li>
						<input type='radio' class='poll-radio' value='".$poll_option_id."' name='poll'>".$pollname."
				</li>";
			}
			$html .= "</ul>";
		}				
		$html .= '
		<input type="button" value="Vote" class="button-vote" onclick="saveVote();">
		</div>';

	} else { // Display poll result

		// Count total votes
		$pollresultData = mysqli_query($con,"SELECT count(*) as allcount FROM poll_result WHERE pollid=".$pollid);
		$pollresultData_row = mysqli_fetch_assoc($pollresultData);
		$totalVotes = $pollresultData_row['allcount'];

		$colors_arr = array("#131212");

		// Question 
		$pollData = mysqli_query($con,"SELECT question FROM poll WHERE id=".$pollid);
		$rowpollData = mysqli_fetch_assoc($pollData);
		$question = $rowpollData['question'];

		// Fetch poll option votes
		$pollresult_SQL = "SELECT 
			po.id, po.name, COUNT(pr.poll_option_id) as votes 
			FROM poll_options po 
			LEFT JOIN poll_result pr ON po.id=pr.poll_option_id 
			WHERE po.pollid=".$pollid." 
			GROUP BY po.id";

		$pollresultData = mysqli_query($con,$pollresult_SQL);

		// Display poll option and percentage
		$html = "<div>
		<h2>Result</h2>
		<p>".$question."</p>
		<ul>";
		$count = 0;
		while($row = mysqli_fetch_assoc($pollresultData)) {
			$poll_option_id = $row['id'];
			$pollname = $row['name'];
			$poll_votes = $row['votes'];

			// Get color code
			$backgroundColor = $colors_arr[$count];
			$count++;
			if($count >= count($colors_arr)) {
				$count = 0;
			}

			// Find percentage
			$percentage = ($poll_votes / $totalVotes) * 100;
			
			$html .= "<li>
				<div class='poll-option'>
					<div class='poll-optionname' 
					style='background-color: ".$backgroundColor."' 
					>".$pollname."</div> 
					<div class='poll-votes' >".round($percentage,2) ." %</div>
				</div>
			</li>";

		}
		$html .= '</ul>	
		</div>';
	}
	
	echo $html;
	exit;
}

// Save vote
if($request == 2) {
	$poll_option_id = $_POST['poll'];

	$response = 0;

	// Check user vote
	$userpoll_sql = "SELECT * FROM poll_result WHERE pollid=".$pollid." and userid=".$userid;
	$userpollData = mysqli_query($con,$userpoll_sql);
	if(mysqli_num_rows($userpollData) == 0) {

		// Insert user vote
		mysqli_query($con,"INSERT INTO 
			poll_result(pollid,poll_option_id,userid) 
			VALUES(".$pollid.",".$poll_option_id.",".$userid.")");

		$response = 1;
	}

	echo $response;
	exit;
}