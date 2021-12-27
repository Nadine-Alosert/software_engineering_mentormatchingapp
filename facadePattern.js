class Account {
    constructor(accountID, email, username, password, userType) {
        this.accountID = accountID;
        this.email = email;
        this.id = username;
        this.password = password;
        this.userType = userType;
    }
    editAccountInfo(email, username, password) {
        this.email = email;
        this.username = username;
        this.password = password;
        return this; 
    }
    accessSettings() {

    }
    searchAccount(account) {

    }
    reportUser(account) {

    }
    Message() {

    }
    Mentorship() {

    }
}

class MenteeAccount extends Account {
    constructor(needs, tags) {
        super(this);
        this.needs = needs;
        this.tags = tags;
    } 
    viewMentorProfile(accountID) {

    }
    selectMentor(accountID) {

    }
    requestMentorship(accountID) {

    }
    RateProfile(accountID) {

    }
    giveFeedBack(accountID) {

    }
}

class MentorAccount extends Account {
    constructor(specialisation, fee) {
        super(this);
        this.specialisation = specialisation;
        this.fee = fee;
    }
    viewMentorProfile() {

    }
    respondToMenteeRequest() {

    }
};

function Profile() {
    this.displayPublicInfo = () => {

    }
    this.hideProfileInfo = () => {

    }
    this.addToProfile = () => {

    }
    this.removeFromProfile = () => {

    }
}

function Settings() {
    this.privacy = () => {

    }
    this.changeEmail = (email) => {
        
    }
    this.changePassword = (password) => {

    }
    this.changeLanguage = () => {

    }
    this.deleteAccount = () => {

    }
 }

function Mentorship() {
    var feeCharge;
    var duration;
    this.mentorshipDetails = (feeCharge, duration) => {

    }
 }

function ChatPlatform(message) {
    this.message = message;
    this.deleteMessage = () => {
        
    }
    this.sendAttachment = () => {
        
    }
    this.scheduleMeeting = () => {
        
    }
}

function Notification() {
    this.remindLater = () => {
        
    }
    this.closeNotification = () => {
        
    }
    this.readNotification = () => {
        
    }
}

class Admin {
    constructor(adminID, username, password) {
        this.adminID = adminID;
        this.username = username;
        this.password = password;
    }
    checkDatabase(accountID) {

    }
    removeUser(accountID) {

    }
    raiseAlert() {
        
    }
}