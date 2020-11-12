import React, { Component, useState } from 'react';
import { instanceOf } from "prop-types";
import { withCookies, Cookies } from "react-cookie";

class Today extends Component {
   
    render() {
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
        <li>Today</li>
        <li><a href="guides.html">Guides</a></li>
        <li><a href="journals.html">Journals</a></li>
        <li><a href="medals.html">Medals</a></li>
        <li><a href="profile.html">Profile</a></li>
        <li><a href="about.html">About Us</a></li>
      </ul>
    </div>
    <div id="main">
      <br />
      {/*Each feature is displayed in panels, with two columns for desktop and one column for mobile*/}
      <form className="panelwide" id="search" action="/search.php">
        <input type="text" id="searchtext" name="searchtext" size={30} placeholder="Search Guides, Tasks, Journals, etc." required />
        <input type="submit" defaultValue="Search" />
      </form>
      <br />
      <div className="panel" id="controls">
        <div id="focusmode">
          <a href="javascript:alert('This'll bring up controls and enable some functions for focusing.');">Focus Mode</a>
        </div>
        <div id="user">
          <a href="javascript:alert('This'll bring up quick actions related to user preferences.');">User's Name</a>
        </div>
      </div>
      <br />
      <div className="panel" id="greeting">
        <h2>Good Morning, User!</h2>
        <div id="checkin">
          Would you like to talk about your day today?
          <a href="javascript:alert('This would make a quick prompt for a new journal for today.');">Check-In</a>
        </div>
      </div>
      <br />
      <div className="panel" id="tasks">
        <h2>Today's Tasks</h2>
        <div id="taskslist">
          <ul>
            <li><input type="checkbox" id="task1" /><label htmlFor="task1"> Task 1</label> - <a href="javascript:alert('This'll edit the task, of course.');">Edit</a></li>
            <li><input type="checkbox" id="task2" /><label htmlFor="task2"> Task 2</label> - <a href="javascript:alert('This'll edit the task, of course.');">Edit</a></li>
            <li><input type="checkbox" id="task3" /><label htmlFor="task3"> Task 3</label> - <a href="javascript:alert('This'll edit the task, of course.');">Edit</a></li>
          </ul>
        </div>
        <form id="tasksadd" action="/addtask.php">
          <input type="text" id="searchtext" name="searchtext" placeholder="Task Name" required />
          <input type="submit" defaultValue="Add New Task" />
        </form>
      </div>
      <br />
      <div className="panel" id="dailyhelp">
        <h2>Tip of the Day</h2>
        <div id="dailyhelptip">
          <p>“Relax, let your worries go, remember to breathe in”</p>
          <p>“Live in the moment, don’t stress on the past, move forward”</p>
          <p>“Do not stress over events that have happened, because you will stress over them before they happen and when they happen”</p>
        </div>
        <div id="dailyhelpimage">
        <img src="img/quote1.jpg" style={{width: '200px', height: '200px'}} alt="Life has no limitations except the ones you make" />
        </div>
      </div>
      <br />
    </div>
    <div id="footer">
      <p>Bare in mind, to use ZenSpace to the fullest, JavaScript and CSS should always be enabled. By using ZenSpace, you agree to the usage of cookies.</p>
      <p>ZenSpace is Powered by React.</p>
    </div>
  </div>
</div>
        )
    }
}
export default Today;