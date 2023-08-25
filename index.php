<?php
session_start();
require 'dbcon.php';

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Home</title>
		<link rel="stylesheet" href="style.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css"
		/>
		<!-- <link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
			crossorigin="anonymous"
		/> -->
	</head>
	<body>
		<!-- <div id="fullscreen-modal">
			<div id="login-container">
				<h2
					style="
						font-family: Impact, Haettenschweiler, 'Arial Narrow Bold',
							sans-serif;
					"
				>
					Central Bureau of Investigation
				</h2>
				<form action="index.html" class="was-validated">
					<label
						for="agent"
						type="text"
						class="form-label"
						style="
							font-family: 'Courier New', Courier, monospace;
							font-weight: bolder;
							color: #f1eaea;
						"
						>AGENT CODE:</label
					>
					<input
						type="text"
						name="username"
						placeholder="xxxxxxxxxx"
						style="
							background-color: #383a38;
							font-family: 'Courier New', Courier, monospace;
							color: #f1eaea;
							border-style: dashed;
						"
						required
					/><br />

					<label
						for="pass"
						type="password"
						class="form-label"
						style="
							font-family: 'Courier New', Courier, monospace;
							font-weight: bolder;
							color: #f1eaea;
						"
						>PASSCODE:</label
					>
					<input
						type="password"
						name="password"
						placeholder="xxxxxxxxxx"
						style="
							font-family: 'Courier New', Courier, monospace;
							color: #f5eeee;
							border-style: dashed;
							background-color: #373837;
						"
						required
					/><br />

					<div class="valid-feedback">Welcome, Agent!</div>
					<div class="invalid-feedback">Access Denied!</div>
					<div class="d-grid gap-3">
						<center>
							<button
								onclick="enterFullscreen()"
								type="submit"
								class="btn btn-dark"
								style="font-family: 'Courier New', Courier, monospace"
							>
								<a href="#">Enter</a>
							</button>
						</center>
					</div>
				</form>
			</div>
		</div> -->

		<div class="topbar">
			<h1>Central Bureau of Investigation</h1>
		</div>

		<nav>
			<ul>
				<li
					class="tablink"
					onclick="openPage('announcements', this, '#bdbdbd')"
				>
					Announcements
				</li>
				<li
					class="tablink"
					onclick="openPage('openCases', this, '#bdbdbd')"
					
				>
					Open Cases
				</li>
				<li class="tablink" onclick="openPage('closedCases', this, '#bdbdbd')">
					Closed Cases
				</li>
				<li class="tablink" onclick="openPage('newEntry', this, '#bdbdbd')" id="defaultOpen">
					Manage Cases
				</li>
			</ul>
		</nav>

		<div id="announcements" class="tabcontent">
			<section>
				<div class="div2 drag">
					<div
						class="div2a cases-tablink"
						onmouseover="cases(event, 'news1')"
						tabindex="0"
					></div>
					<div
						class="div2a cases-tablink"
						onmouseover="cases(event, 'news2')"
						tabindex="0"
					></div>
					<div
						class="div2a cases-tablink"
						onmouseover="cases(event, 'news3')"
						tabindex="0"
					></div>
					<div
						class="div2a cases-tablink"
						onmouseover="cases(event, 'news4')"
						tabindex="0"
					></div>
					<div
						class="div2a cases-tablink"
						onmouseover="cases(event, 'news5')"
						tabindex="0"
					></div>
					<div
						class="div2a cases-tablink"
						onmouseover="cases(event, 'news6')"
						tabindex="0"
					></div>
				</div>
			</section>
			<div class="div3">
				<div id="news1" class="cases">
					<p>World News / Trending</p>
					<h1>Announcement 1</h1>
				</div>
				<div id="news2" class="cases">
					<p>World News / Trending</p>
					<h1>Announcement 2</h1>
				</div>
				<div id="news3" class="cases">
					<p>World News / Trending</p>
					<h1>Announcement 3</h1>
				</div>
				<div id="news4" class="cases">
					<p>London / Current</p>
					<h1>Announcement 4</h1>
				</div>
				<div id="news5" class="cases">
					<p>London / Current</p>
					<h1>Announcement 5</h1>
				</div>
				<div id="news6" class="cases">
					<p>London / Current</p>
					<h1>Announcement 6</h1>
				</div>
			</div>
		</div>

		<div id="openCases" class="tabcontent">
			<section>
				<div class="div1">
					<div
						class="div1a case-tablink"
						onmouseover="casesType(event, 'openInternal'),cases(event, 'o-internal')"
						tabindex="1"
					>
						<h3>Internal</h3>
						<img
							src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQS1F3WIZDtBUyY03b-fyBA7MGTI2nxUcFtjMifqdE-aBCFS8IQSttSdepRhdTJqI5wA8c&usqp=CAU"
							class="sidetabimages"
							alt="officers"
						/>
					</div>
					<div
						class="div1a case-tablink"
						onmouseover="casesType(event, 'openExternal'),cases(event, 'o-external')"
						tabindex="1"
					>
						<h3>External</h3>
						<img
							class="sidetabimages"
							src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2016/05/11/14/pp-london-people-bridge-istock.jpg"
							alt="private"
						/>
					</div>
				</div>
				<div class="div2 drag case-tabcontent" id="openInternal">
					<div
						class="div2a cases-tablink"
						onmouseover="cases(event, 'o-i-entry1')"
						tabindex="0"
					></div>
					<div
						class="div2a cases-tablink"
						onmouseover="cases(event, 'o-i-entry2')"
						tabindex="0"
					></div>
					<div
						class="div2a cases-tablink"
						onmouseover="cases(event, 'o-i-entry3')"
						tabindex="0"
					></div>
				</div>

				<div class="div2 case-tabcontent" id="openExternal">
					<div
						class="div2a cases-tablink"
						onmouseover="cases(event, 'o-e-entry1')"
						tabindex="0"
					></div>
					<div
						class="div2a cases-tablink"
						onmouseover="cases(event, 'o-e-entry2')"
						tabindex="0"
					></div>
				</div>
			</section>
			<div class="div3">
				<div id="o-internal" class="cases">
					<p>Open Cases /</p>
					<h1>Internal</h1>
				</div>
				<div id="o-external" class="cases">
					<p>Open Cases /</p>
					<h1>External</h1>
				</div>
				<div id="o-i-entry1" class="cases">
					<p>Open Cases / Internal</p>
					<h1>Entry 1</h1>
				</div>
				<div id="o-i-entry2" class="cases">
					<p>Open Cases / Internal</p>
					<h1>Entry 2</h1>
				</div>
				<div id="o-i-entry3" class="cases">
					<p>Open Cases / Internal</p>
					<h1>Entry 3</h1>
				</div>
				<div id="o-i-entry4" class="cases">
					<p>Open Cases / Internal</p>
					<h1>Entry 3</h1>
				</div>
				<div id="o-e-entry1" class="cases">
					<p>Open Cases / External</p>
					<h1>Entry 1</h1>
				</div>
				<div id="o-e-entry2" class="cases">
					<p>Open Cases / External</p>
					<h1>Entry 2</h1>
				</div>
			</div>
		</div>

		<div id="closedCases" class="tabcontent">
			
			<section>
				<div class="div1">
					<div
						class="div1a case-tablink"
						onmouseover="casesType(event, 'closedInternal'),cases(event, 'c-internal')"
						tabindex="1"
					>
						<h3>Internal</h3>
						<img
							src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQS1F3WIZDtBUyY03b-fyBA7MGTI2nxUcFtjMifqdE-aBCFS8IQSttSdepRhdTJqI5wA8c&usqp=CAU"
							class="sidetabimages"
							alt="officers"
						/>
					</div>
					<div
						class="div1a case-tablink"
						onmouseover="casesType(event, 'closedExternal'),cases(event, 'c-external')"
						tabindex="1"
					>
						<h3>External</h3>
						<img
							class="sidetabimages"
							src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2016/05/11/14/pp-london-people-bridge-istock.jpg"
							alt="private"
						/>
					</div>
				</div>
				<div class="div2 drag case-tabcontent" id="closedInternal">
					<div
						class="div2a cases-tablink"
						onmouseover="cases(event, 'c-i-entry1')"
						tabindex="0"
					></div>
					<div
						class="div2a cases-tablink"
						onmouseover="cases(event, 'c-i-entry2')"
						tabindex="0"
					></div>
				</div>

				<div class="div2 case-tabcontent" id="closedExternal">
					<div
						class="div2a cases-tablink"
						onmouseover="cases(event, 'c-e-entry1')"
						tabindex="0"
					></div>
				</div>
			</section>

			<div class="div3">
				<div id="c-internal" class="cases">
					<p>Closed Cases /</p>
					<h1>Internal</h1>
				</div>
				<div id="c-external" class="cases">
					<p>Closed Cases /</p>
					<h1>External</h1>
				</div>
				<div id="c-i-entry1" class="cases">
					<p>Closed Cases / Internal</p>
					<h1>Entry 1</h1>
				</div>
				<div id="c-i-entry2" class="cases">
					<p>Closed Cases / Internal</p>
					<h1>Entry 2</h1>
				</div>
				<div id="c-i-entry3" class="cases">
					<p>Closed Cases / Internal</p>
					<h1>Entry 3</h1>
				</div>
				<div id="c-e-entry1" class="cases">
					<p>Closed Cases / External</p>
					<h1>Entry 1</h1>
				</div>
			</div>
		</div>

		<div id="newEntry" class="tabcontent">
		<section>
		<div class="managecasetype">
			<ul>
				<li
					class="casetypetablink"
					onclick="manageType('openInternalCase', this, '#bdbdbd')"
					id="defaultType">
					Open Internal Cases
				</li>
				<li
					class="casetypetablink"
					onclick="manageType('openExternalCase', this, '#bdbdbd')"
				>
					Open External Cases
				</li>
				<li class="casetypetablink" onclick="manageType('closedInternalCase', this, '#bdbdbd')">
					Closed Internal Cases
				</li>
				<li class="casetypetablink" onclick="manageType('closedExternalCase', this, '#bdbdbd')" >
					Closed External Cases
				</li>
			</ul>
