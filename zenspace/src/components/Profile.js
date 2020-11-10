import React from 'react';
 
const Profile = () => {
    return (
        <div>
        <title>ZenSpace - Today</title>
        <meta name="description" content="Meditation and Work/Life Guidance for Students" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charSet="UTF-8" />
        <div id="root">
          <div id="header">
            {/*This should be shown at the top for mobile and at the side for desktop*/}
            <h1>ZenSpace</h1>
            <img src = "img/Logo.png" style={{width: '200px', height: '200px'}} alt = "logo of zenspace"></img>
            <ul id="nav">
              <li><a href="home.html">Today</a></li>
              <li><a href="guides.html">Guides</a></li>
              <li><a href="journals.html">Journals</a></li>
              <li><a href="medals.html">Medals</a></li>
              <li>Profile</li>
              <li><a href="about.html">About Us</a></li>
            </ul>
          </div>
          <div id="main">
            <br />
            {/*Profile shows basic account information from the server as well as some settings.*/}
            <form className="panelwide" id="profile" action="/profilesave.php">
              <h2>Profile Details</h2>
              <label htmlFor="username">Username: </label><input type="text" id="username" name="username" defaultValue="User" required /><br />
              <label htmlFor="email">Email: </label><input type="text" id="email" name="email" defaultValue="something@gmail.com" required /><br />
              <label htmlFor="location">Location: </label><input type="text" id="location" name="location" defaultValue="United States" /><br />
              <input type="checkbox" id="privatetoggle" name="privatetoggle" /><label htmlFor="privatetoggle"> Make Private</label><br />
              <a href="javascript:alert('This would bring up another window for changing the password.');">Change Password</a><br />
              <br />
              <input type="checkbox" id="soundtoggle" name="soundtoggle" /><label htmlFor="soundtoggle"> Sound Effects</label><br />
              <input type="checkbox" id="tipstoggle" name="tipstoggle" /><label htmlFor="tipstoggle"> Motivational Tips</label><br />
              <input type="checkbox" id="notifstoggle" name="notifstoggle" /><label htmlFor="notifstoggle"> Notifications</label><br />
              <br />
              <input type="submit" defaultValue="Save" />
            </form>
            <br />
          </div>
          <div id="footer">
            <p>Bare in mind, to use ZenSpace to the fullest, JavaScript and CSS should always be enabled. By using ZenSpace, you agree to the usage of cookies.</p>
            <p>ZenSpace is Powered by React.</p>
          </div>
        </div>
      </div>
      
    );
}
 
export default Profile;
