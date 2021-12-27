<?php
$pageTitle="Chat";
  ob_start() ?>

<!-- Page Content -->
<div class="Chatee content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 mb-4">
				<div class="chat-window">
				<!-- Chat left -->
				<div class="chat-cont-left">
					<form class="chat-search d-flex align-items-center">
						<div class="input-group">
							<div class="input-group-end">
									<i class="fa fa-search"></i>
							</div>
							<input type="text" class="form-control" placeholder="Search">
						</div>
					</form>
					<div class="chat-header">
						<span>Chats</span>
					</div>
					<div class="chat-users-list">
						<a href="" class="media">
							<div class="media-img-wrap">
								<div class="avatar avatar-away">
									<img src="templates/assets/profile.png" alt="User Image" width ="50px">
								</div>
							</div>
							<div class="media-body">
								<div>
									<div class="user-name">Toby Flemingy</div>
									<div class="user-last-chat">Hey, How are you?</div>
								</div>
								<div>
									<div class="last-chat-time block">2 min</div>
									<div class="badge badge-success badge-pill fill-blue">1</div>
								</div>
							</div>
						</a>
						<a href="" class="media">
							<div class="media-img-wrap">
								<div class="avatar avatar-away">
									<img src="templates/assets/profile.png" alt="User Image" width ="50px">
								</div>
							</div>
							<div class="media-body">
								<div>
									<div class="user-name">Samantha Fletcher</div>
									<div class="user-last-chat">When ar you free?</div>
								</div>
								<div>
									<div class="last-chat-time block">30 min</div>
								</div>
							</div>
						</a>
						<a href="" class="media">
							<div class="media-img-wrap">
								<div class="avatar avatar-away">
									<img src="templates/assets/profile.png" alt="User Image" width ="50px">
								</div>
							</div>
							<div class="media-body">
								<div>
									<div class="user-name">Andrew Holden</div>
									<div class="user-last-chat">That is a great design!!</div>
								</div>
								<div>
									<div class="last-chat-time block">12:04pm</div>
									<div class="badge badge-success badge-pill fill-blue">3</div>
								</div>
							</div>
						</a>
						<a href="" class="media">
							<div class="media-img-wrap">
								<div class="avatar avatar-away">
									<img src="templates/assets/profile.png" alt="User Image" width ="50px">
								</div>
							</div>
							<div class="media-body">
								<div>
									<div class="user-name">Georgia Thornton</div>
									<div class="user-last-chat">Tell me more about yourself.</div>
								</div>
								<div>
									<div class="last-chat-time block">Thursday</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<!-- /Chat left -->
				<!-- Chat Right -->
				<div class="chat-cont-right">
					<div class="chat-header">
						<div class="media-header-img">
							<img src="templates/assets/profile.png" alt="image" width="30px" height="30px">
						</div>
						<div class="media-body">
								<div class="user-name">Toby Flemingly</div>
						</div>
						<div class="header-icon">
							<i class="fa fa-ellipsis-v"></i>
						</div>
					</div>
					<div class="message-page">
						<div class="message-index">
							<div class="messages">
								<div class="msg-page">
									<div class="recived-chat">
										<div class="recived-chat-img">
											<img src="templates/assets/profile.png" alt="image" width="50px">
										</div>
										<div class="recived-msg">
											<div class="recived-msg-inbox">
												<p>Hi..!! this is messsage from Maxwell what are you doing...</p>
												<span class="time">11:01 PM | October 11</span>
											</div>
										</div>
									</div>
									<div class="outgoing-chat">

											<div class="outgoing-chat-msg">
												<p>Hii !! I'm fine  what about you?</p>
												<span class="time">11:03 PM | October 11</span>
											</div>

										<div class="outgoing-chat-img">
											<img src="templates/assets/profile.png" alt="image" width="50px">
										</div>
									</div>
									<div class="recived-chat">
										<div class="recived-chat-img">
											<img src="templates/assets/profile.png" alt="image" width="50px">
										</div>
										<div class="recived-msg">
											<div class="recived-msg-inbox">
												<p>Amazing, thank you for asking.So what attacted to get into the field of UX design?</p>
												<span class="time">11:07 PM | October 11</span>
											</div>
										</div>
									</div>
									<div class="outgoing-chat">

											<div class="outgoing-chat-msg">
												<p>Well, I like the idea of creating a pleasant and inviting atmosphere that encourages users to take specific actions.</p>
												<span class="time">11:10 PM | October 11</span>
											</div>

										<div class="outgoing-chat-img">
											<img src="templates/assets/profile.png" alt="image" width="50px">
										</div>
									</div>
								</div>
							</div>
						</div>

					
						<div class="msg-bottom">
							<div class="input-group-prepend">
									<i class="fa fa-paperclip"></i>
								</div>
							</div>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="write message.....">
									<div class="input-group-append">
										<button type="button" class="btn msg-send-btn">Send</button> 
									</div>
								</div>
						</div>		
					</div>
				</div>
				<!-- Chat Right -->
			</div>
		</div>
	</div>
</div>

<?php

$content = ob_get_clean();

include "templates/layout.html.php";

?>