</div>
				
<div class="drag casetypetabcontent" id="openInternalCase">
				<div class="entries">
			<div class="card-body">
				<table class="table table-bordered table-striped">  
					<thead>
						<tr>
							<th>Action</th>
							<th>Case Number</th>
							<th>Evidence</th>
							<th>Appendix</th>
							<th>Item Name</th>
							<th>Date Custody</th>
							<th>State Conditions</th>
							<th>Forensic Officer</th>
							<th>Arresting Officer</th>
							<th>Custodian</th>
							<th>Branch Number</th>
							<th>Additional Description</th>
							<th>Forensic DNA Analysis Result</th>
						</tr>
					</thead>
					<tbody>
						<?php
								$query = "SELECT * FROM ci_forms";
								$query_run = mysqli_query($con, $query);

								if(mysqli_num_rows($query_run) > 0)
								{
									foreach($query_run as $ci_forms)
									{
										
										?>
										<tr>
											<td>
												<!--<a href="case-view.php.?id=<?= $ci_forms['id'] ?>" class="btn btn-info btn-sm">View</a>-->
												<a href="case-edit.php?id=<?= $ci_forms['id'] ?>" class="btn btn-success btn-sm">Edit </a>                            
												<form action="code.php" method="POST" class="d-inline">
													<button type = "submit" name="delete_case" value="<?=$ci_forms['id'];?>" class="btn btn-danger btn-sm" onclick="myFunction()">Delete</button>
													<p id="demo"></p>
												</form>
											</td>                       
											<td><?= $ci_forms['id'];?></td>
											<td><?= $ci_forms['evidence'];?></td>
											<td><?= $ci_forms['appendix'];?></td>
											<td><?= $ci_forms['item'];?></td>
											<td><?= $ci_forms['dcustody'];?></td>
											<td><?= $ci_forms['scustody'];?></td>
											<td><?= $ci_forms['fofficer'];?></td>
											<td><?= $ci_forms['aofficer'];?></td>
											<td><?= $ci_forms['custodian'];?></td>
											<td><?= $ci_forms['branch'];?></td>
											<td><?= $ci_forms['description'];?></td>
											<td><?= $ci_forms['dnaanalysis'];?></td>     
										</tr>
										<?php

									}

								}
								else
								{
									echo "<h5> No Record Found </h5>";                       
								}
						?>
						
						</tbody>
					</div>
				</table>
			</div>				
		</div>

		<div class="drag casetypetabcontent" id="openExternalCase">
				<div class="entries">
			<div class="card-body">
				<table class="table table-bordered table-striped">  
					<thead>
						<tr>
							<th>Action</th>
							<th>Case Number</th>
							<th>Evidence</th>
							<th>Appendix</th>
							<th>Item Name</th>
							<th>Date Custody</th>
							<th>State Conditions</th>
							<th>Forensic Officer</th>
							<th>Arresting Officer</th>
							<th>Custodian</th>
							<th>Branch Number</th>
							<th>Additional Description</th>
							<th>Forensic DNA Analysis Result</th>
						</tr>
					</thead>
					<tbody>
						<?php
								$query = "SELECT * FROM ci_forms";
								$query_run = mysqli_query($con, $query);

								if(mysqli_num_rows($query_run) > 0)
								{
									foreach($query_run as $ci_forms)
									{
										
										?>
										<tr>
											<td>
												<!--<a href="case-view.php.?id=<?= $ci_forms['id'] ?>" class="btn btn-info btn-sm">View</a>-->
												<a href="case-edit.php?id=<?= $ci_forms['id'] ?>" class="btn btn-success btn-sm">Edit </a>                            
												<form action="code.php" method="POST" class="d-inline">
													<button type = "submit" name="delete_case" value="<?=$ci_forms['id'];?>" class="btn btn-danger btn-sm" onclick="myFunction()">Delete</button>
													<p id="demo"></p>
												</form>
											</td>                       
											<td><?= $ci_forms['id'];?></td>
											<td><?= $ci_forms['evidence'];?></td>
											<td><?= $ci_forms['appendix'];?></td>
											<td><?= $ci_forms['itemname'];?></td>
											<td><?= $ci_forms['dcustody'];?></td>
											<td><?= $ci_forms['scustody'];?></td>
											<td><?= $ci_forms['fofficer'];?></td>
											<td><?= $ci_forms['aofficer'];?></td>
											<td><?= $ci_forms['custodian'];?></td>
											<td><?= $ci_forms['branch'];?></td>
											<td><?= $ci_forms['description'];?></td>
											<td><?= $ci_forms['dnaanalysis'];?></td>     
										</tr>
										<?php

									}

								}
								else
								{
									echo "<h5> No Record Found </h5>";                       
								}
						?>
						
						</tbody>
					</div>
				</table>
			</div>				
		</div>

		<div class="drag casetypetabcontent" id="closedInternalCase">
				<div class="entries">
			<div class="card-body">
				<table class="table table-bordered table-striped">  
					<thead>
						<tr>
							<th>Action</th>
							<th>Case Number</th>
							<th>Evidence</th>
							<th>Appendix</th>
							<th>Item Name</th>
							<th>Date Custody</th>
							<th>State Conditions</th>
							<th>Forensic Officer</th>
							<th>Arresting Officer</th>
							<th>Custodian</th>
							<th>Branch Number</th>
							<th>Additional Description</th>
							<th>Forensic DNA Analysis Result</th>
						</tr>
					</thead>
					<tbody>
						<?php
								$query = "SELECT * FROM ci_forms";
								$query_run = mysqli_query($con, $query);

								if(mysqli_num_rows($query_run) > 0)
								{
									foreach($query_run as $ci_forms)
									{
										
										?>
										<tr>
											<td>
												<!--<a href="case-view.php.?id=<?= $ci_forms['id'] ?>" class="btn btn-info btn-sm">View</a>-->
												<a href="case-edit.php?id=<?= $ci_forms['id'] ?>" class="btn btn-success btn-sm">Edit </a>                            
												<form action="code.php" method="POST" class="d-inline">
													<button type = "submit" name="delete_case" value="<?=$ci_forms['id'];?>" class="btn btn-danger btn-sm" onclick="myFunction()">Delete</button>
													<p id="demo"></p>
												</form>
											</td>                       
											<td><?= $ci_forms['id'];?></td>
											<td><?= $ci_forms['evidence'];?></td>
											<td><?= $ci_forms['appendix'];?></td>
											<td><?= $ci_forms['itemname'];?></td>
											<td><?= $ci_forms['dcustody'];?></td>
											<td><?= $ci_forms['scustody'];?></td>
											<td><?= $ci_forms['fofficer'];?></td>
											<td><?= $ci_forms['aofficer'];?></td>
											<td><?= $ci_forms['custodian'];?></td>
											<td><?= $ci_forms['branch'];?></td>
											<td><?= $ci_forms['description'];?></td>
											<td><?= $ci_forms['dnaanalysis'];?></td>     
										</tr>
										<?php

									}

								}
								else
								{
									echo "<h5> No Record Found </h5>";                       
								}
						?>
						
						</tbody>
					</div>
				</table>
			</div>				
		</div>

		<div class="drag casetypetabcontent" id="closedExternalCase">
				<div class="entries">
			<div class="card-body">
				<table class="table table-bordered table-striped">  
					<thead>
						<tr>
							<th>Action</th>
							<th>Case Number</th>
							<th>Evidence</th>
							<th>Appendix</th>
							<th>Item Name</th>
							<th>Date Custody</th>
							<th>State Conditions</th>
							<th>Forensic Officer</th>
							<th>Arresting Officer</th>
							<th>Custodian</th>
							<th>Branch Number</th>
							<th>Additional Description</th>
							<th>Forensic DNA Analysis Result</th>
						</tr>
					</thead>
					<tbody>
						<?php
								$query = "SELECT * FROM ci_forms";
								$query_run = mysqli_query($con, $query);

								if(mysqli_num_rows($query_run) > 0)
								{
									foreach($query_run as $ci_forms)
									{
										
										?>
										<tr>
											<td>												
												<a href="case-edit.php?id=<?= $ci_forms['id'] ?>" class="btn btn-success btn-sm">Edit </a>                            
												<form action="code.php" method="POST" class="d-inline">
													<button type = "submit" name="delete_case" value="<?=$ci_forms['id'];?>" class="btn btn-danger btn-sm" onclick="myFunction()">Delete</button>
													<p id="demo"></p>
												</form>
											</td>                       
											<td><?= $ci_forms['id'];?></td>
											<td><?= $ci_forms['evidence'];?></td>
											<td><?= $ci_forms['appendix'];?></td>
											<td><?= $ci_forms['itemname'];?></td>
											<td><?= $ci_forms['dcustody'];?></td>
											<td><?= $ci_forms['scustody'];?></td>
											<td><?= $ci_forms['fofficer'];?></td>
											<td><?= $ci_forms['aofficer'];?></td>
											<td><?= $ci_forms['custodian'];?></td>
											<td><?= $ci_forms['branch'];?></td>
											<td><?= $ci_forms['description'];?></td>
											<td><?= $ci_forms['dnaanalysis'];?></td>     
										</tr>
										<?php

									}

								}
								else
								{
									echo "<h5> No Record Found </h5>";                       
								}
						?>
						
						</tbody>
					</div>
				</table>
			</div>				
		</div>

	</div>

<script>
function myFunction() {
var txt;
if (confirm("Are you sure you want to Delete?")) {

} 
document.getElementById("demo").innerHTML = txt;
}
</script>

			</section>

			<div class="div3">
				<div class="new-export">
					<a href="case-create.php"><button href="case-create.php" button type="button" id="button-add" class="btn btn-info btn-sm">New Case</button></a>   
					<a href="export.php"><button button type="button" id="button-export" class="btn btn-success btn-sm">Export <i class = "fa-solid fa-file-export"></i></button></a>                    
				</div>
			</div>
		</div>


		<footer>
			<div class="footeritem">
				<button>Esc</button>
				<h5>Logout</h5>
			</div>

			<div class="footeritem">
				<button>Enter</button>
				<h5>Select</h5>
			</div>

			<div class="footeritem">
				<button>Inbox</button>
				<h5>Inbox</h5>
			</div>

			<div class="footeritem">
				<h3>Profile</h3>
			</div>
		</footer>

		<script type="text/javascript" src="/js/jquery.mousewheel.min.js"></script>
		<script src="script.js"></script>
		<!-- <script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
			crossorigin="anonymous"
		></script> -->
	</body>
</html>
