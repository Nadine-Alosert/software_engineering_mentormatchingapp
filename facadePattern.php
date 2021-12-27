<?php
class Account
{
    protected $account;

    public function __construct(Account $account) 
    {
        $this->account = $account;
    }

    public function Profile()
    {
        $this->account->displayPublicInfo();
        $this->account->hideProfileInfo(String email);
        $this->account->addToProfile(String password);
        $this->account->removeFromProfile();
    }

    public function Settings()
    {
        $this->account->privacy();
        $this->account->changeEmail(String email);
        $this->account->changePassword(String password);
        $this->account->changeLanguage();
        $this->account->deleteAccount();
    }

    public function Mentorship()
    {
        $this->account->mentorshipDetails(double feeCharge, double duration);
    }

    public function ChatPlatform()
    {
        $this->account->sendMessage(String message);
        $this->account->deleteMessage();
        $this->account->sendAttachment();
        $this->account->scheduleMeeting();
    }

    public function Notification()
    {
        $this->account->remindLater();
        $this->account->closeNotification();
        $this->account->readNotification();
    }


}


class MenteeAccount extends Account 
{
    public function __construct(Array needs, Array tags) 
    {
        parent::__construct();
        $this->account = $account;
        $this->needs = $needs;
        $this->tags = $tags;
    }

    function viewMenteeProfile() {

    }

    function respondToMenteeRequest() {

    }
}


class MentorAccount extends Account 
{
    public function __construct(String specialisation, Double fee, Int Rating) 
    {
        parent::__construct();
        $this->specialisation = $specialisation;
        $this->fee = $fee;
        $this->Rating = $Rating;
    }

    function viewMentorProfile() {

    }

    function selectMentor() {

    }

    function requestMentorship() {

    }

    function rateProfile() {

    }

    function giveFeeback() {

    }


}

?>
